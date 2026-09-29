<?php
namespace Gutenkit\Core;

defined( 'ABSPATH' ) || exit;

use Gutenkit\Helpers\Utils;

/**
 * Enqueue registrar.
 *
 * @since 1.0.0
 * @access public
 */
class Enqueue {

	use \Gutenkit\Traits\Singleton;

	/**
	 * class constructor.
	 * private for singleton
	 *
	 * @return void
	 * @since 1.0.0
	 */
	public function __construct() {
		add_action( 'admin_enqueue_scripts', array( $this, 'admin_scripts' ) );
		add_action( 'enqueue_block_assets', array( $this, 'blocks_scripts' ) );
		add_action( 'enqueue_block_editor_assets', array( $this, 'blocks_editor_scripts' ), 5 );
		add_action( 'wp_head', array( $this, 'print_device_script_for_window' ) );
	}

	/**
	 * Enqueues necessary scripts and localizes data for the admin area.
	 *
	 * @param string $hook The current page.
	 * @return void
	 * @since 1.0.0
	 */
	public function admin_scripts( $hook ) {
		wp_localize_script(
			'wp-block-editor',
			'gutenkit',
			array(
				'plugin_url'    => GUTENKIT_PLUGIN_URL,
				'screen'        => $hook,
				'api_url'       => GUTENKIT_API_URL,
				'root_url'		=> esc_url( home_url( '/' ) ),
				'load_google_fonts' => Utils::get_settings('load_google_fonts'),
				'version'     => GUTENKIT_PLUGIN_VERSION,
				'modules'     => \Gutenkit\Config\Modules::get_active_modules_list(),
				'has_pro'     => defined( 'GUTENKIT_PRO_PLUGIN_VERSION'),
				'generalSettingsUrl'   => admin_url('options-general.php'),
				'activeTheme' => wp_get_theme()->get('Name'),
				'placeholderImage' => GUTENKIT_PLUGIN_URL . 'build/images/placeholder.e4997309.jpg'
			)
		);
	}
	
	/**
	 * Enqueues the necessary scripts and styles for the blocks.
	 *
	 * Registers and enqueues various scripts and styles required for the blocks.
	 * This function is called to enqueue the scripts and styles when needed.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return void
	 */
	public function blocks_scripts() {
		// Register the global styles and scripts
		wp_register_style( 'animate', GUTENKIT_PLUGIN_URL . 'assets/css/animate.min.css', array(), GUTENKIT_PLUGIN_VERSION );
		wp_register_style( 'gkit-animate', GUTENKIT_PLUGIN_URL . 'assets/css/gkit-animate.css', array(), GUTENKIT_PLUGIN_VERSION );
		wp_register_script( 'fancybox', GUTENKIT_PLUGIN_URL . 'assets/js/fancybox.js', array(), GUTENKIT_PLUGIN_VERSION, [ 'strategy' => 'defer', 'in_footer' => true ] );
		wp_register_style( 'fancybox', GUTENKIT_PLUGIN_URL . 'assets/css/fancybox.css', array(), GUTENKIT_PLUGIN_VERSION );
		wp_register_style( 'hover-animations', GUTENKIT_PLUGIN_URL . 'assets/css/hover-animations.min.css', array(), GUTENKIT_PLUGIN_VERSION );
		wp_register_script( 'goodshare', GUTENKIT_PLUGIN_URL . 'assets/js/goodshare.js', array(), GUTENKIT_PLUGIN_VERSION, [ 'strategy' => 'defer', 'in_footer' => true ] );
		wp_register_script( 'easy-piechart', GUTENKIT_PLUGIN_URL . 'assets/js/easy-piechart.js', array(), GUTENKIT_PLUGIN_VERSION, [ 'strategy' => 'defer', 'in_footer' => true ] );
		wp_register_script( 'odometer', GUTENKIT_PLUGIN_URL . 'assets/js/odometer.min.js', array(), GUTENKIT_PLUGIN_VERSION, [ 'strategy' => 'defer', 'in_footer' => true ] );
		wp_register_style( 'odometer', GUTENKIT_PLUGIN_URL . 'assets/css/odometer-theme-default.css', array(), GUTENKIT_PLUGIN_VERSION );
		wp_register_script('swiper', GUTENKIT_PLUGIN_URL . 'assets/js/swiper.js', array(), GUTENKIT_PLUGIN_VERSION, [ 'strategy' => 'defer', 'in_footer' => true ]);
		wp_register_style('swiper', GUTENKIT_PLUGIN_URL . 'assets/css/swiper.css', array(), GUTENKIT_PLUGIN_VERSION, 'all');
		wp_register_script('img-comparison', GUTENKIT_PLUGIN_URL . 'assets/js/img-comparison.js', array(), GUTENKIT_PLUGIN_VERSION, [ 'strategy' => 'defer', 'in_footer' => true ]);
		wp_register_style('img-comparison', GUTENKIT_PLUGIN_URL . 'assets/css/img-comparison.css', array(), GUTENKIT_PLUGIN_VERSION, 'all');
		wp_register_script('scrolly-video', GUTENKIT_PLUGIN_URL . 'assets/js/scrolly-video.js', array(), GUTENKIT_PLUGIN_VERSION, [ 'strategy' => 'defer', 'in_footer' => true ]);
		wp_register_script('vanilla-tilt', GUTENKIT_PLUGIN_URL . 'assets/js/vanilla-tilt.js', array(), GUTENKIT_PLUGIN_VERSION, [ 'strategy' => 'defer', 'in_footer' => true ]);
		wp_register_script('lenis', GUTENKIT_PLUGIN_URL . 'assets/js/lenis.js', array(), GUTENKIT_PLUGIN_VERSION, [ 'strategy' => 'defer', 'in_footer' => true ]);

		// frontend common css
		$common_styles_dir = GUTENKIT_PLUGIN_DIR . 'build/gutenkit/frontend-common.asset.php';
		if ( file_exists( $common_styles_dir ) ) {
			$common_styles = include_once $common_styles_dir;
			if ( isset( $common_styles['version'] ) ) {
				wp_enqueue_style(
					'gutenkit-frontend-common',
					GUTENKIT_PLUGIN_URL . 'build/gutenkit/frontend-common.css',
					array(),
					$common_styles['version']
				);
			}
		}

		// Register the global styles custom properties
		wp_register_style('gutenkit-global-styles-css-custom-properties', false, array(), true, true);
		$global_custom_properties = Utils::get_settings('transition') ? Utils::get_settings('transition', 'value') : [];
		$converted_custom_properties = !empty($this->convert_custom_properties($global_custom_properties)) ? $this->convert_custom_properties($global_custom_properties) : "";
		if( ! empty($converted_custom_properties) ) {
			wp_add_inline_style('gutenkit-global-styles-css-custom-properties', $converted_custom_properties);
			wp_enqueue_style('gutenkit-global-styles-css-custom-properties');
		}
	}

