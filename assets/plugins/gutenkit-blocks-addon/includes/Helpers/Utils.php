<?php

namespace Gutenkit\Helpers;

defined( 'ABSPATH' ) || exit;

/**
 * Global helper class.
 *
 * @since 1.0.0
 */

class Utils {

	/**
	 * Returns an array of allowed HTML tags and attributes for SVG elements.
	 *
	 * @return array The array of allowed HTML tags and attributes.
	 */
	public static function svg_allowed_html() {
		$allowed_svg_tags = [
			'svg' => [
				'xmlns' => true,
				'width' => true,
				'height' => true,
				'viewBox' => true,
				'viewbox' => true,
				'fill' => true,
				'class' => true,
				'aria-hidden'     => true,
				'aria-labelledby' => true,
				'role'            => true,
				'preserveaspectratio' => true,
				'version'         => true,
			],
			'title'         => array( 'title' => true ),
			'g' => [
				'transform' => true,
				'style' => true,
				'id' => true,
			],
			'path' => [
				'd' => true,
				'fill' => true,
				'fill-rule' => true,
				'transform' => true,
				'style' => true,
				'opacity' => true,
				'stroke' => true,
				'stroke-width' => true,
				'stroke-miterlimit' => true,
				'stroke-linecap' => true,
				'stroke-linejoin' => true,
				'fill-opacity' => true,
			],
			'circle' => [
				'cx' => true,
				'cy' => true,
				'r' => true,
				'fill' => true,
				'stroke' => true,
				'stroke-width' => true,
			],
			'ellipse' => [
				'cx' => true,
				'cy' => true,
				'rx' => true,
				'ry' => true,
				'fill' => true,
				'stroke' => true,
				'stroke-width' => true,
			],
			'line' => [
				'x1' => true,
				'y1' => true,
				'x2' => true,
				'y2' => true,
				'stroke' => true,
				'stroke-width' => true,
			],
			'polygon' => [
				'points' => true,
				'fill' => true,
				'stroke' => true,
				'stroke-width' => true,
			],
			'polyline' => [
				'points' => true,
				'fill' => true,
				'stroke' => true,
				'stroke-width' => true,
			],
			'rect' => [
				'x' => true,
				'y' => true,
				'width' => true,
				'height' => true,
				'fill' => true,
				'stroke' => true,
				'stroke-width' => true,
			],
			'text' => [
				'x' => true,
				'y' => true,
				'dx' => true,
				'dy' => true,
				'text-anchor' => true,
				'style' => true,
			],
			'tspan' => [
				'x' => true,
				'y' => true,
				'dx' => true,
				'dy' => true,
				'text-anchor' => true,
				'style' => true,
			],
			'defs' => [],
			'lineargradient' => [
				'id' => true,
				'x1' => true,
				'y1' => true,
				'x2' => true,
				'y2' => true,
				'gradientunits' => true,
			],
			'stop' => [
				'offset' => true,
				'style' => true,
				'stop-color' => true,
				'stop-opacity' => true,
			],
			'radialgradient' => [
				'id' => true,
				'cx' => true,
				'cy' => true,
				'r' => true,
				'gradientunits' => true,
				'gradienttransform' => true,
			],
		];

		return apply_filters( 'gutenkit_allowed_svg_attrs_tags', $allowed_svg_tags );
	}

	/**
	 * Returns an array of allowed JSON attribute tags.
	 *
	 * This function defines an array of allowed JSON attribute tags and their corresponding properties.
	 * The array includes tags such as 'object', 'array', 'string', 'number', 'integer', 'boolean', 'null',
	 * 'enum', 'const', 'oneOf', 'allOf', 'anyOf', 'not', 'if', 'then', 'else', and 'format'.
	 *
	 * @return array The array of allowed JSON attribute tags.
	 */
	public static function allowed_json_attrs_tags() {
		$allowed_json_tags = [
			'object' => [
				'type' => true,
				'properties' => true,
				'required' => true,
				'additionalProperties' => true,
				'propertyNames' => true,
				'dependencies' => true,
				'minProperties' => true,
				'maxProperties' => true,
			],
			'array' => [
				'type' => true,
				'items' => true,
				'minItems' => true,
				'maxItems' => true,
				'uniqueItems' => true,
			],
			'string' => [
				'type' => true,
				'minLength' => true,
				'maxLength' => true,
				'pattern' => true,
				'format' => true,
				'contentEncoding' => true,
				'contentMediaType' => true,
			],
			'number' => [
				'type' => true,
				'minimum' => true,
				'maximum' => true,
				'exclusiveMinimum' => true,
				'exclusiveMaximum' => true,
				'multipleOf' => true,
			],
			'integer' => [
				'type' => true,
				'minimum' => true,
				'maximum' => true,
				'exclusiveMinimum' => true,
				'exclusiveMaximum' => true,
			],
			'boolean' => [
				'type' => true,
			],
			'null' => [
				'type' => true,
			],
			'enum' => [
				'type' => true,
				'enum' => true,
			],
			'const' => [
				'type' => true,
				'const' => true,
			],
			'oneOf' => [
				'type' => true,
				'oneOf' => true,
			],
			'allOf' => [
				'type' => true,
				'allOf' => true,
			],
			'anyOf' => [
				'type' => true,
				'anyOf' => true,
			],
			'not' => [
				'type' => true,
				'not' => true,
			],
			'if' => [
				'type' => true,
				'if' => true,
			],
			'then' => [
				'type' => true,
				'then' => true,
			],
			'else' => [
				'type' => true,
				'else' => true,
			],
			'format' => [
				'type' => true,
				'format' => true,
			],
			'title' => true,
			'description' => true,
			'default' => true,
			'examples' => true,
			'$ref' => true,
			'$id' => true,
			'$schema' => true,
			// Adding Lottie-specific keys
			'v' => true,
			'meta' => true,
			'fr' => true,
			'ip' => true,
			'op' => true,
			'w' => true,
			'h' => true,
			'nm' => true,
			'ddd' => true,
			'assets' => true,
			'layers' => true,
			'markers' => true,
			// Particle Module specific keys
			'autoPlay' => true,
			'background' => true,
			'backgroundMask' => true,
			'clear' => true,
			'defaultThemes' => true,
			'delay' => true,
			'fullScreen' => true,
			'detectRetina' => true,
			'duration' => true,
			'fpsLimit' => true,
			'interactivity' => true,
			'manualParticles' => true,
			'particles' => true,
			'pauseOnBlur' => true,
			'pauseOnOutsideViewport' => true,
			'responsive' => true,
			'smooth' => true,
			'style' => true,
			'themes' => true,
			'zLayers' => true,
			'name' => true,
			'emitters' => true,
			'motion' => true
		];
	
		return apply_filters('gutenkit_allowed_json_attrs_tags', $allowed_json_tags);
	}

