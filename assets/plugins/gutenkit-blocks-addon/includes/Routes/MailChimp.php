<?php

namespace Gutenkit\Routes;

defined('ABSPATH') || exit;

class MailChimp
{
	public function __construct()
	{
		add_action('rest_api_init', array($this, 'register_routes'));
	}

	public function register_routes()
	{
		register_rest_route(
			'gutenkit/v1',
			'/mailchimp/get/lists',
			array(
				'methods' => 'GET',
				'callback' => array($this, 'gutenkit_mailchimp_callback'),
				'permission_callback' => array($this, 'editor_permission_check'),
			)
		);

		register_rest_route(
			'gutenkit/v1',
			'/mailchimp/post/form',
			array(
				'methods' => 'POST',
				'callback' => array($this, 'gutenkit_mailchimp_post_callback'),
				// Public: this is the frontend subscription form submission.
				'permission_callback' => '__return_true',
			)
		);

		register_rest_route(
			'gutenkit/v1',
			'/mailchimp/get/interests',
			array(
				'methods' => 'GET',
				'callback' => array($this, 'gutenkit_mailchimp_get_interests_callback'),
				'permission_callback' => array($this, 'editor_permission_check'),
				'args' => array(
					'list_id' => array(
						'required' => true,
						'type' => 'string',
						'sanitize_callback' => 'sanitize_text_field',
						'description' => __('The Mailchimp list ID', 'gutenkit-blocks-addon'),
					),
				),
			)
		);
	}

	/**
	 * Audience metadata is fetched with the site's stored Mailchimp API key, so it is
	 * exposed only to users trusted to configure site-wide content.
	 *
	 * 'edit_others_posts' (Editor and above) rather than 'edit_posts': the latter
	 * includes Contributors, a role commonly granted to guest authors who have no
	 * business enumerating the site owner's Mailchimp audiences. 'manage_options'
	 * would be tighter still, but would break this block's inspector for the
	 * Editors who actually build pages with it.
	 */
	public function editor_permission_check()
	{
		return current_user_can('edit_others_posts');
	}

	public function gutenkit_mailchimp_get_interests_callback($param){

		// Retrieve form list id
		$list_id = $param['list_id'];
		if(empty($list_id)) {
			return;
		}

		$api_key = get_option('gutenkit_settings_list');

		$api_value = !empty($api_key) ? $api_key['mailchimp']['fields']['api_key']['value'] : '';
		$server_parts = explode('-', $api_value);

		if(!isset($server_parts[1])) {
			return;
		}

		$body = $param->get_body();

		$request = json_decode($body, true);

		$server_prefix = $server_parts[1];
		//construct the API URL
		$url = 'https://' . $server_prefix . '.api.mailchimp.com/3.0/lists/'.$list_id.'/interest-categories';
		$response = wp_remote_get($url, [
			'headers' => [
				'Authorization' => 'apikey ' . $api_value,
				'Content-Type' => 'application/json; charset=utf-8',
			],
		]);
		$resBody = json_decode($response['body'], true);
		$categories = isset($resBody['categories']) ? $resBody['categories'] : [];
		$results = [];
		if (!empty($categories)) {
			foreach ($categories as $category) {

				$categoryId = $category['id'];

				//call the API to get the interests list of this category
				$interestUrl = 'https://' . $server_prefix . '.api.mailchimp.com/3.0/lists/'.$list_id.'/interest-categories/'.$categoryId.'/interests';
				$response = wp_remote_get($interestUrl, [
					'headers' => [
						'Authorization' => 'apikey ' . $api_value,
						'Content-Type' => 'application/json; charset=utf-8',
					],
				]);
				$interestResBody = json_decode($response['body'], true);
				$interests = isset($interestResBody['interests']) ? $interestResBody['interests'] : [];



				// Build trimmed category info with interests
				$results[] = [
					'list_id'       => $category['list_id'],
					'id'            => $categoryId,
					'title'         => $category['title'],
					'display_order' => $category['display_order'],
					'type'          => $category['type'],
					// Only the keys the inspector actually renders. subscriber_count is
					// audience data the editor never reads, and it would otherwise be
					// persisted into saved post content via the block attribute.
					'interests'     => !empty($interests) ? array_map(function ($i) {
						return [
							'id'    => $i['id'],
							'name'  => $i['name'],
						];
					}, $interests) : []
				];




			}
		}

		return $results;


	}