	/**
	 * enqueue block editor assets
	 * loads styles and scripts for block editor
	 * 
	 * @return void
	 * @since 1.0.0
	 */
	public function blocks_editor_scripts()
	{
		global $pagenow;

		// Define paths to asset files
		$asset_files = [
			'components' => GUTENKIT_PLUGIN_DIR . 'build/gutenkit/components.asset.php',
			'helpers' => GUTENKIT_PLUGIN_DIR . 'build/gutenkit/helpers.asset.php',
			'global' => GUTENKIT_PLUGIN_DIR . 'build/gutenkit/global.asset.php',
		];
		
		// Enqueue components script
		$this->enqueue_assets($asset_files['components'], 'gkit-components', 'components.js');

		// Enqueue helpers script
		$this->enqueue_assets($asset_files['helpers'], 'gkit-helpers', 'helpers.js');

		// Enqueue global script
		$this->enqueue_assets($asset_files['global'], 'gutenkit-blocks-editor-global', 'global.js');

		// Conditional enqueue for page settings
		if ($this->should_enqueue_page_settings($pagenow)) {
			wp_enqueue_script('gutenkit-page-settings-editor-scripts');
		}

		// Enqueue breakpoint scripts and styles
		wp_enqueue_script('gutenkit-breakpoints-editor-scripts');
		wp_enqueue_style('gutenkit-breakpoints-editor-styles');

		// Inspector panel strings live in lazily imported chunks that
		// wp_set_script_translations() cannot reach, so seed wp.i18n directly.
		$this->preload_editor_translations();
	}

