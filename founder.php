<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/security_shield.php';
?>
<!doctype html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Barlow:wght@400;500;600;700&display=swap"
        rel="stylesheet" />
    <style>
        :root {
            --bg: #111d1d;
            --ink: #0a1414;
            --fg: #f2ece0;
            --muted: #a7a294;
            --border: rgba(255, 255, 255, .10);
            --card: #1a2626;
            --primary: #3ec28b;
            --primary-fg: #0a1414;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0
        }

        html,
        body {
            background: var(--bg);
            color: var(--fg);
            font-family: "Barlow", Inter, sans-serif;
            -webkit-font-smoothing: antialiased
        }

        a {
            color: inherit;
            text-decoration: none
        }

        ul {
            list-style: none
        }

        .font-display {
            font-family: "Bebas Neue", Impact, sans-serif;
        }

        /*    main#content {margin-top: 105px;} */
        /* ============ STICKY & TRANSLUCENT GLASSMORPHISM HEADER ============ */
    html {
        overflow-x: clip;
    }

    body {
        overflow-x: clip;
    }

        .header {
        position: sticky !important;
        position: -webkit-sticky !important;
        top: 0 !important;
        left: 0 !important;
        right: 0 !important;
        z-index: 99999 !important;
        width: 100% !important;
        padding: 0 !important;
        background: rgba(6, 14, 14, 0.65) !important;
        backdrop-filter: blur(20px) saturate(180%) !important;
        -webkit-backdrop-filter: blur(20px) saturate(180%) !important;
        border-bottom: 1px solid rgba(255, 255, 255, 0.10) !important;
        box-shadow: 0 10px 35px rgba(0, 0, 0, 0.35) !important;
        box-sizing: border-box !important;
        transition: background-color 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease !important;
    }

    .topstrip {
        display: block !important;
        border-bottom: 1px solid rgba(255, 255, 255, 0.07) !important;
        background: rgba(255, 255, 255, 0.02) !important;
        padding: 0 !important;
        border-radius: 0 !important;
        box-shadow: none !important;
        backdrop-filter: none !important;
        -webkit-backdrop-filter: none !important;
    }

    .topstrip .row {
        display: flex !important;
        align-items: center !important;
        justify-content: space-between !important;
        width: 100% !important;
        padding: 8px 0 !important;
        box-sizing: border-box !important;
    }

    .topstrip .tag {
        font-family: "Barlow", Inter, sans-serif !important;
        font-size: 11px !important;
        text-transform: uppercase !important;
        letter-spacing: .3em !important;
        color: rgba(242, 236, 224, .7) !important;
        font-weight: 500 !important;
        white-space: nowrap !important;
    }

    .topstrip .links {
        display: flex !important;
        align-items: center !important;
        justify-content: flex-end !important;
        gap: 24px !important;
        margin-left: auto !important;
        font-family: "Barlow", Inter, sans-serif !important;
        font-size: 11px !important;
        letter-spacing: .25em !important;
        color: rgba(242, 236, 224, .7) !important;
        white-space: nowrap !important;
    }

    .topstrip .links a {
        color: rgba(242, 236, 224, .7) !important;
        text-decoration: none !important;
        transition: color .2s ease !important;
    }

    .topstrip .links a:hover {
        color: #3ec28b !important;
    }

    .topstrip .navrow {
        border-top: 1px solid #1d3529 !important;
    }

    @media (max-width: 767px) {
        .topstrip .row {
            display: none !important;
        }
        .topstrip .navrow {
            border-top: none !important;
            padding: 8px 0 !important;
        }
    }

    .header .container,
    .topstrip .container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 24px;
        box-sizing: border-box;
    }

    @media(min-width:768px) {
        .header .container,
        .topstrip .container {
            padding: 0 40px;
        }
    }

    .navrow {
        display: grid !important;
        grid-template-columns: minmax(0, 1fr) auto minmax(0, 1fr) !important;
        align-items: center !important;
        gap: 16px !important;
        padding: 10px 0 !important;
        width: 100% !important;
    }

    @media(min-width:768px) {
        .navrow {
            padding: 0px 0 10px !important;
        }
    }

    .navlist {
        display: none;
        align-items: center;
        gap: 26px;
        margin: 0;
        padding: 0;
        list-style: none;
    }

    #leftNav {
        justify-self: start !important;
    }

    #rightNav {
        justify-self: end !important;
        gap: 22px !important;
    }

    @media(min-width:1024px) {
        .navlist {
            display: flex !important;
        }
    }

    .navlist .item {
        position: relative;
    }

    .navlist a.link {
        font-family: "Barlow", Inter, sans-serif !important;
        font-size: 12px !important;
        font-weight: 600 !important;
        text-transform: uppercase !important;
        letter-spacing: .28em !important;
        color: #f2ece0 !important;
        transition: color .2s ease !important;
        text-decoration: none !important;
        display: inline-block !important;
        padding: 8px 0 !important;
        white-space: nowrap !important;
    }

    .navlist a.link:hover,
    .navlist .item.open a.link {
        color: #3ec28b !important;
    }

    .logo {
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        justify-self: center !important;
        text-align: center !important;
        text-decoration: none !important;
        margin: 0 auto !important;
    }

    .logo img {
        height: 48px;
        width: auto;
        display: block;
    }

    @media(min-width:768px) {
        .logo img {
            height: 64px;
        }
    }

    .right {
        display: flex !important;
        align-items: center !important;
        justify-content: flex-end !important;
        justify-self: end !important;
        margin-left: auto !important;
        gap: 20px !important;
    }

    .cta {
        display: none;
        align-items: center !important;
        justify-content: center !important;
        gap: 8px;
        border-radius: 9999px !important;
        background: #3ec28b !important;
        color: #0a1414 !important;
        padding: 10px 24px !important;
        font-family: "Barlow", Inter, sans-serif !important;
        font-size: 11px !important;
        font-weight: 600 !important;
        text-transform: uppercase !important;
        letter-spacing: .3em !important;
        transition: opacity .2s ease !important;
        text-decoration: none !important;
        white-space: nowrap !important;
    }

    .cta:hover {
        opacity: .9 !important;
    }

    @media(min-width:1024px) {
        .cta {
            display: inline-flex !important;
        }
    }

    .burger {
        display: grid;
        place-items: center;
        height: 44px;
        width: 44px;
        border: 1px solid rgba(242, 236, 224, .25);
        color: rgba(242, 236, 224, .8);
        background: transparent;
        cursor: pointer;
        transition: all .2s;
        border-radius: 2px;
    }

    .burger:hover {
        border-color: #3ec28b;
        color: #3ec28b;
    }

    @media(min-width:1024px) {
        .burger {
            display: none;
        }
    }

    /* ============ MEGA MENU ============ */
        .mega {
            position: absolute;
            left: 0;
            right: 0;
            top: 100%;
            display: none;
            max-height: calc(98vh - 100%);
            overflow-y: auto;
            -webkit-overflow-scrolling: touch
        }

        .mega.show {
            display: none
        }

        @media(min-width:1024px) {
            .mega.show {
                display: block
            }
        }

            .mega-inner {
        display: grid;
        grid-template-columns: 1.1fr 1fr 1fr;
        gap: 40px;
        border: 1px solid rgba(255, 255, 255, .12);
        background: #0d1717 !important;
        padding: 40px;
        box-shadow: 0 30px 80px rgba(0, 0, 0, .95);
        border-radius: 4px;
        backdrop-filter: none !important;
        -webkit-backdrop-filter: none !important;
    }

        @media(max-height:800px) {
                .mega-inner {
        display: grid;
        grid-template-columns: 1.1fr 1fr 1fr;
        gap: 40px;
        border: 1px solid rgba(255, 255, 255, .12);
        background: #0d1717 !important;
        padding: 40px;
        box-shadow: 0 30px 80px rgba(0, 0, 0, .95);
        border-radius: 4px;
        backdrop-filter: none !important;
        -webkit-backdrop-filter: none !important;
    }
        }

        .feature {
            display: block
        }

        .feature .imgwrap {
            position: relative;
            aspect-ratio: 4/3;
            overflow: hidden;
            border-radius: 2px
        }

        .feature img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform .7s
        }

        .feature:hover img {
            transform: scale(1.05)
        }

        .feature .imgwrap::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(10, 20, 20, .8), rgba(10, 20, 20, .2) 50%, transparent)
        }

        .feature .cap {
            position: absolute;
            left: 20px;
            right: 20px;
            bottom: 16px;
            z-index: 1
        }

        .feature .cap .t {
            font-size: 10px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: .3em;
            color: var(--primary)
        }

        .feature .cap .h {
            margin-top: 4px;
            font-family: "Bebas Neue", sans-serif;
            font-size: 24px;
            text-transform: uppercase;
            letter-spacing: .02em;
            color: var(--fg)
        }

        .feature p {
            margin-top: 16px;
            font-size: 14px;
            color: var(--muted)
        }

        .feature .more {
            margin-top: 12px;
            display: inline-flex;
            gap: 8px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: .25em;
            color: var(--primary)
        }

        .col .heading {
            font-size: 10px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: .3em;
            color: var(--primary)
        }

        .col ul {
            margin-top: 20px;
            display: grid;
            gap: 16px
        }

        .col li a {
            display: block;
            border-top: 1px solid var(--border);
            padding-top: 12px;
            transition: border-color .2s
        }

        .col li a:hover {
            border-color: var(--primary)
        }

        .col .row {
            display: flex;
            justify-content: space-between;
            align-items: baseline
        }

        .col .label {
            font-family: "Bebas Neue", sans-serif;
            font-size: 18px;
            text-transform: uppercase;
            letter-spacing: .02em;
            color: var(--fg);
            transition: color .2s
        }

        .col li a:hover .label {
            color: var(--primary)
        }

        .col .arrow {
            color: rgba(62, 194, 139, .6);
            transition: transform .2s
        }

        .col li a:hover .arrow {
            transform: translateX(4px)
        }

        .col .hint {
            margin-top: 4px;
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: .2em;
            color: var(--muted)
        }

        /* ============ MOBILE MENU ============ */
        .mobile {
            display: none;
            max-height: calc(100vh - 100%);
            overflow-y: auto;
            -webkit-overflow-scrolling: touch
        }

        .mobile.show {
            display: block
        }

        @media(min-width:1024px) {

            .mobile,
            .mobile.show {
                display: none
            }
        }

            .mobile-inner {
        border-top: 1px solid rgba(255, 255, 255, .10);
        background: #0d1717 !important;
        padding: 16px 20px;
        backdrop-filter: none !important;
        -webkit-backdrop-filter: none !important;
    }

        @media(min-width:768px) {
                .mobile-inner {
        border-top: 1px solid rgba(255, 255, 255, .10);
        background: #0d1717 !important;
        padding: 16px 20px;
        backdrop-filter: none !important;
        -webkit-backdrop-filter: none !important;
    }
        }

        .mobile nav {
            display: grid;
            gap: 0
        }

        /* Custom scrollbar for mega & mobile menus */
        .mega::-webkit-scrollbar,
        .mobile::-webkit-scrollbar {
            width: 6px
        }

        .mega::-webkit-scrollbar-track,
        .mobile::-webkit-scrollbar-track {
            background: rgba(10, 20, 20, .8)
        }

        .mega::-webkit-scrollbar-thumb,
        .mobile::-webkit-scrollbar-thumb {
            background: var(--primary);
            border-radius: 3px
        }

        /* m-item */
        .mobile .m-item {
            border-bottom: 1px solid var(--border)
        }

        /* trigger row — clickable when has sub-menu */
        .mobile .m-trigger {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            padding: 14px 0;
            background: none;
            border: none;
            cursor: pointer;
            text-align: left;
            color: var(--fg);
            font-family: inherit
        }

        .mobile .m-trigger a.m-link-plain {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 13px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: .25em;
            color: var(--fg);
            flex: 1;
            text-decoration: none
        }

        .mobile .m-trigger a.m-link-plain:hover {
            color: var(--primary)
        }

        .mobile .m-num {
            font-size: 10px;
            color: rgba(62, 194, 139, .7)
        }

        /* chevron */
        .mobile .m-chevron {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 28px;
            height: 28px;
            border: 1px solid var(--border);
            border-radius: 50%;
            color: var(--primary);
            transition: transform .3s, border-color .3s;
            flex-shrink: 0
        }

        .mobile .m-item.open .m-chevron {
            transform: rotate(180deg);
            border-color: var(--primary)
        }

        .mobile .m-chevron svg {
            width: 12px;
            height: 12px;
            stroke: currentColor;
            fill: none;
            stroke-width: 2.5;
            stroke-linecap: round;
            stroke-linejoin: round
        }

        /* accordion body */
        .mobile .m-body {
            overflow: hidden;
            max-height: 0;
            transition: max-height .35s cubic-bezier(.4, 0, .2, 1)
        }

        .mobile .m-item.open .m-body {
            max-height: 600px
        }

        /* column group inside accordion */
        .mobile .m-col-group {
            padding: 4px 0 16px 16px;
            display: grid;
            gap: 0
        }

        .mobile .m-col-label {
            font-size: 9px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: .35em;
            color: var(--primary);
            padding: 10px 0 6px;
            border-top: 1px solid rgba(255, 255, 255, .06);
            margin-top: 4px
        }

        .mobile .m-col-label:first-child {
            border-top: none;
            margin-top: 0
        }

        .mobile .m-sub-list {
            display: grid;
            gap: 0
        }

        .mobile .m-sub-list a {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 9px 0;
            font-size: 12px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: .18em;
            color: var(--muted);
            border-bottom: 1px solid rgba(255, 255, 255, .04);
            transition: color .2s
        }

        .mobile .m-sub-list a:last-child {
            border-bottom: none
        }

        .mobile .m-sub-list a:hover {
            color: var(--primary)
        }

        .mobile .m-sub-list a:hover .m-sub-arrow {
            transform: translateX(4px)
        }

        .mobile .m-sub-hint {
            font-size: 9px;
            letter-spacing: .12em;
            color: rgba(167, 162, 148, .5);
            text-transform: uppercase
        }

        .mobile .m-sub-arrow {
            color: rgba(62, 194, 139, .5);
            font-size: 11px;
            transition: transform .2s;
            flex-shrink: 0
        }

        /* plain link row (no sub-menu) */
        .mobile .m-plain-link {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 14px 0;
            font-size: 13px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: .25em;
            color: var(--fg);
            transition: color .2s
        }

        .mobile .m-plain-link:hover {
            color: var(--primary)
        }

        .mobile .m-plain-arrow {
            color: var(--primary)
        }

        .mobile .m-cta {
            margin-top: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            background: var(--primary);
            color: var(--primary-fg);
            padding: 15px 24px;
            font-size: 11px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: .28em;
            border-radius: 2px
        }
    
/* Elementor Lightbox Styling & Prominent Close Button */
.dialog-widget.dialog-type-lightbox,
.dialog-widget.dialog-lightbox-widget,
.elementor-lightbox {
    z-index: 999999999 !important;
}

.elementor-lightbox .dialog-header {
    display: block !important;
    visibility: visible !important;
    opacity: 1 !important;
    pointer-events: auto !important;
    position: absolute !important;
    top: 0 !important;
    right: 0 !important;
    left: 0 !important;
    height: 70px !important;
    z-index: 1000000000 !important;
    background: transparent !important;
}

.dialog-lightbox-close-button,
.dialog-close-button,
.elementor-lightbox .dialog-close-button,
.elementor-lightbox .dialog-lightbox-close-button,
.elementor-lightbox .dialog-header .dialog-close-button {
    display: flex !important;
    visibility: visible !important;
    opacity: 1 !important;
    pointer-events: auto !important;
    position: absolute !important;
    top: 24px !important;
    right: 24px !important;
    width: 44px !important;
    height: 44px !important;
    border-radius: 50% !important;
    background: rgba(0, 0, 0, 0.75) !important;
    border: 1px solid rgba(255, 255, 255, 0.25) !important;
    color: #ffffff !important;
    font-size: 20px !important;
    align-items: center !important;
    justify-content: center !important;
    cursor: pointer !important;
    z-index: 1000000001 !important;
    transition: all 0.25s ease !important;
}

.dialog-lightbox-close-button:hover,
.dialog-close-button:hover,
.elementor-lightbox .dialog-close-button:hover {
    background: #3ec28b !important;
    border-color: #3ec28b !important;
    color: #040909 !important;
    transform: scale(1.08) !important;
}

/* Hide only image title captions and filenames */
.elementor-slideshow__title,
.elementor-slideshow__description,
.elementor-slideshow__footer,
.dialog-lightbox-title,
.dialog-lightbox-description,
.elementor-lightbox .elementor-slideshow__title,
.elementor-lightbox .elementor-slideshow__description,
.elementor-lightbox .elementor-slideshow__footer,
.elementor-gallery-item__title,
.elementor-gallery-item__description,
.elementor-gallery-item__content,
.elementor-gallery-item__overlay .elementor-gallery-item__title {
    display: none !important;
    opacity: 0 !important;
    visibility: hidden !important;
    height: 0 !important;
    width: 0 !important;
    min-height: 0 !important;
    padding: 0 !important;
    margin: 0 !important;
    pointer-events: none !important;
}
</style>
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />

	<!-- This site is optimized with the Yoast SEO plugin v28.5 - https://yoast.com/product/yoast-seo-wordpress/ -->
	<title>Founder - Fit Bliss</title>
	<link rel="canonical" href="<?php echo $base_url; ?>/founder/" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Founder - Fit Bliss" />
	<meta property="og:url" content="<?php echo $base_url; ?>/founder/" />
	<meta property="og:site_name" content="Fit Bliss" />
	<meta property="article:publisher" content="https://www.facebook.com/fitblissbysk/" />
	<meta property="article:modified_time" content="2026-07-30T06:48:56+00:00" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:site" content="@fitblissbysk" />
	<meta name="twitter:label1" content="Est. reading time" />
	<meta name="twitter:data1" content="5 minutes" />
	<script type="application/ld+json" class="yoast-schema-graph">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/staging.fitblissbysk.com\/founder\/","url":"https:\/\/staging.fitblissbysk.com\/founder\/","name":"Founder - Fit Bliss","isPartOf":{"@id":"https:\/\/staging.fitblissbysk.com\/#website"},"datePublished":"2026-07-21T11:37:43+00:00","dateModified":"2026-07-30T06:48:56+00:00","breadcrumb":{"@id":"https:\/\/staging.fitblissbysk.com\/founder\/#breadcrumb"},"inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/staging.fitblissbysk.com\/founder\/"]}]},{"@type":"BreadcrumbList","@id":"https:\/\/staging.fitblissbysk.com\/founder\/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https:\/\/staging.fitblissbysk.com\/"},{"@type":"ListItem","position":2,"name":"Founder"}]},{"@type":"WebSite","@id":"https:\/\/staging.fitblissbysk.com\/#website","url":"https:\/\/staging.fitblissbysk.com\/","name":"Fit Bliss By SK","description":"","potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https:\/\/staging.fitblissbysk.com\/?s={search_term_string}"},"query-input":{"@type":"PropertyValueSpecification","valueRequired":true,"valueName":"search_term_string"}}],"inLanguage":"en-US"}]}</script>
	<!-- / Yoast SEO plugin. -->


<link rel="alternate" type="application/rss+xml" title="Fit Bliss &raquo; Feed" href="<?php echo $base_url; ?>/feed/" />
<link rel="alternate" type="application/rss+xml" title="Fit Bliss &raquo; Comments Feed" href="<?php echo $base_url; ?>/comments/feed/" />
<link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="<?php echo $base_url; ?>/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fstaging.fitblissbysk.com%2Ffounder%2F" />
<link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="<?php echo $base_url; ?>/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fstaging.fitblissbysk.com%2Ffounder%2F&#038;format=xml" />
<style id="wp-img-auto-sizes-contain-inline-css">
img:is([sizes=auto i],[sizes^="auto," i]){contain-intrinsic-size:3000px 1500px}
/*# sourceURL=wp-img-auto-sizes-contain-inline-css */
</style>
<link rel='stylesheet' id='fluentform-elementor-widget-css' href='<?php echo $base_url; ?>/assets/plugins/fluentform/assets/css/fluent-forms-elementor-widget.css?ver=6.2.14' media='all' />
<style id="wp-emoji-styles-inline-css">

	img.wp-smiley, img.emoji {
		display: inline !important;
		border: none !important;
		box-shadow: none !important;
		height: 1em !important;
		width: 1em !important;
		margin: 0 0.07em !important;
		vertical-align: -0.1em !important;
		background: none !important;
		padding: 0 !important;
	}