	public function gutenkit_mailchimp_callback()
	{
		$options = [['value' => '', 'label' => __('Select a Form', 'gutenkit-blocks-addon')]];
		$form_fields = [];
		$api_key = get_option('gutenkit_settings_list');
		$api_value = !empty($api_key) ? $api_key['mailchimp']['fields']['api_key']['value'] : '';
		$server_parts = explode('-', $api_value);

		if (!isset($server_parts[1])) {
			return $options;
		}
		$server_prefix = $server_parts[1];
		$url = 'https://' . $server_prefix . '.api.mailchimp.com/3.0/lists';
		$response = wp_remote_get($url, [
			'headers' => [
				'Authorization' => 'apikey ' . $api_value,
				'Content-Type' => 'application/json; charset=utf-8',
			],
		]);


		if (is_array($response) && !is_wp_error($response)) {
			$body = json_decode($response['body'], true);

			$listed = isset($body['lists']) && is_array($body['lists']) ? $body['lists'] : [];

			// An account with no audiences returns an empty list; don't index into it.
			if (!empty($listed[0]['id'])) {
				$form_fields = $this->gutenkit_mailchimp_get_form_fields($listed[0]['id'], $server_prefix, $api_value);
			}

			if (is_array($listed) && sizeof($listed) > 0) {
				foreach ($listed as $v) {
					$options[] = [
						'value' => $v['id'],
						'label' => $v['name']
					];
				}
			}
		}


		return [
			"options" => $options,
			"form_fields" => $form_fields
		];
	}


	/**
	 * Throttle submissions per IP. This route is intentionally public, so this is
	 * the main thing standing between the site's Mailchimp account and a bot that
	 * wants to pump arbitrary addresses into the audience.
	 *
	 * Uses REMOTE_ADDR only: X-Forwarded-For is caller-controlled and would let an
	 * attacker sidestep the limit by rotating the header.
	 */
	protected function is_rate_limited()
	{
		$limit  = (int) apply_filters('gutenkit_mailchimp_submission_limit', 10);
		$window = (int) apply_filters('gutenkit_mailchimp_submission_window', 10 * MINUTE_IN_SECONDS);

		if ($limit <= 0) {
			return false; // Filtered to 0 disables throttling.
		}

		$ip = isset($_SERVER['REMOTE_ADDR']) ? sanitize_text_field(wp_unslash($_SERVER['REMOTE_ADDR'])) : '';
		if (empty($ip)) {
			return false;
		}

		$key   = 'gkit_mc_rl_' . md5($ip);
		$count = (int) get_transient($key);

		if ($count >= $limit) {
			return true;
		}

		set_transient($key, $count + 1, $window);
		return false;
	}

	/**
	 * Mailchimp error responses are echoed back to the browser so the form can show
	 * "already a list member" and per-field messages. Pass through only the keys the
	 * frontend actually reads, so nothing else from the API surfaces publicly.
	 */
	protected function safe_error_response($response_data)
	{
		if (!is_array($response_data)) {
			return esc_html__('There was an error. Please try again.', 'gutenkit-blocks-addon');
		}

		$safe = array();
		foreach (array('title', 'detail', 'status') as $key) {
			if (isset($response_data[$key]) && is_scalar($response_data[$key])) {
				$safe[$key] = $response_data[$key];
			}
		}

		if (!empty($response_data['errors']) && is_array($response_data['errors'])) {
			$safe['errors'] = array();
			foreach ($response_data['errors'] as $error) {
				if (isset($error['message']) && is_scalar($error['message'])) {
					$safe['errors'][] = array(
						'field'   => isset($error['field']) && is_scalar($error['field']) ? $error['field'] : '',
						'message' => $error['message'],
					);
				}
			}
		}

		return $safe;
	}

