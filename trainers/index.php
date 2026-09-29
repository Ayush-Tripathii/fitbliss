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
    </style>
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />

	<!-- This site is optimized with the Yoast SEO plugin v28.5 - https://yoast.com/product/yoast-seo-wordpress/ -->
	<title>Trainers - Fit Bliss</title>
	<link rel="canonical" href="/fitbliss/trainers/" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Trainers - Fit Bliss" />
	<meta property="og:url" content="/fitbliss/trainers/" />
	<meta property="og:site_name" content="Fit Bliss" />
	<meta property="article:publisher" content="https://www.facebook.com/fitblissbysk/" />
	<meta property="article:modified_time" content="2026-07-21T09:04:40+00:00" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:site" content="@fitblissbysk" />
	<meta name="twitter:label1" content="Est. reading time" />
	<meta name="twitter:data1" content="6 minutes" />
	<script type="application/ld+json" class="yoast-schema-graph">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/staging.fitblissbysk.com\/trainers\/","url":"https:\/\/staging.fitblissbysk.com\/trainers\/","name":"Trainers - Fit Bliss","isPartOf":{"@id":"https:\/\/staging.fitblissbysk.com\/#website"},"datePublished":"2026-07-21T09:02:30+00:00","dateModified":"2026-07-21T09:04:40+00:00","breadcrumb":{"@id":"https:\/\/staging.fitblissbysk.com\/trainers\/#breadcrumb"},"inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/staging.fitblissbysk.com\/trainers\/"]}]},{"@type":"BreadcrumbList","@id":"https:\/\/staging.fitblissbysk.com\/trainers\/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https:\/\/staging.fitblissbysk.com\/"},{"@type":"ListItem","position":2,"name":"Trainers"}]},{"@type":"WebSite","@id":"https:\/\/staging.fitblissbysk.com\/#website","url":"https:\/\/staging.fitblissbysk.com\/","name":"Fit Bliss By SK","description":"","potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https:\/\/staging.fitblissbysk.com\/?s={search_term_string}"},"query-input":{"@type":"PropertyValueSpecification","valueRequired":true,"valueName":"search_term_string"}}],"inLanguage":"en-US"}]}</script>
	<!-- / Yoast SEO plugin. -->


<link rel="alternate" type="application/rss+xml" title="Fit Bliss &raquo; Feed" href="/fitbliss/feed/" />
<link rel="alternate" type="application/rss+xml" title="Fit Bliss &raquo; Comments Feed" href="/fitbliss/comments/feed/" />
<link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="/fitbliss/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fstaging.fitblissbysk.com%2Ftrainers%2F" />
<link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="/fitbliss/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fstaging.fitblissbysk.com%2Ftrainers%2F&#038;format=xml" />
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
<link rel='stylesheet' id='elementor-post-18658-css' href='/fitbliss/wp-content/uploads/elementor/css/post-18658.css?ver=1790278891' media='all' />
<link rel='stylesheet' id='elementor-post-27-css' href='/fitbliss/wp-content/uploads/elementor/css/post-27.css?ver=1790121883' media='all' />
<link rel='stylesheet' id='elementor-post-29-css' href='/fitbliss/wp-content/uploads/elementor/css/post-29.css?ver=1790121883' media='all' />
<link rel='stylesheet' id='elementor-post-1638-css' href='/fitbliss/wp-content/uploads/elementor/css/post-1638.css?ver=1790121883' media='all' />
<link rel='stylesheet' id='chaty-front-css-css' href='/fitbliss/wp-content/plugins/chaty/dist/css/style.css?ver=3.6.11785238286' media='all' />
<link rel='stylesheet' id='elementor-gf-local-inter-css' href='/fitbliss/wp-content/uploads/elementor/google-fonts/css/inter.css?ver=1749298517' media='all' />
<link rel='stylesheet' id='elementor-gf-local-roboto-css' href='/fitbliss/wp-content/uploads/elementor/google-fonts/css/roboto.css?ver=1749298521' media='all' />
<script id="jquery-core-js" src="/fitbliss/wp-includes/js/jquery/jquery.min.js?ver=3.7.1"></script>
<script id="jquery-migrate-js" src="/fitbliss/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1"></script>
<link rel="https://api.w.org/" href="/fitbliss/wp-json/" /><link rel="alternate" title="JSON" type="application/json" href="/fitbliss/wp-json/wp/v2/pages/18658" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="/fitbliss/xmlrpc.php?rsd" />
<meta name="generator" content="WordPress 7.1.2" />
<link rel='shortlink' href='/fitbliss/?p=18658' />
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