/*# sourceURL=wp-emoji-styles-inline-css */
</style>
<style id="popup-builder-block-popup-builder-style-inline-css">
.pbb-noscroll{overflow:hidden}.popupkit-campaigns-template-default{background-color:transparent}.popup-builder{position:relative;width:100%;z-index:1}.popup-builder-modal{align-items:center;display:none;justify-content:center;opacity:0;pointer-events:all;transition:opacity .15s linear}.popup-builder-container{animation-duration:1.2s;max-height:100%;max-width:100%;overflow:visible;pointer-events:all;position:relative}.popup-builder-container .popupkit-container-overlay{height:100%;left:0;opacity:.5;position:absolute;top:0;transition:.3s;width:100%}.popup-builder-content{background-color:#fff;border-radius:3px;box-sizing:border-box;line-height:1.5;max-height:100vh;max-width:100vw;overflow:auto;padding:0;position:relative;width:100%}.popup-builder-content-credit{background-color:#fff;border-radius:3px;bottom:-29px;cursor:pointer;display:flex;left:50%;position:absolute;transform:translate(-50%);z-index:9999}.popup-builder-content-credit a{color:#000;font-size:14px;font-weight:500;text-decoration:none}.popup-builder-content-credit a svg{position:relative;top:3px}.popup-builder-close{color:transparent;cursor:pointer;display:flex;font-size:14px;line-height:1;margin-top:0;opacity:1;pointer-events:all;position:absolute;right:20px;text-decoration:none;top:20px;transition:all .4s ease;z-index:9999}:root{--pbb-popup-animate-duration:1s}.popup_animated{animation-duration:1s;animation-duration:var(--pbb-popup-animate-duration);animation-fill-mode:both}.popup_animated.reverse{animation-direction:reverse;animation-fill-mode:forwards}@keyframes fadeIn{0%{opacity:0}to{opacity:1}}.fadeIn{animation-name:fadeIn}@keyframes fadeInDown{0%{opacity:0;transform:translate3d(0,-100%,0)}to{opacity:1;transform:none}}.fadeInDown{animation-name:fadeInDown}@keyframes fadeInLeft{0%{opacity:0;transform:translate3d(-100%,0,0)}to{opacity:1;transform:none}}.fadeInLeft{animation-name:fadeInLeft}@keyframes fadeInRight{0%{opacity:0;transform:translate3d(100%,0,0)}to{opacity:1;transform:none}}.fadeInRight{animation-name:fadeInRight}@keyframes fadeInUp{0%{opacity:0;transform:translate3d(0,100%,0)}to{opacity:1;transform:none}}.fadeInUp{animation-name:fadeInUp}

/*# sourceURL=<?php echo $base_url; ?>/assets/plugins/popup-builder-block/build/blocks/popup-builder/style-index.css */
</style>
<style id="popup-builder-block-button-style-inline-css">
.pbb-btn{align-items:center;color:#fff;cursor:pointer;display:inline-flex!important;justify-content:center;text-decoration:none;transition:.3s}.pbb-btn .gkit-icon{transition:.3s;vertical-align:middle}.pbb-btn:hover{background-color:#666}.pbb-btn:hover:before{opacity:1}.pbb-btn:before{background-size:102% 102%;border-radius:inherit;content:"";height:100%;left:0;opacity:0;position:absolute;top:0;transition:all .4s ease;width:100%;z-index:-1}.pbb-btn span{transition:.3s}

/*# sourceURL=<?php echo $base_url; ?>/assets/plugins/popup-builder-block/build/blocks/button/style-index.css */
</style>
<style id="popup-builder-block-form-style-inline-css">
.pbb-form,.pbb-form__field{display:flex;flex-wrap:wrap}.pbb-form__field{align-items:center;position:relative;width:100%}.pbb-form__field-privacy-notice{display:block}.pbb-form__label{display:block;font-size:16px;margin-bottom:5px}.pbb-form__label.required:after{color:red;content:"*";margin-left:5px}.pbb-form__input-wrap{align-items:center;background-color:#fff;border:1px solid #ccc;border-radius:5px;display:flex;position:relative;transition:all .3s ease-in-out;width:100%}.pbb-form__input-wrap .pbb-form__input{border:none;border-radius:5px;font-size:16px;outline:none;padding:10px;transition:all .3s ease-in-out;width:100%}.pbb-form__input-wrap .pbb-form__input:focus-visible{outline:none}.pbb-form__input-wrap .pbb-form__input:focus{border:none;box-shadow:none;outline:none}.pbb-form__submit-btn{align-items:center;background:#fff;border:1px solid #ccc;border-radius:5px;color:#333;cursor:pointer;display:flex;flex-direction:row;font-size:16px;justify-content:center;padding:10px 20px;transition:all .3s;width:100%}.pbb-form__submit-btn .pbb-form-loader{display:inline-block;height:15px;left:45%;position:absolute;top:41%;transform:translate(-50%,-50%);width:auto}.pbb-form__submit-btn .pbb-form-loader:before{animation:ripple-scale 1s ease-out infinite;border:1px solid #fff;border-radius:50%;color:#5b8c51;content:"";height:20px;position:absolute;width:20px;z-index:-1}@keyframes ripple-scale{0%{opacity:1;transform:scale(0)}50%{opacity:.7;transform:scale(1.2)}to{opacity:0;transform:scale(1.5)}}.pbb-form__submit-btn .btn-text{line-height:1}.pbb-form__submit-btn .input-icon{display:flex}.pbb-form__submit-btn:hover{background:#333;color:#fff}.pbb-form__submit-btn[disabled]{pointer-events:none}.pbb-form-success{background-color:#fff;border-radius:4px;color:#000;font-size:16px;font-weight:500;margin-top:8px;text-align:center;width:100%}.pbb-form .error-message{color:red;font-size:12px}.pbb-form__field-checkbox,.pbb-form__field-radio{display:block}.pbb-form__options-wrap{display:inline-grid}.pbb-form__option .pbb-form__option-input{display:none}.pbb-form__option .pbb-form__option-label{cursor:pointer;padding-left:28px;position:relative}.pbb-form__option .pbb-form__option-label:before{background:#fff;border:1.5px solid #cbd5e1;border-radius:4px;content:"";height:14px;left:0;position:absolute;top:50%;transform:translateY(-50%);transition:all .2s ease;width:14px}.pbb-form__option .pbb-form__option-label:after{border-bottom:2px solid #fff;border-right:2px solid #fff;content:"";height:7px;left:6px;opacity:0;position:absolute;top:50%;transform:translateY(-60%) rotate(45deg);transition:opacity .2s ease;width:3px}.pbb-form__option .pbb-form__option-input[type=checkbox]:checked+.pbb-form__option-label:before{background:#2563eb;border-color:#2563eb}.pbb-form__option .pbb-form__option-input[type=checkbox]:checked+.pbb-form__option-label:after{opacity:1}.pbb-form__option .pbb-form__option-input[type=radio]+.pbb-form__option-label:before{border-radius:50%}.pbb-form__option .pbb-form__option-input[type=radio]+.pbb-form__option-label:after{background:#2563eb;border:none;border-radius:50%;height:8px;left:4px;top:50%;transform:translateY(-50%);width:8px}.pbb-form__option .pbb-form__option-input[type=radio]:checked+.pbb-form__option-label:before{background:#fff;border-color:#2563eb}.pbb-form__option .pbb-form__option-input[type=radio]:checked+.pbb-form__option-label:after{opacity:1}.pbb-form__option-label{font-size:16px}.popup-builder .pbb-form__submit-btn{display:inherit}.pbb-form .pbb-form__hp{height:1px!important;left:-9999px!important;opacity:0;overflow:hidden;pointer-events:none;position:absolute!important;top:auto!important;width:1px!important}

/*# sourceURL=<?php echo $base_url; ?>/assets/plugins/popup-builder-block/build/blocks/form/style-index.css */
</style>
<style id="popup-builder-block-advanced-paragraph-style-inline-css">
.popupkit-adv-paragraph .popupkit-adv-paragraph-text{margin-bottom:0;margin-top:0}.popupkit-adv-paragraph .popupkit-adv-paragraph-text a{display:inline-block;transition:.3s}.popupkit-adv-paragraph .popupkit-adv-paragraph-text strong{display:inline-block;font-weight:900;transition:.3s}.popupkit-adv-paragraph .popupkit-adv-paragraph-text strong a{display:inline-block;transition:.3s}.popupkit-adv-paragraph .popupkit-focused-text-fill strong{-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-image:-webkit-linear-gradient(-35deg,#2575fc,#6a11cb);color:#2575fc}.popupkit-adv-paragraph .popupkit-drop-cap-letter:first-letter{float:left;font-size:45px;line-height:50px}

/*# sourceURL=<?php echo $base_url; ?>/assets/plugins/popup-builder-block/build/blocks/advanced-paragraph/style-index.css */
</style>
<style id="popup-builder-block-advanced-image-style-inline-css">
.wp-block-popup-builder-block-advanced-image img{border:none;border-radius:0;display:inline-block;height:auto;max-width:100%;vertical-align:middle}.wp-block-popup-builder-block-advanced-image.alignfull img,.wp-block-popup-builder-block-advanced-image.alignwide img{width:100%}.wp-block-popup-builder-block-advanced-image .popupkit-image-block{display:inline-block}.wp-block-popup-builder-block-advanced-image .popupkit-image-block a{text-decoration:none}.wp-block-popup-builder-block-advanced-image .popupkit-container-overlay:after,.wp-block-popup-builder-block-advanced-image .popupkit-container-overlay:before{content:"";height:100%;left:0;pointer-events:none;position:absolute;top:0;width:100%;z-index:1}

/*# sourceURL=<?php echo $base_url; ?>/assets/plugins/popup-builder-block/build/blocks/advanced-image/style-index.css */
</style>
<style id="popup-builder-block-icon-style-inline-css">
.wp-block-popup-builder-block-icon{display:flex}.wp-block-popup-builder-block-icon .popupkit-icons{display:inline-flex;transition:.3s}.wp-block-popup-builder-block-icon .popupkit-icons svg{display:block}

/*# sourceURL=<?php echo $base_url; ?>/assets/plugins/popup-builder-block/build/blocks/icon/style-index.css */
</style>
<style id="popup-builder-block-container-style-inline-css">
.gkit-block__inner{margin-left:auto;margin-right:auto}.gkit-block-video-wrap{height:100%;overflow:hidden;position:absolute;width:100%}.gkit-block-video-wrap video{background-size:cover;height:100%;object-fit:cover;width:100%}.wp-block-popup-builder-block-container{margin-left:auto;margin-right:auto;position:relative;transition:background var(--gkit-bg-hover-transition,var(--gutenkit-preset-global-transition_duration,.4s)) var(--gutenkit-preset-global-transition_timing_function,ease),border var(--gkit-bg-border-transition,var(--gutenkit-preset-global-transition_duration,.4s)) var(--gutenkit-preset-global-transition_timing_function,ease),box-shadow var(--gkit-bg-hover-transition,var(--gutenkit-preset-global-transition_duration,.4s)) var(--gutenkit-preset-global-transition_timing_function,ease),border-radius var(--gkit-bg-hover-transition,var(--gutenkit-preset-global-transition_duration,.4s)) var(--gutenkit-preset-global-transition_timing_function,ease);z-index:1}.wp-block-popup-builder-block-container>.gkit-block__inner{display:flex}.wp-block-popup-builder-block-container .gkit-container-overlay{height:100%;left:0;position:absolute;top:0;width:100%}.wp-block-popup-builder-block-container .wp-block-popup-builder-block-container{flex-grow:0;flex-shrink:1;margin-left:unset;margin-right:unset}.wp-block-popup-builder-block-container .wp-block-popup-builder-block-container.alignfull{flex-shrink:1;width:100%}.wp-block-popup-builder-block-container .wp-block-popup-builder-block-container.alignwide{flex-shrink:1}.wp-block-popup-builder-block-container .gkit-image-scroll-container{height:100%;left:0;overflow:hidden;position:absolute;top:0;width:100%;z-index:-1}.wp-block-popup-builder-block-container .gkit-image-scroll-layer{height:100%;left:0;position:absolute;top:0;width:100%}.wp-block-popup-builder-block-container .is-style-wide{width:100%}.wp-site-blocks .wp-block-popup-builder-block-container .gkit-block-video-wrap{z-index:-1}

/*# sourceURL=<?php echo $base_url; ?>/assets/plugins/popup-builder-block/build/blocks/container/style-index.css */
</style>
<style id="popup-builder-block-heading-style-inline-css">
.wp-block-popup-builder-block-heading,.wp-block-popup-builder-block-heading.popupkit-heading-has-border .popupkit-heading-title{position:relative}.wp-block-popup-builder-block-heading.popupkit-heading-has-border .popupkit-heading-title:before{background:linear-gradient(180deg,#ff512f,#dd2476);content:"";display:block;height:100%;left:0;position:absolute;width:4px}.wp-block-popup-builder-block-heading.popupkit-heading-has-border.popupkit-heading-border-position-end .popupkit-heading-title:before{left:auto;right:0}.wp-block-popup-builder-block-heading .popupkit-heading-title{margin:0 0 20px;position:relative;transition:all .3s ease-in-out;z-index:1}.wp-block-popup-builder-block-heading .popupkit-heading-title strong{font-weight:900;transition:color .3s ease-in-out}.wp-block-popup-builder-block-heading .popupkit-heading-title strong a{transition:.3s}.wp-block-popup-builder-block-heading .popupkit-heading-title.popupkit-heading-title-text-fill strong{-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-image:-webkit-linear-gradient(-35deg,#2575fc,#6a11cb);color:#2575fc}.wp-block-popup-builder-block-heading .popupkit-heading-subtitle{margin:8px 0 16px}.wp-block-popup-builder-block-heading .popupkit-heading-subtitle-has-border{display:inline-block}.wp-block-popup-builder-block-heading .popupkit-heading-subtitle-has-border:after,.wp-block-popup-builder-block-heading .popupkit-heading-subtitle-has-border:before{background-color:#d7d7d7;content:"";display:inline-block;height:3px;vertical-align:middle;width:40px}.wp-block-popup-builder-block-heading .popupkit-heading-subtitle-has-border:before{margin-right:15px}.wp-block-popup-builder-block-heading .popupkit-heading-subtitle-has-border:after{margin-left:15px}.wp-block-popup-builder-block-heading .popupkit-heading-subtitle-has-outline:not(.popupkit-heading-subtitle-has-border){border:2px solid #d7d7d7;display:inline-block}.wp-block-popup-builder-block-heading .popupkit-heading-subtitle-has-text-fill{-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-image:-webkit-linear-gradient(-35deg,#2575fc,#6a11cb);color:#2575fc}.wp-block-popup-builder-block-heading .popupkit-heading-shadow-text{color:transparent;font-family:Archivo,sans-serif;font-size:90px;font-weight:700;letter-spacing:-6px;line-height:120px;position:absolute;white-space:nowrap;z-index:0;-webkit-text-fill-color:#fff;-webkit-text-stroke-width:1px;-webkit-text-stroke-color:hsla(0,0%,6%,.1);transform:translate(-50%,-50%)}.wp-block-popup-builder-block-heading .popupkit-heading-separetor-style-none{display:none}.wp-block-popup-builder-block-heading .popupkit-heading-separetor-divider{background:currentColor;border-radius:2px;box-sizing:border-box;color:#2575fc;height:4px;margin-left:27px;position:relative;width:30px}.wp-block-popup-builder-block-heading .popupkit-heading-separetor-divider:before{background-color:currentColor;border-radius:50%;box-shadow:9px 0 0 0 currentColor,18px 0 0 0 currentColor;content:"";display:inline-block;height:4px;left:-27px;position:absolute;top:0;width:4px}.wp-block-popup-builder-block-heading .popupkit-heading-separetor.popupkit-heading-separetor-style-dotted .popupkit-heading-separetor-divider{width:100px}.wp-block-popup-builder-block-heading .popupkit-heading-separetor.popupkit-heading-separetor-style-solid .popupkit-heading-separetor-divider{background:currentColor;border-radius:0;margin-left:0;width:150px}.wp-block-popup-builder-block-heading .popupkit-heading-separetor.popupkit-heading-separetor-style-solid .popupkit-heading-separetor-divider:before{display:none}.wp-block-popup-builder-block-heading .popupkit-heading-separetor.popupkit-heading-separetor-style-solid-star .popupkit-heading-separetor-divider{background:#2575fc;background:linear-gradient(90deg,currentColor,currentColor 38%,hsla(0,0%,100%,0) 0,hsla(0,0%,100%,0) 62%,currentColor 0,currentColor);color:#2575fc;height:2px;margin-left:0;position:relative;width:135px}.wp-block-popup-builder-block-heading .popupkit-heading-separetor.popupkit-heading-separetor-style-solid-star .popupkit-heading-separetor-divider:before{display:none}.wp-block-popup-builder-block-heading .popupkit-heading-separetor.popupkit-heading-separetor-style-solid-star .popupkit-heading-separetor-divider:after{background-color:currentColor;content:"";height:14.3px;left:50%;position:absolute;top:0;top:-7.15px;transform:translateX(-50%) rotate(45deg);width:14.3px}.wp-block-popup-builder-block-heading .popupkit-heading-separetor.popupkit-heading-separetor-style-solid-bullet .popupkit-heading-separetor-divider{background:#2575fc;background:linear-gradient(90deg,currentColor,currentColor 38%,hsla(0,0%,100%,0) 0,hsla(0,0%,100%,0) 62%,currentColor 0,currentColor);color:#2575fc;height:2px;margin-left:0;position:relative;width:100px}.wp-block-popup-builder-block-heading .popupkit-heading-separetor.popupkit-heading-separetor-style-solid-bullet .popupkit-heading-separetor-divider:before{display:none}.wp-block-popup-builder-block-heading .popupkit-heading-separetor.popupkit-heading-separetor-style-solid-bullet .popupkit-heading-separetor-divider:after{background-color:currentColor;border-radius:50%;content:"";height:14.3px;left:50%;position:absolute;top:0;top:-7.15px;transform:translateX(-50%);width:14.3px}.wp-block-popup-builder-block-heading .popupkit-heading-description{display:inline-block}.wp-block-popup-builder-block-heading .popupkit-heading-description p{margin:0}.wp-block-popup-builder-block-heading.has-text-align-center .popupkit-heading-separetor-divider{margin:0 auto!important}.wp-block-popup-builder-block-heading.has-text-align-right .popupkit-heading-separetor-divider{margin-left:auto!important}

/*# sourceURL=<?php echo $base_url; ?>/assets/plugins/popup-builder-block/build/blocks/heading/style-index.css */
</style>
<style id="global-styles-inline-css">
:root{--wp--preset--aspect-ratio--square: 1;--wp--preset--aspect-ratio--4-3: 4/3;--wp--preset--aspect-ratio--3-4: 3/4;--wp--preset--aspect-ratio--3-2: 3/2;--wp--preset--aspect-ratio--2-3: 2/3;--wp--preset--aspect-ratio--16-9: 16/9;--wp--preset--aspect-ratio--9-16: 9/16;--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgb(6,147,227) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgb(252,185,0) 0%,rgb(255,105,0) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgb(255,105,0) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--font-family--bebas-neue: "Bebas Neue", sans-serif;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgb(255, 255, 255), 6px 6px rgb(0, 0, 0);--wp--preset--shadow--crisp: 6px 6px 0px rgb(0, 0, 0);}.wp-block-button{--wp--preset--dimension--25: 25%;--wp--preset--dimension--50: 50%;--wp--preset--dimension--75: 75%;--wp--preset--dimension--100: 100%;}:root { --wp--style--global--content-size: 800px;--wp--style--global--wide-size: 1200px; }:where(body) { margin: 0; }.wp-site-blocks > .alignleft { float: left; margin-right: 2em; }.wp-site-blocks > .alignright { float: right; margin-left: 2em; }.wp-site-blocks > .aligncenter { justify-content: center; margin-left: auto; margin-right: auto; }:where(.wp-site-blocks) > * { margin-block-start: 24px; margin-block-end: 0; }:where(.wp-site-blocks) > :first-child { margin-block-start: 0; }:where(.wp-site-blocks) > :last-child { margin-block-end: 0; }:root { --wp--style--block-gap: 24px; }:root :where(.is-layout-flow) > :first-child{margin-block-start: 0;}:root :where(.is-layout-flow) > :last-child{margin-block-end: 0;}:root :where(.is-layout-flow) > *{margin-block-start: 24px;margin-block-end: 0;}:root :where(.is-layout-constrained) > :first-child{margin-block-start: 0;}:root :where(.is-layout-constrained) > :last-child{margin-block-end: 0;}:root :where(.is-layout-constrained) > *{margin-block-start: 24px;margin-block-end: 0;}:root :where(.is-layout-flex){gap: 24px;}:root :where(.is-layout-grid){gap: 24px;}.is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}.is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}.is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}.is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}.is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}.is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}.is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}.is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}.is-layout-flex{flex-wrap: wrap;align-items: center;}.is-layout-flex > :is(*, div){margin: 0;}body .is-layout-grid{display: grid;}.is-layout-grid > :is(*, div){margin: 0;}body{padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 0px;}:root :where(.wp-element-button, .wp-block-button__link){background-color: #32373c;border-width: 0;color: #fff;font-family: inherit;font-size: inherit;font-style: inherit;font-weight: inherit;letter-spacing: inherit;line-height: inherit;padding-top: calc(0.667em + 2px);padding-right: calc(1.333em + 2px);padding-bottom: calc(0.667em + 2px);padding-left: calc(1.333em + 2px);text-decoration: none;text-transform: inherit;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}.has-bebas-neue-font-family{font-family: var(--wp--preset--font-family--bebas-neue) !important;}
:root :where(.wp-block-icon svg){width: 24px;}
:root :where(.wp-block-pullquote){font-size: 1.5em;line-height: 1.6;}
/*# sourceURL=global-styles-inline-css */
</style>
<link rel='stylesheet' id='gutenkit-third-party-editor-compatibility-css' href='<?php echo $base_url; ?>/assets/plugins/popup-builder-block/build/compatibility/frontend.css?ver=fa9b2727afc9d74855b4' media='all' />
<link rel='stylesheet' id='qi-addons-for-elementor-grid-style-css' href='<?php echo $base_url; ?>/assets/plugins/qi-addons-for-elementor/assets/css/grid.min.css?ver=1.11.1' media='all' />
<link rel='stylesheet' id='qi-addons-for-elementor-helper-parts-style-css' href='<?php echo $base_url; ?>/assets/plugins/qi-addons-for-elementor/assets/css/helper-parts.min.css?ver=1.11.1' media='all' />
<link rel='stylesheet' id='qi-addons-for-elementor-style-css' href='<?php echo $base_url; ?>/assets/plugins/qi-addons-for-elementor/assets/css/main.min.css?ver=1.11.1' media='all' />
<link rel='stylesheet' id='hello-elementor-css' href='<?php echo $base_url; ?>/assets/theme/hello-elementor/assets/css/reset.css?ver=3.4.6' media='all' />
<link rel='stylesheet' id='hello-elementor-theme-style-css' href='<?php echo $base_url; ?>/assets/theme/hello-elementor/assets/css/theme.css?ver=3.4.6' media='all' />
<link rel='stylesheet' id='hello-elementor-header-footer-css' href='<?php echo $base_url; ?>/assets/theme/hello-elementor/assets/css/header-footer.css?ver=3.4.6' media='all' />
<link rel='stylesheet' id='elementor-frontend-css' href='<?php echo $base_url; ?>/assets/plugins/elementor/assets/css/frontend.min.css?ver=4.2.4' media='all' />
<link rel='stylesheet' id='elementor-post-21-css' href='<?php echo $base_url; ?>/assets/images/elementor/css/post-21.css?ver=1790121883' media='all' />
<link rel='stylesheet' id='widget-image-css' href='<?php echo $base_url; ?>/assets/plugins/elementor/assets/css/widget-image.min.css?ver=4.2.4' media='all' />
<link rel='stylesheet' id='widget-nav-menu-css' href='<?php echo $base_url; ?>/assets/plugins/elementor-pro/assets/css/widget-nav-menu.min.css?ver=4.1.1' media='all' />
<link rel='stylesheet' id='swiper-css' href='<?php echo $base_url; ?>/assets/plugins/qi-addons-for-elementor/assets/plugins/swiper/8.4.5/swiper.min.css?ver=8.4.5' media='all' />
<link rel='stylesheet' id='e-swiper-css' href='<?php echo $base_url; ?>/assets/plugins/elementor/assets/css/conditionals/e-swiper.min.css?ver=4.2.4' media='all' />
<link rel='stylesheet' id='widget-social-icons-css' href='<?php echo $base_url; ?>/assets/plugins/elementor/assets/css/widget-social-icons.min.css?ver=4.2.4' media='all' />
<link rel='stylesheet' id='e-apple-webkit-css' href='<?php echo $base_url; ?>/assets/plugins/elementor/assets/css/conditionals/apple-webkit.min.css?ver=4.2.4' media='all' />
<link rel='stylesheet' id='widget-heading-css' href='<?php echo $base_url; ?>/assets/plugins/elementor/assets/css/widget-heading.min.css?ver=4.2.4' media='all' />
<link rel='stylesheet' id='widget-icon-list-css' href='<?php echo $base_url; ?>/assets/plugins/elementor/assets/css/widget-icon-list.min.css?ver=4.2.4' media='all' />
<link rel='stylesheet' id='fluent-form-styles-css' href='<?php echo $base_url; ?>/assets/plugins/fluentform/assets/css/fluent-forms-public.css?ver=6.2.14' media='all' />
<link rel='stylesheet' id='fluentform-public-default-css' href='<?php echo $base_url; ?>/assets/plugins/fluentform/assets/css/fluentform-public-default.css?ver=6.2.14' media='all' />
<link rel='stylesheet' id='e-popup-css' href='<?php echo $base_url; ?>/assets/plugins/elementor-pro/assets/css/conditionals/popup.min.css?ver=4.1.1' media='all' />
<link rel='stylesheet' id='elementor-post-18724-css' href='<?php echo $base_url; ?>/assets/images/elementor/css/post-18724.css?ver=1790581503' media='all' />
<link rel='stylesheet' id='elementor-post-27-css' href='<?php echo $base_url; ?>/assets/images/elementor/css/post-27.css?ver=1790121883' media='all' />
<link rel='stylesheet' id='elementor-post-29-css' href='<?php echo $base_url; ?>/assets/images/elementor/css/post-29.css?ver=1790121883' media='all' />
<link rel='stylesheet' id='elementor-post-1638-css' href='<?php echo $base_url; ?>/assets/images/elementor/css/post-1638.css?ver=1790121883' media='all' />
<link rel='stylesheet' id='chaty-front-css-css' href='<?php echo $base_url; ?>/assets/plugins/chaty/dist/css/style.css?ver=3.6.11785238286' media='all' />
<link rel='stylesheet' id='elementor-gf-local-inter-css' href='<?php echo $base_url; ?>/assets/images/elementor/google-fonts/css/inter.css?ver=1749298517' media='all' />
<link rel='stylesheet' id='elementor-gf-local-roboto-css' href='<?php echo $base_url; ?>/assets/images/elementor/google-fonts/css/roboto.css?ver=1749298521' media='all' />
<script id="jquery-core-js" src="<?php echo $base_url; ?>/assets/vendor/js/jquery/jquery.min.js?ver=3.7.1"></script>
<script id="jquery-migrate-js" src="<?php echo $base_url; ?>/assets/vendor/js/jquery/jquery-migrate.min.js?ver=3.4.1"></script>
<link rel="https://api.w.org/" href="<?php echo $base_url; ?>/wp-json/" /><link rel="alternate" title="JSON" type="application/json" href="<?php echo $base_url; ?>/wp-json/wp/v2/pages/18724" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php echo $base_url; ?>/xmlrpc.php?rsd" />
<meta name="generator" content="WordPress 7.1.2" />
<link rel='shortlink' href='<?php echo $base_url; ?>/?p=18724' />
<meta name="google-site-verification" content="esp5culI75683oug1lhRO_V48ms0gQHhbfVejWE5sG4" />
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-17391758722"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-17391758722');
</script><meta name="generator" content="Elementor 4.2.4; features: e_font_icon_svg, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-swap">
			<style>
				.e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload),
				.e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload) * {
					background-image: none !important;
				}
				@media screen and (max-height: 1024px) {
					.e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload),
					.e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload) * {
						background-image: none !important;
					}
				}
				@media screen and (max-height: 640px) {
					.e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload),
					.e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload) * {
						background-image: none !important;
					}
				}
			</style>
			<style class="wp-fonts-local">
