<?php
$file = 'd:/xampp/htdocs/fitbliss/php-site/index.php';
$html = file_get_contents($file);

$blank_space_fix = <<<CSS
<style id="fitbliss-hero-zero-gap">
/* ─── ELIMINATE ALL HERO BLANK SPACES & PADDINGS ─── */
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
    top: 50% !important;
    left: 50% !important;
    width: max(115vw, 205vh) !important;
    height: max(115vh, 65vw) !important;
    min-width: 100% !important;
    min-height: 100% !important;
    transform: translate(-50%, -50%) scale(1.15) !important;
    border: none !important;
    pointer-events: none !important;
}

@media (max-width: 768px) {
    #home {
        height: 100vh !important;
        min-height: 100vh !important;
    }
    #ytHeroIframe {
        width: max(130vw, 160vh) !important;
        height: max(100vh, 75vw) !important;
        transform: translate(-50%, -50%) scale(1.35) !important;
    }
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
CSS;

// Remove previous injection if any
$html = preg_replace('/<style id="fitbliss-hero-zero-gap">[\s\S]*?<\/style>/i', '', $html);

// Inject into head
$html = str_replace('</head>', $blank_space_fix . "\n</head>", $html);

file_put_contents($file, $html);
echo "Zero blank space fix injected successfully!\n";
