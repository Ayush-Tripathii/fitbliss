<?php

namespace Gutenkit\Libs;

defined('ABSPATH') || exit;

use \Gutenkit\Helpers\Utils;

class FontLoadLocally
{
	const FONTS_FOLDER = 'gkit-fonts';
	const GOOGLE_FONTS_API_URL = 'https://www.googleapis.com/webfonts/v1/webfonts';
	const GOOGLE_FONTS_API_KEY = 'AIzaSyAdhJh9b4BpR0cQqIt1uBBeaq2f58Ztd7E';

	/**
	 * Recursively filters blocks for only those with 'gutenkit' in the block name.
	 *
	 * @param array $blocks
	 * @return array
	 */
	public function filter_blocks($blocks = array())
	{
		$filtered_blocks = [];

		foreach ($blocks as $block) {
			if (isset($block['blockName']) && strpos($block['blockName'], 'gutenkit') !== false) {
				$filtered_blocks[] = $block;
			}

			if (!empty($block['innerBlocks'])) {
				$filtered_blocks = array_merge($filtered_blocks, $this->filter_blocks($block['innerBlocks']));
			}
		}

		return $filtered_blocks;
	}

	/**
	 * Downloads the collected fonts and serves them from the uploads directory.
	 *
	 * @param array $fonts Collected fonts, keyed by family name.
	 */
	public function load_font($fonts)
	{
		if (empty($fonts)) {
			return;
		}

		// Same reasoning as the CDN path: a theme.json preset is not proof the font is actually
		// being served, so it is downloaded unless the site opts out.
		if (apply_filters('gutenkit/skip_theme_registered_fonts', false, $fonts)) {
			$fonts = $this->check_existing_fonts($fonts);
		}

		$css = $this->get_local_fonts_css($fonts);

		if (empty($css)) {
			return;
		}

		$handle = 'gkit-google-fonts-local';
		wp_register_style($handle, false);
		wp_add_inline_style($handle, Utils::cssminifier($css));
		wp_enqueue_style($handle);
	}

	/**
	 * Builds the @font-face CSS that points at locally stored copies of the fonts.
	 *
	 * The stylesheet is derived from the css2 endpoint rather than the Webfonts Developer API.
	 * That API needs a key, and the key shipped with this plugin is shared by every install, so
	 * it starts returning HTTP 429 once the daily quota is spent -- which silently dropped
	 * whichever weights happened to be requested after the quota ran out. css2 needs no key, and
	 * it also reports the real font-style, font-weight and unicode-range for every file instead
	 * of leaving them to be guessed from a file name.
	 *
	 * @param array $fonts Collected fonts, keyed by family name.
	 * @return string The generated CSS, or '' when nothing could be resolved.
	 */
	protected function get_local_fonts_css($fonts)
	{
		$request_url = $this->build_google_fonts_url($fonts);

		if (empty($request_url)) {
			return '';
		}

		// Keyed by the request, so changing a weight anywhere rebuilds instead of serving a stale
		// stylesheet, while an unchanged set never re-downloads.
		$cache_key = 'gutenkit_local_fonts_' . md5($request_url);
		$cached = get_transient($cache_key);

		if (is_string($cached)) {
			return $cached;
		}

		$remote_css = $this->fetch_google_fonts_css($request_url);

		if ($remote_css === '') {
			// Cache the failure briefly so an outage does not retry on every single page load.
			set_transient($cache_key, '', 10 * MINUTE_IN_SECONDS);
			return '';
		}

		$css = $this->localize_font_faces($remote_css);
		set_transient($cache_key, $css, MONTH_IN_SECONDS);

		return $css;
	}

	/**
	 * Fetches a Google Fonts stylesheet.
	 *
	 * Google serves woff2 only to user agents it recognises as supporting it; the default
	 * WordPress user agent gets ttf, which is roughly twice the size.
	 *
	 * @param string $url
	 * @return string Stylesheet body, or '' on failure.
	 */
	protected function fetch_google_fonts_css($url)
	{
		$response = wp_remote_get($url, [
			'timeout'    => 15,
			'user-agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36',
		]);

		if (is_wp_error($response)) {
			error_log('Gutenkit: Google Fonts request failed: ' . $response->get_error_message());
			return '';
		}

		$code = wp_remote_retrieve_response_code($response);

		if ($code !== 200) {
			error_log('Gutenkit: Google Fonts request returned HTTP ' . $code . ' for ' . $url);
			return '';
		}

		return (string) wp_remote_retrieve_body($response);
	}