@font-face{font-family:"Bebas Neue";font-style:normal;font-weight:400;font-display:fallback;src:url('<?php echo $base_url; ?>/assets/images/fonts/JTUSjIg69CK48gW7PXooxWtrygbi49c.woff2') format('woff2');}
</style>
<link rel="icon" href="<?php echo $base_url; ?>/assets/images/2024/04/cropped-LOGO-copy-1-32x32.png" sizes="32x32" />
<link rel="icon" href="<?php echo $base_url; ?>/assets/images/2024/04/cropped-LOGO-copy-1-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon" href="<?php echo $base_url; ?>/assets/images/2024/04/cropped-LOGO-copy-1-180x180.png" />
<meta name="msapplication-TileImage" content="<?php echo $base_url; ?>/assets/images/2024/04/cropped-LOGO-copy-1-270x270.png" />
<style id="wp-custom-css">
.chaty {
    fill: black !important;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}
</style>
</head>

<body class="wp-singular page-template-default page page-id-18724 wp-embed-responsive wp-theme-hello-elementor qodef-qi--no-touch qi-addons-for-elementor-1.11.1 hello-elementor-default elementor-default elementor-kit-21 elementor-page elementor-page-18724">

    
        <a class="skip-link screen-reader-text" href="#content">
        Skip to content    </a>
    
        <header class="header" id="header">
  <div class="topstrip">
    <div class="container">
      <div class="row">
        <div class="tag">Luxury Wellness Destination · Bhopal</div>
        <div class="links">
          <a href="mailto:info@fitblissbysk.com">info@fitblissbysk.com</a>
          <a href="tel:+917470787012">+91 74707 87012</a>
          <a href="tel:+917470787014">+91 74707 87014</a>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="navrow">
      <!-- LEFT NAV -->
      <nav class="navlist" id="leftNav">
        <div class="item" data-name="Home"><a class="link" href="<?php echo $base_url; ?>/">Home</a></div>
        <div class="item" data-name="About Us"><a class="link" href="<?php echo $base_url; ?>/about/">About Us</a></div>
        <div class="item" data-name="Services"><a class="link" href="<?php echo $base_url; ?>/gym/">Services</a></div>
        <div class="item" data-name="Membership"><a class="link" href="<?php echo $base_url; ?>/membership/">Membership</a></div>
      </nav>

      <!-- CENTER LOGO -->
      <a class="logo" href="<?php echo $base_url; ?>/">
        <img src="<?php echo $base_url; ?>/assets/images/2026/07/logo.png" alt="FitBliss by Shruti Kapoor" onerror="this.onerror=null; this.src='https://staging.fitblissbysk.com/assets/images/2026/07/logo.png';">
      </a>

      <!-- RIGHT NAV -->
      <div class="right">
        <nav class="navlist" id="rightNav">
          <div class="item" data-name="Gallery"><a class="link" href="<?php echo $base_url; ?>/gallery/">Gallery</a></div>
          <div class="item" data-name="Blog"><a class="link" href="<?php echo $base_url; ?>/blog/">Blog</a></div>
          <div class="item" data-name="Contact"><a class="link" href="<?php echo $base_url; ?>/contact/">Contact</a></div>
        </nav>
        <a class="cta call-btn" href="tel:+917470787012">Call Us</a>
        <button class="burger" id="burgerBtn" aria-label="Toggle menu">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 12h18M3 6h18M3 18h18"/></svg>
        </button>
      </div>
    </div>
  </div>

  <!-- Mega Menu Dropdown -->
  <div class="mega" id="mega">
    <div class="container">
      <div class="mega-inner" id="megaInner"></div>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div class="mobile" id="mobile">
    <div class="container mobile-inner">
      <nav id="mobileNav"></nav>
      <a href="tel:+917470787014" class="m-cta" style="margin-top:20px;display:flex;align-items:center;justify-content:center;gap:12px;background:#3ec28b;color:#0a1414;padding:15px 24px;font-size:11px;font-weight:600;text-transform:uppercase;letter-spacing:.28em;border-radius:2px;text-decoration:none;">Book a free trial →</a>
    </div>
  </div>
</header>

    <script>
        const nav = ["Home", "About Us", "Services", "Membership", "Gallery", "Blog", "Contact"];

        const megaMenus = {
            "About Us": {
                feature: {
                    tag: "Our Story",
                    title: "Where Wellness Meets Luxury",
                    body: "Founded by Dr. Shruti Kapoor — a Radiologist turned wellness curator, inspired by her own transformation through Pilates in Mumbai.",
                    img: "<?php echo $base_url; ?>/assets/images/2026/06/DSC_2491-scaled.jpg",
                    href: "<?php echo $base_url; ?>/about/"
                },
                cols: [
                    {
                        heading: "About FitBliss",
                        items: [
                            {
                                label: "The Story",
                                href: "<?php echo $base_url; ?>/about/",
                                hint: "Vision · Journey · Values",
                                feature: {
                                    tag: "About FitBliss",
                                    title: "The Story",
                                    body: "A vision born from personal transformation — discover how FitBliss came to be the luxury wellness destination it is today.",
                                    img: "<?php echo $base_url; ?>/assets/images/2024/06/2.jpg",
                                    href: "<?php echo $base_url; ?>/about/"
                                }
                            }
                        ]
                    },
                    {
                        heading: "Leadership",
                        items: [
                            {
                                label: "Meet the Founder",
                                href: "<?php echo $base_url; ?>/founder/",
                                hint: "Dr. Shruti Kapoor",
                                feature: {
                                    tag: "Leadership",
                                    title: "Meet the Founder",
                                    body: "Dr. Shruti Kapoor — Radiologist, wellness curator, and the visionary mind behind FitBliss.",
                                    img: "<?php echo $base_url; ?>/assets/images/2026/07/IMG-20250804-WA0081.webp",
                                    position: "center 20%",
                                    href: "<?php echo $base_url; ?>/founder/"
                                }
                            }
                        ]
                    }
                ]
            },
            Services: {
                feature: {
                    tag: "Our Services",
                    title: "Holistic Wellness",
                    body: "Discover a comprehensive range of fitness, wellness, and lifestyle services.",
                    img: "<?php echo $base_url; ?>/assets/images/2026/07/DSC_3887-scaled.jpg",
                    href: "<?php echo $base_url; ?>/gym/"
                },
                cols: [
                    {
                        heading: "Gym & Fitness",
                        items: [
                            { label: "Gym & Strength", href: "<?php echo $base_url; ?>/gym/", hint: "Training", feature: { tag: "Fitness", title: "Gym & Strength", body: "State-of-the-art equipment.", img: "<?php echo $base_url; ?>/assets/images/2026/07/DSC_3887-scaled.jpg", href: "<?php echo $base_url; ?>/gym/" } },
                            { label: "Personal Training", href: "<?php echo $base_url; ?>/personal-training/", hint: "Coaching", feature: { tag: "Fitness", title: "Personal Training", body: "Expert guidance for your goals.", img: "<?php echo $base_url; ?>/assets/images/2026/07/DSC_3593-scaled.jpg", href: "<?php echo $base_url; ?>/personal-training/" } },
                            { label: "Functional Training", href: "<?php echo $base_url; ?>/functional-training/", hint: "Agility", feature: { tag: "Fitness", title: "Functional Training", body: "Enhance daily movement and strength.", img: "<?php echo $base_url; ?>/assets/images/2026/07/DSC_3557-scaled.jpg", href: "<?php echo $base_url; ?>/functional-training/" } },
                            { label: "Spinning Bike", href: "<?php echo $base_url; ?>/spinning/", hint: "Cardio", feature: { tag: "Fitness", title: "Spinning Bike", body: "High-intensity cardio on bikes.", img: "<?php echo $base_url; ?>/assets/images/2026/07/IMG_3724-scaled.jpg", href: "<?php echo $base_url; ?>/spinning/" } }
                        ]
                    },
                    {
                        heading: "Yoga & Pilates",
                        items: [
                            { label: "Pilates", href: "<?php echo $base_url; ?>/pilates/", hint: '<img src="<?php echo $base_url; ?>/assets/images/2026/07/YKBI.png" alt="YKBI" style="height:40px;width:auto;vertical-align:middle;display:inline-block;" />', feature: { tag: "Yoga", title: "Pilates", body: "Strengthen core and flexibility.", img: "<?php echo $base_url; ?>/assets/images/2026/07/DSC04177_11zon-1.jpg", href: "<?php echo $base_url; ?>/pilates/" } },
                            { label: "Traditional Yoga", href: "<?php echo $base_url; ?>/traditional-yoga/", hint: "Mind & Body", feature: { tag: "Yoga", title: "Traditional Yoga", body: "Classic poses and breathwork.", img: "<?php echo $base_url; ?>/assets/images/2026/07/0Z8_2468-scaled.jpg", href: "<?php echo $base_url; ?>/traditional-yoga/" } },
                            { label: "Aerial Yoga", href: "<?php echo $base_url; ?>/aerial-yoga/", hint: "Anti-gravity", feature: { tag: "Yoga", title: "Aerial Yoga", body: "Supported inversions and deep stretches.", img: "<?php echo $base_url; ?>/assets/images/2026/07/0Z8_2468-scaled.jpg", href: "<?php echo $base_url; ?>/aerial-yoga/" } },
                            { label: "Aquatic Wellness", href: "<?php echo $base_url; ?>/aquatic-wellness/", hint: "Water Therapy", feature: { tag: "Yoga", title: "Aquatic Wellness", body: "Low impact water workouts.", img: "<?php echo $base_url; ?>/assets/images/2026/07/IMG_0567-scaled.jpg", href: "<?php echo $base_url; ?>/aquatic-wellness/" } }
                        ]
                    },
                    {
                        heading: "Sports & Dance",
                        items: [
                            { label: "Boxing", href: "<?php echo $base_url; ?>/boxing/", hint: "Combat", feature: { tag: "Sports", title: "Boxing", body: "Build endurance and power.", img: "<?php echo $base_url; ?>/assets/images/2026/07/IMG_3714-scaled.jpg", href: "<?php echo $base_url; ?>/boxing/" } },
                            { label: "Zumba", href: "<?php echo $base_url; ?>/zumba/", hint: "Dance Fitness", feature: { tag: "Sports", title: "Zumba", body: "Fun, dance-based cardio.", img: "<?php echo $base_url; ?>/assets/images/2026/07/IMG_3730-scaled.jpg", href: "<?php echo $base_url; ?>/zumba/" } },
                            { label: "Dance Classes", href: "<?php echo $base_url; ?>/dance/", hint: "Choreography", feature: { tag: "Sports", title: "Dance Classes", body: "Learn routines and stay fit.", img: "<?php echo $base_url; ?>/assets/images/2026/07/IMG_3730-scaled.jpg", href: "<?php echo $base_url; ?>/dance/" } },
                            { label: "Squash Court", href: "<?php echo $base_url; ?>/squash/", hint: "Racquet Sport", feature: { tag: "Sports", title: "Squash Court", body: "Fast-paced competitive play.", img: "<?php echo $base_url; ?>/assets/images/2026/07/Squash-Court.jpg", href: "<?php echo $base_url; ?>/squash/" } }
                        ]
                    },
                    {
                        heading: "Wellness & Healing",
                        items: [
                            { label: "Spa & Recovery", href: "<?php echo $base_url; ?>/spa/", hint: "Relaxation", feature: { tag: "Wellness", title: "Spa & Recovery", body: "Full body relaxation.", img: "<?php echo $base_url; ?>/assets/images/2026/07/Spa-Recovery.jpg", href: "<?php echo $base_url; ?>/spa/" } },
                            { label: "Panchkarma", href: "<?php echo $base_url; ?>/panchkarma/", hint: "Ayurvedic Detox", feature: { tag: "Wellness", title: "Panchkarma", body: "Traditional deep detox.", img: "<?php echo $base_url; ?>/assets/images/2026/07/panchkarma.jpg", href: "<?php echo $base_url; ?>/panchkarma/" } },
                            { label: "Physiotherapy", href: "<?php echo $base_url; ?>/physiotherapy/", hint: "Rehab", feature: { tag: "Wellness", title: "Physiotherapy", body: "Expert injury recovery.", img: "<?php echo $base_url; ?>/assets/images/2026/07/physiotherapy.webp", href: "<?php echo $base_url; ?>/physiotherapy/" } },
                            { label: "IV Therapy", href: "<?php echo $base_url; ?>/iv-therapy/", hint: "Vitamins", feature: { tag: "Wellness", title: "IV Therapy", body: "Direct hydration and vitamins.", img: "<?php echo $base_url; ?>/assets/images/2026/07/IV-Therapy.jpg", href: "<?php echo $base_url; ?>/iv-therapy/" } },
                            { label: "Steam & Sauna", href: "<?php echo $base_url; ?>/steam-sauna/", hint: "Heat Therapy", feature: { tag: "Wellness", title: "Steam & Sauna", body: "Detoxify and relax muscles.", img: "<?php echo $base_url; ?>/assets/images/2026/07/steam-sauna.jpg", href: "<?php echo $base_url; ?>/steam-sauna/" } }
                        ]
                    },
                    {
                        heading: "Lifestyle",
                        items: [
                            { label: "Nutrition & Diet", href: "<?php echo $base_url; ?>/nutrition/", hint: "Consultation", feature: { tag: "Lifestyle", title: "Nutrition & Diet", body: "Personalized diet plans.", img: "<?php echo $base_url; ?>/assets/images/2026/07/Nutrition-Diet.png", href: "<?php echo $base_url; ?>/nutrition/" } },
                            { label: "Salon", href: "<?php echo $base_url; ?>/salon/", hint: "Grooming", feature: { tag: "Lifestyle", title: "Salon", body: "Premium grooming services.", img: "<?php echo $base_url; ?>/assets/images/2026/07/Salon.jpg", href: "<?php echo $base_url; ?>/salon/" } },
                            { label: "EatBliss Café", href: "<?php echo $base_url; ?>/cafe/", hint: "Healthy Food", feature: { tag: "Lifestyle", title: "EatBliss Café", body: "Nutritious and delicious meals.", img: "<?php echo $base_url; ?>/assets/images/2026/07/IMG_0639-scaled.webp", href: "<?php echo $base_url; ?>/cafe/" } }
                        ]
                    },
                    {
                        heading: "Equipments",
                        items: [
                            { label: "Equipment", href: "<?php echo $base_url; ?>/equipment/", hint: "stack the equipment", feature: { tag: "Lifestyle", title: "Equipment", body: "We didn't stack the equipment and call it a gym.", img: "<?php echo $base_url; ?>/assets/images/2026/07/DSC_3887-scaled.jpg", href: "<?php echo $base_url; ?>/equipment/" } }
                        ]
                    }
                ]
            }
        };

        const linkHref = (nm) => {
            const customLinks = { "Home": "<?php echo $base_url; ?>/", "About Us": "<?php echo $base_url; ?>/about/", "Services": "<?php echo $base_url; ?>/gym/", "Membership": "<?php echo $base_url; ?>/membership/", "Gallery": "<?php echo $base_url; ?>/gallery/", "Blog": "<?php echo $base_url; ?>/blog/", "Trainers": "<?php echo $base_url; ?>/trainers/", "Contact": "<?php echo $base_url; ?>/contact/" };
            return customLinks[nm] || "<?php echo $base_url; ?>/" + nm.toLowerCase().replace(/\s+/g, '-') + "/";
        };

        // Attach event listeners to left & right nav
        function setupNavEvents(el) {
            if (!el) return;
            const items = el.querySelectorAll('.item');
            items.forEach(div => {
                const nm = div.dataset.name;
                if (nm) {
                    div.addEventListener("mouseenter", () => openMega(megaMenus[nm] ? nm : null));
                }
            });
        }
        setupNavEvents(document.getElementById("leftNav"));
        setupNavEvents(document.getElementById("rightNav"));

        // Mega menu logic
        const mega = document.getElementById("mega");
        const megaInner = document.getElementById("megaInner");
        let currentMenu = null;

        function openMega(name) {
            currentMenu = name;
            document.querySelectorAll(".navlist .item").forEach(i => i.classList.toggle("open", i.dataset.name === name));
            if (!name || !megaMenus[name]) {
                if (mega) mega.classList.remove("show");
                if (megaInner) megaInner.innerHTML = "";
                return;
            }
            const m = megaMenus[name];

            const renderFeature = (f) => {
                if (!f) return "";
                const imgSrc = f.img || "<?php echo $base_url; ?>/assets/images/2026/07/DSC_3887-scaled.jpg";
                return `
                <div class="imgwrap">
                    <img src="${imgSrc}" alt="${f.title || 'FitBliss'}" 
                         style="object-position:${f.position || 'center'}; width:100%; height:100%; object-fit:cover; display:block;"
                         onerror="this.onerror=null; this.src='<?php echo $base_url; ?>/assets/images/2026/07/DSC_3887-scaled.jpg';" />
                    <div class="cap">
                        <div class="t">${f.tag || ''}</div>
                        <div class="h">${f.title || ''}</div>
                    </div>
                </div>
                <p>${f.body || ''}</p>
                <span class="more">Explore →</span>
            `;};

            if (megaInner) {
                megaInner.innerHTML = `
                    <a class="feature" id="megaFeature" href="${m.feature.href}">
                        ${renderFeature(m.feature)}
                    </a>
                    <div style="grid-column: 2 / -1; display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 32px; align-items: start;">
                        ${m.cols.map((col, cIdx) => `
                            <div class="col">
                                <div class="heading">— ${col.heading}</div>
                                <ul>
                                    ${col.items.map((it, iIdx) => `
                                        <li><a href="${it.href}" class="mega-sub-item" data-col="${cIdx}" data-item="${iIdx}">
                                            <div class="row">
                                                <span class="label">${it.label}</span>
                                                <span class="arrow">→</span>
                                            </div>
                                            ${it.hint ? `<div class="hint">${it.hint}</div>` : ""}
                                        </a></li>`).join("")}
                                </ul>
                            </div>`).join("")}
                    </div>
                `;

                // Dynamic hover feature preview
                const featureEl = document.getElementById("megaFeature");
                document.querySelectorAll(".mega-sub-item").forEach(el => {
                    el.addEventListener("mouseenter", () => {
                        const c = el.dataset.col;
                        const i = el.dataset.item;
                        const item = m.cols[c].items[i];
                        const f = item.feature || m.feature;
                        if (featureEl) {
                            featureEl.innerHTML = renderFeature(f);
                            featureEl.href = f.href || item.href;
                        }
                    });
                });
            }

            if (mega) mega.classList.add("show");
        }

        const headerEl = document.getElementById("header");
        if (headerEl) {
            headerEl.addEventListener("mouseleave", () => openMega(null));
        }

        document.addEventListener("click", (e) => {
            if (!e.target.closest("#header")) openMega(null);
        });

        window.addEventListener("scroll", () => {
            if (currentMenu) openMega(null);
        }, { passive: true });

        // Mobile menu
        const burger = document.getElementById("burger") || document.getElementById("burgerBtn");
        const mobile = document.getElementById("mobile");
        const mobileNav = document.getElementById("mobileNav");

        const chevronSVG = `<svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>`;

        if (mobileNav && mobileNav.children.length === 0) {
            nav.forEach((nm, idx) => {
                const div = document.createElement("div");
                div.className = "m-item";
                const numStr = "0" + (idx + 1);
                if (megaMenus[nm]) {
                    const m = megaMenus[nm];
                    div.innerHTML = `
            <button class="m-trigger" aria-expanded="false">
              <span style="display:flex;align-items:center;gap:12px"><span class="m-num">${numStr}</span>${nm}</span>
              ${chevronSVG}
            </button>
            <div class="m-sub">
              ${m.cols.map(c => `
                <div class="m-col">
                  <div class="m-subhead">— ${c.heading}</div>
                  ${c.items.map(it => `
                    <a class="m-link" href="${it.href}">
                      <div>${it.label}${it.hint ? `<span class="hint">${it.hint}</span>` : ""}</div>
                    </a>
                  `).join("")}
                </div>
              `).join("")}
            </div>
          `;
                    div.querySelector(".m-trigger").addEventListener("click", () => {
                        const isOpen = div.classList.toggle("open");
                        div.querySelector(".m-trigger").setAttribute("aria-expanded", isOpen);
                    });
                } else {
                    div.innerHTML = `
            <a class="m-plain-link" href="${linkHref(nm)}">
              <span style="display:flex;align-items:center;gap:12px"><span class="m-num">${numStr}</span>${nm}</span>
              <span class="m-plain-arrow">→</span>
            </a>`;
                }
                mobileNav.appendChild(div);
            });
        }

        if (burger && mobile) {
            burger.addEventListener("click", () => {
                const on = mobile.classList.toggle("show");
                burger.classList.toggle("active", on);
                if (!on) {
                    document.querySelectorAll(".m-item.open").forEach(el => el.classList.remove("open"));
                }
            });
            mobile.addEventListener("click", (e) => {
                if (e.target.tagName === "A" && !e.target.classList.contains("m-link-plain")) {
                    mobile.classList.remove("show");
                    burger.classList.remove("active");
                    document.querySelectorAll(".m-item.open").forEach(el => el.classList.remove("open"));
                }
            });
        }
    </script>