	public function gutenkit_mailchimp_post_callback($param)
	{
		$return = ['success' => [], 'error' => []];

		// Throttle first, before touching the option or calling out to Mailchimp.
		if ($this->is_rate_limited()) {
			$return['error'] = esc_html__('Too many requests. Please try again later.', 'gutenkit-blocks-addon');
			return new \WP_REST_Response($return, 429);
		}

		$request = $param->get_json_params();
		if (!is_array($request)) {
			$return['error'] = esc_html__('Invalid request.', 'gutenkit-blocks-addon');
			return new \WP_REST_Response($return, 400);
		}

		$email = isset($request['EMAIL']) && is_scalar($request['EMAIL']) ? sanitize_email($request['EMAIL']) : '';
		if (!is_email($email)) {
			$return['error'] = esc_html__('Please provide a valid email address.', 'gutenkit-blocks-addon');
			return new \WP_REST_Response($return, 400);
		}

		// Mailchimp list IDs are alphanumeric; this value is interpolated into the API URL.
		$list_id = isset($request['list_id']) && is_scalar($request['list_id']) ? sanitize_text_field($request['list_id']) : '';
		if (!preg_match('/^[a-zA-Z0-9]+$/', $list_id)) {
			$return['error'] = esc_html__('Invalid list ID.', 'gutenkit-blocks-addon');
			return new \WP_REST_Response($return, 400);
		}

		// Retrieve API key from options
		$api_key = get_option('gutenkit_settings_list');
		$token = !empty($api_key) ? $api_key['mailchimp']['fields']['api_key']['value'] : '';

		$formData = [
			'status_if_new' => 'subscribed',
			'merge_fields' => [],
			'status' => 'subscribed',
			'email_address' => $email,
		];


		//prepare the data array
		foreach ($request as $key => $value) {

			// Ignore nested/array values: every field below expects a scalar.
			if (!is_scalar($value)) {
				continue;
			}

			if ($key == 'EMAIL') {
				continue; // Already validated and set above.
			} else {
				$gkit_mailchimp_key_1 = explode("-", $key)[0];

				if ($gkit_mailchimp_key_1 == 'gkit_mailchimp_address') {
					$addressMainKey = explode("-", $key)[1];
					$addressInfoKey = explode("-", $key)[2];
					if (!empty($addressMainKey)) {
						$formData['merge_fields'][$addressMainKey][$addressInfoKey] = !empty($request[$key]) ? sanitize_text_field($request[$key]) : '';
					}
				} else if($gkit_mailchimp_key_1 == 'gkit_mailchimp_date' || $gkit_mailchimp_key_1 == 'gkit_mailchimp_birthday') {
					$gkit_mailchimp_date_key = explode("-", $key)[1];

					if(!empty($request[$key])){
						$date_parts = explode('-', sanitize_text_field($request[$key])); // Split by '-'
						$formatted_date = "";
						// Ensure the input has 3 parts (year, month, day) and reformat to MM/DD/YYYY
						if ($gkit_mailchimp_key_1 == 'gkit_mailchimp_date' && count($date_parts) === 3 ) {
							$formatted_date = $date_parts[1] . '/' . $date_parts[2] . '/' . $date_parts[0]; // MM/DD/YYYY
						} else if ($gkit_mailchimp_key_1 == 'gkit_mailchimp_birthday' && count($date_parts) >= 2) {
							// Format as DD/MM
							$formatted_date = $date_parts[2] . '/' . $date_parts[1];
						} else {
							// Handle incorrect input format (optional: set to empty or some default value)
							$formatted_date = '';
						}
						$formData['merge_fields'][$gkit_mailchimp_date_key] = $formatted_date;
					}

				} else if ($gkit_mailchimp_key_1 == 'gkit_mailchimp_phone') {
					$gkit_mailchimp_phone_key = explode("-", $key)[1];

					$formData['merge_fields'][$gkit_mailchimp_phone_key] = !empty($request[$key]) ? preg_replace('/\D+/', '', $request[$key]) : '';
				} else {
					if ($key != 'list_id') {
						$formData['merge_fields'][$key] = !empty($request[$key]) ? sanitize_text_field($request[$key]) : '';
					}
				}

				$interestResult = [];
				if (strpos(strtolower($key), 'interest') !== false) {
					$parts = explode('-', $value, 2);
					if (count($parts) === 2) {
						$formData['interests'][$parts[0]] = filter_var($parts[1], FILTER_VALIDATE_BOOLEAN) ;
					}
				}
			}

		}


		// Validate API key and server prefix
		if (empty($token)) {
			$return['error'] = esc_html__('Please set API Key in Gutenkit -> Settings -> API Integration -> MailChimp and Create Campaign.', 'gutenkit-blocks-addon');
			return $return;
		}

		$server_parts = explode('-', $token);
		if (!isset($server_parts[1])) {
			$return['error'] = esc_html__('Invalid API key format.', 'gutenkit-blocks-addon');
			return $return;
		}

		// Prepare subscription status based on double opt-in setting
		$subscription_status = !empty($request['double_opt_in']) && $request['double_opt_in'] === 'yes' ? 'pending' : 'subscribed';
		$data['status'] = $subscription_status;

		// Construct the API URL ($list_id validated as alphanumeric above).
		$server_prefix = $server_parts[1];
		$url = 'https://' . $server_prefix . '.api.mailchimp.com/3.0/lists/' . $list_id . '/members/';

		// Make the API request
		$response = wp_remote_post($url, [
			'method'    => 'POST',
			'timeout'   => 45,
			'headers'   => [
				'Authorization' => 'apikey ' . $token,
				'Content-Type'  => 'application/json; charset=utf-8',
			],
			'body'      => wp_json_encode($formData),
		]);


		// Handle the response
		if (is_wp_error($response)) {
			$error_message = $response->get_error_message();
			/* translators: %s: error message */
			$return['error'] = sprintf(esc_html__('Something went wrong: %s', 'gutenkit-blocks-addon'), $error_message);
		} else {
			$response_body = wp_remote_retrieve_body($response);
			$response_data = json_decode($response_body, true);

			// Check if there are errors returned from Mailchimp
			if (isset($response_data['status']) && !in_array($response_data['status'], ['subscribed', 'pending'])) {
				$return['error'] = $this->safe_error_response($response_data);

			} else if (!isset($response_data['status'])) {
				// Unparseable/unexpected response: don't echo it back.
				$return['error'] = esc_html__('There was an error. Please try again.', 'gutenkit-blocks-addon');
			} else {
				$return['status'] = $response_data['status'];
				if ($response_data['status'] === 'pending') {
					$return['success'] = esc_html__('Please check your email to confirm your subscription.', 'gutenkit-blocks-addon');
				} else if ($response_data['status'] === 'subscribed') {
					$return['success'] = esc_html__('Successfully subscribed to the mailing list.', 'gutenkit-blocks-addon');
				}
			}
		}
		return $return;
	}