	/**
	 * Rewrites every remote font URL in a Google stylesheet to a locally stored copy.
	 *
	 * A file that cannot be downloaded keeps its original URL: serving that one face from Google
	 * is a better outcome than dropping the weight from the page entirely.
	 *
	 * @param string $css Stylesheet as returned by Google.
	 * @return string
	 */
	protected function localize_font_faces($css)
	{
		$upload_dir = wp_upload_dir();

		if (!empty($upload_dir['error'])) {
			return $css;
		}

		$fonts_dir = trailingslashit($upload_dir['basedir']) . self::FONTS_FOLDER;
		$fonts_uri = trailingslashit($upload_dir['baseurl']) . self::FONTS_FOLDER;

		if (!is_dir($fonts_dir) && !wp_mkdir_p($fonts_dir)) {
			return $css;
		}

		// Each @font-face block carries the family, weight and style that its own src belongs to,
		// so the file name is derived per block rather than inferred from the directory later.
		return preg_replace_callback(
			'/@font-face\s*\{[^}]*\}/i',
			function ($matches) use ($fonts_dir, $fonts_uri) {
				return $this->localize_font_face_block($matches[0], $fonts_dir, $fonts_uri);
			},
			$css
		);
	}

	/**
	 * Downloads the font file referenced by a single @font-face block and repoints it locally.
	 *
	 * @param string $block     The @font-face block.
	 * @param string $fonts_dir Absolute path to the font cache.
	 * @param string $fonts_uri Public URL of the font cache.
	 * @return string
	 */
	protected function localize_font_face_block($block, $fonts_dir, $fonts_uri)
	{
		if (!preg_match('/src:\s*url\(([^)]+)\)/i', $block, $src_match)) {
			return $block;
		}

		$remote_url = trim($src_match[1], " \t\"" . "'");

		if (strpos($remote_url, 'https://fonts.gstatic.com/') !== 0) {
			return $block;
		}

		preg_match('/font-family:\s*([^;]+);/i', $block, $family_match);
		preg_match('/font-weight:\s*([^;]+);/i', $block, $weight_match);
		preg_match('/font-style:\s*([^;]+);/i', $block, $style_match);

		$family = isset($family_match[1]) ? trim($family_match[1], " \t\"" . "'") : '';

		if ($family === '') {
			return $block;
		}

		// A variable face reports a range ("200 800"); keep it in the name so two files that
		// differ only by range cannot collide.
		$weight = isset($weight_match[1]) ? preg_replace('/\s+/', '-', trim($weight_match[1])) : '400';
		$is_italic = isset($style_match[1]) && stripos($style_match[1], 'italic') !== false;

		$family_slug = sanitize_file_name(str_replace(' ', '-', strtolower($family)));
		$family_dir  = trailingslashit($fonts_dir) . $family_slug;

		$filename = sanitize_file_name($weight . ($is_italic ? 'italic' : '') . '-' . basename(parse_url($remote_url, PHP_URL_PATH)));
		$path     = trailingslashit($family_dir) . $filename;

		if (!file_exists($path) && !$this->download_font_file($remote_url, $family_dir, $path)) {
			return $block;
		}

		return str_replace($remote_url, trailingslashit($fonts_uri) . $family_slug . '/' . $filename, $block);
	}

	/**
	 * Downloads a single font file into the cache.
	 *
	 * @param string $url        Remote font file.
	 * @param string $family_dir Directory for this family.
	 * @param string $path       Destination path.
	 * @return bool Whether the file is now on disk.
	 */
	protected function download_font_file($url, $family_dir, $path)
	{
		global $wp_filesystem;

		if (empty($wp_filesystem)) {
			require_once ABSPATH . 'wp-admin/includes/file.php';
			WP_Filesystem();
		}

		if (!is_dir($family_dir) && !wp_mkdir_p($family_dir)) {
			return false;
		}

		$response = wp_remote_get($url, ['timeout' => 15]);

		if (is_wp_error($response) || wp_remote_retrieve_response_code($response) !== 200) {
			error_log('Gutenkit: failed to download font ' . $url);
			return false;
		}

		return (bool) $wp_filesystem->put_contents($path, wp_remote_retrieve_body($response), FS_CHMOD_FILE);
	}