<main id="content" class="site-main post-18724 page type-page status-publish hentry">

	
	<div class="page-content">
				<div data-elementor-type="wp-page" data-elementor-id="18724" class="elementor elementor-18724" data-elementor-post-type="page">
				<div class="elementor-element elementor-element-7b902dc e-con-full e-flex e-con e-parent" data-id="7b902dc" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-1467efb elementor-widget elementor-widget-shortcode" data-id="1467efb" data-element_type="widget" data-e-type="widget" data-widget_type="shortcode.default">
				<div class="elementor-widget-container">
							<div class="elementor-shortcode">		<div data-elementor-type="page" data-elementor-id="20357" class="elementor elementor-20357" data-elementor-post-type="elementor_library">
				<div class="elementor-element elementor-element-4cb72315 e-con-full e-flex e-con e-parent" data-id="4cb72315" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
		<div class="elementor-element elementor-element-43179e0f e-con-full e-flex e-con e-child" data-id="43179e0f" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
		<div class="elementor-element elementor-element-33a66473 e-con-full e-flex e-con e-child" data-id="33a66473" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-3c4c2e2f elementor-widget elementor-widget-text-editor" data-id="3c4c2e2f" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p><a style="color: #9b998b; text-decoration: none; font-size: 11px; font-weight: 600; text-transform: uppercase; letter-spacing: 2.5px; font-family: Barlow,sans-serif;" href="<?php echo $base_url; ?>/about/">← About FitBliss</a></p>								</div>
				</div>
				<div class="elementor-element elementor-element-251747fb elementor-widget elementor-widget-button" data-id="251747fb" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="<?php echo $base_url; ?>/contact/">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Book a free trial</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-15da05e2 e-con-full e-flex e-con e-child" data-id="15da05e2" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-element elementor-element-6815583b elementor-widget elementor-widget-html" data-id="6815583b" data-element_type="widget" data-e-type="widget" data-widget_type="html.default">
				<div class="elementor-widget-container">
					<style>
    /* ─── Founder Hero Section ─── */
    .fbt-founder-hero {
        padding: clamp(40px, 8vw, 80px) clamp(16px, 4vw, 40px);
        box-sizing: border-box;
        background: #010303;
        overflow: hidden;
    }

    .fbt-founder-container {
        max-width: 1400px;
        margin: 0 auto;
        display: flex;
        flex-wrap: wrap;
        gap: clamp(32px, 5vw, 48px);
        align-items: center;
    }

    /* Left Text Column */
    .fbt-founder-text {
        flex: 1 1 300px;
        min-width: 0;
    }

    .fbt-founder-title {
        margin: 18px 0 0;
        font-family: 'Bebas Neue', Impact, sans-serif;
        font-size: clamp(2.5rem, 6.5vw, 6.5rem);
        line-height: 0.9;
        color: #f4f2ea;
        font-weight: 400;
        text-transform: uppercase;
    }

    .fbt-founder-desc {
        margin: 22px 0 0;
        font-family: 'Barlow', Inter, sans-serif;
        font-size: clamp(15px, 2vw, 17px);
        line-height: 1.65;
        color: #9b998b;
    }

    .fbt-founder-badges {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin-top: 26px;
    }

    .fbt-founder-badge {
        border: 1px solid rgba(55, 192, 128, .5);
        background: rgba(1, 3, 3, .4);
        padding: 6px 12px;
        font-family: 'Barlow', Inter, sans-serif;
        font-size: clamp(9px, 2.5vw, 10px);
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 2px;
        color: #37c080;
    }

    /* Right Image Column */
    .fbt-founder-portrait {
        flex: 0.9 1 280px;
        min-width: 0;
        position: relative;
        margin-bottom: 18px; /* space for overlapping badge */
    }

    .fbt-founder-img {
        width: 100%;
        max-height: 620px;
        object-fit: cover;
        display: block;
        border-radius: 0 !important;
    }

    .fbt-founder-overlay-card {
        position: absolute;
        bottom: -18px;
        left: clamp(12px, 4vw, 20px);
        border: 1px solid rgba(55, 192, 128, .5);
        background: rgba(1, 3, 3, .85);
        padding: 10px 18px;
        backdrop-filter: blur(6px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.5);
    }

    @media (max-width: 600px) {
        .fbt-founder-portrait {
            flex: 1 1 100%;
            margin-bottom: 24px;
        }
    }
</style>

<div class="fbt-founder-hero">
    <div class="fbt-founder-container">
        <!-- LEFT TEXT -->
        <div class="fbt-founder-text">
            <span style="font-family:'Barlow', Inter, sans-serif;font-size:12px;font-weight:600;text-transform:uppercase;letter-spacing:3px;color:#37c080;">
                — Founder
            </span>
            <h1 class="fbt-founder-title">
                Dr. Shruti<br /><span style="color:#37c080;">Kapoor</span>
            </h1>
            <p class="fbt-founder-desc">
                Radiologist. Certified Pilates practitioner. Curator of Central India's
                most luxurious wellness destination.
            </p>
            <div class="fbt-founder-badges">
                <span class="fbt-founder-badge">Radiologist</span>
                <span class="fbt-founder-badge">Pilates Certified</span>
                <span class="fbt-founder-badge">Founder — FitBliss</span>
            </div>
        </div>

        <!-- RIGHT PORTRAIT -->
        <div class="fbt-founder-portrait">
            <img decoding="async" src="<?php echo $base_url; ?>/assets/images/2026/07/IMG-20250804-WA0081.webp"
                alt="Dr. Shruti Kapoor — Founder of FitBliss" class="fbt-founder-img" />
            <div class="fbt-founder-overlay-card">
                <div style="font-family:'Barlow', Inter, sans-serif;font-size:10px;text-transform:uppercase;letter-spacing:3px;color:#37c080;">
                    Founder &amp; Curator
                </div>
                <div style="font-family:'Bebas Neue', Impact, sans-serif;font-size:20px;color:#f4f2ea;margin-top:2px;">
                    FitBliss by SK
                </div>
            </div>
        </div>
    </div>
</div>				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-42e5637c e-con-full e-flex e-con e-child" data-id="42e5637c" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-element elementor-element-22d74add elementor-widget elementor-widget-html" data-id="22d74add" data-element_type="widget" data-e-type="widget" data-widget_type="html.default">
				<div class="elementor-widget-container">
					
<div style="max-width:1000px;margin:0 auto;text-align:center;">
  <div style="font-family:'Bebas Neue', Impact, sans-serif;font-size:80px;line-height:1;color:#37c080;margin-bottom:8px;">"</div>
  <blockquote style="margin:0;font-family:'Bebas Neue', Impact, sans-serif;font-size:clamp(1.5rem,3vw,2.8rem);
                     text-transform:uppercase;line-height:1.15;color:#f4f2ea;font-weight:400;">
    Fitness is not about becoming perfect.<br/>
    It's about becoming a healthier, stronger<br/>
    and happier version of yourself.
  </blockquote>
  <div style="margin-top:24px;font-family:'Barlow', Inter, sans-serif;font-size:12px;text-transform:uppercase;
              letter-spacing:3px;color:#9b998b;">— Dr. Shruti Kapoor, Founder</div>