<body class="wp-singular page-template-default page page-id-18658 wp-embed-responsive wp-theme-hello-elementor qodef-qi--no-touch qi-addons-for-elementor-1.11.1 hello-elementor-default elementor-default elementor-kit-21 elementor-page elementor-page-18658">

    
        <a class="skip-link screen-reader-text" href="#content">
        Skip to content    </a>
    
        <header class="header" id="header">
        <!-- Top strip -->
        <div class="topstrip">
            <div class="container row">
                <span class="tag">Luxury Wellness Destination · Bhopal</span>
                <div class="links">
                    <a href="mailto:info@fitblissbysk.com"><span class="__cf_email__" data-cfemail="d5bcbbb3ba95b3bca1b7b9bca6a6b7aca6befbb6bab8">info@fitblissbysk.com</span></a>
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
                feature: { tag: "Our Story", title: "Where Wellness Meets Luxury", body: "Founded by Dr. Shruti Kapoor — a Radiologist turned wellness curator, inspired by her own transformation through Pilates in Mumbai.", img: "/fitbliss/wp-content/uploads/2026/06/DSC_2491-scaled.jpg", href: "/fitbliss/about/" },
                cols: [
                    {
                        heading: "About FitBliss", items: [
                            {
                                label: "The Story", href: "/fitbliss/about/", hint: "Vision · Journey · Values",
                                feature: { tag: "About FitBliss", title: "The Story", body: "A vision born from personal transformation — discover how FitBliss came to be the luxury wellness destination it is today.", img: "/fitbliss/wp-content/uploads/2024/06/2.jpg", href: "/fitbliss/about/" }
                            },

                        ]
                    },
                    {
                        heading: "Leadership", items: [
                            {
                                label: "Meet the Founder", href: "/fitbliss/founder/", hint: "Dr. Shruti Kapoor",
                                feature: { tag: "Leadership", title: "Meet the Founder", body: "Dr. Shruti Kapoor — Radiologist, wellness curator, and the visionary mind behind FitBliss.", img: "/fitbliss/wp-content/uploads/2026/07/IMG-20250804-WA0081.webp", position: "center 20%", href: "/fitbliss/founder/" }
                            },

                        ]
                    }
                ]
            },
            Services: {
                feature: { tag: "Our Services", title: "Holistic Wellness", body: "Discover a comprehensive range of fitness, wellness, and lifestyle services.", img: "https://images.unsplash.com/photo-1540496905036-5937c10647cc?w=800", href: "#services" },
                cols: [
                    {
                        heading: "Gym & Fitness", items: [
                            { label: "Gym & Strength", href: "/fitbliss/gym/", hint: "Training", feature: { tag: "Fitness", title: "Gym & Strength", body: "State-of-the-art equipment.", img: "/fitbliss/wp-content/uploads/2026/07/DSC_3887-scaled.jpg", href: "/fitbliss/gym/" } },
                            { label: "Personal Training", href: "/fitbliss/personal-training/", hint: "Coaching", feature: { tag: "Fitness", title: "Personal Training", body: "Expert guidance for your goals.", img: "/fitbliss/wp-content/uploads/2026/07/DSC_3593-scaled.jpg", href: "/fitbliss/personal-training/" } },
                            { label: "Functional Training", href: "/fitbliss/functional-training/", hint: "Agility", feature: { tag: "Fitness", title: "Functional Training", body: "Enhance daily movement and strength.", img: "/fitbliss/wp-content/uploads/2026/07/DSC_3557-scaled.jpg", href: "/fitbliss/functional-training/" } },
                            { label: "Spinning Bike", href: "/fitbliss/spinning/", hint: "Cardio", feature: { tag: "Fitness", title: "Spinning Bike", body: "High-intensity cardio on bikes.", img: "/fitbliss/wp-content/uploads/2026/07/IMG_3724-scaled.jpg", href: "/fitbliss/spinning/" } }
                        ]
                    },
                    {
                        heading: "Yoga & Pilates", items: [
                            { label: "Pilates", href: "/fitbliss/pilates/", hint: '<img src="/fitbliss/wp-content/uploads/2026/07/YKBI.png" alt="YKBI" style="height:40px;width:auto;vertical-align:middle;display:inline-block;" />', feature: { tag: "Yoga", title: "Pilates", body: "Strengthen core and flexibility.", img: "/fitbliss/wp-content/uploads/2026/07/DSC04177_11zon-1.jpg", href: "/fitbliss/pilates/" } },
                            { label: "Traditional Yoga", href: "/fitbliss/traditional-yoga/", hint: "Mind & Body", feature: { tag: "Yoga", title: "Traditional Yoga", body: "Classic poses and breathwork.", img: "/fitbliss/wp-content/uploads/2026/07/0Z8_2468-scaled.jpg", href: "/fitbliss/traditional-yoga/" } },
                            { label: "Aerial Yoga", href: "/fitbliss/aerial-yoga/", hint: "Anti-gravity", feature: { tag: "Yoga", title: "Aerial Yoga", body: "Supported inversions and deep stretches.", img: "/fitbliss/wp-content/uploads/2026/07/0Z8_2468-scaled.jpg", href: "/fitbliss/aerial-yoga/" } },
                            { label: "Aquatic Wellness", href: "/fitbliss/aquatic-wellness/", hint: "Water Therapy", feature: { tag: "Yoga", title: "Aquatic Wellness", body: "Low impact water workouts.", img: "/fitbliss/wp-content/uploads/2026/07/IMG_0567-scaled.jpg", href: "/fitbliss/aquatic-wellness/" } }
                        ]
                    },
                    {
                        heading: "Sports & Dance", items: [
                            { label: "Boxing", href: "/fitbliss/boxing/", hint: "Combat", feature: { tag: "Sports", title: "Boxing", body: "Build endurance and power.", img: "/fitbliss/wp-content/uploads/2026/07/IMG_3714-scaled.jpg", href: "/fitbliss/boxing/" } },
                            { label: "Zumba", href: "/fitbliss/zumba/", hint: "Dance Fitness", feature: { tag: "Sports", title: "Zumba", body: "Fun, dance-based cardio.", img: "/fitbliss/wp-content/uploads/2026/07/IMG_3730-scaled.jpg", href: "/fitbliss/zumba/" } },
                            { label: "Dance Classes", href: "/fitbliss/dance/", hint: "Choreography", feature: { tag: "Sports", title: "Dance Classes", body: "Learn routines and stay fit.", img: "/fitbliss/wp-content/uploads/2026/07/IMG_3730-scaled.jpg", href: "/fitbliss/dance/" } },
                            { label: "Squash Court", href: "/fitbliss/squash/", hint: "Racquet Sport", feature: { tag: "Sports", title: "Squash Court", body: "Fast-paced competitive play.", img: "/fitbliss/wp-content/uploads/2026/07/Squash-Court.jpg", href: "/fitbliss/squash/" } }
                        ]
                    },
                    {
                        heading: "Wellness & Healing", items: [
                            { label: "Spa & Recovery", href: "/fitbliss/spa/", hint: "Relaxation", feature: { tag: "Wellness", title: "Spa & Recovery", body: "Full body relaxation.", img: "/fitbliss/wp-content/uploads/2026/07/Spa-Recovery.jpg", href: "/fitbliss/spa/" } },
                            { label: "Panchkarma", href: "/fitbliss/panchkarma/", hint: "Ayurvedic Detox", feature: { tag: "Wellness", title: "Panchkarma", body: "Traditional deep detox.", img: "/fitbliss/wp-content/uploads/2026/07/panchkarma.jpg", href: "/fitbliss/panchkarma/" } },
                            { label: "Physiotherapy", href: "/fitbliss/physiotherapy/", hint: "Rehab", feature: { tag: "Wellness", title: "Physiotherapy", body: "Expert injury recovery.", img: "/fitbliss/wp-content/uploads/2026/07/physiotherapy.webp", href: "/fitbliss/physiotherapy/" } },
                            { label: "IV Therapy", href: "/fitbliss/iv-therapy/", hint: "Vitamins", feature: { tag: "Wellness", title: "IV Therapy", body: "Direct hydration and vitamins.", img: "/fitbliss/wp-content/uploads/2026/07/IV-Therapy.jpg", href: "/fitbliss/iv-therapy/" } },
                            { label: "Steam & Sauna", href: "/fitbliss/steam-sauna/", hint: "Heat Therapy", feature: { tag: "Wellness", title: "Steam & Sauna", body: "Detoxify and relax muscles.", img: "/fitbliss/wp-content/uploads/2026/07/steam-sauna.jpg", href: "/fitbliss/steam-sauna/" } }
                        ]
                    },
                    {
                        heading: "Lifestyle", items: [
                            { label: "Nutrition & Diet", href: "/fitbliss/nutrition/", hint: "Consultation", feature: { tag: "Lifestyle", title: "Nutrition & Diet", body: "Personalized diet plans.", img: "/fitbliss/wp-content/uploads/2026/07/Nutrition-Diet.png", href: "/fitbliss/nutrition/" } },
                            { label: "Salon", href: "/fitbliss/salon/", hint: "Grooming", feature: { tag: "Lifestyle", title: "Salon", body: "Premium grooming services.", img: "/fitbliss/wp-content/uploads/2026/07/Salon.jpg", href: "/fitbliss/salon/" } },
                            { label: "EatBliss Café", href: "/fitbliss/cafe/", hint: "Healthy Food", feature: { tag: "Lifestyle", title: "EatBliss Café", body: "Nutritious and delicious meals.", img: "/fitbliss/wp-content/uploads/2026/07/IMG_0639-scaled.webp", href: "/fitbliss/cafe/" } }
                        ]
                    },
                    {
                        heading: "Equipments", items: [
                            { label: "Equipment", href: "/fitbliss/equipment/", hint: "stack the equipment", feature: { tag: "Lifestyle", title: "Equipment", body: "We didn't stack the equipment and call it a gym.", img: "/fitbliss/wp-content/uploads/2026/07/DSC_3887-scaled.jpg", href: "/fitbliss/equipment/" } },

                        ]
                    }
                ]
            },

        };


        const linkHref = (nm) => {
            const customLinks = { "Home": "/fitbliss/", "About Us": "/fitbliss/about/", "Services": "/fitbliss/gym/", "Membership": "/fitbliss/membership/", "Gallery": "/fitbliss/gallery/", "Blog": "/fitbliss/blog/", "Trainers": "/fitbliss/trainers/", "Contact": "/fitbliss/contact/" };
            return customLinks[nm] || "#" + nm.toLowerCase();
        };

        // Build left + right nav
        function buildNav(el, names) {
            names.forEach(nm => {
                const div = document.createElement("div");
                div.className = "item";
                div.dataset.name = nm;
                div.innerHTML = `<a class="link" href="${linkHref(nm)}">${nm}</a>`;
                div.addEventListener("mouseenter", () => openMega(megaMenus[nm] ? nm : null));
                el.appendChild(div);
            });
        }
        if (document.getElementById("leftNav") && document.getElementById("leftNav").children.length === 0) { buildNav(document.getElementById("leftNav"), nav.slice(0, 4)); } else if (document.getElementById("leftNav")) { setupNavEvents(document.getElementById("leftNav")); }
        if (document.getElementById("rightNav") && document.getElementById("rightNav").children.length === 0) { buildNav(document.getElementById("rightNav"), nav.slice(4)); } else if (document.getElementById("rightNav")) { setupNavEvents(document.getElementById("rightNav")); }

        // Mega menu
        const mega = document.getElementById("mega");
        const megaInner = document.getElementById("megaInner");
        let currentMenu = null;

        function openMega(name) {
            currentMenu = name;
            document.querySelectorAll(".navlist .item").forEach(i => i.classList.toggle("open", i.dataset.name === name));
            if (!name || !megaMenus[name]) { mega.classList.remove("show"); megaInner.innerHTML = ""; return; }
            const m = megaMenus[name];

            const renderFeature = (f) => `
        <div class="imgwrap">
         <img
    src="${f.img}"
    alt="${f.title}"
    style="object-position:${f.position || 'center'};"
  />
          <div class="cap">
            <div class="t">${f.tag}</div>
            <div class="h">${f.title}</div>
          </div>
        </div>
        <p>${f.body}</p>
        <span class="more">Explore →</span>
    `;

            megaInner.innerHTML = `
      <a class="feature" id="megaFeature" href="${m.feature.href}">
        ${renderFeature(m.feature)}
      </a>
      <div style="grid-column: 2 / -1; display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 40px; align-items: start;">
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
            mega.classList.add("show");

            // Dynamic hover effect
            const featureEl = document.getElementById("megaFeature");
            document.querySelectorAll(".mega-sub-item").forEach(el => {
                el.addEventListener("mouseenter", () => {
                    const c = el.dataset.col;
                    const i = el.dataset.item;
                    const item = m.cols[c].items[i];
                    const f = item.feature || m.feature;
                    featureEl.innerHTML = renderFeature(f);
                    featureEl.href = f.href || item.href;
                });
            });
        }

        const headerEl = document.getElementById("header");
        const megaInnerEl = document.getElementById("megaInner");

        // Close mega menu when leaving megaInner or header
        megaInnerEl.addEventListener("mouseleave", () => openMega(null));
        headerEl.addEventListener("mouseleave", () => openMega(null));

        // Close mega menu when clicking a link inside mega menu
        mega.addEventListener("click", (e) => {
            if (e.target.closest("a")) {
                openMega(null);
            }
        });

        // Close mega menu when clicking or tapping anywhere outside header
        document.addEventListener("click", (e) => {
            if (!e.target.closest("#header")) {
                openMega(null);
            }
        });

        // Close mega menu on page scroll
        window.addEventListener("scroll", () => {
            if (currentMenu) openMega(null);
        }, { passive: true });

        // Close mega menu immediately when cursor moves outside navrow & megaInner bounds
        document.addEventListener("mousemove", (e) => {
            if (!currentMenu) return;
            const navRow = document.querySelector(".navrow");
            if (!navRow || !megaInnerEl) return;

            const navRect = navRow.getBoundingClientRect();
            const megaRect = megaInnerEl.getBoundingClientRect();

            // Check if cursor is inside navrow or megaInner (with 8px seam buffer)
            const inNav = e.clientX >= navRect.left && e.clientX <= navRect.right && e.clientY >= navRect.top && e.clientY <= navRect.bottom + 8;
            const inMegaInner = mega.classList.contains("show") && e.clientX >= megaRect.left && e.clientX <= megaRect.right && e.clientY >= megaRect.top - 8 && e.clientY <= megaRect.bottom;

            if (!inNav && !inMegaInner) {
                openMega(null);
            }
        });

        // Mobile menu
        const burger = document.getElementById("burger");
        const mobile = document.getElementById("mobile");
        const mobileNav = document.getElementById("mobileNav");

        const chevronSVG = `<svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>`;

        nav.forEach((nm, idx) => {
            const mm = megaMenus[nm];
            const div = document.createElement("div");
            div.className = "m-item";
            const numStr = String(idx + 1).padStart(2, "0");

            if (mm) {
                // Build columns HTML with section labels
                const colsHTML = mm.cols.map(col => `
        <div class="m-col-label">${col.heading}</div>
        <div class="m-sub-list">
          ${col.items.map(it => `
            <a href="${it.href}">
              <span>${it.label}${it.hint ? `<span class="m-sub-hint"> — ${it.hint}</span>` : ""}</span>
              <span class="m-sub-arrow">→</span>
            </a>`).join("")}
        </div>`).join("");

                div.innerHTML = `
        <div class="m-trigger" role="button" aria-expanded="false">
          <a class="m-link-plain" href="${linkHref(nm)}">
            <span class="m-num">${numStr}</span>${nm}
          </a>
          <span class="m-chevron">${chevronSVG}</span>
        </div>
        <div class="m-body">
          <div class="m-col-group">${colsHTML}</div>
        </div>`;

                // Accordion toggle — chevron click expands, link click navigates
                div.querySelector(".m-chevron").addEventListener("click", (e) => {
                    e.preventDefault();
                    triggerHaptic(15);
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

        burger.addEventListener("click", () => {
            triggerHaptic(20);
            const on = mobile.classList.toggle("show");
            burger.classList.toggle("active", on);
            if (!on) {
                // close all accordions when burger closes
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

        // Click Sound (Glass_tap_01.wav) + Haptic Vibration Engine for Buttons & Anchor Tags
        (function () {
            const clickAudioUrl = "/fitbliss/wp-content/uploads/2026/07/Glass_tap_06.wav";
            const clickAudio = new Audio(clickAudioUrl);
            clickAudio.preload = "auto";

            function playClickSound() {
                try {
                    // Clone audio node to allow fast/overlapping consecutive clicks
                    const sound = clickAudio.cloneNode(true);
                    sound.volume = 0.8;
                    const playPromise = sound.play();
                    if (playPromise !== undefined) {
                        playPromise.catch(function () {
                            clickAudio.currentTime = 0;
                            clickAudio.play().catch(function () {});
                        });
                    }
                } catch (e) {
                    try {
                        clickAudio.currentTime = 0;
                        clickAudio.play().catch(function () {});
                    } catch (err) {}
                }
            }

            window.triggerHaptic = function (duration = 20) {
                // 1. Hardware Haptic Vibration (Android / Chrome / Mobile)
                if ("vibrate" in navigator && typeof navigator.vibrate === "function") {
                    try {
                        navigator.vibrate(duration || 20);
                    } catch (e) {}
                }
                // 2. Audio Click Sound Playback
                playClickSound();
            };

            // Global listener: Triggers Sound + Haptic Vibration when any button or anchor (link) tag is clicked
            document.addEventListener("click", function (e) {
                if (!e.target) return;
                const clickable = e.target.closest("a, button, input[type='button'], input[type='submit'], [role='button'], .btn");
                if (clickable) {
                    window.triggerHaptic(20);
                }
            }, { capture: true });
        })();
    </script>
<main id="content" class="site-main post-18658 page type-page status-publish hentry">

			<div class="page-header">
			<h1 class="entry-title">Trainers</h1>		</div>
	
	<div class="page-content">
				<div data-elementor-type="wp-page" data-elementor-id="18658" class="elementor elementor-18658" data-elementor-post-type="page">
				<div class="elementor-element elementor-element-82fe82d e-con-full e-flex e-con e-parent" data-id="82fe82d" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-1fad71e elementor-widget elementor-widget-shortcode" data-id="1fad71e" data-element_type="widget" data-e-type="widget" data-widget_type="shortcode.default">
				<div class="elementor-widget-container">
							<div class="elementor-shortcode">		<div data-elementor-type="page" data-elementor-id="18650" class="elementor elementor-18650" data-elementor-post-type="elementor_library">
				<div class="elementor-element elementor-element-67da0e8a e-con-full e-flex e-con e-parent" data-id="67da0e8a" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
		<div class="elementor-element elementor-element-3ea94fa8 e-con-full e-flex e-con e-child" data-id="3ea94fa8" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-element elementor-element-6a590d69 elementor-widget elementor-widget-text-editor" data-id="6a590d69" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p style="margin: 0;"><a href="/fitbliss/">←     Back to Fitbliss</a></p>								</div>
				</div>
				<div class="elementor-element elementor-element-7e8281b3 elementor-widget elementor-widget-button" data-id="7e8281b3" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="/fitbliss/contact/">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Book a free trial</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-1af60e23 e-con-full e-flex e-con e-child" data-id="1af60e23" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
		<div class="elementor-element elementor-element-46d0b0c0 e-flex e-con-boxed e-con e-child" data-id="46d0b0c0" data-element_type="container" data-e-type="container">
					<div class="e-con-inner">
				<div class="elementor-element elementor-element-2abad4cf elementor-widget elementor-widget-text-editor" data-id="2abad4cf" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									— The coaches								</div>
				</div>
				<div class="elementor-element elementor-element-4c9736a7 elementor-widget elementor-widget-heading" data-id="4c9736a7" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h1 class="elementor-heading-title elementor-size-default">Trained to train.</h1>				</div>
				</div>
				<div class="elementor-element elementor-element-6fe305a9 elementor-widget elementor-widget-heading" data-id="6fe305a9" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h1 class="elementor-heading-title elementor-size-default">Certified to care.</h1>				</div>
				</div>
				<div class="elementor-element elementor-element-29d5696b elementor-widget elementor-widget-text-editor" data-id="29d5696b" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p style="margin:0;max-width:640px;">International credentials, years on the floor, and a reputation built on real transformations. Explore our team by specialization.</p>								</div>
				</div>
					</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-262a06f3 e-con-full e-flex e-con e-child" data-id="262a06f3" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-element elementor-element-fb5f795 elementor-widget elementor-widget-button" data-id="fb5f795" data-element_type="widget" data-e-type="widget" id="tab-all" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="#">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">All (27)</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				<div class="elementor-element elementor-element-8526577 elementor-widget elementor-widget-button" data-id="8526577" data-element_type="widget" data-e-type="widget" id="tab-strength" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="#strength">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Strength (12)</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				<div class="elementor-element elementor-element-62840bdf elementor-widget elementor-widget-button" data-id="62840bdf" data-element_type="widget" data-e-type="widget" id="tab-pilates" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="#pilates">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Pilates (7)</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				<div class="elementor-element elementor-element-3e19c41 elementor-widget elementor-widget-button" data-id="3e19c41" data-element_type="widget" data-e-type="widget" id="tab-boxing" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="#boxing">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Boxing (4)</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				<div class="elementor-element elementor-element-f5ac0e4 elementor-widget elementor-widget-button" data-id="f5ac0e4" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="#sppinning">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Spinning Bike (1)</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				<div class="elementor-element elementor-element-444f7f80 elementor-widget elementor-widget-button" data-id="444f7f80" data-element_type="widget" data-e-type="widget" id="tab-other" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="#other">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Other (3)</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-222c8b4b e-con-full e-flex e-con e-child" data-id="222c8b4b" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-1d05e270 elementor-widget elementor-widget-html" data-id="1d05e270" data-element_type="widget" data-e-type="widget" data-widget_type="html.default">
				<div class="elementor-widget-container">
					<style>
  .fb-tab-active, .fb-tab-active a {
    background: #37c080 !important;
    color: #050a0b !important;
    border-color: #37c080 !important;
  }
</style>
<script>
(function() {
  var catKeys = ["strength", "pilates", "boxing", "other"];
  function findClickable(id) {
    var el = document.getElementById(id);
    if (!el) return null;
    if (el.tagName === "A") return el;
    var a = el.querySelector("a");
    return a || el;
  }
  var tabAll = findClickable("tab-all");
  var tabs = {};
  catKeys.forEach(function(k) { tabs[k] = findClickable("tab-" + k); });

  function styleTarget(clickableEl) {
    return clickableEl && clickableEl.closest ? (clickableEl.closest(".elementor-widget-button") || clickableEl) : clickableEl;
  }

  function showCat(cat) {
    catKeys.forEach(function(k) {
      var section = document.getElementById(k);
      if (section) section.style.display = (cat === "all" || cat === k) ? "" : "none";
    });
    var allTargets = [tabAll].concat(catKeys.map(function(k) { return tabs[k]; }));
    allTargets.forEach(function(el) {
      var t = styleTarget(el);
      if (t) t.classList.remove("fb-tab-active");
    });
    var active = cat === "all" ? tabAll : tabs[cat];
    var t = styleTarget(active);
    if (t) t.classList.add("fb-tab-active");
  }

  if (tabAll) tabAll.addEventListener("click", function(e) {
    e.preventDefault(); showCat("all"); history.replaceState(null, "", "#");
  });
  catKeys.forEach(function(k) {
    if (tabs[k]) tabs[k].addEventListener("click", function(e) {
      e.preventDefault(); showCat(k); history.replaceState(null, "", "#" + k);
    });
  });

  function fromHash() {
    var h = (location.hash || "").replace("#", "");
    showCat(catKeys.indexOf(h) !== -1 ? h : "all");
  }
  window.addEventListener("hashchange", fromHash);
  fromHash();
})();
</script>				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-67520a22 e-con-full e-flex e-con e-child" data-id="67520a22" data-element_type="container" data-e-type="container" id="strength" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
		<div class="elementor-element elementor-element-6ac59f9 e-con-full e-flex e-con e-child" data-id="6ac59f9" data-element_type="container" data-e-type="container">
		<div class="elementor-element elementor-element-2c8a7ad1 e-con-full e-flex e-con e-child" data-id="2c8a7ad1" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-38a3f265 elementor-widget elementor-widget-text-editor" data-id="38a3f265" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p>— 01 — Strength Trainers </p>								</div>
				</div>
				<div class="elementor-element elementor-element-2e85fc6b elementor-widget elementor-widget-heading" data-id="2e85fc6b" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Strength Team</h2>				</div>
				</div>
				<div class="elementor-element elementor-element-77bc265 elementor-widget elementor-widget-text-editor" data-id="77bc265" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p style="margin: 0;">Programmed, progressive, and built for real bodies. Our strength floor is led by coaches with a decade-plus of experience turning beginners into lifters and lifters into athletes.</p>								</div>
				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-2cca473c e-con-full e-flex e-con e-child" data-id="2cca473c" data-element_type="container" data-e-type="container">
		<div class="elementor-element elementor-element-65c39655 e-con-full e-flex e-con e-child" data-id="65c39655" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-element elementor-element-5ca831fb elementor-widget elementor-widget-html" data-id="5ca831fb" data-element_type="widget" data-e-type="widget" data-widget_type="html.default">
				<div class="elementor-widget-container">
					<div style="position:relative;width:100%;height:340px;overflow:hidden;">
  <img decoding="async" src="/fitbliss/wp-content/uploads/2026/07/Gurpreet-Singh.jpg" alt="Gurpreet Singh" style="width:100%;height:100%;object-fit:cover;display:block;" />
  <div style="position:absolute;top:14px;right:14px;background:rgba(1,3,3,0.75);border:1px solid rgba(55,192,128,0.6);padding:6px 10px;font-family:'Barlow',sans-serif;font-size:10px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#37c080;">15+ yrs</div>
  <div style="position:absolute;left:0;right:0;bottom:0;background:linear-gradient(to top, rgba(1,3,3,0.9), rgba(1,3,3,0.15) 70%, transparent);padding:16px 18px 14px;">
    <div style="font-family:'Bebas Neue',Impact,sans-serif;font-size:24px;letter-spacing:1px;text-transform:uppercase;color:#f4ead5;line-height:1.1;">Gurpreet Singh</div>
    <div style="font-family:'Barlow',sans-serif;font-size:10px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#37c080;margin-top:3px;">Strength Coach & Floor Manager</div>
  </div>
</div>				</div>
				</div>
		<div class="elementor-element elementor-element-642d35d1 e-con-full e-flex e-con e-child" data-id="642d35d1" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-6923350b elementor-widget elementor-widget-text-editor" data-id="6923350b" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p style="margin: 0;">Strength Coach and Floor Manager at Fitbliss by Shruti Kapoor. 15+ years in the fitness industry and associated with Fitbliss since the gym&#8217;s opening.</p>								</div>
				</div>
				<div class="elementor-element elementor-element-78164abd elementor-widget elementor-widget-text-editor" data-id="78164abd" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									— Expertise								</div>
				</div>
				<div class="elementor-element elementor-element-73d70e73 elementor-widget elementor-widget-text-editor" data-id="73d70e73" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<div><span style="display:inline-block;border:1px solid rgba(255,255,255,0.10);background:rgba(255,255,255,0.03);color:#f4f2ea;opacity:0.85;padding:6px 10px;margin:0 6px 6px 0;font-size:10px;text-transform:uppercase;letter-spacing:1px;font-family:Barlow,sans-serif;">Strength training</span><span style="display:inline-block;border:1px solid rgba(255,255,255,0.10);background:rgba(255,255,255,0.03);color:#f4f2ea;opacity:0.85;padding:6px 10px;margin:0 6px 6px 0;font-size:10px;text-transform:uppercase;letter-spacing:1px;font-family:Barlow,sans-serif;">Fitness programming</span><span style="display:inline-block;border:1px solid rgba(255,255,255,0.10);background:rgba(255,255,255,0.03);color:#f4f2ea;opacity:0.85;padding:6px 10px;margin:0 6px 6px 0;font-size:10px;text-transform:uppercase;letter-spacing:1px;font-family:Barlow,sans-serif;">Member guidance</span><span style="display:inline-block;border:1px solid rgba(255,255,255,0.10);background:rgba(255,255,255,0.03);color:#f4f2ea;opacity:0.85;padding:6px 10px;margin:0 6px 6px 0;font-size:10px;text-transform:uppercase;letter-spacing:1px;font-family:Barlow,sans-serif;">Performance improvement</span></div>								</div>
				</div>
		<div class="elementor-element elementor-element-5c83dd8 e-con-full e-flex e-con e-child" data-id="5c83dd8" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-8009c25 elementor-widget elementor-widget-button" data-id="8009c25" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="https://wa.me/917470787014">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Book session</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				<div class="elementor-element elementor-element-484fc71c elementor-widget elementor-widget-button" data-id="484fc71c" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="https://wa.me/917470787014">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">WhatsApp</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-2d2e32c9 e-con-full e-flex e-con e-child" data-id="2d2e32c9" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-element elementor-element-14cb7fca elementor-widget elementor-widget-html" data-id="14cb7fca" data-element_type="widget" data-e-type="widget" data-widget_type="html.default">
				<div class="elementor-widget-container">
					<div style="position:relative;width:100%;height:340px;overflow:hidden;">
  <img decoding="async" src="/fitbliss/wp-content/uploads/2026/07/Vikram-Jayaraj.jpg" alt="Vikram Jayaraj" style="width:100%;height:100%;object-fit:cover;display:block;" />
  <div style="position:absolute;top:14px;right:14px;background:rgba(1,3,3,0.75);border:1px solid rgba(55,192,128,0.6);padding:6px 10px;font-family:'Barlow',sans-serif;font-size:10px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#37c080;">11+ yrs</div>
  <div style="position:absolute;left:0;right:0;bottom:0;background:linear-gradient(to top, rgba(1,3,3,0.9), rgba(1,3,3,0.15) 70%, transparent);padding:16px 18px 14px;">
    <div style="font-family:'Bebas Neue',Impact,sans-serif;font-size:24px;letter-spacing:1px;text-transform:uppercase;color:#f4ead5;line-height:1.1;">Vikram Jayaraj</div>
    <div style="font-family:'Barlow',sans-serif;font-size:10px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#37c080;margin-top:3px;">Professional Fitness Coach</div>
  </div>
</div>				</div>
				</div>
		<div class="elementor-element elementor-element-49fd2b7d e-con-full e-flex e-con e-child" data-id="49fd2b7d" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-270f6c81 elementor-widget elementor-widget-text-editor" data-id="270f6c81" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p style="margin: 0;">Professional Fitness Coach with 11+ years of experience and multiple professional certifications. Associated with Team Fitbliss, helping clients achieve sustainable results through personalized coaching and evidence-based training methods.</p>								</div>
				</div>
				<div class="elementor-element elementor-element-ff66170 elementor-widget elementor-widget-text-editor" data-id="ff66170" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									— Expertise								</div>
				</div>
				<div class="elementor-element elementor-element-1b180f1a elementor-widget elementor-widget-text-editor" data-id="1b180f1a" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<div><span style="display:inline-block;border:1px solid rgba(255,255,255,0.10);background:rgba(255,255,255,0.03);color:#f4f2ea;opacity:0.85;padding:6px 10px;margin:0 6px 6px 0;font-size:10px;text-transform:uppercase;letter-spacing:1px;font-family:Barlow,sans-serif;">Fat loss</span><span style="display:inline-block;border:1px solid rgba(255,255,255,0.10);background:rgba(255,255,255,0.03);color:#f4f2ea;opacity:0.85;padding:6px 10px;margin:0 6px 6px 0;font-size:10px;text-transform:uppercase;letter-spacing:1px;font-family:Barlow,sans-serif;">Strength training</span><span style="display:inline-block;border:1px solid rgba(255,255,255,0.10);background:rgba(255,255,255,0.03);color:#f4f2ea;opacity:0.85;padding:6px 10px;margin:0 6px 6px 0;font-size:10px;text-transform:uppercase;letter-spacing:1px;font-family:Barlow,sans-serif;">Nutrition</span><span style="display:inline-block;border:1px solid rgba(255,255,255,0.10);background:rgba(255,255,255,0.03);color:#f4f2ea;opacity:0.85;padding:6px 10px;margin:0 6px 6px 0;font-size:10px;text-transform:uppercase;letter-spacing:1px;font-family:Barlow,sans-serif;">Rehabilitation</span><span style="display:inline-block;border:1px solid rgba(255,255,255,0.10);background:rgba(255,255,255,0.03);color:#f4f2ea;opacity:0.85;padding:6px 10px;margin:0 6px 6px 0;font-size:10px;text-transform:uppercase;letter-spacing:1px;font-family:Barlow,sans-serif;">Body transformation</span></div>								</div>
				</div>
		<div class="elementor-element elementor-element-16c8002b e-con-full e-flex e-con e-child" data-id="16c8002b" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-3c028e93 elementor-widget elementor-widget-button" data-id="3c028e93" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="https://wa.me/917470787014">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Book session</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				<div class="elementor-element elementor-element-435c707c elementor-widget elementor-widget-button" data-id="435c707c" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="https://wa.me/917470787014">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">WhatsApp</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-20af1854 e-con-full e-flex e-con e-child" data-id="20af1854" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-element elementor-element-52d9129b elementor-widget elementor-widget-html" data-id="52d9129b" data-element_type="widget" data-e-type="widget" data-widget_type="html.default">
				<div class="elementor-widget-container">
					<div style="position:relative;width:100%;height:340px;overflow:hidden;">
  <img decoding="async" src="/fitbliss/wp-content/uploads/2026/07/Raghav-Makhija.jpg" alt="Raghav Makhija" style="width:100%;height:100%;object-fit:cover;display:block;" />
  
    <div style="position:absolute;top:14px;right:14px;background:rgba(1,3,3,0.75);border:1px solid rgba(55,192,128,0.6);padding:6px 10px;font-family:'Barlow',sans-serif;font-size:10px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#37c080;">5+ yrs</div>
  
  <div style="position:absolute;left:0;right:0;bottom:0;background:linear-gradient(to top, rgba(1,3,3,0.9), rgba(1,3,3,0.15) 70%, transparent);padding:16px 18px 14px;">
    <div style="font-family:'Bebas Neue',Impact,sans-serif;font-size:24px;letter-spacing:1px;text-transform:uppercase;color:#f4ead5;line-height:1.1;">Raghav Makhija</div>
    <div style="font-family:'Barlow',sans-serif;font-size:10px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#37c080;margin-top:3px;">Strength Coach</div>
  </div>
</div>				</div>
				</div>
		<div class="elementor-element elementor-element-2b17df73 e-con-full e-flex e-con e-child" data-id="2b17df73" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-5f0574b elementor-widget elementor-widget-text-editor" data-id="5f0574b" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p style="margin: 0;">Dedicated Strength Coach at Fitbliss by Shruti Kapoor, committed to helping members achieve their fitness goals through structured training and personalized guidance. Focuses on effective workout strategies tailored to individual needs.</p>								</div>
				</div>
				<div class="elementor-element elementor-element-36314119 elementor-widget elementor-widget-text-editor" data-id="36314119" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									— Expertise								</div>
				</div>
				<div class="elementor-element elementor-element-42eb8b7b elementor-widget elementor-widget-text-editor" data-id="42eb8b7b" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<div><span style="display:inline-block;border:1px solid rgba(255,255,255,0.10);background:rgba(255,255,255,0.03);color:#f4f2ea;opacity:0.85;padding:6px 10px;margin:0 6px 6px 0;font-size:10px;text-transform:uppercase;letter-spacing:1px;font-family:Barlow,sans-serif;">Strength training &#038; workout programming</span><span style="display:inline-block;border:1px solid rgba(255,255,255,0.10);background:rgba(255,255,255,0.03);color:#f4f2ea;opacity:0.85;padding:6px 10px;margin:0 6px 6px 0;font-size:10px;text-transform:uppercase;letter-spacing:1px;font-family:Barlow,sans-serif;">Functional fitness</span><span style="display:inline-block;border:1px solid rgba(255,255,255,0.10);background:rgba(255,255,255,0.03);color:#f4f2ea;opacity:0.85;padding:6px 10px;margin:0 6px 6px 0;font-size:10px;text-transform:uppercase;letter-spacing:1px;font-family:Barlow,sans-serif;">Performance enhancement</span><span style="display:inline-block;border:1px solid rgba(255,255,255,0.10);background:rgba(255,255,255,0.03);color:#f4f2ea;opacity:0.85;padding:6px 10px;margin:0 6px 6px 0;font-size:10px;text-transform:uppercase;letter-spacing:1px;font-family:Barlow,sans-serif;">Personalized coaching</span><span style="display:inline-block;border:1px solid rgba(255,255,255,0.10);background:rgba(255,255,255,0.03);color:#f4f2ea;opacity:0.85;padding:6px 10px;margin:0 6px 6px 0;font-size:10px;text-transform:uppercase;letter-spacing:1px;font-family:Barlow,sans-serif;">Progress tracking</span></div>								</div>
				</div>
		<div class="elementor-element elementor-element-54618399 e-con-full e-flex e-con e-child" data-id="54618399" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-1ae02eeb elementor-widget elementor-widget-button" data-id="1ae02eeb" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="https://wa.me/917470787014">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Book session</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				<div class="elementor-element elementor-element-462f0539 elementor-widget elementor-widget-button" data-id="462f0539" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="https://wa.me/917470787014">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">WhatsApp</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-3434c465 e-con-full e-flex e-con e-child" data-id="3434c465" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-element elementor-element-3633983 elementor-widget elementor-widget-html" data-id="3633983" data-element_type="widget" data-e-type="widget" data-widget_type="html.default">
				<div class="elementor-widget-container">
					<div style="position:relative;width:100%;height:340px;overflow:hidden;">
  <img decoding="async" src="/fitbliss/wp-content/uploads/2026/07/AISHWARYA-SHARMA-1-scaled.jpg" alt="Aishwarya Sharma" style="width:100%;height:100%;object-fit:cover;display:block;" />
  
    <div style="position:absolute;top:14px;right:14px;background:rgba(1,3,3,0.75);border:1px solid rgba(55,192,128,0.6);padding:6px 10px;font-family:'Barlow',sans-serif;font-size:10px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#37c080;">5+ yrs</div>
  <div style="position:absolute;left:0;right:0;bottom:0;background:linear-gradient(to top, rgba(1,3,3,0.9), rgba(1,3,3,0.15) 70%, transparent);padding:16px 18px 14px;">
    <div style="font-family:'Bebas Neue',Impact,sans-serif;font-size:24px;letter-spacing:1px;text-transform:uppercase;color:#f4ead5;line-height:1.1;">Aishwarya Sharma</div>
    <div style="font-family:'Barlow',sans-serif;font-size:10px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#37c080;margin-top:3px;">Fitness & Dance Choreographer</div>
  </div>
</div>				</div>
				</div>
		<div class="elementor-element elementor-element-6c08288c e-con-full e-flex e-con e-child" data-id="6c08288c" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-9cee4b9 elementor-widget elementor-widget-text-editor" data-id="9cee4b9" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p style="margin: 0;"><span style="font-weight: 400;">Core Expertise: Strength training, functional fitness, calisthenics, Zumba, aerobics, flexibility/mobility, weight management, nutrition guidance, lifestyle coaching, mental wellbeing.</span></p>								</div>
				</div>
				<div class="elementor-element elementor-element-1e29552f elementor-widget elementor-widget-text-editor" data-id="1e29552f" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									— Highlights								</div>
				</div>
				<div class="elementor-element elementor-element-2f30ed33 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="2f30ed33" data-element_type="widget" data-e-type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
							<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>						</span>
										<span class="elementor-icon-list-text">K11 Certified</span>
									</li>
						</ul>
						</div>
				</div>
				<div class="elementor-element elementor-element-2a25ea9b elementor-widget elementor-widget-text-editor" data-id="2a25ea9b" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									— Expertise								</div>
				</div>
				<div class="elementor-element elementor-element-10e91f5f elementor-widget elementor-widget-text-editor" data-id="10e91f5f" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<div><span style="display:inline-block;border:1px solid rgba(255,255,255,0.10);background:rgba(255,255,255,0.03);color:#f4f2ea;opacity:0.85;padding:6px 10px;margin:0 6px 6px 0;font-size:10px;text-transform:uppercase;letter-spacing:1px;font-family:Barlow,sans-serif;">Strength training</span><span style="display:inline-block;border:1px solid rgba(255,255,255,0.10);background:rgba(255,255,255,0.03);color:#f4f2ea;opacity:0.85;padding:6px 10px;margin:0 6px 6px 0;font-size:10px;text-transform:uppercase;letter-spacing:1px;font-family:Barlow,sans-serif;">Dance &#038; choreography</span><span style="display:inline-block;border:1px solid rgba(255,255,255,0.10);background:rgba(255,255,255,0.03);color:#f4f2ea;opacity:0.85;padding:6px 10px;margin:0 6px 6px 0;font-size:10px;text-transform:uppercase;letter-spacing:1px;font-family:Barlow,sans-serif;">Zumba &#038; aerobics</span><span style="display:inline-block;border:1px solid rgba(255,255,255,0.10);background:rgba(255,255,255,0.03);color:#f4f2ea;opacity:0.85;padding:6px 10px;margin:0 6px 6px 0;font-size:10px;text-transform:uppercase;letter-spacing:1px;font-family:Barlow,sans-serif;">Calisthenics</span><span style="display:inline-block;border:1px solid rgba(255,255,255,0.10);background:rgba(255,255,255,0.03);color:#f4f2ea;opacity:0.85;padding:6px 10px;margin:0 6px 6px 0;font-size:10px;text-transform:uppercase;letter-spacing:1px;font-family:Barlow,sans-serif;">Functional training</span><span style="display:inline-block;border:1px solid rgba(255,255,255,0.10);background:rgba(255,255,255,0.03);color:#f4f2ea;opacity:0.85;padding:6px 10px;margin:0 6px 6px 0;font-size:10px;text-transform:uppercase;letter-spacing:1px;font-family:Barlow,sans-serif;">Flexibility &#038; mobility</span><span style="display:inline-block;border:1px solid rgba(255,255,255,0.10);background:rgba(255,255,255,0.03);color:#f4f2ea;opacity:0.85;padding:6px 10px;margin:0 6px 6px 0;font-size:10px;text-transform:uppercase;letter-spacing:1px;font-family:Barlow,sans-serif;">Weight management</span><span style="display:inline-block;border:1px solid rgba(255,255,255,0.10);background:rgba(255,255,255,0.03);color:#f4f2ea;opacity:0.85;padding:6px 10px;margin:0 6px 6px 0;font-size:10px;text-transform:uppercase;letter-spacing:1px;font-family:Barlow,sans-serif;">Nutrition guidance</span><span style="display:inline-block;border:1px solid rgba(255,255,255,0.10);background:rgba(255,255,255,0.03);color:#f4f2ea;opacity:0.85;padding:6px 10px;margin:0 6px 6px 0;font-size:10px;text-transform:uppercase;letter-spacing:1px;font-family:Barlow,sans-serif;">Mental wellbeing</span></div>								</div>
				</div>
		<div class="elementor-element elementor-element-7074a11 e-con-full e-flex e-con e-child" data-id="7074a11" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-5115f674 elementor-widget elementor-widget-button" data-id="5115f674" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="https://wa.me/917470787014">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Book session</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				<div class="elementor-element elementor-element-3fda0d8e elementor-widget elementor-widget-button" data-id="3fda0d8e" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="https://wa.me/917470787014">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">WhatsApp</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-1ec044d e-con-full e-flex e-con e-child" data-id="1ec044d" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-element elementor-element-197b8f9 elementor-widget elementor-widget-html" data-id="197b8f9" data-element_type="widget" data-e-type="widget" data-widget_type="html.default">
				<div class="elementor-widget-container">
					<div style="position:relative;width:100%;height:340px;overflow:hidden;">
  <img decoding="async" src="/fitbliss/wp-content/uploads/2026/07/abhishek-.jpeg" alt="Aishwarya Sharma" style="width:100%;height:100%;object-fit:cover;display:block;" />
      <div style="position:absolute;top:14px;right:14px;background:rgba(1,3,3,0.75);border:1px solid rgba(55,192,128,0.6);padding:6px 10px;font-family:'Barlow',sans-serif;font-size:10px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#37c080;">5+ yrs</div>
  
  <div style="position:absolute;left:0;right:0;bottom:0;background:linear-gradient(to top, rgba(1,3,3,0.9), rgba(1,3,3,0.15) 70%, transparent);padding:16px 18px 14px;">
    <div style="font-family:'Bebas Neue',Impact,sans-serif;font-size:24px;letter-spacing:1px;text-transform:uppercase;color:#f4ead5;line-height:1.1;">ABHISHEK BHARTI</div>
    <div style="font-family:'Barlow',sans-serif;font-size:10px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#37c080;margin-top:3px;">CERTIFIED FITNESS TRAINER</div>
  </div>
</div>				</div>
				</div>
		<div class="elementor-element elementor-element-589eb85 e-con-full e-flex e-con e-child" data-id="589eb85" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-7ff63cc elementor-widget elementor-widget-text-editor" data-id="7ff63cc" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p style="margin: 0;">Abhishek Bharti is a <strong data-start="74" data-end="103">Certified Fitness Trainer</strong> at <strong data-start="107" data-end="136">Fitbliss by Shruti Kapoor</strong> with <strong data-start="142" data-end="168">5+ years of experience</strong> in personal training, strength training, fat loss, and body transformation. He specialises in customised workout programmes, functional training, and nutrition guidance, helping clients achieve sustainable results through personalised coaching and a goal-oriented approach to fitness.</p>								</div>
				</div>
				<div class="elementor-element elementor-element-1d8c4ab elementor-widget elementor-widget-text-editor" data-id="1d8c4ab" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									— Expertise								</div>
				</div>
				<div class="elementor-element elementor-element-6c85ca1 elementor-widget elementor-widget-text-editor" data-id="6c85ca1" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<div><span style="display: inline-block; border: 1px solid rgba(255,255,255,0.10); background: rgba(255,255,255,0.03); color: #f4f2ea; opacity: 0.85; padding: 6px 10px; margin: 0 6px 6px 0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; font-family: Barlow,sans-serif;">PERSONAL TRAINING</span><span style="display: inline-block; border: 1px solid rgba(255,255,255,0.10); background: rgba(255,255,255,0.03); color: #f4f2ea; opacity: 0.85; padding: 6px 10px; margin: 0 6px 6px 0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; font-family: Barlow,sans-serif;">STRENGTH TRAINING</span><span style="display: inline-block; border: 1px solid rgba(255,255,255,0.10); background: rgba(255,255,255,0.03); color: #f4f2ea; opacity: 0.85; padding: 6px 10px; margin: 0 6px 6px 0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; font-family: Barlow,sans-serif;">FAT LOSS &amp; BODY TRANSFORMATION</span><span style="display: inline-block; border: 1px solid rgba(255,255,255,0.10); background: rgba(255,255,255,0.03); color: #f4f2ea; opacity: 0.85; padding: 6px 10px; margin: 0 6px 6px 0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; font-family: Barlow,sans-serif;">FUNCTIONAL TRAINING &amp; NUTRITION GUIDANCE</span></div>								</div>
				</div>
		<div class="elementor-element elementor-element-adebbec e-con-full e-flex e-con e-child" data-id="adebbec" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-4e0c399 elementor-widget elementor-widget-button" data-id="4e0c399" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="https://wa.me/917470787014">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Book session</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				<div class="elementor-element elementor-element-b5fd251 elementor-widget elementor-widget-button" data-id="b5fd251" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="https://wa.me/917470787014">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">WhatsApp</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-7b82cf9 e-con-full e-flex e-con e-child" data-id="7b82cf9" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-element elementor-element-eaa3826 elementor-widget elementor-widget-html" data-id="eaa3826" data-element_type="widget" data-e-type="widget" data-widget_type="html.default">
				<div class="elementor-widget-container">
					<div style="position:relative;width:100%;height:340px;overflow:hidden;">
  <img decoding="async" src="/fitbliss/wp-content/uploads/2026/07/WhatsApp-Image-2026-07-26-at-4.06.18-PM.jpeg" alt="Aishwarya Sharma" style="width:100%;height:100%;object-fit:cover;display:block;" />
  
      <div style="position:absolute;top:14px;right:14px;background:rgba(1,3,3,0.75);border:1px solid rgba(55,192,128,0.6);padding:6px 10px;font-family:'Barlow',sans-serif;font-size:10px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#37c080;">4+ yrs</div>
  
  <div style="position:absolute;left:0;right:0;bottom:0;background:linear-gradient(to top, rgba(1,3,3,0.9), rgba(1,3,3,0.15) 70%, transparent);padding:16px 18px 14px;">
    <div style="font-family:'Bebas Neue',Impact,sans-serif;font-size:24px;letter-spacing:1px;text-transform:uppercase;color:#f4ead5;line-height:1.1;">DIPESH KAUSHIK
</div>
    <div style="font-family:'Barlow',sans-serif;font-size:10px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#37c080;margin-top:3px;">CERTIFIED PERSONAL TRAINER & SPORTS NUTRITIONIST</div>
  </div>
</div>				</div>
				</div>
		<div class="elementor-element elementor-element-b35dfa4 e-con-full e-flex e-con e-child" data-id="b35dfa4" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-f61abea elementor-widget elementor-widget-text-editor" data-id="f61abea" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p style="margin: 0;">Dipesh Kaushik is a <strong data-start="95" data-end="171">Certified Personal Trainer, Sports Nutritionist, and Bodybuilding Expert</strong> at <strong data-start="175" data-end="204">Fitbliss by Shruti Kapoor</strong> with <strong data-start="210" data-end="236">4+ years of experience</strong> in strength training, body transformation, fat loss, and muscle building. A <strong data-start="313" data-end="387">Mr. Bhopal Bodybuilding Championship 2022 (Men&#8217;s Physique – 2nd Place)</strong> winner, he creates personalised, science-based fitness and nutrition plans to help clients achieve safe, effective, and lasting results.</p>								</div>
				</div>
				<div class="elementor-element elementor-element-e703113 elementor-widget elementor-widget-text-editor" data-id="e703113" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									— Expertise								</div>
				</div>
				<div class="elementor-element elementor-element-62562db elementor-widget elementor-widget-text-editor" data-id="62562db" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<div><span style="display: inline-block; border: 1px solid rgba(255,255,255,0.10); background: rgba(255,255,255,0.03); color: #f4f2ea; opacity: 0.85; padding: 6px 10px; margin: 0 6px 6px 0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; font-family: Barlow,sans-serif;">STRENGTH TRAINING</span><span style="display: inline-block; border: 1px solid rgba(255,255,255,0.10); background: rgba(255,255,255,0.03); color: #f4f2ea; opacity: 0.85; padding: 6px 10px; margin: 0 6px 6px 0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; font-family: Barlow,sans-serif;">SPORTS NUTRITION</span><span style="display: inline-block; border: 1px solid rgba(255,255,255,0.10); background: rgba(255,255,255,0.03); color: #f4f2ea; opacity: 0.85; padding: 6px 10px; margin: 0 6px 6px 0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; font-family: Barlow,sans-serif;">FAT LOSS &amp; MUSCLE BUILDING</span><span style="display: inline-block; border: 1px solid rgba(255,255,255,0.10); background: rgba(255,255,255,0.03); color: #f4f2ea; opacity: 0.85; padding: 6px 10px; margin: 0 6px 6px 0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; font-family: Barlow,sans-serif;">BODY TRANSFORMATION</span></div>								</div>
				</div>
		<div class="elementor-element elementor-element-a2998ad e-con-full e-flex e-con e-child" data-id="a2998ad" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-2cb220c elementor-widget elementor-widget-button" data-id="2cb220c" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="https://wa.me/917470787014">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Book session</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				<div class="elementor-element elementor-element-11af88f elementor-widget elementor-widget-button" data-id="11af88f" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="https://wa.me/917470787014">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">WhatsApp</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-9fb7092 e-con-full e-flex e-con e-child" data-id="9fb7092" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-element elementor-element-695043a elementor-widget elementor-widget-html" data-id="695043a" data-element_type="widget" data-e-type="widget" data-widget_type="html.default">
				<div class="elementor-widget-container">
					<div style="position:relative;width:100%;height:340px;overflow:hidden;">
  <img decoding="async" src="/fitbliss/wp-content/uploads/2026/07/TZ3_0631-scaled.jpg" alt="Aishwarya Sharma" style="width:100%;height:100%;object-fit:cover;display:block;" />
  
      <div style="position:absolute;top:14px;right:14px;background:rgba(1,3,3,0.75);border:1px solid rgba(55,192,128,0.6);padding:6px 10px;font-family:'Barlow',sans-serif;font-size:10px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#37c080;">2+ yrs</div>
  
  <div style="position:absolute;left:0;right:0;bottom:0;background:linear-gradient(to top, rgba(1,3,3,0.9), rgba(1,3,3,0.15) 70%, transparent);padding:16px 18px 14px;">
    <div style="font-family:'Bebas Neue',Impact,sans-serif;font-size:24px;letter-spacing:1px;text-transform:uppercase;color:#f4ead5;line-height:1.1;">HARSHAL BHAKTE
</div>
    <div style="font-family:'Barlow',sans-serif;font-size:10px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#37c080;margin-top:3px;">STRENGTH & CONDITIONING COACH</div>
  </div>
</div>				</div>
				</div>
		<div class="elementor-element elementor-element-5f2fba8 e-con-full e-flex e-con e-child" data-id="5f2fba8" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-22ba0ff elementor-widget elementor-widget-text-editor" data-id="22ba0ff" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p style="margin: 0;">Harshal Bhakte is a certified <strong data-start="86" data-end="119">Strength &amp; Conditioning Coach</strong> at <strong data-start="123" data-end="152">Fitbliss by Shruti Kapoor</strong> with <strong data-start="158" data-end="184">2+ years of experience</strong> at Fitbliss Wellness Center. An <strong data-start="217" data-end="239">ASCA Level 1 Coach</strong>, he holds certifications in <strong data-start="268" data-end="295">Personal Training (K11)</strong>, <strong data-start="297" data-end="316">Sports Coaching</strong>, <strong data-start="318" data-end="337">First Aid &amp; CPR</strong>, <strong data-start="339" data-end="358">Trauma Response</strong>, and <strong data-start="364" data-end="396">NSQF Level 4 Fitness Trainer</strong>, along with <strong data-start="409" data-end="423">REPS India</strong> membership. He delivers safe, effective, and performance-focused training tailored to individual fitness goals.</p>								</div>
				</div>
				<div class="elementor-element elementor-element-ee3a007 elementor-widget elementor-widget-text-editor" data-id="ee3a007" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									— Expertise								</div>
				</div>
				<div class="elementor-element elementor-element-d22379c elementor-widget elementor-widget-text-editor" data-id="d22379c" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<div><span style="display: inline-block; border: 1px solid rgba(255,255,255,0.10); background: rgba(255,255,255,0.03); color: #f4f2ea; opacity: 0.85; padding: 6px 10px; margin: 0 6px 6px 0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; font-family: Barlow,sans-serif;">STRENGTH &amp; CONDITIONING</span><span style="display: inline-block; border: 1px solid rgba(255,255,255,0.10); background: rgba(255,255,255,0.03); color: #f4f2ea; opacity: 0.85; padding: 6px 10px; margin: 0 6px 6px 0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; font-family: Barlow,sans-serif;">PERSONAL TRAINING</span></div><div><span style="display: inline-block; border: 1px solid rgba(255,255,255,0.10); background: rgba(255,255,255,0.03); color: #f4f2ea; opacity: 0.85; padding: 6px 10px; margin: 0 6px 6px 0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; font-family: Barlow,sans-serif;">SPORTS PERFORMANCE</span></div><div><span style="display: inline-block; border: 1px solid rgba(255,255,255,0.10); background: rgba(255,255,255,0.03); color: #f4f2ea; opacity: 0.85; padding: 6px 10px; margin: 0 6px 6px 0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; font-family: Barlow,sans-serif;">FUNCTIONAL FITNESS</span></div>								</div>
				</div>
		<div class="elementor-element elementor-element-29d687f e-con-full e-flex e-con e-child" data-id="29d687f" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-b3e898f elementor-widget elementor-widget-button" data-id="b3e898f" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="https://wa.me/917470787014">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Book session</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				<div class="elementor-element elementor-element-80d7a46 elementor-widget elementor-widget-button" data-id="80d7a46" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="https://wa.me/917470787014">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">WhatsApp</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-a2458f5 e-con-full e-flex e-con e-child" data-id="a2458f5" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-element elementor-element-a8acf09 elementor-widget elementor-widget-html" data-id="a8acf09" data-element_type="widget" data-e-type="widget" data-widget_type="html.default">
				<div class="elementor-widget-container">
					<div style="position:relative;width:100%;height:340px;overflow:hidden;">
  <img decoding="async" src="/fitbliss/wp-content/uploads/2026/07/lucky-image.jpeg" style="width:100%;height:100%;object-fit:cover;display:block;" />
  
      <div style="position:absolute;top:14px;right:14px;background:rgba(1,3,3,0.75);border:1px solid rgba(55,192,128,0.6);padding:6px 10px;font-family:'Barlow',sans-serif;font-size:10px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#37c080;">8+ yrs</div>
  
  <div style="position:absolute;left:0;right:0;bottom:0;background:linear-gradient(to top, rgba(1,3,3,0.9), rgba(1,3,3,0.15) 70%, transparent);padding:16px 18px 14px;">
    <div style="font-family:'Bebas Neue',Impact,sans-serif;font-size:24px;letter-spacing:1px;text-transform:uppercase;color:#f4ead5;line-height:1.1;">LUCKY KAROSIYA
</div>
    <div style="font-family:'Barlow',sans-serif;font-size:10px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#37c080;margin-top:3px;">K11 CERTIFIED PERSONAL TRAINER</div>
  </div>
</div>				</div>
				</div>
		<div class="elementor-element elementor-element-9142314 e-con-full e-flex e-con e-child" data-id="9142314" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-38aa054 elementor-widget elementor-widget-text-editor" data-id="38aa054" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p style="margin: 0;">Lucky Karosiya is a <strong data-start="77" data-end="111">K11 Certified Personal Trainer</strong> at <strong data-start="115" data-end="144">Fitbliss by Shruti Kapoor</strong> with <strong data-start="150" data-end="175">8 years of experience</strong> in the fitness industry. He specialises in personalised training, fitness guidance, motivation, and injury rehabilitation. Through customised workout programmes and recovery-focused training, he helps clients achieve their fitness goals safely and effectively.</p>								</div>
				</div>
				<div class="elementor-element elementor-element-03d2005 elementor-widget elementor-widget-text-editor" data-id="03d2005" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									— Expertise								</div>
				</div>
				<div class="elementor-element elementor-element-2d4d493 elementor-widget elementor-widget-text-editor" data-id="2d4d493" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<div><span style="display: inline-block; border: 1px solid rgba(255,255,255,0.10); background: rgba(255,255,255,0.03); color: #f4f2ea; opacity: 0.85; padding: 6px 10px; margin: 0 6px 6px 0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; font-family: Barlow,sans-serif;">PERSONAL TRAINING</span></div><div><span style="display: inline-block; border: 1px solid rgba(255,255,255,0.10); background: rgba(255,255,255,0.03); color: #f4f2ea; opacity: 0.85; padding: 6px 10px; margin: 0 6px 6px 0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; font-family: Barlow,sans-serif;">FITNESS GUIDANCE</span></div><div><span style="display: inline-block; border: 1px solid rgba(255,255,255,0.10); background: rgba(255,255,255,0.03); color: #f4f2ea; opacity: 0.85; padding: 6px 10px; margin: 0 6px 6px 0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; font-family: Barlow,sans-serif;">INJURY REHABILITATION</span></div><div><span style="display: inline-block; border: 1px solid rgba(255,255,255,0.10); background: rgba(255,255,255,0.03); color: #f4f2ea; opacity: 0.85; padding: 6px 10px; margin: 0 6px 6px 0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; font-family: Barlow,sans-serif;">sTRENGTH &amp; CONDITIONING</span></div>								</div>
				</div>
		<div class="elementor-element elementor-element-441752c e-con-full e-flex e-con e-child" data-id="441752c" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-704ea29 elementor-widget elementor-widget-button" data-id="704ea29" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="https://wa.me/917470787014">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Book session</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				<div class="elementor-element elementor-element-c9d55ed elementor-widget elementor-widget-button" data-id="c9d55ed" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="https://wa.me/917470787014">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">WhatsApp</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-692c580 e-con-full e-flex e-con e-child" data-id="692c580" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-element elementor-element-ccee4b9 elementor-widget elementor-widget-html" data-id="ccee4b9" data-element_type="widget" data-e-type="widget" data-widget_type="html.default">
				<div class="elementor-widget-container">
					<div style="position:relative;width:100%;height:340px;overflow:hidden;">
  <img decoding="async" src="/fitbliss/wp-content/uploads/2026/07/TZ3_0612-scaled.jpg" style="width:100%;height:100%;object-fit:cover;display:block;" />
  
      <div style="position:absolute;top:14px;right:14px;background:rgba(1,3,3,0.75);border:1px solid rgba(55,192,128,0.6);padding:6px 10px;font-family:'Barlow',sans-serif;font-size:10px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#37c080;">4+ yrs</div>
  
  <div style="position:absolute;left:0;right:0;bottom:0;background:linear-gradient(to top, rgba(1,3,3,0.9), rgba(1,3,3,0.15) 70%, transparent);padding:16px 18px 14px;">
    <div style="font-family:'Bebas Neue',Impact,sans-serif;font-size:24px;letter-spacing:1px;text-transform:uppercase;color:#f4ead5;line-height:1.1;">SHREYASH SANJAY CHOUHAN

</div>
    <div style="font-family:'Barlow',sans-serif;font-size:10px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#37c080;margin-top:3px;">PERSONAL TRAINER & SPORTS NUTRITIONIST</div>
  </div>
</div>				</div>
				</div>
		<div class="elementor-element elementor-element-6132049 e-con-full e-flex e-con e-child" data-id="6132049" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-cb38220 elementor-widget elementor-widget-text-editor" data-id="cb38220" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p style="margin: 0;">Shreyash Sanjay Chouhan is a certified <strong data-start="113" data-end="179">Personal Trainer, Sports Nutritionist, and Bodybuilding Expert</strong> at <strong data-start="183" data-end="212">Fitbliss by Shruti Kapoor</strong> with <strong data-start="218" data-end="244">4+ years of experience</strong> in strength training, body transformation, fat loss, and muscle building. He specialises in personalised workout and nutrition plans, helping clients achieve sustainable fitness, improved performance, and long-term health through safe, science-based training.</p>								</div>
				</div>
				<div class="elementor-element elementor-element-93181fd elementor-widget elementor-widget-text-editor" data-id="93181fd" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									— Expertise								</div>
				</div>
				<div class="elementor-element elementor-element-caa8d5c elementor-widget elementor-widget-text-editor" data-id="caa8d5c" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<div><span style="display: inline-block; border: 1px solid rgba(255,255,255,0.10); background: rgba(255,255,255,0.03); color: #f4f2ea; opacity: 0.85; padding: 6px 10px; margin: 0 6px 6px 0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; font-family: Barlow,sans-serif;">STRENGTH TRAINING</span></div><div><span style="display: inline-block; border: 1px solid rgba(255,255,255,0.10); background: rgba(255,255,255,0.03); color: #f4f2ea; opacity: 0.85; padding: 6px 10px; margin: 0 6px 6px 0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; font-family: Barlow,sans-serif;">SPORTS NUTRITION</span></div><div><span style="display: inline-block; border: 1px solid rgba(255,255,255,0.10); background: rgba(255,255,255,0.03); color: #f4f2ea; opacity: 0.85; padding: 6px 10px; margin: 0 6px 6px 0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; font-family: Barlow,sans-serif;">FAT LOSS &amp; MUSCLE BUILDING</span></div><div><span style="display: inline-block; border: 1px solid rgba(255,255,255,0.10); background: rgba(255,255,255,0.03); color: #f4f2ea; opacity: 0.85; padding: 6px 10px; margin: 0 6px 6px 0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; font-family: Barlow,sans-serif;">BODY TRANSFORMATION</span></div>								</div>
				</div>
		<div class="elementor-element elementor-element-25ad509 e-con-full e-flex e-con e-child" data-id="25ad509" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-45aaad6 elementor-widget elementor-widget-button" data-id="45aaad6" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="https://wa.me/917470787014">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Book session</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				<div class="elementor-element elementor-element-f1a767b elementor-widget elementor-widget-button" data-id="f1a767b" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="https://wa.me/917470787014">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">WhatsApp</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-ab53006 e-con-full e-flex e-con e-child" data-id="ab53006" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-element elementor-element-2953139 elementor-widget elementor-widget-html" data-id="2953139" data-element_type="widget" data-e-type="widget" data-widget_type="html.default">
				<div class="elementor-widget-container">
					<div style="position:relative;width:100%;height:340px;overflow:hidden;">
  <img decoding="async" src="/fitbliss/wp-content/uploads/2026/07/TZ3_0625-scaled.jpg" style="width:100%;height:100%;object-fit:cover;display:block;" />
  
      <div style="position:absolute;top:14px;right:14px;background:rgba(1,3,3,0.75);border:1px solid rgba(55,192,128,0.6);padding:6px 10px;font-family:'Barlow',sans-serif;font-size:10px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#37c080;">5+ yrs</div>
  
  <div style="position:absolute;left:0;right:0;bottom:0;background:linear-gradient(to top, rgba(1,3,3,0.9), rgba(1,3,3,0.15) 70%, transparent);padding:16px 18px 14px;">
    <div style="font-family:'Bebas Neue',Impact,sans-serif;font-size:24px;letter-spacing:1px;text-transform:uppercase;color:#f4ead5;line-height:1.1;">VINOD V. KUMAR

</div>
    <div style="font-family:'Barlow',sans-serif;font-size:10px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#37c080;margin-top:3px;">ACE CERTIFIED PERSONAL TRAINER & PILATES INSTRUCTOR</div>
  </div>
</div>				</div>
				</div>
		<div class="elementor-element elementor-element-a2cb7c1 e-con-full e-flex e-con e-child" data-id="a2cb7c1" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-861a869 elementor-widget elementor-widget-text-editor" data-id="861a869" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p style="margin: 0;">Vinod V. Kumar is an <strong data-start="99" data-end="133">ACE Certified Personal Trainer</strong>, <strong data-start="135" data-end="171">Balanced Body Pilates Instructor</strong>, and <strong data-start="177" data-end="230">Certified Martial Arts Coach (Black Belt 1st Dan)</strong> at <strong data-start="234" data-end="263">Fitbliss by Shruti Kapoor</strong>. With expertise in strength training, corrective exercise, prehab and rehab, Olympic lifting, and kettlebell training, he helps clients improve performance, mobility, and functional fitness. A <strong data-start="457" data-end="490">Karate National Gold Medalist</strong> and <strong data-start="495" data-end="519">First Aid, CPR &amp; AED</strong> certified professional, he delivers safe and result-oriented training.</p>								</div>
				</div>
				<div class="elementor-element elementor-element-6cd86af elementor-widget elementor-widget-text-editor" data-id="6cd86af" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									— Expertise								</div>
				</div>
				<div class="elementor-element elementor-element-77493f8 elementor-widget elementor-widget-text-editor" data-id="77493f8" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<div><span style="display: inline-block; border: 1px solid rgba(255,255,255,0.10); background: rgba(255,255,255,0.03); color: #f4f2ea; opacity: 0.85; padding: 6px 10px; margin: 0 6px 6px 0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; font-family: Barlow,sans-serif;">STRENGTH &amp; FUNCTIONAL TRAINING</span></div><div><span style="display: inline-block; border: 1px solid rgba(255,255,255,0.10); background: rgba(255,255,255,0.03); color: #f4f2ea; opacity: 0.85; padding: 6px 10px; margin: 0 6px 6px 0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; font-family: Barlow,sans-serif;">PREHAB &amp; REHABILITATION</span></div><div><span style="display: inline-block; border: 1px solid rgba(255,255,255,0.10); background: rgba(255,255,255,0.03); color: #f4f2ea; opacity: 0.85; padding: 6px 10px; margin: 0 6px 6px 0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; font-family: Barlow,sans-serif;">MARTIAL ARTS &amp; PERFORMANCE COACHING</span></div><div><span style="display: inline-block; border: 1px solid rgba(255,255,255,0.10); background: rgba(255,255,255,0.03); color: #f4f2ea; opacity: 0.85; padding: 6px 10px; margin: 0 6px 6px 0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; font-family: Barlow,sans-serif;">PILATES &amp; CORRECTIVE EXERCISE</span></div>								</div>
				</div>
		<div class="elementor-element elementor-element-82445fa e-con-full e-flex e-con e-child" data-id="82445fa" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-3d4e10e elementor-widget elementor-widget-button" data-id="3d4e10e" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="https://wa.me/917470787014">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Book session</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				<div class="elementor-element elementor-element-e8d41b6 elementor-widget elementor-widget-button" data-id="e8d41b6" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="https://wa.me/917470787014">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">WhatsApp</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-f1d9d8f e-con-full e-flex e-con e-child" data-id="f1d9d8f" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-element elementor-element-21e7542 elementor-widget elementor-widget-html" data-id="21e7542" data-element_type="widget" data-e-type="widget" data-widget_type="html.default">
				<div class="elementor-widget-container">
					<div style="position:relative;width:100%;height:340px;overflow:hidden;">
  <img decoding="async" src="/fitbliss/wp-content/uploads/2026/07/IMG_6854-1-scaled.webp" style="width:100%;height:100%;object-fit:cover;display:block;" />
  
      <div style="position:absolute;top:14px;right:14px;background:rgba(1,3,3,0.75);border:1px solid rgba(55,192,128,0.6);padding:6px 10px;font-family:'Barlow',sans-serif;font-size:10px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#37c080;">5+ yrs</div>
  
  <div style="position:absolute;left:0;right:0;bottom:0;background:linear-gradient(to top, rgba(1,3,3,0.9), rgba(1,3,3,0.15) 70%, transparent);padding:16px 18px 14px;">
    <div style="font-family:'Bebas Neue',Impact,sans-serif;font-size:24px;letter-spacing:1px;text-transform:uppercase;color:#f4ead5;line-height:1.1;">ASHUTOSH DUBEY

</div>
    <div style="font-family:'Barlow',sans-serif;font-size:10px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#37c080;margin-top:3px;">FITNESS TRAINER & NUTRITIONIST</div>
  </div>
</div>				</div>
				</div>
		<div class="elementor-element elementor-element-b3c6e17 e-con-full e-flex e-con e-child" data-id="b3c6e17" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-99a02b5 elementor-widget elementor-widget-text-editor" data-id="99a02b5" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p style="margin: 0;">Ashutosh Dubey is a <strong data-start="77" data-end="111">Fitness Trainer &amp; Nutritionist</strong> at <strong data-start="115" data-end="144">Fitbliss by Shruti Kapoor</strong> with <strong data-start="150" data-end="176">4+ years of experience</strong> in evidence-based fitness coaching. He specialises in strength training, fat loss, muscle gain, body recomposition, and functional fitness. Through personalised workout programmes and sustainable nutrition plans, he helps clients achieve long-term health, improved performance, and measurable fitness results.</p>								</div>
				</div>
				<div class="elementor-element elementor-element-c21b11e elementor-widget elementor-widget-text-editor" data-id="c21b11e" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									— Expertise								</div>
				</div>
				<div class="elementor-element elementor-element-81fe63f elementor-widget elementor-widget-text-editor" data-id="81fe63f" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<div><span style="display: inline-block; border: 1px solid rgba(255,255,255,0.10); background: rgba(255,255,255,0.03); color: #f4f2ea; opacity: 0.85; padding: 6px 10px; margin: 0 6px 6px 0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; font-family: Barlow,sans-serif;">STRENGTH TRAINING</span></div><div><span style="display: inline-block; border: 1px solid rgba(255,255,255,0.10); background: rgba(255,255,255,0.03); color: #f4f2ea; opacity: 0.85; padding: 6px 10px; margin: 0 6px 6px 0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; font-family: Barlow,sans-serif;">FAT LOSS &amp; MUSCLE GAIN</span></div><div><span style="display: inline-block; border: 1px solid rgba(255,255,255,0.10); background: rgba(255,255,255,0.03); color: #f4f2ea; opacity: 0.85; padding: 6px 10px; margin: 0 6px 6px 0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; font-family: Barlow,sans-serif;">FUNCTIONAL FITNESS</span></div><div><span style="display: inline-block; border: 1px solid rgba(255,255,255,0.10); background: rgba(255,255,255,0.03); color: #f4f2ea; opacity: 0.85; padding: 6px 10px; margin: 0 6px 6px 0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; font-family: Barlow,sans-serif;">NUTRITION COACHING</span></div>								</div>
				</div>
		<div class="elementor-element elementor-element-d2b7ebc e-con-full e-flex e-con e-child" data-id="d2b7ebc" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-504af1f elementor-widget elementor-widget-button" data-id="504af1f" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="https://wa.me/917470787014">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Book session</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				<div class="elementor-element elementor-element-57b8c53 elementor-widget elementor-widget-button" data-id="57b8c53" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="https://wa.me/917470787014">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">WhatsApp</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				</div>
				</div>
				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-6b2bfad5 e-con-full e-flex e-con e-child" data-id="6b2bfad5" data-element_type="container" data-e-type="container" id="pilates" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
		<div class="elementor-element elementor-element-38e07ef3 e-con-full e-flex e-con e-child" data-id="38e07ef3" data-element_type="container" data-e-type="container">
		<div class="elementor-element elementor-element-2b35b73d e-con-full e-flex e-con e-child" data-id="2b35b73d" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-30aeae8b elementor-widget elementor-widget-text-editor" data-id="30aeae8b" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									— 02 — Pilates Trainers								</div>
				</div>
				<div class="elementor-element elementor-element-44ceab5 elementor-widget elementor-widget-heading" data-id="44ceab5" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Pilates Team</h2>				</div>
				</div>
				<div class="elementor-element elementor-element-fe1af3b elementor-widget elementor-widget-text-editor" data-id="fe1af3b" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p style="margin: 0;">MAT, Reformer, Chair and beyond — precision-led Pilates from YKBI-trained instructors who understand alignment, rehab and strength through control.</p>								</div>
				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-6736e7f8 e-con-full e-flex e-con e-child" data-id="6736e7f8" data-element_type="container" data-e-type="container">
		<div class="elementor-element elementor-element-17a6a49f e-con-full e-flex e-con e-child" data-id="17a6a49f" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-element elementor-element-2c9d4071 elementor-widget elementor-widget-html" data-id="2c9d4071" data-element_type="widget" data-e-type="widget" data-widget_type="html.default">
				<div class="elementor-widget-container">
					<div style="position:relative;width:100%;height:340px;overflow:hidden;">
  <img decoding="async" src="/fitbliss/wp-content/uploads/2026/07/Swapnil-Sharma.jpg" alt="Swapnil Sharma" style="width:100%;height:100%;object-fit:cover;display:block;" />
  <div style="position:absolute;top:14px;right:14px;background:rgba(1,3,3,0.75);border:1px solid rgba(55,192,128,0.6);padding:6px 10px;font-family:'Barlow',sans-serif;font-size:10px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#37c080;">10 yrs</div>
  <div style="position:absolute;left:0;right:0;bottom:0;background:linear-gradient(to top, rgba(1,3,3,0.9), rgba(1,3,3,0.15) 70%, transparent);padding:16px 18px 14px;">
    <div style="font-family:'Bebas Neue',Impact,sans-serif;font-size:24px;letter-spacing:1px;text-transform:uppercase;color:#f4ead5;line-height:1.1;">Swapnil Sharma</div>
    <div style="font-family:'Barlow',sans-serif;font-size:10px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#37c080;margin-top:3px;">Pilates Instructor & Martial Arts Coach</div>
  </div>
</div>				</div>
				</div>
		<div class="elementor-element elementor-element-72a233ac e-con-full e-flex e-con e-child" data-id="72a233ac" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-6bfa263e elementor-widget elementor-widget-text-editor" data-id="6bfa263e" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p style="margin:0;">Pilates Instructor with 10 years of experience in martial arts training. Certified fitness trainer and nutritionist bringing discipline, structure and body-awareness into every session.</p>								</div>
				</div>
				<div class="elementor-element elementor-element-6594906f elementor-widget elementor-widget-text-editor" data-id="6594906f" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									— Expertise								</div>
				</div>
				<div class="elementor-element elementor-element-442ca9e0 elementor-widget elementor-widget-text-editor" data-id="442ca9e0" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<div><span style="display:inline-block;border:1px solid rgba(255,255,255,0.10);background:rgba(255,255,255,0.03);color:#f4f2ea;opacity:0.85;padding:6px 10px;margin:0 6px 6px 0;font-size:10px;text-transform:uppercase;letter-spacing:1px;font-family:Barlow,sans-serif;">Pilates instruction</span><span style="display:inline-block;border:1px solid rgba(255,255,255,0.10);background:rgba(255,255,255,0.03);color:#f4f2ea;opacity:0.85;padding:6px 10px;margin:0 6px 6px 0;font-size:10px;text-transform:uppercase;letter-spacing:1px;font-family:Barlow,sans-serif;">Martial arts coaching</span><span style="display:inline-block;border:1px solid rgba(255,255,255,0.10);background:rgba(255,255,255,0.03);color:#f4f2ea;opacity:0.85;padding:6px 10px;margin:0 6px 6px 0;font-size:10px;text-transform:uppercase;letter-spacing:1px;font-family:Barlow,sans-serif;">Certified fitness training</span><span style="display:inline-block;border:1px solid rgba(255,255,255,0.10);background:rgba(255,255,255,0.03);color:#f4f2ea;opacity:0.85;padding:6px 10px;margin:0 6px 6px 0;font-size:10px;text-transform:uppercase;letter-spacing:1px;font-family:Barlow,sans-serif;">Nutrition</span></div>								</div>
				</div>
		<div class="elementor-element elementor-element-4c73c6a2 e-con-full e-flex e-con e-child" data-id="4c73c6a2" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-2511ba51 elementor-widget elementor-widget-button" data-id="2511ba51" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="https://wa.me/917470787014">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Book session</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				<div class="elementor-element elementor-element-463e3a7c elementor-widget elementor-widget-button" data-id="463e3a7c" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="https://wa.me/917470787014">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">WhatsApp</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-2b5066a0 e-con-full e-flex e-con e-child" data-id="2b5066a0" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-element elementor-element-1d1069fd elementor-widget elementor-widget-html" data-id="1d1069fd" data-element_type="widget" data-e-type="widget" data-widget_type="html.default">
				<div class="elementor-widget-container">
					<div style="position:relative;width:100%;height:340px;overflow:hidden;">
  <img decoding="async" src="/fitbliss/wp-content/uploads/2026/07/Anugrah-Xess.jpg" alt="Anugrah Xess" style="width:100%;height:100%;object-fit:cover;display:block;" />
      <div style="position:absolute;top:14px;right:14px;background:rgba(1,3,3,0.75);border:1px solid rgba(55,192,128,0.6);padding:6px 10px;font-family:'Barlow',sans-serif;font-size:10px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#37c080;">4+ yrs</div>
  
  <div style="position:absolute;left:0;right:0;bottom:0;background:linear-gradient(to top, rgba(1,3,3,0.9), rgba(1,3,3,0.15) 70%, transparent);padding:16px 18px 14px;">
    <div style="font-family:'Bebas Neue',Impact,sans-serif;font-size:24px;letter-spacing:1px;text-transform:uppercase;color:#f4ead5;line-height:1.1;">Anugrah Xess</div>
    <div style="font-family:'Barlow',sans-serif;font-size:10px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#37c080;margin-top:3px;">Pilates Instructor</div>
  </div>
</div>				</div>
				</div>
		<div class="elementor-element elementor-element-7d80b1ab e-con-full e-flex e-con e-child" data-id="7d80b1ab" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-2bf7fd11 elementor-widget elementor-widget-text-editor" data-id="2bf7fd11" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p style="margin:0;">Professional coach for 4 years, GGFI advanced personal trainer, IIFEM academy course, Pilates instructor with YKBI for 1 year. Expertise: Food and nutrition, Corrective exercise, Kettlebell training, Anabolics.</p>								</div>
				</div>
				<div class="elementor-element elementor-element-6e9b85b8 elementor-widget elementor-widget-text-editor" data-id="6e9b85b8" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									— Expertise								</div>
				</div>
				<div class="elementor-element elementor-element-268f1422 elementor-widget elementor-widget-text-editor" data-id="268f1422" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<div><span style="display:inline-block;border:1px solid rgba(255,255,255,0.10);background:rgba(255,255,255,0.03);color:#f4f2ea;opacity:0.85;padding:6px 10px;margin:0 6px 6px 0;font-size:10px;text-transform:uppercase;letter-spacing:1px;font-family:Barlow,sans-serif;">Food and nutrition</span><span style="display:inline-block;border:1px solid rgba(255,255,255,0.10);background:rgba(255,255,255,0.03);color:#f4f2ea;opacity:0.85;padding:6px 10px;margin:0 6px 6px 0;font-size:10px;text-transform:uppercase;letter-spacing:1px;font-family:Barlow,sans-serif;">Corrective exercise</span><span style="display:inline-block;border:1px solid rgba(255,255,255,0.10);background:rgba(255,255,255,0.03);color:#f4f2ea;opacity:0.85;padding:6px 10px;margin:0 6px 6px 0;font-size:10px;text-transform:uppercase;letter-spacing:1px;font-family:Barlow,sans-serif;">Kettlebell training</span><span style="display:inline-block;border:1px solid rgba(255,255,255,0.10);background:rgba(255,255,255,0.03);color:#f4f2ea;opacity:0.85;padding:6px 10px;margin:0 6px 6px 0;font-size:10px;text-transform:uppercase;letter-spacing:1px;font-family:Barlow,sans-serif;">Anabolics</span><span style="display:inline-block;border:1px solid rgba(255,255,255,0.10);background:rgba(255,255,255,0.03);color:#f4f2ea;opacity:0.85;padding:6px 10px;margin:0 6px 6px 0;font-size:10px;text-transform:uppercase;letter-spacing:1px;font-family:Barlow,sans-serif;">Pilates</span></div>								</div>
				</div>
		<div class="elementor-element elementor-element-1f1380dc e-con-full e-flex e-con e-child" data-id="1f1380dc" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-69a82450 elementor-widget elementor-widget-button" data-id="69a82450" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="https://wa.me/917470787014">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Book session</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				<div class="elementor-element elementor-element-2384ca3c elementor-widget elementor-widget-button" data-id="2384ca3c" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="https://wa.me/917470787014">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">WhatsApp</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-2567faa9 e-con-full e-flex e-con e-child" data-id="2567faa9" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-element elementor-element-18f1681a elementor-widget elementor-widget-html" data-id="18f1681a" data-element_type="widget" data-e-type="widget" data-widget_type="html.default">
				<div class="elementor-widget-container">
					<div style="position:relative;width:100%;height:340px;overflow:hidden;">
  <img decoding="async" src="/fitbliss/wp-content/uploads/2026/07/Abhishek-Goswami.jpg" alt="Abhishek Goswami" style="width:100%;height:100%;object-fit:cover;display:block;" />
  
      <div style="position:absolute;top:14px;right:14px;background:rgba(1,3,3,0.75);border:1px solid rgba(55,192,128,0.6);padding:6px 10px;font-family:'Barlow',sans-serif;font-size:10px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#37c080;">2+ yrs</div>
  <div style="position:absolute;left:0;right:0;bottom:0;background:linear-gradient(to top, rgba(1,3,3,0.9), rgba(1,3,3,0.15) 70%, transparent);padding:16px 18px 14px;">
    <div style="font-family:'Bebas Neue',Impact,sans-serif;font-size:24px;letter-spacing:1px;text-transform:uppercase;color:#f4ead5;line-height:1.1;">Abhishek Goswami</div>
    <div style="font-family:'Barlow',sans-serif;font-size:10px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#37c080;margin-top:3px;">Pilates Instructor</div>
  </div>
</div>				</div>
				</div>
		<div class="elementor-element elementor-element-1d2b17ec e-con-full e-flex e-con e-child" data-id="1d2b17ec" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-1b331340 elementor-widget elementor-widget-text-editor" data-id="1b331340" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p style="margin:0;">Journey began as a competitive athlete in Rope Skipping — represented at National, International and All India University tournaments, and served as an official Judge for the past 2 years. YKBI-trained Pilates instructor helping clients achieve their goals effectively and safely.</p>								</div>
				</div>
				<div class="elementor-element elementor-element-7c0932fc elementor-widget elementor-widget-text-editor" data-id="7c0932fc" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									— Highlights								</div>
				</div>
				<div class="elementor-element elementor-element-2dc35b9d elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="2dc35b9d" data-element_type="widget" data-e-type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
							<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>						</span>
										<span class="elementor-icon-list-text">YKBI Certified</span>
									</li>
								<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>						</span>
										<span class="elementor-icon-list-text">National Athlete</span>
									</li>
						</ul>
						</div>
				</div>
				<div class="elementor-element elementor-element-25bf79a8 elementor-widget elementor-widget-text-editor" data-id="25bf79a8" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									— Expertise								</div>
				</div>
				<div class="elementor-element elementor-element-375e74f2 elementor-widget elementor-widget-text-editor" data-id="375e74f2" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<div><span style="display:inline-block;border:1px solid rgba(255,255,255,0.10);background:rgba(255,255,255,0.03);color:#f4f2ea;opacity:0.85;padding:6px 10px;margin:0 6px 6px 0;font-size:10px;text-transform:uppercase;letter-spacing:1px;font-family:Barlow,sans-serif;">MAT 1 &#038; MAT 2 (YKBI)</span><span style="display:inline-block;border:1px solid rgba(255,255,255,0.10);background:rgba(255,255,255,0.03);color:#f4f2ea;opacity:0.85;padding:6px 10px;margin:0 6px 6px 0;font-size:10px;text-transform:uppercase;letter-spacing:1px;font-family:Barlow,sans-serif;">Reformer 1 &#038; Reformer 2 (YKBI)</span><span style="display:inline-block;border:1px solid rgba(255,255,255,0.10);background:rgba(255,255,255,0.03);color:#f4f2ea;opacity:0.85;padding:6px 10px;margin:0 6px 6px 0;font-size:10px;text-transform:uppercase;letter-spacing:1px;font-family:Barlow,sans-serif;">Movement &#038; Principle (YKBI)</span><span style="display:inline-block;border:1px solid rgba(255,255,255,0.10);background:rgba(255,255,255,0.03);color:#f4f2ea;opacity:0.85;padding:6px 10px;margin:0 6px 6px 0;font-size:10px;text-transform:uppercase;letter-spacing:1px;font-family:Barlow,sans-serif;">Chair (YKBI)</span></div>								</div>
				</div>
		<div class="elementor-element elementor-element-364704ce e-con-full e-flex e-con e-child" data-id="364704ce" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-552b5806 elementor-widget elementor-widget-button" data-id="552b5806" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="https://wa.me/917470787014">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Book session</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				<div class="elementor-element elementor-element-3af70608 elementor-widget elementor-widget-button" data-id="3af70608" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="https://wa.me/917470787014">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">WhatsApp</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-449c5c1c e-con-full e-flex e-con e-child" data-id="449c5c1c" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-element elementor-element-1ac59071 elementor-widget elementor-widget-html" data-id="1ac59071" data-element_type="widget" data-e-type="widget" data-widget_type="html.default">
				<div class="elementor-widget-container">
					<div style="position:relative;width:100%;height:340px;overflow:hidden;">
  <img decoding="async" src="/fitbliss/wp-content/uploads/2026/07/Abhishek-Dasondhi.jpg" alt="Abhishek Dasondhi" style="width:100%;height:100%;object-fit:cover;display:block;" />
  <div style="position:absolute;top:14px;right:14px;background:rgba(1,3,3,0.75);border:1px solid rgba(55,192,128,0.6);padding:6px 10px;font-family:'Barlow',sans-serif;font-size:10px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#37c080;">2 yrs</div>
  <div style="position:absolute;left:0;right:0;bottom:0;background:linear-gradient(to top, rgba(1,3,3,0.9), rgba(1,3,3,0.15) 70%, transparent);padding:16px 18px 14px;">
    <div style="font-family:'Bebas Neue',Impact,sans-serif;font-size:24px;letter-spacing:1px;text-transform:uppercase;color:#f4ead5;line-height:1.1;">Abhishek Dasondhi</div>
    <div style="font-family:'Barlow',sans-serif;font-size:10px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#37c080;margin-top:3px;">Pilates Instructor</div>
  </div>
</div>				</div>
				</div>
		<div class="elementor-element elementor-element-555644b2 e-con-full e-flex e-con e-child" data-id="555644b2" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-669b365e elementor-widget elementor-widget-text-editor" data-id="669b365e" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p style="margin:0;">2 years of experience as a Pilates instructor at Corefit Pilates Bhopal, and 1 year as a trainee at Yasmin Karachiwala Bodyimage — Bandra branch.</p>								</div>
				</div>
				<div class="elementor-element elementor-element-61834102 elementor-widget elementor-widget-text-editor" data-id="61834102" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									— Expertise								</div>
				</div>
				<div class="elementor-element elementor-element-169002ba elementor-widget elementor-widget-text-editor" data-id="169002ba" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<div><span style="display:inline-block;border:1px solid rgba(255,255,255,0.10);background:rgba(255,255,255,0.03);color:#f4f2ea;opacity:0.85;padding:6px 10px;margin:0 6px 6px 0;font-size:10px;text-transform:uppercase;letter-spacing:1px;font-family:Barlow,sans-serif;">Stretching on MAT</span><span style="display:inline-block;border:1px solid rgba(255,255,255,0.10);background:rgba(255,255,255,0.03);color:#f4f2ea;opacity:0.85;padding:6px 10px;margin:0 6px 6px 0;font-size:10px;text-transform:uppercase;letter-spacing:1px;font-family:Barlow,sans-serif;">Reformer exercises</span><span style="display:inline-block;border:1px solid rgba(255,255,255,0.10);background:rgba(255,255,255,0.03);color:#f4f2ea;opacity:0.85;padding:6px 10px;margin:0 6px 6px 0;font-size:10px;text-transform:uppercase;letter-spacing:1px;font-family:Barlow,sans-serif;">Rehabilitation</span></div>								</div>
				</div>
		<div class="elementor-element elementor-element-65b40a7c e-con-full e-flex e-con e-child" data-id="65b40a7c" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-fc70b0e elementor-widget elementor-widget-button" data-id="fc70b0e" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="https://wa.me/917470787014">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Book session</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				<div class="elementor-element elementor-element-17f665ba elementor-widget elementor-widget-button" data-id="17f665ba" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="https://wa.me/917470787014">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">WhatsApp</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-595d1ae e-con-full e-flex e-con e-child" data-id="595d1ae" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-element elementor-element-2ee8d32 elementor-widget elementor-widget-html" data-id="2ee8d32" data-element_type="widget" data-e-type="widget" data-widget_type="html.default">
				<div class="elementor-widget-container">
					<div style="position:relative;width:100%;height:340px;overflow:hidden;">
  <img decoding="async" src="/fitbliss/wp-content/uploads/2026/07/TZ3_0732-scaled.jpg" alt="Abhishek Dasondhi" style="width:100%;height:100%;object-fit:cover;display:block;" />
  <div style="position:absolute;top:14px;right:14px;background:rgba(1,3,3,0.75);border:1px solid rgba(55,192,128,0.6);padding:6px 10px;font-family:'Barlow',sans-serif;font-size:10px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#37c080;">15+ yrs</div>
  <div style="position:absolute;left:0;right:0;bottom:0;background:linear-gradient(to top, rgba(1,3,3,0.9), rgba(1,3,3,0.15) 70%, transparent);padding:16px 18px 14px;">
    <div style="font-family:'Bebas Neue',Impact,sans-serif;font-size:24px;letter-spacing:1px;text-transform:uppercase;color:#f4ead5;line-height:1.1;">Allen Amaral
</div>
    <div style="font-family:'Barlow',sans-serif;font-size:10px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#37c080;margin-top:3px;">PERSONAL TRAINER & CERTIFIED PILATES INSTRUCTOR</div>
  </div>
</div>				</div>
				</div>
		<div class="elementor-element elementor-element-5c55301 e-con-full e-flex e-con e-child" data-id="5c55301" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-053c84d elementor-widget elementor-widget-text-editor" data-id="053c84d" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p style="margin: 0;">Allen Amaral is a <strong data-start="90" data-end="141">Personal Trainer &amp; Certified Pilates Instructor</strong> at <strong data-start="145" data-end="174">Fitbliss by Shruti Kapoor</strong> with <strong data-start="180" data-end="207">15+ years of experience</strong> in Pilates, strength training, functional fitness, and lifestyle coaching. He specialises in personalised training programmes that improve strength, mobility, posture, and overall fitness through evidence-based movement training.</p>								</div>
				</div>
				<div class="elementor-element elementor-element-a6a2a7f elementor-widget elementor-widget-text-editor" data-id="a6a2a7f" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									— Expertise								</div>
				</div>
				<div class="elementor-element elementor-element-3a47e3f elementor-widget elementor-widget-text-editor" data-id="3a47e3f" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<div><span style="display: inline-block; border: 1px solid rgba(255,255,255,0.10); background: rgba(255,255,255,0.03); color: #f4f2ea; opacity: 0.85; padding: 6px 10px; margin: 0 6px 6px 0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; font-family: Barlow,sans-serif;">PILATES TRAINING</span></div><div><span style="display: inline-block; border: 1px solid rgba(255,255,255,0.10); background: rgba(255,255,255,0.03); color: #f4f2ea; opacity: 0.85; padding: 6px 10px; margin: 0 6px 6px 0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; font-family: Barlow,sans-serif;">FUNCTIONAL FITNESS</span><span style="display: inline-block; border: 1px solid rgba(255,255,255,0.10); background: rgba(255,255,255,0.03); color: #f4f2ea; opacity: 0.85; padding: 6px 10px; margin: 0 6px 6px 0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; font-family: Barlow,sans-serif;">HIIT &amp; CORE CONDITIONING</span></div><div><span style="display: inline-block; border: 1px solid rgba(255,255,255,0.10); background: rgba(255,255,255,0.03); color: #f4f2ea; opacity: 0.85; padding: 6px 10px; margin: 0 6px 6px 0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; font-family: Barlow,sans-serif;">FAT LOSS &amp; INJURY PREVENTION</span></div>								</div>
				</div>
		<div class="elementor-element elementor-element-9719930 e-con-full e-flex e-con e-child" data-id="9719930" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-60601c3 elementor-widget elementor-widget-button" data-id="60601c3" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="https://wa.me/917470787014">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Book session</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				<div class="elementor-element elementor-element-48a1a2c elementor-widget elementor-widget-button" data-id="48a1a2c" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="https://wa.me/917470787014">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">WhatsApp</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-af2f3b0 e-con-full e-flex e-con e-child" data-id="af2f3b0" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-element elementor-element-51cfbef elementor-widget elementor-widget-html" data-id="51cfbef" data-element_type="widget" data-e-type="widget" data-widget_type="html.default">
				<div class="elementor-widget-container">
					<div style="position:relative;width:100%;height:340px;overflow:hidden;">
  <img decoding="async" src="/fitbliss/wp-content/uploads/2026/07/TZ3_0723-scaled.jpg" alt="Abhishek Dasondhi" style="width:100%;height:100%;object-fit:cover;display:block;" />
  <div style="position:absolute;top:14px;right:14px;background:rgba(1,3,3,0.75);border:1px solid rgba(55,192,128,0.6);padding:6px 10px;font-family:'Barlow',sans-serif;font-size:10px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#37c080;">10+ yrs</div>
  <div style="position:absolute;left:0;right:0;bottom:0;background:linear-gradient(to top, rgba(1,3,3,0.9), rgba(1,3,3,0.15) 70%, transparent);padding:16px 18px 14px;">
    <div style="font-family:'Bebas Neue',Impact,sans-serif;font-size:24px;letter-spacing:1px;text-transform:uppercase;color:#f4ead5;line-height:1.1;">ANKITA SHARMA
</div>
    <div style="font-family:'Barlow',sans-serif;font-size:10px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#37c080;margin-top:3px;">CERTIFIED PILATES INSTRUCTOR</div>
  </div>
</div>				</div>
				</div>
		<div class="elementor-element elementor-element-1f3213e e-con-full e-flex e-con e-child" data-id="1f3213e" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-99adb4a elementor-widget elementor-widget-text-editor" data-id="99adb4a" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p style="margin: 0;">Ankita Sharma is a <strong data-start="73" data-end="105">Certified Pilates Instructor</strong> at <strong data-start="109" data-end="138">Fitbliss by Shruti Kapoor</strong> with <strong data-start="144" data-end="171">10+ years of experience</strong> in the fitness industry. She specialises in <strong data-start="216" data-end="258">Mat, Reformer, Chair, and Aqua Pilates</strong>, with expertise in women&#8217;s health, rehabilitation, flexibility, and strength training. Certified in <strong data-start="359" data-end="384">Balanced Body Pilates</strong>, pre &amp; post-natal yoga, hormonal balance, and injury recovery, she creates customised programmes to support individual wellness goals.</p>								</div>
				</div>
				<div class="elementor-element elementor-element-d226150 elementor-widget elementor-widget-text-editor" data-id="d226150" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									— Expertise								</div>
				</div>
				<div class="elementor-element elementor-element-891554b elementor-widget elementor-widget-text-editor" data-id="891554b" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<div><span style="display: inline-block; border: 1px solid rgba(255,255,255,0.10); background: rgba(255,255,255,0.03); color: #f4f2ea; opacity: 0.85; padding: 6px 10px; margin: 0 6px 6px 0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; font-family: Barlow,sans-serif;">MAT &amp; REFORMER PILATES</span></div><div><span style="display: inline-block; border: 1px solid rgba(255,255,255,0.10); background: rgba(255,255,255,0.03); color: #f4f2ea; opacity: 0.85; padding: 6px 10px; margin: 0 6px 6px 0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; font-family: Barlow,sans-serif;">AQUA PILATES</span><span style="display: inline-block; border: 1px solid rgba(255,255,255,0.10); background: rgba(255,255,255,0.03); color: #f4f2ea; opacity: 0.85; padding: 6px 10px; margin: 0 6px 6px 0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; font-family: Barlow,sans-serif;">WOMEN&#8217;S HEALTH &amp; REHABILITATION</span></div><div><span style="display: inline-block; border: 1px solid rgba(255,255,255,0.10); background: rgba(255,255,255,0.03); color: #f4f2ea; opacity: 0.85; padding: 6px 10px; margin: 0 6px 6px 0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; font-family: Barlow,sans-serif;">PRE &amp; POST-NATAL FITNESS</span></div>								</div>
				</div>
		<div class="elementor-element elementor-element-39b504c e-con-full e-flex e-con e-child" data-id="39b504c" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-0905035 elementor-widget elementor-widget-button" data-id="0905035" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="https://wa.me/917470787014">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Book session</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				<div class="elementor-element elementor-element-748b176 elementor-widget elementor-widget-button" data-id="748b176" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="https://wa.me/917470787014">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">WhatsApp</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-1b76540 e-con-full e-flex e-con e-child" data-id="1b76540" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-element elementor-element-5f367c7 elementor-widget elementor-widget-html" data-id="5f367c7" data-element_type="widget" data-e-type="widget" data-widget_type="html.default">
				<div class="elementor-widget-container">
					<div style="position:relative;width:100%;height:340px;overflow:hidden;">
  <img decoding="async" src="/fitbliss/wp-content/uploads/2026/07/TZ3_0755-scaled.jpg" alt="Abhishek Dasondhi" style="width:100%;height:100%;object-fit:cover;display:block;" />
  <div style="position:absolute;top:14px;right:14px;background:rgba(1,3,3,0.75);border:1px solid rgba(55,192,128,0.6);padding:6px 10px;font-family:'Barlow',sans-serif;font-size:10px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#37c080;">5+ yrs</div>
  <div style="position:absolute;left:0;right:0;bottom:0;background:linear-gradient(to top, rgba(1,3,3,0.9), rgba(1,3,3,0.15) 70%, transparent);padding:16px 18px 14px;">
    <div style="font-family:'Bebas Neue',Impact,sans-serif;font-size:24px;letter-spacing:1px;text-transform:uppercase;color:#f4ead5;line-height:1.1;">MARIAM SHAHAB
</div>
    <div style="font-family:'Barlow',sans-serif;font-size:10px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#37c080;margin-top:3px;">PHYSIOTHERAPIST & CERTIFIED PILATES INSTRUCTOR</div>
  </div>
</div>				</div>
				</div>
		<div class="elementor-element elementor-element-7f25e5f e-con-full e-flex e-con e-child" data-id="7f25e5f" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-e571719 elementor-widget elementor-widget-text-editor" data-id="e571719" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p style="margin: 0;">Mariam Shahab is a <strong data-start="91" data-end="141">Physiotherapist &amp; Certified Pilates Instructor</strong> at <strong data-start="145" data-end="174">Fitbliss by Shruti Kapoor</strong> with <strong data-start="180" data-end="206">2+ years of experience</strong> in clinical rehabilitation and movement-based fitness. She specialises in musculoskeletal and cardiopulmonary rehabilitation, posture correction, functional movement, and personalised Pilates training. Her evidence-based approach helps clients improve strength, mobility, flexibility, prevent injuries, and achieve overall wellness.</p>								</div>
				</div>
				<div class="elementor-element elementor-element-5f8c335 elementor-widget elementor-widget-text-editor" data-id="5f8c335" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									— Expertise								</div>
				</div>
				<div class="elementor-element elementor-element-6b65450 elementor-widget elementor-widget-text-editor" data-id="6b65450" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<div><span style="display: inline-block; border: 1px solid rgba(255,255,255,0.10); background: rgba(255,255,255,0.03); color: #f4f2ea; opacity: 0.85; padding: 6px 10px; margin: 0 6px 6px 0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; font-family: Barlow,sans-serif;">MUSCULOSKELETAL REHABILITATION</span></div><div><span style="display: inline-block; border: 1px solid rgba(255,255,255,0.10); background: rgba(255,255,255,0.03); color: #f4f2ea; opacity: 0.85; padding: 6px 10px; margin: 0 6px 6px 0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; font-family: Barlow,sans-serif;">PILATES TRAINING</span><span style="display: inline-block; border: 1px solid rgba(255,255,255,0.10); background: rgba(255,255,255,0.03); color: #f4f2ea; opacity: 0.85; padding: 6px 10px; margin: 0 6px 6px 0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; font-family: Barlow,sans-serif;">POSTURE CORRECTION</span></div><div><span style="display: inline-block; border: 1px solid rgba(255,255,255,0.10); background: rgba(255,255,255,0.03); color: #f4f2ea; opacity: 0.85; padding: 6px 10px; margin: 0 6px 6px 0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; font-family: Barlow,sans-serif;">FUNCTIONAL MOVEMENT</span></div>								</div>
				</div>
		<div class="elementor-element elementor-element-a705170 e-con-full e-flex e-con e-child" data-id="a705170" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-b556c94 elementor-widget elementor-widget-button" data-id="b556c94" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="https://wa.me/917470787014">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Book session</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				<div class="elementor-element elementor-element-8bf9b77 elementor-widget elementor-widget-button" data-id="8bf9b77" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="https://wa.me/917470787014">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">WhatsApp</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				</div>
				</div>
				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-379ac0c9 e-con-full e-flex e-con e-child" data-id="379ac0c9" data-element_type="container" data-e-type="container" id="boxing" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
		<div class="elementor-element elementor-element-672bd105 e-con-full e-flex e-con e-child" data-id="672bd105" data-element_type="container" data-e-type="container">
		<div class="elementor-element elementor-element-24d648ed e-con-full e-flex e-con e-child" data-id="24d648ed" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-56bdd5f9 elementor-widget elementor-widget-text-editor" data-id="56bdd5f9" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									— 03 — Boxing Coaches								</div>
				</div>
				<div class="elementor-element elementor-element-5ea51139 elementor-widget elementor-widget-heading" data-id="5ea51139" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Boxing Team</h2>				</div>
				</div>
				<div class="elementor-element elementor-element-08a087b elementor-widget elementor-widget-text-editor" data-id="08a087b" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p style="margin: 0;">Ring-tested coaches with national and international pedigree. Technique, conditioning and confidence — trained the way champions train.</p>								</div>
				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-4f49a0d9 e-con-full e-flex e-con e-child" data-id="4f49a0d9" data-element_type="container" data-e-type="container">
		<div class="elementor-element elementor-element-72b9e019 e-con-full e-flex e-con e-child" data-id="72b9e019" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-element elementor-element-67ebe5c9 elementor-widget elementor-widget-html" data-id="67ebe5c9" data-element_type="widget" data-e-type="widget" data-widget_type="html.default">
				<div class="elementor-widget-container">
					<div style="position:relative;width:100%;height:340px;overflow:hidden;">
  <img decoding="async" src="/fitbliss/wp-content/uploads/2026/07/TZ3_0587-1-scaled.jpg" style="width:100%;height:100%;object-fit:cover;display:block;" />
  <div style="position:absolute;top:14px;right:14px;background:rgba(1,3,3,0.75);border:1px solid rgba(55,192,128,0.6);padding:6px 10px;font-family:'Barlow',sans-serif;font-size:10px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#37c080;">16+ yrs</div>
  <div style="position:absolute;left:0;right:0;bottom:0;background:linear-gradient(to top, rgba(1,3,3,0.9), rgba(1,3,3,0.15) 70%, transparent);padding:16px 18px 14px;">
    <div style="font-family:'Bebas Neue',Impact,sans-serif;font-size:24px;letter-spacing:1px;text-transform:uppercase;color:#f4ead5;line-height:1.1;">DUSHYANT SHRIVASTAVA</div>
    <div style="font-family:'Barlow',sans-serif;font-size:10px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#37c080;margin-top:3px;">BOXING & FITNESS TRAINER</div>
  </div>
</div>				</div>
				</div>
		<div class="elementor-element elementor-element-4f5c42c1 e-con-full e-flex e-con e-child" data-id="4f5c42c1" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-6bc38eff elementor-widget elementor-widget-text-editor" data-id="6bc38eff" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p style="margin: 0;">Dushyant Shrivastava is a <strong data-start="138" data-end="166">Boxing &amp; Fitness Trainer</strong> with <strong data-start="172" data-end="199">16+ years of experience</strong> in boxing and fitness coaching. He is a <strong data-start="240" data-end="270">5-time M.P. State Champion</strong>, <strong data-start="272" data-end="292">Best Boxer Award</strong> recipient, <strong data-start="304" data-end="332">2-time National Medalist</strong>, and has proudly <strong data-start="350" data-end="387">represented India internationally</strong>. He has also competed in the <strong data-start="417" data-end="440">Super Boxing League</strong>, specialising in boxing techniques, strength, endurance, and performance training.</p>								</div>
				</div>
				<div class="elementor-element elementor-element-3d4deb2 elementor-widget elementor-widget-text-editor" data-id="3d4deb2" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									— Expertise								</div>
				</div>
				<div class="elementor-element elementor-element-697ff612 elementor-widget elementor-widget-text-editor" data-id="697ff612" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<div><span style="display: inline-block; border: 1px solid rgba(255,255,255,0.10); background: rgba(255,255,255,0.03); color: #f4f2ea; opacity: 0.85; padding: 6px 10px; margin: 0 6px 6px 0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; font-family: Barlow,sans-serif;">Boxing TRAINING</span></div><div><span style="display: inline-block; border: 1px solid rgba(255,255,255,0.10); background: rgba(255,255,255,0.03); color: #f4f2ea; opacity: 0.85; padding: 6px 10px; margin: 0 6px 6px 0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; font-family: Barlow,sans-serif;">FITNESS COACHING</span></div><div><span style="display: inline-block; border: 1px solid rgba(255,255,255,0.10); background: rgba(255,255,255,0.03); color: #f4f2ea; opacity: 0.85; padding: 6px 10px; margin: 0 6px 6px 0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; font-family: Barlow,sans-serif;">PERFORMANCE TRAINING</span></div>								</div>
				</div>
		<div class="elementor-element elementor-element-7a00c077 e-con-full e-flex e-con e-child" data-id="7a00c077" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-76229b55 elementor-widget elementor-widget-button" data-id="76229b55" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="https://wa.me/917470787014">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Book session</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				<div class="elementor-element elementor-element-5489aad2 elementor-widget elementor-widget-button" data-id="5489aad2" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="https://wa.me/917470787014">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">WhatsApp</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-b71f9fb e-con-full e-flex e-con e-child" data-id="b71f9fb" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-element elementor-element-49b9e6b elementor-widget elementor-widget-html" data-id="49b9e6b" data-element_type="widget" data-e-type="widget" data-widget_type="html.default">
				<div class="elementor-widget-container">
					<div style="position:relative;width:100%;height:340px;overflow:hidden;">
  <img decoding="async" src="/fitbliss/wp-content/uploads/2026/07/Jigyasa-Rajput.jpg" alt="Jigyasa Rajput" style="width:100%;height:100%;object-fit:cover;display:block;" />
  <div style="position:absolute;top:14px;right:14px;background:rgba(1,3,3,0.75);border:1px solid rgba(55,192,128,0.6);padding:6px 10px;font-family:'Barlow',sans-serif;font-size:10px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#37c080;">10+ yrs</div>
  <div style="position:absolute;left:0;right:0;bottom:0;background:linear-gradient(to top, rgba(1,3,3,0.9), rgba(1,3,3,0.15) 70%, transparent);padding:16px 18px 14px;">
    <div style="font-family:'Bebas Neue',Impact,sans-serif;font-size:24px;letter-spacing:1px;text-transform:uppercase;color:#f4ead5;line-height:1.1;">Jigyasa Rajput</div>
    <div style="font-family:'Barlow',sans-serif;font-size:10px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#37c080;margin-top:3px;">Boxer & Coach</div>
  </div>
</div>				</div>
				</div>
		<div class="elementor-element elementor-element-4530b7b e-con-full e-flex e-con e-child" data-id="4530b7b" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-1be39fb elementor-widget elementor-widget-text-editor" data-id="1be39fb" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p style="margin:0;">Accomplished Boxer and Coach with 10+ years in competitive boxing and athlete development. Has represented India and won multiple medals — 6-time National Medalist and Gold Medalist at the All India University Championship and Khelo India University Games.</p>								</div>
				</div>
				<div class="elementor-element elementor-element-b3da11c elementor-widget elementor-widget-text-editor" data-id="b3da11c" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									— Highlights								</div>
				</div>
				<div class="elementor-element elementor-element-4dbc954 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="4dbc954" data-element_type="widget" data-e-type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
							<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>						</span>
										<span class="elementor-icon-list-text">Represented India</span>
									</li>
								<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>						</span>
										<span class="elementor-icon-list-text">6× National Medalist</span>
									</li>
								<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>						</span>
										<span class="elementor-icon-list-text">Gold — Khelo India University Games</span>
									</li>
						</ul>
						</div>
				</div>
				<div class="elementor-element elementor-element-391e3e8 elementor-widget elementor-widget-text-editor" data-id="391e3e8" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									— Expertise								</div>
				</div>
				<div class="elementor-element elementor-element-8d75774 elementor-widget elementor-widget-text-editor" data-id="8d75774" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<div><span style="display:inline-block;border:1px solid rgba(255,255,255,0.10);background:rgba(255,255,255,0.03);color:#f4f2ea;opacity:0.85;padding:6px 10px;margin:0 6px 6px 0;font-size:10px;text-transform:uppercase;letter-spacing:1px;font-family:Barlow,sans-serif;">Boxing techniques</span><span style="display:inline-block;border:1px solid rgba(255,255,255,0.10);background:rgba(255,255,255,0.03);color:#f4f2ea;opacity:0.85;padding:6px 10px;margin:0 6px 6px 0;font-size:10px;text-transform:uppercase;letter-spacing:1px;font-family:Barlow,sans-serif;">Functional &#038; explosive strength</span><span style="display:inline-block;border:1px solid rgba(255,255,255,0.10);background:rgba(255,255,255,0.03);color:#f4f2ea;opacity:0.85;padding:6px 10px;margin:0 6px 6px 0;font-size:10px;text-transform:uppercase;letter-spacing:1px;font-family:Barlow,sans-serif;">Speed &#038; agility</span><span style="display:inline-block;border:1px solid rgba(255,255,255,0.10);background:rgba(255,255,255,0.03);color:#f4f2ea;opacity:0.85;padding:6px 10px;margin:0 6px 6px 0;font-size:10px;text-transform:uppercase;letter-spacing:1px;font-family:Barlow,sans-serif;">Plyometrics &#038; conditioning</span><span style="display:inline-block;border:1px solid rgba(255,255,255,0.10);background:rgba(255,255,255,0.03);color:#f4f2ea;opacity:0.85;padding:6px 10px;margin:0 6px 6px 0;font-size:10px;text-transform:uppercase;letter-spacing:1px;font-family:Barlow,sans-serif;">Yoga &#038; mobility</span><span style="display:inline-block;border:1px solid rgba(255,255,255,0.10);background:rgba(255,255,255,0.03);color:#f4f2ea;opacity:0.85;padding:6px 10px;margin:0 6px 6px 0;font-size:10px;text-transform:uppercase;letter-spacing:1px;font-family:Barlow,sans-serif;">Athletic performance</span></div>								</div>
				</div>
		<div class="elementor-element elementor-element-2b3f956 e-con-full e-flex e-con e-child" data-id="2b3f956" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-d4f8238 elementor-widget elementor-widget-button" data-id="d4f8238" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="https://wa.me/917470787014">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Book session</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				<div class="elementor-element elementor-element-9990fde elementor-widget elementor-widget-button" data-id="9990fde" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="https://wa.me/917470787014">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">WhatsApp</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-598131f0 e-con-full e-flex e-con e-child" data-id="598131f0" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-element elementor-element-17b6505f elementor-widget elementor-widget-html" data-id="17b6505f" data-element_type="widget" data-e-type="widget" data-widget_type="html.default">
				<div class="elementor-widget-container">
					<div style="position:relative;width:100%;height:340px;overflow:hidden;">
  <img decoding="async" src="/fitbliss/wp-content/uploads/2026/07/Hitesh-Hooda.jpg" alt="Hitesh Hooda" style="width:100%;height:100%;object-fit:cover;display:block;" />
  <div style="position:absolute;top:14px;right:14px;background:rgba(1,3,3,0.75);border:1px solid rgba(55,192,128,0.6);padding:6px 10px;font-family:'Barlow',sans-serif;font-size:10px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#37c080;">8+ yrs</div>
  <div style="position:absolute;left:0;right:0;bottom:0;background:linear-gradient(to top, rgba(1,3,3,0.9), rgba(1,3,3,0.15) 70%, transparent);padding:16px 18px 14px;">
    <div style="font-family:'Bebas Neue',Impact,sans-serif;font-size:24px;letter-spacing:1px;text-transform:uppercase;color:#f4ead5;line-height:1.1;">Hitesh Hooda</div>
    <div style="font-family:'Barlow',sans-serif;font-size:10px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#37c080;margin-top:3px;">Professional Boxing Coach</div>
  </div>
</div>				</div>
				</div>
		<div class="elementor-element elementor-element-7e353551 e-con-full e-flex e-con e-child" data-id="7e353551" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-45dee2a0 elementor-widget elementor-widget-text-editor" data-id="45dee2a0" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p style="margin:0;">Professional Boxing Coach with 2+ years of coaching experience and a competitive boxing background. Passionate about helping clients build strength, improve technique, enhance endurance and hit their goals through structured, result-driven training.</p>								</div>
				</div>
				<div class="elementor-element elementor-element-200d6378 elementor-widget elementor-widget-text-editor" data-id="200d6378" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									— Highlights								</div>
				</div>
				<div class="elementor-element elementor-element-36d3e5c4 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="36d3e5c4" data-element_type="widget" data-e-type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
							<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>						</span>
										<span class="elementor-icon-list-text">6× MP State Boxing Champion</span>
									</li>
								<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>						</span>
										<span class="elementor-icon-list-text">Khelo India / SGFI competitor</span>
									</li>
								<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>						</span>
										<span class="elementor-icon-list-text">Six-week NIS certified</span>
									</li>
						</ul>
						</div>
				</div>
				<div class="elementor-element elementor-element-69d88393 elementor-widget elementor-widget-text-editor" data-id="69d88393" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									— Expertise								</div>
				</div>
				<div class="elementor-element elementor-element-617c174 elementor-widget elementor-widget-text-editor" data-id="617c174" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<div><span style="display:inline-block;border:1px solid rgba(255,255,255,0.10);background:rgba(255,255,255,0.03);color:#f4f2ea;opacity:0.85;padding:6px 10px;margin:0 6px 6px 0;font-size:10px;text-transform:uppercase;letter-spacing:1px;font-family:Barlow,sans-serif;">Boxing training</span><span style="display:inline-block;border:1px solid rgba(255,255,255,0.10);background:rgba(255,255,255,0.03);color:#f4f2ea;opacity:0.85;padding:6px 10px;margin:0 6px 6px 0;font-size:10px;text-transform:uppercase;letter-spacing:1px;font-family:Barlow,sans-serif;">Personal training</span><span style="display:inline-block;border:1px solid rgba(255,255,255,0.10);background:rgba(255,255,255,0.03);color:#f4f2ea;opacity:0.85;padding:6px 10px;margin:0 6px 6px 0;font-size:10px;text-transform:uppercase;letter-spacing:1px;font-family:Barlow,sans-serif;">Strength &#038; conditioning</span><span style="display:inline-block;border:1px solid rgba(255,255,255,0.10);background:rgba(255,255,255,0.03);color:#f4f2ea;opacity:0.85;padding:6px 10px;margin:0 6px 6px 0;font-size:10px;text-transform:uppercase;letter-spacing:1px;font-family:Barlow,sans-serif;">Functional fitness</span><span style="display:inline-block;border:1px solid rgba(255,255,255,0.10);background:rgba(255,255,255,0.03);color:#f4f2ea;opacity:0.85;padding:6px 10px;margin:0 6px 6px 0;font-size:10px;text-transform:uppercase;letter-spacing:1px;font-family:Barlow,sans-serif;">Speed &#038; agility</span><span style="display:inline-block;border:1px solid rgba(255,255,255,0.10);background:rgba(255,255,255,0.03);color:#f4f2ea;opacity:0.85;padding:6px 10px;margin:0 6px 6px 0;font-size:10px;text-transform:uppercase;letter-spacing:1px;font-family:Barlow,sans-serif;">Endurance training</span></div>								</div>
				</div>
		<div class="elementor-element elementor-element-76b79064 e-con-full e-flex e-con e-child" data-id="76b79064" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-4fe925b8 elementor-widget elementor-widget-button" data-id="4fe925b8" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="https://wa.me/917470787014">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Book session</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				<div class="elementor-element elementor-element-1f66a1be elementor-widget elementor-widget-button" data-id="1f66a1be" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="https://wa.me/917470787014">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">WhatsApp</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-6dbe1796 e-con-full e-flex e-con e-child" data-id="6dbe1796" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-element elementor-element-1cc70ca3 elementor-widget elementor-widget-html" data-id="1cc70ca3" data-element_type="widget" data-e-type="widget" data-widget_type="html.default">
				<div class="elementor-widget-container">
					<div style="position:relative;width:100%;height:340px;overflow:hidden;">
  <img decoding="async" src="/fitbliss/wp-content/uploads/2026/07/Gaurav-Rajbhar.jpg" alt="Gaurav Rajbhar" style="width:100%;height:100%;object-fit:cover;display:block;" />
      <div style="position:absolute;top:14px;right:14px;background:rgba(1,3,3,0.75);border:1px solid rgba(55,192,128,0.6);padding:6px 10px;font-family:'Barlow',sans-serif;font-size:10px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#37c080;">5+ yrs</div>
  
  <div style="position:absolute;left:0;right:0;bottom:0;background:linear-gradient(to top, rgba(1,3,3,0.9), rgba(1,3,3,0.15) 70%, transparent);padding:16px 18px 14px;">
    <div style="font-family:'Bebas Neue',Impact,sans-serif;font-size:24px;letter-spacing:1px;text-transform:uppercase;color:#f4ead5;line-height:1.1;">Gaurav Rajbhar</div>
    <div style="font-family:'Barlow',sans-serif;font-size:10px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#37c080;margin-top:3px;">Boxing Coach & Fitness Trainer</div>
  </div>
</div>				</div>
				</div>
		<div class="elementor-element elementor-element-1933741e e-con-full e-flex e-con e-child" data-id="1933741e" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-203fc5de elementor-widget elementor-widget-text-editor" data-id="203fc5de" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p style="margin:0;">Dedicated Boxing Coach and Fitness Trainer with a passion for helping others achieve peak physical performance. Known for a strong work ethic and disciplined approach — combining technical combat expertise with result-oriented training.</p>								</div>
				</div>
				<div class="elementor-element elementor-element-6a3cee82 elementor-widget elementor-widget-text-editor" data-id="6a3cee82" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									— Expertise								</div>
				</div>
				<div class="elementor-element elementor-element-cedfdb1 elementor-widget elementor-widget-text-editor" data-id="cedfdb1" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<div><span style="display:inline-block;border:1px solid rgba(255,255,255,0.10);background:rgba(255,255,255,0.03);color:#f4f2ea;opacity:0.85;padding:6px 10px;margin:0 6px 6px 0;font-size:10px;text-transform:uppercase;letter-spacing:1px;font-family:Barlow,sans-serif;">Boxing coaching</span><span style="display:inline-block;border:1px solid rgba(255,255,255,0.10);background:rgba(255,255,255,0.03);color:#f4f2ea;opacity:0.85;padding:6px 10px;margin:0 6px 6px 0;font-size:10px;text-transform:uppercase;letter-spacing:1px;font-family:Barlow,sans-serif;">Fitness training</span><span style="display:inline-block;border:1px solid rgba(255,255,255,0.10);background:rgba(255,255,255,0.03);color:#f4f2ea;opacity:0.85;padding:6px 10px;margin:0 6px 6px 0;font-size:10px;text-transform:uppercase;letter-spacing:1px;font-family:Barlow,sans-serif;">Discipline &#038; work ethic</span><span style="display:inline-block;border:1px solid rgba(255,255,255,0.10);background:rgba(255,255,255,0.03);color:#f4f2ea;opacity:0.85;padding:6px 10px;margin:0 6px 6px 0;font-size:10px;text-transform:uppercase;letter-spacing:1px;font-family:Barlow,sans-serif;">Combat technique</span></div>								</div>
				</div>
		<div class="elementor-element elementor-element-59be57ba e-con-full e-flex e-con e-child" data-id="59be57ba" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-21574ed9 elementor-widget elementor-widget-button" data-id="21574ed9" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="https://wa.me/917470787014">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Book session</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				<div class="elementor-element elementor-element-662591f7 elementor-widget elementor-widget-button" data-id="662591f7" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="https://wa.me/917470787014">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">WhatsApp</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				</div>
				</div>
				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-db124f0 e-con-full e-flex e-con e-child" data-id="db124f0" data-element_type="container" data-e-type="container" id="sppinning" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
		<div class="elementor-element elementor-element-9743bc8 e-con-full e-flex e-con e-child" data-id="9743bc8" data-element_type="container" data-e-type="container">
		<div class="elementor-element elementor-element-375a70a e-con-full e-flex e-con e-child" data-id="375a70a" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-deb0085 elementor-widget elementor-widget-text-editor" data-id="deb0085" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p>— 04 —Spinning Bike</p>								</div>
				</div>
				<div class="elementor-element elementor-element-d1bfca9 elementor-widget elementor-widget-heading" data-id="d1bfca9" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Spinning Bike</h2>				</div>
				</div>
				<div class="elementor-element elementor-element-0c7fdf7 elementor-widget elementor-widget-text-editor" data-id="0c7fdf7" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p style="margin: 0;">Ring-tested coaches with national and international pedigree. Technique, conditioning and confidence — trained the way champions train.</p>								</div>
				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-09c0ed8 e-con-full e-flex e-con e-child" data-id="09c0ed8" data-element_type="container" data-e-type="container">
		<div class="elementor-element elementor-element-3d873fe e-con-full e-flex e-con e-child" data-id="3d873fe" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-element elementor-element-ec4b410 elementor-widget elementor-widget-html" data-id="ec4b410" data-element_type="widget" data-e-type="widget" data-widget_type="html.default">
				<div class="elementor-widget-container">
					<div style="position:relative;width:100%;height:340px;overflow:hidden;">
  <img decoding="async" src="/fitbliss/wp-content/uploads/2026/07/WhatsApp-Image-2026-07-27-at-12.48.06-PM-1-1.jpeg" style="width:100%;height:100%;object-fit:cover;display:block;" />
  <div style="position:absolute;top:14px;right:14px;background:rgba(1,3,3,0.75);border:1px solid rgba(55,192,128,0.6);padding:6px 10px;font-family:'Barlow',sans-serif;font-size:10px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#37c080;">2+ yrs</div>
  <div style="position:absolute;left:0;right:0;bottom:0;background:linear-gradient(to top, rgba(1,3,3,0.9), rgba(1,3,3,0.15) 70%, transparent);padding:16px 18px 14px;">
    <div style="font-family:'Bebas Neue',Impact,sans-serif;font-size:24px;letter-spacing:1px;text-transform:uppercase;color:#f4ead5;line-height:1.1;">SATYAM BHATELE</div>
    <div style="font-family:'Barlow',sans-serif;font-size:10px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#37c080;margin-top:3px;">SPORTS MANAGEMENT PROFESSIONAL & SPINNING INSTRUCTOR</div>
  </div>
</div>				</div>
				</div>
		<div class="elementor-element elementor-element-95615cb e-con-full e-flex e-con e-child" data-id="95615cb" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-2583b06 elementor-widget elementor-widget-text-editor" data-id="2583b06" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p style="margin: 0;">Satyam Bhatele is a <strong data-start="99" data-end="155">Sports Management Professional &amp; Spinning Instructor</strong> at <strong data-start="159" data-end="188">Fitbliss by Shruti Kapoor</strong>. A postgraduate from <strong data-start="210" data-end="237">Loughborough University</strong> and an <strong data-start="245" data-end="295">international fencer who has represented India</strong>, he brings expertise in fitness operations, administration, and member engagement. He leads high-energy spinning sessions that help members improve endurance, cardiovascular fitness, and overall performance in a motivating, results-driven environment.</p>								</div>
				</div>
				<div class="elementor-element elementor-element-ada7065 elementor-widget elementor-widget-text-editor" data-id="ada7065" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									— Expertise								</div>
				</div>
				<div class="elementor-element elementor-element-b1e2917 elementor-widget elementor-widget-text-editor" data-id="b1e2917" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<div><span style="display: inline-block; border: 1px solid rgba(255,255,255,0.10); background: rgba(255,255,255,0.03); color: #f4f2ea; opacity: 0.85; padding: 6px 10px; margin: 0 6px 6px 0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; font-family: Barlow,sans-serif;">SPINNING &amp; CARDIO TRAINING</span></div><div><span style="display: inline-block; border: 1px solid rgba(255,255,255,0.10); background: rgba(255,255,255,0.03); color: #f4f2ea; opacity: 0.85; padding: 6px 10px; margin: 0 6px 6px 0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; font-family: Barlow,sans-serif;">SPORTS MANAGEMENT</span></div><div><span style="display: inline-block; border: 1px solid rgba(255,255,255,0.10); background: rgba(255,255,255,0.03); color: #f4f2ea; opacity: 0.85; padding: 6px 10px; margin: 0 6px 6px 0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; font-family: Barlow,sans-serif;">ENDURANCE BUILDING</span></div><div><span style="display: inline-block; border: 1px solid rgba(255,255,255,0.10); background: rgba(255,255,255,0.03); color: #f4f2ea; opacity: 0.85; padding: 6px 10px; margin: 0 6px 6px 0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; font-family: Barlow,sans-serif;">MEMBER ENGAGEMENT &amp; FITNESS OPERATIONS</span></div>								</div>
				</div>
		<div class="elementor-element elementor-element-328d798 e-con-full e-flex e-con e-child" data-id="328d798" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-3d4459f elementor-widget elementor-widget-button" data-id="3d4459f" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="https://wa.me/917470787014">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Book session</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				<div class="elementor-element elementor-element-c5cff98 elementor-widget elementor-widget-button" data-id="c5cff98" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="https://wa.me/917470787014">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">WhatsApp</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				</div>
				</div>
				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-19720174 e-con-full e-flex e-con e-child" data-id="19720174" data-element_type="container" data-e-type="container" id="other" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
		<div class="elementor-element elementor-element-33d386af e-con-full e-flex e-con e-child" data-id="33d386af" data-element_type="container" data-e-type="container">
		<div class="elementor-element elementor-element-67a8a8a1 e-con-full e-flex e-con e-child" data-id="67a8a8a1" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-32ac7627 elementor-widget elementor-widget-text-editor" data-id="32ac7627" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p>— 05 — Other Specialists</p>								</div>
				</div>
				<div class="elementor-element elementor-element-6687e971 elementor-widget elementor-widget-heading" data-id="6687e971" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Other Team</h2>				</div>
				</div>
				<div class="elementor-element elementor-element-c3c7c5d elementor-widget elementor-widget-text-editor" data-id="c3c7c5d" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p style="margin: 0;">Specialist coaches rounding out the Fitbliss experience across movement, mobility and holistic wellness.</p>								</div>
				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-22885139 e-con-full e-flex e-con e-child" data-id="22885139" data-element_type="container" data-e-type="container">
		<div class="elementor-element elementor-element-62401339 e-con-full e-flex e-con e-child" data-id="62401339" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-element elementor-element-6eaf6d8c elementor-widget elementor-widget-html" data-id="6eaf6d8c" data-element_type="widget" data-e-type="widget" data-widget_type="html.default">
				<div class="elementor-widget-container">
					<div style="position:relative;width:100%;height:340px;overflow:hidden;">
  <img decoding="async" src="/fitbliss/wp-content/uploads/2026/07/Raki-Singh-Parihar.jpg" alt="Raki Singh Parihar" style="width:100%;height:100%;object-fit:cover;display:block;" />
  
    <div style="position:absolute;top:14px;right:14px;background:rgba(1,3,3,0.75);border:1px solid rgba(55,192,128,0.6);padding:6px 10px;font-family:'Barlow',sans-serif;font-size:10px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#37c080;">15+ yrs</div>
  
  <div style="position:absolute;left:0;right:0;bottom:0;background:linear-gradient(to top, rgba(1,3,3,0.9), rgba(1,3,3,0.15) 70%, transparent);padding:16px 18px 14px;">
    <div style="font-family:'Bebas Neue',Impact,sans-serif;font-size:24px;letter-spacing:1px;text-transform:uppercase;color:#f4ead5;line-height:1.1;">Raki Singh Parihar</div>
    <div style="font-family:'Barlow',sans-serif;font-size:10px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#37c080;margin-top:3px;">Specialist Trainer</div>
  </div>
</div>				</div>
				</div>
		<div class="elementor-element elementor-element-1e0f6c97 e-con-full e-flex e-con e-child" data-id="1e0f6c97" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-7a300747 elementor-widget elementor-widget-text-editor" data-id="7a300747" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p style="margin: 0;">Rocky Singh is a dedicated <strong data-start="67" data-end="87">Zumba Instructor</strong> at <strong data-start="91" data-end="120">Fitbliss by Shruti Kapoor</strong> with <strong data-start="126" data-end="152">15 years of experience</strong> in Bhopal. He specialises in high-intensity, music-driven Zumba workouts focused on fat loss, stamina, and stress relief. Holding a <strong data-start="285" data-end="316">PG Diploma in Yogic Science</strong>, he is known for his energetic sessions, positive attitude, and motivating training style that makes fitness fun, engaging, and result-oriented.</p>								</div>
				</div>
				<div class="elementor-element elementor-element-6138f7 elementor-widget elementor-widget-text-editor" data-id="6138f7" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									— Expertise								</div>
				</div>
				<div class="elementor-element elementor-element-238c14f1 elementor-widget elementor-widget-text-editor" data-id="238c14f1" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<div><span style="display: inline-block; border: 1px solid rgba(255,255,255,0.10); background: rgba(255,255,255,0.03); color: #f4f2ea; opacity: 0.85; padding: 6px 10px; margin: 0 6px 6px 0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; font-family: Barlow,sans-serif;">FAT LOSS TRAINING</span></div><div><div><span style="display: inline-block; border: 1px solid rgba(255,255,255,0.10); background: rgba(255,255,255,0.03); color: #f4f2ea; opacity: 0.85; padding: 6px 10px; margin: 0 6px 6px 0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; font-family: Barlow,sans-serif;">ZUMBA FITNESS</span></div><div><div><span style="display: inline-block; border: 1px solid rgba(255,255,255,0.10); background: rgba(255,255,255,0.03); color: #f4f2ea; opacity: 0.85; padding: 6px 10px; margin: 0 6px 6px 0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; font-family: Barlow,sans-serif;">TAMINA BUILDING</span></div><div><div><span style="display: inline-block; border: 1px solid rgba(255,255,255,0.10); background: rgba(255,255,255,0.03); color: #f4f2ea; opacity: 0.85; padding: 6px 10px; margin: 0 6px 6px 0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; font-family: Barlow,sans-serif;">STRESS RELIEF</span></div></div></div></div>								</div>
				</div>
		<div class="elementor-element elementor-element-51547db0 e-con-full e-flex e-con e-child" data-id="51547db0" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-31f40fbd elementor-widget elementor-widget-button" data-id="31f40fbd" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="https://wa.me/917470787014">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Book session</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				<div class="elementor-element elementor-element-6a5ddfa8 elementor-widget elementor-widget-button" data-id="6a5ddfa8" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="https://wa.me/917470787014">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">WhatsApp</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-2b47c68 e-con-full e-flex e-con e-child" data-id="2b47c68" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-element elementor-element-c6ae1f9 elementor-widget elementor-widget-html" data-id="c6ae1f9" data-element_type="widget" data-e-type="widget" data-widget_type="html.default">
				<div class="elementor-widget-container">
					<div style="position:relative;width:100%;height:340px;overflow:hidden;">
  <img decoding="async" src="/fitbliss/wp-content/uploads/2026/07/Copy-of-IMG-20250903-WA0053.jpg" style="width:100%;height:100%;object-fit:cover;display:block;" />
  <div style="position:absolute;top:14px;right:14px;background:rgba(1,3,3,0.75);border:1px solid rgba(55,192,128,0.6);padding:6px 10px;font-family:'Barlow',sans-serif;font-size:10px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#37c080;">15+ yrs</div>
  <div style="position:absolute;left:0;right:0;bottom:0;background:linear-gradient(to top, rgba(1,3,3,0.9), rgba(1,3,3,0.15) 70%, transparent);padding:16px 18px 14px;">
    <div style="font-family:'Bebas Neue',Impact,sans-serif;font-size:24px;letter-spacing:1px;text-transform:uppercase;color:#f4ead5;line-height:1.1;">DR. AKANKSHA SHARMA</div>
    <div style="font-family:'Barlow',sans-serif;font-size:10px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#37c080;margin-top:3px;">YOGA EXPERT</div>
  </div>
</div>				</div>
				</div>
		<div class="elementor-element elementor-element-e80b262 e-con-full e-flex e-con e-child" data-id="e80b262" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-677766b elementor-widget elementor-widget-text-editor" data-id="677766b" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p style="margin: 0;">Dr. Akanksha Sharma is a <strong data-start="68" data-end="83">Yoga Expert</strong> at <strong data-start="87" data-end="116">Fitbliss by Shruti Kapoor</strong> with <strong data-start="122" data-end="149">15+ years of experience</strong> in holistic wellness. Holding a <strong data-start="182" data-end="213">Diploma in Traditional Yoga</strong>, <strong data-start="215" data-end="232">M.Sc. in Yoga</strong>, and a <strong data-start="240" data-end="267">Ph.D. in Pregnancy Yoga</strong>, she specialises in traditional, therapeutic, aerial, and pregnancy yoga. She helps individuals improve flexibility, balance, overall health, and well-being through personalised yoga practices.</p>								</div>
				</div>
				<div class="elementor-element elementor-element-8c80b0d elementor-widget elementor-widget-text-editor" data-id="8c80b0d" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									— Expertise								</div>
				</div>
				<div class="elementor-element elementor-element-ed04769 elementor-widget elementor-widget-text-editor" data-id="ed04769" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<div><span style="display: inline-block; border: 1px solid rgba(255,255,255,0.10); background: rgba(255,255,255,0.03); color: #f4f2ea; opacity: 0.85; padding: 6px 10px; margin: 0 6px 6px 0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; font-family: Barlow,sans-serif;">TRADITIONAL YOGA</span></div><div><span style="display: inline-block; border: 1px solid rgba(255,255,255,0.10); background: rgba(255,255,255,0.03); color: #f4f2ea; opacity: 0.85; padding: 6px 10px; margin: 0 6px 6px 0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; font-family: Barlow,sans-serif;">THERAPEUTIC YOGA</span></div><div><span style="display: inline-block; border: 1px solid rgba(255,255,255,0.10); background: rgba(255,255,255,0.03); color: #f4f2ea; opacity: 0.85; padding: 6px 10px; margin: 0 6px 6px 0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; font-family: Barlow,sans-serif;">AERIAL YOGA</span></div><div><span style="display: inline-block; border: 1px solid rgba(255,255,255,0.10); background: rgba(255,255,255,0.03); color: #f4f2ea; opacity: 0.85; padding: 6px 10px; margin: 0 6px 6px 0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; font-family: Barlow,sans-serif;">PREGNANCY YOGA</span></div>								</div>
				</div>
		<div class="elementor-element elementor-element-b60bc29 e-con-full e-flex e-con e-child" data-id="b60bc29" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-12aa955 elementor-widget elementor-widget-button" data-id="12aa955" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="https://wa.me/917470787014">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Book session</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				<div class="elementor-element elementor-element-a800d5b elementor-widget elementor-widget-button" data-id="a800d5b" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="https://wa.me/917470787014">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">WhatsApp</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-e4d3b45 e-con-full e-flex e-con e-child" data-id="e4d3b45" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-element elementor-element-8a71fd5 elementor-widget elementor-widget-html" data-id="8a71fd5" data-element_type="widget" data-e-type="widget" data-widget_type="html.default">
				<div class="elementor-widget-container">
					<div style="position:relative;width:100%;height:340px;overflow:hidden;">
  <img decoding="async" src="/fitbliss/wp-content/uploads/2026/07/WhatsApp_Image_2026-07-17_at_12.52.43_PM-removebg-preview.png" style="width:100%;height:100%;object-fit:cover;display:block;" />
  <div style="position:absolute;top:14px;right:14px;background:rgba(1,3,3,0.75);border:1px solid rgba(55,192,128,0.6);padding:6px 10px;font-family:'Barlow',sans-serif;font-size:10px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#37c080;">2+ yrs</div>
  <div style="position:absolute;left:0;right:0;bottom:0;background:linear-gradient(to top, rgba(1,3,3,0.9), rgba(1,3,3,0.15) 70%, transparent);padding:16px 18px 14px;">
    <div style="font-family:'Bebas Neue',Impact,sans-serif;font-size:24px;letter-spacing:1px;text-transform:uppercase;color:#f4ead5;line-height:1.1;">NIDHI AGRAWAL</div>
    <div style="font-family:'Barlow',sans-serif;font-size:10px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#37c080;margin-top:3px;">AQUATIC THERAPY </div>
  </div>
</div>				</div>
				</div>
		<div class="elementor-element elementor-element-88e2c64 e-con-full e-flex e-con e-child" data-id="88e2c64" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-689756b elementor-widget elementor-widget-text-editor" data-id="689756b" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p style="margin: 0;">Nidhi Agrawal is a skilled <strong data-start="73" data-end="97">Neurophysiotherapist</strong> at <strong data-start="101" data-end="130">Fitbliss by Shruti Kapoor</strong> with expertise in neurological rehabilitation and functional recovery. Holding a <strong data-start="212" data-end="246">Master&#8217;s in Neurophysiotherapy</strong>, she uses evidence-based techniques to improve mobility, restore movement, and enhance quality of life through personalised rehabilitation and movement-focused care.</p>								</div>
				</div>
				<div class="elementor-element elementor-element-0ad346c elementor-widget elementor-widget-text-editor" data-id="0ad346c" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									— Expertise								</div>
				</div>
				<div class="elementor-element elementor-element-403e47e elementor-widget elementor-widget-text-editor" data-id="403e47e" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<div><span style="display: inline-block; border: 1px solid rgba(255,255,255,0.10); background: rgba(255,255,255,0.03); color: #f4f2ea; opacity: 0.85; padding: 6px 10px; margin: 0 6px 6px 0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; font-family: Barlow,sans-serif;">NEURO REHABILITATION</span></div><div><span style="display: inline-block; border: 1px solid rgba(255,255,255,0.10); background: rgba(255,255,255,0.03); color: #f4f2ea; opacity: 0.85; padding: 6px 10px; margin: 0 6px 6px 0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; font-family: Barlow,sans-serif;">PNF THERAPY</span></div><div><span style="display: inline-block; border: 1px solid rgba(255,255,255,0.10); background: rgba(255,255,255,0.03); color: #f4f2ea; opacity: 0.85; padding: 6px 10px; margin: 0 6px 6px 0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; font-family: Barlow,sans-serif;">AQUATIC THERAPY</span></div><div><span style="display: inline-block; border: 1px solid rgba(255,255,255,0.10); background: rgba(255,255,255,0.03); color: #f4f2ea; opacity: 0.85; padding: 6px 10px; margin: 0 6px 6px 0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; font-family: Barlow,sans-serif;">FUNCTIONAL REHABILITATION</span></div>								</div>
				</div>
		<div class="elementor-element elementor-element-cc19e3a e-con-full e-flex e-con e-child" data-id="cc19e3a" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-923fdb6 elementor-widget elementor-widget-button" data-id="923fdb6" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="https://wa.me/917470787014">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Book session</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				<div class="elementor-element elementor-element-dd04e14 elementor-widget elementor-widget-button" data-id="dd04e14" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="https://wa.me/917470787014">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">WhatsApp</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				</div>
				</div>
				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-48f69cc6 e-con-full e-flex e-con e-child" data-id="48f69cc6" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
		<div class="elementor-element elementor-element-4f862d77 e-flex e-con-boxed e-con e-child" data-id="4f862d77" data-element_type="container" data-e-type="container">
					<div class="e-con-inner">
				<div class="elementor-element elementor-element-4b2382ac elementor-widget elementor-widget-heading" data-id="4b2382ac" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Not sure who to train with?</h2>				</div>
				</div>
				<div class="elementor-element elementor-element-1048637c elementor-widget elementor-widget-text-editor" data-id="1048637c" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p style="text-align: center;"><span style="color: #9b998b;">Take a free trial. We&#8217;ll match you to the coach whose style, schedule and goals fit yours.</span></p>								</div>
				</div>
				<div class="elementor-element elementor-element-450eefe1 elementor-widget elementor-widget-button" data-id="450eefe1" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="https://wa.me/917470787014">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Book a free trial</span>
					</span>
					</a>
				</div>
								</div>
				</div>
					</div>
				</div>
				</div>
				</div>
				</div>
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
										<span class="elementor-icon-list-text"><span class="__cf_email__" data-cfemail="40292e262f00262934222c2933332239332b6e232f2d">info@fitblissbysk.com</span></span>
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
                    <legend class="ff_screen_reader_title" style="display: block; margin: 0!important;padding: 0!important;height: 0!important;text-indent: -999999px;width: 0!important;overflow:hidden;">Contact Form</legend><input type='hidden' name='__fluent_form_embded_post_id' value='18658' /><input type="hidden" id="_fluentform_1_fluentformnonce" name="_fluentform_1_fluentformnonce" value="1ea1268e73" /><input type="hidden" name="_wp_http_referer" value="/trainers/" /><div class='ff-el-group ff-el-form-hide_label'><div class="ff-el-input--label asterisk-right"><label for='ff_1_input_text' id='label_ff_1_input_text' aria-label="Name">Name</label></div><div class='ff-el-input--content'><input type="text" name="input_text" class="ff-el-form-control" placeholder="Name" data-name="input_text" id="ff_1_input_text"  aria-invalid="false" aria-required=false></div></div><div class='ff-el-group ff-el-form-hide_label'><div class="ff-el-input--label ff-el-is-required asterisk-right"><label for='ff_1_email' id='label_ff_1_email' aria-label="Email">Email</label></div><div class='ff-el-input--content'><input type="email" name="email" id="ff_1_email" class="ff-el-form-control" placeholder="Email" data-name="email"  aria-invalid="false" aria-required=true></div></div><div class='ff-el-group ff-el-form-hide_label'><div class="ff-el-input--label ff-el-is-required asterisk-right"><label for='ff_1_subject' id='label_ff_1_subject' aria-label="Phone">Phone</label></div><div class='ff-el-input--content'><input type="text" name="subject" class="ff-el-form-control" placeholder="Phone" data-name="subject" id="ff_1_subject"  aria-invalid="false" aria-required=true></div></div><div class='ff-el-group ff-el-form-hide_label'><div class="ff-el-input--label ff-el-is-required asterisk-right"><label for='ff_1_message' id='label_ff_1_message' aria-label="Your Message">Your Message</label></div><div class='ff-el-input--content'><textarea aria-required="true" aria-labelledby="label_ff_1_message" name="message" id="ff_1_message" class="ff-el-form-control" placeholder="Your Message" rows="4" cols="2" data-name="message" ></textarea></div></div><input type="hidden" name="pagelink" value="/fitbliss/trainers/" data-name="pagelink" ><div class='ff-el-group ff-text-left ff_submit_btn_wrapper'><button type="submit" class="ff-btn ff-btn-submit ff-btn-md ff_btn_style"  aria-label="Submit">Submit</button><style>form.fluent_form_1 .ff-btn-submit:not(.ff_btn_no_style) { background-color: var(--fluentform-primary); color: #ffffff; }</style></div></fieldset></form><div id='fluentform_1_errors' class='ff-errors-in-stack ff_form_instance_1_1 ff-form-loading_errors ff_form_instance_1_1_errors'></div></div>            <script type="text/javascript">
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
			<link rel='stylesheet' id='elementor-post-18650-css' href='/fitbliss/wp-content/uploads/elementor/css/post-18650.css?ver=1790278892' media='all' />
<link rel='stylesheet' id='elementor-gf-local-barlow-css' href='/fitbliss/wp-content/uploads/elementor/google-fonts/css/barlow.css?ver=1784191232' media='all' />
<link rel='stylesheet' id='elementor-gf-local-bebasneue-css' href='/fitbliss/wp-content/uploads/elementor/google-fonts/css/bebasneue.css?ver=1749301349' media='all' />
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
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnX":"Share on X","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close","a11yCarouselPrevSlideMessage":"Previous slide","a11yCarouselNextSlideMessage":"Next slide","a11yCarouselFirstSlideMessage":"This is the first slide","a11yCarouselLastSlideMessage":"This is the last slide","a11yCarouselPaginationBulletMessage":"Go to slide"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile Portrait","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Landscape","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet Portrait","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Landscape","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}},"hasCustomBreakpoints":false},"version":"4.2.4","is_static":false,"experimentalFeatures":{"e_font_icon_svg":true,"additional_custom_breakpoints":true,"container":true,"e_panel_promotions":true,"theme_builder_v2":true,"hello-theme-header-footer":true,"nested-elements":true,"global_classes_should_enforce_capabilities":true,"e_variables":true,"e_opt_in_v4_page":true,"e_components":true,"e_interactions":true,"e_widget_creation":true,"import-export-customization":true,"e_pro_atomic_form":true,"e_pro_variables":true,"e_pro_interactions":true},"urls":{"assets":"https:\/\/staging.fitblissbysk.com\/wp-content\/plugins\/elementor\/assets\/","ajaxurl":"https:\/\/staging.fitblissbysk.com\/wp-admin\/admin-ajax.php","uploadUrl":"https:\/\/staging.fitblissbysk.com\/wp-content\/uploads"},"nonces":{"floatingButtonsClickTracking":"1789dd066d","atomicFormsSendForm":"219b12a670"},"swiperClass":"swiper","settings":{"page":[],"editorPreferences":[]},"kit":{"body_background_background":"classic","active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description","hello_header_logo_type":"title","hello_header_menu_layout":"horizontal","hello_footer_logo_type":"logo"},"post":{"id":18658,"title":"Trainers%20-%20Fit%20Bliss","excerpt":"","featuredImage":false}};
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
