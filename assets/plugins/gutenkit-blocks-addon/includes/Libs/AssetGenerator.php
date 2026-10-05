<?php
namespace Gutenkit\Libs;

defined('ABSPATH') || exit;

use \Gutenkit\Helpers\Utils;

class AssetGenerator extends \Gutenkit\Libs\FontLoadLocally {
	use \Gutenkit\Traits\Singleton;

	/**
	 * Defining css
	 */
	protected $css = '';

	/**
	 * Defining fonts
	 */
	protected $fonts = array();

	/**
	 * Whether the last content strip actually removed anything, so untouched
	 * content is never re-serialized.
	 */
	protected $stripped_block_css = false;

	/**
	 * Set when css was found in content that could not be rewritten safely, so
	 * the save that follows must not mark the post trusted.
	 */
	protected $content_css_left_in_place = false;

	/**
	 * AssetGenerator class constructor.
	 * private for singleton
	 *
	 * @return void
	 * @since 1.0.0
	 */
	public function __construct() {
		add_filter( 'wp_insert_post_data', array( $this, 'strip_untrusted_block_css' ), 10, 2 );
		add_action( 'save_post', array( $this, 'stamp_css_trust' ), 10, 2 );
		add_action( 'save_post', array( $this, 'save_fonts' ), 10, 3 );
		add_filter( 'render_block_data', array( $this, 'set_blocks_css' ), 10 );
		add_filter( 'wp_resource_hints', array( $this, 'fonts_resource_hints' ), 10, 2 );
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ), PHP_INT_MAX );
		add_action( 'enqueue_block_assets', array($this, 'enqueue_block_fonts'), 10 );
		add_action( 'enqueue_block_assets', array($this, 'load_fse_font'), 10 );
	}

	/**
	 * recursively combine blocks assets based on used blocks
	 *
	 * @param array $blocks
	 * @return $result array | $blocks_data
	 */
	protected function combine_blocks_asstes( $parsed_block = array() ) {
		// combine blocks assets
		$blocks_css = [];

		if( Utils::is_gutenkit_block_name( isset($parsed_block['blockName']) ? $parsed_block['blockName'] : '' ) ) {
			// block css
			$active_modules = \Gutenkit\Config\Modules::get_active_modules_list();
			$has_dynamic_background = false;
			// Check if 'backgroundTracker' exists before using it
			 
			if ( isset( $parsed_block['attrs']['blocksCSS'] ) && (empty( $active_modules['dynamic-content'] ) || !$has_dynamic_background ) ) {
				foreach ( $parsed_block['attrs']['blocksCSS'] as $device => $css ) {
					if (!isset($blocks_css[$device])) {
						$blocks_css[$device] = '';
					}

					if (is_string($css)) {
						$blocks_css[$device] .= $css;
					}
				}
			}

			// block typography
			$this->set_typography( $parsed_block );

			// block common style
			if ( isset( $parsed_block['attrs']['commonStyle'] ) && (empty( $active_modules['dynamic-content'] ) || !$has_dynamic_background) ) {
				foreach ( $parsed_block['attrs']['commonStyle'] as $device => $css ) {
					if (!isset($blocks_css[$device])) {
						$blocks_css[$device] = '';
					}

					$blocks_css[$device] .= $css;
				}
			}
		}

		// concate css/js content into a single file
		$css_content = '';
		$is_custom_styles_added = false;
		$device_list = Utils::get_device_list();

		if (!empty($blocks_css)) {
			foreach ($device_list as $device) {
				foreach ($blocks_css as $key => $block) {
					if (!empty($block) && trim($block) !== '') {
						$direction = isset($device['direction']) ? $device['direction'] : 'max';
						$width = isset($device['value']) ? $device['value'] : '';
						$device_key = isset($device['slug']) ? strtolower($device['slug']) : '';

						if (isset($device['value']) && $device['value'] == 'base' && $key == 'desktop') {
							$css_content .= $block;
						} elseif (!empty($direction) && !empty($width) && $device_key == $key) {
							$css_content .= '@media (' . $direction . '-width: ' . $width . 'px) {' . trim($block) . '}';
						}

						if ($key == 'customStyles' && !$is_custom_styles_added) {
							$is_custom_styles_added = true;
							$css_content .= $block;
						}
					}
				}
			}
		}

		return $css_content;
	}

	/**
	 * Sets typography for the parsed block.
	 *
	 * @param array $parsed_block
	 * @return void
	 */
	protected function set_typography($parsed_block) {
		if ( isset( $parsed_block['attrs'] ) ) {
			$typographies = array_filter(
				$parsed_block['attrs'],
				function ( $key ) {
					$key = strtolower($key);
        			return str_contains($key, 'typography') || str_contains($key, 'typo');
				},
				ARRAY_FILTER_USE_KEY
			);

			if ( ! empty( $typographies ) ) {
				foreach ( $typographies as $typography ) {
					$font_weight = ! empty( $typography['fontWeight']['value'] ) ? $typography['fontWeight']['value'] : 400;
					if( ! empty( $typography['fontFamily']['value'] ) ) {
						// The attribute holds the whole CSS stack, e.g. `"Inter", sans-serif`; both the
						// Google Fonts URL and the local font cache are keyed by the bare family name.
						$font_family = $this->normalize_font_family( $typography['fontFamily']['value'] );
						if ( '' !== $font_family ) {
							$this->fonts[$font_family][] = $font_weight;
						}
					}
				}
			}
		}
	}

	/**
	 * Drop css carrying block attributes when the saving user cannot publish.
	 *
	 * The meta routes are handled by their sanitize_callback, but block styles
	 * live inside post content, so they are stripped here on the way in. What is
	 * removed is only ever generated output: every one of these is rebuilt from
	 * the block's own structured attributes, which stay untouched, so reopening
	 * the block in the editor restores the styling.
	 *
	 * Deliberately narrow. Content without a GutenKit block, or saved by someone
	 * who can publish, is returned byte for byte without being parsed, so the
	 * round trip through parse_blocks()/serialize_blocks() only ever touches the
	 * case it is meant to.
	 *
	 * @param array $data    Slashed post data about to be written.
	 * @param array $postarr Raw post array.
	 * @return array
	 */
	public function strip_untrusted_block_css( $data, $postarr = array() ) {
		$this->content_css_left_in_place = false;

		if ( ! get_current_user_id() || empty( $data['post_content'] ) ) {
			return $data;
		}

		$post_type = isset( $data['post_type'] ) ? $data['post_type'] : 'post';
		$post_id   = ! empty( $postarr['ID'] ) ? (int) $postarr['ID'] : 0;

		// Two reasons to strip. The saver cannot publish, so they may not author a
		// stylesheet at all; or the css already on this post was never vouched for
		// by anyone who can publish, in which case this save must not be what turns
		// it into trusted content. The second case is what covers rows that were
		// already in the database before any of this existed.
		$saver_may_author = Utils::user_can_publish( 0, $post_type );
		$stored_vouched   = $post_id ? Utils::is_stored_css_vouched( $post_id ) : true;

		if ( $saver_may_author && $stored_vouched ) {
			return $data;
		}

		// Cheap pre-filter only. It has to be a superset of what
		// is_gutenkit_block_name() matches, or content would be skipped here and
		// still collected by the renderer - which is exactly how `mygutenkit/…`
		// used to slip past a `wp:gutenkit/` test.
		if ( false === strpos( $data['post_content'], 'gutenkit' ) ) {
			return $data;
		}

		$content = wp_unslash( $data['post_content'] );
		$blocks  = parse_blocks( $content );

		$this->stripped_block_css = false;
		$stripped = $this->strip_block_css_attrs( $blocks );

		if ( ! $this->stripped_block_css ) {
			return $data;
		}

		// Rewriting somebody's content is only safe if the serializer reproduces
		// what the parser was given, so content it does not reproduce exactly is
		// left alone. That must not become a way through: the css is still in
		// there, so this save is barred from marking the post trusted and the
		// renderer keeps refusing it. Fail closed, not open - an earlier version
		// of this guard just returned, and since WordPress serializes block
		// attributes with unescaped slashes, any payload containing a url failed
		// the comparison and sailed past.
		if ( serialize_blocks( $blocks ) !== $content ) {
			$this->content_css_left_in_place = true;
			return $data;
		}

		$data['post_content'] = wp_slash( serialize_blocks( $stripped ) );

		return $data;
	}

	/**
	 * Remove the css bearing attributes from a parsed block tree.
	 *
	 * @param array $blocks
	 * @return array
	 */
	protected function strip_block_css_attrs( $blocks ) {
		$css_attributes = array( 'blocksCSS', 'commonStyle', 'gutenkitBlockCustomCSS' );

		foreach ( $blocks as $index => $block ) {
			if ( Utils::is_gutenkit_block_name( isset( $block['blockName'] ) ? $block['blockName'] : '' ) ) {
				foreach ( $css_attributes as $attribute ) {
					if ( isset( $block['attrs'][ $attribute ] ) ) {
						unset( $blocks[ $index ]['attrs'][ $attribute ] );
						$this->stripped_block_css = true;
					}
				}
			}

			if ( ! empty( $block['innerBlocks'] ) ) {
				$blocks[ $index ]['innerBlocks'] = $this->strip_block_css_attrs( $block['innerBlocks'] );
			}
		}

		return $blocks;
	}

	/**
	 * Empty every stored css value on a post.
	 *
	 * Used when css that nobody vouched for is about to become part of a trusted
	 * post. Only generated output is removed: the structured settings each value
	 * was built from are left alone, so the styling comes back the next time the
	 * block or the page settings are edited.
	 *
	 * @param int $post_id
	 * @return void
	 */
	protected function purge_stored_css( $post_id ) {
		foreach ( Utils::css_meta_keys() as $meta_key ) {
			// Not a string cast: globalClassManagerStyle holds an array.
			if ( ! empty( get_post_meta( $post_id, $meta_key, true ) ) ) {
				delete_post_meta( $post_id, $meta_key );
			}
		}
	}

	/**
	 * Record whether the user saving this post may publish it.
	 *
	 * Block styles live inside post content and page settings live in post meta,
	 * so there is no single value to sanitize at save time. What is recorded
	 * instead is who stood behind the save, and is_css_trusted() reads it back
	 * when deciding whether the styles may render for anybody else. An editor
	 * publishing a Contributor's draft re-stamps it, which is the review step.
	 *
	 * @param int      $post_id
	 * @param \WP_Post $post
	 * @return void
	 */
	public function stamp_css_trust($post_id, $post = null) {
		$post = get_post( $post ? $post : $post_id );

		if ( ! $post || wp_is_post_revision( $post_id ) || wp_is_post_autosave( $post_id ) ) {
			return;
		}

		if ( 'auto-draft' === $post->post_status ) {
			return;
		}

		// Cron, WP-CLI and importers run without a user. Leave whatever the last
		// real save decided rather than downgrading the post to untrusted.
		if ( ! get_current_user_id() ) {
			return;
		}

		// Css that could not be removed from the content keeps the post untrusted,
		// however senior the person saving it is.
		$may_author = Utils::user_can_publish( 0, $post->post_type ) && ! $this->content_css_left_in_place;

		// The css sitting on this post right now was never vouched for. Saving as
		// somebody who can publish would mark the post trusted, so the old value
		// goes first - otherwise editing a title would be enough to serve css that
		// a Contributor stored months ago, which is what happens to everything
		// already in the database when this plugin is updated.
		if ( ! Utils::is_stored_css_vouched( $post ) ) {
			$this->purge_stored_css( $post_id );
		}

		update_post_meta( $post_id, Utils::CSS_TRUST_META, $may_author ? '1' : '0' );
	}

	/**
	 * Processes font attributes when a post is saved.
	 *
	 * @param int      $post_id The ID of the post being saved.
	 * @param WP_Post  $post    The post object.
	 * @param bool     $update  Whether this is an existing post being updated.
	 * @return void
	 */
	public function save_fonts($post_id, $post, $update){
		if (isset($post->post_status) && 'auto-draft' == $post->post_status) {
			return;
		}

		if (false !== wp_is_post_revision($post_id)) {
			return;
		}

		if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
			return;
		}

		if (! $update) {
			return;
		}

		// get post blocks
		$post = get_post($post_id);

		// Bail if no post content
		if (empty($post->post_content)) {
			return;
		}

		$parse_blocks = $this->filter_blocks(parse_blocks($post->post_content));
		if($parse_blocks) {
			foreach ($parse_blocks as $block) {
				if (isset($block['attrs']) && !empty($block['attrs'])) {
					$this->set_typography($block);
				}
			}
		}

		// Check if fonts are set
		if($this->fonts) {
			$this->load_font($this->fonts);
		}
	}

	/**
	 * Sets the CSS for the blocks.
	 *
	 * @param array $parsed_block The parsed block data.
	 * @return array The modified parsed block data.
	 */
	public function set_blocks_css( $parsed_block ) {
		$parsed_block = apply_filters( 'gutenkit/collected_css', $parsed_block );
		$css_content = $this->combine_blocks_asstes( $parsed_block );

		// blocksCSS is an attribute in post content, so it is whatever the last
		// person to save the post put there. Fonts are still collected above,
		// only the stylesheet is held back.
		//
		// The post is passed explicitly rather than left to the global fallback,
		// so which post is being judged is never a question of what happens to be
		// set at the time.
		if(!empty($css_content) && Utils::is_css_trusted( get_the_ID() )) {
			$this->css .= $css_content;
		}

		return $parsed_block;
	}

	/**
	 * Add preconnect for Google Fonts.
	 *
	* @param array  $urls URLs to print for resource hints.
	* @param string $relation_type The relation type the URLs are printed.
	* @return array
	*/
	public function fonts_resource_hints( $urls, $relation_type ) {
		if ( wp_style_is( 'gkit-google-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
			$urls[] = array(
				'href' => 'https://fonts.gstatic.com',
				'crossorigin',
			);
		}

		return $urls;
	}

	/**
	 * Enqueues the Google Fonts stylesheet if available.
	 * Enqueues inline styles for the Gutenkit frontend.
	 */
	public function enqueue_scripts() {
		global $post;

		/*
		 * A block theme renders the whole template before wp_head() (see template-canvas.php), so
		 * render_block_data has already collected everything by the time this runs. A classic theme
		 * renders the content after wp_head(), so the post has to be parsed up front to have any CSS
		 * at all. \Gutenkit\Config\Modules::block_assets() does the same parse on enqueue_block_assets
		 * to work out which modules are in use, so skip it here when that already filled $this->css —
		 * parsing twice appends every rule to the output a second time.
		 */
		if( ! wp_is_block_theme() && empty( $this->css ) && ! empty($post->post_content) ) {
			do_blocks($post->post_content);
		}

		// This checks if the $css property is not empty and adds it as inline styles to the 'gutenkit-frontend-common' stylesheet.
		// Everything reaching this filter is stored by post authors, so it is sanitized as css before being printed inline.
		$generated_css = Utils::sanitize_css( apply_filters( 'gutenkit/generated_css', $this->css ) );
		if(!empty($generated_css)) {
			wp_add_inline_style( 'gutenkit-frontend-common', Utils::cssminifier( $generated_css ) );
		}

		/*
		 * The generated CSS ties on specificity with the defaults in each block's own style.css
		 * (both are plain class chains, e.g. `.gkitfc587b .gkit-nav-link` against
		 * `.wp-block-gutenkit-advanced-tab .gkit-nav-link`), so whichever prints last wins. On a
		 * classic theme 'gutenkit-frontend-common' is enqueued from enqueue_block_assets before the
		 * block stylesheets and the theme stylesheet, so attaching the CSS there loses those ties and
		 * the front end stops matching the editor — the editor injects the same rules behind a
		 * high-specificity .editor-styles-wrapper prefix, so they always win there. Its own handle,
		 * enqueued at the tail of the queue, prints last on every theme type.
		 */
		wp_register_style( 'gutenkit-dynamic-styles', false, array( 'gutenkit-frontend-common' ), GUTENKIT_PLUGIN_VERSION );
		wp_add_inline_style( 'gutenkit-dynamic-styles', Utils::cssminifier( $generated_css ) );
		wp_enqueue_style( 'gutenkit-dynamic-styles' );
	}

	/**
	 * Generate Google Font URL
	 * Combine multiple google font in one URL
	 *
	 * @return string|bool
	 */
	protected function generate_fonts_url() {
		if ( empty( $this->fonts ) ) {
			return false;
		}

		/*
		 * Theme-registered families are deliberately NOT skipped here. A preset in theme.json is
		 * only a promise that something else serves the font, and that promise is regularly broken:
		 * the fontFace src can point at another plugin's assets, or the theme can register the
		 * family without emitting any @font-face at all. Since this plugin ships to every theme,
		 * requesting the font is the safe default. Site owners who know their theme serves its own
		 * fonts can opt back into the old behaviour with the filter below, and anyone worried about
		 * the external request has the "load Google fonts locally" setting.
		 */
		$fonts = apply_filters( 'gutenkit/skip_theme_registered_fonts', false, $this->fonts )
			? $this->check_existing_fonts( $this->fonts )
			: $this->fonts;

		return $this->build_google_fonts_url( $fonts );
	}

	/**
	 * Enqueues the block assets, including Google Fonts.
	 *
	 * @return void
	 */
	public function enqueue_block_fonts() {
		$load_font_locally = Utils::get_settings('load_google_fonts');
		if($load_font_locally) {
			$this->load_font($this->fonts);
		} else {
			$fonts_url = $this->generate_fonts_url();

			// Bail early if no fonts are defined
			if (empty($fonts_url)) {
				return;
			}

			// Load from Google (external)
			$this->enqueue_fonts_inline($fonts_url);
		}
	}

	/**
	 * Enqueue fonts inline using @import.
	 *
	 * @param string $fonts_url Google Fonts or local fonts URL.
	 */
	public function enqueue_fonts_inline($fonts_url) {
		if (empty($fonts_url)) return;

		$handle    = 'gkit-google-fonts-cdn';
		$fonts_css = "@import url('$fonts_url');";

		wp_register_style($handle, false);
		wp_add_inline_style($handle, $fonts_css);
		wp_enqueue_style($handle);
	}
}