	public static function iframe_allowed_html() {
		return array(
			'iframe' => array(
				'src' => true,
				'name' => true,
				'sandbox' => true,
				'width' => true,
				'height' => true,
				'marginheight' => true,
				'marginwidth' => true,
				'scrolling' => true,
				'allowfullscreen' => true,
				'frameborder' => true,
				'title' => true,
				'id' => true,
				'class' => true,
				'style' => true,
				'tabindex' => true,
				'allow' => true,
			),
		);
	}

	public static function gdc_allowed_html()
	{
		return array(
			'gdc' => array(
				'selectedpath' => true,
				'class' => true,
				'id' => true,
				'fallback' => true,
				'postcustomfield' => true,
				'postcustomfieldkey' => true,
				'postdatetype' => true,
				'dateformat' => true,
				'customdateformat' => true,
				'excerptlength' => true,
				'tagindex' => true,
				'timetype' => true,
				'timeformat' => true,
				'customtimeformat' => true,
				'categoryindex' => true,
				'nocomment' => true,
				'singlecomment' => true,
				'multicomments' => true,
				'currentdateformat' => true,
				'customcurrentdateformat' => true,
				'currenttimeformat' => true,
				'customcurrenttimeformat' => true,
				'authorinfo' => true,
				'currentuserinfo' => true,
				'acfgroup' => true,
				'acffield' => true,
			),
		);
	}

	/**
	 * Returns the allowed HTML tags and attributes for the img element.
	 *
	 * @return array The allowed HTML tags and attributes.
	 */
	public static function img_allowed_html() {
		return array(
			'img' => array(
				'alt' => true,
				'src' => true,
				'srcset' => true,
				'class' => true,
				'height' => true,
				'width' => true,
			)
		);
	}

	/**
	 * Returns the allowed HTML tags and attributes for the style element.
	 *
	 * @return array The allowed HTML tags and attributes.
	 */
	public static function style_allowed_html() {
		return array(
			'style' => array(
				'class' => true,
				'id' => true,
			)
		);
	}

	public static function get_device_list()
	{
		$default_device_list = [
			[
				'label' => 'Desktop',
				'slug' => 'Desktop',
				'value' => 'base',
				'direction' => 'max',
				'isActive' => true,
				'isRequired' => true,
			],
			[
				'label' => 'Tablet',
				'slug' => 'Tablet',
				'value' => '1024',
				'direction' => 'max',
				'isActive' => true,
				'isRequired' => true,
			],
			[
				'label' => 'Mobile',
				'slug' => 'Mobile',
				'value' => '767',
				'direction' => 'max',
				'isActive' => true,
				'isRequired' => true,
			]
		];

		$active_modules = \Gutenkit\Config\Modules::get_active_modules_list();
		if ( ! empty( $active_modules['breakpoints'] ) ) {
			$custom_breakpoints = get_option( 'gutenkitBreakpoints' );
			if($custom_breakpoints) {
				$custom_breakpoints = json_decode($custom_breakpoints, true);
				$custom_breakpoints = array_filter($custom_breakpoints, function($device) {
					return !empty($device['isActive']);
				});
				usort($custom_breakpoints, function($a, $b) {
					return (int)$b['value'] - (int)$a['value'];
				});
				return array_merge( [$default_device_list[0]], $custom_breakpoints );
			} else {
				return $default_device_list;
			}
		}

		return $default_device_list;
	}

	/**
	 * Adds class to SVG
	 *
	 * @since 1.0.0
	 * @access public
	 */
	public static function add_class_to_svg( $svg ) {
		$originalString = $svg;
		$substringToAdd = "class='gkit-icon' ";
	
		$position = strpos( $originalString, '<svg' );
		
		if ( $position !== false ) {
			$svg = substr_replace( $originalString, $substringToAdd, $position + 5, 0 );
			return $svg;
		}
	
		return $svg;
	}

	/**
	 * Retrieves the dynamic block wrapper attributes.
	 *
	 * This function retrieves the wrapper attributes for a dynamic block.
	 * It checks if the function "get_block_wrapper_attributes" exists and if the block is not empty.
	 * If both conditions are met, it retrieves the block attributes, including the block ID.
	 * It then merges the required attributes with any extra attributes provided.
	 * Finally, it applies the "gutenkit/dynamic_block_wrapper_attributes" filter and returns the wrapper attributes.
	 *
	 * @param object $block The dynamic block object.
	 * @param array $extra_attrs Additional attributes to be merged with the required attributes.
	 * @return string The wrapper attributes for the dynamic block.
	 */
	public static function get_dynamic_block_wrapper_attributes($block, $extra_attrs = array()) {
		if(function_exists("get_block_wrapper_attributes") && !empty($block)) {
			$block_attrs = $block->attributes;
			$block_id = $block_attrs['blockID'];
			$required_attrs = array(
				'id' => 'block-' . $block_id
			);
			$wrapper_attrs = apply_filters('gutenkit/dynamic_block_wrapper_attributes', array_merge($required_attrs, $extra_attrs), $block);
			return get_block_wrapper_attributes($wrapper_attrs);
		}
	}
	
	/**
	 * Extends the allowed HTML tags for post content.
	 *
	 * @return array The extended array of allowed HTML tags.
	 */
	public static function post_kses_extend_allowed_html() {
		$default_post_allowed_html = wp_kses_allowed_html( 'post' );

		$post_allowed_html = array_merge( $default_post_allowed_html, self::svg_allowed_html(), self::iframe_allowed_html(), self::gdc_allowed_html(), self::style_allowed_html() );

		return $post_allowed_html;
	}

