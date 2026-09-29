<?php
// This file is generated. Do not modify it manually.
return array(
	'advanced-accordion' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'gutenkit/advanced-accordion',
		'version' => '1.0.0',
		'title' => 'Advanced Accordion',
		'category' => 'gutenkit',
		'icon' => 'menu-alt3',
		'keywords' => array(
			'gkit',
			'accordion',
			'faq',
			'faq schema',
			'advanced',
			'advanced accordion',
			'gutenkit'
		),
		'allowedBlocks' => array(
			'gutenkit/advanced-accordion-item'
		),
		'description' => 'Advanced Accordion block for GutenKit',
		'example' => array(
			'preview' => true
		),
		'attributes' => array(
			'blockID' => array(
				'type' => 'string'
			),
			'blockClass' => array(
				'type' => 'string'
			),
			'blocksCSS' => array(
				'type' => 'object'
			),
			'accordionItems' => array(
				'type' => 'array',
				'default' => array(
					array(
						
					),
					array(
						
					),
					array(
						
					)
				),
				'excludeCopy' => true
			),
			'style' => array(
				'type' => 'string',
				'default' => 'accordion-primary'
			),
			'iconPosStyle' => array(
				'type' => 'string',
				'default' => 'right',
				'excludeCopy' => true
			),
			'displayLoopCount' => array(
				'type' => 'boolean',
				'default' => false,
				'excludeCopy' => true
			),
			'leftIcons' => array(
				'type' => 'object',
				'default' => array(
					'title' => 'down-arrow1',
					'src' => '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
<title>down-arrow1</title>
<path d="M31.582 8.495c-0.578-0.613-1.544-0.635-2.153-0.059l-13.43 12.723-13.428-12.723c-0.61-0.578-1.574-0.553-2.153 0.059-0.579 0.611-0.553 1.576 0.058 2.155l14.477 13.715c0.293 0.277 0.67 0.418 1.047 0.418s0.756-0.14 1.048-0.418l14.477-13.715c0.611-0.579 0.637-1.544 0.058-2.155z"></path>
</svg>'
				),
				'excludeCopy' => true
			),
			'leftIconActives' => array(
				'type' => 'object',
				'default' => array(
					'title' => 'up-arrow1',
					'src' => '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
<title>up-arrow1</title>
<path d="M31.524 22.15l-14.477-13.715c-0.587-0.556-1.509-0.556-2.095 0l-14.477 13.715c-0.611 0.579-0.637 1.544-0.058 2.155 0.579 0.613 1.544 0.637 2.153 0.058l13.428-12.721 13.43 12.721c0.294 0.279 0.67 0.418 1.048 0.418 0.402 0 0.806-0.159 1.105-0.475 0.579-0.611 0.553-1.576-0.058-2.155z"></path>
</svg>'
				),
				'excludeCopy' => true
			),
			'rightIcons' => array(
				'type' => 'object',
				'default' => array(
					'title' => 'down-arrow1',
					'src' => '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
<title>down-arrow1</title>
<path d="M31.582 8.495c-0.578-0.613-1.544-0.635-2.153-0.059l-13.43 12.723-13.428-12.723c-0.61-0.578-1.574-0.553-2.153 0.059-0.579 0.611-0.553 1.576 0.058 2.155l14.477 13.715c0.293 0.277 0.67 0.418 1.047 0.418s0.756-0.14 1.048-0.418l14.477-13.715c0.611-0.579 0.637-1.544 0.058-2.155z"></path>
</svg>'
				),
				'excludeCopy' => true
			),
			'rightIconActives' => array(
				'type' => 'object',
				'default' => array(
					'title' => 'up-arrow',
					'src' => '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
<title>up-arrow</title>
<path d="M26.915 10.844c0.451 0.451 0.451 1.162 0 1.613-0.436 0.436-1.162 0.436-1.597 0l-8.18-8.18v26.995c0 0.629-0.5 1.129-1.129 1.129s-1.146-0.5-1.146-1.129v-26.996l-8.164 8.18c-0.451 0.436-1.178 0.436-1.613 0-0.451-0.451-0.451-1.162 0-1.613l10.117-10.117c0.436-0.436 1.162-0.436 1.597 0l10.116 10.118z"></path>
</svg>'
				),
				'excludeCopy' => true
			),
			'titleTypography' => array(
				'type' => 'object'
			),
			'titleColor' => array(
				'type' => 'string'
			),
			'background' => array(
				'type' => 'object'
			),
			'curveFillColor' => array(
				'type' => 'string'
			),
			'curveStrokeColor' => array(
				'type' => 'string'
			),
			'titleBorderOpen' => array(
				'type' => 'object'
			),
			'borderRadiousCurveShapeOpen' => array(
				'type' => 'object'
			),
			'boxShadowOpen' => array(
				'type' => 'object'
			),
			'titleColorClose' => array(
				'type' => 'string'
			),
			'backgroundClose' => array(
				'type' => 'object',
				'default' => array(
					'backgroundType' => 'classic'
				)
			),
			'curveFillClose' => array(
				'type' => 'string'
			),
			'curveStrokeClose' => array(
				'type' => 'string'
			),
			'titleBorderClose' => array(
				'type' => 'object'
			),
			'borderRadiousClose' => array(
				'type' => 'object'
			),
			'boxShadowClose' => array(
				'type' => 'object'
			),
			'titleColorHover' => array(
				'type' => 'string'
			),
			'backgroundHover' => array(
				'type' => 'object',
				'default' => array(
					'backgroundType' => 'classic'
				)
			),
			'curveFillHover' => array(
				'type' => 'string'
			),
			'curveStrokeHover' => array(
				'type' => 'string'
			),
			'titleBorderHover' => array(
				'type' => 'object'
			),
			'borderRadiousHover' => array(
				'type' => 'object'
			),
			'boxShadowHover' => array(
				'type' => 'object'
			),
			'titlePaddingDesktop' => array(
				'type' => 'object'
			),
			'titlePaddingTablet' => array(
				'type' => 'object'
			),
			'titlePaddingMobile' => array(
				'type' => 'object'
			),
			'titlePaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'titlePaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'titlePaddingLaptop' => array(
				'type' => 'object'
			),
			'titlePaddingWideScreen' => array(
				'type' => 'object'
			),
			'titleMarginBottomDesktop' => array(
				'type' => 'object'
			),
			'titleMarginBottomTablet' => array(
				'type' => 'object'
			),
			'titleMarginBottomMobile' => array(
				'type' => 'object'
			),
			'titleMarginBottomTabletLandscape' => array(
				'type' => 'object'
			),
			'titleMarginBottomMobileLandscape' => array(
				'type' => 'object'
			),
			'titleMarginBottomLaptop' => array(
				'type' => 'object'
			),
			'titleMarginBottomWideScreen' => array(
				'type' => 'object'
			),
			'contentColor' => array(
				'type' => 'string'
			),
			'contentTypography' => array(
				'type' => 'object'
			),
			'contentBackground' => array(
				'type' => 'object',
				'default' => array(
					'backgroundType' => 'classic'
				)
			),
			'contentBorderRadious' => array(
				'type' => 'object'
			),
			'contentPaddingDesktop' => array(
				'type' => 'object'
			),
			'contentPaddingTablet' => array(
				'type' => 'object'
			),
			'contentPaddingMobile' => array(
				'type' => 'object'
			),
			'contentPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'contentPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'contentPaddingLaptop' => array(
				'type' => 'object'
			),
			'contentPaddingWideScreen' => array(
				'type' => 'object'
			),
			'borderClosed' => array(
				'type' => 'object'
			),
			'borderRadiousClosed' => array(
				'type' => 'object'
			),
			'elementBoxShadowGroupClosed' => array(
				'type' => 'object'
			),
			'borderOpen' => array(
				'type' => 'object'
			),
			'borderRadiousOpen' => array(
				'type' => 'object'
			),
			'elementBoxShadowGroup' => array(
				'type' => 'object'
			),
			'lastChildBorderBottom' => array(
				'type' => 'boolean',
				'default' => false
			),
			'iconTypographyCloseDesktop' => array(
				'type' => 'object'
			),
			'iconTypographyCloseTablet' => array(
				'type' => 'object'
			),
			'iconTypographyCloseMobile' => array(
				'type' => 'object'
			),
			'iconTypographyCloseTabletLandscape' => array(
				'type' => 'object'
			),
			'iconTypographyCloseMobileLandscape' => array(
				'type' => 'object'
			),
			'iconTypographyCloseLaptop' => array(
				'type' => 'object'
			),
			'iconTypographyCloseWideScreen' => array(
				'type' => 'object'
			),
			'iconColorClose' => array(
				'type' => 'string'
			),
			'iconBoxBgClose' => array(
				'type' => 'object',
				'default' => array(
					'backgroundType' => 'classic'
				)
			),
			'iconBoxBgBeforeClose' => array(
				'type' => 'object',
				'default' => array(
					'backgroundType' => 'classic'
				)
			),
			'iconBorderClosed' => array(
				'type' => 'object'
			),
			'iconTypographyDesktop' => array(
				'type' => 'object'
			),
			'iconTypographyTablet' => array(
				'type' => 'object'
			),
			'iconTypographyMobile' => array(
				'type' => 'object'
			),
			'iconTypographyTabletLandscape' => array(
				'type' => 'object'
			),
			'iconTypographyMobileLandscape' => array(
				'type' => 'object'
			),
			'iconTypographyLaptop' => array(
				'type' => 'object'
			),
			'iconTypographyWideScreen' => array(
				'type' => 'object'
			),
			'iconColorOpen' => array(
				'type' => 'string'
			),
			'iconBoxBgOpen' => array(
				'type' => 'object'
			),
			'iconBoxBgBeforeOpen' => array(
				'type' => 'object',
				'default' => array(
					'backgroundType' => 'classic'
				)
			),
			'iconBorderOpen' => array(
				'type' => 'object'
			),
			'iconTypographyHoverDesktop' => array(
				'type' => 'object'
			),
			'iconTypographyHoverTablet' => array(
				'type' => 'object'
			),
			'iconTypographyHoverMobile' => array(
				'type' => 'object'
			),
			'iconTypographyHoverTabletLandscape' => array(
				'type' => 'object'
			),
			'iconTypographyHoverMobileLandscape' => array(
				'type' => 'object'
			),
			'iconTypographyHoverLaptop' => array(
				'type' => 'object'
			),
			'iconTypographyHoverWideScreen' => array(
				'type' => 'object'
			),
			'iconColorHover' => array(
				'type' => 'string'
			),
			'iconBoxBgHover' => array(
				'type' => 'object',
				'default' => array(
					'backgroundType' => 'classic'
				)
			),
			'iconBoxBgBeforeHover' => array(
				'type' => 'object',
				'default' => array(
					'backgroundType' => 'classic'
				)
			),
			'iconBorderHover' => array(
				'type' => 'object'
			),
			'iconBorderRadious' => array(
				'type' => 'object'
			),
			'iconPaddingDesktop' => array(
				'type' => 'object'
			),
			'iconPaddingTablet' => array(
				'type' => 'object'
			),
			'iconPaddingMobile' => array(
				'type' => 'object'
			),
			'iconPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'iconPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'iconPaddingLaptop' => array(
				'type' => 'object'
			),
			'iconPaddingWideScreen' => array(
				'type' => 'object'
			),
			'iconMarginDesktop' => array(
				'type' => 'object'
			),
			'iconMarginTablet' => array(
				'type' => 'object'
			),
			'iconMarginMobile' => array(
				'type' => 'object'
			),
			'iconMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'iconMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'iconMarginLaptop' => array(
				'type' => 'object'
			),
			'iconMarginWideScreen' => array(
				'type' => 'object'
			),
			'iconBoxOpenBg' => array(
				'type' => 'object',
				'default' => array(
					'backgroundType' => 'classic'
				)
			),
			'iconBoxBg' => array(
				'type' => 'object',
				'default' => array(
					'backgroundType' => 'classic'
				)
			),
			'iconBorder' => array(
				'type' => 'object'
			),
			'iconColor' => array(
				'type' => 'string'
			),
			'iconBoxCloseBg' => array(
				'type' => 'object'
			),
			'closedIconBg' => array(
				'type' => 'object',
				'default' => array(
					'backgroundType' => 'classic'
				)
			),
			'closedIconBorder' => array(
				'type' => 'object'
			)
		),
		'supports' => array(
			'html' => false,
			'anchor' => true,
			'align' => array(
				'wide',
				'full'
			)
		),
		'textdomain' => 'gutenkit-blocks-addon',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./frontend.js'
	),
	'advanced-accordion-item' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'gutenkit/advanced-accordion-item',
		'version' => '1.0.0',
		'title' => 'Advanced Accordion Item',
		'category' => 'gutenkit',
		'icon' => 'menu-alt3',
		'keywords' => array(
			'gkit',
			'accordion',
			'faq',
			'faq schema',
			'gutenkit'
		),
		'description' => 'Advanced accordion item for gutenkit.',
		'parent' => array(
			'gutenkit/advanced-accordion'
		),
		'example' => array(
			'preview' => true
		),
		'attributes' => array(
			'blockID' => array(
				'type' => 'string'
			),
			'blockClass' => array(
				'type' => 'string'
			),
			'blocksCSS' => array(
				'type' => 'object'
			),
			'title' => array(
				'type' => 'string',
				'default' => 'How do I update my profile information?',
				'excludeCopy' => true
			),
			'parentBlockAttributes' => array(
				'type' => 'object'
			),
			'defaultOpen' => array(
				'type' => 'boolean',
				'default' => false
			),
			'background' => array(
				'type' => 'object'
			),
			'curveBackground' => array(
				'type' => 'string'
			),
			'titleColor' => array(
				'type' => 'string'
			),
			'iconColor' => array(
				'type' => 'string'
			),
			'curveStrokeColor' => array(
				'type' => 'string'
			)
		),
		'supports' => array(
			'html' => false,
			'anchor' => true,
			'align' => array(
				'wide',
				'full'
			)
		),
		'textdomain' => 'gutenkit-blocks-addon',
		'editorScript' => 'file:./index.js'
	),
	'advanced-image' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'gutenkit/advanced-image',
		'version' => '1.0.0',
		'title' => 'Advanced Image',
		'category' => 'gutenkit',
		'keywords' => array(
			'gkit',
			'gutenkit',
			'image',
			'media',
			'advanced image',
			'image schema',
			'image block'
		),
		'description' => 'Advanced Image block for gutenberg.',
		'example' => array(
			'preview' => true
		),
		'attributes' => array(
			'blockID' => array(
				'type' => 'string'
			),
			'blockClass' => array(
				'type' => 'string'
			),
			'blocksCSS' => array(
				'type' => 'object'
			),
			'image' => array(
				'type' => 'object',
				'default' => array(
					'url' => 'placeholder'
				),
				'excludeCopy' => true
			),
			'imageAlignmentDesktop' => array(
				'type' => 'string',
				'default' => 'center'
			),
			'imageAlignmentTablet' => array(
				'type' => 'string',
				'default' => 'center'
			),
			'imageAlignmentMobile' => array(
				'type' => 'string',
				'default' => 'center'
			),
			'imageAlignmentTabletLandscape' => array(
				'type' => 'string',
				'default' => 'center'
			),
			'imageAlignmentMobileLandscape' => array(
				'type' => 'string',
				'default' => 'center'
			),
			'imageAlignmentLaptop' => array(
				'type' => 'string',
				'default' => 'center'
			),
			'imageAlignmentWideScreen' => array(
				'type' => 'string',
				'default' => 'center'
			),
			'captionSource' => array(
				'type' => 'string',
				'default' => 'none',
				'excludeCopy' => true
			),
			'customCaption' => array(
				'type' => 'string',
				'default' => 'Enter your image caption',
				'excludeCopy' => true
			),
			'linkType' => array(
				'type' => 'string',
				'default' => 'none'
			),
			'openLightbox' => array(
				'type' => 'string',
				'default' => 'default'
			),
			'customURL' => array(
				'type' => 'object',
				'default' => array(
					'url' => '#',
					'newTab' => false,
					'noFollow' => false
				)
			),
			'widthDesktop' => array(
				'type' => 'object'
			),
			'widthTablet' => array(
				'type' => 'object'
			),
			'widthMobile' => array(
				'type' => 'object'
			),
			'widthTabletLandscape' => array(
				'type' => 'object'
			),
			'widthMobileLandscape' => array(
				'type' => 'object'
			),
			'widthLaptop' => array(
				'type' => 'object'
			),
			'widthWideScreen' => array(
				'type' => 'object'
			),
			'maxWidthDesktop' => array(
				'type' => 'object'
			),
			'maxWidthTablet' => array(
				'type' => 'object'
			),
			'maxWidthMobile' => array(
				'type' => 'object'
			),
			'maxWidthTabletLandscape' => array(
				'type' => 'object'
			),
			'maxWidthMobileLandscape' => array(
				'type' => 'object'
			),
			'maxWidthLaptop' => array(
				'type' => 'object'
			),
			'maxWidthWideScreen' => array(
				'type' => 'object'
			),
			'heightDesktop' => array(
				'type' => 'object'
			),
			'heightTablet' => array(
				'type' => 'object'
			),
			'heightMobile' => array(
				'type' => 'object'
			),
			'heightTabletLandscape' => array(
				'type' => 'object'
			),
			'heightMobileLandscape' => array(
				'type' => 'object'
			),
			'heightLaptop' => array(
				'type' => 'object'
			),
			'heightWideScreen' => array(
				'type' => 'object'
			),
			'objectFitDesktop' => array(
				'type' => 'string',
				'default' => 'unset'
			),
			'objectFitTablet' => array(
				'type' => 'string',
				'default' => 'unset'
			),
			'objectFitMobile' => array(
				'type' => 'string',
				'default' => 'unset'
			),
			'objectFitTabletLandscape' => array(
				'type' => 'string',
				'default' => 'unset'
			),
			'objectFitMobileLandscape' => array(
				'type' => 'string',
				'default' => 'unset'
			),
			'objectFitLaptop' => array(
				'type' => 'string',
				'default' => 'unset'
			),
			'objectFitWideScreen' => array(
				'type' => 'string',
				'default' => 'unset'
			),
			'objectPositionDesktop' => array(
				'type' => 'string',
				'default' => '50% 50%'
			),
			'objectPositionTablet' => array(
				'type' => 'string',
				'default' => '50% 50%'
			),
			'objectPositionMobile' => array(
				'type' => 'string',
				'default' => '50% 50%'
			),
			'objectPositionTabletLandscape' => array(
				'type' => 'string',
				'default' => '50% 50%'
			),
			'objectPositionMobileLandscape' => array(
				'type' => 'string',
				'default' => '50% 50%'
			),
			'objectPositionLaptop' => array(
				'type' => 'string',
				'default' => '50% 50%'
			),
			'objectPositionWideScreen' => array(
				'type' => 'string',
				'default' => '50% 50%'
			),
			'zoom' => array(
				'type' => 'object'
			),
			'hoverZoom' => array(
				'type' => 'object'
			),
			'opacity' => array(
				'type' => 'object'
			),
			'hoverOpacity' => array(
				'type' => 'object'
			),
			'cssFilters' => array(
				'type' => 'object'
			),
			'cssFiltersHover' => array(
				'type' => 'object'
			),
			'transitionDuration' => array(
				'type' => 'object'
			),
			'imageBorder' => array(
				'type' => 'object'
			),
			'imageBorderHover' => array(
				'type' => 'object'
			),
			'borderRadius' => array(
				'type' => 'object'
			),
			'borderRadiusHover' => array(
				'type' => 'object'
			),
			'boxShadow' => array(
				'type' => 'object'
			),
			'boxShadowHover' => array(
				'type' => 'object'
			),
			'captionAlignmentDesktop' => array(
				'type' => 'string'
			),
			'captionAlignmentTablet' => array(
				'type' => 'string'
			),
			'captionAlignmentMobile' => array(
				'type' => 'string'
			),
			'captionAlignmentTabletLandscape' => array(
				'type' => 'string'
			),
			'captionAlignmentMobileLandscape' => array(
				'type' => 'string'
			),
			'captionAlignmentLaptop' => array(
				'type' => 'string'
			),
			'captionAlignmentWideScreen' => array(
				'type' => 'string'
			),
			'captionColor' => array(
				'type' => 'string',
				'default' => '#000000'
			),
			'captionBackground' => array(
				'type' => 'string',
				'default' => ''
			),
			'captionTypography' => array(
				'type' => 'object'
			),
			'captionShadow' => array(
				'type' => 'object'
			),
			'captionSpacing' => array(
				'type' => 'object'
			),
			'captionSpacingDesktop' => array(
				'type' => 'object'
			),
			'captionSpacingTablet' => array(
				'type' => 'object'
			),
			'captionSpacingMobile' => array(
				'type' => 'object'
			),
			'captionSpacingTabletLandscape' => array(
				'type' => 'object'
			),
			'captionSpacingMobileLandscape' => array(
				'type' => 'object'
			),
			'captionSpacingLaptop' => array(
				'type' => 'object'
			),
			'captionSpacingWideScreen' => array(
				'type' => 'object'
			),
			'showContainerOverlay' => array(
				'type' => 'boolean',
				'default' => false
			),
			'containerBackgroundOverlay' => array(
				'type' => 'object',
				'default' => array(
					'opacity' => array(
						'size' => '0.5'
					)
				)
			),
			'containerBackgroundHover' => array(
				'type' => 'object'
			),
			'containerBackgroundHoverOverlay' => array(
				'type' => 'object',
				'default' => array(
					'opacity' => array(
						'size' => '0.5'
					)
				)
			),
			'containerOverlayHoverTransitionDuration' => array(
				'type' => 'object',
				'default' => array(
					'size' => '0.3'
				)
			)
		),
		'supports' => array(
			'interactivity' => true,
			'html' => false,
			'align' => array(
				'wide',
				'full'
			),
			'filter' => array(
				'duotone' => true
			),
			'anchor' => true
		),
		'textdomain' => 'gutenkit-blocks-addon',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => array(
			'file:./style-index.css',
			'fancybox'
		),
		'viewScript' => 'file:./frontend.js',
		'script' => array(
			'fancybox'
		)
	),
	'advanced-paragraph' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'gutenkit/advanced-paragraph',
		'version' => '1.0.0',
		'title' => 'Advanced Paragraph',
		'category' => 'gutenkit',
		'icon' => 'menu-alt3',
		'keywords' => array(
			'gkit',
			'gutenkit',
			'text',
			'para',
			'paragraph',
			'advanced paragraph',
			'advanced'
		),
		'description' => 'Advanced Paragraph block for gutenberg.',
		'example' => array(
			'preview' => true
		),
		'attributes' => array(
			'blockID' => array(
				'type' => 'string'
			),
			'blockClass' => array(
				'type' => 'string'
			),
			'blocksCSS' => array(
				'type' => 'object'
			),
			'paragraphColumnDesktop' => array(
				'type' => 'object'
			),
			'paragraphColumnTablet' => array(
				'type' => 'object'
			),
			'paragraphColumnMobile' => array(
				'type' => 'object'
			),
			'paragraphColumnTabletLandscape' => array(
				'type' => 'object'
			),
			'paragraphColumnMobileLandscape' => array(
				'type' => 'object'
			),
			'paragraphColumnLaptop' => array(
				'type' => 'object'
			),
			'paragraphColumnWideScreen' => array(
				'type' => 'object'
			),
			'dropCapSwitcher' => array(
				'type' => 'boolean',
				'default' => false
			),
			'paragraphColumnSpacingDesktop' => array(
				'type' => 'object'
			),
			'paragraphColumnSpacingTablet' => array(
				'type' => 'object'
			),
			'paragraphColumnSpacingMobile' => array(
				'type' => 'object'
			),
			'paragraphColumnSpacingTabletLandscape' => array(
				'type' => 'object'
			),
			'paragraphColumnSpacingMobileLandscape' => array(
				'type' => 'object'
			),
			'paragraphColumnSpacingLaptop' => array(
				'type' => 'object'
			),
			'paragraphColumnSpacingWideScreen' => array(
				'type' => 'object'
			),
			'paragraphTextAlignmentDesktop' => array(
				'type' => 'string'
			),
			'paragraphTextAlignmentTablet' => array(
				'type' => 'string'
			),
			'paragraphTextAlignmentMobile' => array(
				'type' => 'string'
			),
			'paragraphTextAlignmentTabletLandscape' => array(
				'type' => 'string'
			),
			'paragraphTextAlignmentMobileLandscape' => array(
				'type' => 'string'
			),
			'paragraphTextAlignmentLaptop' => array(
				'type' => 'string'
			),
			'paragraphTextAlignmentWideScreen' => array(
				'type' => 'string'
			),
			'textTypography' => array(
				'type' => 'object'
			),
			'textColor' => array(
				'type' => 'string',
				'default' => '#000000'
			),
			'textColorHover' => array(
				'type' => 'string',
				'default' => '#000000'
			),
			'textShadow' => array(
				'type' => 'object'
			),
			'textShadowHover' => array(
				'type' => 'object',
				'default' => '0 0 0 #fff'
			),
			'paragraphLinkTypography' => array(
				'type' => 'object'
			),
			'paragraphLinkColor' => array(
				'type' => 'string',
				'default' => '#000000'
			),
			'paragraphLinkBgColor' => array(
				'type' => 'object'
			),
			'paragraphLinkColorHover' => array(
				'type' => 'string',
				'default' => '#000000'
			),
			'paragraphLinkBgColorHover' => array(
				'type' => 'object'
			),
			'textLinkBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'textLinkBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'textLinkBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'textLinkBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'textLinkBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'textLinkBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'textLinkBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'textLinkPaddingDesktop' => array(
				'type' => 'object'
			),
			'textLinkPaddingTablet' => array(
				'type' => 'object'
			),
			'textLinkPaddingMobile' => array(
				'type' => 'object'
			),
			'textLinkPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'textLinkPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'textLinkPaddingLaptop' => array(
				'type' => 'object'
			),
			'textLinkPaddingWideScreen' => array(
				'type' => 'object'
			),
			'focusedTextColor' => array(
				'type' => 'string'
			),
			'focusedTextHoverColor' => array(
				'type' => 'string'
			),
			'focusedTextTypography' => array(
				'type' => 'object'
			),
			'focusedTextDecorationColor' => array(
				'type' => 'string'
			),
			'focusedTextShadow' => array(
				'type' => 'object'
			),
			'focusedTextPaddingDesktop' => array(
				'type' => 'object'
			),
			'focusedTextPaddingTablet' => array(
				'type' => 'object'
			),
			'focusedTextPaddingMobile' => array(
				'type' => 'object'
			),
			'focusedTextPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'focusedTextPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'focusedTextPaddingLaptop' => array(
				'type' => 'object'
			),
			'focusedTextPaddingWideScreen' => array(
				'type' => 'object'
			),
			'focusedTextUseBackground' => array(
				'type' => 'boolean',
				'default' => false
			),
			'focusedTextBackgroundColor' => array(
				'type' => 'object'
			),
			'focusedTextBorderRadius' => array(
				'type' => 'object'
			),
			'focusedTextUseTextFill' => array(
				'type' => 'boolean',
				'default' => false
			),
			'focusedTextFillBackground' => array(
				'type' => 'object'
			),
			'dropCapTypography' => array(
				'type' => 'object'
			),
			'dropCapColor' => array(
				'type' => 'string',
				'default' => '#000000'
			),
			'dropCaptextShadow' => array(
				'type' => 'object'
			),
			'dropCapBgColor' => array(
				'type' => 'object'
			),
			'dropCapBorderDesktop' => array(
				'type' => 'object'
			),
			'dropCapBorderTablet' => array(
				'type' => 'object'
			),
			'dropCapBorderMobile' => array(
				'type' => 'object'
			),
			'dropCapBorderTabletLandscape' => array(
				'type' => 'object'
			),
			'dropCapBorderMobileLandscape' => array(
				'type' => 'object'
			),
			'dropCapBorderLaptop' => array(
				'type' => 'object'
			),
			'dropCapBorderWideScreen' => array(
				'type' => 'object'
			),
			'dropCapBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'dropCapBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'dropCapBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'dropCapBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'dropCapBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'dropCapBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'dropCapBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'dropCapPaddingDesktop' => array(
				'type' => 'object'
			),
			'dropCapPaddingTablet' => array(
				'type' => 'object'
			),
			'dropCapPaddingMobile' => array(
				'type' => 'object'
			),
			'dropCapPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'dropCapPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'dropCapPaddingLaptop' => array(
				'type' => 'object'
			),
			'dropCapPaddingWideScreen' => array(
				'type' => 'object'
			),
			'dropCapMarginDesktop' => array(
				'type' => 'object'
			),
			'dropCapMarginTablet' => array(
				'type' => 'object'
			),
			'dropCapMarginMobile' => array(
				'type' => 'object'
			),
			'dropCapMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'dropCapMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'dropCapMarginLaptop' => array(
				'type' => 'object'
			),
			'dropCapMarginWideScreen' => array(
				'type' => 'object'
			),
			'description' => array(
				'type' => 'string',
				'default' => 'Hello Gutenkit!'
			),
			'dropCap' => array(
				'type' => 'boolean',
				'default' => false
			),
			'content' => array(
				'type' => 'string',
				'default' => 'GutenKit Block Addon is a powerful WordPress block plugin that enhances the block editor experience. Packed with dynamic and customizable blocks, it offers endless possibilities for building visually stunning pages and posts. From advanced grid layouts to dynamic pricing tables, the GutenKit Block Addon is designed to elevate your website design effortlessly, making it a must-have tool for WordPress developers and designers alike.'
			)
		),
		'supports' => array(
			'html' => false,
			'anchor' => true,
			'align' => array(
				'wide',
				'full'
			),
			'__experimentalSlashInserter' => true
		),
		'textdomain' => 'gutenkit-blocks-addon',
		'editorScript' => 'file:./index.js',
		'style' => 'file:./style-index.css'
	),
	'advanced-tab' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'gutenkit/advanced-tab',
		'version' => '1.0.0',
		'title' => 'Advanced Tab',
		'category' => 'gutenkit',
		'keywords' => array(
			'gkit',
			'vertical tabs',
			'tab',
			'horizontal tabs',
			'accordion',
			'advanced tab',
			'advanced block'
		),
		'allowedBlocks' => array(
			'gutenkit/advanced-tab-item'
		),
		'description' => 'Advanced Tab Block for Gutenkit',
		'example' => array(
			'preview' => true
		),
		'attributes' => array(
			'blockID' => array(
				'type' => 'string'
			),
			'blockClass' => array(
				'type' => 'string'
			),
			'blocksCSS' => array(
				'type' => 'object'
			),
			'activeIndex' => array(
				'type' => 'number',
				'default' => 0
			),
			'tabContents' => array(
				'type' => 'array',
				'default' => array(
					array(
						'title' => 'Wordpress',
						'subTitle' => 'Mete Join',
						'isTabOpen' => false,
						'addIcon' => true,
						'icon' => array(
							'title' => 'earth',
							'src' => '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
<title>earth</title>
<path d="M27.314 4.686c-3.022-3.022-7.040-4.686-11.314-4.686s-8.292 1.664-11.314 4.686c-3.022 3.022-4.686 7.040-4.686 11.314s1.664 8.292 4.686 11.314c3.022 3.022 7.040 4.686 11.314 4.686s8.292-1.664 11.314-4.686c3.022-3.022 4.686-7.040 4.686-11.314s-1.664-8.292-4.686-11.314zM29.435 10.818c-0.312-0.562-1.095-0.829-2.12-1.177-1.099-0.374-1.488-1.504-1.937-2.812-0.39-1.136-0.794-2.309-1.752-3.039 2.622 1.643 4.679 4.106 5.81 7.028zM24.945 16.305c0.121 1.084 0.246 2.205-1.099 3.715-0.363 0.408-0.576 0.976-0.802 1.578-0.522 1.393-1.015 2.71-3.114 2.729-0.059-0.071-0.226-0.335-0.374-1.173-0.136-0.772-0.215-1.769-0.299-2.825-0.128-1.62-0.273-3.456-0.673-4.979-0.512-1.948-1.371-3.098-2.626-3.517-0.548-0.183-1.107-0.272-1.709-0.272-0.444 0-0.848 0.048-1.204 0.089-0.277 0.033-0.539 0.064-0.761 0.064 0 0-0 0-0 0-0.375 0-0.799 0-1.321-1.197-0.751-1.72-0.197-4.477 2.006-5.931 1.208-0.797 2.042-1.137 2.787-1.137 0.595 0 1.237 0.207 2.148 0.692 1.076 0.573 1.918 0.646 2.532 0.646 0.243 0 0.464-0.013 0.678-0.026 0.179-0.011 0.348-0.021 0.504-0.021 0.352 0 0.637 0.046 0.971 0.274 0.616 0.421 0.936 1.35 1.273 2.333 0.512 1.491 1.093 3.181 2.936 3.807 0.248 0.084 0.674 0.229 0.976 0.355-0.26 0.269-0.696 0.658-1.122 1.039-0.275 0.246-0.587 0.524-0.933 0.839-0.999 0.91-0.88 1.976-0.775 2.915zM1.602 15.877c0.172 0.031 0.359 0.067 0.55 0.108 0.899 0.192 1.32 0.365 1.504 0.462-0.085 0.165-0.256 0.408-0.369 0.569-0.396 0.562-0.889 1.261-0.701 2.031 0.126 0.519 0.020 1.157-0.164 1.746-0.531-1.5-0.821-3.113-0.821-4.793 0-0.041 0.001-0.082 0.002-0.123zM16 30.4c-5.481 0-10.255-3.078-12.688-7.596 0.419-0.799 1.197-2.564 0.834-4.111 0.025-0.155 0.289-0.53 0.448-0.756 0.434-0.615 0.973-1.381 0.573-2.192-0.28-0.569-1.030-0.954-2.506-1.287-0.342-0.077-0.675-0.14-0.958-0.188 0.857-7.128 6.941-12.671 14.296-12.671 2.524 0 4.898 0.654 6.963 1.799-0.51-0.223-0.974-0.258-1.344-0.258-0.204 0-0.405 0.012-0.599 0.023-0.19 0.011-0.387 0.023-0.583 0.023-0.454 0-1.021-0.054-1.78-0.458-1.158-0.617-2.025-0.88-2.9-0.88-1.082 0-2.179 0.419-3.669 1.402-1.287 0.849-2.257 2.149-2.731 3.66-0.462 1.474-0.412 2.982 0.139 4.246 0.651 1.492 1.511 2.157 2.788 2.157 0 0 0 0 0 0 0.315 0 0.623-0.036 0.948-0.075 0.328-0.039 0.666-0.079 1.016-0.079 0.433 0 0.815 0.060 1.202 0.189 0.703 0.235 1.221 1.022 1.585 2.406s0.503 3.145 0.626 4.698c0.102 1.295 0.199 2.519 0.412 3.441 0.129 0.56 0.297 0.986 0.512 1.301 0.321 0.471 0.782 0.73 1.298 0.73 1.415 0 2.545-0.456 3.358-1.355 0.677-0.748 1.023-1.671 1.3-2.412 0.164-0.438 0.333-0.89 0.498-1.075 1.819-2.043 1.631-3.727 1.494-4.956-0.101-0.903-0.103-1.223 0.263-1.556 0.34-0.309 0.648-0.585 0.92-0.828 0.58-0.518 1-0.892 1.294-1.213 0.202-0.221 0.675-0.737 0.544-1.384-0.001-0.006-0.003-0.011-0.004-0.017 0.549 1.522 0.849 3.162 0.849 4.87 0 7.94-6.46 14.4-14.4 14.4z"></path>
</svg>
'
						),
						'activeNavItem' => false
					),
					array(
						'title' => 'Prestashop',
						'subTitle' => 'Bete Is Good',
						'isTabOpen' => false,
						'addIcon' => true,
						'icon' => array(
							'title' => 'earth',
							'src' => '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
<title>earth</title>
<path d="M27.314 4.686c-3.022-3.022-7.040-4.686-11.314-4.686s-8.292 1.664-11.314 4.686c-3.022 3.022-4.686 7.040-4.686 11.314s1.664 8.292 4.686 11.314c3.022 3.022 7.040 4.686 11.314 4.686s8.292-1.664 11.314-4.686c3.022-3.022 4.686-7.040 4.686-11.314s-1.664-8.292-4.686-11.314zM29.435 10.818c-0.312-0.562-1.095-0.829-2.12-1.177-1.099-0.374-1.488-1.504-1.937-2.812-0.39-1.136-0.794-2.309-1.752-3.039 2.622 1.643 4.679 4.106 5.81 7.028zM24.945 16.305c0.121 1.084 0.246 2.205-1.099 3.715-0.363 0.408-0.576 0.976-0.802 1.578-0.522 1.393-1.015 2.71-3.114 2.729-0.059-0.071-0.226-0.335-0.374-1.173-0.136-0.772-0.215-1.769-0.299-2.825-0.128-1.62-0.273-3.456-0.673-4.979-0.512-1.948-1.371-3.098-2.626-3.517-0.548-0.183-1.107-0.272-1.709-0.272-0.444 0-0.848 0.048-1.204 0.089-0.277 0.033-0.539 0.064-0.761 0.064 0 0-0 0-0 0-0.375 0-0.799 0-1.321-1.197-0.751-1.72-0.197-4.477 2.006-5.931 1.208-0.797 2.042-1.137 2.787-1.137 0.595 0 1.237 0.207 2.148 0.692 1.076 0.573 1.918 0.646 2.532 0.646 0.243 0 0.464-0.013 0.678-0.026 0.179-0.011 0.348-0.021 0.504-0.021 0.352 0 0.637 0.046 0.971 0.274 0.616 0.421 0.936 1.35 1.273 2.333 0.512 1.491 1.093 3.181 2.936 3.807 0.248 0.084 0.674 0.229 0.976 0.355-0.26 0.269-0.696 0.658-1.122 1.039-0.275 0.246-0.587 0.524-0.933 0.839-0.999 0.91-0.88 1.976-0.775 2.915zM1.602 15.877c0.172 0.031 0.359 0.067 0.55 0.108 0.899 0.192 1.32 0.365 1.504 0.462-0.085 0.165-0.256 0.408-0.369 0.569-0.396 0.562-0.889 1.261-0.701 2.031 0.126 0.519 0.020 1.157-0.164 1.746-0.531-1.5-0.821-3.113-0.821-4.793 0-0.041 0.001-0.082 0.002-0.123zM16 30.4c-5.481 0-10.255-3.078-12.688-7.596 0.419-0.799 1.197-2.564 0.834-4.111 0.025-0.155 0.289-0.53 0.448-0.756 0.434-0.615 0.973-1.381 0.573-2.192-0.28-0.569-1.030-0.954-2.506-1.287-0.342-0.077-0.675-0.14-0.958-0.188 0.857-7.128 6.941-12.671 14.296-12.671 2.524 0 4.898 0.654 6.963 1.799-0.51-0.223-0.974-0.258-1.344-0.258-0.204 0-0.405 0.012-0.599 0.023-0.19 0.011-0.387 0.023-0.583 0.023-0.454 0-1.021-0.054-1.78-0.458-1.158-0.617-2.025-0.88-2.9-0.88-1.082 0-2.179 0.419-3.669 1.402-1.287 0.849-2.257 2.149-2.731 3.66-0.462 1.474-0.412 2.982 0.139 4.246 0.651 1.492 1.511 2.157 2.788 2.157 0 0 0 0 0 0 0.315 0 0.623-0.036 0.948-0.075 0.328-0.039 0.666-0.079 1.016-0.079 0.433 0 0.815 0.060 1.202 0.189 0.703 0.235 1.221 1.022 1.585 2.406s0.503 3.145 0.626 4.698c0.102 1.295 0.199 2.519 0.412 3.441 0.129 0.56 0.297 0.986 0.512 1.301 0.321 0.471 0.782 0.73 1.298 0.73 1.415 0 2.545-0.456 3.358-1.355 0.677-0.748 1.023-1.671 1.3-2.412 0.164-0.438 0.333-0.89 0.498-1.075 1.819-2.043 1.631-3.727 1.494-4.956-0.101-0.903-0.103-1.223 0.263-1.556 0.34-0.309 0.648-0.585 0.92-0.828 0.58-0.518 1-0.892 1.294-1.213 0.202-0.221 0.675-0.737 0.544-1.384-0.001-0.006-0.003-0.011-0.004-0.017 0.549 1.522 0.849 3.162 0.849 4.87 0 7.94-6.46 14.4-14.4 14.4z"></path>
</svg>
'
						),
						'activeNavItem' => false
					),
					array(
						'title' => 'Joomla',
						'subTitle' => 'Bete No More Is Good',
						'isTabOpen' => false,
						'addIcon' => true,
						'icon' => array(
							'title' => 'earth',
							'src' => '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
<title>earth</title>
<path d="M27.314 4.686c-3.022-3.022-7.040-4.686-11.314-4.686s-8.292 1.664-11.314 4.686c-3.022 3.022-4.686 7.040-4.686 11.314s1.664 8.292 4.686 11.314c3.022 3.022 7.040 4.686 11.314 4.686s8.292-1.664 11.314-4.686c3.022-3.022 4.686-7.040 4.686-11.314s-1.664-8.292-4.686-11.314zM29.435 10.818c-0.312-0.562-1.095-0.829-2.12-1.177-1.099-0.374-1.488-1.504-1.937-2.812-0.39-1.136-0.794-2.309-1.752-3.039 2.622 1.643 4.679 4.106 5.81 7.028zM24.945 16.305c0.121 1.084 0.246 2.205-1.099 3.715-0.363 0.408-0.576 0.976-0.802 1.578-0.522 1.393-1.015 2.71-3.114 2.729-0.059-0.071-0.226-0.335-0.374-1.173-0.136-0.772-0.215-1.769-0.299-2.825-0.128-1.62-0.273-3.456-0.673-4.979-0.512-1.948-1.371-3.098-2.626-3.517-0.548-0.183-1.107-0.272-1.709-0.272-0.444 0-0.848 0.048-1.204 0.089-0.277 0.033-0.539 0.064-0.761 0.064 0 0-0 0-0 0-0.375 0-0.799 0-1.321-1.197-0.751-1.72-0.197-4.477 2.006-5.931 1.208-0.797 2.042-1.137 2.787-1.137 0.595 0 1.237 0.207 2.148 0.692 1.076 0.573 1.918 0.646 2.532 0.646 0.243 0 0.464-0.013 0.678-0.026 0.179-0.011 0.348-0.021 0.504-0.021 0.352 0 0.637 0.046 0.971 0.274 0.616 0.421 0.936 1.35 1.273 2.333 0.512 1.491 1.093 3.181 2.936 3.807 0.248 0.084 0.674 0.229 0.976 0.355-0.26 0.269-0.696 0.658-1.122 1.039-0.275 0.246-0.587 0.524-0.933 0.839-0.999 0.91-0.88 1.976-0.775 2.915zM1.602 15.877c0.172 0.031 0.359 0.067 0.55 0.108 0.899 0.192 1.32 0.365 1.504 0.462-0.085 0.165-0.256 0.408-0.369 0.569-0.396 0.562-0.889 1.261-0.701 2.031 0.126 0.519 0.020 1.157-0.164 1.746-0.531-1.5-0.821-3.113-0.821-4.793 0-0.041 0.001-0.082 0.002-0.123zM16 30.4c-5.481 0-10.255-3.078-12.688-7.596 0.419-0.799 1.197-2.564 0.834-4.111 0.025-0.155 0.289-0.53 0.448-0.756 0.434-0.615 0.973-1.381 0.573-2.192-0.28-0.569-1.030-0.954-2.506-1.287-0.342-0.077-0.675-0.14-0.958-0.188 0.857-7.128 6.941-12.671 14.296-12.671 2.524 0 4.898 0.654 6.963 1.799-0.51-0.223-0.974-0.258-1.344-0.258-0.204 0-0.405 0.012-0.599 0.023-0.19 0.011-0.387 0.023-0.583 0.023-0.454 0-1.021-0.054-1.78-0.458-1.158-0.617-2.025-0.88-2.9-0.88-1.082 0-2.179 0.419-3.669 1.402-1.287 0.849-2.257 2.149-2.731 3.66-0.462 1.474-0.412 2.982 0.139 4.246 0.651 1.492 1.511 2.157 2.788 2.157 0 0 0 0 0 0 0.315 0 0.623-0.036 0.948-0.075 0.328-0.039 0.666-0.079 1.016-0.079 0.433 0 0.815 0.060 1.202 0.189 0.703 0.235 1.221 1.022 1.585 2.406s0.503 3.145 0.626 4.698c0.102 1.295 0.199 2.519 0.412 3.441 0.129 0.56 0.297 0.986 0.512 1.301 0.321 0.471 0.782 0.73 1.298 0.73 1.415 0 2.545-0.456 3.358-1.355 0.677-0.748 1.023-1.671 1.3-2.412 0.164-0.438 0.333-0.89 0.498-1.075 1.819-2.043 1.631-3.727 1.494-4.956-0.101-0.903-0.103-1.223 0.263-1.556 0.34-0.309 0.648-0.585 0.92-0.828 0.58-0.518 1-0.892 1.294-1.213 0.202-0.221 0.675-0.737 0.544-1.384-0.001-0.006-0.003-0.011-0.004-0.017 0.549 1.522 0.849 3.162 0.849 4.87 0 7.94-6.46 14.4-14.4 14.4z"></path>
</svg>
'
						),
						'activeNavItem' => false
					)
				)
			),
			'title' => array(
				'type' => 'string',
				'default' => 'Title'
			),
			'subTitle' => array(
				'type' => 'string',
				'default' => 'Sub Title'
			),
			'eventType' => array(
				'type' => 'string',
				'default' => 'click'
			),
			'style' => array(
				'type' => 'string',
				'default' => 'border_bottom'
			),
			'gkitAdvTabBgTransitionDesktop' => array(
				'type' => 'object'
			),
			'gkitAdvTabBgTransitionTablet' => array(
				'type' => 'object'
			),
			'gkitAdvTabBgTransitionMobile' => array(
				'type' => 'object'
			),
			'gkitAdvTabBgTransitionTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitAdvTabBgTransitionMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitAdvTabBgTransitionLaptop' => array(
				'type' => 'object'
			),
			'gkitAdvTabBgTransitionWideScreen' => array(
				'type' => 'object'
			),
			'enableCaret' => array(
				'type' => 'boolean',
				'default' => true
			),
			'enableFullWidth' => array(
				'type' => 'boolean',
				'default' => false
			),
			'enableURLHash' => array(
				'type' => 'boolean',
				'default' => false
			),
			'navDirectionDesktop' => array(
				'type' => 'string',
				'default' => 'column'
			),
			'navDirectionTablet' => array(
				'type' => 'string'
			),
			'navDirectionMobile' => array(
				'type' => 'string'
			),
			'navDirectionTabletLandscape' => array(
				'type' => 'string'
			),
			'navDirectionMobileLandscape' => array(
				'type' => 'string'
			),
			'navDirectionLaptop' => array(
				'type' => 'string'
			),
			'navDirectionWideScreen' => array(
				'type' => 'string'
			),
			'navWrapperAlignItemsDesktop' => array(
				'type' => 'string'
			),
			'navWrapperAlignItemsTablet' => array(
				'type' => 'string'
			),
			'navWrapperAlignItemsMobile' => array(
				'type' => 'string'
			),
			'navWrapperAlignItemsTabletLandscape' => array(
				'type' => 'string'
			),
			'navWrapperAlignItemsMobileLandscape' => array(
				'type' => 'string'
			),
			'navWrapperAlignItemsLaptop' => array(
				'type' => 'string'
			),
			'navWrapperAlignItemsWideScreen' => array(
				'type' => 'string'
			),
			'navBackground' => array(
				'type' => 'object'
			),
			'navBorder' => array(
				'type' => 'object'
			),
			'navBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'navBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'navBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'navBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'navBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'navBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'navBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'navPaddingDesktop' => array(
				'type' => 'object'
			),
			'navPaddingTablet' => array(
				'type' => 'object'
			),
			'navPaddingMobile' => array(
				'type' => 'object'
			),
			'navPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'navPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'navPaddingLaptop' => array(
				'type' => 'object'
			),
			'navPaddingWideScreen' => array(
				'type' => 'object'
			),
			'navMarginDesktop' => array(
				'type' => 'object'
			),
			'navMarginTablet' => array(
				'type' => 'object'
			),
			'navMarginMobile' => array(
				'type' => 'object'
			),
			'navMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'navMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'navMarginLaptop' => array(
				'type' => 'object'
			),
			'navMarginWideScreen' => array(
				'type' => 'object'
			),
			'navBoxShadow' => array(
				'type' => 'object'
			),
			'navIconAlignDesktop' => array(
				'type' => 'object'
			),
			'navIconAlignTablet' => array(
				'type' => 'object'
			),
			'navIconAlignMobile' => array(
				'type' => 'object'
			),
			'navIconAlignTabletLandscape' => array(
				'type' => 'object'
			),
			'navIconAlignMobileLandscape' => array(
				'type' => 'object'
			),
			'navIconAlignLaptop' => array(
				'type' => 'object'
			),
			'navIconAlignWideScreen' => array(
				'type' => 'object'
			),
			'iconSizeDesktop' => array(
				'type' => 'object'
			),
			'iconSizeTablet' => array(
				'type' => 'object'
			),
			'iconSizeMobile' => array(
				'type' => 'object'
			),
			'iconSizeTabletLandscape' => array(
				'type' => 'object'
			),
			'iconSizeMobileLandscape' => array(
				'type' => 'object'
			),
			'iconSizeLaptop' => array(
				'type' => 'object'
			),
			'iconSizeWideScreen' => array(
				'type' => 'object'
			),
			'navItemPaddingDesktop' => array(
				'type' => 'object'
			),
			'navItemPaddingTablet' => array(
				'type' => 'object'
			),
			'navItemPaddingMobile' => array(
				'type' => 'object'
			),
			'navItemPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'navItemPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'navItemPaddingLaptop' => array(
				'type' => 'object'
			),
			'navItemPaddingWideScreen' => array(
				'type' => 'object'
			),
			'navItemGapDesktop' => array(
				'type' => 'object'
			),
			'navItemGapTablet' => array(
				'type' => 'object'
			),
			'navItemGapMobile' => array(
				'type' => 'object'
			),
			'navItemGapTabletLandscape' => array(
				'type' => 'object'
			),
			'navItemGapMobileLandscape' => array(
				'type' => 'object'
			),
			'navItemGapLaptop' => array(
				'type' => 'object'
			),
			'navItemGapWideScreen' => array(
				'type' => 'object'
			),
			'navItemBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'navItemBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'navItemBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'navItemBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'navItemBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'navItemBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'navItemBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'navItemActiveBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'navItemActiveBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'navItemActiveBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'navItemActiveBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'navItemActiveBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'navItemActiveBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'navItemActiveBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'navItemHoverBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'navItemHoverBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'navItemHoverBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'navItemHoverBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'navItemHoverBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'navItemHoverBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'navItemHoverBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'titleColor' => array(
				'type' => 'string'
			),
			'subTitleColor' => array(
				'type' => 'string'
			),
			'subTitleHoverColor' => array(
				'type' => 'string'
			),
			'subTitleActiveColor' => array(
				'type' => 'string'
			),
			'iconColor' => array(
				'type' => 'string'
			),
			'navItemBackground' => array(
				'type' => 'object'
			),
			'navItemBoxShadow' => array(
				'type' => 'object'
			),
			'navItemBorder' => array(
				'type' => 'object',
				'default' => array(
					'width' => '1px',
					'style' => 'solid',
					'color' => '#2575fc'
				)
			),
			'titleActiveColor' => array(
				'type' => 'string'
			),
			'iconActiveColor' => array(
				'type' => 'string'
			),
			'navItemActiveBackground' => array(
				'type' => 'object'
			),
			'navItemActiveBoxShadow' => array(
				'type' => 'object'
			),
			'navItemActiveBorder' => array(
				'type' => 'object'
			),
			'titleHoverColor' => array(
				'type' => 'string'
			),
			'iconHoverColor' => array(
				'type' => 'string'
			),
			'navItemHoverBackground' => array(
				'type' => 'object'
			),
			'navItemHoverBoxShadow' => array(
				'type' => 'object'
			),
			'navItemHoverBorder' => array(
				'type' => 'object'
			),
			'navItemFirstChildBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'navItemFirstChildBorderWidthDesktop' => array(
				'type' => 'object'
			),
			'navItemLaststChildBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'navItemLaststChildBorderWidthDesktop' => array(
				'type' => 'object'
			),
			'navItemFirstChildBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'navItemFirstChildBorderWidthTablet' => array(
				'type' => 'object'
			),
			'navItemLaststChildBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'navItemLaststChildBorderWidthTablet' => array(
				'type' => 'object'
			),
			'navItemFirstChildBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'navItemFirstChildBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'navItemFirstChildBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'navItemFirstChildBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'navItemFirstChildBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'navItemFirstChildBorderWidthMobile' => array(
				'type' => 'object'
			),
			'navItemFirstChildBorderWidthTabletLandscape' => array(
				'type' => 'object'
			),
			'navItemFirstChildBorderWidthMobileLandscape' => array(
				'type' => 'object'
			),
			'navItemFirstChildBorderWidthLaptop' => array(
				'type' => 'object'
			),
			'navItemFirstChildBorderWidthWideScreen' => array(
				'type' => 'object'
			),
			'navItemLaststChildBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'navItemLaststChildBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'navItemLaststChildBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'navItemLaststChildBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'navItemLaststChildBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'navItemLaststChildBorderWidthMobile' => array(
				'type' => 'object'
			),
			'navItemLaststChildBorderWidthTabletLandscape' => array(
				'type' => 'object'
			),
			'navItemLaststChildBorderWidthMobileLandscape' => array(
				'type' => 'object'
			),
			'navItemLaststChildBorderWidthLaptop' => array(
				'type' => 'object'
			),
			'navItemLaststChildBorderWidthWideScreen' => array(
				'type' => 'object'
			),
			'bodyBackground' => array(
				'type' => 'object'
			),
			'bodyPaddingDesktop' => array(
				'type' => 'object'
			),
			'bodyPaddingTablet' => array(
				'type' => 'object'
			),
			'bodyPaddingMobile' => array(
				'type' => 'object'
			),
			'bodyPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'bodyPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'bodyPaddingLaptop' => array(
				'type' => 'object'
			),
			'bodyPaddingWideScreen' => array(
				'type' => 'object'
			),
			'contentAlignDesktop' => array(
				'type' => 'string'
			),
			'contentAlignTablet' => array(
				'type' => 'string'
			),
			'contentAlignMobile' => array(
				'type' => 'string'
			),
			'contentAlignTabletLandscape' => array(
				'type' => 'string'
			),
			'contentAlignMobileLandscape' => array(
				'type' => 'string'
			),
			'contentAlignLaptop' => array(
				'type' => 'string'
			),
			'contentAlignWideScreen' => array(
				'type' => 'string'
			),
			'contentJustifyDesktop' => array(
				'type' => 'string'
			),
			'contentJustifyTablet' => array(
				'type' => 'string'
			),
			'contentJustifyMobile' => array(
				'type' => 'string'
			),
			'contentJustifyTabletLandscape' => array(
				'type' => 'string'
			),
			'contentJustifyMobileLandscape' => array(
				'type' => 'string'
			),
			'contentJustifyLaptop' => array(
				'type' => 'string'
			),
			'contentJustifyWideScreen' => array(
				'type' => 'string'
			),
			'bodyBorder' => array(
				'type' => 'object'
			),
			'bodyBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'bodyBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'bodyBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'bodyBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'bodyBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'bodyBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'bodyBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'bodyBoxShadow' => array(
				'type' => 'object'
			),
			'bodyOverflow' => array(
				'type' => 'string',
				'default' => 'hidden'
			),
			'itemPosition' => array(
				'type' => 'string',
				'default' => 'row'
			),
			'itemJustifyDesktop' => array(
				'type' => 'string'
			),
			'itemJustifyTablet' => array(
				'type' => 'string'
			),
			'itemJustifyMobile' => array(
				'type' => 'string'
			),
			'itemJustifyTabletLandscape' => array(
				'type' => 'string'
			),
			'itemJustifyMobileLandscape' => array(
				'type' => 'string'
			),
			'itemJustifyLaptop' => array(
				'type' => 'string'
			),
			'itemJustifyWideScreen' => array(
				'type' => 'string'
			),
			'iconSpacingDesktop' => array(
				'type' => 'object'
			),
			'iconSpacingTablet' => array(
				'type' => 'object'
			),
			'iconSpacingMobile' => array(
				'type' => 'object'
			),
			'iconSpacingTabletLandscape' => array(
				'type' => 'object'
			),
			'iconSpacingMobileLandscape' => array(
				'type' => 'object'
			),
			'iconSpacingLaptop' => array(
				'type' => 'object'
			),
			'iconSpacingWideScreen' => array(
				'type' => 'object'
			),
			'navJustifyDesktop' => array(
				'type' => 'string'
			),
			'navJustifyTablet' => array(
				'type' => 'string'
			),
			'navJustifyMobile' => array(
				'type' => 'string'
			),
			'navJustifyTabletLandscape' => array(
				'type' => 'string'
			),
			'navJustifyMobileLandscape' => array(
				'type' => 'string'
			),
			'navJustifyLaptop' => array(
				'type' => 'string'
			),
			'navJustifyWideScreen' => array(
				'type' => 'string'
			),
			'navItemAlignDesktop' => array(
				'type' => 'string'
			),
			'navItemAlignTablet' => array(
				'type' => 'string'
			),
			'navItemAlignMobile' => array(
				'type' => 'string'
			),
			'navItemAlignTabletLandscape' => array(
				'type' => 'string'
			),
			'navItemAlignMobileLandscape' => array(
				'type' => 'string'
			),
			'navItemAlignLaptop' => array(
				'type' => 'string'
			),
			'navItemAlignWideScreen' => array(
				'type' => 'string'
			),
			'subTitleAlignDesktop' => array(
				'type' => 'string'
			),
			'subTitleAlignTablet' => array(
				'type' => 'string'
			),
			'subTitleAlignMobile' => array(
				'type' => 'string'
			),
			'subTitleAlignTabletLandscape' => array(
				'type' => 'string'
			),
			'subTitleAlignMobileLandscape' => array(
				'type' => 'string'
			),
			'subTitleAlignLaptop' => array(
				'type' => 'string'
			),
			'subTitleAlignWideScreen' => array(
				'type' => 'string'
			),
			'navItemTypographyGroup' => array(
				'type' => 'object'
			),
			'subTitleTypographyGroup' => array(
				'type' => 'object'
			),
			'navWidthVerticalDesktop' => array(
				'type' => 'object',
				'default' => array(
					'unit' => '%',
					'size' => 30
				)
			),
			'navWidthVerticalTablet' => array(
				'type' => 'object'
			),
			'navWidthVerticalMobile' => array(
				'type' => 'object'
			),
			'navWidthVerticalTabletLandscape' => array(
				'type' => 'object'
			),
			'navWidthVerticalMobileLandscape' => array(
				'type' => 'object'
			),
			'navWidthVerticalLaptop' => array(
				'type' => 'object'
			),
			'navWidthVerticalWideScreen' => array(
				'type' => 'object'
			),
			'makeFluid' => array(
				'type' => 'boolean',
				'default' => false
			),
			'caretWidthDesktop' => array(
				'type' => 'object'
			),
			'caretWidthTablet' => array(
				'type' => 'object'
			),
			'caretWidthMobile' => array(
				'type' => 'object'
			),
			'caretWidthTabletLandscape' => array(
				'type' => 'object'
			),
			'caretWidthMobileLandscape' => array(
				'type' => 'object'
			),
			'caretWidthLaptop' => array(
				'type' => 'object'
			),
			'caretWidthWideScreen' => array(
				'type' => 'object'
			),
			'caretHeightDesktop' => array(
				'type' => 'object'
			),
			'caretHeightTablet' => array(
				'type' => 'object'
			),
			'caretHeightMobile' => array(
				'type' => 'object'
			),
			'caretHeightTabletLandscape' => array(
				'type' => 'object'
			),
			'caretHeightMobileLandscape' => array(
				'type' => 'object'
			),
			'caretHeightLaptop' => array(
				'type' => 'object'
			),
			'caretHeightWideScreen' => array(
				'type' => 'object'
			),
			'caretBackground' => array(
				'type' => 'object'
			),
			'caretBottomPositionDesktop' => array(
				'type' => 'object'
			),
			'caretBottomPositionTablet' => array(
				'type' => 'object'
			),
			'caretBottomPositionMobile' => array(
				'type' => 'object'
			),
			'caretBottomPositionTabletLandscape' => array(
				'type' => 'object'
			),
			'caretBottomPositionMobileLandscape' => array(
				'type' => 'object'
			),
			'caretBottomPositionLaptop' => array(
				'type' => 'object'
			),
			'caretBottomPositionWideScreen' => array(
				'type' => 'object'
			),
			'caretLeftPositionDesktop' => array(
				'type' => 'object'
			),
			'caretLeftPositionTablet' => array(
				'type' => 'object'
			),
			'caretLeftPositionMobile' => array(
				'type' => 'object'
			),
			'caretLeftPositionTabletLandscape' => array(
				'type' => 'object'
			),
			'caretLeftPositionMobileLandscape' => array(
				'type' => 'object'
			),
			'caretLeftPositionLaptop' => array(
				'type' => 'object'
			),
			'caretLeftPositionWideScreen' => array(
				'type' => 'object'
			),
			'caretColor' => array(
				'type' => 'string'
			),
			'caretFillColor' => array(
				'type' => 'string'
			)
		),
		'providesContext' => array(
			'gutenkit/tab-activeIndex' => 'activeIndex'
		),
		'supports' => array(
			'html' => false,
			'align' => array(
				'wide',
				'full'
			),
			'anchor' => true
		),
		'textdomain' => 'gutenkit-blocks-addon',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./frontend.js'
	),
	'advanced-tab-item' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'gutenkit/advanced-tab-item',
		'version' => '1.0.0',
		'title' => 'Advanced Tab Item',
		'category' => 'gutenkit',
		'keywords' => array(
			'gkit',
			'gutenkit'
		),
		'description' => 'Advanced tab block for gutenberg.',
		'parent' => array(
			'gutenkit/advanced-tab'
		),
		'example' => array(
			'preview' => true
		),
		'attributes' => array(
			'blockID' => array(
				'type' => 'string'
			),
			'blockClass' => array(
				'type' => 'string'
			),
			'blocksCSS' => array(
				'type' => 'object'
			),
			'dummyBlockID' => array(
				'type' => 'string'
			)
		),
		'usesContext' => array(
			'gutenkit/tab-activeIndex'
		),
		'supports' => array(
			'html' => false,
			'anchor' => true
		),
		'textdomain' => 'gutenkit-blocks-addon',
		'editorScript' => 'file:./index.js'
	),
	'back-to-top' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'gutenkit/back-to-top',
		'version' => '1.0.0',
		'title' => 'Back To Top',
		'category' => 'gutenkit',
		'icon' => 'menu-alt3',
		'keywords' => array(
			'gkit',
			'back to top',
			'scroll',
			'scroll to top',
			'back',
			'top'
		),
		'description' => 'Back to top block for gutenberg.',
		'example' => array(
			'preview' => true
		),
		'attributes' => array(
			'blockID' => array(
				'type' => 'string'
			),
			'blockClass' => array(
				'type' => 'string'
			),
			'blocksCSS' => array(
				'type' => 'object'
			),
			'btnAppearance' => array(
				'type' => 'string',
				'default' => 'icon-only',
				'excludeCopy' => true
			),
			'btnIcon' => array(
				'type' => 'object',
				'default' => array(
					'title' => 'arrow-up',
					'src' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z"/></svg>'
				),
				'excludeCopy' => true
			),
			'btnText' => array(
				'type' => 'string',
				'default' => 'Top'
			),
			'alignDesktop' => array(
				'type' => 'string',
				'default' => 'left'
			),
			'alignTablet' => array(
				'type' => 'string'
			),
			'alignMobile' => array(
				'type' => 'string'
			),
			'alignTabletLandscape' => array(
				'type' => 'string'
			),
			'alignMobileLandscape' => array(
				'type' => 'string'
			),
			'alignLaptop' => array(
				'type' => 'string'
			),
			'alignWideScreen' => array(
				'type' => 'string'
			),
			'offsetTop' => array(
				'type' => 'number',
				'default' => 0,
				'excludeCopy' => true
			),
			'showBtnOnScroll' => array(
				'type' => 'boolean',
				'default' => false,
				'excludeCopy' => true
			),
			'scrolledValue' => array(
				'type' => 'number',
				'default' => 400,
				'excludeCopy' => true
			),
			'typography' => array(
				'type' => 'object',
				'default' => array(
					'fontSize' => array(
						'Desktop' => array(
							'size' => 16,
							'unit' => 'px'
						)
					)
				)
			),
			'iconSizeDesktop' => array(
				'type' => 'object',
				'default' => array(
					'size' => 16,
					'unit' => 'px'
				)
			),
			'iconSizeTablet' => array(
				'type' => 'object'
			),
			'iconSizeMobile' => array(
				'type' => 'object'
			),
			'iconSizeTabletLandscape' => array(
				'type' => 'object'
			),
			'iconSizeMobileLandscape' => array(
				'type' => 'object'
			),
			'iconSizeLaptop' => array(
				'type' => 'object'
			),
			'iconSizeWideScreen' => array(
				'type' => 'object'
			),
			'widthDesktop' => array(
				'type' => 'object',
				'default' => array(
					'size' => 50,
					'unit' => 'px'
				)
			),
			'widthTablet' => array(
				'type' => 'object'
			),
			'widthMobile' => array(
				'type' => 'object'
			),
			'widthTabletLandscape' => array(
				'type' => 'object'
			),
			'widthMobileLandscape' => array(
				'type' => 'object'
			),
			'widthLaptop' => array(
				'type' => 'object'
			),
			'widthWideScreen' => array(
				'type' => 'object'
			),
			'heightDesktop' => array(
				'type' => 'object',
				'default' => array(
					'size' => 50,
					'unit' => 'px'
				)
			),
			'heightTablet' => array(
				'type' => 'object'
			),
			'heightMobile' => array(
				'type' => 'object'
			),
			'heightTabletLandscape' => array(
				'type' => 'object'
			),
			'heightMobileLandscape' => array(
				'type' => 'object'
			),
			'heightLaptop' => array(
				'type' => 'object'
			),
			'heightWideScreen' => array(
				'type' => 'object'
			),
			'lineFgColor' => array(
				'type' => 'string',
				'default' => '#FF5050'
			),
			'lineBgColor' => array(
				'type' => 'string',
				'default' => '#EEEEEE'
			),
			'textColor' => array(
				'type' => 'string'
			),
			'bgColor' => array(
				'type' => 'object'
			),
			'boxShadow' => array(
				'type' => 'object'
			),
			'borderDesktop' => array(
				'type' => 'object'
			),
			'borderTablet' => array(
				'type' => 'object'
			),
			'borderMobile' => array(
				'type' => 'object'
			),
			'borderTabletLandscape' => array(
				'type' => 'object'
			),
			'borderMobileLandscape' => array(
				'type' => 'object'
			),
			'borderLaptop' => array(
				'type' => 'object'
			),
			'borderWideScreen' => array(
				'type' => 'object'
			),
			'borderRadiusDesktop' => array(
				'type' => 'object',
				'default' => array(
					'top' => '50px',
					'right' => '50px',
					'bottom' => '50px',
					'left' => '50px'
				)
			),
			'borderRadiusTablet' => array(
				'type' => 'object'
			),
			'borderRadiusMobile' => array(
				'type' => 'object'
			),
			'borderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'borderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'borderRadiusLaptop' => array(
				'type' => 'object'
			),
			'borderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'hoverColor' => array(
				'type' => 'string'
			),
			'bgHoverColor' => array(
				'type' => 'object'
			),
			'hoverBoxShadow' => array(
				'type' => 'object'
			),
			'hoverBorderDesktop' => array(
				'type' => 'object'
			),
			'hoverBorderTablet' => array(
				'type' => 'object'
			),
			'hoverBorderMobile' => array(
				'type' => 'object'
			),
			'hoverBorderTabletLandscape' => array(
				'type' => 'object'
			),
			'hoverBorderMobileLandscape' => array(
				'type' => 'object'
			),
			'hoverBorderLaptop' => array(
				'type' => 'object'
			),
			'hoverBorderWideScreen' => array(
				'type' => 'object'
			),
			'hoverBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'hoverBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'hoverBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'hoverBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'hoverBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'hoverBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'hoverBorderRadiusWideScreen' => array(
				'type' => 'object'
			)
		),
		'supports' => array(
			'html' => false,
			'anchor' => true
		),
		'textdomain' => 'gutenkit-blocks-addon',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./frontend.js'
	),
	'blog-posts' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'gutenkit/blog-posts',
		'version' => '1.0.0',
		'title' => 'Blog Posts',
		'category' => 'gutenkit',
		'keywords' => array(
			'gkit',
			'blog',
			'post',
			'grid',
			'recent post',
			'recent',
			'category post',
			'category'
		),
		'description' => 'Display a list of blog posts.',
		'example' => array(
			'preview' => true
		),
		'attributes' => array(
			'blockID' => array(
				'type' => 'string'
			),
			'blockClass' => array(
				'type' => 'string'
			),
			'blocksCSS' => array(
				'type' => 'object'
			),
			'layout' => array(
				'type' => 'string',
				'default' => 'list'
			),
			'postsPerRowDesktop' => array(
				'type' => 'number',
				'default' => 3
			),
			'postsPerRowTablet' => array(
				'type' => 'number',
				'default' => 3
			),
			'postsPerRowMobile' => array(
				'type' => 'number'
			),
			'postsPerRowTabletLandscape' => array(
				'type' => 'number'
			),
			'postsPerRowMobileLandscape' => array(
				'type' => 'number'
			),
			'postsPerRowLaptop' => array(
				'type' => 'number'
			),
			'postsPerRowWideScreen' => array(
				'type' => 'number'
			),
			'postsGridSpaceBetweenDesktop' => array(
				'type' => 'object',
				'default' => array(
					'unit' => 'px',
					'size' => 20
				)
			),
			'postsGridSpaceBetweenTablet' => array(
				'type' => 'object'
			),
			'postsGridSpaceBetweenMobile' => array(
				'type' => 'object'
			),
			'postsGridSpaceBetweenTabletLandscape' => array(
				'type' => 'object'
			),
			'postsGridSpaceBetweenMobileLandscape' => array(
				'type' => 'object'
			),
			'postsGridSpaceBetweenLaptop' => array(
				'type' => 'object'
			),
			'postsGridSpaceBetweenWideScreen' => array(
				'type' => 'object'
			),
			'thumbContentSpaceBetweenDesktop' => array(
				'type' => 'object',
				'default' => array(
					'unit' => 'px',
					'size' => 20
				)
			),
			'thumbContentSpaceBetweenTablet' => array(
				'type' => 'object'
			),
			'thumbContentSpaceBetweenMobile' => array(
				'type' => 'object'
			),
			'thumbContentSpaceBetweenTabletLandscape' => array(
				'type' => 'object'
			),
			'thumbContentSpaceBetweenMobileLandscape' => array(
				'type' => 'object'
			),
			'thumbContentSpaceBetweenLaptop' => array(
				'type' => 'object'
			),
			'thumbContentSpaceBetweenWideScreen' => array(
				'type' => 'object'
			),
			'showFeaturedImage' => array(
				'type' => 'boolean',
				'default' => true
			),
			'featuredImageSize' => array(
				'type' => 'string',
				'default' => 'full'
			),
			'featuredImagePosition' => array(
				'type' => 'string',
				'default' => 'left'
			),
			'showPostTitle' => array(
				'type' => 'boolean',
				'default' => true
			),
			'numberOfWordsTitle' => array(
				'type' => 'number',
				'default' => 5
			),
			'showPostContent' => array(
				'type' => 'boolean',
				'default' => true
			),
			'numberOfWordsContent' => array(
				'type' => 'number',
				'default' => 12
			),
			'showBlogPostsReadMore' => array(
				'type' => 'boolean',
				'default' => false
			),
			'numberOfPosts' => array(
				'type' => 'number',
				'default' => 10
			),
			'selectPostBy' => array(
				'type' => 'string',
				'default' => 'category'
			),
			'selectedCategories' => array(
				'type' => 'array',
				'default' => array(
					
				)
			),
			'offset' => array(
				'type' => 'number',
				'default' => 0
			),
			'orderBy' => array(
				'type' => 'string',
				'default' => 'date'
			),
			'order' => array(
				'type' => 'string',
				'default' => 'desc'
			),
			'selectedPosts' => array(
				'type' => 'array',
				'default' => array(
					
				)
			),
			'gkitBlogPostsFloatingDate' => array(
				'type' => 'boolean',
				'default' => false
			),
			'gkitBlogPostsFloatingDateStyle' => array(
				'type' => 'string',
				'default' => 'style1'
			),
			'gkitBlogPostsFloatingCategory' => array(
				'type' => 'boolean',
				'default' => false
			),
			'showMetaData' => array(
				'type' => 'boolean',
				'default' => true
			),
			'showMetaSeparator' => array(
				'type' => 'boolean',
				'default' => true
			),
			'metaSeparatorHeight' => array(
				'type' => 'object',
				'default' => array(
					'unit' => 'px',
					'size' => 20
				)
			),
			'metaSeparatorWidth' => array(
				'type' => 'object',
				'default' => array(
					'unit' => 'px',
					'size' => 2
				)
			),
			'metaSeparatorSpacing' => array(
				'type' => 'object',
				'default' => array(
					'unit' => 'px',
					'size' => -5
				)
			),
			'metaDataPosition' => array(
				'type' => 'string',
				'default' => 'before-title'
			),
			'metaData' => array(
				'type' => 'array',
				'default' => array(
					
				)
			),
			'dateIcon' => array(
				'type' => 'object',
				'default' => array(
					'title' => 'calendar',
					'src' => '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
<title>calendar3</title>
<path d="M30.831 6.246c-0.209-1.012-0.698-1.919-1.396-2.617-0.209-0.209-0.454-0.419-0.733-0.593l-0.035-0.035c-0.035-0.035-0.070-0.035-0.105-0.070-0.105-0.070-0.209-0.14-0.314-0.174h-0.035c-0.733-0.384-1.535-0.593-2.443-0.593h-2.164v-1.501c0-0.349-0.279-0.663-0.663-0.663-0.349 0-0.663 0.279-0.663 0.663v1.431h-12.528v-1.431c0-0.349-0.314-0.663-0.663-0.663s-0.663 0.279-0.663 0.663v1.431h-2.164c-0.663 0-1.326 0.14-1.919 0.384-0.663 0.279-1.256 0.663-1.745 1.152-0.279 0.279-0.523 0.593-0.733 0.907-0.209 0.349-0.384 0.698-0.523 1.082-0.070 0.209-0.14 0.419-0.174 0.628-0.070 0.349-0.105 0.698-0.105 1.047v19.577c0 1.431 0.593 2.722 1.501 3.629 0.942 0.942 2.233 1.501 3.629 1.501h19.612c1.431 0 2.722-0.593 3.629-1.501 0.942-0.942 1.501-2.233 1.501-3.629v-19.577c0-0.349-0.035-0.698-0.105-1.047zM2.425 7.258c0-0.279 0.035-0.523 0.070-0.768s0.14-0.489 0.209-0.733c0.14-0.314 0.314-0.593 0.489-0.838 0.105-0.14 0.209-0.244 0.314-0.384 0.209-0.209 0.454-0.384 0.698-0.558 0.593-0.349 1.256-0.558 1.989-0.558h2.164v1.431c0 0.349 0.279 0.663 0.663 0.663 0.349 0 0.663-0.279 0.663-0.663v-1.431h12.702v1.431c0 0.349 0.279 0.663 0.663 0.663 0.349 0 0.663-0.279 0.663-0.663v-1.431h2.164c0.733 0 1.431 0.209 1.989 0.558 0.244 0.174 0.489 0.349 0.698 0.558 0.523 0.523 0.907 1.186 1.047 1.954 0.035 0.244 0.070 0.523 0.070 0.768v2.862h-27.254v-2.861zM29.714 26.835c0 1.082-0.419 2.059-1.117 2.757s-1.675 1.117-2.722 1.117h-19.612c-1.047 0-2.024-0.419-2.722-1.117s-1.117-1.675-1.117-2.722v-15.459h27.289v15.424z"></path></svg>'
				)
			),
			'authorIcon' => array(
				'type' => 'object',
				'default' => array(
					'title' => 'user',
					'src' => '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="35" height="32" viewBox="0 0 35 32">
<title>User</title>
<path d="M32 24.91l-5.557-2.747c-0.511-0.256-0.83-0.766-0.83-1.405v-1.98c0.128-0.192 0.256-0.319 0.447-0.575 0.703-1.022 1.277-2.172 1.725-3.385 0.83-0.383 1.341-1.214 1.341-2.108v-2.299c0-0.575-0.192-1.086-0.575-1.533v-3.002c0.064-0.319 0.192-2.236-1.214-3.768-1.214-1.341-3.13-2.044-5.748-2.044s-4.599 0.703-5.748 2.044c-0.83 0.958-1.086 2.044-1.214 2.81-1.022-0.511-2.172-0.766-3.513-0.766-6.068 0-6.387 5.174-6.387 5.238v2.683c-0.383 0.383-0.575 0.894-0.575 1.341v1.916c0 0.639 0.255 1.214 0.766 1.597 0.511 1.788 1.661 3.194 2.108 3.641v1.597c0 0.447-0.255 0.894-0.703 1.086l-3.896 2.427c-1.533 0.83-2.427 2.427-2.427 4.088v2.236h34.874v-2.363c0-1.98-1.086-3.832-2.874-4.727zM8.112 29.509v1.277h-6.962v-1.022c0-1.277 0.703-2.427 1.852-3.066l3.896-2.427c0.766-0.447 1.277-1.214 1.277-2.108v-2.108l-0.192-0.192c0 0-1.533-1.469-2.044-3.449l-0.064-0.256-0.192-0.128c-0.255-0.192-0.447-0.447-0.447-0.766v-1.98c0-0.192 0.128-0.447 0.383-0.703l0.192-0.192v-3.13c0-0.192 0.319-4.088 5.238-4.088 1.405 0 2.555 0.319 3.513 0.958v2.81c-0.383 0.447-0.575 0.958-0.575 1.533v2.299c0 0.192 0 0.319 0.064 0.511 0 0.064 0.064 0.128 0.064 0.192 0.064 0.128 0.064 0.192 0.128 0.319 0 0 0 0 0 0 0.128 0.319 0.383 0.575 0.639 0.83 0 0 0 0 0 0 0.064 0.128 0.064 0.255 0.128 0.383l0.064 0.128c0 0 0 0.064 0 0.064 0 0.064 0.064 0.128 0.064 0.192 0.064 0.128 0.064 0.192 0.128 0.319 0 0.064 0.064 0.064 0.064 0.128 0.064 0.128 0.064 0.255 0.128 0.383 0 0 0 0.064 0.064 0.064l0.064 0.064c0 0.064 0 0.064 0.064 0.128 0.064 0.128 0.128 0.256 0.192 0.383 0 0 0 0.064 0 0.064 0.064 0.064 0.064 0.128 0.128 0.192 0.064 0.128 0.128 0.256 0.192 0.319 0 0.064 0.064 0.128 0.064 0.128 0.064 0.128 0.192 0.256 0.256 0.383 0 0 0.064 0.064 0.064 0.064 0.128 0.192 0.256 0.383 0.383 0.511 0 0.064 0.064 0.064 0.064 0.128 0 0 0 0.064 0.064 0.064v1.916c0 0.575-0.319 1.086-0.83 1.341l-1.533 0.83h-0.255l-0.128 0.256-3.449 1.852c-1.661 0.894-2.747 2.683-2.747 4.599zM33.725 30.85h-24.399v-1.277c0-1.469 0.83-2.874 2.108-3.577l5.174-2.81c0.894-0.447 1.405-1.405 1.405-2.363v-2.363l-0.128-0.192c0 0-0.064-0.064-0.128-0.128 0 0 0 0 0 0 0-0.064-0.064-0.064-0.128-0.128 0 0 0 0 0 0-0.064-0.128-0.192-0.256-0.319-0.447 0 0 0 0 0 0-0.064-0.064-0.128-0.192-0.192-0.319 0 0 0 0 0 0-0.128-0.192-0.256-0.447-0.383-0.766 0 0 0 0 0 0-0.064-0.128-0.128-0.319-0.192-0.447v0c0 0 0-0.064 0-0.064v0c-0.064-0.064-0.064-0.128-0.128-0.255 0 0 0-0.064-0.064-0.064 0-0.064-0.064-0.128-0.064-0.255-0.064-0.128-0.128-0.319-0.192-0.511l-0.064-0.128c0 0 0 0 0-0.064-0.064-0.192-0.128-0.383-0.128-0.575l-0.064-0.255-0.192-0.128c-0.319-0.192-0.511-0.575-0.511-0.958v-2.299c0-0.319 0.128-0.639 0.383-0.83l0.192-0.192v-3.832c0-0.447 0-1.725 0.958-2.747 0.958-1.086 2.619-1.661 4.918-1.661s3.896 0.575 4.854 1.661c1.15 1.277 0.958 2.938 0.958 2.938v3.705l0.192 0.192c0.256 0.255 0.383 0.511 0.383 0.83v2.236c0 0.511-0.319 0.958-0.83 1.086l-0.319 0.128-0.064 0.319c-0.383 1.214-0.958 2.299-1.661 3.321-0.192 0.256-0.319 0.447-0.511 0.639l-0.128 0.192v2.427c0 1.022 0.575 1.98 1.469 2.427l5.557 2.747c1.405 0.703 2.236 2.108 2.236 3.641v1.15z"></path></svg>'
				)
			),
			'categoryIcon' => array(
				'type' => 'object',
				'default' => array(
					'title' => 'folder',
					'src' => '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
<title>folder</title>
<path d="M30.661 11.867h-1.861v-3.343c0-0.804-0.654-1.457-1.457-1.457h-13.202l-2.667-3.733h-10.018c-0.803 0-1.457 0.654-1.457 1.457v23.3h0.003c-0.003 0.3 0.091 0.594 0.278 0.84 0.261 0.341 0.657 0.537 1.086 0.537h23.871c0.617 0 1.159-0.415 1.307-0.967l5.454-14.954v-0.094c0-0.918-0.563-1.585-1.339-1.585zM1.067 4.79c0-0.215 0.175-0.39 0.39-0.39h9.468l2.667 3.733h13.75c0.215 0 0.39 0.175 0.39 0.39v3.343h-20.943c-0.077 0-0.153 0.006-0.227 0.019-0.519 0.087-0.95 0.466-1.079 0.947l-4.417 12.046v-20.089zM25.53 28.178c-0.035 0.131-0.155 0.222-0.291 0.222h-23.871c-0.13 0-0.205-0.074-0.239-0.118s-0.085-0.137-0.066-0.218l5.435-14.908c0.035-0.131 0.155-0.222 0.291-0.222h23.872c0.203 0 0.254 0.291 0.268 0.437l-5.399 14.807z"></path></svg>'
				)
			),
			'commentIcon' => array(
				'type' => 'object',
				'default' => array(
					'title' => 'comment',
					'src' => '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
<title>comment</title>
<path d="M28.8 1.067h-25.6c-1.734 0-3.2 1.466-3.2 3.2v17.6c0 1.734 1.466 3.2 3.2 3.2h4.267v5.333c0 0.22 0.135 0.418 0.341 0.498 0.063 0.024 0.128 0.036 0.193 0.036 0.147 0 0.292-0.061 0.395-0.174l5.174-5.692h15.231c1.734 0 3.2-1.466 3.2-3.2v-17.6c0-1.734-1.466-3.2-3.2-3.2zM30.933 21.867c0 1.156-0.977 2.133-2.133 2.133h-14.305l1.909-2.219c0.192-0.223 0.167-0.56-0.057-0.752s-0.561-0.166-0.753 0.057l-2.666 3.099-4.396 4.836v-4.487c0-0.294-0.239-0.533-0.533-0.533h-4.8c-1.156 0-2.133-0.977-2.133-2.133v-17.6c0-1.156 0.977-2.133 2.133-2.133h25.6c1.156 0 2.133 0.977 2.133 2.133v17.6z"></path></svg>'
				)
			),
			'showAuthorAvatar' => array(
				'type' => 'boolean',
				'default' => false
			),
			'gkitBlogPostsBtnText' => array(
				'type' => 'string',
				'default' => 'Learn more'
			),
			'gkitBlogPostsShowBtnIcon' => array(
				'type' => 'boolean',
				'default' => true
			),
			'gkitBlogPostsBtnIcon' => array(
				'type' => 'object'
			),
			'gkitBlogPostsBtnIconAlign' => array(
				'type' => 'string',
				'default' => 'left'
			),
			'gkitBlogPostsBtnAlignDesktop' => array(
				'type' => 'string',
				'default' => 'flex-start'
			),
			'gkitBlogPostsBtnAlignTablet' => array(
				'type' => 'string',
				'default' => 'flex-start'
			),
			'gkitBlogPostsBtnAlignMobile' => array(
				'type' => 'string',
				'default' => 'flex-start'
			),
			'gkitBlogPostsBtnAlignTabletLandscape' => array(
				'type' => 'string',
				'default' => 'flex-start'
			),
			'gkitBlogPostsBtnAlignMobileLandscape' => array(
				'type' => 'string',
				'default' => 'flex-start'
			),
			'gkitBlogPostsBtnAlignLaptop' => array(
				'type' => 'string',
				'default' => 'flex-start'
			),
			'gkitBlogPostsBtnAlignWideScreen' => array(
				'type' => 'string',
				'default' => 'flex-start'
			),
			'wrapperBackgroundNormal' => array(
				'type' => 'object'
			),
			'wrapperBackgroundHover' => array(
				'type' => 'object'
			),
			'wrapperBoxShadowNormal' => array(
				'type' => 'object'
			),
			'wrapperBoxShadowHover' => array(
				'type' => 'object'
			),
			'verticalAlignment' => array(
				'type' => 'string',
				'default' => 'flex-start'
			),
			'wrapperBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'wrapperBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'wrapperBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'wrapperBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'wrapperBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'wrapperBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'wrapperBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'wrapperBorderRadiusHoverDesktop' => array(
				'type' => 'object'
			),
			'wrapperBorderRadiusHoverTablet' => array(
				'type' => 'object'
			),
			'wrapperBorderRadiusHoverMobile' => array(
				'type' => 'object'
			),
			'wrapperBorderRadiusHoverTabletLandscape' => array(
				'type' => 'object'
			),
			'wrapperBorderRadiusHoverMobileLandscape' => array(
				'type' => 'object'
			),
			'wrapperBorderRadiusHoverLaptop' => array(
				'type' => 'object'
			),
			'wrapperBorderRadiusHoverWideScreen' => array(
				'type' => 'object'
			),
			'wrapperPaddingDesktop' => array(
				'type' => 'object'
			),
			'wrapperPaddingTablet' => array(
				'type' => 'object'
			),
			'wrapperPaddingMobile' => array(
				'type' => 'object'
			),
			'wrapperPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'wrapperPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'wrapperPaddingLaptop' => array(
				'type' => 'object'
			),
			'wrapperPaddingWideScreen' => array(
				'type' => 'object'
			),
			'wrapperMarginDesktop' => array(
				'type' => 'object'
			),
			'wrapperMarginTablet' => array(
				'type' => 'object'
			),
			'wrapperMarginMobile' => array(
				'type' => 'object'
			),
			'wrapperMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'wrapperMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'wrapperMarginLaptop' => array(
				'type' => 'object'
			),
			'wrapperMarginWideScreen' => array(
				'type' => 'object'
			),
			'contentPaddingDesktop' => array(
				'type' => 'object'
			),
			'contentPaddingTablet' => array(
				'type' => 'object'
			),
			'contentPaddingMobile' => array(
				'type' => 'object'
			),
			'contentPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'contentPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'contentPaddingLaptop' => array(
				'type' => 'object'
			),
			'contentPaddingWideScreen' => array(
				'type' => 'object'
			),
			'containerBorder' => array(
				'type' => 'object'
			),
			'containerBorderHover' => array(
				'type' => 'object'
			),
			'containerBackgroundColor' => array(
				'type' => 'string'
			),
			'containerBackgroundColorHover' => array(
				'type' => 'string'
			),
			'contentBoxShadow' => array(
				'type' => 'object'
			),
			'contentBoxShadowHover' => array(
				'type' => 'object'
			),
			'contentBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'contentBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'contentBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'contentBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'contentBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'contentBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'contentBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'contentBorderRadiusHoverDesktop' => array(
				'type' => 'object'
			),
			'contentBorderRadiusHoverTablet' => array(
				'type' => 'object'
			),
			'contentBorderRadiusHoverMobile' => array(
				'type' => 'object'
			),
			'contentBorderRadiusHoverTabletLandscape' => array(
				'type' => 'object'
			),
			'contentBorderRadiusHoverMobileLandscape' => array(
				'type' => 'object'
			),
			'contentBorderRadiusHoverLaptop' => array(
				'type' => 'object'
			),
			'contentBorderRadiusHoverWideScreen' => array(
				'type' => 'object'
			),
			'gkitBlogPostsContentBorder' => array(
				'type' => 'object'
			),
			'gkitBlogPostsContentBorderHoverColor' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFeatureImgWidthDesktop' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFeatureImgWidthTablet' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFeatureImgWidthMobile' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFeatureImgWidthTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFeatureImgWidthMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFeatureImgWidthLaptop' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFeatureImgWidthWideScreen' => array(
				'type' => 'object'
			),
			'useHeightWidthSwitcher' => array(
				'type' => 'boolean',
				'default' => false
			),
			'gkitBlogImgMaxWidthDesktop' => array(
				'type' => 'object'
			),
			'gkitBlogImgMaxWidthTablet' => array(
				'type' => 'object'
			),
			'gkitBlogImgMaxWidthMobile' => array(
				'type' => 'object'
			),
			'gkitBlogImgMaxWidthTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitBlogImgMaxWidthMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitBlogImgMaxWidthLaptop' => array(
				'type' => 'object'
			),
			'gkitBlogImgMaxWidthWideScreen' => array(
				'type' => 'object'
			),
			'gkitBlogImgWidthDesktop' => array(
				'type' => 'object'
			),
			'gkitBlogImgWidthTablet' => array(
				'type' => 'object'
			),
			'gkitBlogImgWidthMobile' => array(
				'type' => 'object'
			),
			'gkitBlogImgWidthTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitBlogImgWidthMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitBlogImgWidthLaptop' => array(
				'type' => 'object'
			),
			'gkitBlogImgWidthWideScreen' => array(
				'type' => 'object'
			),
			'gkitBlogImgHeightDesktop' => array(
				'type' => 'object'
			),
			'gkitBlogImgHeightTablet' => array(
				'type' => 'object'
			),
			'gkitBlogImgHeightMobile' => array(
				'type' => 'object'
			),
			'gkitBlogImgHeightTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitBlogImgHeightMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitBlogImgHeightLaptop' => array(
				'type' => 'object'
			),
			'gkitBlogImgHeightWideScreen' => array(
				'type' => 'object'
			),
			'featuredImageBoxShadow' => array(
				'type' => 'object'
			),
			'featuredImageBorder' => array(
				'type' => 'object'
			),
			'featuredImageBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'featuredImageBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'featuredImageBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'featuredImageBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'featuredImageBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'featuredImageBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'featuredImageBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'featuredImagePaddingDesktop' => array(
				'type' => 'object'
			),
			'featuredImagePaddingTablet' => array(
				'type' => 'object'
			),
			'featuredImagePaddingMobile' => array(
				'type' => 'object'
			),
			'featuredImagePaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'featuredImagePaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'featuredImagePaddingLaptop' => array(
				'type' => 'object'
			),
			'featuredImagePaddingWideScreen' => array(
				'type' => 'object'
			),
			'showOverlay' => array(
				'type' => 'boolean',
				'default' => false
			),
			'blogPostBackgroundOverlay' => array(
				'type' => 'object'
			),
			'blogPostBackgroundHoverOverlay' => array(
				'type' => 'object'
			),
			'featuredImageMarginDesktop' => array(
				'type' => 'object',
				'default' => array(
					'top' => '0px',
					'right' => '0px',
					'bottom' => '30px',
					'left' => '0px'
				)
			),
			'featuredImageMarginTablet' => array(
				'type' => 'object'
			),
			'featuredImageMarginMobile' => array(
				'type' => 'object'
			),
			'featuredImageMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'featuredImageMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'featuredImageMarginLaptop' => array(
				'type' => 'object'
			),
			'featuredImageMarginWideScreen' => array(
				'type' => 'object'
			),
			'metaTypography' => array(
				'type' => 'object'
			),
			'metaAlignmentDesktop' => array(
				'type' => 'string'
			),
			'metaAlignmentTablet' => array(
				'type' => 'string'
			),
			'metaAlignmentMobile' => array(
				'type' => 'string'
			),
			'metaAlignmentTabletLandscape' => array(
				'type' => 'string'
			),
			'metaAlignmentMobileLandscape' => array(
				'type' => 'string'
			),
			'metaAlignmentLaptop' => array(
				'type' => 'string'
			),
			'metaAlignmentWideScreen' => array(
				'type' => 'string'
			),
			'metaContainerMarginDesktop' => array(
				'type' => 'object'
			),
			'metaContainerMarginTablet' => array(
				'type' => 'object'
			),
			'metaContainerMarginMobile' => array(
				'type' => 'object'
			),
			'metaContainerMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'metaContainerMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'metaContainerMarginLaptop' => array(
				'type' => 'object'
			),
			'metaContainerMarginWideScreen' => array(
				'type' => 'object'
			),
			'metaItemMarginDesktop' => array(
				'type' => 'object'
			),
			'metaItemMarginTablet' => array(
				'type' => 'object'
			),
			'metaItemMarginMobile' => array(
				'type' => 'object'
			),
			'metaItemMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'metaItemMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'metaItemMarginLaptop' => array(
				'type' => 'object'
			),
			'metaItemMarginWideScreen' => array(
				'type' => 'object'
			),
			'metaItemPadding' => array(
				'type' => 'object'
			),
			'metaItemIconSpacing' => array(
				'type' => 'object'
			),
			'metaItemIconSize' => array(
				'type' => 'object'
			),
			'metaTextColorNormal' => array(
				'type' => 'string',
				'default' => '#a3a3a3'
			),
			'metaIconColorNormal' => array(
				'type' => 'string'
			),
			'metaBackgroundColorNormal' => array(
				'type' => 'object'
			),
			'metaBorderNormal' => array(
				'type' => 'object'
			),
			'metaBorderRadiusNormal' => array(
				'type' => 'object'
			),
			'metaBoxShadowNormal' => array(
				'type' => 'object'
			),
			'metaTextShadowNormal' => array(
				'type' => 'object'
			),
			'metaTextColorHover' => array(
				'type' => 'string'
			),
			'metaIconColorHover' => array(
				'type' => 'string'
			),
			'metaBackgroundColorHover' => array(
				'type' => 'string'
			),
			'metaBorderHover' => array(
				'type' => 'object'
			),
			'metaBorderRadiusHover' => array(
				'type' => 'object'
			),
			'metaBoxShadowHover' => array(
				'type' => 'object'
			),
			'metaTextShadowHover' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDateHeightDesktop' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDateHeightTablet' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDateHeightMobile' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDateHeightTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDateHeightMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDateHeightLaptop' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDateHeightWideScreen' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDateWidthDesktop' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDateWidthTablet' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDateWidthMobile' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDateWidthTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDateWidthMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDateWidthLaptop' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDateWidthWideScreen' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDateLeftPositionDesktop' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDateLeftPositionTablet' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDateLeftPositionMobile' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDateLeftPositionTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDateLeftPositionMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDateLeftPositionLaptop' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDateLeftPositionWideScreen' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDateTopPositionDesktop' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDateTopPositionTablet' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDateTopPositionMobile' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDateTopPositionTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDateTopPositionMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDateTopPositionLaptop' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDateTopPositionWideScreen' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDateBottomPositionDesktop' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDateBottomPositionTablet' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDateBottomPositionMobile' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDateBottomPositionTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDateBottomPositionMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDateBottomPositionLaptop' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDateBottomPositionWideScreen' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDateStyle2LeftPositionDesktop' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDateStyle2LeftPositionTablet' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDateStyle2LeftPositionMobile' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDateStyle2LeftPositionTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDateStyle2LeftPositionMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDateStyle2LeftPositionLaptop' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDateStyle2LeftPositionWideScreen' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDateTypographyGroup' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDateColor' => array(
				'type' => 'string'
			),
			'gkitBlogPostsFloatingDateMonthTypographyGroup' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDateMonthColor' => array(
				'type' => 'string'
			),
			'gkitBlogPostsFloatingDateBgColorGroup' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDatePaddingDesktop' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDatePaddingTablet' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDatePaddingMobile' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDatePaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDatePaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDatePaddingLaptop' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDatePaddingWideScreen' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDateBorderGroup' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDateBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDateBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDateBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDateBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDateBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDateBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDateBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDateShadowGroup' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingDateTriangleBackgroundColor' => array(
				'type' => 'string'
			),
			'gkitBlogPostsFloatingDateTriangleSize' => array(
				'type' => 'object',
				'default' => array(
					'size' => 5,
					'unit' => 'px'
				)
			),
			'gkitBlogPostsFloatingDateTrianglePositionLeft' => array(
				'type' => 'object',
				'default' => array(
					'unit' => '%',
					'size' => 0
				)
			),
			'gkitBlogPostsFloatingDateTrianglePositionTop' => array(
				'type' => 'object',
				'default' => array(
					'unit' => 'px',
					'size' => -10
				)
			),
			'gkitBlogPostsFloatingDateTrianglePositionAlignment' => array(
				'type' => 'string',
				'default' => 'triangle-left'
			),
			'gkitBlogPostsFloatingCategoryTopPositionDesktop' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingCategoryTopPositionTablet' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingCategoryTopPositionMobile' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingCategoryTopPositionTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingCategoryTopPositionMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingCategoryTopPositionLaptop' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingCategoryTopPositionWideScreen' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingCategoryLeftPositionDesktop' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingCategoryLeftPositionTablet' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingCategoryLeftPositionMobile' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingCategoryLeftPositionTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingCategoryLeftPositionMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingCategoryLeftPositionLaptop' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingCategoryLeftPositionWideScreen' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingCategoryTypography' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingCategoryColor' => array(
				'type' => 'string'
			),
			'gkitBlogPostsFloatingCategoryBgColor' => array(
				'type' => 'string'
			),
			'gkitBlogPostsFloatingCategoryPaddingDesktop' => array(
				'type' => 'object',
				'default' => array(
					'top' => '4px',
					'right' => '8px',
					'bottom' => '4px',
					'left' => '8px'
				)
			),
			'gkitBlogPostsFloatingCategoryPaddingTablet' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingCategoryPaddingMobile' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingCategoryPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingCategoryPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingCategoryPaddingLaptop' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingCategoryPaddingWideScreen' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingCategoryBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingCategoryBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingCategoryBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingCategoryBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingCategoryBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingCategoryBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingCategoryBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingCategoryMarginRightDesktop' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingCategoryMarginRightTablet' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingCategoryMarginRightMobile' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingCategoryMarginRightTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingCategoryMarginRightMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingCategoryMarginRightLaptop' => array(
				'type' => 'object'
			),
			'gkitBlogPostsFloatingCategoryMarginRightWideScreen' => array(
				'type' => 'object'
			),
			'titleTypography' => array(
				'type' => 'object'
			),
			'titleColorNormal' => array(
				'type' => 'string'
			),
			'titleTextShadowNormal' => array(
				'type' => 'object'
			),
			'titleTextShadowHover' => array(
				'type' => 'object'
			),
			'titleColorHover' => array(
				'type' => 'string'
			),
			'titleAlignmentDesktop' => array(
				'type' => 'string'
			),
			'titleAlignmentTablet' => array(
				'type' => 'string'
			),
			'titleAlignmentMobile' => array(
				'type' => 'string'
			),
			'titleAlignmentTabletLandscape' => array(
				'type' => 'string'
			),
			'titleAlignmentMobileLandscape' => array(
				'type' => 'string'
			),
			'titleAlignmentLaptop' => array(
				'type' => 'string'
			),
			'titleAlignmentWideScreen' => array(
				'type' => 'string'
			),
			'titleContainerMarginDesktop' => array(
				'type' => 'object'
			),
			'titleContainerMarginTablet' => array(
				'type' => 'object'
			),
			'titleContainerMarginMobile' => array(
				'type' => 'object'
			),
			'titleContainerMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'titleContainerMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'titleContainerMarginLaptop' => array(
				'type' => 'object'
			),
			'titleContainerMarginWideScreen' => array(
				'type' => 'object'
			),
			'gkitBlogPostsTitleSeparator' => array(
				'type' => 'boolean',
				'default' => true
			),
			'gkitBlogPostsTitleSeparatorColor' => array(
				'type' => 'string'
			),
			'gkitBlogPostsTitleSeparatorWidth' => array(
				'type' => 'object',
				'default' => array(
					'unit' => '%',
					'size' => 5
				)
			),
			'gkitBlogPostsTitleSeparatorHeight' => array(
				'type' => 'object',
				'default' => array(
					'unit' => 'px',
					'size' => 3
				)
			),
			'gkitBlogPostsTitleSeparatorMargin' => array(
				'type' => 'object'
			),
			'contentColor' => array(
				'type' => 'string'
			),
			'contentColorHover' => array(
				'type' => 'string'
			),
			'contentTypography' => array(
				'type' => 'object'
			),
			'contentTextShadow' => array(
				'type' => 'object'
			),
			'contentAlignmentDesktop' => array(
				'type' => 'string',
				'default' => 'left'
			),
			'contentAlignmentTablet' => array(
				'type' => 'string',
				'default' => 'left'
			),
			'contentAlignmentMobile' => array(
				'type' => 'string',
				'default' => 'left'
			),
			'contentAlignmentTabletLandscape' => array(
				'type' => 'string',
				'default' => 'left'
			),
			'contentAlignmentMobileLandscape' => array(
				'type' => 'string',
				'default' => 'left'
			),
			'contentAlignmentLaptop' => array(
				'type' => 'string',
				'default' => 'left'
			),
			'contentAlignmentWideScreen' => array(
				'type' => 'string',
				'default' => 'left'
			),
			'contentContainerMarginDesktop' => array(
				'type' => 'object'
			),
			'contentContainerMarginTablet' => array(
				'type' => 'object'
			),
			'contentContainerMarginMobile' => array(
				'type' => 'object'
			),
			'contentContainerMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'contentContainerMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'contentContainerMarginLaptop' => array(
				'type' => 'object'
			),
			'contentContainerMarginWideScreen' => array(
				'type' => 'object'
			),
			'showContentHighlightBorder' => array(
				'type' => 'boolean',
				'default' => false
			),
			'highlightBorderHeight' => array(
				'type' => 'object',
				'default' => array(
					'size' => 100,
					'unit' => 'px'
				)
			),
			'highlightBorderWidth' => array(
				'type' => 'object',
				'default' => array(
					'size' => 2,
					'unit' => 'px'
				)
			),
			'highlightBorderBottomPosition' => array(
				'type' => 'object',
				'default' => array(
					'size' => 50,
					'unit' => '%'
				)
			),
			'highlightBorderRightPosition' => array(
				'type' => 'object',
				'default' => array(
					'size' => 0,
					'unit' => '%'
				)
			),
			'highlightBorderBackgroundcolorNormal' => array(
				'type' => 'string'
			),
			'highlightBorderBackgroundcolorHover' => array(
				'type' => 'string'
			),
			'authorImageWidth' => array(
				'type' => 'object',
				'default' => array(
					'size' => 30,
					'unit' => 'px'
				)
			),
			'authorImageHeight' => array(
				'type' => 'object',
				'default' => array(
					'size' => 30,
					'unit' => 'px'
				)
			),
			'authorImageBoxShadow' => array(
				'type' => 'object'
			),
			'authorImageBorder' => array(
				'type' => 'object'
			),
			'authorImageMargin' => array(
				'type' => 'object'
			),
			'authorImageBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'authorImageBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'authorImageBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'authorImageBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'authorImageBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'authorImageBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'authorImageBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'gkitBlogPostsBtnPaddingDesktop' => array(
				'type' => 'object'
			),
			'gkitBlogPostsBtnPaddingTablet' => array(
				'type' => 'object'
			),
			'gkitBlogPostsBtnPaddingMobile' => array(
				'type' => 'object'
			),
			'gkitBlogPostsBtnPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitBlogPostsBtnPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitBlogPostsBtnPaddingLaptop' => array(
				'type' => 'object'
			),
			'gkitBlogPostsBtnPaddingWideScreen' => array(
				'type' => 'object'
			),
			'gkitBlogPostsBtnMarginDesktop' => array(
				'type' => 'object'
			),
			'gkitBlogPostsBtnMarginTablet' => array(
				'type' => 'object'
			),
			'gkitBlogPostsBtnMarginMobile' => array(
				'type' => 'object'
			),
			'gkitBlogPostsBtnMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitBlogPostsBtnMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitBlogPostsBtnMarginLaptop' => array(
				'type' => 'object'
			),
			'gkitBlogPostsBtnMarginWideScreen' => array(
				'type' => 'object'
			),
			'gkitBlogPostsBtnTypography' => array(
				'type' => 'object'
			),
			'gkitBlogPostsBtnTextColor' => array(
				'type' => 'string'
			),
			'gkitBlogPostsBtnBgColor' => array(
				'type' => 'string'
			),
			'gkitBlogPostsBtnBorder' => array(
				'type' => 'object'
			),
			'gkitBlogPostsBtnHoverColor' => array(
				'type' => 'string'
			),
			'gkitBlogPostsBtnHoverBgColor' => array(
				'type' => 'string'
			),
			'gkitBlogPostsBtnBorderHoverColor' => array(
				'type' => 'string'
			),
			'gkitBlogPostsBtnBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'gkitBlogPostsBtnBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'gkitBlogPostsBtnBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'gkitBlogPostsBtnBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitBlogPostsBtnBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitBlogPostsBtnBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'gkitBlogPostsBtnBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'gkitBlogPostsBtnBoxShadow' => array(
				'type' => 'object'
			),
			'gkitBlogPostsBtnBoxShadowHover' => array(
				'type' => 'object'
			),
			'gkitBlogPostsBtnSpacing' => array(
				'type' => 'object'
			)
		),
		'supports' => array(
			'html' => false,
			'align' => array(
				'wide',
				'full'
			),
			'anchor' => true
		),
		'textdomain' => 'gutenkit-blocks-addon',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php'
	),
	'business-hours' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'gutenkit/business-hours',
		'version' => '1.0.0',
		'title' => 'Business Hours',
		'category' => 'gutenkit',
		'allowedBlocks' => array(
			'gutenkit/business-hours-item'
		),
		'icon' => 'menu-alt3',
		'keywords' => array(
			'gkit',
			'business hours',
			'opening hours',
			'hours',
			'opening times',
			'times',
			'currently open',
			'watch'
		),
		'description' => 'Business hours block for gutenkit.',
		'example' => array(
			'preview' => true
		),
		'attributes' => array(
			'blockID' => array(
				'type' => 'string'
			),
			'blockClass' => array(
				'type' => 'string'
			),
			'blocksCSS' => array(
				'type' => 'object'
			),
			'gkitBusinessOpendayList' => array(
				'type' => 'array',
				'default' => array(
					array(
						'gkitBusinessDay' => 'Saturday',
						'gkitBusinessTime' => 'Close',
						'gkitHighlightThisDay' => true,
						'gkitSingleBusinessDayColor' => '#fa2d2d',
						'gkitSingleBusinessTimeColor' => '#fa2d2d'
					),
					array(
						'gkitBusinessDay' => 'Sunday',
						'gkitBusinessTime' => 'Close',
						'gkitHighlightThisDay' => true,
						'gkitSingleBusinessDayColor' => '#fa2d2d',
						'gkitSingleBusinessTimeColor' => '#fa2d2d'
					),
					array(
						'gkitBusinessDay' => 'Monday',
						'gkitBusinessTime' => '10:00 AM to 7:00 PM',
						'gkitHighlightThisDay' => false
					),
					array(
						'gkitBusinessDay' => 'Tuesday',
						'gkitBusinessTime' => '10:00 AM to 7:00 PM',
						'gkitHighlightThisDay' => false
					),
					array(
						'gkitBusinessDay' => 'Wednesday',
						'gkitBusinessTime' => '10:00 AM to 7:00 PM',
						'gkitHighlightThisDay' => false
					),
					array(
						'gkitBusinessDay' => 'Thursday',
						'gkitBusinessTime' => '10:00 AM to 7:00 PM',
						'gkitHighlightThisDay' => false
					),
					array(
						'gkitBusinessDay' => 'Friday',
						'gkitBusinessTime' => '10:00 AM to 7:00 PM',
						'gkitHighlightThisDay' => false
					)
				),
				'excludeCopy' => true
			),
			'gkitBusinessItemMarginDesktop' => array(
				'type' => 'object'
			),
			'gkitBusinessItemMarginTablet' => array(
				'type' => 'object'
			),
			'gkitBusinessItemMarginMobile' => array(
				'type' => 'object'
			),
			'gkitBusinessItemMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitBusinessItemMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitBusinessItemMarginLaptop' => array(
				'type' => 'object'
			),
			'gkitBusinessItemMarginWideScreen' => array(
				'type' => 'object'
			),
			'gkitBusinessItemPaddingDesktop' => array(
				'type' => 'object'
			),
			'gkitBusinessItemPaddingTablet' => array(
				'type' => 'object'
			),
			'gkitBusinessItemPaddingMobile' => array(
				'type' => 'object'
			),
			'gkitBusinessItemPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitBusinessItemPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitBusinessItemPaddingLaptop' => array(
				'type' => 'object'
			),
			'gkitBusinessItemPaddingWideScreen' => array(
				'type' => 'object'
			),
			'gkitBusinessItemBackground' => array(
				'type' => 'object'
			),
			'gkitBusinessItemItemRadiusDesktop' => array(
				'type' => 'object'
			),
			'gkitBusinessItemItemRadiusTablet' => array(
				'type' => 'object'
			),
			'gkitBusinessItemItemRadiusMobile' => array(
				'type' => 'object'
			),
			'gkitBusinessItemItemRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitBusinessItemItemRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitBusinessItemItemRadiusLaptop' => array(
				'type' => 'object'
			),
			'gkitBusinessItemItemRadiusWideScreen' => array(
				'type' => 'object'
			),
			'gkitBusinessItemBorder' => array(
				'type' => 'object'
			),
			'gkitLastChildBorder' => array(
				'type' => 'boolean',
				'default' => false
			),
			'gkitBusinessDayColor' => array(
				'type' => 'string'
			),
			'gkitBusinessDayTypography' => array(
				'type' => 'object'
			),
			'gkitBusinessDayBackground' => array(
				'type' => 'object'
			),
			'gkitBusinessItemDayRadiusDesktop' => array(
				'type' => 'object'
			),
			'gkitBusinessItemDayRadiusTablet' => array(
				'type' => 'object'
			),
			'gkitBusinessItemDayRadiusMobile' => array(
				'type' => 'object'
			),
			'gkitBusinessItemDayRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitBusinessItemDayRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitBusinessItemDayRadiusLaptop' => array(
				'type' => 'object'
			),
			'gkitBusinessItemDayRadiusWideScreen' => array(
				'type' => 'object'
			),
			'gkitBusinessItemDayPaddingDesktop' => array(
				'type' => 'object'
			),
			'gkitBusinessItemDayPaddingTablet' => array(
				'type' => 'object'
			),
			'gkitBusinessItemDayPaddingMobile' => array(
				'type' => 'object'
			),
			'gkitBusinessItemDayPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitBusinessItemDayPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitBusinessItemDayPaddingLaptop' => array(
				'type' => 'object'
			),
			'gkitBusinessItemDayPaddingWideScreen' => array(
				'type' => 'object'
			),
			'gkitBusinessTimeColor' => array(
				'type' => 'string'
			),
			'gkitBusinessTimeTypography' => array(
				'type' => 'object'
			),
			'gkitBusinessTimeBackground' => array(
				'type' => 'object'
			),
			'gkitBusinessItemTimeRadiusDesktop' => array(
				'type' => 'object'
			),
			'gkitBusinessItemTimeRadiusTablet' => array(
				'type' => 'object'
			),
			'gkitBusinessItemTimeRadiusMobile' => array(
				'type' => 'object'
			),
			'gkitBusinessItemTimeRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitBusinessItemTimeRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitBusinessItemTimeRadiusLaptop' => array(
				'type' => 'object'
			),
			'gkitBusinessItemTimeRadiusWideScreen' => array(
				'type' => 'object'
			),
			'gkitBusinessItemTimePaddingDesktop' => array(
				'type' => 'object'
			),
			'gkitBusinessItemTimePaddingTablet' => array(
				'type' => 'object'
			),
			'gkitBusinessItemTimePaddingMobile' => array(
				'type' => 'object'
			),
			'gkitBusinessItemTimePaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitBusinessItemTimePaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitBusinessItemTimePaddingLaptop' => array(
				'type' => 'object'
			),
			'gkitBusinessItemTimePaddingWideScreen' => array(
				'type' => 'object'
			)
		),
		'supports' => array(
			'html' => false,
			'align' => array(
				'wide',
				'full'
			),
			'anchor' => true
		),
		'textdomain' => 'gutenkit-blocks-addon',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css'
	),
	'business-hours-item' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'gutenkit/business-hours-item',
		'version' => '1.0.0',
		'title' => 'Business Hours Item',
		'category' => 'gutenkit',
		'icon' => 'menu-alt3',
		'keywords' => array(
			'gkit',
			'business hours',
			'opening hours',
			'hours',
			'opening times',
			'times',
			'currently open',
			'watch'
		),
		'description' => 'Business Hours Item for gutenkit.',
		'parent' => array(
			'gutenkit/business-hours'
		),
		'example' => array(
			'preview' => true
		),
		'attributes' => array(
			'blockID' => array(
				'type' => 'string'
			),
			'blockClass' => array(
				'type' => 'string'
			),
			'blocksCSS' => array(
				'type' => 'object'
			),
			'gkitBusinessDay' => array(
				'type' => 'string',
				'default' => 'Friday'
			),
			'gkitBusinessTime' => array(
				'type' => 'string',
				'default' => '10:00 AM to 7:00 PM'
			),
			'gkitHighlightThisDay' => array(
				'type' => 'boolean',
				'default' => true
			),
			'gkitSingleBusinessDayColor' => array(
				'type' => 'string'
			),
			'gkitSingleBusinessTimeColor' => array(
				'type' => 'string'
			),
			'gkitSingleBusinessBackgroundColor' => array(
				'type' => 'string'
			)
		),
		'supports' => array(
			'html' => false,
			'align' => array(
				'wide',
				'full'
			),
			'anchor' => true
		),
		'textdomain' => 'gutenkit-blocks-addon',
		'editorScript' => 'file:./index.js',
		'editorStyle' => array(
			'file:./index.css'
		)
	),
	'button' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'gutenkit/button',
		'version' => '1.0.0',
		'title' => 'Button',
		'category' => 'gutenkit',
		'icon' => 'menu-alt3',
		'keywords' => array(
			'ekit',
			'button',
			'call',
			'call button'
		),
		'description' => 'Button block for gutenberg.',
		'example' => array(
			'preview' => true
		),
		'attributes' => array(
			'blockID' => array(
				'type' => 'string'
			),
			'blockClass' => array(
				'type' => 'string'
			),
			'blocksCSS' => array(
				'type' => 'object'
			),
			'btnText' => array(
				'type' => 'string',
				'default' => 'Click to Watch',
				'excludeCopy' => true
			),
			'url' => array(
				'type' => 'object',
				'default' => array(
					'url' => '#'
				),
				'excludeCopy' => true
			),
			'iconsSwitch' => array(
				'type' => 'boolean',
				'default' => true,
				'excludeCopy' => true
			),
			'icons' => array(
				'type' => 'object',
				'default' => array(
					'title' => 'play-button1',
					'src' => '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
<title>play-button1</title>
<path d="M29.85 8.403c-2.136-3.7-5.585-6.346-9.711-7.452s-8.436-0.538-12.136 1.598c-3.7 2.136-6.346 5.585-7.452 9.711s-0.538 8.436 1.598 12.136c2.136 3.7 5.585 6.346 9.711 7.452 1.378 0.369 2.776 0.552 4.165 0.552 2.771 0 5.506-0.727 7.971-2.15 3.7-2.136 6.346-5.585 7.452-9.711s0.538-8.436-1.598-12.136zM29.839 20.108c-0.991 3.697-3.361 6.786-6.676 8.7s-7.175 2.422-10.872 1.431c-3.697-0.991-6.786-3.361-8.7-6.676s-2.422-7.175-1.431-10.872c0.991-3.697 3.361-6.786 6.676-8.7 2.208-1.275 4.658-1.926 7.141-1.926 1.244 0 2.497 0.164 3.731 0.494 3.697 0.99 6.786 3.361 8.7 6.676s2.422 7.175 1.431 10.872zM23.674 14.891l-10.283-5.937c-0.546-0.315-1.197-0.315-1.743-0s-0.871 0.879-0.871 1.509v11.874c0 0.63 0.326 1.194 0.871 1.509 0.273 0.158 0.572 0.236 0.871 0.236s0.599-0.079 0.871-0.236l10.283-5.937c0.546-0.315 0.871-0.879 0.871-1.509s-0.326-1.194-0.871-1.509zM22.841 16.467l-10.283 5.937c-0.013 0.007-0.039 0.022-0.077 0s-0.039-0.052-0.039-0.067v-11.874c0-0.014 0-0.045 0.039-0.067 0.015-0.009 0.028-0.012 0.040-0.012 0.018 0 0.030 0.007 0.038 0.012l10.283 5.937c0.013 0.007 0.039 0.022 0.039 0.067s-0.026 0.060-0.039 0.067zM25.831 8.803c-1.981-2.559-4.958-4.278-8.169-4.716-0.455-0.062-0.876 0.257-0.938 0.712s0.257 0.876 0.712 0.938c2.782 0.38 5.361 1.869 7.077 4.086 0.164 0.212 0.41 0.323 0.659 0.323 0.178 0 0.358-0.057 0.509-0.174 0.364-0.281 0.43-0.805 0.149-1.168z"></path>
</svg>
'
				),
				'excludeCopy' => true
			),
			'iconAlign' => array(
				'type' => 'string',
				'default' => 'right',
				'excludeCopy' => true
			),
			'alignDesktop' => array(
				'type' => 'string'
			),
			'alignTablet' => array(
				'type' => 'string'
			),
			'alignMobile' => array(
				'type' => 'string'
			),
			'alignTabletLandscape' => array(
				'type' => 'string'
			),
			'alignMobileLandscape' => array(
				'type' => 'string'
			),
			'alignLaptop' => array(
				'type' => 'string'
			),
			'alignWideScreen' => array(
				'type' => 'string'
			),
			'btnClass' => array(
				'type' => 'string',
				'default' => '',
				'excludeCopy' => true
			),
			'btnID' => array(
				'type' => 'string',
				'default' => '',
				'excludeCopy' => true
			),
			'widthDesktop' => array(
				'type' => 'object'
			),
			'widthTablet' => array(
				'type' => 'object'
			),
			'widthMobile' => array(
				'type' => 'object'
			),
			'widthTabletLandscape' => array(
				'type' => 'object'
			),
			'widthMobileLandscape' => array(
				'type' => 'object'
			),
			'widthLaptop' => array(
				'type' => 'object'
			),
			'widthWideScreen' => array(
				'type' => 'object'
			),
			'textPaddingDesktop' => array(
				'type' => 'object',
				'default' => array(
					'top' => '14px',
					'right' => '22px',
					'bottom' => '14px',
					'left' => '22px'
				)
			),
			'textPaddingTablet' => array(
				'type' => 'object'
			),
			'textPaddingMobile' => array(
				'type' => 'object'
			),
			'textPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'textPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'textPaddingLaptop' => array(
				'type' => 'object'
			),
			'textPaddingWideScreen' => array(
				'type' => 'object'
			),
			'typography' => array(
				'type' => 'object',
				'default' => array(
					'fontSize' => array(
						'Desktop' => array(
							'size' => 14,
							'unit' => 'px'
						)
					)
				)
			),
			'shadow' => array(
				'type' => 'object'
			),
			'textColor' => array(
				'type' => 'string'
			),
			'bgColor' => array(
				'type' => 'object',
				'default' => array(
					'backgroundType' => 'classic',
					'backgroundColor' => '#2575fc'
				)
			),
			'hoverColor' => array(
				'type' => 'string'
			),
			'bgHoverColor' => array(
				'type' => 'object',
				'default' => array(
					'backgroundType' => 'classic',
					'backgroundColor' => '#0069d9'
				)
			),
			'backgroundHoverTransformY' => array(
				'type' => 'object'
			),
			'borderDesktop' => array(
				'type' => 'object'
			),
			'borderTablet' => array(
				'type' => 'object'
			),
			'borderMobile' => array(
				'type' => 'object'
			),
			'borderTabletLandscape' => array(
				'type' => 'object'
			),
			'borderMobileLandscape' => array(
				'type' => 'object'
			),
			'borderLaptop' => array(
				'type' => 'object'
			),
			'borderWideScreen' => array(
				'type' => 'object'
			),
			'borderRadiusDesktop' => array(
				'type' => 'object',
				'default' => array(
					'top' => '5px',
					'right' => '5px',
					'bottom' => '5px',
					'left' => '5px'
				)
			),
			'borderRadiusTablet' => array(
				'type' => 'object'
			),
			'borderRadiusMobile' => array(
				'type' => 'object'
			),
			'borderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'borderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'borderRadiusLaptop' => array(
				'type' => 'object'
			),
			'borderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'hoverBorderDesktop' => array(
				'type' => 'object'
			),
			'hoverBorderTablet' => array(
				'type' => 'object'
			),
			'hoverBorderMobile' => array(
				'type' => 'object'
			),
			'hoverBorderTabletLandscape' => array(
				'type' => 'object'
			),
			'hoverBorderMobileLandscape' => array(
				'type' => 'object'
			),
			'hoverBorderLaptop' => array(
				'type' => 'object'
			),
			'hoverBorderWideScreen' => array(
				'type' => 'object'
			),
			'hoverBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'hoverBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'hoverBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'hoverBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'hoverBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'hoverBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'hoverBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'boxShadowGroup' => array(
				'type' => 'object'
			),
			'boxShadowGroupHover' => array(
				'type' => 'object'
			),
			'iconFontSizeDesktop' => array(
				'type' => 'object',
				'default' => array(
					'size' => 18,
					'unit' => 'px'
				)
			),
			'iconFontSizeTablet' => array(
				'type' => 'object'
			),
			'iconFontSizeMobile' => array(
				'type' => 'object'
			),
			'iconFontSizeTabletLandscape' => array(
				'type' => 'object'
			),
			'iconFontSizeMobileLandscape' => array(
				'type' => 'object'
			),
			'iconFontSizeLaptop' => array(
				'type' => 'object'
			),
			'iconFontSizeWideScreen' => array(
				'type' => 'object'
			),
			'normalIconPaddingDesktop' => array(
				'type' => 'object',
				'default' => array(
					'size' => 8,
					'unit' => 'px'
				)
			),
			'normalIconPaddingTablet' => array(
				'type' => 'object'
			),
			'normalIconPaddingMobile' => array(
				'type' => 'object'
			),
			'normalIconPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'normalIconPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'normalIconPaddingLaptop' => array(
				'type' => 'object'
			),
			'normalIconPaddingWideScreen' => array(
				'type' => 'object'
			),
			'normalIconVerticalAlignDesktop' => array(
				'type' => 'object'
			),
			'normalIconVerticalAlignTablet' => array(
				'type' => 'object'
			),
			'normalIconVerticalAlignMobile' => array(
				'type' => 'object'
			),
			'normalIconVerticalAlignTabletLandscape' => array(
				'type' => 'object'
			),
			'normalIconVerticalAlignMobileLandscape' => array(
				'type' => 'object'
			),
			'normalIconVerticalAlignLaptop' => array(
				'type' => 'object'
			),
			'normalIconVerticalAlignWideScreen' => array(
				'type' => 'object'
			)
		),
		'supports' => array(
			'html' => false,
			'align' => array(
				'wide',
				'full'
			),
			'anchor' => true
		),
		'textdomain' => 'gutenkit-blocks-addon',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css'
	),
	'container' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'gutenkit/container',
		'version' => '1.0.0',
		'title' => 'Container',
		'category' => 'gutenkit',
		'description' => 'Container block for gutenberg.',
		'example' => array(
			'preview' => true
		),
		'attributes' => array(
			'blockID' => array(
				'type' => 'string'
			),
			'blockClass' => array(
				'type' => 'string'
			),
			'blocksCSS' => array(
				'type' => 'object'
			),
			'containerWidth' => array(
				'type' => 'string',
				'default' => 'alignfull'
			),
			'customWidthDesktop' => array(
				'type' => 'object',
				'default' => array(
					'size' => 60,
					'unit' => '%'
				)
			),
			'customWidthTablet' => array(
				'type' => 'object'
			),
			'customWidthMobile' => array(
				'type' => 'object'
			),
			'customWidthTabletLandscape' => array(
				'type' => 'object'
			),
			'customWidthMobileLandscape' => array(
				'type' => 'object'
			),
			'customWidthLaptop' => array(
				'type' => 'object'
			),
			'customWidthWideScreen' => array(
				'type' => 'object'
			),
			'contentWidth' => array(
				'type' => 'string',
				'default' => 'full-width'
			),
			'contentBoxWidthDesktop' => array(
				'type' => 'object'
			),
			'contentBoxWidthTablet' => array(
				'type' => 'object'
			),
			'contentBoxWidthMobile' => array(
				'type' => 'object'
			),
			'contentBoxWidthTabletLandscape' => array(
				'type' => 'object'
			),
			'contentBoxWidthMobileLandscape' => array(
				'type' => 'object'
			),
			'contentBoxWidthLaptop' => array(
				'type' => 'object'
			),
			'contentBoxWidthWideScreen' => array(
				'type' => 'object'
			),
			'minHeightDesktop' => array(
				'type' => 'object'
			),
			'minHeightTablet' => array(
				'type' => 'object'
			),
			'minHeightMobile' => array(
				'type' => 'object'
			),
			'minHeightTabletLandscape' => array(
				'type' => 'object'
			),
			'minHeightMobileLandscape' => array(
				'type' => 'object'
			),
			'minHeightLaptop' => array(
				'type' => 'object'
			),
			'minHeightWideScreen' => array(
				'type' => 'object'
			),
			'directionDesktop' => array(
				'type' => 'string'
			),
			'directionTablet' => array(
				'type' => 'string'
			),
			'directionMobile' => array(
				'type' => 'string',
				'default' => 'column'
			),
			'directionTabletLandscape' => array(
				'type' => 'string'
			),
			'directionMobileLandscape' => array(
				'type' => 'string'
			),
			'directionLaptop' => array(
				'type' => 'string'
			),
			'directionWideScreen' => array(
				'type' => 'string'
			),
			'justifyContentDesktop' => array(
				'type' => 'string',
				'default' => 'center'
			),
			'justifyContentTablet' => array(
				'type' => 'string'
			),
			'justifyContentMobile' => array(
				'type' => 'string'
			),
			'justifyContentTabletLandscape' => array(
				'type' => 'string'
			),
			'justifyContentMobileLandscape' => array(
				'type' => 'string'
			),
			'justifyContentLaptop' => array(
				'type' => 'string'
			),
			'justifyContentWideScreen' => array(
				'type' => 'string'
			),
			'alignItemsDesktop' => array(
				'type' => 'string',
				'default' => 'center'
			),
			'alignItemsTablet' => array(
				'type' => 'string'
			),
			'alignItemsMobile' => array(
				'type' => 'string'
			),
			'alignItemsTabletLandscape' => array(
				'type' => 'string'
			),
			'alignItemsMobileLandscape' => array(
				'type' => 'string'
			),
			'alignItemsLaptop' => array(
				'type' => 'string'
			),
			'alignItemsWideScreen' => array(
				'type' => 'string'
			),
			'rowGapBetweenDesktop' => array(
				'type' => 'object'
			),
			'rowGapBetweenTablet' => array(
				'type' => 'object'
			),
			'rowGapBetweenMobile' => array(
				'type' => 'object'
			),
			'rowGapBetweenTabletLandscape' => array(
				'type' => 'object'
			),
			'rowGapBetweenMobileLandscape' => array(
				'type' => 'object'
			),
			'rowGapBetweenLaptop' => array(
				'type' => 'object'
			),
			'rowGapBetweenWideScreen' => array(
				'type' => 'object'
			),
			'columnGapBetweenDesktop' => array(
				'type' => 'object'
			),
			'columnGapBetweenTablet' => array(
				'type' => 'object'
			),
			'columnGapBetweenMobile' => array(
				'type' => 'object'
			),
			'columnGapBetweenTabletLandscape' => array(
				'type' => 'object'
			),
			'columnGapBetweenMobileLandscape' => array(
				'type' => 'object'
			),
			'columnGapBetweenLaptop' => array(
				'type' => 'object'
			),
			'columnGapBetweenWideScreen' => array(
				'type' => 'object'
			),
			'wrapDesktop' => array(
				'type' => 'string'
			),
			'wrapTablet' => array(
				'type' => 'string'
			),
			'wrapMobile' => array(
				'type' => 'string'
			),
			'wrapTabletLandscape' => array(
				'type' => 'string'
			),
			'wrapMobileLandscape' => array(
				'type' => 'string'
			),
			'wrapLaptop' => array(
				'type' => 'string'
			),
			'wrapWideScreen' => array(
				'type' => 'string'
			),
			'overflow' => array(
				'type' => 'string'
			),
			'htmlTag' => array(
				'type' => 'string',
				'default' => 'div'
			),
			'htmlTagLink' => array(
				'type' => 'string'
			),
			'borderDesktop' => array(
				'type' => 'object'
			),
			'borderTablet' => array(
				'type' => 'object'
			),
			'borderMobile' => array(
				'type' => 'object'
			),
			'borderTabletLandscape' => array(
				'type' => 'object'
			),
			'borderMobileLandscape' => array(
				'type' => 'object'
			),
			'borderLaptop' => array(
				'type' => 'object'
			),
			'borderWideScreen' => array(
				'type' => 'object'
			),
			'containerBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'containerBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'containerBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'containerBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'containerBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'containerBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'containerBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'conatinerBoxShadow' => array(
				'type' => 'object'
			),
			'borderHoverDesktop' => array(
				'type' => 'object'
			),
			'borderHoverTablet' => array(
				'type' => 'object'
			),
			'borderHoverMobile' => array(
				'type' => 'object'
			),
			'borderHoverTabletLandscape' => array(
				'type' => 'object'
			),
			'borderHoverMobileLandscape' => array(
				'type' => 'object'
			),
			'borderHoverLaptop' => array(
				'type' => 'object'
			),
			'borderHoverWideScreen' => array(
				'type' => 'object'
			),
			'containerBorderRadiusHoverDesktop' => array(
				'type' => 'object'
			),
			'containerBorderRadiusHoverTablet' => array(
				'type' => 'object'
			),
			'containerBorderRadiusHoverMobile' => array(
				'type' => 'object'
			),
			'containerBorderRadiusHoverTabletLandscape' => array(
				'type' => 'object'
			),
			'containerBorderRadiusHoverMobileLandscape' => array(
				'type' => 'object'
			),
			'containerBorderRadiusHoverLaptop' => array(
				'type' => 'object'
			),
			'containerBorderRadiusHoverWideScreen' => array(
				'type' => 'object'
			),
			'containerBoxShadowHover' => array(
				'type' => 'object'
			),
			'containerBackground' => array(
				'type' => 'object',
				'selector' => '{{WRAPPER}}',
				'isHover' => false
			),
			'showContainerOverlay' => array(
				'type' => 'boolean',
				'default' => false
			),
			'containerBackgroundOverlay' => array(
				'type' => 'object',
				'selector' => '{{WRAPPER}}',
				'isHover' => true,
				'default' => array(
					'opacity' => array(
						'size' => '0.5'
					)
				)
			),
			'containerBackgroundHover' => array(
				'type' => 'object'
			),
			'containerBackgroundHoverOverlay' => array(
				'type' => 'object',
				'default' => array(
					'opacity' => array(
						'size' => '0.5'
					)
				)
			),
			'containerOverlayHoverTransitionDuration' => array(
				'type' => 'object',
				'default' => array(
					'size' => '0.3'
				)
			),
			'variationSeleted' => array(
				'type' => 'boolean',
				'default' => false
			),
			'containerFlexShrink' => array(
				'type' => 'number',
				'default' => 1
			),
			'enableBackgroundImageScroll' => array(
				'type' => 'boolean',
				'default' => false
			),
			'gkitContainerShapeDivider' => array(
				'type' => 'array',
				'default' => array(
					
				),
				'excludeCopy' => true
			),
			'containerLink' => array(
				'type' => 'object'
			)
		),
		'supports' => array(
			'html' => false,
			'anchor' => true
		),
		'textdomain' => 'gutenkit-blocks-addon',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css'
	),
	'countdown-timer' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'gutenkit/countdown-timer',
		'version' => '1.0.0',
		'title' => 'Countdown Timer',
		'category' => 'gutenkit',
		'keywords' => array(
			'gkit',
			'countdown',
			'deadline',
			'timer'
		),
		'description' => 'Countdown timer block for gutenberg.',
		'example' => array(
			'preview' => true
		),
		'attributes' => array(
			'blockID' => array(
				'type' => 'string'
			),
			'blockClass' => array(
				'type' => 'string'
			),
			'blocksCSS' => array(
				'type' => 'object'
			),
			'style' => array(
				'type' => 'string',
				'default' => 'style1'
			),
			'date' => array(
				'type' => 'string',
				'default' => '2030-09-19T12:00:00'
			),
			'dayLabel' => array(
				'type' => 'string',
				'default' => 'Days'
			),
			'hourLabel' => array(
				'type' => 'string',
				'default' => 'Hours'
			),
			'minuteLabel' => array(
				'type' => 'string',
				'default' => 'Minutes'
			),
			'secondLabel' => array(
				'type' => 'string',
				'default' => 'Seconds'
			),
			'weekLabel' => array(
				'type' => 'string',
				'default' => 'Weeks'
			),
			'widthDesktop' => array(
				'type' => 'object'
			),
			'heightDesktop' => array(
				'type' => 'object'
			),
			'lineHeightDesktop' => array(
				'type' => 'object'
			),
			'widthTablet' => array(
				'type' => 'object'
			),
			'heightTablet' => array(
				'type' => 'object'
			),
			'lineHeightTablet' => array(
				'type' => 'object'
			),
			'widthMobile' => array(
				'type' => 'object'
			),
			'widthTabletLandscape' => array(
				'type' => 'object'
			),
			'widthMobileLandscape' => array(
				'type' => 'object'
			),
			'widthLaptop' => array(
				'type' => 'object'
			),
			'widthWideScreen' => array(
				'type' => 'object'
			),
			'heightMobile' => array(
				'type' => 'object'
			),
			'heightTabletLandscape' => array(
				'type' => 'object'
			),
			'heightMobileLandscape' => array(
				'type' => 'object'
			),
			'heightLaptop' => array(
				'type' => 'object'
			),
			'heightWideScreen' => array(
				'type' => 'object'
			),
			'lineHeightMobile' => array(
				'type' => 'object'
			),
			'lineHeightTabletLandscape' => array(
				'type' => 'object'
			),
			'lineHeightMobileLandscape' => array(
				'type' => 'object'
			),
			'lineHeightLaptop' => array(
				'type' => 'object'
			),
			'lineHeightWideScreen' => array(
				'type' => 'object'
			),
			'columnGapDesktop' => array(
				'type' => 'object'
			),
			'columnGapTablet' => array(
				'type' => 'object'
			),
			'columnGapMobile' => array(
				'type' => 'object'
			),
			'columnGapTabletLandscape' => array(
				'type' => 'object'
			),
			'columnGapMobileLandscape' => array(
				'type' => 'object'
			),
			'columnGapLaptop' => array(
				'type' => 'object'
			),
			'columnGapWideScreen' => array(
				'type' => 'object'
			),
			'rowGapDesktop' => array(
				'type' => 'object'
			),
			'rowGapTablet' => array(
				'type' => 'object'
			),
			'rowGapMobile' => array(
				'type' => 'object'
			),
			'rowGapTabletLandscape' => array(
				'type' => 'object'
			),
			'rowGapMobileLandscape' => array(
				'type' => 'object'
			),
			'rowGapLaptop' => array(
				'type' => 'object'
			),
			'rowGapWideScreen' => array(
				'type' => 'object'
			),
			'daysColor' => array(
				'type' => 'string'
			),
			'daysTypography' => array(
				'type' => 'object'
			),
			'daysMarginBottomDesktop' => array(
				'type' => 'object'
			),
			'daysMarginBottomTablet' => array(
				'type' => 'object'
			),
			'daysMarginBottomMobile' => array(
				'type' => 'object'
			),
			'daysMarginBottomTabletLandscape' => array(
				'type' => 'object'
			),
			'daysMarginBottomMobileLandscape' => array(
				'type' => 'object'
			),
			'daysMarginBottomLaptop' => array(
				'type' => 'object'
			),
			'daysMarginBottomWideScreen' => array(
				'type' => 'object'
			),
			'daysLabelColor' => array(
				'type' => 'string'
			),
			'daysLabelBackground' => array(
				'type' => 'object'
			),
			'daysLabelTypography' => array(
				'type' => 'object'
			),
			'daysLabelBorder' => array(
				'type' => 'object'
			),
			'daysLabelBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'daysLabelBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'daysLabelBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'daysLabelBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'daysLabelBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'daysLabelBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'daysLabelBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'daysLabelMarginDesktop' => array(
				'type' => 'object'
			),
			'daysLabelMarginTablet' => array(
				'type' => 'object'
			),
			'daysLabelMarginMobile' => array(
				'type' => 'object'
			),
			'daysLabelMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'daysLabelMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'daysLabelMarginLaptop' => array(
				'type' => 'object'
			),
			'daysLabelMarginWideScreen' => array(
				'type' => 'object'
			),
			'daysBackground' => array(
				'type' => 'object',
				'selector' => '{{WRAPPER}}'
			),
			'daysBorder' => array(
				'type' => 'object'
			),
			'daysBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'daysBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'daysBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'daysBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'daysBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'daysBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'daysBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'daysShadow' => array(
				'type' => 'object'
			),
			'weeksColor' => array(
				'type' => 'string'
			),
			'weeksTypography' => array(
				'type' => 'object'
			),
			'weeksMarginBottomDesktop' => array(
				'type' => 'object'
			),
			'weeksMarginBottomTablet' => array(
				'type' => 'object'
			),
			'weeksMarginBottomMobile' => array(
				'type' => 'object'
			),
			'weeksMarginBottomTabletLandscape' => array(
				'type' => 'object'
			),
			'weeksMarginBottomMobileLandscape' => array(
				'type' => 'object'
			),
			'weeksMarginBottomLaptop' => array(
				'type' => 'object'
			),
			'weeksMarginBottomWideScreen' => array(
				'type' => 'object'
			),
			'weeksLabelColor' => array(
				'type' => 'string'
			),
			'weeksLabelBackground' => array(
				'type' => 'object'
			),
			'weeksLabelTypography' => array(
				'type' => 'object'
			),
			'weeksLabelBorder' => array(
				'type' => 'object'
			),
			'weeksLabelBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'weeksLabelBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'weeksLabelBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'weeksLabelBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'weeksLabelBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'weeksLabelBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'weeksLabelBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'weeksLabelMarginDesktop' => array(
				'type' => 'object'
			),
			'weeksLabelMarginTablet' => array(
				'type' => 'object'
			),
			'weeksLabelMarginMobile' => array(
				'type' => 'object'
			),
			'weeksLabelMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'weeksLabelMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'weeksLabelMarginLaptop' => array(
				'type' => 'object'
			),
			'weeksLabelMarginWideScreen' => array(
				'type' => 'object'
			),
			'weeksBackground' => array(
				'type' => 'object',
				'selector' => '{{WRAPPER}}'
			),
			'weeksBorder' => array(
				'type' => 'object'
			),
			'weeksBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'weeksBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'weeksBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'weeksBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'weeksBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'weeksBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'weeksBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'weeksShadow' => array(
				'type' => 'object'
			),
			'hoursColor' => array(
				'type' => 'string'
			),
			'hoursTypography' => array(
				'type' => 'object'
			),
			'hoursMarginBottomDesktop' => array(
				'type' => 'object'
			),
			'hoursMarginBottomTablet' => array(
				'type' => 'object'
			),
			'hoursMarginBottomMobile' => array(
				'type' => 'object'
			),
			'hoursMarginBottomTabletLandscape' => array(
				'type' => 'object'
			),
			'hoursMarginBottomMobileLandscape' => array(
				'type' => 'object'
			),
			'hoursMarginBottomLaptop' => array(
				'type' => 'object'
			),
			'hoursMarginBottomWideScreen' => array(
				'type' => 'object'
			),
			'hoursLabelColor' => array(
				'type' => 'string'
			),
			'hoursLabelBackground' => array(
				'type' => 'object'
			),
			'hoursLabelTypography' => array(
				'type' => 'object'
			),
			'hoursLabelBorder' => array(
				'type' => 'object'
			),
			'hoursLabelBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'hoursLabelBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'hoursLabelBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'hoursLabelBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'hoursLabelBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'hoursLabelBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'hoursLabelBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'hoursLabelMarginDesktop' => array(
				'type' => 'object'
			),
			'hoursLabelMarginTablet' => array(
				'type' => 'object'
			),
			'hoursLabelMarginMobile' => array(
				'type' => 'object'
			),
			'hoursLabelMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'hoursLabelMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'hoursLabelMarginLaptop' => array(
				'type' => 'object'
			),
			'hoursLabelMarginWideScreen' => array(
				'type' => 'object'
			),
			'hoursBackground' => array(
				'type' => 'object',
				'selector' => '{{WRAPPER}}'
			),
			'hoursBorder' => array(
				'type' => 'object'
			),
			'hoursBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'hoursBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'hoursBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'hoursBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'hoursBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'hoursBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'hoursBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'hoursShadow' => array(
				'type' => 'object'
			),
			'minutesColor' => array(
				'type' => 'string'
			),
			'minutesTypography' => array(
				'type' => 'object'
			),
			'minutesMarginBottomDesktop' => array(
				'type' => 'object'
			),
			'minutesMarginBottomTablet' => array(
				'type' => 'object'
			),
			'minutesMarginBottomMobile' => array(
				'type' => 'object'
			),
			'minutesMarginBottomTabletLandscape' => array(
				'type' => 'object'
			),
			'minutesMarginBottomMobileLandscape' => array(
				'type' => 'object'
			),
			'minutesMarginBottomLaptop' => array(
				'type' => 'object'
			),
			'minutesMarginBottomWideScreen' => array(
				'type' => 'object'
			),
			'minutesLabelColor' => array(
				'type' => 'string'
			),
			'minutesLabelBackground' => array(
				'type' => 'object'
			),
			'minutesLabelTypography' => array(
				'type' => 'object'
			),
			'minutesLabelBorder' => array(
				'type' => 'object'
			),
			'minutesLabelBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'minutesLabelBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'minutesLabelBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'minutesLabelBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'minutesLabelBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'minutesLabelBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'minutesLabelBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'minutesLabelMarginDesktop' => array(
				'type' => 'object'
			),
			'minutesLabelMarginTablet' => array(
				'type' => 'object'
			),
			'minutesLabelMarginMobile' => array(
				'type' => 'object'
			),
			'minutesLabelMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'minutesLabelMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'minutesLabelMarginLaptop' => array(
				'type' => 'object'
			),
			'minutesLabelMarginWideScreen' => array(
				'type' => 'object'
			),
			'minutesBackground' => array(
				'type' => 'object',
				'selector' => '{{WRAPPER}}'
			),
			'minutesBorder' => array(
				'type' => 'object'
			),
			'minutesBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'minutesBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'minutesBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'minutesBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'minutesBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'minutesBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'minutesBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'minutesShadow' => array(
				'type' => 'object'
			),
			'secondsColor' => array(
				'type' => 'string'
			),
			'secondsTypography' => array(
				'type' => 'object'
			),
			'secondsMarginBottomDesktop' => array(
				'type' => 'object'
			),
			'secondsMarginBottomTablet' => array(
				'type' => 'object'
			),
			'secondsMarginBottomMobile' => array(
				'type' => 'object'
			),
			'secondsMarginBottomTabletLandscape' => array(
				'type' => 'object'
			),
			'secondsMarginBottomMobileLandscape' => array(
				'type' => 'object'
			),
			'secondsMarginBottomLaptop' => array(
				'type' => 'object'
			),
			'secondsMarginBottomWideScreen' => array(
				'type' => 'object'
			),
			'secondsLabelColor' => array(
				'type' => 'string'
			),
			'secondsLabelBackground' => array(
				'type' => 'object'
			),
			'secondsLabelTypography' => array(
				'type' => 'object'
			),
			'secondsLabelBorder' => array(
				'type' => 'object'
			),
			'secondsLabelBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'secondsLabelBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'secondsLabelBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'secondsLabelBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'secondsLabelBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'secondsLabelBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'secondsLabelBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'secondsLabelMarginDesktop' => array(
				'type' => 'object'
			),
			'secondsLabelMarginTablet' => array(
				'type' => 'object'
			),
			'secondsLabelMarginMobile' => array(
				'type' => 'object'
			),
			'secondsLabelMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'secondsLabelMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'secondsLabelMarginLaptop' => array(
				'type' => 'object'
			),
			'secondsLabelMarginWideScreen' => array(
				'type' => 'object'
			),
			'secondsBackground' => array(
				'type' => 'object',
				'selector' => '{{WRAPPER}}'
			),
			'secondsBorder' => array(
				'type' => 'object'
			),
			'secondsBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'secondsBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'secondsBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'secondsBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'secondsBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'secondsBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'secondsBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'secondsShadow' => array(
				'type' => 'object'
			),
			'outerBackground' => array(
				'type' => 'object',
				'selector' => '{{WRAPPER}}'
			),
			'outerEdgeColor' => array(
				'type' => 'string'
			),
			'innerBackground' => array(
				'type' => 'object',
				'selector' => '{{WRAPPER}}'
			),
			'expireLabel' => array(
				'type' => 'string',
				'default' => 'Countdown is finished!'
			),
			'expireDescription' => array(
				'type' => 'string',
				'default' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s'
			),
			'isExpired' => array(
				'type' => 'boolean',
				'default' => false
			)
		),
		'supports' => array(
			'html' => false,
			'anchor' => true,
			'align' => array(
				'wide',
				'full'
			)
		),
		'textdomain' => 'gutenkit-blocks-addon',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./frontend.js'
	),
	'donut-progress-bar' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'gutenkit/donut-progress-bar',
		'version' => '1.0.0',
		'title' => 'Donut progress bar',
		'category' => 'gutenkit',
		'keywords' => array(
			'gkit',
			'gutenkit',
			'pie',
			'chart',
			'donut progress bar'
		),
		'description' => 'Donut progress bar block for gutenberg.',
		'example' => array(
			'preview' => true
		),
		'attributes' => array(
			'blockID' => array(
				'type' => 'string'
			),
			'blockClass' => array(
				'type' => 'string'
			),
			'blocksCSS' => array(
				'type' => 'object'
			),
			'gkitPiechartStyle' => array(
				'type' => 'string',
				'default' => 'simple',
				'excludeCopy' => true
			),
			'gkitPiechartContent' => array(
				'type' => 'string',
				'default' => 'percentage',
				'excludeCopy' => true
			),
			'gkitPiechartPercentage' => array(
				'type' => 'number',
				'default' => 80,
				'excludeCopy' => true
			),
			'gkitPiechartIconType' => array(
				'type' => 'string',
				'default' => 'icon',
				'excludeCopy' => true
			),
			'gkitPiechartIcon' => array(
				'type' => 'object',
				'default' => array(
					'title' => 'apartment',
					'src' => '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
<title>apartment</title>
<path d="M31.493 30.923h-2.154c0-0.19 0.063-0.38 0.063-0.507 0-1.521-0.887-2.788-2.154-3.358v-17.996c0-0.317-0.19-0.507-0.507-0.507h-8.048v-8.048c0-0.317-0.19-0.507-0.507-0.507h-14.448c-0.317 0-0.507 0.19-0.507 0.507v30.416h-2.661c-0.317 0-0.507 0.19-0.507 0.507s0.19 0.507 0.507 0.507h30.986c0.317 0 0.507-0.19 0.507-0.507s-0.253-0.507-0.57-0.507zM26.107 26.677c-0.19 0-0.38-0.063-0.507-0.063-0.38 0-0.824 0.063-1.141 0.19-0.063-0.127-0.253-0.19-0.444-0.19-0.317 0-0.507 0.19-0.507 0.507v0.19c-0.19 0.127-0.38 0.317-0.57 0.507 0 0-0.063 0.063-0.063 0.063-0.444-0.57-1.014-0.951-1.648-1.141-0.063-0.063-0.19-0.127-0.38-0.127-0.063 0-0.127 0-0.19 0-0.127 0-0.253 0-0.38 0-0.317 0-0.697 0.063-1.014 0.19-0.063 0-0.063 0-0.127 0.063-0.38-0.317-0.824-0.507-1.267-0.634 0 0 0 0 0 0-0.063 0-0.063 0-0.127 0s-0.063 0-0.127 0c0 0 0 0-0.063 0s-0.063 0-0.127 0c0 0 0 0-0.063 0s-0.063 0-0.127 0c0 0-0.063 0-0.063 0s-0.063 0-0.063 0-0.127 0-0.127 0-0.063 0-0.127 0c0 0-0.063 0-0.063 0s0 0 0 0c-0.507 0.063-0.95 0.19-1.394 0.444v-17.109h10.646l0.063 17.109zM4.246 1.077h13.307v7.477h-2.661c-0.317 0-0.507 0.19-0.507 0.507v16.602c-0.253-0.253-0.57-0.507-0.95-0.697 0 0-0.063-0.063-0.063-0.063s0 0-0.063 0c-0.38-0.19-0.824-0.317-1.204-0.38 0 0 0 0 0 0-0.063 0-0.127 0-0.127 0s0 0-0.063 0-0.127 0-0.19 0c-0.824 0-1.521 0.253-2.154 0.697v-0.19c0-0.317-0.19-0.507-0.507-0.507s-0.507 0.19-0.507 0.507v1.077c0 0.063 0 0.127 0.063 0.19-0.253 0.444-0.444 0.887-0.507 1.457-0.634 0.063-1.204 0.317-1.648 0.634v-0.127c0-0.317-0.19-0.507-0.507-0.507s-0.507 0.19-0.507 0.507v1.077c0 0.063 0 0.127 0 0.19-0.38 0.38-0.507 0.887-0.634 1.394h-0.57v-29.846zM8.301 28.832c0 0 0 0 0 0 0.063 0 0.063 0 0.127 0s0.063 0 0.127 0c0.317 0 0.507-0.19 0.507-0.507 0-1.521 1.204-2.661 2.661-2.661 1.331 0 2.471 0.951 2.598 2.281 0.063 0.127 0.127 0.253 0.253 0.317 0 0 0 0 0 0s0 0 0 0 0.063 0 0.063 0c0 0 0 0 0 0s0.063 0 0.063 0c0 0 0 0 0 0 0.063 0 0.063 0 0.127 0 0.19 0 0.317-0.063 0.444-0.253 0 0 0 0 0 0v0l0.063-0.063c0.444-0.507 1.014-0.824 1.711-0.824 0.38 0 0.697 0.127 1.014 0.317-0.634 0.57-1.014 1.394-1.014 2.218 0 0.063 0 0.127 0 0.19 0 0.38 0.063 0.697 0.19 1.077h-11.343c0.253-1.141 1.204-2.028 2.408-2.091zM18.503 30.923c-0.19-0.317-0.317-0.76-0.317-1.141 0-0.57 0.253-1.141 0.634-1.521 0.063-0.063 0.127-0.127 0.253-0.19 0.063 0 0.19 0 0.253-0.063 1.204-0.634 2.535-0.063 2.978 1.141 0.063 0.19 0.19 0.317 0.507 0.317 0.063 0 0.127 0 0.19-0.063 0.127 0 0.253-0.127 0.317-0.253 0.19-0.444 0.507-0.76 0.887-1.014 0.063 0 0.127-0.063 0.19-0.127 0.38-0.19 0.76-0.253 1.204-0.253 1.521 0 2.661 1.204 2.661 2.661 0 0.19 0 0.38-0.063 0.507h-9.695z"></path>
<path d="M17.616 13.877c-0.317 0-0.507 0.19-0.507 0.507v1.077c0 0.317 0.19 0.507 0.507 0.507s0.507-0.19 0.507-0.507v-1.077c0-0.317-0.19-0.507-0.507-0.507z"></path>
<path d="M17.616 23.446c-0.317 0-0.507 0.19-0.507 0.507v1.077c0 0.317 0.19 0.507 0.507 0.507s0.507-0.19 0.507-0.507v-1.077c0-0.253-0.19-0.507-0.507-0.507z"></path>
<path d="M17.616 17.046c-0.317 0-0.507 0.19-0.507 0.507v1.077c0 0.317 0.19 0.507 0.507 0.507s0.507-0.19 0.507-0.507v-1.077c0-0.253-0.19-0.507-0.507-0.507z"></path>
<path d="M17.616 20.277c-0.317 0-0.507 0.19-0.507 0.507v1.077c0 0.317 0.19 0.507 0.507 0.507s0.507-0.19 0.507-0.507v-1.077c0-0.317-0.19-0.507-0.507-0.507z"></path>
<path d="M17.616 10.646c-0.317 0-0.507 0.19-0.507 0.507v1.077c0 0.317 0.19 0.507 0.507 0.507s0.507-0.19 0.507-0.507v-1.077c0-0.253-0.19-0.507-0.507-0.507z"></path>
<path d="M20.784 15.968c0.317 0 0.507-0.19 0.507-0.507v-1.077c0-0.317-0.19-0.507-0.507-0.507s-0.507 0.19-0.507 0.507v1.077c0 0.317 0.19 0.507 0.507 0.507z"></path>
<path d="M20.784 12.8c0.317 0 0.507-0.19 0.507-0.507v-1.077c0-0.317-0.19-0.507-0.507-0.507s-0.507 0.19-0.507 0.507v1.077c0 0.317 0.19 0.507 0.507 0.507z"></path>
<path d="M20.784 19.2c0.317 0 0.507-0.19 0.507-0.507v-1.077c0-0.317-0.19-0.507-0.507-0.507s-0.507 0.19-0.507 0.507v1.077c0 0.317 0.19 0.507 0.507 0.507z"></path>
<path d="M20.784 22.368c0.317 0 0.507-0.19 0.507-0.507v-1.077c0-0.317-0.19-0.507-0.507-0.507s-0.507 0.19-0.507 0.507v1.077c0 0.317 0.19 0.507 0.507 0.507z"></path>
<path d="M20.784 25.6c0.317 0 0.507-0.19 0.507-0.507v-1.077c0-0.317-0.19-0.507-0.507-0.507s-0.507 0.19-0.507 0.507v1.077c0 0.317 0.19 0.507 0.507 0.507z"></path>
<path d="M24.016 19.2c0.317 0 0.507-0.19 0.507-0.507v-1.077c0-0.317-0.19-0.507-0.507-0.507s-0.507 0.19-0.507 0.507v1.077c-0.063 0.317 0.19 0.507 0.507 0.507z"></path>
<path d="M24.016 15.968c0.317 0 0.507-0.19 0.507-0.507v-1.077c0-0.317-0.19-0.507-0.507-0.507s-0.507 0.19-0.507 0.507v1.077c-0.063 0.317 0.19 0.507 0.507 0.507z"></path>
<path d="M24.016 25.6c0.317 0 0.507-0.19 0.507-0.507v-1.077c0-0.317-0.19-0.507-0.507-0.507s-0.507 0.19-0.507 0.507v1.077c-0.063 0.317 0.19 0.507 0.507 0.507z"></path>
<path d="M24.016 22.368c0.317 0 0.507-0.19 0.507-0.507v-1.077c0-0.317-0.19-0.507-0.507-0.507s-0.507 0.19-0.507 0.507v1.077c-0.063 0.317 0.19 0.507 0.507 0.507z"></path>
<path d="M24.016 12.8c0.317 0 0.507-0.19 0.507-0.507v-1.077c0-0.317-0.19-0.507-0.507-0.507s-0.507 0.19-0.507 0.507v1.077c-0.063 0.317 0.19 0.507 0.507 0.507z"></path>
<path d="M5.893 20.277c0.317 0 0.507-0.19 0.507-0.507v-1.077c0-0.317-0.19-0.507-0.507-0.507s-0.507 0.19-0.507 0.507v1.077c-0.063 0.253 0.19 0.507 0.507 0.507z"></path>
<path d="M5.893 23.446c0.317 0 0.507-0.19 0.507-0.507v-1.077c0-0.317-0.19-0.507-0.507-0.507s-0.507 0.19-0.507 0.507v1.077c-0.063 0.317 0.19 0.507 0.507 0.507z"></path>
<path d="M5.893 26.677c0.317 0 0.507-0.19 0.507-0.507v-1.077c0-0.317-0.19-0.507-0.507-0.507s-0.507 0.19-0.507 0.507v1.077c-0.063 0.253 0.19 0.507 0.507 0.507z"></path>
<path d="M5.893 4.246c0.317 0 0.507-0.19 0.507-0.507v-1.077c0-0.317-0.19-0.507-0.507-0.507s-0.507 0.19-0.507 0.507v1.077c-0.063 0.317 0.19 0.507 0.507 0.507z"></path>
<path d="M5.893 7.477c0.317 0 0.507-0.19 0.507-0.507v-1.077c0-0.317-0.19-0.507-0.507-0.507s-0.507 0.19-0.507 0.507v1.077c-0.063 0.253 0.19 0.507 0.507 0.507z"></path>
<path d="M5.893 10.646c0.317 0 0.507-0.19 0.507-0.507v-1.077c0-0.317-0.19-0.507-0.507-0.507s-0.507 0.19-0.507 0.507v1.077c-0.063 0.317 0.19 0.507 0.507 0.507z"></path>
<path d="M5.893 13.877c0.317 0 0.507-0.19 0.507-0.507v-1.077c0-0.317-0.19-0.507-0.507-0.507s-0.507 0.19-0.507 0.507v1.014c-0.063 0.317 0.19 0.57 0.507 0.57z"></path>
<path d="M5.893 17.046c0.317 0 0.507-0.19 0.507-0.507v-1.077c0-0.317-0.19-0.507-0.507-0.507s-0.507 0.19-0.507 0.507v1.077c-0.063 0.317 0.19 0.507 0.507 0.507z"></path>
<path d="M9.061 7.477c0.317 0 0.507-0.19 0.507-0.507v-1.077c0-0.317-0.19-0.507-0.507-0.507s-0.507 0.19-0.507 0.507v1.077c0 0.253 0.19 0.507 0.507 0.507z"></path>
<path d="M9.061 4.246c0.317 0 0.507-0.19 0.507-0.507v-1.077c0-0.317-0.19-0.507-0.507-0.507s-0.507 0.19-0.507 0.507v1.077c0 0.317 0.19 0.507 0.507 0.507z"></path>
<path d="M9.061 13.877c0.317 0 0.507-0.19 0.507-0.507v-1.077c0-0.317-0.19-0.507-0.507-0.507s-0.507 0.19-0.507 0.507v1.014c0 0.317 0.19 0.57 0.507 0.57z"></path>
<path d="M9.061 10.646c0.317 0 0.507-0.19 0.507-0.507v-1.077c0-0.317-0.19-0.507-0.507-0.507s-0.507 0.19-0.507 0.507v1.077c0 0.317 0.19 0.507 0.507 0.507z"></path>
<path d="M9.061 17.046c0.317 0 0.507-0.19 0.507-0.507v-1.077c0-0.317-0.19-0.507-0.507-0.507s-0.507 0.19-0.507 0.507v1.077c0 0.317 0.19 0.507 0.507 0.507z"></path>
<path d="M9.061 20.277c0.317 0 0.507-0.19 0.507-0.507v-1.077c0-0.317-0.19-0.507-0.507-0.507s-0.507 0.19-0.507 0.507v1.077c0 0.253 0.19 0.507 0.507 0.507z"></path>
<path d="M9.061 23.446c0.317 0 0.507-0.19 0.507-0.507v-1.077c0-0.317-0.19-0.507-0.507-0.507s-0.507 0.19-0.507 0.507v1.077c0 0.317 0.19 0.507 0.507 0.507z"></path>
<path d="M12.293 10.646c0.317 0 0.507-0.19 0.507-0.507v-1.077c0-0.317-0.19-0.507-0.507-0.507s-0.507 0.19-0.507 0.507v1.077c-0.063 0.317 0.19 0.507 0.507 0.507z"></path>
<path d="M12.293 7.477c0.317 0 0.507-0.19 0.507-0.507v-1.077c0-0.317-0.19-0.507-0.507-0.507s-0.507 0.19-0.507 0.507v1.077c-0.063 0.253 0.19 0.507 0.507 0.507z"></path>
<path d="M12.293 4.246c0.317 0 0.507-0.19 0.507-0.507v-1.077c0-0.317-0.19-0.507-0.507-0.507s-0.507 0.19-0.507 0.507v1.077c-0.063 0.317 0.19 0.507 0.507 0.507z"></path>
<path d="M12.293 23.446c0.317 0 0.507-0.19 0.507-0.507v-1.077c0-0.317-0.19-0.507-0.507-0.507s-0.507 0.19-0.507 0.507v1.077c-0.063 0.317 0.19 0.507 0.507 0.507z"></path>
<path d="M12.293 20.277c0.317 0 0.507-0.19 0.507-0.507v-1.077c0-0.317-0.19-0.507-0.507-0.507s-0.507 0.19-0.507 0.507v1.077c-0.063 0.253 0.19 0.507 0.507 0.507z"></path>
<path d="M12.293 17.046c0.317 0 0.507-0.19 0.507-0.507v-1.077c0-0.317-0.19-0.507-0.507-0.507s-0.507 0.19-0.507 0.507v1.077c-0.063 0.317 0.19 0.507 0.507 0.507z"></path>
<path d="M12.293 13.877c0.317 0 0.507-0.19 0.507-0.507v-1.077c0-0.317-0.19-0.507-0.507-0.507s-0.507 0.19-0.507 0.507v1.014c-0.063 0.317 0.19 0.57 0.507 0.57z"></path>
<path d="M15.461 7.477c0.317 0 0.507-0.19 0.507-0.507v-1.077c0-0.317-0.19-0.507-0.507-0.507s-0.507 0.19-0.507 0.507v1.077c0 0.253 0.19 0.507 0.507 0.507z"></path>
<path d="M15.461 4.246c0.317 0 0.507-0.19 0.507-0.507v-1.077c0-0.317-0.19-0.507-0.507-0.507s-0.507 0.19-0.507 0.507v1.077c0 0.317 0.19 0.507 0.507 0.507z"></path>
</svg>
'
				),
				'excludeCopy' => true
			),
			'gkitPiechartIconImage' => array(
				'type' => 'object',
				'default' => array(
					'type' => 'image'
				),
				'excludeCopy' => true
			),
			'gkitPiechartTitle' => array(
				'type' => 'string',
				'default' => 'Default title',
				'source' => 'html',
				'selector' => '.gkit-piechart-title',
				'excludeCopy' => true
			),
			'gkitPiechartItemDescription' => array(
				'type' => 'string',
				'source' => 'html',
				'selector' => '.gkit-piechart-description',
				'default' => 'Default description',
				'excludeCopy' => true
			),
			'gkitPiechartContentStyle' => array(
				'type' => 'string',
				'default' => 'default',
				'excludeCopy' => true
			),
			'gkitPiechartTitleColor' => array(
				'type' => 'string',
				'default' => '#f5f5f5'
			),
			'gkitPiechartTitleTypographyGroup' => array(
				'type' => 'object'
			),
			'gkitPiechartTitleMarginDesktop' => array(
				'type' => 'object',
				'default' => array(
					'top' => '0px',
					'right' => '0px',
					'bottom' => '20px',
					'left' => '0px'
				)
			),
			'gkitPiechartTitleMarginTablet' => array(
				'type' => 'object'
			),
			'gkitPiechartTitleMarginMobile' => array(
				'type' => 'object'
			),
			'gkitPiechartTitleMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitPiechartTitleMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitPiechartTitleMarginLaptop' => array(
				'type' => 'object'
			),
			'gkitPiechartTitleMarginWideScreen' => array(
				'type' => 'object'
			),
			'gkitPiechartContentColor' => array(
				'type' => 'string'
			),
			'gkitPiechartContentTypographyGroup' => array(
				'type' => 'object'
			),
			'gkitPiechartContentMarginDesktop' => array(
				'type' => 'object',
				'default' => array(
					'top' => 0,
					'right' => 0,
					'bottom' => 0,
					'left' => 0
				)
			),
			'gkitPiechartContentMarginTablet' => array(
				'type' => 'object'
			),
			'gkitPiechartContentMarginMobile' => array(
				'type' => 'object'
			),
			'gkitPiechartContentMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitPiechartContentMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitPiechartContentMarginLaptop' => array(
				'type' => 'object'
			),
			'gkitPiechartContentMarginWideScreen' => array(
				'type' => 'object'
			),
			'gkitPiechartContentAlignDesktop' => array(
				'type' => 'string',
				'default' => 'center'
			),
			'gkitPiechartContentAlignTablet' => array(
				'type' => 'string'
			),
			'gkitPiechartContentAlignMobile' => array(
				'type' => 'string'
			),
			'gkitPiechartContentAlignTabletLandscape' => array(
				'type' => 'string'
			),
			'gkitPiechartContentAlignMobileLandscape' => array(
				'type' => 'string'
			),
			'gkitPiechartContentAlignLaptop' => array(
				'type' => 'string'
			),
			'gkitPiechartContentAlignWideScreen' => array(
				'type' => 'string'
			),
			'gkitPiechartSlideElementHeightDesktop' => array(
				'type' => 'object',
				'default' => array(
					'unit' => 'px',
					'size' => 250
				)
			),
			'gkitPiechartSlideElementHeightTablet' => array(
				'type' => 'object'
			),
			'gkitPiechartSlideElementHeightMobile' => array(
				'type' => 'object'
			),
			'gkitPiechartSlideElementHeightTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitPiechartSlideElementHeightMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitPiechartSlideElementHeightLaptop' => array(
				'type' => 'object'
			),
			'gkitPiechartSlideElementHeightWideScreen' => array(
				'type' => 'object'
			),
			'gkitPiechartSlideBackgroundGroup' => array(
				'type' => 'object'
			),
			'gkitPiechartSlideBackPaddingDesktop' => array(
				'type' => 'object'
			),
			'gkitPiechartSlideBackPaddingTablet' => array(
				'type' => 'object'
			),
			'gkitPiechartSlideBackPaddingMobile' => array(
				'type' => 'object'
			),
			'gkitPiechartSlideBackPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitPiechartSlideBackPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitPiechartSlideBackPaddingLaptop' => array(
				'type' => 'object'
			),
			'gkitPiechartSlideBackPaddingWideScreen' => array(
				'type' => 'object'
			),
			'gkitPiechartSizeDesktop' => array(
				'type' => 'object',
				'default' => array(
					'unit' => 'px',
					'size' => 150
				)
			),
			'gkitPiechartSizeTablet' => array(
				'type' => 'object'
			),
			'gkitPiechartSizeMobile' => array(
				'type' => 'object'
			),
			'gkitPiechartSizeTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitPiechartSizeMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitPiechartSizeLaptop' => array(
				'type' => 'object'
			),
			'gkitPiechartSizeWideScreen' => array(
				'type' => 'object'
			),
			'gkitPiechartLineCap' => array(
				'type' => 'string',
				'default' => 'round'
			),
			'gkitPiechartBorderSize' => array(
				'type' => 'object',
				'default' => array(
					'unit' => 'px',
					'size' => 5
				)
			),
			'gkitPiechartIconSizeDesktop' => array(
				'type' => 'object',
				'default' => array(
					'unit' => 'px',
					'size' => 30
				)
			),
			'gkitPiechartIconSizeTablet' => array(
				'type' => 'object'
			),
			'gkitPiechartIconSizeMobile' => array(
				'type' => 'object'
			),
			'gkitPiechartIconSizeTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitPiechartIconSizeMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitPiechartIconSizeLaptop' => array(
				'type' => 'object'
			),
			'gkitPiechartIconSizeWideScreen' => array(
				'type' => 'object'
			),
			'gkitPiechartImageSizeDesktop' => array(
				'type' => 'object',
				'default' => array(
					'unit' => 'px',
					'size' => 80
				)
			),
			'gkitPiechartImageSizeTablet' => array(
				'type' => 'object'
			),
			'gkitPiechartImageSizeMobile' => array(
				'type' => 'object'
			),
			'gkitPiechartImageSizeTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitPiechartImageSizeMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitPiechartImageSizeLaptop' => array(
				'type' => 'object'
			),
			'gkitPiechartImageSizeWideScreen' => array(
				'type' => 'object'
			),
			'gkitPiechartLineColor' => array(
				'type' => 'string'
			),
			'gkitPiechartBarColor' => array(
				'type' => 'object',
				'default' => array(
					'backgroundType' => 'classic',
					'backgroundColor' => '#72e9cd'
				)
			),
			'gkitPiechartIocnColor' => array(
				'type' => 'string'
			),
			'gkitPiechartContentColorNumber' => array(
				'type' => 'string'
			),
			'gkitPiechartNumberTypographyGroup' => array(
				'type' => 'object'
			),
			'gkitPiechartWrapperPaddingDesktop' => array(
				'type' => 'object',
				'default' => array(
					'top' => '60px',
					'right' => 0,
					'bottom' => '60px',
					'left' => 0
				)
			),
			'gkitPiechartWrapperBoxShadowGroup' => array(
				'type' => 'object'
			),
			'gkitPiechartBackgroundNormal' => array(
				'type' => 'object'
			),
			'gkitPiechartBackgroundHover' => array(
				'type' => 'object'
			),
			'gkitPiechartBgHoverAnimation' => array(
				'type' => 'object'
			)
		),
		'supports' => array(
			'html' => false,
			'anchor' => true,
			'align' => array(
				'wide',
				'full'
			)
		),
		'textdomain' => 'gutenkit-blocks-addon',
		'editorScript' => array(
			'file:./index.js',
			'easy-piechart'
		),
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => array(
			'file:./frontend.js',
			'easy-piechart'
		)
	),
	'drop-cap' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'gutenkit/drop-cap',
		'version' => '1.0.0',
		'title' => 'Drop Cap',
		'category' => 'gutenkit',
		'keywords' => array(
			'gkit',
			'drop',
			'caps',
			'initial',
			'versal',
			'letter'
		),
		'description' => 'Drop cap block for gutenberg',
		'example' => array(
			'preview' => true
		),
		'attributes' => array(
			'blockID' => array(
				'type' => 'string'
			),
			'blockClass' => array(
				'type' => 'string'
			),
			'blocksCSS' => array(
				'type' => 'object'
			),
			'dropcapsText' => array(
				'type' => 'string',
				'default' => 'Lorem ipsum dolor sit amet, consec adipisicing elit, sed do eiusmod tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exl Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.',
				'excludeCopy' => true
			),
			'contentColor' => array(
				'type' => 'string',
				'default' => '#333333'
			),
			'contentTypography' => array(
				'type' => 'object'
			),
			'contentDropcapsColor' => array(
				'type' => 'string',
				'default' => '#903'
			),
			'contentDropcapsTypography' => array(
				'type' => 'object'
			),
			'contentDropcapsBackground' => array(
				'type' => 'object'
			),
			'contentDropcapsPaddingDesktop' => array(
				'type' => 'object'
			),
			'contentDropcapsPaddingTablet' => array(
				'type' => 'object'
			),
			'contentDropcapsPaddingMobile' => array(
				'type' => 'object'
			),
			'contentDropcapsPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'contentDropcapsPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'contentDropcapsPaddingLaptop' => array(
				'type' => 'object'
			),
			'contentDropcapsPaddingWideScreen' => array(
				'type' => 'object'
			),
			'contentDropcapsMarginDesktop' => array(
				'type' => 'object'
			),
			'contentDropcapsMarginTablet' => array(
				'type' => 'object'
			),
			'contentDropcapsMarginMobile' => array(
				'type' => 'object'
			),
			'contentDropcapsMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'contentDropcapsMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'contentDropcapsMarginLaptop' => array(
				'type' => 'object'
			),
			'contentDropcapsMarginWideScreen' => array(
				'type' => 'object'
			),
			'contentDropcapsBorder' => array(
				'type' => 'object'
			),
			'contentDropcapsBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'contentDropcapsBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'contentDropcapsBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'contentDropcapsBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'contentDropcapsBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'contentDropcapsBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'contentDropcapsBorderRadiusWideScreen' => array(
				'type' => 'object'
			)
		),
		'supports' => array(
			'html' => false,
			'align' => array(
				'wide',
				'full'
			),
			'anchor' => true
		),
		'textdomain' => 'gutenkit-blocks-addon',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css'
	),
	'dual-button' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'gutenkit/dual-button',
		'version' => '1.0.0',
		'title' => 'Dual Button',
		'category' => 'gutenkit',
		'keywords' => array(
			'ekit',
			'button',
			'btn',
			'dual',
			'advance',
			'link'
		),
		'description' => 'Dual button block for gutenberg.',
		'example' => array(
			'preview' => true
		),
		'attributes' => array(
			'blockID' => array(
				'type' => 'string'
			),
			'blockClass' => array(
				'type' => 'string'
			),
			'blocksCSS' => array(
				'type' => 'object'
			),
			'gkitShowButtonMiddleText' => array(
				'type' => 'boolean',
				'default' => true,
				'excludeCopy' => true
			),
			'gkitButtonMiddleText' => array(
				'type' => 'string',
				'default' => 'Or',
				'excludeCopy' => true
			),
			'gkitDoubleButtonAlignDesktop' => array(
				'type' => 'string',
				'default' => 'center'
			),
			'gkitDoubleButtonAlignTablet' => array(
				'type' => 'string'
			),
			'gkitDoubleButtonAlignMobile' => array(
				'type' => 'string'
			),
			'gkitDoubleButtonAlignTabletLandscape' => array(
				'type' => 'string'
			),
			'gkitDoubleButtonAlignMobileLandscape' => array(
				'type' => 'string'
			),
			'gkitDoubleButtonAlignLaptop' => array(
				'type' => 'string'
			),
			'gkitDoubleButtonAlignWideScreen' => array(
				'type' => 'string'
			),
			'gkitDualButtonWidthDesktop' => array(
				'type' => 'object',
				'default' => array(
					'unit' => '%',
					'size' => 40
				)
			),
			'gkitDualButtonWidthTablet' => array(
				'type' => 'object'
			),
			'gkitDualButtonWidthMobile' => array(
				'type' => 'object'
			),
			'gkitDualButtonWidthTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitDualButtonWidthMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitDualButtonWidthLaptop' => array(
				'type' => 'object'
			),
			'gkitDualButtonWidthWideScreen' => array(
				'type' => 'object'
			),
			'gkitDualButtonGapDesktop' => array(
				'type' => 'object',
				'default' => array(
					'unit' => 'px',
					'size' => 5
				)
			),
			'gkitDualButtonGapTablet' => array(
				'type' => 'object'
			),
			'gkitDualButtonGapMobile' => array(
				'type' => 'object'
			),
			'gkitDualButtonGapTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitDualButtonGapMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitDualButtonGapLaptop' => array(
				'type' => 'object'
			),
			'gkitDualButtonGapWideScreen' => array(
				'type' => 'object'
			),
			'gkitButtonOneText' => array(
				'type' => 'string',
				'default' => 'Button',
				'excludeCopy' => true
			),
			'gkitButtonOneLink' => array(
				'type' => 'object',
				'excludeCopy' => true
			),
			'gkitButtonOneIconsShow' => array(
				'type' => 'boolean',
				'default' => false,
				'excludeCopy' => true
			),
			'gkitButtonOneIcons' => array(
				'type' => 'object',
				'excludeCopy' => true
			),
			'gkitDoubleButtonOneIconPosition' => array(
				'type' => 'string',
				'default' => 'before'
			),
			'gkitDoubleButtonOneIconSpecingDesktop' => array(
				'type' => 'object',
				'default' => array(
					'unit' => 'px',
					'size' => 8
				)
			),
			'gkitDoubleButtonOneIconSpecingTablet' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonOneIconSpecingMobile' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonOneIconSpecingTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonOneIconSpecingMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonOneIconSpecingLaptop' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonOneIconSpecingWideScreen' => array(
				'type' => 'object'
			),
			'gkitButtonTwoText' => array(
				'type' => 'string',
				'default' => 'Button',
				'excludeCopy' => true
			),
			'gkitButtonTwoLink' => array(
				'type' => 'object',
				'excludeCopy' => true
			),
			'gkitButtonTwoIconsShow' => array(
				'type' => 'boolean',
				'default' => false,
				'excludeCopy' => true
			),
			'gkitButtonTwoIcons' => array(
				'type' => 'object',
				'excludeCopy' => true
			),
			'gkitDoubleButtonTwoIconPosition' => array(
				'type' => 'string',
				'default' => 'before'
			),
			'gkitDoubleButtonTwoIconSpecingDesktop' => array(
				'type' => 'object',
				'default' => array(
					'unit' => 'px',
					'size' => 8
				)
			),
			'gkitDoubleButtonTwoIconSpecingTablet' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonTwoIconSpecingMobile' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonTwoIconSpecingTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonTwoIconSpecingMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonTwoIconSpecingLaptop' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonTwoIconSpecingWideScreen' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonOneColor' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'gkitDoubleButtonOneTypography' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonOneBorder' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonOneBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonOneBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonOneBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonOneBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonOneBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonOneBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonOneBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonOneBackground' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonOneBoxShadow' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonOnePaddingDesktop' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonOnePaddingTablet' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonOnePaddingMobile' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonOnePaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonOnePaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonOnePaddingLaptop' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonOnePaddingWideScreen' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonOneMarginDesktop' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonOneMarginTablet' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonOneMarginMobile' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonOneMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonOneMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonOneMarginLaptop' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonOneMarginWideScreen' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonOneAlignDesktop' => array(
				'type' => 'string'
			),
			'gkitDoubleButtonOneAlignTablet' => array(
				'type' => 'string'
			),
			'gkitDoubleButtonOneAlignMobile' => array(
				'type' => 'string'
			),
			'gkitDoubleButtonOneAlignTabletLandscape' => array(
				'type' => 'string'
			),
			'gkitDoubleButtonOneAlignMobileLandscape' => array(
				'type' => 'string'
			),
			'gkitDoubleButtonOneAlignLaptop' => array(
				'type' => 'string'
			),
			'gkitDoubleButtonOneAlignWideScreen' => array(
				'type' => 'string'
			),
			'gkitDoubleButtonOneHoverColor' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'gkitDoubleButtonOneHoverBorderColor' => array(
				'type' => 'string'
			),
			'gkitDoubleButtonOneHoverBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonOneHoverBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonOneHoverBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonOneHoverBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonOneHoverBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonOneHoverBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonOneHoverBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonOneHoverBackground' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonOneHoverBoxShadow' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonTwoColor' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'gkitDoubleButtonTwoTypography' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonTwoBorder' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonTwoBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonTwoBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonTwoBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonTwoBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonTwoBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonTwoBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonTwoBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonTwoBackground' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonTwoBoxShadow' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonTwoPaddingDesktop' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonTwoPaddingTablet' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonTwoPaddingMobile' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonTwoPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonTwoPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonTwoPaddingLaptop' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonTwoPaddingWideScreen' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonTwoMarginDesktop' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonTwoMarginTablet' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonTwoMarginMobile' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonTwoMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonTwoMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonTwoMarginLaptop' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonTwoMarginWideScreen' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonTwoAlignDesktop' => array(
				'type' => 'string'
			),
			'gkitDoubleButtonTwoAlignTablet' => array(
				'type' => 'string'
			),
			'gkitDoubleButtonTwoAlignMobile' => array(
				'type' => 'string'
			),
			'gkitDoubleButtonTwoAlignTabletLandscape' => array(
				'type' => 'string'
			),
			'gkitDoubleButtonTwoAlignMobileLandscape' => array(
				'type' => 'string'
			),
			'gkitDoubleButtonTwoAlignLaptop' => array(
				'type' => 'string'
			),
			'gkitDoubleButtonTwoAlignWideScreen' => array(
				'type' => 'string'
			),
			'gkitDoubleButtonTwoHoverColor' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'gkitDoubleButtonTwoHoverBorderColor' => array(
				'type' => 'string'
			),
			'gkitDoubleButtonTwoHoverBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonTwoHoverBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonTwoHoverBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonTwoHoverBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonTwoHoverBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonTwoHoverBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonTwoHoverBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonTwoHoverBackground' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonTwoHoverBoxShadow' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonMiddletextColor' => array(
				'type' => 'string',
				'default' => '#000000'
			),
			'gkitDoubleButtonMiddletextTypography' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonMiddletextBorder' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonMiddletextBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonMiddletextBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonMiddletextBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonMiddletextBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonMiddletextBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonMiddletextBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonMiddletextBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonMiddletextBackground' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonMiddletextBoxShadow' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonMiddletextWidthDesktop' => array(
				'type' => 'object',
				'default' => array(
					'unit' => 'px',
					'size' => 40
				)
			),
			'gkitDoubleButtonMiddletextWidthTablet' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonMiddletextWidthMobile' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonMiddletextWidthTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonMiddletextWidthMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonMiddletextWidthLaptop' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonMiddletextWidthWideScreen' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonMiddletextHeightDesktop' => array(
				'type' => 'object',
				'default' => array(
					'unit' => 'px',
					'size' => 40
				)
			),
			'gkitDoubleButtonMiddletextHeightTablet' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonMiddletextHeightMobile' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonMiddletextHeightTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonMiddletextHeightMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonMiddletextHeightLaptop' => array(
				'type' => 'object'
			),
			'gkitDoubleButtonMiddletextHeightWideScreen' => array(
				'type' => 'object'
			),
			'iconFontSizeDesktop' => array(
				'type' => 'object',
				'default' => array(
					'unit' => 'px',
					'size' => 16
				)
			),
			'iconFontSizeTablet' => array(
				'type' => 'object'
			),
			'iconFontSizeMobile' => array(
				'type' => 'object'
			),
			'iconFontSizeTabletLandscape' => array(
				'type' => 'object'
			),
			'iconFontSizeMobileLandscape' => array(
				'type' => 'object'
			),
			'iconFontSizeLaptop' => array(
				'type' => 'object'
			),
			'iconFontSizeWideScreen' => array(
				'type' => 'object'
			),
			'verticalAlignIconDesktop' => array(
				'type' => 'object',
				'default' => array(
					'unit' => 'px',
					'size' => 0
				)
			),
			'verticalAlignIconTablet' => array(
				'type' => 'object'
			),
			'verticalAlignIconMobile' => array(
				'type' => 'object'
			),
			'verticalAlignIconTabletLandscape' => array(
				'type' => 'object'
			),
			'verticalAlignIconMobileLandscape' => array(
				'type' => 'object'
			),
			'verticalAlignIconLaptop' => array(
				'type' => 'object'
			),
			'verticalAlignIconWideScreen' => array(
				'type' => 'object'
			)
		),
		'supports' => array(
			'html' => false,
			'align' => array(
				'wide',
				'full'
			),
			'anchor' => true
		),
		'textdomain' => 'gutenkit-blocks-addon',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css'
	),
	'faq' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'gutenkit/faq',
		'version' => '1.0.0',
		'title' => 'FAQ',
		'category' => 'gutenkit',
		'keywords' => array(
			'gkit',
			'faq',
			'faq schema'
		),
		'allowedBlocks' => array(
			'gutenkit/faq-item'
		),
		'description' => 'Faq block for gutenkit.',
		'example' => array(
			'preview' => true
		),
		'attributes' => array(
			'blockID' => array(
				'type' => 'string'
			),
			'blockClass' => array(
				'type' => 'string'
			),
			'blocksCSS' => array(
				'type' => 'object'
			),
			'gkitFaqContents' => array(
				'type' => 'array',
				'default' => array(
					array(
						'gkitFaqTitle' => 'How do I get started?',
						'gkitFaqContent' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast'
					),
					array(
						'gkitFaqTitle' => 'How long do I get support?',
						'gkitFaqContent' => 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line'
					),
					array(
						'gkitFaqTitle' => 'Do I need to renew my license?',
						'gkitFaqContent' => 'Marks and devious Semikoli but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.'
					)
				),
				'excludeCopy' => true
			),
			'gkitFaqTitleColor' => array(
				'type' => 'string'
			),
			'gkitFaqTitleTypographyGroup' => array(
				'type' => 'object'
			),
			'gkitFaqTitleBackgroundGroup' => array(
				'type' => 'object'
			),
			'gkitFaqTitleBorderGroup' => array(
				'type' => 'object'
			),
			'gkitFaqBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'gkitFaqBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'gkitFaqBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'gkitFaqBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitFaqBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitFaqBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'gkitFaqBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'gkitFaqTitlePaddingDesktop' => array(
				'type' => 'object',
				'default' => array(
					'top' => '21px',
					'right' => '40px',
					'bottom' => '21px',
					'left' => '40px'
				)
			),
			'gkitFaqTitlePaddingTablet' => array(
				'type' => 'object'
			),
			'gkitFaqTitlePaddingMobile' => array(
				'type' => 'object'
			),
			'gkitFaqTitlePaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitFaqTitlePaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitFaqTitlePaddingLaptop' => array(
				'type' => 'object'
			),
			'gkitFaqTitlePaddingWideScreen' => array(
				'type' => 'object'
			),
			'gkitFaqTitleMarginDesktop' => array(
				'type' => 'object'
			),
			'gkitFaqTitleMarginTablet' => array(
				'type' => 'object'
			),
			'gkitFaqTitleMarginMobile' => array(
				'type' => 'object'
			),
			'gkitFaqTitleMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitFaqTitleMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitFaqTitleMarginLaptop' => array(
				'type' => 'object'
			),
			'gkitFaqTitleMarginWideScreen' => array(
				'type' => 'object'
			),
			'gkitFaqContentColor' => array(
				'type' => 'string'
			),
			'gkitFaqContentTypographyGroup' => array(
				'type' => 'object'
			),
			'gkitFaqContentBackgroundGroup' => array(
				'type' => 'object'
			),
			'gkitFaqContentBorderGroup' => array(
				'type' => 'object'
			),
			'gkitFaqContentBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'gkitFaqContentBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'gkitFaqContentBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'gkitFaqContentBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitFaqContentBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitFaqContentBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'gkitFaqContentBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'gkitFaqContentPaddingDesktop' => array(
				'type' => 'object',
				'default' => array(
					'top' => '30px',
					'right' => '40px',
					'bottom' => '30px',
					'left' => '40px'
				)
			),
			'gkitFaqContentPaddingTablet' => array(
				'type' => 'object'
			),
			'gkitFaqContentPaddingMobile' => array(
				'type' => 'object'
			),
			'gkitFaqContentPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitFaqContentPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitFaqContentPaddingLaptop' => array(
				'type' => 'object'
			),
			'gkitFaqContentPaddingWideScreen' => array(
				'type' => 'object'
			),
			'gkitFaqContentMarginDesktop' => array(
				'type' => 'object'
			),
			'gkitFaqContentMarginTablet' => array(
				'type' => 'object'
			),
			'gkitFaqContentMarginMobile' => array(
				'type' => 'object'
			),
			'gkitFaqContentMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitFaqContentMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitFaqContentMarginLaptop' => array(
				'type' => 'object'
			),
			'gkitFaqContentMarginWideScreen' => array(
				'type' => 'object'
			)
		),
		'supports' => array(
			'html' => false,
			'align' => array(
				'wide',
				'full'
			),
			'anchor' => true
		),
		'textdomain' => 'gutenkit-blocks-addon',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css'
	),
	'faq-item' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'gutenkit/faq-item',
		'version' => '1.0.0',
		'title' => 'Faq Item',
		'category' => 'gutenkit',
		'icon' => 'menu-alt3',
		'keywords' => array(
			'gkit',
			'faq',
			'faq schema'
		),
		'description' => 'Faq Item for gutenkit.',
		'parent' => array(
			'gutenkit/faq'
		),
		'example' => array(
			'preview' => true
		),
		'attributes' => array(
			'blockID' => array(
				'type' => 'string'
			),
			'blockClass' => array(
				'type' => 'string'
			),
			'blocksCSS' => array(
				'type' => 'object'
			),
			'parentBlockAttributes' => array(
				'type' => 'object'
			),
			'gkitFaqTitle' => array(
				'type' => 'string',
				'default' => 'How do I get started?'
			),
			'gkitFaqContent' => array(
				'type' => 'string',
				'default' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast'
			)
		),
		'supports' => array(
			'html' => false,
			'align' => array(
				'wide',
				'full'
			),
			'anchor' => true
		),
		'textdomain' => 'gutenkit-blocks-addon',
		'editorScript' => 'file:./index.js',
		'editorStyle' => array(
			'file:./index.css'
		)
	),
	'fun-fact' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'gutenkit/fun-fact',
		'version' => '1.0.0',
		'title' => 'Fun Fact',
		'category' => 'gutenkit',
		'keywords' => array(
			'gkit',
			'gutenkit',
			'fun',
			'factor',
			'animation',
			'info',
			'number',
			'animated'
		),
		'description' => 'Fun fact block for gutenberg.',
		'example' => array(
			'preview' => true
		),
		'attributes' => array(
			'blockID' => array(
				'type' => 'string'
			),
			'blockClass' => array(
				'type' => 'string'
			),
			'blocksCSS' => array(
				'type' => 'object'
			),
			'addIcon' => array(
				'type' => 'boolean',
				'default' => true
			),
			'icon' => array(
				'type' => 'object',
				'default' => array(
					'label' => 'Amazon',
					'title' => 'amazon',
					'type' => 'brands',
					'src' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M257.2 162.7c-48.7 1.8-169.5 15.5-169.5 117.5 0 109.5 138.3 114 183.5 43.2 6.5 10.2 35.4 37.5 45.3 46.8l56.8-56S341 288.9 341 261.4V114.3C341 89 316.5 32 228.7 32 140.7 32 94 87 94 136.3l73.5 6.8c16.3-49.5 54.2-49.5 54.2-49.5 40.7-.1 35.5 29.8 35.5 69.1zm0 86.8c0 80-84.2 68-84.2 17.2 0-47.2 50.5-56.7 84.2-57.8v40.6zm136 163.5c-7.7 10-70 67-174.5 67S34.2 408.5 9.7 379c-6.8-7.7 1-11.3 5.5-8.3C88.5 415.2 203 488.5 387.7 401c7.5-3.7 13.3 2 5.5 12zm39.8 2.2c-6.5 15.8-16 26.8-21.2 31-5.5 4.5-9.5 2.7-6.5-3.8s19.3-46.5 12.7-55c-6.5-8.3-37-4.3-48-3.2-10.8 1-13 2-14-.3-2.3-5.7 21.7-15.5 37.5-17.5 15.7-1.8 41-.8 46 5.7 3.7 5.1 0 27.1-6.5 43.1z"/></svg>'
				)
			),
			'enablePrefix' => array(
				'type' => 'boolean',
				'default' => false
			),
			'prefix' => array(
				'type' => 'string',
				'default' => '$'
			),
			'enableSuffix' => array(
				'type' => 'boolean',
				'default' => true
			),
			'suffix' => array(
				'type' => 'string',
				'default' => 'M'
			),
			'enableSuper' => array(
				'type' => 'boolean',
				'default' => false
			),
			'super' => array(
				'type' => 'string',
				'default' => '+'
			),
			'enableHeading' => array(
				'type' => 'boolean',
				'default' => true
			),
			'heading' => array(
				'type' => 'string',
				'default' => 'This is the heading'
			),
			'headerTag' => array(
				'type' => 'string',
				'default' => 'h3'
			),
			'style' => array(
				'type' => 'string',
				'default' => 'static'
			),
			'number' => array(
				'type' => 'number',
				'default' => 254
			),
			'duration' => array(
				'type' => 'object',
				'default' => array(
					'size' => 3500
				)
			),
			'enableHoverBorder' => array(
				'type' => 'boolean',
				'default' => false
			),
			'enableVerticalBorder' => array(
				'type' => 'boolean',
				'default' => false
			),
			'iconDirection' => array(
				'type' => 'string'
			),
			'iconWidthDesktop' => array(
				'type' => 'object'
			),
			'iconWidthTablet' => array(
				'type' => 'object'
			),
			'iconWidthMobile' => array(
				'type' => 'object'
			),
			'iconWidthTabletLandscape' => array(
				'type' => 'object'
			),
			'iconWidthMobileLandscape' => array(
				'type' => 'object'
			),
			'iconWidthLaptop' => array(
				'type' => 'object'
			),
			'iconWidthWideScreen' => array(
				'type' => 'object'
			),
			'iconRotateDesktop' => array(
				'type' => 'object'
			),
			'iconRotateTablet' => array(
				'type' => 'object'
			),
			'iconRotateMobile' => array(
				'type' => 'object'
			),
			'iconRotateTabletLandscape' => array(
				'type' => 'object'
			),
			'iconRotateMobileLandscape' => array(
				'type' => 'object'
			),
			'iconRotateLaptop' => array(
				'type' => 'object'
			),
			'iconRotateWideScreen' => array(
				'type' => 'object'
			),
			'iconPaddingDesktop' => array(
				'type' => 'object'
			),
			'iconPaddingTablet' => array(
				'type' => 'object'
			),
			'iconPaddingMobile' => array(
				'type' => 'object'
			),
			'iconPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'iconPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'iconPaddingLaptop' => array(
				'type' => 'object'
			),
			'iconPaddingWideScreen' => array(
				'type' => 'object'
			),
			'iconMarginDesktop' => array(
				'type' => 'object'
			),
			'iconMarginTablet' => array(
				'type' => 'object'
			),
			'iconMarginMobile' => array(
				'type' => 'object'
			),
			'iconMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'iconMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'iconMarginLaptop' => array(
				'type' => 'object'
			),
			'iconMarginWideScreen' => array(
				'type' => 'object'
			),
			'iconBoxShadow' => array(
				'type' => 'object'
			),
			'iconColor' => array(
				'type' => 'string'
			),
			'iconBackground' => array(
				'type' => 'object'
			),
			'iconBorder' => array(
				'type' => 'object'
			),
			'iconBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'iconBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'iconBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'iconBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'iconBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'iconBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'iconBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'iconHoverColor' => array(
				'type' => 'string'
			),
			'iconHoverBorderColor' => array(
				'type' => 'string'
			),
			'iconHoverBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'iconHoverBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'iconHoverBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'iconHoverBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'iconHoverBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'iconHoverBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'iconHoverBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'titlePaddingDesktop' => array(
				'type' => 'object'
			),
			'titlePaddingTablet' => array(
				'type' => 'object'
			),
			'titlePaddingMobile' => array(
				'type' => 'object'
			),
			'titlePaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'titlePaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'titlePaddingLaptop' => array(
				'type' => 'object'
			),
			'titlePaddingWideScreen' => array(
				'type' => 'object'
			),
			'iconHoverBackground' => array(
				'type' => 'object'
			),
			'contentAlignDesktop' => array(
				'type' => 'string'
			),
			'contentAlignTablet' => array(
				'type' => 'string'
			),
			'contentAlignMobile' => array(
				'type' => 'string'
			),
			'contentAlignTabletLandscape' => array(
				'type' => 'string'
			),
			'contentAlignMobileLandscape' => array(
				'type' => 'string'
			),
			'contentAlignLaptop' => array(
				'type' => 'string'
			),
			'contentAlignWideScreen' => array(
				'type' => 'string'
			),
			'contentMarginDesktop' => array(
				'type' => 'object'
			),
			'contentMarginTablet' => array(
				'type' => 'object'
			),
			'contentMarginMobile' => array(
				'type' => 'object'
			),
			'contentMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'contentMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'contentMarginLaptop' => array(
				'type' => 'object'
			),
			'contentMarginWideScreen' => array(
				'type' => 'object'
			),
			'numberColor' => array(
				'type' => 'string'
			),
			'numberTypography' => array(
				'type' => 'object'
			),
			'numberBottomSpaceDesktop' => array(
				'type' => 'object'
			),
			'numberBottomSpaceTablet' => array(
				'type' => 'object'
			),
			'numberBottomSpaceMobile' => array(
				'type' => 'object'
			),
			'numberBottomSpaceTabletLandscape' => array(
				'type' => 'object'
			),
			'numberBottomSpaceMobileLandscape' => array(
				'type' => 'object'
			),
			'numberBottomSpaceLaptop' => array(
				'type' => 'object'
			),
			'numberBottomSpaceWideScreen' => array(
				'type' => 'object'
			),
			'numberRightSpaceDesktop' => array(
				'type' => 'object'
			),
			'numberRightSpaceTablet' => array(
				'type' => 'object'
			),
			'numberRightSpaceMobile' => array(
				'type' => 'object'
			),
			'numberRightSpaceTabletLandscape' => array(
				'type' => 'object'
			),
			'numberRightSpaceMobileLandscape' => array(
				'type' => 'object'
			),
			'numberRightSpaceLaptop' => array(
				'type' => 'object'
			),
			'numberRightSpaceWideScreen' => array(
				'type' => 'object'
			),
			'titleColor' => array(
				'type' => 'string'
			),
			'titleTypography' => array(
				'type' => 'object'
			),
			'superColor' => array(
				'type' => 'string'
			),
			'superTypography' => array(
				'type' => 'object'
			),
			'superTopPostionDesktop' => array(
				'type' => 'object'
			),
			'superTopPostionTablet' => array(
				'type' => 'object'
			),
			'superTopPostionMobile' => array(
				'type' => 'object'
			),
			'superTopPostionTabletLandscape' => array(
				'type' => 'object'
			),
			'superTopPostionMobileLandscape' => array(
				'type' => 'object'
			),
			'superTopPostionLaptop' => array(
				'type' => 'object'
			),
			'superTopPostionWideScreen' => array(
				'type' => 'object'
			),
			'superHorizontalPostionDesktop' => array(
				'type' => 'object'
			),
			'superHorizontalPostionTablet' => array(
				'type' => 'object'
			),
			'superHorizontalPostionMobile' => array(
				'type' => 'object'
			),
			'superHorizontalPostionTabletLandscape' => array(
				'type' => 'object'
			),
			'superHorizontalPostionMobileLandscape' => array(
				'type' => 'object'
			),
			'superHorizontalPostionLaptop' => array(
				'type' => 'object'
			),
			'superHorizontalPostionWideScreen' => array(
				'type' => 'object'
			),
			'hoverBorderDirection' => array(
				'type' => 'string',
				'default' => 'right'
			),
			'hoverBorderColor' => array(
				'type' => 'string'
			),
			'hoverBorderHeight' => array(
				'type' => 'object'
			),
			'verticalBorderDirection' => array(
				'type' => 'string'
			),
			'verticalBorderAlignment' => array(
				'type' => 'string'
			),
			'verticalBorderColor' => array(
				'type' => 'string'
			),
			'verticalBorderHeight' => array(
				'type' => 'object'
			),
			'verticalBorderWidth' => array(
				'type' => 'object'
			)
		),
		'supports' => array(
			'html' => false,
			'anchor' => true,
			'align' => array(
				'wide',
				'full'
			)
		),
		'textdomain' => 'gutenkit-blocks-addon',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => array(
			'file:./style-index.css',
			'odometer'
		),
		'viewScript' => 'file:./frontend.js',
		'script' => array(
			'odometer'
		)
	),
	'header-info' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'gutenkit/header-info',
		'version' => '1.0.0',
		'title' => 'Header Info',
		'category' => 'gutenkit',
		'icon' => 'menu-alt3',
		'keywords' => array(
			'gkit',
			'header-info',
			'info-list',
			'info',
			'list'
		),
		'description' => 'Header info block for gutenberg',
		'example' => array(
			'preview' => true
		),
		'attributes' => array(
			'blockID' => array(
				'type' => 'string'
			),
			'blockClass' => array(
				'type' => 'string'
			),
			'blocksCSS' => array(
				'type' => 'object'
			),
			'gkitHeaderInfoItems' => array(
				'type' => 'array',
				'default' => array(
					array(
						'headerTitle' => '463 7th Ave, NY 10018, USA',
						'headerIconAlign' => 'row',
						'headerIcon' => array(
							'title' => 'map',
							'src' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M565.6 36.2C572.1 40.7 576 48.1 576 56V392c0 10-6.2 18.9-15.5 22.4l-168 64c-5.2 2-10.9 2.1-16.1 .3L192.5 417.5l-160 61c-7.4 2.8-15.7 1.8-22.2-2.7S0 463.9 0 456V120c0-10 6.1-18.9 15.5-22.4l168-64c5.2-2 10.9-2.1 16.1-.3L383.5 94.5l160-61c7.4-2.8 15.7-1.8 22.2 2.7zM48 136.5V421.2l120-45.7V90.8L48 136.5zM360 422.7V137.3l-144-48V374.7l144 48zm48-1.5l120-45.7V90.8L408 136.5V421.2z"/></svg>'
						),
						'headerLink' => '#'
					)
				),
				'excludeCopy' => true
			),
			'headerInfoLayOutDesktop' => array(
				'type' => 'string',
				'default' => 'row'
			),
			'headerInfoLayOutTablet' => array(
				'type' => 'string'
			),
			'headerInfoLayOutMobile' => array(
				'type' => 'string'
			),
			'headerInfoLayOutTabletLandscape' => array(
				'type' => 'string'
			),
			'headerInfoLayOutMobileLandscape' => array(
				'type' => 'string'
			),
			'headerInfoLayOutLaptop' => array(
				'type' => 'string'
			),
			'headerInfoLayOutWideScreen' => array(
				'type' => 'string'
			),
			'gapBetweenDesktop' => array(
				'type' => 'object'
			),
			'gapBetweenTablet' => array(
				'type' => 'object'
			),
			'gapBetweenMobile' => array(
				'type' => 'object'
			),
			'gapBetweenTabletLandscape' => array(
				'type' => 'object'
			),
			'gapBetweenMobileLandscape' => array(
				'type' => 'object'
			),
			'gapBetweenLaptop' => array(
				'type' => 'object'
			),
			'gapBetweenWideScreen' => array(
				'type' => 'object'
			),
			'headerPaddingDesktop' => array(
				'type' => 'object'
			),
			'headerPaddingTablet' => array(
				'type' => 'object'
			),
			'headerPaddingMobile' => array(
				'type' => 'object'
			),
			'headerPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'headerPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'headerPaddingLaptop' => array(
				'type' => 'object'
			),
			'headerPaddingWideScreen' => array(
				'type' => 'object'
			),
			'textColor' => array(
				'type' => 'string',
				'default' => '#000'
			),
			'background' => array(
				'type' => 'object'
			),
			'textHoverColor' => array(
				'type' => 'string'
			),
			'backgroundHover' => array(
				'type' => 'object'
			),
			'headerTypography' => array(
				'type' => 'object'
			),
			'iconColor' => array(
				'type' => 'string'
			),
			'iconHoverColor' => array(
				'type' => 'string'
			),
			'iconSizeDesktop' => array(
				'type' => 'object'
			),
			'iconSizeTablet' => array(
				'type' => 'object'
			),
			'iconSizeMobile' => array(
				'type' => 'object'
			),
			'iconSizeTabletLandscape' => array(
				'type' => 'object'
			),
			'iconSizeMobileLandscape' => array(
				'type' => 'object'
			),
			'iconSizeLaptop' => array(
				'type' => 'object'
			),
			'iconSizeWideScreen' => array(
				'type' => 'object'
			),
			'iconSpacing' => array(
				'type' => 'object',
				'default' => array(
					'size' => 10,
					'unit' => 'px'
				)
			)
		),
		'supports' => array(
			'html' => false,
			'anchor' => true,
			'align' => array(
				'wide',
				'full'
			)
		),
		'textdomain' => 'gutenkit-blocks-addon',
		'editorScript' => 'file:./index.js',
		'style' => 'file:./style-index.css'
	),
	'heading' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'gutenkit/heading',
		'version' => '1.0.0',
		'title' => 'Heading',
		'category' => 'gutenkit',
		'keywords' => array(
			'gkit',
			'heading',
			'title',
			'text'
		),
		'description' => 'Heading block for gutenberg.',
		'example' => array(
			'preview' => true
		),
		'attributes' => array(
			'blockID' => array(
				'type' => 'string'
			),
			'blockClass' => array(
				'type' => 'string'
			),
			'blocksCSS' => array(
				'type' => 'object'
			),
			'content' => array(
				'type' => 'string',
				'source' => 'html',
				'selector' => '.gkit-heading-title',
				'default' => 'Grow your <strong>report</strong>',
				'role' => 'content',
				'excludeCopy' => true
			),
			'linkSwitch' => array(
				'type' => 'boolean',
				'default' => false,
				'excludeCopy' => true
			),
			'link' => array(
				'type' => 'object',
				'default' => '#',
				'excludeCopy' => true
			),
			'htmlTag' => array(
				'type' => 'string',
				'default' => 'h2',
				'excludeCopy' => true
			),
			'showBorder' => array(
				'type' => 'boolean',
				'default' => false,
				'excludeCopy' => true
			),
			'borderPosition' => array(
				'type' => 'string',
				'default' => 'start',
				'excludeCopy' => true
			),
			'showSubtitle' => array(
				'type' => 'boolean',
				'default' => false,
				'excludeCopy' => true
			),
			'borderSubtitle' => array(
				'type' => 'boolean',
				'default' => false,
				'excludeCopy' => true
			),
			'showOutline' => array(
				'type' => 'boolean',
				'default' => false,
				'excludeCopy' => true
			),
			'subtitleContent' => array(
				'type' => 'string',
				'source' => 'html',
				'selector' => '.gkit-heading-subtitle',
				'default' => 'Time has changed',
				'excludeCopy' => true
			),
			'subtitlePosition' => array(
				'type' => 'string',
				'default' => 'after-title',
				'excludeCopy' => true
			),
			'subtitleHtmlTag' => array(
				'type' => 'string',
				'default' => 'h3',
				'excludeCopy' => true
			),
			'showDescription' => array(
				'type' => 'boolean',
				'default' => false,
				'excludeCopy' => true
			),
			'descriptionContent' => array(
				'type' => 'string',
				'source' => 'html',
				'selector' => '.gkit-heading-description p',
				'default' => 'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradise',
				'excludeCopy' => true
			),
			'descriptionMaxWidthDesktop' => array(
				'type' => 'object',
				'default' => array(
					'unit' => '%',
					'size' => 100
				)
			),
			'descriptionMaxWidthTablet' => array(
				'type' => 'object'
			),
			'descriptionMaxWidthMobile' => array(
				'type' => 'object'
			),
			'descriptionMaxWidthTabletLandscape' => array(
				'type' => 'object'
			),
			'descriptionMaxWidthMobileLandscape' => array(
				'type' => 'object'
			),
			'descriptionMaxWidthLaptop' => array(
				'type' => 'object'
			),
			'descriptionMaxWidthWideScreen' => array(
				'type' => 'object'
			),
			'showShadowText' => array(
				'type' => 'boolean',
				'default' => false,
				'excludeCopy' => true
			),
			'shadowTextContent' => array(
				'type' => 'string',
				'default' => 'bussiness',
				'excludeCopy' => true
			),
			'showSeparator' => array(
				'type' => 'boolean',
				'default' => true,
				'excludeCopy' => true
			),
			'separatorStyle' => array(
				'type' => 'string',
				'default' => 'dotted',
				'excludeCopy' => true
			),
			'separatorPosition' => array(
				'type' => 'string',
				'default' => 'after-title',
				'excludeCopy' => true
			),
			'separatorImage' => array(
				'type' => 'object',
				'default' => array(
					'url' => 'placeholder'
				),
				'excludeCopy' => true
			),
			'generalTextAlignmentDesktop' => array(
				'type' => 'string'
			),
			'generalTextAlignmentTablet' => array(
				'type' => 'string'
			),
			'generalTextAlignmentMobile' => array(
				'type' => 'string'
			),
			'generalTextAlignmentTabletLandscape' => array(
				'type' => 'string'
			),
			'generalTextAlignmentMobileLandscape' => array(
				'type' => 'string'
			),
			'generalTextAlignmentLaptop' => array(
				'type' => 'string'
			),
			'generalTextAlignmentWideScreen' => array(
				'type' => 'string'
			),
			'titleColor' => array(
				'type' => 'string'
			),
			'titleHoverColor' => array(
				'type' => 'string'
			),
			'titleTextShadow' => array(
				'type' => 'object'
			),
			'titleMarginDesktop' => array(
				'type' => 'object'
			),
			'titleMarginTablet' => array(
				'type' => 'object'
			),
			'titleMarginMobile' => array(
				'type' => 'object'
			),
			'titleMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'titleMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'titleMarginLaptop' => array(
				'type' => 'object'
			),
			'titleMarginWideScreen' => array(
				'type' => 'object'
			),
			'titleTypography' => array(
				'type' => 'object'
			),
			'titleBorderWidth' => array(
				'type' => 'object',
				'default' => array(
					'unit' => 'px',
					'size' => 5
				)
			),
			'titleBorderHeight' => array(
				'type' => 'object',
				'default' => array(
					'unit' => '%',
					'size' => 100
				)
			),
			'titleBorderVerticalPosition' => array(
				'type' => 'object',
				'default' => array(
					'unit' => 'px',
					'size' => 0
				)
			),
			'titleBorderRightGap' => array(
				'type' => 'object',
				'default' => array(
					'unit' => 'px',
					'size' => 30
				)
			),
			'titleBorderLeftGap' => array(
				'type' => 'object',
				'default' => array(
					'unit' => 'px',
					'size' => 30
				)
			),
			'titleBorderBackground' => array(
				'type' => 'string'
			),
			'focusedTitleColor' => array(
				'type' => 'string'
			),
			'focusedTitleHoverColor' => array(
				'type' => 'string'
			),
			'focusedTitleTypography' => array(
				'type' => 'object'
			),
			'focusedTitleTextDecorationColor' => array(
				'type' => 'string'
			),
			'focusedTitleTextShadow' => array(
				'type' => 'object'
			),
			'focusedTitlePaddingDesktop' => array(
				'type' => 'object'
			),
			'focusedTitlePaddingTablet' => array(
				'type' => 'object'
			),
			'focusedTitlePaddingMobile' => array(
				'type' => 'object'
			),
			'focusedTitlePaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'focusedTitlePaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'focusedTitlePaddingLaptop' => array(
				'type' => 'object'
			),
			'focusedTitlePaddingWideScreen' => array(
				'type' => 'object'
			),
			'focusedTitleUseBackground' => array(
				'type' => 'boolean',
				'default' => false
			),
			'focusedTitleBackgroundColor' => array(
				'type' => 'object',
				'selector' => '{{WRAPPER}}'
			),
			'focusedTitleBorderRadius' => array(
				'type' => 'object'
			),
			'focusedTitleUseTextFill' => array(
				'type' => 'boolean',
				'default' => false
			),
			'focusedTitleTextFillBackground' => array(
				'type' => 'object',
				'selector' => '{{WRAPPER}}'
			),
			'focusedTitleUseStroke' => array(
				'type' => 'boolean',
				'default' => false
			),
			'focusedTitleStrokeWidth' => array(
				'type' => 'object'
			),
			'focusedTitleStrokeColor' => array(
				'type' => 'string'
			),
			'subtitleColor' => array(
				'type' => 'string'
			),
			'subtitleTypography' => array(
				'type' => 'object'
			),
			'subtitleMarginDesktop' => array(
				'type' => 'object'
			),
			'subtitleMarginTablet' => array(
				'type' => 'object'
			),
			'subtitleMarginMobile' => array(
				'type' => 'object'
			),
			'subtitleMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'subtitleMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'subtitleMarginLaptop' => array(
				'type' => 'object'
			),
			'subtitleMarginWideScreen' => array(
				'type' => 'object'
			),
			'subtitlePaddingDesktop' => array(
				'type' => 'object',
				'default' => array(
					'top' => '8px',
					'right' => '32px',
					'bottom' => '8px',
					'left' => '32px'
				)
			),
			'subtitlePaddingTablet' => array(
				'type' => 'object'
			),
			'subtitlePaddingMobile' => array(
				'type' => 'object'
			),
			'subtitlePaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'subtitlePaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'subtitlePaddingLaptop' => array(
				'type' => 'object'
			),
			'subtitlePaddingWideScreen' => array(
				'type' => 'object'
			),
			'subtitleUseTextFill' => array(
				'type' => 'boolean',
				'default' => false
			),
			'subtitleTextFillBackground' => array(
				'type' => 'object',
				'selector' => '{{WRAPPER}}'
			),
			'subtitleBorderLeftBackground' => array(
				'type' => 'object'
			),
			'subtitleBorderLeftWidthDesktop' => array(
				'type' => 'object'
			),
			'subtitleBorderLeftWidthTablet' => array(
				'type' => 'object'
			),
			'subtitleBorderLeftWidthMobile' => array(
				'type' => 'object'
			),
			'subtitleBorderLeftWidthTabletLandscape' => array(
				'type' => 'object'
			),
			'subtitleBorderLeftWidthMobileLandscape' => array(
				'type' => 'object'
			),
			'subtitleBorderLeftWidthLaptop' => array(
				'type' => 'object'
			),
			'subtitleBorderLeftWidthWideScreen' => array(
				'type' => 'object'
			),
			'subtitleBorderLeftMarginDesktop' => array(
				'type' => 'object'
			),
			'subtitleBorderLeftMarginTablet' => array(
				'type' => 'object'
			),
			'subtitleBorderLeftMarginMobile' => array(
				'type' => 'object'
			),
			'subtitleBorderLeftMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'subtitleBorderLeftMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'subtitleBorderLeftMarginLaptop' => array(
				'type' => 'object'
			),
			'subtitleBorderLeftMarginWideScreen' => array(
				'type' => 'object'
			),
			'subtitleBorderRightBackground' => array(
				'type' => 'object'
			),
			'subtitleBorderRightWidthDesktop' => array(
				'type' => 'object'
			),
			'subtitleBorderRightWidthTablet' => array(
				'type' => 'object'
			),
			'subtitleBorderRightWidthMobile' => array(
				'type' => 'object'
			),
			'subtitleBorderRightWidthTabletLandscape' => array(
				'type' => 'object'
			),
			'subtitleBorderRightWidthMobileLandscape' => array(
				'type' => 'object'
			),
			'subtitleBorderRightWidthLaptop' => array(
				'type' => 'object'
			),
			'subtitleBorderRightWidthWideScreen' => array(
				'type' => 'object'
			),
			'subtitleBorderRightMarginDesktop' => array(
				'type' => 'object'
			),
			'subtitleBorderRightMarginTablet' => array(
				'type' => 'object'
			),
			'subtitleBorderRightMarginMobile' => array(
				'type' => 'object'
			),
			'subtitleBorderRightMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'subtitleBorderRightMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'subtitleBorderRightMarginLaptop' => array(
				'type' => 'object'
			),
			'subtitleBorderRightMarginWideScreen' => array(
				'type' => 'object'
			),
			'subtitleBorderRightHeightDesktop' => array(
				'type' => 'object'
			),
			'subtitleBorderRightHeightTablet' => array(
				'type' => 'object'
			),
			'subtitleBorderRightHeightMobile' => array(
				'type' => 'object'
			),
			'subtitleBorderRightHeightTabletLandscape' => array(
				'type' => 'object'
			),
			'subtitleBorderRightHeightMobileLandscape' => array(
				'type' => 'object'
			),
			'subtitleBorderRightHeightLaptop' => array(
				'type' => 'object'
			),
			'subtitleBorderRightHeightWideScreen' => array(
				'type' => 'object'
			),
			'subtitleBorderRightVerticalPositionDesktop' => array(
				'type' => 'object'
			),
			'subtitleBorderRightVerticalPositionTablet' => array(
				'type' => 'object'
			),
			'subtitleBorderRightVerticalPositionMobile' => array(
				'type' => 'object'
			),
			'subtitleBorderRightVerticalPositionTabletLandscape' => array(
				'type' => 'object'
			),
			'subtitleBorderRightVerticalPositionMobileLandscape' => array(
				'type' => 'object'
			),
			'subtitleBorderRightVerticalPositionLaptop' => array(
				'type' => 'object'
			),
			'subtitleBorderRightVerticalPositionWideScreen' => array(
				'type' => 'object'
			),
			'subtitleOutlineBorder' => array(
				'type' => 'object'
			),
			'subtitleOutlineBorderRadiusDesktop' => array(
				'type' => 'object',
				'default' => array(
					'top' => '2em',
					'right' => '2em',
					'bottom' => '2em',
					'left' => '2em'
				)
			),
			'subtitleOutlineBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'subtitleOutlineBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'subtitleOutlineBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'subtitleOutlineBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'subtitleOutlineBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'subtitleOutlineBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'descriptionColor' => array(
				'type' => 'string'
			),
			'descriptionTypography' => array(
				'type' => 'object'
			),
			'descriptionMarginDesktop' => array(
				'type' => 'object'
			),
			'descriptionMarginTablet' => array(
				'type' => 'object'
			),
			'descriptionMarginMobile' => array(
				'type' => 'object'
			),
			'descriptionMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'descriptionMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'descriptionMarginLaptop' => array(
				'type' => 'object'
			),
			'descriptionMarginWideScreen' => array(
				'type' => 'object'
			),
			'separatorWidthDesktop' => array(
				'type' => 'object',
				'default' => array(
					'unit' => 'px',
					'size' => 100
				)
			),
			'separatorWidthTablet' => array(
				'type' => 'object'
			),
			'separatorWidthMobile' => array(
				'type' => 'object'
			),
			'separatorWidthTabletLandscape' => array(
				'type' => 'object'
			),
			'separatorWidthMobileLandscape' => array(
				'type' => 'object'
			),
			'separatorWidthLaptop' => array(
				'type' => 'object'
			),
			'separatorWidthWideScreen' => array(
				'type' => 'object'
			),
			'separatorHeightDesktop' => array(
				'type' => 'object',
				'default' => array(
					'unit' => 'px',
					'size' => 4
				)
			),
			'separatorHeightTablet' => array(
				'type' => 'object'
			),
			'separatorHeightMobile' => array(
				'type' => 'object'
			),
			'separatorHeightTabletLandscape' => array(
				'type' => 'object'
			),
			'separatorHeightMobileLandscape' => array(
				'type' => 'object'
			),
			'separatorHeightLaptop' => array(
				'type' => 'object'
			),
			'separatorHeightWideScreen' => array(
				'type' => 'object'
			),
			'separatorMarginDesktop' => array(
				'type' => 'object'
			),
			'separatorMarginTablet' => array(
				'type' => 'object'
			),
			'separatorMarginMobile' => array(
				'type' => 'object'
			),
			'separatorMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'separatorMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'separatorMarginLaptop' => array(
				'type' => 'object'
			),
			'separatorMarginWideScreen' => array(
				'type' => 'object'
			),
			'separatorColor' => array(
				'type' => 'string'
			),
			'shadowTextPositionDesktop' => array(
				'type' => 'object',
				'default' => array(
					'top' => '-35%',
					'left' => '55%'
				)
			),
			'shadowTextPositionTablet' => array(
				'type' => 'object'
			),
			'shadowTextPositionMobile' => array(
				'type' => 'object'
			),
			'shadowTextPositionTabletLandscape' => array(
				'type' => 'object'
			),
			'shadowTextPositionMobileLandscape' => array(
				'type' => 'object'
			),
			'shadowTextPositionLaptop' => array(
				'type' => 'object'
			),
			'shadowTextPositionWideScreen' => array(
				'type' => 'object'
			),
			'shadowTextTypography' => array(
				'type' => 'object'
			),
			'shadowTextColor' => array(
				'type' => 'string'
			),
			'shadowTextStrokeWidth' => array(
				'type' => 'object'
			),
			'shadowTextStrokeColor' => array(
				'type' => 'string'
			)
		),
		'supports' => array(
			'html' => false,
			'align' => array(
				'wide',
				'full'
			),
			'anchor' => true
		),
		'textdomain' => 'gutenkit-blocks-addon',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css'
	),
	'icon' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'gutenkit/icon',
		'version' => '1.0.0',
		'title' => 'Icon',
		'category' => 'gutenkit',
		'icon' => 'menu-alt3',
		'keywords' => array(
			'gkit',
			'gutenkit',
			'icon',
			'box'
		),
		'description' => 'Icon block for gutenberg.',
		'example' => array(
			'preview' => true
		),
		'attributes' => array(
			'blockID' => array(
				'type' => 'string'
			),
			'blockClass' => array(
				'type' => 'string'
			),
			'blocksCSS' => array(
				'type' => 'object'
			),
			'icon' => array(
				'type' => 'object',
				'default' => array(
					'title' => 'star-of-life',
					'src' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M208 32c0-17.7 14.3-32 32-32h32c17.7 0 32 14.3 32 32V172.9l122-70.4c15.3-8.8 34.9-3.6 43.7 11.7l16 27.7c8.8 15.3 3.6 34.9-11.7 43.7L352 256l122 70.4c15.3 8.8 20.5 28.4 11.7 43.7l-16 27.7c-8.8 15.3-28.4 20.6-43.7 11.7L304 339.1V480c0 17.7-14.3 32-32 32H240c-17.7 0-32-14.3-32-32V339.1L86 409.6c-15.3 8.8-34.9 3.6-43.7-11.7l-16-27.7c-8.8-15.3-3.6-34.9 11.7-43.7L160 256 38 185.6c-15.3-8.8-20.5-28.4-11.7-43.7l16-27.7C51.1 98.8 70.7 93.6 86 102.4l122 70.4V32z"/></svg>'
				),
				'excludeCopy' => true
			),
			'iconEnableLink' => array(
				'type' => 'boolean',
				'default' => false,
				'excludeCopy' => true
			),
			'iconWebsiteLink' => array(
				'type' => 'object',
				'default' => array(
					'url' => '#'
				),
				'excludeCopy' => true
			),
			'iconSizeDesktop' => array(
				'type' => 'object',
				'default' => array(
					'size' => 30,
					'unit' => 'px'
				)
			),
			'iconSizeTablet' => array(
				'type' => 'object'
			),
			'iconSizeMobile' => array(
				'type' => 'object'
			),
			'iconSizeTabletLandscape' => array(
				'type' => 'object'
			),
			'iconSizeMobileLandscape' => array(
				'type' => 'object'
			),
			'iconSizeLaptop' => array(
				'type' => 'object'
			),
			'iconSizeWideScreen' => array(
				'type' => 'object'
			),
			'iconRoate' => array(
				'type' => 'object'
			),
			'iconColor' => array(
				'type' => 'string'
			),
			'iconBgColor' => array(
				'type' => 'string'
			),
			'iconBorder' => array(
				'type' => 'object'
			),
			'iconBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'iconBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'iconBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'iconBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'iconBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'iconBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'iconBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'iconBoxShadow' => array(
				'type' => 'object'
			),
			'iconHoverColor' => array(
				'type' => 'string'
			),
			'iconHoverBgColor' => array(
				'type' => 'string'
			),
			'iconHoverBorder' => array(
				'type' => 'object'
			),
			'iconHoverBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'iconHoverBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'iconHoverBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'iconHoverBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'iconHoverBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'iconHoverBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'iconHoverBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'iconHoverBoxShadow' => array(
				'type' => 'object'
			),
			'iconPaddingDesktop' => array(
				'type' => 'object'
			),
			'iconPaddingTablet' => array(
				'type' => 'object'
			),
			'iconPaddingMobile' => array(
				'type' => 'object'
			),
			'iconPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'iconPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'iconPaddingLaptop' => array(
				'type' => 'object'
			),
			'iconPaddingWideScreen' => array(
				'type' => 'object'
			),
			'iconMarginDesktop' => array(
				'type' => 'object'
			),
			'iconMarginTablet' => array(
				'type' => 'object'
			),
			'iconMarginMobile' => array(
				'type' => 'object'
			),
			'iconMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'iconMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'iconMarginLaptop' => array(
				'type' => 'object'
			),
			'iconMarginWideScreen' => array(
				'type' => 'object'
			),
			'iconAlignDesktop' => array(
				'type' => 'string',
				'default' => 'center'
			),
			'iconAlignTablet' => array(
				'type' => 'string'
			),
			'iconAlignMobile' => array(
				'type' => 'string'
			),
			'iconAlignTabletLandscape' => array(
				'type' => 'string'
			),
			'iconAlignMobileLandscape' => array(
				'type' => 'string'
			),
			'iconAlignLaptop' => array(
				'type' => 'string'
			),
			'iconAlignWideScreen' => array(
				'type' => 'string'
			)
		),
		'supports' => array(
			'html' => false,
			'anchor' => true
		),
		'textdomain' => 'gutenkit-blocks-addon',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css'
	),
	'icon-box' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'gutenkit/icon-box',
		'version' => '1.0.0',
		'title' => 'Icon Box',
		'category' => 'gutenkit',
		'keywords' => array(
			'gkit',
			'icon',
			'box',
			'box icon'
		),
		'description' => 'Icon box block for gutenberg.',
		'example' => array(
			'preview' => true
		),
		'attributes' => array(
			'blockID' => array(
				'type' => 'string'
			),
			'blockClass' => array(
				'type' => 'string'
			),
			'blocksCSS' => array(
				'type' => 'object'
			),
			'iconBoxShowHeaderIcon' => array(
				'type' => 'boolean',
				'default' => true,
				'excludeCopy' => true
			),
			'iconBoxHeaderIcon' => array(
				'type' => 'object',
				'default' => array(
					'title' => 'star-of-life',
					'src' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M208 32c0-17.7 14.3-32 32-32h32c17.7 0 32 14.3 32 32V172.9l122-70.4c15.3-8.8 34.9-3.6 43.7 11.7l16 27.7c8.8 15.3 3.6 34.9-11.7 43.7L352 256l122 70.4c15.3 8.8 20.5 28.4 11.7 43.7l-16 27.7c-8.8 15.3-28.4 20.6-43.7 11.7L304 339.1V480c0 17.7-14.3 32-32 32H240c-17.7 0-32-14.3-32-32V339.1L86 409.6c-15.3 8.8-34.9 3.6-43.7-11.7l-16-27.7c-8.8-15.3-3.6-34.9 11.7-43.7L160 256 38 185.6c-15.3-8.8-20.5-28.4-11.7-43.7l16-27.7C51.1 98.8 70.7 93.6 86 102.4l122 70.4V32z"/></svg>'
				),
				'excludeCopy' => true
			),
			'iconBoxTitleText' => array(
				'type' => 'string',
				'default' => 'Strategy and  Planning',
				'excludeCopy' => true
			),
			'iconBoxDescriptionText' => array(
				'type' => 'string',
				'default' => 'We bring the right people together to challenge established thinking and drive transform in 2023',
				'excludeCopy' => true
			),
			'iconBoxShowButton' => array(
				'type' => 'boolean',
				'default' => false,
				'excludeCopy' => true
			),
			'iconBoxEnableHoverBtn' => array(
				'type' => 'boolean',
				'default' => false
			),
			'iconBoxBtnText' => array(
				'type' => 'string',
				'default' => 'Learn More'
			),
			'iconBoxBtnUrl' => array(
				'type' => 'string',
				'default' => '#',
				'excludeCopy' => true
			),
			'iconBoxShowBtnIcon' => array(
				'type' => 'boolean',
				'default' => false,
				'excludeCopy' => true
			),
			'iconBoxBtnIcon' => array(
				'type' => 'object',
				'default' => array(
					'title' => 'arrow-right-1',
					'src' => '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
<title>arrow-right-1</title>
<path d="M30.966 16.234l-9.6-9.6c-0.312-0.312-0.819-0.312-1.131 0s-0.312 0.819 0 1.131l8.234 8.234h-26.069c-0.442 0-0.8 0.358-0.8 0.8s0.358 0.8 0.8 0.8h26.069l-8.234 8.234c-0.312 0.312-0.312 0.819 0 1.131 0.156 0.156 0.361 0.234 0.566 0.234s0.409-0.078 0.566-0.234l9.6-9.6c0.312-0.312 0.312-0.819 0-1.131z"></path>
</svg>
'
				)
			),
			'iconBoxBtnIconPosition' => array(
				'type' => 'string',
				'default' => 'after'
			),
			'iconBoxShowGlobalLink' => array(
				'type' => 'boolean',
				'default' => true
			),
			'iconBoxGlobalLinkUrl' => array(
				'type' => 'object',
				'default' => '#',
				'excludeCopy' => true
			),
			'iconBoxEnableWaterMark' => array(
				'type' => 'boolean',
				'default' => false,
				'excludeCopy' => true
			),
			'iconBoxWaterMarkIcon' => array(
				'type' => 'object',
				'default' => array(
					'title' => 'review',
					'src' => '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="34" height="32" viewBox="0 0 34 32">
<title>review</title>
<path d="M25.088 19.712c0.288 0 0.512-0.224 0.512-0.512v-4.48c0-1.024-0.608-1.984-1.536-2.4l-4-1.824c-0.192-0.096-0.32-0.288-0.32-0.512v-1.344c0.992-0.768 1.6-1.984 1.6-3.328v-2.144c0-1.696-0.576-2.848-0.576-2.912-0.128-0.16-0.288-0.256-0.48-0.256h-4.032c-0.48 0-0.96 0.16-1.312 0.48 0 0-0.032 0-0.032 0-0.704 0.064-2.048 0.64-2.048 2.4v2.432c0 1.344 0.64 2.528 1.6 3.328v1.344c0 0.224-0.128 0.416-0.32 0.512l-4 1.824c-0.928 0.416-1.536 1.376-1.536 2.4v4.48c0 0.288 0.224 0.512 0.512 0.512s0.512-0.224 0.512-0.512v-1.408l1.664 0.672v2.112l-1.504 0.224c-0.544 0.096-0.992 0.448-1.184 0.992-0.16 0.544-0.032 1.12 0.384 1.504l2.976 2.912-0.704 4.096c-0.096 0.544 0.128 1.088 0.576 1.44 0.448 0.32 1.056 0.384 1.536 0.096l3.68-1.952 3.68 1.952c0.224 0.128 0.448 0.16 0.672 0.16 0.288 0 0.608-0.096 0.864-0.288 0.448-0.32 0.672-0.864 0.576-1.44l-0.704-4.096 2.976-2.912c0.416-0.384 0.544-0.96 0.384-1.504s-0.64-0.928-1.184-0.992l-1.408-0.192v-2.016l1.664-0.32v0.96c0 0.288 0.224 0.512 0.512 0.512zM13.824 2.88c0-0.512 0.16-0.864 0.448-1.12 0.064 0.128 0.16 0.224 0.288 0.288 0.256 0.096 0.544-0.032 0.64-0.32 0.16-0.448 0.576-0.736 1.056-0.736h3.712c0.128 0.352 0.32 0.992 0.352 1.824-0.672 0.224-2.432 0.672-4.416-0.16-0.224-0.096-0.48 0-0.608 0.192 0 0-0.512 0.8-1.44 1.216l-0.032-1.184zM13.824 5.312v-0.16c1.024-0.32 1.696-1.024 2.048-1.44 1.888 0.672 3.552 0.416 4.448 0.16v1.44c0 1.792-1.44 3.232-3.232 3.232s-3.264-1.44-3.264-3.232zM19.616 11.392l0.032 0.032c-0.32 1.152-1.376 1.952-2.592 1.952s-2.272-0.8-2.592-1.952l0.032-0.032c0.544-0.256 0.928-0.8 0.928-1.44v-0.736c0.512 0.224 1.056 0.32 1.632 0.32s1.12-0.128 1.632-0.32v0.736c0.032 0.64 0.384 1.184 0.928 1.44zM24.192 21.792c0.192 0.032 0.32 0.128 0.384 0.32 0.064 0.16 0 0.352-0.128 0.48l-3.168 3.072c-0.128 0.128-0.16 0.288-0.128 0.448l0.736 4.352c0.032 0.16-0.032 0.352-0.192 0.448s-0.32 0.128-0.48 0.032l-3.904-2.048c-0.064-0.032-0.16-0.064-0.224-0.064s-0.16 0.032-0.224 0.064l-3.904 2.048c-0.16 0.096-0.352 0.064-0.48-0.032-0.16-0.096-0.224-0.288-0.192-0.448l0.736-4.352c0.032-0.16-0.032-0.32-0.128-0.448l-3.168-3.072c-0.128-0.128-0.16-0.288-0.128-0.48 0.064-0.16 0.192-0.288 0.384-0.32l4.384-0.64c0.16-0.032 0.288-0.128 0.384-0.288l1.952-3.968c0.064-0.16 0.224-0.256 0.416-0.256s0.32 0.096 0.416 0.256l1.952 3.968c0.064 0.16 0.224 0.256 0.384 0.288l4.32 0.64zM24.576 17.184l-1.664 0.32v-1.504c0-0.288-0.224-0.512-0.512-0.512s-0.512 0.224-0.512 0.512v2.144c0 0 0 0 0 0v2.304l-1.696-0.256-1.856-3.744c-0.256-0.512-0.736-0.8-1.312-0.8-0.544 0-1.056 0.32-1.312 0.8l-1.856 3.744-1.696 0.256v-2.304c0 0 0 0 0 0v-2.144c0-0.288-0.224-0.512-0.512-0.512s-0.512 0.224-0.512 0.512v1.408l-1.664-0.672v-2.016c0-0.64 0.384-1.216 0.96-1.504l3.040-1.376c0.48 1.504 1.888 2.528 3.52 2.528s3.008-1.024 3.52-2.528l3.040 1.376c0.576 0.256 0.96 0.864 0.96 1.504l0.064 2.464zM10.272 26.496c-0.192-0.192-0.512-0.192-0.704 0l-1.024 1.024c-0.128 0.128-0.16 0.288-0.128 0.448l0.512 2.912c0 0.064-0.032 0.128-0.064 0.128-0.032 0.032-0.096 0.032-0.16 0l-2.624-1.408c-0.16-0.064-0.32-0.064-0.48 0l-2.624 1.376c-0.064 0.032-0.128 0-0.16 0-0.032-0.032-0.064-0.064-0.064-0.128l0.512-2.912c0.032-0.16-0.032-0.32-0.128-0.448l-2.112-2.048c-0.064-0.064-0.032-0.096-0.032-0.128s0.032-0.096 0.128-0.096l2.912-0.416c0.16-0.032 0.288-0.128 0.384-0.288l1.312-2.656c0.032-0.064 0.096-0.064 0.128-0.064s0.096 0 0.128 0.064l1.152 2.304c0.128 0.256 0.416 0.352 0.672 0.224s0.352-0.416 0.224-0.672l-1.152-2.304c-0.192-0.384-0.576-0.64-1.024-0.64s-0.832 0.256-1.024 0.64l-1.184 2.4-2.656 0.384c-0.448 0.064-0.8 0.352-0.928 0.768s-0.032 0.864 0.288 1.152l1.92 1.888-0.448 2.656c-0.064 0.416 0.096 0.864 0.448 1.12 0.192 0.16 0.448 0.224 0.672 0.224 0.192 0 0.352-0.032 0.544-0.128l2.368-1.248 2.368 1.248c0.384 0.192 0.832 0.16 1.184-0.096s0.512-0.672 0.448-1.12l-0.448-2.656 0.864-0.832c0.192-0.16 0.192-0.48 0-0.672zM34.080 24.992c-0.128-0.416-0.48-0.704-0.928-0.768l-2.656-0.384-1.184-2.4c-0.192-0.384-0.576-0.64-1.024-0.64s-0.832 0.256-1.024 0.64l-1.152 2.304c-0.128 0.256-0.032 0.544 0.224 0.672s0.544 0.032 0.672-0.224l1.152-2.304c0.032-0.064 0.096-0.064 0.128-0.064s0.096 0 0.128 0.064l1.312 2.656c0.064 0.16 0.224 0.256 0.384 0.288l2.912 0.416c0.064 0 0.096 0.064 0.128 0.096 0 0.032 0 0.096-0.032 0.128l-2.112 2.048c-0.128 0.128-0.16 0.288-0.128 0.448l0.512 2.912c0 0.064-0.032 0.128-0.064 0.128-0.032 0.032-0.096 0.032-0.16 0l-2.624-1.376c-0.16-0.064-0.32-0.064-0.48 0l-2.624 1.376c-0.064 0.032-0.128 0-0.16 0s-0.064-0.064-0.064-0.128l0.512-2.912c0.032-0.16-0.032-0.32-0.128-0.448l-1.024-1.024c-0.192-0.192-0.512-0.192-0.704 0s-0.192 0.512 0 0.704l0.864 0.832-0.448 2.656c-0.064 0.416 0.096 0.864 0.448 1.12s0.8 0.288 1.184 0.096l2.368-1.248 2.368 1.248c0.16 0.096 0.352 0.128 0.544 0.128 0.224 0 0.48-0.064 0.672-0.224 0.352-0.256 0.512-0.672 0.448-1.12l-0.448-2.656 1.92-1.888c0.32-0.32 0.416-0.768 0.288-1.152z"></path>
</svg>'
				),
				'excludeCopy' => true
			),
			'iconBoxHeaderIconPositionDesktop' => array(
				'type' => 'string'
			),
			'iconBoxHeaderIconPositionTablet' => array(
				'type' => 'string'
			),
			'iconBoxHeaderIconPositionMobile' => array(
				'type' => 'string'
			),
			'iconBoxHeaderIconPositionTabletLandscape' => array(
				'type' => 'string'
			),
			'iconBoxHeaderIconPositionMobileLandscape' => array(
				'type' => 'string'
			),
			'iconBoxHeaderIconPositionLaptop' => array(
				'type' => 'string'
			),
			'iconBoxHeaderIconPositionWideScreen' => array(
				'type' => 'string'
			),
			'iconBoxContentAlignmentDesktop' => array(
				'type' => 'string'
			),
			'iconBoxContentAlignmentTablet' => array(
				'type' => 'string'
			),
			'iconBoxContentAlignmentMobile' => array(
				'type' => 'string'
			),
			'iconBoxContentAlignmentTabletLandscape' => array(
				'type' => 'string'
			),
			'iconBoxContentAlignmentMobileLandscape' => array(
				'type' => 'string'
			),
			'iconBoxContentAlignmentLaptop' => array(
				'type' => 'string'
			),
			'iconBoxContentAlignmentWideScreen' => array(
				'type' => 'string'
			),
			'iconBoxTitleTag' => array(
				'type' => 'string',
				'default' => 'p'
			),
			'iconBoxShowBadge' => array(
				'type' => 'boolean',
				'default' => false,
				'excludeCopy' => true
			),
			'iconBoxBadgeTitle' => array(
				'type' => 'string',
				'default' => 'EXCLUSIVE',
				'excludeCopy' => true
			),
			'iconBoxBadgePosition' => array(
				'type' => 'object'
			),
			'badgeArrowHorizontalCustomPositionDesktop' => array(
				'type' => 'object',
				'default' => array(
					'unit' => 'px',
					'size' => 0
				)
			),
			'badgeArrowHorizontalCustomPositionTablet' => array(
				'type' => 'object'
			),
			'badgeArrowHorizontalCustomPositionMobile' => array(
				'type' => 'object'
			),
			'badgeArrowHorizontalCustomPositionTabletLandscape' => array(
				'type' => 'object'
			),
			'badgeArrowHorizontalCustomPositionMobileLandscape' => array(
				'type' => 'object'
			),
			'badgeArrowHorizontalCustomPositionLaptop' => array(
				'type' => 'object'
			),
			'badgeArrowHorizontalCustomPositionWideScreen' => array(
				'type' => 'object'
			),
			'badgeArrowVerticalCustomPositionDesktop' => array(
				'type' => 'object',
				'default' => array(
					'unit' => 'px',
					'size' => 0
				)
			),
			'badgeArrowVerticalCustomPositionTablet' => array(
				'type' => 'object'
			),
			'badgeArrowVerticalCustomPositionMobile' => array(
				'type' => 'object'
			),
			'badgeArrowVerticalCustomPositionTabletLandscape' => array(
				'type' => 'object'
			),
			'badgeArrowVerticalCustomPositionMobileLandscape' => array(
				'type' => 'object'
			),
			'badgeArrowVerticalCustomPositionLaptop' => array(
				'type' => 'object'
			),
			'badgeArrowVerticalCustomPositionWideScreen' => array(
				'type' => 'object'
			),
			'iconBoxContainerHoverBackgroundAnimation' => array(
				'type' => 'boolean',
				'default' => false
			),
			'iconBoxContainerHoverHoverDirection' => array(
				'type' => 'string',
				'default' => 'left'
			),
			'iconBoxContainerHoverAnimationSwitch' => array(
				'type' => 'boolean',
				'default' => false
			),
			'iconBoxContainerHoverAnimation' => array(
				'type' => 'object',
				'default' => array(
					'effect' => array(
						'label' => 'Grow',
						'value' => 'grow'
					)
				)
			),
			'iconBoxContentVerticalAlignmentDesktop' => array(
				'type' => 'string'
			),
			'iconBoxContentVerticalAlignmentTablet' => array(
				'type' => 'string'
			),
			'iconBoxContentVerticalAlignmentMobile' => array(
				'type' => 'string'
			),
			'iconBoxContentVerticalAlignmentTabletLandscape' => array(
				'type' => 'string'
			),
			'iconBoxContentVerticalAlignmentMobileLandscape' => array(
				'type' => 'string'
			),
			'iconBoxContentVerticalAlignmentLaptop' => array(
				'type' => 'string'
			),
			'iconBoxContentVerticalAlignmentWideScreen' => array(
				'type' => 'string'
			),
			'iconBoxTitleMarginDesktop' => array(
				'type' => 'object'
			),
			'iconBoxTitleMarginTablet' => array(
				'type' => 'object'
			),
			'iconBoxTitleMarginMobile' => array(
				'type' => 'object'
			),
			'iconBoxTitleMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'iconBoxTitleMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'iconBoxTitleMarginLaptop' => array(
				'type' => 'object'
			),
			'iconBoxTitleMarginWideScreen' => array(
				'type' => 'object'
			),
			'iconBoxTitleColor' => array(
				'type' => 'string',
				'default' => '#000000'
			),
			'iconBoxTitleHoverColor' => array(
				'type' => 'string',
				'default' => '#000000'
			),
			'iconBoxTitleTypography' => array(
				'type' => 'object'
			),
			'iconBoxDescriptionColor' => array(
				'type' => 'string',
				'default' => '#656565'
			),
			'iconBoxDescriptionHoverColor' => array(
				'type' => 'string',
				'default' => '#656565'
			),
			'iconBoxDescriptionTypography' => array(
				'type' => 'object'
			),
			'iconBoxDescriptionMarginDesktop' => array(
				'type' => 'object'
			),
			'iconBoxDescriptionMarginTablet' => array(
				'type' => 'object'
			),
			'iconBoxDescriptionMarginMobile' => array(
				'type' => 'object'
			),
			'iconBoxDescriptionMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'iconBoxDescriptionMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'iconBoxDescriptionMarginLaptop' => array(
				'type' => 'object'
			),
			'iconBoxDescriptionMarginWideScreen' => array(
				'type' => 'object'
			),
			'iconBoxWaterMarkIconColor' => array(
				'type' => 'string',
				'default' => '#000000'
			),
			'iconBoxWaterMarkIconSizeDesktop' => array(
				'type' => 'object',
				'default' => array(
					'unit' => 'px',
					'size' => 100
				)
			),
			'iconBoxWaterMarkIconSizeTablet' => array(
				'type' => 'object'
			),
			'iconBoxWaterMarkIconSizeMobile' => array(
				'type' => 'object'
			),
			'iconBoxWaterMarkIconSizeTabletLandscape' => array(
				'type' => 'object'
			),
			'iconBoxWaterMarkIconSizeMobileLandscape' => array(
				'type' => 'object'
			),
			'iconBoxWaterMarkIconSizeLaptop' => array(
				'type' => 'object'
			),
			'iconBoxWaterMarkIconSizeWideScreen' => array(
				'type' => 'object'
			),
			'iconBoxIconColor' => array(
				'type' => 'string',
				'default' => '#656565'
			),
			'iconBoxIconBackgroundColor' => array(
				'type' => 'object'
			),
			'iconBoxIconBorder' => array(
				'type' => 'object'
			),
			'iconBoxIconBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'iconBoxIconBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'iconBoxIconBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'iconBoxIconBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'iconBoxIconBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'iconBoxIconBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'iconBoxIconBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'iconBoxIconBoxShadow' => array(
				'type' => 'object'
			),
			'iconBoxIconHoverColor' => array(
				'type' => 'string',
				'default' => ''
			),
			'iconBoxIconHoverBackgroundColor' => array(
				'type' => 'object'
			),
			'iconBoxIconHoverBorder' => array(
				'type' => 'object'
			),
			'iconBoxIconHoverAnimation' => array(
				'type' => 'string'
			),
			'iconBoxIconHoverBorderRadiusDesktop' => array(
				'type' => 'string'
			),
			'iconBoxIconHoverBorderRadiusTablet' => array(
				'type' => 'string'
			),
			'iconBoxIconHoverBorderRadiusMobile' => array(
				'type' => 'string'
			),
			'iconBoxIconHoverBorderRadiusTabletLandscape' => array(
				'type' => 'string'
			),
			'iconBoxIconHoverBorderRadiusMobileLandscape' => array(
				'type' => 'string'
			),
			'iconBoxIconHoverBorderRadiusLaptop' => array(
				'type' => 'string'
			),
			'iconBoxIconHoverBorderRadiusWideScreen' => array(
				'type' => 'string'
			),
			'iconBoxIconHoverBoxShadow' => array(
				'type' => 'object'
			),
			'iconBoxIconSizeDesktop' => array(
				'type' => 'object'
			),
			'iconBoxIconSizeTablet' => array(
				'type' => 'object'
			),
			'iconBoxIconSizeMobile' => array(
				'type' => 'object'
			),
			'iconBoxIconSizeTabletLandscape' => array(
				'type' => 'object'
			),
			'iconBoxIconSizeMobileLandscape' => array(
				'type' => 'object'
			),
			'iconBoxIconSizeLaptop' => array(
				'type' => 'object'
			),
			'iconBoxIconSizeWideScreen' => array(
				'type' => 'object'
			),
			'iconBoxIconSpacingDesktop' => array(
				'type' => 'object'
			),
			'iconBoxIconSpacingTablet' => array(
				'type' => 'object'
			),
			'iconBoxIconSpacingMobile' => array(
				'type' => 'object'
			),
			'iconBoxIconSpacingTabletLandscape' => array(
				'type' => 'object'
			),
			'iconBoxIconSpacingMobileLandscape' => array(
				'type' => 'object'
			),
			'iconBoxIconSpacingLaptop' => array(
				'type' => 'object'
			),
			'iconBoxIconSpacingWideScreen' => array(
				'type' => 'object'
			),
			'iconBoxIconPaddingDesktop' => array(
				'type' => 'object'
			),
			'iconBoxIconPaddingTablet' => array(
				'type' => 'object'
			),
			'iconBoxIconPaddingMobile' => array(
				'type' => 'object'
			),
			'iconBoxIconPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'iconBoxIconPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'iconBoxIconPaddingLaptop' => array(
				'type' => 'object'
			),
			'iconBoxIconPaddingWideScreen' => array(
				'type' => 'object'
			),
			'iconBoxIconRotateDesktop' => array(
				'type' => 'object',
				'default' => array(
					'size' => 0,
					'unit' => 'deg'
				)
			),
			'iconBoxIconRotateTablet' => array(
				'type' => 'object'
			),
			'iconBoxIconRotateMobile' => array(
				'type' => 'object'
			),
			'iconBoxIconRotateTabletLandscape' => array(
				'type' => 'object'
			),
			'iconBoxIconRotateMobileLandscape' => array(
				'type' => 'object'
			),
			'iconBoxIconRotateLaptop' => array(
				'type' => 'object'
			),
			'iconBoxIconRotateWideScreen' => array(
				'type' => 'object'
			),
			'iconBoxIconVerticalAlignDesktop' => array(
				'type' => 'object'
			),
			'iconBoxIconVerticalAlignTablet' => array(
				'type' => 'object'
			),
			'iconBoxIconVerticalAlignMobile' => array(
				'type' => 'object'
			),
			'iconBoxIconVerticalAlignTabletLandscape' => array(
				'type' => 'object'
			),
			'iconBoxIconVerticalAlignMobileLandscape' => array(
				'type' => 'object'
			),
			'iconBoxIconVerticalAlignLaptop' => array(
				'type' => 'object'
			),
			'iconBoxIconVerticalAlignWideScreen' => array(
				'type' => 'object'
			),
			'iconBoxBtnPaddingDesktop' => array(
				'type' => 'object'
			),
			'iconBoxBtnPaddingTablet' => array(
				'type' => 'object'
			),
			'iconBoxBtnPaddingMobile' => array(
				'type' => 'object'
			),
			'iconBoxBtnPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'iconBoxBtnPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'iconBoxBtnPaddingLaptop' => array(
				'type' => 'object'
			),
			'iconBoxBtnPaddingWideScreen' => array(
				'type' => 'object'
			),
			'iconBoxBtnMarginDesktop' => array(
				'type' => 'object'
			),
			'iconBoxBtnMarginTablet' => array(
				'type' => 'object'
			),
			'iconBoxBtnMarginMobile' => array(
				'type' => 'object'
			),
			'iconBoxBtnMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'iconBoxBtnMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'iconBoxBtnMarginLaptop' => array(
				'type' => 'object'
			),
			'iconBoxBtnMarginWideScreen' => array(
				'type' => 'object'
			),
			'iconBoxBtnTypography' => array(
				'type' => 'object'
			),
			'iconBoxBtnIconSpacing' => array(
				'type' => 'object',
				'default' => array(
					'size' => 5,
					'unit' => 'px'
				)
			),
			'iconBoxBtnIconSizeDesktop' => array(
				'type' => 'object'
			),
			'iconBoxBtnIconSizeTablet' => array(
				'type' => 'object'
			),
			'iconBoxBtnIconSizeMobile' => array(
				'type' => 'object'
			),
			'iconBoxBtnIconSizeTabletLandscape' => array(
				'type' => 'object'
			),
			'iconBoxBtnIconSizeMobileLandscape' => array(
				'type' => 'object'
			),
			'iconBoxBtnIconSizeLaptop' => array(
				'type' => 'object'
			),
			'iconBoxBtnIconSizeWideScreen' => array(
				'type' => 'object'
			),
			'iconBoxBtnIconVerticalAlignDesktop' => array(
				'type' => 'object'
			),
			'iconBoxBtnIconVerticalAlignTablet' => array(
				'type' => 'object'
			),
			'iconBoxBtnIconVerticalAlignMobile' => array(
				'type' => 'object'
			),
			'iconBoxBtnIconVerticalAlignTabletLandscape' => array(
				'type' => 'object'
			),
			'iconBoxBtnIconVerticalAlignMobileLandscape' => array(
				'type' => 'object'
			),
			'iconBoxBtnIconVerticalAlignLaptop' => array(
				'type' => 'object'
			),
			'iconBoxBtnIconVerticalAlignWideScreen' => array(
				'type' => 'object'
			),
			'iconBoxBtnTextColor' => array(
				'type' => 'string'
			),
			'iconBoxBtnBackground' => array(
				'type' => 'object'
			),
			'iconBoxBtnBorder' => array(
				'type' => 'object'
			),
			'iconBoxBtnBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'iconBoxBtnBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'iconBoxBtnBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'iconBoxBtnBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'iconBoxBtnBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'iconBoxBtnBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'iconBoxBtnBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'iconBoxBtnBoxShadow' => array(
				'type' => 'object'
			),
			'iconBoxBtnHoverColor' => array(
				'type' => 'string'
			),
			'iconBoxBtnHoverBackground' => array(
				'type' => 'object'
			),
			'iconBoxBtnHoverBorder' => array(
				'type' => 'object'
			),
			'iconBoxBtnHoverBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'iconBoxBtnHoverBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'iconBoxBtnHoverBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'iconBoxBtnHoverBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'iconBoxBtnHoverBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'iconBoxBtnHoverBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'iconBoxBtnHoverBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'iconBoxBtnHoverBoxShadow' => array(
				'type' => 'object'
			),
			'iconBoxBtnHoverAnimation' => array(
				'type' => 'string'
			),
			'iconBoxBadgePaddingDesktop' => array(
				'type' => 'object',
				'default' => array(
					'top' => '10px',
					'right' => '10px',
					'bottom' => '10px',
					'left' => '10px'
				)
			),
			'iconBoxBadgePaddingTablet' => array(
				'type' => 'object'
			),
			'iconBoxBadgePaddingMobile' => array(
				'type' => 'object'
			),
			'iconBoxBadgePaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'iconBoxBadgePaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'iconBoxBadgePaddingLaptop' => array(
				'type' => 'object'
			),
			'iconBoxBadgePaddingWideScreen' => array(
				'type' => 'object'
			),
			'iconBoxBadgeBorder' => array(
				'type' => 'object'
			),
			'iconBoxBadgeBorderRadiusDesktop' => array(
				'type' => 'object',
				'default' => array(
					'top' => 0,
					'right' => 0,
					'bottom' => 0,
					'left' => 0
				)
			),
			'iconBoxBadgeBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'iconBoxBadgeBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'iconBoxBadgeBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'iconBoxBadgeBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'iconBoxBadgeBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'iconBoxBadgeBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'iconBoxBadgeTextColor' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'iconBoxBadgeBackground' => array(
				'type' => 'object'
			),
			'iconBoxBadgeBoxShadow' => array(
				'type' => 'object'
			),
			'iconBoxBadgeTypography' => array(
				'type' => 'object'
			),
			'useHeightWidthIcon' => array(
				'type' => 'boolean',
				'default' => false
			),
			'iconHeightDesktop' => array(
				'type' => 'object'
			),
			'iconHeightTablet' => array(
				'type' => 'object'
			),
			'iconHeightMobile' => array(
				'type' => 'object'
			),
			'iconHeightTabletLandscape' => array(
				'type' => 'object'
			),
			'iconHeightMobileLandscape' => array(
				'type' => 'object'
			),
			'iconHeightLaptop' => array(
				'type' => 'object'
			),
			'iconHeightWideScreen' => array(
				'type' => 'object'
			),
			'iconWidthDesktop' => array(
				'type' => 'object'
			),
			'iconWidthTablet' => array(
				'type' => 'object'
			),
			'iconWidthMobile' => array(
				'type' => 'object'
			),
			'iconWidthTabletLandscape' => array(
				'type' => 'object'
			),
			'iconWidthMobileLandscape' => array(
				'type' => 'object'
			),
			'iconWidthLaptop' => array(
				'type' => 'object'
			),
			'iconWidthWideScreen' => array(
				'type' => 'object'
			),
			'gkitVerticalBadge' => array(
				'type' => 'string',
				'default' => 'left'
			),
			'gkitHorizontalBadge' => array(
				'type' => 'string',
				'default' => 'top'
			),
			'gkitVerticalBadgePositionDesktop' => array(
				'type' => 'object',
				'default' => array(
					'unit' => 'px',
					'size' => 0
				)
			),
			'gkitVerticalBadgePositionTablet' => array(
				'type' => 'object'
			),
			'gkitVerticalBadgePositionMobile' => array(
				'type' => 'object'
			),
			'gkitVerticalBadgePositionTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitVerticalBadgePositionMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitVerticalBadgePositionLaptop' => array(
				'type' => 'object'
			),
			'gkitVerticalBadgePositionWideScreen' => array(
				'type' => 'object'
			),
			'gkitHorizontalBadgePositionDesktop' => array(
				'type' => 'object',
				'default' => array(
					'unit' => 'px',
					'size' => 0
				)
			),
			'gkitHorizontalBadgePositionTablet' => array(
				'type' => 'object'
			),
			'gkitHorizontalBadgePositionMobile' => array(
				'type' => 'object'
			),
			'gkitHorizontalBadgePositionTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitHorizontalBadgePositionMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitHorizontalBadgePositionLaptop' => array(
				'type' => 'object'
			),
			'gkitHorizontalBadgePositionWideScreen' => array(
				'type' => 'object'
			)
		),
		'supports' => array(
			'html' => false,
			'align' => array(
				'wide',
				'full'
			),
			'anchor' => true
		),
		'textdomain' => 'gutenkit-blocks-addon',
		'editorScript' => 'file:./index.js',
		'editorStyle' => array(
			'file:./index.css',
			'hover-animations'
		),
		'style' => array(
			'file:./style-index.css',
			'hover-animations'
		)
	),
	'image-accordion' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'gutenkit/image-accordion',
		'version' => '1.0.0',
		'title' => 'Image Accordion',
		'category' => 'gutenkit',
		'icon' => 'columns',
		'keywords' => array(
			'gkit',
			'image',
			'accordion',
			'image faq',
			'faq'
		),
		'description' => 'Image accordion block for gutenberg.',
		'example' => array(
			'preview' => true
		),
		'attributes' => array(
			'blockID' => array(
				'type' => 'string'
			),
			'blockClass' => array(
				'type' => 'string'
			),
			'blocksCSS' => array(
				'type' => 'object'
			),
			'accordionItems' => array(
				'type' => 'array',
				'default' => array(
					array(
						'isActive' => false,
						'backgroundImage' => array(
							'url' => 'placeholder'
						),
						'title' => 'Image accordion Title',
						'enableWrapLink' => false,
						'wrapLinkUrl' => array(
							
						),
						'enableButtonUrl' => false,
						'buttonUrl' => array(
							
						),
						'enableProjectLink' => false,
						'projectLink' => array(
							
						)
					),
					array(
						'isActive' => true,
						'backgroundImage' => array(
							'url' => 'placeholder'
						),
						'title' => 'Image accordion Title',
						'enableWrapLink' => false,
						'wrapLinkUrl' => array(
							
						),
						'enableButtonUrl' => false,
						'buttonUrl' => array(
							
						),
						'enableProjectLink' => false,
						'projectLink' => array(
							
						)
					),
					array(
						'isActive' => false,
						'backgroundImage' => array(
							'url' => 'placeholder'
						),
						'title' => 'Image accordion Title',
						'enableWrapLink' => false,
						'wrapLinkUrl' => array(
							
						),
						'enableButtonUrl' => false,
						'buttonUrl' => array(
							
						),
						'enableProjectLink' => false,
						'projectLink' => array(
							
						)
					)
				),
				'excludeCopy' => true
			),
			'enableBtn' => array(
				'type' => 'boolean',
				'default' => true,
				'excludeCopy' => true
			),
			'buttonLabel' => array(
				'type' => 'string',
				'default' => 'Read More',
				'excludeCopy' => true
			),
			'enablePopup' => array(
				'type' => 'boolean',
				'excludeCopy' => true
			),
			'popUpIcon' => array(
				'type' => 'object',
				'default' => array(
					'title' => 'plus',
					'src' => '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
<title>plus</title>
<path d="M32 15.345h-14.945v-14.945h-2.11v14.945h-14.945v2.11h14.945v14.945h2.11v-14.945h14.945z"></path>
</svg>'
				),
				'excludeCopy' => true
			),
			'enableProjectLink' => array(
				'type' => 'boolean',
				'default' => false,
				'excludeCopy' => true
			),
			'projectLinkIcon' => array(
				'type' => 'object',
				'default' => array(
					'title' => 'link',
					'src' => '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
<title>link</title>
<path d="M17.091 20.797c-1.509 0-3.017-0.574-4.166-1.723-0.312-0.312-0.312-0.819 0-1.131s0.819-0.312 1.131 0c1.673 1.673 4.396 1.673 6.069 0l5.818-5.818c1.673-1.673 1.673-4.396 0-6.069s-4.395-1.673-6.069 0l-4.909 4.909c-0.312 0.312-0.819 0.312-1.131 0s-0.312-0.819 0-1.131l4.909-4.909c2.297-2.297 6.034-2.297 8.331 0s2.297 6.034 0 8.331l-5.818 5.818c-1.148 1.148-2.657 1.723-4.166 1.723zM7.491 30.397c-1.509 0-3.017-0.574-4.166-1.723-2.297-2.297-2.297-6.034 0-8.331l5.818-5.818c2.297-2.297 6.034-2.297 8.331 0 0.312 0.312 0.312 0.819 0 1.131s-0.819 0.312-1.131 0c-1.673-1.673-4.396-1.673-6.069 0l-5.818 5.818c-1.673 1.673-1.673 4.395 0 6.069s4.395 1.673 6.069 0l4.909-4.909c0.312-0.312 0.819-0.312 1.131 0s0.312 0.819 0 1.131l-4.909 4.909c-1.148 1.148-2.657 1.723-4.166 1.723z"></path>
</svg>'
				),
				'excludeCopy' => true
			),
			'accordionStyle' => array(
				'type' => 'string',
				'default' => 'horizontal',
				'excludeCopy' => true
			),
			'accordionStyleDesktop' => array(
				'type' => 'string'
			),
			'accordionStyleTablet' => array(
				'type' => 'string'
			),
			'accordionStyleMobile' => array(
				'type' => 'string'
			),
			'accordionStyleTabletLandscape' => array(
				'type' => 'string'
			),
			'accordionStyleMobileLandscape' => array(
				'type' => 'string'
			),
			'accordionStyleLaptop' => array(
				'type' => 'string'
			),
			'accordionStyleWideScreen' => array(
				'type' => 'string'
			),
			'accordionDesktop' => array(
				'type' => 'string',
				'default' => 'horizontal',
				'excludeCopy' => true
			),
			'activeEvent' => array(
				'type' => 'string',
				'default' => 'click',
				'excludeCopy' => true
			),
			'minHeightDesktop' => array(
				'type' => 'object',
				'default' => array(
					'size' => 460,
					'unit' => 'px'
				)
			),
			'minHeightTablet' => array(
				'type' => 'object'
			),
			'minHeightMobile' => array(
				'type' => 'object'
			),
			'minHeightTabletLandscape' => array(
				'type' => 'object'
			),
			'minHeightMobileLandscape' => array(
				'type' => 'object'
			),
			'minHeightLaptop' => array(
				'type' => 'object'
			),
			'minHeightWideScreen' => array(
				'type' => 'object'
			),
			'gutterDesktop' => array(
				'type' => 'object'
			),
			'gutterTablet' => array(
				'type' => 'object'
			),
			'gutterMobile' => array(
				'type' => 'object'
			),
			'gutterTabletLandscape' => array(
				'type' => 'object'
			),
			'gutterMobileLandscape' => array(
				'type' => 'object'
			),
			'gutterLaptop' => array(
				'type' => 'object'
			),
			'gutterWideScreen' => array(
				'type' => 'object'
			),
			'itemBorderDesktop' => array(
				'type' => 'object',
				'default' => array(
					'color' => '#5432',
					'style' => 'solid',
					'width' => '1px'
				)
			),
			'itemBorderTablet' => array(
				'type' => 'object'
			),
			'itemBorderMobile' => array(
				'type' => 'object'
			),
			'itemBorderTabletLandscape' => array(
				'type' => 'object'
			),
			'itemBorderMobileLandscape' => array(
				'type' => 'object'
			),
			'itemBorderLaptop' => array(
				'type' => 'object'
			),
			'itemBorderWideScreen' => array(
				'type' => 'object'
			),
			'bgActiveColor' => array(
				'type' => 'object'
			),
			'titleMargin' => array(
				'type' => 'object'
			),
			'titleColor' => array(
				'type' => 'string'
			),
			'titleTypography' => array(
				'type' => 'object'
			),
			'contentAlignDesktop' => array(
				'type' => 'string'
			),
			'contentAlignTablet' => array(
				'type' => 'string'
			),
			'contentAlignMobile' => array(
				'type' => 'string'
			),
			'contentAlignTabletLandscape' => array(
				'type' => 'string'
			),
			'contentAlignMobileLandscape' => array(
				'type' => 'string'
			),
			'contentAlignLaptop' => array(
				'type' => 'string'
			),
			'contentAlignWideScreen' => array(
				'type' => 'string'
			),
			'contentPaddingDesktop' => array(
				'type' => 'object'
			),
			'contentPaddingTablet' => array(
				'type' => 'object'
			),
			'contentPaddingMobile' => array(
				'type' => 'object'
			),
			'contentPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'contentPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'contentPaddingLaptop' => array(
				'type' => 'object'
			),
			'contentPaddingWideScreen' => array(
				'type' => 'object'
			),
			'contentPositionDesktop' => array(
				'type' => 'string',
				'default' => 'center'
			),
			'contentPositionTablet' => array(
				'type' => 'string'
			),
			'contentPositionMobile' => array(
				'type' => 'string'
			),
			'contentPositionTabletLandscape' => array(
				'type' => 'string'
			),
			'contentPositionMobileLandscape' => array(
				'type' => 'string'
			),
			'contentPositionLaptop' => array(
				'type' => 'string'
			),
			'contentPositionWideScreen' => array(
				'type' => 'string'
			),
			'btnPaddingDesktop' => array(
				'type' => 'object'
			),
			'btnPaddingTablet' => array(
				'type' => 'object'
			),
			'btnPaddingMobile' => array(
				'type' => 'object'
			),
			'btnPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'btnPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'btnPaddingLaptop' => array(
				'type' => 'object'
			),
			'btnPaddingWideScreen' => array(
				'type' => 'object'
			),
			'btnTypography' => array(
				'type' => 'object'
			),
			'btnTextColor' => array(
				'type' => 'string'
			),
			'btnBackground' => array(
				'type' => 'object'
			),
			'btnBorder' => array(
				'type' => 'object'
			),
			'btnBorderRadius' => array(
				'type' => 'object'
			),
			'btnTextColorHover' => array(
				'type' => 'string'
			),
			'btnBackgroundHover' => array(
				'type' => 'object'
			),
			'btnBorderHover' => array(
				'type' => 'object'
			),
			'btnBorderRadiusHover' => array(
				'type' => 'object'
			),
			'iconWidth' => array(
				'type' => 'object'
			),
			'gkitIconSize' => array(
				'type' => 'string'
			),
			'iconSpace' => array(
				'type' => 'object',
				'default' => array(
					'size' => 10,
					'unit' => 'px'
				)
			),
			'iconMargin' => array(
				'type' => 'object'
			),
			'iconBorderRadiusDesktop' => array(
				'type' => 'object',
				'default' => array(
					'top' => '50%',
					'right' => '50%',
					'bottom' => '50%',
					'left' => '50%'
				)
			),
			'iconBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'iconBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'iconBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'iconBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'iconBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'iconBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'popupIconColor' => array(
				'type' => 'string'
			),
			'popupIconBorderColor' => array(
				'type' => 'string'
			),
			'popupIconBorderWidth' => array(
				'type' => 'object'
			),
			'linkIconColor' => array(
				'type' => 'string'
			),
			'linkIconBorderColor' => array(
				'type' => 'string'
			),
			'linkIconBorderWidth' => array(
				'type' => 'object'
			),
			'popupIconColorHover' => array(
				'type' => 'string'
			),
			'popupIconBorderColorHover' => array(
				'type' => 'string'
			),
			'linkIconColorHover' => array(
				'type' => 'string'
			),
			'linkIconBorderColorHover' => array(
				'type' => 'string'
			),
			'iconBackground' => array(
				'type' => 'string'
			),
			'iconBackgroundHover' => array(
				'type' => 'string'
			)
		),
		'supports' => array(
			'html' => false,
			'align' => array(
				'wide',
				'full'
			),
			'anchor' => true
		),
		'textdomain' => 'gutenkit-blocks-addon',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => array(
			'file:./style-index.css',
			'fancybox'
		),
		'viewScript' => 'file:./frontend.js',
		'script' => array(
			'fancybox'
		)
	),
	'image-box' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'gutenkit/image-box',
		'version' => '1.0.0',
		'title' => 'Image Box',
		'category' => 'gutenkit',
		'icon' => 'cover-image',
		'keywords' => array(
			'gkit',
			'image',
			'image box',
			'box'
		),
		'description' => 'Image box block for gutenberg.',
		'example' => array(
			'preview' => true
		),
		'attributes' => array(
			'blockID' => array(
				'type' => 'string'
			),
			'blockClass' => array(
				'type' => 'string'
			),
			'blocksCSS' => array(
				'type' => 'object'
			),
			'image' => array(
				'type' => 'object',
				'default' => array(
					'url' => 'placeholder'
				),
				'excludeCopy' => true
			),
			'imageBoxStyle' => array(
				'type' => 'string',
				'default' => 'simple-card',
				'excludeCopy' => true
			),
			'enableLink' => array(
				'type' => 'boolean',
				'default' => false,
				'excludeCopy' => true
			),
			'websiteLink' => array(
				'type' => 'object',
				'excludeCopy' => true
			),
			'titleText' => array(
				'type' => 'string',
				'default' => 'This is the heading',
				'excludeCopy' => true
			),
			'frontTitleIconsSwitch' => array(
				'type' => 'boolean',
				'default' => true,
				'excludeCopy' => true
			),
			'frontTitleIcons' => array(
				'type' => 'object',
				'default' => array(
					'title' => 'review',
					'src' => '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="34" height="32" viewBox="0 0 34 32">
<title>review</title>
<path d="M25.088 19.712c0.288 0 0.512-0.224 0.512-0.512v-4.48c0-1.024-0.608-1.984-1.536-2.4l-4-1.824c-0.192-0.096-0.32-0.288-0.32-0.512v-1.344c0.992-0.768 1.6-1.984 1.6-3.328v-2.144c0-1.696-0.576-2.848-0.576-2.912-0.128-0.16-0.288-0.256-0.48-0.256h-4.032c-0.48 0-0.96 0.16-1.312 0.48 0 0-0.032 0-0.032 0-0.704 0.064-2.048 0.64-2.048 2.4v2.432c0 1.344 0.64 2.528 1.6 3.328v1.344c0 0.224-0.128 0.416-0.32 0.512l-4 1.824c-0.928 0.416-1.536 1.376-1.536 2.4v4.48c0 0.288 0.224 0.512 0.512 0.512s0.512-0.224 0.512-0.512v-1.408l1.664 0.672v2.112l-1.504 0.224c-0.544 0.096-0.992 0.448-1.184 0.992-0.16 0.544-0.032 1.12 0.384 1.504l2.976 2.912-0.704 4.096c-0.096 0.544 0.128 1.088 0.576 1.44 0.448 0.32 1.056 0.384 1.536 0.096l3.68-1.952 3.68 1.952c0.224 0.128 0.448 0.16 0.672 0.16 0.288 0 0.608-0.096 0.864-0.288 0.448-0.32 0.672-0.864 0.576-1.44l-0.704-4.096 2.976-2.912c0.416-0.384 0.544-0.96 0.384-1.504s-0.64-0.928-1.184-0.992l-1.408-0.192v-2.016l1.664-0.32v0.96c0 0.288 0.224 0.512 0.512 0.512zM13.824 2.88c0-0.512 0.16-0.864 0.448-1.12 0.064 0.128 0.16 0.224 0.288 0.288 0.256 0.096 0.544-0.032 0.64-0.32 0.16-0.448 0.576-0.736 1.056-0.736h3.712c0.128 0.352 0.32 0.992 0.352 1.824-0.672 0.224-2.432 0.672-4.416-0.16-0.224-0.096-0.48 0-0.608 0.192 0 0-0.512 0.8-1.44 1.216l-0.032-1.184zM13.824 5.312v-0.16c1.024-0.32 1.696-1.024 2.048-1.44 1.888 0.672 3.552 0.416 4.448 0.16v1.44c0 1.792-1.44 3.232-3.232 3.232s-3.264-1.44-3.264-3.232zM19.616 11.392l0.032 0.032c-0.32 1.152-1.376 1.952-2.592 1.952s-2.272-0.8-2.592-1.952l0.032-0.032c0.544-0.256 0.928-0.8 0.928-1.44v-0.736c0.512 0.224 1.056 0.32 1.632 0.32s1.12-0.128 1.632-0.32v0.736c0.032 0.64 0.384 1.184 0.928 1.44zM24.192 21.792c0.192 0.032 0.32 0.128 0.384 0.32 0.064 0.16 0 0.352-0.128 0.48l-3.168 3.072c-0.128 0.128-0.16 0.288-0.128 0.448l0.736 4.352c0.032 0.16-0.032 0.352-0.192 0.448s-0.32 0.128-0.48 0.032l-3.904-2.048c-0.064-0.032-0.16-0.064-0.224-0.064s-0.16 0.032-0.224 0.064l-3.904 2.048c-0.16 0.096-0.352 0.064-0.48-0.032-0.16-0.096-0.224-0.288-0.192-0.448l0.736-4.352c0.032-0.16-0.032-0.32-0.128-0.448l-3.168-3.072c-0.128-0.128-0.16-0.288-0.128-0.48 0.064-0.16 0.192-0.288 0.384-0.32l4.384-0.64c0.16-0.032 0.288-0.128 0.384-0.288l1.952-3.968c0.064-0.16 0.224-0.256 0.416-0.256s0.32 0.096 0.416 0.256l1.952 3.968c0.064 0.16 0.224 0.256 0.384 0.288l4.32 0.64zM24.576 17.184l-1.664 0.32v-1.504c0-0.288-0.224-0.512-0.512-0.512s-0.512 0.224-0.512 0.512v2.144c0 0 0 0 0 0v2.304l-1.696-0.256-1.856-3.744c-0.256-0.512-0.736-0.8-1.312-0.8-0.544 0-1.056 0.32-1.312 0.8l-1.856 3.744-1.696 0.256v-2.304c0 0 0 0 0 0v-2.144c0-0.288-0.224-0.512-0.512-0.512s-0.512 0.224-0.512 0.512v1.408l-1.664-0.672v-2.016c0-0.64 0.384-1.216 0.96-1.504l3.040-1.376c0.48 1.504 1.888 2.528 3.52 2.528s3.008-1.024 3.52-2.528l3.040 1.376c0.576 0.256 0.96 0.864 0.96 1.504l0.064 2.464zM10.272 26.496c-0.192-0.192-0.512-0.192-0.704 0l-1.024 1.024c-0.128 0.128-0.16 0.288-0.128 0.448l0.512 2.912c0 0.064-0.032 0.128-0.064 0.128-0.032 0.032-0.096 0.032-0.16 0l-2.624-1.408c-0.16-0.064-0.32-0.064-0.48 0l-2.624 1.376c-0.064 0.032-0.128 0-0.16 0-0.032-0.032-0.064-0.064-0.064-0.128l0.512-2.912c0.032-0.16-0.032-0.32-0.128-0.448l-2.112-2.048c-0.064-0.064-0.032-0.096-0.032-0.128s0.032-0.096 0.128-0.096l2.912-0.416c0.16-0.032 0.288-0.128 0.384-0.288l1.312-2.656c0.032-0.064 0.096-0.064 0.128-0.064s0.096 0 0.128 0.064l1.152 2.304c0.128 0.256 0.416 0.352 0.672 0.224s0.352-0.416 0.224-0.672l-1.152-2.304c-0.192-0.384-0.576-0.64-1.024-0.64s-0.832 0.256-1.024 0.64l-1.184 2.4-2.656 0.384c-0.448 0.064-0.8 0.352-0.928 0.768s-0.032 0.864 0.288 1.152l1.92 1.888-0.448 2.656c-0.064 0.416 0.096 0.864 0.448 1.12 0.192 0.16 0.448 0.224 0.672 0.224 0.192 0 0.352-0.032 0.544-0.128l2.368-1.248 2.368 1.248c0.384 0.192 0.832 0.16 1.184-0.096s0.512-0.672 0.448-1.12l-0.448-2.656 0.864-0.832c0.192-0.16 0.192-0.48 0-0.672zM34.080 24.992c-0.128-0.416-0.48-0.704-0.928-0.768l-2.656-0.384-1.184-2.4c-0.192-0.384-0.576-0.64-1.024-0.64s-0.832 0.256-1.024 0.64l-1.152 2.304c-0.128 0.256-0.032 0.544 0.224 0.672s0.544 0.032 0.672-0.224l1.152-2.304c0.032-0.064 0.096-0.064 0.128-0.064s0.096 0 0.128 0.064l1.312 2.656c0.064 0.16 0.224 0.256 0.384 0.288l2.912 0.416c0.064 0 0.096 0.064 0.128 0.096 0 0.032 0 0.096-0.032 0.128l-2.112 2.048c-0.128 0.128-0.16 0.288-0.128 0.448l0.512 2.912c0 0.064-0.032 0.128-0.064 0.128-0.032 0.032-0.096 0.032-0.16 0l-2.624-1.376c-0.16-0.064-0.32-0.064-0.48 0l-2.624 1.376c-0.064 0.032-0.128 0-0.16 0s-0.064-0.064-0.064-0.128l0.512-2.912c0.032-0.16-0.032-0.32-0.128-0.448l-1.024-1.024c-0.192-0.192-0.512-0.192-0.704 0s-0.192 0.512 0 0.704l0.864 0.832-0.448 2.656c-0.064 0.416 0.096 0.864 0.448 1.12s0.8 0.288 1.184 0.096l2.368-1.248 2.368 1.248c0.16 0.096 0.352 0.128 0.544 0.128 0.224 0 0.48-0.064 0.672-0.224 0.352-0.256 0.512-0.672 0.448-1.12l-0.448-2.656 1.92-1.888c0.32-0.32 0.416-0.768 0.288-1.152z"></path>
</svg>
'
				)
			),
			'frontTitleIconPosition' => array(
				'type' => 'string',
				'default' => 'left'
			),
			'titleSize' => array(
				'type' => 'string',
				'default' => 'h3'
			),
			'descriptionText' => array(
				'type' => 'string',
				'default' => 'Click edit  to change this text. Lorem ipsum dolor sit amet, cctetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.',
				'excludeCopy' => true
			),
			'contentTextAlignDesktop' => array(
				'type' => 'string',
				'default' => 'center'
			),
			'contentTextAlignTablet' => array(
				'type' => 'string'
			),
			'contentTextAlignMobile' => array(
				'type' => 'string'
			),
			'contentTextAlignTabletLandscape' => array(
				'type' => 'string'
			),
			'contentTextAlignMobileLandscape' => array(
				'type' => 'string'
			),
			'contentTextAlignLaptop' => array(
				'type' => 'string'
			),
			'contentTextAlignWideScreen' => array(
				'type' => 'string'
			),
			'enableBtn' => array(
				'type' => 'boolean',
				'default' => true
			),
			'btnText' => array(
				'type' => 'string',
				'default' => 'Learn more',
				'excludeCopy' => true
			),
			'btnUrl' => array(
				'type' => 'object',
				'default' => array(
					'url' => '#'
				),
				'excludeCopy' => true
			),
			'iconsSwitch' => array(
				'type' => 'boolean',
				'default' => false,
				'excludeCopy' => true
			),
			'icons' => array(
				'type' => 'object',
				'excludeCopy' => true
			),
			'iconAlign' => array(
				'type' => 'string',
				'default' => 'left'
			),
			'imageFloatingBoxHeightDesktop' => array(
				'type' => 'object',
				'default' => array(
					'unit' => 'px',
					'size' => 90
				)
			),
			'imageFloatingBoxHeightTablet' => array(
				'type' => 'object'
			),
			'imageFloatingBoxHeightMobile' => array(
				'type' => 'object'
			),
			'imageFloatingBoxHeightTabletLandscape' => array(
				'type' => 'object'
			),
			'imageFloatingBoxHeightMobileLandscape' => array(
				'type' => 'object'
			),
			'imageFloatingBoxHeightLaptop' => array(
				'type' => 'object'
			),
			'imageFloatingBoxHeightWideScreen' => array(
				'type' => 'object'
			),
			'imageFloatingBoxIconColor' => array(
				'type' => 'string'
			),
			'imageFloatingBoxHoverHeightDesktop' => array(
				'type' => 'object',
				'default' => array(
					'unit' => 'px',
					'size' => 250
				)
			),
			'imageFloatingBoxHoverHeightTablet' => array(
				'type' => 'object'
			),
			'imageFloatingBoxHoverHeightMobile' => array(
				'type' => 'object'
			),
			'imageFloatingBoxHoverHeightTabletLandscape' => array(
				'type' => 'object'
			),
			'imageFloatingBoxHoverHeightMobileLandscape' => array(
				'type' => 'object'
			),
			'imageFloatingBoxHoverHeightLaptop' => array(
				'type' => 'object'
			),
			'imageFloatingBoxHoverHeightWideScreen' => array(
				'type' => 'object'
			),
			'imageFloatingBoxIconColorHover' => array(
				'type' => 'string',
				'default' => '#fff'
			),
			'imageFloatingBoxIconFontSizeDesktop' => array(
				'type' => 'object',
				'default' => array(
					'unit' => 'px',
					'size' => 26
				)
			),
			'imageFloatingBoxIconFontSizeTablet' => array(
				'type' => 'object'
			),
			'imageFloatingBoxIconFontSizeMobile' => array(
				'type' => 'object'
			),
			'imageFloatingBoxIconFontSizeTabletLandscape' => array(
				'type' => 'object'
			),
			'imageFloatingBoxIconFontSizeMobileLandscape' => array(
				'type' => 'object'
			),
			'imageFloatingBoxIconFontSizeLaptop' => array(
				'type' => 'object'
			),
			'imageFloatingBoxIconFontSizeWideScreen' => array(
				'type' => 'object'
			),
			'imageFloatingBoxMarginTopDesktop' => array(
				'type' => 'object',
				'default' => array(
					'unit' => 'px',
					'size' => -40
				)
			),
			'imageFloatingBoxMarginTopTablet' => array(
				'type' => 'object'
			),
			'imageFloatingBoxMarginTopMobile' => array(
				'type' => 'object'
			),
			'imageFloatingBoxMarginTopTabletLandscape' => array(
				'type' => 'object'
			),
			'imageFloatingBoxMarginTopMobileLandscape' => array(
				'type' => 'object'
			),
			'imageFloatingBoxMarginTopLaptop' => array(
				'type' => 'object'
			),
			'imageFloatingBoxMarginTopWideScreen' => array(
				'type' => 'object'
			),
			'imageFloatingBoxWidthDesktop' => array(
				'type' => 'object',
				'default' => array(
					'unit' => '%',
					'size' => 90
				)
			),
			'imageFloatingBoxWidthTablet' => array(
				'type' => 'object'
			),
			'imageFloatingBoxWidthMobile' => array(
				'type' => 'object'
			),
			'imageFloatingBoxWidthTabletLandscape' => array(
				'type' => 'object'
			),
			'imageFloatingBoxWidthMobileLandscape' => array(
				'type' => 'object'
			),
			'imageFloatingBoxWidthLaptop' => array(
				'type' => 'object'
			),
			'imageFloatingBoxWidthWideScreen' => array(
				'type' => 'object'
			),
			'imageFloatingBoxBackground' => array(
				'type' => 'object'
			),
			'imageFloatingBoxShadow' => array(
				'type' => 'object'
			),
			'imageClassicCurvesWidthDesktop' => array(
				'type' => 'object',
				'default' => array(
					'unit' => '%',
					'size' => 100
				)
			),
			'imageClassicCurvesWidthTablet' => array(
				'type' => 'object'
			),
			'imageClassicCurvesWidthMobile' => array(
				'type' => 'object'
			),
			'imageClassicCurvesWidthTabletLandscape' => array(
				'type' => 'object'
			),
			'imageClassicCurvesWidthMobileLandscape' => array(
				'type' => 'object'
			),
			'imageClassicCurvesWidthLaptop' => array(
				'type' => 'object'
			),
			'imageClassicCurvesWidthWideScreen' => array(
				'type' => 'object'
			),
			'imageClassicCurvesMarginDesktop' => array(
				'type' => 'object',
				'default' => array(
					'unit' => 'px',
					'size' => -20
				)
			),
			'imageClassicCurvesMarginTablet' => array(
				'type' => 'object'
			),
			'imageClassicCurvesMarginMobile' => array(
				'type' => 'object'
			),
			'imageClassicCurvesMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'imageClassicCurvesMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'imageClassicCurvesMarginLaptop' => array(
				'type' => 'object'
			),
			'imageClassicCurvesMarginWideScreen' => array(
				'type' => 'object'
			),
			'borderHoverHeightDesktop' => array(
				'type' => 'object'
			),
			'borderHoverHeightTablet' => array(
				'type' => 'object'
			),
			'borderHoverHeightMobile' => array(
				'type' => 'object'
			),
			'borderHoverHeightTabletLandscape' => array(
				'type' => 'object'
			),
			'borderHoverHeightMobileLandscape' => array(
				'type' => 'object'
			),
			'borderHoverHeightLaptop' => array(
				'type' => 'object'
			),
			'borderHoverHeightWideScreen' => array(
				'type' => 'object'
			),
			'borderHoverBackground' => array(
				'type' => 'object'
			),
			'borderHoverBackgroundDirection' => array(
				'type' => 'string',
				'default' => 'right'
			),
			'imageSideLineBorder' => array(
				'type' => 'object'
			),
			'imageSideLineBorderHover' => array(
				'type' => 'object'
			),
			'imageShadowLeftLineWidth' => array(
				'type' => 'object',
				'default' => array(
					'unit' => 'px',
					'size' => 10
				)
			),
			'imageShadowLeftLineShadow' => array(
				'type' => 'object'
			),
			'imageShadowLeftLineBackground' => array(
				'type' => 'object'
			),
			'imageShadowRightLineWidth' => array(
				'type' => 'object',
				'default' => array(
					'unit' => 'px',
					'size' => 10
				)
			),
			'imageShadowRightLineShadow' => array(
				'type' => 'object'
			),
			'imageShadowRightLineBackground' => array(
				'type' => 'object'
			),
			'borderRadiusDesktop' => array(
				'type' => 'object'
			),
			'borderRadiusTablet' => array(
				'type' => 'object'
			),
			'borderRadiusMobile' => array(
				'type' => 'object'
			),
			'borderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'borderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'borderRadiusLaptop' => array(
				'type' => 'object'
			),
			'borderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'paddingDesktop' => array(
				'type' => 'object'
			),
			'paddingTablet' => array(
				'type' => 'object'
			),
			'paddingMobile' => array(
				'type' => 'object'
			),
			'paddingTabletLandscape' => array(
				'type' => 'object'
			),
			'paddingMobileLandscape' => array(
				'type' => 'object'
			),
			'paddingLaptop' => array(
				'type' => 'object'
			),
			'paddingWideScreen' => array(
				'type' => 'object'
			),
			'imageScaleOnHover' => array(
				'type' => 'object',
				'default' => array(
					'size' => 1.1
				)
			),
			'enableHeightWidth' => array(
				'type' => 'boolean',
				'default' => false
			),
			'gkitImageWidthDesktop' => array(
				'type' => 'object'
			),
			'gkitImageWidthTablet' => array(
				'type' => 'object'
			),
			'gkitImageWidthMobile' => array(
				'type' => 'object'
			),
			'gkitImageWidthTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitImageWidthMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitImageWidthLaptop' => array(
				'type' => 'object'
			),
			'gkitImageWidthWideScreen' => array(
				'type' => 'object'
			),
			'gkitImageHeightDesktop' => array(
				'type' => 'object'
			),
			'gkitImageHeightTablet' => array(
				'type' => 'object'
			),
			'gkitImageHeightMobile' => array(
				'type' => 'object'
			),
			'gkitImageHeightTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitImageHeightMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitImageHeightLaptop' => array(
				'type' => 'object'
			),
			'gkitImageHeightWideScreen' => array(
				'type' => 'object'
			),
			'imageBorder' => array(
				'type' => 'object'
			),
			'imageBoxShadow' => array(
				'type' => 'object'
			),
			'containerBorderGroup' => array(
				'type' => 'object'
			),
			'containerBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'containerBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'containerBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'containerBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'containerBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'containerBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'containerBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'containerBackground' => array(
				'type' => 'object'
			),
			'containerSpacingDesktop' => array(
				'type' => 'object'
			),
			'containerSpacingTablet' => array(
				'type' => 'object'
			),
			'containerSpacingMobile' => array(
				'type' => 'object'
			),
			'containerSpacingTabletLandscape' => array(
				'type' => 'object'
			),
			'containerSpacingMobileLandscape' => array(
				'type' => 'object'
			),
			'containerSpacingLaptop' => array(
				'type' => 'object'
			),
			'containerSpacingWideScreen' => array(
				'type' => 'object'
			),
			'containershadowGroup' => array(
				'type' => 'object'
			),
			'titleBottomSpaceDesktop' => array(
				'type' => 'object',
				'default' => array(
					'top' => '0px',
					'right' => '0px',
					'bottom' => '0px',
					'left' => '0px'
				)
			),
			'titleBottomSpaceTablet' => array(
				'type' => 'object'
			),
			'titleBottomSpaceMobile' => array(
				'type' => 'object'
			),
			'titleBottomSpaceTabletLandscape' => array(
				'type' => 'object'
			),
			'titleBottomSpaceMobileLandscape' => array(
				'type' => 'object'
			),
			'titleBottomSpaceLaptop' => array(
				'type' => 'object'
			),
			'titleBottomSpaceWideScreen' => array(
				'type' => 'object'
			),
			'titleTypography' => array(
				'type' => 'object'
			),
			'headingColor' => array(
				'type' => 'string',
				'default' => '#000'
			),
			'headingColorHover' => array(
				'type' => 'string',
				'default' => '#2575fc'
			),
			'descriptionBottomSpaceDesktop' => array(
				'type' => 'object',
				'default' => array(
					'top' => '0px',
					'right' => '0px',
					'bottom' => '14px',
					'left' => '0px'
				)
			),
			'descriptionBottomSpaceTablet' => array(
				'type' => 'object'
			),
			'descriptionBottomSpaceMobile' => array(
				'type' => 'object'
			),
			'descriptionBottomSpaceTabletLandscape' => array(
				'type' => 'object'
			),
			'descriptionBottomSpaceMobileLandscape' => array(
				'type' => 'object'
			),
			'descriptionBottomSpaceLaptop' => array(
				'type' => 'object'
			),
			'descriptionBottomSpaceWideScreen' => array(
				'type' => 'object'
			),
			'descriptionTypography' => array(
				'type' => 'object'
			),
			'descriptionColor' => array(
				'type' => 'string'
			),
			'descriptionColorHover' => array(
				'type' => 'string'
			),
			'textPaddingDesktop' => array(
				'type' => 'object'
			),
			'textPaddingTablet' => array(
				'type' => 'object'
			),
			'textPaddingMobile' => array(
				'type' => 'object'
			),
			'textPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'textPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'textPaddingLaptop' => array(
				'type' => 'object'
			),
			'textPaddingWideScreen' => array(
				'type' => 'object'
			),
			'buttonTypography' => array(
				'type' => 'object'
			),
			'btnIconFontSizeDesktop' => array(
				'type' => 'object'
			),
			'btnIconFontSizeTablet' => array(
				'type' => 'object'
			),
			'btnIconFontSizeMobile' => array(
				'type' => 'object'
			),
			'btnIconFontSizeTabletLandscape' => array(
				'type' => 'object'
			),
			'btnIconFontSizeMobileLandscape' => array(
				'type' => 'object'
			),
			'btnIconFontSizeLaptop' => array(
				'type' => 'object'
			),
			'btnIconFontSizeWideScreen' => array(
				'type' => 'object'
			),
			'btnIconSpacing' => array(
				'type' => 'object',
				'default' => array(
					'size' => 5,
					'unit' => 'px'
				)
			),
			'buttonTextColor' => array(
				'type' => 'string'
			),
			'btnBackgroundGroup' => array(
				'type' => 'object'
			),
			'buttonBorder' => array(
				'type' => 'object'
			),
			'btnBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'btnBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'btnBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'btnBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'btnBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'btnBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'btnBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'buttonBoxShadow' => array(
				'type' => 'object'
			),
			'btnHoverColor' => array(
				'type' => 'string'
			),
			'btnBackgroundHoverGroup' => array(
				'type' => 'object'
			),
			'buttonBorderHover' => array(
				'type' => 'object'
			),
			'btnHoverBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'btnHoverBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'btnHoverBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'btnHoverBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'btnHoverBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'btnHoverBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'btnHoverBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'buttonBoxShadowHover' => array(
				'type' => 'object'
			)
		),
		'supports' => array(
			'html' => false,
			'align' => array(
				'wide',
				'full'
			),
			'anchor' => true
		),
		'textdomain' => 'gutenkit-blocks-addon',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css'
	),
	'image-comparison' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'gutenkit/image-comparison',
		'version' => '1.0.0',
		'title' => 'Image Comparison',
		'category' => 'gutenkit',
		'keywords' => array(
			'gkit',
			'image',
			'comparison',
			'compare',
			'image comparison',
			'image compare'
		),
		'description' => 'Image comparison block for gutenberg.',
		'example' => array(
			'preview' => true
		),
		'attributes' => array(
			'blockID' => array(
				'type' => 'string'
			),
			'blockClass' => array(
				'type' => 'string'
			),
			'blocksCSS' => array(
				'type' => 'object'
			),
			'gkitImageComparisonStyle' => array(
				'type' => 'string',
				'default' => 'vertical'
			),
			'gkitComparisonBeforeImage' => array(
				'type' => 'object',
				'default' => array(
					'url' => 'placeholder'
				)
			),
			'handleLabelPosition' => array(
				'type' => 'object'
			),
			'gkitImageComparisonBeforeLabel' => array(
				'type' => 'string',
				'default' => 'Before'
			),
			'gkitComparisonAfterImage' => array(
				'type' => 'object',
				'default' => array(
					'url' => 'placeholder'
				)
			),
			'gkitImageComparisonAfterLabel' => array(
				'type' => 'string',
				'default' => 'After'
			),
			'gkitImageComparisonOffset' => array(
				'type' => 'object',
				'default' => array(
					'size' => 50,
					'unit' => '%'
				)
			),
			'gkitChooseLabelOption' => array(
				'type' => 'string',
				'default' => 'labelHover'
			),
			'gkitShowHandler' => array(
				'type' => 'boolean',
				'default' => true
			),
			'gkitComparisonImageOverlay' => array(
				'type' => 'boolean',
				'default' => false
			),
			'gkitComparisonImageHover' => array(
				'type' => 'boolean',
				'default' => false
			),
			'gkitComparisonImageClickToMove' => array(
				'type' => 'boolean',
				'default' => true
			),
			'gkitBeforeLabelPositionYDesktop' => array(
				'type' => 'object'
			),
			'gkitBeforeLabelPositionYTablet' => array(
				'type' => 'object'
			),
			'gkitBeforeLabelPositionYMobile' => array(
				'type' => 'object'
			),
			'gkitBeforeLabelPositionYTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitBeforeLabelPositionYMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitBeforeLabelPositionYLaptop' => array(
				'type' => 'object'
			),
			'gkitBeforeLabelPositionYWideScreen' => array(
				'type' => 'object'
			),
			'gkitBeforeLabelPositionXDesktop' => array(
				'type' => 'object'
			),
			'gkitBeforeLabelPositionXTablet' => array(
				'type' => 'object'
			),
			'gkitBeforeLabelPositionXMobile' => array(
				'type' => 'object'
			),
			'gkitBeforeLabelPositionXTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitBeforeLabelPositionXMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitBeforeLabelPositionXLaptop' => array(
				'type' => 'object'
			),
			'gkitBeforeLabelPositionXWideScreen' => array(
				'type' => 'object'
			),
			'gkitAfterLabelPositionYDesktop' => array(
				'type' => 'object'
			),
			'gkitAfterLabelPositionYTablet' => array(
				'type' => 'object'
			),
			'gkitAfterLabelPositionYMobile' => array(
				'type' => 'object'
			),
			'gkitAfterLabelPositionYTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitAfterLabelPositionYMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitAfterLabelPositionYLaptop' => array(
				'type' => 'object'
			),
			'gkitAfterLabelPositionYWideScreen' => array(
				'type' => 'object'
			),
			'gkitAfterLabelPositionXDesktop' => array(
				'type' => 'object'
			),
			'gkitAfterLabelPositionXTablet' => array(
				'type' => 'object'
			),
			'gkitAfterLabelPositionXMobile' => array(
				'type' => 'object'
			),
			'gkitAfterLabelPositionXTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitAfterLabelPositionXMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitAfterLabelPositionXLaptop' => array(
				'type' => 'object'
			),
			'gkitAfterLabelPositionXWideScreen' => array(
				'type' => 'object'
			),
			'gkitBeforeLabelColor' => array(
				'type' => 'string'
			),
			'gkitAfterLabelColor' => array(
				'type' => 'string'
			),
			'gkitLabelTypography' => array(
				'type' => 'object'
			),
			'gkitBeforeLabelBackground' => array(
				'type' => 'object',
				'default' => '#ffffff'
			),
			'gkitBeforeLabelBorderGroup' => array(
				'type' => 'object'
			),
			'gkitBeforeLabelBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'gkitBeforeLabelBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'gkitBeforeLabelBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'gkitBeforeLabelBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitBeforeLabelBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitBeforeLabelBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'gkitBeforeLabelBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'gkitAfterLabelBorderGroup' => array(
				'type' => 'object'
			),
			'gkitAfterLabelBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'gkitAfterLabelBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'gkitAfterLabelBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'gkitAfterLabelBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitAfterLabelBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitAfterLabelBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'gkitAfterLabelBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'gkitAfterLabelBackground' => array(
				'type' => 'object',
				'default' => '#ffffff'
			),
			'gkitBeforeLabelSpacingDesktop' => array(
				'type' => 'object'
			),
			'gkitBeforeLabelSpacingTablet' => array(
				'type' => 'object'
			),
			'gkitBeforeLabelSpacingMobile' => array(
				'type' => 'object'
			),
			'gkitBeforeLabelSpacingTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitBeforeLabelSpacingMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitBeforeLabelSpacingLaptop' => array(
				'type' => 'object'
			),
			'gkitBeforeLabelSpacingWideScreen' => array(
				'type' => 'object'
			),
			'gkitAfterLabelSpacingDesktop' => array(
				'type' => 'object'
			),
			'gkitAfterLabelSpacingTablet' => array(
				'type' => 'object'
			),
			'gkitAfterLabelSpacingMobile' => array(
				'type' => 'object'
			),
			'gkitAfterLabelSpacingTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitAfterLabelSpacingMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitAfterLabelSpacingLaptop' => array(
				'type' => 'object'
			),
			'gkitAfterLabelSpacingWideScreen' => array(
				'type' => 'object'
			),
			'gkitHandleIconSizeDesktop' => array(
				'type' => 'object'
			),
			'gkitHandleIconSizeTablet' => array(
				'type' => 'object'
			),
			'gkitHandleIconSizeMobile' => array(
				'type' => 'object'
			),
			'gkitHandleIconSizeTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitHandleIconSizeMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitHandleIconSizeLaptop' => array(
				'type' => 'object'
			),
			'gkitHandleIconSizeWideScreen' => array(
				'type' => 'object'
			),
			'gkitIconHeightWidth' => array(
				'type' => 'boolean',
				'default' => false
			),
			'gkitHandleControlWidthDesktop' => array(
				'type' => 'object'
			),
			'gkitHandleControlWidthTablet' => array(
				'type' => 'object'
			),
			'gkitHandleControlWidthMobile' => array(
				'type' => 'object'
			),
			'gkitHandleControlWidthTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitHandleControlWidthMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitHandleControlWidthLaptop' => array(
				'type' => 'object'
			),
			'gkitHandleControlWidthWideScreen' => array(
				'type' => 'object'
			),
			'gkitHandleControlHeightVerticalDesktop' => array(
				'type' => 'object'
			),
			'gkitHandleControlHeightVerticalTablet' => array(
				'type' => 'object'
			),
			'gkitHandleControlHeightVerticalMobile' => array(
				'type' => 'object'
			),
			'gkitHandleControlHeightVerticalTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitHandleControlHeightVerticalMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitHandleControlHeightVerticalLaptop' => array(
				'type' => 'object'
			),
			'gkitHandleControlHeightVerticalWideScreen' => array(
				'type' => 'object'
			),
			'gkitHandleControlHeightDesktop' => array(
				'type' => 'object'
			),
			'gkitHandleControlHeightTablet' => array(
				'type' => 'object'
			),
			'gkitHandleControlHeightMobile' => array(
				'type' => 'object'
			),
			'gkitHandleControlHeightTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitHandleControlHeightMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitHandleControlHeightLaptop' => array(
				'type' => 'object'
			),
			'gkitHandleControlHeightWideScreen' => array(
				'type' => 'object'
			),
			'gkitHandleNormalBackground' => array(
				'type' => 'object',
				'default' => '#ffffff'
			),
			'gkitHandleNormalColor' => array(
				'type' => 'string'
			),
			'gkitHandleNormalBoxShadow' => array(
				'type' => 'string',
				'default' => 'none'
			),
			'gkitHandleHoverBackground' => array(
				'type' => 'object',
				'default' => '#ffffff'
			),
			'gkitHandleHoverColor' => array(
				'type' => 'string'
			),
			'gkitHandleHoverBoxShadow' => array(
				'type' => 'string',
				'default' => 'none'
			),
			'gkitHandleSpacingDesktop' => array(
				'type' => 'object'
			),
			'gkitHandleSpacingTablet' => array(
				'type' => 'object'
			),
			'gkitHandleSpacingMobile' => array(
				'type' => 'object'
			),
			'gkitHandleSpacingTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitHandleSpacingMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitHandleSpacingLaptop' => array(
				'type' => 'object'
			),
			'gkitHandleSpacingWideScreen' => array(
				'type' => 'object'
			),
			'gkitHandleBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'gkitHandleBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'gkitHandleBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'gkitHandleBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitHandleBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitHandleBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'gkitHandleBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'gkitHandleDividerThicknessDesktop' => array(
				'type' => 'object',
				'default' => array(
					'unit' => 'px',
					'size' => 3
				)
			),
			'gkitHandleDividerThicknessTablet' => array(
				'type' => 'object'
			),
			'gkitHandleDividerThicknessMobile' => array(
				'type' => 'object'
			),
			'gkitHandleDividerThicknessTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitHandleDividerThicknessMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitHandleDividerThicknessLaptop' => array(
				'type' => 'object'
			),
			'gkitHandleDividerThicknessWideScreen' => array(
				'type' => 'object'
			),
			'gkitHandleDividerColor' => array(
				'type' => 'string',
				'default' => '#FFFFFF'
			)
		),
		'supports' => array(
			'html' => false,
			'align' => array(
				'wide',
				'full'
			),
			'anchor' => true
		),
		'textdomain' => 'gutenkit-blocks-addon',
		'editorScript' => 'file:./index.js',
		'style' => array(
			'file:./style-index.css',
			'img-comparison'
		),
		'viewScript' => 'file:./frontend.js',
		'script' => array(
			'img-comparison'
		)
	),
	'mail-chimp' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'gutenkit/mail-chimp',
		'version' => '1.0.0',
		'title' => 'Mailchimp',
		'category' => 'gutenkit',
		'icon' => 'menu-alt3',
		'keywords' => array(
			'gkit',
			'mail chimp',
			'Mailchimp',
			'gutenkit'
		),
		'description' => 'MailChimp comparison block for gutenberg.',
		'example' => array(
			'preview' => true
		),
		'attributes' => array(
			'blockID' => array(
				'type' => 'string'
			),
			'blockClass' => array(
				'type' => 'string'
			),
			'blocksCSS' => array(
				'type' => 'object'
			),
			'listFormId' => array(
				'type' => 'string',
				'default' => ''
			),
			'formOptions' => array(
				'type' => 'array',
				'default' => array(
					
				)
			),
			'formFieldList' => array(
				'type' => 'array',
				'default' => array(
					
				)
			),
			'checkboxFieldList' => array(
				'type' => 'array',
				'default' => array(
					
				)
			),
			'formFields' => array(
				'type' => 'array',
				'default' => array(
					array(
						'type' => 'text',
						'label' => 'First Name',
						'placeholder' => 'Enter your first name',
						'typeId' => '',
						'nameId' => 'FNAME',
						'childNameId' => 'addr1',
						'required' => false,
						'inputFieldSettings' => array(
							'fieldSize' => array(
								'Desktop' => array(
									'unit' => '%',
									'size' => 50
								)
							)
						),
						'textAreaRows' => 4,
						'showIcon' => false
					),
					array(
						'type' => 'text',
						'label' => 'Last Name',
						'placeholder' => 'Enter your last name',
						'typeId' => '',
						'nameId' => 'LNAME',
						'childNameId' => 'addr1',
						'required' => false,
						'inputFieldSettings' => array(
							'fieldSize' => array(
								'Desktop' => array(
									'unit' => '%',
									'size' => 50
								)
							)
						),
						'textAreaRows' => 4,
						'showIcon' => false
					),
					array(
						'type' => 'email',
						'label' => 'Email',
						'placeholder' => 'Enter your email',
						'typeId' => '',
						'nameId' => 'EMAIL',
						'childNameId' => 'addr1',
						'required' => true,
						'inputFieldSettings' => array(
							
						),
						'textAreaRows' => 4,
						'showIcon' => false
					)
				)
			),
			'showLabel' => array(
				'type' => 'boolean',
				'default' => false
			),
			'requiredMark' => array(
				'type' => 'boolean',
				'default' => false
			),
			'buttonFieldSizeDesktop' => array(
				'type' => 'object',
				'default' => array(
					'unit' => '%',
					'size' => 20
				)
			),
			'buttonFieldSizeWideScreen' => array(
				'type' => 'object'
			),
			'buttonFieldSizeLaptop' => array(
				'type' => 'object'
			),
			'buttonFieldSizeTablet' => array(
				'type' => 'object'
			),
			'buttonFieldSizeTabletLandscape' => array(
				'type' => 'object'
			),
			'buttonFieldSizeMobile' => array(
				'type' => 'object',
				'default' => array(
					'unit' => '%',
					'size' => 30
				)
			),
			'buttonFieldSizeMobileLandscape' => array(
				'type' => 'object',
				'default' => array(
					'unit' => '%',
					'size' => 30
				)
			),
			'doubleOptin' => array(
				'type' => 'boolean',
				'default' => false
			),
			'optinSuccessMessage' => array(
				'type' => 'string',
				'default' => 'Please check your mail and confirm subscribe'
			),
			'successMessage' => array(
				'type' => 'string',
				'default' => 'Thank you for subscribing'
			),
			'buttonSubmit' => array(
				'type' => 'string',
				'default' => 'Subscribe'
			),
			'buttonIcon' => array(
				'type' => 'object',
				'default' => array(
					
				)
			),
			'iconPosition' => array(
				'type' => 'string',
				'default' => 'before'
			),
			'betweenSpace' => array(
				'type' => 'object'
			),
			'columnsGapDesktop' => array(
				'type' => 'object',
				'default' => array(
					'unit' => 'px',
					'size' => 10
				)
			),
			'columnsGapWideScreen' => array(
				'type' => 'object'
			),
			'columnsGapLaptop' => array(
				'type' => 'object'
			),
			'columnsGapTabletLandscape' => array(
				'type' => 'object'
			),
			'columnsGapTablet' => array(
				'type' => 'object'
			),
			'columnsGapMobileLandscape' => array(
				'type' => 'object'
			),
			'columnsGapMobile' => array(
				'type' => 'object'
			),
			'rowsGapDesktop' => array(
				'type' => 'object',
				'default' => array(
					'unit' => 'px',
					'size' => 10
				)
			),
			'rowsGapWideScreen' => array(
				'type' => 'object'
			),
			'rowsGapLaptop' => array(
				'type' => 'object'
			),
			'rowsGapTabletLandscape' => array(
				'type' => 'object'
			),
			'rowsGapTablet' => array(
				'type' => 'object'
			),
			'rowsGapMobileLandscape' => array(
				'type' => 'object'
			),
			'rowsGapMobile' => array(
				'type' => 'object'
			),
			'labelSpacingDesktop' => array(
				'type' => 'object',
				'default' => array(
					'unit' => 'px',
					'size' => 10
				)
			),
			'labelSpacingWideScreen' => array(
				'type' => 'object'
			),
			'labelSpacingLaptop' => array(
				'type' => 'object'
			),
			'labelSpacingTabletLandscape' => array(
				'type' => 'object'
			),
			'labelSpacingTablet' => array(
				'type' => 'object'
			),
			'labelSpacingMobileLandscape' => array(
				'type' => 'object'
			),
			'labelSpacingMobile' => array(
				'type' => 'object'
			),
			'labelColor' => array(
				'type' => 'string'
			),
			'markColor' => array(
				'type' => 'string'
			),
			'labelTypography' => array(
				'type' => 'object'
			),
			'formBgColor' => array(
				'type' => 'string'
			),
			'fieldColor' => array(
				'type' => 'string'
			),
			'fieldColorHover' => array(
				'type' => 'string'
			),
			'fieldColorFocus' => array(
				'type' => 'string'
			),
			'fieldBgColor' => array(
				'type' => 'string'
			),
			'fieldBgColorHover' => array(
				'type' => 'string'
			),
			'fieldBgColorFocus' => array(
				'type' => 'string'
			),
			'fieldPlaceholderColor' => array(
				'type' => 'string'
			),
			'fieldPlaceholderColorHover' => array(
				'type' => 'string'
			),
			'fieldPlaceholderColorFocus' => array(
				'type' => 'string'
			),
			'fieldBoxShadowNormal' => array(
				'type' => 'object'
			),
			'fieldBoxShadowHover' => array(
				'type' => 'object'
			),
			'fieldBoxShadowFocus' => array(
				'type' => 'object'
			),
			'fieldTypography' => array(
				'type' => 'object'
			),
			'fieldPaddingDesktop' => array(
				'type' => 'object'
			),
			'fieldPaddingWideScreen' => array(
				'type' => 'object'
			),
			'fieldPaddingLaptop' => array(
				'type' => 'object'
			),
			'fieldPaddingTablet' => array(
				'type' => 'object'
			),
			'fieldPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'fieldPaddingMobile' => array(
				'type' => 'object'
			),
			'fieldPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'fieldBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'fieldBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'fieldBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'fieldBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'fieldBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'fieldBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'fieldBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'fieldBorderRadiusHoverDesktop' => array(
				'type' => 'object'
			),
			'fieldBorderRadiusHoverWideScreen' => array(
				'type' => 'object'
			),
			'fieldBorderRadiusHoverLaptop' => array(
				'type' => 'object'
			),
			'fieldBorderRadiusHoverMobile' => array(
				'type' => 'object'
			),
			'fieldBorderRadiusHoverMobileLandscape' => array(
				'type' => 'object'
			),
			'fieldBorderRadiusHoverTablet' => array(
				'type' => 'object'
			),
			'fieldBorderRadiusHoverTabletLandscape' => array(
				'type' => 'object'
			),
			'fieldBorderRadiusFocusDesktop' => array(
				'type' => 'object'
			),
			'fieldBorderRadiusFocusWideScreen' => array(
				'type' => 'object'
			),
			'fieldBorderRadiusFocusLaptop' => array(
				'type' => 'object'
			),
			'fieldBorderRadiusFocusMobile' => array(
				'type' => 'object'
			),
			'fieldBorderRadiusFocusMobileLandscape' => array(
				'type' => 'object'
			),
			'fieldBorderRadiusFocusTablet' => array(
				'type' => 'object'
			),
			'fieldBorderRadiusFocusTabletLandscape' => array(
				'type' => 'object'
			),
			'fieldBorder' => array(
				'type' => 'object',
				'default' => array(
					'width' => '1px',
					'style' => 'solid',
					'color' => '#ccc'
				)
			),
			'fieldBorderHover' => array(
				'type' => 'object'
			),
			'fieldBorderFocus' => array(
				'type' => 'object'
			),
			'fieldIconColor' => array(
				'type' => 'string'
			),
			'fieldIconSizeDesktop' => array(
				'type' => 'object'
			),
			'fieldIconSizeWideScreen' => array(
				'type' => 'object'
			),
			'fieldIconSizeLaptop' => array(
				'type' => 'object'
			),
			'fieldIconSizeTabletLandscape' => array(
				'type' => 'object'
			),
			'fieldIconSizeTablet' => array(
				'type' => 'object'
			),
			'fieldIconSizeMobileLandscape' => array(
				'type' => 'object'
			),
			'fieldIconSizeMobile' => array(
				'type' => 'object'
			),
			'fieldIconPaddingDesktop' => array(
				'type' => 'object'
			),
			'fieldIconPaddingWideScreen' => array(
				'type' => 'object'
			),
			'fieldIconPaddinglaptop' => array(
				'type' => 'object'
			),
			'fieldIconPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'fieldIconPaddingTablet' => array(
				'type' => 'object'
			),
			'fieldIconPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'fieldIconPaddingMobile' => array(
				'type' => 'object'
			),
			'isFieldIconPosition' => array(
				'type' => 'boolean',
				'default' => false
			),
			'fieldIconPosition' => array(
				'type' => 'string',
				'default' => ''
			),
			'fieldIconVerticalOrientation' => array(
				'type' => 'string'
			),
			'fieldIconVerticalOffsetDesktop' => array(
				'type' => 'object'
			),
			'fieldIconVerticalOffsetWideScreen' => array(
				'type' => 'object'
			),
			'fieldIconVerticalOffsetLaptop' => array(
				'type' => 'object'
			),
			'fieldIconVerticalOffsetTablet' => array(
				'type' => 'object'
			),
			'fieldIconVerticalOffsetTabletLandscape' => array(
				'type' => 'object'
			),
			'fieldIconVerticalOffsetMobile' => array(
				'type' => 'object'
			),
			'fieldIconVerticalOffsetMobileLandscape' => array(
				'type' => 'object'
			),
			'fieldIconHorizontalOrientation' => array(
				'type' => 'string'
			),
			'fieldIconHorizontalOffsetDesktop' => array(
				'type' => 'object'
			),
			'fieldIconHorizontalOffsetWideScreen' => array(
				'type' => 'object'
			),
			'fieldIconHorizontalOffsetLaptop' => array(
				'type' => 'object'
			),
			'fieldIconHorizontalOffsetTablet' => array(
				'type' => 'object'
			),
			'fieldIconHorizontalOffsetTabletLandscape' => array(
				'type' => 'object'
			),
			'fieldIconHorizontalOffsetMobile' => array(
				'type' => 'object'
			),
			'fieldIconHorizontalOffsetMobileLandscape' => array(
				'type' => 'object'
			),
			'isButtonPosition' => array(
				'type' => 'boolean',
				'default' => false
			),
			'buttonPosition' => array(
				'type' => 'string',
				'default' => ''
			),
			'buttonVerticalOrientation' => array(
				'type' => 'string'
			),
			'buttonVerticalOffsetDesktop' => array(
				'type' => 'object'
			),
			'buttonVerticalOffsetWideScreen' => array(
				'type' => 'object'
			),
			'buttonVerticalOffsetLaptop' => array(
				'type' => 'object'
			),
			'buttonVerticalOffsetTablet' => array(
				'type' => 'object'
			),
			'buttonVerticalOffsetTabletLandscape' => array(
				'type' => 'object'
			),
			'buttonVerticalOffsetMobile' => array(
				'type' => 'object'
			),
			'buttonVerticalOffsetMobileLandscape' => array(
				'type' => 'object'
			),
			'buttonHorizontalOrientation' => array(
				'type' => 'string'
			),
			'buttonHorizontalOffsetDesktop' => array(
				'type' => 'object'
			),
			'buttonHorizontalOffsetWideScreen' => array(
				'type' => 'object'
			),
			'buttonHorizontalOffsetLaptop' => array(
				'type' => 'object'
			),
			'buttonHorizontalOffsetTablet' => array(
				'type' => 'object'
			),
			'buttonHorizontalOffsetTabletLandscape' => array(
				'type' => 'object'
			),
			'buttonHorizontalOffsetMobile' => array(
				'type' => 'object'
			),
			'buttonHorizontalOffsetMobileLandscape' => array(
				'type' => 'object'
			),
			'buttonPositionDesktop' => array(
				'type' => 'string'
			),
			'buttonPositionWideScreen' => array(
				'type' => 'string'
			),
			'buttonPositionLaptop' => array(
				'type' => 'string'
			),
			'buttonPositionTablet' => array(
				'type' => 'string'
			),
			'buttonPositionTabletLandscape' => array(
				'type' => 'string'
			),
			'buttonPositionMobileLandscape' => array(
				'type' => 'string'
			),
			'buttonPositionMobile' => array(
				'type' => 'string'
			),
			'buttonTypography' => array(
				'type' => 'object'
			),
			'buttonIconSizeDesktop' => array(
				'type' => 'object'
			),
			'buttonIconSizeWideScreen' => array(
				'type' => 'object'
			),
			'buttonIconSizeLaptop' => array(
				'type' => 'object'
			),
			'buttonIconSizeTabletLandscape' => array(
				'type' => 'object'
			),
			'buttonIconSizeTablet' => array(
				'type' => 'object'
			),
			'buttonIconSizeMobileLandscape' => array(
				'type' => 'object'
			),
			'buttonIconSizeMobile' => array(
				'type' => 'object'
			),
			'buttonColor' => array(
				'type' => 'string'
			),
			'buttonBgColor' => array(
				'type' => 'string'
			),
			'buttonIconColor' => array(
				'type' => 'string'
			),
			'buttonBorder' => array(
				'type' => 'object'
			),
			'buttonHoverColor' => array(
				'type' => 'string'
			),
			'buttonHoverBgColor' => array(
				'type' => 'string'
			),
			'buttonHoverIconColor' => array(
				'type' => 'string'
			),
			'buttonHoverBorder' => array(
				'type' => 'object'
			),
			'buttonBoxShadowNormal' => array(
				'type' => 'object'
			),
			'buttonBoxShadowHover' => array(
				'type' => 'object'
			),
			'buttonBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'buttonBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'buttonBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'buttonBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'buttonBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'buttonBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'buttonBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'buttonPaddingDesktop' => array(
				'type' => 'object'
			),
			'buttonPaddingWideScreen' => array(
				'type' => 'object'
			),
			'buttonPaddingLaptop' => array(
				'type' => 'object'
			),
			'buttonPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'buttonPaddingTablet' => array(
				'type' => 'object'
			),
			'buttonPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'buttonPaddingMobile' => array(
				'type' => 'object'
			),
			'buttonMarginDesktop' => array(
				'type' => 'object'
			),
			'buttonMarginWideScreen' => array(
				'type' => 'object'
			),
			'buttonMarginLaptop' => array(
				'type' => 'object'
			),
			'buttonMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'buttonMarginTablet' => array(
				'type' => 'object'
			),
			'buttonMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'buttonMarginMobile' => array(
				'type' => 'object'
			),
			'showLoader' => array(
				'type' => 'boolean',
				'default' => false
			),
			'loaderPosition' => array(
				'type' => 'object',
				'default' => array(
					'unit' => '%',
					'size' => 1
				)
			),
			'messageTypography' => array(
				'type' => 'object'
			),
			'successMessageColor' => array(
				'type' => 'string'
			),
			'successMessageBg' => array(
				'type' => 'string'
			),
			'errorMessageColor' => array(
				'type' => 'string'
			),
			'errorMessageBg' => array(
				'type' => 'string'
			),
			'submissionMessageWidthDesktop' => array(
				'type' => 'object',
				'default' => array(
					'unit' => 'px',
					'size' => 400
				)
			),
			'submissionMessageWidthWideScreen' => array(
				'type' => 'object'
			),
			'submissionMessageWidthLaptop' => array(
				'type' => 'object'
			),
			'submissionMessageWidthTabletLandscape' => array(
				'type' => 'object'
			),
			'submissionMessageWidthTablet' => array(
				'type' => 'object'
			),
			'submissionMessageWidthMobileLandscape' => array(
				'type' => 'object'
			),
			'submissionMessageWidthMobile' => array(
				'type' => 'object'
			),
			'submissionMessagePaddingDesktop' => array(
				'type' => 'object'
			),
			'submissionMessagePaddingWideScreen' => array(
				'type' => 'object'
			),
			'submissionMessagePaddingLaptop' => array(
				'type' => 'object'
			),
			'submissionMessagePaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'submissionMessagePaddingTablet' => array(
				'type' => 'object'
			),
			'submissionMessagePaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'submissionMessagePaddingMobile' => array(
				'type' => 'object'
			),
			'submissionMessageMarginDesktop' => array(
				'type' => 'object'
			),
			'submissionMessageMarginWideScreen' => array(
				'type' => 'object'
			),
			'submissionMessageMarginLaptop' => array(
				'type' => 'object'
			),
			'submissionMessageMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'submissionMessageMarginTablet' => array(
				'type' => 'object'
			),
			'submissionMessageMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'submissionMessageMarginMobile' => array(
				'type' => 'object'
			),
			'submissionSuccessMessageBorder' => array(
				'type' => 'object'
			),
			'submissionErrorMessageBorder' => array(
				'type' => 'object'
			),
			'submissionMessageBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'submissionMessageBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'submissionMessageBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'submissionMessageBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'submissionMessageBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'submissionMessageBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'submissionMessageBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'checkboxDirection' => array(
				'type' => 'string',
				'default' => 'row'
			),
			'checkboxItemGapDesktop' => array(
				'type' => 'object',
				'default' => array(
					'unit' => 'px',
					'size' => 10
				)
			),
			'checkboxItemGapWideScreen' => array(
				'type' => 'object'
			),
			'checkboxItemGapLaptop' => array(
				'type' => 'object'
			),
			'checkboxItemGapTabletLandscape' => array(
				'type' => 'object'
			),
			'checkboxItemGapTablet' => array(
				'type' => 'object'
			),
			'checkboxItemGapMobileLandscape' => array(
				'type' => 'object'
			),
			'checkboxItemGapMobile' => array(
				'type' => 'object'
			),
			'checkboxItemLabelColor' => array(
				'type' => 'string'
			),
			'checkboxItemLabelTypography' => array(
				'type' => 'object'
			),
			'checkboxItemBorder' => array(
				'type' => 'object'
			),
			'checkboxBorderRadius' => array(
				'type' => 'object'
			),
			'radioDirection' => array(
				'type' => 'string',
				'default' => 'row'
			),
			'radioItemGapDesktop' => array(
				'type' => 'object',
				'default' => array(
					'unit' => 'px',
					'size' => 10
				)
			),
			'radioItemGapWideScreen' => array(
				'type' => 'object'
			),
			'radioItemGapLaptop' => array(
				'type' => 'object'
			),
			'radioItemGapTabletLandscape' => array(
				'type' => 'object'
			),
			'radioItemGapTablet' => array(
				'type' => 'object'
			),
			'radioItemGapMobileLandscape' => array(
				'type' => 'object'
			),
			'radioItemGapMobile' => array(
				'type' => 'object'
			),
			'radioItemLabelColor' => array(
				'type' => 'string'
			),
			'radioItemLabelTypography' => array(
				'type' => 'object'
			),
			'agreeTermsLabelColor' => array(
				'type' => 'string'
			),
			'agreeTermsTypography' => array(
				'type' => 'object'
			),
			'agreeTermsLinkColor' => array(
				'type' => 'string'
			),
			'agreeTermsLinkTypography' => array(
				'type' => 'object'
			)
		),
		'supports' => array(
			'html' => false,
			'anchor' => true
		),
		'textdomain' => 'gutenkit-blocks-addon',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./frontend.js'
	),
	'nav-menu' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'gutenkit/nav-menu',
		'version' => '1.0.0',
		'title' => 'Nav Menu',
		'category' => 'gutenkit',
		'description' => 'Nav nenu block for gutenberg.',
		'allowedBlocks' => array(
			'gutenkit/nav-menu-item'
		),
		'keywords' => array(
			'gkit',
			'nav',
			'menu',
			'gutenkit',
			'nav menu',
			'mega',
			'mega menu'
		),
		'example' => array(
			'preview' => true
		),
		'attributes' => array(
			'blockID' => array(
				'type' => 'string'
			),
			'blockClass' => array(
				'type' => 'string'
			),
			'blocksCSS' => array(
				'type' => 'object'
			),
			'variationType' => array(
				'type' => 'string'
			),
			'variationSelected' => array(
				'type' => 'boolean',
				'default' => false
			),
			'gkitMenuBreakPoint' => array(
				'type' => 'string',
				'default' => '1024'
			),
			'verticalMenu' => array(
				'type' => 'boolean',
				'default' => false
			),
			'gkitMenuCustomMenuBreakPoint' => array(
				'type' => 'number',
				'default' => 1024
			),
			'gkitMenuJustifyContentDesktop' => array(
				'type' => 'string',
				'default' => 'flex-start'
			),
			'gkitMenuJustifyContentTablet' => array(
				'type' => 'string'
			),
			'gkitMenuJustifyContentMobile' => array(
				'type' => 'string'
			),
			'gkitMenuJustifyContentTabletLandscape' => array(
				'type' => 'string'
			),
			'gkitMenuJustifyContentMobileLandscape' => array(
				'type' => 'string'
			),
			'gkitMenuJustifyContentLaptop' => array(
				'type' => 'string'
			),
			'gkitMenuJustifyContentWideScreen' => array(
				'type' => 'string'
			),
			'gkitMenuAlignItemsDesktop' => array(
				'type' => 'string',
				'default' => 'center'
			),
			'gkitMenuAlignItemsTablet' => array(
				'type' => 'string',
				'default' => 'stretch'
			),
			'gkitMenuAlignItemsMobile' => array(
				'type' => 'string',
				'default' => 'stretch'
			),
			'gkitMenuAlignItemsTabletLandscape' => array(
				'type' => 'string',
				'default' => 'stretch'
			),
			'gkitMenuAlignItemsMobileLandscape' => array(
				'type' => 'string',
				'default' => 'stretch'
			),
			'gkitMenuAlignItemsLaptop' => array(
				'type' => 'string'
			),
			'gkitMenuAlignItemsWideScreen' => array(
				'type' => 'string'
			),
			'menuAnimation' => array(
				'type' => 'string',
				'default' => ''
			),
			'gkitMenuMobileLogo' => array(
				'type' => 'object',
				'default' => array(
					
				)
			),
			'gkitMenuMobileLogoLinkType' => array(
				'type' => 'string'
			),
			'gkitMenuMobileLogoCustomLink' => array(
				'type' => 'object'
			),
			'gkitMenuMobileCloseIcon' => array(
				'type' => 'object',
				'default' => array(
					'title' => 'star-of-life',
					'src' => '<svg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 32 32\' className=\'gkit-icon\' aria-hidden=\'true\' focusable=\'false\'><path fillRule=\'evenodd\' clipRule=\'evenodd\' d=\'M17.131 16.8l9.034-9.034c0.312-0.312 0.312-0.819 0-1.131s-0.819-0.312-1.131 0l-9.034 9.034-9.034-9.034c-0.312-0.312-0.819-0.312-1.131 0s-0.312 0.819 0 1.131l9.034 9.034-9.034 9.034c-0.312 0.312-0.312 0.819 0 1.131 0.156 0.156 0.361 0.234 0.566 0.234s0.409-0.078 0.566-0.234l9.034-9.034 9.034 9.034c0.156 0.156 0.361 0.234 0.566 0.234s0.409-0.078 0.566-0.234c0.312-0.312 0.312-0.819 0-1.131l-9.034-9.034z\'></path></svg>'
				),
				'excludeCopy' => true
			),
			'gkitMenuMobileHumbergerIcon' => array(
				'type' => 'object'
			),
			'gkitMenuWrapperBackground' => array(
				'type' => 'object'
			),
			'gkitMobileWrapperBackground' => array(
				'type' => 'object'
			),
			'gkitMenuPaddingDesktop' => array(
				'type' => 'object'
			),
			'gkitMenuPaddingTablet' => array(
				'type' => 'object'
			),
			'gkitMenuPaddingMobile' => array(
				'type' => 'object'
			),
			'gkitMenuPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitMenuPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitMenuPaddingLaptop' => array(
				'type' => 'object'
			),
			'gkitMenuPaddingWideScreen' => array(
				'type' => 'object'
			),
			'gkitMenuBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'gkitMenuBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'gkitMenuBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'gkitMenuBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitMenuBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitMenuBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'gkitMenuBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'gkitMenuItemSpacingDesktop' => array(
				'type' => 'object',
				'default' => array(
					'unit' => 'px',
					'size' => 15
				)
			),
			'gkitMenuItemSpacingTablet' => array(
				'type' => 'object',
				'default' => array(
					'unit' => 'px',
					'size' => 12
				)
			),
			'gkitMenuItemSpacingMobile' => array(
				'type' => 'object',
				'default' => array(
					'unit' => 'px',
					'size' => 10
				)
			),
			'gkitMenuItemSpacingTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitMenuItemSpacingMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitMenuItemSpacingLaptop' => array(
				'type' => 'object'
			),
			'gkitMenuItemSpacingWideScreen' => array(
				'type' => 'object'
			),
			'gkitMenuItemTypography' => array(
				'type' => 'object'
			),
			'gkitMenuItemBackground' => array(
				'type' => 'object'
			),
			'gkitMenuItemTextColor' => array(
				'type' => 'string',
				'default' => '#000000'
			),
			'gkitMenuItemMobileTextColor' => array(
				'type' => 'string'
			),
			'gkitMenuItemMobileHoverTextColor' => array(
				'type' => 'string'
			),
			'gkitMenuItemMobileActiveTextColor' => array(
				'type' => 'string'
			),
			'gkitMenuItemBorder' => array(
				'type' => 'object'
			),
			'gkitMenuItemBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'gkitMenuItemBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'gkitMenuItemBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'gkitMenuItemBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitMenuItemBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitMenuItemBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'gkitMenuItemBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'gkitMenuItemHoverBackground' => array(
				'type' => 'object'
			),
			'gkitMenuItemHoverTextColor' => array(
				'type' => 'string'
			),
			'gkitMenuItemHoverBorderColor' => array(
				'type' => 'string'
			),
			'gkitMenuItemHoverBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'gkitMenuItemHoverBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'gkitMenuItemHoverBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'gkitMenuItemHoverBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitMenuItemHoverBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitMenuItemHoverBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'gkitMenuItemHoverBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'gkitMenuItemActiveBackground' => array(
				'type' => 'object'
			),
			'gkitMenuItemActiveTextColor' => array(
				'type' => 'string',
				'default' => '#707070'
			),
			'gkitMenuItemActiveBorderColor' => array(
				'type' => 'string'
			),
			'gkitMenuItemActiveBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'gkitMenuItemActiveBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'gkitMenuItemActiveBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'gkitMenuItemActiveBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitMenuItemActiveBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitMenuItemActiveBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'gkitMenuItemActiveBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'gkitMenuItemPaddingDesktop' => array(
				'type' => 'object'
			),
			'gkitMenuItemPaddingTablet' => array(
				'type' => 'object',
				'default' => array(
					'top' => '0px',
					'right' => '10px',
					'bottom' => '0px',
					'left' => '10px'
				)
			),
			'gkitMenuItemPaddingMobile' => array(
				'type' => 'object'
			),
			'gkitMenuItemPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitMenuItemPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitMenuItemPaddingLaptop' => array(
				'type' => 'object'
			),
			'gkitMenuItemPaddingWideScreen' => array(
				'type' => 'object'
			),
			'gkitMenuItemMarginDesktop' => array(
				'type' => 'object'
			),
			'gkitMenuItemMarginTablet' => array(
				'type' => 'object'
			),
			'gkitMenuItemMarginMobile' => array(
				'type' => 'object'
			),
			'gkitMenuItemMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitMenuItemMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitMenuItemMarginLaptop' => array(
				'type' => 'object'
			),
			'gkitMenuItemMarginWideScreen' => array(
				'type' => 'object'
			),
			'gkitMenuHamburgerIconPosition' => array(
				'type' => 'string',
				'default' => 'right'
			),
			'gkitMenuHamburgerIconSizeDesktop' => array(
				'type' => 'object'
			),
			'gkitMenuHamburgerIconSizeTablet' => array(
				'type' => 'object'
			),
			'gkitMenuHamburgerIconSizeMobile' => array(
				'type' => 'object'
			),
			'gkitMenuHamburgerIconSizeTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitMenuHamburgerIconSizeMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitMenuHamburgerIconSizeLaptop' => array(
				'type' => 'object'
			),
			'gkitMenuHamburgerIconSizeWideScreen' => array(
				'type' => 'object'
			),
			'gkitMenuHamburgerBtnWidthDesktop' => array(
				'type' => 'object',
				'default' => array(
					'size' => 45,
					'unit' => 'px'
				)
			),
			'gkitMenuHamburgerBtnWidthTablet' => array(
				'type' => 'object'
			),
			'gkitMenuHamburgerBtnWidthMobile' => array(
				'type' => 'object'
			),
			'gkitMenuHamburgerBtnWidthTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitMenuHamburgerBtnWidthMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitMenuHamburgerBtnWidthLaptop' => array(
				'type' => 'object'
			),
			'gkitMenuHamburgerBtnWidthWideScreen' => array(
				'type' => 'object'
			),
			'gkitMenuHamburgerBtnHeightDesktop' => array(
				'type' => 'object',
				'default' => array(
					'size' => 45,
					'unit' => 'px'
				)
			),
			'gkitMenuHamburgerBtnHeightTablet' => array(
				'type' => 'object'
			),
			'gkitMenuHamburgerBtnHeightMobile' => array(
				'type' => 'object'
			),
			'gkitMenuHamburgerBtnHeightTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitMenuHamburgerBtnHeightMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitMenuHamburgerBtnHeightLaptop' => array(
				'type' => 'object'
			),
			'gkitMenuHamburgerBtnHeightWideScreen' => array(
				'type' => 'object'
			),
			'gkitMenuHamburgerBtnBorderRadiusDesktop' => array(
				'type' => 'object',
				'default' => array(
					'size' => 3,
					'unit' => 'px'
				)
			),
			'gkitMenuHamburgerBtnBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'gkitMenuHamburgerBtnBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'gkitMenuHamburgerBtnBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitMenuHamburgerBtnBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitMenuHamburgerBtnBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'gkitMenuHamburgerBtnBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'gkitMenuHamburgerBtnBackgroundNormal' => array(
				'type' => 'object'
			),
			'gkitMenuHamburgerBtnBackgroundHover' => array(
				'type' => 'object'
			),
			'gkitMenuHamburgerBtnBorderNormal' => array(
				'type' => 'object'
			),
			'gkitMenuHamburgerIconColorNormal' => array(
				'type' => 'string'
			),
			'gkitMenuHamburgerBtnBorderColorHover' => array(
				'type' => 'string'
			),
			'gkitMenuHamburgerIconColorHover' => array(
				'type' => 'string'
			),
			'gkitMenuCloseBtnIconSizeDesktop' => array(
				'type' => 'object',
				'default' => array(
					'unit' => 'px',
					'size' => 16
				)
			),
			'gkitMenuCloseBtnIconSizeTablet' => array(
				'type' => 'object'
			),
			'gkitMenuCloseBtnIconSizeMobile' => array(
				'type' => 'object'
			),
			'gkitMenuCloseBtnIconSizeTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitMenuCloseBtnIconSizeMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitMenuCloseBtnIconSizeLaptop' => array(
				'type' => 'object'
			),
			'gkitMenuCloseBtnIconSizeWideScreen' => array(
				'type' => 'object'
			),
			'gkitMenuCloseBtnMarginDesktop' => array(
				'type' => 'object',
				'default' => array(
					'top' => '12px',
					'right' => '12px',
					'bottom' => '12px',
					'left' => '12px'
				)
			),
			'gkitMenuCloseBtnMarginTablet' => array(
				'type' => 'object'
			),
			'gkitMenuCloseBtnMarginMobile' => array(
				'type' => 'object'
			),
			'gkitMenuCloseBtnMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitMenuCloseBtnMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitMenuCloseBtnMarginLaptop' => array(
				'type' => 'object'
			),
			'gkitMenuCloseBtnMarginWideScreen' => array(
				'type' => 'object'
			),
			'gkitMenuCloseBtnWidthDesktop' => array(
				'type' => 'object',
				'default' => array(
					'size' => 40,
					'unit' => 'px'
				)
			),
			'gkitMenuCloseBtnWidthTablet' => array(
				'type' => 'object'
			),
			'gkitMenuCloseBtnWidthMobile' => array(
				'type' => 'object'
			),
			'gkitMenuCloseBtnWidthTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitMenuCloseBtnWidthMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitMenuCloseBtnWidthLaptop' => array(
				'type' => 'object'
			),
			'gkitMenuCloseBtnWidthWideScreen' => array(
				'type' => 'object'
			),
			'gkitMenuCloseBtnHeightDesktop' => array(
				'type' => 'object',
				'default' => array(
					'size' => 40,
					'unit' => 'px'
				)
			),
			'gkitMenuCloseBtnHeightTablet' => array(
				'type' => 'object'
			),
			'gkitMenuCloseBtnHeightMobile' => array(
				'type' => 'object'
			),
			'gkitMenuCloseBtnHeightTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitMenuCloseBtnHeightMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitMenuCloseBtnHeightLaptop' => array(
				'type' => 'object'
			),
			'gkitMenuCloseBtnHeightWideScreen' => array(
				'type' => 'object'
			),
			'gkitMenuCloseBtnBorderRadiusDesktop' => array(
				'type' => 'object',
				'default' => array(
					'size' => 3,
					'unit' => 'px'
				)
			),
			'gkitMenuCloseBtnBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'gkitMenuCloseBtnBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'gkitMenuCloseBtnBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitMenuCloseBtnBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitMenuCloseBtnBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'gkitMenuCloseBtnBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'gkitMenuCloseBtnBackgroundNormal' => array(
				'type' => 'object'
			),
			'gkitMenuCloseBtnBackgroundHover' => array(
				'type' => 'object'
			),
			'gkitMenuCloseBtnBorderNormal' => array(
				'type' => 'object'
			),
			'gkitMenuCloseIconColorNormal' => array(
				'type' => 'string'
			),
			'gkitMenuCloseBtnBorderColorHover' => array(
				'type' => 'string'
			),
			'gkitMenuCloseIconColorHover' => array(
				'type' => 'string'
			),
			'gkitMobileMenuLogoWidthDesktop' => array(
				'type' => 'object',
				'default' => array(
					'size' => 160,
					'unit' => 'px'
				)
			),
			'gkitMobileMenuLogoWidthTablet' => array(
				'type' => 'object'
			),
			'gkitMobileMenuLogoWidthMobile' => array(
				'type' => 'object'
			),
			'gkitMobileMenuLogoWidthTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitMobileMenuLogoWidthMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitMobileMenuLogoWidthLaptop' => array(
				'type' => 'object'
			),
			'gkitMobileMenuLogoWidthWideScreen' => array(
				'type' => 'object'
			),
			'gkitMobileMenuLogoHeightDesktop' => array(
				'type' => 'object',
				'default' => array(
					'size' => 60,
					'unit' => 'px'
				)
			),
			'gkitMobileMenuLogoHeightTablet' => array(
				'type' => 'object'
			),
			'gkitMobileMenuLogoHeightMobile' => array(
				'type' => 'object'
			),
			'gkitMobileMenuLogoHeightTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitMobileMenuLogoHeightMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitMobileMenuLogoHeightLaptop' => array(
				'type' => 'object'
			),
			'gkitMobileMenuLogoHeightWideScreen' => array(
				'type' => 'object'
			),
			'gkitMobileMenuLogoPaddingDesktop' => array(
				'type' => 'object',
				'default' => array(
					'top' => '5px',
					'right' => '5px',
					'bottom' => '5px',
					'left' => '5px'
				)
			),
			'gkitMobileMenuLogoPaddingTablet' => array(
				'type' => 'object'
			),
			'gkitMobileMenuLogoPaddingMobile' => array(
				'type' => 'object'
			),
			'gkitMobileMenuLogoPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitMobileMenuLogoPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitMobileMenuLogoPaddingLaptop' => array(
				'type' => 'object'
			),
			'gkitMobileMenuLogoPaddingWideScreen' => array(
				'type' => 'object'
			),
			'gkitMobileMenuLogoMarginDesktop' => array(
				'type' => 'object',
				'default' => array(
					'top' => '5px',
					'right' => '0',
					'bottom' => '5px',
					'left' => '0'
				)
			),
			'gkitMobileMenuLogoMarginTablet' => array(
				'type' => 'object'
			),
			'gkitMobileMenuLogoMarginMobile' => array(
				'type' => 'object'
			),
			'gkitMobileMenuLogoMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitMobileMenuLogoMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitMobileMenuLogoMarginLaptop' => array(
				'type' => 'object'
			),
			'gkitMobileMenuLogoMarginWideScreen' => array(
				'type' => 'object'
			),
			'gkitMenuScrollLockOnOffCanvas' => array(
				'type' => 'boolean',
				'default' => false
			),
			'gkitMenuSidebarContentAlignmentDesktop' => array(
				'type' => 'string'
			),
			'gkitMenuSidebarContentAlignmentTablet' => array(
				'type' => 'string'
			),
			'gkitMenuSidebarContentAlignmentMobile' => array(
				'type' => 'string'
			),
			'gkitMenuSidebarContentAlignmentTabletLandscape' => array(
				'type' => 'string'
			),
			'gkitMenuSidebarContentAlignmentMobileLandscape' => array(
				'type' => 'string'
			),
			'gkitMenuSidebarContentAlignmentLaptop' => array(
				'type' => 'string'
			),
			'gkitMenuSidebarContentAlignmentWideScreen' => array(
				'type' => 'string'
			)
		),
		'supports' => array(
			'html' => false,
			'align' => array(
				'wide',
				'full'
			),
			'anchor' => true
		),
		'textdomain' => 'gutenkit-blocks-addon',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./frontend.js'
	),
	'nav-menu-item' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'gutenkit/nav-menu-item',
		'version' => '1.0.0',
		'title' => 'Nav Menu Item',
		'category' => 'gutenkit',
		'description' => 'Nav menu item block for gutenberg.',
		'allowedBlocks' => array(
			'gutenkit/nav-menu-submenu'
		),
		'parent' => array(
			'gutenkit/nav-menu',
			'gutenkit/nav-menu-submenu'
		),
		'example' => array(
			'preview' => true
		),
		'attributes' => array(
			'blockID' => array(
				'type' => 'string'
			),
			'blockClass' => array(
				'type' => 'string'
			),
			'blocksCSS' => array(
				'type' => 'object'
			),
			'gkitMenuItemCustomLinkLabel' => array(
				'type' => 'string',
				'excludeCopy' => true
			),
			'gkitMenuItemCustomLink' => array(
				'type' => 'object',
				'excludeCopy' => true
			),
			'gkitAddSubMenu' => array(
				'type' => 'boolean',
				'default' => false
			),
			'gkitSubMenuType' => array(
				'type' => 'string',
				'default' => 'dropdown'
			),
			'gkitSubMenuIndicator' => array(
				'type' => 'object',
				'default' => array(
					'title' => 'chevron-down',
					'src' => '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
<title>chevron-down</title>
<path d="M0 9.6c0-0.205 0.078-0.409 0.234-0.566 0.312-0.312 0.819-0.312 1.131 0l13.834 13.834 13.834-13.834c0.312-0.312 0.819-0.312 1.131 0s0.312 0.819 0 1.131l-14.4 14.4c-0.312 0.312-0.819 0.312-1.131 0l-14.4-14.4c-0.156-0.156-0.234-0.361-0.234-0.566z"></path>
</svg>
'
				)
			),
			'gkitSubMenuIndicatorIconSizeDesktop' => array(
				'type' => 'object',
				'default' => array(
					'size' => 15,
					'unit' => 'px'
				)
			),
			'gkitSubMenuIndicatorIconSizeTablet' => array(
				'type' => 'object'
			),
			'gkitSubMenuIndicatorIconSizeMobile' => array(
				'type' => 'object'
			),
			'gkitSubMenuIndicatorIconSizeTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitSubMenuIndicatorIconSizeMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitSubMenuIndicatorIconSizeLaptop' => array(
				'type' => 'object'
			),
			'gkitSubMenuIndicatorIconSizeWideScreen' => array(
				'type' => 'object'
			),
			'gkitSubMenuIndicatorBorderDesktop' => array(
				'type' => 'object'
			),
			'gkitSubMenuIndicatorBorderTablet' => array(
				'type' => 'object'
			),
			'gkitSubMenuIndicatorBorderMobile' => array(
				'type' => 'object'
			),
			'gkitSubMenuIndicatorBorderTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitSubMenuIndicatorBorderMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitSubMenuIndicatorBorderLaptop' => array(
				'type' => 'object'
			),
			'gkitSubMenuIndicatorBorderWideScreen' => array(
				'type' => 'object'
			),
			'gkitSubMenuIndicatorPaddingDesktop' => array(
				'type' => 'object',
				'default' => array(
					'top' => '5px',
					'right' => '5px',
					'bottom' => '5px',
					'left' => '5px'
				)
			),
			'gkitSubMenuIndicatorPaddingTablet' => array(
				'type' => 'object'
			),
			'gkitSubMenuIndicatorPaddingMobile' => array(
				'type' => 'object'
			),
			'gkitSubMenuIndicatorPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitSubMenuIndicatorPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitSubMenuIndicatorPaddingLaptop' => array(
				'type' => 'object'
			),
			'gkitSubMenuIndicatorPaddingWideScreen' => array(
				'type' => 'object'
			),
			'gkitSubMenuIndicatorBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'gkitSubMenuIndicatorBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'gkitSubMenuIndicatorBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'gkitSubMenuIndicatorBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitSubMenuIndicatorBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitSubMenuIndicatorBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'gkitSubMenuIndicatorBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'gkitSubMenuIndicatorLeftSpacingDesktop' => array(
				'type' => 'object'
			),
			'gkitSubMenuIndicatorLeftSpacingTablet' => array(
				'type' => 'object'
			),
			'gkitSubMenuIndicatorLeftSpacingMobile' => array(
				'type' => 'object'
			),
			'gkitSubMenuIndicatorLeftSpacingTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitSubMenuIndicatorLeftSpacingMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitSubMenuIndicatorLeftSpacingLaptop' => array(
				'type' => 'object'
			),
			'gkitSubMenuIndicatorLeftSpacingWideScreen' => array(
				'type' => 'object'
			)
		),
		'supports' => array(
			'html' => false,
			'anchor' => true
		),
		'textdomain' => 'gutenkit-blocks-addon',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./frontend.js'
	),
	'nav-menu-submenu' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'gutenkit/nav-menu-submenu',
		'version' => '1.0.0',
		'title' => 'Nav Menu Submenu',
		'category' => 'gutenkit',
		'description' => 'Nav menu submenu block for gutenberg.',
		'allowedBlocks' => array(
			'gutenkit/nav-menu-item'
		),
		'parent' => array(
			'gutenkit/nav-menu-item'
		),
		'example' => array(
			'preview' => true
		),
		'attributes' => array(
			'blockID' => array(
				'type' => 'string'
			),
			'blockClass' => array(
				'type' => 'string'
			),
			'blocksCSS' => array(
				'type' => 'object'
			),
			'gkitSubMenuContainerWidthDesktop' => array(
				'type' => 'object',
				'default' => array(
					'size' => 200,
					'unit' => 'px'
				)
			),
			'gkitSubMenuContainerWidthTablet' => array(
				'type' => 'object'
			),
			'gkitSubMenuContainerWidthMobile' => array(
				'type' => 'object'
			),
			'gkitSubMenuContainerWidthTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitSubMenuContainerWidthMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitSubMenuContainerWidthLaptop' => array(
				'type' => 'object'
			),
			'gkitSubMenuContainerWidthWideScreen' => array(
				'type' => 'object'
			),
			'gkitSubMenuAlignmentDesktop' => array(
				'type' => 'string'
			),
			'gkitSubMenuAlignmentTablet' => array(
				'type' => 'string'
			),
			'gkitSubMenuAlignmentMobile' => array(
				'type' => 'string'
			),
			'gkitSubMenuAlignmentTabletLandscape' => array(
				'type' => 'string'
			),
			'gkitSubMenuAlignmentMobileLandscape' => array(
				'type' => 'string'
			),
			'gkitSubMenuAlignmentLaptop' => array(
				'type' => 'string'
			),
			'gkitSubMenuAlignmentWideScreen' => array(
				'type' => 'string'
			),
			'gkitSubMenuItemSpaceBetweenDesktop' => array(
				'type' => 'object'
			),
			'gkitSubMenuItemSpaceBetweenTablet' => array(
				'type' => 'object'
			),
			'gkitSubMenuItemSpaceBetweenMobile' => array(
				'type' => 'object'
			),
			'gkitSubMenuItemSpaceBetweenTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitSubMenuItemSpaceBetweenMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitSubMenuItemSpaceBetweenLaptop' => array(
				'type' => 'object'
			),
			'gkitSubMenuItemSpaceBetweenWideScreen' => array(
				'type' => 'object'
			),
			'gkitSubMenuItemTypography' => array(
				'type' => 'object'
			),
			'gkitSubMenuItemBackgroundNormal' => array(
				'type' => 'object'
			),
			'gkitSubMenuItemTextColorNormal' => array(
				'type' => 'string'
			),
			'gkitSubMenuItemMobileTextColorNormal' => array(
				'type' => 'string'
			),
			'gkitSubMenuItemMobileTextColorHover' => array(
				'type' => 'string'
			),
			'gkitSubMenuItemMobileTextColorActive' => array(
				'type' => 'string'
			),
			'gkitSubMenuItemBorderNormal' => array(
				'type' => 'object'
			),
			'gkitSubMenuItemBackgroundHover' => array(
				'type' => 'object'
			),
			'gkitSubMenuItemTextColorHover' => array(
				'type' => 'string'
			),
			'gkitSubMenuItemBorderColorHover' => array(
				'type' => 'string'
			),
			'gkitSubMenuItemBackgroundActive' => array(
				'type' => 'object'
			),
			'gkitSubMenuItemTextColorActive' => array(
				'type' => 'string'
			),
			'gkitSubMenuItemBorderColorActive' => array(
				'type' => 'string'
			),
			'gkitSubMenuItemPaddingDesktop' => array(
				'type' => 'object',
				'default' => array(
					'top' => '0px',
					'right' => '10px',
					'bottom' => '0px',
					'left' => '10px'
				)
			),
			'gkitSubMenuItemPaddingTablet' => array(
				'type' => 'object'
			),
			'gkitSubMenuItemPaddingMobile' => array(
				'type' => 'object'
			),
			'gkitSubMenuItemPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitSubMenuItemPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitSubMenuItemPaddingLaptop' => array(
				'type' => 'object'
			),
			'gkitSubMenuItemPaddingWideScreen' => array(
				'type' => 'object'
			),
			'gkitSubMenuItemBorder' => array(
				'type' => 'object'
			),
			'gkitSubMenuItemBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'gkitSubMenuItemBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'gkitSubMenuItemBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'gkitSubMenuItemBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitSubMenuItemBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitSubMenuItemBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'gkitSubMenuItemBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'gkitSubMenuBreakPoint' => array(
				'type' => 'string',
				'default' => '1024'
			),
			'gkitSubMenuCustomMenuBreakPoint' => array(
				'type' => 'number',
				'default' => 1024
			)
		),
		'supports' => array(
			'html' => false,
			'anchor' => true
		),
		'textdomain' => 'gutenkit-blocks-addon',
		'editorScript' => 'file:./index.js',
		'style' => 'file:./style-index.css'
	),
	'offcanvas' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'gutenkit/offcanvas',
		'version' => '1.0.0',
		'title' => 'Offcanvas',
		'category' => 'gutenkit',
		'icon' => 'menu-alt3',
		'keywords' => array(
			'ekit',
			'header',
			'offcanvas',
			'side menu',
			'side info'
		),
		'description' => 'Offcanvas block for gutenberg.',
		'example' => array(
			'preview' => true
		),
		'attributes' => array(
			'blockID' => array(
				'type' => 'string'
			),
			'blockClass' => array(
				'type' => 'string'
			),
			'blocksCSS' => array(
				'type' => 'object'
			),
			'overlayColor' => array(
				'type' => 'string',
				'default' => '#242424e6'
			),
			'isHamburger' => array(
				'type' => 'string',
				'default' => 'hamburger'
			),
			'menuType' => array(
				'type' => 'string',
				'default' => 'icon'
			),
			'offCanvasCloseMenuType' => array(
				'type' => 'string',
				'default' => 'icon'
			),
			'closeIcon' => array(
				'type' => 'object',
				'default' => array(
					'title' => 'close',
					'src' => '<svg xmlns=\'http://www.w3.org/2000/svg\'  viewBox=\'0 0 50 50\' width=\'50px\' height=\'50px\'><path d=\'M 9.15625 6.3125 L 6.3125 9.15625 L 22.15625 25 L 6.21875 40.96875 L 9.03125 43.78125 L 25 27.84375 L 40.9375 43.78125 L 43.78125 40.9375 L 27.84375 25 L 43.6875 9.15625 L 40.84375 6.3125 L 25 22.15625 Z\'/></svg>'
				),
				'excludeCopy' => true
			),
			'editIcon' => array(
				'type' => 'object',
				'default' => array(
					'title' => 'plus',
					'src' => '<svg version=\'1.1\' xmlns=\'http://www.w3.org/2000/svg\' width=\'32\' height=\'32\' viewBox=\'0 0 32 32\'><title>plus</title><path d=\'M32 15.345h-14.945v-14.945h-2.11v14.945h-14.945v2.11h14.945v14.945h2.11v-14.945h14.945z\'></path></svg>'
				),
				'excludeCopy' => true
			),
			'offCanvasIcons' => array(
				'type' => 'object',
				'default' => array(
					'title' => 'align-left',
					'src' => '<svg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 448 512\'><path d=\'M288 64c0 17.7-14.3 32-32 32H32C14.3 96 0 81.7 0 64S14.3 32 32 32H256c17.7 0 32 14.3 32 32zm0 256c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H256c17.7 0 32 14.3 32 32zM0 192c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 448c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z\'/></svg>'
				),
				'excludeCopy' => true
			),
			'iconPosition' => array(
				'type' => 'string',
				'default' => 'before'
			),
			'offCanvasText' => array(
				'type' => 'string',
				'default' => 'Menu'
			),
			'gkitoffCanvasStyle' => array(
				'type' => 'string',
				'default' => 'slide-style'
			),
			'overlaySwitcher' => array(
				'type' => 'boolean',
				'default' => true
			),
			'disableScroll' => array(
				'type' => 'boolean',
				'default' => true
			),
			'sidebarTransition' => array(
				'type' => 'object',
				'default' => array(
					'size' => 0.3
				)
			),
			'htmlTag' => array(
				'type' => 'string',
				'default' => 'div'
			),
			'gkitCloseIconSizeDesktop' => array(
				'type' => 'object',
				'default' => array(
					'size' => 16,
					'unit' => 'px'
				)
			),
			'gkitCloseIconSizeTablet' => array(
				'type' => 'object',
				'default' => array(
					'size' => 16,
					'unit' => 'px'
				)
			),
			'gkitCloseIconSizeMobile' => array(
				'type' => 'object',
				'default' => array(
					'size' => 16,
					'unit' => 'px'
				)
			),
			'gkitCloseIconSizeTabletLandscape' => array(
				'type' => 'object',
				'default' => array(
					'size' => 16,
					'unit' => 'px'
				)
			),
			'gkitCloseIconSizeMobileLandscape' => array(
				'type' => 'object',
				'default' => array(
					'size' => 16,
					'unit' => 'px'
				)
			),
			'gkitCloseIconSizeLaptop' => array(
				'type' => 'object',
				'default' => array(
					'size' => 16,
					'unit' => 'px'
				)
			),
			'gkitCloseIconSizeWideScreen' => array(
				'type' => 'object',
				'default' => array(
					'size' => 16,
					'unit' => 'px'
				)
			),
			'offCanvasCloseText' => array(
				'type' => 'string',
				'default' => 'Close'
			),
			'closeIconPosition' => array(
				'type' => 'string',
				'default' => 'before'
			),
			'closeIconSpacingDesktop' => array(
				'type' => 'object',
				'default' => array(
					'size' => 5,
					'unit' => 'px'
				)
			),
			'closeIconSpacingTablet' => array(
				'type' => 'object'
			),
			'closeIconSpacingMobile' => array(
				'type' => 'object'
			),
			'closeIconSpacingTabletLandscape' => array(
				'type' => 'object'
			),
			'closeIconSpacingMobileLandscape' => array(
				'type' => 'object'
			),
			'closeIconSpacingLaptop' => array(
				'type' => 'object'
			),
			'closeIconSpacingWideScreen' => array(
				'type' => 'object'
			),
			'closeIconCustomHeightWidth' => array(
				'type' => 'boolean',
				'default' => false
			),
			'closeIconWidthDesktop' => array(
				'type' => 'object'
			),
			'closeIconWidthTablet' => array(
				'type' => 'object'
			),
			'closeIconWidthMobile' => array(
				'type' => 'object'
			),
			'closeIconWidthTabletLandscape' => array(
				'type' => 'object'
			),
			'closeIconWidthMobileLandscape' => array(
				'type' => 'object'
			),
			'closeIconWidthLaptop' => array(
				'type' => 'object'
			),
			'closeIconWidthWideScreen' => array(
				'type' => 'object'
			),
			'closeIconHeightDesktop' => array(
				'type' => 'object'
			),
			'closeIconHeightTablet' => array(
				'type' => 'object'
			),
			'closeIconHeightMobile' => array(
				'type' => 'object'
			),
			'closeIconHeightTabletLandscape' => array(
				'type' => 'object'
			),
			'closeIconHeightMobileLandscape' => array(
				'type' => 'object'
			),
			'closeIconHeightLaptop' => array(
				'type' => 'object'
			),
			'closeIconHeightWideScreen' => array(
				'type' => 'object'
			),
			'gkitHamburgIconSizeDesktop' => array(
				'type' => 'object'
			),
			'gkitHamburgIconSizeTablet' => array(
				'type' => 'object'
			),
			'gkitHamburgIconSizeMobile' => array(
				'type' => 'object'
			),
			'gkitHamburgIconSizeTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitHamburgIconSizeMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitHamburgIconSizeLaptop' => array(
				'type' => 'object'
			),
			'gkitHamburgIconSizeWideScreen' => array(
				'type' => 'object'
			),
			'gkitHamburgIconSpacingDesktop' => array(
				'type' => 'object',
				'default' => array(
					'size' => 5,
					'unit' => 'px'
				)
			),
			'gkitHamburgIconSpacingTablet' => array(
				'type' => 'object'
			),
			'gkitHamburgIconSpacingMobile' => array(
				'type' => 'object'
			),
			'gkitHamburgIconSpacingTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitHamburgIconSpacingMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitHamburgIconSpacingLaptop' => array(
				'type' => 'object'
			),
			'gkitHamburgIconSpacingWideScreen' => array(
				'type' => 'object'
			),
			'gkitHamburgTypography' => array(
				'type' => 'object'
			),
			'closeIconTypography' => array(
				'type' => 'object'
			),
			'gkitHamburgColor' => array(
				'type' => 'string'
			),
			'gkitHamburgBgColor' => array(
				'type' => 'object'
			),
			'gkitHamburgBorder' => array(
				'type' => 'object'
			),
			'gkitHamburgColorHover' => array(
				'type' => 'string'
			),
			'gkitHamburgBgColorHover' => array(
				'type' => 'object'
			),
			'gkitHamburgBorderHover' => array(
				'type' => 'object'
			),
			'gkitBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'gkitBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'gkitBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'gkitBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'gkitBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'gkitPaddingDesktop' => array(
				'type' => 'object',
				'default' => array(
					'top' => '10px',
					'right' => '10px',
					'bottom' => '10px',
					'left' => '10px'
				)
			),
			'gkitPaddingTablet' => array(
				'type' => 'object'
			),
			'gkitPaddingMobile' => array(
				'type' => 'object'
			),
			'gkitPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitPaddingLaptop' => array(
				'type' => 'object'
			),
			'gkitPaddingWideScreen' => array(
				'type' => 'object'
			),
			'gkitMarginDesktop' => array(
				'type' => 'object'
			),
			'gkitMarginTablet' => array(
				'type' => 'object'
			),
			'gkitMarginMobile' => array(
				'type' => 'object'
			),
			'gkitMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitMarginLaptop' => array(
				'type' => 'object'
			),
			'gkitMarginWideScreen' => array(
				'type' => 'object'
			),
			'gkitAlignmentDesktop' => array(
				'type' => 'string',
				'default' => 'start'
			),
			'gkitAlignmentTablet' => array(
				'type' => 'string'
			),
			'gkitAlignmentMobile' => array(
				'type' => 'string'
			),
			'gkitAlignmentTabletLandscape' => array(
				'type' => 'string'
			),
			'gkitAlignmentMobileLandscape' => array(
				'type' => 'string'
			),
			'gkitAlignmentLaptop' => array(
				'type' => 'string'
			),
			'gkitAlignmentWideScreen' => array(
				'type' => 'string'
			),
			'gkitBoxShadow' => array(
				'type' => 'object'
			),
			'offCanvasSidebarContentAlignmentsDesktop' => array(
				'type' => 'string',
				'default' => 'center'
			),
			'offCanvasSidebarContentAlignmentsTablet' => array(
				'type' => 'string',
				'default' => 'center'
			),
			'offCanvasSidebarContentAlignmentsMobile' => array(
				'type' => 'string',
				'default' => 'center'
			),
			'offCanvasSidebarContentAlignmentsTabletLandscape' => array(
				'type' => 'string',
				'default' => 'center'
			),
			'offCanvasSidebarContentAlignmentsMobileLandscape' => array(
				'type' => 'string',
				'default' => 'center'
			),
			'offCanvasSidebarContentAlignmentsLaptop' => array(
				'type' => 'string',
				'default' => 'center'
			),
			'offCanvasSidebarContentAlignmentsWideScreen' => array(
				'type' => 'string',
				'default' => 'center'
			),
			'gkitOffCanvasSizeDesktop' => array(
				'type' => 'object',
				'default' => array(
					'size' => 350,
					'unit' => 'px'
				)
			),
			'gkitOffCanvasSizeTablet' => array(
				'type' => 'object'
			),
			'gkitOffCanvasSizeMobile' => array(
				'type' => 'object'
			),
			'gkitOffCanvasSizeTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitOffCanvasSizeMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitOffCanvasSizeLaptop' => array(
				'type' => 'object'
			),
			'gkitOffCanvasSizeWideScreen' => array(
				'type' => 'object'
			),
			'gkitOffCanvasHeightDesktop' => array(
				'type' => 'object',
				'default' => array(
					'size' => 400,
					'unit' => 'px'
				)
			),
			'gkitOffCanvasHeightTablet' => array(
				'type' => 'object'
			),
			'gkitOffCanvasHeightMobile' => array(
				'type' => 'object'
			),
			'gkitOffCanvasHeightTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitOffCanvasHeightMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitOffCanvasHeightLaptop' => array(
				'type' => 'object'
			),
			'gkitOffCanvasHeightWideScreen' => array(
				'type' => 'object'
			),
			'gkitOffCanvasBg' => array(
				'type' => 'object',
				'selector' => '{{WRAPPER}}'
			),
			'offCanvasSidebarBoxShadow' => array(
				'type' => 'object',
				'selector' => '{{WRAPPER}}'
			),
			'offCanvasPosition' => array(
				'type' => 'string',
				'default' => 'right'
			),
			'offCanvasPositionOffsetDesktop' => array(
				'type' => 'object'
			),
			'offCanvasPositionOffsetTablet' => array(
				'type' => 'object'
			),
			'offCanvasPositionOffsetMobile' => array(
				'type' => 'object'
			),
			'offCanvasPositionOffsetTabletLandscape' => array(
				'type' => 'object'
			),
			'offCanvasPositionOffsetMobileLandscape' => array(
				'type' => 'object'
			),
			'offCanvasPositionOffsetLaptop' => array(
				'type' => 'object'
			),
			'offCanvasPositionOffsetWideScreen' => array(
				'type' => 'object'
			),
			'gkitOffCanvasPaddingDesktop' => array(
				'type' => 'object'
			),
			'gkitOffCanvasPaddingTablet' => array(
				'type' => 'object'
			),
			'gkitOffCanvasPaddingMobile' => array(
				'type' => 'object'
			),
			'gkitOffCanvasPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitOffCanvasPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitOffCanvasPaddingLaptop' => array(
				'type' => 'object'
			),
			'gkitOffCanvasPaddingWideScreen' => array(
				'type' => 'object'
			),
			'offCanvasCloseIconPositionSwitcher' => array(
				'type' => 'boolean'
			),
			'offCanvasCloseIconXPositionDesktop' => array(
				'type' => 'object'
			),
			'offCanvasCloseIconXPositionTablet' => array(
				'type' => 'object'
			),
			'offCanvasCloseIconXPositionMobile' => array(
				'type' => 'object'
			),
			'offCanvasCloseIconXPositionTabletLandscape' => array(
				'type' => 'object'
			),
			'offCanvasCloseIconXPositionMobileLandscape' => array(
				'type' => 'object'
			),
			'offCanvasCloseIconXPositionLaptop' => array(
				'type' => 'object'
			),
			'offCanvasCloseIconXPositionWideScreen' => array(
				'type' => 'object'
			),
			'offCanvasCloseIconYPositionDesktop' => array(
				'type' => 'object'
			),
			'offCanvasCloseIconYPositionTablet' => array(
				'type' => 'object'
			),
			'offCanvasCloseIconYPositionMobile' => array(
				'type' => 'object'
			),
			'offCanvasCloseIconYPositionTabletLandscape' => array(
				'type' => 'object'
			),
			'offCanvasCloseIconYPositionMobileLandscape' => array(
				'type' => 'object'
			),
			'offCanvasCloseIconYPositionLaptop' => array(
				'type' => 'object'
			),
			'offCanvasCloseIconYPositionWideScreen' => array(
				'type' => 'object'
			),
			'gkitCloseColor' => array(
				'type' => 'string'
			),
			'gkitCloseBgColor' => array(
				'type' => 'object'
			),
			'gkitCloseBorder' => array(
				'type' => 'object'
			),
			'gkitCloseColorHover' => array(
				'type' => 'string'
			),
			'gkitCloseBgColorHover' => array(
				'type' => 'object'
			),
			'gkitCloseBorderHover' => array(
				'type' => 'object'
			),
			'gkitCloseBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'gkitCloseBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'gkitCloseBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'gkitCloseBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitCloseBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitCloseBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'gkitCloseBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'gkitClosePaddingDesktop' => array(
				'type' => 'object'
			),
			'gkitClosePaddingTablet' => array(
				'type' => 'object'
			),
			'gkitClosePaddingMobile' => array(
				'type' => 'object'
			),
			'gkitClosePaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitClosePaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitClosePaddingLaptop' => array(
				'type' => 'object'
			),
			'gkitClosePaddingWideScreen' => array(
				'type' => 'object'
			),
			'gkitCloseMarginDesktop' => array(
				'type' => 'object'
			),
			'gkitCloseMarginTablet' => array(
				'type' => 'object'
			),
			'gkitCloseMarginMobile' => array(
				'type' => 'object'
			),
			'gkitCloseMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitCloseMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitCloseMarginLaptop' => array(
				'type' => 'object'
			),
			'gkitCloseMarginWideScreen' => array(
				'type' => 'object'
			),
			'gkitCloseBoxShadow' => array(
				'type' => 'object'
			)
		),
		'supports' => array(
			'html' => false,
			'anchor' => true
		),
		'textdomain' => 'gutenkit-blocks-addon',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./frontend.js'
	),
	'page-list' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'gutenkit/page-list',
		'version' => '1.0.0',
		'title' => 'Page List',
		'category' => 'gutenkit',
		'icon' => 'menu-alt3',
		'keywords' => array(
			'gkit',
			'list',
			'page list',
			'page'
		),
		'description' => 'Page list block for gutenburg',
		'example' => array(
			'preview' => true
		),
		'attributes' => array(
			'blockID' => array(
				'type' => 'string'
			),
			'blockClass' => array(
				'type' => 'string'
			),
			'blocksCSS' => array(
				'type' => 'object'
			),
			'listItems' => array(
				'type' => 'array',
				'default' => array(
					
				),
				'excludeCopy' => true
			),
			'newListItems' => array(
				'type' => 'array',
				'default' => array(
					
				),
				'excludeCopy' => true
			),
			'listWidthDesktop' => array(
				'type' => 'object',
				'default' => array(
					'size' => 35,
					'unit' => '%'
				)
			),
			'listWidthTablet' => array(
				'type' => 'object'
			),
			'listWidthMobile' => array(
				'type' => 'object'
			),
			'listWidthTabletLandscape' => array(
				'type' => 'object'
			),
			'listWidthMobileLandscape' => array(
				'type' => 'object'
			),
			'listWidthLaptop' => array(
				'type' => 'object'
			),
			'listWidthWideScreen' => array(
				'type' => 'object'
			),
			'listPaddingDesktop' => array(
				'type' => 'object'
			),
			'listPaddingTablet' => array(
				'type' => 'object'
			),
			'listPaddingMobile' => array(
				'type' => 'object'
			),
			'listPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'listPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'listPaddingLaptop' => array(
				'type' => 'object'
			),
			'listPaddingWideScreen' => array(
				'type' => 'object'
			),
			'rowGapBetweenDesktop' => array(
				'type' => 'object'
			),
			'rowGapBetweenTablet' => array(
				'type' => 'object'
			),
			'rowGapBetweenMobile' => array(
				'type' => 'object'
			),
			'rowGapBetweenTabletLandscape' => array(
				'type' => 'object'
			),
			'rowGapBetweenMobileLandscape' => array(
				'type' => 'object'
			),
			'rowGapBetweenLaptop' => array(
				'type' => 'object'
			),
			'rowGapBetweenWideScreen' => array(
				'type' => 'object'
			),
			'columnGapBetweenDesktop' => array(
				'type' => 'object'
			),
			'columnGapBetweenTablet' => array(
				'type' => 'object'
			),
			'columnGapBetweenMobile' => array(
				'type' => 'object'
			),
			'columnGapBetweenTabletLandscape' => array(
				'type' => 'object'
			),
			'columnGapBetweenMobileLandscape' => array(
				'type' => 'object'
			),
			'columnGapBetweenLaptop' => array(
				'type' => 'object'
			),
			'columnGapBetweenWideScreen' => array(
				'type' => 'object'
			),
			'listBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'listBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'listBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'listBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'listBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'listBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'listBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'listBoxShadow' => array(
				'type' => 'object'
			),
			'listBgColor' => array(
				'type' => 'object'
			),
			'listIconColor' => array(
				'type' => 'string'
			),
			'listBgHoverColor' => array(
				'type' => 'object'
			),
			'listAlignment' => array(
				'type' => 'string'
			),
			'listAlignmentDesktop' => array(
				'type' => 'string'
			),
			'listAlignmentTablet' => array(
				'type' => 'string'
			),
			'listAlignmentMobile' => array(
				'type' => 'string'
			),
			'listAlignmentTabletLandscape' => array(
				'type' => 'string'
			),
			'listAlignmentMobileLandscape' => array(
				'type' => 'string'
			),
			'listAlignmentLaptop' => array(
				'type' => 'string'
			),
			'listAlignmentWideScreen' => array(
				'type' => 'string'
			),
			'listDividerControl' => array(
				'type' => 'object'
			),
			'iconSizeDesktop' => array(
				'type' => 'object',
				'default' => array(
					'size' => 14,
					'unit' => 'px'
				)
			),
			'iconSizeTablet' => array(
				'type' => 'object'
			),
			'iconSizeMobile' => array(
				'type' => 'object'
			),
			'iconSizeTabletLandscape' => array(
				'type' => 'object'
			),
			'iconSizeMobileLandscape' => array(
				'type' => 'object'
			),
			'iconSizeLaptop' => array(
				'type' => 'object'
			),
			'iconSizeWideScreen' => array(
				'type' => 'object'
			),
			'iconMarginDesktop' => array(
				'type' => 'object'
			),
			'iconMarginTablet' => array(
				'type' => 'object'
			),
			'iconMarginMobile' => array(
				'type' => 'object'
			),
			'iconMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'iconMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'iconMarginLaptop' => array(
				'type' => 'object'
			),
			'iconMarginWideScreen' => array(
				'type' => 'object'
			),
			'iconPaddingDesktop' => array(
				'type' => 'object'
			),
			'iconPaddingTablet' => array(
				'type' => 'object'
			),
			'iconPaddingMobile' => array(
				'type' => 'object'
			),
			'iconPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'iconPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'iconPaddingLaptop' => array(
				'type' => 'object'
			),
			'iconPaddingWideScreen' => array(
				'type' => 'object'
			),
			'iconBackground' => array(
				'type' => 'object'
			),
			'iconBackgroundHover' => array(
				'type' => 'object'
			),
			'iconColor' => array(
				'type' => 'string'
			),
			'iconHover' => array(
				'type' => 'string'
			),
			'iconPosition' => array(
				'type' => 'string',
				'default' => 'row'
			),
			'iconAlignmentDesktop' => array(
				'type' => 'string',
				'default' => 'middle'
			),
			'iconAlignmentTablet' => array(
				'type' => 'string'
			),
			'iconAlignmentMobile' => array(
				'type' => 'string'
			),
			'iconAlignmentTabletLandscape' => array(
				'type' => 'string'
			),
			'iconAlignmentMobileLandscape' => array(
				'type' => 'string'
			),
			'iconAlignmentLaptop' => array(
				'type' => 'string'
			),
			'iconAlignmentWideScreen' => array(
				'type' => 'string'
			),
			'textColor' => array(
				'type' => 'string'
			),
			'textHoverColor' => array(
				'type' => 'string'
			),
			'textMarginDesktop' => array(
				'type' => 'object'
			),
			'textMarginTablet' => array(
				'type' => 'object'
			),
			'textMarginMobile' => array(
				'type' => 'object'
			),
			'textMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'textMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'textMarginLaptop' => array(
				'type' => 'object'
			),
			'textMarginWideScreen' => array(
				'type' => 'object'
			),
			'textPaddingDesktop' => array(
				'type' => 'object',
				'default' => array(
					'size' => 5,
					'unit' => 'px'
				)
			),
			'textPaddingTablet' => array(
				'type' => 'object'
			),
			'textPaddingMobile' => array(
				'type' => 'object'
			),
			'textPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'textPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'textPaddingLaptop' => array(
				'type' => 'object'
			),
			'textPaddingWideScreen' => array(
				'type' => 'object'
			),
			'textTypography' => array(
				'type' => 'object'
			),
			'listBorder' => array(
				'type' => 'object'
			),
			'subtitleTypography' => array(
				'type' => 'object'
			),
			'subtitleColor' => array(
				'type' => 'string'
			),
			'subtitleHoverColor' => array(
				'type' => 'string'
			),
			'subtitleMarginDesktop' => array(
				'type' => 'object'
			),
			'subtitleMarginTablet' => array(
				'type' => 'object'
			),
			'subtitleMarginMobile' => array(
				'type' => 'object'
			),
			'subtitleMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'subtitleMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'subtitleMarginLaptop' => array(
				'type' => 'object'
			),
			'subtitleMarginWideScreen' => array(
				'type' => 'object'
			),
			'labelTypography' => array(
				'type' => 'object'
			),
			'labelMarginDesktop' => array(
				'type' => 'object'
			),
			'labelMarginTablet' => array(
				'type' => 'object'
			),
			'labelMarginMobile' => array(
				'type' => 'object'
			),
			'labelMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'labelMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'labelMarginLaptop' => array(
				'type' => 'object'
			),
			'labelMarginWideScreen' => array(
				'type' => 'object'
			),
			'labelPaddingDesktop' => array(
				'type' => 'object'
			),
			'labelPaddingTablet' => array(
				'type' => 'object'
			),
			'labelPaddingMobile' => array(
				'type' => 'object'
			),
			'labelPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'labelPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'labelPaddingLaptop' => array(
				'type' => 'object'
			),
			'labelPaddingWideScreen' => array(
				'type' => 'object'
			),
			'labelBorderRadiusDesktop' => array(
				'type' => 'object',
				'default' => array(
					'top' => '3px',
					'right' => '3px',
					'bottom' => '3px',
					'left' => '3px'
				)
			),
			'labelBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'labelBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'labelBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'labelBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'labelBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'labelBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'horizontalAlignment' => array(
				'type' => 'string',
				'default' => 'right'
			),
			'verticalAlignmentDesktop' => array(
				'type' => 'string',
				'default' => 'center'
			),
			'verticalAlignmentTablet' => array(
				'type' => 'string'
			),
			'verticalAlignmentMobile' => array(
				'type' => 'string'
			),
			'verticalAlignmentTabletLandscape' => array(
				'type' => 'string'
			),
			'verticalAlignmentMobileLandscape' => array(
				'type' => 'string'
			),
			'verticalAlignmentLaptop' => array(
				'type' => 'string'
			),
			'verticalAlignmentWideScreen' => array(
				'type' => 'string'
			),
			'LinkAppearance' => array(
				'type' => 'string',
				'default' => '_blank'
			),
			'showHideRel' => array(
				'type' => 'boolean',
				'default' => true
			),
			'layOut' => array(
				'type' => 'string',
				'default' => 'default'
			),
			'columnAppearance' => array(
				'type' => 'object',
				'default' => array(
					'size' => 3
				)
			),
			'isSelected' => array(
				'type' => 'boolean',
				'default' => false
			)
		),
		'supports' => array(
			'html' => false,
			'anchor' => true,
			'align' => array(
				'wide',
				'full'
			)
		),
		'textdomain' => 'gutenkit-blocks-addon',
		'editorScript' => 'file:./index.js',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php'
	),
	'post-grid' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'gutenkit/post-grid',
		'version' => '1.0.0',
		'title' => 'Post Grid',
		'category' => 'gutenkit',
		'keywords' => array(
			'gkit',
			'gutenkit',
			'post',
			'grid',
			'post grid'
		),
		'description' => 'Post Grid block for gutenberg.',
		'example' => array(
			'preview' => true
		),
		'attributes' => array(
			'blockID' => array(
				'type' => 'string'
			),
			'blockClass' => array(
				'type' => 'string'
			),
			'blocksCSS' => array(
				'type' => 'object'
			),
			'selectedCategories' => array(
				'type' => 'array',
				'default' => array(
					
				)
			),
			'postCount' => array(
				'type' => 'number',
				'default' => 3
			),
			'posts' => array(
				'type' => 'array',
				'default' => array(
					
				)
			),
			'enableCropTitle' => array(
				'type' => 'boolean',
				'default' => false
			),
			'numberOfWordsTitle' => array(
				'type' => 'number',
				'default' => 5
			),
			'selectColumnDesktop' => array(
				'type' => 'number',
				'default' => 3
			),
			'selectColumnTablet' => array(
				'type' => 'number'
			),
			'selectColumnMobile' => array(
				'type' => 'number'
			),
			'selectColumnTabletLandscape' => array(
				'type' => 'number'
			),
			'selectColumnMobileLandscape' => array(
				'type' => 'number'
			),
			'selectColumnLaptop' => array(
				'type' => 'number'
			),
			'selectColumnWideScreen' => array(
				'type' => 'number'
			),
			'gapDesktop' => array(
				'type' => 'object'
			),
			'gapTablet' => array(
				'type' => 'object'
			),
			'gapMobile' => array(
				'type' => 'object'
			),
			'gapTabletLandscape' => array(
				'type' => 'object'
			),
			'gapMobileLandscape' => array(
				'type' => 'object'
			),
			'gapLaptop' => array(
				'type' => 'object'
			),
			'gapWideScreen' => array(
				'type' => 'object'
			),
			'heightDesktop' => array(
				'type' => 'object'
			),
			'heightTablet' => array(
				'type' => 'object'
			),
			'heightMobile' => array(
				'type' => 'object'
			),
			'heightTabletLandscape' => array(
				'type' => 'object'
			),
			'heightMobileLandscape' => array(
				'type' => 'object'
			),
			'heightLaptop' => array(
				'type' => 'object'
			),
			'heightWideScreen' => array(
				'type' => 'object'
			),
			'titleTypography' => array(
				'type' => 'object'
			),
			'titleColor' => array(
				'type' => 'string'
			),
			'titleColorHover' => array(
				'type' => 'string'
			),
			'titleMarginDesktop' => array(
				'type' => 'object'
			),
			'titleMarginTablet' => array(
				'type' => 'object'
			),
			'titleMarginMobile' => array(
				'type' => 'object'
			),
			'titleMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'titleMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'titleMarginLaptop' => array(
				'type' => 'object'
			),
			'titleMarginWideScreen' => array(
				'type' => 'object'
			)
		),
		'supports' => array(
			'html' => false,
			'anchor' => true,
			'align' => array(
				'wide',
				'full'
			)
		),
		'textdomain' => 'gutenkit-blocks-addon',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php'
	),
	'post-tab' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'gutenkit/post-tab',
		'version' => '1.0.0',
		'title' => 'Post Tab',
		'category' => 'gutenkit',
		'icon' => 'menu-alt3',
		'keywords' => array(
			'gkit',
			'gutenkit',
			'post-tab',
			'post tab'
		),
		'description' => 'Post tab block for gutenberg.',
		'example' => array(
			'preview' => true
		),
		'attributes' => array(
			'blockID' => array(
				'type' => 'string'
			),
			'blockClass' => array(
				'type' => 'string'
			),
			'blocksCSS' => array(
				'type' => 'object'
			),
			'selectedCatagories' => array(
				'type' => 'array',
				'default' => array(
					
				)
			),
			'postCount' => array(
				'type' => 'number',
				'default' => 3
			),
			'posts' => array(
				'type' => 'array',
				'default' => array(
					
				)
			),
			'enableCropTitle' => array(
				'type' => 'boolean',
				'default' => false
			),
			'numberOfWordsTitle' => array(
				'type' => 'number',
				'default' => 5
			),
			'selectColumnDesktop' => array(
				'type' => 'string',
				'default' => '33.33%'
			),
			'selectColumnTablet' => array(
				'type' => 'string',
				'default' => '50%'
			),
			'selectColumnMobile' => array(
				'type' => 'string',
				'default' => '50%'
			),
			'selectColumnTabletLandscape' => array(
				'type' => 'string'
			),
			'selectColumnMobileLandscape' => array(
				'type' => 'string'
			),
			'selectColumnLaptop' => array(
				'type' => 'string'
			),
			'selectColumnWideScreen' => array(
				'type' => 'string'
			),
			'eventType' => array(
				'type' => 'string',
				'default' => 'mouseenter'
			),
			'tabPositionDesktop' => array(
				'type' => 'string',
				'default' => 'vertical'
			),
			'tabPositionTablet' => array(
				'type' => 'string'
			),
			'tabPositionMobile' => array(
				'type' => 'string',
				'default' => 'horizontal'
			),
			'tabPositionTabletLandscape' => array(
				'type' => 'string'
			),
			'tabPositionMobileLandscape' => array(
				'type' => 'string'
			),
			'tabPositionLaptop' => array(
				'type' => 'string'
			),
			'tabPositionWideScreen' => array(
				'type' => 'string'
			),
			'tabAlignmentDesktop' => array(
				'type' => 'string'
			),
			'tabAlignmenTablet' => array(
				'type' => 'string'
			),
			'tabAlignmentMobile' => array(
				'type' => 'string'
			),
			'tabAlignmentTabletLandscape' => array(
				'type' => 'string'
			),
			'tabAlignmentMobileLandscape' => array(
				'type' => 'string'
			),
			'tabAlignmentLaptop' => array(
				'type' => 'string'
			),
			'tabAlignmentWideScreen' => array(
				'type' => 'string'
			),
			'tabJustifyDesktop' => array(
				'type' => 'string'
			),
			'tabJustifyablet' => array(
				'type' => 'string'
			),
			'tabJustifyMobile' => array(
				'type' => 'string'
			),
			'tabJustifyTabletLandscape' => array(
				'type' => 'string'
			),
			'tabJustifyMobileLandscape' => array(
				'type' => 'string'
			),
			'tabJustifyLaptop' => array(
				'type' => 'string'
			),
			'tabJustifyWideScreen' => array(
				'type' => 'string'
			),
			'linkArchive' => array(
				'type' => 'boolean',
				'default' => false
			),
			'tabContainerBorder' => array(
				'type' => 'object'
			),
			'tabContainerBackground' => array(
				'type' => 'object'
			),
			'tabContainerPaddingDesktop' => array(
				'type' => 'object'
			),
			'tabContainerPaddingTablet' => array(
				'type' => 'object'
			),
			'tabContainerPaddingMobile' => array(
				'type' => 'object'
			),
			'tabContainerPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'tabContainerPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'tabContainerPaddingLaptop' => array(
				'type' => 'object'
			),
			'tabContainerPaddingWideScreen' => array(
				'type' => 'object'
			),
			'tabContainerMarginDesktop' => array(
				'type' => 'object'
			),
			'tabContainerMarginTablet' => array(
				'type' => 'object'
			),
			'tabContainerMarginMobile' => array(
				'type' => 'object'
			),
			'tabContainerMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'tabContainerMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'tabContainerMarginLaptop' => array(
				'type' => 'object'
			),
			'tabContainerMarginWideScreen' => array(
				'type' => 'object'
			),
			'itemTypography' => array(
				'type' => 'object'
			),
			'itemPaddingDesktop' => array(
				'type' => 'object'
			),
			'itemPaddingTablet' => array(
				'type' => 'object'
			),
			'itemPaddingMobile' => array(
				'type' => 'object'
			),
			'itemPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'itemPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'itemPaddingLaptop' => array(
				'type' => 'object'
			),
			'itemPaddingWideScreen' => array(
				'type' => 'object'
			),
			'itemMarginDesktop' => array(
				'type' => 'object'
			),
			'itemMarginTablet' => array(
				'type' => 'object'
			),
			'itemMarginMobile' => array(
				'type' => 'object'
			),
			'itemMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'itemMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'itemMarginLaptop' => array(
				'type' => 'object'
			),
			'itemMarginWideScreen' => array(
				'type' => 'object'
			),
			'itemTextColor' => array(
				'type' => 'string'
			),
			'itemBgColor' => array(
				'type' => 'object'
			),
			'itemBorder' => array(
				'type' => 'object'
			),
			'itemBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'itemBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'itemBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'itemBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'itemBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'itemBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'itemBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'itemShadow' => array(
				'type' => 'object'
			),
			'itemHoverColor' => array(
				'type' => 'string'
			),
			'itemHoverBgColor' => array(
				'type' => 'object'
			),
			'itemHoverBorder' => array(
				'type' => 'object'
			),
			'itemHoverBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'itemHoverBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'itemHoverBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'itemHoverBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'itemHoverBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'itemHoverBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'itemHoverBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'itemHoverShadow' => array(
				'type' => 'object'
			),
			'itemActiveColor' => array(
				'type' => 'string'
			),
			'itemActiveBgColor' => array(
				'type' => 'object'
			),
			'itemActiveBorder' => array(
				'type' => 'object'
			),
			'itemActiveBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'itemActiveBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'itemActiveBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'itemActiveBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'itemActiveBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'itemActiveBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'itemActiveBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'itemActiveShadow' => array(
				'type' => 'object'
			),
			'disableHoverEffect' => array(
				'type' => 'boolean',
				'default' => false
			),
			'imageWidth' => array(
				'type' => 'object'
			),
			'imageHeight' => array(
				'type' => 'object'
			),
			'titleTypography' => array(
				'type' => 'object'
			),
			'titleColor' => array(
				'type' => 'string'
			),
			'titleHoverColor' => array(
				'type' => 'string'
			),
			'titleMarginDesktop' => array(
				'type' => 'object'
			),
			'titleMarginTablet' => array(
				'type' => 'object'
			),
			'titleMarginMobile' => array(
				'type' => 'object'
			),
			'titleMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'titleMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'titleMarginLaptop' => array(
				'type' => 'object'
			),
			'titleMarginWideScreen' => array(
				'type' => 'object'
			),
			'contentAlignmentDesktop' => array(
				'type' => 'object'
			),
			'contentAlignmentTablet' => array(
				'type' => 'object'
			),
			'contentAlignmentMobile' => array(
				'type' => 'object'
			),
			'contentAlignmentTabletLandscape' => array(
				'type' => 'object'
			),
			'contentAlignmentMobileLandscape' => array(
				'type' => 'object'
			),
			'contentAlignmentLaptop' => array(
				'type' => 'object'
			),
			'contentAlignmentWideScreen' => array(
				'type' => 'object'
			)
		),
		'supports' => array(
			'html' => false,
			'anchor' => true,
			'align' => array(
				'wide',
				'full'
			)
		),
		'textdomain' => 'gutenkit-blocks-addon',
		'editorScript' => 'file:./index.js',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php',
		'viewScript' => 'file:./frontend.js'
	),
	'pricing-table' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'gutenkit/pricing-table',
		'version' => '1.0.0',
		'title' => 'Pricing Table',
		'category' => 'gutenkit',
		'icon' => 'menu-alt3',
		'keywords' => array(
			'gkit',
			'price',
			'pricing',
			'table',
			'package',
			'plan'
		),
		'description' => 'Pricing table block for gutenberg.',
		'example' => array(
			'preview' => true
		),
		'attributes' => array(
			'blockID' => array(
				'type' => 'string'
			),
			'blockClass' => array(
				'type' => 'string'
			),
			'blocksCSS' => array(
				'type' => 'object'
			),
			'titleSize' => array(
				'type' => 'string',
				'default' => 'h3'
			),
			'titleText' => array(
				'type' => 'string',
				'default' => 'Starter'
			),
			'subTitleText' => array(
				'type' => 'string',
				'default' => 'A small river named Duden flows by their place and supplies'
			),
			'htmlTag' => array(
				'type' => 'string',
				'default' => 'h3'
			),
			'currency' => array(
				'type' => 'string',
				'default' => '$'
			),
			'price' => array(
				'type' => 'string',
				'default' => '5.99'
			),
			'duration' => array(
				'type' => 'string',
				'default' => 'month'
			),
			'featuresStyle' => array(
				'type' => 'string',
				'default' => 'paragraph'
			),
			'featuresText' => array(
				'type' => 'string',
				'default' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam'
			),
			'featuresItems' => array(
				'type' => 'array',
				'default' => array(
					array(
						'key' => '1',
						'featuresTitle' => '15 Email Account',
						'featuresInfoText' => '',
						'addFeatureIcon' => false,
						'featuresIcon' => array(
							'src' => '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
<title>check</title>
<path d="M31.512 6.162l-1.706-1.706c-0.488-0.487-1.219-0.487-1.706 0h-0.125l-16.331 16.925c-0.244 0.244-0.606 0.244-0.85 0l-6.7-7.188-0.119-0.119c-0.487-0.488-1.219-0.488-1.706 0l-1.706 1.706c-0.244 0.244-0.362 0.606-0.362 0.85s0.119 0.613 0.362 0.856l0.256 0.369 9.5 10.238c0.244 0.244 0.481 0.369 0.85 0.369 0.363 0 0.606-0.125 0.85-0.369l19.494-20.225c0.488-0.487 0.488-1.219 0-1.706z"></path>
</svg>
'
						),
						'featureIconColor' => '#55b559'
					),
					array(
						'key' => '2',
						'featuresTitle' => '15 Email Account',
						'featuresInfoText' => '',
						'addFeatureIcon' => false,
						'featuresIcon' => array(
							'src' => '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
<title>check</title>
<path d="M31.512 6.162l-1.706-1.706c-0.488-0.487-1.219-0.487-1.706 0h-0.125l-16.331 16.925c-0.244 0.244-0.606 0.244-0.85 0l-6.7-7.188-0.119-0.119c-0.487-0.488-1.219-0.488-1.706 0l-1.706 1.706c-0.244 0.244-0.362 0.606-0.362 0.85s0.119 0.613 0.362 0.856l0.256 0.369 9.5 10.238c0.244 0.244 0.481 0.369 0.85 0.369 0.363 0 0.606-0.125 0.85-0.369l19.494-20.225c0.488-0.487 0.488-1.219 0-1.706z"></path>
</svg>
'
						),
						'featureIconColor' => '#55b559'
					),
					array(
						'key' => '3',
						'featuresTitle' => '15 Email Account',
						'featuresInfoText' => '',
						'addFeatureIcon' => false,
						'featuresIcon' => array(
							'src' => '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
<title>check</title>
<path d="M31.512 6.162l-1.706-1.706c-0.488-0.487-1.219-0.487-1.706 0h-0.125l-16.331 16.925c-0.244 0.244-0.606 0.244-0.85 0l-6.7-7.188-0.119-0.119c-0.487-0.488-1.219-0.488-1.706 0l-1.706 1.706c-0.244 0.244-0.362 0.606-0.362 0.85s0.119 0.613 0.362 0.856l0.256 0.369 9.5 10.238c0.244 0.244 0.481 0.369 0.85 0.369 0.363 0 0.606-0.125 0.85-0.369l19.494-20.225c0.488-0.487 0.488-1.219 0-1.706z"></path>
</svg>
'
						),
						'featureIconColor' => '#55b559'
					)
				)
			),
			'icons' => array(
				'type' => 'string',
				'default' => 'fa-solid fa-angle-down'
			),
			'btnText' => array(
				'type' => 'string',
				'default' => 'Learn more'
			),
			'buttonUrl' => array(
				'type' => 'object',
				'default' => array(
					'url' => '#'
				)
			),
			'buttonIcon' => array(
				'type' => 'boolean',
				'default' => false
			),
			'customClass' => array(
				'type' => 'string',
				'default' => ''
			),
			'customId' => array(
				'type' => 'string'
			),
			'iconPosStyle' => array(
				'type' => 'string',
				'default' => 'right'
			),
			'btnIcon' => array(
				'type' => 'object',
				'default' => array(
					'title' => 'arrow-right-1',
					'src' => '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
<title>arrow-right-1</title>
<path d="M30.966 16.234l-9.6-9.6c-0.312-0.312-0.819-0.312-1.131 0s-0.312 0.819 0 1.131l8.234 8.234h-26.069c-0.442 0-0.8 0.358-0.8 0.8s0.358 0.8 0.8 0.8h26.069l-8.234 8.234c-0.312 0.312-0.312 0.819 0 1.131 0.156 0.156 0.361 0.234 0.566 0.234s0.409-0.078 0.566-0.234l9.6-9.6c0.312-0.312 0.312-0.819 0-1.131z"></path>
</svg>
'
				)
			),
			'headerIcon' => array(
				'type' => 'object',
				'default' => array(
					'title' => 'amazon',
					'src' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M257.2 162.7c-48.7 1.8-169.5 15.5-169.5 117.5 0 109.5 138.3 114 183.5 43.2 6.5 10.2 35.4 37.5 45.3 46.8l56.8-56S341 288.9 341 261.4V114.3C341 89 316.5 32 228.7 32 140.7 32 94 87 94 136.3l73.5 6.8c16.3-49.5 54.2-49.5 54.2-49.5 40.7-.1 35.5 29.8 35.5 69.1zm0 86.8c0 80-84.2 68-84.2 17.2 0-47.2 50.5-56.7 84.2-57.8v40.6zm136 163.5c-7.7 10-70 67-174.5 67S34.2 408.5 9.7 379c-6.8-7.7 1-11.3 5.5-8.3C88.5 415.2 203 488.5 387.7 401c7.5-3.7 13.3 2 5.5 12zm39.8 2.2c-6.5 15.8-16 26.8-21.2 31-5.5 4.5-9.5 2.7-6.5-3.8s19.3-46.5 12.7-55c-6.5-8.3-37-4.3-48-3.2-10.8 1-13 2-14-.3-2.3-5.7 21.7-15.5 37.5-17.5 15.7-1.8 41-.8 46 5.7 3.7 5.1 0 27.1-6.5 43.1z"/></svg>'
				)
			),
			'pricingTableButtonSpacingDesktop' => array(
				'type' => 'object'
			),
			'pricingTableButtonSpacingTablet' => array(
				'type' => 'object'
			),
			'pricingTableButtonSpacingMobile' => array(
				'type' => 'object'
			),
			'pricingTableButtonSpacingTabletLandscape' => array(
				'type' => 'object'
			),
			'pricingTableButtonSpacingMobileLandscape' => array(
				'type' => 'object'
			),
			'pricingTableButtonSpacingLaptop' => array(
				'type' => 'object'
			),
			'pricingTableButtonSpacingWideScreen' => array(
				'type' => 'object'
			),
			'buttonTypography' => array(
				'type' => 'object'
			),
			'priceBtnIconSizeDesktop' => array(
				'type' => 'object',
				'default' => array(
					'size' => 16,
					'unit' => 'px'
				)
			),
			'priceBtnIconSizeTablet' => array(
				'type' => 'object'
			),
			'priceBtnIconSizeMobile' => array(
				'type' => 'object'
			),
			'priceBtnIconSizeTabletLandscape' => array(
				'type' => 'object'
			),
			'priceBtnIconSizeMobileLandscape' => array(
				'type' => 'object'
			),
			'priceBtnIconSizeLaptop' => array(
				'type' => 'object'
			),
			'priceBtnIconSizeWideScreen' => array(
				'type' => 'object'
			),
			'priceBtnSizeDesktop' => array(
				'type' => 'object'
			),
			'priceBtnSizeTablet' => array(
				'type' => 'object'
			),
			'priceBtnSizeMobile' => array(
				'type' => 'object'
			),
			'priceBtnSizeTabletLandscape' => array(
				'type' => 'object'
			),
			'priceBtnSizeMobileLandscape' => array(
				'type' => 'object'
			),
			'priceBtnSizeLaptop' => array(
				'type' => 'object'
			),
			'priceBtnSizeWideScreen' => array(
				'type' => 'object'
			),
			'buttonAlignmentDesktop' => array(
				'type' => 'string'
			),
			'buttonAlignmentTablet' => array(
				'type' => 'string'
			),
			'buttonAlignmentMobile' => array(
				'type' => 'string'
			),
			'buttonAlignmentTabletLandscape' => array(
				'type' => 'string'
			),
			'buttonAlignmentMobileLandscape' => array(
				'type' => 'string'
			),
			'buttonAlignmentLaptop' => array(
				'type' => 'string'
			),
			'buttonAlignmentWideScreen' => array(
				'type' => 'string'
			),
			'buttonTextColor' => array(
				'type' => 'string'
			),
			'buttonHoverTextColor' => array(
				'type' => 'string'
			),
			'buttonBgColor' => array(
				'type' => 'object'
			),
			'buttonHoverBgColor' => array(
				'type' => 'object'
			),
			'buttonPaddingDesktop' => array(
				'type' => 'object'
			),
			'buttonPaddingTablet' => array(
				'type' => 'object'
			),
			'buttonPaddingMobile' => array(
				'type' => 'object'
			),
			'buttonPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'buttonPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'buttonPaddingLaptop' => array(
				'type' => 'object'
			),
			'buttonPaddingWideScreen' => array(
				'type' => 'object'
			),
			'buttonBorder' => array(
				'type' => 'object'
			),
			'buttonHoverBorder' => array(
				'type' => 'object'
			),
			'buttonBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'buttonBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'buttonBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'buttonBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'buttonBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'buttonBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'buttonBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'buttonBoxShadow' => array(
				'type' => 'object'
			),
			'buttonBoxShadowHover' => array(
				'type' => 'object'
			),
			'titleAlignmentDesktop' => array(
				'type' => 'string'
			),
			'titleAlignmentTablet' => array(
				'type' => 'string'
			),
			'titleAlignmentMobile' => array(
				'type' => 'string'
			),
			'titleAlignmentTabletLandscape' => array(
				'type' => 'string'
			),
			'titleAlignmentMobileLandscape' => array(
				'type' => 'string'
			),
			'titleAlignmentLaptop' => array(
				'type' => 'string'
			),
			'titleAlignmentWideScreen' => array(
				'type' => 'string'
			),
			'titleTextColor' => array(
				'type' => 'string'
			),
			'titleTextHoverColor' => array(
				'type' => 'string'
			),
			'titleTypography' => array(
				'type' => 'object'
			),
			'titleMarginDesktop' => array(
				'type' => 'object'
			),
			'titleMarginTablet' => array(
				'type' => 'object'
			),
			'titleMarginMobile' => array(
				'type' => 'object'
			),
			'titleMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'titleMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'titleMarginLaptop' => array(
				'type' => 'object'
			),
			'titleMarginWideScreen' => array(
				'type' => 'object'
			),
			'titlePaddingDesktop' => array(
				'type' => 'object'
			),
			'titlePaddingTablet' => array(
				'type' => 'object'
			),
			'titlePaddingMobile' => array(
				'type' => 'object'
			),
			'titlePaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'titlePaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'titlePaddingLaptop' => array(
				'type' => 'object'
			),
			'titlePaddingWideScreen' => array(
				'type' => 'object'
			),
			'titleBorderColor' => array(
				'type' => 'string'
			),
			'titleBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'titleBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'titleBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'titleBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'titleBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'titleBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'titleBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'subTitleAlignmentDesktop' => array(
				'type' => 'string'
			),
			'subTitleAlignmentTablet' => array(
				'type' => 'string'
			),
			'subTitleAlignmentMobile' => array(
				'type' => 'string'
			),
			'subTitleAlignmentTabletLandscape' => array(
				'type' => 'string'
			),
			'subTitleAlignmentMobileLandscape' => array(
				'type' => 'string'
			),
			'subTitleAlignmentLaptop' => array(
				'type' => 'string'
			),
			'subTitleAlignmentWideScreen' => array(
				'type' => 'string'
			),
			'subTitleTextColor' => array(
				'type' => 'string'
			),
			'subTitleTextHoverColor' => array(
				'type' => 'string'
			),
			'subTitlePaddingDesktop' => array(
				'type' => 'object'
			),
			'subTitlePaddingTablet' => array(
				'type' => 'object'
			),
			'subTitlePaddingMobile' => array(
				'type' => 'object'
			),
			'subTitlePaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'subTitlePaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'subTitlePaddingLaptop' => array(
				'type' => 'object'
			),
			'subTitlePaddingWideScreen' => array(
				'type' => 'object'
			),
			'subTitleBorder' => array(
				'type' => 'object'
			),
			'subTitleHoverBorder' => array(
				'type' => 'object'
			),
			'subTitleBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'subTitleBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'subTitleBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'subTitleBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'subTitleBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'subTitleBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'subTitleBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'subTitleTypography' => array(
				'type' => 'object'
			),
			'priceTagContainerDesktop' => array(
				'type' => 'object',
				'default' => array(
					'size' => -30,
					'unit' => 'px'
				)
			),
			'priceTagContainerTablet' => array(
				'type' => 'object'
			),
			'priceTagContainerMobile' => array(
				'type' => 'object'
			),
			'priceTagContainerTabletLandscape' => array(
				'type' => 'object'
			),
			'priceTagContainerMobileLandscape' => array(
				'type' => 'object'
			),
			'priceTagContainerLaptop' => array(
				'type' => 'object'
			),
			'priceTagContainerWideScreen' => array(
				'type' => 'object'
			),
			'priceTagWidthDesktop' => array(
				'type' => 'object',
				'default' => array(
					'size' => 104.7,
					'unit' => '%'
				)
			),
			'priceTagWidthTablet' => array(
				'type' => 'object'
			),
			'priceTagWidthMobile' => array(
				'type' => 'object'
			),
			'priceTagWidthTabletLandscape' => array(
				'type' => 'object'
			),
			'priceTagWidthMobileLandscape' => array(
				'type' => 'object'
			),
			'priceTagWidthLaptop' => array(
				'type' => 'object'
			),
			'priceTagWidthWideScreen' => array(
				'type' => 'object'
			),
			'priceTagPaddingDesktop' => array(
				'type' => 'object'
			),
			'priceTagPaddingTablet' => array(
				'type' => 'object'
			),
			'priceTagPaddingMobile' => array(
				'type' => 'object'
			),
			'priceTagPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'priceTagPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'priceTagPaddingLaptop' => array(
				'type' => 'object'
			),
			'priceTagPaddingWideScreen' => array(
				'type' => 'object'
			),
			'priceTagMarginDesktop' => array(
				'type' => 'object'
			),
			'priceTagMarginTablet' => array(
				'type' => 'object'
			),
			'priceTagMarginMobile' => array(
				'type' => 'object'
			),
			'priceTagMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'priceTagMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'priceTagMarginLaptop' => array(
				'type' => 'object'
			),
			'priceTagMarginWideScreen' => array(
				'type' => 'object'
			),
			'priceTagTypography' => array(
				'type' => 'object',
				'default' => array(
					'size' => 48,
					'unit' => 'px'
				)
			),
			'priceTagColor' => array(
				'type' => 'string'
			),
			'priceTagHoverColor' => array(
				'type' => 'string'
			),
			'priceTagDurationTypography' => array(
				'type' => 'object'
			),
			'currencyPosition' => array(
				'type' => 'string',
				'default' => 'start'
			),
			'priceTagPositionDesktop' => array(
				'type' => 'string',
				'default' => 'super'
			),
			'priceTagPositionTablet' => array(
				'type' => 'string'
			),
			'priceTagPositionMobile' => array(
				'type' => 'string'
			),
			'priceTagPositionTabletLandscape' => array(
				'type' => 'string'
			),
			'priceTagPositionMobileLandscape' => array(
				'type' => 'string'
			),
			'priceTagPositionLaptop' => array(
				'type' => 'string'
			),
			'priceTagPositionWideScreen' => array(
				'type' => 'string'
			),
			'currencySignAlignmentDesktop' => array(
				'type' => 'string',
				'default' => 'super'
			),
			'currencySignAlignmentTablet' => array(
				'type' => 'string'
			),
			'currencySignAlignmentMobile' => array(
				'type' => 'string'
			),
			'currencySignAlignmentTabletLandscape' => array(
				'type' => 'string'
			),
			'currencySignAlignmentMobileLandscape' => array(
				'type' => 'string'
			),
			'currencySignAlignmentLaptop' => array(
				'type' => 'string'
			),
			'currencySignAlignmentWideScreen' => array(
				'type' => 'string'
			),
			'currencySymbolTypography' => array(
				'type' => 'object'
			),
			'currencySymbolTextColor' => array(
				'type' => 'string'
			),
			'currencySymbolTextHoverColor' => array(
				'type' => 'string'
			),
			'currencySymbolBgColor' => array(
				'type' => 'object'
			),
			'currencySymbolHoverBgColor' => array(
				'type' => 'object'
			),
			'priceTagBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'priceTagBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'priceTagBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'priceTagBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'priceTagBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'priceTagBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'priceTagBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'priceTagBoxShadow' => array(
				'type' => 'object'
			),
			'pricingContainerAlignmentDesktop' => array(
				'type' => 'string',
				'default' => 'center'
			),
			'pricingContainerAlignmentTablet' => array(
				'type' => 'string'
			),
			'pricingContainerAlignmentMobile' => array(
				'type' => 'string'
			),
			'pricingContainerAlignmentTabletLandscape' => array(
				'type' => 'string'
			),
			'pricingContainerAlignmentMobileLandscape' => array(
				'type' => 'string'
			),
			'pricingContainerAlignmentLaptop' => array(
				'type' => 'string'
			),
			'pricingContainerAlignmentWideScreen' => array(
				'type' => 'string'
			),
			'pricingContainerGapBetweenDesktop' => array(
				'type' => 'object'
			),
			'pricingContainerGapBetweenTablet' => array(
				'type' => 'object'
			),
			'pricingContainerGapBetweenMobile' => array(
				'type' => 'object'
			),
			'pricingContainerGapBetweenTabletLandscape' => array(
				'type' => 'object'
			),
			'pricingContainerGapBetweenMobileLandscape' => array(
				'type' => 'object'
			),
			'pricingContainerGapBetweenLaptop' => array(
				'type' => 'object'
			),
			'pricingContainerGapBetweenWideScreen' => array(
				'type' => 'object'
			),
			'headerIconColor' => array(
				'type' => 'string'
			),
			'headerIconBgColor' => array(
				'type' => 'string'
			),
			'headerIconBorder' => array(
				'type' => 'object'
			),
			'headerIconBorderRadius' => array(
				'type' => 'object'
			),
			'headerIconHoverColor' => array(
				'type' => 'string'
			),
			'headerIconHoverBgColor' => array(
				'type' => 'string'
			),
			'headerIconHoverBorder' => array(
				'type' => 'object'
			),
			'headerIconHoverBorderRadius' => array(
				'type' => 'object'
			),
			'headerIconSizeDesktop' => array(
				'type' => 'object'
			),
			'headerIconSizeTablet' => array(
				'type' => 'object'
			),
			'headerIconSizeMobile' => array(
				'type' => 'object'
			),
			'headerIconSizeTabletLandscape' => array(
				'type' => 'object'
			),
			'headerIconSizeMobileLandscape' => array(
				'type' => 'object'
			),
			'headerIconSizeLaptop' => array(
				'type' => 'object'
			),
			'headerIconSizeWideScreen' => array(
				'type' => 'object'
			),
			'headerIconVerticalAlignDesktop' => array(
				'type' => 'object'
			),
			'headerIconVerticalAlignTablet' => array(
				'type' => 'object'
			),
			'headerIconVerticalAlignMobile' => array(
				'type' => 'object'
			),
			'headerIconVerticalAlignTabletLandscape' => array(
				'type' => 'object'
			),
			'headerIconVerticalAlignMobileLandscape' => array(
				'type' => 'object'
			),
			'headerIconVerticalAlignLaptop' => array(
				'type' => 'object'
			),
			'headerIconVerticalAlignWideScreen' => array(
				'type' => 'object'
			),
			'useHeightWidthIcon' => array(
				'type' => 'boolean',
				'default' => false
			),
			'headerIconHeightDesktop' => array(
				'type' => 'object'
			),
			'headerIconHeightTablet' => array(
				'type' => 'object'
			),
			'headerIconHeightMobile' => array(
				'type' => 'object'
			),
			'headerIconHeightTabletLandscape' => array(
				'type' => 'object'
			),
			'headerIconHeightMobileLandscape' => array(
				'type' => 'object'
			),
			'headerIconHeightLaptop' => array(
				'type' => 'object'
			),
			'headerIconHeightWideScreen' => array(
				'type' => 'object'
			),
			'headerIconWidthDesktop' => array(
				'type' => 'object'
			),
			'headerIconWidthTablet' => array(
				'type' => 'object'
			),
			'headerIconWidthMobile' => array(
				'type' => 'object'
			),
			'headerIconWidthTabletLandscape' => array(
				'type' => 'object'
			),
			'headerIconWidthMobileLandscape' => array(
				'type' => 'object'
			),
			'headerIconWidthLaptop' => array(
				'type' => 'object'
			),
			'headerIconWidthWideScreen' => array(
				'type' => 'object'
			),
			'headerImageWidthDesktop' => array(
				'type' => 'object'
			),
			'headerImageWidthTablet' => array(
				'type' => 'object'
			),
			'headerImageWidthMobile' => array(
				'type' => 'object'
			),
			'headerImageWidthTabletLandscape' => array(
				'type' => 'object'
			),
			'headerImageWidthMobileLandscape' => array(
				'type' => 'object'
			),
			'headerImageWidthLaptop' => array(
				'type' => 'object'
			),
			'headerImageWidthWideScreen' => array(
				'type' => 'object'
			),
			'headerIconLineHeightDesktop' => array(
				'type' => 'object'
			),
			'headerIconLineHeightTablet' => array(
				'type' => 'object'
			),
			'headerIconLineHeightMobile' => array(
				'type' => 'object'
			),
			'headerIconLineHeightTabletLandscape' => array(
				'type' => 'object'
			),
			'headerIconLineHeightMobileLandscape' => array(
				'type' => 'object'
			),
			'headerIconLineHeightLaptop' => array(
				'type' => 'object'
			),
			'headerIconLineHeightWideScreen' => array(
				'type' => 'object'
			),
			'headerImageBorder' => array(
				'type' => 'object'
			),
			'headerImageBorderRadius' => array(
				'type' => 'object'
			),
			'headerImageBoxShadow' => array(
				'type' => 'object'
			),
			'headerImageHoverBorder' => array(
				'type' => 'object'
			),
			'headerImageHoverBorderRadius' => array(
				'type' => 'object'
			),
			'headerImageHoverBoxShadow' => array(
				'type' => 'object'
			),
			'headerImageMarginDesktop' => array(
				'type' => 'object'
			),
			'headerImageMarginTablet' => array(
				'type' => 'object'
			),
			'headerImageMarginMobile' => array(
				'type' => 'object'
			),
			'headerImageMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'headerImageMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'headerImageMarginLaptop' => array(
				'type' => 'object'
			),
			'headerImageMarginWideScreen' => array(
				'type' => 'object'
			),
			'pricingContainerColor' => array(
				'type' => 'object'
			),
			'featuresAlignmentDesktop' => array(
				'type' => 'string'
			),
			'featuresAlignmentTablet' => array(
				'type' => 'string',
				'default' => 'center'
			),
			'featuresAlignmentMobile' => array(
				'type' => 'string',
				'default' => 'center'
			),
			'featuresAlignmentTabletLandscape' => array(
				'type' => 'string'
			),
			'featuresAlignmentMobileLandscape' => array(
				'type' => 'string'
			),
			'featuresAlignmentLaptop' => array(
				'type' => 'string'
			),
			'featuresAlignmentWideScreen' => array(
				'type' => 'string'
			),
			'featureTypography' => array(
				'type' => 'object'
			),
			'featureTextColor' => array(
				'type' => 'string'
			),
			'featureTextHoverColor' => array(
				'type' => 'string'
			),
			'featuresBorderColor' => array(
				'type' => 'string'
			),
			'featureListGapDesktop' => array(
				'type' => 'object'
			),
			'featureListGapTablet' => array(
				'type' => 'object'
			),
			'featureListGapMobile' => array(
				'type' => 'object'
			),
			'featureListGapTabletLandscape' => array(
				'type' => 'object'
			),
			'featureListGapMobileLandscape' => array(
				'type' => 'object'
			),
			'featureListGapLaptop' => array(
				'type' => 'object'
			),
			'featureListGapWideScreen' => array(
				'type' => 'object'
			),
			'featuresMarginDesktop' => array(
				'type' => 'object'
			),
			'featuresMarginTablet' => array(
				'type' => 'object'
			),
			'featuresMarginMobile' => array(
				'type' => 'object'
			),
			'featuresMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'featuresMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'featuresMarginLaptop' => array(
				'type' => 'object'
			),
			'featuresMarginWideScreen' => array(
				'type' => 'object'
			),
			'featuresPaddingDesktop' => array(
				'type' => 'object'
			),
			'featuresPaddingTablet' => array(
				'type' => 'object'
			),
			'featuresPaddingMobile' => array(
				'type' => 'object'
			),
			'featuresPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'featuresPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'featuresPaddingLaptop' => array(
				'type' => 'object'
			),
			'featuresPaddingWideScreen' => array(
				'type' => 'object'
			),
			'featuresSpacingDesktop' => array(
				'type' => 'object',
				'default' => array(
					'size' => 5,
					'unit' => 'px'
				)
			),
			'featuresSpacingTablet' => array(
				'type' => 'object'
			),
			'featuresSpacingMobile' => array(
				'type' => 'object'
			),
			'featuresSpacingTabletLandscape' => array(
				'type' => 'object'
			),
			'featuresSpacingMobileLandscape' => array(
				'type' => 'object'
			),
			'featuresSpacingLaptop' => array(
				'type' => 'object'
			),
			'featuresSpacingWideScreen' => array(
				'type' => 'object'
			),
			'featuresBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'featuresBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'featuresBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'featuresBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'featuresBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'featuresBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'featuresBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'headerIconOrImage' => array(
				'type' => 'string',
				'default' => 'none'
			),
			'headerImage' => array(
				'type' => 'object',
				'default' => array(
					'type' => 'image'
				)
			),
			'imageSize' => array(
				'type' => 'string',
				'default' => 'full'
			),
			'featureIconSizeDesktop' => array(
				'type' => 'object',
				'default' => array(
					'size' => 12,
					'unit' => 'px'
				)
			),
			'featureIconSizeTablet' => array(
				'type' => 'object'
			),
			'featureIconSizeMobile' => array(
				'type' => 'object'
			),
			'featureIconSizeTabletLandscape' => array(
				'type' => 'object'
			),
			'featureIconSizeMobileLandscape' => array(
				'type' => 'object'
			),
			'featureIconSizeLaptop' => array(
				'type' => 'object'
			),
			'featureIconSizeWideScreen' => array(
				'type' => 'object'
			),
			'titleBorder' => array(
				'type' => 'object'
			),
			'titleHoverBorder' => array(
				'type' => 'object'
			),
			'SubTitleBorder' => array(
				'type' => 'object'
			),
			'priceTagBorder' => array(
				'type' => 'object'
			),
			'priceTagHoverBorder' => array(
				'type' => 'object'
			),
			'featuresBorder' => array(
				'type' => 'object'
			),
			'featuresHoverBorder' => array(
				'type' => 'object'
			),
			'customOrdering' => array(
				'type' => 'boolean',
				'default' => false
			),
			'orderItems' => array(
				'type' => 'array',
				'default' => array(
					array(
						'id' => 1,
						'class' => 'gkit-pricing-header',
						'name' => 'Header'
					),
					array(
						'id' => 2,
						'class' => 'gkit-pricing-price-wraper',
						'name' => 'Price Tag'
					),
					array(
						'id' => 3,
						'class' => 'gkit-pricing-content',
						'name' => 'Features'
					),
					array(
						'id' => 4,
						'class' => 'gkit-pricing-btn-wraper',
						'name' => 'Button'
					)
				)
			)
		),
		'supports' => array(
			'html' => false,
			'anchor' => true,
			'align' => array(
				'wide',
				'full'
			)
		),
		'textdomain' => 'gutenkit-blocks-addon',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css'
	),
	'progress-bar' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'gutenkit/progress-bar',
		'version' => '1.0.3',
		'title' => 'Progress Bar',
		'category' => 'gutenkit',
		'description' => 'Progress bar block for gutenberg.',
		'example' => array(
			'preview' => true
		),
		'attributes' => array(
			'blockID' => array(
				'type' => 'string'
			),
			'blockClass' => array(
				'type' => 'string'
			),
			'blocksCSS' => array(
				'type' => 'object'
			),
			'style' => array(
				'type' => 'string',
				'default' => 'default'
			),
			'title' => array(
				'type' => 'string',
				'default' => 'Wordpress',
				'excludeCopy' => true
			),
			'progress' => array(
				'type' => 'object',
				'default' => array(
					'size' => 90
				),
				'excludeCopy' => true
			),
			'duration' => array(
				'type' => 'object',
				'default' => array(
					'size' => 3500
				),
				'excludeCopy' => true
			),
			'percentageHide' => array(
				'type' => 'boolean',
				'default' => false,
				'excludeCopy' => true
			),
			'icon' => array(
				'type' => 'object',
				'default' => array(
					'title' => 'arrow-right-1',
					'src' => '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
<title>arrow-right-1</title>
<path d="M30.966 16.234l-9.6-9.6c-0.312-0.312-0.819-0.312-1.131 0s-0.312 0.819 0 1.131l8.234 8.234h-26.069c-0.442 0-0.8 0.358-0.8 0.8s0.358 0.8 0.8 0.8h26.069l-8.234 8.234c-0.312 0.312-0.312 0.819 0 1.131 0.156 0.156 0.361 0.234 0.566 0.234s0.409-0.078 0.566-0.234l9.6-9.6c0.312-0.312 0.312-0.819 0-1.131z"></path>
</svg>'
				)
			),
			'barBackground' => array(
				'type' => 'object'
			),
			'barHeightDesktop' => array(
				'type' => 'object'
			),
			'barHeightTablet' => array(
				'type' => 'object'
			),
			'barHeightMobile' => array(
				'type' => 'object'
			),
			'barHeightTabletLandscape' => array(
				'type' => 'object'
			),
			'barHeightMobileLandscape' => array(
				'type' => 'object'
			),
			'barHeightLaptop' => array(
				'type' => 'object'
			),
			'barHeightWideScreen' => array(
				'type' => 'object'
			),
			'barBoxShadow' => array(
				'type' => 'object'
			),
			'barborderRadius' => array(
				'type' => 'object'
			),
			'barPadding' => array(
				'type' => 'object'
			),
			'trackBackground' => array(
				'type' => 'object'
			),
			'trackBorderRadius' => array(
				'type' => 'object'
			),
			'titleColor' => array(
				'type' => 'string'
			),
			'titleTypography' => array(
				'type' => 'object'
			),
			'titleMarginBottomDesktop' => array(
				'type' => 'object'
			),
			'titleMarginBottomTablet' => array(
				'type' => 'object'
			),
			'titleMarginBottomMobile' => array(
				'type' => 'object'
			),
			'titleMarginBottomTabletLandscape' => array(
				'type' => 'object'
			),
			'titleMarginBottomMobileLandscape' => array(
				'type' => 'object'
			),
			'titleMarginBottomLaptop' => array(
				'type' => 'object'
			),
			'titleMarginBottomWideScreen' => array(
				'type' => 'object'
			),
			'percentageColor' => array(
				'type' => 'string'
			),
			'percentageTypography' => array(
				'type' => 'object'
			),
			'percentageBackground' => array(
				'type' => 'string'
			),
			'trackStripeBackground' => array(
				'type' => 'string'
			),
			'barStripeBackground' => array(
				'type' => 'string'
			),
			'iconColor' => array(
				'type' => 'string'
			),
			'iconSizeDesktop' => array(
				'type' => 'object'
			),
			'iconSizeTablet' => array(
				'type' => 'object'
			),
			'iconSizeMobile' => array(
				'type' => 'object'
			),
			'iconSizeTabletLandscape' => array(
				'type' => 'object'
			),
			'iconSizeMobileLandscape' => array(
				'type' => 'object'
			),
			'iconSizeLaptop' => array(
				'type' => 'object'
			),
			'iconSizeWideScreen' => array(
				'type' => 'object'
			),
			'switchColor' => array(
				'type' => 'string'
			),
			'trackBoxShadow' => array(
				'type' => 'object'
			)
		),
		'supports' => array(
			'html' => false,
			'align' => array(
				'wide',
				'full'
			),
			'anchor' => true
		),
		'textdomain' => 'gutenkit-blocks-addon',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./frontend.js'
	),
	'social-icons' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'gutenkit/social-icons',
		'version' => '1.0.0',
		'title' => 'Social Icons',
		'category' => 'gutenkit',
		'keywords' => array(
			'gkit',
			'social',
			'icon',
			'facebook',
			'twitter',
			'instagram',
			'linkedin'
		),
		'description' => 'Social icons block for gutenberg.',
		'example' => array(
			'preview' => true
		),
		'attributes' => array(
			'blockID' => array(
				'type' => 'string'
			),
			'blockClass' => array(
				'type' => 'string'
			),
			'blocksCSS' => array(
				'type' => 'object'
			),
			'gkitSocialmediaStyle' => array(
				'type' => 'string',
				'default' => 'icon'
			),
			'gkitSocialmediaStyleIconPosition' => array(
				'type' => 'string',
				'default' => 'before'
			),
			'gkitSocialmediaElementSpacingDesktop' => array(
				'type' => 'object',
				'default' => array(
					'unit' => 'px',
					'size' => 10
				)
			),
			'gkitSocialmediaElementSpacingTablet' => array(
				'type' => 'object'
			),
			'gkitSocialmediaElementSpacingMobile' => array(
				'type' => 'object'
			),
			'gkitSocialmediaElementSpacingTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitSocialmediaElementSpacingMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitSocialmediaElementSpacingLaptop' => array(
				'type' => 'object'
			),
			'gkitSocialmediaElementSpacingWideScreen' => array(
				'type' => 'object'
			),
			'gkitSocialmediaIconSpacingDesktop' => array(
				'type' => 'object',
				'default' => array(
					'unit' => 'px',
					'size' => 5
				)
			),
			'gkitSocialmediaIconSpacingTablet' => array(
				'type' => 'object'
			),
			'gkitSocialmediaIconSpacingMobile' => array(
				'type' => 'object'
			),
			'gkitSocialmediaIconSpacingTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitSocialmediaIconSpacingMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitSocialmediaIconSpacingLaptop' => array(
				'type' => 'object'
			),
			'gkitSocialmediaIconSpacingWideScreen' => array(
				'type' => 'object'
			),
			'gkitSocialmediaListAlignDesktop' => array(
				'type' => 'string',
				'default' => 'center'
			),
			'gkitSocialmediaListAlignTablet' => array(
				'type' => 'string'
			),
			'gkitSocialmediaListAlignMobile' => array(
				'type' => 'string'
			),
			'gkitSocialmediaListAlignTabletLandscape' => array(
				'type' => 'string'
			),
			'gkitSocialmediaListAlignMobileLandscape' => array(
				'type' => 'string'
			),
			'gkitSocialmediaListAlignLaptop' => array(
				'type' => 'string'
			),
			'gkitSocialmediaListAlignWideScreen' => array(
				'type' => 'string'
			),
			'gkitSocialmediaIcons' => array(
				'type' => 'array',
				'default' => array(
					array(
						'gkitSocialmediaIcon' => array(
							'title' => 'facebook-f',
							'src' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg>'
						),
						'gkitSocialmediaLabel' => 'Facebook',
						'gkitSocialmediaLink' => array(
							'url' => 'https://facebook.com'
						)
					),
					array(
						'gkitSocialmediaIcon' => array(
							'title' => 'twitter',
							'src' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg>'
						),
						'gkitSocialmediaLabel' => 'Twitter',
						'gkitSocialmediaLink' => array(
							'url' => 'https://twitter.com'
						)
					),
					array(
						'gkitSocialmediaIcon' => array(
							'title' => 'linkedin-in',
							'src' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/></svg>'
						),
						'gkitSocialmediaLabel' => 'LinkedIn',
						'gkitSocialmediaLink' => array(
							'url' => 'https://linkedin.com'
						)
					)
				),
				'excludeCopy' => true
			),
			'gkitSocialmediaListDisplayDesktop' => array(
				'type' => 'string',
				'default' => 'row'
			),
			'gkitSocialmediaListDisplayTablet' => array(
				'type' => 'string',
				'default' => 'row'
			),
			'gkitSocialmediaListDisplayMobile' => array(
				'type' => 'string',
				'default' => 'row'
			),
			'gkitSocialmediaListDisplayTabletLandscape' => array(
				'type' => 'string',
				'default' => 'row'
			),
			'gkitSocialmediaListDisplayMobileLandscape' => array(
				'type' => 'string',
				'default' => 'row'
			),
			'gkitSocialmediaListDisplayLaptop' => array(
				'type' => 'string',
				'default' => 'row'
			),
			'gkitSocialmediaListDisplayWideScreen' => array(
				'type' => 'string',
				'default' => 'row'
			),
			'gkitSocialmediaBorder' => array(
				'type' => 'object'
			),
			'gkitSocialmediaBoxShadow' => array(
				'type' => 'object'
			),
			'gkitSocialmediaBoxShadowHover' => array(
				'type' => 'object'
			),
			'gkitSocialmediaTextShadow' => array(
				'type' => 'object'
			),
			'gkitSocialmediaTextShadowHover' => array(
				'type' => 'object'
			),
			'gkitSocialmediaListBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'gkitSocialmediaListBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'gkitSocialmediaListBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'gkitSocialmediaListBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitSocialmediaListBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitSocialmediaListBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'gkitSocialmediaListBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'gkitSocialmediaListBorderRadiusHoverDesktop' => array(
				'type' => 'object'
			),
			'gkitSocialmediaListBorderRadiusHoverTablet' => array(
				'type' => 'object'
			),
			'gkitSocialmediaListBorderRadiusHoverMobile' => array(
				'type' => 'object'
			),
			'gkitSocialmediaListBorderRadiusHoverTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitSocialmediaListBorderRadiusHoverMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitSocialmediaListBorderRadiusHoverLaptop' => array(
				'type' => 'object'
			),
			'gkitSocialmediaListBorderRadiusHoverWideScreen' => array(
				'type' => 'object'
			),
			'gkitSocialmediaIconPaddingDesktop' => array(
				'type' => 'object',
				'default' => array(
					'left' => '20px',
					'right' => '20px',
					'top' => '20px',
					'bottom' => '20px'
				)
			),
			'gkitSocialmediaIconPaddingTablet' => array(
				'type' => 'object'
			),
			'gkitSocialmediaIconPaddingMobile' => array(
				'type' => 'object'
			),
			'gkitSocialmediaIconPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitSocialmediaIconPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitSocialmediaIconPaddingLaptop' => array(
				'type' => 'object'
			),
			'gkitSocialmediaIconPaddingWideScreen' => array(
				'type' => 'object'
			),
			'gkitSocialmediaListPaddingDesktop' => array(
				'type' => 'object'
			),
			'gkitSocialmediaListPaddingTablet' => array(
				'type' => 'object'
			),
			'gkitSocialmediaListPaddingMobile' => array(
				'type' => 'object'
			),
			'gkitSocialmediaListPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitSocialmediaListPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitSocialmediaListPaddingLaptop' => array(
				'type' => 'object'
			),
			'gkitSocialmediaListPaddingWideScreen' => array(
				'type' => 'object'
			),
			'gkitSocialmediaListIconSizeDesktop' => array(
				'type' => 'object'
			),
			'gkitSocialmediaListIconSizeTablet' => array(
				'type' => 'object'
			),
			'gkitSocialmediaListIconSizeMobile' => array(
				'type' => 'object'
			),
			'gkitSocialmediaListIconSizeTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitSocialmediaListIconSizeMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitSocialmediaListIconSizeLaptop' => array(
				'type' => 'object'
			),
			'gkitSocialmediaListIconSizeWideScreen' => array(
				'type' => 'object'
			),
			'gkitSocialmediaListTypography' => array(
				'type' => 'object'
			),
			'useHeightAndWidth' => array(
				'type' => 'boolean',
				'default' => true
			),
			'gkitSocialmediaListWidthDesktop' => array(
				'type' => 'object',
				'default' => array(
					'unit' => 'px',
					'size' => 40
				)
			),
			'gkitSocialmediaListWidthTablet' => array(
				'type' => 'object'
			),
			'gkitSocialmediaListWidthMobile' => array(
				'type' => 'object'
			),
			'gkitSocialmediaListWidthTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitSocialmediaListWidthMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitSocialmediaListWidthLaptop' => array(
				'type' => 'object'
			),
			'gkitSocialmediaListWidthWideScreen' => array(
				'type' => 'object'
			),
			'gkitSocialmediaListHeightDesktop' => array(
				'type' => 'object',
				'default' => array(
					'unit' => 'px',
					'size' => 40
				)
			),
			'gkitSocialmediaListHeightTablet' => array(
				'type' => 'object'
			),
			'gkitSocialmediaListHeightMobile' => array(
				'type' => 'object'
			),
			'gkitSocialmediaListHeightTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitSocialmediaListHeightMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitSocialmediaListHeightLaptop' => array(
				'type' => 'object'
			),
			'gkitSocialmediaListHeightWideScreen' => array(
				'type' => 'object'
			),
			'gkitSocialIconNomalColor' => array(
				'type' => 'string'
			),
			'gkitSocialIconNomalBackgroundColor' => array(
				'type' => 'object'
			),
			'gkitSocialIconHoverColor' => array(
				'type' => 'string'
			),
			'gkitSocialIconHoverBackgroundColor' => array(
				'type' => 'object'
			),
			'gkitSocialmediaBorderHover' => array(
				'type' => 'object'
			)
		),
		'supports' => array(
			'html' => false,
			'align' => array(
				'wide',
				'full'
			),
			'anchor' => true
		),
		'textdomain' => 'gutenkit-blocks-addon',
		'editorScript' => 'file:./index.js',
		'style' => 'file:./style-index.css'
	),
	'social-share' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'gutenkit/social-share',
		'version' => '1.0.0',
		'title' => 'Social Share',
		'category' => 'gutenkit',
		'description' => 'Social share block for gutenberg.',
		'keywords' => array(
			'gkit',
			'social',
			'share',
			'facebook',
			'twitter',
			'instagram',
			'linkedin'
		),
		'example' => array(
			'preview' => true
		),
		'attributes' => array(
			'blockID' => array(
				'type' => 'string'
			),
			'blockClass' => array(
				'type' => 'string'
			),
			'blocksCSS' => array(
				'type' => 'object'
			),
			'gkitSocialShareStyle' => array(
				'type' => 'string',
				'default' => 'icon'
			),
			'gkitSocialShareStyleIconPosition' => array(
				'type' => 'string',
				'default' => 'before'
			),
			'gkitSocialShareElementSpacingDesktop' => array(
				'type' => 'object',
				'default' => array(
					'unit' => 'px',
					'size' => 10
				)
			),
			'gkitSocialShareElementSpacingTablet' => array(
				'type' => 'object'
			),
			'gkitSocialShareElementSpacingMobile' => array(
				'type' => 'object'
			),
			'gkitSocialShareElementSpacingTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitSocialShareElementSpacingMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitSocialShareElementSpacingLaptop' => array(
				'type' => 'object'
			),
			'gkitSocialShareElementSpacingWideScreen' => array(
				'type' => 'object'
			),
			'gkitSocialShareIconSpacingDesktop' => array(
				'type' => 'object',
				'default' => array(
					'unit' => 'px',
					'size' => 5
				)
			),
			'gkitSocialShareIconSpacingTablet' => array(
				'type' => 'object'
			),
			'gkitSocialShareIconSpacingMobile' => array(
				'type' => 'object'
			),
			'gkitSocialShareIconSpacingTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitSocialShareIconSpacingMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitSocialShareIconSpacingLaptop' => array(
				'type' => 'object'
			),
			'gkitSocialShareIconSpacingWideScreen' => array(
				'type' => 'object'
			),
			'gkitSocialShareListAlignDesktop' => array(
				'type' => 'string',
				'default' => 'center'
			),
			'gkitSocialShareListAlignTablet' => array(
				'type' => 'string'
			),
			'gkitSocialShareListAlignMobile' => array(
				'type' => 'string'
			),
			'gkitSocialShareListAlignTabletLandscape' => array(
				'type' => 'string'
			),
			'gkitSocialShareListAlignMobileLandscape' => array(
				'type' => 'string'
			),
			'gkitSocialShareListAlignLaptop' => array(
				'type' => 'string'
			),
			'gkitSocialShareListAlignWideScreen' => array(
				'type' => 'string'
			),
			'gkitSocialShareIcons' => array(
				'type' => 'array',
				'default' => array(
					array(
						'gkitSocialShareIcon' => array(
							'title' => 'facebook-f',
							'src' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg>'
						),
						'gkitSocialShareLabel' => 'Facebook',
						'gkitSocialMedia' => 'facebook'
					),
					array(
						'gkitSocialShareIcon' => array(
							'title' => 'twitter',
							'src' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg>'
						),
						'gkitSocialShareLabel' => 'Twitter',
						'gkitSocialMedia' => 'twitter'
					),
					array(
						'gkitSocialShareIcon' => array(
							'title' => 'linkedin-in',
							'src' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/></svg>'
						),
						'gkitSocialShareLabel' => 'LinkedIn',
						'gkitSocialMedia' => 'linkedin'
					)
				),
				'excludeCopy' => true
			),
			'gkitSocialShareListDisplayDesktop' => array(
				'type' => 'string',
				'default' => 'row'
			),
			'gkitSocialShareListDisplayTablet' => array(
				'type' => 'string'
			),
			'gkitSocialShareListDisplayMobile' => array(
				'type' => 'string'
			),
			'gkitSocialShareListDisplayTabletLandscape' => array(
				'type' => 'string'
			),
			'gkitSocialShareListDisplayMobileLandscape' => array(
				'type' => 'string'
			),
			'gkitSocialShareListDisplayLaptop' => array(
				'type' => 'string'
			),
			'gkitSocialShareListDisplayWideScreen' => array(
				'type' => 'string'
			),
			'gkitSocialShareBorder' => array(
				'type' => 'object'
			),
			'gkitIconColor' => array(
				'type' => 'string'
			),
			'gkitIconBgColor' => array(
				'type' => 'object'
			),
			'gkitIconColorHover' => array(
				'type' => 'string'
			),
			'gkitIconBgColorHover' => array(
				'type' => 'object'
			),
			'gkitSocialShareBorderHover' => array(
				'type' => 'object'
			),
			'gkitSocialShareBoxShadow' => array(
				'type' => 'object'
			),
			'gkitSocialShareBoxShadowHover' => array(
				'type' => 'object'
			),
			'gkitSocialShareTextShadow' => array(
				'type' => 'object'
			),
			'gkitSocialShareTextShadowHover' => array(
				'type' => 'object'
			),
			'gkitSocialShareListBorderRadiusDesktop' => array(
				'type' => 'object',
				'default' => array(
					'top' => '50px',
					'right' => '50px',
					'bottom' => '50px',
					'left' => '50px'
				)
			),
			'gkitSocialShareListBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'gkitSocialShareListBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'gkitSocialShareListBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitSocialShareListBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitSocialShareListBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'gkitSocialShareListBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'gkitSocialShareListBorderRadiusHoverDesktop' => array(
				'type' => 'object',
				'default' => array(
					'top' => '50px',
					'right' => '50px',
					'bottom' => '50px',
					'left' => '50px'
				)
			),
			'gkitSocialShareListBorderRadiusHoverTablet' => array(
				'type' => 'object'
			),
			'gkitSocialShareListBorderRadiusHoverMobile' => array(
				'type' => 'object'
			),
			'gkitSocialShareListBorderRadiusHoverTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitSocialShareListBorderRadiusHoverMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitSocialShareListBorderRadiusHoverLaptop' => array(
				'type' => 'object'
			),
			'gkitSocialShareListBorderRadiusHoverWideScreen' => array(
				'type' => 'object'
			),
			'gkitSocialListPaddingDesktop' => array(
				'type' => 'object'
			),
			'gkitSocialListPaddingTablet' => array(
				'type' => 'object'
			),
			'gkitSocialListPaddingMobile' => array(
				'type' => 'object'
			),
			'gkitSocialListPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitSocialListPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitSocialListPaddingLaptop' => array(
				'type' => 'object'
			),
			'gkitSocialListPaddingWideScreen' => array(
				'type' => 'object'
			),
			'gkitSocialShareIconPaddingDesktop' => array(
				'type' => 'object'
			),
			'gkitSocialShareIconPaddingTablet' => array(
				'type' => 'object'
			),
			'gkitSocialShareIconPaddingMobile' => array(
				'type' => 'object'
			),
			'gkitSocialShareIconPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitSocialShareIconPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitSocialShareIconPaddingLaptop' => array(
				'type' => 'object'
			),
			'gkitSocialShareIconPaddingWideScreen' => array(
				'type' => 'object'
			),
			'gkitSocialShareListIconSizeDesktop' => array(
				'type' => 'object'
			),
			'gkitSocialShareListIconSizeTablet' => array(
				'type' => 'object'
			),
			'gkitSocialShareListIconSizeMobile' => array(
				'type' => 'object'
			),
			'gkitSocialShareListIconSizeTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitSocialShareListIconSizeMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitSocialShareListIconSizeLaptop' => array(
				'type' => 'object'
			),
			'gkitSocialShareListIconSizeWideScreen' => array(
				'type' => 'object'
			),
			'gkitSocialShareListTypography' => array(
				'type' => 'object'
			),
			'useHeightWidth' => array(
				'type' => 'boolean',
				'default' => true
			),
			'gkitSocialShareListWidthDesktop' => array(
				'type' => 'object'
			),
			'gkitSocialShareListWidthTablet' => array(
				'type' => 'object'
			),
			'gkitSocialShareListWidthMobile' => array(
				'type' => 'object'
			),
			'gkitSocialShareListWidthTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitSocialShareListWidthMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitSocialShareListWidthLaptop' => array(
				'type' => 'object'
			),
			'gkitSocialShareListWidthWideScreen' => array(
				'type' => 'object'
			),
			'gkitSocialShareListHeightDesktop' => array(
				'type' => 'object'
			),
			'gkitSocialShareListHeightTablet' => array(
				'type' => 'object'
			),
			'gkitSocialShareListHeightMobile' => array(
				'type' => 'object'
			),
			'gkitSocialShareListHeightTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitSocialShareListHeightMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitSocialShareListHeightLaptop' => array(
				'type' => 'object'
			),
			'gkitSocialShareListHeightWideScreen' => array(
				'type' => 'object'
			)
		),
		'supports' => array(
			'html' => false,
			'align' => array(
				'wide',
				'full'
			),
			'anchor' => true
		),
		'textdomain' => 'gutenkit-blocks-addon',
		'editorScript' => array(
			'file:./index.js',
			'goodshare'
		),
		'style' => 'file:./style-index.css',
		'viewScript' => 'goodshare'
	),
	'team' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'gutenkit/team',
		'version' => '1.0.0',
		'title' => 'Team',
		'category' => 'gutenkit',
		'keywords' => array(
			'gkit',
			'team',
			'member',
			'crew',
			'staff',
			'person'
		),
		'description' => 'Team block for gutenberg.',
		'example' => array(
			'preview' => true
		),
		'attributes' => array(
			'blockID' => array(
				'type' => 'string'
			),
			'blockClass' => array(
				'type' => 'string'
			),
			'blocksCSS' => array(
				'type' => 'object'
			),
			'style' => array(
				'type' => 'string',
				'default' => 'default'
			),
			'image' => array(
				'type' => 'object',
				'default' => array(
					'url' => 'placeholder'
				),
				'excludeCopy' => true
			),
			'name' => array(
				'type' => 'string',
				'default' => 'Jane Doe',
				'excludeCopy' => true
			),
			'profileLink' => array(
				'type' => 'object',
				'default' => array(
					'url' => ''
				),
				'excludeCopy' => true
			),
			'designation' => array(
				'type' => 'string',
				'default' => 'Designer',
				'excludeCopy' => true
			),
			'showDescription' => array(
				'type' => 'boolean',
				'default' => false,
				'excludeCopy' => true
			),
			'description' => array(
				'type' => 'string',
				'default' => 'A small river named Duden flows by their place and supplies it with the necessary',
				'excludeCopy' => true
			),
			'showSocialProfiles' => array(
				'type' => 'boolean',
				'default' => true
			),
			'socialProfiles' => array(
				'type' => 'array',
				'default' => array(
					array(
						'icon' => array(
							'title' => 'facebook-g',
							'label' => 'Facebook G',
							'type' => 'gkit',
							'src' => '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
<title>facebook-g</title>
<path d="M23.999 0.407l-4.15-0.007c-4.662 0-7.675 3.091-7.675 7.875v3.631h-4.172c-0.361 0-0.652 0.292-0.652 0.653v5.261c0 0.361 0.292 0.652 0.652 0.652h4.172v13.275c0 0.361 0.292 0.653 0.652 0.653h5.444c0.361 0 0.652-0.292 0.652-0.652v-13.275h4.878c0.361 0 0.652-0.292 0.652-0.652l0.002-5.261c0-0.173-0.069-0.339-0.191-0.461s-0.289-0.191-0.462-0.191h-4.88v-3.078c0-1.479 0.353-2.23 2.28-2.23l2.795-0.001c0.36 0 0.652-0.292 0.652-0.652v-4.885c0-0.36-0.292-0.652-0.651-0.652z"></path>
</svg>
'
						),
						'label' => 'Facebook',
						'link' => array(
							'url' => 'https://www.facebook.com/'
						),
						'color' => '',
						'backgroundColor' => '',
						'borderColor' => '',
						'hoverColor' => '',
						'hoverBackgroundColor' => '#3b5998',
						'hoverBorderColor' => ''
					),
					array(
						'icon' => array(
							'title' => 'twitter-g',
							'label' => 'Twitter G',
							'type' => 'gkit',
							'src' => '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
<title>twitter-g</title>
<path d="M32 6.479c-1.178 0.522-2.442 0.876-3.769 1.034 1.356-0.812 2.394-2.1 2.885-3.629-1.272 0.752-2.675 1.298-4.171 1.594-1.198-1.278-2.901-2.074-4.791-2.074-3.625 0-6.565 2.939-6.565 6.563 0 0.514 0.058 1.016 0.17 1.496-5.455-0.274-10.292-2.887-13.529-6.859-0.566 0.968-0.888 2.096-0.888 3.299 0 2.278 1.16 4.287 2.919 5.463-1.076-0.036-2.088-0.332-2.973-0.824v0.082c0 3.179 2.264 5.833 5.265 6.437-0.55 0.148-1.13 0.23-1.73 0.23-0.424 0-0.834-0.042-1.236-0.122 0.836 2.61 3.259 4.507 6.131 4.559-2.246 1.76-5.077 2.805-8.152 2.805-0.53 0-1.052-0.032-1.566-0.090 2.905 1.866 6.355 2.953 10.062 2.953 12.076 0 18.677-10.002 18.677-18.677l-0.022-0.85c1.29-0.92 2.405-2.076 3.283-3.391z"></path>
</svg>
'
						),
						'label' => 'Twitter',
						'link' => array(
							'url' => 'https://www.twitter.com/'
						),
						'color' => '',
						'backgroundColor' => '',
						'borderColor' => '',
						'hoverColor' => '',
						'hoverBackgroundColor' => '#1da1f2',
						'hoverBorderColor' => ''
					),
					array(
						'icon' => array(
							'title' => 'pinterest-g',
							'label' => 'Pinterest G',
							'type' => 'gkit',
							'src' => '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
<title>pinterest-g</title>
<path d="M16.75 0.4c-8.733 0-13.137 6.261-13.137 11.482 0 3.161 1.197 5.973 3.763 7.022 0.421 0.172 0.799 0.006 0.921-0.46 0.085-0.323 0.285-1.136 0.375-1.475 0.123-0.461 0.075-0.622-0.264-1.024-0.74-0.873-1.213-2.003-1.213-3.605 0-4.645 3.475-8.803 9.050-8.803 4.935 0 7.647 3.016 7.647 7.044 0 5.3-2.345 9.772-5.827 9.772-1.923 0-3.362-1.59-2.901-3.541 0.552-2.328 1.622-4.842 1.622-6.522 0-1.504-0.807-2.76-2.479-2.76-1.966 0-3.545 2.034-3.545 4.757 0 1.735 0.586 2.909 0.586 2.909s-2.012 8.523-2.364 10.016c-0.703 2.972-0.105 6.616-0.055 6.984 0.029 0.218 0.309 0.27 0.436 0.105 0.182-0.237 2.523-3.127 3.319-6.015 0.225-0.818 1.292-5.052 1.292-5.052 0.639 1.218 2.505 2.291 4.49 2.291 5.908 0 9.918-5.387 9.918-12.597 0-5.452-4.618-10.53-11.637-10.53z"></path>
</svg>
'
						),
						'label' => 'Pinterest',
						'link' => array(
							'url' => 'https://www.pinterest.com/'
						),
						'color' => '',
						'backgroundColor' => '',
						'borderColor' => '',
						'hoverColor' => '',
						'hoverBackgroundColor' => '#e60023',
						'hoverBorderColor' => ''
					)
				),
				'excludeCopy' => true
			),
			'enablePopup' => array(
				'type' => 'boolean',
				'default' => true,
				'excludeCopy' => true
			),
			'memberDescription' => array(
				'type' => 'string',
				'default' => 'A small river named Duden flows by their place and supplies it with the necessary',
				'excludeCopy' => true
			),
			'memberPhone' => array(
				'type' => 'string',
				'default' => '+1 (859) 254-6589',
				'excludeCopy' => true
			),
			'memberEmail' => array(
				'type' => 'string',
				'default' => 'info@example.com',
				'excludeCopy' => true
			),
			'closeIcon' => array(
				'type' => 'object',
				'default' => array(
					'title' => 'cancel',
					'src' => '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
<title>cancel</title>
<path d="M18.556 16.027l12.169-12.169c0.706-0.706 0.706-1.85 0-2.555s-1.851-0.706-2.555 0l-12.169 12.169-12.167-12.169c-0.705-0.706-1.85-0.706-2.555 0s-0.706 1.85 0 2.555l12.167 12.169-12.915 12.915c-0.706 0.706-0.706 1.85 0 2.555 0.352 0.353 0.815 0.53 1.278 0.53s0.925-0.176 1.278-0.53l12.915-12.915 12.915 12.915c0.353 0.353 0.815 0.53 1.278 0.53s0.924-0.176 1.278-0.53c0.706-0.706 0.706-1.85 0-2.555l-12.915-12.915z"></path>
</svg>
'
				)
			),
			'contentAlignmentDesktop' => array(
				'type' => 'string',
				'default' => 'center'
			),
			'contentAlignmentTablet' => array(
				'type' => 'string'
			),
			'contentAlignmentMobile' => array(
				'type' => 'string'
			),
			'contentAlignmentTabletLandscape' => array(
				'type' => 'string'
			),
			'contentAlignmentMobileLandscape' => array(
				'type' => 'string'
			),
			'contentAlignmentLaptop' => array(
				'type' => 'string'
			),
			'contentAlignmentWideScreen' => array(
				'type' => 'string'
			),
			'background' => array(
				'type' => 'object'
			),
			'boxShadow' => array(
				'type' => 'object'
			),
			'backgroundHover' => array(
				'type' => 'object'
			),
			'backgroundHoverOverlay' => array(
				'type' => 'object'
			),
			'boxShadowHover' => array(
				'type' => 'object'
			),
			'border' => array(
				'type' => 'object'
			),
			'borderHover' => array(
				'type' => 'object'
			),
			'borderRadius' => array(
				'type' => 'object'
			),
			'paddingDesktop' => array(
				'type' => 'object'
			),
			'paddingTablet' => array(
				'type' => 'object'
			),
			'paddingMobile' => array(
				'type' => 'object'
			),
			'paddingTabletLandscape' => array(
				'type' => 'object'
			),
			'paddingMobileLandscape' => array(
				'type' => 'object'
			),
			'paddingLaptop' => array(
				'type' => 'object'
			),
			'paddingWideScreen' => array(
				'type' => 'object'
			),
			'longHeightOverlayDesktop' => array(
				'type' => 'object'
			),
			'longHeightOverlayTablet' => array(
				'type' => 'object'
			),
			'longHeightOverlayMobile' => array(
				'type' => 'object'
			),
			'longHeightOverlayTabletLandscape' => array(
				'type' => 'object'
			),
			'longHeightOverlayMobileLandscape' => array(
				'type' => 'object'
			),
			'longHeightOverlayLaptop' => array(
				'type' => 'object'
			),
			'longHeightOverlayWideScreen' => array(
				'type' => 'object'
			),
			'contentPaddingDesktop' => array(
				'type' => 'object'
			),
			'contentPaddingTablet' => array(
				'type' => 'object'
			),
			'contentPaddingMobile' => array(
				'type' => 'object'
			),
			'contentPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'contentPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'contentPaddingLaptop' => array(
				'type' => 'object'
			),
			'contentPaddingWideScreen' => array(
				'type' => 'object'
			),
			'teamFooterPaddingDesktop' => array(
				'type' => 'object'
			),
			'teamFooterPaddingTablet' => array(
				'type' => 'object'
			),
			'teamFooterPaddingMobile' => array(
				'type' => 'object'
			),
			'teamFooterPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'teamFooterPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'teamFooterPaddingLaptop' => array(
				'type' => 'object'
			),
			'teamFooterPaddingWideScreen' => array(
				'type' => 'object'
			),
			'imageSizeDesktop' => array(
				'type' => 'object'
			),
			'imageSizeTablet' => array(
				'type' => 'object'
			),
			'imageSizeMobile' => array(
				'type' => 'object'
			),
			'imageSizeTabletLandscape' => array(
				'type' => 'object'
			),
			'imageSizeMobileLandscape' => array(
				'type' => 'object'
			),
			'imageSizeLaptop' => array(
				'type' => 'object'
			),
			'imageSizeWideScreen' => array(
				'type' => 'object'
			),
			'imageMarginDesktop' => array(
				'type' => 'object'
			),
			'imageMarginTablet' => array(
				'type' => 'object'
			),
			'imageMarginMobile' => array(
				'type' => 'object'
			),
			'imageMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'imageMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'imageMarginLaptop' => array(
				'type' => 'object'
			),
			'imageMarginWideScreen' => array(
				'type' => 'object'
			),
			'imageShadow' => array(
				'type' => 'object'
			),
			'imageBorder' => array(
				'type' => 'object'
			),
			'imageBorderRadius' => array(
				'type' => 'object'
			),
			'nameTypography' => array(
				'type' => 'object'
			),
			'nameColor' => array(
				'type' => 'string'
			),
			'nameHoverColor' => array(
				'type' => 'string'
			),
			'nameMarginDesktop' => array(
				'type' => 'object'
			),
			'nameMarginTablet' => array(
				'type' => 'object'
			),
			'nameMarginMobile' => array(
				'type' => 'object'
			),
			'nameMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'nameMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'nameMarginLaptop' => array(
				'type' => 'object'
			),
			'nameMarginWideScreen' => array(
				'type' => 'object'
			),
			'designationTypography' => array(
				'type' => 'object'
			),
			'designationColor' => array(
				'type' => 'string'
			),
			'designationHoverColor' => array(
				'type' => 'string'
			),
			'designationMarginDesktop' => array(
				'type' => 'object'
			),
			'designationMarginTablet' => array(
				'type' => 'object'
			),
			'designationMarginMobile' => array(
				'type' => 'object'
			),
			'designationMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'designationMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'designationMarginLaptop' => array(
				'type' => 'object'
			),
			'designationMarginWideScreen' => array(
				'type' => 'object'
			),
			'descriptionTypography' => array(
				'type' => 'object'
			),
			'descriptionColor' => array(
				'type' => 'string'
			),
			'descriptionHoverColor' => array(
				'type' => 'string'
			),
			'descriptionMarginDesktop' => array(
				'type' => 'object'
			),
			'descriptionMarginTablet' => array(
				'type' => 'object'
			),
			'descriptionMarginMobile' => array(
				'type' => 'object'
			),
			'descriptionMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'descriptionMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'descriptionMarginLaptop' => array(
				'type' => 'object'
			),
			'descriptionMarginWideScreen' => array(
				'type' => 'object'
			),
			'iconSizeDesktop' => array(
				'type' => 'object'
			),
			'iconSizeTablet' => array(
				'type' => 'object'
			),
			'iconSizeMobile' => array(
				'type' => 'object'
			),
			'iconSizeTabletLandscape' => array(
				'type' => 'object'
			),
			'iconSizeMobileLandscape' => array(
				'type' => 'object'
			),
			'iconSizeLaptop' => array(
				'type' => 'object'
			),
			'iconSizeWideScreen' => array(
				'type' => 'object'
			),
			'iconBorder' => array(
				'type' => 'object'
			),
			'iconBorderRadius' => array(
				'type' => 'object'
			),
			'iconboxShadow' => array(
				'type' => 'object'
			),
			'iconMarginDesktop' => array(
				'type' => 'object'
			),
			'iconMarginTablet' => array(
				'type' => 'object'
			),
			'iconMarginMobile' => array(
				'type' => 'object'
			),
			'iconMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'iconMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'iconMarginLaptop' => array(
				'type' => 'object'
			),
			'iconMarginWideScreen' => array(
				'type' => 'object'
			),
			'teamSocialIconPaddingDesktop' => array(
				'type' => 'object'
			),
			'teamSocialIconPaddingTablet' => array(
				'type' => 'object'
			),
			'teamSocialIconPaddingMobile' => array(
				'type' => 'object'
			),
			'teamSocialIconPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'teamSocialIconPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'teamSocialIconPaddingLaptop' => array(
				'type' => 'object'
			),
			'teamSocialIconPaddingWideScreen' => array(
				'type' => 'object'
			),
			'showSocialProfilesHeight' => array(
				'type' => 'boolean',
				'default' => false
			),
			'iconHeightDesktop' => array(
				'type' => 'object'
			),
			'iconHeightTablet' => array(
				'type' => 'object'
			),
			'iconHeightMobile' => array(
				'type' => 'object'
			),
			'iconHeightTabletLandscape' => array(
				'type' => 'object'
			),
			'iconHeightMobileLandscape' => array(
				'type' => 'object'
			),
			'iconHeightLaptop' => array(
				'type' => 'object'
			),
			'iconHeightWideScreen' => array(
				'type' => 'object'
			),
			'iconWidthDesktop' => array(
				'type' => 'object'
			),
			'iconWidthTablet' => array(
				'type' => 'object'
			),
			'iconWidthMobile' => array(
				'type' => 'object'
			),
			'iconWidthTabletLandscape' => array(
				'type' => 'object'
			),
			'iconWidthMobileLandscape' => array(
				'type' => 'object'
			),
			'iconWidthLaptop' => array(
				'type' => 'object'
			),
			'iconWidthWideScreen' => array(
				'type' => 'object'
			),
			'popupBackground' => array(
				'type' => 'object'
			),
			'popupNameTypography' => array(
				'type' => 'object'
			),
			'popupNameColor' => array(
				'type' => 'string'
			),
			'popupNameMarginDesktop' => array(
				'type' => 'object'
			),
			'popupNameMarginTablet' => array(
				'type' => 'object'
			),
			'popupNameMarginMobile' => array(
				'type' => 'object'
			),
			'popupNameMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'popupNameMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'popupNameMarginLaptop' => array(
				'type' => 'object'
			),
			'popupNameMarginWideScreen' => array(
				'type' => 'object'
			),
			'popupDesignationTypography' => array(
				'type' => 'object'
			),
			'popupDesignationColor' => array(
				'type' => 'string'
			),
			'popupDesignationMarginDesktop' => array(
				'type' => 'object'
			),
			'popupDesignationMarginTablet' => array(
				'type' => 'object'
			),
			'popupDesignationMarginMobile' => array(
				'type' => 'object'
			),
			'popupDesignationMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'popupDesignationMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'popupDesignationMarginLaptop' => array(
				'type' => 'object'
			),
			'popupDesignationMarginWideScreen' => array(
				'type' => 'object'
			),
			'popupDescriptionTypography' => array(
				'type' => 'object'
			),
			'popupDescriptionColor' => array(
				'type' => 'string'
			),
			'popupDescriptionMarginDesktop' => array(
				'type' => 'object'
			),
			'popupDescriptionMarginTablet' => array(
				'type' => 'object'
			),
			'popupDescriptionMarginMobile' => array(
				'type' => 'object'
			),
			'popupDescriptionMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'popupDescriptionMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'popupDescriptionMarginLaptop' => array(
				'type' => 'object'
			),
			'popupDescriptionMarginWideScreen' => array(
				'type' => 'object'
			),
			'popupPhoneTypography' => array(
				'type' => 'object'
			),
			'popupPhoneColor' => array(
				'type' => 'string'
			),
			'popupPhoneHoverColor' => array(
				'type' => 'string'
			),
			'popupIconSizeDesktop' => array(
				'type' => 'object'
			),
			'popupIconSizeTablet' => array(
				'type' => 'object'
			),
			'popupIconSizeMobile' => array(
				'type' => 'object'
			),
			'popupIconSizeTabletLandscape' => array(
				'type' => 'object'
			),
			'popupIconSizeMobileLandscape' => array(
				'type' => 'object'
			),
			'popupIconSizeLaptop' => array(
				'type' => 'object'
			),
			'popupIconSizeWideScreen' => array(
				'type' => 'object'
			),
			'popupIconColor' => array(
				'type' => 'string'
			),
			'popupIconBackgroundColor' => array(
				'type' => 'string'
			),
			'popupIconHoverColor' => array(
				'type' => 'string'
			),
			'popupIconBackgroundHoverColor' => array(
				'type' => 'string'
			),
			'popupIconPaddingDesktop' => array(
				'type' => 'object'
			),
			'popupIconPaddingTablet' => array(
				'type' => 'object'
			),
			'popupIconPaddingMobile' => array(
				'type' => 'object'
			),
			'popupIconPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'popupIconPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'popupIconPaddingLaptop' => array(
				'type' => 'object'
			),
			'popupIconPaddingWideScreen' => array(
				'type' => 'object'
			),
			'popupIconBorder' => array(
				'type' => 'object'
			),
			'popupIconBorderRadius' => array(
				'type' => 'object'
			),
			'hoverAnimationSwitch' => array(
				'type' => 'boolean',
				'default' => false
			),
			'hoverAnimation' => array(
				'type' => 'object',
				'default' => array(
					'effect' => array(
						'label' => 'Grow',
						'value' => 'grow'
					)
				)
			)
		),
		'supports' => array(
			'html' => false,
			'align' => array(
				'wide',
				'full'
			),
			'anchor' => true
		),
		'textdomain' => 'gutenkit-blocks-addon',
		'editorScript' => 'file:./index.js',
		'editorStyle' => array(
			'file:./index.css',
			'fancybox',
			'hover-animations'
		),
		'style' => array(
			'file:./style-index.css',
			'fancybox',
			'hover-animations'
		),
		'viewScript' => array(
			'file:./frontend.js',
			'fancybox'
		)
	),
	'testimonial' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'gutenkit/testimonial',
		'version' => '1.0.0',
		'title' => 'Testimonial',
		'category' => 'gutenkit',
		'description' => 'Testimonial block for gutenberg.',
		'keywords' => array(
			'gkit',
			'slider',
			'testimonial'
		),
		'example' => array(
			'preview' => true
		),
		'attributes' => array(
			'blockID' => array(
				'type' => 'string'
			),
			'blockClass' => array(
				'type' => 'string'
			),
			'blocksCSS' => array(
				'type' => 'object'
			),
			'gkitTestimonialStyle' => array(
				'type' => 'string',
				'default' => 'primary-style'
			),
			'gkitTestimonialRatingStar' => array(
				'type' => 'object',
				'default' => array(
					'title' => 'star',
					'src' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" className="gkit-icon" aria-hidden="true" focusable="false"><path fillRule="evenodd" clipRule="evenodd" d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.6 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z"></path></svg>'
				)
			),
			'gkitTestimonialRatingStarActive' => array(
				'type' => 'object',
				'default' => array(
					'title' => 'star',
					'src' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>'
				)
			),
			'gkitTestimonials' => array(
				'type' => 'array',
				'default' => array(
					array(
						'gkitTestimonialReviewLabel' => 'Very Professional',
						'gkitTestimonialClientName' => 'Testimonial #1',
						'gkitTestimonialClientDesignation' => 'Designation',
						'gkitTestimonialReviewText' => 'Review Text',
						'gkitTestimonialRatingStars' => 5,
						'gkitTestimonialLink' => array(
							'url' => ''
						),
						'gkitTestimonialClientAvatar' => array(
							'alt' => 'Testimonial Client Avatar',
							'type' => 'object',
							'url' => 'placeholder'
						),
						'gkitTestimonialLogo' => array(
							'alt' => 'Testimonial Logo',
							'type' => 'object',
							'url' => 'placeholder'
						),
						'gkitTestimonialHoverLogo' => array(
							'alt' => 'Testimonial Hover Logo',
							'type' => 'object',
							'url' => 'placeholder'
						),
						'gkitTestimonialDifferentLogoOnHover' => false,
						'gkitActiveTestimonial' => false,
						'gkitIndividualBackground' => array(
							'type' => 'object'
						)
					),
					array(
						'gkitTestimonialReviewLabel' => 'Very Professional',
						'gkitTestimonialClientName' => 'Testimonial #2',
						'gkitTestimonialClientDesignation' => 'Designation',
						'gkitTestimonialReviewText' => 'Review Text',
						'gkitTestimonialRatingStars' => 5,
						'gkitTestimonialLink' => array(
							'url' => ''
						),
						'gkitTestimonialClientAvatar' => array(
							'alt' => 'Testimonial Client Avatar',
							'type' => 'object',
							'url' => 'placeholder'
						),
						'gkitTestimonialLogo' => array(
							'alt' => 'Testimonial Logo',
							'type' => 'object',
							'url' => 'placeholder'
						),
						'gkitTestimonialHoverLogo' => array(
							'alt' => 'Testimonial Hover Logo',
							'type' => 'object',
							'url' => 'placeholder'
						),
						'gkitTestimonialDifferentLogoOnHover' => false,
						'gkitActiveTestimonial' => false,
						'gkitIndividualBackground' => array(
							'type' => 'object'
						)
					),
					array(
						'gkitTestimonialReviewLabel' => 'Very Professional',
						'gkitTestimonialClientName' => 'Testimonial #3',
						'gkitTestimonialClientDesignation' => 'Designation',
						'gkitTestimonialReviewText' => 'Review Text',
						'gkitTestimonialRatingStars' => 5,
						'gkitTestimonialLink' => array(
							'url' => ''
						),
						'gkitTestimonialClientAvatar' => array(
							'alt' => 'Testimonial Client Avatar',
							'type' => 'object',
							'url' => 'placeholder'
						),
						'gkitTestimonialLogo' => array(
							'alt' => 'Testimonial Logo',
							'type' => 'object',
							'url' => 'placeholder'
						),
						'gkitTestimonialHoverLogo' => array(
							'alt' => 'Testimonial Hover Logo',
							'type' => 'object',
							'url' => 'placeholder'
						),
						'gkitTestimonialDifferentLogoOnHover' => false,
						'gkitActiveTestimonial' => false,
						'gkitIndividualBackground' => array(
							'type' => 'object'
						)
					),
					array(
						'gkitTestimonialReviewLabel' => 'Very Professional',
						'gkitTestimonialClientName' => 'Testimonial #4',
						'gkitTestimonialClientDesignation' => 'Designation',
						'gkitTestimonialReviewText' => 'Review Text',
						'gkitTestimonialRatingStars' => 5,
						'gkitTestimonialLink' => array(
							'url' => ''
						),
						'gkitTestimonialClientAvatar' => array(
							'alt' => 'Testimonial Client Avatar',
							'type' => 'object',
							'url' => 'placeholder'
						),
						'gkitTestimonialLogo' => array(
							'alt' => 'Testimonial Logo',
							'type' => 'object',
							'url' => 'placeholder'
						),
						'gkitTestimonialHoverLogo' => array(
							'alt' => 'Testimonial Hover Logo',
							'type' => 'object',
							'url' => 'placeholder'
						),
						'gkitTestimonialDifferentLogoOnHover' => false,
						'gkitActiveTestimonial' => false,
						'gkitIndividualBackground' => array(
							'type' => 'object'
						)
					)
				),
				'excludeCopy' => true
			),
			'gkitEnableQuoteIcon' => array(
				'type' => 'boolean',
				'default' => true
			),
			'gkitTestimonialQuoteIcon' => array(
				'type' => 'object',
				'default' => array(
					'title' => 'quote',
					'src' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M15.301 10.724c0-4.183-3.402-7.584-7.584-7.584s-7.591 3.408-7.591 7.591 3.402 7.591 7.591 7.591c0.504 0 1.014-0.050 1.518-0.157-0.876 3.968-2.759 7.257-3.811 9.077-0.277 0.479-0.491 0.863-0.636 1.153-0.126 0.265-0.397 0.819 0.013 1.184 0.132 0.12 0.283 0.17 0.435 0.17 0.328 0 0.687-0.233 0.989-0.422 0.409-0.258 0.989-0.674 1.997-1.417l0.044-0.038c1.764-1.581 3.232-3.433 4.353-5.499 0.907-1.669 1.606-3.49 2.066-5.411 0.743-3.093 0.661-5.55 0.617-6.236v0zM13.569 16.69c-0.983 4.113-3.017 7.578-6.041 10.293-0.258 0.189-0.661 0.479-1.052 0.762 1.165-2.035 3.295-5.764 4.088-10.293l0.17-0.97-0.932 0.321c-0.68 0.239-1.38 0.353-2.079 0.353-3.54 0-6.425-2.879-6.425-6.425s2.872-6.431 6.419-6.431c3.54 0 6.425 2.872 6.425 6.419v0.044c0 0.006 0 0.025 0 0.044 0.050 0.643 0.126 2.954-0.573 5.883zM31.968 10.737v0c0-4.189-3.402-7.591-7.584-7.591s-7.584 3.402-7.584 7.584 3.402 7.584 7.584 7.584c0.504 0 1.014-0.050 1.518-0.157-0.876 3.968-2.759 7.257-3.811 9.077-0.277 0.479-0.491 0.863-0.636 1.153-0.126 0.265-0.397 0.819 0.013 1.184 0.132 0.12 0.283 0.17 0.435 0.17 0.328 0 0.687-0.233 0.995-0.416 0.409-0.258 0.989-0.674 1.997-1.417l0.044-0.038c1.764-1.581 3.232-3.433 4.353-5.499 0.907-1.669 1.606-3.49 2.066-5.411 0.743-3.087 0.661-5.543 0.611-6.224zM30.23 16.69c-0.983 4.12-3.017 7.578-6.041 10.299-0.258 0.189-0.661 0.479-1.052 0.762 1.165-2.035 3.294-5.764 4.088-10.293l0.17-0.97-0.926 0.315c-0.68 0.239-1.38 0.353-2.079 0.353-3.54 0-6.425-2.879-6.425-6.425 0-3.54 2.879-6.425 6.425-6.425 3.54 0 6.425 2.872 6.425 6.419v0.044c0 0.006 0 0.025 0 0.044 0.038 0.636 0.12 2.948-0.586 5.877z"></path></svg>'
				)
			),
			'gkitTestimonialQuoteIconBadge' => array(
				'type' => 'boolean',
				'default' => true
			),
			'gkitQuoteIocnPosition' => array(
				'type' => 'string',
				'default' => 'bottom'
			),
			'gkitTestimonialEnableRating' => array(
				'type' => 'boolean',
				'default' => true
			),
			'gkitQuoteIconCustomPosition' => array(
				'type' => 'boolean',
				'default' => false
			),
			'gkitQuoteIconLeftRightPositionDesktop' => array(
				'type' => 'string',
				'default' => array(
					'unit' => 'px',
					'size' => 10
				)
			),
			'gkitQuoteIconLeftRightPositionTablet' => array(
				'type' => 'string'
			),
			'gkitQuoteIconLeftRightPositionMobile' => array(
				'type' => 'string'
			),
			'gkitQuoteIconLeftRightPositionTabletLandscape' => array(
				'type' => 'string'
			),
			'gkitQuoteIconLeftRightPositionMobileLandscape' => array(
				'type' => 'string'
			),
			'gkitQuoteIconLeftRightPositionLaptop' => array(
				'type' => 'string'
			),
			'gkitQuoteIconLeftRightPositionWideScreen' => array(
				'type' => 'string'
			),
			'gkitQuoteIconTopBottomPositionDesktop' => array(
				'type' => 'string',
				'default' => array(
					'unit' => 'px',
					'size' => 10
				)
			),
			'gkitQuoteIconTopBottomPositionTablet' => array(
				'type' => 'string'
			),
			'gkitQuoteIconTopBottomPositionMobile' => array(
				'type' => 'string'
			),
			'gkitQuoteIconTopBottomPositionTabletLandscape' => array(
				'type' => 'string'
			),
			'gkitQuoteIconTopBottomPositionMobileLandscape' => array(
				'type' => 'string'
			),
			'gkitQuoteIconTopBottomPositionLaptop' => array(
				'type' => 'string'
			),
			'gkitQuoteIconTopBottomPositionWideScreen' => array(
				'type' => 'string'
			),
			'gkitTestimonialShowSeparator' => array(
				'type' => 'boolean',
				'default' => true
			),
			'gkitTestimonialWrapperPaddingDesktop' => array(
				'type' => 'object'
			),
			'gkitTestimonialWrapperPaddingTablet' => array(
				'type' => 'object'
			),
			'gkitTestimonialWrapperPaddingMobile' => array(
				'type' => 'object'
			),
			'gkitTestimonialWrapperPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitTestimonialWrapperPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitTestimonialWrapperPaddingLaptop' => array(
				'type' => 'object'
			),
			'gkitTestimonialWrapperPaddingWideScreen' => array(
				'type' => 'object'
			),
			'gkitSlidesItemSpaceBetweenDesktop' => array(
				'type' => 'object'
			),
			'gkitSlidesItemSpaceBetweenTablet' => array(
				'type' => 'object'
			),
			'gkitSlidesItemSpaceBetweenMobile' => array(
				'type' => 'object'
			),
			'gkitSlidesItemSpaceBetweenTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitSlidesItemSpaceBetweenMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitSlidesItemSpaceBetweenLaptop' => array(
				'type' => 'object'
			),
			'gkitSlidesItemSpaceBetweenWideScreen' => array(
				'type' => 'object'
			),
			'gkitSlidesItemBorderRadiousDesktop' => array(
				'type' => 'object'
			),
			'gkitSlidesItemBorderRadiousTablet' => array(
				'type' => 'object'
			),
			'gkitSlidesItemBorderRadiousMobile' => array(
				'type' => 'object'
			),
			'gkitSlidesItemBorderRadiousTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitSlidesItemBorderRadiousMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitSlidesItemBorderRadiousLaptop' => array(
				'type' => 'object'
			),
			'gkitSlidesItemBorderRadiousWideScreen' => array(
				'type' => 'object'
			),
			'gkitSlidesItemPaddingDesktop' => array(
				'type' => 'object'
			),
			'gkitSlidesItemPaddingTablet' => array(
				'type' => 'object'
			),
			'gkitSlidesItemPaddingMobile' => array(
				'type' => 'object'
			),
			'gkitSlidesItemPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitSlidesItemPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitSlidesItemPaddingLaptop' => array(
				'type' => 'object'
			),
			'gkitSlidesItemPaddingWideScreen' => array(
				'type' => 'object'
			),
			'gkitSlidesItemNormalBackground' => array(
				'type' => 'object'
			),
			'gkitSlidesItemNormalBorderDesktop' => array(
				'type' => 'object'
			),
			'gkitSlidesItemNormalBorderTablet' => array(
				'type' => 'object'
			),
			'gkitSlidesItemNormalBorderMobile' => array(
				'type' => 'object'
			),
			'gkitSlidesItemNormalBorderTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitSlidesItemNormalBorderMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitSlidesItemNormalBorderLaptop' => array(
				'type' => 'object'
			),
			'gkitSlidesItemNormalBorderWideScreen' => array(
				'type' => 'object'
			),
			'gkitSlidesItemHoverBorderColor' => array(
				'type' => 'string',
				'default' => '#2575fc'
			),
			'gkitSlidesItemActiveBorderColor' => array(
				'type' => 'string',
				'default' => '#2575fc'
			),
			'gkitSlidesItemNormalBoxShadow' => array(
				'type' => 'object'
			),
			'gkitSlidesItemHoverBackground' => array(
				'type' => 'object'
			),
			'gkitSlidesItemHoverBoxShadow' => array(
				'type' => 'object'
			),
			'gkitSlidesItemActiveBackground' => array(
				'type' => 'object'
			),
			'gkitSlidesItemActiveBoxShadow' => array(
				'type' => 'object'
			),
			'gkitSlideItemsVerticalAlignmentDesktop' => array(
				'type' => 'string',
				'default' => 'center'
			),
			'gkitSlideItemsVerticalAlignmentTablet' => array(
				'type' => 'string'
			),
			'gkitSlideItemsVerticalAlignmentMobile' => array(
				'type' => 'string'
			),
			'gkitSlideItemsVerticalAlignmentTabletLandscape' => array(
				'type' => 'string'
			),
			'gkitSlideItemsVerticalAlignmentMobileLandscape' => array(
				'type' => 'string'
			),
			'gkitSlideItemsVerticalAlignmentLaptop' => array(
				'type' => 'string'
			),
			'gkitSlideItemsVerticalAlignmentWideScreen' => array(
				'type' => 'string'
			),
			'gkitSlideItemsHorizontalAlignmentDesktop' => array(
				'type' => 'string'
			),
			'gkitSlideItemsHorizontalAlignmentTablet' => array(
				'type' => 'string'
			),
			'gkitSlideItemsHorizontalAlignmentMobile' => array(
				'type' => 'string'
			),
			'gkitSlideItemsHorizontalAlignmentTabletLandscape' => array(
				'type' => 'string'
			),
			'gkitSlideItemsHorizontalAlignmentMobileLandscape' => array(
				'type' => 'string'
			),
			'gkitSlideItemsHorizontalAlignmentLaptop' => array(
				'type' => 'string'
			),
			'gkitSlideItemsHorizontalAlignmentWideScreen' => array(
				'type' => 'string'
			),
			'gkitSlidesItemContentPaddingDesktop' => array(
				'type' => 'object'
			),
			'gkitSlidesItemContentPaddingTablet' => array(
				'type' => 'object'
			),
			'gkitSlidesItemContentPaddingMobile' => array(
				'type' => 'object'
			),
			'gkitSlidesItemContentPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitSlidesItemContentPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitSlidesItemContentPaddingLaptop' => array(
				'type' => 'object'
			),
			'gkitSlidesItemContentPaddingWideScreen' => array(
				'type' => 'object'
			),
			'useSlidesItemFixedHeight' => array(
				'type' => 'boolean',
				'default' => false
			),
			'gkitSlidesItemFixedHeightDesktop' => array(
				'type' => 'object'
			),
			'gkitSlidesItemFixedHeightTablet' => array(
				'type' => 'object'
			),
			'gkitSlidesItemFixedHeightMobile' => array(
				'type' => 'object'
			),
			'gkitSlidesItemFixedHeightTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitSlidesItemFixedHeightMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitSlidesItemFixedHeightLaptop' => array(
				'type' => 'object'
			),
			'gkitSlidesItemFixedHeightWideScreen' => array(
				'type' => 'object'
			),
			'gkitTestimonialDescriptionColor' => array(
				'type' => 'string'
			),
			'gkitTestimonialDescriptionHoverAndActiveColor' => array(
				'type' => 'string'
			),
			'gkitTestimonialDescriptionTypography' => array(
				'type' => 'object'
			),
			'gkitTestimonialDescriptionMarginDesktop' => array(
				'type' => 'object'
			),
			'gkitTestimonialDescriptionMarginTablet' => array(
				'type' => 'object'
			),
			'gkitTestimonialDescriptionMarginMobile' => array(
				'type' => 'object'
			),
			'gkitTestimonialDescriptionMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitTestimonialDescriptionMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitTestimonialDescriptionMarginLaptop' => array(
				'type' => 'object'
			),
			'gkitTestimonialDescriptionMarginWideScreen' => array(
				'type' => 'object'
			),
			'titleColor' => array(
				'type' => 'string'
			),
			'titleHoverAndActiveColor' => array(
				'type' => 'string'
			),
			'titleTypography' => array(
				'type' => 'object'
			),
			'titleMarginDesktop' => array(
				'type' => 'object'
			),
			'titleMarginTablet' => array(
				'type' => 'object'
			),
			'titleMarginMobile' => array(
				'type' => 'object'
			),
			'titleMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'titleMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'titleMarginLaptop' => array(
				'type' => 'object'
			),
			'titleMarginWideScreen' => array(
				'type' => 'object'
			),
			'gkitTestimonialRatingColor' => array(
				'type' => 'string',
				'default' => '#fec42d'
			),
			'gkitTestimonialRatingHoverAndActiveColor' => array(
				'type' => 'string'
			),
			'gkitTestimonialRatingSizeDesktop' => array(
				'type' => 'object'
			),
			'gkitTestimonialRatingSizeTablet' => array(
				'type' => 'object'
			),
			'gkitTestimonialRatingSizeMobile' => array(
				'type' => 'object'
			),
			'gkitTestimonialRatingSizeTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitTestimonialRatingSizeMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitTestimonialRatingSizeLaptop' => array(
				'type' => 'object'
			),
			'gkitTestimonialRatingSizeWideScreen' => array(
				'type' => 'object'
			),
			'gkitTestimonialRatingSpaceDesktop' => array(
				'type' => 'object'
			),
			'gkitTestimonialRatingSpaceTablet' => array(
				'type' => 'object'
			),
			'gkitTestimonialRatingSpaceMobile' => array(
				'type' => 'object'
			),
			'gkitTestimonialRatingSpaceTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitTestimonialRatingSpaceMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitTestimonialRatingSpaceLaptop' => array(
				'type' => 'object'
			),
			'gkitTestimonialRatingSpaceWideScreen' => array(
				'type' => 'object'
			),
			'gkitTestimonialReviewPaddingDesktop' => array(
				'type' => 'object'
			),
			'gkitTestimonialReviewPaddingTablet' => array(
				'type' => 'object'
			),
			'gkitTestimonialReviewPaddingMobile' => array(
				'type' => 'object'
			),
			'gkitTestimonialReviewPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitTestimonialReviewPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitTestimonialReviewPaddingLaptop' => array(
				'type' => 'object'
			),
			'gkitTestimonialReviewPaddingWideScreen' => array(
				'type' => 'object'
			),
			'gkitTestimonialReviewMarginDesktop' => array(
				'type' => 'object'
			),
			'gkitTestimonialReviewMarginTablet' => array(
				'type' => 'object'
			),
			'gkitTestimonialReviewMarginMobile' => array(
				'type' => 'object'
			),
			'gkitTestimonialReviewMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitTestimonialReviewMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitTestimonialReviewMarginLaptop' => array(
				'type' => 'object'
			),
			'gkitTestimonialReviewMarginWideScreen' => array(
				'type' => 'object'
			),
			'gkitTestimonialQuoteIconNormalColor' => array(
				'type' => 'string'
			),
			'gkitTestimonialQuoteIconNormalBackground' => array(
				'type' => 'object',
				'default' => '#FFFFFF'
			),
			'gkitTestimonialQuoteIconHoverColor' => array(
				'type' => 'string'
			),
			'gkitTestimonialQuoteIconHoverBackground' => array(
				'type' => 'object',
				'default' => '#FFFFFF'
			),
			'gkitTestimonialQuoteIconActiveColor' => array(
				'type' => 'string'
			),
			'gkitTestimonialQuoteIconActiveBackground' => array(
				'type' => 'object',
				'default' => '#FFFFFF'
			),
			'gkitTestimonialQuoteIconSizeDesktop' => array(
				'type' => 'object'
			),
			'gkitTestimonialQuoteIconSizeTablet' => array(
				'type' => 'object'
			),
			'gkitTestimonialQuoteIconSizeMobile' => array(
				'type' => 'object'
			),
			'gkitTestimonialQuoteIconSizeTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitTestimonialQuoteIconSizeMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitTestimonialQuoteIconSizeLaptop' => array(
				'type' => 'object'
			),
			'gkitTestimonialQuoteIconSizeWideScreen' => array(
				'type' => 'object'
			),
			'gkitTestimonialQuoteIconBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'gkitTestimonialQuoteIconBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'gkitTestimonialQuoteIconBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'gkitTestimonialQuoteIconBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitTestimonialQuoteIconBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitTestimonialQuoteIconBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'gkitTestimonialQuoteIconBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'gkitQuoteIconBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'gkitQuoteIconBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'gkitQuoteIconBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'gkitQuoteIconBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitQuoteIconBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitQuoteIconBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'gkitQuoteIconBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'gkitTestimonialQuoteIconMarginDesktop' => array(
				'type' => 'object'
			),
			'gkitTestimonialQuoteIconMarginTablet' => array(
				'type' => 'object'
			),
			'gkitTestimonialQuoteIconMarginMobile' => array(
				'type' => 'object'
			),
			'gkitTestimonialQuoteIconMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitTestimonialQuoteIconMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitTestimonialQuoteIconMarginLaptop' => array(
				'type' => 'object'
			),
			'gkitTestimonialQuoteIconMarginWideScreen' => array(
				'type' => 'object'
			),
			'gkitTestimonialQuoteIconPaddingDesktop' => array(
				'type' => 'object'
			),
			'gkitTestimonialQuoteIconPaddingTablet' => array(
				'type' => 'object'
			),
			'gkitTestimonialQuoteIconPaddingMobile' => array(
				'type' => 'object'
			),
			'gkitTestimonialQuoteIconPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitTestimonialQuoteIconPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitTestimonialQuoteIconPaddingLaptop' => array(
				'type' => 'object'
			),
			'gkitTestimonialQuoteIconPaddingWideScreen' => array(
				'type' => 'object'
			),
			'gkitTestimonialQuoteIconBackground' => array(
				'type' => 'object',
				'default' => '#FFAD28'
			),
			'gkitTestimonialTitleSeparatorNormalColor' => array(
				'type' => 'object',
				'default' => '#2575fc'
			),
			'gkitTestimonialTitleSeparatorHoverColor' => array(
				'type' => 'object',
				'default' => '#2575fc'
			),
			'gkitTestimonialTitleSeparatorWidthDesktop' => array(
				'type' => 'object'
			),
			'gkitTestimonialTitleSeparatorWidthTablet' => array(
				'type' => 'object'
			),
			'gkitTestimonialTitleSeparatorWidthMobile' => array(
				'type' => 'object'
			),
			'gkitTestimonialTitleSeparatorWidthTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitTestimonialTitleSeparatorWidthMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitTestimonialTitleSeparatorWidthLaptop' => array(
				'type' => 'object'
			),
			'gkitTestimonialTitleSeparatorWidthWideScreen' => array(
				'type' => 'object'
			),
			'gkitTestimonialTitleSeparatorHeightDesktop' => array(
				'type' => 'object'
			),
			'gkitTestimonialTitleSeparatorHeightTablet' => array(
				'type' => 'object'
			),
			'gkitTestimonialTitleSeparatorHeightMobile' => array(
				'type' => 'object'
			),
			'gkitTestimonialTitleSeparatorHeightTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitTestimonialTitleSeparatorHeightMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitTestimonialTitleSeparatorHeightLaptop' => array(
				'type' => 'object'
			),
			'gkitTestimonialTitleSeparatorHeightWideScreen' => array(
				'type' => 'object'
			),
			'gkitTestimonialTitleSeparatorMarginDesktop' => array(
				'type' => 'object'
			),
			'gkitTestimonialTitleSeparatorMarginTablet' => array(
				'type' => 'object'
			),
			'gkitTestimonialTitleSeparatorMarginMobile' => array(
				'type' => 'object'
			),
			'gkitTestimonialTitleSeparatorMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitTestimonialTitleSeparatorMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitTestimonialTitleSeparatorMarginLaptop' => array(
				'type' => 'object'
			),
			'gkitTestimonialTitleSeparatorMarginWideScreen' => array(
				'type' => 'object'
			),
			'gkitTestimonialSlidesItemNormalBackground' => array(
				'type' => 'string',
				'default' => '#000000'
			),
			'gkitTestimonialClientNameColor' => array(
				'type' => 'string'
			),
			'gkitTestimonialClientHoverAndActiveColor' => array(
				'type' => 'string'
			),
			'gkitTestimonialClientTypography' => array(
				'type' => 'object'
			),
			'gkitTestimonialClientBottomSpaceDesktop' => array(
				'type' => 'object'
			),
			'gkitTestimonialClientBottomSpaceTablet' => array(
				'type' => 'object'
			),
			'gkitTestimonialClientBottomSpaceMobile' => array(
				'type' => 'object'
			),
			'gkitTestimonialClientBottomSpaceTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitTestimonialClientBottomSpaceMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitTestimonialClientBottomSpaceLaptop' => array(
				'type' => 'object'
			),
			'gkitTestimonialClientBottomSpaceWideScreen' => array(
				'type' => 'object'
			),
			'gkitTestimonialClientDesignationColor' => array(
				'type' => 'string'
			),
			'gkitClientDesignationHoverAndActiveColor' => array(
				'type' => 'string'
			),
			'gkitTestimonialClientDesignationTypography' => array(
				'type' => 'object'
			),
			'gkitTestimonialClientDesignationMarginDesktop' => array(
				'type' => 'object'
			),
			'gkitTestimonialClientDesignationMarginTablet' => array(
				'type' => 'object'
			),
			'gkitTestimonialClientDesignationMarginMobile' => array(
				'type' => 'object'
			),
			'gkitTestimonialClientDesignationMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitTestimonialClientDesignationMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitTestimonialClientDesignationMarginLaptop' => array(
				'type' => 'object'
			),
			'gkitTestimonialClientDesignationMarginWideScreen' => array(
				'type' => 'object'
			),
			'gkitTestimonialClientImageAlignment' => array(
				'type' => 'string',
				'default' => 'left'
			),
			'gkitTestimonialImageAlignment' => array(
				'type' => 'string'
			),
			'useClientImagePosition' => array(
				'type' => 'boolean',
				'default' => false
			),
			'gkitTestimonialClientImagePosition' => array(
				'type' => 'string',
				'default' => 'left'
			),
			'gkitTestimonialImageBorderDesktop' => array(
				'type' => 'object'
			),
			'gkitTestimonialImageBorderTablet' => array(
				'type' => 'object'
			),
			'gkitTestimonialImageBorderMobile' => array(
				'type' => 'object'
			),
			'gkitTestimonialImageBorderTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitTestimonialImageBorderMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitTestimonialImageBorderLaptop' => array(
				'type' => 'object'
			),
			'gkitTestimonialImageBorderWideScreen' => array(
				'type' => 'object'
			),
			'gkitTestimonialImageRadiusDesktop' => array(
				'type' => 'object'
			),
			'gkitTestimonialImageRadiusTablet' => array(
				'type' => 'object'
			),
			'gkitTestimonialImageRadiusMobile' => array(
				'type' => 'object'
			),
			'gkitTestimonialImageRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitTestimonialImageRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitTestimonialImageRadiusLaptop' => array(
				'type' => 'object'
			),
			'gkitTestimonialImageRadiusWideScreen' => array(
				'type' => 'object'
			),
			'gkitTestimonialImageBoxShadow' => array(
				'type' => 'object'
			),
			'gkitTestimonialImageSizeDesktop' => array(
				'type' => 'object'
			),
			'gkitTestimonialImageSizeTablet' => array(
				'type' => 'object'
			),
			'gkitTestimonialImageSizeMobile' => array(
				'type' => 'object'
			),
			'gkitTestimonialImageSizeTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitTestimonialImageSizeMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitTestimonialImageSizeLaptop' => array(
				'type' => 'object'
			),
			'gkitTestimonialImageSizeWideScreen' => array(
				'type' => 'object'
			),
			'gkitTestimonialImageMarginDesktop' => array(
				'type' => 'object'
			),
			'gkitTestimonialImageMarginTablet' => array(
				'type' => 'object'
			),
			'gkitTestimonialImageMarginMobile' => array(
				'type' => 'object'
			),
			'gkitTestimonialImageMarginTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitTestimonialImageMarginMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitTestimonialImageMarginLaptop' => array(
				'type' => 'object'
			),
			'gkitTestimonialImageMarginWideScreen' => array(
				'type' => 'object'
			),
			'gkitClientImageBackground' => array(
				'type' => 'object'
			),
			'gkitTestimonialClientLogoBottomSpaceDesktop' => array(
				'type' => 'object'
			),
			'gkitTestimonialClientLogoBottomSpaceTablet' => array(
				'type' => 'object'
			),
			'gkitTestimonialClientLogoBottomSpaceMobile' => array(
				'type' => 'object'
			),
			'gkitTestimonialClientLogoBottomSpaceTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitTestimonialClientLogoBottomSpaceMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitTestimonialClientLogoBottomSpaceLaptop' => array(
				'type' => 'object'
			),
			'gkitTestimonialClientLogoBottomSpaceWideScreen' => array(
				'type' => 'object'
			),
			'swiperArrows' => array(
				'type' => 'object'
			),
			'swiperDots' => array(
				'type' => 'object',
				'default' => array(
					'alignmentDesktop' => 'center',
					'alignmentTablet' => 'center',
					'alignmentMobile' => 'center',
					'alignmentTabletLandscape' => 'center',
					'alignmentMobileLandscape' => 'center',
					'alignmentLaptop' => 'center',
					'alignmentWideScreen' => 'center'
				)
			),
			'swiperSettings' => array(
				'type' => 'object',
				'default' => array(
					'spaceBetweenDesktop' => array(
						'size' => 10
					),
					'spaceBetweenTablet' => array(
						'size' => 10
					),
					'spaceBetweenMobile' => array(
						'size' => 10
					),
					'spaceBetweenTabletLandscape' => array(
						'size' => 10
					),
					'spaceBetweenMobileLandscape' => array(
						'size' => 10
					),
					'spaceBetweenLaptop' => array(
						'size' => 10
					),
					'spaceBetweenWideScreen' => array(
						'size' => 10
					),
					'slidesPerGroupDesktop' => array(
						'size' => 1
					),
					'slidesPerGroupTablet' => array(
						'size' => 1
					),
					'slidesPerGroupMobile' => array(
						'size' => 1
					),
					'slidesPerGroupTabletLandscape' => array(
						'size' => 1
					),
					'slidesPerGroupMobileLandscape' => array(
						'size' => 1
					),
					'slidesPerGroupLaptop' => array(
						'size' => 1
					),
					'slidesPerGroupWideScreen' => array(
						'size' => 1
					),
					'slidesPerViewDesktop' => array(
						'size' => 1
					),
					'slidesPerViewTablet' => array(
						'size' => 1
					),
					'slidesPerViewMobile' => array(
						'size' => 1
					),
					'slidesPerViewTabletLandscape' => array(
						'size' => 1
					),
					'slidesPerViewMobileLandscape' => array(
						'size' => 1
					),
					'slidesPerViewLaptop' => array(
						'size' => 1
					),
					'slidesPerViewWideScreen' => array(
						'size' => 1
					),
					'speed' => 1000,
					'autoplay' => true,
					'loop' => false,
					'delay' => 3000,
					'pauseOnMouseEnter' => false
				)
			),
			'enableArrows' => array(
				'type' => 'boolean',
				'default' => false
			),
			'leftArrowIcon' => array(
				'type' => 'object',
				'default' => array(
					'title' => 'arrow-left',
					'src' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" className="gkit-icon" aria-hidden="true" focusable="false"><path fillRule="evenodd" clipRule="evenodd" d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"></path></svg>'
				)
			),
			'rightArrowIcon' => array(
				'type' => 'object',
				'default' => array(
					'title' => 'arrow-right',
					'src' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" className="gkit-icon" aria-hidden="true" focusable="false"><path fillRule="evenodd" clipRule="evenodd" d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path></svg>'
				)
			),
			'enableDots' => array(
				'type' => 'boolean',
				'default' => false
			)
		),
		'supports' => array(
			'html' => false,
			'align' => array(
				'wide',
				'full'
			),
			'anchor' => true
		),
		'textdomain' => 'gutenkit-blocks-addon',
		'editorScript' => array(
			'file:./index.js',
			'swiper'
		),
		'style' => array(
			'file:./style-index.css',
			'swiper'
		),
		'viewScript' => array(
			'file:./frontend.js',
			'swiper'
		)
	),
	'video' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'gutenkit/video',
		'version' => '1.0.0',
		'title' => 'Video',
		'category' => 'gutenkit',
		'icon' => 'menu-alt3',
		'keywords' => array(
			'gkit',
			'video',
			'player',
			'embed',
			'youtube',
			'vimeo',
			'dailymotion'
		),
		'description' => 'Video block for gutenberg',
		'example' => array(
			'preview' => true
		),
		'attributes' => array(
			'blockID' => array(
				'type' => 'string'
			),
			'blockClass' => array(
				'type' => 'string'
			),
			'blocksCSS' => array(
				'type' => 'object'
			),
			'videoButtonStyle' => array(
				'type' => 'string',
				'default' => 'icon'
			),
			'videoButtonTitle' => array(
				'type' => 'string',
				'default' => 'Play'
			),
			'videoIcon' => array(
				'type' => 'object',
				'default' => array(
					'title' => 'play-button1',
					'src' => '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
<title>play-button1</title>
<path d="M29.85 8.403c-2.136-3.7-5.585-6.346-9.711-7.452s-8.436-0.538-12.136 1.598c-3.7 2.136-6.346 5.585-7.452 9.711s-0.538 8.436 1.598 12.136c2.136 3.7 5.585 6.346 9.711 7.452 1.378 0.369 2.776 0.552 4.165 0.552 2.771 0 5.506-0.727 7.971-2.15 3.7-2.136 6.346-5.585 7.452-9.711s0.538-8.436-1.598-12.136zM29.839 20.108c-0.991 3.697-3.361 6.786-6.676 8.7s-7.175 2.422-10.872 1.431c-3.697-0.991-6.786-3.361-8.7-6.676s-2.422-7.175-1.431-10.872c0.991-3.697 3.361-6.786 6.676-8.7 2.208-1.275 4.658-1.926 7.141-1.926 1.244 0 2.497 0.164 3.731 0.494 3.697 0.99 6.786 3.361 8.7 6.676s2.422 7.175 1.431 10.872zM23.674 14.891l-10.283-5.937c-0.546-0.315-1.197-0.315-1.743-0s-0.871 0.879-0.871 1.509v11.874c0 0.63 0.326 1.194 0.871 1.509 0.273 0.158 0.572 0.236 0.871 0.236s0.599-0.079 0.871-0.236l10.283-5.937c0.546-0.315 0.871-0.879 0.871-1.509s-0.326-1.194-0.871-1.509zM22.841 16.467l-10.283 5.937c-0.013 0.007-0.039 0.022-0.077 0s-0.039-0.052-0.039-0.067v-11.874c0-0.014 0-0.045 0.039-0.067 0.015-0.009 0.028-0.012 0.040-0.012 0.018 0 0.030 0.007 0.038 0.012l10.283 5.937c0.013 0.007 0.039 0.022 0.039 0.067s-0.026 0.060-0.039 0.067zM25.831 8.803c-1.981-2.559-4.958-4.278-8.169-4.716-0.455-0.062-0.876 0.257-0.938 0.712s0.257 0.876 0.712 0.938c2.782 0.38 5.361 1.869 7.077 4.086 0.164 0.212 0.41 0.323 0.659 0.323 0.178 0 0.358-0.057 0.509-0.174 0.364-0.281 0.43-0.805 0.149-1.168z"></path>
</svg>
'
				),
				'excludeCopy' => true
			),
			'videoIconPosition' => array(
				'type' => 'string',
				'default' => 'row'
			),
			'isActiveGlow' => array(
				'type' => 'boolean',
				'default' => true
			),
			'glowOptions' => array(
				'type' => 'string',
				'default' => 'color'
			),
			'videoType' => array(
				'type' => 'string',
				'default' => 'youtube'
			),
			'videoStyleOptions' => array(
				'type' => 'string',
				'default' => 'inline'
			),
			'isImageOverlay' => array(
				'type' => 'boolean',
				'default' => false
			),
			'overlayImage' => array(
				'type' => 'object',
				'default' => array(
					'url' => 'placeholder'
				)
			),
			'overlayPlayIcon' => array(
				'type' => 'boolean',
				'default' => false
			),
			'overlayLightbox' => array(
				'type' => 'boolean',
				'default' => false
			),
			'youtubeVideoUrl' => array(
				'type' => 'string',
				'default' => 'https://www.youtube.com/watch?v=mCIO63p1wQM'
			),
			'vimeoVideoUrl' => array(
				'type' => 'string',
				'default' => 'https://vimeo.com/235215203'
			),
			'selfHostedVideoUrl' => array(
				'type' => 'string',
				'default' => 'https://wpmet.com/plugin/elementskit/wp-content/uploads/2022/11/selfhosted_video.mp4'
			),
			'selfUploadedVideo' => array(
				'type' => 'object'
			),
			'isCustomUrl' => array(
				'type' => 'boolean',
				'default' => true
			),
			'videoStartTime' => array(
				'type' => 'number',
				'default' => 0
			),
			'videoEndTime' => array(
				'type' => 'string',
				'default' => ''
			),
			'isAutoPlay' => array(
				'type' => 'boolean',
				'default' => false
			),
			'isPopupVideoAutoPlay' => array(
				'type' => 'boolean',
				'default' => false
			),
			'isVideoMute' => array(
				'type' => 'boolean',
				'default' => true
			),
			'isVideoLoop' => array(
				'type' => 'boolean',
				'default' => false
			),
			'posterImage' => array(
				'type' => 'object',
				'default' => array(
					'type' => 'image'
				)
			),
			'isPlayerControlsEnabled' => array(
				'type' => 'boolean',
				'default' => true
			),
			'isDownloadButton' => array(
				'type' => 'boolean',
				'default' => true
			),
			'isPlayOnMobile' => array(
				'type' => 'boolean',
				'default' => true
			),
			'isPlayOnTabletLandscape' => array(
				'type' => 'boolean'
			),
			'isPlayOnMobileLandscape' => array(
				'type' => 'boolean'
			),
			'isPlayOnLaptop' => array(
				'type' => 'boolean'
			),
			'isPlayOnWideScreen' => array(
				'type' => 'boolean'
			),
			'videoPreLoad' => array(
				'type' => 'string',
				'default' => 'auto'
			),
			'isPlayPause' => array(
				'type' => 'boolean',
				'default' => true
			),
			'isProgressBar' => array(
				'type' => 'boolean',
				'default' => true
			),
			'isCurrentTime' => array(
				'type' => 'boolean',
				'default' => true
			),
			'isVolumeBar' => array(
				'type' => 'boolean',
				'default' => true
			),
			'volumeSlider' => array(
				'type' => 'string',
				'default' => 'horizontal'
			),
			'startVolume' => array(
				'type' => 'number',
				'default' => array(
					'size' => 0.8
				)
			),
			'playerControl' => array(
				'type' => 'boolean',
				'default' => true
			),
			'isPrivacyMode' => array(
				'type' => 'boolean',
				'default' => false
			),
			'isLazyLoad' => array(
				'type' => 'boolean',
				'default' => false
			),
			'isSuggestedVideo' => array(
				'type' => 'boolean',
				'default' => true
			),
			'isIntroTitle' => array(
				'type' => 'boolean',
				'default' => false
			),
			'isIntroPortrait' => array(
				'type' => 'boolean',
				'default' => false
			),
			'isIntroByLine' => array(
				'type' => 'boolean',
				'default' => false
			),
			'totalDuration' => array(
				'type' => 'boolean',
				'default' => true
			),
			'wrapperAlignmentDesktop' => array(
				'type' => 'string',
				'default' => 'center'
			),
			'wrapperAlignmentTablet' => array(
				'type' => 'string'
			),
			'wrapperAlignmentMobile' => array(
				'type' => 'string'
			),
			'wrapperAlignmentTabletLandscape' => array(
				'type' => 'string'
			),
			'wrapperAlignmentMobileLandscape' => array(
				'type' => 'string'
			),
			'wrapperAlignmentLaptop' => array(
				'type' => 'string'
			),
			'wrapperAlignmentWideScreen' => array(
				'type' => 'string'
			),
			'wrapperPaddingDesktop' => array(
				'type' => 'object'
			),
			'wrapperPaddingTablet' => array(
				'type' => 'object'
			),
			'wrapperPaddingMobile' => array(
				'type' => 'object'
			),
			'wrapperPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'wrapperPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'wrapperPaddingLaptop' => array(
				'type' => 'object'
			),
			'wrapperPaddingWideScreen' => array(
				'type' => 'object'
			),
			'wrapperBorderStyle' => array(
				'type' => 'object'
			),
			'wrapperBorderStyleHover' => array(
				'type' => 'object'
			),
			'wrapperBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'wrapperBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'wrapperBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'wrapperBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'wrapperBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'wrapperBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'wrapperBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'wrapperBorderRadiusHoverDesktop' => array(
				'type' => 'object'
			),
			'wrapperBorderRadiusHoverTablet' => array(
				'type' => 'object'
			),
			'wrapperBorderRadiusHoverMobile' => array(
				'type' => 'object'
			),
			'wrapperBorderRadiusHoverTabletLandscape' => array(
				'type' => 'object'
			),
			'wrapperBorderRadiusHoverMobileLandscape' => array(
				'type' => 'object'
			),
			'wrapperBorderRadiusHoverLaptop' => array(
				'type' => 'object'
			),
			'wrapperBorderRadiusHoverWideScreen' => array(
				'type' => 'object'
			),
			'buttonPaddingDesktop' => array(
				'type' => 'object'
			),
			'buttonPaddingTablet' => array(
				'type' => 'object'
			),
			'buttonPaddingMobile' => array(
				'type' => 'object'
			),
			'buttonPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'buttonPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'buttonPaddingLaptop' => array(
				'type' => 'object'
			),
			'buttonPaddingWideScreen' => array(
				'type' => 'object'
			),
			'iconSizeDesktop' => array(
				'type' => 'object',
				'default' => array(
					'size' => 22,
					'unit' => 'px'
				)
			),
			'iconSizeTablet' => array(
				'type' => 'object'
			),
			'iconSizeMobile' => array(
				'type' => 'object'
			),
			'iconSizeTabletLandscape' => array(
				'type' => 'object'
			),
			'iconSizeMobileLandscape' => array(
				'type' => 'object'
			),
			'iconSizeLaptop' => array(
				'type' => 'object'
			),
			'iconSizeWideScreen' => array(
				'type' => 'object'
			),
			'buttonTypography' => array(
				'type' => 'object'
			),
			'isHeightWidth' => array(
				'type' => 'boolean',
				'default' => true
			),
			'inlineVideoWidthDesktop' => array(
				'type' => 'object',
				'default' => array(
					'size' => 100,
					'unit' => '%'
				)
			),
			'inlineVideoWidthTablet' => array(
				'type' => 'object'
			),
			'inlineVideoWidthMobile' => array(
				'type' => 'object'
			),
			'inlineVideoWidthTabletLandscape' => array(
				'type' => 'object'
			),
			'inlineVideoWidthMobileLandscape' => array(
				'type' => 'object'
			),
			'inlineVideoWidthLaptop' => array(
				'type' => 'object'
			),
			'inlineVideoWidthWideScreen' => array(
				'type' => 'object'
			),
			'inlineVideoHeightDesktop' => array(
				'type' => 'object',
				'default' => array(
					'size' => 360,
					'unit' => 'px'
				)
			),
			'inlineVideoHeightTablet' => array(
				'type' => 'object'
			),
			'inlineVideoHeightMobile' => array(
				'type' => 'object'
			),
			'inlineVideoHeightTabletLandscape' => array(
				'type' => 'object'
			),
			'inlineVideoHeightMobileLandscape' => array(
				'type' => 'object'
			),
			'inlineVideoHeightLaptop' => array(
				'type' => 'object'
			),
			'inlineVideoHeightWideScreen' => array(
				'type' => 'object'
			),
			'inlineVideoPlayerBorderStyle' => array(
				'type' => 'object'
			),
			'inlineVideoPlayerBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'inlineVideoPlayerBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'inlineVideoPlayerBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'inlineVideoPlayerBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'inlineVideoPlayerBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'inlineVideoPlayerBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'inlineVideoPlayerBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'buttonWidthDesktop' => array(
				'type' => 'object',
				'default' => array(
					'size' => 60,
					'unit' => 'px'
				)
			),
			'buttonWidthTablet' => array(
				'type' => 'object'
			),
			'buttonWidthMobile' => array(
				'type' => 'object'
			),
			'buttonWidthTabletLandscape' => array(
				'type' => 'object'
			),
			'buttonWidthMobileLandscape' => array(
				'type' => 'object'
			),
			'buttonWidthLaptop' => array(
				'type' => 'object'
			),
			'buttonWidthWideScreen' => array(
				'type' => 'object'
			),
			'buttonHeightDesktop' => array(
				'type' => 'object',
				'default' => array(
					'size' => 60,
					'unit' => 'px'
				)
			),
			'buttonHeightTablet' => array(
				'type' => 'object'
			),
			'buttonHeightMobile' => array(
				'type' => 'object'
			),
			'buttonHeightTabletLandscape' => array(
				'type' => 'object'
			),
			'buttonHeightMobileLandscape' => array(
				'type' => 'object'
			),
			'buttonHeightLaptop' => array(
				'type' => 'object'
			),
			'buttonHeightWideScreen' => array(
				'type' => 'object'
			),
			'glowColor' => array(
				'type' => 'string',
				'default' => '#255cff'
			),
			'glowSizeDesktop' => array(
				'type' => 'object',
				'default' => array(
					'size' => 15,
					'unit' => 'px'
				)
			),
			'glowSizeTablet' => array(
				'type' => 'object'
			),
			'glowSizeMobile' => array(
				'type' => 'object'
			),
			'glowSizeTabletLandscape' => array(
				'type' => 'object'
			),
			'glowSizeMobileLandscape' => array(
				'type' => 'object'
			),
			'glowSizeLaptop' => array(
				'type' => 'object'
			),
			'glowSizeWideScreen' => array(
				'type' => 'object'
			),
			'textColor' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'textHoverColor' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'background' => array(
				'type' => 'object',
				'default' => array(
					'backgroundType' => 'classic',
					'backgroundColor' => '#da3175'
				)
			),
			'backgroundHover' => array(
				'type' => 'object'
			),
			'backgroundHoverScale' => array(
				'type' => 'object'
			),
			'borderStyle' => array(
				'type' => 'object'
			),
			'borderStyleHover' => array(
				'type' => 'object'
			),
			'borderColor' => array(
				'type' => 'string'
			),
			'borderHoverColor' => array(
				'type' => 'string'
			),
			'borderRadiusDesktop' => array(
				'type' => 'object'
			),
			'borderRadiusTablet' => array(
				'type' => 'object'
			),
			'borderRadiusMobile' => array(
				'type' => 'object'
			),
			'borderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'borderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'borderRadiusLaptop' => array(
				'type' => 'object'
			),
			'borderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'borderRadiusHoverDesktop' => array(
				'type' => 'object'
			),
			'borderRadiusHoverTablet' => array(
				'type' => 'object'
			),
			'borderRadiusHoverMobile' => array(
				'type' => 'object'
			),
			'borderRadiusHoverTabletLandscape' => array(
				'type' => 'object'
			),
			'borderRadiusHoverMobileLandscape' => array(
				'type' => 'object'
			),
			'borderRadiusHoverLaptop' => array(
				'type' => 'object'
			),
			'borderRadiusHoverWideScreen' => array(
				'type' => 'object'
			),
			'boxShadow' => array(
				'type' => 'object'
			),
			'textShadow' => array(
				'type' => 'object'
			),
			'paddingRightDesktop' => array(
				'type' => 'object',
				'default' => array(
					'size' => 0,
					'unit' => 'px'
				)
			),
			'paddingRightTablet' => array(
				'type' => 'object'
			),
			'paddingRightMobile' => array(
				'type' => 'object'
			),
			'paddingRightTabletLandscape' => array(
				'type' => 'object'
			),
			'paddingRightMobileLandscape' => array(
				'type' => 'object'
			),
			'paddingRightLaptop' => array(
				'type' => 'object'
			),
			'paddingRightWideScreen' => array(
				'type' => 'object'
			),
			'radioWaveSizeDesktop' => array(
				'type' => 'object',
				'default' => array(
					'size' => 2
				)
			),
			'radioWaveSizeTablet' => array(
				'type' => 'object'
			),
			'radioWaveSizeMobile' => array(
				'type' => 'object'
			),
			'radioWaveSizeTabletLandscape' => array(
				'type' => 'object'
			),
			'radioWaveSizeMobileLandscape' => array(
				'type' => 'object'
			),
			'radioWaveSizeLaptop' => array(
				'type' => 'object'
			),
			'radioWaveSizeWideScreen' => array(
				'type' => 'object'
			),
			'overlayBackground' => array(
				'type' => 'object',
				'default' => array(
					'backgroundType' => 'classic',
					'backgroundColor' => '#0a0a0a99'
				)
			),
			'gkitVideoCloseButtonIcon' => array(
				'type' => 'object',
				'default' => array(
					'title' => 'cross',
					'src' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M17.131 16.8l9.034-9.034c0.312-0.312 0.312-0.819 0-1.131s-0.819-0.312-1.131 0l-9.034 9.034-9.034-9.034c-0.312-0.312-0.819-0.312-1.131 0s-0.312 0.819 0 1.131l9.034 9.034-9.034 9.034c-0.312 0.312-0.312 0.819 0 1.131 0.156 0.156 0.361 0.234 0.566 0.234s0.409-0.078 0.566-0.234l9.034-9.034 9.034 9.034c0.156 0.156 0.361 0.234 0.566 0.234s0.409-0.078 0.566-0.234c0.312-0.312 0.312-0.819 0-1.131l-9.034-9.034z"></path></svg>'
				),
				'excludeCopy' => true
			),
			'gkitVideoCloseButtonWidthDesktop' => array(
				'type' => 'object',
				'default' => array(
					'size' => 30,
					'unit' => 'px'
				)
			),
			'gkitVideoCloseButtonWidthTablet' => array(
				'type' => 'object'
			),
			'gkitVideoCloseButtonWidthMobile' => array(
				'type' => 'object'
			),
			'gkitVideoCloseButtonWidthLaptop' => array(
				'type' => 'object'
			),
			'gkitVideoCloseButtonWidthTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitVideoCloseButtonWidthMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitVideoCloseButtonWidthWideScreen' => array(
				'type' => 'object'
			),
			'gkitVideoCloseButtonHeightDesktop' => array(
				'type' => 'object',
				'default' => array(
					'size' => 30,
					'unit' => 'px'
				)
			),
			'gkitVideoCloseButtonHeightTablet' => array(
				'type' => 'object'
			),
			'gkitVideoCloseButtonHeightMobile' => array(
				'type' => 'object'
			),
			'gkitVideoCloseButtonHeightWideScreen' => array(
				'type' => 'object'
			),
			'gkitVideoCloseButtonHeightLaptop' => array(
				'type' => 'object'
			),
			'gkitVideoCloseButtonHeightTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitVideoCloseButtonHeightMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitVideoCloseButtonIconSizeDesktop' => array(
				'type' => 'object',
				'default' => array(
					'size' => 20,
					'unit' => 'px'
				)
			),
			'gkitVideoCloseButtonIconSizeTablet' => array(
				'type' => 'object'
			),
			'gkitVideoCloseButtonIconSizeMobile' => array(
				'type' => 'object'
			),
			'gkitVideoCloseButtonIconSizeMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitVideoCloseButtonIconSizeTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitVideoCloseButtonIconSizeLaptop' => array(
				'type' => 'object'
			),
			'gkitVideoCloseButtonIconSizeWideScreen' => array(
				'type' => 'object'
			),
			'gkitVideoCloseButtonPaddingDesktop' => array(
				'type' => 'object',
				'default' => array(
					'size' => 8,
					'unit' => 'px'
				)
			),
			'gkitVideoCloseButtonPaddingTablet' => array(
				'type' => 'object'
			),
			'gkitVideoCloseButtonPaddingMobile' => array(
				'type' => 'object'
			),
			'gkitVideoCloseButtonPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitVideoCloseButtonPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitVideoCloseButtonPaddingLaptop' => array(
				'type' => 'object'
			),
			'gkitVideoCloseButtonPaddingWideScreen' => array(
				'type' => 'object'
			),
			'gkitVideoCloseButtonBorderNormal' => array(
				'type' => 'object',
				'default' => array(
					'color' => '#B7B7B7',
					'style' => 'solid',
					'width' => '1px'
				)
			),
			'gkitVideoCloseButtonBorderHover' => array(
				'type' => 'object',
				'default' => array(
					'color' => '#B7B7B7',
					'style' => 'solid',
					'width' => '1px'
				)
			),
			'gkitVideoCloseButtonIconColorNormal' => array(
				'type' => 'string',
				'default' => '#DBDBDB'
			),
			'gkitVideoCloseButtonIconColorHover' => array(
				'type' => 'string',
				'default' => '#DBDBDB'
			),
			'gkitVideoCloseButtonIconColorBgNormal' => array(
				'type' => 'object'
			),
			'gkitVideoCloseButtonIconColorBgHover' => array(
				'type' => 'object'
			),
			'gkitVideoCloseButtonBorderRadiusNormalDesktop' => array(
				'type' => 'object'
			),
			'gkitVideoCloseButtonBorderRadiusNormalTablet' => array(
				'type' => 'object'
			),
			'gkitVideoCloseButtonBorderRadiusNormalMobile' => array(
				'type' => 'object'
			),
			'gkitVideoCloseButtonBorderRadiusNormalMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitVideoCloseButtonBorderRadiusNormalTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitVideoCloseButtonBorderRadiusNormalLaptop' => array(
				'type' => 'object'
			),
			'gkitVideoCloseButtonBorderRadiusNormalWideScreen' => array(
				'type' => 'object'
			),
			'gkitVideoCloseButtonBorderRadiusHoverDesktop' => array(
				'type' => 'object'
			),
			'gkitVideoCloseButtonBorderRadiusHoverTablet' => array(
				'type' => 'object'
			),
			'gkitVideoCloseButtonBorderRadiusHoverMobile' => array(
				'type' => 'object'
			),
			'gkitVideoCloseButtonBorderRadiusHoverMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitVideoCloseButtonBorderRadiusHoverTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitVideoCloseButtonBorderRadiusHoverLaptop' => array(
				'type' => 'object'
			),
			'gkitVideoCloseButtonBorderRadiusHoverWideScreen' => array(
				'type' => 'object'
			),
			'isGkitVideoCloseButtonCustomPosition' => array(
				'type' => 'boolean',
				'default' => false
			),
			'gkitVideoCloseButtonPositionHorizontalDesktop' => array(
				'type' => 'object'
			),
			'gkitVideoCloseButtonPositionHorizontalTablet' => array(
				'type' => 'object'
			),
			'gkitVideoCloseButtonPositionHorizontalMobile' => array(
				'type' => 'object'
			),
			'gkitVideoCloseButtonPositionHorizontalMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitVideoCloseButtonPositionHorizontalTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitVideoCloseButtonPositionHorizontalLaptop' => array(
				'type' => 'object'
			),
			'gkitVideoCloseButtonPositionHorizontalWideScreen' => array(
				'type' => 'object'
			),
			'gkitVideoCloseButtonPositionVerticalDesktop' => array(
				'type' => 'object'
			),
			'gkitVideoCloseButtonPositionVerticalTablet' => array(
				'type' => 'object'
			),
			'gkitVideoCloseButtonPositionVerticalMobile' => array(
				'type' => 'object'
			),
			'gkitVideoCloseButtonPositionVerticalMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitVideoCloseButtonPositionVerticalTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitVideoCloseButtonPositionVerticalLaptop' => array(
				'type' => 'object'
			),
			'gkitVideoCloseButtonPositionVerticalWideScreen' => array(
				'type' => 'object'
			),
			'gkitVideoCloseButtonShadowNormal' => array(
				'type' => 'object'
			),
			'gkitVideoCloseButtonShadowHover' => array(
				'type' => 'object'
			),
			'gkitVideoCloseButtonPosition' => array(
				'type' => 'string',
				'default' => 'right'
			),
			'gkitPopupWrapBoxShadow' => array(
				'type' => 'object'
			),
			'gkitPopupWrapBackground' => array(
				'type' => 'object'
			),
			'gkitPopupWrapBorder' => array(
				'type' => 'object'
			),
			'gkitPopupWrapBorderRadiusDesktop' => array(
				'type' => 'object'
			),
			'gkitPopupWrapBorderRadiusTablet' => array(
				'type' => 'object'
			),
			'gkitPopupWrapBorderRadiusMobile' => array(
				'type' => 'object'
			),
			'gkitPopupWrapBorderRadiusMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitPopupWrapBorderRadiusTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitPopupWrapBorderRadiusLaptop' => array(
				'type' => 'object'
			),
			'gkitPopupWrapBorderRadiusWideScreen' => array(
				'type' => 'object'
			),
			'gkitPopupWrapPaddingDesktop' => array(
				'type' => 'object'
			),
			'gkitPopupWrapPaddingTablet' => array(
				'type' => 'object'
			),
			'gkitPopupWrapPaddingMobile' => array(
				'type' => 'object'
			),
			'gkitPopupWrapPaddingMobileLandscape' => array(
				'type' => 'object'
			),
			'gkitPopupWrapPaddingTabletLandscape' => array(
				'type' => 'object'
			),
			'gkitPopupWrapPaddingLaptop' => array(
				'type' => 'object'
			),
			'gkitPopupWrapPaddingWideScreen' => array(
				'type' => 'object'
			)
		),
		'supports' => array(
			'html' => false,
			'anchor' => true
		),
		'textdomain' => 'gutenkit-blocks-addon',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => array(
			'file:./style-index.css',
			'fancybox'
		),
		'viewScript' => 'file:./frontend.js',
		'script' => array(
			'fancybox'
		)
	)
);