</div>				</div>
				</div>
				</div>
		<!-- REDESIGNED THE STORY SECTION -->
		<div class="fbt-story-wrapper">
			<style>
				.fbt-story-wrapper {
					width: 100%;
					background: linear-gradient(180deg, #070e0e 0%, #030607 100%);
					padding: clamp(50px, 7vw, 90px) clamp(20px, 4vw, 50px);
					position: relative;
					border-bottom: 1px solid rgba(255, 255, 255, 0.08);
					box-sizing: border-box;
					overflow: hidden;
				}
				.fbt-story-wrapper::before {
					content: '';
					position: absolute;
					top: 20%;
					left: -10%;
					width: 450px;
					height: 450px;
					background: radial-gradient(circle, rgba(55, 192, 128, 0.08) 0%, transparent 70%);
					pointer-events: none;
					filter: blur(50px);
				}
				.fbt-story-container {
					max-width: 1320px;
					margin: 0 auto;
					display: grid;
					grid-template-columns: 0.95fr 1.05fr;
					gap: clamp(30px, 5vw, 65px);
					align-items: center;
					position: relative;
					z-index: 2;
				}
				@media (max-width: 991px) {
					.fbt-story-container {
						grid-template-columns: 1fr;
						gap: 40px;
					}
				}
				
				/* Left Column: Image Card */
				.fbt-story-media {
					position: relative;
				}
				.fbt-story-img-card {
					border-radius: 0 !important;
					overflow: hidden;
					background: #081112;
					border: 1px solid rgba(255, 255, 255, 0.12);
					box-shadow: 0 25px 60px rgba(0, 0, 0, 0.85), 0 0 40px rgba(55, 192, 128, 0.12);
					transition: transform 0.4s ease, border-color 0.4s ease, box-shadow 0.4s ease;
					max-width: 480px;
					margin: 0 auto;
				}
				.fbt-story-img-card:hover {
					transform: translateY(-4px);
					border-color: rgba(55, 192, 128, 0.45);
					box-shadow: 0 30px 70px rgba(0, 0, 0, 0.9), 0 0 50px rgba(55, 192, 128, 0.2);
				}
				.fbt-story-img-wrapper {
					width: 100%;
					background: #040809;
					display: flex;
					justify-content: center;
					align-items: center;
					overflow: hidden;
				}
				.fbt-story-img-wrapper img {
					width: 100%;
					height: auto;
					max-height: 600px;
					display: block;
					object-fit: contain;
					transition: transform 0.6s ease;
				}
				.fbt-story-img-card:hover .fbt-story-img-wrapper img {
					transform: scale(1.02);
				}
				.fbt-story-img-badge {
					background: rgba(10, 20, 20, 0.95);
					border-top: 1px solid rgba(255, 255, 255, 0.1);
					padding: 14px 18px;
					display: flex;
					align-items: center;
					justify-content: space-between;
					gap: 12px;
				}
				.fbt-story-img-badge-text {
					font-family: 'Barlow', Inter, sans-serif;
				}
				.fbt-story-img-badge-name {
					font-size: 14px;
					font-weight: 700;
					color: #f4f2ea;
					letter-spacing: 0.05em;
				}
				.fbt-story-img-badge-role {
					font-size: 11px;
					color: #37c080;
					text-transform: uppercase;
					letter-spacing: 2px;
					font-weight: 600;
					margin-top: 2px;
				}
				.fbt-story-pill-tag {
					background: rgba(55, 192, 128, 0.15);
					color: #37c080;
					border: 1px solid rgba(55, 192, 128, 0.35);
					padding: 5px 12px;
					border-radius: 0 !important;
					font-size: 10px;
					font-weight: 700;
					letter-spacing: 1.5px;
					text-transform: uppercase;
					white-space: nowrap;
				}

				/* Right Column: Story Content */
				.fbt-story-content {
					display: flex;
					flex-direction: column;
				}
				.fbt-story-tagline {
					display: inline-flex;
					align-items: center;
					gap: 8px;
					font-family: 'Barlow', Inter, sans-serif;
					font-size: 12px;
					font-weight: 700;
					text-transform: uppercase;
					letter-spacing: 3px;
					color: #37c080;
					margin-bottom: 12px;
				}
				.fbt-story-tagline::before {
					content: '';
					display: inline-block;
					width: 20px;
					height: 2px;
					background: #37c080;
				}
				.fbt-story-title {
					font-family: 'Bebas Neue', Impact, sans-serif;
					font-size: clamp(2.2rem, 4vw, 3.4rem);
					line-height: 1.05;
					color: #f4f2ea;
					text-transform: uppercase;
					letter-spacing: 0.02em;
					margin: 0 0 20px 0;
					font-weight: 400;
				}
				.fbt-story-title span.accent {
					color: #37c080;
				}
				
				.fbt-story-paragraphs {
					display: flex;
					flex-direction: column;
					gap: 14px;
					margin-bottom: 24px;
				}
				.fbt-story-p {
					font-family: 'Barlow', Inter, sans-serif;
					font-size: clamp(14px, 1.05vw, 15px);
					line-height: 1.7;
					color: #b5b0a3;
					margin: 0;
				}
				.fbt-story-p strong {
					color: #f4f2ea;
					font-weight: 600;
				}
				.fbt-story-p.lead {
					font-size: clamp(15px, 1.15vw, 16.5px);
					color: #e5e0d4;
					line-height: 1.65;
					border-left: 3px solid #37c080;
					padding-left: 16px;
				}

				/* 3 Milestone Feature Cards */
				.fbt-story-highlights {
					display: grid;
					grid-template-columns: repeat(3, 1fr);
					gap: 12px;
					margin-bottom: 24px;
				}
				@media (max-width: 640px) {
					.fbt-story-highlights {
						grid-template-columns: 1fr;
						gap: 10px;
					}
				}
				.fbt-highlight-card {
					background: rgba(255, 255, 255, 0.03);
					border: 1px solid rgba(255, 255, 255, 0.08);
					border-radius: 0 !important;
					padding: 14px 12px;
					transition: all 0.3s ease;
				}
				.fbt-highlight-card:hover {
					background: rgba(55, 192, 128, 0.05);
					border-color: rgba(55, 192, 128, 0.3);
					transform: translateY(-2px);
				}
				.fbt-highlight-icon {
					font-size: 18px;
					color: #37c080;
					margin-bottom: 8px;
					display: flex;
					align-items: center;
				}
				.fbt-highlight-title {
					font-family: 'Barlow', Inter, sans-serif;
					font-size: 12.5px;
					font-weight: 700;
					color: #f4f2ea;
					text-transform: uppercase;
					letter-spacing: 0.06em;
					margin-bottom: 4px;
				}
				.fbt-highlight-desc {
					font-family: 'Barlow', Inter, sans-serif;
					font-size: 11.5px;
					color: #949084;
					line-height: 1.45;
					margin: 0;
				}

				/* Founder Ethos Quote Strip */
				.fbt-story-ethos {
					display: flex;
					align-items: center;
					gap: 14px;
					padding: 14px 18px;
					border-radius: 0 !important;
					background: rgba(55, 192, 128, 0.07);
					border-left: 3px solid #37c080;
					border-top: 1px solid rgba(55, 192, 128, 0.15);
					border-right: 1px solid rgba(55, 192, 128, 0.15);
					border-bottom: 1px solid rgba(55, 192, 128, 0.15);
				}
				.fbt-story-ethos-text {
					font-family: 'Barlow', Inter, sans-serif;
					font-size: 13px;
					font-style: italic;
					color: #ded9cd;
					line-height: 1.5;
					margin: 0;
				}
			</style>

			<div class="fbt-story-container">
				<!-- LEFT: Visual Photo Frame -->
				<div class="fbt-story-media">
					<div class="fbt-story-img-card">
						<div class="fbt-story-img-wrapper">
							<img src="<?php echo $base_url; ?>/assets/images/2026/07/DSC_3800-scaled-1-650x1300.jpg" alt="Dr. Shruti Kapoor Transformation Journey — FitBliss" loading="lazy" />
						</div>
						<div class="fbt-story-img-badge">
							<div class="fbt-story-img-badge-text">
								<div class="fbt-story-img-badge-name">Dr. Shruti Kapoor</div>
								<div class="fbt-story-img-badge-role">Radiologist &amp; Wellness Founder</div>
							</div>
							<span class="fbt-story-pill-tag">Powerlifter</span>
						</div>
					</div>
				</div>

				<!-- RIGHT: Editorial Story Content -->
				<div class="fbt-story-content">
					<div class="fbt-story-tagline">The Story &amp; Vision</div>
					<h2 class="fbt-story-title">
						From Obesity to Powerlifter —<br/>
						<span class="accent">Her Transformation</span>
					</h2>

					<div class="fbt-story-paragraphs">
						<p class="fbt-story-p lead">
							Every transformation begins with a challenge. Years ago, <strong>Dr. Shruti Kapoor</strong> turned her personal struggles with obesity and hurtful judgment into fuel for an unstoppable journey of self-reinvention.
						</p>
						<p class="fbt-story-p">
							Rebuilding her physical and emotional vitality step by step through Pilates and structured strength training, her personal evolution quickly grew into a lifelong mission. She became a certified <strong>Pilates specialist trained under master educator Yasmin Karachiwala</strong>, embraced the discipline of competitive powerlifting, and studied leading global wellness destinations to master world-class fitness, recovery, and holistic health practices.
						</p>
						<p class="fbt-story-p">
							Recognizing that Bhopal lacked a true, all-in-one luxury health sanctuary, she channeled her deep medical expertise and passion into founding <strong>FitBliss by Dr. Shruti Kapoor</strong> — where elite fitness, advanced recovery, and nutrition seamlessly converge under one roof.
						</p>
					</div>

					<!-- Milestone Highlights -->
					<div class="fbt-story-highlights">
						<div class="fbt-highlight-card">
							<div class="fbt-highlight-icon">
								<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#37c080" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"></path><path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"></path><path d="M4 22h16"></path><path d="M10 14.66V17c0 .55-.45 1-1 1H8c-.55 0-1 .45-1 1v1c0 .55.45 1 1 1h8c.55 0 1-.45 1-1v-1c0-.55-.45-1-1-1h-1c-.55 0-1-.45-1-1v-2.34"></path><path d="M18 4H6v7a6 6 0 0 0 12 0V4Z"></path></svg>
							</div>
							<div class="fbt-highlight-title">Strength &amp; Grit</div>
							<p class="fbt-highlight-desc">Turned personal adversity into powerlifting strength and resilience.</p>
						</div>

						<div class="fbt-highlight-card">
							<div class="fbt-highlight-icon">
								<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#37c080" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="m9 12 2 2 4-4"></path></svg>
							</div>
							<div class="fbt-highlight-title">Yasmin Trained</div>
							<p class="fbt-highlight-desc">Mastered biomechanics &amp; Pilates directly under Yasmin Karachiwala.</p>
						</div>

						<div class="fbt-highlight-card">
							<div class="fbt-highlight-icon">
								<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#37c080" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18"></path><path d="M5 21V7l8-4v18"></path><path d="M19 21V11l-6-4"></path><path d="M9 9h1"></path><path d="M9 13h1"></path><path d="M9 17h1"></path></svg>
							</div>
							<div class="fbt-highlight-title">FitBliss Sanctuary</div>
							<p class="fbt-highlight-desc">Central India’s premier luxury wellness destination for total health.</p>
						</div>
					</div>

					<!-- Founder Ethos Quote Strip -->
					<div class="fbt-story-ethos">
						<p class="fbt-story-ethos-text">
							&ldquo;FitBliss goes beyond being a standard gym — it is a supportive community built to inspire thousands to discover their true strength and build lifelong confidence.&rdquo;
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="elementor-element elementor-element-250673d2 e-con-full e-flex e-con e-child" data-id="250673d2" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-element elementor-element-361a1e1e elementor-widget elementor-widget-html" data-id="361a1e1e" data-element_type="widget" data-e-type="widget" data-widget_type="html.default">
				<div class="elementor-widget-container">
					<style>
    /* ─── Transformation Section Styles ─── */
    .fbt-transform-section {
        padding: clamp(40px, 8vw, 80px) clamp(16px, 4vw, 40px);
        border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        box-sizing: border-box;
        background: #010303;
    }

    .fbt-transform-container {
        max-width: 1320px;
        margin: 0 auto;
    }

    .fbt-transform-heading {
        margin-bottom: clamp(24px, 5vw, 52px);
    }

    /* ─── Main Grid: images left, text right ─── */
    .fbt-transform-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: clamp(24px, 5vw, 60px);
        align-items: center;
    }

    /* ─── Images Sub-Grid ─── */
    .fbt-images-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: clamp(10px, 2vw, 14px);
    }

    .fbt-badge {
        position: absolute;
        bottom: 14px;
        left: 50%;
        transform: translateX(-50%);
        padding: clamp(4px, 1vw, 6px) clamp(10px, 2vw, 16px);
        font-family: 'Barlow', Inter, sans-serif;
        font-size: clamp(9px, 2.5vw, 11px);
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 2px;
        white-space: nowrap;
    }

    .fbt-badge-before {
        background: rgba(1, 3, 3, 0.85);
        color: rgba(244, 242, 234, 0.75);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .fbt-badge-after {
        background: #37c080;
        color: #050a0b;
    }

    /* ─── Stats 2x2 Grid ─── */
    .fbt-stats-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 0 !important;
        overflow: hidden;
        background: rgba(255, 255, 255, 0.08);
    }

    .fbt-stat-item {
        background: #0d1717;
        padding: clamp(12px, 2.5vw, 18px) clamp(12px, 2vw, 16px);
    }

    /* ─── Responsive Media Queries ─── */
    @media (max-width: 899px) {
        .fbt-transform-grid {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 479px) {
        .fbt-stats-grid {
            grid-template-columns: 1fr 1fr;
        }
        .fbt-stat-item {
            padding: 12px 10px;
        }
    }
</style>

<div class="fbt-transform-section">
    <div class="fbt-transform-container">

        <!-- Section heading -->
        <div class="fbt-transform-heading">
            <span style="font-family:'Barlow', Inter, sans-serif;font-size:12px;font-weight:600;text-transform:uppercase;letter-spacing:3px;color:#37c080;">— The Transformation</span>
            <h2 style="margin:14px 0 0;font-family:'Bebas Neue', Impact, sans-serif;font-size:clamp(2.4rem,4.5vw,4rem);line-height:0.93;color:#f4f2ea;font-weight:400;text-transform:uppercase;">
                Her journey. <span style="color:#37c080;">Visible proof.</span>
            </h2>
        </div>

        <!-- Main grid: images left, text right -->
        <div class="fbt-transform-grid">

            <!-- Two images side by side -->
            <div>
                <div class="fbt-images-grid">
                    <!-- BEFORE -->
                    <div style="position:relative;">
                        <img decoding="async" src="<?php echo $base_url; ?>/assets/images/2026/07/WhatsApp-Image-2026-07-25-at-2.27.31-PM.jpeg"
                            alt="Dr. Shruti Kapoor — Before" style="width:100%;aspect-ratio:3/4;object-fit:cover;object-position:top center;display:block;border:1px solid rgba(255,255,255,0.14);" />
                        <span class="fbt-badge fbt-badge-before">Before</span>
                    </div>
                    <!-- AFTER -->
                    <div style="position:relative;">
                        <img decoding="async" src="<?php echo $base_url; ?>/assets/images/2026/07/DSC06217-scaled.jpg"
                            alt="Dr. Shruti Kapoor — After" style="width:100%;aspect-ratio:3/4;object-fit:cover;object-position:top center;display:block;border:1px solid #37c080;" />
                        <span class="fbt-badge fbt-badge-after">After</span>
                    </div>
                </div>
                <!-- Caption note -->
                <div style="text-align:center;margin-top:12px;">
                    <p style="margin:0;font-family:'Barlow', Inter, sans-serif;font-size:11px;text-transform:uppercase;letter-spacing:1.5px;color:rgba(55,192,128,0.7);font-weight:600;">
                        Founder Shruti Kapoor with YKBI Founder Yasmin Karachiwala
                    </p>
                </div>
            </div>

            <!-- Text content -->
            <div style="display:flex;flex-direction:column;gap:20px;">
                <h3 style="font-family:'Bebas Neue', Impact, sans-serif;font-size:clamp(1.8rem,3vw,3rem);text-transform:uppercase;line-height:0.95;color:#f4f2ea;font-weight:400;margin:0;">
                    Not a shortcut. <span style="color:#37c080;">A lifestyle.</span>
                </h3>
                <p style="font-family:'Barlow', Inter, sans-serif;font-size:15px;line-height:1.7;color:rgba(244,242,234,0.88);margin:0;">
                    Dr. Shruti Kapoor's transformation was not the result of a crash diet or extreme measure.
                    It was built over years of consistent training, sustainable nutrition, and genuine love
                    for the process — starting with walking, moving to Pilates, and eventually powerlifting
                    at a national level.
                </p>
                <p style="font-family:'Barlow', Inter, sans-serif;font-size:15px;line-height:1.7;color:#9b998b;margin:0;">
                    She is living proof that with the right support system, the right environment,
                    and the right mindset — every body is capable of remarkable change. At any age.
                    At any starting point.
                </p>
                <!-- Stats -->
                <div class="fbt-stats-grid">
                    <div class="fbt-stat-item">
                        <div style="font-family:'Bebas Neue', Impact, sans-serif;font-size:clamp(20px, 3vw, 26px);color:#37c080;line-height:1;">Pilates</div>
                        <div style="font-family:'Barlow', Inter, sans-serif;font-size:10px;text-transform:uppercase;letter-spacing:1.5px;color:#9b998b;margin-top:4px;">Where it began</div>
                    </div>
                    <div class="fbt-stat-item">
                        <div style="font-family:'Bebas Neue', Impact, sans-serif;font-size:clamp(20px, 3vw, 26px);color:#37c080;line-height:1;">Powerlifter</div>
                        <div style="font-family:'Barlow', Inter, sans-serif;font-size:10px;text-transform:uppercase;letter-spacing:1.5px;color:#9b998b;margin-top:4px;">Where it led</div>
                    </div>
                    <div class="fbt-stat-item">
                        <div style="font-family:'Bebas Neue', Impact, sans-serif;font-size:clamp(20px, 3vw, 26px);color:#37c080;line-height:1;">Years</div>
                        <div style="font-family:'Barlow', Inter, sans-serif;font-size:10px;text-transform:uppercase;letter-spacing:1.5px;color:#9b998b;margin-top:4px;">Of consistency</div>
                    </div>
                    <div class="fbt-stat-item">
                        <div style="font-family:'Bebas Neue', Impact, sans-serif;font-size:clamp(20px, 3vw, 26px);color:#37c080;line-height:1;">FitBliss</div>
                        <div style="font-family:'Barlow', Inter, sans-serif;font-size:10px;text-transform:uppercase;letter-spacing:1.5px;color:#9b998b;margin-top:4px;">Her gift to Bhopal</div>
                    </div>
                </div>
                <!-- Quote -->
                <div style="border-left:3px solid #37c080;padding:16px 20px;background:rgba(55,192,128,0.05);border-radius:0 2px 2px 0;">
                    <p style="font-family:'Barlow', Inter, sans-serif;font-size:15px;line-height:1.7;color:#f4f2ea;font-style:italic;margin:0;">
                        "Nobody is you, and that is your greatest strength. Your only competition
                        is the person you were yesterday."
                    </p>
                    <cite style="font-family:'Barlow', Inter, sans-serif;font-size:11px;text-transform:uppercase;letter-spacing:2px;color:#37c080;margin-top:10px;display:block;font-style:normal;">
                        — Dr. Shruti Kapoor, Founder &amp; Managing Director
                    </cite>
                </div>
            </div>
        </div>
    </div>
</div>				</div>
				</div>
				</div>
		<!-- MOMENTS THAT SHAPED THE VISION GALLERY WITH LIGHTBOX -->
		<div class="fbt-moments-wrapper">
			<style>
				.fbt-moments-wrapper {
					width: 100%;
					background: #020506;
					padding: clamp(40px, 6vw, 70px) clamp(20px, 4vw, 50px);
					border-bottom: 1px solid rgba(255, 255, 255, 0.08);
					box-sizing: border-box;
				}
				.fbt-moments-container {
					max-width: 1320px;
					margin: 0 auto;
				}
				.fbt-moments-header {
					margin-bottom: clamp(24px, 4vw, 36px);
				}
				.fbt-moments-tagline {
					font-family: 'Barlow', Inter, sans-serif;
					font-size: 12px;
					font-weight: 700;
					text-transform: uppercase;
					letter-spacing: 3px;
					color: #37c080;
					display: inline-block;
					margin-bottom: 8px;
				}
				.fbt-moments-title {
					font-family: 'Bebas Neue', Impact, sans-serif;
					font-size: clamp(2.2rem, 4vw, 3.4rem);
					line-height: 1.05;
					color: #f4f2ea;
					text-transform: uppercase;
					letter-spacing: 0.02em;
					margin: 0;
					font-weight: 400;
				}
				.fbt-moments-title span.accent {
					color: #37c080;
				}
				.fbt-moments-grid {
					display: grid;
					grid-template-columns: repeat(5, 1fr);
					gap: 14px;
				}
				@media (max-width: 1024px) {
					.fbt-moments-grid {
						grid-template-columns: repeat(3, 1fr);
						gap: 12px;
					}
				}
				@media (max-width: 640px) {
					.fbt-moments-grid {
						grid-template-columns: repeat(2, 1fr);
						gap: 10px;
					}
				}
				.fbt-moment-item {
					position: relative;
					border-radius: 0 !important;
					overflow: hidden;
					background: #091213;
					border: 1px solid rgba(255, 255, 255, 0.1);
					aspect-ratio: 4 / 3;
					display: block;
					cursor: pointer;
					box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
					transition: transform 0.4s ease, border-color 0.4s ease, box-shadow 0.4s ease;
				}
				.fbt-moment-item:hover {
					transform: translateY(-4px);
					border-color: rgba(55, 192, 128, 0.5);
					box-shadow: 0 16px 36px rgba(0, 0, 0, 0.8), 0 0 20px rgba(55, 192, 128, 0.25);
				}
				.fbt-moment-item img {
					width: 100%;
					height: 100%;
					object-fit: cover;
					display: block;
					transition: transform 0.6s ease;
				}
				.fbt-moment-item:hover img {
					transform: scale(1.08);
				}
				.fbt-moment-overlay {
					position: absolute;
					inset: 0;
					background: linear-gradient(180deg, rgba(5,10,11,0.2) 0%, rgba(5,10,11,0.75) 100%);
					opacity: 0;
					display: flex;
					align-items: center;
					justify-content: center;
					transition: opacity 0.3s ease;
				}
				.fbt-moment-item:hover .fbt-moment-overlay {
					opacity: 1;
				}
				.fbt-moment-zoom-icon {
					width: 38px;
					height: 38px;
					border-radius: 50%;
					background: #37c080;
					color: #050a0b;
					display: flex;
					align-items: center;
					justify-content: center;
					transform: scale(0.85);
					transition: transform 0.25s ease;
					box-shadow: 0 4px 15px rgba(0,0,0,0.5);
				}
				.fbt-moment-item:hover .fbt-moment-zoom-icon {
					transform: scale(1);
				}

				/* ================= MOMENTS LIGHTBOX MODAL ================= */
				.fbt-lightbox-modal {
					position: fixed;
					inset: 0;
					background: rgba(5, 10, 11, 0.96);
					backdrop-filter: blur(20px);
					-webkit-backdrop-filter: blur(20px);
					z-index: 999999;
					display: none;
					align-items: center;
					justify-content: center;
					padding: 30px;
					opacity: 0;
					transition: opacity 0.3s ease;
				}
				.fbt-lightbox-modal.active {
					display: flex;
					opacity: 1;
				}
				.fbt-lightbox-content {
					position: relative;
					max-width: 90vw;
					max-height: 85vh;
					display: flex;
					flex-direction: column;
					align-items: center;
				}
				.fbt-lightbox-img {
					max-width: 100%;
					max-height: 80vh;
					object-fit: contain;
					border-radius: 0 !important;
					box-shadow: 0 25px 60px rgba(0, 0, 0, 0.9);
					border: 1px solid rgba(255, 255, 255, 0.12);
				}
				.fbt-lightbox-caption {
					margin-top: 14px;
					color: #f2ece0;
					font-size: 14px;
					letter-spacing: 0.15em;
					text-transform: uppercase;
					font-weight: 600;
					text-align: center;
				}
				.fbt-lightbox-close {
					position: absolute !important;
					top: 24px !important;
					right: 28px !important;
					background: rgba(13, 23, 23, 0.92) !important;
					border: 1.5px solid rgba(255, 255, 255, 0.35) !important;
					color: #ffffff !important;
					width: 52px !important;
					height: 52px !important;
					border-radius: 50% !important;
					display: flex !important;
					align-items: center !important;
					justify-content: center !important;
					cursor: pointer !important;
					transition: all 0.25s ease !important;
					z-index: 1000001 !important;
					padding: 0 !important;
					outline: none !important;
					box-shadow: 0 6px 20px rgba(0, 0, 0, 0.6) !important;
				}
				.fbt-lightbox-close:hover {
					background: #e53e3e !important;
					color: #ffffff !important;
					border-color: #e53e3e !important;
					transform: scale(1.1) !important;
					box-shadow: 0 0 22px rgba(229, 62, 62, 0.7) !important;
				}
				.fbt-lightbox-nav {
					position: absolute !important;
					top: 50% !important;
					transform: translateY(-50%) !important;
					background: rgba(13, 23, 23, 0.92) !important;
					border: 1.5px solid rgba(255, 255, 255, 0.35) !important;
					color: #ffffff !important;
					width: 58px !important;
					height: 58px !important;
					border-radius: 50% !important;
					display: flex !important;
					align-items: center !important;
					justify-content: center !important;
					cursor: pointer !important;
					transition: all 0.25s ease !important;
					user-select: none !important;
					z-index: 1000000 !important;
					padding: 0 !important;
					outline: none !important;
					box-shadow: 0 8px 24px rgba(0, 0, 0, 0.6) !important;
				}
				.fbt-lightbox-nav:hover {
					background: #37c080 !important;
					color: #050a0b !important;
					border-color: #37c080 !important;
					transform: translateY(-50%) scale(1.12) !important;
					box-shadow: 0 0 28px rgba(55, 192, 128, 0.65) !important;
				}
				.fbt-lightbox-nav:hover .fbt-btn-icon {
					color: #050a0b !important;
				}
				.fbt-lightbox-prev { left: 24px !important; }
				.fbt-lightbox-next { right: 24px !important; }

				.fbt-btn-icon {
					display: flex !important;
					align-items: center !important;
					justify-content: center !important;
					font-family: Arial, "Helvetica Neue", sans-serif !important;
					font-size: 26px !important;
					font-weight: 900 !important;
					line-height: 1 !important;
					color: #ffffff !important;
					pointer-events: none !important;
					text-shadow: 0 2px 4px rgba(0,0,0,0.5) !important;
					margin: 0 !important;
					padding: 0 !important;
				}
				.fbt-icon-prev {
					padding-right: 3px !important;
				}
				.fbt-icon-next {
					padding-left: 3px !important;
				}
				.fbt-icon-close {
					font-size: 22px !important;
				}

				.fbt-lightbox-counter {
					position: absolute;
					bottom: 24px;
					left: 50%;
					transform: translateX(-50%);
					font-size: 13px;
					letter-spacing: 0.25em;
					color: #a7a294;
					text-transform: uppercase;
					font-weight: 600;
					background: rgba(13, 23, 23, 0.85);
					padding: 6px 18px;
					border-radius: 0 !important;
					border: 1px solid rgba(255, 255, 255, 0.15);
				}
				@media (max-width: 768px) {
					.fbt-lightbox-nav {
						width: 46px !important;
						height: 46px !important;
					}
					.fbt-lightbox-prev { left: 12px !important; }
					.fbt-lightbox-next { right: 12px !important; }
					.fbt-lightbox-close {
						top: 14px !important;
						right: 14px !important;
						width: 44px !important;
						height: 44px !important;
					}
					.fbt-btn-icon {
						font-size: 22px !important;
					}
					.fbt-icon-close {
						font-size: 18px !important;
					}
				}
			</style>

			<div class="fbt-moments-container">
				<div class="fbt-moments-header">
					<span class="fbt-moments-tagline">— THE FOUNDER&rsquo;S JOURNEY</span>
					<h2 class="fbt-moments-title">MOMENTS THAT, <span class="accent">SHAPED THE VISION.</span></h2>
				</div>
				<div class="fbt-moments-grid" id="fbtMomentsGrid">
					<div class="fbt-moment-item" data-src="<?php echo $base_url; ?>/assets/images/2026/07/DSC06216_11zon-1.webp" data-title="Founder Journey — Yasmin Karachiwala Studio">
						<img src="<?php echo $base_url; ?>/assets/images/2026/07/DSC06216_11zon-1.webp" alt="Founder Journey Moment - FitBliss" loading="lazy" />
						<div class="fbt-moment-overlay">
							<div class="fbt-moment-zoom-icon">
								<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
							</div>
						</div>
					</div>
					<div class="fbt-moment-item" data-src="<?php echo $base_url; ?>/assets/images/2026/07/DSC04258_11zon-1.jpg" data-title="Founder Journey — Pilates Reformer Training">
						<img src="<?php echo $base_url; ?>/assets/images/2026/07/DSC04258_11zon-1.jpg" alt="Founder Journey Moment - FitBliss" loading="lazy" />
						<div class="fbt-moment-overlay">
							<div class="fbt-moment-zoom-icon">
								<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
							</div>
						</div>
					</div>
					<div class="fbt-moment-item" data-src="<?php echo $base_url; ?>/assets/images/2026/07/DSC04177_11zon-1.jpg" data-title="Founder Journey — Master Educator Yasmin Karachiwala &amp; Dr. Shruti Kapoor">
						<img src="<?php echo $base_url; ?>/assets/images/2026/07/DSC04177_11zon-1.jpg" alt="Founder Journey Moment - FitBliss" loading="lazy" />
						<div class="fbt-moment-overlay">
							<div class="fbt-moment-zoom-icon">
								<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
							</div>
						</div>
					</div>
					<div class="fbt-moment-item" data-src="<?php echo $base_url; ?>/assets/images/2026/07/DSC06304-scaled-1.jpg" data-title="Founder Journey — Group Movement &amp; Training Camp">
						<img src="<?php echo $base_url; ?>/assets/images/2026/07/DSC06304-scaled-1.jpg" alt="Founder Journey Moment - FitBliss" loading="lazy" />
						<div class="fbt-moment-overlay">
							<div class="fbt-moment-zoom-icon">
								<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
							</div>
						</div>
					</div>
					<div class="fbt-moment-item" data-src="<?php echo $base_url; ?>/assets/images/2026/07/DSC04158_11zon-1.jpg" data-title="Founder Journey — Advanced Pilates Mat Session">
						<img src="<?php echo $base_url; ?>/assets/images/2026/07/DSC04158_11zon-1.jpg" alt="Founder Journey Moment - FitBliss" loading="lazy" />
						<div class="fbt-moment-overlay">
							<div class="fbt-moment-zoom-icon">
								<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
							</div>
						</div>
					</div>
					<div class="fbt-moment-item" data-src="<?php echo $base_url; ?>/assets/images/2026/07/DSC04151_11zon-1.jpg" data-title="Founder Journey — Cadillac Pilates Movement">
						<img src="<?php echo $base_url; ?>/assets/images/2026/07/DSC04151_11zon-1.jpg" alt="Founder Journey Moment - FitBliss" loading="lazy" />
						<div class="fbt-moment-overlay">
							<div class="fbt-moment-zoom-icon">
								<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
							</div>
						</div>
					</div>
					<div class="fbt-moment-item" data-src="<?php echo $base_url; ?>/assets/images/2026/07/C2721.MP4.11_10_41_22.Still001-Copy-1.jpg" data-title="Founder Journey — Celebration &amp; Transformation Milestone">
						<img src="<?php echo $base_url; ?>/assets/images/2026/07/C2721.MP4.11_10_41_22.Still001-Copy-1.jpg" alt="Founder Journey Moment - FitBliss" loading="lazy" />
						<div class="fbt-moment-overlay">
							<div class="fbt-moment-zoom-icon">
								<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
							</div>
						</div>
					</div>
					<div class="fbt-moment-item" data-src="<?php echo $base_url; ?>/assets/images/2026/07/DSC04295-Copy-scaled-1.jpg" data-title="Founder Journey — Core Alignment on Reformer">
						<img src="<?php echo $base_url; ?>/assets/images/2026/07/DSC04295-Copy-scaled-1.jpg" alt="Founder Journey Moment - FitBliss" loading="lazy" />
						<div class="fbt-moment-overlay">
							<div class="fbt-moment-zoom-icon">
								<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
							</div>
						</div>
					</div>
					<div class="fbt-moment-item" data-src="<?php echo $base_url; ?>/assets/images/2026/07/DSC04273-scaled-1.jpg" data-title="Founder Journey — Studio Studio Flow &amp; Posture">
						<img src="<?php echo $base_url; ?>/assets/images/2026/07/DSC04273-scaled-1.jpg" alt="Founder Journey Moment - FitBliss" loading="lazy" />
						<div class="fbt-moment-overlay">
							<div class="fbt-moment-zoom-icon">
								<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
							</div>
						</div>
					</div>
					<div class="fbt-moment-item" data-src="<?php echo $base_url; ?>/assets/images/2026/07/DSC04258-scaled-1.jpg" data-title="Founder Journey — Reformer Movement Practice">
						<img src="<?php echo $base_url; ?>/assets/images/2026/07/DSC04258-scaled-1.jpg" alt="Founder Journey Moment - FitBliss" loading="lazy" />
						<div class="fbt-moment-overlay">
							<div class="fbt-moment-zoom-icon">
								<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Moments Lightbox Modal -->
			<div class="fbt-lightbox-modal" id="fbtMomentsModal" role="dialog" aria-modal="true">
				<button class="fbt-lightbox-close" id="fbtMomentsClose" aria-label="Close Lightbox" title="Close (Esc)">
					<span class="fbt-btn-icon fbt-icon-close">&#10005;</span>
				</button>
				<div class="fbt-lightbox-content">
					<img class="fbt-lightbox-img" id="fbtMomentsImg" src="" alt="FitBliss Moments Preview" />
					<div class="fbt-lightbox-caption" id="fbtMomentsCaption"></div>
				</div>
				<button class="fbt-lightbox-nav fbt-lightbox-prev" id="fbtMomentsPrev" aria-label="Previous Image" title="Previous Image (&larr;)">
					<span class="fbt-btn-icon fbt-icon-prev">&#10094;</span>
				</button>
				<button class="fbt-lightbox-nav fbt-lightbox-next" id="fbtMomentsNext" aria-label="Next Image" title="Next Image (&rarr;)">
					<span class="fbt-btn-icon fbt-icon-next">&#10095;</span>
				</button>
				<div class="fbt-lightbox-counter" id="fbtMomentsCounter"></div>
			</div>

			<script>
				(function() {
					const momentsModal = document.getElementById('fbtMomentsModal');
					const momentsImg = document.getElementById('fbtMomentsImg');
					const momentsCaption = document.getElementById('fbtMomentsCaption');
					const momentsCounter = document.getElementById('fbtMomentsCounter');
					const closeBtn = document.getElementById('fbtMomentsClose');
					const prevBtn = document.getElementById('fbtMomentsPrev');
					const nextBtn = document.getElementById('fbtMomentsNext');
					const items = document.querySelectorAll('.fbt-moment-item');

					let currentIndex = 0;

					function openModal(idx) {
						if (idx < 0) idx = items.length - 1;
						if (idx >= items.length) idx = 0;
						currentIndex = idx;

						const activeItem = items[currentIndex];
						const src = activeItem.getAttribute('data-src');
						const title = activeItem.getAttribute('data-title') || '';

						momentsImg.src = src;
						momentsCaption.textContent = title;
						momentsCounter.textContent = `${currentIndex + 1} / ${items.length}`;

						momentsModal.classList.add('active');
						document.body.style.overflow = 'hidden';
					}

					function closeModal() {
						momentsModal.classList.remove('active');
						momentsImg.src = '';
						document.body.style.overflow = '';
					}

					items.forEach((item, idx) => {
						item.addEventListener('click', (e) => {
							e.preventDefault();
							openModal(idx);
						});
					});

					closeBtn.addEventListener('click', closeModal);

					momentsModal.addEventListener('click', (e) => {
						if (e.target === momentsModal) {
							closeModal();
						}
					});

					prevBtn.addEventListener('click', (e) => {
						e.stopPropagation();
						openModal(currentIndex - 1);
					});

					nextBtn.addEventListener('click', (e) => {
						e.stopPropagation();
						openModal(currentIndex + 1);
					});

					document.addEventListener('keydown', (e) => {
						if (!momentsModal.classList.contains('active')) return;
						if (e.key === 'Escape') closeModal();
						if (e.key === 'ArrowLeft') openModal(currentIndex - 1);
						if (e.key === 'ArrowRight') openModal(currentIndex + 1);
					});
				})();
			</script>
		</div>
		<!-- THE SPACE SHE BUILT - CINEMATIC VIDEO SECTION -->
		<div class="fbt-space-wrapper">
			<style>
				.fbt-space-wrapper {
					width: 100%;
					background: linear-gradient(180deg, #020506 0%, #070f10 50%, #020506 100%);
					padding: clamp(60px, 8vw, 100px) clamp(20px, 4vw, 50px);
					border-bottom: 1px solid rgba(255, 255, 255, 0.08);
					position: relative;
					box-sizing: border-box;
					overflow: hidden;
				}
				.fbt-space-wrapper::before {
					content: '';
					position: absolute;
					top: 30%;
					right: -10%;
					width: 480px;
					height: 480px;
					background: radial-gradient(circle, rgba(55, 192, 128, 0.08) 0%, transparent 70%);
					pointer-events: none;
					filter: blur(60px);
				}
				.fbt-space-container {
					max-width: 1320px;
					margin: 0 auto;
					display: grid;
					grid-template-columns: 1fr 1.35fr;
					gap: clamp(35px, 6vw, 70px);
					align-items: center;
					position: relative;
					z-index: 2;
				}
				@media (max-width: 991px) {
					.fbt-space-container {
						grid-template-columns: 1fr;
						gap: 40px;
					}
				}
				.fbt-space-content {
					display: flex;
					flex-direction: column;
				}
				.fbt-space-tagline {
					font-family: 'Barlow', Inter, sans-serif;
					font-size: 12px;
					font-weight: 700;
					text-transform: uppercase;
					letter-spacing: 3px;
					color: #37c080;
					margin-bottom: 12px;
					display: inline-block;
				}
				.fbt-space-title {
					font-family: 'Bebas Neue', Impact, sans-serif;
					font-size: clamp(2.4rem, 4.5vw, 4rem);
					line-height: 1.0;
					color: #f4f2ea;
					text-transform: uppercase;
					letter-spacing: 0.02em;
					margin: 0 0 24px 0;
					font-weight: 400;
				}
				.fbt-space-title span.accent {
					color: #37c080;
				}
				.fbt-space-desc {
					font-family: 'Barlow', Inter, sans-serif;
					font-size: clamp(15px, 1.1vw, 16.5px);
					line-height: 1.8;
					color: #b5b0a3;
					margin: 0;
				}

				/* Cinematic Video Card */
				.fbt-space-video-card {
					position: relative;
					width: 100%;
					border-radius: 0 !important;
					overflow: hidden;
					background: #040809;
					border: 1px solid rgba(255, 255, 255, 0.15);
					box-shadow: 0 30px 80px rgba(0, 0, 0, 0.85), 0 0 45px rgba(55, 192, 128, 0.15);
					transition: transform 0.4s ease, border-color 0.4s ease, box-shadow 0.4s ease;
				}
				.fbt-space-video-card:hover {
					transform: translateY(-4px);
					border-color: rgba(55, 192, 128, 0.45);
					box-shadow: 0 35px 90px rgba(0, 0, 0, 0.95), 0 0 55px rgba(55, 192, 128, 0.25);
				}
				.fbt-space-video-ratio {
					position: relative;
					width: 100%;
					padding-top: 56.25%; /* 16:9 Aspect Ratio */
					background: #071010;
				}
				.fbt-space-video {
					position: absolute;
					inset: 0;
					width: 100%;
					height: 100%;
					object-fit: cover;
					display: block;
					z-index: 1;
				}
			</style>

			<div class="fbt-space-container">
				<div class="fbt-space-content">
					<div class="fbt-space-tagline">— THE SPACE SHE BUILT</div>
					<h2 class="fbt-space-title">
						EVERY DETAIL,<br/>
						<span class="accent">INTENTIONAL.</span>
					</h2>
					<p class="fbt-space-desc">
						From the serene ambience to the state-of-the-art facilities, each aspect of FitBliss reflects Dr. Kapoor's unwavering commitment to excellence. Pilates, yoga, Zumba, spa treatments, boxing, physiotherapy — every offering was chosen, trained and staffed personally.
					</p>
				</div>
				<div class="fbt-space-media">
					<div class="fbt-space-video-card">
						<div class="fbt-space-video-ratio">
							<video controls poster="<?php echo $base_url; ?>/assets/images/2026/07/truestory.png" preload="metadata" playsinline class="fbt-space-video">
								<source src="<?php echo $base_url; ?>/assets/images/2026/07/Journey-from-120-kgs-to-70-kgs-I-m-still-working-in-my-roar-because-my-best-version-is-yet-to.mp4#t=0.001" type="video/mp4">
							</video>
						</div>
					</div>
				</div>
			</div>
		</div>
				<!-- THE JOURNEY - FROM STRUGGLE TO DESTINATION -->
		<div class="fbt-journey-wrapper">
			<style>
				.fbt-journey-wrapper {
					width: 100%;
					background: #040809;
					padding: clamp(60px, 8vw, 90px) clamp(20px, 4vw, 50px);
					border-bottom: 1px solid rgba(255, 255, 255, 0.08);
					position: relative;
					box-sizing: border-box;
				}
				.fbt-journey-container {
					max-width: 1320px;
					margin: 0 auto;
				}
				.fbt-journey-header {
					margin-bottom: clamp(30px, 5vw, 45px);
				}
				.fbt-journey-tagline {
					font-family: 'Barlow', Inter, sans-serif;
					font-size: 12px;
					font-weight: 700;
					text-transform: uppercase;
					letter-spacing: 3px;
					color: #37c080;
					margin-bottom: 12px;
					display: inline-block;
				}
				.fbt-journey-title {
					font-family: 'Bebas Neue', Impact, sans-serif;
					font-size: clamp(2.2rem, 4vw, 3.4rem);
					line-height: 1.05;
					color: #f4f2ea;
					text-transform: uppercase;
					letter-spacing: 0.02em;
					margin: 0;
					font-weight: 400;
				}
				.fbt-journey-grid {
					display: grid;
					grid-template-columns: repeat(4, 1fr);
					gap: 20px;
				}
				@media (max-width: 1024px) {
					.fbt-journey-grid {
						grid-template-columns: repeat(2, 1fr);
						gap: 16px;
					}
				}
				@media (max-width: 600px) {
					.fbt-journey-grid {
						grid-template-columns: 1fr;
						gap: 14px;
					}
				}
				.fbt-journey-card {
					background: #081112;
					border: 1px solid rgba(255, 255, 255, 0.1);
					border-top: 2px solid rgba(55, 192, 128, 0.4);
					border-radius: 0 !important;
					padding: clamp(24px, 3vw, 32px) clamp(20px, 2.5vw, 26px);
					display: flex;
					flex-direction: column;
					transition: transform 0.35s ease, border-color 0.35s ease, box-shadow 0.35s ease;
					box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
				}
				.fbt-journey-card:hover {
					transform: translateY(-4px);
					border-color: rgba(55, 192, 128, 0.6);
					border-top-color: #37c080;
					box-shadow: 0 16px 40px rgba(0, 0, 0, 0.8), 0 0 25px rgba(55, 192, 128, 0.15);
				}
				.fbt-journey-number {
					font-family: 'Bebas Neue', Impact, sans-serif;
					font-size: clamp(2.4rem, 3.5vw, 3rem);
					line-height: 1;
					color: #37c080;
					margin-bottom: 16px;
					letter-spacing: 1px;
				}
				.fbt-journey-divider {
					width: 100%;
					height: 1px;
					background: rgba(255, 255, 255, 0.08);
					margin-bottom: 20px;
				}
				.fbt-journey-card-title {
					font-family: 'Bebas Neue', Impact, sans-serif;
					font-size: clamp(1.4rem, 2vw, 1.7rem);
					line-height: 1.1;
					color: #f4f2ea;
					text-transform: uppercase;
					letter-spacing: 0.04em;
					margin: 0 0 14px 0;
					font-weight: 400;
				}
				.fbt-journey-card-desc {
					font-family: 'Barlow', Inter, sans-serif;
					font-size: 14px;
					line-height: 1.7;
					color: #9b998b;
					margin: 0;
				}
			</style>

			<div class="fbt-journey-container">
				<div class="fbt-journey-header">
					<div class="fbt-journey-tagline">— THE JOURNEY</div>
					<h2 class="fbt-journey-title">FROM STRUGGLE TO <span style="color:#37c080;">DESTINATION.</span></h2>
				</div>
				<div class="fbt-journey-grid">
					<!-- Step 01 -->
					<div class="fbt-journey-card">
						<div class="fbt-journey-number">01</div>
						<div class="fbt-journey-divider"></div>
						<h3 class="fbt-journey-card-title">The Struggle</h3>
						<p class="fbt-journey-card-desc">Faced obesity and the emotional weight of body shaming. Chose transformation over defeat — starting with walking, Pilates and small sustainable changes.</p>
					</div>
					<!-- Step 02 -->
					<div class="fbt-journey-card">
						<div class="fbt-journey-number">02</div>
						<div class="fbt-journey-divider"></div>
						<h3 class="fbt-journey-card-title">Mumbai Training</h3>
						<p class="fbt-journey-card-desc">Trained under Yasmin Karachiwala, one of India&#8217;s most renowned Pilates educators. The experience reshaped her understanding of movement, posture and long-term health.</p>
					</div>
					<!-- Step 03 -->
					<div class="fbt-journey-card">
						<div class="fbt-journey-number">03</div>
						<div class="fbt-journey-divider"></div>
						<h3 class="fbt-journey-card-title">FitBliss is Born</h3>
						<p class="fbt-journey-card-desc">Saw that Bhopal lacked a premium, multi-discipline wellness space. Built FitBliss from the ground up — equipping it with Life Fitness, Hammer Strength and world-class infrastructure.</p>
					</div>
					<!-- Step 04 -->
					<div class="fbt-journey-card">
						<div class="fbt-journey-number">04</div>
						<div class="fbt-journey-divider"></div>
						<h3 class="fbt-journey-card-title">A Community Thrives</h3>
						<p class="fbt-journey-card-desc">Today, FitBliss has one of the largest collections of world-class strength and cardio equipment in Madhya Pradesh — serving hundreds of members across every fitness level.</p>
					</div>
				</div>
			</div>
		</div>
				<!-- A COMPREHENSIVE WELLNESS ECOSYSTEM SECTION -->
		<div class="fbt-ecosystem-wrapper">
			<style>
				.fbt-ecosystem-wrapper {
					width: 100%;
					background: linear-gradient(180deg, #020506 0%, #070e0e 50%, #020506 100%);
					padding: clamp(60px, 8vw, 100px) clamp(20px, 4vw, 50px);
					border-bottom: 1px solid rgba(255, 255, 255, 0.08);
					position: relative;
					box-sizing: border-box;
					overflow: hidden;
				}
				.fbt-ecosystem-wrapper::before {
					content: '';
					position: absolute;
					top: 20%;
					left: -10%;
					width: 480px;
					height: 480px;
					background: radial-gradient(circle, rgba(55, 192, 128, 0.08) 0%, transparent 70%);
					pointer-events: none;
					filter: blur(60px);
				}
				.fbt-ecosystem-container {
					max-width: 1320px;
					margin: 0 auto;
					display: grid;
					grid-template-columns: 1.1fr 0.9fr;
					gap: clamp(35px, 6vw, 70px);
					align-items: center;
					position: relative;
					z-index: 2;
				}
				@media (max-width: 991px) {
					.fbt-ecosystem-container {
						grid-template-columns: 1fr;
						gap: 40px;
					}
				}
				.fbt-ecosystem-content {
					display: flex;
					flex-direction: column;
				}
				.fbt-ecosystem-tagline {
					font-family: 'Barlow', Inter, sans-serif;
					font-size: 12px;
					font-weight: 700;
					text-transform: uppercase;
					letter-spacing: 3px;
					color: #37c080;
					margin-bottom: 12px;
					display: inline-block;
				}
				.fbt-ecosystem-title {
					font-family: 'Bebas Neue', Impact, sans-serif;
					font-size: clamp(2.2rem, 3.8vw, 3.4rem);
					line-height: 1.05;
					color: #f4f2ea;
					text-transform: uppercase;
					letter-spacing: 0.02em;
					margin: 0 0 20px 0;
					font-weight: 400;
				}
				.fbt-ecosystem-desc {
					font-family: 'Barlow', Inter, sans-serif;
					font-size: clamp(14.5px, 1.1vw, 15.5px);
					line-height: 1.75;
					color: #b5b0a3;
					margin: 0 0 28px 0;
				}
				.fbt-offerings-grid {
					display: grid;
					grid-template-columns: 1fr 1fr;
					gap: 10px 18px;
				}
				@media (max-width: 600px) {
					.fbt-offerings-grid {
						grid-template-columns: 1fr;
						gap: 10px;
					}
				}
				.fbt-offering-item {
					display: flex;
					align-items: center;
					gap: 12px;
					padding: 10px 14px;
					background: rgba(255, 255, 255, 0.025);
					border: 1px solid rgba(255, 255, 255, 0.07);
					border-left: 2px solid #37c080;
					border-radius: 0 !important;
					transition: all 0.3s ease;
				}
				.fbt-offering-item:hover {
					background: rgba(55, 192, 128, 0.06);
					border-color: rgba(55, 192, 128, 0.35);
					border-left-color: #37c080;
					transform: translateX(4px);
				}
				.fbt-offering-bullet {
					width: 6px;
					height: 6px;
					background: #37c080;
					flex-shrink: 0;
					border-radius: 0 !important;
				}
				.fbt-offering-text {
					font-family: 'Barlow', Inter, sans-serif;
					font-size: 13.5px;
					font-weight: 600;
					color: #f4f2ea;
					letter-spacing: 0.02em;
					line-height: 1.35;
				}

				/* Right Column: Visual Photo Stack */
				.fbt-ecosystem-visuals {
					display: flex;
					flex-direction: column;
					gap: 18px;
				}
				.fbt-ecosystem-img-card {
					position: relative;
					border-radius: 0 !important;
					overflow: hidden;
					background: #081112;
					border: 1px solid rgba(255, 255, 255, 0.12);
					box-shadow: 0 20px 50px rgba(0, 0, 0, 0.7), 0 0 30px rgba(55, 192, 128, 0.08);
					transition: transform 0.4s ease, border-color 0.4s ease, box-shadow 0.4s ease;
				}
				.fbt-ecosystem-img-card:hover {
					transform: translateY(-4px);
					border-color: rgba(55, 192, 128, 0.45);
					box-shadow: 0 25px 60px rgba(0, 0, 0, 0.85), 0 0 40px rgba(55, 192, 128, 0.18);
				}
				.fbt-ecosystem-img-card img {
					width: 100%;
					height: auto;
					max-height: 270px;
					object-fit: cover;
					display: block;
					transition: transform 0.6s ease;
					border-radius: 0 !important;
				}
				.fbt-ecosystem-img-card:hover img {
					transform: scale(1.03);
				}
			</style>

			<div class="fbt-ecosystem-container">
				<!-- Left Column: Content & Offerings -->
				<div class="fbt-ecosystem-content">
					<div class="fbt-ecosystem-tagline">— FitBliss offers</div>
					<h2 class="fbt-ecosystem-title">A COMPREHENSIVE <span style="color:#37c080;">WELLNESS ECOSYSTEM.</span></h2>
					<p class="fbt-ecosystem-desc">
						With one of the largest collections of world-class strength and cardio equipment in Madhya Pradesh, spacious workout zones, and a highly qualified coaching team, FitBliss has been designed to make fitness enjoyable, accessible, and sustainable for everyone.
					</p>

					<div class="fbt-offerings-grid">
						<div class="fbt-offering-item">
							<span class="fbt-offering-bullet"></span>
							<span class="fbt-offering-text">Pilates — Reformer &amp; MAT</span>
						</div>
						<div class="fbt-offering-item">
							<span class="fbt-offering-bullet"></span>
							<span class="fbt-offering-text">Strength &amp; Functional Training</span>
						</div>
						<div class="fbt-offering-item">
							<span class="fbt-offering-bullet"></span>
							<span class="fbt-offering-text">Boxing, MMA &amp; Kickboxing</span>
						</div>
						<div class="fbt-offering-item">
							<span class="fbt-offering-bullet"></span>
							<span class="fbt-offering-text">Yoga &amp; Aerial Yoga</span>
						</div>
						<div class="fbt-offering-item">
							<span class="fbt-offering-bullet"></span>
							<span class="fbt-offering-text">Zumba &amp; Dance Fitness</span>
						</div>
						<div class="fbt-offering-item">
							<span class="fbt-offering-bullet"></span>
							<span class="fbt-offering-text">Indoor Cycling / Spinning</span>
						</div>
						<div class="fbt-offering-item">
							<span class="fbt-offering-bullet"></span>
							<span class="fbt-offering-text">CrossFit</span>
						</div>
						<div class="fbt-offering-item">
							<span class="fbt-offering-bullet"></span>
							<span class="fbt-offering-text">Spa &amp; Recovery</span>
						</div>
						<div class="fbt-offering-item">
							<span class="fbt-offering-bullet"></span>
							<span class="fbt-offering-text">Salon</span>
						</div>
						<div class="fbt-offering-item">
							<span class="fbt-offering-bullet"></span>
							<span class="fbt-offering-text">Nutrition &amp; Lifestyle Coaching</span>
						</div>
						<div class="fbt-offering-item">
							<span class="fbt-offering-bullet"></span>
							<span class="fbt-offering-text">Premium Wellness Experiences</span>
						</div>
					</div>
				</div>

				<!-- Right Column: Dual Photo Showcase -->
				<div class="fbt-ecosystem-visuals">
					<div class="fbt-ecosystem-img-card">
						<img src="<?php echo $base_url; ?>/assets/images/2026/07/DSC_3608-scaled-1-1024x683.jpg" alt="FitBliss Strength and Functional Training" loading="lazy" />
					</div>
					<div class="fbt-ecosystem-img-card">
						<img src="<?php echo $base_url; ?>/assets/images/2026/07/DSC06304-1-scaled-1-1024x683.jpg" alt="FitBliss Community and Group Wellness" loading="lazy" />
					</div>
				</div>
			</div>
		</div>
		<!-- SECTION: HER PHILOSOPHY, IN FOUR WORDS (Interactive Hover Cards) -->
		<div class="fbt-philosophy-section">
			<style>
				.fbt-philosophy-section {
					position: relative;
					background: #020506;
					padding: 90px 24px;
					border-top: 1px solid rgba(255, 255, 255, 0.05);
					overflow: hidden;
				}
				.fbt-philosophy-glow {
					position: absolute;
					top: 20%;
					right: 10%;
					width: 450px;
					height: 450px;
					background: radial-gradient(circle, rgba(55, 192, 128, 0.07) 0%, rgba(0, 0, 0, 0) 70%);
					pointer-events: none;
					z-index: 1;
				}
				.fbt-philosophy-container {
					max-width: 1240px;
					margin: 0 auto;
					position: relative;
					z-index: 2;
					display: grid;
					grid-template-columns: 1fr 1.15fr;
					gap: 60px;
					align-items: start;
				}
				@media (max-width: 991px) {
					.fbt-philosophy-container {
						grid-template-columns: 1fr;
						gap: 40px;
					}
					.fbt-philosophy-section {
						padding: 60px 20px;
					}
				}

				/* Left Info Column */
				.fbt-philosophy-info {
					position: sticky;
					top: 100px;
				}
				.fbt-philosophy-tag {
					font-family: 'Barlow', Inter, sans-serif;
					font-size: 12px;
					font-weight: 700;
					text-transform: uppercase;
					letter-spacing: 3px;
					color: #37c080;
					margin-bottom: 16px;
					display: inline-block;
				}
				.fbt-philosophy-title {
					font-family: 'Bebas Neue', Impact, sans-serif;
					font-size: clamp(2.3rem, 4vw, 3.6rem);
					line-height: 1.05;
					color: #f4f2ea;
					text-transform: uppercase;
					letter-spacing: 0.02em;
					margin: 0 0 20px 0;
					font-weight: 400;
					white-space: normal;
				}
				.fbt-philosophy-desc {
					font-family: 'Barlow', Inter, sans-serif;
					font-size: clamp(15px, 1.15vw, 16.5px);
					line-height: 1.8;
					color: #b5b0a3;
					margin: 0;
					max-width: 520px;
				}

				/* Right Cards Column */
				.fbt-philosophy-cards {
					display: flex;
					flex-direction: column;
					gap: 16px;
				}
				.fbt-phil-card {
					position: relative;
					background: rgba(255, 255, 255, 0.02);
					border: 1px solid rgba(255, 255, 255, 0.07);
					border-left: 3px solid rgba(55, 192, 128, 0.4);
					border-radius: 0 !important;
					padding: 24px 28px;
					display: flex;
					align-items: flex-start;
					gap: 20px;
					transition: all 0.35s cubic-bezier(0.25, 1, 0.5, 1);
					cursor: pointer;
					overflow: hidden;
				}
				.fbt-phil-card::before {
					content: '';
					position: absolute;
					top: 0;
					left: 0;
					width: 0%;
					height: 100%;
					background: linear-gradient(90deg, rgba(55, 192, 128, 0.08) 0%, rgba(55, 192, 128, 0.01) 100%);
					transition: width 0.35s cubic-bezier(0.25, 1, 0.5, 1);
					z-index: 1;
					pointer-events: none;
				}
				.fbt-phil-card:hover {
					background: rgba(255, 255, 255, 0.035);
					border-color: rgba(55, 192, 128, 0.35);
					border-left: 4px solid #37c080;
					transform: translateX(8px);
					box-shadow: 0 12px 30px rgba(0, 0, 0, 0.5), 0 0 25px rgba(55, 192, 128, 0.12);
				}
				.fbt-phil-card:hover::before {
					width: 100%;
				}
				.fbt-phil-num {
					font-family: 'Bebas Neue', Impact, sans-serif;
					font-size: 18px;
					color: #37c080;
					opacity: 0.7;
					letter-spacing: 0.05em;
					flex-shrink: 0;
					padding-top: 3px;
					transition: opacity 0.35s ease, transform 0.35s ease;
					position: relative;
					z-index: 2;
				}
				.fbt-phil-card:hover .fbt-phil-num {
					opacity: 1;
					transform: scale(1.1);
				}
				.fbt-phil-body {
					position: relative;
					z-index: 2;
					flex: 1;
				}
				.fbt-phil-heading {
					font-family: 'Bebas Neue', Impact, sans-serif;
					font-size: 24px;
					line-height: 1.1;
					text-transform: uppercase;
					color: #f4f2ea;
					font-weight: 400;
					letter-spacing: 0.04em;
					margin: 0 0 8px 0;
					transition: color 0.35s ease, transform 0.35s ease;
				}
				.fbt-phil-card:hover .fbt-phil-heading {
					color: #37c080;
					transform: translateX(2px);
				}
				.fbt-phil-text {
					margin: 0;
					font-family: 'Barlow', Inter, sans-serif;
					font-size: 14.5px;
					line-height: 1.7;
					color: #9b998b;
					transition: color 0.35s ease;
				}
				.fbt-phil-card:hover .fbt-phil-text {
					color: #dcd8cc;
				}
			</style>

			<div class="fbt-philosophy-glow"></div>

			<div class="fbt-philosophy-container">
				<!-- Left Info Column -->
				<div class="fbt-philosophy-info">
					<div class="fbt-philosophy-tag">— Philosophy</div>
					<h2 class="fbt-philosophy-title">HER PHILOSOPHY, <span style="color:#37c080;">IN FOUR WORDS.</span></h2>
					<p class="fbt-philosophy-desc">Dr. Shruti Kapoor's approach to wellness is grounded in four principles — practised daily at FitBliss and lived personally.</p>
				</div>

				<!-- Right Philosophy Cards (Interactive Hover Effects) -->
				<div class="fbt-philosophy-cards">
					<!-- Card 1: Balance -->
					<div class="fbt-phil-card">
						<div class="fbt-phil-num">01</div>
						<div class="fbt-phil-body">
							<h3 class="fbt-phil-heading">Balance</h3>
							<p class="fbt-phil-text">Movement and stillness, strength and softness — every program is designed for both.</p>
						</div>
					</div>

					<!-- Card 2: Science -->
					<div class="fbt-phil-card">
						<div class="fbt-phil-num">02</div>
						<div class="fbt-phil-body">
							<h3 class="fbt-phil-heading">Science</h3>
							<p class="fbt-phil-text">Radiology roots and evidence-based coaching. No trends, no shortcuts — only what works.</p>
						</div>
					</div>

					<!-- Card 3: Community -->
					<div class="fbt-phil-card">
						<div class="fbt-phil-num">03</div>
						<div class="fbt-phil-body">
							<h3 class="fbt-phil-heading">Community</h3>
							<p class="fbt-phil-text">Every individual deserves a supportive environment and the confidence to become their best self.</p>
						</div>
					</div>

					<!-- Card 4: Longevity -->
					<div class="fbt-phil-card">
						<div class="fbt-phil-num">04</div>
						<div class="fbt-phil-body">
							<h3 class="fbt-phil-heading">Longevity</h3>
							<p class="fbt-phil-text">Start small. Stay consistent. Trust the process. Sustainability always wins.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
			</div>

	
</main>

			<footer data-elementor-type="footer" data-elementor-id="29" class="elementor elementor-29 elementor-location-footer" data-elementor-post-type="elementor_library">
					<section class="elementor-section elementor-top-section elementor-element elementor-element-5f1f9a04 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5f1f9a04" data-element_type="section" data-e-type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-78b1cb1" data-id="78b1cb1" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-683a54a4 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="683a54a4" data-element_type="section" data-e-type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-18351091" data-id="18351091" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-305aeeba elementor-widget elementor-widget-image" data-id="305aeeba" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img width="1920" height="659" src="<?php echo $base_url; ?>/assets/images/2024/04/New-LoGO-for-FitBliss1-copy-e1719230950970.png" class="attachment-full size-full wp-image-3293" alt="" srcset="<?php echo $base_url; ?>/assets/images/2024/04/New-LoGO-for-FitBliss1-copy-e1719230950970.png 1920w, <?php echo $base_url; ?>/assets/images/2024/04/New-LoGO-for-FitBliss1-copy-e1719230950970-300x103.png 300w, <?php echo $base_url; ?>/assets/images/2024/04/New-LoGO-for-FitBliss1-copy-e1719230950970-1024x351.png 1024w, <?php echo $base_url; ?>/assets/images/2024/04/New-LoGO-for-FitBliss1-copy-e1719230950970-768x264.png 768w, <?php echo $base_url; ?>/assets/images/2024/04/New-LoGO-for-FitBliss1-copy-e1719230950970-1536x527.png 1536w" sizes="(max-width: 1920px) 100vw, 1920px" />															</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-13f5cbe" data-id="13f5cbe" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-349b413 elementor-shape-circle e-grid-align-right elementor-grid-0 elementor-widget elementor-widget-social-icons" data-id="349b413" data-element_type="widget" data-e-type="widget" data-widget_type="social-icons.default">
				<div class="elementor-widget-container">
							<div class="elementor-social-icons-wrapper elementor-grid" role="list">
							<span class="elementor-grid-item" role="listitem">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-facebook elementor-repeater-item-lc999d" href="https://www.facebook.com/fitblissbysk" target="_blank">
						<span class="elementor-screen-only">Facebook</span>
						<svg aria-hidden="true" class="e-font-icon-svg e-fab-facebook" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"></path></svg>					</a>
				</span>
							<span class="elementor-grid-item" role="listitem">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-repeater-item-xj9pe7" href="https://twitter.com/fitblissbysk" target="_blank">
						<span class="elementor-screen-only">Twitter</span>
						<svg aria-hidden="true" class="e-font-icon-svg e-fab-twitter" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg>					</a>
				</span>
							<span class="elementor-grid-item" role="listitem">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-youtube elementor-repeater-item-44x7qh" href="https://www.youtube.com/@fitblissbysk" target="_blank">
						<span class="elementor-screen-only">Youtube</span>
						<svg aria-hidden="true" class="e-font-icon-svg e-fab-youtube" viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg"><path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path></svg>					</a>
				</span>
							<span class="elementor-grid-item" role="listitem">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-repeater-item-ea50edd" href="https://www.instagram.com/fitblissbysk/?hl=en" target="_blank">
						<span class="elementor-screen-only">Instagram</span>
						<svg aria-hidden="true" class="e-font-icon-svg e-fab-instagram" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg>					</a>
				</span>
					</div>
						</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-2c382637 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2c382637" data-element_type="section" data-e-type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-755565e8" data-id="755565e8" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-23064cda elementor-widget elementor-widget-heading" data-id="23064cda" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h5 class="elementor-heading-title elementor-size-default">Central India's most luxurious  Wellness Destination</h5>				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-7ba74eb" data-id="7ba74eb" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-80c3e75 elementor-align-start elementor-tablet-align-start elementor-mobile-align-start elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="80c3e75" data-element_type="widget" data-e-type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
							<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-map-marker-alt" viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg"><path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path></svg>						</span>
										<span class="elementor-icon-list-text">E 2/19  in front of  Rani Kamlapati Railway Station, Bhopal, Madhya Pradesh 462016</span>
									</li>
						</ul>
						</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-2eaea567" data-id="2eaea567" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-4538db7 elementor-align-start elementor-tablet-align-start elementor-mobile-align-start elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="4538db7" data-element_type="widget" data-e-type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
							<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<a href="tel:+917470787012">

												<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-phone-square-alt" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h352a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48zm-16.39 307.37l-15 65A15 15 0 0 1 354 416C194 416 64 286.29 64 126a15.7 15.7 0 0 1 11.63-14.61l65-15A18.23 18.23 0 0 1 144 96a16.27 16.27 0 0 1 13.79 9.09l30 70A17.9 17.9 0 0 1 189 181a17 17 0 0 1-5.5 11.61l-37.89 31a231.91 231.91 0 0 0 110.78 110.78l31-37.89A17 17 0 0 1 299 291a17.85 17.85 0 0 1 5.91 1.21l70 30A16.25 16.25 0 0 1 384 336a17.41 17.41 0 0 1-.39 3.37z"></path></svg>						</span>
										<span class="elementor-icon-list-text">7470787012</span>
											</a>
									</li>
								<li class="elementor-icon-list-item">
											<a href="tel:+917470787014">

												<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-phone-square-alt" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h352a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48zm-16.39 307.37l-15 65A15 15 0 0 1 354 416C194 416 64 286.29 64 126a15.7 15.7 0 0 1 11.63-14.61l65-15A18.23 18.23 0 0 1 144 96a16.27 16.27 0 0 1 13.79 9.09l30 70A17.9 17.9 0 0 1 189 181a17 17 0 0 1-5.5 11.61l-37.89 31a231.91 231.91 0 0 0 110.78 110.78l31-37.89A17 17 0 0 1 299 291a17.85 17.85 0 0 1 5.91 1.21l70 30A16.25 16.25 0 0 1 384 336a17.41 17.41 0 0 1-.39 3.37z"></path></svg>						</span>
										<span class="elementor-icon-list-text"> 7470787014</span>
											</a>
									</li>
								<li class="elementor-icon-list-item">
											<a href="mailto:info@fitblissbysk.com">

												<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-far-envelope" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M464 64H48C21.49 64 0 85.49 0 112v288c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V112c0-26.51-21.49-48-48-48zm0 48v40.805c-22.422 18.259-58.168 46.651-134.587 106.49-16.841 13.247-50.201 45.072-73.413 44.701-23.208.375-56.579-31.459-73.413-44.701C106.18 199.465 70.425 171.067 48 152.805V112h416zM48 400V214.398c22.914 18.251 55.409 43.862 104.938 82.646 21.857 17.205 60.134 55.186 103.062 54.955 42.717.231 80.509-37.199 103.053-54.947 49.528-38.783 82.032-64.401 104.947-82.653V400H48z"></path></svg>						</span>
										<span class="elementor-icon-list-text"><span class="__cf_email__" data-cfemail="d1b8bfb7be91b7b8a5b3bdb8a2a2b3a8a2baffb2bebc">info@fitblissbysk.com</span></span>
											</a>
									</li>
						</ul>
						</div>
				</div>
					</div>
		</div>
					</div>
		</section>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-397b373d elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="397b373d" data-element_type="section" data-e-type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-b93c5a2" data-id="b93c5a2" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-7e957411 elementor-icon-list--layout-inline elementor-align-start elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="7e957411" data-element_type="widget" data-e-type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
							<ul class="elementor-icon-list-items elementor-inline-items">
							<li class="elementor-icon-list-item elementor-inline-item">
											<a href="<?php echo $base_url; ?>/privacy-policy/">

											<span class="elementor-icon-list-text">PRIVACY POLICY</span>
											</a>
									</li>
								<li class="elementor-icon-list-item elementor-inline-item">
											<a href="<?php echo $base_url; ?>/terms-conditions/">

											<span class="elementor-icon-list-text">TERMS &amp; CONDITIONS</span>
											</a>
									</li>
								<li class="elementor-icon-list-item elementor-inline-item">
											<a href="<?php echo $base_url; ?>/terms-of-use/">

											<span class="elementor-icon-list-text">TERMS OF USE</span>
											</a>
									</li>
						</ul>
						</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6b801d69" data-id="6b801d69" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-1b3f2a5f elementor-widget elementor-widget-heading" data-id="1b3f2a5f" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h5 class="elementor-heading-title elementor-size-default"><a href="https://wecrescent.com/">Designed By Crescent Digital Solutions</a></h5>				</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				</footer>
		
<script type="speculationrules">
{"prefetch":[{"source":"document","where":{"and":[{"href_matches":"/*"},{"not":{"href_matches":["/wp-*.php","/wp-admin/*","/assets/images/*","/wp-content/*","/assets/plugins/*","/assets/theme/hello-elementor/*","/*\\?(.+)"]}},{"not":{"selector_matches":"a[rel~=\"nofollow\"]"}},{"not":{"selector_matches":".no-prefetch, .no-prefetch a"}}]},"eagerness":"conservative"}]}
</script>
		<div data-elementor-type="popup" data-elementor-id="1638" class="elementor elementor-1638 elementor-location-popup" data-elementor-settings="{&quot;open_selector&quot;:&quot;.joinnow&quot;,&quot;a11y_navigation&quot;:&quot;yes&quot;,&quot;triggers&quot;:[],&quot;timing&quot;:[]}" data-elementor-post-type="elementor_library">
					<section class="elementor-section elementor-top-section elementor-element elementor-element-1b84ca40 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1b84ca40" data-element_type="section" data-e-type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5bd7ef6" data-id="5bd7ef6" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-d811c02 elementor-widget elementor-widget-heading" data-id="d811c02" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Join Now</h2>				</div>
				</div>
				<div class="elementor-element elementor-element-89ab575 fluentform-widget-submit-button-center fluentform-widget-submit-button-custom elementor-widget elementor-widget-fluent-form-widget" data-id="89ab575" data-element_type="widget" data-e-type="widget" data-widget_type="fluent-form-widget.default">
				<div class="elementor-widget-container">
					
            <div class="fluentform-widget-wrapper fluentform-widget-align-default">

            
            <div class='fluentform ff-default fluentform_wrapper_1 ffs_default_wrap'><form data-form_id="1" id="fluentform_1" class="frm-fluent-form fluent_form_1 ff-el-form-top ff_form_instance_1_1 ff-form-loading ffs_default" data-form_instance="ff_form_instance_1_1" method="POST" ><fieldset  style="border: none!important;margin: 0!important;padding: 0!important;background-color: transparent!important;box-shadow: none!important;outline: none!important; min-inline-size: 100%;">
                    <legend class="ff_screen_reader_title" style="display: block; margin: 0!important;padding: 0!important;height: 0!important;text-indent: -999999px;width: 0!important;overflow:hidden;">Contact Form</legend><input type='hidden' name='__fluent_form_embded_post_id' value='18724' /><input type="hidden" id="_fluentform_1_fluentformnonce" name="_fluentform_1_fluentformnonce" value="1ea1268e73" /><input type="hidden" name="_wp_http_referer" value="/founder/" /><div class='ff-el-group ff-el-form-hide_label'><div class="ff-el-input--label asterisk-right"><label for='ff_1_input_text' id='label_ff_1_input_text' aria-label="Name">Name</label></div><div class='ff-el-input--content'><input type="text" name="input_text" class="ff-el-form-control" placeholder="Name" data-name="input_text" id="ff_1_input_text"  aria-invalid="false" aria-required=false></div></div><div class='ff-el-group ff-el-form-hide_label'><div class="ff-el-input--label ff-el-is-required asterisk-right"><label for='ff_1_email' id='label_ff_1_email' aria-label="Email">Email</label></div><div class='ff-el-input--content'><input type="email" name="email" id="ff_1_email" class="ff-el-form-control" placeholder="Email" data-name="email"  aria-invalid="false" aria-required=true></div></div><div class='ff-el-group ff-el-form-hide_label'><div class="ff-el-input--label ff-el-is-required asterisk-right"><label for='ff_1_subject' id='label_ff_1_subject' aria-label="Phone">Phone</label></div><div class='ff-el-input--content'><input type="text" name="subject" class="ff-el-form-control" placeholder="Phone" data-name="subject" id="ff_1_subject"  aria-invalid="false" aria-required=true></div></div><div class='ff-el-group ff-el-form-hide_label'><div class="ff-el-input--label ff-el-is-required asterisk-right"><label for='ff_1_message' id='label_ff_1_message' aria-label="Your Message">Your Message</label></div><div class='ff-el-input--content'><textarea aria-required="true" aria-labelledby="label_ff_1_message" name="message" id="ff_1_message" class="ff-el-form-control" placeholder="Your Message" rows="4" cols="2" data-name="message" ></textarea></div></div><input type="hidden" name="pagelink" value="<?php echo $base_url; ?>/founder/" data-name="pagelink" ><div class='ff-el-group ff-text-left ff_submit_btn_wrapper'><button type="submit" class="ff-btn ff-btn-submit ff-btn-md ff_btn_style"  aria-label="Submit">Submit</button><style>form.fluent_form_1 .ff-btn-submit:not(.ff_btn_no_style) { background-color: var(--fluentform-primary); color: #ffffff; }</style></div></fieldset></form><div id='fluentform_1_errors' class='ff-errors-in-stack ff_form_instance_1_1 ff-form-loading_errors ff_form_instance_1_1_errors'></div></div>            <script type="text/javascript">
                window.fluent_form_ff_form_instance_1_1 = {"id":"1","ajaxUrl":"https:\/\/staging.fitblissbysk.com\/wp-admin\/admin-ajax.php","settings":{"layout":{"labelPlacement":"top","helpMessagePlacement":"with_label","errorMessagePlacement":"inline","cssClassName":"","asteriskPlacement":"asterisk-right"},"restrictions":{"denyEmptySubmission":{"enabled":false}}},"form_instance":"ff_form_instance_1_1","form_id_selector":"fluentform_1","rules":{"input_text":{"required":{"value":false,"message":"This field is required","global_message":"This field is required","global":true}},"email":{"required":{"value":true,"message":"This field is required","global":false,"global_message":"This field is required"},"email":{"value":true,"message":"This field must contain a valid email","global":false,"global_message":"This field must contain a valid email"}},"subject":{"required":{"value":true,"message":"This field is required","global":false,"global_message":"This field is required"}},"message":{"required":{"value":true,"message":"This field is required","global":false,"global_message":"This field is required"}}},"debounce_time":300,"file_upload_settings":[]};
                            </script>
                        </div>

            				</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				</div>
					<script>
				( () => {
					const lazyloadRunObserver = () => {
						const lazyloadBackgrounds = document.querySelectorAll( `.e-con.e-parent:not(.e-lazyloaded)` );
						const lazyloadBackgroundObserver = new IntersectionObserver( ( entries ) => {
							entries.forEach( ( entry ) => {
								if ( entry.isIntersecting ) {
									let lazyloadBackground = entry.target;
									if( lazyloadBackground ) {
										lazyloadBackground.classList.add( 'e-lazyloaded' );
									}
									lazyloadBackgroundObserver.unobserve( entry.target );
								}
							});
						}, { rootMargin: '200px 0px 200px 0px' } );
						lazyloadBackgrounds.forEach( ( lazyloadBackground ) => {
							lazyloadBackgroundObserver.observe( lazyloadBackground );
						} );
					};
					const events = [
						'DOMContentLoaded',
						'elementor/lazyload/observe',
					];
					events.forEach( ( event ) => {
						document.addEventListener( event, lazyloadRunObserver );
					} );
				} )();
			</script>
			<link rel='stylesheet' id='elementor-post-20357-css' href='<?php echo $base_url; ?>/assets/images/elementor/css/post-20357.css?ver=1790581503' media='all' />
<link rel='stylesheet' id='widget-spacer-css' href='<?php echo $base_url; ?>/assets/plugins/elementor/assets/css/widget-spacer.min.css?ver=4.2.4' media='all' />
<link rel='stylesheet' id='widget-gallery-css' href='<?php echo $base_url; ?>/assets/plugins/elementor-pro/assets/css/widget-gallery.min.css?ver=4.1.1' media='all' />
<link rel='stylesheet' id='elementor-gallery-css' href='<?php echo $base_url; ?>/assets/plugins/elementor/assets/lib/e-gallery/css/e-gallery.min.css?ver=1.2.0' media='all' />
<link rel='stylesheet' id='e-transitions-css' href='<?php echo $base_url; ?>/assets/plugins/elementor-pro/assets/css/conditionals/transitions.min.css?ver=4.1.1' media='all' />
<link rel='stylesheet' id='widget-divider-css' href='<?php echo $base_url; ?>/assets/plugins/elementor/assets/css/widget-divider.min.css?ver=4.2.4' media='all' />
<link rel='stylesheet' id='elementor-gf-local-barlow-css' href='<?php echo $base_url; ?>/assets/images/elementor/google-fonts/css/barlow.css?ver=1784191232' media='all' />
<link rel='stylesheet' id='elementor-gf-local-bebasneue-css' href='<?php echo $base_url; ?>/assets/images/elementor/google-fonts/css/bebasneue.css?ver=1749301349' media='all' />
<script id="fluentform-elementor-js-extra">
var fluentformElementor = {"adminUrl":"<?php echo $base_url; ?>/wp-admin/admin.php"};
//# sourceURL=fluentform-elementor-js-extra
</script>
<script id="fluentform-elementor-js" src="<?php echo $base_url; ?>/assets/plugins/fluentform/assets/js/fluent-forms-elementor-widget.js?ver=6.2.14"></script>
<script id="jquery-ui-core-js-before">
jQuery.uiBackCompat = true;
//# sourceURL=jquery-ui-core-js-before
</script>
<script id="jquery-ui-core-js" src="<?php echo $base_url; ?>/assets/vendor/js/jquery/ui/core.min.js?ver=1.14.2"></script>
<script id="qi-addons-for-elementor-script-js-extra">
var qodefQiAddonsGlobal = {"vars":{"adminBarHeight":0,"iconArrowLeft":"\u003Csvg  xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" viewBox=\"0 0 34.2 32.3\" xml:space=\"preserve\" style=\"stroke-width: 2;\"\u003E\u003Cline x1=\"0.5\" y1=\"16\" x2=\"33.5\" y2=\"16\"/\u003E\u003Cline x1=\"0.3\" y1=\"16.5\" x2=\"16.2\" y2=\"0.7\"/\u003E\u003Cline x1=\"0\" y1=\"15.4\" x2=\"16.2\" y2=\"31.6\"/\u003E\u003C/svg\u003E","iconArrowRight":"\u003Csvg  xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" viewBox=\"0 0 34.2 32.3\" xml:space=\"preserve\" style=\"stroke-width: 2;\"\u003E\u003Cline x1=\"0\" y1=\"16\" x2=\"33\" y2=\"16\"/\u003E\u003Cline x1=\"17.3\" y1=\"0.7\" x2=\"33.2\" y2=\"16.5\"/\u003E\u003Cline x1=\"17.3\" y1=\"31.6\" x2=\"33.5\" y2=\"15.4\"/\u003E\u003C/svg\u003E","iconClose":"\u003Csvg  xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" viewBox=\"0 0 9.1 9.1\" xml:space=\"preserve\"\u003E\u003Cg\u003E\u003Cpath d=\"M8.5,0L9,0.6L5.1,4.5L9,8.5L8.5,9L4.5,5.1L0.6,9L0,8.5L4,4.5L0,0.6L0.6,0L4.5,4L8.5,0z\"/\u003E\u003C/g\u003E\u003C/svg\u003E"}};
//# sourceURL=qi-addons-for-elementor-script-js-extra
</script>
<script id="qi-addons-for-elementor-script-js" src="<?php echo $base_url; ?>/assets/plugins/qi-addons-for-elementor/assets/js/main.min.js?ver=1.11.1"></script>
<script id="hello-theme-frontend-js" src="<?php echo $base_url; ?>/assets/theme/hello-elementor/assets/js/hello-frontend.js?ver=3.4.6"></script>
<script id="elementor-webpack-runtime-js" src="<?php echo $base_url; ?>/assets/plugins/elementor/assets/js/webpack.runtime.min.js?ver=4.2.4"></script>
<script id="elementor-frontend-modules-js" src="<?php echo $base_url; ?>/assets/plugins/elementor/assets/js/frontend-modules.min.js?ver=4.2.4"></script>
<script id="elementor-frontend-js-before">
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnX":"Share on X","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close","a11yCarouselPrevSlideMessage":"Previous slide","a11yCarouselNextSlideMessage":"Next slide","a11yCarouselFirstSlideMessage":"This is the first slide","a11yCarouselLastSlideMessage":"This is the last slide","a11yCarouselPaginationBulletMessage":"Go to slide"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile Portrait","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Landscape","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet Portrait","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Landscape","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}},"hasCustomBreakpoints":false},"version":"4.2.4","is_static":false,"experimentalFeatures":{"e_font_icon_svg":true,"additional_custom_breakpoints":true,"container":true,"e_panel_promotions":true,"theme_builder_v2":true,"hello-theme-header-footer":true,"nested-elements":true,"global_classes_should_enforce_capabilities":true,"e_variables":true,"e_opt_in_v4_page":true,"e_components":true,"e_interactions":true,"e_widget_creation":true,"import-export-customization":true,"e_pro_atomic_form":true,"e_pro_variables":true,"e_pro_interactions":true},"urls":{"assets":"https:\/\/staging.fitblissbysk.com\/wp-content\/plugins\/elementor\/assets\/","ajaxurl":"https:\/\/staging.fitblissbysk.com\/wp-admin\/admin-ajax.php","uploadUrl":"https:\/\/staging.fitblissbysk.com\/wp-content\/uploads"},"nonces":{"floatingButtonsClickTracking":"1789dd066d","atomicFormsSendForm":"219b12a670"},"swiperClass":"swiper","settings":{"page":[],"editorPreferences":[]},"kit":{"body_background_background":"classic","active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description","hello_header_logo_type":"title","hello_header_menu_layout":"horizontal","hello_footer_logo_type":"logo"},"post":{"id":18724,"title":"Founder%20-%20Fit%20Bliss","excerpt":"","featuredImage":false}};
//# sourceURL=elementor-frontend-js-before
</script>
<script id="elementor-frontend-js" src="<?php echo $base_url; ?>/assets/plugins/elementor/assets/js/frontend.min.js?ver=4.2.4"></script>
<script id="smartmenus-js" src="<?php echo $base_url; ?>/assets/plugins/elementor-pro/assets/lib/smartmenus/jquery.smartmenus.min.js?ver=1.2.1"></script>
<script id="swiper-js" src="<?php echo $base_url; ?>/assets/plugins/qi-addons-for-elementor/assets/plugins/swiper/8.4.5/swiper.min.js?ver=8.4.5"></script>
<script id="chaty-front-end-js-extra">
var chaty_settings = {"ajax_url":"<?php echo $base_url; ?>/wp-admin/admin-ajax.php","analytics":"0","capture_analytics":"0","token":"55186ecd80","chaty_widgets":[{"id":0,"identifier":0,"settings":{"cta_type":"simple-view","cta_body":"","cta_head":"","cta_head_bg_color":"","cta_head_text_color":"","show_close_button":0,"position":"right","custom_position":1,"bottom_spacing":"25","side_spacing":"25","icon_view":"vertical","default_state":"click","cta_text":"","cta_text_color":"#333333","cta_bg_color":"#ffffff","show_cta":"first_click","is_pending_mesg_enabled":"off","pending_mesg_count":"1","pending_mesg_count_color":"#ffffff","pending_mesg_count_bgcolor":"#dd0000","widget_icon":"chat-base","widget_icon_url":"","font_family":"-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Oxygen-Sans,Ubuntu,Cantarell,Helvetica Neue,sans-serif","widget_size":"54","custom_widget_size":"54","is_google_analytics_enabled":0,"close_text":"Hide","widget_color":"#000000","widget_icon_color":"#ffffff","widget_rgb_color":"0,0,0","has_custom_css":0,"custom_css":"","widget_token":"e1c922d0d5","widget_index":"","attention_effect":"shockwave"},"triggers":{"has_time_delay":1,"time_delay":"0","exit_intent":0,"has_display_after_page_scroll":0,"display_after_page_scroll":"0","auto_hide_widget":0,"hide_after":0,"show_on_pages_rules":[],"time_diff":0,"has_date_scheduling_rules":0,"date_scheduling_rules":{"start_date_time":"","end_date_time":""},"date_scheduling_rules_timezone":0,"day_hours_scheduling_rules_timezone":0,"has_day_hours_scheduling_rules":[],"day_hours_scheduling_rules":[],"day_time_diff":0,"show_on_direct_visit":0,"show_on_referrer_social_network":0,"show_on_referrer_search_engines":0,"show_on_referrer_google_ads":0,"show_on_referrer_urls":[],"has_show_on_specific_referrer_urls":0,"has_traffic_source":0,"has_countries":0,"countries":[],"has_target_rules":0},"channels":[{"channel":"Phone","value":"+917470787014","hover_text":"Phone","chatway_position":"","svg_icon":"\u003Csvg width=\"39\" height=\"39\" viewBox=\"0 0 39 39\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"\u003E\u003Ccircle class=\"color-element\" cx=\"19.4395\" cy=\"19.4395\" r=\"19.4395\" fill=\"#03E78B\"/\u003E\u003Cpath d=\"M19.3929 14.9176C17.752 14.7684 16.2602 14.3209 14.7684 13.7242C14.0226 13.4259 13.1275 13.7242 12.8292 14.4701L11.7849 16.2602C8.65222 14.6193 6.11623 11.9341 4.47529 8.95057L6.41458 7.90634C7.16046 7.60799 7.45881 6.71293 7.16046 5.96705C6.56375 4.47529 6.11623 2.83435 5.96705 1.34259C5.96705 0.596704 5.22117 0 4.47529 0H0.745882C0.298353 0 5.69062e-07 0.298352 5.69062e-07 0.745881C5.69062e-07 3.72941 0.596704 6.71293 1.93929 9.3981C3.87858 13.575 7.30964 16.8569 11.3374 18.7962C14.0226 20.1388 17.0061 20.7355 19.9896 20.7355C20.4371 20.7355 20.7355 20.4371 20.7355 19.9896V16.4094C20.7355 15.5143 20.1388 14.9176 19.3929 14.9176Z\" transform=\"translate(9.07179 9.07178)\" fill=\"white\"/\u003E\u003C/svg\u003E","is_desktop":1,"is_mobile":1,"icon_color":"#03E78B","icon_rgb_color":"3,231,139","channel_type":"Phone","custom_image_url":"","order":"","pre_set_message":"","is_use_web_version":"1","is_open_new_tab":"1","is_default_open":"0","has_welcome_message":"0","emoji_picker":"1","input_placeholder":"Write your message...","chat_welcome_message":"","wp_popup_headline":"","wp_popup_nickname":"","wp_popup_profile":"","wp_popup_head_bg_color":"#4AA485","qr_code_image_url":"","mail_subject":"","channel_account_type":"personal","contact_form_settings":[],"contact_fields":[],"url":"tel:+917470787014","mobile_target":"","desktop_target":"","target":"","is_agent":0,"agent_data":[],"header_text":"","header_sub_text":"","header_bg_color":"","header_text_color":"","widget_token":"e1c922d0d5","widget_index":"","click_event":"","viber_url":""},{"channel":"Whatsapp","value":"917470787014","hover_text":"WhatsApp","chatway_position":"","svg_icon":"\u003Csvg width=\"39\" height=\"39\" viewBox=\"0 0 39 39\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"\u003E\u003Ccircle class=\"color-element\" cx=\"19.4395\" cy=\"19.4395\" r=\"19.4395\" fill=\"#49E670\"/\u003E\u003Cpath d=\"M12.9821 10.1115C12.7029 10.7767 11.5862 11.442 10.7486 11.575C10.1902 11.7081 9.35269 11.8411 6.84003 10.7767C3.48981 9.44628 1.39593 6.25317 1.25634 6.12012C1.11674 5.85403 2.13001e-06 4.39053 2.13001e-06 2.92702C2.13001e-06 1.46351 0.83755 0.665231 1.11673 0.399139C1.39592 0.133046 1.8147 1.01506e-06 2.23348 1.01506e-06C2.37307 1.01506e-06 2.51267 1.01506e-06 2.65226 1.01506e-06C2.93144 1.01506e-06 3.21063 -2.02219e-06 3.35022 0.532183C3.62941 1.19741 4.32736 2.66092 4.32736 2.79397C4.46696 2.92702 4.46696 3.19311 4.32736 3.32616C4.18777 3.59225 4.18777 3.59224 3.90858 3.85834C3.76899 3.99138 3.6294 4.12443 3.48981 4.39052C3.35022 4.52357 3.21063 4.78966 3.35022 5.05576C3.48981 5.32185 4.18777 6.38622 5.16491 7.18449C6.42125 8.24886 7.39839 8.51496 7.81717 8.78105C8.09636 8.91409 8.37554 8.9141 8.65472 8.648C8.93391 8.38191 9.21309 7.98277 9.49228 7.58363C9.77146 7.31754 10.0507 7.1845 10.3298 7.31754C10.609 7.45059 12.2841 8.11582 12.5633 8.38191C12.8425 8.51496 13.1217 8.648 13.1217 8.78105C13.1217 8.78105 13.1217 9.44628 12.9821 10.1115Z\" transform=\"translate(12.9597 12.9597)\" fill=\"#FAFAFA\"/\u003E\u003Cpath d=\"M0.196998 23.295L0.131434 23.4862L0.323216 23.4223L5.52771 21.6875C7.4273 22.8471 9.47325 23.4274 11.6637 23.4274C18.134 23.4274 23.4274 18.134 23.4274 11.6637C23.4274 5.19344 18.134 -0.1 11.6637 -0.1C5.19344 -0.1 -0.1 5.19344 -0.1 11.6637C-0.1 13.9996 0.624492 16.3352 1.93021 18.2398L0.196998 23.295ZM5.87658 19.8847L5.84025 19.8665L5.80154 19.8788L2.78138 20.8398L3.73978 17.9646L3.75932 17.906L3.71562 17.8623L3.43104 17.5777C2.27704 15.8437 1.55796 13.8245 1.55796 11.6637C1.55796 6.03288 6.03288 1.55796 11.6637 1.55796C17.2945 1.55796 21.7695 6.03288 21.7695 11.6637C21.7695 17.2945 17.2945 21.7695 11.6637 21.7695C9.64222 21.7695 7.76778 21.1921 6.18227 20.039L6.17557 20.0342L6.16817 20.0305L5.87658 19.8847Z\" transform=\"translate(7.7758 7.77582)\" fill=\"white\" stroke=\"white\" stroke-width=\"0.2\"/\u003E\u003C/svg\u003E","is_desktop":1,"is_mobile":1,"icon_color":"#49E670","icon_rgb_color":"73,230,112","channel_type":"Whatsapp","custom_image_url":"","order":"","pre_set_message":"","is_use_web_version":"1","is_open_new_tab":"1","is_default_open":"0","has_welcome_message":"0","emoji_picker":"1","input_placeholder":"Write your message...","chat_welcome_message":"\u003Cp\u003EHow can I help you? :)\u003C/p\u003E","wp_popup_headline":"Let&#039;s chat on WhatsApp","wp_popup_nickname":"","wp_popup_profile":"","wp_popup_head_bg_color":"#4AA485","qr_code_image_url":"","mail_subject":"","channel_account_type":"personal","contact_form_settings":[],"contact_fields":[],"url":"https://web.whatsapp.com/send?phone=917470787014","mobile_target":"","desktop_target":"_blank","target":"_blank","is_agent":0,"agent_data":[],"header_text":"","header_sub_text":"","header_bg_color":"","header_text_color":"","widget_token":"e1c922d0d5","widget_index":"","click_event":"","viber_url":""},{"channel":"Instagram","value":"fitblissbysk/?hl=en","hover_text":"Instagram Page","chatway_position":"","svg_icon":"\u003Csvg width=\"39\" height=\"39\" viewBox=\"0 0 39 39\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"\u003E\u003Ccircle class=\"color-element\" cx=\"19.5\" cy=\"19.5\" r=\"19.5\" fill=\"url(#linear-gradient)\"/\u003E\u003Cpath id=\"Path_1923\" data-name=\"Path 1923\" d=\"M13.177,0H5.022A5.028,5.028,0,0,0,0,5.022v8.155A5.028,5.028,0,0,0,5.022,18.2h8.155A5.028,5.028,0,0,0,18.2,13.177V5.022A5.028,5.028,0,0,0,13.177,0Zm3.408,13.177a3.412,3.412,0,0,1-3.408,3.408H5.022a3.411,3.411,0,0,1-3.408-3.408V5.022A3.412,3.412,0,0,1,5.022,1.615h8.155a3.412,3.412,0,0,1,3.408,3.408v8.155Z\" transform=\"translate(10 10.4)\" fill=\"#fff\"/\u003E\u003Cpath id=\"Path_1924\" data-name=\"Path 1924\" d=\"M45.658,40.97a4.689,4.689,0,1,0,4.69,4.69A4.695,4.695,0,0,0,45.658,40.97Zm0,7.764a3.075,3.075,0,1,1,3.075-3.075A3.078,3.078,0,0,1,45.658,48.734Z\" transform=\"translate(-26.558 -26.159)\" fill=\"#fff\"/\u003E\u003C/svg\u003E\u003Cpath id=\"Path_1925\" data-name=\"Path 1925\" d=\"M120.105,28.251a1.183,1.183,0,1,0,.838.347A1.189,1.189,0,0,0,120.105,28.251Z\" transform=\"translate(-96.119 -14.809)\" fill=\"#fff\"/\u003E","is_desktop":1,"is_mobile":1,"icon_color":"#ffffff","icon_rgb_color":"0,0,0","channel_type":"Instagram","custom_image_url":"","order":"","pre_set_message":"","is_use_web_version":"1","is_open_new_tab":"1","is_default_open":"0","has_welcome_message":"0","emoji_picker":"1","input_placeholder":"Write your message...","chat_welcome_message":"","wp_popup_headline":"","wp_popup_nickname":"","wp_popup_profile":"","wp_popup_head_bg_color":"#4AA485","qr_code_image_url":"","mail_subject":"","channel_account_type":"personal","contact_form_settings":[],"contact_fields":[],"url":"https://www.instagram.com/fitblissbysk/?hl=en","mobile_target":"_blank","desktop_target":"_blank","target":"_blank","is_agent":0,"agent_data":[],"header_text":"","header_sub_text":"","header_bg_color":"","header_text_color":"","widget_token":"e1c922d0d5","widget_index":"","click_event":"","viber_url":""}]}],"data_analytics_settings":"off","lang":{"whatsapp_label":"WhatsApp Message","hide_whatsapp_form":"Hide WhatsApp Form","emoji_picker":"Show Emojis"},"has_chatway":""};
//# sourceURL=chaty-front-end-js-extra
</script>
<script defer id="chaty-front-end-js" src="<?php echo $base_url; ?>/assets/plugins/chaty/dist/js/script.js?ver=3.6.11785238286"></script>
<script defer id="chaty-mail-check-js" src="<?php echo $base_url; ?>/assets/plugins/chaty/admin/assets/js/mailcheck.js?ver=3.6.1"></script>
<script id="elementor-gallery-js" src="<?php echo $base_url; ?>/assets/plugins/elementor/assets/lib/e-gallery/js/e-gallery.min.js?ver=1.2.0"></script>
<script id="fluent-form-submission-js-extra">
var fluentFormVars = {"ajaxUrl":"<?php echo $base_url; ?>/wp-admin/admin-ajax.php","forms":[],"step_text":"Step %activeStep% of %totalStep% - %stepTitle%","step_completed_text":"Completed","is_rtl":"","date_i18n":{"previousMonth":"Previous Month","nextMonth":"Next Month","months":{"shorthand":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"longhand":["January","February","March","April","May","June","July","August","September","October","November","December"]},"weekdays":{"longhand":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"shorthand":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"]},"daysInMonth":[31,28,31,30,31,30,31,31,30,31,30,31],"rangeSeparator":" to ","weekAbbreviation":"Wk","scrollTitle":"Scroll to increment","toggleTitle":"Click to toggle","amPM":["AM","PM"],"yearAriaLabel":"Year","firstDayOfWeek":1},"pro_version":"","fluentform_version":"6.2.14","force_init":"","stepAnimationDuration":"350","upload_completed_txt":"100% Completed","upload_start_txt":"0% Completed","uploading_txt":"Uploading","choice_js_vars":{"noResultsText":"No results found","loadingText":"Loading...","noChoicesText":"No choices to choose from","itemSelectText":"Press to select","maxItemTextSingular":"Only %%maxItemCount%% option can be added","maxItemTextPlural":"Only %%maxItemCount%% options can be added"},"input_mask_vars":{"clearIfNotMatch":false},"nonce":"9aa8e9f3f6","file_delete_nonce":"96cfc14f4c","form_id":"1","step_change_focus":"1","has_cleantalk":"","pro_payment_script_compatible":""};
var fluentform_submission_messages_1 = {"file_upload_in_progress":"File upload in progress. Please wait...","javascript_handler_failed":"Javascript handler could not be loaded. Form submission has been failed. Reload the page and try again"};
var fluentform_payment_messages_1 = {"stock_out_message":"This Item is Stock Out","item_label":"Item","price_label":"Price","qty_label":"Qty","line_total_label":"Line Total","sub_total_label":"Sub Total","discount_label":"Discount","total_label":"Total","signup_fee_label":"Signup Fee","trial_label":"Trial","processing_text":"Processing...","confirming_text":"Confirming..."};
var fluentform_save_progress_messages_1 = {"copy_button":"Copy","email_button":"Email","email_placeholder":"Your Email Here","copy_success":"Copied"};
var fluentform_address_messages_1 = {"please_wait":"Please wait ...","location_not_determined":"Could not determine address from location.","address_fetch_failed":"Failed to fetch address from coordinates.","geolocation_failed":"Geolocation failed or was denied.","geolocation_not_supported":"Geolocation is not supported by this browser."};
var fluentform_gateway_messages_1 = {"request_failed":"Request failed. Please try again","payment_failed":"Payment process failed!","no_method_found":"No method found","processing_text":"Processing..."};
var fluentform_submission_messages_global = {"javascript_handler_failed":"Javascript handler could not be loaded. Form submission has been failed. Reload the page and try again"};
var fluentform_address_messages_global = {"please_wait":"Please wait ...","location_not_determined":"Could not determine address from location.","address_fetch_failed":"Failed to fetch address from coordinates.","geolocation_failed":"Geolocation failed or was denied.","geolocation_not_supported":"Geolocation is not supported by this browser."};
//# sourceURL=fluent-form-submission-js-extra
</script>
<script id="fluent-form-submission-js" src="<?php echo $base_url; ?>/assets/plugins/fluentform/assets/js/form-submission.js?ver=6.2.14"></script>
<script id="wp-hooks-js" src="<?php echo $base_url; ?>/assets/vendor/js/dist/hooks.min.js?ver=f0f188028580e8dc1255"></script>
<script id="wp-i18n-js" src="<?php echo $base_url; ?>/assets/vendor/js/dist/i18n.min.js?ver=1dfe7db3940c23ea9216"></script>
<script id="wp-i18n-js-after">
wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
//# sourceURL=wp-i18n-js-after
</script>
<script id="qi-addons-for-elementor-elementor-js" src="<?php echo $base_url; ?>/assets/plugins/qi-addons-for-elementor/inc/plugins/elementor/assets/js/elementor.min.js?ver=7.1.2"></script>
<script id="elementor-pro-webpack-runtime-js" src="<?php echo $base_url; ?>/assets/plugins/elementor-pro/assets/js/webpack-pro.runtime.min.js?ver=4.1.1"></script>
<script id="elementor-pro-frontend-js-before">
var ElementorProFrontendConfig = {"ajaxurl":"https:\/\/staging.fitblissbysk.com\/wp-admin\/admin-ajax.php","nonce":"70ff051558","urls":{"assets":"https:\/\/staging.fitblissbysk.com\/wp-content\/plugins\/elementor-pro\/assets\/","rest":"https:\/\/staging.fitblissbysk.com\/wp-json\/"},"settings":{"lazy_load_background_images":true},"popup":{"hasPopUps":true},"shareButtonsNetworks":{"facebook":{"title":"Facebook","has_counter":true},"twitter":{"title":"Twitter"},"linkedin":{"title":"LinkedIn","has_counter":true},"pinterest":{"title":"Pinterest","has_counter":true},"reddit":{"title":"Reddit","has_counter":true},"vk":{"title":"VK","has_counter":true},"odnoklassniki":{"title":"OK","has_counter":true},"tumblr":{"title":"Tumblr"},"digg":{"title":"Digg"},"skype":{"title":"Skype"},"stumbleupon":{"title":"StumbleUpon","has_counter":true},"mix":{"title":"Mix"},"telegram":{"title":"Telegram"},"pocket":{"title":"Pocket","has_counter":true},"xing":{"title":"XING","has_counter":true},"whatsapp":{"title":"WhatsApp"},"email":{"title":"Email"},"print":{"title":"Print"},"x-twitter":{"title":"X"},"threads":{"title":"Threads"}},"facebook_sdk":{"lang":"en_US","app_id":""},"lottie":{"defaultAnimationUrl":"https:\/\/staging.fitblissbysk.com\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"}};
//# sourceURL=elementor-pro-frontend-js-before
</script>
<script id="elementor-pro-frontend-js" src="<?php echo $base_url; ?>/assets/plugins/elementor-pro/assets/js/frontend.min.js?ver=4.1.1"></script>
<script id="pro-elements-handlers-js" src="<?php echo $base_url; ?>/assets/plugins/elementor-pro/assets/js/elements-handlers.min.js?ver=4.1.1"></script>
<script id="wp-emoji-settings" type="application/json">
{"baseUrl":"https://s.w.org/images/core/emoji/17.0.2/72x72/","ext":".png","svgUrl":"https://s.w.org/images/core/emoji/17.0.2/svg/","svgExt":".svg","source":{"concatemoji":"<?php echo $base_url; ?>/assets/vendor/js/wp-emoji-release.min.js?ver=7.1.2"}}
</script>
<script type="module">
/*! This file is auto-generated */
var e="script#wp-emoji-settings",t=document.querySelector(e);if(!(t instanceof HTMLScriptElement))throw new Error("Element missing: "+e);const r=JSON.parse(t.text),s=(window._wpemojiSettings=r,"wpEmojiSettingsSupports"),o=["flag","emoji"];function i(e){try{var t={supportTests:e,timestamp:(new Date).valueOf()};sessionStorage.setItem(s,JSON.stringify(t))}catch(e){}}function c(e,t,n){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);t=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data);e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(n,0,0);const r=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data);return t.every((e,t)=>e===r[t])}function p(e,t){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);var n=e.getImageData(16,16,1,1);for(let e=0;e<n.data.length;e++)if(0!==n.data[e])return!1;return!0}function u(e,t,n,r){switch(t){case"flag":return n(e,"\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f","\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f")?!1:!n(e,"\ud83c\udde8\ud83c\uddf6","\ud83c\udde8\u200b\ud83c\uddf6")&&!n(e,"\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f","\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");case"emoji":return!r(e,"\ud83e\u1fac8")}return!1}function f(e,t,n,r){let a;const s=(a="undefined"!=typeof WorkerGlobalScope&&self instanceof WorkerGlobalScope?new OffscreenCanvas(300,150):document.createElement("canvas")).getContext("2d",{willReadFrequently:!0}),o=(s.textBaseline="top",s.font="600 32px Arial",{});return e.forEach(e=>{o[e]=t(s,e,n,r)}),o}function a(e){var t=document.createElement("script");t.src=e,t.defer=!0,document.head.appendChild(t)}r.supports={everything:!0,everythingExceptFlag:!0},new Promise(t=>{let n=function(){try{var e=JSON.parse(sessionStorage.getItem(s));if("object"==typeof e&&"number"==typeof e.timestamp&&(new Date).valueOf()<e.timestamp+604800&&"object"==typeof e.supportTests)return e.supportTests}catch(e){}return null}();if(!n){if("undefined"!=typeof Worker&&"undefined"!=typeof OffscreenCanvas&&"undefined"!=typeof URL&&URL.createObjectURL&&"undefined"!=typeof Blob)try{var e="postMessage("+f.toString()+"("+[JSON.stringify(o),u.toString(),c.toString(),p.toString()].join(",")+"));",r=new Blob([e],{type:"text/javascript"});const a=new Worker(URL.createObjectURL(r),{name:"wpTestEmojiSupports"});return void(a.onmessage=e=>{i(n=e.data),a.terminate(),t(n)})}catch(e){}i(n=f(o,u,c,p))}t(n)}).then(e=>{for(const n in e)r.supports[n]=e[n],r.supports.everything=r.supports.everything&&r.supports[n],"flag"!==n&&(r.supports.everythingExceptFlag=r.supports.everythingExceptFlag&&r.supports[n]);var t;r.supports.everythingExceptFlag=r.supports.everythingExceptFlag&&!r.supports.flag,r.supports.everything||((t=r.source||{}).concatemoji?a(t.concatemoji):t.wpemoji&&t.twemoji&&(a(t.twemoji),a(t.wpemoji)))});
//# sourceURL=<?php echo $base_url; ?>/assets/vendor/js/wp-emoji-loader.min.js
</script>
            <script type="text/javascript">
                
                window.addEventListener('elementor/popup/show', function (e) {
                    var ffForms = jQuery('#elementor-popup-modal-' + e.detail.id).find('form.frm-fluent-form');

                    /**
                     * Support conversation form in elementor popup
                     * No regular form found, check for conversational form
                     */
                    if (!ffForms.length) {
                        const elements = document.getElementsByClassName('ffc_conv_form');
                        if (elements.length) {
                            let jsEvent = new CustomEvent('ff-elm-conv-form-event', {
                                detail: elements
                            });
                            document.dispatchEvent(jsEvent);
                        }
                    }
                    if (ffForms.length) {
                        jQuery.each(ffForms, function(index, ffForm) {
                            jQuery(ffForm).trigger('reInitExtras');
                            jQuery(document).trigger('ff_reinit', [ffForm]);
                        });
                    }
                });
                            </script>
            
</body>
</html>