	/**
	 * Retrieves the settings from the specified key in the options table.
	 *
	 * @param string $key The key of the settings in the options table.
	 * @param string $list Optional. The specific list within the settings to retrieve.
	 * @param string $option Optional. The specific option within the list to retrieve.
	 * @return mixed The retrieved settings, or false if the list or option is not found.
	 */
	public static function get_settings($key = '', $field = 'status', $inner_field = '' ) {
		$settings = get_option( 'gutenkit_settings_list' );

		// check if $key & $field both empty
		if ( empty($key) && empty($field) ) {
			return $settings;
		}
	
		// check for primary key
		if ( !empty($key) && !empty($settings[$key]) ) {
			$settings = $settings[$key];
		}

		// check for primary field
		if( !empty($field) ) {
			if( $field === 'status' && !empty($settings[$field]) ) {
				return ($settings[$field] === 'active') ? true : false;
			} else {
				$settings = !empty($settings[$field]) ? $settings[$field] : false;
			}
		}

		// check for inner field
		if( !empty($inner_field) ) {
			if( isset($settings[$inner_field]['value']) ) {
				$settings = $settings[$inner_field]['value'];
			} else {
				$settings = !empty($settings[$inner_field]) ? $settings[$inner_field] : false;
			}
		}
	
		return $settings;
	}

	/**
	 * Returns an array representing the border value based on the given key.
	 *
	 * @param mixed $key The key used to determine the border value.
	 * @return array An array representing the border value. The array contains the following keys:
	 *               - 'border': The border value, or null if the key is null.
	 */
	public static function get_border_value($key) {
	
		
		if (!is_array($key)) {
			return ['border' => null];
		}
	
		$keyLength = count($key);


		if ($keyLength < 3) {
			$properties = ['style', 'color', 'width'];
			$borderParts = [];
		
			foreach ($properties as $property) {
				if (isset($key[$property])) {
					$borderParts[] = $key[$property];
				}
			}

			
			return ['border' => implode(' ', $borderParts)];
			
		}
		
	
		if ($keyLength === 3) {
			if (isset($key['style'])) {
				return ['border' => "{$key['width']} {$key['style']} {$key['color']}"];
			}
		}
	
		if ($keyLength === 4 || $keyLength === 3) {
			$border = [];
			foreach ($key as $direction => $value) {
				if (isset($value['style'])) {
					$border["border-{$direction}"] = "{$value['width']} {$value['style']} {$value['color']}";
				}
			}
			return $border;
		}
	}

	/**
	 * get box value
	 * 
	 * Similar to getBoxValue in gutenkit js helper
	 * @param array $key
	 * @param string $property
	 */

	public static function get_box_value($key = [], $property = "") {
		$top = isset($key['top']) ? $key['top'] : null;
		$right = isset($key['right']) ? $key['right'] : null;
		$bottom = isset($key['bottom']) ? $key['bottom'] : null;
		$left = isset($key['left']) ? $key['left'] : null;

		$boxObject = ['top' => $top, 'right' => $right, 'bottom' => $bottom, 'left' => $left];
		$count = count(array_filter($boxObject, function ($value) {
			return $value !== null;
		}));

		if ($count === 0) return [$property => null];

		if ($count === 4) {
			$boxValues = '';

			if ($top === $bottom && $top === $right && $top === $left) {
				$boxValues = $top;
			} elseif ($top === $bottom && $left === $right) {
				$boxValues = "{$top} {$right}";
			} else {
				$boxValues = "{$top} {$right} {$bottom} {$left}";
			}

			return [$property => $boxValues];
		}

		$finalBox = [];

		if ($property !== "border-radius") {
			foreach ($boxObject as $direction => $value) {
				$finalBox["{$property}-{$direction}"] = isset($key[$direction]) ? $key[$direction] : null;
			}

			return $finalBox;
		}

		if ($property === "border-radius") {
			$finalBox["border-top-left-radius"] = $top;
			$finalBox["border-top-right-radius"] = $right;
			$finalBox["border-bottom-right-radius"] = $bottom;
			$finalBox["border-bottom-left-radius"] = $left;

			return $finalBox;
		}
	}

	/**
	 * Retrieves the color based on the given type and color.
	 *
	 * @param string $type The type of color to retrieve. Can be either 'gradient' or 'color'.
	 * @param string $color The color value.
	 * @return string The retrieved color.
	 */
	public static function get_color($type, $color) {

		if (empty($color) || strpos($color, "linear-gradient(") === 0 || strpos($color, "radial-gradient(") === 0 || strpos($color, '#') === 0) {
			return $color;
		}
		
		$color_parts = explode(',', $color, 2);
		

		$color_parts1 = $color_parts[0];
		$color_parts2 = $color_parts[1];

		$bg_color = "";

		if($type == 'gradient'){
			$bg_color = "var(--wp--preset--gradient--".$color_parts1.",".$color_parts2.")";
			
		} else {
			$bg_color = "var(--wp--preset--color--".$color_parts1.",". $color_parts2.")";
		}
		return $bg_color;
	}

	/**
	 * fill_background_generator
	 * 
	 * Similar to fillBackgroundGenerator in gutenkit js helper
	 * 
	 * @param array $background
	 * @param string $device
	 */

	public static function fill_background_generator($background, $device = "Desktop") {
		
		$fillBackground = [];

		if (isset($background['backgroundType']) && $background['backgroundType'] === 'classic') {
			if (!empty($background['backgroundColor'])) {
				$fillBackground['background-color'] = self::get_color('color', $background['backgroundColor']);
			}
		}

		if (isset($background['backgroundType']) && $background['backgroundType'] === 'gradient' && !empty($background['gradient'])) {
			$gradient = self::get_color('gradient', $background['gradient']);
			if (!empty($gradient)) {
				$fillBackground['background-image'] = $gradient;
			}
		}

		if (isset($background['backgroundType']) && $background['backgroundType'] === 'image' && !empty($background['backgroundImage'])) {
			if (!empty($background['backgroundImage']['imageUrl'])) {
				$fillBackground['background-image'] = "url({$background['backgroundImage']['imageUrl']})";
			}

			if (!empty($background['backgroundAttachment'])) {
				$fillBackground['background-attachment'] = $background['backgroundAttachment'];
			}

			if (!empty($background['backgroundPosition'][$device]) && $background['backgroundPosition'][$device] !== "custom") {
				$fillBackground['background-position'] = $background['backgroundPosition'][$device];
			}

			if (
				!empty($background['backgroundPosition'][$device]) && $background['backgroundPosition'][$device] === "custom" &&
				!empty($background['customPositionX'][$device]) && !empty($background['customPositionY'][$device])
			) {
				$fillBackground['background-position'] = self::get_slider_value($background['customPositionX'][$device]) . ' ' . self::get_slider_value($background['customPositionY'][$device]);
			}

			if (!empty($background['backgroundSize']) && $background['backgroundSize'] !== "custom") {
				$fillBackground['background-size'] = $background['backgroundSize'];
			}

			if (
				!empty($background['backgroundSize']) && $background['backgroundSize'] === "custom" &&
				!empty($background['customSize'][$device])
			) {
				$fillBackground['background-size'] = self::get_slider_value($background['customSize'][$device]) . ' auto';
			}

			if (!empty($background['backgroundRepeat'])) {
				$fillBackground['background-repeat'] = $background['backgroundRepeat'];
			}
		}

		return $fillBackground;
	}

