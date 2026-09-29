<?php
$file = 'd:/xampp/htdocs/fitbliss/php-site/index.php';
$html = file_get_contents($file);

// Replace Hero section CSS with clean full-screen 100% responsive video background rules
$hero_css_replacement = <<<CSS
    /* ─── FULL SCREEN HERO VIDEO SECTION ─── */
    #home {
        position: relative;
        width: 100%;
        min-height: 100vh;
        height: 100vh;
        overflow: hidden;
        background: #010303;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
    }

    .hero-video-wrap {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        z-index: 1;
        pointer-events: none;
    }

    #ytHeroIframe {
        position: absolute !important;
        top: 50% !important;
        left: 50% !important;
        width: 100vw !important;
        height: 56.25vw !important; /* 16:9 aspect */
        min-height: 100vh !important;
        min-width: 177.78vh !important; /* 16:9 aspect */
        transform: translate(-50%, -50%) !important;
        border: none !important;
    }

    @media (max-aspect-ratio: 16/9) {
        #ytHeroIframe {
            width: 177.78vh !important;
            height: 100vh !important;
        }
    }

    @media (min-aspect-ratio: 16/9) {
        #ytHeroIframe {
            width: 100vw !important;
            height: 56.25vw !important;
        }
    }

    .hero-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, rgba(1,3,3,0.2) 0%, rgba(1,3,3,0.65) 100%);
        pointer-events: none;
        z-index: 2;
    }

    .hero-container {
        position: relative;
        z-index: 10;
        width: 100%;
        max-width: 1400px;
        margin: 0 auto;
        padding: 40px 40px 50px;
        box-sizing: border-box;
    }

    @media (max-width: 768px) {
        #home {
            min-height: 100vh !important;
            height: 100vh !important;
        }
        .hero-container {
            padding: 30px 20px 40px !important;
        }
    }
CSS;

// Replace the old hero iframe style with the clean full-screen style
$pattern = '/\/\* YouTube iframe — full screen cover & title\/controls crop \*\/[\s\S]*?@media \(max-width: 576px\) \{[\s\S]*?padding: 20px 16px 20px;\s*min-height: 60vh;\s*\}\s*\}/i';

if (preg_match($pattern, $html)) {
    $html = preg_replace($pattern, $hero_css_replacement, $html);
} else {
    // Inject into custom responsive style block
    $html = str_replace('
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
</style>', "\n" . $hero_css_replacement . "\n</style>", $html);
}

file_put_contents($file, $html);
echo "Hero section updated to full-screen video in index.php!\n";
