<?php
$base_url = '/fitbliss/php-site';
$uploads_base = '/fitbliss/wp-content/uploads';
$page_title = 'Health Cafe';
$meta_desc = 'Health Cafe at FitBliss Bhopal — Central India\'s most luxurious wellness destination.';
$body_class = 'page-service page-health-cafe';
include dirname(__DIR__) . '/includes/header.php';
?>
<div class="page-hero">
    <div class="page-hero-bg">
        <img src="<?php echo $uploads_base; ?>/<?php echo '2026/07/IMG_0642-scaled-1.webp'; ?>" alt="Health Cafe" loading="lazy">
    </div>
    <div class="page-hero-overlay"></div>
    <div class="page-hero-content">
        <p class="tag-label">— Nutrition & Recovery</p>
        <h1>EatBliss — Health Cafe</h1>
    </div>
</div>

<div style="background:var(--dark);border-bottom:1px solid var(--border);padding:clamp(60px,8vw,100px) clamp(20px,5vw,60px);">
    <div style="max-width:var(--max-width);margin:0 auto;">
        <div class="two-col" style="gap:80px;align-items:start;">
            <div>
                <p class="tag-label fade-in">— About</p>
                <h2 class="section-title fade-in" style="margin:16px 0 24px;">Health Cafe</h2>
                <p class="section-subtitle fade-in" style="margin-bottom:40px;">EatBliss is FitBliss's in-house health café serving nutritionist-designed meals, protein shakes, fresh juices, and superfoods — so your nutrition matches the quality of your training.</p>
                <div class="service-feature-item fade-in"><div class="feature-icon">&#9632;</div><div><div class="feature-title">Post-Workout Nutrition</div><div class="feature-desc">Our certified coaches guide you through Post-Workout Nutrition techniques tailored to your fitness goals.</div></div></div>
                <div class="service-feature-item fade-in"><div class="feature-icon">&#9632;</div><div><div class="feature-title">High Protein Options</div><div class="feature-desc">Our certified coaches guide you through High Protein Options techniques tailored to your fitness goals.</div></div></div>
                <div class="service-feature-item fade-in"><div class="feature-icon">&#9632;</div><div><div class="feature-title">Clean Ingredients</div><div class="feature-desc">Our certified coaches guide you through Clean Ingredients techniques tailored to your fitness goals.</div></div></div>
                <div class="service-feature-item fade-in"><div class="feature-icon">&#9632;</div><div><div class="feature-title">Fresh Juices</div><div class="feature-desc">Our certified coaches guide you through Fresh Juices techniques tailored to your fitness goals.</div></div></div>
                <div class="service-feature-item fade-in"><div class="feature-icon">&#9632;</div><div><div class="feature-title">Superfood Bowls</div><div class="feature-desc">Our certified coaches guide you through Superfood Bowls techniques tailored to your fitness goals.</div></div></div>
                <div class="service-feature-item fade-in"><div class="feature-icon">&#9632;</div><div><div class="feature-title">Meal Planning</div><div class="feature-desc">Our certified coaches guide you through Meal Planning techniques tailored to your fitness goals.</div></div></div>

                <div style="margin-top:36px;" class="fade-in">
                    <a href="https://wa.me/917470787014?text=I'm interested in Health Cafe at FitBliss" target="_blank" class="btn btn-primary">Book a free trial →</a>
                </div>
            </div>
            <div class="service-image-col fade-in">
                <img src="<?php echo $uploads_base; ?>/<?php echo '2026/07/IMG_0642-scaled-1.webp'; ?>" alt="Health Cafe — FitBliss" style="width:100%;border:1px solid var(--border);" loading="lazy">
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