	/**
	 * get_typography_value
	 * 
	 * Similar to getTypographyValue in gutenkit js helper
	 */
	public static function get_typography_value($key, $device) {
		if ($device === 'Desktop') {
			return [
				'font-family' => isset($key['fontFamily']['value']) ? $key['fontFamily']['value'] : null,
				'font-size' => isset($key['fontSize'][$device]['size']) && isset($key['fontSize'][$device]['unit']) 
					? $key['fontSize'][$device]['size'] . $key['fontSize'][$device]['unit'] 
					: null,
				'font-style' => isset($key['fontStyle']) ? $key['fontStyle'] : null,
				'font-weight' => isset($key['fontWeight']['value']) ? $key['fontWeight']['value'] : null,
				'text-decoration' => isset($key['textDecoration']) ? $key['textDecoration'] : null,
				'text-transform' => isset($key['textTransform']) ? $key['textTransform'] : null,
				'line-height' => isset($key['lineHeight'][$device]['size']) && isset($key['lineHeight'][$device]['unit']) 
					? $key['lineHeight'][$device]['size'] . $key['lineHeight'][$device]['unit'] 
					: null,
				'letter-spacing' => isset($key['letterSpacing'][$device]['size']) && isset($key['letterSpacing'][$device]['unit']) 
					? $key['letterSpacing'][$device]['size'] . $key['letterSpacing'][$device]['unit'] 
					: null,
				'word-spacing' => isset($key['wordSpacing'][$device]['size']) && isset($key['wordSpacing'][$device]['unit']) 
					? $key['wordSpacing'][$device]['size'] . $key['wordSpacing'][$device]['unit'] 
					: null,
			];
		} else {
			return [
				'font-size' => isset($key['fontSize'][$device]['size']) && isset($key['fontSize'][$device]['unit']) 
					? $key['fontSize'][$device]['size'] . $key['fontSize'][$device]['unit'] 
					: null,
				'line-height' => isset($key['lineHeight'][$device]['size']) && isset($key['lineHeight'][$device]['unit']) 
					? $key['lineHeight'][$device]['size'] . $key['lineHeight'][$device]['unit'] 
					: null,
				'letter-spacing' => isset($key['letterSpacing'][$device]['size']) && isset($key['letterSpacing'][$device]['unit']) 
					? $key['letterSpacing'][$device]['size'] . $key['letterSpacing'][$device]['unit'] 
					: null,
				'word-spacing' => isset($key['wordSpacing'][$device]['size']) && isset($key['wordSpacing'][$device]['unit']) 
					? $key['wordSpacing'][$device]['size'] . $key['wordSpacing'][$device]['unit'] 
					: null,
			];
		}
	}
	

	/**
	 * get slider value
	 * 
	 * Similar to getSliderValue function in JS helper
	 * @param string $value
	 * @return string
	 */

	public static function get_slider_value($key) {
		$value = '';

		if (!empty($key['size']) && !empty($key['unit'])) {
			$value = $key['size'] . $key['unit'];
		} elseif (!empty($key['size']) && empty($key['unit'])) {
			$value = $key['size'];
		} else {
			$value = null;
		}

		return $value;
	}

	/**
	 * parse css
	 * 
	 * @param string $css
	 * @return string
	 */

	public static function parse_css($raw_css) {
		
		$styles = [];
		$device_list = ['desktop', 'tablet', 'mobile', 'tabletlandscape', 'mobilelandscape', 'laptop', 'widescreen'];

		foreach ($device_list as $device) {
			$deviceStyles = $raw_css[$device] ?? [];

			$styles[$device] = array_map(function ($style) {
				if (!is_array($style) || !isset($style['selector'])) {
					return '';
				}

				$selector = $style['selector'];
				// PHP twin of helper/is-valid-css-value.js — keep the two in sync.
				$cssValues = array_filter($style, function ($value, $key) {
					if ($key === 'selector' || $value === null || $value === '' || is_bool($value) || is_array($value)) {
						return false;
					}

					// Numbers are valid CSS values: opacity, z-index, order, flex-shrink,
					// unitless line-height. The previous `!is_numeric()` check dropped all of them.
					if (is_int($value) || is_float($value)) {
						return !is_nan((float) $value);
					}

					$str = trim((string) $value);

					if ($str === '' || in_array($str, ['false', 'true', 'undefined', 'null', 'NaN'], true)) {
						return false;
					}

					// "undefinedpx", "NaNem", "background undefineds" ...
					if (strpos($str, 'undefined') !== false || strpos($str, 'NaN') !== false) {
						return false;
					}

					// A size that arrived without a number.
					if (in_array($str, ['px', 'em', 'rem', '%', 'vh', 'vw'], true)) {
						return false;
					}

					// Empty functional notation: url(), rotateZ(), translateY( ), blur() ...
					if (preg_match('/(?:^|[\s,])[a-zA-Z-]+\(\s*\)/', $str)) {
						return false;
					}

					return true;
				}, ARRAY_FILTER_USE_BOTH);

				if (empty($cssValues)) {
					return '';
				}

				return "{$selector} { " . implode(' ', array_map(function ($key, $value) {
					return "{$key}: {$value};";
				}, array_keys($cssValues), $cssValues)) . " }";
			}, $deviceStyles);
		}
		
		$device_styles = array_map(function ($style) {
			return implode("\n", $style);
		}, $styles);

		return $device_styles;
	}

