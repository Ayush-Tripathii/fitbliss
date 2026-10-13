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
	<title>Fit Bliss</title>
<meta name='robots' content='max-image-preview:large' />
<link rel="alternate" type="application/rss+xml" title="Fit Bliss &raquo; Feed" href="https://fitblissbysk.com/feed/" />
<link rel="alternate" type="application/rss+xml" title="Fit Bliss &raquo; Comments Feed" href="https://fitblissbysk.com/comments/feed/" />
<link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="https://fitblissbysk.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Ffitblissbysk.com%2F" />
<link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="https://fitblissbysk.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Ffitblissbysk.com%2F&#038;format=xml" />
<style id="wp-img-auto-sizes-contain-inline-css">
img:is([sizes=auto i],[sizes^="auto," i]){contain-intrinsic-size:3000px 1500px}
/*# sourceURL=wp-img-auto-sizes-contain-inline-css */

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
        height: 56.25vw !important;
        min-height: 100vh !important;
        min-width: 177.78vh !important;
        transform: translate(-50%, -50%) scale(1.02) !important;
        border: none !important;
        pointer-events: none !important;
    }

    @media (max-aspect-ratio: 16/9) {
        #ytHeroIframe { width: 177.78vh !important; height: 100vh !important; min-width: 177.78vh !important; min-height: 100vh !important; transform: translate(-50%, -50%) scale(1.02) !important; }
    }

    @media (min-aspect-ratio: 16/9) {
        #ytHeroIframe { width: 100vw !important; height: 56.25vw !important; min-width: 100vw !important; min-height: 56.25vw !important; transform: translate(-50%, -50%) scale(1.02) !important; }
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

    /* ─── FITBLISS STAT CARDS SINGLE ROW (STUDIO SECTION) ─── */
    .elementor-element.elementor-element-64b8459,
    .elementor-20307 .elementor-element.elementor-element-64b8459,
    div[data-id="64b8459"] {
        display: flex !important;
        flex-direction: row !important;
        flex-wrap: nowrap !important;
        gap: 12px !important;
        width: 100% !important;
        --display: flex !important;
        --flex-direction: row !important;
        --flex-wrap: nowrap !important;
        --flex-wrap-mobile: nowrap !important;
        margin-top: 24px !important;
    }

    .elementor-element.elementor-element-64b8459 > .elementor-element,
    .elementor-20307 .elementor-element.elementor-element-64b8459 > .elementor-element,
    div[data-id="64b8459"] > .elementor-element {
        flex: 1 1 0% !important;
        width: 25% !important;
        min-width: 0 !important;
        max-width: 100% !important;
        background-color: #0d1717 !important;
        border: 1px solid rgba(255, 255, 255, 0.08) !important;
        padding: 22px 14px !important;
        box-sizing: border-box !important;
        display: flex !important;
        flex-direction: column !important;
        justify-content: center !important;
        --width: 25% !important;
    }

    .elementor-element.elementor-element-64b8459 .elementor-heading-title,
    .elementor-20307 .elementor-element.elementor-element-64b8459 .elementor-heading-title,
    div[data-id="64b8459"] .elementor-heading-title {
        font-family: "Bebas Neue", Impact, sans-serif !important;
        font-size: 40px !important;
        font-weight: 400 !important;
        line-height: 1 !important;
        color: #37c080 !important;
        margin: 0 0 6px 0 !important;
        letter-spacing: 0.5px !important;
    }

    .elementor-element.elementor-element-64b8459 .elementor-widget-text-editor p,
    .elementor-20307 .elementor-element.elementor-element-64b8459 .elementor-widget-text-editor p,
    div[data-id="64b8459"] .elementor-widget-text-editor p {
        font-family: "Barlow", sans-serif !important;
        font-size: 11px !important;
        font-weight: 400 !important;
        line-height: 1.35 !important;
        color: #9b998b !important;
        margin: 0 !important;
        white-space: nowrap !important;
    }

    @media (max-width: 767px) {
        .elementor-element.elementor-element-64b8459,
        .elementor-20307 .elementor-element.elementor-element-64b8459,
        div[data-id="64b8459"] {
            display: flex !important;
            flex-direction: row !important;
            flex-wrap: nowrap !important;
            gap: 8px !important;
            width: 100% !important;
            overflow-x: auto !important;
            -webkit-overflow-scrolling: touch !important;
            padding-bottom: 6px !important;
        }

        .elementor-element.elementor-element-64b8459 > .elementor-element,
        .elementor-20307 .elementor-element.elementor-element-64b8459 > .elementor-element,
        div[data-id="64b8459"] > .elementor-element {
            flex: 1 0 auto !important;
            min-width: 110px !important;
            padding: 16px 10px !important;
            --width: auto !important;
        }

        .elementor-element.elementor-element-64b8459 .elementor-heading-title,
        .elementor-20307 .elementor-element.elementor-element-64b8459 .elementor-heading-title,
        div[data-id="64b8459"] .elementor-heading-title {
            font-size: 30px !important;
        }

        .elementor-element.elementor-element-64b8459 .elementor-widget-text-editor p,
        .elementor-20307 .elementor-element.elementor-element-64b8459 .elementor-widget-text-editor p,
        div[data-id="64b8459"] .elementor-widget-text-editor p {
            font-size: 10px !important;
        }
    }

    /* ─── FITBLISS STAT CARDS SINGLE ROW (FOUNDER SECTION) ─── */
    .elementor-element.elementor-element-6222ead1,
    .elementor-20307 .elementor-element.elementor-element-6222ead1,
    div[data-id="6222ead1"] {
        display: flex !important;
        flex-direction: row !important;
        flex-wrap: nowrap !important;
        gap: 0 !important;
        width: 100% !important;
        border: 1px solid rgba(255, 255, 255, 0.08) !important;
        background-color: #0d1717 !important;
        box-sizing: border-box !important;
        margin-top: 24px !important;
        --display: flex !important;
        --flex-direction: row !important;
        --flex-wrap: nowrap !important;
        --flex-wrap-mobile: nowrap !important;
    }

    .elementor-element.elementor-element-6222ead1 > .elementor-element,
    .elementor-20307 .elementor-element.elementor-element-6222ead1 > .elementor-element,
    div[data-id="6222ead1"] > .elementor-element {
        flex: 1 1 0% !important;
        width: 33.333% !important;
        min-width: 0 !important;
        max-width: 100% !important;
        background-color: #0d1717 !important;
        padding: 20px 22px !important;
        box-sizing: border-box !important;
        display: flex !important;
        flex-direction: column !important;
        justify-content: center !important;
        --width: 33.333% !important;
        border-style: none !important;
        border-right: 1px solid rgba(255, 255, 255, 0.08) !important;
    }

    .elementor-element.elementor-element-6222ead1 > .elementor-element:last-child,
    .elementor-20307 .elementor-element.elementor-element-6222ead1 > .elementor-element:last-child,
    div[data-id="6222ead1"] > .elementor-element:last-child {
        border-right: none !important;
    }

    .elementor-element.elementor-element-6222ead1 .elementor-heading-title,
    .elementor-20307 .elementor-element.elementor-element-6222ead1 .elementor-heading-title,
    div[data-id="6222ead1"] .elementor-heading-title {
        font-family: "Bebas Neue", Impact, sans-serif !important;
        font-size: 28px !important;
        font-weight: 400 !important;
        line-height: 1 !important;
        color: #37c080 !important;
        text-transform: uppercase !important;
        margin: 0 0 4px 0 !important;
        letter-spacing: 0.5px !important;
    }

    .elementor-element.elementor-element-6222ead1 .elementor-widget-text-editor p,
    .elementor-20307 .elementor-element.elementor-element-6222ead1 .elementor-widget-text-editor p,
    div[data-id="6222ead1"] .elementor-widget-text-editor p {
        font-family: "Barlow", sans-serif !important;
        font-size: 11px !important;
        font-weight: 400 !important;
        line-height: 1.35 !important;
        color: #9b998b !important;
        margin: 0 !important;
        white-space: nowrap !important;
    }

    @media (max-width: 767px) {
        .elementor-element.elementor-element-6222ead1,
        .elementor-20307 .elementor-element.elementor-element-6222ead1,
        div[data-id="6222ead1"] {
            display: flex !important;
            flex-direction: row !important;
            flex-wrap: nowrap !important;
            overflow-x: auto !important;
            -webkit-overflow-scrolling: touch !important;
        }

        .elementor-element.elementor-element-6222ead1 > .elementor-element,
        .elementor-20307 .elementor-element.elementor-element-6222ead1 > .elementor-element,
        div[data-id="6222ead1"] > .elementor-element {
            flex: 1 0 auto !important;
            min-width: 100px !important;
            padding: 16px 12px !important;
            --width: auto !important;
        }

        .elementor-element.elementor-element-6222ead1 .elementor-heading-title,
        .elementor-20307 .elementor-element.elementor-element-6222ead1 .elementor-heading-title,
        div[data-id="6222ead1"] .elementor-heading-title {
            font-size: 24px !important;
        }

        .elementor-element.elementor-element-6222ead1 .elementor-widget-text-editor p,
        .elementor-20307 .elementor-element.elementor-element-6222ead1 .elementor-widget-text-editor p,
        div[data-id="6222ead1"] .elementor-widget-text-editor p {
            font-size: 10px !important;
        }
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
        height: 56.25vw !important;
        min-height: 100vh !important;
        min-width: 177.78vh !important;
        transform: translate(-50%, -50%) scale(1.02) !important;
        border: none !important;
        pointer-events: none !important;
    }

    @media (max-aspect-ratio: 16/9) {
        #ytHeroIframe { width: 177.78vh !important; height: 100vh !important; min-width: 177.78vh !important; min-height: 100vh !important; transform: translate(-50%, -50%) scale(1.02) !important; }
    }

    @media (min-aspect-ratio: 16/9) {
        #ytHeroIframe { width: 100vw !important; height: 56.25vw !important; min-width: 100vw !important; min-height: 56.25vw !important; transform: translate(-50%, -50%) scale(1.02) !important; }
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
</style>
<style id="popup-builder-block-popup-builder-style-inline-css">
.pbb-noscroll{overflow:hidden}.popupkit-campaigns-template-default{background-color:transparent}.popup-builder{position:relative;width:100%;z-index:1}.popup-builder-modal{align-items:center;display:none;justify-content:center;opacity:0;pointer-events:all;transition:opacity .15s linear}.popup-builder-container{animation-duration:1.2s;max-height:100%;max-width:100%;overflow:visible;pointer-events:all;position:relative}.popup-builder-container .popupkit-container-overlay{height:100%;left:0;opacity:.5;position:absolute;top:0;transition:.3s;width:100%}.popup-builder-content{background-color:#fff;border-radius:3px;box-sizing:border-box;line-height:1.5;max-height:100vh;max-width:100vw;overflow:auto;padding:0;position:relative;width:100%}.popup-builder-content-credit{background-color:#fff;border-radius:3px;bottom:-29px;cursor:pointer;display:flex;left:50%;position:absolute;transform:translate(-50%);z-index:9999}.popup-builder-content-credit a{color:#000;font-size:14px;font-weight:500;text-decoration:none}.popup-builder-content-credit a svg{position:relative;top:3px}.popup-builder-close{color:transparent;cursor:pointer;display:flex;font-size:14px;line-height:1;margin-top:0;opacity:1;pointer-events:all;position:absolute;right:20px;text-decoration:none;top:20px;transition:all .4s ease;z-index:9999}:root{--pbb-popup-animate-duration:1s}.popup_animated{animation-duration:1s;animation-duration:var(--pbb-popup-animate-duration);animation-fill-mode:both}.popup_animated.reverse{animation-direction:reverse;animation-fill-mode:forwards}@keyframes fadeIn{0%{opacity:0}to{opacity:1}}.fadeIn{animation-name:fadeIn}@keyframes fadeInDown{0%{opacity:0;transform:translate3d(0,-100%,0)}to{opacity:1;transform:none}}.fadeInDown{animation-name:fadeInDown}@keyframes fadeInLeft{0%{opacity:0;transform:translate3d(-100%,0,0)}to{opacity:1;transform:none}}.fadeInLeft{animation-name:fadeInLeft}@keyframes fadeInRight{0%{opacity:0;transform:translate3d(100%,0,0)}to{opacity:1;transform:none}}.fadeInRight{animation-name:fadeInRight}@keyframes fadeInUp{0%{opacity:0;transform:translate3d(0,100%,0)}to{opacity:1;transform:none}}.fadeInUp{animation-name:fadeInUp}

/*# sourceURL=<?php echo $base_url; ?>/assets/plugins/popup-builder-block/build/blocks/popup-builder/style-index.css */

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
        height: 56.25vw !important;
        min-height: 100vh !important;
        min-width: 177.78vh !important;
        transform: translate(-50%, -50%) scale(1.02) !important;
        border: none !important;
        pointer-events: none !important;
    }

    @media (max-aspect-ratio: 16/9) {
        #ytHeroIframe { width: 177.78vh !important; height: 100vh !important; min-width: 177.78vh !important; min-height: 100vh !important; transform: translate(-50%, -50%) scale(1.02) !important; }
    }

    @media (min-aspect-ratio: 16/9) {
        #ytHeroIframe { width: 100vw !important; height: 56.25vw !important; min-width: 100vw !important; min-height: 56.25vw !important; transform: translate(-50%, -50%) scale(1.02) !important; }
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
</style>
<style id="popup-builder-block-button-style-inline-css">
.pbb-btn{align-items:center;color:#fff;cursor:pointer;display:inline-flex!important;justify-content:center;text-decoration:none;transition:.3s}.pbb-btn .gkit-icon{transition:.3s;vertical-align:middle}.pbb-btn:hover{background-color:#666}.pbb-btn:hover:before{opacity:1}.pbb-btn:before{background-size:102% 102%;border-radius:inherit;content:"";height:100%;left:0;opacity:0;position:absolute;top:0;transition:all .4s ease;width:100%;z-index:-1}.pbb-btn span{transition:.3s}

/*# sourceURL=<?php echo $base_url; ?>/assets/plugins/popup-builder-block/build/blocks/button/style-index.css */

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
        height: 56.25vw !important;
        min-height: 100vh !important;
        min-width: 177.78vh !important;
        transform: translate(-50%, -50%) scale(1.02) !important;
        border: none !important;
        pointer-events: none !important;
    }

    @media (max-aspect-ratio: 16/9) {
        #ytHeroIframe { width: 177.78vh !important; height: 100vh !important; min-width: 177.78vh !important; min-height: 100vh !important; transform: translate(-50%, -50%) scale(1.02) !important; }
    }

    @media (min-aspect-ratio: 16/9) {
        #ytHeroIframe { width: 100vw !important; height: 56.25vw !important; min-width: 100vw !important; min-height: 56.25vw !important; transform: translate(-50%, -50%) scale(1.02) !important; }
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
</style>
<style id="popup-builder-block-form-style-inline-css">
.pbb-form,.pbb-form__field{display:flex;flex-wrap:wrap}.pbb-form__field{align-items:center;position:relative;width:100%}.pbb-form__field-privacy-notice{display:block}.pbb-form__label{display:block;font-size:16px;margin-bottom:5px}.pbb-form__label.required:after{color:red;content:"*";margin-left:5px}.pbb-form__input-wrap{align-items:center;background-color:#fff;border:1px solid #ccc;border-radius:5px;display:flex;position:relative;transition:all .3s ease-in-out;width:100%}.pbb-form__input-wrap .pbb-form__input{border:none;border-radius:5px;font-size:16px;outline:none;padding:10px;transition:all .3s ease-in-out;width:100%}.pbb-form__input-wrap .pbb-form__input:focus-visible{outline:none}.pbb-form__input-wrap .pbb-form__input:focus{border:none;box-shadow:none;outline:none}.pbb-form__submit-btn{align-items:center;background:#fff;border:1px solid #ccc;border-radius:5px;color:#333;cursor:pointer;display:flex;flex-direction:row;font-size:16px;justify-content:center;padding:10px 20px;transition:all .3s;width:100%}.pbb-form__submit-btn .pbb-form-loader{display:inline-block;height:15px;left:45%;position:absolute;top:41%;transform:translate(-50%,-50%);width:auto}.pbb-form__submit-btn .pbb-form-loader:before{animation:ripple-scale 1s ease-out infinite;border:1px solid #fff;border-radius:50%;color:#5b8c51;content:"";height:20px;position:absolute;width:20px;z-index:-1}@keyframes ripple-scale{0%{opacity:1;transform:scale(0)}50%{opacity:.7;transform:scale(1.2)}to{opacity:0;transform:scale(1.5)}}.pbb-form__submit-btn .btn-text{line-height:1}.pbb-form__submit-btn .input-icon{display:flex}.pbb-form__submit-btn:hover{background:#333;color:#fff}.pbb-form__submit-btn[disabled]{pointer-events:none}.pbb-form-success{background-color:#fff;border-radius:4px;color:#000;font-size:16px;font-weight:500;margin-top:8px;text-align:center;width:100%}.pbb-form .error-message{color:red;font-size:12px}.pbb-form__field-checkbox,.pbb-form__field-radio{display:block}.pbb-form__options-wrap{display:inline-grid}.pbb-form__option .pbb-form__option-input{display:none}.pbb-form__option .pbb-form__option-label{cursor:pointer;padding-left:28px;position:relative}.pbb-form__option .pbb-form__option-label:before{background:#fff;border:1.5px solid #cbd5e1;border-radius:4px;content:"";height:14px;left:0;position:absolute;top:50%;transform:translateY(-50%);transition:all .2s ease;width:14px}.pbb-form__option .pbb-form__option-label:after{border-bottom:2px solid #fff;border-right:2px solid #fff;content:"";height:7px;left:6px;opacity:0;position:absolute;top:50%;transform:translateY(-60%) rotate(45deg);transition:opacity .2s ease;width:3px}.pbb-form__option .pbb-form__option-input[type=checkbox]:checked+.pbb-form__option-label:before{background:#2563eb;border-color:#2563eb}.pbb-form__option .pbb-form__option-input[type=checkbox]:checked+.pbb-form__option-label:after{opacity:1}.pbb-form__option .pbb-form__option-input[type=radio]+.pbb-form__option-label:before{border-radius:50%}.pbb-form__option .pbb-form__option-input[type=radio]+.pbb-form__option-label:after{background:#2563eb;border:none;border-radius:50%;height:8px;left:4px;top:50%;transform:translateY(-50%);width:8px}.pbb-form__option .pbb-form__option-input[type=radio]:checked+.pbb-form__option-label:before{background:#fff;border-color:#2563eb}.pbb-form__option .pbb-form__option-input[type=radio]:checked+.pbb-form__option-label:after{opacity:1}.pbb-form__option-label{font-size:16px}.popup-builder .pbb-form__submit-btn{display:inherit}.pbb-form .pbb-form__hp{height:1px!important;left:-9999px!important;opacity:0;overflow:hidden;pointer-events:none;position:absolute!important;top:auto!important;width:1px!important}

/*# sourceURL=<?php echo $base_url; ?>/assets/plugins/popup-builder-block/build/blocks/form/style-index.css */

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
        height: 56.25vw !important;
        min-height: 100vh !important;
        min-width: 177.78vh !important;
        transform: translate(-50%, -50%) scale(1.02) !important;
        border: none !important;
        pointer-events: none !important;
    }

    @media (max-aspect-ratio: 16/9) {
        #ytHeroIframe { width: 177.78vh !important; height: 100vh !important; min-width: 177.78vh !important; min-height: 100vh !important; transform: translate(-50%, -50%) scale(1.02) !important; }
    }

    @media (min-aspect-ratio: 16/9) {
        #ytHeroIframe { width: 100vw !important; height: 56.25vw !important; min-width: 100vw !important; min-height: 56.25vw !important; transform: translate(-50%, -50%) scale(1.02) !important; }
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
</style>
<style id="popup-builder-block-advanced-paragraph-style-inline-css">
.popupkit-adv-paragraph .popupkit-adv-paragraph-text{margin-bottom:0;margin-top:0}.popupkit-adv-paragraph .popupkit-adv-paragraph-text a{display:inline-block;transition:.3s}.popupkit-adv-paragraph .popupkit-adv-paragraph-text strong{display:inline-block;font-weight:900;transition:.3s}.popupkit-adv-paragraph .popupkit-adv-paragraph-text strong a{display:inline-block;transition:.3s}.popupkit-adv-paragraph .popupkit-focused-text-fill strong{-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-image:-webkit-linear-gradient(-35deg,#2575fc,#6a11cb);color:#2575fc}.popupkit-adv-paragraph .popupkit-drop-cap-letter:first-letter{float:left;font-size:45px;line-height:50px}

/*# sourceURL=<?php echo $base_url; ?>/assets/plugins/popup-builder-block/build/blocks/advanced-paragraph/style-index.css */

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
        height: 56.25vw !important;
        min-height: 100vh !important;
        min-width: 177.78vh !important;
        transform: translate(-50%, -50%) scale(1.02) !important;
        border: none !important;
        pointer-events: none !important;
    }

    @media (max-aspect-ratio: 16/9) {
        #ytHeroIframe { width: 177.78vh !important; height: 100vh !important; min-width: 177.78vh !important; min-height: 100vh !important; transform: translate(-50%, -50%) scale(1.02) !important; }
    }

    @media (min-aspect-ratio: 16/9) {
        #ytHeroIframe { width: 100vw !important; height: 56.25vw !important; min-width: 100vw !important; min-height: 56.25vw !important; transform: translate(-50%, -50%) scale(1.02) !important; }
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
</style>
<style id="popup-builder-block-advanced-image-style-inline-css">
.wp-block-popup-builder-block-advanced-image img{border:none;border-radius:0;display:inline-block;height:auto;max-width:100%;vertical-align:middle}.wp-block-popup-builder-block-advanced-image.alignfull img,.wp-block-popup-builder-block-advanced-image.alignwide img{width:100%}.wp-block-popup-builder-block-advanced-image .popupkit-image-block{display:inline-block}.wp-block-popup-builder-block-advanced-image .popupkit-image-block a{text-decoration:none}.wp-block-popup-builder-block-advanced-image .popupkit-container-overlay:after,.wp-block-popup-builder-block-advanced-image .popupkit-container-overlay:before{content:"";height:100%;left:0;pointer-events:none;position:absolute;top:0;width:100%;z-index:1}

/*# sourceURL=<?php echo $base_url; ?>/assets/plugins/popup-builder-block/build/blocks/advanced-image/style-index.css */

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
        height: 56.25vw !important;
        min-height: 100vh !important;
        min-width: 177.78vh !important;
        transform: translate(-50%, -50%) scale(1.02) !important;
        border: none !important;
        pointer-events: none !important;
    }

    @media (max-aspect-ratio: 16/9) {
        #ytHeroIframe { width: 177.78vh !important; height: 100vh !important; min-width: 177.78vh !important; min-height: 100vh !important; transform: translate(-50%, -50%) scale(1.02) !important; }
    }

    @media (min-aspect-ratio: 16/9) {
        #ytHeroIframe { width: 100vw !important; height: 56.25vw !important; min-width: 100vw !important; min-height: 56.25vw !important; transform: translate(-50%, -50%) scale(1.02) !important; }
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
</style>
<style id="popup-builder-block-icon-style-inline-css">
.wp-block-popup-builder-block-icon{display:flex}.wp-block-popup-builder-block-icon .popupkit-icons{display:inline-flex;transition:.3s}.wp-block-popup-builder-block-icon .popupkit-icons svg{display:block}

/*# sourceURL=<?php echo $base_url; ?>/assets/plugins/popup-builder-block/build/blocks/icon/style-index.css */

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
        height: 56.25vw !important;
        min-height: 100vh !important;
        min-width: 177.78vh !important;
        transform: translate(-50%, -50%) scale(1.02) !important;
        border: none !important;
        pointer-events: none !important;
    }

    @media (max-aspect-ratio: 16/9) {
        #ytHeroIframe { width: 177.78vh !important; height: 100vh !important; min-width: 177.78vh !important; min-height: 100vh !important; transform: translate(-50%, -50%) scale(1.02) !important; }
    }

    @media (min-aspect-ratio: 16/9) {
        #ytHeroIframe { width: 100vw !important; height: 56.25vw !important; min-width: 100vw !important; min-height: 56.25vw !important; transform: translate(-50%, -50%) scale(1.02) !important; }
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
</style>
<style id="popup-builder-block-container-style-inline-css">
.gkit-block__inner{margin-left:auto;margin-right:auto}.gkit-block-video-wrap{height:100%;overflow:hidden;position:absolute;width:100%}.gkit-block-video-wrap video{background-size:cover;height:100%;object-fit:cover;width:100%}.wp-block-popup-builder-block-container{margin-left:auto;margin-right:auto;position:relative;transition:background var(--gkit-bg-hover-transition,var(--gutenkit-preset-global-transition_duration,.4s)) var(--gutenkit-preset-global-transition_timing_function,ease),border var(--gkit-bg-border-transition,var(--gutenkit-preset-global-transition_duration,.4s)) var(--gutenkit-preset-global-transition_timing_function,ease),box-shadow var(--gkit-bg-hover-transition,var(--gutenkit-preset-global-transition_duration,.4s)) var(--gutenkit-preset-global-transition_timing_function,ease),border-radius var(--gkit-bg-hover-transition,var(--gutenkit-preset-global-transition_duration,.4s)) var(--gutenkit-preset-global-transition_timing_function,ease);z-index:1}.wp-block-popup-builder-block-container>.gkit-block__inner{display:flex}.wp-block-popup-builder-block-container .gkit-container-overlay{height:100%;left:0;position:absolute;top:0;width:100%}.wp-block-popup-builder-block-container .wp-block-popup-builder-block-container{flex-grow:0;flex-shrink:1;margin-left:unset;margin-right:unset}.wp-block-popup-builder-block-container .wp-block-popup-builder-block-container.alignfull{flex-shrink:1;width:100%}.wp-block-popup-builder-block-container .wp-block-popup-builder-block-container.alignwide{flex-shrink:1}.wp-block-popup-builder-block-container .gkit-image-scroll-container{height:100%;left:0;overflow:hidden;position:absolute;top:0;width:100%;z-index:-1}.wp-block-popup-builder-block-container .gkit-image-scroll-layer{height:100%;left:0;position:absolute;top:0;width:100%}.wp-block-popup-builder-block-container .is-style-wide{width:100%}.wp-site-blocks .wp-block-popup-builder-block-container .gkit-block-video-wrap{z-index:-1}

/*# sourceURL=<?php echo $base_url; ?>/assets/plugins/popup-builder-block/build/blocks/container/style-index.css */

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
        height: 56.25vw !important;
        min-height: 100vh !important;
        min-width: 177.78vh !important;
        transform: translate(-50%, -50%) scale(1.02) !important;
        border: none !important;
        pointer-events: none !important;
    }

    @media (max-aspect-ratio: 16/9) {
        #ytHeroIframe { width: 177.78vh !important; height: 100vh !important; min-width: 177.78vh !important; min-height: 100vh !important; transform: translate(-50%, -50%) scale(1.02) !important; }
    }

    @media (min-aspect-ratio: 16/9) {
        #ytHeroIframe { width: 100vw !important; height: 56.25vw !important; min-width: 100vw !important; min-height: 56.25vw !important; transform: translate(-50%, -50%) scale(1.02) !important; }
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
</style>
<style id="popup-builder-block-heading-style-inline-css">
.wp-block-popup-builder-block-heading,.wp-block-popup-builder-block-heading.popupkit-heading-has-border .popupkit-heading-title{position:relative}.wp-block-popup-builder-block-heading.popupkit-heading-has-border .popupkit-heading-title:before{background:linear-gradient(180deg,#ff512f,#dd2476);content:"";display:block;height:100%;left:0;position:absolute;width:4px}.wp-block-popup-builder-block-heading.popupkit-heading-has-border.popupkit-heading-border-position-end .popupkit-heading-title:before{left:auto;right:0}.wp-block-popup-builder-block-heading .popupkit-heading-title{margin:0 0 20px;position:relative;transition:all .3s ease-in-out;z-index:1}.wp-block-popup-builder-block-heading .popupkit-heading-title strong{font-weight:900;transition:color .3s ease-in-out}.wp-block-popup-builder-block-heading .popupkit-heading-title strong a{transition:.3s}.wp-block-popup-builder-block-heading .popupkit-heading-title.popupkit-heading-title-text-fill strong{-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-image:-webkit-linear-gradient(-35deg,#2575fc,#6a11cb);color:#2575fc}.wp-block-popup-builder-block-heading .popupkit-heading-subtitle{margin:8px 0 16px}.wp-block-popup-builder-block-heading .popupkit-heading-subtitle-has-border{display:inline-block}.wp-block-popup-builder-block-heading .popupkit-heading-subtitle-has-border:after,.wp-block-popup-builder-block-heading .popupkit-heading-subtitle-has-border:before{background-color:#d7d7d7;content:"";display:inline-block;height:3px;vertical-align:middle;width:40px}.wp-block-popup-builder-block-heading .popupkit-heading-subtitle-has-border:before{margin-right:15px}.wp-block-popup-builder-block-heading .popupkit-heading-subtitle-has-border:after{margin-left:15px}.wp-block-popup-builder-block-heading .popupkit-heading-subtitle-has-outline:not(.popupkit-heading-subtitle-has-border){border:2px solid #d7d7d7;display:inline-block}.wp-block-popup-builder-block-heading .popupkit-heading-subtitle-has-text-fill{-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-image:-webkit-linear-gradient(-35deg,#2575fc,#6a11cb);color:#2575fc}.wp-block-popup-builder-block-heading .popupkit-heading-shadow-text{color:transparent;font-family:Archivo,sans-serif;font-size:90px;font-weight:700;letter-spacing:-6px;line-height:120px;position:absolute;white-space:nowrap;z-index:0;-webkit-text-fill-color:#fff;-webkit-text-stroke-width:1px;-webkit-text-stroke-color:hsla(0,0%,6%,.1);transform:translate(-50%,-50%)}.wp-block-popup-builder-block-heading .popupkit-heading-separetor-style-none{display:none}.wp-block-popup-builder-block-heading .popupkit-heading-separetor-divider{background:currentColor;border-radius:2px;box-sizing:border-box;color:#2575fc;height:4px;margin-left:27px;position:relative;width:30px}.wp-block-popup-builder-block-heading .popupkit-heading-separetor-divider:before{background-color:currentColor;border-radius:50%;box-shadow:9px 0 0 0 currentColor,18px 0 0 0 currentColor;content:"";display:inline-block;height:4px;left:-27px;position:absolute;top:0;width:4px}.wp-block-popup-builder-block-heading .popupkit-heading-separetor.popupkit-heading-separetor-style-dotted .popupkit-heading-separetor-divider{width:100px}.wp-block-popup-builder-block-heading .popupkit-heading-separetor.popupkit-heading-separetor-style-solid .popupkit-heading-separetor-divider{background:currentColor;border-radius:0;margin-left:0;width:150px}.wp-block-popup-builder-block-heading .popupkit-heading-separetor.popupkit-heading-separetor-style-solid .popupkit-heading-separetor-divider:before{display:none}.wp-block-popup-builder-block-heading .popupkit-heading-separetor.popupkit-heading-separetor-style-solid-star .popupkit-heading-separetor-divider{background:#2575fc;background:linear-gradient(90deg,currentColor,currentColor 38%,hsla(0,0%,100%,0) 0,hsla(0,0%,100%,0) 62%,currentColor 0,currentColor);color:#2575fc;height:2px;margin-left:0;position:relative;width:135px}.wp-block-popup-builder-block-heading .popupkit-heading-separetor.popupkit-heading-separetor-style-solid-star .popupkit-heading-separetor-divider:before{display:none}.wp-block-popup-builder-block-heading .popupkit-heading-separetor.popupkit-heading-separetor-style-solid-star .popupkit-heading-separetor-divider:after{background-color:currentColor;content:"";height:14.3px;left:50%;position:absolute;top:0;top:-7.15px;transform:translateX(-50%) rotate(45deg);width:14.3px}.wp-block-popup-builder-block-heading .popupkit-heading-separetor.popupkit-heading-separetor-style-solid-bullet .popupkit-heading-separetor-divider{background:#2575fc;background:linear-gradient(90deg,currentColor,currentColor 38%,hsla(0,0%,100%,0) 0,hsla(0,0%,100%,0) 62%,currentColor 0,currentColor);color:#2575fc;height:2px;margin-left:0;position:relative;width:100px}.wp-block-popup-builder-block-heading .popupkit-heading-separetor.popupkit-heading-separetor-style-solid-bullet .popupkit-heading-separetor-divider:before{display:none}.wp-block-popup-builder-block-heading .popupkit-heading-separetor.popupkit-heading-separetor-style-solid-bullet .popupkit-heading-separetor-divider:after{background-color:currentColor;border-radius:50%;content:"";height:14.3px;left:50%;position:absolute;top:0;top:-7.15px;transform:translateX(-50%);width:14.3px}.wp-block-popup-builder-block-heading .popupkit-heading-description{display:inline-block}.wp-block-popup-builder-block-heading .popupkit-heading-description p{margin:0}.wp-block-popup-builder-block-heading.has-text-align-center .popupkit-heading-separetor-divider{margin:0 auto!important}.wp-block-popup-builder-block-heading.has-text-align-right .popupkit-heading-separetor-divider{margin-left:auto!important}

/*# sourceURL=<?php echo $base_url; ?>/assets/plugins/popup-builder-block/build/blocks/heading/style-index.css */

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
        height: 56.25vw !important;
        min-height: 100vh !important;
        min-width: 177.78vh !important;
        transform: translate(-50%, -50%) scale(1.02) !important;
        border: none !important;
        pointer-events: none !important;
    }

    @media (max-aspect-ratio: 16/9) {
        #ytHeroIframe { width: 177.78vh !important; height: 100vh !important; min-width: 177.78vh !important; min-height: 100vh !important; transform: translate(-50%, -50%) scale(1.02) !important; }
    }

    @media (min-aspect-ratio: 16/9) {
        #ytHeroIframe { width: 100vw !important; height: 56.25vw !important; min-width: 100vw !important; min-height: 56.25vw !important; transform: translate(-50%, -50%) scale(1.02) !important; }
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
</style>
<style id="global-styles-inline-css">
:root{--wp--preset--aspect-ratio--square: 1;--wp--preset--aspect-ratio--4-3: 4/3;--wp--preset--aspect-ratio--3-4: 3/4;--wp--preset--aspect-ratio--3-2: 3/2;--wp--preset--aspect-ratio--2-3: 2/3;--wp--preset--aspect-ratio--16-9: 16/9;--wp--preset--aspect-ratio--9-16: 9/16;--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgb(6,147,227) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgb(252,185,0) 0%,rgb(255,105,0) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgb(255,105,0) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--font-family--bebas-neue: "Bebas Neue", sans-serif;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgb(255, 255, 255), 6px 6px rgb(0, 0, 0);--wp--preset--shadow--crisp: 6px 6px 0px rgb(0, 0, 0);}.wp-block-button{--wp--preset--dimension--25: 25%;--wp--preset--dimension--50: 50%;--wp--preset--dimension--75: 75%;--wp--preset--dimension--100: 100%;}:root { --wp--style--global--content-size: 800px;--wp--style--global--wide-size: 1200px; }:where(body) { margin: 0; }.wp-site-blocks > .alignleft { float: left; margin-right: 2em; }.wp-site-blocks > .alignright { float: right; margin-left: 2em; }.wp-site-blocks > .aligncenter { justify-content: center; margin-left: auto; margin-right: auto; }:where(.wp-site-blocks) > * { margin-block-start: 24px; margin-block-end: 0; }:where(.wp-site-blocks) > :first-child { margin-block-start: 0; }:where(.wp-site-blocks) > :last-child { margin-block-end: 0; }:root { --wp--style--block-gap: 24px; }:root :where(.is-layout-flow) > :first-child{margin-block-start: 0;}:root :where(.is-layout-flow) > :last-child{margin-block-end: 0;}:root :where(.is-layout-flow) > *{margin-block-start: 24px;margin-block-end: 0;}:root :where(.is-layout-constrained) > :first-child{margin-block-start: 0;}:root :where(.is-layout-constrained) > :last-child{margin-block-end: 0;}:root :where(.is-layout-constrained) > *{margin-block-start: 24px;margin-block-end: 0;}:root :where(.is-layout-flex){gap: 24px;}:root :where(.is-layout-grid){gap: 24px;}.is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}.is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}.is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}.is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}.is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}.is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}.is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}.is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}.is-layout-flex{flex-wrap: wrap;align-items: center;}.is-layout-flex > :is(*, div){margin: 0;}body .is-layout-grid{display: grid;}.is-layout-grid > :is(*, div){margin: 0;}body{padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 0px;}:root :where(.wp-element-button, .wp-block-button__link){background-color: #32373c;border-width: 0;color: #fff;font-family: inherit;font-size: inherit;font-style: inherit;font-weight: inherit;letter-spacing: inherit;line-height: inherit;padding-top: calc(0.667em + 2px);padding-right: calc(1.333em + 2px);padding-bottom: calc(0.667em + 2px);padding-left: calc(1.333em + 2px);text-decoration: none;text-transform: inherit;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}.has-bebas-neue-font-family{font-family: var(--wp--preset--font-family--bebas-neue) !important;}
:root :where(.wp-block-icon svg){width: 24px;}
:root :where(.wp-block-pullquote){font-size: 1.5em;line-height: 1.6;}
/*# sourceURL=global-styles-inline-css */

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
        height: 56.25vw !important;
        min-height: 100vh !important;
        min-width: 177.78vh !important;
        transform: translate(-50%, -50%) scale(1.02) !important;
        border: none !important;
        pointer-events: none !important;
    }

    @media (max-aspect-ratio: 16/9) {
        #ytHeroIframe { width: 177.78vh !important; height: 100vh !important; min-width: 177.78vh !important; min-height: 100vh !important; transform: translate(-50%, -50%) scale(1.02) !important; }
    }

    @media (min-aspect-ratio: 16/9) {
        #ytHeroIframe { width: 100vw !important; height: 56.25vw !important; min-width: 100vw !important; min-height: 56.25vw !important; transform: translate(-50%, -50%) scale(1.02) !important; }
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
</style>
<link rel='stylesheet' id='gutenkit-third-party-editor-compatibility-css' href='<?php echo $base_url; ?>/assets/plugins/popup-builder-block/build/compatibility/frontend.css?ver=fa9b2727afc9d74855b4' media='all' />
<link rel='stylesheet' id='qi-addons-for-elementor-grid-style-css' href='<?php echo $base_url; ?>/assets/plugins/qi-addons-for-elementor/assets/css/grid.min.css?ver=1.11.1' media='all' />
<link rel='stylesheet' id='qi-addons-for-elementor-helper-parts-style-css' href='<?php echo $base_url; ?>/assets/plugins/qi-addons-for-elementor/assets/css/helper-parts.min.css?ver=1.11.1' media='all' />
<link rel='stylesheet' id='qi-addons-for-elementor-style-css' href='<?php echo $base_url; ?>/assets/plugins/qi-addons-for-elementor/assets/css/main.min.css?ver=1.11.1' media='all' />
<link rel='stylesheet' id='hello-elementor-css' href='<?php echo $base_url; ?>/assets/theme/hello-elementor/assets/css/reset.css?ver=3.5.1' media='all' />
<link rel='stylesheet' id='hello-elementor-theme-style-css' href='<?php echo $base_url; ?>/assets/theme/hello-elementor/assets/css/theme.css?ver=3.5.1' media='all' />
<link rel='stylesheet' id='hello-elementor-header-footer-css' href='<?php echo $base_url; ?>/assets/theme/hello-elementor/assets/css/header-footer.css?ver=3.5.1' media='all' />
<link rel='stylesheet' id='elementor-frontend-css' href='<?php echo $base_url; ?>/assets/plugins/elementor/assets/css/frontend.min.css?ver=4.3.0' media='all' />
<link rel='stylesheet' id='elementor-post-21-css' href='<?php echo $base_url; ?>/assets/images/elementor/css/post-21.css?ver=1790145411' media='all' />
<link rel='stylesheet' id='widget-image-css' href='<?php echo $base_url; ?>/assets/plugins/elementor/assets/css/widget-image.min.css?ver=4.3.0' media='all' />
<link rel='stylesheet' id='widget-nav-menu-css' href='<?php echo $base_url; ?>/assets/plugins/elementor-pro/assets/css/widget-nav-menu.min.css?ver=4.1.1' media='all' />
<link rel='stylesheet' id='swiper-css' href='<?php echo $base_url; ?>/assets/plugins/qi-addons-for-elementor/assets/plugins/swiper/8.4.5/swiper.min.css?ver=8.4.5' media='all' />
<link rel='stylesheet' id='e-swiper-css' href='<?php echo $base_url; ?>/assets/plugins/elementor/assets/css/conditionals/e-swiper.min.css?ver=4.3.0' media='all' />
<link rel='stylesheet' id='widget-social-icons-css' href='<?php echo $base_url; ?>/assets/plugins/elementor/assets/css/widget-social-icons.min.css?ver=4.3.0' media='all' />
<link rel='stylesheet' id='e-apple-webkit-css' href='<?php echo $base_url; ?>/assets/plugins/elementor/assets/css/conditionals/apple-webkit.min.css?ver=4.3.0' media='all' />
<link rel='stylesheet' id='widget-heading-css' href='<?php echo $base_url; ?>/assets/plugins/elementor/assets/css/widget-heading.min.css?ver=4.3.0' media='all' />
<link rel='stylesheet' id='widget-icon-list-css' href='<?php echo $base_url; ?>/assets/plugins/elementor/assets/css/widget-icon-list.min.css?ver=4.3.0' media='all' />
<link rel='stylesheet' id='fluent-form-styles-css' href='<?php echo $base_url; ?>/assets/plugins/fluentform/assets/css/fluent-forms-public.css?ver=6.2.14' media='all' />
<link rel='stylesheet' id='fluentform-public-default-css' href='<?php echo $base_url; ?>/assets/plugins/fluentform/assets/css/fluentform-public-default.css?ver=6.2.14' media='all' />
<link rel='stylesheet' id='e-popup-css' href='<?php echo $base_url; ?>/assets/plugins/elementor-pro/assets/css/conditionals/popup.min.css?ver=4.1.1' media='all' />
<link rel='stylesheet' id='elementor-post-17567-css' href='<?php echo $base_url; ?>/assets/images/elementor/css/post-17567.css?ver=1790145708' media='all' />
<link rel='stylesheet' id='elementor-post-27-css' href='<?php echo $base_url; ?>/assets/images/elementor/css/post-27.css?ver=1790145411' media='all' />
<link rel='stylesheet' id='elementor-post-29-css' href='<?php echo $base_url; ?>/assets/images/elementor/css/post-29.css?ver=1790145411' media='all' />
<link rel='stylesheet' id='elementor-post-1638-css' href='<?php echo $base_url; ?>/assets/images/elementor/css/post-1638.css?ver=1790145411' media='all' />
<link rel='stylesheet' id='chaty-front-css-css' href='<?php echo $base_url; ?>/assets/plugins/chaty/dist/css/style.css?ver=3.6.11785238286' media='all' />
<link rel='stylesheet' id='elementor-gf-local-inter-css' href='<?php echo $base_url; ?>/assets/images/elementor/google-fonts/css/inter.css?ver=1749298517' media='all' />
<link rel='stylesheet' id='elementor-gf-local-roboto-css' href='<?php echo $base_url; ?>/assets/images/elementor/google-fonts/css/roboto.css?ver=1749298521' media='all' />
<script id="jquery-core-js" src="<?php echo $base_url; ?>/assets/vendor/js/jquery/jquery.min.js?ver=3.7.1"></script>
<script id="jquery-migrate-js" src="<?php echo $base_url; ?>/assets/vendor/js/jquery/jquery-migrate.min.js?ver=3.4.1"></script>
<link rel="https://api.w.org/" href="https://fitblissbysk.com/wp-json/" /><link rel="alternate" title="JSON" type="application/json" href="https://fitblissbysk.com/wp-json/wp/v2/pages/17567" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://fitblissbysk.com/xmlrpc.php?rsd" />
<meta name="generator" content="WordPress 7.1.2" />
<link rel="canonical" href="index.php" />
<link rel='shortlink' href='https://fitblissbysk.com/' />
<meta name="google-site-verification" content="esp5culI75683oug1lhRO_V48ms0gQHhbfVejWE5sG4" />
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-17391758722"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-17391758722');
</script><meta name="generator" content="Elementor 4.3.0; features: e_font_icon_svg, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-swap">
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
        height: 56.25vw !important;
        min-height: 100vh !important;
        min-width: 177.78vh !important;
        transform: translate(-50%, -50%) scale(1.02) !important;
        border: none !important;
        pointer-events: none !important;
    }

    @media (max-aspect-ratio: 16/9) {
        #ytHeroIframe { width: 177.78vh !important; height: 100vh !important; min-width: 177.78vh !important; min-height: 100vh !important; transform: translate(-50%, -50%) scale(1.02) !important; }
    }

    @media (min-aspect-ratio: 16/9) {
        #ytHeroIframe { width: 100vw !important; height: 56.25vw !important; min-width: 100vw !important; min-height: 56.25vw !important; transform: translate(-50%, -50%) scale(1.02) !important; }
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
</style>
			<style class="wp-fonts-local">
@font-face{font-family:"Bebas Neue";font-style:normal;font-weight:400;font-display:fallback;src:url('<?php echo $base_url; ?>/assets/images/fonts/JTUSjIg69CK48gW7PXooxWtrygbi49c.woff2') format('woff2');}

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
        height: 56.25vw !important;
        min-height: 100vh !important;
        min-width: 177.78vh !important;
        transform: translate(-50%, -50%) scale(1.02) !important;
        border: none !important;
        pointer-events: none !important;
    }

    @media (max-aspect-ratio: 16/9) {
        #ytHeroIframe { width: 177.78vh !important; height: 100vh !important; min-width: 177.78vh !important; min-height: 100vh !important; transform: translate(-50%, -50%) scale(1.02) !important; }
    }

    @media (min-aspect-ratio: 16/9) {
        #ytHeroIframe { width: 100vw !important; height: 56.25vw !important; min-width: 100vw !important; min-height: 56.25vw !important; transform: translate(-50%, -50%) scale(1.02) !important; }
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
        height: 56.25vw !important;
        min-height: 100vh !important;
        min-width: 177.78vh !important;
        transform: translate(-50%, -50%) scale(1.02) !important;
        border: none !important;
        pointer-events: none !important;
    }

    @media (max-aspect-ratio: 16/9) {
        #ytHeroIframe { width: 177.78vh !important; height: 100vh !important; min-width: 177.78vh !important; min-height: 100vh !important; transform: translate(-50%, -50%) scale(1.02) !important; }
    }

    @media (min-aspect-ratio: 16/9) {
        #ytHeroIframe { width: 100vw !important; height: 56.25vw !important; min-width: 100vw !important; min-height: 56.25vw !important; transform: translate(-50%, -50%) scale(1.02) !important; }
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
</style>
<style id="fitbliss-custom-responsive-qa">
/* ─── FITBLISS MOBILE & RESPONSIVE QA ENHANCEMENTS ─── */
html, body {
    overflow-x: clip !important;
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
    overflow-x: clip !important;
}

/* Responsive Images & Videos */
img, video {
    max-width: 100%;
    height: auto;
}

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
        height: 56.25vw !important;
        min-height: 100vh !important;
        min-width: 177.78vh !important;
        transform: translate(-50%, -50%) scale(1.02) !important;
        border: none !important;
        pointer-events: none !important;
    }

    @media (max-aspect-ratio: 16/9) {
        #ytHeroIframe { width: 177.78vh !important; height: 100vh !important; min-width: 177.78vh !important; min-height: 100vh !important; transform: translate(-50%, -50%) scale(1.02) !important; }
    }

    @media (min-aspect-ratio: 16/9) {
        #ytHeroIframe { width: 100vw !important; height: 56.25vw !important; min-width: 100vw !important; min-height: 56.25vw !important; transform: translate(-50%, -50%) scale(1.02) !important; }
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
</style>

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
        top: 50% !important;
        left: 50% !important;
        width: 100vw !important;
        height: 56.25vw !important;
        min-height: 100vh !important;
        min-width: 177.78vh !important;
        transform: translate(-50%, -50%) scale(1.02) !important;
        border: none !important;
        pointer-events: none !important;
    }

/* Rich Dark Top Shadow Overlay */
.hero-top-mask {
    position: absolute !important;
    top: 0 !important;
    left: 0 !important;
    right: 0 !important;
    height: 55px !important;
    background: linear-gradient(180deg, #010303 0%, rgba(1, 3, 3, 0.95) 45%, rgba(1, 3, 3, 0.6) 75%, transparent 100%) !important;
    pointer-events: none !important;
    z-index: 5 !important;
}

@media (max-width: 768px) {
    #home {
        height: 100vh !important;
        min-height: 100vh !important;
    }
    #ytHeroIframe {
        position: absolute !important;
        top: 50% !important;
        left: 50% !important;
        width: 100vw !important;
        height: 56.25vw !important;
        min-height: 100vh !important;
        min-width: 177.78vh !important;
        transform: translate(-50%, -50%) scale(1.02) !important;
        border: none !important;
        pointer-events: none !important;
    }
    .hero-top-mask {
        height: 45px !important;
        background: linear-gradient(180deg, #010303 0%, rgba(1, 3, 3, 0.95) 50%, transparent 100%) !important;
    }
}
</style>
<style id="luxury-header-css">
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
        -webkit-overflow-scrolling: touch;
        z-index: 1000;
    }

    .mega.show {
        display: none;
    }

    @media(min-width:1024px) {
        .mega.show {
            display: block;
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
        display: block;
        text-decoration: none;
    }

    .feature .imgwrap {
        position: relative;
        aspect-ratio: 4/3;
        overflow: hidden;
        border-radius: 2px;
    }

    .feature img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform .7s;
        display: block;
    }

    .feature:hover img {
        transform: scale(1.05);
    }

    .feature .imgwrap::after {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(10, 20, 20, .85), rgba(10, 20, 20, .2) 50%, transparent);
    }

    .feature .cap {
        position: absolute;
        left: 20px;
        right: 20px;
        bottom: 16px;
        z-index: 1;
    }

    .feature .cap .t {
        font-size: 10px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: .3em;
        color: #3ec28b;
    }

    .feature .cap .h {
        margin-top: 4px;
        font-family: "Bebas Neue", Impact, sans-serif;
        font-size: 24px;
        text-transform: uppercase;
        letter-spacing: .02em;
        color: #f2ece0;
    }

    .feature p {
        margin-top: 16px;
        font-size: 14px;
        color: #a7a294;
        line-height: 1.5;
    }

    .feature .more {
        margin-top: 12px;
        display: inline-flex;
        gap: 8px;
        font-size: 12px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: .25em;
        color: #3ec28b;
    }

    .col .heading {
        font-size: 10px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: .3em;
        color: #3ec28b;
    }

    .col ul {
        margin-top: 20px;
        display: grid;
        gap: 16px;
        list-style: none;
        padding: 0;
    }

    .col li a {
        display: block;
        border-top: 1px solid rgba(255, 255, 255, .10);
        padding-top: 12px;
        transition: border-color .2s;
        text-decoration: none;
    }

    .col li a:hover {
        border-color: #3ec28b;
    }

    .col .row {
        display: flex;
        justify-content: space-between;
        align-items: baseline;
    }

    .col .label {
        font-family: "Bebas Neue", Impact, sans-serif;
        font-size: 18px;
        text-transform: uppercase;
        letter-spacing: .02em;
        color: #f2ece0;
        transition: color .2s;
    }

    .col li a:hover .label {
        color: #3ec28b;
    }

    .col .arrow {
        color: rgba(62, 194, 139, .6);
        transition: transform .2s;
    }

    .col li a:hover .arrow {
        transform: translateX(4px);
    }

    .col .hint {
        margin-top: 4px;
        font-size: 11px;
        text-transform: uppercase;
        letter-spacing: .2em;
        color: #a7a294;
    }

    /* ============ MOBILE MENU ============ */
    .mobile {
        display: none;
        max-height: calc(100vh - 100%);
        overflow-y: auto;
        -webkit-overflow-scrolling: touch;
    }

    .mobile.show {
        display: block;
    }

    @media(min-width:1024px) {
        .mobile,
        .mobile.show {
            display: none;
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
        gap: 0;
    }

    .mega::-webkit-scrollbar,
    .mobile::-webkit-scrollbar {
        width: 6px;
    }

    .mega::-webkit-scrollbar-track,
    .mobile::-webkit-scrollbar-track {
        background: rgba(10, 20, 20, .8);
    }

    .mega::-webkit-scrollbar-thumb,
    .mobile::-webkit-scrollbar-thumb {
        background: #3ec28b;
        border-radius: 3px;
    }

    .mobile .m-item {
        border-bottom: 1px solid rgba(255, 255, 255, .10);
    }

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
        color: #f2ece0;
        font-family: inherit;
    }

    .mobile .m-trigger a.m-link-plain {
        display: flex;
        align-items: center;
        gap: 12px;
        font-size: 13px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: .25em;
        color: #f2ece0;
        flex: 1;
        text-decoration: none;
    }

    .mobile .m-trigger a.m-link-plain:hover {
        color: #3ec28b;
    }

    .mobile .m-num {
        font-size: 10px;
        color: rgba(62, 194, 139, .7);
    }

    .mobile .m-chevron {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 28px;
        height: 28px;
        border: 1px solid rgba(255, 255, 255, .10);
        border-radius: 50%;
        color: #3ec28b;
        transition: transform .3s, border-color .3s;
        flex-shrink: 0;
    }

    .mobile .m-item.open .m-chevron {
        transform: rotate(180deg);
        border-color: #3ec28b;
    }

    .mobile .m-chevron svg {
        width: 12px;
        height: 12px;
        stroke: currentColor;
        fill: none;
        stroke-width: 2.5;
        stroke-linecap: round;
        stroke-linejoin: round;
    }

    .mobile .m-body {
        overflow: hidden;
        max-height: 0;
        transition: max-height .35s cubic-bezier(.4, 0, .2, 1);
    }

    .mobile .m-item.open .m-body {
        max-height: 600px;
    }

    .mobile .m-col-group {
        padding: 4px 0 16px 16px;
        display: grid;
        gap: 0;
    }

    .mobile .m-col-label {
        font-size: 9px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: .35em;
        color: #3ec28b;
        padding: 10px 0 6px;
        border-top: 1px solid rgba(255, 255, 255, .06);
        margin-top: 4px;
    }

    .mobile .m-col-label:first-child {
        border-top: none;
        margin-top: 0;
    }

    .mobile .m-sub-list {
        display: grid;
        gap: 0;
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
        color: #a7a294;
        border-bottom: 1px solid rgba(255, 255, 255, .04);
        transition: color .2s;
        text-decoration: none;
    }

    .mobile .m-sub-list a:last-child {
        border-bottom: none;
    }

    .mobile .m-sub-list a:hover {
        color: #3ec28b;
    }

    .mobile .m-sub-list a:hover .m-sub-arrow {
        transform: translateX(4px);
    }

    .mobile .m-sub-hint {
        font-size: 9px;
        letter-spacing: .12em;
        color: rgba(167, 162, 148, .5);
        text-transform: uppercase;
    }

    .mobile .m-sub-arrow {
        color: rgba(62, 194, 139, .5);
        font-size: 11px;
        transition: transform .2s;
        flex-shrink: 0;
    }

    .mobile .m-plain-link {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 14px 0;
        font-size: 13px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: .25em;
        color: #f2ece0;
        transition: color .2s;
        text-decoration: none;
    }

    .mobile .m-plain-link:hover {
        color: #3ec28b;
    }

    .mobile .m-plain-arrow {
        color: #3ec28b;
    }

    .mobile .m-cta {
        margin-top: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 12px;
        background: #3ec28b;
        color: #0a1414;
        padding: 15px 24px;
        font-size: 11px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: .28em;
        border-radius: 2px;
        text-decoration: none;
    }
</style>
</head>
<body class="home wp-singular page-template-default page page-id-17567 wp-embed-responsive wp-theme-hello-elementor qodef-qi--no-touch qi-addons-for-elementor-1.11.1 hello-elementor-default elementor-default elementor-kit-21 elementor-page elementor-page-17567">

<a class="skip-link screen-reader-text" href="#content">Skip to content</a>

		<!-- TOP STRIP & LUXURY HEADER -->
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

<main id="content" class="site-main post-17567 page type-page status-publish hentry">

	
	<div class="page-content">
				<div data-elementor-type="wp-page" data-elementor-id="17567" class="elementor elementor-17567" data-elementor-post-type="page">
				<div class="elementor-element elementor-element-515a5c0 e-con-full e-flex e-con e-parent" data-id="515a5c0" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-c78dafc elementor-widget elementor-widget-shortcode" data-id="c78dafc" data-element_type="widget" data-e-type="widget" data-widget_type="shortcode.default">
				<div class="elementor-widget-container">
							<div class="elementor-shortcode">		<div data-elementor-type="page" data-elementor-id="20307" class="elementor elementor-20307" data-elementor-post-type="elementor_library">
				<div class="elementor-element elementor-element-1c8e0f27 e-con-full e-flex e-con e-parent" data-id="1c8e0f27" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
		<div class="elementor-element elementor-element-337ffeb8 e-con-full e-flex e-con e-child" data-id="337ffeb8" data-element_type="container" data-e-type="container" id="videos" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-element elementor-element-13edff63 elementor-widget elementor-widget-html" data-id="13edff63" data-element_type="widget" data-e-type="widget" data-widget_type="html.default">
				<div class="elementor-widget-container">
					<style>
    .hero-container {
        position: relative;
        z-index: 10;
        max-width: 1400px;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        min-height: 100%;
        padding: 24px 40px 30px;
        box-sizing: border-box;
    }

    .hero-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        align-items: end;
        gap: 28px;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.4s ease, visibility 0.4s ease;
        pointer-events: none;
    }

    #home:hover .hero-grid,
    #home:focus-within .hero-grid,
    #home.show-text .hero-grid {
        opacity: 1;
        visibility: visible;
        pointer-events: auto;
    }

    .hero-cta-group {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        justify-content: flex-end;
        align-items: flex-end;
    }

    .hero-btn-primary {
        background: #37c080;
        color: #050a0b;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        padding: 14px 22px;
        font-family: 'Barlow', Inter, sans-serif;
        font-size: 12px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 2px;
        text-decoration: none;
        box-sizing: border-box;
    }

    .hero-btn-secondary {
        background: transparent;
        color: #f4f2ea;
        border: 1px solid rgb(255, 255, 255);
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        padding: 14px 22px;
        font-family: 'Barlow', Inter, sans-serif;
        font-size: 12px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 2px;
        text-decoration: none;
        box-sizing: border-box;
    }

    .hero-unmute-button {
        position: absolute;
        top: 24px;
        right: 24px;
        z-index: 20;
        background: rgba(0, 0, 0, 0.65);
        color: #f4f2ea;
        border: 1px solid rgba(255, 255, 255, 0.18);
        border-radius: 999px;
        width: 48px;
        height: 48px;
        padding: 0;
        font-family: 'Barlow', Inter, sans-serif;
        font-size: 18px;
        line-height: 1;
        letter-spacing: 0;
        text-transform: none;
        cursor: pointer;
        transition: transform 0.2s ease, background 0.2s ease;
        backdrop-filter: blur(10px);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .hero-unmute-button:hover {
        transform: scale(1.02);
        background: rgba(0, 0, 0, 0.85);
    }

    .hero-unmute-button .screen-reader-text {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        white-space: nowrap;
        border: 0;
    }

    .hero-unmute-button.hidden {
        display: none;
    }

    #home video {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* Hero section — height CSS se control hogi (inline se nahi) */
    #home {
        height: 100vh;
        min-height: 100vh;
    }

    /* YouTube iframe — full screen cover & title/controls crop */
    #ytHeroIframe {
        position: absolute !important;
        top: 50% !important;
        left: 50% !important;
        width: 100vw !important;
        height: 56.25vw !important;
        min-height: 100vh !important;
        min-width: 177.78vh !important;
        transform: translate(-50%, -50%) scale(1.02) !important;
        border: none !important;
        pointer-events: none !important;
    }

    @media (max-width: 991px) {
        .hero-container {
            padding: 30px 24px 24px;
            min-height: 85vh;
        }

        .hero-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .hero-cta-group {
            justify-content: flex-start;
            margin-top: 10px;
        }
    }

    @media (max-width: 576px) {
        /* Hero height kam karo mobile par */
        #home {
            height: 60vh !important;
            min-height: 60vh !important;
        }

        .hero-container {
            padding: 20px 16px 20px;
            min-height: 60vh;
        }

        .hero-cta-group {
            flex-direction: column;
            width: 100%;
            gap: 10px;
        }

        .hero-btn-primary,
        .hero-btn-secondary {
            width: 100%;
            text-align: center;
        }

        .hero-unmute-button {
            top: 12px;
            right: 12px;
            padding: 10px 14px;
            font-size: 10px;
        }

        /* Mobile par title aur pause/play controls ko fully crop (hide) karne ke liye scale(1.55) */
        #ytHeroIframe {
        position: absolute !important;
        top: 50% !important;
        left: 50% !important;
        width: 100vw !important;
        height: 56.25vw !important;
        min-height: 100vh !important;
        min-width: 177.78vh !important;
        transform: translate(-50%, -50%) scale(1.02) !important;
        border: none !important;
        pointer-events: none !important;
    }
    }

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
        height: 56.25vw !important;
        min-height: 100vh !important;
        min-width: 177.78vh !important;
        transform: translate(-50%, -50%) scale(1.02) !important;
        border: none !important;
        pointer-events: none !important;
    }

    @media (max-aspect-ratio: 16/9) {
        #ytHeroIframe { width: 177.78vh !important; height: 100vh !important; min-width: 177.78vh !important; min-height: 100vh !important; transform: translate(-50%, -50%) scale(1.02) !important; }
    }

    @media (min-aspect-ratio: 16/9) {
        #ytHeroIframe { width: 100vw !important; height: 56.25vw !important; min-width: 100vw !important; min-height: 56.25vw !important; transform: translate(-50%, -50%) scale(1.02) !important; }
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
</style>

<div id="home" style="position:relative;overflow:hidden;">

    <!-- YouTube Background Video (autoplay, loop, muted, no controls) -->
    <div class="hero-top-mask"></div>
    <div class="hero-video-wrap"
        style="position:absolute;inset:0;width:100%;height:100%;z-index:0;pointer-events:none;overflow:hidden;">
        <iframe id="ytHeroIframe"
            src="https://www.youtube.com/embed/FM1i27z3sZ8?autoplay=1&loop=1&playlist=FM1i27z3sZ8&controls=0&mute=1&rel=0&playsinline=1&enablejsapi=1&modestbranding=1&showinfo=0"
            frameborder="0" allow="autoplay; fullscreen; encrypted-media" title="Hero Background Video">
        </iframe>
    </div>

    <div class="hero-overlay"
        style="position:absolute;inset:0;background:linear-gradient(to right,#010303,rgba(1,3,3,.65) 1%,transparent);pointer-events:none;z-index:1;">
    </div>

    <div class="hero-container" style="position:relative;z-index:10;">
        <div class="hero-grid">
            <div style="max-width:660px;">
                <div style="display:flex;align-items:center;gap:14px;margin-bottom:18px;">
                    <span style="display:inline-block;width:44px;height:1px;background:#37c080;"></span>
                    <span style="font-family:'Barlow', Inter, sans-serif;font-size:13px;font-weight:600;text-transform:uppercase;
                       letter-spacing:3.5px;color:#37c080;">Bhopal · Est. 2024</span>
                </div>
                <h1 style="margin:0 0 22px;font-family:'Bebas Neue', Impact, sans-serif;font-size:clamp(2.2rem,5.5vw,5.5rem);
                   line-height:.93;color:#f4f2ea;font-weight:400;text-transform:uppercase;">
                    Central India's most luxurious<br />
                    <span style="-webkit-text-stroke:1px #f4f2ea;color:transparent;">Wellness</span>
                    <span style="color:#37c080;">Destination</span>
                </h1>
            </div>
        </div>
    <button id="heroSoundBtn" class="hero-unmute-button" title="Toggle Sound" aria-label="Toggle Sound">
        🔇
    </button>
</div>

<script>
    (function () {
        var MUTE_THRESHOLD = 600;               // 150px scroll par mute
        var iframe = document.getElementById('ytHeroIframe');
        if (!iframe) return;

        var player = null, playerReady = false, isMuted = true;

        function cmd(func) {                     // fallback: seedha postMessage
            try {
                if (iframe && iframe.contentWindow) {
                    iframe.contentWindow.postMessage(
                        JSON.stringify({ event: 'command', func: func, args: [] }), '*'
                    );
                }
            } catch (e) { }
        }

        function doMute() {
            if (playerReady && player && player.mute) player.mute(); else cmd('mute');
            isMuted = true;
        }
        function doUnmute() {
            if (playerReady && player && player.unMute) { player.unMute(); player.setVolume(100); }
            else cmd('unMute');
            isMuted = false;
        }

        function initPlayer() {
            if (player) return;
            player = new YT.Player('ytHeroIframe', {
                events: {
                    onReady: function (e) {
                        playerReady = true;
                        e.target.mute();
                        e.target.playVideo();
                        cmd('playVideo');
                        checkScroll();
                    },
                    onStateChange: function (e) {
                        // Agar video ENDED (0) ya PAUSED (2) ho jaye, automatic playVideo karo
                        if (e.data === 0 || e.data === 2) {
                            e.target.playVideo();
                            cmd('playVideo');
                        }
                    }
                }
            });
        }

        // 1) Callback define karo PEHLE
        window.onYouTubeIframeAPIReady = function () {
            initPlayer();
        };

        // 2) YouTube API load karo PEHLE callback define hone ke BAAD
        if (window.YT && window.YT.Player) {
            initPlayer();
        } else {
            var tag = document.createElement('script');
            tag.src = "https://www.youtube.com/iframe_api";
            var firstScriptTag = document.getElementsByTagName('script')[0];
            if (firstScriptTag && firstScriptTag.parentNode) {
                firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
            } else {
                document.head.appendChild(tag);
            }
        }

        // 3) Instant postMessage play fallback
        cmd('mute');
        cmd('playVideo');
        iframe.addEventListener('load', function () {
            cmd('mute');
            cmd('playVideo');
        });

        function getScroll() {
            return window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;
        }

        var ticking = false;
        function checkScroll() {
            var y = getScroll();
            if (y >= MUTE_THRESHOLD && !isMuted) {
                doMute();
            }
        }

        window.addEventListener('scroll', function () {
            if (ticking) return;
            ticking = true;
            requestAnimationFrame(function () { checkScroll(); ticking = false; });
        }, { passive: true });

        // Touch/scroll par video play enforce karo (unmute bilkul mat karo mobile pause issue avoid karne ke liye)
        function enableVideoOrInteraction() {
            cmd('mute');
            cmd('playVideo');
            if (playerReady && player && player.playVideo) {
                player.mute();
                player.playVideo();
            }
            window.removeEventListener('touchstart', enableVideoOrInteraction);
            window.removeEventListener('click', enableVideoOrInteraction);
            window.removeEventListener('scroll', enableVideoOrInteraction);
        }
        window.addEventListener('touchstart', enableVideoOrInteraction, { passive: true });
        window.addEventListener('click', enableVideoOrInteraction, { passive: true });
        window.addEventListener('scroll', enableVideoOrInteraction, { passive: true });

        // Sound Button Toggle (Mobile & Desktop user gesture for audio)
        var soundBtn = document.getElementById('heroSoundBtn');
        if (soundBtn) {
            soundBtn.addEventListener('click', function (e) {
                e.stopPropagation();
                if (isMuted) {
                    doUnmute();
                    soundBtn.textContent = '🔊';
                } else {
                    doMute();
                    soundBtn.textContent = '🔇';
                }
            });
        }

        // Mobile touch support: Tap par text show/hide toggle karo
        var heroEl = document.getElementById('home');
        if (heroEl) {
            heroEl.addEventListener('touchstart', function () {
                heroEl.classList.toggle('show-text');
            }, { passive: true });
        }
    })();
</script>				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-39dd9493 e-con-full e-flex e-con e-child" data-id="39dd9493" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-element elementor-element-3da0f89e elementor-widget elementor-widget-html" data-id="3da0f89e" data-element_type="widget" data-e-type="widget" data-widget_type="html.default">
				<div class="elementor-widget-container">
					<div style="overflow:hidden;padding:20px 0;">
  <div style="display:flex;animation:fbM 38s linear infinite;">
    <div style="display:flex;flex-shrink:0;"><span style="font-family:'Bebas Neue', Impact, sans-serif;font-size:28px;text-transform:uppercase;letter-spacing:4px;color:rgba(244,242,234,.65);flex-shrink:0;margin-right:56px;">Gym Floor<span style="margin-left:56px;color:#37c080;">✦</span></span><span style="font-family:'Bebas Neue', Impact, sans-serif;font-size:28px;text-transform:uppercase;letter-spacing:4px;color:rgba(244,242,234,.65);flex-shrink:0;margin-right:56px;">Pilates<span style="margin-left:56px;color:#37c080;">✦</span></span><span style="font-family:'Bebas Neue', Impact, sans-serif;font-size:28px;text-transform:uppercase;letter-spacing:4px;color:rgba(244,242,234,.65);flex-shrink:0;margin-right:56px;">Swimming<span style="margin-left:56px;color:#37c080;">✦</span></span><span style="font-family:'Bebas Neue', Impact, sans-serif;font-size:28px;text-transform:uppercase;letter-spacing:4px;color:rgba(244,242,234,.65);flex-shrink:0;margin-right:56px;">Spa<span style="margin-left:56px;color:#37c080;">✦</span></span><span style="font-family:'Bebas Neue', Impact, sans-serif;font-size:28px;text-transform:uppercase;letter-spacing:4px;color:rgba(244,242,234,.65);flex-shrink:0;margin-right:56px;">EatBliss Café<span style="margin-left:56px;color:#37c080;">✦</span></span><span style="font-family:'Bebas Neue', Impact, sans-serif;font-size:28px;text-transform:uppercase;letter-spacing:4px;color:rgba(244,242,234,.65);flex-shrink:0;margin-right:56px;">Squash<span style="margin-left:56px;color:#37c080;">✦</span></span><span style="font-family:'Bebas Neue', Impact, sans-serif;font-size:28px;text-transform:uppercase;letter-spacing:4px;color:rgba(244,242,234,.65);flex-shrink:0;margin-right:56px;">Yoga<span style="margin-left:56px;color:#37c080;">✦</span></span><span style="font-family:'Bebas Neue', Impact, sans-serif;font-size:28px;text-transform:uppercase;letter-spacing:4px;color:rgba(244,242,234,.65);flex-shrink:0;margin-right:56px;">Zumba<span style="margin-left:56px;color:#37c080;">✦</span></span><span style="font-family:'Bebas Neue', Impact, sans-serif;font-size:28px;text-transform:uppercase;letter-spacing:4px;color:rgba(244,242,234,.65);flex-shrink:0;margin-right:56px;">Boxing<span style="margin-left:56px;color:#37c080;">✦</span></span></div>
    <div style="display:flex;flex-shrink:0;"><span style="font-family:'Bebas Neue', Impact, sans-serif;font-size:28px;text-transform:uppercase;letter-spacing:4px;color:rgba(244,242,234,.65);flex-shrink:0;margin-right:56px;">Gym Floor<span style="margin-left:56px;color:#37c080;">✦</span></span><span style="font-family:'Bebas Neue', Impact, sans-serif;font-size:28px;text-transform:uppercase;letter-spacing:4px;color:rgba(244,242,234,.65);flex-shrink:0;margin-right:56px;">Pilates<span style="margin-left:56px;color:#37c080;">✦</span></span><span style="font-family:'Bebas Neue', Impact, sans-serif;font-size:28px;text-transform:uppercase;letter-spacing:4px;color:rgba(244,242,234,.65);flex-shrink:0;margin-right:56px;">Swimming<span style="margin-left:56px;color:#37c080;">✦</span></span><span style="font-family:'Bebas Neue', Impact, sans-serif;font-size:28px;text-transform:uppercase;letter-spacing:4px;color:rgba(244,242,234,.65);flex-shrink:0;margin-right:56px;">Spa<span style="margin-left:56px;color:#37c080;">✦</span></span><span style="font-family:'Bebas Neue', Impact, sans-serif;font-size:28px;text-transform:uppercase;letter-spacing:4px;color:rgba(244,242,234,.65);flex-shrink:0;margin-right:56px;">EatBliss Café<span style="margin-left:56px;color:#37c080;">✦</span></span><span style="font-family:'Bebas Neue', Impact, sans-serif;font-size:28px;text-transform:uppercase;letter-spacing:4px;color:rgba(244,242,234,.65);flex-shrink:0;margin-right:56px;">Squash<span style="margin-left:56px;color:#37c080;">✦</span></span><span style="font-family:'Bebas Neue', Impact, sans-serif;font-size:28px;text-transform:uppercase;letter-spacing:4px;color:rgba(244,242,234,.65);flex-shrink:0;margin-right:56px;">Yoga<span style="margin-left:56px;color:#37c080;">✦</span></span><span style="font-family:'Bebas Neue', Impact, sans-serif;font-size:28px;text-transform:uppercase;letter-spacing:4px;color:rgba(244,242,234,.65);flex-shrink:0;margin-right:56px;">Zumba<span style="margin-left:56px;color:#37c080;">✦</span></span><span style="font-family:'Bebas Neue', Impact, sans-serif;font-size:28px;text-transform:uppercase;letter-spacing:4px;color:rgba(244,242,234,.65);flex-shrink:0;margin-right:56px;">Boxing<span style="margin-left:56px;color:#37c080;">✦</span></span></div>
  </div>
</div>
<style>@keyframes fbM{from{transform:translateX(0)}to{transform:translateX(-50%)}}</style>				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-337ffeb8 e-con-full e-flex e-con e-child" data-id="337ffeb8" data-element_type="container" data-e-type="container" id="videos" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-element elementor-element-13edff63 elementor-widget elementor-widget-html" data-id="13edff63" data-element_type="widget" data-e-type="widget" data-widget_type="html.default">
				<div class="elementor-widget-container">
					<style>
    /* ─── Track ─── */
    #fbTrack {
        display: flex;
        gap: 17px;
        transition: transform .55s cubic-bezier(.4, 0, .2, 1);
        will-change: transform;
    }

    .fbs-card:hover img { transform: scale(1.06); }
    .fbs-card:hover     { border-color: rgba(55,192,128,0.55); }

    /* ─── Section wrapper ─── */
    .fbs-section {
        padding: clamp(40px, 8vw, 80px) clamp(16px, 4vw, 40px);
        background: #050a0b;
        box-sizing: border-box;
    }

    .fbs-inner {
        max-width: 1400px;
        margin: 0 auto;
    }

    /* ─── Header row ─── */
    .fbs-header {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: flex-end;
        gap: 20px;
        margin-bottom: 44px;
    }

    .fbs-header-right {
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        gap: 14px;
    }

    .fbs-header-right p {
        margin: 0;
        max-width: 380px;
        text-align: left;
        font-family: 'Barlow', Inter, sans-serif;
        font-size: 15px;
        line-height: 1.65;
        color: #9b998b;
    }

    .fbs-nav { display: flex; gap: 10px; align-self: flex-end; }

    /* ─── Dots row ─── */
    .fbs-footer {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-top: 24px;
        gap: 12px;
        flex-wrap: wrap;
    }

    #fbDots {
        display: flex;
        gap: 6px;
        align-items: center;
        flex-wrap: wrap;          /* KEY FIX: dots wrap instead of overflow */
        flex: 1;
        min-width: 0;
    }

    /* ─── Mobile ─── */
    @media (max-width: 767px) {
        .fbs-header {
            flex-direction: column;
            align-items: flex-start;
            margin-bottom: 28px;
        }

        .fbs-header-right {
            align-items: flex-start;
            width: 100%;
        }

        .fbs-header-right p {
            text-align: left;
            max-width: 100%;
        }

        /* On mobile, hide individual dots — show only counter */
        #fbDots { display: none; }

        .fbs-footer {
            justify-content: flex-end;
        }
    }

    @media (max-width: 479px) {
        .fbs-nav button {
            width: 38px !important;
            height: 38px !important;
        }
    }
</style>

<div class="fbs-section">
    <div class="fbs-inner">

        <!-- Header row -->
        <div class="fbs-header">
            <div>
                <div style="font-family:'Barlow', Inter, sans-serif;font-size:12px;font-weight:600;text-transform:uppercase;letter-spacing:3px;color:#37c080;">
                    — Under one roof</div>
                <h2 style="margin:14px 0 0;font-family:'Bebas Neue', Impact, sans-serif;font-size:clamp(2.6rem,5vw,4.5rem);line-height:.93;color:#f4f2ea;font-weight:400;text-transform:uppercase;">
                    One Stop<br /><span style="color:#37c080;">Solution.</span>
                </h2>
            </div>
            <div class="fbs-header-right">
                <p>We didn't stack the equipment and call it a gym. Every room was designed as its own destination — so
                    recovery, training and eating feel like one journey.</p>
                <!-- Prev / Next -->
                <div class="fbs-nav">
                    <button id="fbPrev" onclick="fbSlide(-1)" style="width:42px;height:42px;border:1px solid rgba(255,255,255,.2);
                         background:transparent;color:#f4f2ea;cursor:pointer;font-size:18px;
                         display:flex;align-items:center;justify-content:center;transition:all .2s;"
                        onmouseover="this.style.borderColor='#37c080';this.style.color='#37c080'"
                        onmouseout="this.style.borderColor='rgba(255,255,255,.2)';this.style.color='#f4f2ea'">←</button>
                    <button id="fbNext" onclick="fbSlide(1)" style="width:42px;height:42px;border:1px solid rgba(255,255,255,.2);
                         background:transparent;color:#f4f2ea;cursor:pointer;font-size:18px;
                         display:flex;align-items:center;justify-content:center;transition:all .2s;"
                        onmouseover="this.style.borderColor='#37c080';this.style.color='#37c080'"
                        onmouseout="this.style.borderColor='rgba(255,255,255,.2)';this.style.color='#f4f2ea'">→</button>
                </div>
            </div>
        </div>

        <!-- Slider viewport -->
        <div style="overflow:hidden;width:100%;">
            <div id="fbTrack">
                                <div class="fbs-card" data-idx="0"
                    style="flex:0 0 calc(100%/4 - 13px);width:calc(100%/4 - 13px);min-width:0;background:#0d1717;border:1px solid rgba(255,255,255,0.14);overflow:hidden;transition:border-color .3s;display:flex;flex-direction:column;">
                    <div style="position:relative;aspect-ratio:4/3;overflow:hidden;"><img decoding="async"
                            src="<?php echo $base_url; ?>/assets/images/2026/07/DSC_3887-scaled.jpg"
                            alt="Gym &amp; Strength" loading="eager"
                            style="width:100%;height:100%;object-fit:cover;display:block;transition:transform .6s;" />
                        <div style="position:absolute;inset:0;background:linear-gradient(to top,rgba(1,3,3,.75),transparent);"></div><span
                            style="position:absolute;top:10px;left:12px;font-family:'Barlow', Inter, sans-serif;font-size:9px;font-weight:600;text-transform:uppercase;letter-spacing:2px;color:#37c080;">Gym
                            &amp; Fitness</span>
                    </div>
                    <div style="padding:16px 16px 18px;flex:1;display:flex;flex-direction:column;gap:6px;">
                        <div style="font-family:'Bebas Neue', Impact, sans-serif;font-size:20px;text-transform:uppercase;color:#f4f2ea;line-height:1.05;">Gym &amp; Strength</div>
                        <div style="font-family:'Barlow', Inter, sans-serif;font-size:11px;text-transform:uppercase;letter-spacing:1.5px;color:#9b998b;">Training</div>
                        <a href="pages/gym.php" style="margin-top:auto;padding-top:12px;font-family:'Barlow', Inter, sans-serif;font-size:10px;font-weight:600;text-transform:uppercase;letter-spacing:2px;color:#37c080;text-decoration:none;">Explore →</a>
                    </div>
                </div>
                                <div class="fbs-card" data-idx="1"
                    style="flex:0 0 calc(100%/4 - 13px);width:calc(100%/4 - 13px);min-width:0;background:#0d1717;border:1px solid rgba(255,255,255,0.14);overflow:hidden;transition:border-color .3s;display:flex;flex-direction:column;">
                    <div style="position:relative;aspect-ratio:4/3;overflow:hidden;"><img decoding="async"
                            src="<?php echo $base_url; ?>/assets/images/2026/07/DSC_3593-scaled.jpg"
                            alt="Personal Training" loading="lazy"
                            style="width:100%;height:100%;object-fit:cover;display:block;transition:transform .6s;" />
                        <div style="position:absolute;inset:0;background:linear-gradient(to top,rgba(1,3,3,.75),transparent);"></div><span
                            style="position:absolute;top:10px;left:12px;font-family:'Barlow', Inter, sans-serif;font-size:9px;font-weight:600;text-transform:uppercase;letter-spacing:2px;color:#37c080;">Gym &amp; Fitness</span>
                    </div>
                    <div style="padding:16px 16px 18px;flex:1;display:flex;flex-direction:column;gap:6px;">
                        <div style="font-family:'Bebas Neue', Impact, sans-serif;font-size:20px;text-transform:uppercase;color:#f4f2ea;line-height:1.05;">Personal Training</div>
                        <div style="font-family:'Barlow', Inter, sans-serif;font-size:11px;text-transform:uppercase;letter-spacing:1.5px;color:#9b998b;">Coaching</div>
                        <a href="pages/gym.php" style="margin-top:auto;padding-top:12px;font-family:'Barlow', Inter, sans-serif;font-size:10px;font-weight:600;text-transform:uppercase;letter-spacing:2px;color:#37c080;text-decoration:none;">Explore →</a>
                    </div>
                </div>
                                <div class="fbs-card" data-idx="2"
                    style="flex:0 0 calc(100%/4 - 13px);width:calc(100%/4 - 13px);min-width:0;background:#0d1717;border:1px solid rgba(255,255,255,0.14);overflow:hidden;transition:border-color .3s;display:flex;flex-direction:column;">
                    <div style="position:relative;aspect-ratio:4/3;overflow:hidden;"><img decoding="async"
                            src="<?php echo $base_url; ?>/assets/images/2026/07/DSC_3557-scaled.jpg"
                            alt="Functional Training" loading="lazy"
                            style="width:100%;height:100%;object-fit:cover;display:block;transition:transform .6s;" />
                        <div style="position:absolute;inset:0;background:linear-gradient(to top,rgba(1,3,3,.75),transparent);"></div><span
                            style="position:absolute;top:10px;left:12px;font-family:'Barlow', Inter, sans-serif;font-size:9px;font-weight:600;text-transform:uppercase;letter-spacing:2px;color:#37c080;">Gym &amp; Fitness</span>
                    </div>
                    <div style="padding:16px 16px 18px;flex:1;display:flex;flex-direction:column;gap:6px;">
                        <div style="font-family:'Bebas Neue', Impact, sans-serif;font-size:20px;text-transform:uppercase;color:#f4f2ea;line-height:1.05;">Functional Training</div>
                        <div style="font-family:'Barlow', Inter, sans-serif;font-size:11px;text-transform:uppercase;letter-spacing:1.5px;color:#9b998b;">Agility</div>
                        <a href="pages/crossfit.php" style="margin-top:auto;padding-top:12px;font-family:'Barlow', Inter, sans-serif;font-size:10px;font-weight:600;text-transform:uppercase;letter-spacing:2px;color:#37c080;text-decoration:none;">Explore →</a>
                    </div>
                </div>
                                <div class="fbs-card" data-idx="3"
                    style="flex:0 0 calc(100%/4 - 13px);width:calc(100%/4 - 13px);min-width:0;background:#0d1717;border:1px solid rgba(255,255,255,0.14);overflow:hidden;transition:border-color .3s;display:flex;flex-direction:column;">
                    <div style="position:relative;aspect-ratio:4/3;overflow:hidden;"><img decoding="async"
                            src="<?php echo $base_url; ?>/assets/images/2026/07/IMG_3724-scaled.jpg"
                            alt="Spinning Bike" loading="lazy"
                            style="width:100%;height:100%;object-fit:cover;display:block;transition:transform .6s;" />
                        <div style="position:absolute;inset:0;background:linear-gradient(to top,rgba(1,3,3,.75),transparent);"></div><span
                            style="position:absolute;top:10px;left:12px;font-family:'Barlow', Inter, sans-serif;font-size:9px;font-weight:600;text-transform:uppercase;letter-spacing:2px;color:#37c080;">Gym &amp; Fitness</span>
                    </div>
                    <div style="padding:16px 16px 18px;flex:1;display:flex;flex-direction:column;gap:6px;">
                        <div style="font-family:'Bebas Neue', Impact, sans-serif;font-size:20px;text-transform:uppercase;color:#f4f2ea;line-height:1.05;">Spinning Bike</div>
                        <div style="font-family:'Barlow', Inter, sans-serif;font-size:11px;text-transform:uppercase;letter-spacing:1.5px;color:#9b998b;">Cardio</div>
                        <a href="pages/stepper.php" style="margin-top:auto;padding-top:12px;font-family:'Barlow', Inter, sans-serif;font-size:10px;font-weight:600;text-transform:uppercase;letter-spacing:2px;color:#37c080;text-decoration:none;">Explore →</a>
                    </div>
                </div>
                                <div class="fbs-card" data-idx="4"
                    style="flex:0 0 calc(100%/4 - 13px);width:calc(100%/4 - 13px);min-width:0;background:#0d1717;border:1px solid rgba(255,255,255,0.14);overflow:hidden;transition:border-color .3s;display:flex;flex-direction:column;">
                    <div style="position:relative;aspect-ratio:4/3;overflow:hidden;"><img decoding="async"
                            src="<?php echo $base_url; ?>/assets/images/2026/07/DSC04177_11zon-1.jpg"
                            alt="Pilates" loading="lazy"
                            style="width:100%;height:100%;object-fit:cover;display:block;transition:transform .6s;" />
                        <div style="position:absolute;inset:0;background:linear-gradient(to top,rgba(1,3,3,.75),transparent);"></div><span
                            style="position:absolute;top:10px;left:12px;font-family:'Barlow', Inter, sans-serif;font-size:9px;font-weight:600;text-transform:uppercase;letter-spacing:2px;color:#37c080;">Yoga &amp; Pilates</span>
                    </div>
                    <div style="padding:16px 16px 18px;flex:1;display:flex;flex-direction:column;gap:6px;">
                        <div style="font-family:'Bebas Neue', Impact, sans-serif;font-size:20px;text-transform:uppercase;color:#f4f2ea;line-height:1.05;">Pilates</div>
                        <div style="font-family:'Barlow', Inter, sans-serif;font-size:11px;text-transform:uppercase;letter-spacing:1.5px;color:#9b998b;">In collaboration with YKBI</div>
                        <a href="pages/pilates.php" style="margin-top:auto;padding-top:12px;font-family:'Barlow', Inter, sans-serif;font-size:10px;font-weight:600;text-transform:uppercase;letter-spacing:2px;color:#37c080;text-decoration:none;">Explore →</a>
                    </div>
                </div>
                                <div class="fbs-card" data-idx="5"
                    style="flex:0 0 calc(100%/4 - 13px);width:calc(100%/4 - 13px);min-width:0;background:#0d1717;border:1px solid rgba(255,255,255,0.14);overflow:hidden;transition:border-color .3s;display:flex;flex-direction:column;">
                    <div style="position:relative;aspect-ratio:4/3;overflow:hidden;"><img decoding="async"
                            src="<?php echo $base_url; ?>/assets/images/2026/07/0Z8_2468-scaled.jpg"
                            alt="Traditional Yoga" loading="lazy"
                            style="width:100%;height:100%;object-fit:cover;display:block;transition:transform .6s;" />
                        <div style="position:absolute;inset:0;background:linear-gradient(to top,rgba(1,3,3,.75),transparent);"></div><span
                            style="position:absolute;top:10px;left:12px;font-family:'Barlow', Inter, sans-serif;font-size:9px;font-weight:600;text-transform:uppercase;letter-spacing:2px;color:#37c080;">Yoga &amp; Pilates</span>
                    </div>
                    <div style="padding:16px 16px 18px;flex:1;display:flex;flex-direction:column;gap:6px;">
                        <div style="font-family:'Bebas Neue', Impact, sans-serif;font-size:20px;text-transform:uppercase;color:#f4f2ea;line-height:1.05;">Traditional Yoga</div>
                        <div style="font-family:'Barlow', Inter, sans-serif;font-size:11px;text-transform:uppercase;letter-spacing:1.5px;color:#9b998b;">Mind &amp; Body</div>
                        <a href="pages/yoga.php" style="margin-top:auto;padding-top:12px;font-family:'Barlow', Inter, sans-serif;font-size:10px;font-weight:600;text-transform:uppercase;letter-spacing:2px;color:#37c080;text-decoration:none;">Explore →</a>
                    </div>
                </div>
                                <div class="fbs-card" data-idx="6"
                    style="flex:0 0 calc(100%/4 - 13px);width:calc(100%/4 - 13px);min-width:0;background:#0d1717;border:1px solid rgba(255,255,255,0.14);overflow:hidden;transition:border-color .3s;display:flex;flex-direction:column;">
                    <div style="position:relative;aspect-ratio:4/3;overflow:hidden;"><img decoding="async"
                            src="<?php echo $base_url; ?>/assets/images/2026/07/0Z8_2468-scaled.jpg"
                            alt="Aerial Yoga" loading="lazy"
                            style="width:100%;height:100%;object-fit:cover;display:block;transition:transform .6s;" />
                        <div style="position:absolute;inset:0;background:linear-gradient(to top,rgba(1,3,3,.75),transparent);"></div><span
                            style="position:absolute;top:10px;left:12px;font-family:'Barlow', Inter, sans-serif;font-size:9px;font-weight:600;text-transform:uppercase;letter-spacing:2px;color:#37c080;">Yoga &amp; Pilates</span>
                    </div>
                    <div style="padding:16px 16px 18px;flex:1;display:flex;flex-direction:column;gap:6px;">
                        <div style="font-family:'Bebas Neue', Impact, sans-serif;font-size:20px;text-transform:uppercase;color:#f4f2ea;line-height:1.05;">Aerial Yoga</div>
                        <div style="font-family:'Barlow', Inter, sans-serif;font-size:11px;text-transform:uppercase;letter-spacing:1.5px;color:#9b998b;">Anti-gravity</div>
                        <a href="pages/yoga.php" style="margin-top:auto;padding-top:12px;font-family:'Barlow', Inter, sans-serif;font-size:10px;font-weight:600;text-transform:uppercase;letter-spacing:2px;color:#37c080;text-decoration:none;">Explore →</a>
                    </div>
                </div>
                                <div class="fbs-card" data-idx="7"
                    style="flex:0 0 calc(100%/4 - 13px);width:calc(100%/4 - 13px);min-width:0;background:#0d1717;border:1px solid rgba(255,255,255,0.14);overflow:hidden;transition:border-color .3s;display:flex;flex-direction:column;">
                    <div style="position:relative;aspect-ratio:4/3;overflow:hidden;"><img decoding="async"
                            src="<?php echo $base_url; ?>/assets/images/2026/07/IMG_0567-scaled.jpg"
                            alt="Aquatic Wellness" loading="lazy"
                            style="width:100%;height:100%;object-fit:cover;display:block;transition:transform .6s;" />
                        <div style="position:absolute;inset:0;background:linear-gradient(to top,rgba(1,3,3,.75),transparent);"></div><span
                            style="position:absolute;top:10px;left:12px;font-family:'Barlow', Inter, sans-serif;font-size:9px;font-weight:600;text-transform:uppercase;letter-spacing:2px;color:#37c080;">Yoga &amp; Pilates</span>
                    </div>
                    <div style="padding:16px 16px 18px;flex:1;display:flex;flex-direction:column;gap:6px;">
                        <div style="font-family:'Bebas Neue', Impact, sans-serif;font-size:20px;text-transform:uppercase;color:#f4f2ea;line-height:1.05;">Aquatic Wellness</div>
                        <div style="font-family:'Barlow', Inter, sans-serif;font-size:11px;text-transform:uppercase;letter-spacing:1.5px;color:#9b998b;">Water Therapy</div>
                        <a href="pages/cryotherapy.php" style="margin-top:auto;padding-top:12px;font-family:'Barlow', Inter, sans-serif;font-size:10px;font-weight:600;text-transform:uppercase;letter-spacing:2px;color:#37c080;text-decoration:none;">Explore →</a>
                    </div>
                </div>
                                <div class="fbs-card" data-idx="8"
                    style="flex:0 0 calc(100%/4 - 13px);width:calc(100%/4 - 13px);min-width:0;background:#0d1717;border:1px solid rgba(255,255,255,0.14);overflow:hidden;transition:border-color .3s;display:flex;flex-direction:column;">
                    <div style="position:relative;aspect-ratio:4/3;overflow:hidden;"><img decoding="async"
                            src="<?php echo $base_url; ?>/assets/images/2026/07/IMG_3714-scaled.jpg"
                            alt="Boxing" loading="lazy"
                            style="width:100%;height:100%;object-fit:cover;display:block;transition:transform .6s;" />
                        <div style="position:absolute;inset:0;background:linear-gradient(to top,rgba(1,3,3,.75),transparent);"></div><span
                            style="position:absolute;top:10px;left:12px;font-family:'Barlow', Inter, sans-serif;font-size:9px;font-weight:600;text-transform:uppercase;letter-spacing:2px;color:#37c080;">Sports &amp; Dance</span>
                    </div>
                    <div style="padding:16px 16px 18px;flex:1;display:flex;flex-direction:column;gap:6px;">
                        <div style="font-family:'Bebas Neue', Impact, sans-serif;font-size:20px;text-transform:uppercase;color:#f4f2ea;line-height:1.05;">Boxing</div>
                        <div style="font-family:'Barlow', Inter, sans-serif;font-size:11px;text-transform:uppercase;letter-spacing:1.5px;color:#9b998b;">Combat</div>
                        <a href="pages/free-weight.php" style="margin-top:auto;padding-top:12px;font-family:'Barlow', Inter, sans-serif;font-size:10px;font-weight:600;text-transform:uppercase;letter-spacing:2px;color:#37c080;text-decoration:none;">Explore →</a>
                    </div>
                </div>
                                <div class="fbs-card" data-idx="9"
                    style="flex:0 0 calc(100%/4 - 13px);width:calc(100%/4 - 13px);min-width:0;background:#0d1717;border:1px solid rgba(255,255,255,0.14);overflow:hidden;transition:border-color .3s;display:flex;flex-direction:column;">
                    <div style="position:relative;aspect-ratio:4/3;overflow:hidden;"><img decoding="async"
                            src="<?php echo $base_url; ?>/assets/images/2026/07/IMG_3730-scaled.jpg"
                            alt="Zumba" loading="lazy"
                            style="width:100%;height:100%;object-fit:cover;display:block;transition:transform .6s;" />
                        <div style="position:absolute;inset:0;background:linear-gradient(to top,rgba(1,3,3,.75),transparent);"></div><span
                            style="position:absolute;top:10px;left:12px;font-family:'Barlow', Inter, sans-serif;font-size:9px;font-weight:600;text-transform:uppercase;letter-spacing:2px;color:#37c080;">Sports &amp; Dance</span>
                    </div>
                    <div style="padding:16px 16px 18px;flex:1;display:flex;flex-direction:column;gap:6px;">
                        <div style="font-family:'Bebas Neue', Impact, sans-serif;font-size:20px;text-transform:uppercase;color:#f4f2ea;line-height:1.05;">Zumba</div>
                        <div style="font-family:'Barlow', Inter, sans-serif;font-size:11px;text-transform:uppercase;letter-spacing:1.5px;color:#9b998b;">Dance Fitness</div>
                        <a href="pages/gym.php" style="margin-top:auto;padding-top:12px;font-family:'Barlow', Inter, sans-serif;font-size:10px;font-weight:600;text-transform:uppercase;letter-spacing:2px;color:#37c080;text-decoration:none;">Explore →</a>
                    </div>
                </div>
                                <div class="fbs-card" data-idx="10"
                    style="flex:0 0 calc(100%/4 - 13px);width:calc(100%/4 - 13px);min-width:0;background:#0d1717;border:1px solid rgba(255,255,255,0.14);overflow:hidden;transition:border-color .3s;display:flex;flex-direction:column;">
                    <div style="position:relative;aspect-ratio:4/3;overflow:hidden;"><img decoding="async"
                            src="<?php echo $base_url; ?>/assets/images/2026/07/IMG_3730-scaled.jpg"
                            alt="Dance Classes" loading="lazy"
                            style="width:100%;height:100%;object-fit:cover;display:block;transition:transform .6s;" />
                        <div style="position:absolute;inset:0;background:linear-gradient(to top,rgba(1,3,3,.75),transparent);"></div><span
                            style="position:absolute;top:10px;left:12px;font-family:'Barlow', Inter, sans-serif;font-size:9px;font-weight:600;text-transform:uppercase;letter-spacing:2px;color:#37c080;">Sports &amp; Dance</span>
                    </div>
                    <div style="padding:16px 16px 18px;flex:1;display:flex;flex-direction:column;gap:6px;">
                        <div style="font-family:'Bebas Neue', Impact, sans-serif;font-size:20px;text-transform:uppercase;color:#f4f2ea;line-height:1.05;">Dance Classes</div>
                        <div style="font-family:'Barlow', Inter, sans-serif;font-size:11px;text-transform:uppercase;letter-spacing:1.5px;color:#9b998b;">Choreography</div>
                        <a href="pages/gym.php" style="margin-top:auto;padding-top:12px;font-family:'Barlow', Inter, sans-serif;font-size:10px;font-weight:600;text-transform:uppercase;letter-spacing:2px;color:#37c080;text-decoration:none;">Explore →</a>
                    </div>
                </div>
                                <div class="fbs-card" data-idx="11"
                    style="flex:0 0 calc(100%/4 - 13px);width:calc(100%/4 - 13px);min-width:0;background:#0d1717;border:1px solid rgba(255,255,255,0.14);overflow:hidden;transition:border-color .3s;display:flex;flex-direction:column;">
                    <div style="position:relative;aspect-ratio:4/3;overflow:hidden;"><img decoding="async"
                            src="<?php echo $base_url; ?>/assets/images/2026/07/Squash-Court.jpg"
                            alt="Squash Court" loading="lazy"
                            style="width:100%;height:100%;object-fit:cover;display:block;transition:transform .6s;" />
                        <div style="position:absolute;inset:0;background:linear-gradient(to top,rgba(1,3,3,.75),transparent);"></div><span
                            style="position:absolute;top:10px;left:12px;font-family:'Barlow', Inter, sans-serif;font-size:9px;font-weight:600;text-transform:uppercase;letter-spacing:2px;color:#37c080;">Sports &amp; Dance</span>
                    </div>
                    <div style="padding:16px 16px 18px;flex:1;display:flex;flex-direction:column;gap:6px;">
                        <div style="font-family:'Bebas Neue', Impact, sans-serif;font-size:20px;text-transform:uppercase;color:#f4f2ea;line-height:1.05;">Squash Court</div>
                        <div style="font-family:'Barlow', Inter, sans-serif;font-size:11px;text-transform:uppercase;letter-spacing:1.5px;color:#9b998b;">Racquet Sport</div>
                        <a href="pages/gym.php" style="margin-top:auto;padding-top:12px;font-family:'Barlow', Inter, sans-serif;font-size:10px;font-weight:600;text-transform:uppercase;letter-spacing:2px;color:#37c080;text-decoration:none;">Explore →</a>
                    </div>
                </div>
                                <div class="fbs-card" data-idx="12"
                    style="flex:0 0 calc(100%/4 - 13px);width:calc(100%/4 - 13px);min-width:0;background:#0d1717;border:1px solid rgba(255,255,255,0.14);overflow:hidden;transition:border-color .3s;display:flex;flex-direction:column;">
                    <div style="position:relative;aspect-ratio:4/3;overflow:hidden;"><img decoding="async"
                            src="<?php echo $base_url; ?>/assets/images/2026/07/IMG_0617-1-scaled.webp"
                            alt="Spa &amp; Recovery" loading="lazy"
                            style="width:100%;height:100%;object-fit:cover;display:block;transition:transform .6s;" />
                        <div style="position:absolute;inset:0;background:linear-gradient(to top,rgba(1,3,3,.75),transparent);"></div><span
                            style="position:absolute;top:10px;left:12px;font-family:'Barlow', Inter, sans-serif;font-size:9px;font-weight:600;text-transform:uppercase;letter-spacing:2px;color:#37c080;">Wellness</span>
                    </div>
                    <div style="padding:16px 16px 18px;flex:1;display:flex;flex-direction:column;gap:6px;">
                        <div style="font-family:'Bebas Neue', Impact, sans-serif;font-size:20px;text-transform:uppercase;color:#f4f2ea;line-height:1.05;">Spa &amp; Recovery</div>
                        <div style="font-family:'Barlow', Inter, sans-serif;font-size:11px;text-transform:uppercase;letter-spacing:1.5px;color:#9b998b;">Relaxation</div>
                        <a href="pages/cryotherapy.php" style="margin-top:auto;padding-top:12px;font-family:'Barlow', Inter, sans-serif;font-size:10px;font-weight:600;text-transform:uppercase;letter-spacing:2px;color:#37c080;text-decoration:none;">Explore →</a>
                    </div>
                </div>
                                <div class="fbs-card" data-idx="13"
                    style="flex:0 0 calc(100%/4 - 13px);width:calc(100%/4 - 13px);min-width:0;background:#0d1717;border:1px solid rgba(255,255,255,0.14);overflow:hidden;transition:border-color .3s;display:flex;flex-direction:column;">
                    <div style="position:relative;aspect-ratio:4/3;overflow:hidden;"><img decoding="async"
                            src="<?php echo $base_url; ?>/assets/images/2026/07/IMG_0621-1-scaled.webp"
                            alt="Panchkarma" loading="lazy"
                            style="width:100%;height:100%;object-fit:cover;display:block;transition:transform .6s;" />
                        <div style="position:absolute;inset:0;background:linear-gradient(to top,rgba(1,3,3,.75),transparent);"></div><span
                            style="position:absolute;top:10px;left:12px;font-family:'Barlow', Inter, sans-serif;font-size:9px;font-weight:600;text-transform:uppercase;letter-spacing:2px;color:#37c080;">Wellness</span>
                    </div>
                    <div style="padding:16px 16px 18px;flex:1;display:flex;flex-direction:column;gap:6px;">
                        <div style="font-family:'Bebas Neue', Impact, sans-serif;font-size:20px;text-transform:uppercase;color:#f4f2ea;line-height:1.05;">Panchkarma</div>
                        <div style="font-family:'Barlow', Inter, sans-serif;font-size:11px;text-transform:uppercase;letter-spacing:1.5px;color:#9b998b;">Ayurvedic Detox</div>
                        <a href="pages/dermatology.php" style="margin-top:auto;padding-top:12px;font-family:'Barlow', Inter, sans-serif;font-size:10px;font-weight:600;text-transform:uppercase;letter-spacing:2px;color:#37c080;text-decoration:none;">Explore →</a>
                    </div>
                </div>
                                <div class="fbs-card" data-idx="14"
                    style="flex:0 0 calc(100%/4 - 13px);width:calc(100%/4 - 13px);min-width:0;background:#0d1717;border:1px solid rgba(255,255,255,0.14);overflow:hidden;transition:border-color .3s;display:flex;flex-direction:column;">
                    <div style="position:relative;aspect-ratio:4/3;overflow:hidden;"><img decoding="async"
                            src="<?php echo $base_url; ?>/assets/images/2026/07/IMG_0630-scaled.webp"
                            alt="Physiotherapy" loading="lazy"
                            style="width:100%;height:100%;object-fit:cover;display:block;transition:transform .6s;" />
                        <div style="position:absolute;inset:0;background:linear-gradient(to top,rgba(1,3,3,.75),transparent);"></div><span
                            style="position:absolute;top:10px;left:12px;font-family:'Barlow', Inter, sans-serif;font-size:9px;font-weight:600;text-transform:uppercase;letter-spacing:2px;color:#37c080;">Wellness</span>
                    </div>
                    <div style="padding:16px 16px 18px;flex:1;display:flex;flex-direction:column;gap:6px;">
                        <div style="font-family:'Bebas Neue', Impact, sans-serif;font-size:20px;text-transform:uppercase;color:#f4f2ea;line-height:1.05;">Physiotherapy</div>
                        <div style="font-family:'Barlow', Inter, sans-serif;font-size:11px;text-transform:uppercase;letter-spacing:1.5px;color:#9b998b;">Rehab</div>
                        <a href="pages/dermatology.php" style="margin-top:auto;padding-top:12px;font-family:'Barlow', Inter, sans-serif;font-size:10px;font-weight:600;text-transform:uppercase;letter-spacing:2px;color:#37c080;text-decoration:none;">Explore →</a>
                    </div>
                </div>
                                <div class="fbs-card" data-idx="15"
                    style="flex:0 0 calc(100%/4 - 13px);width:calc(100%/4 - 13px);min-width:0;background:#0d1717;border:1px solid rgba(255,255,255,0.14);overflow:hidden;transition:border-color .3s;display:flex;flex-direction:column;">
                    <div style="position:relative;aspect-ratio:4/3;overflow:hidden;"><img decoding="async"
                            src="<?php echo $base_url; ?>/assets/images/2026/07/IV-Therapy.jpg"
                            alt="IV Therapy" loading="lazy"
                            style="width:100%;height:100%;object-fit:cover;display:block;transition:transform .6s;" />
                        <div style="position:absolute;inset:0;background:linear-gradient(to top,rgba(1,3,3,.75),transparent);"></div><span
                            style="position:absolute;top:10px;left:12px;font-family:'Barlow', Inter, sans-serif;font-size:9px;font-weight:600;text-transform:uppercase;letter-spacing:2px;color:#37c080;">Wellness</span>
                    </div>
                    <div style="padding:16px 16px 18px;flex:1;display:flex;flex-direction:column;gap:6px;">
                        <div style="font-family:'Bebas Neue', Impact, sans-serif;font-size:20px;text-transform:uppercase;color:#f4f2ea;line-height:1.05;">IV Therapy</div>
                        <div style="font-family:'Barlow', Inter, sans-serif;font-size:11px;text-transform:uppercase;letter-spacing:1.5px;color:#9b998b;">Vitamins</div>
                        <a href="pages/dermatology.php" style="margin-top:auto;padding-top:12px;font-family:'Barlow', Inter, sans-serif;font-size:10px;font-weight:600;text-transform:uppercase;letter-spacing:2px;color:#37c080;text-decoration:none;">Explore →</a>
                    </div>
                </div>
                                <div class="fbs-card" data-idx="16"
                    style="flex:0 0 calc(100%/4 - 13px);width:calc(100%/4 - 13px);min-width:0;background:#0d1717;border:1px solid rgba(255,255,255,0.14);overflow:hidden;transition:border-color .3s;display:flex;flex-direction:column;">
                    <div style="position:relative;aspect-ratio:4/3;overflow:hidden;"><img decoding="async"
                            src="<?php echo $base_url; ?>/assets/images/2026/07/steam-sauna.jpg"
                            alt="Steam &amp; Sauna" loading="lazy"
                            style="width:100%;height:100%;object-fit:cover;display:block;transition:transform .6s;" />
                        <div style="position:absolute;inset:0;background:linear-gradient(to top,rgba(1,3,3,.75),transparent);"></div><span
                            style="position:absolute;top:10px;left:12px;font-family:'Barlow', Inter, sans-serif;font-size:9px;font-weight:600;text-transform:uppercase;letter-spacing:2px;color:#37c080;">Wellness</span>
                    </div>
                    <div style="padding:16px 16px 18px;flex:1;display:flex;flex-direction:column;gap:6px;">
                        <div style="font-family:'Bebas Neue', Impact, sans-serif;font-size:20px;text-transform:uppercase;color:#f4f2ea;line-height:1.05;">Steam &amp; Sauna</div>
                        <div style="font-family:'Barlow', Inter, sans-serif;font-size:11px;text-transform:uppercase;letter-spacing:1.5px;color:#9b998b;">Heat Therapy</div>
                        <a href="pages/cryotherapy.php" style="margin-top:auto;padding-top:12px;font-family:'Barlow', Inter, sans-serif;font-size:10px;font-weight:600;text-transform:uppercase;letter-spacing:2px;color:#37c080;text-decoration:none;">Explore →</a>
                    </div>
                </div>
                                <div class="fbs-card" data-idx="17"
                    style="flex:0 0 calc(100%/4 - 13px);width:calc(100%/4 - 13px);min-width:0;background:#0d1717;border:1px solid rgba(255,255,255,0.14);overflow:hidden;transition:border-color .3s;display:flex;flex-direction:column;">
                    <div style="position:relative;aspect-ratio:4/3;overflow:hidden;"><img decoding="async"
                            src="<?php echo $base_url; ?>/assets/images/2026/07/Nutrition-Diet.png"
                            alt="Nutrition &amp; Diet" loading="lazy"
                            style="width:100%;height:100%;object-fit:cover;display:block;transition:transform .6s;" />
                        <div style="position:absolute;inset:0;background:linear-gradient(to top,rgba(1,3,3,.75),transparent);"></div><span
                            style="position:absolute;top:10px;left:12px;font-family:'Barlow', Inter, sans-serif;font-size:9px;font-weight:600;text-transform:uppercase;letter-spacing:2px;color:#37c080;">Lifestyle</span>
                    </div>
                    <div style="padding:16px 16px 18px;flex:1;display:flex;flex-direction:column;gap:6px;">
                        <div style="font-family:'Bebas Neue', Impact, sans-serif;font-size:20px;text-transform:uppercase;color:#f4f2ea;line-height:1.05;">Nutrition &amp; Diet</div>
                        <div style="font-family:'Barlow', Inter, sans-serif;font-size:11px;text-transform:uppercase;letter-spacing:1.5px;color:#9b998b;">Consultation</div>
                        <a href="pages/health-cafe.php" style="margin-top:auto;padding-top:12px;font-family:'Barlow', Inter, sans-serif;font-size:10px;font-weight:600;text-transform:uppercase;letter-spacing:2px;color:#37c080;text-decoration:none;">Explore →</a>
                    </div>
                </div>
                                <div class="fbs-card" data-idx="18"
                    style="flex:0 0 calc(100%/4 - 13px);width:calc(100%/4 - 13px);min-width:0;background:#0d1717;border:1px solid rgba(255,255,255,0.14);overflow:hidden;transition:border-color .3s;display:flex;flex-direction:column;">
                    <div style="position:relative;aspect-ratio:4/3;overflow:hidden;"><img decoding="async"
                            src="<?php echo $base_url; ?>/assets/images/2026/07/IMG_0616-scaled.webp"
                            alt="Salon" loading="lazy"
                            style="width:100%;height:100%;object-fit:cover;display:block;transition:transform .6s;" />
                        <div style="position:absolute;inset:0;background:linear-gradient(to top,rgba(1,3,3,.75),transparent);"></div><span
                            style="position:absolute;top:10px;left:12px;font-family:'Barlow', Inter, sans-serif;font-size:9px;font-weight:600;text-transform:uppercase;letter-spacing:2px;color:#37c080;">Lifestyle</span>
                    </div>
                    <div style="padding:16px 16px 18px;flex:1;display:flex;flex-direction:column;gap:6px;">
                        <div style="font-family:'Bebas Neue', Impact, sans-serif;font-size:20px;text-transform:uppercase;color:#f4f2ea;line-height:1.05;">Salon</div>
                        <div style="font-family:'Barlow', Inter, sans-serif;font-size:11px;text-transform:uppercase;letter-spacing:1.5px;color:#9b998b;">Grooming</div>
                        <a href="pages/dermatology.php" style="margin-top:auto;padding-top:12px;font-family:'Barlow', Inter, sans-serif;font-size:10px;font-weight:600;text-transform:uppercase;letter-spacing:2px;color:#37c080;text-decoration:none;">Explore →</a>
                    </div>
                </div>
                                <div class="fbs-card" data-idx="19"
                    style="flex:0 0 calc(100%/4 - 13px);width:calc(100%/4 - 13px);min-width:0;background:#0d1717;border:1px solid rgba(255,255,255,0.14);overflow:hidden;transition:border-color .3s;display:flex;flex-direction:column;">
                    <div style="position:relative;aspect-ratio:4/3;overflow:hidden;"><img decoding="async"
                            src="<?php echo $base_url; ?>/assets/images/2026/07/IMG_0632-scaled.webp"
                            alt="EatBliss Café" loading="lazy"
                            style="width:100%;height:100%;object-fit:cover;display:block;transition:transform .6s;" />
                        <div style="position:absolute;inset:0;background:linear-gradient(to top,rgba(1,3,3,.75),transparent);"></div><span
                            style="position:absolute;top:10px;left:12px;font-family:'Barlow', Inter, sans-serif;font-size:9px;font-weight:600;text-transform:uppercase;letter-spacing:2px;color:#37c080;">Lifestyle</span>
                    </div>
                    <div style="padding:16px 16px 18px;flex:1;display:flex;flex-direction:column;gap:6px;">
                        <div style="font-family:'Bebas Neue', Impact, sans-serif;font-size:20px;text-transform:uppercase;color:#f4f2ea;line-height:1.05;">EatBliss Café</div>
                        <div style="font-family:'Barlow', Inter, sans-serif;font-size:11px;text-transform:uppercase;letter-spacing:1.5px;color:#9b998b;">Healthy Food</div>
                        <a href="pages/health-cafe.php" style="margin-top:auto;padding-top:12px;font-family:'Barlow', Inter, sans-serif;font-size:10px;font-weight:600;text-transform:uppercase;letter-spacing:2px;color:#37c080;text-decoration:none;">Explore →</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Dots + counter -->
        <div class="fbs-footer">
            <!-- Dots: visible on tablet/desktop, hidden on mobile via CSS -->
            <div id="fbDots">
                <button onclick="fbGoSlide(0)"  data-dot="0"  style="width:32px;height:3px;border:none;padding:0;cursor:pointer;border-radius:999px;background:#37c080;transition:all .3s;flex-shrink:0;"></button>
                <button onclick="fbGoSlide(1)"  data-dot="1"  style="width:18px;height:3px;border:none;padding:0;cursor:pointer;border-radius:999px;background:rgba(244,242,234,0.2);transition:all .3s;flex-shrink:0;"></button>
                <button onclick="fbGoSlide(2)"  data-dot="2"  style="width:18px;height:3px;border:none;padding:0;cursor:pointer;border-radius:999px;background:rgba(244,242,234,0.2);transition:all .3s;flex-shrink:0;"></button>
                <button onclick="fbGoSlide(3)"  data-dot="3"  style="width:18px;height:3px;border:none;padding:0;cursor:pointer;border-radius:999px;background:rgba(244,242,234,0.2);transition:all .3s;flex-shrink:0;"></button>
                <button onclick="fbGoSlide(4)"  data-dot="4"  style="width:18px;height:3px;border:none;padding:0;cursor:pointer;border-radius:999px;background:rgba(244,242,234,0.2);transition:all .3s;flex-shrink:0;"></button>
                <button onclick="fbGoSlide(5)"  data-dot="5"  style="width:18px;height:3px;border:none;padding:0;cursor:pointer;border-radius:999px;background:rgba(244,242,234,0.2);transition:all .3s;flex-shrink:0;"></button>
                <button onclick="fbGoSlide(6)"  data-dot="6"  style="width:18px;height:3px;border:none;padding:0;cursor:pointer;border-radius:999px;background:rgba(244,242,234,0.2);transition:all .3s;flex-shrink:0;"></button>
                <button onclick="fbGoSlide(7)"  data-dot="7"  style="width:18px;height:3px;border:none;padding:0;cursor:pointer;border-radius:999px;background:rgba(244,242,234,0.2);transition:all .3s;flex-shrink:0;"></button>
                <button onclick="fbGoSlide(8)"  data-dot="8"  style="width:18px;height:3px;border:none;padding:0;cursor:pointer;border-radius:999px;background:rgba(244,242,234,0.2);transition:all .3s;flex-shrink:0;"></button>
                <button onclick="fbGoSlide(9)"  data-dot="9"  style="width:18px;height:3px;border:none;padding:0;cursor:pointer;border-radius:999px;background:rgba(244,242,234,0.2);transition:all .3s;flex-shrink:0;"></button>
                <button onclick="fbGoSlide(10)" data-dot="10" style="width:18px;height:3px;border:none;padding:0;cursor:pointer;border-radius:999px;background:rgba(244,242,234,0.2);transition:all .3s;flex-shrink:0;"></button>
                <button onclick="fbGoSlide(11)" data-dot="11" style="width:18px;height:3px;border:none;padding:0;cursor:pointer;border-radius:999px;background:rgba(244,242,234,0.2);transition:all .3s;flex-shrink:0;"></button>
                <button onclick="fbGoSlide(12)" data-dot="12" style="width:18px;height:3px;border:none;padding:0;cursor:pointer;border-radius:999px;background:rgba(244,242,234,0.2);transition:all .3s;flex-shrink:0;"></button>
                <button onclick="fbGoSlide(13)" data-dot="13" style="width:18px;height:3px;border:none;padding:0;cursor:pointer;border-radius:999px;background:rgba(244,242,234,0.2);transition:all .3s;flex-shrink:0;"></button>
                <button onclick="fbGoSlide(14)" data-dot="14" style="width:18px;height:3px;border:none;padding:0;cursor:pointer;border-radius:999px;background:rgba(244,242,234,0.2);transition:all .3s;flex-shrink:0;"></button>
                <button onclick="fbGoSlide(15)" data-dot="15" style="width:18px;height:3px;border:none;padding:0;cursor:pointer;border-radius:999px;background:rgba(244,242,234,0.2);transition:all .3s;flex-shrink:0;"></button>
                <button onclick="fbGoSlide(16)" data-dot="16" style="width:18px;height:3px;border:none;padding:0;cursor:pointer;border-radius:999px;background:rgba(244,242,234,0.2);transition:all .3s;flex-shrink:0;"></button>
                <button onclick="fbGoSlide(17)" data-dot="17" style="width:18px;height:3px;border:none;padding:0;cursor:pointer;border-radius:999px;background:rgba(244,242,234,0.2);transition:all .3s;flex-shrink:0;"></button>
                <button onclick="fbGoSlide(18)" data-dot="18" style="width:18px;height:3px;border:none;padding:0;cursor:pointer;border-radius:999px;background:rgba(244,242,234,0.2);transition:all .3s;flex-shrink:0;"></button>
                <button onclick="fbGoSlide(19)" data-dot="19" style="width:18px;height:3px;border:none;padding:0;cursor:pointer;border-radius:999px;background:rgba(244,242,234,0.2);transition:all .3s;flex-shrink:0;"></button>
            </div>
            <span id="fbCount"
                style="font-family:'Barlow', Inter, sans-serif;font-size:11px;text-transform:uppercase;letter-spacing:2.5px;color:#9b998b;white-space:nowrap;">
                01 / 20
            </span>
        </div>
    </div>
</div>

<script>
    (function () {
        var track = document.getElementById('fbTrack');
        var dots = document.querySelectorAll('#fbDots button');
        var counter = document.getElementById('fbCount');
        var cur = 0;
        var timer = null;

        var origCards = Array.from(track.querySelectorAll('.fbs-card')).filter(function (card) {
            var idx = parseInt(card.getAttribute('data-idx'), 10);
            return !isNaN(idx) && idx < 20;
        });

        var realCards = origCards.length || 20;
        var cloneCount = 6;

        track.innerHTML = '';

        for (var i = realCards - cloneCount; i < realCards; i++) {
            var clone = origCards[i].cloneNode(true);
            clone.classList.add('fbs-clone');
            track.appendChild(clone);
        }

        origCards.forEach(function (card) {
            track.appendChild(card);
        });

        for (var j = 0; j < cloneCount; j++) {
            var clone = origCards[j].cloneNode(true);
            clone.classList.add('fbs-clone');
            track.appendChild(clone);
        }

        function getShowCount() {
            var w = window.innerWidth;
            if (w < 600) return 1;
            if (w < 900) return 2;
            if (w < 1200) return 3;
            return 4;
        }

        function cardW() {
            var show = getShowCount();
            var gap = 17;
            var vp = track.parentElement.offsetWidth;
            return (vp - (show - 1) * gap) / show;
        }

        function updateCardWidths() {
            var show = getShowCount();
            var gap = 17;
            var cards = track.querySelectorAll('.fbs-card');
            cards.forEach(function (card) {
                card.style.flex = '0 0 calc(100%/' + show + ' - ' + ((show - 1) * gap / show) + 'px)';
                card.style.width = 'calc(100%/' + show + ' - ' + ((show - 1) * gap / show) + 'px)';
            });
        }

        function goTo(idx, animate) {
            cur = idx;
            var cw = cardW();
            var gap = 17;
            var physicalIdx = cur + cloneCount;
            var tx = physicalIdx * (cw + gap);

            if (animate === false) {
                track.style.transition = 'none';
            } else {
                track.style.transition = 'transform 0.55s cubic-bezier(0.4, 0, 0.2, 1)';
            }
            track.style.transform = 'translateX(-' + tx + 'px)';

            var realIdx = ((cur % realCards) + realCards) % realCards;
            if (dots && dots.length) {
                dots.forEach(function (d, i) {
                    if (i === realIdx) {
                        d.style.width = '32px';
                        d.style.background = '#37c080';
                    } else {
                        d.style.width = '18px';
                        d.style.background = 'rgba(244, 242, 234, 0.2)';
                    }
                });
            }
            if (counter) {
                counter.textContent = String(realIdx + 1).padStart(2, '0') + ' / ' + String(realCards).padStart(2, '0');
            }
        }

        track.addEventListener('transitionend', function () {
            if (cur >= realCards) {
                cur = cur % realCards;
                goTo(cur, false);
            } else if (cur < 0) {
                cur = ((cur % realCards) + realCards) % realCards;
                goTo(cur, false);
            }
        });

        window.fbSlide = function (dir) {
            stopAuto();
            goTo(cur + dir, true);
            startAuto();
        };

        window.fbGoSlide = function (idx) {
            stopAuto();
            goTo(idx, true);
            startAuto();
        };

        function startAuto() {
            stopAuto();
            timer = setInterval(function () {
                goTo(cur + 1, true);
            }, 3500);
        }

        function stopAuto() {
            if (timer) {
                clearInterval(timer);
                timer = null;
            }
        }

        var startX = 0;
        var currentX = 0;
        var isDragging = false;

        track.addEventListener('touchstart', function (e) {
            stopAuto();
            startX = e.touches[0].clientX;
            currentX = startX;
            isDragging = true;
        }, { passive: true });

        track.addEventListener('touchmove', function (e) {
            if (!isDragging) return;
            currentX = e.touches[0].clientX;
        }, { passive: true });

        track.addEventListener('touchend', function () {
            if (!isDragging) return;
            isDragging = false;
            var diffX = startX - currentX;
            if (Math.abs(diffX) > 40) {
                if (diffX > 0) {
                    fbSlide(1);
                } else {
                    fbSlide(-1);
                }
            } else {
                startAuto();
            }
        }, { passive: true });

        function init() {
            updateCardWidths();
            goTo(0, false);
            startAuto();
        }

        window.addEventListener('resize', function () {
            updateCardWidths();
            goTo(cur, false);
        });

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', init);
        } else {
            init();
        }
    })();
</script>				</div>
				</div>
				</div>
<style>
/* ==================== THE STUDIO REDESIGN ==================== */
.fbs-studio-section {
    position: relative !important;
    padding: 100px 48px !important;
    max-width: 1400px !important;
    margin: 0 auto !important;
    display: flex !important;
    flex-direction: row !important;
    justify-content: space-between !important;
    align-items: flex-start !important;
    gap: 48px !important;
    box-sizing: border-box !important;
    overflow: hidden !important;
    background-image: url('<?php echo $base_url; ?>/assets/images/2026/07/DSC_3558-scaled-1.jpg') !important;
    background-size: cover !important;
    background-position: center !important;
}

.fbs-studio-section::before {
    content: '' !important;
    position: absolute !important;
    inset: 0 !important;
    background: linear-gradient(135deg, rgba(6, 14, 14, 0.93) 0%, rgba(9, 18, 18, 0.86) 50%, rgba(6, 14, 14, 0.95) 100%) !important;
    z-index: 1 !important;
    pointer-events: none !important;
}

.fbs-studio-section > * {
    position: relative !important;
    z-index: 2 !important;
}

/* Left Column */
.fbs-studio-left {
    flex: 0 0 38% !important;
    max-width: 38% !important;
    display: flex !important;
    flex-direction: column !important;
    align-items: flex-start !important;
}

.fbs-studio-tag {
    display: inline-flex !important;
    align-items: center !important;
    gap: 10px !important;
    font-family: 'Barlow', Inter, sans-serif !important;
    font-size: 12px !important;
    font-weight: 700 !important;
    text-transform: uppercase !important;
    letter-spacing: 3px !important;
    color: #37c080 !important;
    margin-bottom: 20px !important;
}

.fbs-tag-line {
    display: inline-block !important;
    width: 24px !important;
    height: 2px !important;
    background: #37c080 !important;
}

.fbs-studio-heading {
    font-family: 'Bebas Neue', Impact, sans-serif !important;
    font-size: clamp(2.8rem, 4.6vw, 4.4rem) !important;
    line-height: 0.96 !important;
    letter-spacing: 1.5px !important;
    color: #f4ead5 !important;
    text-transform: uppercase !important;
    margin: 0 !important;
    font-weight: 400 !important;
}

.fbs-heading-green {
    color: #37c080 !important;
    text-shadow: 0 0 35px rgba(55, 192, 128, 0.35) !important;
}

.fbs-heading-accent-line {
    width: 56px !important;
    height: 2px !important;
    background: linear-gradient(90deg, #37c080, transparent) !important;
    margin-top: 24px !important;
}

/* Right Column */
.fbs-studio-right {
    flex: 0 0 58% !important;
    max-width: 58% !important;
    display: flex !important;
    flex-direction: column !important;
    gap: 26px !important;
}

.fbs-studio-narrative-card {
    background: rgba(13, 23, 23, 0.65) !important;
    border: 1px solid rgba(255, 255, 255, 0.08) !important;
    border-left: 3px solid #37c080 !important;
    padding: 24px 28px !important;
    backdrop-filter: blur(14px) !important;
    -webkit-backdrop-filter: blur(14px) !important;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4) !important;
}

.fbs-narrative-lead {
    font-family: 'Barlow', Inter, sans-serif !important;
    font-size: 15.5px !important;
    line-height: 1.75 !important;
    color: #e5e1d3 !important;
    margin: 0 0 14px 0 !important;
    font-weight: 400 !important;
}

.fbs-highlight-brand {
    color: #37c080 !important;
    font-weight: 600 !important;
}

.fbs-narrative-sub {
    font-family: 'Barlow', Inter, sans-serif !important;
    font-size: 14.5px !important;
    line-height: 1.7 !important;
    color: #9b998b !important;
    margin: 0 !important;
}

.fbs-tag-punch {
    color: #f4ead5 !important;
    font-weight: 600 !important;
}

/* 4 Stat Cards Row */
.fbs-stats-grid,
.elementor-element.elementor-element-64b8459,
div[data-id="64b8459"] {
    display: grid !important;
    grid-template-columns: repeat(4, 1fr) !important;
    gap: 14px !important;
    width: 100% !important;
}

.fbs-stat-box {
    position: relative !important;
    background: rgba(13, 23, 23, 0.75) !important;
    border: 1px solid rgba(255, 255, 255, 0.12) !important;
    border-radius: 0px !important;
    padding: 22px 14px 18px !important;
    text-align: center !important;
    backdrop-filter: blur(16px) !important;
    -webkit-backdrop-filter: blur(16px) !important;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.4) !important;
    transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1) !important;
    cursor: default !important;
    overflow: hidden !important;
    display: flex !important;
    flex-direction: column !important;
    align-items: center !important;
    justify-content: center !important;
}

.fbs-stat-top-bar {
    position: absolute !important;
    top: 0 !important;
    left: 0 !important;
    right: 0 !important;
    height: 2px !important;
    background: transparent !important;
    transition: background 0.35s ease !important;
}

.fbs-stat-box:hover {
    transform: translateY(-5px) !important;
    border-color: #37c080 !important;
    background: rgba(18, 32, 32, 0.92) !important;
    box-shadow: 0 16px 35px rgba(0, 0, 0, 0.6), 0 0 25px rgba(55, 192, 128, 0.22) !important;
}

.fbs-stat-box:hover .fbs-stat-top-bar {
    background: #37c080 !important;
}

.fbs-stat-num {
    font-family: 'Bebas Neue', Impact, sans-serif !important;
    font-size: clamp(34px, 3vw, 44px) !important;
    line-height: 1 !important;
    color: #37c080 !important;
    letter-spacing: 1px !important;
    text-shadow: 0 0 20px rgba(55, 192, 128, 0.25) !important;
    transition: transform 0.3s ease, color 0.3s ease !important;
}

.fbs-stat-box:hover .fbs-stat-num {
    color: #5eeaa8 !important;
    transform: scale(1.05) !important;
}

.fbs-stat-star {
    font-size: 20px !important;
    vertical-align: top !important;
    margin-left: 2px !important;
    color: #ffb800 !important;
}

.fbs-stat-label {
    font-family: 'Barlow', Inter, sans-serif !important;
    font-size: 11px !important;
    font-weight: 600 !important;
    text-transform: uppercase !important;
    letter-spacing: 1.5px !important;
    color: #a7a294 !important;
    margin-top: 8px !important;
    line-height: 1.3 !important;
    transition: color 0.3s ease !important;
}

.fbs-stat-box:hover .fbs-stat-label {
    color: #f4ead5 !important;
}

/* Tablet & Mobile Responsiveness */
@media (max-width: 1024px) {
    .fbs-studio-section {
        flex-direction: column !important;
        padding: 70px 30px !important;
        gap: 36px !important;
    }
    .fbs-studio-left {
        flex: 0 0 100% !important;
        max-width: 100% !important;
    }
    .fbs-studio-right {
        flex: 0 0 100% !important;
        max-width: 100% !important;
    }
    .fbs-stats-grid,
    .elementor-element.elementor-element-64b8459,
    div[data-id="64b8459"] {
        grid-template-columns: repeat(4, 1fr) !important;
    }
}

@media (max-width: 767px) {
    .fbs-studio-section {
        padding: 50px 20px !important;
        gap: 28px !important;
    }
    .fbs-studio-narrative-card {
        padding: 20px 18px !important;
    }
    .fbs-stats-grid,
    .elementor-element.elementor-element-64b8459,
    div[data-id="64b8459"] {
        grid-template-columns: repeat(2, 1fr) !important;
        gap: 12px !important;
    }
}
</style>

		<div class="elementor-element elementor-element-7b5f975f e-con-full e-flex e-con e-child fbs-studio-section" data-id="7b5f975f" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;slideshow&quot;,&quot;background_slideshow_gallery&quot;:[{&quot;id&quot;:&quot;20286&quot;,&quot;url&quot;:&quot;<?php echo $base_url; ?>/assets/images/2026/07/DSC_3558-scaled-1.jpg&quot;}],&quot;background_slideshow_loop&quot;:&quot;yes&quot;,&quot;background_slideshow_slide_duration&quot;:5000,&quot;background_slideshow_slide_transition&quot;:&quot;fade&quot;,&quot;background_slideshow_transition_duration&quot;:500}">
		
		<!-- Left: Tag & Heading -->
		<div class="elementor-element elementor-element-47567139 e-con-full e-flex e-con e-child fbs-studio-left" data-id="47567139" data-element_type="container" data-e-type="container">
			<div class="elementor-element elementor-element-340a478 elementor-widget elementor-widget-text-editor" data-id="340a478" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
					<div class="fbs-studio-tag">
						<span class="fbs-tag-line"></span>THE STUDIO
					</div>
				</div>
			</div>
			<div class="elementor-element elementor-element-9d4763d elementor-widget elementor-widget-heading" data-id="9d4763d" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default fbs-studio-heading">
						A gym that refuses<br /><span class="fbs-heading-green">to feel like a gym.</span>
					</h2>
					<div class="fbs-heading-accent-line"></div>
				</div>
			</div>
		</div>

		<!-- Right: Narrative & 4 Stat Cards -->
		<div class="elementor-element elementor-element-5b38cd74 e-con-full e-flex e-con e-child fbs-studio-right" data-id="5b38cd74" data-element_type="container" data-e-type="container">
			<div class="fbs-studio-narrative-card">
				<p class="fbs-narrative-lead">
					<strong class="fbs-highlight-brand">Fitbliss</strong> is Shruti Kapoor&#8217;s answer to the loud, mirrored, protein-shake box every Indian city keeps building. We took the equipment seriously and everything else slower — warm materials, honest lighting, coaches who remember your name and your last PR.
				</p>
				<p class="fbs-narrative-sub">
					Whether you walked in for a wedding, for your first deadlift, or because your back finally stopped bluffing — this room is built to hold that. <span class="fbs-tag-punch">No judgment, no upsell.</span>
				</p>
			</div>

			<!-- 4 Stat Cards Row -->
			<div class="elementor-element elementor-element-64b8459 e-con-full e-flex e-con e-child fbs-stats-grid" data-id="64b8459" data-element_type="container" data-e-type="container">
				
				<!-- Stat 1 -->
				<div class="elementor-element elementor-element-192653c5 fbs-stat-box" data-id="192653c5">
					<div class="fbs-stat-top-bar"></div>
					<div class="fbs-stat-num">3500+</div>
					<div class="fbs-stat-label">Members Trained</div>
				</div>

				<!-- Stat 2 -->
				<div class="elementor-element elementor-element-46831fc3 fbs-stat-box" data-id="46831fc3">
					<div class="fbs-stat-top-bar"></div>
					<div class="fbs-stat-num">30+</div>
					<div class="fbs-stat-label">Certified Coaches</div>
				</div>

				<!-- Stat 3 -->
				<div class="elementor-element elementor-element-629632de fbs-stat-box" data-id="629632de">
					<div class="fbs-stat-top-bar"></div>
					<div class="fbs-stat-num">2+</div>
					<div class="fbs-stat-label">Years In Bhopal</div>
				</div>

				<!-- Stat 4 -->
				<div class="elementor-element elementor-element-72b7768b fbs-stat-box" data-id="72b7768b">
					<div class="fbs-stat-top-bar"></div>
					<div class="fbs-stat-num">4.5<span class="fbs-stat-star">★</span></div>
					<div class="fbs-stat-label">Avg. Google Rating</div>
				</div>

			</div>
		</div>

		</div>
<style>
/* ==================== MEET THE FOUNDER REDESIGN ==================== */
.fbs-founder-section {
    position: relative !important;
    padding: 100px 48px !important;
    max-width: 1400px !important;
    margin: 0 auto !important;
    display: flex !important;
    flex-direction: row !important;
    justify-content: space-between !important;
    align-items: center !important;
    gap: 56px !important;
    box-sizing: border-box !important;
    background: radial-gradient(ellipse at 18% 50%, rgba(14, 28, 28, 0.55) 0%, rgba(6, 14, 14, 0.98) 70%), #060e0e !important;
}

/* Left: Founder Card */
.fbs-founder-left {
    flex: 0 0 42% !important;
    max-width: 440px !important;
    display: flex !important;
    justify-content: center !important;
    width: 100% !important;
}

.fbs-founder-frame {
    position: relative !important;
    width: 100% !important;
    aspect-ratio: 4 / 4.9 !important;
    background: #0d1717 !important;
    border: 1px solid rgba(255, 255, 255, 0.14) !important;
    border-radius: 0px !important;
    overflow: hidden !important;
    box-shadow: 0 20px 45px rgba(0, 0, 0, 0.6) !important;
    transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1) !important;
}

.fbs-founder-frame:hover {
    border-color: #37c080 !important;
    box-shadow: 0 25px 55px rgba(0, 0, 0, 0.75), 0 0 30px rgba(55, 192, 128, 0.22) !important;
    transform: translateY(-4px) !important;
}

.fbs-founder-img {
    width: 100% !important;
    height: 100% !important;
    object-fit: cover !important;
    object-position: center 15% !important;
    display: block !important;
    transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1) !important;
}

.fbs-founder-frame:hover .fbs-founder-img {
    transform: scale(1.04) !important;
}

.fbs-founder-badge {
    position: absolute !important;
    left: 0 !important;
    right: 0 !important;
    bottom: 0 !important;
    background: linear-gradient(to top, rgba(6, 14, 14, 0.98) 0%, rgba(6, 14, 14, 0.88) 65%, transparent 100%) !important;
    backdrop-filter: blur(8px) !important;
    -webkit-backdrop-filter: blur(8px) !important;
    border-top: 1px solid rgba(55, 192, 128, 0.25) !important;
    padding: 22px 24px 18px !important;
}

.fbs-founder-badge-tag {
    font-family: 'Barlow', Inter, sans-serif !important;
    font-size: 11px !important;
    font-weight: 700 !important;
    letter-spacing: 2.5px !important;
    text-transform: uppercase !important;
    color: #37c080 !important;
    margin-bottom: 4px !important;
}

.fbs-founder-badge-name {
    font-family: 'Bebas Neue', Impact, sans-serif !important;
    font-size: 28px !important;
    letter-spacing: 1.5px !important;
    text-transform: uppercase !important;
    color: #f4ead5 !important;
    line-height: 1.05 !important;
    margin: 0 0 4px 0 !important;
}

.fbs-founder-badge-sub {
    font-family: 'Barlow', Inter, sans-serif !important;
    font-size: 10.5px !important;
    font-weight: 600 !important;
    letter-spacing: 1.5px !important;
    text-transform: uppercase !important;
    color: #37c080 !important;
}

/* Right: Founder Details */
.fbs-founder-right {
    flex: 0 0 54% !important;
    max-width: 54% !important;
    display: flex !important;
    flex-direction: column !important;
    gap: 22px !important;
    width: 100% !important;
}

.fbs-founder-tag {
    display: inline-flex !important;
    align-items: center !important;
    gap: 10px !important;
    font-family: 'Barlow', Inter, sans-serif !important;
    font-size: 12px !important;
    font-weight: 700 !important;
    text-transform: uppercase !important;
    letter-spacing: 3px !important;
    color: #37c080 !important;
    margin: 0 !important;
}

.fbs-founder-tag-line {
    display: inline-block !important;
    width: 24px !important;
    height: 2px !important;
    background: #37c080 !important;
}

.fbs-founder-heading {
    font-family: 'Bebas Neue', Impact, sans-serif !important;
    font-size: clamp(2.6rem, 4.2vw, 4.2rem) !important;
    line-height: 0.98 !important;
    letter-spacing: 1.5px !important;
    color: #f4ead5 !important;
    text-transform: uppercase !important;
    margin: 0 !important;
    font-weight: 400 !important;
}

.fbs-founder-green {
    color: #37c080 !important;
    text-shadow: 0 0 35px rgba(55, 192, 128, 0.35) !important;
}

.fbs-founder-accent-line {
    width: 56px !important;
    height: 2px !important;
    background: linear-gradient(90deg, #37c080, transparent) !important;
    margin-top: 18px !important;
}

.fbs-founder-narrative {
    background: rgba(13, 23, 23, 0.5) !important;
    border: 1px solid rgba(255, 255, 255, 0.08) !important;
    border-left: 3px solid #37c080 !important;
    padding: 22px 26px !important;
    backdrop-filter: blur(12px) !important;
    -webkit-backdrop-filter: blur(12px) !important;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3) !important;
}

.fbs-founder-p1 {
    font-family: 'Barlow', Inter, sans-serif !important;
    font-size: 15.5px !important;
    line-height: 1.75 !important;
    color: #e5e1d3 !important;
    margin: 0 0 12px 0 !important;
}

.fbs-founder-p2 {
    font-family: 'Barlow', Inter, sans-serif !important;
    font-size: 14.5px !important;
    line-height: 1.7 !important;
    color: #9b998b !important;
    margin: 0 !important;
}

/* 3 Stat Cards Row */
.fbs-founder-stats,
.elementor-element.elementor-element-6222ead1,
div[data-id="6222ead1"] {
    display: grid !important;
    grid-template-columns: repeat(3, 1fr) !important;
    gap: 14px !important;
    width: 100% !important;
    margin: 4px 0 !important;
    background: transparent !important;
    border: none !important;
}

.fbs-founder-stat-box {
    position: relative !important;
    background: rgba(13, 23, 23, 0.72) !important;
    border: 1px solid rgba(255, 255, 255, 0.12) !important;
    border-radius: 0px !important;
    padding: 20px 16px 16px !important;
    text-align: center !important;
    backdrop-filter: blur(14px) !important;
    -webkit-backdrop-filter: blur(14px) !important;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.35) !important;
    transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1) !important;
    cursor: default !important;
    overflow: hidden !important;
    display: flex !important;
    flex-direction: column !important;
    align-items: center !important;
    justify-content: center !important;
}

.fbs-founder-stat-bar {
    position: absolute !important;
    top: 0 !important;
    left: 0 !important;
    right: 0 !important;
    height: 2px !important;
    background: transparent !important;
    transition: background 0.35s ease !important;
}

.fbs-founder-stat-box:hover {
    transform: translateY(-4px) !important;
    border-color: #37c080 !important;
    background: rgba(18, 32, 32, 0.9) !important;
    box-shadow: 0 16px 35px rgba(0, 0, 0, 0.6), 0 0 25px rgba(55, 192, 128, 0.2) !important;
}

.fbs-founder-stat-box:hover .fbs-founder-stat-bar {
    background: #37c080 !important;
}

.fbs-founder-stat-val {
    font-family: 'Bebas Neue', Impact, sans-serif !important;
    font-size: clamp(30px, 2.6vw, 38px) !important;
    line-height: 1 !important;
    color: #37c080 !important;
    letter-spacing: 1px !important;
    text-shadow: 0 0 20px rgba(55, 192, 128, 0.25) !important;
    transition: transform 0.3s ease, color 0.3s ease !important;
}

.fbs-founder-stat-box:hover .fbs-founder-stat-val {
    color: #5eeaa8 !important;
    transform: scale(1.05) !important;
}

.fbs-founder-stat-lbl {
    font-family: 'Barlow', Inter, sans-serif !important;
    font-size: 11px !important;
    font-weight: 600 !important;
    text-transform: uppercase !important;
    letter-spacing: 1.5px !important;
    color: #a7a294 !important;
    margin-top: 6px !important;
    line-height: 1.3 !important;
    transition: color 0.3s ease !important;
}

.fbs-founder-stat-box:hover .fbs-founder-stat-lbl {
    color: #f4ead5 !important;
}

/* Action Buttons */
.fbs-founder-actions {
    display: flex !important;
    flex-wrap: wrap !important;
    align-items: center !important;
    gap: 16px !important;
    margin-top: 6px !important;
}

.fbs-btn-primary {
    display: inline-flex !important;
    align-items: center !important;
    justify-content: center !important;
    background: #37c080 !important;
    color: #060e0e !important;
    font-family: 'Barlow', Inter, sans-serif !important;
    font-size: 12px !important;
    font-weight: 700 !important;
    letter-spacing: 2px !important;
    text-transform: uppercase !important;
    padding: 14px 28px !important;
    border: 1px solid #37c080 !important;
    border-radius: 0px !important;
    text-decoration: none !important;
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1) !important;
}

.fbs-btn-primary:hover {
    background: #5eeaa8 !important;
    border-color: #5eeaa8 !important;
    color: #060e0e !important;
    transform: translateY(-2px) !important;
    box-shadow: 0 10px 25px rgba(55, 192, 128, 0.4) !important;
}

.fbs-btn-outline {
    display: inline-flex !important;
    align-items: center !important;
    justify-content: center !important;
    background: transparent !important;
    color: #f4ead5 !important;
    font-family: 'Barlow', Inter, sans-serif !important;
    font-size: 12px !important;
    font-weight: 600 !important;
    letter-spacing: 2px !important;
    text-transform: uppercase !important;
    padding: 14px 28px !important;
    border: 1px solid rgba(255, 255, 255, 0.25) !important;
    border-radius: 0px !important;
    text-decoration: none !important;
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1) !important;
}

.fbs-btn-outline:hover {
    border-color: #37c080 !important;
    color: #37c080 !important;
    background: rgba(55, 192, 128, 0.08) !important;
    transform: translateY(-2px) !important;
}

/* Tablet & Mobile */
@media (max-width: 1024px) {
    .fbs-founder-section {
        flex-direction: column !important;
        padding: 70px 30px !important;
        gap: 40px !important;
        align-items: stretch !important;
    }
    .fbs-founder-left {
        flex: 0 0 100% !important;
        max-width: 440px !important;
        margin: 0 auto !important;
    }
    .fbs-founder-right {
        flex: 0 0 100% !important;
        max-width: 100% !important;
    }
}

@media (max-width: 767px) {
    .fbs-founder-section {
        padding: 50px 20px !important;
        gap: 32px !important;
    }
    .fbs-founder-narrative {
        padding: 18px 16px !important;
    }
    .fbs-founder-stats,
    .elementor-element.elementor-element-6222ead1,
    div[data-id="6222ead1"] {
        grid-template-columns: repeat(1, 1fr) !important;
        gap: 10px !important;
    }
    .fbs-founder-actions {
        flex-direction: column !important;
        align-items: stretch !important;
    }
    .fbs-btn-primary, .fbs-btn-outline {
        width: 100% !important;
        text-align: center !important;
    }
}
</style>

		<div class="elementor-element elementor-element-511672fc e-con-full e-flex e-con e-child fbs-founder-section" data-id="511672fc" data-element_type="container" data-e-type="container" id="founder" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
		
		<!-- Left: Founder Photo Card -->
		<div class="elementor-element elementor-element-5d995b68 e-con-full e-flex e-con e-child fbs-founder-left" data-id="5d995b68" data-element_type="container" data-e-type="container">
			<div class="elementor-element elementor-element-9e52081 e-con-full e-flex e-con e-child" data-id="9e52081" data-element_type="container" data-e-type="container" style="width:100%;">
				<div class="fbs-founder-frame">
					<img decoding="async" src="<?php echo $base_url; ?>/assets/images/2026/07/IMG-20250804-WA0081.webp" alt="Dr. Shruti Kapoor" class="fbs-founder-img" />
					<div class="fbs-founder-badge">
						<div class="fbs-founder-badge-tag">— Founder</div>
						<div class="fbs-founder-badge-name">Dr. Shruti Kapoor</div>
						<div class="fbs-founder-badge-sub">MD Radiologist · Pilates Practitioner</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Right: Details, Stats & Buttons -->
		<div class="elementor-element elementor-element-abe202e e-con-full e-flex e-con e-child fbs-founder-right" data-id="abe202e" data-element_type="container" data-e-type="container">
			
			<!-- Tag & Headline -->
			<div>
				<div class="fbs-founder-tag">
					<span class="fbs-founder-tag-line"></span>MEET THE FOUNDER
				</div>
				<h2 class="fbs-founder-heading" style="margin-top:14px;">
					A doctor's answer to <br /><span class="fbs-founder-green">wellness in Central India.</span>
				</h2>
				<div class="fbs-founder-accent-line"></div>
			</div>

			<!-- Editorial Narrative -->
			<div class="fbs-founder-narrative">
				<p class="fbs-founder-p1">
					Dr. Shruti Kapoor is a practicing MD Radiologist whose own transformation through Pilates in Mumbai — training under <strong style="color:#f4ead5;font-weight:600;">Yasmin Karachiwala</strong> — reshaped how she thought about strength, posture and long-term health.
				</p>
				<p class="fbs-founder-p2">
					Fitbliss is what happened when a clinician decided Bhopal deserved a wellness destination built on <strong style="color:#37c080;font-weight:600;">science, not slogans</strong> — a space where luxury meets longevity.
				</p>
			</div>

			<!-- 3 Sharp Stat Cards -->
			<div class="elementor-element elementor-element-6222ead1 e-con-full e-flex e-con e-child fbs-founder-stats" data-id="6222ead1" data-element_type="container" data-e-type="container">
				
				<!-- Stat 1 -->
				<div class="elementor-element elementor-element-7745fa48 fbs-founder-stat-box" data-id="7745fa48">
					<div class="fbs-founder-stat-bar"></div>
					<div class="fbs-founder-stat-val">10+</div>
					<div class="fbs-founder-stat-lbl">Yrs Pilates Experience</div>
				</div>

				<!-- Stat 2 -->
				<div class="elementor-element elementor-element-4070d189 fbs-founder-stat-box" data-id="4070d189">
					<div class="fbs-founder-stat-bar"></div>
					<div class="fbs-founder-stat-val">Mumbai</div>
					<div class="fbs-founder-stat-lbl">Trained Under Karachiwala</div>
				</div>

				<!-- Stat 3 -->
				<div class="elementor-element elementor-element-216ad80f fbs-founder-stat-box" data-id="216ad80f">
					<div class="fbs-founder-stat-bar"></div>
					<div class="fbs-founder-stat-val">1</div>
					<div class="fbs-founder-stat-lbl">Vision · Science + Luxury</div>
				</div>

			</div>

			<!-- Sharp Action Buttons -->
			<div class="elementor-element elementor-element-5e4d53f9 e-con-full e-flex e-con e-child fbs-founder-actions" data-id="5e4d53f9" data-element_type="container" data-e-type="container">
				<a class="fbs-btn-primary" href="<?php echo $base_url; ?>/founder/">
					Read her story →
				</a>
				<a class="fbs-btn-outline" href="<?php echo $base_url; ?>/about/">
					About Fitbliss
				</a>
			</div>

		</div>

		</div>
		<!-- ─── WHY FITBLISS: SIX REASONS SECTION REDESIGN ─── -->
		<style>
		.fbs-reasons-wrap {
			background: #010303 !important;
			position: relative !important;
			width: 100% !important;
			box-sizing: border-box !important;
		}

		.fbs-reasons-header {
			background: #010303 !important;
			padding: 70px 40px 30px !important;
			width: 100% !important;
			max-width: 1300px !important;
			margin: 0 auto !important;
			box-sizing: border-box !important;
		}

		.fbs-reasons-tag {
			display: inline-flex !important;
			align-items: center !important;
			gap: 10px !important;
			font-family: 'Barlow', Inter, sans-serif !important;
			font-size: 12px !important;
			font-weight: 700 !important;
			letter-spacing: 3px !important;
			text-transform: uppercase !important;
			color: #37c080 !important;
			margin-bottom: 12px !important;
		}

		.fbs-reasons-tag-line {
			display: inline-block !important;
			width: 18px !important;
			height: 2px !important;
			background: #37c080 !important;
		}

		.fbs-reasons-heading {
			font-family: 'Bebas Neue', Impact, sans-serif !important;
			font-size: clamp(38px, 4vw, 56px) !important;
			font-weight: 400 !important;
			text-transform: uppercase !important;
			line-height: 0.95 !important;
			letter-spacing: 1.5px !important;
			color: #f4ead5 !important;
			margin: 0 !important;
		}

		.fbs-reasons-green {
			color: #37c080 !important;
		}

		.fbs-reasons-accent-line {
			width: 48px !important;
			height: 2px !important;
			background: #37c080 !important;
			margin-top: 14px !important;
		}

		.fbs-reasons-section {
			position: relative !important;
			padding: 30px 40px 90px !important;
			width: 100% !important;
			box-sizing: border-box !important;
			overflow: hidden !important;
			display: flex !important;
			flex-direction: column !important;
			align-items: center !important;
			background: #050a0a !important;
		}

		.fbs-reasons-bg-wrap {
			position: absolute !important;
			inset: 0 !important;
			width: 100% !important;
			height: 100% !important;
			z-index: 0 !important;
			overflow: hidden !important;
			pointer-events: none !important;
		}

		.fbs-reasons-bg-img {
			width: 100% !important;
			height: 100% !important;
			object-fit: cover !important;
			object-position: center center !important;
			display: block !important;
			filter: brightness(0.9) contrast(1.05) !important;
		}

		.fbs-reasons-overlay {
			position: absolute !important;
			inset: 0 !important;
			background: linear-gradient(180deg, rgba(1, 3, 3, 0.75) 0%, rgba(5, 12, 12, 0.58) 50%, rgba(1, 3, 3, 0.8) 100%) !important;
			z-index: 1 !important;
			pointer-events: none !important;
		}

		.fbs-reasons-grid {
			position: relative !important;
			z-index: 2 !important;
			display: grid !important;
			grid-template-columns: repeat(3, 1fr) !important;
			gap: 24px !important;
			width: 100% !important;
			max-width: 1300px !important;
			margin: 0 auto !important;
			box-sizing: border-box !important;
			align-items: stretch !important;
		}

		.fbs-reasons-grid > div,
		.fbs-reasons-grid > .fbs-reason-card,
		.fbs-reason-card,
		.elementor-element.fbs-reason-card {
			--width: 100% !important;
			--container-widget-width: 100% !important;
			width: 100% !important;
			max-width: 100% !important;
			min-width: 0 !important;
			flex: 1 1 100% !important;
			align-self: stretch !important;
			position: relative !important;
			background: rgba(10, 18, 18, 0.82) !important;
			backdrop-filter: blur(12px) !important;
			-webkit-backdrop-filter: blur(12px) !important;
			border: 1px solid rgba(255, 255, 255, 0.14) !important;
			border-radius: 0px !important;
			padding: 34px 28px !important;
			display: flex !important;
			flex-direction: column !important;
			justify-content: flex-start !important;
			box-shadow: 0 14px 35px rgba(0, 0, 0, 0.5) !important;
			overflow: hidden !important;
			transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1) !important;
			cursor: default !important;
			box-sizing: border-box !important;
		}

		.fbs-reason-top-bar {
			position: absolute !important;
			top: 0 !important;
			left: 0 !important;
			right: 0 !important;
			height: 3px !important;
			background: transparent !important;
			transition: all 0.35s ease !important;
		}

		.fbs-reason-card:hover {
			transform: translateY(-6px) !important;
			border-color: #37c080 !important;
			background: rgba(14, 28, 28, 0.94) !important;
			box-shadow: 0 20px 45px rgba(0, 0, 0, 0.75), 0 0 25px rgba(55, 192, 128, 0.22) !important;
		}

		.fbs-reason-card:hover .fbs-reason-top-bar {
			background: #37c080 !important;
			box-shadow: 0 0 15px rgba(55, 192, 128, 0.8) !important;
		}

		.fbs-reason-num-row {
			display: flex !important;
			align-items: center !important;
			justify-content: space-between !important;
			width: 100% !important;
			margin-bottom: 14px !important;
		}

		.fbs-reason-num {
			font-family: 'Bebas Neue', Impact, sans-serif !important;
			font-size: clamp(34px, 2.5vw, 42px) !important;
			line-height: 1 !important;
			color: #37c080 !important;
			letter-spacing: 1.5px !important;
			text-shadow: 0 0 18px rgba(55, 192, 128, 0.3) !important;
			transition: transform 0.3s ease, color 0.3s ease !important;
		}

		.fbs-reason-card:hover .fbs-reason-num {
			color: #5eeaa8 !important;
			transform: scale(1.06) !important;
		}

		.fbs-reason-badge-dot {
			width: 7px !important;
			height: 7px !important;
			border: 1px solid rgba(55, 192, 128, 0.45) !important;
			background: rgba(55, 192, 128, 0.15) !important;
			border-radius: 0px !important;
			transition: all 0.3s ease !important;
		}

		.fbs-reason-card:hover .fbs-reason-badge-dot {
			background: #37c080 !important;
			border-color: #37c080 !important;
			box-shadow: 0 0 10px #37c080 !important;
		}

		.fbs-reason-title {
			font-family: 'Bebas Neue', Impact, sans-serif !important;
			font-size: 26px !important;
			letter-spacing: 1.2px !important;
			text-transform: uppercase !important;
			color: #f4ead5 !important;
			margin: 0 0 12px 0 !important;
			line-height: 1.15 !important;
			width: 100% !important;
			transition: color 0.3s ease !important;
		}

		.fbs-reason-card:hover .fbs-reason-title {
			color: #ffffff !important;
		}

		.fbs-reason-desc {
			font-family: 'Barlow', Inter, sans-serif !important;
			font-size: 15px !important;
			line-height: 1.65 !important;
			color: #a5a297 !important;
			margin: 0 !important;
			width: 100% !important;
			transition: color 0.3s ease !important;
		}

		.fbs-reason-card:hover .fbs-reason-desc {
			color: #eae5d8 !important;
		}

		/* Responsive queries */
		@media (max-width: 1024px) {
			.fbs-reasons-header {
				padding: 50px 30px 24px !important;
			}
			.fbs-reasons-section {
				padding: 10px 30px 60px !important;
			}
			.fbs-reasons-grid {
				grid-template-columns: repeat(2, 1fr) !important;
				gap: 18px !important;
			}
		}

		@media (max-width: 767px) {
			.fbs-reasons-header {
				padding: 40px 20px 20px !important;
			}
			.fbs-reasons-section {
				padding: 10px 20px 50px !important;
			}
			.fbs-reasons-grid {
				grid-template-columns: repeat(1, 1fr) !important;
				gap: 14px !important;
			}
			.fbs-reason-card {
				padding: 26px 20px !important;
			}
		}
		</style>

		<!-- Section Header -->
		<div class="elementor-element elementor-element-7250979a e-con-full e-flex e-con e-child fbs-reasons-header" data-id="7250979a" data-element_type="container" data-e-type="container">
			<div class="elementor-element elementor-element-348b608 elementor-widget elementor-widget-text-editor" data-id="348b608" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
					<div class="fbs-reasons-tag">
						<span class="fbs-reasons-tag-line"></span>WHY FITBLISS
					</div>
				</div>
			</div>
			<div class="elementor-element elementor-element-2fadbf63 elementor-widget elementor-widget-heading" data-id="2fadbf63" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="fbs-reasons-heading">
						Six reasons <span class="fbs-reasons-green">members stay.</span>
					</h2>
					<div class="fbs-reasons-accent-line"></div>
				</div>
			</div>
		</div>

		<!-- 6 Cards with Studio Background Image -->
		<div class="elementor-element elementor-element-486ad734 e-con-full e-flex e-con e-child fbs-reasons-section" data-id="486ad734" data-element_type="container" data-e-type="container">
			<div class="fbs-reasons-bg-wrap">
				<img src="<?php echo $base_url; ?>/assets/images/2026/07/IMG_3612-scaled.jpg" alt="FitBliss Pilates Studio" class="fbs-reasons-bg-img" />
			</div>
			<div class="fbs-reasons-overlay"></div>
			
			<div class="fbs-reasons-grid">

				<!-- Card 01 -->
				<div class="elementor-element elementor-element-746d5cb2 e-con-full e-flex e-con e-child fbs-reason-card" data-id="746d5cb2" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="fbs-reason-top-bar"></div>
					<div class="fbs-reason-num-row">
						<span class="fbs-reason-num">01</span>
						<span class="fbs-reason-badge-dot"></span>
					</div>
					<h3 class="fbs-reason-title">Science-backed</h3>
					<p class="fbs-reason-desc">Every program designed by certified professionals using evidence-based methods from sports science and rehabilitation.</p>
				</div>

				<!-- Card 02 -->
				<div class="elementor-element elementor-element-2d63d11 e-con-full e-flex e-con e-child fbs-reason-card" data-id="2d63d11" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="fbs-reason-top-bar"></div>
					<div class="fbs-reason-num-row">
						<span class="fbs-reason-num">02</span>
						<span class="fbs-reason-badge-dot"></span>
					</div>
					<h3 class="fbs-reason-title">Premium Equipment</h3>
					<p class="fbs-reason-desc">Imported, best-in-class equipment from the USA — Technogym, Rogue, Life Fitness. The same machines top facilities use.</p>
				</div>

				<!-- Card 03 -->
				<div class="elementor-element elementor-element-7d2a58bb e-con-full e-flex e-con e-child fbs-reason-card" data-id="7d2a58bb" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="fbs-reason-top-bar"></div>
					<div class="fbs-reason-num-row">
						<span class="fbs-reason-num">03</span>
						<span class="fbs-reason-badge-dot"></span>
					</div>
					<h3 class="fbs-reason-title">Expert Coaches</h3>
					<p class="fbs-reason-desc">14 certified, in-house coaches across strength, Pilates, boxing, yoga and more — each one answerable to you personally.</p>
				</div>

				<!-- Card 04 -->
				<div class="elementor-element elementor-element-6e24d016 e-con-full e-flex e-con e-child fbs-reason-card" data-id="6e24d016" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="fbs-reason-top-bar"></div>
					<div class="fbs-reason-num-row">
						<span class="fbs-reason-num">04</span>
						<span class="fbs-reason-badge-dot"></span>
					</div>
					<h3 class="fbs-reason-title">Luxury by Design</h3>
					<p class="fbs-reason-desc">Warm materials, considered lighting, genuine hospitality — a wellness center that feels like a destination, not a duty.</p>
				</div>

				<!-- Card 05 -->
				<div class="elementor-element elementor-element-54f49af e-con-full e-flex e-con e-child fbs-reason-card" data-id="54f49af" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="fbs-reason-top-bar"></div>
					<div class="fbs-reason-num-row">
						<span class="fbs-reason-num">05</span>
						<span class="fbs-reason-badge-dot"></span>
					</div>
					<h3 class="fbs-reason-title">Holistic Wellness</h3>
					<p class="fbs-reason-desc">Gym, Pilates, spa, pool, café and squash under one roof. Come for the workout, stay for the whole experience.</p>
				</div>

				<!-- Card 06 -->
				<div class="elementor-element elementor-element-67cfe014 e-con-full e-flex e-con e-child fbs-reason-card" data-id="67cfe014" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="fbs-reason-top-bar"></div>
					<div class="fbs-reason-num-row">
						<span class="fbs-reason-num">06</span>
						<span class="fbs-reason-badge-dot"></span>
					</div>
					<h3 class="fbs-reason-title">3,500+ Members</h3>
					<p class="fbs-reason-desc">A community that has chosen Fitbliss. Rated by google 4.5/5, trusted since 2024, and growing every week.</p>
				</div>

			</div>
		</div>
				<div class="elementor-element elementor-element-51c362cb e-con-full e-flex e-con e-child" data-id="51c362cb" data-element_type="container" data-e-type="container" id="membership" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<style>
				/* ─── FITBLISS MEMBERSHIP LUXURY SHARP-EDGE REDESIGN ─── */
				#membership.elementor-element-51c362cb {
					position: relative !important;
					width: 100% !important;
					max-width: 100% !important;
					background: #020505 !important;
					padding: clamp(60px, 7vw, 100px) clamp(20px, 4vw, 40px) 70px !important;
					box-sizing: border-box !important;
					overflow: hidden !important;
					display: block !important;
				}

				/* Atmospheric Background & Ambient Glows */
				.fbr-bg-wrap {
					position: absolute;
					inset: 0;
					z-index: 0;
					pointer-events: none;
					overflow: hidden;
				}

				.fbr-bg-img {
					width: 100%;
					height: 100%;
					object-fit: cover;
					object-position: center;
					opacity: 0.16;
					filter: saturate(1.1) brightness(0.85);
					transform: scale(1.02);
				}

				.fbr-bg-overlay {
					position: absolute;
					inset: 0;
					background: 
						radial-gradient(ellipse 70% 55% at 50% 40%, rgba(55, 192, 128, 0.11) 0%, rgba(2, 5, 5, 0.8) 55%, #020505 100%),
						linear-gradient(180deg, rgba(2, 5, 5, 0.7) 0%, rgba(2, 5, 5, 0.95) 75%, #020505 100%);
					pointer-events: none;
				}

				/* Inner Container */
				.fbr-inner {
					position: relative;
					z-index: 2;
					max-width: 1320px;
					margin: 0 auto;
					box-sizing: border-box;
				}

				/* ─── Header ─── */
				.fbr-header {
					display: flex;
					justify-content: space-between;
					align-items: flex-end;
					gap: 36px;
					margin-bottom: 50px;
					flex-wrap: wrap;
				}

				.fbr-header-left {
					flex: 1 1 520px;
					min-width: 280px;
				}

				.fbr-eyebrow {
					display: inline-flex;
					align-items: center;
					gap: 8px;
					font-family: 'Barlow', Inter, sans-serif;
					font-size: 11.5px;
					font-weight: 700;
					text-transform: uppercase;
					letter-spacing: 3.5px;
					color: #37c080;
					margin-bottom: 12px;
				}

				.fbr-eyebrow-line {
					display: inline-block;
					width: 18px;
					height: 2px;
					background: #37c080;
				}

				.fbr-title {
					margin: 0;
					font-family: 'Bebas Neue', Impact, 'Barlow', sans-serif;
					font-size: clamp(3rem, 6.2vw, 4.8rem);
					line-height: 0.92;
					letter-spacing: 1.5px;
					text-transform: uppercase;
					font-weight: 400;
				}

				.fbr-title-row {
					display: block;
				}

				.fbr-title-white {
					color: #f5f3ec;
				}

				.fbr-title-green {
					color: #37c080;
					text-shadow: 0 0 35px rgba(55, 192, 128, 0.38);
				}

				.fbr-header-right {
					flex: 0 1 440px;
					min-width: 280px;
					margin-bottom: 4px;
				}

				.fbr-lead-text {
					margin: 0;
					font-family: 'Barlow', Inter, sans-serif;
					font-size: 14.5px;
					line-height: 1.65;
					color: #9e9c8e;
				}

				/* ─── 3 Cards Grid (SHARP EDGES / THEME COMPLIANT) ─── */
				.fbr-cards-grid {
					display: grid;
					grid-template-columns: repeat(3, 1fr);
					gap: 24px;
					align-items: stretch;
					margin-bottom: 44px;
				}

				/* Card General - Strict Sharp Rectangular Architecture */
				.fbr-card {
					position: relative;
					display: flex;
					flex-direction: column;
					justify-content: space-between;
					background: rgba(12, 22, 22, 0.72);
					border: 1px solid rgba(255, 255, 255, 0.10);
					border-radius: 0px !important;
					padding: 40px 32px 34px;
					box-sizing: border-box;
					backdrop-filter: blur(20px);
					-webkit-backdrop-filter: blur(20px);
					box-shadow: 0 20px 45px -15px rgba(0, 0, 0, 0.75);
					transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1), border-color 0.35s ease, box-shadow 0.35s ease;
				}

				.fbr-card:hover {
					transform: translateY(-8px);
					border-color: rgba(55, 192, 128, 0.5);
					box-shadow: 0 30px 60px -15px rgba(0, 0, 0, 0.85), 0 0 30px rgba(55, 192, 128, 0.15);
				}

				/* Highlighted Center Card (COUPLE) - Sharp Edge Hero */
				.fbr-card-featured {
					background: rgba(15, 32, 27, 0.82);
					border: 1.5px solid #37c080 !important;
					border-radius: 0px !important;
					box-shadow: 0 25px 60px -15px rgba(0, 0, 0, 0.8), 0 0 35px rgba(55, 192, 128, 0.22);
				}

				.fbr-card-featured::before {
					content: '';
					position: absolute;
					top: -1px;
					left: 10%;
					right: 10%;
					height: 2px;
					background: linear-gradient(90deg, transparent, #3ee69a, transparent);
					box-shadow: 0 0 16px #3ee69a;
				}

				.fbr-card-featured:hover {
					transform: translateY(-10px);
					border-color: #3ee69a !important;
					box-shadow: 0 35px 75px -15px rgba(0, 0, 0, 0.9), 0 0 50px rgba(55, 192, 128, 0.4);
				}

				/* Card Top Content */
				.fbr-card-top {
					margin-bottom: 28px;
				}

				.fbr-card-tag {
					display: inline-block;
					font-family: 'Barlow', Inter, sans-serif;
					font-size: 11px;
					font-weight: 700;
					text-transform: uppercase;
					letter-spacing: 3px;
					color: #37c080;
					margin-bottom: 14px;
				}

				.fbr-card-title {
					margin: 0 0 18px 0;
					font-family: 'Bebas Neue', Impact, 'Barlow', sans-serif;
					font-size: clamp(2.2rem, 3.2vw, 2.85rem);
					line-height: 1;
					letter-spacing: 1.2px;
					text-transform: uppercase;
					color: #f5f3ec;
					font-weight: 400;
				}

				.fbr-card-divider {
					height: 1px;
					background: linear-gradient(90deg, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0.02) 100%);
					margin-bottom: 18px;
				}

				.fbr-card-featured .fbr-card-divider {
					background: linear-gradient(90deg, rgba(55, 192, 128, 0.35) 0%, rgba(55, 192, 128, 0.05) 100%);
				}

				.fbr-card-desc {
					margin: 0;
					font-family: 'Barlow', Inter, sans-serif;
					font-size: 14px;
					line-height: 1.65;
					color: #9e9c8e;
					min-height: 48px;
				}

				/* Card Action / Buttons (SHARP RECTANGLES) */
				.fbr-card-action {
					margin-top: auto;
				}

				.fbr-btn {
					display: flex;
					align-items: center;
					justify-content: center;
					gap: 10px;
					width: 100%;
					padding: 15px 24px;
					box-sizing: border-box;
					border-radius: 0px !important;
					font-family: 'Barlow', Inter, sans-serif;
					font-size: 12px;
					font-weight: 700;
					text-transform: uppercase;
					letter-spacing: 2.5px;
					text-decoration: none;
					transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
					cursor: pointer;
				}

				.fbr-btn-arrow {
					display: inline-block;
					font-size: 14px;
					line-height: 1;
					transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1);
				}

				.fbr-btn:hover .fbr-btn-arrow {
					transform: translateX(5px);
				}

				/* Outline Button (Individual & Family) */
				.fbr-btn-outline {
					background: transparent;
					border: 1px solid rgba(55, 192, 128, 0.45);
					color: #37c080 !important;
				}

				.fbr-btn-outline:hover {
					background: #37c080;
					color: #020505 !important;
					border-color: #37c080;
					box-shadow: 0 8px 25px rgba(55, 192, 128, 0.35);
					transform: translateY(-2px);
				}

				/* Solid Button (Couple / Featured) */
				.fbr-btn-solid {
					background: #37c080;
					border: 1px solid #37c080;
					color: #020605 !important;
					font-weight: 800;
					box-shadow: 0 10px 28px rgba(55, 192, 128, 0.35);
				}

				.fbr-btn-solid:hover {
					background: #46d892;
					border-color: #46d892;
					box-shadow: 0 14px 35px rgba(55, 192, 128, 0.55);
					transform: translateY(-2px);
				}

				/* ─── What's Included Luxury Strip (Redesigned & Sharp) ─── */
				.fbr-included-section {
					margin-top: 50px;
					padding-top: 36px;
					border-top: 1px solid rgba(255, 255, 255, 0.08);
				}

				.fbr-included-heading {
					font-family: 'Barlow', Inter, sans-serif;
					font-size: 12px;
					font-weight: 700;
					text-transform: uppercase;
					letter-spacing: 2.5px;
					color: #37c080;
					margin-bottom: 26px;
				}

				.fbr-included-grid {
					display: grid;
					grid-template-columns: repeat(3, 1fr);
					gap: 0;
					border-top: 1px solid rgba(255, 255, 255, 0.08);
					border-bottom: 1px solid rgba(255, 255, 255, 0.08);
					margin-bottom: 30px;
				}

				.fbr-included-item {
					display: flex;
					align-items: center;
					gap: 12px;
					padding: 18px 20px;
					font-family: 'Barlow', Inter, sans-serif;
					font-size: 14px;
					color: #e4e2d8;
					border-bottom: 1px solid rgba(255, 255, 255, 0.05);
					transition: all 0.25s ease;
					box-sizing: border-box;
				}

				.fbr-included-item:hover {
					background: rgba(55, 192, 128, 0.04);
					color: #ffffff;
					padding-left: 24px;
				}

				.fbr-included-sparkle {
					color: #37c080;
					font-size: 12px;
					line-height: 1;
					display: inline-block;
					text-shadow: 0 0 10px rgba(55, 192, 128, 0.5);
					flex-shrink: 0;
				}

				/* Footnote */
				.fbr-footnote {
					margin: 0 0 46px 0;
					font-family: 'Barlow', Inter, sans-serif;
					font-size: 11px;
					font-weight: 600;
					text-transform: uppercase;
					letter-spacing: 2px;
					color: #858376;
				}

				/* ─── Bottom Actions / Links ─── */
				.fbr-bottom-bar {
					text-align: center;
					display: flex;
					flex-direction: column;
					align-items: center;
					gap: 14px;
					padding-top: 10px;
				}

				.fbr-bottom-corp {
					margin: 0;
					font-family: 'Barlow', Inter, sans-serif;
					font-size: 11px;
					font-weight: 600;
					text-transform: uppercase;
					letter-spacing: 2.5px;
					color: #9b998b;
				}

				.fbr-bottom-phone-link {
					color: #37c080 !important;
					text-decoration: none !important;
					transition: all 0.25s ease;
					font-weight: 700;
				}

				.fbr-bottom-phone-link:hover {
					color: #46d892 !important;
					text-shadow: 0 0 12px rgba(55, 192, 128, 0.5);
				}

				.fbr-bottom-view-link {
					display: inline-flex;
					align-items: center;
					gap: 8px;
					font-family: 'Barlow', Inter, sans-serif;
					font-size: 11px;
					font-weight: 700;
					text-transform: uppercase;
					letter-spacing: 2px;
					color: #37c080 !important;
					text-decoration: none !important;
					transition: all 0.25s ease;
					padding: 6px 12px;
				}

				.fbr-bottom-view-link:hover {
					color: #46d892 !important;
					text-shadow: 0 0 12px rgba(55, 192, 128, 0.5);
				}

				.fbr-bottom-view-link:hover .fbr-link-arrow {
					transform: translateX(4px);
				}

				.fbr-link-arrow {
					display: inline-block;
					transition: transform 0.25s ease;
				}

				/* Responsive */
				@media (max-width: 1024px) {
					.fbr-cards-grid {
						gap: 16px;
					}
					.fbr-card {
						padding: 32px 24px 28px;
					}
					.fbr-card-desc {
						min-height: 60px;
					}
					.fbr-included-grid {
						grid-template-columns: repeat(2, 1fr);
					}
				}

				@media (max-width: 860px) {
					.fbr-header {
						margin-bottom: 38px;
					}
					.fbr-cards-grid {
						grid-template-columns: 1fr;
						max-width: 500px;
						margin: 0 auto 40px;
						gap: 22px;
					}
					.fbr-card {
						padding: 36px 28px 30px;
					}
					.fbr-card-desc {
						min-height: auto;
						margin-bottom: 24px;
					}
					.fbr-included-grid {
						grid-template-columns: 1fr;
					}
					.fbr-included-item {
						padding: 14px 16px;
					}
				}
			</style>

			<!-- Dark Luxury Gym Ambient Background -->
			<div class="fbr-bg-wrap">
				<img decoding="async" src="<?php echo $uploads_base; ?>/2026/07/fac-gym-KKOxT9GI.webp" alt="FitBliss Luxury Gym" class="fbr-bg-img" loading="lazy" />
				<div class="fbr-bg-overlay"></div>
			</div>

			<div class="fbr-inner">
				<!-- Header Row -->
				<div class="fbr-header">
					<div class="fbr-header-left">
						<div class="fbr-eyebrow">
							<span class="fbr-eyebrow-line"></span>
							MEMBERSHIP
						</div>
						<h2 class="fbr-title">
							<span class="fbr-title-row fbr-title-white">PICK YOUR</span>
							<span class="fbr-title-row fbr-title-green">COMMITMENT.</span>
						</h2>
					</div>
					<div class="fbr-header-right">
						<p class="fbr-lead-text">
							Every plan is all-inclusive — no add-ons, no surprise fees. Cancel any month, upgrade any time. GST included.
						</p>
					</div>
				</div>

				<!-- 3 Membership Cards Grid (SHARP RECTANGLES) -->
				<div class="fbr-cards-grid">
					<!-- Card 1: INDIVIDUAL -->
					<div class="fbr-card">
						<div class="fbr-card-top">
							<div class="fbr-card-tag">ANNUAL</div>
							<h3 class="fbr-card-title">INDIVIDUAL</h3>
							<div class="fbr-card-divider"></div>
							<p class="fbr-card-desc">Everything included — gym, pilates with PT &amp; every group activity.</p>
						</div>
						<div class="fbr-card-action">
							<a href="https://wa.me/917470787014?text=Hi%2C%20I%20am%20interested%20in%20the%20Fitbliss%20Individual%20Annual%20Membership." target="_blank" rel="noopener noreferrer" class="fbr-btn fbr-btn-outline">
								<span>ENQUIRE</span>
								<span class="fbr-btn-arrow">→</span>
							</a>
						</div>
					</div>

					<!-- Card 2: COUPLE (Featured) -->
					<div class="fbr-card fbr-card-featured">
						<div class="fbr-card-top">
							<div class="fbr-card-tag">ANNUAL</div>
							<h3 class="fbr-card-title">COUPLE</h3>
							<div class="fbr-card-divider"></div>
							<p class="fbr-card-desc">Two members, one all-inclusive annual membership.</p>
						</div>
						<div class="fbr-card-action">
							<a href="https://wa.me/917470787014?text=Hi%2C%20I%20am%20interested%20in%20the%20Fitbliss%20Couple%20Annual%20Membership." target="_blank" rel="noopener noreferrer" class="fbr-btn fbr-btn-solid">
								<span>ENQUIRE</span>
								<span class="fbr-btn-arrow">→</span>
							</a>
						</div>
					</div>

					<!-- Card 3: FAMILY (2 + 2) -->
					<div class="fbr-card">
						<div class="fbr-card-top">
							<div class="fbr-card-tag">ANNUAL</div>
							<h3 class="fbr-card-title">FAMILY (2 + 2)</h3>
							<div class="fbr-card-divider"></div>
							<p class="fbr-card-desc">For direct family members only — two adults and two dependents.</p>
						</div>
						<div class="fbr-card-action">
							<a href="https://wa.me/917470787014?text=Hi%2C%20I%20am%20interested%20in%20the%20Fitbliss%20Family%20Annual%20Membership." target="_blank" rel="noopener noreferrer" class="fbr-btn fbr-btn-outline">
								<span>ENQUIRE</span>
								<span class="fbr-btn-arrow">→</span>
							</a>
						</div>
					</div>
				</div>

				<!-- What's Included Luxury Strip -->
				<div class="fbr-included-section">
					<div class="fbr-included-heading">EVERYTHING INCLUDED IN ELITE CLUB:</div>
					<div class="fbr-included-grid">
						<div class="fbr-included-item"><span class="fbr-included-sparkle">✦</span>Gym access</div>
						<div class="fbr-included-item"><span class="fbr-included-sparkle">✦</span>Pilates PT</div>
						<div class="fbr-included-item"><span class="fbr-included-sparkle">✦</span>Yoga</div>
						<div class="fbr-included-item"><span class="fbr-included-sparkle">✦</span>Aerial Yoga</div>
						<div class="fbr-included-item"><span class="fbr-included-sparkle">✦</span>Zumba</div>
						<div class="fbr-included-item"><span class="fbr-included-sparkle">✦</span>Boxing</div>
						<div class="fbr-included-item"><span class="fbr-included-sparkle">✦</span>Spinning</div>
						<div class="fbr-included-item"><span class="fbr-included-sparkle">✦</span>Aerobics</div>
						<div class="fbr-included-item"><span class="fbr-included-sparkle">✦</span>Squash (without PT)</div>
					</div>

					<!-- Footnote -->
					<p class="fbr-footnote">
						FAMILY (2 + 2) VALID ONLY FOR DIRECT FAMILY MEMBERS. · GST APPLICABLE ON ALL PLANS.
					</p>

					<!-- Bottom Callout & Links -->
					<div class="fbr-bottom-bar">
						<p class="fbr-bottom-corp">
							CORPORATE &amp; FAMILY PLANS AVAILABLE · <a href="tel:+917470787014" class="fbr-bottom-phone-link">CALL +91 74707 87014</a>
						</p>
						<a href="index.php#membership" class="fbr-bottom-view-link">
							<span>VIEW FULL MEMBERSHIP DETAILS</span>
							<span class="fbr-link-arrow">→</span>
						</a>
					</div>
				</div>
			</div>
		</div>
				<div class="elementor-element elementor-element-2b31cb74 e-con-full e-flex e-con e-child" data-id="2b31cb74" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<style>
				/* ─── FITBLISS "THE SPACE SHE BUILT" LUXURY REDESIGN ─── */
				.elementor-element.elementor-element-2b31cb74 {
					position: relative !important;
					width: 100% !important;
					max-width: 100% !important;
					background: #020505 !important;
					padding: clamp(60px, 8vw, 100px) clamp(20px, 4vw, 40px) !important;
					box-sizing: border-box !important;
					overflow: hidden !important;
					display: block !important;
				}

				/* Atmospheric Backing */
				.fbs-story-ambient {
					position: absolute;
					inset: 0;
					background: 
						radial-gradient(ellipse 65% 55% at 75% 50%, rgba(55, 192, 128, 0.09) 0%, rgba(2, 5, 5, 0.75) 55%, #020505 100%),
						linear-gradient(180deg, rgba(2, 5, 5, 0.95) 0%, rgba(2, 5, 5, 0.8) 50%, #020505 100%);
					pointer-events: none;
					z-index: 0;
				}

				/* Layout Wrap */
				.fbs-story-container {
					position: relative;
					z-index: 2;
					max-width: 1320px;
					margin: 0 auto;
					display: flex;
					align-items: center;
					justify-content: space-between;
					gap: clamp(40px, 5vw, 68px);
					flex-wrap: wrap;
					box-sizing: border-box;
				}

				/* Left Content Column */
				.fbs-story-content {
					flex: 1 1 440px;
					min-width: 290px;
					box-sizing: border-box;
				}

				.fbs-story-eyebrow {
					display: inline-flex;
					align-items: center;
					gap: 8px;
					font-family: 'Barlow', Inter, sans-serif;
					font-size: 11.5px;
					font-weight: 700;
					text-transform: uppercase;
					letter-spacing: 3.5px;
					color: #37c080;
					margin-bottom: 14px;
				}

				.fbs-story-eyebrow-line {
					display: inline-block;
					width: 18px;
					height: 2px;
					background: #37c080;
				}

				.fbs-story-title {
					margin: 0 0 26px 0;
					font-family: 'Bebas Neue', Impact, 'Barlow', sans-serif;
					font-size: clamp(2.8rem, 5.5vw, 4.4rem);
					line-height: 0.92;
					letter-spacing: 1.5px;
					text-transform: uppercase;
					font-weight: 400;
				}

				.fbs-story-title-white {
					display: block;
					color: #f5f3ec;
				}

				.fbs-story-title-green {
					display: block;
					color: #37c080;
					text-shadow: 0 0 35px rgba(55, 192, 128, 0.38);
				}

				.fbs-story-desc-wrap {
					border-left: 2px solid rgba(55, 192, 128, 0.45);
					padding-left: 20px;
					max-width: 520px;
				}

				.fbs-story-desc {
					margin: 0;
					font-family: 'Barlow', Inter, sans-serif;
					font-size: 15px;
					line-height: 1.75;
					color: #a19f90;
				}

				/* Right Video Column (Sharp Architectural Frame) */
				.fbs-story-video-col {
					flex: 1.3 1 480px;
					min-width: 300px;
					box-sizing: border-box;
				}

				.fbs-story-video-card {
					position: relative;
					width: 100%;
					padding-top: 56.25%; /* 16:9 Aspect Ratio */
					overflow: hidden;
					background: #060d0d;
					border: 1px solid rgba(255, 255, 255, 0.12);
					border-radius: 0px !important; /* Strict Sharp Corners */
					box-shadow: 0 25px 65px -15px rgba(0, 0, 0, 0.85), 0 0 40px rgba(55, 192, 128, 0.12);
					transition: border-color 0.35s ease, box-shadow 0.35s ease;
				}

				.fbs-story-video-card:hover {
					border-color: rgba(55, 192, 128, 0.4);
					box-shadow: 0 30px 75px -15px rgba(0, 0, 0, 0.9), 0 0 50px rgba(55, 192, 128, 0.22);
				}

				/* Top Neon Accent Ribbon */
				.fbs-story-video-card::before {
					content: '';
					position: absolute;
					top: 0;
					left: 15%;
					right: 15%;
					height: 2px;
					background: linear-gradient(90deg, transparent, #3ee69a, transparent);
					box-shadow: 0 0 16px #3ee69a;
					z-index: 5;
					pointer-events: none;
				}

				.fbs-story-video-el {
					position: absolute;
					inset: 0;
					width: 100%;
					height: 100%;
					object-fit: cover;
					z-index: 2;
					display: block;
					border-radius: 0px !important;
				}

				/* Custom Play Overlay */
				.fbs-video-play-overlay {
					position: absolute;
					inset: 0;
					z-index: 4;
					display: flex;
					align-items: center;
					justify-content: center;
					background: rgba(2, 5, 5, 0.25);
					cursor: pointer;
					transition: opacity 0.3s ease, visibility 0.3s ease;
				}

				.fbs-video-play-overlay.is-hidden {
					opacity: 0;
					visibility: hidden;
					pointer-events: none;
				}

				.fbs-play-btn-circle {
					position: relative;
					width: 72px;
					height: 72px;
					background: rgba(3, 8, 8, 0.72);
					backdrop-filter: blur(12px);
					-webkit-backdrop-filter: blur(12px);
					border: 1.5px solid #37c080;
					border-radius: 50%;
					box-shadow: 0 0 30px rgba(55, 192, 128, 0.35);
					display: flex;
					align-items: center;
					justify-content: center;
					transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
				}

				.fbs-play-btn-circle:hover {
					transform: scale(1.1);
					border-color: #3ee69a;
					background: rgba(4, 12, 11, 0.85);
					box-shadow: 0 0 45px rgba(55, 192, 128, 0.55);
				}

				.fbs-play-icon {
					width: 0;
					height: 0;
					border-style: solid;
					border-width: 10px 0 10px 18px;
					border-color: transparent transparent transparent #37c080;
					margin-left: 4px;
					transition: border-color 0.25s ease;
				}

				.fbs-play-btn-circle:hover .fbs-play-icon {
					border-color: transparent transparent transparent #3ee69a;
				}

				/* Responsive */
				@media (max-width: 860px) {
					.fbs-story-container {
						gap: 36px;
					}
					.fbs-story-desc-wrap {
						max-width: 100%;
					}
					.fbs-play-btn-circle {
						width: 60px;
						height: 60px;
					}
					.fbs-play-icon {
						border-width: 8px 0 8px 14px;
						margin-left: 3px;
					}
				}
			</style>

			<!-- Atmospheric Ambient Glow -->
			<div class="fbs-story-ambient"></div>

			<div class="fbs-story-container">
				<!-- Left Content -->
				<div class="fbs-story-content">
					<div class="fbs-story-eyebrow">
						<span class="fbs-story-eyebrow-line"></span>
						THE SPACE SHE BUILT
					</div>
					<h2 class="fbs-story-title">
						<span class="fbs-story-title-white">EVERY DETAIL,</span>
						<span class="fbs-story-title-green">INTENTIONAL.</span>
					</h2>
					<div class="fbs-story-desc-wrap">
						<p class="fbs-story-desc">
							From the serene ambience to the state-of-the-art facilities, each aspect of FitBliss reflects Dr. Kapoor's unwavering commitment to excellence. Pilates, yoga, Zumba, spa treatments, boxing, physiotherapy — every offering was chosen, trained and staffed personally.
						</p>
					</div>
				</div>

				<!-- Right Cinematic Video (Sharp Frame) -->
				<div class="fbs-story-video-col">
					<div class="fbs-story-video-card" id="storyVideoCard">
						<video id="storyVideo" class="fbs-story-video-el" controls poster="<?php echo $base_url; ?>/assets/images/2026/07/truestory.png" preload="metadata" playsinline>
							<source src="<?php echo $base_url; ?>/assets/images/2026/07/Journey-from-120-kgs-to-70-kgs-I-m-still-working-in-my-roar-because-my-best-version-is-yet-to.mp4#t=0.001" type="video/mp4">
						</video>
						<div class="fbs-video-play-overlay" id="storyPlayOverlay" title="Play Video">
							<div class="fbs-play-btn-circle">
								<div class="fbs-play-icon"></div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<script>
				(function() {
					var video = document.getElementById('storyVideo');
					var overlay = document.getElementById('storyPlayOverlay');
					if (video && overlay) {
						overlay.addEventListener('click', function() {
							video.play();
							overlay.classList.add('is-hidden');
						});
						video.addEventListener('play', function() {
							overlay.classList.add('is-hidden');
						});
						video.addEventListener('pause', function() {
							overlay.classList.remove('is-hidden');
						});
						video.addEventListener('ended', function() {
							overlay.classList.remove('is-hidden');
						});
					}
				})();
			</script>
		</div>
				<div class="elementor-element elementor-element-7ff37714 e-con-full e-flex e-con e-child" data-id="7ff37714" data-element_type="container" data-e-type="container" id="trainers" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<style>
				/* ─── FITBLISS "EQUIPMENT & TOOLS" LUXURY REDESIGN ─── */
				#trainers.elementor-element-7ff37714 {
					position: relative !important;
					width: 100% !important;
					max-width: 100% !important;
					background: #020505 !important;
					padding: clamp(70px, 8vw, 110px) clamp(20px, 4vw, 40px) 80px !important;
					box-sizing: border-box !important;
					overflow: hidden !important;
					display: block !important;
				}

				/* Atmospheric Lighting */
				.fbe-ambient-glow {
					position: absolute;
					inset: 0;
					background: 
						radial-gradient(ellipse 70% 50% at 50% 45%, rgba(55, 192, 128, 0.08) 0%, rgba(2, 5, 5, 0.75) 55%, #020505 100%),
						linear-gradient(180deg, rgba(2, 5, 5, 0.95) 0%, rgba(2, 5, 5, 0.8) 50%, #020505 100%);
					pointer-events: none;
					z-index: 0;
				}

				/* Inner Wrapper */
				.fbe-inner {
					position: relative;
					z-index: 2;
					max-width: 1320px;
					margin: 0 auto;
					box-sizing: border-box;
				}

				/* Header Row */
				.fbe-header {
					display: flex;
					justify-content: space-between;
					align-items: flex-end;
					gap: 36px;
					margin-bottom: 50px;
					flex-wrap: wrap;
				}

				.fbe-header-left {
					flex: 1 1 520px;
					min-width: 280px;
				}

				.fbe-eyebrow {
					display: inline-flex;
					align-items: center;
					gap: 8px;
					font-family: 'Barlow', Inter, sans-serif;
					font-size: 11.5px;
					font-weight: 700;
					text-transform: uppercase;
					letter-spacing: 3.5px;
					color: #37c080;
					margin-bottom: 14px;
				}

				.fbe-eyebrow-line {
					display: inline-block;
					width: 18px;
					height: 2px;
					background: #37c080;
				}

				.fbe-title {
					margin: 0;
					font-family: 'Bebas Neue', Impact, 'Barlow', sans-serif;
					font-size: clamp(2.8rem, 5.5vw, 4.4rem);
					line-height: 0.92;
					letter-spacing: 1.5px;
					text-transform: uppercase;
					font-weight: 400;
				}

				.fbe-title-white {
					display: block;
					color: #f5f3ec;
				}

				.fbe-title-green {
					display: block;
					color: #37c080;
					text-shadow: 0 0 35px rgba(55, 192, 128, 0.38);
				}

				.fbe-header-right {
					flex: 0 1 480px;
					min-width: 280px;
					margin-bottom: 4px;
				}

				.fbe-lead-text {
					margin: 0;
					font-family: 'Barlow', Inter, sans-serif;
					font-size: 14.5px;
					line-height: 1.65;
					color: #9e9c8e;
				}

				/* 4 Cards Grid */
				.fbe-cards-grid {
					display: grid;
					grid-template-columns: repeat(4, 1fr);
					gap: 22px;
					align-items: stretch;
					margin-bottom: 48px;
				}

				/* Card Container - Strict Sharp Rectangular Architecture */
				.fbe-card {
					position: relative;
					display: flex;
					flex-direction: column;
					justify-content: space-between;
					background: rgba(12, 22, 22, 0.72);
					border: 1px solid rgba(255, 255, 255, 0.10);
					border-radius: 0px !important; /* Sharp corners */
					box-sizing: border-box;
					backdrop-filter: blur(20px);
					-webkit-backdrop-filter: blur(20px);
					box-shadow: 0 20px 45px -15px rgba(0, 0, 0, 0.75);
					transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1), border-color 0.35s ease, box-shadow 0.35s ease;
					overflow: hidden;
				}

				.fbe-card:hover {
					transform: translateY(-8px);
					border-color: rgba(55, 192, 128, 0.5);
					box-shadow: 0 30px 60px -15px rgba(0, 0, 0, 0.85), 0 0 30px rgba(55, 192, 128, 0.15);
				}

				/* Top Neon Accent Ribbon on Card Hover */
				.fbe-card::before {
					content: '';
					position: absolute;
					top: 0;
					left: 10%;
					right: 10%;
					height: 2px;
					background: linear-gradient(90deg, transparent, #3ee69a, transparent);
					box-shadow: 0 0 14px #3ee69a;
					opacity: 0;
					transition: opacity 0.35s ease;
					z-index: 5;
					pointer-events: none;
				}

				.fbe-card:hover::before {
					opacity: 1;
				}

				/* Card Image Stage */
				.fbe-card-media {
					position: relative;
					height: 240px;
					background: radial-gradient(circle at 50% 55%, rgba(20, 36, 36, 0.5) 0%, rgba(6, 12, 12, 0.95) 100%);
					display: flex;
					align-items: center;
					justify-content: center;
					padding: 22px 18px 10px;
					box-sizing: border-box;
					overflow: hidden;
					border-bottom: 1px solid rgba(255, 255, 255, 0.06);
				}

				.fbe-card-img {
					max-width: 100%;
					max-height: 100%;
					object-fit: contain;
					filter: drop-shadow(0 14px 20px rgba(0, 0, 0, 0.65));
					transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1), filter 0.4s ease;
				}

				.fbe-card:hover .fbe-card-img {
					transform: scale(1.07);
					filter: drop-shadow(0 18px 25px rgba(55, 192, 128, 0.25));
				}

				/* Card Bottom Body */
				.fbe-card-body {
					padding: 22px 22px 26px;
					display: flex;
					flex-direction: column;
					flex-grow: 1;
					box-sizing: border-box;
				}

				.fbe-card-title {
					margin: 0 0 12px 0;
					font-family: 'Bebas Neue', Impact, 'Barlow', sans-serif;
					font-size: 23px;
					line-height: 1.1;
					letter-spacing: 1.2px;
					text-transform: uppercase;
					color: #f5f3ec;
					font-weight: 400;
				}

				.fbe-card-divider {
					height: 1px;
					background: linear-gradient(90deg, rgba(55, 192, 128, 0.4) 0%, rgba(255, 255, 255, 0.04) 100%);
					margin-bottom: 14px;
				}

				.fbe-card-desc {
					margin: 0;
					font-family: 'Barlow', Inter, sans-serif;
					font-size: 13.5px;
					line-height: 1.6;
					color: #9e9c8e;
				}

				/* Bottom CTA Button (Sharp Edge) */
				.fbe-bottom-action {
					text-align: center;
					display: flex;
					justify-content: center;
				}

				.fbe-btn {
					display: inline-flex;
					align-items: center;
					gap: 10px;
					padding: 14px 32px;
					background: transparent;
					border: 1px solid rgba(55, 192, 128, 0.45);
					border-radius: 0px !important; /* Sharp corners */
					font-family: 'Barlow', Inter, sans-serif;
					font-size: 12px;
					font-weight: 700;
					text-transform: uppercase;
					letter-spacing: 2.5px;
					color: #37c080 !important;
					text-decoration: none !important;
					transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
					box-sizing: border-box;
				}

				.fbe-btn:hover {
					background: #37c080;
					color: #020505 !important;
					border-color: #37c080;
					box-shadow: 0 8px 25px rgba(55, 192, 128, 0.35);
					transform: translateY(-2px);
				}

				.fbe-btn-arrow {
					display: inline-block;
					transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1);
				}

				.fbe-btn:hover .fbe-btn-arrow {
					transform: translateX(5px);
				}

				/* Responsive */
				@media (max-width: 1100px) {
					.fbe-cards-grid {
						grid-template-columns: repeat(2, 1fr);
						gap: 20px;
					}
					.fbe-card-media {
						height: 220px;
					}
				}

				@media (max-width: 640px) {
					.fbe-header {
						margin-bottom: 36px;
					}
					.fbe-cards-grid {
						grid-template-columns: 1fr;
						max-width: 440px;
						margin: 0 auto 36px;
					}
					.fbe-card-media {
						height: 230px;
					}
				}
			</style>

			<!-- Atmospheric Ambient Glow -->
			<div class="fbe-ambient-glow"></div>

			<div class="fbe-inner">
				<!-- Header Row -->
				<div class="fbe-header">
					<div class="fbe-header-left">
						<div class="fbe-eyebrow">
							<span class="fbe-eyebrow-line"></span>
							Equipment &amp; tools
						</div>
						<h2 class="fbe-title">
							<span class="fbe-title-white">GLOBALLY ENGINEERED.</span>
							<span class="fbe-title-green">PRECISELY SELECTED.</span>
						</h2>
					</div>
					<div class="fbe-header-right">
						<p class="fbe-lead-text">
							Every machine, bar and platform on our floor is chosen from the world&#8217;s most trusted strength and conditioning brands — Hammer Strength, Life Fitness and SYNRGY360. No compromises on the equipment your training deserves.
						</p>
					</div>
				</div>

				<!-- 4 Equipment Cards Grid -->
				<div class="fbe-cards-grid">
					<!-- Card 1: ASPIRE TREADMILL -->
					<div class="fbe-card">
						<div class="fbe-card-media">
							<img decoding="async" src="<?php echo $base_url; ?>/assets/images/2026/07/deaeaea0-5932-488b-9dba-c8d7d3dc2a49.png" alt="Aspire Treadmill" class="fbe-card-img" loading="lazy" />
						</div>
						<div class="fbe-card-body">
							<h3 class="fbe-card-title">Aspire Treadmill</h3>
							<div class="fbe-card-divider"></div>
							<p class="fbe-card-desc">
								A versatile treadmill with advanced biomechanics, touchscreen console options and Flex Deck shock absorption, reducing knee and joint stress by up to 30%.
							</p>
						</div>
					</div>

					<!-- Card 2: ASPIRE ELLIPTICAL -->
					<div class="fbe-card">
						<div class="fbe-card-media">
							<img decoding="async" src="<?php echo $base_url; ?>/assets/images/2026/07/25c2444c-c4bf-4073-a764-078f1b90a853-1.png" alt="Aspire Elliptical" class="fbe-card-img" loading="lazy" />
						</div>
						<div class="fbe-card-body">
							<h3 class="fbe-card-title">Aspire Elliptical</h3>
							<div class="fbe-card-divider"></div>
							<p class="fbe-card-desc">
								A smooth, durable elliptical for all fitness levels, featuring 25 resistance levels and smart console options for effective, low-impact cardio training.
							</p>
						</div>
					</div>

					<!-- Card 3: HD AIR BIKE -->
					<div class="fbe-card">
						<div class="fbe-card-media">
							<img decoding="async" src="<?php echo $base_url; ?>/assets/images/2026/07/a7bb5056-2f21-4417-ae5d-1811d546ccb4.png" alt="HD Air Bike" class="fbe-card-img" loading="lazy" />
						</div>
						<div class="fbe-card-body">
							<h3 class="fbe-card-title">HD Air Bike</h3>
							<div class="fbe-card-divider"></div>
							<p class="fbe-card-desc">
								A rugged, high-performance air bike built for intense workouts, delivering full-body conditioning, powerful resistance and long-lasting durability for demanding training sessions.
							</p>
						</div>
					</div>

					<!-- Card 4: IC5 INDOOR CYCLE -->
					<div class="fbe-card">
						<div class="fbe-card-media">
							<img decoding="async" src="<?php echo $base_url; ?>/assets/images/2026/07/ic5-transp-bg-v1-0.png" alt="IC5 Indoor Cycle" class="fbe-card-img" loading="lazy" />
						</div>
						<div class="fbe-card-body">
							<h3 class="fbe-card-title">IC5 Indoor Cycle</h3>
							<div class="fbe-card-divider"></div>
							<p class="fbe-card-desc">
								An advanced indoor cycle with magnetic resistance, Bluetooth and ANT+ connectivity, plus Coach By Color guidance for engaging, data-driven workouts.
							</p>
						</div>
					</div>
				</div>

				<!-- Bottom Action -->
				<div class="fbe-bottom-action">
					<a href="index.php#trainers" class="fbe-btn">
						<span>View Equipment</span>
						<span class="fbe-btn-arrow">→</span>
					</a>
				</div>
			</div>
		</div>
				<div class="elementor-element elementor-element-33f097b7 e-con-full e-flex e-con e-child" data-id="33f097b7" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<style>
				/* ─── FITBLISS "THE COACHES" LUXURY REDESIGN ─── */
				.elementor-element.elementor-element-33f097b7 {
					position: relative !important;
					width: 100% !important;
					max-width: 100% !important;
					background: #020505 !important;
					padding: clamp(70px, 8vw, 110px) clamp(20px, 4vw, 40px) !important;
					box-sizing: border-box !important;
					overflow: hidden !important;
					display: block !important;
				}

				/* Atmospheric Glow */
				.fbc-ambient-glow {
					position: absolute;
					inset: 0;
					background: 
						radial-gradient(ellipse 70% 50% at 50% 50%, rgba(55, 192, 128, 0.08) 0%, rgba(2, 5, 5, 0.75) 55%, #020505 100%),
						linear-gradient(180deg, rgba(2, 5, 5, 0.95) 0%, rgba(2, 5, 5, 0.8) 50%, #020505 100%);
					pointer-events: none;
					z-index: 0;
				}

				/* Inner Container */
				.fbc-inner {
					position: relative;
					z-index: 2;
					max-width: 1320px;
					margin: 0 auto;
					box-sizing: border-box;
				}

				/* Header Row */
				.fbc-header {
					display: flex;
					justify-content: space-between;
					align-items: flex-end;
					gap: 36px;
					margin-bottom: 50px;
					flex-wrap: wrap;
				}

				.fbc-header-left {
					flex: 1 1 540px;
					min-width: 290px;
				}

				.fbc-eyebrow {
					display: inline-flex;
					align-items: center;
					gap: 8px;
					font-family: 'Barlow', Inter, sans-serif;
					font-size: 11.5px;
					font-weight: 700;
					text-transform: uppercase;
					letter-spacing: 3.5px;
					color: #37c080;
					margin-bottom: 14px;
				}

				.fbc-eyebrow-line {
					display: inline-block;
					width: 18px;
					height: 2px;
					background: #37c080;
				}

				/* Single Line Heading */
				.fbc-title {
					margin: 0;
					font-family: 'Bebas Neue', Impact, 'Barlow', sans-serif;
					font-size: clamp(2.2rem, 4.2vw, 3.8rem);
					line-height: 1;
					letter-spacing: 1.5px;
					text-transform: uppercase;
					font-weight: 400;
					display: inline-flex;
					align-items: baseline;
					gap: 10px;
					white-space: nowrap;
				}

				.fbc-title-white {
					color: #f5f3ec;
				}

				.fbc-title-green {
					color: #37c080;
					text-shadow: 0 0 35px rgba(55, 192, 128, 0.38);
				}

				.fbc-header-right {
					flex: 0 1 480px;
					min-width: 280px;
					margin-bottom: 4px;
				}

				.fbc-lead-text {
					margin: 0;
					font-family: 'Barlow', Inter, sans-serif;
					font-size: 14.5px;
					line-height: 1.65;
					color: #9e9c8e;
				}

				/* 3 Coaches Grid (SHARP RECTANGLES) */
				.fbc-cards-grid {
					display: grid;
					grid-template-columns: repeat(3, 1fr);
					gap: 26px;
					align-items: stretch;
				}

				/* Coach Card */
				.fbc-card {
					position: relative;
					background: rgba(12, 22, 22, 0.72);
					border: 1px solid rgba(255, 255, 255, 0.10);
					border-radius: 0px !important; /* Sharp corners */
					box-sizing: border-box;
					overflow: hidden;
					box-shadow: 0 20px 45px -15px rgba(0, 0, 0, 0.75);
					transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1), border-color 0.35s ease, box-shadow 0.35s ease;
					height: 480px;
					display: flex;
					flex-direction: column;
					justify-content: flex-end;
				}

				.fbc-card:hover {
					transform: translateY(-8px);
					border-color: rgba(55, 192, 128, 0.5);
					box-shadow: 0 30px 60px -15px rgba(0, 0, 0, 0.85), 0 0 30px rgba(55, 192, 128, 0.15);
				}

				/* Top Neon Accent Ribbon on Hover */
				.fbc-card::before {
					content: '';
					position: absolute;
					top: 0;
					left: 10%;
					right: 10%;
					height: 2px;
					background: linear-gradient(90deg, transparent, #3ee69a, transparent);
					box-shadow: 0 0 14px #3ee69a;
					opacity: 0;
					transition: opacity 0.35s ease;
					z-index: 5;
					pointer-events: none;
				}

				.fbc-card:hover::before {
					opacity: 1;
				}

				/* Coach Image */
				.fbc-card-img {
					position: absolute;
					inset: 0;
					width: 100%;
					height: 100%;
					object-fit: cover;
					object-position: center top;
					z-index: 1;
					transition: transform 0.45s cubic-bezier(0.16, 1, 0.3, 1);
				}

				.fbc-card:hover .fbc-card-img {
					transform: scale(1.05);
				}

				/* Experience Badge (Top Right) */
				.fbc-card-badge {
					position: absolute;
					top: 18px;
					right: 18px;
					z-index: 3;
					background: rgba(2, 6, 6, 0.85);
					backdrop-filter: blur(8px);
					-webkit-backdrop-filter: blur(8px);
					border: 1px solid rgba(55, 192, 128, 0.65);
					border-radius: 0px !important;
					padding: 6px 12px;
					font-family: 'Barlow', Inter, sans-serif;
					font-size: 11px;
					font-weight: 700;
					text-transform: uppercase;
					letter-spacing: 1.5px;
					color: #37c080;
					box-shadow: 0 4px 15px rgba(0, 0, 0, 0.4);
					transition: border-color 0.3s ease, background 0.3s ease;
				}

				.fbc-card:hover .fbc-card-badge {
					border-color: #3ee69a;
					background: rgba(4, 12, 10, 0.95);
					box-shadow: 0 0 15px rgba(55, 192, 128, 0.3);
				}

				/* Dark Gradient Shade Overlay */
				.fbc-card-overlay {
					position: absolute;
					inset: 0;
					background: linear-gradient(to top, rgba(2, 6, 6, 0.95) 0%, rgba(2, 6, 6, 0.65) 35%, rgba(2, 6, 6, 0.1) 65%, transparent 100%);
					z-index: 2;
					pointer-events: none;
				}

				/* Coach Info Panel (Bottom) */
				.fbc-card-info {
					position: relative;
					z-index: 3;
					padding: 24px 24px 26px;
					box-sizing: border-box;
				}

				.fbc-card-name {
					margin: 0;
					font-family: 'Bebas Neue', Impact, 'Barlow', sans-serif;
					font-size: 26px;
					line-height: 1.1;
					letter-spacing: 1.2px;
					text-transform: uppercase;
					color: #f5f3ec;
					font-weight: 400;
				}

				.fbc-card-divider {
					height: 2px;
					width: 36px;
					background: #37c080;
					margin: 8px 0 10px;
					transition: width 0.3s ease;
				}

				.fbc-card:hover .fbc-card-divider {
					width: 55px;
				}

				.fbc-card-role {
					margin: 0;
					font-family: 'Barlow', Inter, sans-serif;
					font-size: 11px;
					font-weight: 700;
					text-transform: uppercase;
					letter-spacing: 1.5px;
					color: #37c080;
				}

				/* Responsive */
				@media (max-width: 960px) {
					.fbc-cards-grid {
						grid-template-columns: repeat(2, 1fr);
						gap: 20px;
					}
					.fbc-card {
						height: 440px;
					}
				}

				@media (max-width: 640px) {
					.fbc-header {
						margin-bottom: 36px;
					}
					.fbc-title {
						flex-direction: column;
						align-items: flex-start;
						gap: 4px;
					}
					.fbc-cards-grid {
						grid-template-columns: 1fr;
						max-width: 440px;
						margin: 0 auto;
					}
					.fbc-card {
						height: 420px;
					}
				}
			</style>

			<!-- Atmospheric Ambient Glow -->
			<div class="fbc-ambient-glow"></div>

			<div class="fbc-inner">
				<!-- Header Row -->
				<div class="fbc-header">
					<div class="fbc-header-left">
						<div class="fbc-eyebrow">
							<span class="fbc-eyebrow-line"></span>
							THE COACHES
						</div>
						<h2 class="fbc-title">
							<span class="fbc-title-white">PEOPLE,</span>
							<span class="fbc-title-green">NOT PERSONALITIES.</span>
						</h2>
					</div>
					<div class="fbc-header-right">
						<p class="fbc-lead-text">
							Every FitBliss coach is certified, in-house trained, and answerable to you. You&#8217;ll know their name before your first set.
						</p>
					</div>
				</div>

				<!-- 3 Coaches Grid (Sharp Edge Theme) -->
				<div class="fbc-cards-grid">
					<!-- Coach 1: GURPREET SINGH -->
					<div class="fbc-card">
						<img decoding="async" src="<?php echo $base_url; ?>/assets/images/2026/07/Gurpreet-Singh.jpg" alt="Gurpreet Singh" class="fbc-card-img" loading="lazy" />
						<div class="fbc-card-badge">15+ YRS</div>
						<div class="fbc-card-overlay"></div>
						<div class="fbc-card-info">
							<h3 class="fbc-card-name">GURPREET SINGH</h3>
							<div class="fbc-card-divider"></div>
							<p class="fbc-card-role">STRENGTH COACH &amp; FLOOR MANAGER</p>
						</div>
					</div>

					<!-- Coach 2: SWAPNIL SHARMA -->
					<div class="fbc-card">
						<img decoding="async" src="<?php echo $base_url; ?>/assets/images/2026/07/Swapnil-Sharma.jpg" alt="Swapnil Sharma" class="fbc-card-img" loading="lazy" />
						<div class="fbc-card-badge">10 YRS</div>
						<div class="fbc-card-overlay"></div>
						<div class="fbc-card-info">
							<h3 class="fbc-card-name">SWAPNIL SHARMA</h3>
							<div class="fbc-card-divider"></div>
							<p class="fbc-card-role">PILATES INSTRUCTOR &amp; MARTIAL ARTS COACH</p>
						</div>
					</div>

					<!-- Coach 3: HITESH HOODA -->
					<div class="fbc-card">
						<img decoding="async" src="<?php echo $base_url; ?>/assets/images/2026/07/Hitesh-Hooda.jpg" alt="Hitesh Hooda" class="fbc-card-img" loading="lazy" />
						<div class="fbc-card-badge">8+ YRS</div>
						<div class="fbc-card-overlay"></div>
						<div class="fbc-card-info">
							<h3 class="fbc-card-name">HITESH HOODA</h3>
							<div class="fbc-card-divider"></div>
							<p class="fbc-card-role">PROFESSIONAL BOXING COACH</p>
						</div>
					</div>
				</div>
			</div>
		</div>
				<div class="elementor-element elementor-element-26d78446 e-con-full e-flex e-con e-child" data-id="26d78446" data-element_type="container" data-e-type="container" id="testimonials" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
		
		<!-- Redesigned Testimonials Header -->
		<div class="fbt-header-wrap">
			<div class="fbt-header-left">
				<p class="fbt-eyebrow">— MEMBER STORIES</p>
				<h2 class="fbt-main-title">
					<span class="fbt-title-white">WHAT OUR MEMBERS</span>
					<span class="fbt-title-green">SAY.</span>
				</h2>
			</div>
			<div class="fbt-header-right">
				<p class="fbt-lead-text">Real members. Real transformations. Watch their inspiring stories in their own words.</p>
			</div>
		</div>

		<div class="elementor-element elementor-element-2fc00804 e-con-full e-flex e-con e-child" data-id="2fc00804" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-element elementor-element-42a80fd1 elementor-widget elementor-widget-html" data-id="42a80fd1" data-element_type="widget" data-e-type="widget" data-widget_type="html.default">
				<div class="elementor-widget-container">
					<style>
    /* ─── Hero video styles preserved ─── */
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
        height: 56.25vw !important;
        min-height: 100vh !important;
        min-width: 177.78vh !important;
        transform: translate(-50%, -50%) scale(1.02) !important;
        border: none !important;
        pointer-events: none !important;
    }
    @media (max-aspect-ratio: 16/9) {
        #ytHeroIframe { width: 177.78vh !important; height: 100vh !important; min-width: 177.78vh !important; min-height: 100vh !important; transform: translate(-50%, -50%) scale(1.02) !important; }
    }
    @media (min-aspect-ratio: 16/9) {
        #ytHeroIframe { width: 100vw !important; height: 56.25vw !important; min-width: 100vw !important; min-height: 56.25vw !important; transform: translate(-50%, -50%) scale(1.02) !important; }
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
        #home { min-height: 100vh !important; height: 100vh !important; }
        .hero-container { padding: 30px 20px 40px !important; }
    }

    /* ─── REDESIGNED MEMBER STORIES SECTION ─── */
    .fbt-header-wrap {
        display: flex;
        align-items: flex-end;
        justify-content: space-between;
        gap: 32px;
        margin-bottom: 32px;
        padding: 0 4px;
        box-sizing: border-box;
        width: 100%;
    }
    .fbt-header-left {
        flex: 1;
        min-width: 280px;
    }
    .fbt-eyebrow {
        margin: 0 0 10px 0;
        font-family: 'Barlow', Inter, sans-serif;
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 3.5px;
        color: #37c080;
    }
    .fbt-main-title {
        margin: 0;
        font-family: 'Bebas Neue', Impact, 'Barlow', sans-serif;
        font-size: clamp(38px, 5.5vw, 68px);
        line-height: 0.95;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
    }
    .fbt-title-white {
        color: #f5f3ec;
    }
    .fbt-title-green {
        color: #37c080;
        text-shadow: 0 0 35px rgba(55, 192, 128, 0.38);
    }
    .fbt-header-right {
        flex: 0 1 420px;
        min-width: 260px;
        margin-bottom: 4px;
    }
    .fbt-lead-text {
        margin: 0;
        font-family: 'Barlow', Inter, sans-serif;
        font-size: 14.5px;
        line-height: 1.65;
        color: #9e9c8e;
    }

    /* ─── Slider Track & Wrapper ─── */
    .fbt-section {
        width: 100%;
        padding: 0;
        box-sizing: border-box;
    }
    #fbtTrack {
        display: flex;
        gap: 24px;
        transition: transform .55s cubic-bezier(.16, 1, .3, 1);
        will-change: transform;
    }

    /* ─── Sharp Luxury Video Card ─── */
    .fbt-card {
        position: relative;
        background: rgba(12, 22, 22, 0.72);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.10);
        border-radius: 0px !important; /* Sharp corners theme */
        overflow: hidden;
        display: flex;
        flex-direction: column;
        box-shadow: 0 20px 45px -15px rgba(0, 0, 0, 0.75);
        transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1), border-color 0.35s ease, box-shadow 0.35s ease;
        box-sizing: border-box;
    }
    .fbt-card:hover {
        transform: translateY(-8px);
        border-color: rgba(55, 192, 128, 0.5);
        box-shadow: 0 30px 60px -15px rgba(0, 0, 0, 0.85), 0 0 30px rgba(55, 192, 128, 0.16);
    }
    /* Top neon accent line on hover */
    .fbt-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 10%;
        right: 10%;
        height: 2px;
        background: linear-gradient(90deg, transparent, #3ee69a, transparent);
        box-shadow: 0 0 14px #3ee69a;
        opacity: 0;
        transition: opacity 0.35s ease;
        z-index: 5;
        pointer-events: none;
    }
    .fbt-card:hover::before {
        opacity: 1;
    }

    /* ─── Video Container ─── */
    .fbt-video-box {
        position: relative;
        width: 100%;
        padding-top: 177.78%; /* 9:16 portrait */
        background: #020606;
        overflow: hidden;
    }
    .fbt-video-box video {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform 0.45s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .fbt-card:hover .fbt-video-box video {
        transform: scale(1.03);
    }

    /* Bottom subtle shadow overlay */
    .fbt-video-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(2, 6, 6, 0.85) 0%, rgba(2, 6, 6, 0.25) 30%, transparent 60%);
        pointer-events: none;
        z-index: 1;
    }

    /* Category Tag Badge (Top Left - Sharp) */
    .fbt-category-badge {
        position: absolute;
        top: 16px;
        left: 16px;
        z-index: 3;
        background: rgba(2, 6, 6, 0.88);
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
        border: 1px solid rgba(55, 192, 128, 0.65);
        border-radius: 0px !important;
        padding: 6px 14px;
        font-family: 'Barlow', Inter, sans-serif;
        font-size: 10.5px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 2px;
        color: #37c080;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.4);
        pointer-events: none;
        transition: border-color 0.3s ease, background 0.3s ease, box-shadow 0.3s ease;
    }
    .fbt-card:hover .fbt-category-badge {
        border-color: #3ee69a;
        background: rgba(4, 12, 10, 0.95);
        box-shadow: 0 0 15px rgba(55, 192, 128, 0.3);
    }

    /* Play Trigger Overlay */
    .fbt-play-trigger {
        position: absolute;
        inset: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(1, 3, 3, 0.32);
        cursor: pointer;
        transition: background 0.25s ease;
        z-index: 2;
    }
    .fbt-play-trigger:hover {
        background: rgba(1, 3, 3, 0.16);
    }
    .fbt-play-btn {
        width: 58px;
        height: 58px;
        border-radius: 50%;
        background: #37c080;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 0 0 6px rgba(55, 192, 128, 0.25), 0 10px 25px rgba(0, 0, 0, 0.55);
        transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .fbt-card:hover .fbt-play-btn {
        transform: scale(1.1);
        background: #3ee69a;
        box-shadow: 0 0 0 8px rgba(55, 192, 128, 0.35), 0 0 30px rgba(55, 192, 128, 0.5);
    }
    .fbt-play-btn svg {
        width: 22px;
        height: 22px;
        fill: #020606;
        margin-left: 3px;
    }

    /* Card Info Bottom Panel */
    .fbt-card-info {
        padding: 16px 20px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        background: rgba(8, 16, 16, 0.96);
        border-top: 1px solid rgba(255, 255, 255, 0.08);
        position: relative;
        z-index: 3;
    }
    .fbt-user-wrap {
        display: flex;
        align-items: center;
        gap: 12px;
    }
    .fbt-avatar {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background: rgba(55, 192, 128, 0.15);
        border: 1px solid rgba(55, 192, 128, 0.45);
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: 'Bebas Neue', Impact, sans-serif;
        font-size: 15px;
        color: #37c080;
        flex-shrink: 0;
    }
    .fbt-name {
        font-family: 'Barlow', Inter, sans-serif;
        font-size: 13.5px;
        font-weight: 600;
        color: #f5f3ec;
        letter-spacing: 0.5px;
    }
    .fbt-member-tag {
        font-family: 'Barlow', Inter, sans-serif;
        font-size: 10px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 2px;
        color: #37c080;
        background: rgba(55, 192, 128, 0.08);
        border: 1px solid rgba(55, 192, 128, 0.25);
        border-radius: 0px !important;
        padding: 4px 10px;
    }

    /* ─── Footer Controls ─── */
    .fbt-footer {
        display: flex;
        align-items: center;
        justify-content: flex-end;
        margin-top: 28px;
        gap: 20px;
    }
    .fbt-nav-group {
        display: flex;
        align-items: center;
        gap: 20px;
    }
    .fbt-count-text {
        font-family: 'Barlow', Inter, sans-serif;
        font-size: 13px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 2.5px;
        color: #37c080;
    }
    .fbt-nav-btns {
        display: flex;
        gap: 10px;
    }
    .fbt-nav-btn {
        width: 44px;
        height: 44px;
        border: 1px solid rgba(255, 255, 255, 0.18);
        background: rgba(12, 22, 22, 0.7);
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
        border-radius: 0px !important; /* Sharp edges */
        color: #f5f3ec;
        font-size: 16px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.25s ease;
    }
    .fbt-nav-btn:hover {
        border-color: #37c080;
        color: #37c080;
        background: rgba(55, 192, 128, 0.12);
        box-shadow: 0 0 16px rgba(55, 192, 128, 0.25);
    }

    /* ─── Responsive Media Queries ─── */
    @media (max-width: 960px) {
        .fbt-header-wrap {
            flex-direction: column;
            align-items: flex-start;
            gap: 16px;
            margin-bottom: 28px;
        }
        .fbt-header-right {
            max-width: 100%;
        }
    }

    @media (max-width: 767px) {
        .fbt-header-wrap {
            margin-bottom: 22px;
        }
        .fbt-main-title {
            gap: 8px;
        }
        .fbt-footer {
            flex-direction: column;
            align-items: flex-start;
            gap: 24px;
        }
        .fbt-nav-group {
            width: 100%;
            justify-content: space-between;
        }
    }
</style>

<div class="fbt-section">
    <!-- Slider Viewport -->
    <div style="overflow:hidden;width:100%;">
        <div id="fbtTrack">
            <!-- Card 1 -->
            <div class="fbt-card" data-idx="0">
                <div class="fbt-video-box">
                    <video id="fbv0"
                        src="<?php echo $base_url; ?>/assets/images/2026/07/1-Nothing-makes-us-happier-than-seeing-our-clients-transform-and-share-their-journey-with-us.mp4#t=0.001"
                        preload="metadata" playsinline>
                    </video>
                    <div class="fbt-video-overlay"></div>
                    <div id="fbv0Ov" class="fbt-play-trigger" onclick="fbPlayVideo('fbv0')">
                        <div class="fbt-play-btn">
                            <svg viewBox="0 0 24 24"><polygon points="7,4 19,12 7,20" /></svg>
                        </div>
                    </div>
                    <span class="fbt-category-badge">Transformation</span>
                </div>
                <div class="fbt-card-info">
                    <div class="fbt-user-wrap">
                        <div class="fbt-avatar">M</div>
                        <span class="fbt-name">Member 1</span>
                    </div>
                    <span class="fbt-member-tag">FitBliss Member</span>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="fbt-card" data-idx="1">
                <div class="fbt-video-box">
                    <video id="fbv1"
                        src="<?php echo $base_url; ?>/assets/images/2026/07/Real-stories.-Real-results.-💥Hear-it-straight-from-Samved-—-how-Fitbliss-helped-him-push-limits-1.mp4#t=0.001"
                        preload="metadata" playsinline>
                    </video>
                    <div class="fbt-video-overlay"></div>
                    <div id="fbv1Ov" class="fbt-play-trigger" onclick="fbPlayVideo('fbv1')">
                        <div class="fbt-play-btn">
                            <svg viewBox="0 0 24 24"><polygon points="7,4 19,12 7,20" /></svg>
                        </div>
                    </div>
                    <span class="fbt-category-badge">Weight Loss</span>
                </div>
                <div class="fbt-card-info">
                    <div class="fbt-user-wrap">
                        <div class="fbt-avatar">M</div>
                        <span class="fbt-name">Member 2</span>
                    </div>
                    <span class="fbt-member-tag">FitBliss Member</span>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="fbt-card" data-idx="2">
                <div class="fbt-video-box">
                    <video id="fbv2"
                        src="<?php echo $base_url; ?>/assets/images/2026/07/Nothing-makes-us-happier-than-seeing-our-clients-transform-and-share-their-journey-with-us.mp4#t=0.001"
                        preload="metadata" playsinline>
                    </video>
                    <div class="fbt-video-overlay"></div>
                    <div id="fbv2Ov" class="fbt-play-trigger" onclick="fbPlayVideo('fbv2')">
                        <div class="fbt-play-btn">
                            <svg viewBox="0 0 24 24"><polygon points="7,4 19,12 7,20" /></svg>
                        </div>
                    </div>
                    <span class="fbt-category-badge">Strength</span>
                </div>
                <div class="fbt-card-info">
                    <div class="fbt-user-wrap">
                        <div class="fbt-avatar">M</div>
                        <span class="fbt-name">Member 3</span>
                    </div>
                    <span class="fbt-member-tag">FitBliss Member</span>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="fbt-card" data-idx="3">
                <div class="fbt-video-box">
                    <video id="fbv3"
                        src="<?php echo $base_url; ?>/assets/images/2026/07/At-Fitbliss-its-never-just-about-workouts-or-machines-—-its-about-people.-💫Every-transformat.mp4#t=0.001"
                        preload="metadata" playsinline>
                    </video>
                    <div class="fbt-video-overlay"></div>
                    <div id="fbv3Ov" class="fbt-play-trigger" onclick="fbPlayVideo('fbv3')">
                        <div class="fbt-play-btn">
                            <svg viewBox="0 0 24 24"><polygon points="7,4 19,12 7,20" /></svg>
                        </div>
                    </div>
                    <span class="fbt-category-badge">Pilates</span>
                </div>
                <div class="fbt-card-info">
                    <div class="fbt-user-wrap">
                        <div class="fbt-avatar">M</div>
                        <span class="fbt-name">Member 4</span>
                    </div>
                    <span class="fbt-member-tag">FitBliss Member</span>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="fbt-card" data-idx="4">
                <div class="fbt-video-box">
                    <video id="fbv4"
                        src="<?php echo $base_url; ?>/assets/images/2026/07/Harleens-journey-with-FITBLISS-by-Shruti-Kapoor-is-all-about-finding-joy-in-the-process-✨She-sh.mp4#t=0.001"
                        preload="metadata" playsinline>
                    </video>
                    <div class="fbt-video-overlay"></div>
                    <div id="fbv4Ov" class="fbt-play-trigger" onclick="fbPlayVideo('fbv4')">
                        <div class="fbt-play-btn">
                            <svg viewBox="0 0 24 24"><polygon points="7,4 19,12 7,20" /></svg>
                        </div>
                    </div>
                    <span class="fbt-category-badge">Boxing</span>
                </div>
                <div class="fbt-card-info">
                    <div class="fbt-user-wrap">
                        <div class="fbt-avatar">M</div>
                        <span class="fbt-name">Member 5</span>
                    </div>
                    <span class="fbt-member-tag">FitBliss Member</span>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="fbt-card" data-idx="5">
                <div class="fbt-video-box">
                    <video id="fbv5"
                        src="<?php echo $base_url; ?>/assets/images/2026/07/Kartikey-Singh-Chouhan-shares-his-journey-with-the-Fitbliss-by-Shruti-Kapoor✨—-from-structured-w.mp4#t=0.001"
                        preload="metadata" playsinline>
                    </video>
                    <div class="fbt-video-overlay"></div>
                    <div id="fbv5Ov" class="fbt-play-trigger" onclick="fbPlayVideo('fbv5')">
                        <div class="fbt-play-btn">
                            <svg viewBox="0 0 24 24"><polygon points="7,4 19,12 7,20" /></svg>
                        </div>
                    </div>
                    <span class="fbt-category-badge">Yoga</span>
                </div>
                <div class="fbt-card-info">
                    <div class="fbt-user-wrap">
                        <div class="fbt-avatar">M</div>
                        <span class="fbt-name">Member 6</span>
                    </div>
                    <span class="fbt-member-tag">FitBliss Member</span>
                </div>
            </div>

            <!-- Card 7 -->
            <div class="fbt-card" data-idx="6">
                <div class="fbt-video-box">
                    <video id="fbv6"
                        src="<?php echo $base_url; ?>/assets/images/2026/07/Real-people.-Real-struggles.-Real-transformation.Proud-to-be-part-of-your-journey.-💫–-FitBliss.mp4#t=0.001"
                        preload="metadata" playsinline>
                    </video>
                    <div class="fbt-video-overlay"></div>
                    <div id="fbv6Ov" class="fbt-play-trigger" onclick="fbPlayVideo('fbv6')">
                        <div class="fbt-play-btn">
                            <svg viewBox="0 0 24 24"><polygon points="7,4 19,12 7,20" /></svg>
                        </div>
                    </div>
                    <span class="fbt-category-badge">Fitness</span>
                </div>
                <div class="fbt-card-info">
                    <div class="fbt-user-wrap">
                        <div class="fbt-avatar">M</div>
                        <span class="fbt-name">Member 7</span>
                    </div>
                    <span class="fbt-member-tag">FitBliss Member</span>
                </div>
            </div>

            <!-- Card 8 -->
            <div class="fbt-card" data-idx="7">
                <div class="fbt-video-box">
                    <video id="fbv7"
                        src="<?php echo $base_url; ?>/assets/images/2026/07/Real-stories.-Real-results.-💪Heres-what-our-Fitbliss-client-had-to-say-about-their-journey-🌟.mp4#t=0.001"
                        preload="metadata" playsinline>
                    </video>
                    <div class="fbt-video-overlay"></div>
                    <div id="fbv7Ov" class="fbt-play-trigger" onclick="fbPlayVideo('fbv7')">
                        <div class="fbt-play-btn">
                            <svg viewBox="0 0 24 24"><polygon points="7,4 19,12 7,20" /></svg>
                        </div>
                    </div>
                    <span class="fbt-category-badge">Recovery</span>
                </div>
                <div class="fbt-card-info">
                    <div class="fbt-user-wrap">
                        <div class="fbt-avatar">M</div>
                        <span class="fbt-name">Member 8</span>
                    </div>
                    <span class="fbt-member-tag">FitBliss Member</span>
                </div>
            </div>

            <!-- Card 9 -->
            <div class="fbt-card" data-idx="8">
                <div class="fbt-video-box">
                    <video id="fbv8"
                        src="<?php echo $base_url; ?>/assets/images/2026/07/Results-dont-come-from-shortcuts.They-come-from-consistency-care-and-the-right-guidance.Arti_.mp4#t=0.001"
                        preload="metadata" playsinline>
                    </video>
                    <div class="fbt-video-overlay"></div>
                    <div id="fbv8Ov" class="fbt-play-trigger" onclick="fbPlayVideo('fbv8')">
                        <div class="fbt-play-btn">
                            <svg viewBox="0 0 24 24"><polygon points="7,4 19,12 7,20" /></svg>
                        </div>
                    </div>
                    <span class="fbt-category-badge">Zumba</span>
                </div>
                <div class="fbt-card-info">
                    <div class="fbt-user-wrap">
                        <div class="fbt-avatar">M</div>
                        <span class="fbt-name">Member 9</span>
                    </div>
                    <span class="fbt-member-tag">FitBliss Member</span>
                </div>
            </div>

            <!-- Card 10 -->
            <div class="fbt-card" data-idx="9">
                <div class="fbt-video-box">
                    <video id="fbv9"
                        src="<?php echo $base_url; ?>/assets/images/2026/07/Amanat-Singh-Chouhan-shares-her-experience-with-Fitbliss-by-Shruti-Kapoor-—-a-journey-guided-by.mp4#t=0.001"
                        preload="metadata" playsinline>
                    </video>
                    <div class="fbt-video-overlay"></div>
                    <div id="fbv9Ov" class="fbt-play-trigger" onclick="fbPlayVideo('fbv9')">
                        <div class="fbt-play-btn">
                            <svg viewBox="0 0 24 24"><polygon points="7,4 19,12 7,20" /></svg>
                        </div>
                    </div>
                    <span class="fbt-category-badge">Wellness</span>
                </div>
                <div class="fbt-card-info">
                    <div class="fbt-user-wrap">
                        <div class="fbt-avatar">M</div>
                        <span class="fbt-name">Member 10</span>
                    </div>
                    <span class="fbt-member-tag">FitBliss Member</span>
                </div>
            </div>

            <!-- Card 11 -->
            <div class="fbt-card" data-idx="10">
                <div class="fbt-video-box">
                    <video id="fbv10"
                        src="<?php echo $base_url; ?>/assets/images/2026/07/1-Nothing-makes-us-happier-than-seeing-our-clients-transform-and-share-their-journey-with-us.mp4#t=0.001"
                        preload="metadata" playsinline>
                    </video>
                    <div class="fbt-video-overlay"></div>
                    <div id="fbv10Ov" class="fbt-play-trigger" onclick="fbPlayVideo('fbv10')">
                        <div class="fbt-play-btn">
                            <svg viewBox="0 0 24 24"><polygon points="7,4 19,12 7,20" /></svg>
                        </div>
                    </div>
                    <span class="fbt-category-badge">Transformation</span>
                </div>
                <div class="fbt-card-info">
                    <div class="fbt-user-wrap">
                        <div class="fbt-avatar">M</div>
                        <span class="fbt-name">Member 1</span>
                    </div>
                    <span class="fbt-member-tag">FitBliss Member</span>
                </div>
            </div>

            <!-- Card 12 -->
            <div class="fbt-card" data-idx="11">
                <div class="fbt-video-box">
                    <video id="fbv11"
                        src="<?php echo $base_url; ?>/assets/images/2026/07/Real-stories.-Real-results.-💥Hear-it-straight-from-Samved-—-how-Fitbliss-helped-him-push-limits-1.mp4#t=0.001"
                        preload="metadata" playsinline>
                    </video>
                    <div class="fbt-video-overlay"></div>
                    <div id="fbv11Ov" class="fbt-play-trigger" onclick="fbPlayVideo('fbv11')">
                        <div class="fbt-play-btn">
                            <svg viewBox="0 0 24 24"><polygon points="7,4 19,12 7,20" /></svg>
                        </div>
                    </div>
                    <span class="fbt-category-badge">Weight Loss</span>
                </div>
                <div class="fbt-card-info">
                    <div class="fbt-user-wrap">
                        <div class="fbt-avatar">M</div>
                        <span class="fbt-name">Member 2</span>
                    </div>
                    <span class="fbt-member-tag">FitBliss Member</span>
                </div>
            </div>

        </div>
    </div>

    <!-- Redesigned Footer Controls -->
    <div class="fbt-footer">

        <!-- Right Side: Counter & Navigation Buttons -->
        <div class="fbt-nav-group">
            <span id="fbtCount" class="fbt-count-text">01 / 12</span>
            <div class="fbt-nav-btns">
                <button class="fbt-nav-btn" onclick="fbtSlide(-1)" aria-label="Previous Slide">←</button>
                <button class="fbt-nav-btn" onclick="fbtSlide(1)" aria-label="Next Slide">→</button>
            </div>
        </div>
    </div>
</div>

<script>
    (function () {
        var track   = document.getElementById('fbtTrack');
        var counter = document.getElementById('fbtCount');
        var N = 12, GAP = 24, cur = 0;

        /* Responsive SHOW count */
        function getShow() {
            var w = window.innerWidth;
            if (w < 640) return 1;
            if (w < 1024) return 2;
            return 3;
        }

        /* ── Play / pause logic ─────────────────────────────── */
        window.fbPlayVideo = function (id) {
            var vid = document.getElementById(id);
            var ov  = document.getElementById(id + 'Ov');
            if (!vid) return;
            document.querySelectorAll('#fbtTrack video').forEach(function (v) {
                if (v.id !== id) { v.pause(); v.currentTime = 0; }
                var o = document.getElementById(v.id + 'Ov');
                if (o && v.id !== id) o.style.display = 'flex';
            });
            if (vid.paused) {
                vid.play();
                if (ov) ov.style.display = 'none';
            } else {
                vid.pause();
                if (ov) ov.style.display = 'flex';
            }
            vid.addEventListener('ended', function () {
                if (ov) ov.style.display = 'flex';
            }, { once: true });
        };

        /* ── Slider logic ───────────────────────────────────── */
        function cardW() {
            var SHOW = getShow();
            var viewportW = track.parentElement.offsetWidth;
            return (viewportW - (SHOW - 1) * GAP) / SHOW;
        }

        function updateCardWidths() {
            var cw = cardW();
            track.querySelectorAll('.fbt-card').forEach(function (c) {
                c.style.flex  = '0 0 ' + cw + 'px';
                c.style.width = cw + 'px';
            });
        }

        function goTo(idx, animate) {
            /* Pause all videos when sliding */
            document.querySelectorAll('#fbtTrack video').forEach(function (v) {
                v.pause(); v.currentTime = 0;
                var o = document.getElementById(v.id + 'Ov');
                if (o) o.style.display = 'flex';
            });
            cur = ((idx % N) + N) % N;
            var tx = cur * (cardW() + GAP);
            track.style.transition = animate === false ? 'none' : 'transform .55s cubic-bezier(.16, 1, .3, 1)';
            track.style.transform  = 'translateX(-' + tx + 'px)';
            if (counter) counter.textContent = String(cur + 1).padStart(2, '0') + ' / ' + String(N).padStart(2, '0');
        }

        track.addEventListener('transitionend', function () {
            if (cur >= N) goTo(cur - N, false);
            if (cur < 0)  goTo(cur + N, false);
        });

        /* Touch swipe */
        var startX = 0, currentX = 0, isDragging = false;
        track.addEventListener('touchstart', function (e) {
            startX = currentX = e.touches[0].clientX;
            isDragging = true;
        }, { passive: true });
        track.addEventListener('touchmove', function (e) {
            if (!isDragging) return;
            currentX = e.touches[0].clientX;
        }, { passive: true });
        track.addEventListener('touchend', function () {
            if (!isDragging) return;
            isDragging = false;
            var diff = startX - currentX;
            if (Math.abs(diff) > 40) fbtSlide(diff > 0 ? 1 : -1);
        }, { passive: true });

        window.fbtSlide = function (d) { goTo(cur + d, true); };
        window.fbtGo    = function (i) { goTo(i, true); };

        window.addEventListener('resize', function () {
            updateCardWidths();
            goTo(cur, false);
        });

        window.addEventListener('load', function () {
            updateCardWidths();
            goTo(0, false);
        });

        updateCardWidths();
        goTo(0, false);
    })();
</script>				</div>
				</div>
				</div>
		</div>
				<div class="elementor-element elementor-element-500388e9 e-con-full e-flex e-con e-child" data-id="500388e9" data-element_type="container" data-e-type="container">
			<style>
				/* ─── REDESIGNED MEMBER WRITTEN REVIEWS ─── */
				.elementor-20307 .elementor-element.elementor-element-500388e9,
				.elementor-element.elementor-element-500388e9 {
					position: relative !important;
					width: 100% !important;
					max-width: 100% !important;
					background: #010303 !important;
					box-sizing: border-box !important;
					padding-left: 40px !important;
					padding-right: 40px !important;
					padding-top: 20px !important;
					padding-bottom: 70px !important;
					display: block !important;
				}
				.fbr-wrapper {
					width: 100%;
					box-sizing: border-box;
					padding: 0;
				}
				.fbr-grid {
					display: grid;
					grid-template-columns: repeat(2, 1fr);
					gap: 24px;
					width: 100%;
					box-sizing: border-box;
				}
				/* Sharp Luxury Card */
				.fbr-card {
					position: relative;
					background: rgba(12, 22, 22, 0.72);
					backdrop-filter: blur(12px);
					-webkit-backdrop-filter: blur(12px);
					border: 1px solid rgba(255, 255, 255, 0.10);
					border-radius: 0px !important; /* Sharp corners theme */
					padding: 30px 32px 26px;
					box-sizing: border-box;
					display: flex;
					flex-direction: column;
					justify-content: space-between;
					box-shadow: 0 20px 45px -15px rgba(0, 0, 0, 0.75);
					transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1), border-color 0.35s ease, box-shadow 0.35s ease;
					overflow: hidden;
				}
				.fbr-card:hover {
					transform: translateY(-6px);
					border-color: rgba(55, 192, 128, 0.5);
					box-shadow: 0 30px 60px -15px rgba(0, 0, 0, 0.85), 0 0 25px rgba(55, 192, 128, 0.16);
				}
				/* Top Neon Line Glow on Hover */
				.fbr-card::before {
					content: '';
					position: absolute;
					top: 0;
					left: 10%;
					right: 10%;
					height: 2px;
					background: linear-gradient(90deg, transparent, #3ee69a, transparent);
					box-shadow: 0 0 14px #3ee69a;
					opacity: 0;
					transition: opacity 0.35s ease;
					z-index: 5;
					pointer-events: none;
				}
				.fbr-card:hover::before {
					opacity: 1;
				}
				/* Card Header Row */
				.fbr-card-header {
					display: flex;
					align-items: center;
					justify-content: space-between;
					margin-bottom: 18px;
				}
				.fbr-quote-icon {
					display: flex;
					align-items: center;
					justify-content: center;
					width: 38px;
					height: 38px;
					background: rgba(55, 192, 128, 0.12);
					border: 1px solid rgba(55, 192, 128, 0.4);
					border-radius: 0px !important;
					box-shadow: 0 0 15px rgba(55, 192, 128, 0.15);
				}
				.fbr-quote-icon svg {
					width: 18px;
					height: 18px;
					fill: #37c080;
				}
				.fbr-rating-stars {
					display: flex;
					align-items: center;
					gap: 3px;
					color: #3ee69a;
					font-size: 13px;
					letter-spacing: 2px;
					text-shadow: 0 0 10px rgba(55, 192, 128, 0.4);
				}
				/* Review Body Text */
				.fbr-quote-text {
					margin: 0 0 22px 0;
					font-family: 'Barlow', Inter, sans-serif;
					font-size: 15.5px;
					line-height: 1.7;
					color: #d6d3c7;
					font-weight: 400;
					flex-grow: 1;
				}
				/* Subtle Divider Line */
				.fbr-divider {
					height: 1px;
					width: 100%;
					background: linear-gradient(90deg, rgba(55, 192, 128, 0.35), rgba(255, 255, 255, 0.08) 50%, transparent);
					margin: 0 0 18px 0;
				}
				/* Author Box Row */
				.fbr-author-box {
					display: flex;
					align-items: center;
					justify-content: space-between;
					gap: 14px;
				}
				.fbr-author-left {
					display: flex;
					align-items: center;
					gap: 14px;
				}
				.fbr-author-avatar {
					width: 40px;
					height: 40px;
					border-radius: 50%;
					background: rgba(55, 192, 128, 0.15);
					border: 1px solid rgba(55, 192, 128, 0.45);
					display: flex;
					align-items: center;
					justify-content: center;
					font-family: 'Bebas Neue', Impact, sans-serif;
					font-size: 16px;
					color: #37c080;
					flex-shrink: 0;
					box-shadow: 0 0 15px rgba(55, 192, 128, 0.2);
				}
				.fbr-author-info {
					display: flex;
					flex-direction: column;
					gap: 2px;
				}
				.fbr-author-name,
				h4.fbr-author-name,
				div.fbr-author-name {
					margin: 0 !important;
					font-family: 'Bebas Neue', Impact, 'Barlow', sans-serif !important;
					font-size: 22px !important;
					letter-spacing: 1.5px !important;
					text-transform: uppercase !important;
					color: #ffffff !important;
					font-weight: 400 !important;
					line-height: 1.1 !important;
					display: block !important;
					opacity: 1 !important;
					visibility: visible !important;
				}
				.fbr-author-sub,
				p.fbr-author-sub {
					margin: 0 !important;
					font-family: 'Barlow', Inter, sans-serif !important;
					font-size: 11px !important;
					font-weight: 700 !important;
					text-transform: uppercase !important;
					letter-spacing: 1.5px !important;
					color: #37c080 !important;
					display: block !important;
				}
				.fbr-verified-tag {
					font-family: 'Barlow', Inter, sans-serif;
					font-size: 9.5px;
					font-weight: 700;
					text-transform: uppercase;
					letter-spacing: 1.5px;
					color: #37c080;
					background: rgba(55, 192, 128, 0.08);
					border: 1px solid rgba(55, 192, 128, 0.25);
					border-radius: 0px !important;
					padding: 4px 10px;
					white-space: nowrap;
				}
				/* Responsive */
				@media (max-width: 1024px) {
					.elementor-20307 .elementor-element.elementor-element-500388e9,
					.elementor-element.elementor-element-500388e9 {
						padding-left: 20px !important;
						padding-right: 20px !important;
						padding-bottom: 50px !important;
					}
				}
				@media (max-width: 820px) {
					.fbr-grid {
						grid-template-columns: 1fr;
						gap: 18px;
					}
					.fbr-card {
						padding: 24px 22px 20px;
					}
				}
				@media (max-width: 767px) {
					.elementor-20307 .elementor-element.elementor-element-500388e9,
					.elementor-element.elementor-element-500388e9 {
						padding-left: 8px !important;
						padding-right: 8px !important;
						padding-bottom: 36px !important;
					}
				}
			</style>

			<div class="fbr-wrapper">
				<div class="fbr-grid">
					<!-- Card 1: Ananya Deshmukh -->
					<div class="fbr-card">
						<div>
							<div class="fbr-card-header">
								<div class="fbr-quote-icon">
									<svg viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
								</div>
								<div class="fbr-rating-stars">★★★★★</div>
							</div>
							<p class="fbr-quote-text">I&#8217;ve trained in three cities. FitBliss is the first place that felt like a studio, not a showroom. Shruti&#8217;s team actually watches you lift.</p>
						</div>
						<div>
							<div class="fbr-divider"></div>
							<div class="fbr-author-box">
								<div class="fbr-author-left">
									<div class="fbr-author-avatar">AD</div>
									<div class="fbr-author-info">
										<div class="fbr-author-name" style="color: #ffffff !important; font-family: 'Bebas Neue', Impact, 'Barlow', sans-serif !important; font-size: 22px !important; letter-spacing: 1.5px !important; line-height: 1.1 !important; margin: 0 !important; display: block !important;">ANANYA DESHMUKH</div>
										<p class="fbr-author-sub">Member since 2022</p>
									</div>
								</div>
								<span class="fbr-verified-tag">VERIFIED</span>
							</div>
						</div>
					</div>

					<!-- Card 2: Priya Sharma -->
					<div class="fbr-card">
						<div>
							<div class="fbr-card-header">
								<div class="fbr-quote-icon">
									<svg viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
								</div>
								<div class="fbr-rating-stars">★★★★★</div>
							</div>
							<p class="fbr-quote-text">The Pilates reformer sessions changed my posture completely. Six months in — back pain gone, core stronger than it&#8217;s ever been.</p>
						</div>
						<div>
							<div class="fbr-divider"></div>
							<div class="fbr-author-box">
								<div class="fbr-author-left">
									<div class="fbr-author-avatar">PS</div>
									<div class="fbr-author-info">
										<div class="fbr-author-name" style="color: #ffffff !important; font-family: 'Bebas Neue', Impact, 'Barlow', sans-serif !important; font-size: 22px !important; letter-spacing: 1.5px !important; line-height: 1.1 !important; margin: 0 !important; display: block !important;">PRIYA SHARMA</div>
										<p class="fbr-author-sub">Pilates member</p>
									</div>
								</div>
								<span class="fbr-verified-tag">VERIFIED</span>
							</div>
						</div>
					</div>

					<!-- Card 3: Rohit Verma -->
					<div class="fbr-card">
						<div>
							<div class="fbr-card-header">
								<div class="fbr-quote-icon">
									<svg viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
								</div>
								<div class="fbr-rating-stars">★★★★★</div>
							</div>
							<p class="fbr-quote-text">Boxing classes here are the real deal. Coach Jigyasa is a national medalist who actually trains you like one. I lost 12 kg in 3 months.</p>
						</div>
						<div>
							<div class="fbr-divider"></div>
							<div class="fbr-author-box">
								<div class="fbr-author-left">
									<div class="fbr-author-avatar">RV</div>
									<div class="fbr-author-info">
										<div class="fbr-author-name" style="color: #ffffff !important; font-family: 'Bebas Neue', Impact, 'Barlow', sans-serif !important; font-size: 22px !important; letter-spacing: 1.5px !important; line-height: 1.1 !important; margin: 0 !important; display: block !important;">ROHIT VERMA</div>
										<p class="fbr-author-sub">Boxing &#038; strength</p>
									</div>
								</div>
								<span class="fbr-verified-tag">VERIFIED</span>
							</div>
						</div>
					</div>

					<!-- Card 4: Kavita Malhotra -->
					<div class="fbr-card">
						<div>
							<div class="fbr-card-header">
								<div class="fbr-quote-icon">
									<svg viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
								</div>
								<div class="fbr-rating-stars">★★★★★</div>
							</div>
							<p class="fbr-quote-text">Best spa in Bhopal, hands down. After squash sessions I always end with a steam — it&#8217;s become a ritual I look forward to.</p>
						</div>
						<div>
							<div class="fbr-divider"></div>
							<div class="fbr-author-box">
								<div class="fbr-author-left">
									<div class="fbr-author-avatar">KM</div>
									<div class="fbr-author-info">
										<div class="fbr-author-name" style="color: #ffffff !important; font-family: 'Bebas Neue', Impact, 'Barlow', sans-serif !important; font-size: 22px !important; letter-spacing: 1.5px !important; line-height: 1.1 !important; margin: 0 !important; display: block !important;">KAVITA MALHOTRA</div>
										<p class="fbr-author-sub">Squash &#038; spa</p>
									</div>
								</div>
								<span class="fbr-verified-tag">VERIFIED</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
				<div class="elementor-element elementor-element-5166c835 e-con-full e-flex e-con e-child" data-id="5166c835" data-element_type="container" data-e-type="container" id="gallery" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<style>
				/* ─── FITBLISS "INSIDE FITBLISS / GALLERY" LUXURY REDESIGN ─── */
				#gallery.elementor-element-5166c835 {
					position: relative !important;
					width: 100% !important;
					max-width: 100% !important;
					background: #010303 !important;
					padding: clamp(70px, 8vw, 105px) clamp(20px, 4vw, 40px) 75px !important;
					box-sizing: border-box !important;
					display: block !important;
					border-bottom: 1px solid rgba(255, 255, 255, 0.08) !important;
					overflow: hidden !important;
				}

				/* Ambient Glow */
				.fbg-ambient-glow {
					position: absolute;
					top: 0;
					left: 50%;
					transform: translateX(-50%);
					width: 800px;
					height: 350px;
					background: radial-gradient(ellipse 60% 40% at 50% 0%, rgba(55, 192, 128, 0.09) 0%, transparent 70%);
					pointer-events: none;
					z-index: 0;
				}

				.fbg-inner {
					position: relative;
					z-index: 2;
					max-width: 1320px;
					margin: 0 auto;
					box-sizing: border-box;
				}

				/* Header Row */
				.fbg-header {
					display: flex;
					justify-content: space-between;
					align-items: flex-end;
					gap: 32px;
					margin-bottom: 34px;
					flex-wrap: wrap;
				}
				.fbg-header-left {
					flex: 1 1 520px;
					min-width: 280px;
				}
				.fbg-eyebrow {
					display: inline-flex;
					align-items: center;
					gap: 8px;
					font-family: 'Barlow', Inter, sans-serif;
					font-size: 11.5px;
					font-weight: 700;
					text-transform: uppercase;
					letter-spacing: 3.5px;
					color: #37c080;
					margin-bottom: 12px;
				}
				.fbg-eyebrow-line {
					display: inline-block;
					width: 18px;
					height: 2px;
					background: #37c080;
				}
				.fbg-title {
					margin: 0;
					font-family: 'Bebas Neue', Impact, 'Barlow', sans-serif;
					font-size: clamp(38px, 5.2vw, 64px);
					line-height: 0.95;
					letter-spacing: 1.5px;
					text-transform: uppercase;
					color: #ffffff !important;
					font-weight: 400;
				}
				.fbg-title-highlight {
					color: #37c080 !important;
					text-shadow: 0 0 35px rgba(55, 192, 128, 0.38);
				}
				.fbg-header-right {
					flex: 0 1 420px;
					min-width: 260px;
					margin-bottom: 4px;
				}
				.fbg-desc {
					margin: 0;
					font-family: 'Barlow', Inter, sans-serif;
					font-size: 14.5px;
					line-height: 1.65;
					color: #9e9c8e;
				}

				/* Filter Bar */
				.fbg-filter-bar {
					display: flex;
					align-items: center;
					gap: 8px;
					margin-bottom: 22px;
					flex-wrap: wrap;
				}
				.fbg-filter-btn {
					background: rgba(12, 22, 22, 0.72);
					border: 1px solid rgba(255, 255, 255, 0.14);
					color: #b5b3a6;
					font-family: 'Barlow', Inter, sans-serif;
					font-size: 10px;
					font-weight: 700;
					text-transform: uppercase;
					letter-spacing: 1.2px;
					padding: 5px 13px;
					border-radius: 0px !important;
					cursor: pointer;
					transition: all 0.25s ease;
					outline: none;
				}
				.fbg-filter-btn:hover,
				.fbg-filter-btn.active {
					background: rgba(55, 192, 128, 0.14);
					border-color: #37c080;
					color: #37c080;
					box-shadow: 0 0 14px rgba(55, 192, 128, 0.18);
				}

				/* Gallery Grid */
				.fbg-grid {
					display: grid;
					grid-template-columns: repeat(4, 1fr);
					gap: 16px;
					width: 100%;
					box-sizing: border-box;
				}

				/* Photo Card (Sharp Luxury) */
				.fbg-card {
					position: relative;
					background: #020606;
					border: 1px solid rgba(255, 255, 255, 0.10);
					border-radius: 0px !important;
					overflow: hidden;
					aspect-ratio: 4 / 3;
					cursor: pointer;
					box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
					transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1), border-color 0.35s ease, box-shadow 0.35s ease, opacity 0.3s ease;
				}
				.fbg-card.fbg-hidden {
					display: none !important;
				}
				.fbg-card:hover {
					transform: translateY(-6px);
					border-color: rgba(55, 192, 128, 0.6);
					box-shadow: 0 20px 45px -10px rgba(0, 0, 0, 0.8), 0 0 25px rgba(55, 192, 128, 0.2);
				}

				/* Top Neon Line on Hover */
				.fbg-card::before {
					content: '';
					position: absolute;
					top: 0;
					left: 10%;
					right: 10%;
					height: 2px;
					background: linear-gradient(90deg, transparent, #3ee69a, transparent);
					box-shadow: 0 0 14px #3ee69a;
					opacity: 0;
					transition: opacity 0.35s ease;
					z-index: 5;
					pointer-events: none;
				}
				.fbg-card:hover::before {
					opacity: 1;
				}

				.fbg-img {
					width: 100%;
					height: 100%;
					object-fit: cover;
					object-position: center;
					display: block;
					transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1), filter 0.4s ease;
				}
				.fbg-card:hover .fbg-img {
					transform: scale(1.08);
					filter: brightness(1.05);
				}

				/* Card Overlay */
				.fbg-overlay {
					position: absolute;
					inset: 0;
					background: linear-gradient(180deg, rgba(2, 6, 6, 0.1) 0%, rgba(2, 6, 6, 0.4) 50%, rgba(2, 6, 6, 0.94) 100%);
					opacity: 0;
					transition: opacity 0.35s ease;
					display: flex;
					flex-direction: column;
					justify-content: space-between;
					padding: 16px;
					box-sizing: border-box;
					z-index: 2;
				}
				.fbg-card:hover .fbg-overlay {
					opacity: 1;
				}

				/* Top Tag */
				.fbg-tag {
					align-self: flex-start;
					font-family: 'Barlow', Inter, sans-serif;
					font-size: 9.5px;
					font-weight: 700;
					text-transform: uppercase;
					letter-spacing: 2px;
					color: #37c080;
					background: rgba(2, 6, 6, 0.92);
					border: 1px solid rgba(55, 192, 128, 0.4);
					border-radius: 0px !important;
					padding: 4px 10px;
					backdrop-filter: blur(6px);
					transform: translateY(-8px);
					transition: transform 0.3s ease;
				}
				.fbg-card:hover .fbg-tag {
					transform: translateY(0);
				}

				/* Bottom Meta & Expand Icon */
				.fbg-bottom {
					display: flex;
					align-items: flex-end;
					justify-content: space-between;
					gap: 10px;
					transform: translateY(8px);
					transition: transform 0.3s ease;
				}
				.fbg-card:hover .fbg-bottom {
					transform: translateY(0);
				}
				.fbg-card-title {
					margin: 0;
					font-family: 'Barlow', Inter, sans-serif;
					font-size: 13.5px;
					font-weight: 600;
					color: #ffffff;
					letter-spacing: 0.5px;
					line-height: 1.3;
				}
				.fbg-expand-icon {
					width: 32px;
					height: 32px;
					background: rgba(55, 192, 128, 0.2);
					border: 1px solid rgba(55, 192, 128, 0.6);
					border-radius: 0px !important;
					display: flex;
					align-items: center;
					justify-content: center;
					color: #3ee69a;
					flex-shrink: 0;
					box-shadow: 0 0 12px rgba(55, 192, 128, 0.3);
				}
				.fbg-expand-icon svg {
					width: 14px;
					height: 14px;
					fill: currentColor;
				}

				/* ─── Bottom Tour Bar ─── */
				.fbg-tour-bar {
					margin-top: 36px;
					background: rgba(12, 22, 22, 0.75);
					border: 1px solid rgba(255, 255, 255, 0.12);
					border-radius: 0px !important;
					padding: 24px 32px;
					display: flex;
					align-items: center;
					justify-content: space-between;
					gap: 24px;
					flex-wrap: wrap;
					backdrop-filter: blur(12px);
					box-shadow: 0 15px 35px -10px rgba(0, 0, 0, 0.6);
				}
				.fbg-tour-left {
					display: flex;
					align-items: center;
					gap: 16px;
				}
				.fbg-pulse-dot {
					width: 10px;
					height: 10px;
					border-radius: 50%;
					background: #37c080;
					box-shadow: 0 0 10px #37c080;
					animation: fbgPulse 2s infinite ease-in-out;
					flex-shrink: 0;
				}
				@keyframes fbgPulse {
					0%, 100% { opacity: 1; transform: scale(1); }
					50% { opacity: 0.4; transform: scale(1.3); }
				}
				.fbg-tour-text {
					margin: 0;
					font-family: 'Barlow', Inter, sans-serif;
					font-size: 14.5px;
					font-weight: 500;
					color: #d6d3c7;
					letter-spacing: 0.3px;
				}
				.fbg-tour-text strong {
					color: #ffffff;
					font-weight: 700;
				}
				.fbg-tour-btn {
					display: inline-flex;
					align-items: center;
					gap: 10px;
					background: #37c080;
					color: #020606 !important;
					font-family: 'Barlow', Inter, sans-serif;
					font-size: 12.5px;
					font-weight: 700;
					text-transform: uppercase;
					letter-spacing: 2px;
					padding: 13px 26px;
					border: 1px solid #37c080;
					border-radius: 0px !important;
					text-decoration: none !important;
					transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
					box-shadow: 0 0 20px rgba(55, 192, 128, 0.35);
				}
				.fbg-tour-btn:hover {
					background: #3ee69a;
					border-color: #3ee69a;
					transform: translateY(-2px);
					box-shadow: 0 0 30px rgba(55, 192, 128, 0.6);
					color: #020606 !important;
				}
				.fbg-tour-btn svg {
					width: 16px;
					height: 16px;
					stroke: currentColor;
					stroke-width: 2.2;
					fill: none;
					transition: transform 0.25s ease;
				}
				.fbg-tour-btn:hover svg {
					transform: translateX(4px);
				}

				/* ─── Lightbox Modal ─── */
				.fbg-lightbox {
					position: fixed;
					inset: 0;
					background: rgba(2, 6, 6, 0.94);
					backdrop-filter: blur(16px);
					-webkit-backdrop-filter: blur(16px);
					z-index: 999999;
					display: none;
					align-items: center;
					justify-content: center;
					padding: 25px;
					box-sizing: border-box;
				}
				.fbg-lightbox.fbg-active {
					display: flex;
				}
				.fbg-lightbox-content {
					position: relative;
					max-width: 90vw;
					max-height: 85vh;
					display: flex;
					flex-direction: column;
					align-items: center;
				}
				.fbg-lightbox-img {
					max-width: 90vw;
					max-height: 78vh;
					object-fit: contain;
					border: 1px solid rgba(255, 255, 255, 0.15);
					box-shadow: 0 25px 60px rgba(0, 0, 0, 0.95), 0 0 40px rgba(55, 192, 128, 0.25);
				}
				.fbg-lightbox-caption {
					margin-top: 14px;
					font-family: 'Barlow', Inter, sans-serif;
					font-size: 14px;
					letter-spacing: 1px;
					color: #d6d3c7;
					text-align: center;
					display: flex;
					align-items: center;
					gap: 16px;
				}
				.fbg-lightbox-counter {
					color: #37c080;
					font-weight: 700;
					letter-spacing: 2px;
				}
				.fbg-lightbox-close {
					position: absolute;
					top: 24px;
					right: 28px;
					width: 44px;
					height: 44px;
					background: rgba(12, 22, 22, 0.85);
					border: 1px solid rgba(255, 255, 255, 0.2);
					color: #f5f3ec;
					font-size: 22px;
					cursor: pointer;
					display: flex;
					align-items: center;
					justify-content: center;
					transition: all 0.25s ease;
					z-index: 10;
					border-radius: 0px !important;
				}
				.fbg-lightbox-close:hover {
					color: #37c080;
					border-color: #37c080;
					box-shadow: 0 0 15px rgba(55, 192, 128, 0.35);
				}
				.fbg-lightbox-nav {
					position: absolute;
					top: 50%;
					transform: translateY(-50%);
					width: 48px;
					height: 48px;
					background: rgba(12, 22, 22, 0.85);
					border: 1px solid rgba(255, 255, 255, 0.2);
					color: #f5f3ec;
					font-size: 26px;
					cursor: pointer;
					display: flex;
					align-items: center;
					justify-content: center;
					transition: all 0.25s ease;
					z-index: 10;
					border-radius: 0px !important;
				}
				.fbg-lightbox-nav:hover {
					color: #37c080;
					border-color: #37c080;
					box-shadow: 0 0 15px rgba(55, 192, 128, 0.35);
				}
				.fbg-lightbox-prev { left: 24px; }
				.fbg-lightbox-next { right: 24px; }

				/* Responsive */
				@media (max-width: 1024px) {
					.fbg-grid {
						grid-template-columns: repeat(2, 1fr);
						gap: 14px;
					}
				}
				@media (max-width: 767px) {
					.fbg-header {
						flex-direction: column;
						align-items: flex-start;
						gap: 16px;
						margin-bottom: 24px;
					}
					.fbg-tour-bar {
						flex-direction: column;
						align-items: flex-start;
						padding: 20px;
						gap: 16px;
					}
					.fbg-tour-btn {
						width: 100%;
						justify-content: center;
					}
					.fbg-lightbox-nav {
						width: 40px;
						height: 40px;
						font-size: 20px;
					}
					.fbg-lightbox-prev { left: 10px; }
					.fbg-lightbox-next { right: 10px; }
				}
				@media (max-width: 520px) {
					.fbg-grid {
						grid-template-columns: 1fr;
					}
				}
			</style>

			<div class="fbg-ambient-glow"></div>

			<div class="fbg-inner">
				<!-- Header Row -->
				<div class="fbg-header">
					<div class="fbg-header-left">
						<span class="fbg-eyebrow">
							<span class="fbg-eyebrow-line"></span>
							Inside FitBliss
						</span>
						<h2 class="fbg-title">
							A LOOK AROUND <span class="fbg-title-highlight">THE ROOM.</span>
						</h2>
					</div>
					<div class="fbg-header-right">
						<p class="fbg-desc">Step inside Bhopal's premier wellness studio — meticulously engineered for focus, posture, and peak strength.</p>
					</div>
				</div>

				<!-- Filter Tabs -->
				<div class="fbg-filter-bar">
					<button class="fbg-filter-btn active" data-filter="all">ALL (8)</button>
					<button class="fbg-filter-btn" data-filter="pilates">PILATES &amp; YOGA</button>
					<button class="fbg-filter-btn" data-filter="strength">STRENGTH &amp; GYM</button>
					<button class="fbg-filter-btn" data-filter="community">COMMUNITY &amp; SQUAD</button>
				</div>

				<!-- 8 Gallery Cards -->
				<div class="fbg-grid" id="fbgGrid">
					<!-- Photo 1: Pilates Reformer -->
					<div class="fbg-card" data-category="pilates" data-src="<?php echo $base_url; ?>/assets/images/2026/07/DSC04158_11zon-1.jpg" data-title="Dynamic Reformer Duet" data-tag="PILATES REFORMER" data-idx="0">
						<img src="<?php echo $base_url; ?>/assets/images/2026/07/DSC04158_11zon-1-300x200.jpg" alt="Dynamic Reformer Duet" class="fbg-img" loading="lazy" />
						<div class="fbg-overlay">
							<span class="fbg-tag">PILATES REFORMER</span>
							<div class="fbg-bottom">
								<h3 class="fbg-card-title">Dynamic Reformer Duet</h3>
								<div class="fbg-expand-icon">
									<svg viewBox="0 0 24 24"><path d="M15 3h6v6m0-6L14 10M9 21H3v-6m0 6l7-7"/></svg>
								</div>
							</div>
						</div>
					</div>

					<!-- Photo 2: Community Team Event -->
					<div class="fbg-card" data-category="community" data-src="<?php echo $base_url; ?>/assets/images/2026/07/DSC_2025-scaled-1.jpg" data-title="FitBliss Community &amp; Team" data-tag="COMMUNITY &amp; EVENTS" data-idx="1">
						<img src="<?php echo $base_url; ?>/assets/images/2026/07/DSC_2025-scaled-1-300x200.jpg" alt="FitBliss Community &amp; Team" class="fbg-img" loading="lazy" />
						<div class="fbg-overlay">
							<span class="fbg-tag">COMMUNITY &amp; EVENTS</span>
							<div class="fbg-bottom">
								<h3 class="fbg-card-title">FitBliss Community &amp; Team</h3>
								<div class="fbg-expand-icon">
									<svg viewBox="0 0 24 24"><path d="M15 3h6v6m0-6L14 10M9 21H3v-6m0 6l7-7"/></svg>
								</div>
							</div>
						</div>
					</div>

					<!-- Photo 3: Boxing & Energy Squad -->
					<div class="fbg-card" data-category="community" data-src="<?php echo $base_url; ?>/assets/images/2026/07/DSC_0058-scaled-1.jpg" data-title="Boxing Studio Squad" data-tag="BOXING &amp; SQUAD" data-idx="2">
						<img src="<?php echo $base_url; ?>/assets/images/2026/07/DSC_0058-scaled-1-300x200.jpg" alt="Boxing Studio Squad" class="fbg-img" loading="lazy" />
						<div class="fbg-overlay">
							<span class="fbg-tag">BOXING &amp; SQUAD</span>
							<div class="fbg-bottom">
								<h3 class="fbg-card-title">Boxing Studio Squad</h3>
								<div class="fbg-expand-icon">
									<svg viewBox="0 0 24 24"><path d="M15 3h6v6m0-6L14 10M9 21H3v-6m0 6l7-7"/></svg>
								</div>
							</div>
						</div>
					</div>

					<!-- Photo 4: Shruti Kapoor & Members -->
					<div class="fbg-card" data-category="community" data-src="<?php echo $base_url; ?>/assets/images/2026/07/DSC_8892-scaled-1.jpg" data-title="Coach Shruti &amp; Members" data-tag="LEADERSHIP &amp; SQUAD" data-idx="3">
						<img src="<?php echo $base_url; ?>/assets/images/2026/07/DSC_8892-scaled-1-300x200.jpg" alt="Coach Shruti &amp; Members" class="fbg-img" loading="lazy" />
						<div class="fbg-overlay">
							<span class="fbg-tag">LEADERSHIP &amp; SQUAD</span>
							<div class="fbg-bottom">
								<h3 class="fbg-card-title">Coach Shruti &amp; Members</h3>
								<div class="fbg-expand-icon">
									<svg viewBox="0 0 24 24"><path d="M15 3h6v6m0-6L14 10M9 21H3v-6m0 6l7-7"/></svg>
								</div>
							</div>
						</div>
					</div>

					<!-- Photo 5: Group Reformer Studio -->
					<div class="fbg-card" data-category="pilates" data-src="<?php echo $base_url; ?>/assets/images/2026/07/DSC04258_11zon-1.jpg" data-title="Reformer Studio Session" data-tag="PILATES REFORMER" data-idx="4">
						<img src="<?php echo $base_url; ?>/assets/images/2026/07/DSC04258_11zon-1-300x200.jpg" alt="Reformer Studio Session" class="fbg-img" loading="lazy" />
						<div class="fbg-overlay">
							<span class="fbg-tag">PILATES REFORMER</span>
							<div class="fbg-bottom">
								<h3 class="fbg-card-title">Reformer Studio Session</h3>
								<div class="fbg-expand-icon">
									<svg viewBox="0 0 24 24"><path d="M15 3h6v6m0-6L14 10M9 21H3v-6m0 6l7-7"/></svg>
								</div>
							</div>
						</div>
					</div>

					<!-- Photo 6: Equipment Multi-Station -->
					<div class="fbg-card" data-category="strength" data-src="<?php echo $base_url; ?>/assets/images/2026/07/IMG_0642-scaled-1.webp" data-title="Advanced Biomechanics Machine" data-tag="EQUIPMENT ARENA" data-idx="5">
						<img src="<?php echo $base_url; ?>/assets/images/2026/07/IMG_0642-scaled-1-300x225.webp" alt="Advanced Biomechanics Machine" class="fbg-img" loading="lazy" />
						<div class="fbg-overlay">
							<span class="fbg-tag">EQUIPMENT ARENA</span>
							<div class="fbg-bottom">
								<h3 class="fbg-card-title">Advanced Biomechanics Machine</h3>
								<div class="fbg-expand-icon">
									<svg viewBox="0 0 24 24"><path d="M15 3h6v6m0-6L14 10M9 21H3v-6m0 6l7-7"/></svg>
								</div>
							</div>
						</div>
					</div>

					<!-- Photo 7: Strength & Weights Floor -->
					<div class="fbg-card" data-category="strength" data-src="<?php echo $base_url; ?>/assets/images/2026/07/TZ3_0696-scaled-1.webp" data-title="Strength Arena &amp; Trainers" data-tag="STRENGTH ZONE" data-idx="6">
						<img src="<?php echo $base_url; ?>/assets/images/2026/07/TZ3_0696-scaled-1-300x200.webp" alt="Strength Arena &amp; Trainers" class="fbg-img" loading="lazy" />
						<div class="fbg-overlay">
							<span class="fbg-tag">STRENGTH ZONE</span>
							<div class="fbg-bottom">
								<h3 class="fbg-card-title">Strength Arena &amp; Trainers</h3>
								<div class="fbg-expand-icon">
									<svg viewBox="0 0 24 24"><path d="M15 3h6v6m0-6L14 10M9 21H3v-6m0 6l7-7"/></svg>
								</div>
							</div>
						</div>
					</div>

					<!-- Photo 8: Reformer Studio Team -->
					<div class="fbg-card" data-category="pilates" data-src="<?php echo $base_url; ?>/assets/images/2026/07/TZ3_0772-scaled-1.webp" data-title="Pilates Studio Squad" data-tag="PILATES &amp; SQUAD" data-idx="7">
						<img src="<?php echo $base_url; ?>/assets/images/2026/07/TZ3_0772-scaled-1-300x200.webp" alt="Pilates Studio Squad" class="fbg-img" loading="lazy" />
						<div class="fbg-overlay">
							<span class="fbg-tag">PILATES &amp; SQUAD</span>
							<div class="fbg-bottom">
								<h3 class="fbg-card-title">Pilates Studio Squad</h3>
								<div class="fbg-expand-icon">
									<svg viewBox="0 0 24 24"><path d="M15 3h6v6m0-6L14 10M9 21H3v-6m0 6l7-7"/></svg>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Tour & Visit Bar -->
				<div class="fbg-tour-bar">
					<div class="fbg-tour-left">
						<span class="fbg-pulse-dot"></span>
						<p class="fbg-tour-text"><strong>WALK-IN HOURS:</strong> Mon–Sat, 6:00 AM – 10:00 PM • Free studio tours &amp; trials daily.</p>
					</div>
					<a href="https://wa.me/917470787014" target="_blank" rel="noopener noreferrer" class="fbg-tour-btn">
						Schedule a visit
						<svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
					</a>
				</div>
			</div>

			<!-- Built-in Dark Luxury Lightbox -->
			<div id="fbgLightbox" class="fbg-lightbox" onclick="fbgCloseOnBackdrop(event)">
				<button class="fbg-lightbox-close" onclick="fbgCloseLightbox()" aria-label="Close Lightbox">✕</button>
				<button class="fbg-lightbox-nav fbg-lightbox-prev" onclick="fbgNavLightbox(-1)" aria-label="Previous Photo">‹</button>
				<button class="fbg-lightbox-nav fbg-lightbox-next" onclick="fbgNavLightbox(1)" aria-label="Next Photo">›</button>
				<div class="fbg-lightbox-content">
					<img id="fbgLbImg" src="" alt="Enlarged FitBliss Photo" class="fbg-lightbox-img" />
					<div class="fbg-lightbox-caption">
						<span id="fbgLbTitle">Dynamic Reformer Duet</span>
						<span class="fbg-lightbox-counter" id="fbgLbCount">01 / 08</span>
					</div>
				</div>
			</div>

			<script>
				(function() {
					/* Filter Logic */
					var filterBtns = document.querySelectorAll('.fbg-filter-btn');
					var cards = document.querySelectorAll('.fbg-card');

					filterBtns.forEach(function(btn) {
						btn.addEventListener('click', function() {
							filterBtns.forEach(function(b) { b.classList.remove('active'); });
							btn.classList.add('active');
							var cat = btn.getAttribute('data-filter');

							cards.forEach(function(card) {
								if (cat === 'all' || card.getAttribute('data-category') === cat) {
									card.classList.remove('fbg-hidden');
								} else {
									card.classList.add('fbg-hidden');
								}
							});
						});
					});

					/* Lightbox Logic */
					var currentIdx = 0;
					var visibleCards = [];
					var lb = document.getElementById('fbgLightbox');
					var lbImg = document.getElementById('fbgLbImg');
					var lbTitle = document.getElementById('fbgLbTitle');
					var lbCount = document.getElementById('fbgLbCount');

					function getVisibleCards() {
						return Array.from(document.querySelectorAll('.fbg-card:not(.fbg-hidden)'));
					}

					function openLb(idx) {
						visibleCards = getVisibleCards();
						if (idx < 0) idx = 0;
						if (idx >= visibleCards.length) idx = visibleCards.length - 1;
						currentIdx = idx;
						var c = visibleCards[currentIdx];
						if (!c) return;

						lbImg.src = c.getAttribute('data-src');
						lbTitle.textContent = c.getAttribute('data-title');
						lbCount.textContent = String(currentIdx + 1).padStart(2, '0') + ' / ' + String(visibleCards.length).padStart(2, '0');
						lb.classList.add('fbg-active');
						document.body.style.overflow = 'hidden';
					}

					window.fbgCloseLightbox = function() {
						lb.classList.remove('fbg-active');
						document.body.style.overflow = '';
					};

					window.fbgNavLightbox = function(step) {
						visibleCards = getVisibleCards();
						if (!visibleCards.length) return;
						currentIdx = (currentIdx + step + visibleCards.length) % visibleCards.length;
						var c = visibleCards[currentIdx];
						lbImg.src = c.getAttribute('data-src');
						lbTitle.textContent = c.getAttribute('data-title');
						lbCount.textContent = String(currentIdx + 1).padStart(2, '0') + ' / ' + String(visibleCards.length).padStart(2, '0');
					};

					window.fbgCloseOnBackdrop = function(e) {
						if (e.target === lb) {
							fbgCloseLightbox();
						}
					};

					cards.forEach(function(card) {
						card.addEventListener('click', function() {
							visibleCards = getVisibleCards();
							var idx = visibleCards.indexOf(card);
							openLb(idx);
						});
					});

					/* Keyboard shortcuts */
					document.addEventListener('keydown', function(e) {
						if (!lb.classList.contains('fbg-active')) return;
						if (e.key === 'Escape') fbgCloseLightbox();
						if (e.key === 'ArrowLeft') fbgNavLightbox(-1);
						if (e.key === 'ArrowRight') fbgNavLightbox(1);
					});
				})();
			</script>
		</div>
								<div class="elementor-element elementor-element-512f8a28 e-con-full e-flex e-con e-child" data-id="512f8a28" data-element_type="container" data-e-type="container" id="join" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<style>
				/* ─── FITBLISS "BOOK A FREE TRIAL / JOIN" LUXURY COMPACT TYPOGRAPHY ─── */
				#join.elementor-element-512f8a28 {
					position: relative !important;
					width: 100% !important;
					max-width: 100% !important;
					background: #010303 !important;
					padding: clamp(60px, 6vw, 90px) clamp(20px, 4vw, 40px) !important;
					box-sizing: border-box !important;
					display: block !important;
					border-top: 1px solid rgba(255, 255, 255, 0.08) !important;
					overflow: hidden !important;
				}

				/* Ambient Atmosphere */
				.fbj-ambient-glow {
					position: absolute;
					inset: 0;
					background: 
						radial-gradient(ellipse 70% 50% at 15% 45%, rgba(55, 192, 128, 0.07) 0%, transparent 65%),
						radial-gradient(ellipse 60% 50% at 85% 55%, rgba(55, 192, 128, 0.05) 0%, transparent 60%);
					pointer-events: none;
					z-index: 0;
				}

				.fbj-inner {
					position: relative;
					z-index: 2;
					max-width: 1260px;
					margin: 0 auto;
					box-sizing: border-box;
				}

				/* 2-Column Grid Layout */
				.fbj-grid {
					display: grid;
					grid-template-columns: 1.15fr 0.85fr;
					gap: clamp(32px, 4.5vw, 56px);
					align-items: center;
					width: 100%;
					box-sizing: border-box;
				}

				/* ── Left Column: Narrative & Pillars ── */
				.fbj-content {
					display: flex;
					flex-direction: column;
					align-items: flex-start;
				}
				.fbj-eyebrow {
					display: inline-flex;
					align-items: center;
					gap: 8px;
					font-family: 'Barlow', Inter, sans-serif;
					font-size: 11px;
					font-weight: 700;
					text-transform: uppercase;
					letter-spacing: 3px;
					color: #37c080 !important;
					margin-bottom: 14px;
				}
				.fbj-eyebrow-line {
					display: inline-block;
					width: 18px;
					height: 2px;
					background: #37c080;
				}
				.fbj-title {
					margin: 0 0 16px 0;
					font-family: 'Bebas Neue', Impact, 'Barlow', sans-serif;
					font-size: clamp(36px, 4.2vw, 56px) !important;
					line-height: 0.98;
					letter-spacing: 1.5px;
					text-transform: uppercase;
					color: #ffffff !important;
					font-weight: 400;
				}
				.fbj-title-highlight {
					color: #37c080 !important;
					text-shadow: 0 0 30px rgba(55, 192, 128, 0.4);
				}
				.fbj-lead {
					margin: 0 0 24px 0;
					font-family: 'Barlow', Inter, sans-serif;
					font-size: 14px !important;
					line-height: 1.65;
					color: #dfdbce !important;
					max-width: 500px;
					font-weight: 400;
				}

				/* Feature Value Pills */
				.fbj-features-list {
					display: flex;
					flex-direction: column;
					gap: 10px;
					margin-bottom: 8px;
					width: 100%;
					max-width: 500px;
				}
				.fbj-feature-item {
					display: flex;
					align-items: center;
					gap: 12px;
					background: rgba(12, 24, 24, 0.6);
					border: 1px solid rgba(255, 255, 255, 0.08);
					border-radius: 0px !important;
					padding: 10px 14px;
					box-sizing: border-box;
					transition: border-color 0.25s ease, background 0.25s ease, transform 0.25s ease;
				}
				.fbj-feature-item:hover {
					border-color: rgba(55, 192, 128, 0.45);
					background: rgba(14, 28, 28, 0.85);
					transform: translateX(3px);
				}
				.fbj-feature-icon {
					width: 22px;
					height: 22px;
					background: rgba(55, 192, 128, 0.16);
					border: 1px solid rgba(55, 192, 128, 0.5);
					border-radius: 0px !important;
					display: flex;
					align-items: center;
					justify-content: center;
					color: #3ee69a;
					flex-shrink: 0;
				}
				.fbj-feature-icon svg {
					width: 12px;
					height: 12px;
					stroke: currentColor;
					stroke-width: 2.5;
					fill: none;
				}
				.fbj-feature-text {
					margin: 0;
					font-family: 'Barlow', Inter, sans-serif;
					font-size: 13px !important;
					font-weight: 700;
					color: #ffffff !important;
					letter-spacing: 0.2px;
				}
				.fbj-feature-text span {
					color: #9cbcae !important;
					font-weight: 400;
					font-size: 12px !important;
				}

				/* ── Right Column: Studio Card (Refined Compact Typography) ── */
				.fbj-card {
					position: relative;
					background: rgba(10, 18, 18, 0.95);
					backdrop-filter: blur(16px);
					-webkit-backdrop-filter: blur(16px);
					border: 1px solid rgba(55, 192, 128, 0.28);
					border-radius: 0px !important;
					padding: clamp(24px, 3vw, 32px) clamp(20px, 2.5vw, 28px);
					box-sizing: border-box;
					box-shadow: 0 20px 50px -10px rgba(0, 0, 0, 0.9);
					transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), border-color 0.3s ease, box-shadow 0.3s ease;
					overflow: hidden;
				}
				.fbj-card:hover {
					transform: translateY(-4px);
					border-color: rgba(55, 192, 128, 0.55);
					box-shadow: 0 30px 60px -10px rgba(0, 0, 0, 0.95), 0 0 28px rgba(55, 192, 128, 0.18);
				}

				/* Top Neon Line */
				.fbj-card::before {
					content: '';
					position: absolute;
					top: 0;
					left: 10%;
					right: 10%;
					height: 2px;
					background: linear-gradient(90deg, transparent, #3ee69a, transparent);
					opacity: 0;
					transition: opacity 0.3s ease;
					z-index: 5;
					pointer-events: none;
				}
				.fbj-card:hover::before {
					opacity: 1;
				}

				/* Card Top Bar: Badge + Open Status */
				.fbj-card-topbar {
					display: flex;
					align-items: center;
					justify-content: space-between;
					gap: 12px;
					margin-bottom: 20px;
					padding-bottom: 14px;
					border-bottom: 1px solid rgba(255, 255, 255, 0.07);
				}
				.fbj-card-tag {
					display: inline-flex;
					align-items: center;
					padding: 4px 10px;
					background: rgba(55, 192, 128, 0.08);
					border: 1px solid rgba(55, 192, 128, 0.45);
					border-radius: 0px !important;
					font-family: 'Barlow', Inter, sans-serif;
					font-size: 10px !important;
					font-weight: 700;
					letter-spacing: 2px;
					text-transform: uppercase;
					color: #37c080 !important;
				}
				.fbj-status-pill {
					display: inline-flex;
					align-items: center;
					gap: 6px;
					font-family: 'Barlow', Inter, sans-serif;
					font-size: 10px !important;
					font-weight: 700;
					letter-spacing: 1.8px;
					text-transform: uppercase;
					color: #cfdbd5 !important;
				}
				.fbj-pulse-dot {
					width: 6px;
					height: 6px;
					border-radius: 50%;
					background: #3ee69a;
					box-shadow: 0 0 8px #3ee69a;
					animation: fbjPulse 2s infinite ease-in-out;
				}
				@keyframes fbjPulse {
					0%, 100% { opacity: 1; transform: scale(1); }
					50% { opacity: 0.3; transform: scale(1.3); }
				}

				/* Location Box with Icon */
				.fbj-location-row {
					display: flex;
					align-items: flex-start;
					gap: 12px;
					margin-bottom: 18px;
				}
				.fbj-loc-icon {
					width: 32px;
					height: 32px;
					background: rgba(55, 192, 128, 0.12);
					border: 1px solid rgba(55, 192, 128, 0.5);
					border-radius: 0px !important;
					display: flex;
					align-items: center;
					justify-content: center;
					color: #3ee69a;
					flex-shrink: 0;
					margin-top: 1px;
				}
				.fbj-loc-icon svg {
					width: 15px;
					height: 15px;
					fill: currentColor;
				}
				.fbj-location-info {
					display: flex;
					flex-direction: column;
					gap: 3px;
				}
				.fbj-address-name {
					margin: 0;
					font-family: 'Barlow', Inter, sans-serif;
					font-size: 13.5px !important;
					line-height: 1.45;
					font-weight: 700;
					color: #ffffff !important;
					letter-spacing: 0.4px;
					text-transform: uppercase;
				}
				.fbj-directions-link {
					display: inline-flex;
					align-items: center;
					gap: 4px;
					font-family: 'Barlow', Inter, sans-serif;
					font-size: 10.5px !important;
					font-weight: 700;
					letter-spacing: 1.2px;
					text-transform: uppercase;
					color: #37c080 !important;
					text-decoration: none !important;
					transition: color 0.2s ease;
				}
				.fbj-directions-link:hover {
					color: #3ee69a !important;
					text-decoration: underline !important;
				}
				.fbj-directions-link svg {
					width: 10px;
					height: 10px;
					stroke: currentColor;
					stroke-width: 2.2;
					fill: none;
				}

				/* Studio Hours Rows (Bordered Box Format from Screenshot) */
				.fbj-timing-block {
					display: flex;
					flex-direction: column;
					gap: 8px;
					margin-bottom: 18px;
				}
				.fbj-timing-row {
					display: flex;
					align-items: center;
					justify-content: space-between;
					background: rgba(4, 12, 12, 0.6);
					border: 1px solid rgba(255, 255, 255, 0.08);
					border-radius: 0px !important;
					padding: 9px 14px;
					box-sizing: border-box;
				}
				.fbj-timing-label {
					display: inline-flex;
					align-items: center;
					gap: 7px;
					font-family: 'Barlow', Inter, sans-serif;
					font-size: 11px !important;
					font-weight: 700;
					letter-spacing: 1.5px;
					text-transform: uppercase;
					color: #dfdbce !important;
				}
				.fbj-timing-dot {
					display: inline-block;
					width: 5px;
					height: 5px;
					background: #37c080;
					border-radius: 0px !important;
				}
				.fbj-timing-hours {
					font-family: 'Barlow', Inter, sans-serif;
					font-size: 12.5px !important;
					font-weight: 700;
					letter-spacing: 0.5px;
					color: #3ee69a !important;
				}

				/* Phones Row (Clean Separated Buttons) */
				.fbj-phones-row {
					display: grid;
					grid-template-columns: 1fr 1fr;
					gap: 8px;
					margin-bottom: 18px;
				}
				.fbj-phone-pill {
					display: inline-flex;
					align-items: center;
					justify-content: center;
					gap: 7px;
					background: rgba(12, 24, 24, 0.7);
					border: 1px solid rgba(55, 192, 128, 0.35);
					border-radius: 0px !important;
					padding: 8px 10px;
					font-family: 'Barlow', Inter, sans-serif;
					font-size: 12px !important;
					font-weight: 700;
					letter-spacing: 0.4px;
					color: #3ee69a !important;
					text-decoration: none !important;
					transition: all 0.2s ease;
					box-sizing: border-box;
				}
				.fbj-phone-pill:hover {
					background: rgba(55, 192, 128, 0.18);
					border-color: #3ee69a;
					color: #ffffff !important;
					transform: translateY(-1px);
				}
				.fbj-phone-pill svg {
					width: 12px;
					height: 12px;
					fill: currentColor;
					flex-shrink: 0;
				}

				/* CTA Button (Compact Typography) */
				.fbj-cta-btn {
					display: flex;
					align-items: center;
					justify-content: center;
					gap: 8px;
					width: 100%;
					background: #37c080;
					color: #020606 !important;
					font-family: 'Bebas Neue', Impact, 'Barlow', sans-serif;
					font-size: 16px !important;
					letter-spacing: 1.8px;
					text-transform: uppercase;
					padding: 12px 18px;
					border: 1px solid #37c080;
					border-radius: 0px !important;
					text-decoration: none !important;
					transition: all 0.25s ease;
					box-shadow: 0 0 20px rgba(55, 192, 128, 0.3);
					box-sizing: border-box;
				}
				.fbj-cta-btn:hover {
					background: #3ee69a;
					border-color: #3ee69a;
					transform: translateY(-1px);
					box-shadow: 0 0 28px rgba(55, 192, 128, 0.55);
					color: #020606 !important;
				}
				.fbj-cta-btn svg {
					width: 15px;
					height: 15px;
					stroke: currentColor;
					stroke-width: 2.4;
					fill: none;
					transition: transform 0.2s ease;
				}
				.fbj-cta-btn:hover svg {
					transform: translateX(3px);
				}

				/* Responsive */
				@media (max-width: 960px) {
					.fbj-grid {
						grid-template-columns: 1fr;
						gap: 36px;
					}
					.fbj-content {
						max-width: 100%;
					}
					.fbj-lead,
					.fbj-features-list {
						max-width: 100%;
					}
				}
				@media (max-width: 600px) {
					.fbj-card {
						padding: 20px 16px;
					}
					.fbj-phones-row {
						grid-template-columns: 1fr;
					}
				}
			</style>

			<div class="fbj-ambient-glow"></div>

			<div class="fbj-inner">
				<div class="fbj-grid">
					<!-- Left Column: Narrative & Pillars -->
					<div class="fbj-content">
						<span class="fbj-eyebrow">
							<span class="fbj-eyebrow-line"></span>
							Book A Free Trial
						</span>
						<h2 class="fbj-title">
							YOUR FIRST SESSION <span class="fbj-title-highlight">IS ON US.</span>
						</h2>
						<p class="fbj-lead">
							Walk in, meet a coach, try a class. If it clicks, we&#8217;ll build a plan. If it doesn&#8217;t, you&#8217;ll leave with a good workout and a better tea.
						</p>

						<!-- Experience Value Pillars -->
						<div class="fbj-features-list">
							<div class="fbj-feature-item">
								<div class="fbj-feature-icon">
									<svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
								</div>
								<p class="fbj-feature-text">1-on-1 Movement Assessment <span>— Goal setting with head coach</span></p>
							</div>
							<div class="fbj-feature-item">
								<div class="fbj-feature-icon">
									<svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
								</div>
								<p class="fbj-feature-text">Full Studio Experience <span>— Try Pilates, Boxing or Strength Floor</span></p>
							</div>
							<div class="fbj-feature-item">
								<div class="fbj-feature-icon">
									<svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
								</div>
								<p class="fbj-feature-text">Zero Lock-in Pressure <span>— Experience the space on your own terms</span></p>
							</div>
						</div>
					</div>

					<!-- Right Column: Studio Headquarters Card -->
					<div class="fbj-card">
						<!-- Topbar: Badge + Status -->
						<div class="fbj-card-topbar">
							<span class="fbj-card-tag">STUDIO HEADQUARTERS</span>
							<div class="fbj-status-pill">
								<span class="fbj-pulse-dot"></span>
								<span>OPEN TODAY</span>
							</div>
						</div>

						<!-- Location: Pin + Address -->
						<div class="fbj-location-row">
							<div class="fbj-loc-icon">
								<svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
							</div>
							<div class="fbj-location-info">
								<p class="fbj-address-name">
									E 2/19, In front of Rani Kamlapati Railway Station, Bhopal
								</p>
								<a href="https://maps.google.com/?q=FitBliss+by+Shruti+Kapoor+Bhopal" target="_blank" rel="noopener noreferrer" class="fbj-directions-link">
									Get Directions
									<svg viewBox="0 0 24 24"><path d="M7 17L17 7M17 7H7M17 7V17"/></svg>
								</a>
							</div>
						</div>

						<!-- Studio Timings Rows -->
						<div class="fbj-timing-block">
							<div class="fbj-timing-row">
								<span class="fbj-timing-label">
									<span class="fbj-timing-dot"></span>
									MON — SAT
								</span>
								<span class="fbj-timing-hours">06:00 – 22:00</span>
							</div>
							<div class="fbj-timing-row">
								<span class="fbj-timing-label">
									<span class="fbj-timing-dot"></span>
									SUNDAY
								</span>
								<span class="fbj-timing-hours">08:00 – 14:00</span>
							</div>
						</div>

						<!-- Phone Numbers Row -->
						<div class="fbj-phones-row">
							<a href="tel:+917470787012" class="fbj-phone-pill">
								<svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
								<span>+91 74707 87012</span>
							</a>
							<a href="tel:+917470787014" class="fbj-phone-pill">
								<svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
								<span>+91 74707 87014</span>
							</a>
						</div>

						<!-- CTA Button -->
						<a href="https://wa.me/917470787014?text=Hi%2C%20I%20would%20like%20to%20book%20my%20free%20trial%20session%20at%20FitBliss!" target="_blank" rel="noopener noreferrer" class="fbj-cta-btn">
							Book My Free Trial
							<svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
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
											<a href="mailto:info@fitblissbysk.com">info@fitblissbysk.com</a>
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
											<a href="privacy-policy.php">

											<span class="elementor-icon-list-text">PRIVACY POLICY</span>
											</a>
									</li>
								<li class="elementor-icon-list-item elementor-inline-item">
											<a href="terms-conditions.php">

											<span class="elementor-icon-list-text">TERMS &amp; CONDITIONS</span>
											</a>
									</li>
								<li class="elementor-icon-list-item elementor-inline-item">
											<a href="terms-of-use.php">

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
                    <legend class="ff_screen_reader_title" style="display: block; margin: 0!important;padding: 0!important;height: 0!important;text-indent: -999999px;width: 0!important;overflow:hidden;">Contact Form</legend><input type='hidden' name='__fluent_form_embded_post_id' value='17567' /><input type="hidden" id="_fluentform_1_fluentformnonce" name="_fluentform_1_fluentformnonce" value="270fabf283" /><input type="hidden" name="_wp_http_referer" value="/" /><div class='ff-el-group ff-el-form-hide_label'><div class="ff-el-input--label asterisk-right"><label for='ff_1_input_text' id='label_ff_1_input_text' aria-label="Name">Name</label></div><div class='ff-el-input--content'><input type="text" name="input_text" class="ff-el-form-control" placeholder="Name" data-name="input_text" id="ff_1_input_text"  aria-invalid="false" aria-required=false></div></div><div class='ff-el-group ff-el-form-hide_label'><div class="ff-el-input--label ff-el-is-required asterisk-right"><label for='ff_1_email' id='label_ff_1_email' aria-label="Email">Email</label></div><div class='ff-el-input--content'><input type="email" name="email" id="ff_1_email" class="ff-el-form-control" placeholder="Email" data-name="email"  aria-invalid="false" aria-required=true></div></div><div class='ff-el-group ff-el-form-hide_label'><div class="ff-el-input--label ff-el-is-required asterisk-right"><label for='ff_1_subject' id='label_ff_1_subject' aria-label="Phone">Phone</label></div><div class='ff-el-input--content'><input type="text" name="subject" class="ff-el-form-control" placeholder="Phone" data-name="subject" id="ff_1_subject"  aria-invalid="false" aria-required=true></div></div><div class='ff-el-group ff-el-form-hide_label'><div class="ff-el-input--label ff-el-is-required asterisk-right"><label for='ff_1_message' id='label_ff_1_message' aria-label="Your Message">Your Message</label></div><div class='ff-el-input--content'><textarea aria-required="true" aria-labelledby="label_ff_1_message" name="message" id="ff_1_message" class="ff-el-form-control" placeholder="Your Message" rows="4" cols="2" data-name="message" ></textarea></div></div><input type="hidden" name="pagelink" value="https://fitblissbysk.com/" data-name="pagelink" ><div class='ff-el-group ff-el-form-hide_label' ><div class='ff-el-input--label'><label>Recaptcha</label></div><div class='ff-el-input--content'><div data-fluent_id='1' name='g-recaptcha-response'><div
		data-sitekey='6LeMTm4tAAAAALKd5Ba14oC9Z011j7R1BY_M6Xm1'
		id='fluentform-recaptcha-1-1'
		class='ff-el-recaptcha g-recaptcha'
		data-callback='fluentFormrecaptchaSuccessCallback'></div></div></div></div><div class='ff-el-group ff-text-left ff_submit_btn_wrapper'><button type="submit" class="ff-btn ff-btn-submit ff-btn-md ff_btn_style"  aria-label="Submit">Submit</button><style>form.fluent_form_1 .ff-btn-submit:not(.ff_btn_no_style) { background-color: var(--fluentform-primary); color: #ffffff; }
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
        height: 56.25vw !important;
        min-height: 100vh !important;
        min-width: 177.78vh !important;
        transform: translate(-50%, -50%) scale(1.02) !important;
        border: none !important;
        pointer-events: none !important;
    }

    @media (max-aspect-ratio: 16/9) {
        #ytHeroIframe { width: 177.78vh !important; height: 100vh !important; min-width: 177.78vh !important; min-height: 100vh !important; transform: translate(-50%, -50%) scale(1.02) !important; }
    }

    @media (min-aspect-ratio: 16/9) {
        #ytHeroIframe { width: 100vw !important; height: 56.25vw !important; min-width: 100vw !important; min-height: 56.25vw !important; transform: translate(-50%, -50%) scale(1.02) !important; }
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
</style></div></fieldset></form><div id='fluentform_1_errors' class='ff-errors-in-stack ff_form_instance_1_1 ff-form-loading_errors ff_form_instance_1_1_errors'></div></div>            <script type="text/javascript">
                window.fluent_form_ff_form_instance_1_1 = {"id":"1","ajaxUrl":"https:\/\/fitblissbysk.com\/wp-admin\/admin-ajax.php","settings":{"layout":{"labelPlacement":"top","helpMessagePlacement":"with_label","errorMessagePlacement":"inline","cssClassName":"","asteriskPlacement":"asterisk-right"},"restrictions":{"denyEmptySubmission":{"enabled":false}}},"form_instance":"ff_form_instance_1_1","form_id_selector":"fluentform_1","rules":{"input_text":{"required":{"value":false,"message":"This field is required","global_message":"This field is required","global":true}},"email":{"required":{"value":true,"message":"This field is required","global":false,"global_message":"This field is required"},"email":{"value":true,"message":"This field must contain a valid email","global":false,"global_message":"This field must contain a valid email"}},"subject":{"required":{"value":true,"message":"This field is required","global":false,"global_message":"This field is required"}},"message":{"required":{"value":true,"message":"This field is required","global":false,"global_message":"This field is required"}},"g-recaptcha-response":[]},"debounce_time":300,"file_upload_settings":[]};
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
			<link rel='stylesheet' id='elementor-post-20307-css' href='<?php echo $base_url; ?>/assets/images/elementor/css/post-20307.css?ver=1790145709' media='all' />
<link rel='stylesheet' id='widget-spacer-css' href='<?php echo $base_url; ?>/assets/plugins/elementor/assets/css/widget-spacer.min.css?ver=4.3.0' media='all' />
<link rel='stylesheet' id='widget-gallery-css' href='<?php echo $base_url; ?>/assets/plugins/elementor-pro/assets/css/widget-gallery.min.css?ver=4.1.1' media='all' />
<link rel='stylesheet' id='elementor-gallery-css' href='<?php echo $base_url; ?>/assets/plugins/elementor/assets/lib/e-gallery/css/e-gallery.min.css?ver=1.2.0' media='all' />
<link rel='stylesheet' id='e-transitions-css' href='<?php echo $base_url; ?>/assets/plugins/elementor-pro/assets/css/conditionals/transitions.min.css?ver=4.1.1' media='all' />
<link rel='stylesheet' id='widget-divider-css' href='<?php echo $base_url; ?>/assets/plugins/elementor/assets/css/widget-divider.min.css?ver=4.3.0' media='all' />
<link rel='stylesheet' id='elementor-gf-local-barlow-css' href='<?php echo $base_url; ?>/assets/images/elementor/google-fonts/css/barlow.css?ver=1784191232' media='all' />
<link rel='stylesheet' id='elementor-gf-local-bebasneue-css' href='<?php echo $base_url; ?>/assets/images/elementor/google-fonts/css/bebasneue.css?ver=1749301349' media='all' />
<script id="fluentform-elementor-js-extra">
var fluentformElementor = {"adminUrl":"https://fitblissbysk.com/wp-admin/admin.php"};
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
<script id="hello-theme-frontend-js" src="<?php echo $base_url; ?>/assets/theme/hello-elementor/assets/js/hello-frontend.js?ver=3.5.1"></script>
<script id="elementor-webpack-runtime-js" src="<?php echo $base_url; ?>/assets/plugins/elementor/assets/js/webpack.runtime.min.js?ver=4.3.0"></script>
<script id="elementor-frontend-modules-js" src="<?php echo $base_url; ?>/assets/plugins/elementor/assets/js/frontend-modules.min.js?ver=4.3.0"></script>
<script id="elementor-frontend-js-before">
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnX":"Share on X","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close","a11yCarouselPrevSlideMessage":"Previous slide","a11yCarouselNextSlideMessage":"Next slide","a11yCarouselFirstSlideMessage":"This is the first slide","a11yCarouselLastSlideMessage":"This is the last slide","a11yCarouselPaginationBulletMessage":"Go to slide"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile Portrait","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Landscape","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet Portrait","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Landscape","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}},"hasCustomBreakpoints":false},"version":"4.3.0","is_static":false,"experimentalFeatures":{"e_font_icon_svg":true,"additional_custom_breakpoints":true,"container":true,"theme_builder_v2":true,"hello-theme-header-footer":true,"nested-elements":true,"import-export-customization":true,"e_pro_atomic_form":true,"e_pro_variables":true,"e_pro_interactions":true},"urls":{"assets":"https:\/\/fitblissbysk.com\/wp-content\/plugins\/elementor\/assets\/","ajaxurl":"https:\/\/fitblissbysk.com\/wp-admin\/admin-ajax.php","uploadUrl":"https:\/\/fitblissbysk.com\/wp-content\/uploads"},"nonces":{"floatingButtonsClickTracking":"f6a138672e","atomicFormsSendForm":"805ab1a743"},"swiperClass":"swiper","settings":{"page":[],"editorPreferences":[]},"kit":{"body_background_background":"classic","active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description","hello_header_logo_type":"title","hello_header_menu_layout":"horizontal","hello_footer_logo_type":"logo"},"post":{"id":17567,"title":"Fit%20Bliss","excerpt":"","featuredImage":false}};
//# sourceURL=elementor-frontend-js-before
</script>
<script id="elementor-frontend-js" src="<?php echo $base_url; ?>/assets/plugins/elementor/assets/js/frontend.min.js?ver=4.3.0"></script>
<script id="smartmenus-js" src="<?php echo $base_url; ?>/assets/plugins/elementor-pro/assets/lib/smartmenus/jquery.smartmenus.min.js?ver=1.2.1"></script>
<script id="swiper-js" src="<?php echo $base_url; ?>/assets/plugins/qi-addons-for-elementor/assets/plugins/swiper/8.4.5/swiper.min.js?ver=8.4.5"></script>
<script id="chaty-front-end-js-extra">
var chaty_settings = {"ajax_url":"https://fitblissbysk.com/wp-admin/admin-ajax.php","analytics":"0","capture_analytics":"0","token":"57745235eb","chaty_widgets":[{"id":0,"identifier":0,"settings":{"cta_type":"simple-view","cta_body":"","cta_head":"","cta_head_bg_color":"","cta_head_text_color":"","show_close_button":0,"position":"right","custom_position":1,"bottom_spacing":"25","side_spacing":"25","icon_view":"vertical","default_state":"click","cta_text":"","cta_text_color":"#333333","cta_bg_color":"#ffffff","show_cta":"first_click","is_pending_mesg_enabled":"off","pending_mesg_count":"1","pending_mesg_count_color":"#ffffff","pending_mesg_count_bgcolor":"#dd0000","widget_icon":"chat-base","widget_icon_url":"","font_family":"-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Oxygen-Sans,Ubuntu,Cantarell,Helvetica Neue,sans-serif","widget_size":"54","custom_widget_size":"54","is_google_analytics_enabled":0,"close_text":"Hide","widget_color":"#000000","widget_icon_color":"#ffffff","widget_rgb_color":"0,0,0","has_custom_css":0,"custom_css":"","widget_token":"ebb702784c","widget_index":"","attention_effect":"shockwave"},"triggers":{"has_time_delay":1,"time_delay":"0","exit_intent":0,"has_display_after_page_scroll":0,"display_after_page_scroll":"0","auto_hide_widget":0,"hide_after":0,"show_on_pages_rules":[],"time_diff":0,"has_date_scheduling_rules":0,"date_scheduling_rules":{"start_date_time":"","end_date_time":""},"date_scheduling_rules_timezone":0,"day_hours_scheduling_rules_timezone":0,"has_day_hours_scheduling_rules":[],"day_hours_scheduling_rules":[],"day_time_diff":0,"show_on_direct_visit":0,"show_on_referrer_social_network":0,"show_on_referrer_search_engines":0,"show_on_referrer_google_ads":0,"show_on_referrer_urls":[],"has_show_on_specific_referrer_urls":0,"has_traffic_source":0,"has_countries":0,"countries":[],"has_target_rules":0},"channels":[{"channel":"Phone","value":"+917470787014","hover_text":"Phone","chatway_position":"","svg_icon":"\u003Csvg width=\"39\" height=\"39\" viewBox=\"0 0 39 39\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"\u003E\u003Ccircle class=\"color-element\" cx=\"19.4395\" cy=\"19.4395\" r=\"19.4395\" fill=\"#03E78B\"/\u003E\u003Cpath d=\"M19.3929 14.9176C17.752 14.7684 16.2602 14.3209 14.7684 13.7242C14.0226 13.4259 13.1275 13.7242 12.8292 14.4701L11.7849 16.2602C8.65222 14.6193 6.11623 11.9341 4.47529 8.95057L6.41458 7.90634C7.16046 7.60799 7.45881 6.71293 7.16046 5.96705C6.56375 4.47529 6.11623 2.83435 5.96705 1.34259C5.96705 0.596704 5.22117 0 4.47529 0H0.745882C0.298353 0 5.69062e-07 0.298352 5.69062e-07 0.745881C5.69062e-07 3.72941 0.596704 6.71293 1.93929 9.3981C3.87858 13.575 7.30964 16.8569 11.3374 18.7962C14.0226 20.1388 17.0061 20.7355 19.9896 20.7355C20.4371 20.7355 20.7355 20.4371 20.7355 19.9896V16.4094C20.7355 15.5143 20.1388 14.9176 19.3929 14.9176Z\" transform=\"translate(9.07179 9.07178)\" fill=\"white\"/\u003E\u003C/svg\u003E","is_desktop":1,"is_mobile":1,"icon_color":"#03E78B","icon_rgb_color":"3,231,139","channel_type":"Phone","custom_image_url":"","order":"","pre_set_message":"","is_use_web_version":"1","is_open_new_tab":"1","is_default_open":"0","has_welcome_message":"0","emoji_picker":"1","input_placeholder":"Write your message...","chat_welcome_message":"","wp_popup_headline":"","wp_popup_nickname":"","wp_popup_profile":"","wp_popup_head_bg_color":"#4AA485","qr_code_image_url":"","mail_subject":"","channel_account_type":"personal","contact_form_settings":[],"contact_fields":[],"url":"tel:+917470787014","mobile_target":"","desktop_target":"","target":"","is_agent":0,"agent_data":[],"header_text":"","header_sub_text":"","header_bg_color":"","header_text_color":"","widget_token":"ebb702784c","widget_index":"","click_event":"","viber_url":""},{"channel":"Whatsapp","value":"917470787014","hover_text":"WhatsApp","chatway_position":"","svg_icon":"\u003Csvg width=\"39\" height=\"39\" viewBox=\"0 0 39 39\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"\u003E\u003Ccircle class=\"color-element\" cx=\"19.4395\" cy=\"19.4395\" r=\"19.4395\" fill=\"#49E670\"/\u003E\u003Cpath d=\"M12.9821 10.1115C12.7029 10.7767 11.5862 11.442 10.7486 11.575C10.1902 11.7081 9.35269 11.8411 6.84003 10.7767C3.48981 9.44628 1.39593 6.25317 1.25634 6.12012C1.11674 5.85403 2.13001e-06 4.39053 2.13001e-06 2.92702C2.13001e-06 1.46351 0.83755 0.665231 1.11673 0.399139C1.39592 0.133046 1.8147 1.01506e-06 2.23348 1.01506e-06C2.37307 1.01506e-06 2.51267 1.01506e-06 2.65226 1.01506e-06C2.93144 1.01506e-06 3.21063 -2.02219e-06 3.35022 0.532183C3.62941 1.19741 4.32736 2.66092 4.32736 2.79397C4.46696 2.92702 4.46696 3.19311 4.32736 3.32616C4.18777 3.59225 4.18777 3.59224 3.90858 3.85834C3.76899 3.99138 3.6294 4.12443 3.48981 4.39052C3.35022 4.52357 3.21063 4.78966 3.35022 5.05576C3.48981 5.32185 4.18777 6.38622 5.16491 7.18449C6.42125 8.24886 7.39839 8.51496 7.81717 8.78105C8.09636 8.91409 8.37554 8.9141 8.65472 8.648C8.93391 8.38191 9.21309 7.98277 9.49228 7.58363C9.77146 7.31754 10.0507 7.1845 10.3298 7.31754C10.609 7.45059 12.2841 8.11582 12.5633 8.38191C12.8425 8.51496 13.1217 8.648 13.1217 8.78105C13.1217 8.78105 13.1217 9.44628 12.9821 10.1115Z\" transform=\"translate(12.9597 12.9597)\" fill=\"#FAFAFA\"/\u003E\u003Cpath d=\"M0.196998 23.295L0.131434 23.4862L0.323216 23.4223L5.52771 21.6875C7.4273 22.8471 9.47325 23.4274 11.6637 23.4274C18.134 23.4274 23.4274 18.134 23.4274 11.6637C23.4274 5.19344 18.134 -0.1 11.6637 -0.1C5.19344 -0.1 -0.1 5.19344 -0.1 11.6637C-0.1 13.9996 0.624492 16.3352 1.93021 18.2398L0.196998 23.295ZM5.87658 19.8847L5.84025 19.8665L5.80154 19.8788L2.78138 20.8398L3.73978 17.9646L3.75932 17.906L3.71562 17.8623L3.43104 17.5777C2.27704 15.8437 1.55796 13.8245 1.55796 11.6637C1.55796 6.03288 6.03288 1.55796 11.6637 1.55796C17.2945 1.55796 21.7695 6.03288 21.7695 11.6637C21.7695 17.2945 17.2945 21.7695 11.6637 21.7695C9.64222 21.7695 7.76778 21.1921 6.18227 20.039L6.17557 20.0342L6.16817 20.0305L5.87658 19.8847Z\" transform=\"translate(7.7758 7.77582)\" fill=\"white\" stroke=\"white\" stroke-width=\"0.2\"/\u003E\u003C/svg\u003E","is_desktop":1,"is_mobile":1,"icon_color":"#49E670","icon_rgb_color":"73,230,112","channel_type":"Whatsapp","custom_image_url":"","order":"","pre_set_message":"","is_use_web_version":"1","is_open_new_tab":"1","is_default_open":"0","has_welcome_message":"0","emoji_picker":"1","input_placeholder":"Write your message...","chat_welcome_message":"\u003Cp\u003EHow can I help you? :)\u003C/p\u003E","wp_popup_headline":"Let&#039;s chat on WhatsApp","wp_popup_nickname":"","wp_popup_profile":"","wp_popup_head_bg_color":"#4AA485","qr_code_image_url":"","mail_subject":"","channel_account_type":"personal","contact_form_settings":[],"contact_fields":[],"url":"https://web.whatsapp.com/send?phone=917470787014","mobile_target":"","desktop_target":"_blank","target":"_blank","is_agent":0,"agent_data":[],"header_text":"","header_sub_text":"","header_bg_color":"","header_text_color":"","widget_token":"ebb702784c","widget_index":"","click_event":"","viber_url":""},{"channel":"Instagram","value":"fitblissbysk/?hl=en","hover_text":"Instagram Page","chatway_position":"","svg_icon":"\u003Csvg width=\"39\" height=\"39\" viewBox=\"0 0 39 39\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"\u003E\u003Ccircle class=\"color-element\" cx=\"19.5\" cy=\"19.5\" r=\"19.5\" fill=\"url(#linear-gradient)\"/\u003E\u003Cpath id=\"Path_1923\" data-name=\"Path 1923\" d=\"M13.177,0H5.022A5.028,5.028,0,0,0,0,5.022v8.155A5.028,5.028,0,0,0,5.022,18.2h8.155A5.028,5.028,0,0,0,18.2,13.177V5.022A5.028,5.028,0,0,0,13.177,0Zm3.408,13.177a3.412,3.412,0,0,1-3.408,3.408H5.022a3.411,3.411,0,0,1-3.408-3.408V5.022A3.412,3.412,0,0,1,5.022,1.615h8.155a3.412,3.412,0,0,1,3.408,3.408v8.155Z\" transform=\"translate(10 10.4)\" fill=\"#fff\"/\u003E\u003Cpath id=\"Path_1924\" data-name=\"Path 1924\" d=\"M45.658,40.97a4.689,4.689,0,1,0,4.69,4.69A4.695,4.695,0,0,0,45.658,40.97Zm0,7.764a3.075,3.075,0,1,1,3.075-3.075A3.078,3.078,0,0,1,45.658,48.734Z\" transform=\"translate(-26.558 -26.159)\" fill=\"#fff\"/\u003E\u003C/svg\u003E\u003Cpath id=\"Path_1925\" data-name=\"Path 1925\" d=\"M120.105,28.251a1.183,1.183,0,1,0,.838.347A1.189,1.189,0,0,0,120.105,28.251Z\" transform=\"translate(-96.119 -14.809)\" fill=\"#fff\"/\u003E","is_desktop":1,"is_mobile":1,"icon_color":"#ffffff","icon_rgb_color":"0,0,0","channel_type":"Instagram","custom_image_url":"","order":"","pre_set_message":"","is_use_web_version":"1","is_open_new_tab":"1","is_default_open":"0","has_welcome_message":"0","emoji_picker":"1","input_placeholder":"Write your message...","chat_welcome_message":"","wp_popup_headline":"","wp_popup_nickname":"","wp_popup_profile":"","wp_popup_head_bg_color":"#4AA485","qr_code_image_url":"","mail_subject":"","channel_account_type":"personal","contact_form_settings":[],"contact_fields":[],"url":"https://www.instagram.com/fitblissbysk/?hl=en","mobile_target":"_blank","desktop_target":"_blank","target":"_blank","is_agent":0,"agent_data":[],"header_text":"","header_sub_text":"","header_bg_color":"","header_text_color":"","widget_token":"ebb702784c","widget_index":"","click_event":"","viber_url":""}]}],"data_analytics_settings":"off","lang":{"whatsapp_label":"WhatsApp Message","hide_whatsapp_form":"Hide WhatsApp Form","emoji_picker":"Show Emojis"},"has_chatway":""};
//# sourceURL=chaty-front-end-js-extra
</script>
<script defer id="chaty-front-end-js" src="<?php echo $base_url; ?>/assets/plugins/chaty/dist/js/script.js?ver=3.6.11785238286"></script>
<script defer id="chaty-mail-check-js" src="<?php echo $base_url; ?>/assets/plugins/chaty/admin/assets/js/mailcheck.js?ver=3.6.1"></script>
<script id="elementor-gallery-js" src="<?php echo $base_url; ?>/assets/plugins/elementor/assets/lib/e-gallery/js/e-gallery.min.js?ver=1.2.0"></script>
<script id="google-recaptcha-js" src="https://www.google.com/recaptcha/api.js?render=explicit&#038;ver=6.2.14"></script>
<script id="fluent-form-submission-js-extra">
var fluentFormVars = {"ajaxUrl":"https://fitblissbysk.com/wp-admin/admin-ajax.php","forms":[],"step_text":"Step %activeStep% of %totalStep% - %stepTitle%","step_completed_text":"Completed","is_rtl":"","date_i18n":{"previousMonth":"Previous Month","nextMonth":"Next Month","months":{"shorthand":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"longhand":["January","February","March","April","May","June","July","August","September","October","November","December"]},"weekdays":{"longhand":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"shorthand":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"]},"daysInMonth":[31,28,31,30,31,30,31,31,30,31,30,31],"rangeSeparator":" to ","weekAbbreviation":"Wk","scrollTitle":"Scroll to increment","toggleTitle":"Click to toggle","amPM":["AM","PM"],"yearAriaLabel":"Year","firstDayOfWeek":1},"pro_version":"","fluentform_version":"6.2.14","force_init":"","stepAnimationDuration":"350","upload_completed_txt":"100% Completed","upload_start_txt":"0% Completed","uploading_txt":"Uploading","choice_js_vars":{"noResultsText":"No results found","loadingText":"Loading...","noChoicesText":"No choices to choose from","itemSelectText":"Press to select","maxItemTextSingular":"Only %%maxItemCount%% option can be added","maxItemTextPlural":"Only %%maxItemCount%% options can be added"},"input_mask_vars":{"clearIfNotMatch":false},"nonce":"d501025a1f","file_delete_nonce":"9311d410a1","form_id":"1","step_change_focus":"1","has_cleantalk":"","pro_payment_script_compatible":""};
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
var ElementorProFrontendConfig = {"ajaxurl":"https:\/\/fitblissbysk.com\/wp-admin\/admin-ajax.php","nonce":"752167b2db","urls":{"assets":"https:\/\/fitblissbysk.com\/wp-content\/plugins\/elementor-pro\/assets\/","rest":"https:\/\/fitblissbysk.com\/wp-json\/"},"settings":{"lazy_load_background_images":true},"popup":{"hasPopUps":true},"shareButtonsNetworks":{"facebook":{"title":"Facebook","has_counter":true},"twitter":{"title":"Twitter"},"linkedin":{"title":"LinkedIn","has_counter":true},"pinterest":{"title":"Pinterest","has_counter":true},"reddit":{"title":"Reddit","has_counter":true},"vk":{"title":"VK","has_counter":true},"odnoklassniki":{"title":"OK","has_counter":true},"tumblr":{"title":"Tumblr"},"digg":{"title":"Digg"},"skype":{"title":"Skype"},"stumbleupon":{"title":"StumbleUpon","has_counter":true},"mix":{"title":"Mix"},"telegram":{"title":"Telegram"},"pocket":{"title":"Pocket","has_counter":true},"xing":{"title":"XING","has_counter":true},"whatsapp":{"title":"WhatsApp"},"email":{"title":"Email"},"print":{"title":"Print"},"x-twitter":{"title":"X"},"threads":{"title":"Threads"}},"facebook_sdk":{"lang":"en_US","app_id":""},"lottie":{"defaultAnimationUrl":"https:\/\/fitblissbysk.com\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"}};
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
            
<script type="module" src="https://static.cloudflareinsights.com/beacon.min.js/v31edd6df95cf4e85bb4c19e7a9bdbcba1788362987495" integrity="sha512-iIg7k2xntmwu6/uSb5tpc/hySgZc4eoL31yB29W6tJFo2akwjPWcEqnCEdJvGexCL0KEQwVYv5BlowfhVz26hg==" data-cf-beacon='{"version":"2024.11.0","token":"9ed88eb36d1a43b89c3a6b15900f35ab","r":1,"spa":2}' crossorigin="anonymous"></script>
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
<script>
    (function() {
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
                                    img: "<?php echo $base_url; ?>/assets/images/2026/06/DSC_2491-scaled.jpg",
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
                    href: "<?php echo $base_url; ?>/#services"
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
</body>
</html>

<!-- Page cached by LiteSpeed Cache 7.9.1 on 2026-09-23 09:55:05 -->