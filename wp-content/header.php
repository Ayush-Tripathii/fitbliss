<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section, opens the <body> tag and adds the site's header.
 *
 * @package HelloElementor
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$viewport_content = apply_filters( 'hello_elementor_viewport_content', 'width=device-width, initial-scale=1' );
$enable_skip_link = apply_filters( 'hello_elementor_enable_skip_link', true );
$skip_link_url = apply_filters( 'hello_elementor_skip_link_url', '#content' );
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="<?php echo esc_attr( $viewport_content ); ?>">
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
        inset: 0 !important;
        top: 0 !important;
        left: 0 !important;
        right: 0 !important;
        z-index: 99999 !important;
        padding: 0px 15px !important;
        width: 100% !important;
        box-sizing: border-box !important;
    }

    .topstrip {
        display: block !important;
        border-bottom: 1px solid rgba(255, 255, 255, .10) !important;
        background: rgba(10, 20, 20, .40) !important;
        backdrop-filter: blur(12px) saturate(160%) !important;
        -webkit-backdrop-filter: blur(12px) saturate(160%) !important;
        padding: 0 10px !important;
        border-radius: 0px 0px 10px 10px !important;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25) !important;
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
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <?php if ( $enable_skip_link ) { ?>
    <a class="skip-link screen-reader-text" href="<?php echo esc_url( $skip_link_url ); ?>">
        <?php echo esc_html__( 'Skip to content', 'hello-elementor' ); ?>
    </a>
    <?php } ?>

    <?php
// Custom Header Implementation
?>
    <header class="header" id="header">
        <!-- TOP STRIP -->
<!-- TOP STRIP -->
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
        <div class="item" data-name="Home"><a class="link" href="/fitbliss/">Home</a></div>
        <div class="item" data-name="About Us"><a class="link" href="/fitbliss/about/">About Us</a></div>
        <div class="item" data-name="Services"><a class="link" href="/fitbliss/#services">Services</a></div>
        <div class="item" data-name="Membership"><a class="link" href="/fitbliss/membership/">Membership</a></div>
      </nav>

      <!-- CENTER LOGO -->
      <a class="logo" href="/fitbliss/">
        <img src="/fitbliss/wp-content/uploads/2026/07/logo.png" alt="FitBliss by Shruti Kapoor" onerror="this.onerror=null; this.src='https://staging.fitblissbysk.com/wp-content/uploads/2026/07/logo.png';">
      </a>

      <!-- RIGHT NAV -->
      <div class="right">
        <nav class="navlist" id="rightNav">
          <div class="item" data-name="Gallery"><a class="link" href="/fitbliss/gallery/">Gallery</a></div>
          <div class="item" data-name="Blog"><a class="link" href="/fitbliss/blog/">Blog</a></div>
          <div class="item" data-name="Trainers"><a class="link" href="/fitbliss/trainers/">Trainers</a></div>
          <div class="item" data-name="Contact"><a class="link" href="/fitbliss/contact/">Contact</a></div>
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
  </div>

  <div class="container">
    <div class="navrow">
      <!-- LEFT NAV -->
      <nav class="navlist" id="leftNav">
        <div class="item" data-name="Home"><a class="link" href="/fitbliss/">Home</a></div>
        <div class="item" data-name="About Us"><a class="link" href="/fitbliss/about/">About Us</a></div>
        <div class="item" data-name="Services"><a class="link" href="/fitbliss/#services">Services</a></div>
        <div class="item" data-name="Membership"><a class="link" href="/fitbliss/membership/">Membership</a></div>
      </nav>

      <!-- CENTER LOGO -->
      <a class="logo" href="/fitbliss/">
        <img src="/fitbliss/wp-content/uploads/2026/07/logo.png" alt="FitBliss by Shruti Kapoor" onerror="this.onerror=null; this.src='https://staging.fitblissbysk.com/wp-content/uploads/2026/07/logo.png';">
      </a>

      <!-- RIGHT NAV -->
      <div class="right">
        <nav class="navlist" id="rightNav">
          <div class="item" data-name="Gallery"><a class="link" href="/fitbliss/gallery/">Gallery</a></div>
          <div class="item" data-name="Blog"><a class="link" href="/fitbliss/blog/">Blog</a></div>
          <div class="item" data-name="Trainers"><a class="link" href="/fitbliss/trainers/">Trainers</a></div>
          <div class="item" data-name="Contact"><a class="link" href="/fitbliss/contact/">Contact</a></div>
        </nav>
        <a class="cta call-btn" href="tel:+917470787012">Call Us</a>
        <button class="burger" id="burgerBtn" aria-label="Toggle menu">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 12h18M3 6h18M3 18h18"/></svg>
        </button>
      </div>
    </div>
  </div>
</div>

    <script>
    (function() {
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
                                    img: "/fitbliss/wp-content/uploads/2026/06/DSC_2491-scaled.jpg",
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
                    href: "/fitbliss/#services"
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
            const customLinks = {
                "Home": "/fitbliss/",
                "About Us": "/fitbliss/about/",
                "Services": "/fitbliss/#services",
                "Membership": "/fitbliss/membership/",
                "Gallery": "/fitbliss/gallery/",
                "Blog": "/fitbliss/blog/",
                "Trainers": "/fitbliss/trainers/",
                "Contact": "/fitbliss/contact/"
            };
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

        // Mobile Menu toggle
        const burgerBtn = document.getElementById("burgerBtn") || document.getElementById("burger");
        const mobile = document.getElementById("mobile");
        if (burgerBtn && mobile) {
            burgerBtn.addEventListener("click", (e) => {
                e.preventDefault();
                mobile.classList.toggle("show");
            });
        }
    })();
</script>