	/**
	 * Minify css
	 * condense white space
	 * remove comments
	 *
	 * @param string $css
	 * @return string minified css
	 */
	/**
	 * Repair declarations that the style generators should never have produced.
	 *
	 * Generated block styles are persisted into post content, so a declaration written by an
	 * older version of the generators keeps being served long after the generator itself was
	 * fixed — it is only rewritten when that individual block is next edited. Sanitising here
	 * means existing content stops emitting invalid CSS without anyone having to re-save a page.
	 *
	 * Three classes of defect are handled:
	 *
	 *  1. Empty values — `transform: ;`. A parse error, and browsers that tolerate it can still
	 *     let the empty declaration override whatever the stylesheet already set.
	 *  2. Leaked JS literals — `max-width: false`, `display: true`. Produced by `cond && value`
	 *     expressions where the condition was false. No CSS property accepts these.
	 *  3. Box-alignment values borrowed from `text-align` — `align-items: left`. `left`/`right`
	 *     are only valid on the `justify-*` properties; on `align-*` they are a parse error.
	 *     These carry real intent, so they are mapped rather than dropped.
	 *
	 * Custom properties are exempt throughout: `--foo: ;` is a valid, meaningful declaration
	 * (the "space toggle" pattern), and a custom property may legitimately hold any token.
	 *
	 * @param string $css
	 * @return string
	 */
	protected static function sanitize_generated_declarations( $css ) {
		// A property name, excluding custom properties.
		$prop = '(?!--)[a-zA-Z-][\w-]*';

		$patterns = array(
			// 1a. One or more consecutive empty declarations: "{transform: ; color: ; }".
			//     The `+` collapses runs in a single pass instead of one per iteration.
			'/([{;])(?:\s*' . $prop . '\s*:\s*;)+/',
			// 1b. An empty declaration closing a block: "{color:red; transform: }".
			'/([{;])\s*' . $prop . '\s*:\s*(?=\})/',
			// 2.  A JS literal that reached the stylesheet as a value.
			'/([{;])\s*' . $prop . '\s*:\s*(?:false|true|undefined|null|NaN)\s*(?=[;}])/i',
			// 3a. `none` is not a <length-percentage>, so it is invalid on any radius.
			'/([{;])\s*border[\w-]*radius\s*:\s*none\s*(?=[;}])/i',
		);

		// Bounded loop: the patterns above are single-pass, but stripping one declaration can
		// expose another that was anchored to the delimiter it consumed.
		for ( $i = 0; $i < 5; $i++ ) {
			$next = preg_replace( $patterns, '$1', $css );

			if ( null === $next || $next === $css ) {
				break;
			}

			$css = $next;
		}

		// Removing a declaration leaves behind the separator that followed it, so tidy up the
		// runs of empty separators that produces: "{;color:red}" and "a:b;;c:d".
		$css = preg_replace( array( '/\{\s*;+/', '/;\s*;+/' ), array( '{', ';' ), $css );

		// 3b. Map inline-axis keywords onto their block-axis equivalents.
		$aligned = preg_replace_callback(
			'/([{;]\s*align-(?:items|content|self)\s*:\s*)(left|right|top|bottom)(\s*(?=[;}]))/i',
			function ( $m ) {
				$map = array(
					'left'   => 'flex-start',
					'top'    => 'flex-start',
					'right'  => 'flex-end',
					'bottom' => 'flex-end',
				);

				return $m[1] . $map[ strtolower( $m[2] ) ] . $m[3];
			},
			$css
		);

		return null === $aligned ? $css : $aligned;
	}

	public static function cssminifier($raw_css) {
		if ( trim( $raw_css ) === '' ) {
			return $raw_css;
		}

		$raw_css = self::sanitize_generated_declarations( $raw_css );

		$css = preg_replace(
			array(
				// Remove comment(s)
				'#("(?:[^"\\\]++|\\\.)*+"|\'(?:[^\'\\\\]++|\\\.)*+\')|\/\*(?!\!)(?>.*?\*\/)|^\s*|\s*$#s',
				// Remove unused white-space(s)
				'#("(?:[^"\\\]++|\\\.)*+"|\'(?:[^\'\\\\]++|\\\.)*+\'|\/\*(?>.*?\*\/))|\s*+;\s*+(})\s*+|\s*+([*$~^|]?+=|[{};,>~]|\s(?![0-9\.])|!important\b)\s*+|([[(:])\s++|\s++([])])|\s++(:)\s*+(?!(?>[^{}"\']++|"(?:[^"\\\]++|\\\.)*+"|\'(?:[^\'\\\\]++|\\\.)*+\')*+{)|^\s++|\s++\z|(\s)\s+#si',
				// Replace `0(cm|em|ex|in|mm|pc|pt|px|vh|vw|%)` with `0`
				'#(?<=[\s:])(0)(cm|em|ex|in|mm|pc|pt|px|vh|vw|%)#si',
				// Replace `:0 0 0 0` with `:0`
				'#:(0\s+0|0\s+0\s+0\s+0)(?=[;\}]|\!important)#i',
				// Replace `background-position:0` with `background-position:0 0`
				'#(background-position):0(?=[;\}])#si',
				// Replace `0.6` with `.6`, but only when preceded by `:`, `,`, `-` or a white-space
				'#(?<=[\s:,\-])0+\.(\d+)#s',
				// Minify string value
				'#(\/\*(?>.*?\*\/))|(?<!content\:)([\'"])([a-z_][a-z0-9\-_]*?)\2(?=[\s\{\}\];,])#si',
				'#(\/\*(?>.*?\*\/))|(\burl\()([\'"])([^\s]+?)\3(\))#si',
				// Minify HEX color code
				// '#(?<=[\s:,\-]\#)([a-f0-6]+)\1([a-f0-6]+)\2([a-f0-6]+)\3#i',
				// Replace `(border|outline):none` with `(border|outline):0`
				'#(?<=[\{;])(border|outline):none(?=[;\}\!])#',
				// Remove empty selector(s)
				'#(\/\*(?>.*?\*\/))|(^|[\{\}])(?:[^\s\{\}]+)\{\}#s',
			),
			array(
				'$1',
				'$1$2$3$4$5$6$7',
				'$1',
				':0',
				'$1:0 0',
				'.$1',
				'$1$3',
				'$1$2$4$5',
				// NOTE: the HEX-colour pattern above is commented out. Its replacement ('$1$2$3')
				// used to be left here, which shifted every replacement below it by one — so
				// `border:none` minified to `border` and an empty rule minified to `:0`.
				// Keep this array exactly the same length as the pattern array.
				'$1:0',
				'$1$2',
			),
			$raw_css
		);

		// Drop any rule left with an empty body. The "Remove empty selector(s)" pattern above
		// only matches selectors containing no whitespace, and generated selectors always have
		// descendant combinators. Nested rules need more than one pass, so loop until stable.
		for ( $i = 0; $i < 5; $i++ ) {
			$next = preg_replace( '/[^{}]+\{\s*\}/', '', $css );

			if ( null === $next || $next === $css ) {
				break;
			}

			$css = $next;
		}

		return $css;
	}

