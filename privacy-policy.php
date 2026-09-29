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
        /* ============ HEADER ============ */
        .header {
            position: sticky;
            inset: 0;
            z-index: 40;
            padding: 0px 15px;
            top: 0;
        }

        .topstrip {
            display: none;
            border-bottom: 1px solid var(--border);
            background: rgba(10, 20, 20, .4);
            backdrop-filter: blur(10px);
            padding: 0 10px;
            border-radius: 0px 0px 10px 10px;
        }

        .topstrip .navrow {
            border-top: 1px solid #1d3529;
        }

        /*   .container.navrow{border-bottom:1px solid var(--border);background:rgba(10,20,20,.4);backdrop-filter:blur(10px)} */
        @media(min-width:768px) {
            .topstrip {
                display: block
            }
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 24px
        }

        @media(min-width:768px) {
            .container {
                padding: 0 40px
            }
        }

        .topstrip .row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 8px 0
        }

        .topstrip .tag {
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: .3em;
            color: rgba(242, 236, 224, .7)
        }

        .topstrip .links {
            display: flex;
            align-items: center;
            gap: 24px;
            font-size: 11px;
            letter-spacing: .25em;
            color: rgba(242, 236, 224, .7)
        }

        .topstrip .links a:hover {
            color: var(--primary)
        }

        .lang .active {
            color: rgba(242, 236, 224, .8)
        }

        .lang {
            color: rgba(242, 236, 224, .4)
        }

        .navrow {
            display: grid;
            grid-template-columns: 1fr auto 1fr;
            align-items: center;
            gap: 24px;
            padding: 10px 0
        }

        @media(min-width:768px) {
            .navrow {
                padding: 0px 0 10px
            }
        }

        .navlist {
            display: none;
            align-items: center;
            gap: 32px
        }

        @media(min-width:1024px) {
            .navlist {
                display: flex
            }
        }

        .navlist .item {
            position: relative
        }

        .navlist a.link {
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: .28em;
            color: var(--fg);
            transition: color .2s
        }

        .navlist a.link:hover,
        .navlist .item.open a.link {
            color: var(--primary)
        }

        .logo {
            display: flex;
            align-items: center;
            justify-content: center
        }

        .logo img {
            height: 48px;
            width: auto
        }

        @media(min-width:768px) {
            .logo img {
                height: 64px
            }
        }

        .right {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: 24px
        }

        .cta {
            display: none;
            align-items: center;
            gap: 8px;
            border-radius: 9999px;
            background: var(--primary);
            color: var(--primary-fg) !important;
            padding: 10px 24px;
            font-size: 11px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: .3em;
            transition: opacity .2s
        }

        .cta:hover {
            opacity: .9
        }

        @media(min-width:1024px) {
            .cta {
                display: inline-flex
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
            transition: all .2s
        }

        .burger:hover {
            border-color: var(--primary);
            color: var(--primary)
        }

        @media(min-width:1024px) {
            .burger {
                display: none
            }
        }

        .burger .bars {
            display: flex;
            flex-direction: column;
            gap: 5px
        }

        .burger .bars span {
            display: block;
            height: 2px;
            width: 20px;
            background: currentColor;
            transition: transform .25s, opacity .25s
        }

        .burger.active .bars span:nth-child(1) {
            transform: translateY(7px) rotate(45deg)
        }

        .burger.active .bars span:nth-child(2) {
            opacity: 0
        }

        .burger.active .bars span:nth-child(3) {
            transform: translateY(-7px) rotate(-45deg)
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
            border: 1px solid var(--border);
            background: rgba(26, 38, 38, .95);
            padding: 40px;
            backdrop-filter: blur(12px);
            box-shadow: 0 30px 80px -40px rgba(0, 0, 0, .6)
        }

        @media(max-height:800px) {
            .mega-inner {
                padding: 24px;
                gap: 24px
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
            border-top: 1px solid var(--border);
            background: rgba(10, 20, 20, .97);
            padding: 16px 20px;
            backdrop-filter: blur(16px)
        }

        @media(min-width:768px) {
            .mobile-inner {
                padding: 20px 40px
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
    
/* Hide Elementor Lightbox and Gallery Item Titles/Captions/Filenames */
.elementor-slideshow__title,
.elementor-slideshow__description,
.elementor-slideshow__footer,
.dialog-lightbox-title,
.dialog-lightbox-description,
.elementor-lightbox .dialog-header,
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
	<title>Privacy Policy - Fit Bliss</title>
	<link rel="canonical" href="/fitbliss/privacy-policy/" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Privacy Policy - Fit Bliss" />
	<meta property="og:description" content="Privacy Policy Home &#8211; Privacy Policy At Fit Bliss, the privacy and security of our clients&#8217; personal information are of paramount importance. This Privacy Policy outlines how we collect, use, disclose, and protect your personal information. By accessing or using our services, you consent to the terms outlined in this Privacy Policy. 1. Information We [&hellip;]" />
	<meta property="og:url" content="/fitbliss/privacy-policy/" />
	<meta property="og:site_name" content="Fit Bliss" />
	<meta property="article:publisher" content="https://www.facebook.com/fitblissbysk/" />
	<meta property="article:modified_time" content="2024-05-06T08:58:21+00:00" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:site" content="@fitblissbysk" />
	<meta name="twitter:label1" content="Est. reading time" />
	<meta name="twitter:data1" content="2 minutes" />
	<script type="application/ld+json" class="yoast-schema-graph">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/staging.fitblissbysk.com\/privacy-policy\/","url":"https:\/\/staging.fitblissbysk.com\/privacy-policy\/","name":"Privacy Policy - Fit Bliss","isPartOf":{"@id":"https:\/\/staging.fitblissbysk.com\/#website"},"datePublished":"2024-04-03T03:57:24+00:00","dateModified":"2024-05-06T08:58:21+00:00","breadcrumb":{"@id":"https:\/\/staging.fitblissbysk.com\/privacy-policy\/#breadcrumb"},"inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/staging.fitblissbysk.com\/privacy-policy\/"]}]},{"@type":"BreadcrumbList","@id":"https:\/\/staging.fitblissbysk.com\/privacy-policy\/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https:\/\/staging.fitblissbysk.com\/"},{"@type":"ListItem","position":2,"name":"Privacy Policy"}]},{"@type":"WebSite","@id":"https:\/\/staging.fitblissbysk.com\/#website","url":"https:\/\/staging.fitblissbysk.com\/","name":"Fit Bliss By SK","description":"","potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https:\/\/staging.fitblissbysk.com\/?s={search_term_string}"},"query-input":{"@type":"PropertyValueSpecification","valueRequired":true,"valueName":"search_term_string"}}],"inLanguage":"en-US"}]}</script>
	<!-- / Yoast SEO plugin. -->


<link rel="alternate" type="application/rss+xml" title="Fit Bliss &raquo; Feed" href="/fitbliss/feed/" />
<link rel="alternate" type="application/rss+xml" title="Fit Bliss &raquo; Comments Feed" href="/fitbliss/comments/feed/" />
<link rel="alternate" type="application/rss+xml" title="Fit Bliss &raquo; Privacy Policy Comments Feed" href="/fitbliss/privacy-policy/feed/" />
<link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="/fitbliss/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fstaging.fitblissbysk.com%2Fprivacy-policy%2F" />
<link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="/fitbliss/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fstaging.fitblissbysk.com%2Fprivacy-policy%2F&#038;format=xml" />
<style id="wp-img-auto-sizes-contain-inline-css">
img:is([sizes=auto i],[sizes^="auto," i]){contain-intrinsic-size:3000px 1500px}
/*# sourceURL=wp-img-auto-sizes-contain-inline-css */
</style>
<link rel='stylesheet' id='fluentform-elementor-widget-css' href='/fitbliss/wp-content/plugins/fluentform/assets/css/fluent-forms-elementor-widget.css?ver=6.2.14' media='all' />
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
<link rel='stylesheet' id='wp-block-library-css' href='/fitbliss/wp-includes/css/dist/block-library/style.min.css?ver=7.1.2' media='all' />
<style id="popup-builder-block-popup-builder-style-inline-css">
.pbb-noscroll{overflow:hidden}.popupkit-campaigns-template-default{background-color:transparent}.popup-builder{position:relative;width:100%;z-index:1}.popup-builder-modal{align-items:center;display:none;justify-content:center;opacity:0;pointer-events:all;transition:opacity .15s linear}.popup-builder-container{animation-duration:1.2s;max-height:100%;max-width:100%;overflow:visible;pointer-events:all;position:relative}.popup-builder-container .popupkit-container-overlay{height:100%;left:0;opacity:.5;position:absolute;top:0;transition:.3s;width:100%}.popup-builder-content{background-color:#fff;border-radius:3px;box-sizing:border-box;line-height:1.5;max-height:100vh;max-width:100vw;overflow:auto;padding:0;position:relative;width:100%}.popup-builder-content-credit{background-color:#fff;border-radius:3px;bottom:-29px;cursor:pointer;display:flex;left:50%;position:absolute;transform:translate(-50%);z-index:9999}.popup-builder-content-credit a{color:#000;font-size:14px;font-weight:500;text-decoration:none}.popup-builder-content-credit a svg{position:relative;top:3px}.popup-builder-close{color:transparent;cursor:pointer;display:flex;font-size:14px;line-height:1;margin-top:0;opacity:1;pointer-events:all;position:absolute;right:20px;text-decoration:none;top:20px;transition:all .4s ease;z-index:9999}:root{--pbb-popup-animate-duration:1s}.popup_animated{animation-duration:1s;animation-duration:var(--pbb-popup-animate-duration);animation-fill-mode:both}.popup_animated.reverse{animation-direction:reverse;animation-fill-mode:forwards}@keyframes fadeIn{0%{opacity:0}to{opacity:1}}.fadeIn{animation-name:fadeIn}@keyframes fadeInDown{0%{opacity:0;transform:translate3d(0,-100%,0)}to{opacity:1;transform:none}}.fadeInDown{animation-name:fadeInDown}@keyframes fadeInLeft{0%{opacity:0;transform:translate3d(-100%,0,0)}to{opacity:1;transform:none}}.fadeInLeft{animation-name:fadeInLeft}@keyframes fadeInRight{0%{opacity:0;transform:translate3d(100%,0,0)}to{opacity:1;transform:none}}.fadeInRight{animation-name:fadeInRight}@keyframes fadeInUp{0%{opacity:0;transform:translate3d(0,100%,0)}to{opacity:1;transform:none}}.fadeInUp{animation-name:fadeInUp}

/*# sourceURL=/fitbliss/wp-content/plugins/popup-builder-block/build/blocks/popup-builder/style-index.css */
</style>
<style id="popup-builder-block-button-style-inline-css">
.pbb-btn{align-items:center;color:#fff;cursor:pointer;display:inline-flex!important;justify-content:center;text-decoration:none;transition:.3s}.pbb-btn .gkit-icon{transition:.3s;vertical-align:middle}.pbb-btn:hover{background-color:#666}.pbb-btn:hover:before{opacity:1}.pbb-btn:before{background-size:102% 102%;border-radius:inherit;content:"";height:100%;left:0;opacity:0;position:absolute;top:0;transition:all .4s ease;width:100%;z-index:-1}.pbb-btn span{transition:.3s}

/*# sourceURL=/fitbliss/wp-content/plugins/popup-builder-block/build/blocks/button/style-index.css */
</style>
<style id="popup-builder-block-form-style-inline-css">
.pbb-form,.pbb-form__field{display:flex;flex-wrap:wrap}.pbb-form__field{align-items:center;position:relative;width:100%}.pbb-form__field-privacy-notice{display:block}.pbb-form__label{display:block;font-size:16px;margin-bottom:5px}.pbb-form__label.required:after{color:red;content:"*";margin-left:5px}.pbb-form__input-wrap{align-items:center;background-color:#fff;border:1px solid #ccc;border-radius:5px;display:flex;position:relative;transition:all .3s ease-in-out;width:100%}.pbb-form__input-wrap .pbb-form__input{border:none;border-radius:5px;font-size:16px;outline:none;padding:10px;transition:all .3s ease-in-out;width:100%}.pbb-form__input-wrap .pbb-form__input:focus-visible{outline:none}.pbb-form__input-wrap .pbb-form__input:focus{border:none;box-shadow:none;outline:none}.pbb-form__submit-btn{align-items:center;background:#fff;border:1px solid #ccc;border-radius:5px;color:#333;cursor:pointer;display:flex;flex-direction:row;font-size:16px;justify-content:center;padding:10px 20px;transition:all .3s;width:100%}.pbb-form__submit-btn .pbb-form-loader{display:inline-block;height:15px;left:45%;position:absolute;top:41%;transform:translate(-50%,-50%);width:auto}.pbb-form__submit-btn .pbb-form-loader:before{animation:ripple-scale 1s ease-out infinite;border:1px solid #fff;border-radius:50%;color:#5b8c51;content:"";height:20px;position:absolute;width:20px;z-index:-1}@keyframes ripple-scale{0%{opacity:1;transform:scale(0)}50%{opacity:.7;transform:scale(1.2)}to{opacity:0;transform:scale(1.5)}}.pbb-form__submit-btn .btn-text{line-height:1}.pbb-form__submit-btn .input-icon{display:flex}.pbb-form__submit-btn:hover{background:#333;color:#fff}.pbb-form__submit-btn[disabled]{pointer-events:none}.pbb-form-success{background-color:#fff;border-radius:4px;color:#000;font-size:16px;font-weight:500;margin-top:8px;text-align:center;width:100%}.pbb-form .error-message{color:red;font-size:12px}.pbb-form__field-checkbox,.pbb-form__field-radio{display:block}.pbb-form__options-wrap{display:inline-grid}.pbb-form__option .pbb-form__option-input{display:none}.pbb-form__option .pbb-form__option-label{cursor:pointer;padding-left:28px;position:relative}.pbb-form__option .pbb-form__option-label:before{background:#fff;border:1.5px solid #cbd5e1;border-radius:4px;content:"";height:14px;left:0;position:absolute;top:50%;transform:translateY(-50%);transition:all .2s ease;width:14px}.pbb-form__option .pbb-form__option-label:after{border-bottom:2px solid #fff;border-right:2px solid #fff;content:"";height:7px;left:6px;opacity:0;position:absolute;top:50%;transform:translateY(-60%) rotate(45deg);transition:opacity .2s ease;width:3px}.pbb-form__option .pbb-form__option-input[type=checkbox]:checked+.pbb-form__option-label:before{background:#2563eb;border-color:#2563eb}.pbb-form__option .pbb-form__option-input[type=checkbox]:checked+.pbb-form__option-label:after{opacity:1}.pbb-form__option .pbb-form__option-input[type=radio]+.pbb-form__option-label:before{border-radius:50%}.pbb-form__option .pbb-form__option-input[type=radio]+.pbb-form__option-label:after{background:#2563eb;border:none;border-radius:50%;height:8px;left:4px;top:50%;transform:translateY(-50%);width:8px}.pbb-form__option .pbb-form__option-input[type=radio]:checked+.pbb-form__option-label:before{background:#fff;border-color:#2563eb}.pbb-form__option .pbb-form__option-input[type=radio]:checked+.pbb-form__option-label:after{opacity:1}.pbb-form__option-label{font-size:16px}.popup-builder .pbb-form__submit-btn{display:inherit}.pbb-form .pbb-form__hp{height:1px!important;left:-9999px!important;opacity:0;overflow:hidden;pointer-events:none;position:absolute!important;top:auto!important;width:1px!important}

/*# sourceURL=/fitbliss/wp-content/plugins/popup-builder-block/build/blocks/form/style-index.css */
</style>
<style id="popup-builder-block-advanced-paragraph-style-inline-css">
.popupkit-adv-paragraph .popupkit-adv-paragraph-text{margin-bottom:0;margin-top:0}.popupkit-adv-paragraph .popupkit-adv-paragraph-text a{display:inline-block;transition:.3s}.popupkit-adv-paragraph .popupkit-adv-paragraph-text strong{display:inline-block;font-weight:900;transition:.3s}.popupkit-adv-paragraph .popupkit-adv-paragraph-text strong a{display:inline-block;transition:.3s}.popupkit-adv-paragraph .popupkit-focused-text-fill strong{-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-image:-webkit-linear-gradient(-35deg,#2575fc,#6a11cb);color:#2575fc}.popupkit-adv-paragraph .popupkit-drop-cap-letter:first-letter{float:left;font-size:45px;line-height:50px}

/*# sourceURL=/fitbliss/wp-content/plugins/popup-builder-block/build/blocks/advanced-paragraph/style-index.css */
</style>
<style id="popup-builder-block-advanced-image-style-inline-css">
.wp-block-popup-builder-block-advanced-image img{border:none;border-radius:0;display:inline-block;height:auto;max-width:100%;vertical-align:middle}.wp-block-popup-builder-block-advanced-image.alignfull img,.wp-block-popup-builder-block-advanced-image.alignwide img{width:100%}.wp-block-popup-builder-block-advanced-image .popupkit-image-block{display:inline-block}.wp-block-popup-builder-block-advanced-image .popupkit-image-block a{text-decoration:none}.wp-block-popup-builder-block-advanced-image .popupkit-container-overlay:after,.wp-block-popup-builder-block-advanced-image .popupkit-container-overlay:before{content:"";height:100%;left:0;pointer-events:none;position:absolute;top:0;width:100%;z-index:1}

/*# sourceURL=/fitbliss/wp-content/plugins/popup-builder-block/build/blocks/advanced-image/style-index.css */
</style>
<style id="popup-builder-block-icon-style-inline-css">
.wp-block-popup-builder-block-icon{display:flex}.wp-block-popup-builder-block-icon .popupkit-icons{display:inline-flex;transition:.3s}.wp-block-popup-builder-block-icon .popupkit-icons svg{display:block}

/*# sourceURL=/fitbliss/wp-content/plugins/popup-builder-block/build/blocks/icon/style-index.css */
</style>
<style id="popup-builder-block-container-style-inline-css">
.gkit-block__inner{margin-left:auto;margin-right:auto}.gkit-block-video-wrap{height:100%;overflow:hidden;position:absolute;width:100%}.gkit-block-video-wrap video{background-size:cover;height:100%;object-fit:cover;width:100%}.wp-block-popup-builder-block-container{margin-left:auto;margin-right:auto;position:relative;transition:background var(--gkit-bg-hover-transition,var(--gutenkit-preset-global-transition_duration,.4s)) var(--gutenkit-preset-global-transition_timing_function,ease),border var(--gkit-bg-border-transition,var(--gutenkit-preset-global-transition_duration,.4s)) var(--gutenkit-preset-global-transition_timing_function,ease),box-shadow var(--gkit-bg-hover-transition,var(--gutenkit-preset-global-transition_duration,.4s)) var(--gutenkit-preset-global-transition_timing_function,ease),border-radius var(--gkit-bg-hover-transition,var(--gutenkit-preset-global-transition_duration,.4s)) var(--gutenkit-preset-global-transition_timing_function,ease);z-index:1}.wp-block-popup-builder-block-container>.gkit-block__inner{display:flex}.wp-block-popup-builder-block-container .gkit-container-overlay{height:100%;left:0;position:absolute;top:0;width:100%}.wp-block-popup-builder-block-container .wp-block-popup-builder-block-container{flex-grow:0;flex-shrink:1;margin-left:unset;margin-right:unset}.wp-block-popup-builder-block-container .wp-block-popup-builder-block-container.alignfull{flex-shrink:1;width:100%}.wp-block-popup-builder-block-container .wp-block-popup-builder-block-container.alignwide{flex-shrink:1}.wp-block-popup-builder-block-container .gkit-image-scroll-container{height:100%;left:0;overflow:hidden;position:absolute;top:0;width:100%;z-index:-1}.wp-block-popup-builder-block-container .gkit-image-scroll-layer{height:100%;left:0;position:absolute;top:0;width:100%}.wp-block-popup-builder-block-container .is-style-wide{width:100%}.wp-site-blocks .wp-block-popup-builder-block-container .gkit-block-video-wrap{z-index:-1}

/*# sourceURL=/fitbliss/wp-content/plugins/popup-builder-block/build/blocks/container/style-index.css */
</style>
<style id="popup-builder-block-heading-style-inline-css">
.wp-block-popup-builder-block-heading,.wp-block-popup-builder-block-heading.popupkit-heading-has-border .popupkit-heading-title{position:relative}.wp-block-popup-builder-block-heading.popupkit-heading-has-border .popupkit-heading-title:before{background:linear-gradient(180deg,#ff512f,#dd2476);content:"";display:block;height:100%;left:0;position:absolute;width:4px}.wp-block-popup-builder-block-heading.popupkit-heading-has-border.popupkit-heading-border-position-end .popupkit-heading-title:before{left:auto;right:0}.wp-block-popup-builder-block-heading .popupkit-heading-title{margin:0 0 20px;position:relative;transition:all .3s ease-in-out;z-index:1}.wp-block-popup-builder-block-heading .popupkit-heading-title strong{font-weight:900;transition:color .3s ease-in-out}.wp-block-popup-builder-block-heading .popupkit-heading-title strong a{transition:.3s}.wp-block-popup-builder-block-heading .popupkit-heading-title.popupkit-heading-title-text-fill strong{-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-image:-webkit-linear-gradient(-35deg,#2575fc,#6a11cb);color:#2575fc}.wp-block-popup-builder-block-heading .popupkit-heading-subtitle{margin:8px 0 16px}.wp-block-popup-builder-block-heading .popupkit-heading-subtitle-has-border{display:inline-block}.wp-block-popup-builder-block-heading .popupkit-heading-subtitle-has-border:after,.wp-block-popup-builder-block-heading .popupkit-heading-subtitle-has-border:before{background-color:#d7d7d7;content:"";display:inline-block;height:3px;vertical-align:middle;width:40px}.wp-block-popup-builder-block-heading .popupkit-heading-subtitle-has-border:before{margin-right:15px}.wp-block-popup-builder-block-heading .popupkit-heading-subtitle-has-border:after{margin-left:15px}.wp-block-popup-builder-block-heading .popupkit-heading-subtitle-has-outline:not(.popupkit-heading-subtitle-has-border){border:2px solid #d7d7d7;display:inline-block}.wp-block-popup-builder-block-heading .popupkit-heading-subtitle-has-text-fill{-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-image:-webkit-linear-gradient(-35deg,#2575fc,#6a11cb);color:#2575fc}.wp-block-popup-builder-block-heading .popupkit-heading-shadow-text{color:transparent;font-family:Archivo,sans-serif;font-size:90px;font-weight:700;letter-spacing:-6px;line-height:120px;position:absolute;white-space:nowrap;z-index:0;-webkit-text-fill-color:#fff;-webkit-text-stroke-width:1px;-webkit-text-stroke-color:hsla(0,0%,6%,.1);transform:translate(-50%,-50%)}.wp-block-popup-builder-block-heading .popupkit-heading-separetor-style-none{display:none}.wp-block-popup-builder-block-heading .popupkit-heading-separetor-divider{background:currentColor;border-radius:2px;box-sizing:border-box;color:#2575fc;height:4px;margin-left:27px;position:relative;width:30px}.wp-block-popup-builder-block-heading .popupkit-heading-separetor-divider:before{background-color:currentColor;border-radius:50%;box-shadow:9px 0 0 0 currentColor,18px 0 0 0 currentColor;content:"";display:inline-block;height:4px;left:-27px;position:absolute;top:0;width:4px}.wp-block-popup-builder-block-heading .popupkit-heading-separetor.popupkit-heading-separetor-style-dotted .popupkit-heading-separetor-divider{width:100px}.wp-block-popup-builder-block-heading .popupkit-heading-separetor.popupkit-heading-separetor-style-solid .popupkit-heading-separetor-divider{background:currentColor;border-radius:0;margin-left:0;width:150px}.wp-block-popup-builder-block-heading .popupkit-heading-separetor.popupkit-heading-separetor-style-solid .popupkit-heading-separetor-divider:before{display:none}.wp-block-popup-builder-block-heading .popupkit-heading-separetor.popupkit-heading-separetor-style-solid-star .popupkit-heading-separetor-divider{background:#2575fc;background:linear-gradient(90deg,currentColor,currentColor 38%,hsla(0,0%,100%,0) 0,hsla(0,0%,100%,0) 62%,currentColor 0,currentColor);color:#2575fc;height:2px;margin-left:0;position:relative;width:135px}.wp-block-popup-builder-block-heading .popupkit-heading-separetor.popupkit-heading-separetor-style-solid-star .popupkit-heading-separetor-divider:before{display:none}.wp-block-popup-builder-block-heading .popupkit-heading-separetor.popupkit-heading-separetor-style-solid-star .popupkit-heading-separetor-divider:after{background-color:currentColor;content:"";height:14.3px;left:50%;position:absolute;top:0;top:-7.15px;transform:translateX(-50%) rotate(45deg);width:14.3px}.wp-block-popup-builder-block-heading .popupkit-heading-separetor.popupkit-heading-separetor-style-solid-bullet .popupkit-heading-separetor-divider{background:#2575fc;background:linear-gradient(90deg,currentColor,currentColor 38%,hsla(0,0%,100%,0) 0,hsla(0,0%,100%,0) 62%,currentColor 0,currentColor);color:#2575fc;height:2px;margin-left:0;position:relative;width:100px}.wp-block-popup-builder-block-heading .popupkit-heading-separetor.popupkit-heading-separetor-style-solid-bullet .popupkit-heading-separetor-divider:before{display:none}.wp-block-popup-builder-block-heading .popupkit-heading-separetor.popupkit-heading-separetor-style-solid-bullet .popupkit-heading-separetor-divider:after{background-color:currentColor;border-radius:50%;content:"";height:14.3px;left:50%;position:absolute;top:0;top:-7.15px;transform:translateX(-50%);width:14.3px}.wp-block-popup-builder-block-heading .popupkit-heading-description{display:inline-block}.wp-block-popup-builder-block-heading .popupkit-heading-description p{margin:0}.wp-block-popup-builder-block-heading.has-text-align-center .popupkit-heading-separetor-divider{margin:0 auto!important}.wp-block-popup-builder-block-heading.has-text-align-right .popupkit-heading-separetor-divider{margin-left:auto!important}

/*# sourceURL=/fitbliss/wp-content/plugins/popup-builder-block/build/blocks/heading/style-index.css */
</style>
<style id="global-styles-inline-css">
:root{--wp--preset--aspect-ratio--square: 1;--wp--preset--aspect-ratio--4-3: 4/3;--wp--preset--aspect-ratio--3-4: 3/4;--wp--preset--aspect-ratio--3-2: 3/2;--wp--preset--aspect-ratio--2-3: 2/3;--wp--preset--aspect-ratio--16-9: 16/9;--wp--preset--aspect-ratio--9-16: 9/16;--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgb(6,147,227) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgb(252,185,0) 0%,rgb(255,105,0) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgb(255,105,0) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--font-family--bebas-neue: "Bebas Neue", sans-serif;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgb(255, 255, 255), 6px 6px rgb(0, 0, 0);--wp--preset--shadow--crisp: 6px 6px 0px rgb(0, 0, 0);}.wp-block-button{--wp--preset--dimension--25: 25%;--wp--preset--dimension--50: 50%;--wp--preset--dimension--75: 75%;--wp--preset--dimension--100: 100%;}:root { --wp--style--global--content-size: 800px;--wp--style--global--wide-size: 1200px; }:where(body) { margin: 0; }.wp-site-blocks > .alignleft { float: left; margin-right: 2em; }.wp-site-blocks > .alignright { float: right; margin-left: 2em; }.wp-site-blocks > .aligncenter { justify-content: center; margin-left: auto; margin-right: auto; }:where(.wp-site-blocks) > * { margin-block-start: 24px; margin-block-end: 0; }:where(.wp-site-blocks) > :first-child { margin-block-start: 0; }:where(.wp-site-blocks) > :last-child { margin-block-end: 0; }:root { --wp--style--block-gap: 24px; }:root :where(.is-layout-flow) > :first-child{margin-block-start: 0;}:root :where(.is-layout-flow) > :last-child{margin-block-end: 0;}:root :where(.is-layout-flow) > *{margin-block-start: 24px;margin-block-end: 0;}:root :where(.is-layout-constrained) > :first-child{margin-block-start: 0;}:root :where(.is-layout-constrained) > :last-child{margin-block-end: 0;}:root :where(.is-layout-constrained) > *{margin-block-start: 24px;margin-block-end: 0;}:root :where(.is-layout-flex){gap: 24px;}:root :where(.is-layout-grid){gap: 24px;}.is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}.is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}.is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}.is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}.is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}.is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}.is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}.is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}.is-layout-flex{flex-wrap: wrap;align-items: center;}.is-layout-flex > :is(*, div){margin: 0;}body .is-layout-grid{display: grid;}.is-layout-grid > :is(*, div){margin: 0;}body{padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 0px;}:root :where(.wp-element-button, .wp-block-button__link){background-color: #32373c;border-width: 0;color: #fff;font-family: inherit;font-size: inherit;font-style: inherit;font-weight: inherit;letter-spacing: inherit;line-height: inherit;padding-top: calc(0.667em + 2px);padding-right: calc(1.333em + 2px);padding-bottom: calc(0.667em + 2px);padding-left: calc(1.333em + 2px);text-decoration: none;text-transform: inherit;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}.has-bebas-neue-font-family{font-family: var(--wp--preset--font-family--bebas-neue) !important;}
:root :where(.wp-block-icon svg){width: 24px;}
:root :where(.wp-block-pullquote){font-size: 1.5em;line-height: 1.6;}
/*# sourceURL=global-styles-inline-css */
</style>
<link rel='stylesheet' id='gutenkit-third-party-editor-compatibility-css' href='/fitbliss/wp-content/plugins/popup-builder-block/build/compatibility/frontend.css?ver=fa9b2727afc9d74855b4' media='all' />
<link rel='stylesheet' id='qi-addons-for-elementor-grid-style-css' href='/fitbliss/wp-content/plugins/qi-addons-for-elementor/assets/css/grid.min.css?ver=1.11.1' media='all' />
<link rel='stylesheet' id='qi-addons-for-elementor-helper-parts-style-css' href='/fitbliss/wp-content/plugins/qi-addons-for-elementor/assets/css/helper-parts.min.css?ver=1.11.1' media='all' />
<link rel='stylesheet' id='qi-addons-for-elementor-style-css' href='/fitbliss/wp-content/plugins/qi-addons-for-elementor/assets/css/main.min.css?ver=1.11.1' media='all' />
<link rel='stylesheet' id='hello-elementor-css' href='/fitbliss/wp-content/themes/hello-elementor/assets/css/reset.css?ver=3.4.6' media='all' />
<link rel='stylesheet' id='hello-elementor-theme-style-css' href='/fitbliss/wp-content/themes/hello-elementor/assets/css/theme.css?ver=3.4.6' media='all' />
<link rel='stylesheet' id='hello-elementor-header-footer-css' href='/fitbliss/wp-content/themes/hello-elementor/assets/css/header-footer.css?ver=3.4.6' media='all' />
<link rel='stylesheet' id='elementor-frontend-css' href='/fitbliss/wp-content/plugins/elementor/assets/css/frontend.min.css?ver=4.2.4' media='all' />
<link rel='stylesheet' id='elementor-post-21-css' href='/fitbliss/wp-content/uploads/elementor/css/post-21.css?ver=1790121883' media='all' />
<link rel='stylesheet' id='widget-image-css' href='/fitbliss/wp-content/plugins/elementor/assets/css/widget-image.min.css?ver=4.2.4' media='all' />
<link rel='stylesheet' id='widget-nav-menu-css' href='/fitbliss/wp-content/plugins/elementor-pro/assets/css/widget-nav-menu.min.css?ver=4.1.1' media='all' />
<link rel='stylesheet' id='swiper-css' href='/fitbliss/wp-content/plugins/qi-addons-for-elementor/assets/plugins/swiper/8.4.5/swiper.min.css?ver=8.4.5' media='all' />
<link rel='stylesheet' id='e-swiper-css' href='/fitbliss/wp-content/plugins/elementor/assets/css/conditionals/e-swiper.min.css?ver=4.2.4' media='all' />
<link rel='stylesheet' id='widget-social-icons-css' href='/fitbliss/wp-content/plugins/elementor/assets/css/widget-social-icons.min.css?ver=4.2.4' media='all' />
<link rel='stylesheet' id='e-apple-webkit-css' href='/fitbliss/wp-content/plugins/elementor/assets/css/conditionals/apple-webkit.min.css?ver=4.2.4' media='all' />
<link rel='stylesheet' id='widget-heading-css' href='/fitbliss/wp-content/plugins/elementor/assets/css/widget-heading.min.css?ver=4.2.4' media='all' />
<link rel='stylesheet' id='widget-icon-list-css' href='/fitbliss/wp-content/plugins/elementor/assets/css/widget-icon-list.min.css?ver=4.2.4' media='all' />
<link rel='stylesheet' id='fluent-form-styles-css' href='/fitbliss/wp-content/plugins/fluentform/assets/css/fluent-forms-public.css?ver=6.2.14' media='all' />
<link rel='stylesheet' id='fluentform-public-default-css' href='/fitbliss/wp-content/plugins/fluentform/assets/css/fluentform-public-default.css?ver=6.2.14' media='all' />
<link rel='stylesheet' id='e-popup-css' href='/fitbliss/wp-content/plugins/elementor-pro/assets/css/conditionals/popup.min.css?ver=4.1.1' media='all' />
<link rel='stylesheet' id='elementor-post-3-css' href='/fitbliss/wp-content/uploads/elementor/css/post-3.css?ver=1790581480' media='all' />
<link rel='stylesheet' id='elementor-post-27-css' href='/fitbliss/wp-content/uploads/elementor/css/post-27.css?ver=1790121883' media='all' />
<link rel='stylesheet' id='elementor-post-29-css' href='/fitbliss/wp-content/uploads/elementor/css/post-29.css?ver=1790121883' media='all' />
<link rel='stylesheet' id='elementor-post-1638-css' href='/fitbliss/wp-content/uploads/elementor/css/post-1638.css?ver=1790121883' media='all' />
<link rel='stylesheet' id='chaty-front-css-css' href='/fitbliss/wp-content/plugins/chaty/dist/css/style.css?ver=3.6.11785238286' media='all' />
<link rel='stylesheet' id='elementor-gf-local-inter-css' href='/fitbliss/wp-content/uploads/elementor/google-fonts/css/inter.css?ver=1749298517' media='all' />
<link rel='stylesheet' id='elementor-gf-local-roboto-css' href='/fitbliss/wp-content/uploads/elementor/google-fonts/css/roboto.css?ver=1749298521' media='all' />
<script id="jquery-core-js" src="/fitbliss/wp-includes/js/jquery/jquery.min.js?ver=3.7.1"></script>
<script id="jquery-migrate-js" src="/fitbliss/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1"></script>
<link rel="https://api.w.org/" href="/fitbliss/wp-json/" /><link rel="alternate" title="JSON" type="application/json" href="/fitbliss/wp-json/wp/v2/pages/3" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="/fitbliss/xmlrpc.php?rsd" />
<meta name="generator" content="WordPress 7.1.2" />
<link rel='shortlink' href='/fitbliss/?p=3' />
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
@font-face{font-family:"Bebas Neue";font-style:normal;font-weight:400;font-display:fallback;src:url('/fitbliss/wp-content/uploads/fonts/JTUSjIg69CK48gW7PXooxWtrygbi49c.woff2') format('woff2');}
</style>
<link rel="icon" href="/fitbliss/wp-content/uploads/2024/04/cropped-LOGO-copy-1-32x32.png" sizes="32x32" />
<link rel="icon" href="/fitbliss/wp-content/uploads/2024/04/cropped-LOGO-copy-1-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon" href="/fitbliss/wp-content/uploads/2024/04/cropped-LOGO-copy-1-180x180.png" />
<meta name="msapplication-TileImage" content="/fitbliss/wp-content/uploads/2024/04/cropped-LOGO-copy-1-270x270.png" />
<style id="wp-custom-css">
.chaty {
    fill: black !important;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}
</style>
</head>

<body class="privacy-policy wp-singular page-template-default page page-id-3 wp-embed-responsive wp-theme-hello-elementor qodef-qi--no-touch qi-addons-for-elementor-1.11.1 hello-elementor-default elementor-default elementor-kit-21 elementor-page elementor-page-3">

    
        <a class="skip-link screen-reader-text" href="#content">
        Skip to content    </a>
    
        <header class="header" id="header">
        <!-- Top strip -->
        <div class="topstrip">
            <div class="container row">
                <span class="tag">Luxury Wellness Destination · Bhopal</span>
                <div class="links">
                    <a href="mailto:info@fitblissbysk.com"><span class="__cf_email__" data-cfemail="066f68606946606f72646a6f7575647f756d2865696b">info@fitblissbysk.com</span></a>
                    <a href="tel:+917470787012">+91 74707 87012</a>
                    <a href="tel:+917470787014">+91 74707 87014</a>
                </div>
            </div>
            <!-- Main nav -->
            <div class="container navrow">
                <nav class="navlist" id="leftNav">
        <div class="item" data-name="Home"><a class="link" href="/fitbliss/">Home</a></div>
        <div class="item" data-name="About Us"><a class="link" href="/fitbliss/about/">About Us</a></div>
        <div class="item" data-name="Services"><a class="link" href="/fitbliss/gym/">Services</a></div>
        <div class="item" data-name="Membership"><a class="link" href="/fitbliss/membership/">Membership</a></div>
      </nav>

                <a href="/fitbliss/" class="logo">
                    <img src="/fitbliss/wp-content/uploads/2024/04/New-LoGO-for-FitBliss1-copy-e1719230950970.png"
                        alt="FitBliss by Shruti Kapoor" />
                </a>

                <div class="right">
                    <nav class="navlist" id="rightNav">
          <div class="item" data-name="Gallery"><a class="link" href="/fitbliss/gallery/">Gallery</a></div>
          <div class="item" data-name="Blog"><a class="link" href="/fitbliss/blog/">Blog</a></div>
          <div class="item" data-name="Trainers"><a class="link" href="/fitbliss/trainers/">Trainers</a></div>
          <div class="item" data-name="Contact"><a class="link" href="/fitbliss/contact/">Contact</a></div>
        </nav>
                    <a href="tel:+917470787014" class="cta">Call Us</a>
                    <button class="burger" id="burger" aria-label="Open menu">
                        <div class="bars"><span></span><span></span><span></span></div>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mega Menu -->
        <div class="mega" id="mega">
            <div class="container">
                <div class="mega-inner" id="megaInner"></div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="mobile" id="mobile">
            <div class="container mobile-inner">
                <nav id="mobileNav"></nav>
                <a href="#join" class="m-cta">Book a free trial →</a>
            </div>
        </div>
    </header>

    <script>
        const nav = ["Home", "About Us", "Services", "Membership", "Gallery", "Blog", "Trainers", "Contact"];

        const megaMenus = {
            "About Us": {
                feature: {
                    tag: "Our Story",
                    title: "Where Wellness Meets Luxury",
                    body: "Founded by Dr. Shruti Kapoor — a Radiologist turned wellness curator, inspired by her own transformation through Pilates in Mumbai.",
                    img: "/fitbliss/wp-content/uploads/2026/06/DSC_2491-scaled.jpg",
                    href: "/fitbliss/about/"
                },
                cols: [
                    {
                        heading: "About FitBliss",
                        items: [
                            {
                                label: "The Story",
                                href: "/fitbliss/about/",
                                hint: "Vision · Journey · Values",
                                feature: {
                                    tag: "About FitBliss",
                                    title: "The Story",
                                    body: "A vision born from personal transformation — discover how FitBliss came to be the luxury wellness destination it is today.",
                                    img: "/fitbliss/wp-content/uploads/2024/06/2.jpg",
                                    href: "/fitbliss/about/"
                                }
                            }
                        ]
                    },
                    {
                        heading: "Leadership",
                        items: [
                            {
                                label: "Meet the Founder",
                                href: "/fitbliss/founder/",
                                hint: "Dr. Shruti Kapoor",
                                feature: {
                                    tag: "Leadership",
                                    title: "Meet the Founder",
                                    body: "Dr. Shruti Kapoor — Radiologist, wellness curator, and the visionary mind behind FitBliss.",
                                    img: "/fitbliss/wp-content/uploads/2026/07/IMG-20250804-WA0081.webp",
                                    position: "center 20%",
                                    href: "/fitbliss/founder/"
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
                    img: "/fitbliss/wp-content/uploads/2026/07/DSC_3887-scaled.jpg",
                    href: "/fitbliss/gym/"
                },
                cols: [
                    {
                        heading: "Gym & Fitness",
                        items: [
                            { label: "Gym & Strength", href: "/fitbliss/gym/", hint: "Training", feature: { tag: "Fitness", title: "Gym & Strength", body: "State-of-the-art equipment.", img: "/fitbliss/wp-content/uploads/2026/07/DSC_3887-scaled.jpg", href: "/fitbliss/gym/" } },
                            { label: "Personal Training", href: "/fitbliss/personal-training/", hint: "Coaching", feature: { tag: "Fitness", title: "Personal Training", body: "Expert guidance for your goals.", img: "/fitbliss/wp-content/uploads/2026/07/DSC_3593-scaled.jpg", href: "/fitbliss/personal-training/" } },
                            { label: "Functional Training", href: "/fitbliss/functional-training/", hint: "Agility", feature: { tag: "Fitness", title: "Functional Training", body: "Enhance daily movement and strength.", img: "/fitbliss/wp-content/uploads/2026/07/DSC_3557-scaled.jpg", href: "/fitbliss/functional-training/" } },
                            { label: "Spinning Bike", href: "/fitbliss/spinning/", hint: "Cardio", feature: { tag: "Fitness", title: "Spinning Bike", body: "High-intensity cardio on bikes.", img: "/fitbliss/wp-content/uploads/2026/07/IMG_3724-scaled.jpg", href: "/fitbliss/spinning/" } }
                        ]
                    },
                    {
                        heading: "Yoga & Pilates",
                        items: [
                            { label: "Pilates", href: "/fitbliss/pilates/", hint: '<img src="/fitbliss/wp-content/uploads/2026/07/YKBI.png" alt="YKBI" style="height:40px;width:auto;vertical-align:middle;display:inline-block;" />', feature: { tag: "Yoga", title: "Pilates", body: "Strengthen core and flexibility.", img: "/fitbliss/wp-content/uploads/2026/07/DSC04177_11zon-1.jpg", href: "/fitbliss/pilates/" } },
                            { label: "Traditional Yoga", href: "/fitbliss/traditional-yoga/", hint: "Mind & Body", feature: { tag: "Yoga", title: "Traditional Yoga", body: "Classic poses and breathwork.", img: "/fitbliss/wp-content/uploads/2026/07/0Z8_2468-scaled.jpg", href: "/fitbliss/traditional-yoga/" } },
                            { label: "Aerial Yoga", href: "/fitbliss/aerial-yoga/", hint: "Anti-gravity", feature: { tag: "Yoga", title: "Aerial Yoga", body: "Supported inversions and deep stretches.", img: "/fitbliss/wp-content/uploads/2026/07/0Z8_2468-scaled.jpg", href: "/fitbliss/aerial-yoga/" } },
                            { label: "Aquatic Wellness", href: "/fitbliss/aquatic-wellness/", hint: "Water Therapy", feature: { tag: "Yoga", title: "Aquatic Wellness", body: "Low impact water workouts.", img: "/fitbliss/wp-content/uploads/2026/07/IMG_0567-scaled.jpg", href: "/fitbliss/aquatic-wellness/" } }
                        ]
                    },
                    {
                        heading: "Sports & Dance",
                        items: [
                            { label: "Boxing", href: "/fitbliss/boxing/", hint: "Combat", feature: { tag: "Sports", title: "Boxing", body: "Build endurance and power.", img: "/fitbliss/wp-content/uploads/2026/07/IMG_3714-scaled.jpg", href: "/fitbliss/boxing/" } },
                            { label: "Zumba", href: "/fitbliss/zumba/", hint: "Dance Fitness", feature: { tag: "Sports", title: "Zumba", body: "Fun, dance-based cardio.", img: "/fitbliss/wp-content/uploads/2026/07/IMG_3730-scaled.jpg", href: "/fitbliss/zumba/" } },
                            { label: "Dance Classes", href: "/fitbliss/dance/", hint: "Choreography", feature: { tag: "Sports", title: "Dance Classes", body: "Learn routines and stay fit.", img: "/fitbliss/wp-content/uploads/2026/07/IMG_3730-scaled.jpg", href: "/fitbliss/dance/" } },
                            { label: "Squash Court", href: "/fitbliss/squash/", hint: "Racquet Sport", feature: { tag: "Sports", title: "Squash Court", body: "Fast-paced competitive play.", img: "/fitbliss/wp-content/uploads/2026/07/Squash-Court.jpg", href: "/fitbliss/squash/" } }
                        ]
                    },
                    {
                        heading: "Wellness & Healing",
                        items: [
                            { label: "Spa & Recovery", href: "/fitbliss/spa/", hint: "Relaxation", feature: { tag: "Wellness", title: "Spa & Recovery", body: "Full body relaxation.", img: "/fitbliss/wp-content/uploads/2026/07/Spa-Recovery.jpg", href: "/fitbliss/spa/" } },
                            { label: "Panchkarma", href: "/fitbliss/panchkarma/", hint: "Ayurvedic Detox", feature: { tag: "Wellness", title: "Panchkarma", body: "Traditional deep detox.", img: "/fitbliss/wp-content/uploads/2026/07/panchkarma.jpg", href: "/fitbliss/panchkarma/" } },
                            { label: "Physiotherapy", href: "/fitbliss/physiotherapy/", hint: "Rehab", feature: { tag: "Wellness", title: "Physiotherapy", body: "Expert injury recovery.", img: "/fitbliss/wp-content/uploads/2026/07/physiotherapy.webp", href: "/fitbliss/physiotherapy/" } },
                            { label: "IV Therapy", href: "/fitbliss/iv-therapy/", hint: "Vitamins", feature: { tag: "Wellness", title: "IV Therapy", body: "Direct hydration and vitamins.", img: "/fitbliss/wp-content/uploads/2026/07/IV-Therapy.jpg", href: "/fitbliss/iv-therapy/" } },
                            { label: "Steam & Sauna", href: "/fitbliss/steam-sauna/", hint: "Heat Therapy", feature: { tag: "Wellness", title: "Steam & Sauna", body: "Detoxify and relax muscles.", img: "/fitbliss/wp-content/uploads/2026/07/steam-sauna.jpg", href: "/fitbliss/steam-sauna/" } }
                        ]
                    },
                    {
                        heading: "Lifestyle",
                        items: [
                            { label: "Nutrition & Diet", href: "/fitbliss/nutrition/", hint: "Consultation", feature: { tag: "Lifestyle", title: "Nutrition & Diet", body: "Personalized diet plans.", img: "/fitbliss/wp-content/uploads/2026/07/Nutrition-Diet.png", href: "/fitbliss/nutrition/" } },
                            { label: "Salon", href: "/fitbliss/salon/", hint: "Grooming", feature: { tag: "Lifestyle", title: "Salon", body: "Premium grooming services.", img: "/fitbliss/wp-content/uploads/2026/07/Salon.jpg", href: "/fitbliss/salon/" } },
                            { label: "EatBliss Café", href: "/fitbliss/cafe/", hint: "Healthy Food", feature: { tag: "Lifestyle", title: "EatBliss Café", body: "Nutritious and delicious meals.", img: "/fitbliss/wp-content/uploads/2026/07/IMG_0639-scaled.webp", href: "/fitbliss/cafe/" } }
                        ]
                    },
                    {
                        heading: "Equipments",
                        items: [
                            { label: "Equipment", href: "/fitbliss/equipment/", hint: "stack the equipment", feature: { tag: "Lifestyle", title: "Equipment", body: "We didn't stack the equipment and call it a gym.", img: "/fitbliss/wp-content/uploads/2026/07/DSC_3887-scaled.jpg", href: "/fitbliss/equipment/" } }
                        ]
                    }
                ]
            }
        };

        const linkHref = (nm) => {
            const customLinks = { "Home": "/fitbliss/", "About Us": "/fitbliss/about/", "Services": "/fitbliss/gym/", "Membership": "/fitbliss/membership/", "Gallery": "/fitbliss/gallery/", "Blog": "/fitbliss/blog/", "Trainers": "/fitbliss/trainers/", "Contact": "/fitbliss/contact/" };
            return customLinks[nm] || "/fitbliss/" + nm.toLowerCase().replace(/\s+/g, '-') + "/";
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
                const imgSrc = f.img || "/fitbliss/wp-content/uploads/2026/07/DSC_3887-scaled.jpg";
                return `
                <div class="imgwrap">
                    <img src="${imgSrc}" alt="${f.title || 'FitBliss'}" 
                         style="object-position:${f.position || 'center'}; width:100%; height:100%; object-fit:cover; display:block;"
                         onerror="this.onerror=null; this.src='/fitbliss/wp-content/uploads/2026/07/DSC_3887-scaled.jpg';" />
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
<main id="content" class="site-main post-3 page type-page status-publish hentry">

	
	<div class="page-content">
				<div data-elementor-type="wp-page" data-elementor-id="3" class="elementor elementor-3" data-elementor-post-type="page">
						<section class="elementor-section elementor-top-section elementor-element elementor-element-fd4189f elementor-section-height-min-height elementor-section-items-stretch elementor-section-content-middle elementor-section-boxed elementor-section-height-default" data-id="fd4189f" data-element_type="section" data-e-type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-500f554" data-id="500f554" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-4e0b37c elementor-widget elementor-widget-heading" data-id="4e0b37c" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Privacy Policy</h2>				</div>
				</div>
				<div class="elementor-element elementor-element-fe6075c elementor-widget elementor-widget-text-editor" data-id="fe6075c" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p><a href="#">Home</a> &#8211; Privacy Policy</p>								</div>
				</div>
					</div>
		</div>
					</div>
		</section>
		<div class="elementor-element elementor-element-71d9377 e-flex e-con-boxed e-con e-parent" data-id="71d9377" data-element_type="container" data-e-type="container">
					<div class="e-con-inner">
				<div class="elementor-element elementor-element-18aaf68a elementor-widget elementor-widget-text-editor" data-id="18aaf68a" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									
<p>At Fit Bliss, the privacy and security of our clients&#8217; personal information are of paramount importance. This Privacy Policy outlines how we collect, use, disclose, and protect your personal information. By accessing or using our services, you consent to the terms outlined in this Privacy Policy.</p>
<h3 class="wp-block-heading"><strong>1. Information We Collect:</strong></h3>
<p>We may collect personal information when you interact with our website, mobile application, or contact us through email or phone. The types of personal information we collect may include:</p>
<ul>
<li>Contact information (such as name, email address, phone number)</li>
<li>Billing and payment details</li>
<li>Health and fitness information provided voluntarily</li>
<li>Demographic information</li>
<li>Usage data (such as IP address, device information, browsing activity)</li>
</ul>
<h3><strong>2. How We Use Your Information:</strong></h3>
<p>We use the collected information for the following purposes:</p>
<ul>
<li>To provide and personalize our services</li>
<li>To process transactions and fulfill requests</li>
<li>To communicate with you about our services, promotions, and updates</li>
<li>To improve our services and enhance user experience</li>
<li>To comply with legal obligations</li>
</ul>
<h3><strong>3. Sharing of Information:</strong></h3>
<p>We may share your personal information with third parties in the following circumstances:</p>
<ul>
<li>With service providers and business partners who assist us in providing our services</li>
<li>With legal authorities or as required by law</li>
<li>With your consent or at your direction</li>
</ul>
<h3><strong>4. Data Security:</strong></h3>
<p>We implement appropriate security measures to protect your personal information from unauthorized access, disclosure, alteration, or destruction. However, no method of transmission over the internet or electronic storage is 100% secure, and we cannot guarantee absolute security.</p>
<h3><strong>5. Your Choices:</strong></h3>
<p>You have the right to:</p>
<ul>
<li>Access, update, or correct your personal information</li>
<li>Opt-out of receiving promotional communications</li>
<li>Request deletion of your personal information, subject to legal obligations</li>
</ul>
<h3><strong>6. Cookies and Tracking Technologies:</strong></h3>
<p>We use cookies and similar tracking technologies to analyze trends, administer the website, track users&#8217; movements around the website, and gather demographic information. You can control cookies through your browser settings.</p>
<h3><strong>7. Third-Party Links:</strong></h3>
<p>Our website and services may contain links to third-party websites or services. We are not responsible for the privacy practices or content of such third parties. We encourage you to review the privacy policies of those third parties.</p>
<h3><strong>8. Children&#8217;s Privacy:</strong></h3>
<p>Our services are not directed to individuals under the age of 18. We do not knowingly collect personal information from children. If you are a parent or guardian and believe that your child has provided us with personal information, please contact us to request deletion.</p>
<h3><strong>9. Changes to this Privacy Policy:</strong></h3>
<p>We reserve the right to update or modify this Privacy Policy at any time. We will notify you of any changes by posting the revised Privacy Policy on our website.</p>
<h3><strong>10. Contact Us:</strong></h3>
<p>If you have any questions or concerns about this Privacy Policy or our privacy practices, please contact us at:</p>
<p>Email: <a target="_new" rel="noreferrer"><span class="__cf_email__" data-cfemail="afc6c1c9c0efdcdbcec8c6c1c881c9c6dbcdc3c6dcdccdd6dcc481ccc0c2">info@fitblissbysk.com</span></a> Phone: +91 98933 80978</p>
<p>Last updated: 06-05-2024</p>
<p>Thank you for entrusting Fit Bliss with your personal information.</p>
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
															<img width="1920" height="659" src="/fitbliss/wp-content/uploads/2024/04/New-LoGO-for-FitBliss1-copy-e1719230950970.png" class="attachment-full size-full wp-image-3293" alt="" srcset="/fitbliss/wp-content/uploads/2024/04/New-LoGO-for-FitBliss1-copy-e1719230950970.png 1920w, /fitbliss/wp-content/uploads/2024/04/New-LoGO-for-FitBliss1-copy-e1719230950970-300x103.png 300w, /fitbliss/wp-content/uploads/2024/04/New-LoGO-for-FitBliss1-copy-e1719230950970-1024x351.png 1024w, /fitbliss/wp-content/uploads/2024/04/New-LoGO-for-FitBliss1-copy-e1719230950970-768x264.png 768w, /fitbliss/wp-content/uploads/2024/04/New-LoGO-for-FitBliss1-copy-e1719230950970-1536x527.png 1536w" sizes="(max-width: 1920px) 100vw, 1920px" />															</div>
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
										<span class="elementor-icon-list-text"><span class="__cf_email__" data-cfemail="670e09010827010e13050b0e1414051e140c4904080a">info@fitblissbysk.com</span></span>
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
											<a href="/fitbliss/privacy-policy/">

											<span class="elementor-icon-list-text">PRIVACY POLICY</span>
											</a>
									</li>
								<li class="elementor-icon-list-item elementor-inline-item">
											<a href="/fitbliss/terms-conditions/">

											<span class="elementor-icon-list-text">TERMS &amp; CONDITIONS</span>
											</a>
									</li>
								<li class="elementor-icon-list-item elementor-inline-item">
											<a href="/fitbliss/terms-of-use/">

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
{"prefetch":[{"source":"document","where":{"and":[{"href_matches":"/*"},{"not":{"href_matches":["/wp-*.php","/wp-admin/*","/wp-content/uploads/*","/wp-content/*","/wp-content/plugins/*","/wp-content/themes/hello-elementor/*","/*\\?(.+)"]}},{"not":{"selector_matches":"a[rel~=\"nofollow\"]"}},{"not":{"selector_matches":".no-prefetch, .no-prefetch a"}}]},"eagerness":"conservative"}]}
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
                    <legend class="ff_screen_reader_title" style="display: block; margin: 0!important;padding: 0!important;height: 0!important;text-indent: -999999px;width: 0!important;overflow:hidden;">Contact Form</legend><input type='hidden' name='__fluent_form_embded_post_id' value='3' /><input type="hidden" id="_fluentform_1_fluentformnonce" name="_fluentform_1_fluentformnonce" value="1ea1268e73" /><input type="hidden" name="_wp_http_referer" value="/privacy-policy/" /><div class='ff-el-group ff-el-form-hide_label'><div class="ff-el-input--label asterisk-right"><label for='ff_1_input_text' id='label_ff_1_input_text' aria-label="Name">Name</label></div><div class='ff-el-input--content'><input type="text" name="input_text" class="ff-el-form-control" placeholder="Name" data-name="input_text" id="ff_1_input_text"  aria-invalid="false" aria-required=false></div></div><div class='ff-el-group ff-el-form-hide_label'><div class="ff-el-input--label ff-el-is-required asterisk-right"><label for='ff_1_email' id='label_ff_1_email' aria-label="Email">Email</label></div><div class='ff-el-input--content'><input type="email" name="email" id="ff_1_email" class="ff-el-form-control" placeholder="Email" data-name="email"  aria-invalid="false" aria-required=true></div></div><div class='ff-el-group ff-el-form-hide_label'><div class="ff-el-input--label ff-el-is-required asterisk-right"><label for='ff_1_subject' id='label_ff_1_subject' aria-label="Phone">Phone</label></div><div class='ff-el-input--content'><input type="text" name="subject" class="ff-el-form-control" placeholder="Phone" data-name="subject" id="ff_1_subject"  aria-invalid="false" aria-required=true></div></div><div class='ff-el-group ff-el-form-hide_label'><div class="ff-el-input--label ff-el-is-required asterisk-right"><label for='ff_1_message' id='label_ff_1_message' aria-label="Your Message">Your Message</label></div><div class='ff-el-input--content'><textarea aria-required="true" aria-labelledby="label_ff_1_message" name="message" id="ff_1_message" class="ff-el-form-control" placeholder="Your Message" rows="4" cols="2" data-name="message" ></textarea></div></div><input type="hidden" name="pagelink" value="/fitbliss/privacy-policy/" data-name="pagelink" ><div class='ff-el-group ff-text-left ff_submit_btn_wrapper'><button type="submit" class="ff-btn ff-btn-submit ff-btn-md ff_btn_style"  aria-label="Submit">Submit</button><style>form.fluent_form_1 .ff-btn-submit:not(.ff_btn_no_style) { background-color: var(--fluentform-primary); color: #ffffff; }</style></div></fieldset></form><div id='fluentform_1_errors' class='ff-errors-in-stack ff_form_instance_1_1 ff-form-loading_errors ff_form_instance_1_1_errors'></div></div>            <script type="text/javascript">
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
			<script id="fluentform-elementor-js-extra">
var fluentformElementor = {"adminUrl":"/fitbliss/wp-admin/admin.php"};
//# sourceURL=fluentform-elementor-js-extra
</script>
<script id="fluentform-elementor-js" src="/fitbliss/wp-content/plugins/fluentform/assets/js/fluent-forms-elementor-widget.js?ver=6.2.14"></script>
<script id="jquery-ui-core-js-before">
jQuery.uiBackCompat = true;
//# sourceURL=jquery-ui-core-js-before
</script>
<script id="jquery-ui-core-js" src="/fitbliss/wp-includes/js/jquery/ui/core.min.js?ver=1.14.2"></script>
<script id="qi-addons-for-elementor-script-js-extra">
var qodefQiAddonsGlobal = {"vars":{"adminBarHeight":0,"iconArrowLeft":"\u003Csvg  xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" viewBox=\"0 0 34.2 32.3\" xml:space=\"preserve\" style=\"stroke-width: 2;\"\u003E\u003Cline x1=\"0.5\" y1=\"16\" x2=\"33.5\" y2=\"16\"/\u003E\u003Cline x1=\"0.3\" y1=\"16.5\" x2=\"16.2\" y2=\"0.7\"/\u003E\u003Cline x1=\"0\" y1=\"15.4\" x2=\"16.2\" y2=\"31.6\"/\u003E\u003C/svg\u003E","iconArrowRight":"\u003Csvg  xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" viewBox=\"0 0 34.2 32.3\" xml:space=\"preserve\" style=\"stroke-width: 2;\"\u003E\u003Cline x1=\"0\" y1=\"16\" x2=\"33\" y2=\"16\"/\u003E\u003Cline x1=\"17.3\" y1=\"0.7\" x2=\"33.2\" y2=\"16.5\"/\u003E\u003Cline x1=\"17.3\" y1=\"31.6\" x2=\"33.5\" y2=\"15.4\"/\u003E\u003C/svg\u003E","iconClose":"\u003Csvg  xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" viewBox=\"0 0 9.1 9.1\" xml:space=\"preserve\"\u003E\u003Cg\u003E\u003Cpath d=\"M8.5,0L9,0.6L5.1,4.5L9,8.5L8.5,9L4.5,5.1L0.6,9L0,8.5L4,4.5L0,0.6L0.6,0L4.5,4L8.5,0z\"/\u003E\u003C/g\u003E\u003C/svg\u003E"}};
//# sourceURL=qi-addons-for-elementor-script-js-extra
</script>
<script id="qi-addons-for-elementor-script-js" src="/fitbliss/wp-content/plugins/qi-addons-for-elementor/assets/js/main.min.js?ver=1.11.1"></script>
<script id="hello-theme-frontend-js" src="/fitbliss/wp-content/themes/hello-elementor/assets/js/hello-frontend.js?ver=3.4.6"></script>
<script id="elementor-webpack-runtime-js" src="/fitbliss/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=4.2.4"></script>
<script id="elementor-frontend-modules-js" src="/fitbliss/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=4.2.4"></script>
<script id="elementor-frontend-js-before">
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnX":"Share on X","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close","a11yCarouselPrevSlideMessage":"Previous slide","a11yCarouselNextSlideMessage":"Next slide","a11yCarouselFirstSlideMessage":"This is the first slide","a11yCarouselLastSlideMessage":"This is the last slide","a11yCarouselPaginationBulletMessage":"Go to slide"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile Portrait","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Landscape","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet Portrait","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Landscape","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}},"hasCustomBreakpoints":false},"version":"4.2.4","is_static":false,"experimentalFeatures":{"e_font_icon_svg":true,"additional_custom_breakpoints":true,"container":true,"e_panel_promotions":true,"theme_builder_v2":true,"hello-theme-header-footer":true,"nested-elements":true,"global_classes_should_enforce_capabilities":true,"e_variables":true,"e_opt_in_v4_page":true,"e_components":true,"e_interactions":true,"e_widget_creation":true,"import-export-customization":true,"e_pro_atomic_form":true,"e_pro_variables":true,"e_pro_interactions":true},"urls":{"assets":"https:\/\/staging.fitblissbysk.com\/wp-content\/plugins\/elementor\/assets\/","ajaxurl":"https:\/\/staging.fitblissbysk.com\/wp-admin\/admin-ajax.php","uploadUrl":"https:\/\/staging.fitblissbysk.com\/wp-content\/uploads"},"nonces":{"floatingButtonsClickTracking":"1789dd066d","atomicFormsSendForm":"219b12a670"},"swiperClass":"swiper","settings":{"page":[],"editorPreferences":[]},"kit":{"body_background_background":"classic","active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description","hello_header_logo_type":"title","hello_header_menu_layout":"horizontal","hello_footer_logo_type":"logo"},"post":{"id":3,"title":"Privacy%20Policy%20-%20Fit%20Bliss","excerpt":"","featuredImage":false}};
//# sourceURL=elementor-frontend-js-before
</script>
<script id="elementor-frontend-js" src="/fitbliss/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=4.2.4"></script>
<script id="smartmenus-js" src="/fitbliss/wp-content/plugins/elementor-pro/assets/lib/smartmenus/jquery.smartmenus.min.js?ver=1.2.1"></script>
<script id="swiper-js" src="/fitbliss/wp-content/plugins/qi-addons-for-elementor/assets/plugins/swiper/8.4.5/swiper.min.js?ver=8.4.5"></script>
<script id="chaty-front-end-js-extra">
var chaty_settings = {"ajax_url":"/fitbliss/wp-admin/admin-ajax.php","analytics":"0","capture_analytics":"0","token":"55186ecd80","chaty_widgets":[{"id":0,"identifier":0,"settings":{"cta_type":"simple-view","cta_body":"","cta_head":"","cta_head_bg_color":"","cta_head_text_color":"","show_close_button":0,"position":"right","custom_position":1,"bottom_spacing":"25","side_spacing":"25","icon_view":"vertical","default_state":"click","cta_text":"","cta_text_color":"#333333","cta_bg_color":"#ffffff","show_cta":"first_click","is_pending_mesg_enabled":"off","pending_mesg_count":"1","pending_mesg_count_color":"#ffffff","pending_mesg_count_bgcolor":"#dd0000","widget_icon":"chat-base","widget_icon_url":"","font_family":"-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Oxygen-Sans,Ubuntu,Cantarell,Helvetica Neue,sans-serif","widget_size":"54","custom_widget_size":"54","is_google_analytics_enabled":0,"close_text":"Hide","widget_color":"#000000","widget_icon_color":"#ffffff","widget_rgb_color":"0,0,0","has_custom_css":0,"custom_css":"","widget_token":"e1c922d0d5","widget_index":"","attention_effect":"shockwave"},"triggers":{"has_time_delay":1,"time_delay":"0","exit_intent":0,"has_display_after_page_scroll":0,"display_after_page_scroll":"0","auto_hide_widget":0,"hide_after":0,"show_on_pages_rules":[],"time_diff":0,"has_date_scheduling_rules":0,"date_scheduling_rules":{"start_date_time":"","end_date_time":""},"date_scheduling_rules_timezone":0,"day_hours_scheduling_rules_timezone":0,"has_day_hours_scheduling_rules":[],"day_hours_scheduling_rules":[],"day_time_diff":0,"show_on_direct_visit":0,"show_on_referrer_social_network":0,"show_on_referrer_search_engines":0,"show_on_referrer_google_ads":0,"show_on_referrer_urls":[],"has_show_on_specific_referrer_urls":0,"has_traffic_source":0,"has_countries":0,"countries":[],"has_target_rules":0},"channels":[{"channel":"Phone","value":"+917470787014","hover_text":"Phone","chatway_position":"","svg_icon":"\u003Csvg width=\"39\" height=\"39\" viewBox=\"0 0 39 39\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"\u003E\u003Ccircle class=\"color-element\" cx=\"19.4395\" cy=\"19.4395\" r=\"19.4395\" fill=\"#03E78B\"/\u003E\u003Cpath d=\"M19.3929 14.9176C17.752 14.7684 16.2602 14.3209 14.7684 13.7242C14.0226 13.4259 13.1275 13.7242 12.8292 14.4701L11.7849 16.2602C8.65222 14.6193 6.11623 11.9341 4.47529 8.95057L6.41458 7.90634C7.16046 7.60799 7.45881 6.71293 7.16046 5.96705C6.56375 4.47529 6.11623 2.83435 5.96705 1.34259C5.96705 0.596704 5.22117 0 4.47529 0H0.745882C0.298353 0 5.69062e-07 0.298352 5.69062e-07 0.745881C5.69062e-07 3.72941 0.596704 6.71293 1.93929 9.3981C3.87858 13.575 7.30964 16.8569 11.3374 18.7962C14.0226 20.1388 17.0061 20.7355 19.9896 20.7355C20.4371 20.7355 20.7355 20.4371 20.7355 19.9896V16.4094C20.7355 15.5143 20.1388 14.9176 19.3929 14.9176Z\" transform=\"translate(9.07179 9.07178)\" fill=\"white\"/\u003E\u003C/svg\u003E","is_desktop":1,"is_mobile":1,"icon_color":"#03E78B","icon_rgb_color":"3,231,139","channel_type":"Phone","custom_image_url":"","order":"","pre_set_message":"","is_use_web_version":"1","is_open_new_tab":"1","is_default_open":"0","has_welcome_message":"0","emoji_picker":"1","input_placeholder":"Write your message...","chat_welcome_message":"","wp_popup_headline":"","wp_popup_nickname":"","wp_popup_profile":"","wp_popup_head_bg_color":"#4AA485","qr_code_image_url":"","mail_subject":"","channel_account_type":"personal","contact_form_settings":[],"contact_fields":[],"url":"tel:+917470787014","mobile_target":"","desktop_target":"","target":"","is_agent":0,"agent_data":[],"header_text":"","header_sub_text":"","header_bg_color":"","header_text_color":"","widget_token":"e1c922d0d5","widget_index":"","click_event":"","viber_url":""},{"channel":"Whatsapp","value":"917470787014","hover_text":"WhatsApp","chatway_position":"","svg_icon":"\u003Csvg width=\"39\" height=\"39\" viewBox=\"0 0 39 39\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"\u003E\u003Ccircle class=\"color-element\" cx=\"19.4395\" cy=\"19.4395\" r=\"19.4395\" fill=\"#49E670\"/\u003E\u003Cpath d=\"M12.9821 10.1115C12.7029 10.7767 11.5862 11.442 10.7486 11.575C10.1902 11.7081 9.35269 11.8411 6.84003 10.7767C3.48981 9.44628 1.39593 6.25317 1.25634 6.12012C1.11674 5.85403 2.13001e-06 4.39053 2.13001e-06 2.92702C2.13001e-06 1.46351 0.83755 0.665231 1.11673 0.399139C1.39592 0.133046 1.8147 1.01506e-06 2.23348 1.01506e-06C2.37307 1.01506e-06 2.51267 1.01506e-06 2.65226 1.01506e-06C2.93144 1.01506e-06 3.21063 -2.02219e-06 3.35022 0.532183C3.62941 1.19741 4.32736 2.66092 4.32736 2.79397C4.46696 2.92702 4.46696 3.19311 4.32736 3.32616C4.18777 3.59225 4.18777 3.59224 3.90858 3.85834C3.76899 3.99138 3.6294 4.12443 3.48981 4.39052C3.35022 4.52357 3.21063 4.78966 3.35022 5.05576C3.48981 5.32185 4.18777 6.38622 5.16491 7.18449C6.42125 8.24886 7.39839 8.51496 7.81717 8.78105C8.09636 8.91409 8.37554 8.9141 8.65472 8.648C8.93391 8.38191 9.21309 7.98277 9.49228 7.58363C9.77146 7.31754 10.0507 7.1845 10.3298 7.31754C10.609 7.45059 12.2841 8.11582 12.5633 8.38191C12.8425 8.51496 13.1217 8.648 13.1217 8.78105C13.1217 8.78105 13.1217 9.44628 12.9821 10.1115Z\" transform=\"translate(12.9597 12.9597)\" fill=\"#FAFAFA\"/\u003E\u003Cpath d=\"M0.196998 23.295L0.131434 23.4862L0.323216 23.4223L5.52771 21.6875C7.4273 22.8471 9.47325 23.4274 11.6637 23.4274C18.134 23.4274 23.4274 18.134 23.4274 11.6637C23.4274 5.19344 18.134 -0.1 11.6637 -0.1C5.19344 -0.1 -0.1 5.19344 -0.1 11.6637C-0.1 13.9996 0.624492 16.3352 1.93021 18.2398L0.196998 23.295ZM5.87658 19.8847L5.84025 19.8665L5.80154 19.8788L2.78138 20.8398L3.73978 17.9646L3.75932 17.906L3.71562 17.8623L3.43104 17.5777C2.27704 15.8437 1.55796 13.8245 1.55796 11.6637C1.55796 6.03288 6.03288 1.55796 11.6637 1.55796C17.2945 1.55796 21.7695 6.03288 21.7695 11.6637C21.7695 17.2945 17.2945 21.7695 11.6637 21.7695C9.64222 21.7695 7.76778 21.1921 6.18227 20.039L6.17557 20.0342L6.16817 20.0305L5.87658 19.8847Z\" transform=\"translate(7.7758 7.77582)\" fill=\"white\" stroke=\"white\" stroke-width=\"0.2\"/\u003E\u003C/svg\u003E","is_desktop":1,"is_mobile":1,"icon_color":"#49E670","icon_rgb_color":"73,230,112","channel_type":"Whatsapp","custom_image_url":"","order":"","pre_set_message":"","is_use_web_version":"1","is_open_new_tab":"1","is_default_open":"0","has_welcome_message":"0","emoji_picker":"1","input_placeholder":"Write your message...","chat_welcome_message":"\u003Cp\u003EHow can I help you? :)\u003C/p\u003E","wp_popup_headline":"Let&#039;s chat on WhatsApp","wp_popup_nickname":"","wp_popup_profile":"","wp_popup_head_bg_color":"#4AA485","qr_code_image_url":"","mail_subject":"","channel_account_type":"personal","contact_form_settings":[],"contact_fields":[],"url":"https://web.whatsapp.com/send?phone=917470787014","mobile_target":"","desktop_target":"_blank","target":"_blank","is_agent":0,"agent_data":[],"header_text":"","header_sub_text":"","header_bg_color":"","header_text_color":"","widget_token":"e1c922d0d5","widget_index":"","click_event":"","viber_url":""},{"channel":"Instagram","value":"fitblissbysk/?hl=en","hover_text":"Instagram Page","chatway_position":"","svg_icon":"\u003Csvg width=\"39\" height=\"39\" viewBox=\"0 0 39 39\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"\u003E\u003Ccircle class=\"color-element\" cx=\"19.5\" cy=\"19.5\" r=\"19.5\" fill=\"url(#linear-gradient)\"/\u003E\u003Cpath id=\"Path_1923\" data-name=\"Path 1923\" d=\"M13.177,0H5.022A5.028,5.028,0,0,0,0,5.022v8.155A5.028,5.028,0,0,0,5.022,18.2h8.155A5.028,5.028,0,0,0,18.2,13.177V5.022A5.028,5.028,0,0,0,13.177,0Zm3.408,13.177a3.412,3.412,0,0,1-3.408,3.408H5.022a3.411,3.411,0,0,1-3.408-3.408V5.022A3.412,3.412,0,0,1,5.022,1.615h8.155a3.412,3.412,0,0,1,3.408,3.408v8.155Z\" transform=\"translate(10 10.4)\" fill=\"#fff\"/\u003E\u003Cpath id=\"Path_1924\" data-name=\"Path 1924\" d=\"M45.658,40.97a4.689,4.689,0,1,0,4.69,4.69A4.695,4.695,0,0,0,45.658,40.97Zm0,7.764a3.075,3.075,0,1,1,3.075-3.075A3.078,3.078,0,0,1,45.658,48.734Z\" transform=\"translate(-26.558 -26.159)\" fill=\"#fff\"/\u003E\u003C/svg\u003E\u003Cpath id=\"Path_1925\" data-name=\"Path 1925\" d=\"M120.105,28.251a1.183,1.183,0,1,0,.838.347A1.189,1.189,0,0,0,120.105,28.251Z\" transform=\"translate(-96.119 -14.809)\" fill=\"#fff\"/\u003E","is_desktop":1,"is_mobile":1,"icon_color":"#ffffff","icon_rgb_color":"0,0,0","channel_type":"Instagram","custom_image_url":"","order":"","pre_set_message":"","is_use_web_version":"1","is_open_new_tab":"1","is_default_open":"0","has_welcome_message":"0","emoji_picker":"1","input_placeholder":"Write your message...","chat_welcome_message":"","wp_popup_headline":"","wp_popup_nickname":"","wp_popup_profile":"","wp_popup_head_bg_color":"#4AA485","qr_code_image_url":"","mail_subject":"","channel_account_type":"personal","contact_form_settings":[],"contact_fields":[],"url":"https://www.instagram.com/fitblissbysk/?hl=en","mobile_target":"_blank","desktop_target":"_blank","target":"_blank","is_agent":0,"agent_data":[],"header_text":"","header_sub_text":"","header_bg_color":"","header_text_color":"","widget_token":"e1c922d0d5","widget_index":"","click_event":"","viber_url":""}]}],"data_analytics_settings":"off","lang":{"whatsapp_label":"WhatsApp Message","hide_whatsapp_form":"Hide WhatsApp Form","emoji_picker":"Show Emojis"},"has_chatway":""};
//# sourceURL=chaty-front-end-js-extra
</script>
<script defer id="chaty-front-end-js" src="/fitbliss/wp-content/plugins/chaty/dist/js/script.js?ver=3.6.11785238286"></script>
<script defer id="chaty-mail-check-js" src="/fitbliss/wp-content/plugins/chaty/admin/assets/js/mailcheck.js?ver=3.6.1"></script>
<script id="fluent-form-submission-js-extra">
var fluentFormVars = {"ajaxUrl":"/fitbliss/wp-admin/admin-ajax.php","forms":[],"step_text":"Step %activeStep% of %totalStep% - %stepTitle%","step_completed_text":"Completed","is_rtl":"","date_i18n":{"previousMonth":"Previous Month","nextMonth":"Next Month","months":{"shorthand":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"longhand":["January","February","March","April","May","June","July","August","September","October","November","December"]},"weekdays":{"longhand":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"shorthand":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"]},"daysInMonth":[31,28,31,30,31,30,31,31,30,31,30,31],"rangeSeparator":" to ","weekAbbreviation":"Wk","scrollTitle":"Scroll to increment","toggleTitle":"Click to toggle","amPM":["AM","PM"],"yearAriaLabel":"Year","firstDayOfWeek":1},"pro_version":"","fluentform_version":"6.2.14","force_init":"","stepAnimationDuration":"350","upload_completed_txt":"100% Completed","upload_start_txt":"0% Completed","uploading_txt":"Uploading","choice_js_vars":{"noResultsText":"No results found","loadingText":"Loading...","noChoicesText":"No choices to choose from","itemSelectText":"Press to select","maxItemTextSingular":"Only %%maxItemCount%% option can be added","maxItemTextPlural":"Only %%maxItemCount%% options can be added"},"input_mask_vars":{"clearIfNotMatch":false},"nonce":"9aa8e9f3f6","file_delete_nonce":"96cfc14f4c","form_id":"1","step_change_focus":"1","has_cleantalk":"","pro_payment_script_compatible":""};
var fluentform_submission_messages_1 = {"file_upload_in_progress":"File upload in progress. Please wait...","javascript_handler_failed":"Javascript handler could not be loaded. Form submission has been failed. Reload the page and try again"};
var fluentform_payment_messages_1 = {"stock_out_message":"This Item is Stock Out","item_label":"Item","price_label":"Price","qty_label":"Qty","line_total_label":"Line Total","sub_total_label":"Sub Total","discount_label":"Discount","total_label":"Total","signup_fee_label":"Signup Fee","trial_label":"Trial","processing_text":"Processing...","confirming_text":"Confirming..."};
var fluentform_save_progress_messages_1 = {"copy_button":"Copy","email_button":"Email","email_placeholder":"Your Email Here","copy_success":"Copied"};
var fluentform_address_messages_1 = {"please_wait":"Please wait ...","location_not_determined":"Could not determine address from location.","address_fetch_failed":"Failed to fetch address from coordinates.","geolocation_failed":"Geolocation failed or was denied.","geolocation_not_supported":"Geolocation is not supported by this browser."};
var fluentform_gateway_messages_1 = {"request_failed":"Request failed. Please try again","payment_failed":"Payment process failed!","no_method_found":"No method found","processing_text":"Processing..."};
var fluentform_submission_messages_global = {"javascript_handler_failed":"Javascript handler could not be loaded. Form submission has been failed. Reload the page and try again"};
var fluentform_address_messages_global = {"please_wait":"Please wait ...","location_not_determined":"Could not determine address from location.","address_fetch_failed":"Failed to fetch address from coordinates.","geolocation_failed":"Geolocation failed or was denied.","geolocation_not_supported":"Geolocation is not supported by this browser."};
//# sourceURL=fluent-form-submission-js-extra
</script>
<script id="fluent-form-submission-js" src="/fitbliss/wp-content/plugins/fluentform/assets/js/form-submission.js?ver=6.2.14"></script>
<script id="wp-hooks-js" src="/fitbliss/wp-includes/js/dist/hooks.min.js?ver=f0f188028580e8dc1255"></script>
<script id="wp-i18n-js" src="/fitbliss/wp-includes/js/dist/i18n.min.js?ver=1dfe7db3940c23ea9216"></script>
<script id="wp-i18n-js-after">
wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
//# sourceURL=wp-i18n-js-after
</script>
<script id="qi-addons-for-elementor-elementor-js" src="/fitbliss/wp-content/plugins/qi-addons-for-elementor/inc/plugins/elementor/assets/js/elementor.min.js?ver=7.1.2"></script>
<script id="elementor-pro-webpack-runtime-js" src="/fitbliss/wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min.js?ver=4.1.1"></script>
<script id="elementor-pro-frontend-js-before">
var ElementorProFrontendConfig = {"ajaxurl":"https:\/\/staging.fitblissbysk.com\/wp-admin\/admin-ajax.php","nonce":"70ff051558","urls":{"assets":"https:\/\/staging.fitblissbysk.com\/wp-content\/plugins\/elementor-pro\/assets\/","rest":"https:\/\/staging.fitblissbysk.com\/wp-json\/"},"settings":{"lazy_load_background_images":true},"popup":{"hasPopUps":true},"shareButtonsNetworks":{"facebook":{"title":"Facebook","has_counter":true},"twitter":{"title":"Twitter"},"linkedin":{"title":"LinkedIn","has_counter":true},"pinterest":{"title":"Pinterest","has_counter":true},"reddit":{"title":"Reddit","has_counter":true},"vk":{"title":"VK","has_counter":true},"odnoklassniki":{"title":"OK","has_counter":true},"tumblr":{"title":"Tumblr"},"digg":{"title":"Digg"},"skype":{"title":"Skype"},"stumbleupon":{"title":"StumbleUpon","has_counter":true},"mix":{"title":"Mix"},"telegram":{"title":"Telegram"},"pocket":{"title":"Pocket","has_counter":true},"xing":{"title":"XING","has_counter":true},"whatsapp":{"title":"WhatsApp"},"email":{"title":"Email"},"print":{"title":"Print"},"x-twitter":{"title":"X"},"threads":{"title":"Threads"}},"facebook_sdk":{"lang":"en_US","app_id":""},"lottie":{"defaultAnimationUrl":"https:\/\/staging.fitblissbysk.com\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"}};
//# sourceURL=elementor-pro-frontend-js-before
</script>
<script id="elementor-pro-frontend-js" src="/fitbliss/wp-content/plugins/elementor-pro/assets/js/frontend.min.js?ver=4.1.1"></script>
<script id="pro-elements-handlers-js" src="/fitbliss/wp-content/plugins/elementor-pro/assets/js/elements-handlers.min.js?ver=4.1.1"></script>
<script id="wp-emoji-settings" type="application/json">
{"baseUrl":"https://s.w.org/images/core/emoji/17.0.2/72x72/","ext":".png","svgUrl":"https://s.w.org/images/core/emoji/17.0.2/svg/","svgExt":".svg","source":{"concatemoji":"/fitbliss/wp-includes/js/wp-emoji-release.min.js?ver=7.1.2"}}
</script>
<script type="module">
/*! This file is auto-generated */
var e="script#wp-emoji-settings",t=document.querySelector(e);if(!(t instanceof HTMLScriptElement))throw new Error("Element missing: "+e);const r=JSON.parse(t.text),s=(window._wpemojiSettings=r,"wpEmojiSettingsSupports"),o=["flag","emoji"];function i(e){try{var t={supportTests:e,timestamp:(new Date).valueOf()};sessionStorage.setItem(s,JSON.stringify(t))}catch(e){}}function c(e,t,n){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);t=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data);e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(n,0,0);const r=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data);return t.every((e,t)=>e===r[t])}function p(e,t){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);var n=e.getImageData(16,16,1,1);for(let e=0;e<n.data.length;e++)if(0!==n.data[e])return!1;return!0}function u(e,t,n,r){switch(t){case"flag":return n(e,"\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f","\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f")?!1:!n(e,"\ud83c\udde8\ud83c\uddf6","\ud83c\udde8\u200b\ud83c\uddf6")&&!n(e,"\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f","\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");case"emoji":return!r(e,"\ud83e\u1fac8")}return!1}function f(e,t,n,r){let a;const s=(a="undefined"!=typeof WorkerGlobalScope&&self instanceof WorkerGlobalScope?new OffscreenCanvas(300,150):document.createElement("canvas")).getContext("2d",{willReadFrequently:!0}),o=(s.textBaseline="top",s.font="600 32px Arial",{});return e.forEach(e=>{o[e]=t(s,e,n,r)}),o}function a(e){var t=document.createElement("script");t.src=e,t.defer=!0,document.head.appendChild(t)}r.supports={everything:!0,everythingExceptFlag:!0},new Promise(t=>{let n=function(){try{var e=JSON.parse(sessionStorage.getItem(s));if("object"==typeof e&&"number"==typeof e.timestamp&&(new Date).valueOf()<e.timestamp+604800&&"object"==typeof e.supportTests)return e.supportTests}catch(e){}return null}();if(!n){if("undefined"!=typeof Worker&&"undefined"!=typeof OffscreenCanvas&&"undefined"!=typeof URL&&URL.createObjectURL&&"undefined"!=typeof Blob)try{var e="postMessage("+f.toString()+"("+[JSON.stringify(o),u.toString(),c.toString(),p.toString()].join(",")+"));",r=new Blob([e],{type:"text/javascript"});const a=new Worker(URL.createObjectURL(r),{name:"wpTestEmojiSupports"});return void(a.onmessage=e=>{i(n=e.data),a.terminate(),t(n)})}catch(e){}i(n=f(o,u,c,p))}t(n)}).then(e=>{for(const n in e)r.supports[n]=e[n],r.supports.everything=r.supports.everything&&r.supports[n],"flag"!==n&&(r.supports.everythingExceptFlag=r.supports.everythingExceptFlag&&r.supports[n]);var t;r.supports.everythingExceptFlag=r.supports.everythingExceptFlag&&!r.supports.flag,r.supports.everything||((t=r.source||{}).concatemoji?a(t.concatemoji):t.wpemoji&&t.twemoji&&(a(t.twemoji),a(t.wpemoji)))});
//# sourceURL=/fitbliss/wp-includes/js/wp-emoji-loader.min.js
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
