<?php
// Script to inject responsive enhancements & mobile interactions across all 17 PHP pages

$pages = [
    'index.php',
    'cardio.php',
    'gym.php',
    'pilates.php',
    'yoga.php',
    'crossfit.php',
    'cryotherapy.php',
    'stepper.php',
    'health-cafe.php',
    'dermatology.php',
    'free-weight.php',
    'trainers.php',
    'blog.php',
    'founder.php',
    'privacy-policy.php',
    'terms-conditions.php',
    'terms-of-use.php',
];

$responsive_css = <<<CSS
<style id="fitbliss-custom-responsive-qa">
/* ─── FITBLISS MOBILE & RESPONSIVE QA ENHANCEMENTS ─── */
html, body {
    overflow-x: hidden !important;
    max-width: 100vw !important;
    box-sizing: border-box;
}

/* Mobile Header & Hamburger Menu */
.elementor-menu-toggle {
    cursor: pointer !important;
    display: flex !important;
    align-items: center;
    justify-content: center;
    z-index: 9999;
}

@media (min-width: 1025px) {
    .elementor-menu-toggle {
        display: none !important;
    }
    .elementor-nav-menu--dropdown {
        display: none !important;
    }
}

@media (max-width: 1024px) {
    .elementor-nav-menu--main {
        display: none !important;
    }
    .elementor-menu-toggle {
        display: flex !important;
    }
    .elementor-nav-menu--dropdown {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        background: #010303;
        border-top: 1px solid rgba(255,255,255,0.1);
        border-bottom: 2px solid #37c080;
        padding: 20px;
        box-sizing: border-box;
        z-index: 9998;
        box-shadow: 0 10px 30px rgba(0,0,0,0.8);
    }
    .elementor-nav-menu--dropdown.elementor-active {
        display: block !important;
    }
    .elementor-nav-menu--dropdown ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    .elementor-nav-menu--dropdown li {
        margin: 10px 0;
    }
    .elementor-nav-menu--dropdown a {
        color: #f4f2ea !important;
        font-family: 'Barlow', Inter, sans-serif !important;
        font-size: 16px !important;
        text-transform: uppercase !important;
        letter-spacing: 1.5px !important;
        text-decoration: none !important;
        display: block;
        padding: 8px 0;
    }
    .elementor-nav-menu--dropdown a:hover,
    .elementor-nav-menu--dropdown a:focus {
        color: #37c080 !important;
    }
    .elementor-nav-menu--dropdown .sub-menu {
        padding-left: 20px;
        border-left: 2px solid rgba(55,192,128,0.3);
        margin: 8px 0;
    }
}

/* Mobile Hero Overlay */
@media (max-width: 768px) {
    .hero-grid {
        opacity: 1 !important;
        visibility: visible !important;
        pointer-events: auto !important;
        grid-template-columns: 1fr !important;
        gap: 20px !important;
    }
    .hero-cta-group {
        justify-content: flex-start !important;
    }
    .hero-container {
        padding: 20px 16px 24px !important;
    }
}

/* Touch & tap states */
a, button {
    -webkit-tap-highlight-color: transparent;
}

/* Video Testimonial Responsive adjustments */
.fbt-section {
    width: 100% !important;
    max-width: 100vw !important;
    overflow-x: hidden !important;
}

/* Responsive Images & Videos */
img, video {
    max-width: 100%;
    height: auto;
}
</style>
CSS;

$responsive_js = <<<JS
<script id="fitbliss-custom-responsive-script">
document.addEventListener('DOMContentLoaded', function() {
    // 1. Mobile Menu Toggle Handler
    var toggles = document.querySelectorAll('.elementor-menu-toggle');
    toggles.forEach(function(btn) {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            var parentNav = btn.closest('.elementor-widget-nav-menu');
            if (parentNav) {
                var dropdown = parentNav.querySelector('.elementor-nav-menu--dropdown');
                if (dropdown) {
                    var isOpen = dropdown.classList.contains('elementor-active');
                    dropdown.classList.toggle('elementor-active');
                    btn.setAttribute('aria-expanded', !isOpen);
                    btn.classList.toggle('elementor-active');
                }
            }
        });
    });

    // Close mobile dropdown when a link is clicked
    var dropLinks = document.querySelectorAll('.elementor-nav-menu--dropdown a');
    dropLinks.forEach(function(link) {
        link.addEventListener('click', function() {
            var dropdown = link.closest('.elementor-nav-menu--dropdown');
            if (dropdown && link.getAttribute('href') !== '#') {
                dropdown.classList.remove('elementor-active');
                var btn = dropdown.closest('.elementor-widget-nav-menu').querySelector('.elementor-menu-toggle');
                if (btn) btn.classList.remove('elementor-active');
            }
        });
    });

    // 2. Mobile Hero Touch Reveal
    var hero = document.getElementById('home');
    if (hero) {
        hero.addEventListener('touchstart', function() {
            hero.classList.add('show-text');
        }, { passive: true });
    }
});
</script>
JS;

foreach ($pages as $p) {
    $path = 'd:/xampp/htdocs/fitbliss/php-site/' . $p;
    if (!file_exists($path)) continue;
    $content = file_get_contents($path);
    
    // Remove old injections if existing
    $content = preg_replace('/<style id="fitbliss-custom-responsive-qa">[\s\S]*?<\/style>/i', '', $content);
    $content = preg_replace('/<script id="fitbliss-custom-responsive-script">[\s\S]*?<\/script>/i', '', $content);
    $content = preg_replace('/<script[^>]+email-decode\.min\.js[^>]*><\/script>/i', '', $content);

    // Inject before </head>
    $content = str_replace('</head>', $responsive_css . "\n</head>", $content);
    
    // Inject before </body>
    $content = str_replace('</body>', $responsive_js . "\n</body>", $content);
    
    file_put_contents($path, $content);
    echo "Enhanced $p\n";
}

echo "All pages successfully enhanced with responsive QA styles and scripts!\n";