	/**
	 * Load the whole text domain into wp.i18n for the block editor.
	 *
	 * Every block pulls its inspector panel in through lazy( () => import( './settings.js' ) ),
	 * so those strings compile into chunks that webpack fetches on demand and WordPress never
	 * registers as script handles. wp_set_script_translations() resolves one JSON per registered
	 * handle, so it can never reach them. setLocaleData() merges into a single per-domain
	 * registry shared by every script on the page, so loading the domain once here covers all of
	 * them without changing how any chunk loads.
	 *
	 * Attached to wp-i18n rather than a plugin handle: it is always registered in the editor and
	 * every other script depending on it prints later, which guarantees the data is in place
	 * before any chunk can ask for it.
	 *
	 * @return void
	 * @since 1.0.0
	 */
	private function preload_editor_translations()
	{
		$domain = 'gutenkit-blocks-addon';
		$locale = determine_locale();

		// English already reads from the source strings.
		if ( 'en_US' === $locale ) {
			return;
		}

		$translations = get_translations_for_domain( $domain );

		/*
		 * WP_Translations (6.5+) exposes entries and headers through __get() but declares no
		 * __isset(), so empty()/isset() on them always report "missing" no matter what is
		 * loaded. Both have to be read into variables before they can be tested.
		 */
		$entries = $translations->entries;
		$headers = $translations->headers;

		// NOOP_Translations, or a locale with nothing translated yet.
		if ( ! is_array( $entries ) || array() === $entries ) {
			return;
		}

		$data = array(
			'' => array(
				'domain' => $domain,
				'lang'   => $locale,
			),
		);

		// Required for _n() to pick the correct form.
		if ( is_array( $headers ) && ! empty( $headers['Plural-Forms'] ) ) {
			$data['']['plural_forms'] = $headers['Plural-Forms'];
		}

		/*
		 * WP_Translations returns a numerically indexed list while the older MO class keys by
		 * msgid, so the msgid is rebuilt from each entry instead of trusting the array key.
		 * wp.i18n expects context-qualified strings in "context\4msgid" form.
		 */
		foreach ( $entries as $entry ) {
			if ( ! $entry instanceof \Translation_Entry || '' === (string) $entry->singular ) {
				continue;
			}

			$msgid = '' !== (string) $entry->context
				? $entry->context . "\4" . $entry->singular
				: $entry->singular;

			$data[ $msgid ] = $entry->translations;
		}

		$script = sprintf(
			'wp.i18n.setLocaleData( %s, "%s" ); window.gutenkitI18nLoaded = %d;',
			wp_json_encode( $data ),
			$domain,
			count( $data ) - 1
		);

		wp_add_inline_script( 'wp-i18n', $script, 'after' );
	}

	private function enqueue_assets($asset_file, $handle, $script_file)
	{
		if (file_exists($asset_file)) {
			$asset_data = include_once $asset_file;
			if (isset($asset_data['version'])) {
				wp_enqueue_script(
					$handle,
					GUTENKIT_PLUGIN_URL . "build/gutenkit/{$script_file}",
					$asset_data['dependencies'],
					$asset_data['version'],
					false
				);

				// Set up script translations
				wp_set_script_translations( $handle, 'gutenkit-blocks-addon' );

				return true; // Successfully enqueued
			}
		}
		return false; // Failed to enqueue
	}

	private function should_enqueue_page_settings($pagenow) {
		$is_support_meta = post_type_supports(get_post_type(), 'custom-fields');
		return $is_support_meta && $pagenow !== 'site-editor.php' && ($pagenow === 'post.php' || $pagenow === 'post-new.php');
	}
	

	/**
	 * Converts custom properties to CSS rules for global presets.
	 *
	 * @param array $global_css The array of global CSS properties.
	 * @return string The generated CSS rules.
	 */
	public function convert_custom_properties( $global_css ) {
		// Check if the global CSS array is empty
		if(empty($global_css)) return "";

		$css = [];
		$result = "";

		// Loop through each key-value pair in the global CSS array
		foreach ($global_css as $key => $value) {
			// Check if the value is not empty
			if (!empty($value)) {
				// Add the CSS rule to the $css array
				$css[] = "--gutenkit-preset-global-" . $key . ": " . $value;
			}
		}

		// Check if the $css array is not empty
		if(!empty($css)) {
			// Generate the CSS rules for the body element
			$result = "body {" . join(';', $css) . "}";
		}

		// Return the generated CSS rules
		return $result;
	}

	public function print_device_script_for_window()
	{
		if (!is_admin()) {
			$devices = Utils::get_device_list();
			if (is_string($devices)) {
				$devices = html_entity_decode($devices, ENT_QUOTES, 'UTF-8');
			} elseif (is_array($devices)) {
				foreach ($devices as $key => $value) {
					if (! is_scalar($value)) {
						continue;
					}

					$devices[$key] = html_entity_decode((string) $value, ENT_QUOTES, 'UTF-8');
				}
			}

			$script = "var breakpoints = " . wp_json_encode($devices) . ';';

			/* phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped */
			echo "<script type='text/javascript'>" . $script . "</script>";
		}
	}
}