	/**
	 * Loads FSE fonts from the local directory.
	 *
	 * @param array $fonts
	 */
	public function load_fse_font() {
		if(!isset($_REQUEST['canvas']) || !is_admin()) {
			return;
		}

		$upload_dir = wp_upload_dir();
		$fonts_dir  = trailingslashit($upload_dir['basedir']) . 'gkit-fonts/';
		$fonts_url  = trailingslashit($upload_dir['baseurl']) . 'gkit-fonts/';

		if (!is_dir($fonts_dir)) {
			return;
		}

		$font_files = glob($fonts_dir . '*/*.{woff,woff2,ttf,otf,eot}', GLOB_BRACE);

		if (empty($font_files)) {
			return;
		}

		$fonts_css = '';

		foreach ($font_files as $file_path) {
			$relative_path = str_replace($fonts_dir, '', $file_path);
			$font_name     = dirname($relative_path);
			$file_name     = basename($file_path);
			$font_weight   = strtok($file_name, '-');
			$font_weight   = in_array($font_weight, ['regular', 'normal', '400']) ? 'normal' : $font_weight;
			$ext           = pathinfo($file_path, PATHINFO_EXTENSION);
			$font_url      = $fonts_url . $font_name . '/' . $file_name;
			$font_family   = ucwords(str_replace('-', ' ', strtolower($font_name)));

			// You may expand formats as needed
			$format_map = [
				'woff'  => 'woff',
				'woff2' => 'woff2',
				'ttf'   => 'truetype',
				'otf'   => 'opentype',
				'eot'   => 'embedded-opentype',
			];

			$format = $format_map[$ext] ?? 'woff';

			$fonts_css .= "@font-face {
				font-family: '{$font_family}';
				src: url('{$font_url}') format('{$format}');
				font-weight: {$font_weight};
				font-style: normal;
				font-display: swap;
			}\n";
		}