	/**
	 * Clean up css before it is printed inside an inline <style> block.
	 *
	 * This is output hygiene, not the trust boundary. Whether a stored style may
	 * render for other people at all is decided by is_css_trusted(). Removing
	 * keywords can not make arbitrary css safe: a viewport covering overlay or
	 * an attribute selector that fetches a remote url is built out of ordinary
	 * properties, and any keyword rule is evadable with a css escape anyway.
	 *
	 * @param string $raw_css
	 * @return string sanitized css
	 */
	public static function sanitize_css($raw_css) {
		if ( ! is_string( $raw_css ) || trim( $raw_css ) === '' ) {
			return '';
		}

		// Remove control characters, tabs and new lines aside, so no parser sees
		// something different from what is matched below.
		$css = preg_replace( '#[\x00-\x08\x0B\x0C\x0E-\x1F\x7F]#', '', $raw_css );

		// Remove comment(s), leaving quoted strings alone, so they can not be
		// used to split any of the keywords matched below.
		$css = preg_replace( '#("(?:[^"\\\]++|\\\.)*+"|\'(?:[^\'\\\\]++|\\\.)*+\')|\/\*(?>.*?\*\/)#s', '$1', $css );

		$css = preg_replace(
			array(
				// A closing tag is the only thing that ends the inline <style>
				// block, so dropping `</` keeps markup from escaping into html.
				'#<\s*\/+#',
				// Legacy script execution vectors.
				'#\bexpression\s*\(#i',
				// Anchored: without it this ate the `behavior:` inside
				// `scroll-behavior:` and `overscroll-behavior:`, leaving a broken
				// declaration behind.
				'#(?<![-\w])(-moz-binding|behavior)\s*:#i',
				// Script bearing urls and documents.
				'#(javascript|vbscript|livescript|mocha)\s*:#i',
				'#data\s*:\s*(text\/html|application\/xhtml)#i',
			),
			'',
			$css
		);

		return null === $css ? '' : $css;
	}

	/**
	 * Meta key holding whether a post's stored css was last saved by someone
	 * allowed to publish it. Protected, so it is not writable over REST.
	 */
	const CSS_TRUST_META = '_gutenkit_css_trusted';

	/**
	 * Whether a user may publish the given post type.
	 *
	 * This is the line that matters for stored css. Publishing is what makes
	 * content visible to other people without review, so a user who holds it can
	 * already put whatever they like on the front end. A user who does not, a
	 * Contributor most of all, is meant to have their work reviewed first.
	 *
	 * @param int    $user_id   0 for the current user.
	 * @param string $post_type
	 * @return bool
	 */
	public static function user_can_publish($user_id = 0, $post_type = 'post') {
		$post_type_object = get_post_type_object( $post_type );
		$capability       = isset( $post_type_object->cap->publish_posts ) ? $post_type_object->cap->publish_posts : 'publish_posts';

		if ( ! $user_id ) {
			return current_user_can( $capability );
		}

		return user_can( $user_id, $capability );
	}

	/**
	 * Whether a block name belongs to GutenKit, for css collection purposes.
	 *
	 * One predicate, deliberately. This used to be decided in three places with
	 * three different tests, and a name that satisfied one but not another - say
	 * `mygutenkit/heading`, which the renderer collected css from but the save
	 * time strip skipped - fell straight through the gap between them. Anything
	 * that reads or removes block css has to agree on this, so it lives here.
	 *
	 * Matches the loose test the renderer has always used rather than tightening
	 * to the `gutenkit/` namespace: tightening would silently stop collecting css
	 * for names that are being styled today.
	 *
	 * @param string $block_name
	 * @return bool
	 */
	public static function is_gutenkit_block_name($block_name) {
		return ! empty( $block_name ) && false !== strpos( (string) $block_name, 'gutenkit' );
	}

	/**
	 * Post meta keys whose value is emitted as css.
	 *
	 * Filterable so the pro plugin can register its own without this list having
	 * to know about them.
	 *
	 * @return array
	 */
	public static function css_meta_keys() {
		return apply_filters( 'gutenkit/css_meta_keys', array(
			'postBodyCss',
			'globalClassManagerStyle',
			'classManagerCustomCSS',
		) );
	}

	/**
	 * Whether the css currently stored against a post was written by somebody
	 * who could publish it.
	 *
	 * Distinct from is_css_trusted(): this one asks only about the stored value
	 * and ignores who is looking, so it can be asked during a save, about the
	 * state that existed before that save.
	 *
	 * @param int|\WP_Post|null $post
	 * @return bool
	 */
	public static function is_stored_css_vouched($post = null) {
		$post = get_post( $post );

		if ( ! $post ) {
			return true;
		}

		$stamp = get_post_meta( $post->ID, self::CSS_TRUST_META, true );
		if ( '' !== $stamp ) {
			return '1' === (string) $stamp;
		}

		// Stored before the stamp existed, so fall back to what its author may do.
		return self::user_can_publish( (int) $post->post_author, $post->post_type );
	}

	/**
	 * Whether a post's stored css may be rendered for the current viewer.
	 *
	 * Css stored against a post is arbitrary: it can cover the viewport, restyle
	 * anything on the page, or make the browser fetch a remote url. So it is
	 * rendered only when someone who can publish stood behind it, which is the
	 * same review step the rest of a Contributor's content goes through.
	 *
	 * @param int|\WP_Post|null $post 0 or null for the post in hand.
	 * @return bool
	 */
	public static function is_css_trusted($post = null) {
		$post = get_post( $post );

		// No post in context means the css came from a template or from code,
		// not from something a user stored.
		if ( ! $post ) {
			return true;
		}

		$author_id = (int) $post->post_author;

		// Authors always see their own styling, so editing and previewing their
		// own draft still works.
		if ( $author_id && get_current_user_id() === $author_id ) {
			return true;
		}

		return self::is_stored_css_vouched( $post );
	}