	public function gutenkit_mailchimp_get_form_fields($id, $server_prefix, $api_value)
	{

		$url = 'https://' . $server_prefix . '.api.mailchimp.com/3.0/lists/' . $id . '/merge-fields';
		$response = wp_remote_get($url, [
			'headers' => [
				'Authorization' => 'apikey ' . $api_value,
				'Content-Type' => 'application/json; charset=utf-8',
			],
		]);
		$fieldListBody = isset($response['body']) ? json_decode($response['body'], true) : [];
		$fieldListItems = isset($fieldListBody['merge_fields']) ? $fieldListBody['merge_fields'] : [];





		$tagsAndNames = [['value' => '', 'label' => __('Select Field Name ID', 'gutenkit-blocks-addon')], ['value' => 'EMAIL', 'label' => __('EMAIL', 'gutenkit-blocks-addon')]];

		foreach ($fieldListItems as $key => $item) {
			if($item['type'] == 'dropdown' || $item['type'] == 'radio'){
				$tagsAndNames[] = [
					"value" => $item['tag'],
					"label" => $item['name'],
					"type" => $item['type'],
					"options" => $item['options']['choices'],
				];
			} else {
				$tagsAndNames[] = [
					"value" => $item['tag'],
					"label" => $item['tag'],
				];
			}
		}

		return $tagsAndNames;
	}

	// https://mailchimp.com/help/all-the-merge-tags-cheat-sheet/
}
