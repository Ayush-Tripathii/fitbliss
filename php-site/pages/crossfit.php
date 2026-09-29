<?php
$base_url = '/fitbliss/php-site';
$uploads_base = '/fitbliss/wp-content/uploads';
$page_title = 'CrossFit';
$meta_desc = 'CrossFit at FitBliss Bhopal — Central India\'s most luxurious wellness destination.';
$body_class = 'page-service page-crossfit';
include dirname(__DIR__) . '/includes/header.php';
?>
<div class="page-hero">
    <div class="page-hero-bg">
        <img src="<?php echo $uploads_base; ?>/<?php echo '2026/07/DSC_8892-scaled-1.jpg'; ?>" alt="CrossFit" loading="lazy">
    </div>
    <div class="page-hero-overlay"></div>
    <div class="page-hero-content">
        <p class="tag-label">— High Intensity Training</p>
        <h1>CrossFit</h1>
    </div>
</div>

<div style="background:var(--dark);border-bottom:1px solid var(--border);padding:clamp(60px,8vw,100px) clamp(20px,5vw,60px);">
    <div style="max-width:var(--max-width);margin:0 auto;">
        <div class="two-col" style="gap:80px;align-items:start;">
            <div>
                <p class="tag-label fade-in">— About</p>
                <h2 class="section-title fade-in" style="margin:16px 0 24px;">CrossFit</h2>
                <p class="section-subtitle fade-in" style="margin-bottom:40px;">CrossFit at FitBliss combines constantly varied functional movements executed at high intensity. Our certified CrossFit coaches bring programming that challenges every fitness level — from beginners to competitive athletes.</p>
                <div class="service-feature-item fade-in"><div class="feature-icon">&#9632;</div><div><div class="feature-title">Functional Strength</div><div class="feature-desc">Our certified coaches guide you through Functional Strength techniques tailored to your fitness goals.</div></div></div>
                <div class="service-feature-item fade-in"><div class="feature-icon">&#9632;</div><div><div class="feature-title">Cardiovascular Fitness</div><div class="feature-desc">Our certified coaches guide you through Cardiovascular Fitness techniques tailored to your fitness goals.</div></div></div>
                <div class="service-feature-item fade-in"><div class="feature-icon">&#9632;</div><div><div class="feature-title">Agility</div><div class="feature-desc">Our certified coaches guide you through Agility techniques tailored to your fitness goals.</div></div></div>
                <div class="service-feature-item fade-in"><div class="feature-icon">&#9632;</div><div><div class="feature-title">Community</div><div class="feature-desc">Our certified coaches guide you through Community techniques tailored to your fitness goals.</div></div></div>
                <div class="service-feature-item fade-in"><div class="feature-icon">&#9632;</div><div><div class="feature-title">Fat Loss</div><div class="feature-desc">Our certified coaches guide you through Fat Loss techniques tailored to your fitness goals.</div></div></div>
                <div class="service-feature-item fade-in"><div class="feature-icon">&#9632;</div><div><div class="feature-title">Athletic Performance</div><div class="feature-desc">Our certified coaches guide you through Athletic Performance techniques tailored to your fitness goals.</div></div></div>

                <div style="margin-top:36px;" class="fade-in">
                    <a href="https://wa.me/917470787014?text=I'm interested in CrossFit at FitBliss" target="_blank" class="btn btn-primary">Book a free trial →</a>
                </div>
            </div>
            <div class="service-image-col fade-in">
                <img src="<?php echo $uploads_base; ?>/<?php echo '2026/07/DSC_8892-scaled-1.jpg'; ?>" alt="CrossFit — FitBliss" style="width:100%;border:1px solid var(--border);" loading="lazy">
            </div>
        </div>
    </div>
</div>

<div style="background:var(--dark-2);border-top:1px solid var(--border);padding:clamp(60px,8vw,100px) clamp(20px,5vw,60px);text-align:center;">
    <p class="tag-label fade-in" style="text-align:center;margin-bottom:12px;">— Book a free trial</p>
    <h2 class="section-title fade-in" style="text-align:center;margin-bottom:20px;">Your first session is free.</h2>
    <p class="section-subtitle fade-in" style="max-width:500px;margin:0 auto 36px;text-align:center;">Walk in, try a class, meet your coach. No commitment required.</p>
    <a href="https://wa.me/917470787014" target="_blank" class="btn btn-primary fade-in">Book my free trial →</a>
</div>

<?php include dirname(__DIR__) . '/includes/footer.php'; ?>