	/**
	 * Sanitize a stored css value at save time, by what the saving user may do.
	 *
	 * This is the same rule WordPress applies to post content with kses: what is
	 * kept is decided by the capability of whoever is saving, once, and nothing
	 * later un-decides it. A user who cannot publish is not able to author a
	 * stylesheet, so their value is dropped here rather than stored and guarded
	 * at every place that reads it — publishing the post afterwards cannot bring
	 * it back, because there is nothing left to bring back.
	 *
	 * Every value this guards is either regenerated from the structured controls
	 * next time the post is edited, or is a free form css box, which is the very
	 * thing being withheld. Nothing that cannot be rebuilt is lost.
	 *
	 * @param mixed  $value
	 * @param string $meta_key
	 * @param string $object_type
	 * @param string $object_subtype Post type, when the meta was registered for one.
	 * @return mixed
	 */
	public static function sanitize_css_on_save($value, $meta_key = '', $object_type = 'post', $object_subtype = '') {
		// No user means cron, WP-CLI or an importer, which are not the case this
		// guards. Leave those alone rather than silently emptying their writes.
		if ( get_current_user_id() && ! self::user_can_publish( 0, $object_subtype ? $object_subtype : 'post' ) ) {
			return is_array( $value ) ? array() : '';
		}

		return self::sanitize_css_map( $value );
	}

	/**
	 * Sanitize css stored as a map of device => css string.
	 *
	 * @param mixed $value
	 * @return mixed value with every css string sanitized
	 */
	public static function sanitize_css_map($value) {
		if ( is_array( $value ) ) {
			return array_map( array( __CLASS__, 'sanitize_css_map' ), $value );
		}

		return is_string( $value ) ? self::sanitize_css( $value ) : $value;
	}

	/**
	 * Check if the block is a GutenKit block.
	 *
	 * @param string $attrs
	 * @return bool
	 */
	public static function is_gkit_block($block_content, $parsed_block, $attrs = '', $attrs2 = '') {
		// Check if $block_content is not empty
		$hasBlockContent = !empty($block_content);

		// Check if $block['blockName'] is not empty and contains 'gutenkit'
		$hasValidBlockName = !empty($parsed_block['blockName']) && strpos($parsed_block['blockName'], 'gutenkit') !== false;

		// Check if $block['attrs']['blockClass'] is not empty
		$hasBlockClass = !empty($attrs) && !empty($attrs2) 
			? !empty($parsed_block['attrs'][$attrs][$attrs2]) 
			: !empty($parsed_block['attrs'][$attrs] ?? '');

		if(empty($attrs) && empty($attrs2)) {
			$hasBlockClass = true;
		}

		// Return true if all conditions are met
		return $hasBlockContent && $hasValidBlockName && $hasBlockClass;
	}

	/**
	 * Retrieves the link attributes based on the provided attribute array.
	 *
	 * @param array $attribute The attribute array containing the link data.
	 * @return string The generated link attributes as a string.
	 */
	public static function get_link_attributes($attribute) {
		if (empty($attribute['url'])) return '';

		$link_data = [];

		$link_data['href'] = esc_url($attribute['url'], wp_allowed_protocols());

		(isset($attribute['newTab']) && $attribute['newTab']) ? $link_data['target'] = '_blank' : '';

		(isset($attribute['noFollow']) && $attribute['noFollow']) ? $link_data['rel'] = "nofollow" : '';

		if (isset($attribute['customAttributes']) && gettype($attribute['customAttributes']) == 'array') {
			foreach ($attribute['customAttributes'] as $key => $value) {
				if (!empty($value)) {
					$attr_key_value = explode('|', $value);

					$attr_key = mb_strtolower($attr_key_value[0]);

					// Not allowed characters are removed.
					preg_match('/[-_a-z0-9]+/', $attr_key, $attr_key_matches);

					if (empty($attr_key_matches[0])) {
						continue;
					}

					$attr_key = $attr_key_matches[0];

					// Javascript events and unescaped href are avoided.
					if ('href' === $attr_key || 'on' === substr($attr_key, 0, 2)) {
						continue;
					}

					if (isset($attr_key_value[1])) {
						$attr_value = trim($attr_key_value[1]);
					} else {
						$attr_value = '';
					}

					$link_data[$attr_key] = $attr_value;
				}
			}
		}

		$link_attributes = '';
		foreach ($link_data as $key => $value) {
			$link_attributes .= sprintf('%s="%s" ', $key, esc_attr($value));
		}

		return $link_attributes;
	}

	public static function get_placeholder_image() {
		return GUTENKIT_PLUGIN_URL . 'assets/images/placeholder.jpg';
	}

	public static function status() {

		$cached = wp_cache_get('gutenkit__license_status');

		if(false !== $cached) {
			return $cached;
		}

		$oppai  = get_option('__gutenkit_oppai__', '');
		$key    = get_option('__gutenkit_license_key__', '');
		$status = 'invalid';

		if($oppai != '' && $key != '') {
			$status = 'valid';
		}

		wp_cache_set('gutenkit__license_status', $status);

		return $status;
	}

