<?php

namespace Gutenkit\Config;

defined( 'ABSPATH' ) || exit;

class SettingsList extends \Gutenkit\Core\ConfigList {

	protected $type = 'settings';

	protected function set_required_list() {
		$this->required_list = array();
	}

	protected function set_optional_list() {
		$this->optional_list = apply_filters(
			'gutenkit/settings/list',
			array(
				'google_map'   => array(
					'slug'    => 'google_map',
					'title'   => __( 'Google Map', 'gutenkit-blocks-addon' ),
					'description'   => __( "Integrate Google Maps services to enable location-based features into your website. Use the Google Map API.", 'gutenkit-blocks-addon' ),
					'package' => 'pro',
					'token_link' => 'https://developers.google.com/maps/documentation/javascript/get-api-key',
					'fields'   => array(
						'api_key' => array('label' => __( 'API key', 'gutenkit-blocks-addon' ), 'value' => ''),
					),
					'status'          => 'active',
					'clear_cache' => true,
					'category' => 'api-integration',
				),
				'mailchimp' => array(
					'slug'           => 'mailchimp',
					'title'          => __( 'Mailchimp', 'gutenkit-blocks-addon' ),
					'description'    => __( 'Use MailChimp API key to securely integrate your MailChimp account with our services.', 'gutenkit-blocks-addon' ),
					'package'        => 'free',
					'fields'            => array(
						'api_key' => array('label' => __( 'API Key', 'gutenkit-blocks-addon' ), 'value' => '')
					),
					'status'          => 'active',
					'category' => 'api-integration',
				),
				'facebook_feed'   => array(
					'slug'    => 'facebook_feed',
					'title'   => __( 'Facebook Page Feed', 'gutenkit-blocks-addon' ),
					'description'   => __( "To show Facebook page feed on your website, enter your unique Page ID and Page Access Token to connect your page.", 'gutenkit-blocks-addon' ),
					'package' => 'pro',
					'fields'   => array(
						'page_id' => array('label' => __( 'Page ID', 'gutenkit-blocks-addon' ), 'value' => ''),
						'aceess_token' => array('label' => __( 'Page Access Token', 'gutenkit-blocks-addon' ), 'value' => ''),
						'expiration_time' => array('label' => __( 'Expiration Time In Hours', 'gutenkit-blocks-addon' ), 'value' => '', 'type' => 'number')
					),
					'clear_cache' => true,
					'access_token_generator' => true,
					'status'          => 'active',
					'transient_key' => 'gutenkit_facebook_feed',
					'category' => 'api-integration',
					'token_link' => 'https://token.wpmet.com/social_token.php?provider=facebook&_for=page&app=2577123062406162&sec=a4656a1cae5e33ff0c18ee38efaa47ac&scope=pages_show_list,pages_read_engagement,pages_manage_engagement,pages_read_user_content'
				),
				'instagram'   => array(
					'slug'    => 'instagram',
					'title'   => __( 'Instagram', 'gutenkit-blocks-addon' ),
					'description'   => __( "To Showcase Instagram Feed on your website, enter User ID, Access Token, Expiry Date, & Generation Date of the access token.", 'gutenkit-blocks-addon' ),
					'package' => 'pro',
					'fields'   => array(
						'user_id' => array('label' => __( 'User ID', 'gutenkit-blocks-addon' ), 'value' => ''),
						'token' => array('label' => __( 'Access Token', 'gutenkit-blocks-addon' ), 'value' => ''),
						'token_expiry_time' => array('label' => __( 'Token Expiry Time', 'gutenkit-blocks-addon' ), 'value' => '', 'type' => 'number' ),
					),
					'clear_cache' => true,
					'access_token_generator' => true,
					'status'          => 'active',
					'category' => 'api-integration',
					'token_link' => 'https://token.wpmet.com/social_token.php?provider=instagram'
				),
				'facebook_review'   => array(
					'slug'    => 'facebook_review',
					'title'   => __( 'Facebook Page Review', 'gutenkit-blocks-addon' ),
					'description'   => __( "To showcase reviews from your Facebook page, enter your unique Page ID and Page Access Token to connect your page.", 'gutenkit-blocks-addon' ),
					'package' => 'pro',
					'fields'   => array(
						'page_id' => array('label' => __( 'Page ID', 'gutenkit-blocks-addon' ), 'value' => ''),
						'aceess_token' => array('label' => __( 'Page Access Token', 'gutenkit-blocks-addon' ), 'value' => '')
					),
					'clear_cache' => true,
					'access_token_generator' => true,
					'status'          => 'inactive',
					'category' => 'api-integration',
					'token_link' => 'https://token.wpmet.com/social_token.php?provider=facebook&_for=page'
				),
				'yelp'   => array(
					'slug'    => 'yelp',
					'title'   => __( 'Yelp', 'gutenkit-blocks-addon' ),
					'description'   => __( "Use your Yelp Business Page ID to manage your online reputation such as reviews, ratings, and business details.", 'gutenkit-blocks-addon' ),
					'package' => 'pro',
					'fields'   => array(
						'page' => array('label' => __( 'Yelp Page', 'gutenkit-blocks-addon' ), 'value' => '')
					),
					'status'          => 'inactive',
					'category' => 'api-integration',
				),
				'dribble'   => array(
					'slug'    => 'dribble',
					'title'   => __( 'Dribble User Data', 'gutenkit-blocks-addon' ),
					'description'   => __( "Enter Access Token to enable Dribbble services like viewing and interacting with your design work.", 'gutenkit-blocks-addon' ),
					'package' => 'pro',
					'fields'   => array(
						'token' => array('label' => __( 'Access Token', 'gutenkit-blocks-addon' ), 'value' => '')
					),
					'clear_cache' => true,
					'access_token_generator' => true,
					'status'          => 'inactive',
					'category' => 'api-integration',
					'token_link' => 'https://token.wpmet.com/social_token.php?provider=dribbble'
				),
				'twitter'   => array(
					'slug'    => 'twitter',
					'title'   => __( 'Twitter', 'gutenkit-blocks-addon' ),
					'description'   => __( "Connect your Twitter handle and show your tweets on your website. Use your Twitter username and Access Token.", 'gutenkit-blocks-addon' ),
					'package' => 'pro',
					'fields'   => array(
						'username' => array('label' => __( 'Username', 'gutenkit-blocks-addon' ), 'value' => ''),
						'token' => array('label' => __( 'Access Token', 'gutenkit-blocks-addon' ), 'value' => '')
					),
					'clear_cache' => true,
					'access_token_generator' => true,
					'status'          => 'inactive',
					'category' => 'api-integration',
					'token_link' => 'https://token.wpmet.com/index.php?provider=twitter'
				),
				'zoom'   => array(
					'slug'    => 'zoom',
					'title'   => __( 'Zoom', 'gutenkit-blocks-addon' ),
					'description'   => __( "Use your Zoom API Key and Secret Key to facilitate scheduling, managing, and hosting Zoom meetings.", 'gutenkit-blocks-addon' ),
					'package' => 'pro',
					'fields'   => array(
						'api_key' => array('label' => __( 'Api key', 'gutenkit-blocks-addon' ), 'value' => ''),
						'secret_key' => array('label' => __( 'Secret Key', 'gutenkit-blocks-addon' ), 'value' => ''),
					),
					'access_token_generator' => true,
					'status'          => 'inactive',
					'category' => 'api-integration',
					'token_link' => 'https://token.wpmet.com/index.php?provider=zoom'
				),
				'asset_generation' => array(
					'slug'    => 'asset_generation',
					'title'   => __( 'Asset Generation', 'gutenkit-blocks-addon' ),
					'package' => 'free',
					'status'  => 'active',
					'category' => 'asset-generation',
				),
				'unfiltered_upload' => array(
					'slug'    => 'unfiltered_upload',
					'title'   => __( 'Unfiltered Upload', 'gutenkit-blocks-addon' ),
					'package' => 'free',
					'status'  => 'active',
					'category' => 'advanced',
				),
				'remote_image' => array(
					'slug'    => 'remote_image',
					'title'   => __( 'Remote Image', 'gutenkit-blocks-addon' ),
					'package' => 'free',
					'status'  => 'inactive',
					'category' => 'advanced',
				),
				'load_google_fonts' => array(
					'slug'    => 'load_google_fonts',
					'title'   => __( 'Load Google Fonts locally', 'gutenkit-blocks-addon' ),
					'package' => 'free',
					'status'  => 'inactive',
					'category' => 'advanced',
				),
				'gutenkit_user_consent' => array(
					'slug'    => 'gutenkit_user_consent',
					'title'   => __( 'User Consent', 'gutenkit-blocks-addon' ),
					'package' => 'free',
					'status'  => 'active',
					'category' => 'advanced',
				),
				'version_control' => array(
					'slug'    => 'version_control',
					'title'   => __( 'Version Control', 'gutenkit-blocks-addon' ),
					'package' => 'free',
					'value'   => '1.0.0',
					'status'  => 'active',
					'category' => 'version-control',
				),
				'transition' => array(
					'slug'    => 'transition',
					'title'   => __( 'Transition', 'gutenkit-blocks-addon' ),
					'package' => 'free',
					'value'   => array(
						'transition_duration' => '0.4s',
						'transition_timing_function' => 'ease',
					),
					'status'  => 'inactive',
					'category' => 'global-custom-properties',
				),
				'image_lazy_loading' => array(
					'slug'    => 'image_lazy_loading',
					'title'   => __( 'Image Lazy Loading', 'gutenkit-blocks-addon' ),
					'package' => 'free',
					'status'  => 'active',
					'category' => 'performance',
				),
			)
		);
	}
}
