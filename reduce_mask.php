<?php
$file = 'd:/xampp/htdocs/fitbliss/php-site/index.php';
$html = file_get_contents($file);

$subtle_mask_css = <<<CSS
<style id="fitbliss-hero-zero-gap">
/* ─── ELIMINATE ALL HERO BLANK SPACES, PADDINGS & YOUTUBE TITLE OVERLAYS ─── */
.elementor-element-1c8e0f27,
.elementor-element-337ffeb8,
.elementor-element-1c8e0f27.e-con,
.elementor-element-337ffeb8.e-con,
.elementor-element-13edff63,
.elementor-element-13edff63 > .elementor-widget-container {
    --padding-top: 0px !important;
    --padding-bottom: 0px !important;
    --padding-left: 0px !important;
    --padding-right: 0px !important;
    padding-top: 0px !important;
    padding-bottom: 0px !important;
    padding-left: 0px !important;
    padding-right: 0px !important;
    padding: 0px !important;
    margin: 0px !important;
    border: none !important;
    width: 100% !important;
    max-width: 100% !important;
}

#home {
    position: relative !important;
    width: 100% !important;
    height: 100vh !important;
    min-height: 100vh !important;
    margin: 0px !important;
    padding: 0px !important;
    overflow: hidden !important;
    background: #000000 !important;
}

.hero-video-wrap {
    position: absolute !important;
    top: 0 !important;
    left: 0 !important;
    right: 0 !important;
    bottom: 0 !important;
    width: 100% !important;
    height: 100% !important;
    margin: 0 !important;
    padding: 0 !important;
    overflow: hidden !important;
    z-index: 1 !important;
}

#ytHeroIframe {
    position: absolute !important;
    top: 42% !important; /* Shifted up to crop YouTube channel header cleanly */
    left: 50% !important;
    width: max(140vw, 250vh) !important;
    height: max(140vh, 78vw) !important;
    min-width: 100% !important;
    min-height: 100% !important;
    transform: translate(-50%, -50%) scale(1.5) !important;
    border: none !important;
    pointer-events: none !important;
}

/* Subtle, slim top shadow overlay - tight to header */
.hero-top-mask {
    position: absolute !important;
    top: 0 !important;
    left: 0 !important;
    right: 0 !important;
    height: 50px !important;
    background: linear-gradient(180deg, rgba(1, 3, 3, 0.75) 0%, rgba(1, 3, 3, 0.25) 60%, transparent 100%) !important;
    pointer-events: none !important;
    z-index: 5 !important;
}

@media (max-width: 768px) {
    #home {
        height: 100vh !important;
        min-height: 100vh !important;
    }
    #ytHeroIframe {
        top: 38% !important;
        width: max(160vw, 200vh) !important;
        height: max(120vh, 90vw) !important;
        transform: translate(-50%, -50%) scale(1.75) !important;
    }
    .hero-top-mask {
        height: 40px !important;
    }
}
</style>
CSS;

// Replace style block
$html = preg_replace('/<style id="fitbliss-hero-zero-gap">[\s\S]*?<\/style>/i', '', $html);
$html = str_replace('</head>', $subtle_mask_css . "\n</head>", $html);

file_put_contents($file, $html);
echo "Top mask height reduced to slim 50px subtle gradient!\n";