	public static function is_local() {
		$valid_domains = [
			".academy", ".accountant", ".accountants", ".actor", ".adult", ".africa", ".agency", ".airforce",
			".apartments", ".app", ".army", ".art", ".asia", ".associates", ".attorney", ".auction", ".audio",
			".auto", ".baby", ".band", ".bar", ".bargains", ".beer", ".berlin", ".best", ".bid", ".bike",
			".bingo", ".bio", ".biz", ".black", ".blackfriday", ".blog", ".blue", ".boston", ".boutique",
			".build", ".builders", ".business", ".buzz", ".cab", ".cafe", ".cam", ".camera", ".camp",
			".capital", ".car", ".cards", ".care", ".careers", ".cars", ".casa", ".cash", ".casino",
			".catering", ".center", ".ceo", ".chat", ".cheap", ".christmas", ".church", ".city", ".claims",
			".cleaning", ".click", ".clinic", ".clothing", ".cloud", ".club", ".coach", ".codes", ".coffee",
			".college", ".com", ".community", ".company", ".computer", ".condos", ".construction",
			".consulting", ".contact", ".contractors", ".cooking", ".cool", ".country", ".coupons",
			".courses", ".credit", ".creditcard", ".cricket", ".cruises", ".cymru", ".cyou", ".dance",
			".date", ".dating", ".day", ".deals", ".degree", ".delivery", ".democrat", ".dental",
			".dentist", ".desi", ".design", ".dev", ".diamonds", ".diet", ".digital", ".direct", ".directory",
			".discount", ".doctor", ".dog", ".domains", ".download", ".earth", ".eco", ".education",
			".email", ".energy", ".engineer", ".engineering", ".enterprises", ".equipment", ".estate",
			".events", ".exchange", ".expert", ".exposed", ".express", ".fail", ".faith", ".family",
			".fans", ".farm", ".fashion", ".feedback", ".film", ".finance", ".financial", ".fish",
			".fishing", ".fit", ".fitness", ".flights", ".florist", ".flowers", ".football", ".forsale",
			".foundation", ".fun", ".fund", ".furniture", ".futbol", ".fyi", ".gallery", ".game", ".games",
			".garden", ".gay", ".gdn", ".gift", ".gifts", ".gives", ".glass", ".global", ".gmbh", ".gold",
			".golf", ".graphics", ".gratis", ".green", ".gripe", ".group", ".guide", ".guitars", ".guru",
			".hamburg", ".haus", ".health", ".healthcare", ".help", ".hiphop", ".hockey", ".holdings",
			".holiday", ".horse", ".host", ".hosting", ".house", ".how", ".icu", ".immo", ".immobilien",
			".inc", ".industries", ".info", ".ink", ".institute", ".insure", ".international", ".investments",
			".irish", ".jetzt", ".jewelry", ".juegos", ".kaufen", ".kim", ".kitchen", ".kiwi", ".krd",
			".kyoto", ".land", ".lat", ".lawyer", ".lease", ".legal", ".lgbt", ".life", ".lighting",
			".limited", ".limo", ".link", ".live", ".llc", ".loan", ".loans", ".lol", ".london", ".love",
			".ltd", ".ltda", ".luxury", ".maison", ".management", ".market", ".marketing", ".mba", ".media",
			".melbourne", ".memorial", ".men", ".menu", ".miami", ".mobi", ".moda", ".moe", ".mom", ".money",
			".monster", ".mortgage", ".movie", ".nagoya", ".name", ".navy", ".net", ".network", ".new",
			".news", ".ninja", ".nyc", ".observer", ".okinawa", ".one", ".onl", ".online", ".org", ".osaka",
			".page", ".paris", ".partners", ".parts", ".party", ".photo", ".photography", ".photos", ".pics",
			".pictures", ".pink", ".pizza", ".place", ".plumbing", ".plus", ".poker", ".porn", ".press",
			".pro", ".productions", ".properties", ".property", ".protection", ".pub", ".racing", ".realty",
			".recipes", ".red", ".rehab", ".reise", ".reisen", ".rent", ".rentals", ".repair", ".report",
			".republican", ".rest", ".restaurant", ".review", ".reviews", ".rip", ".rocks", ".rodeo",
			".run", ".ryukyu", ".sale", ".sarl", ".school", ".schule", ".science", ".security", ".services",
			".sex", ".sexy", ".shiksha", ".shoes", ".shop", ".shopping", ".show", ".singles", ".site",
			".ski", ".soccer", ".social", ".software", ".solar", ".solutions", ".soy", ".space", ".storage",
			".store", ".stream", ".studio", ".study", ".style", ".sucks", ".supplies", ".supply", ".support",
			".surf", ".surgery", ".sydney", ".systems", ".tattoo", ".tax", ".taxi", ".team", ".tech",
			".technology", ".tel", ".tennis", ".theater", ".theatre", ".tienda", ".tips", ".tires", ".today",
			".tokyo", ".tools", ".top", ".tours", ".town", ".toys", ".trade", ".training", ".travel",
			".tube", ".university", ".uno", ".vacations", ".vegas", ".ventures", ".vet", ".viajes", ".video",
			".villas", ".vin", ".vip", ".vision", ".vodka", ".vote", ".voting", ".voto", ".voyage", ".wales",
			".watch", ".webcam", ".website", ".wedding", ".wiki", ".win", ".wine", ".work", ".works",
			".world", ".wtf", ".xn--3ds443g", ".xn--6frz82g", ".xxx", ".xyz", ".yoga", ".yokohama", ".zone"
		];

		$host = isset($_SERVER['HTTP_HOST']) ? sanitize_text_field(wp_unslash($_SERVER['HTTP_HOST'])) : '';

		// get the domain
		$domain = explode('.', $host);
		if(count($domain) >= 2) {
			$domain = '.' . $domain[count($domain) - 1];
		} else {
			$domain = null;
		}

		return !in_array($domain, $valid_domains);
	}

	/**
	 * Check plugin status for onboard plugins
	 *
	 * @param string $plugin_path The plugin path relative to the plugins directory
	 * @return string Plugin status: 'active', 'inactive', or 'notInstalled'
	 */
	private static function check_plugin_status($plugin_path) {
		$validate_plugin = validate_plugin($plugin_path);
		if (is_wp_error($validate_plugin)) {
			return 'notInstalled';
		}

		return is_plugin_active($plugin_path) ? 'active' : 'inactive';
	}

	/**
     * Get onboard plugins with their status and paths
     *
     * @return array Onboard plugins with their status
     */
	public static function onboard_plugins() {
		return array(
			'getgenie'              => self::check_plugin_status( 'getgenie/getgenie.php' ),
			'elementskit-lite'      => self::check_plugin_status( 'elementskit-lite/elementskit-lite.php' ),
			'blocks-for-shopengine' => self::check_plugin_status( 'blocks-for-shopengine/shopengine-gutenberg-addon.php' ),
			'metform'               => self::check_plugin_status( 'metform/metform.php' ),
			'emailkit'              => self::check_plugin_status( 'emailkit/EmailKit.php' ),
			'popup-builder-block'   => self::check_plugin_status( 'popup-builder-block/popup-builder-block.php' ),
			'wp-ultimate-review'    => self::check_plugin_status( 'wp-ultimate-review/wp-ultimate-review.php' ),
			'wp-social'             => self::check_plugin_status( 'wp-social/wp-social.php' ),
		);
	}
}