		if (!empty($fonts_css)) {
			$handle = 'gkit-google-fonts-local';
			wp_register_style($handle, false);
			wp_add_inline_style($handle, Utils::cssminifier($fonts_css));
			wp_enqueue_style($handle);
		}
	}

	/**
	 * Retrieves and stores a font from Google Fonts API.
	 *
	 * @param string $font
	 * @param array $weights
	 */
	public function prepare_font($font, $weights)
	{
		$upload_dir = wp_upload_dir();
		$font_dir = trailingslashit($upload_dir['basedir']) . 'gkit-fonts';

		if (!is_dir($font_dir)) {
			wp_mkdir_p($font_dir);
		}

		$font_list = [];

		$font_family_dir = trailingslashit($font_dir) . str_replace(' ', '-', strtolower($font));
		if (!is_dir($font_family_dir)) {
			wp_mkdir_p($font_family_dir);
		}

		$api_url = add_query_arg([
			'key'       => self::GOOGLE_FONTS_API_KEY,
			'capability' => 'WOFF2',
			'family'    => urlencode($font),
		], self::GOOGLE_FONTS_API_URL);

		$response = wp_remote_get($api_url, ['timeout' => 15]);

		if (is_wp_error($response)) {
			error_log('Font API request failed: ' . $response->get_error_message());
			return;
		}

		$body = wp_remote_retrieve_body($response);
		$body = json_decode($body, true);

		if (!empty($body['items'][0])) {
			$font_list[] = $body['items'][0];
		}

		$this->save_font(array_shift($font_list), $weights, $font_dir);
	}

	/**
	 * Saves specific font files to local directory.
	 *
	 * @param array $font
	 * @param array $weights
	 * @param string $font_dir
	 */
	public function save_font($font, $weights, $font_dir)
	{
		global $wp_filesystem;

		if (empty($wp_filesystem)) {
			require_once ABSPATH . 'wp-admin/includes/file.php';
			WP_Filesystem();
		}

		$font_family = isset($font['family']) ? sanitize_text_field($font['family']) : '';
		$font_files = $font['files'] ?? [];
		$font_family_dir = trailingslashit($font_dir) . str_replace(' ', '-', strtolower($font_family));

		if (!$wp_filesystem->is_dir($font_family_dir)) {
			wp_mkdir_p($font_family_dir);
		}

		foreach ($weights as $weight) {
			$font_weight = in_array($weight, ['normal', '400']) ? 'regular' : $weight;

			if (!isset($font_files[$font_weight])) {
				continue; // Skip if no file for this weight
			}

			$font_file_url = esc_url_raw($font_files[$font_weight]);
			$font_filename = sanitize_file_name($font_weight . '-' . basename($font_file_url));
			$font_file_path = trailingslashit($font_family_dir) . $font_filename;

			// Skip if the font file already exists
			if ($wp_filesystem->exists($font_file_path)) {
				continue; // not "return": the remaining weights still need downloading
			}

			$response = wp_remote_get($font_file_url, ['timeout' => 10]);

			if (is_wp_error($response) || wp_remote_retrieve_response_code($response) !== 200) {
				error_log('Failed to download font: ' . $font_file_url);
				continue;
			}

			$font_content = wp_remote_retrieve_body($response);

			// Save the font file
			$wp_filesystem->put_contents($font_file_path, $font_content, FS_CHMOD_FILE);
		}
	}

	/**
	 * Builds a Google Fonts css2 URL for a set of families.
	 *
	 * Shared by the CDN path and the local-hosting path so both request exactly the same faces.
	 *
	 * @param array $fonts Collected fonts, keyed by family name.
	 * @return string|bool The URL, or false when nothing usable is left.
	 */
	protected function build_google_fonts_url( $fonts ) {
		if ( empty( $fonts ) ) {
			return false;
		}

		$font_families = array();
		$font_url      = 'https://fonts.googleapis.com/css2?family=';

		// Remove duplicates and sort weights for each font
		$all_fonts = array_map(function($weights) {
			$weights = array_unique($weights);
			sort($weights);
			return $weights;
		}, $fonts);

		foreach ( $all_fonts as $font => $weights ) {
			// Defensive: save_fonts() and third-party filters can seed $this->fonts with a raw
			// CSS stack, which the API rejects.
			$family = $this->normalize_font_family( $font );

			if ( '' === $family ) {
				continue;
			}

			$regular_weights = [];
			$italic_weights  = [];

			foreach ( $weights as $weight ) {
				$is_italic = strpos( strtolower( (string) $weight ), 'italic' ) !== false;
				$numeric   = $this->normalize_font_weights( [ $weight ] );

				// A weight the API rejects 400s the whole request, taking every other family in
				// the URL down with it, so drop it rather than forwarding it.
				if ( empty( $numeric ) ) {
					continue;
				}

				if ( $is_italic ) {
					$italic_weights[] = '1,' . $numeric[0];
				} else {
					$regular_weights[] = '0,' . $numeric[0];
				}
			}

			// `family=Foo:wght@` is invalid, so a family left with nothing usable falls back to 400.
			if ( empty( $regular_weights ) && empty( $italic_weights ) ) {
				$regular_weights[] = '0,400';
			}

			// Combine and sort
			$combined_weights = array_values( array_unique( array_merge( $regular_weights, $italic_weights ) ) );

			// css2 wants the ital,wght tuples in ascending order, and a plain sort() would put
			// '0,1000' before '0,400'.
			usort( $combined_weights, function( $a, $b ) {
				list( $a_ital, $a_wght ) = explode( ',', $a );
				list( $b_ital, $b_wght ) = explode( ',', $b );
				return ( (int) $a_ital <=> (int) $b_ital ) ?: ( (int) $a_wght <=> (int) $b_wght );
			} );

			// Build font family string
			$font_param = str_replace( ' ', '+', $family );

			if ( ! empty( $italic_weights ) ) {
				$font_param .= ':ital,wght@' . implode( ';', $combined_weights );
			} else {
				// Only regular
				$only_weights = array_map( function( $w ) {
					return explode( ',', $w )[1]; // extract weight part
				}, $combined_weights );

				$font_param .= ':wght@' . implode( ';', array_unique( $only_weights ) );
			}

			$font_families[] = $font_param;
		}

		// Every collected family may have been resolved locally or discarded as a system stack.
		if ( empty( $font_families ) ) {
			return false;
		}

		$font_url .= implode( '&family=', $font_families );
		$font_url .= '&display=swap';

		return $font_url;
	}

	/**
	 * Reduces a stored CSS font-family declaration to a single family name.
	 *
	 * Block attributes keep the whole declaration (`"Inter", sans-serif`) because get-css.js prints
	 * it straight into `font-family`, and theme.json presets are stored the same way. Both the
	 * Google Fonts API and the local font cache need the bare family name instead.
	 *
	 * @param string $font_family Raw font-family value from a block attribute or theme.json.
	 * @return string Family name, or '' when the value names nothing downloadable.
	 */
	protected function normalize_font_family($font_family)
	{
		if (!is_string($font_family)) {
			return '';
		}

		// Only the first entry in the stack is the requested family; the rest are fallbacks.
		$family = trim(explode(',', $font_family)[0]);
		$family = trim($family, "\"'");
		$family = trim(preg_replace('/\s+/', ' ', $family));

		// Generic families, CSS-wide keywords and custom properties are never on Google Fonts.
		$generic = [
			'serif', 'sans-serif', 'monospace', 'cursive', 'fantasy', 'math', 'emoji', 'fangsong',
			'system-ui', 'ui-serif', 'ui-sans-serif', 'ui-monospace', 'ui-rounded',
			'inherit', 'initial', 'unset', 'revert', 'revert-layer',
		];

		if ($family === ''
			|| in_array(strtolower($family), $generic, true)
			|| strpos($family, '-') === 0      // -apple-system and friends
			|| strpos($family, 'var(') === 0) {
			return '';
		}

		return $family;
	}

	/**
	 * Maps CSS font-weight keywords onto the numeric values the Google Fonts API accepts.
	 *
	 * Anything the API would reject is dropped rather than forwarded: a single bad weight makes
	 * the whole css2 request 400, which takes down every other family in the same URL.
	 *
	 * @param array $weights Raw weights from block attributes or theme.json.
	 * @return array Unique numeric weights, as strings.
	 */
	protected function normalize_font_weights($weights = [])
	{
		$named = [
			'thin' => '100', 'extralight' => '200', 'ultralight' => '200', 'light' => '300',
			'normal' => '400', 'regular' => '400', 'book' => '400', 'medium' => '500',
			'semibold' => '600', 'demibold' => '600', 'bold' => '700',
			'extrabold' => '800', 'ultrabold' => '800', 'black' => '900', 'heavy' => '900',
			'lighter' => '400', 'bolder' => '700',
			'inherit' => '400', 'initial' => '400', 'unset' => '400', 'revert' => '400',
		];

		$normalized = [];

		foreach ((array) $weights as $weight) {
			$weight = strtolower(trim((string) $weight));
			$weight = trim(str_replace(['italic', 'oblique'], '', $weight));

			if ($weight === '') {
				$weight = '400';
			}

			if (isset($named[$weight])) {
				$weight = $named[$weight];
			}

			if (!ctype_digit($weight) || (int) $weight < 1 || (int) $weight > 1000) {
				continue;
			}

			$normalized[] = $weight;
		}

		return array_values(array_unique($normalized));
	}

	/**
	 * Drops fonts that theme.json already registers with a fontFace.
	 *
	 * Not applied by default: a preset only claims something else serves the font, which is not
	 * reliable across arbitrary themes. Opt in with the `gutenkit/skip_theme_registered_fonts`
	 * filter when the active theme is known to serve its own fonts.
	 *
	 * @param array $fonts Collected fonts, keyed by family name.
	 * @return array List of fonts that still need fetching.
	 */
	public function check_existing_fonts($fonts = [])
	{
		$theme_fonts = wp_get_global_settings(['typography', 'fontFamilies']);
		$existing_fonts = [];

		foreach (['theme', 'custom'] as $origin) {
			if (empty($theme_fonts[$origin])) {
				continue;
			}

			foreach ($theme_fonts[$origin] as $global_font) {
				// Without a fontFace the preset only names a stack the browser resolves locally,
				// so there is no bundled file to match against.
				if (empty($global_font['fontFace'])) {
					continue;
				}

				// The picker stores the preset's `fontFamily` stack while fontFace carries the bare
				// name, so index both spellings against the same weights.
				$preset_name = !empty($global_font['fontFamily'])
					? $this->normalize_font_family($global_font['fontFamily'])
					: '';

				foreach ($global_font['fontFace'] as $font_face) {
					if (!isset($font_face['fontFamily'], $font_face['fontWeight'])) {
						continue;
					}

					$weights = $this->normalize_font_weights(preg_split('/\s+/', trim((string) $font_face['fontWeight'])));

					// A variable face declares its range as "400 700"; every 100 stop inside that
					// range is available from the one file.
					if (count($weights) === 2 && (int) $weights[0] < (int) $weights[1]) {
						$weights = array_map('strval', range((int) $weights[0], (int) $weights[1], 100));
					}

					$names = array_filter(array_unique([
						$preset_name,
						$this->normalize_font_family($font_face['fontFamily']),
					]));

					foreach ($names as $name) {
						$existing_fonts[$name] = array_merge(
							isset($existing_fonts[$name]) ? $existing_fonts[$name] : [],
							$weights
						);
					}
				}
			}
		}

		if (empty($existing_fonts)) {
			return $fonts;
		}

		foreach ($fonts as $font => $weights) {
			if (!isset($existing_fonts[$font])) {
				continue;
			}

			// Match on the normalised weight but keep the original value, which load_font() still
			// uses to build its file names.
			$remaining = [];
			foreach ($weights as $weight) {
				$numeric = $this->normalize_font_weights([$weight]);
				if (!empty($numeric) && in_array($numeric[0], $existing_fonts[$font], true)) {
					continue;
				}
				$remaining[] = $weight;
			}

			// An empty weight list would render as `family=Foo:wght@`, which the API rejects.
			if (empty($remaining)) {
				unset($fonts[$font]);
			} else {
				$fonts[$font] = array_values($remaining);
			}
		}

		return $fonts;
	}
}
