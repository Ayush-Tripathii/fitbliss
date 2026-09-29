<?php
$base_url = '/fitbliss/php-site';
$uploads_base = '/fitbliss/wp-content/uploads';
$page_title = 'Cardio';
$meta_desc = 'Cardio fitness at FitBliss Bhopal. State-of-the-art cardio equipment including treadmills, ellipticals, stationary bikes with certified coaches.';
$body_class = 'page-service page-cardio';

include dirname(__DIR__) . '/includes/header.php';
?>

<!-- Page Hero -->
<div class="page-hero">
    <div class="page-hero-bg">
        <img src="<?php echo $uploads_base; ?>/2024/06/Lifefitness_Flexstrider_PlatinumClubSeries-600x600-1.png" alt="Cardio" loading="lazy" style="object-position:center;">
    </div>
    <div class="page-hero-overlay"></div>
    <div class="page-hero-content">
        <p class="tag-label">— Cardiovascular Training</p>
        <h1>Cardio</h1>
    </div>
</div>

<!-- Intro Section -->
<div style="background:var(--dark);border-bottom:1px solid var(--border);padding:clamp(60px,8vw,100px) clamp(20px,5vw,60px);">
    <div style="max-width:var(--max-width);margin:0 auto;">
        <div class="two-col" style="gap:80px;align-items:start;">
            <div>
                <p class="tag-label fade-in">— Benefits</p>
                <h2 class="section-title fade-in" style="margin:16px 0 30px;">Benefits of Cardio Exercise</h2>

                <?php
                $benefits = [
                    ['title' => 'Weight Management', 'desc' => 'Cardiovascular exercise is highly effective for weight management as it burns calories during and after the workout session, helping to create a calorie deficit for weight loss or maintenance.'],
                    ['title' => 'Improves Heart Health', 'desc' => 'Regular cardio exercises enhance heart health by strengthening the heart muscle, reducing blood pressure, improving blood circulation, and lowering the risk of heart disease and stroke.'],
                    ['title' => 'Boosts Mood and Mental Health', 'desc' => 'Cardiovascular exercise boosts endorphins, neurotransmitters that promote happiness and reduce stress, thus aiding in improving mood and mental wellbeing through regular sessions.'],
                    ['title' => 'Strengthens Immune System', 'desc' => 'Moderate-intensity cardio exercise enhances the immune system by promoting circulation and boosting the production of immune cells, aiding the body in defending against infections and illnesses.'],
                    ['title' => 'Enhances Stamina and Endurance', 'desc' => 'Cardio training enhances stamina and endurance, enabling prolonged physical activity without fatigue.'],
                    ['title' => 'Promotes Better Sleep', 'desc' => 'Aerobic exercise enhances sleep quality and duration, regulates sleep patterns, promotes deeper sleep, increases energy levels, and improves overall health.'],
                    ['title' => 'Increases Metabolism', 'desc' => 'Cardio workouts boost metabolism, enabling efficient calorie burning even at rest, aiding in weight management and maintenance over time.'],
                    ['title' => 'Improves Cognitive Function', 'desc' => 'Cardiovascular exercise improves cognitive function and reduces cognitive decline in aging by increasing blood flow and oxygen delivery to the brain.'],
                    ['title' => 'Enhances Overall Quality of Life', 'desc' => 'Cardio activities not only improve physical health but also enhance overall quality of life by increasing energy levels, reducing chronic disease risk, and promoting wellbeing and vitality.'],
                ];
                foreach($benefits as $b):
                ?>
                <div class="service-feature-item fade-in">
                    <div class="feature-icon">■</div>
                    <div>
                        <div class="feature-title"><?php echo $b['title']; ?></div>
                        <div class="feature-desc"><?php echo $b['desc']; ?></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="service-image-col fade-in">
                <img src="<?php echo $uploads_base; ?>/2024/06/Lifefitness_Flexstrider_PlatinumClubSeries-600x600-1.png"
                     alt="Cardio Equipment — FitBliss"
                     style="width:100%;border:1px solid var(--border);">
            </div>
        </div>
    </div>
</div>

<!-- Why Choose Us -->
<div style="background:var(--dark-2);border-top:1px solid var(--border);border-bottom:1px solid var(--border);padding:clamp(60px,8vw,100px) clamp(20px,5vw,60px);">
    <div style="max-width:var(--max-width);margin:0 auto;">
        <div style="text-align:center;margin-bottom:60px;">
            <div style="font-size:11px;font-weight:600;text-transform:uppercase;letter-spacing:3px;color:var(--green);margin-bottom:12px;">Heartfelt Results Await !</div>
            <h2 class="section-title fade-in">Why choose us ?</h2>
        </div>
        <div class="three-col">
            <?php
            $why = [
                ['img' => '2024/05/gym-eumannts.svg', 'title' => 'State-of-the-Art Equipment', 'desc' => 'Our Cardio Gym boasts top-of-the-line machines, including treadmills, ellipticals, and stationary bikes, ensuring you have everything you need for a challenging and effective workout.'],
                ['img' => '2024/05/workout.png', 'title' => 'Personalized Workouts', 'desc' => 'Our experienced trainers are on hand to help you create personalized cardio routines tailored to your fitness goals, whether you\'re aiming to lose weight, improve endurance, or boost overall health.'],
                ['img' => '2024/05/training.png', 'title' => 'Variety of Classes', 'desc' => 'From high-energy HIIT sessions to heart-pumping Zumba classes, we offer a diverse range of cardio workouts to keep you motivated and engaged.'],
                ['img' => '2024/05/eco.png', 'title' => 'Comfortable Environment', 'desc' => 'Enjoy a welcoming and supportive atmosphere where you can feel comfortable pushing yourself to new limits and achieving your fitness aspirations.'],
                ['img' => '2024/05/delivery.png', 'title' => 'Convenient Hours', 'desc' => 'With flexible operating hours, including early mornings and late evenings, our Cardio Gym makes it easy to fit a heart-healthy workout into your busy schedule.'],
                ['img' => '2024/05/customer-care.png', 'title' => 'Community Support', 'desc' => 'Join a community of like-minded individuals who share your passion for fitness, providing encouragement, motivation, and accountability every step of the way. We\'re committed to helping you reach your cardio fitness goals with confidence and joy.'],
            ];
            foreach($why as $w):
            ?>
            <div class="fade-in" style="background:var(--dark);border:1px solid var(--border);padding:clamp(24px,4vw,36px);display:flex;flex-direction:column;gap:16px;transition:border-color .3s ease;" onmouseover="this.style.borderColor='rgba(55,192,128,0.3)'" onmouseout="this.style.borderColor='rgba(255,255,255,0.1)'">
                <img src="<?php echo $uploads_base; ?>/<?php echo $w['img']; ?>" alt="<?php echo $w['title']; ?>" style="width:60px;height:60px;object-fit:contain;" loading="lazy">
                <h4 style="font-family:var(--font-display);font-size:22px;color:var(--cream);font-weight:400;text-transform:uppercase;"><?php echo $w['title']; ?></h4>
                <p style="font-size:14px;line-height:1.65;color:var(--cream-muted);"><?php echo $w['desc']; ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- FAQ Section -->
<div style="background:var(--dark);border-top:1px solid var(--border);padding:clamp(60px,8vw,100px) clamp(20px,5vw,60px);">
    <div style="max-width:var(--max-width);margin:0 auto;display:grid;grid-template-columns:1fr 1.5fr;gap:80px;">
        <div>
            <div style="font-size:11px;font-weight:600;text-transform:uppercase;letter-spacing:3px;color:var(--green);margin-bottom:12px;">FAQ</div>
            <h2 class="section-title fade-in">Frequently asked Questions</h2>
        </div>
        <div>
            <?php
            $faqs = [
                ['q' => 'What is cardio exercise?', 'a' => 'Cardio, short for cardiovascular, refers to any exercise that elevates the heart rate and increases the body\'s demand for oxygen. It includes activities like running, cycling, swimming, and jumping rope.'],
                ['q' => 'How often should I do cardio exercise?', 'a' => 'The American Heart Association recommends at least 150 minutes of moderate-intensity aerobic exercise or 75 minutes of vigorous-intensity aerobic exercise per week, spread out over several days. Beginners may start with less and gradually increase duration and intensity.'],
                ['q' => 'What are examples of moderate-intensity cardio exercises?', 'a' => 'Moderate-intensity cardio exercises include brisk walking, leisurely cycling, swimming, dancing, and gardening. These activities elevate the heart rate and breathing but still allow for conversation.'],
                ['q' => 'What are examples of vigorous-intensity cardio exercises?', 'a' => 'Vigorous-intensity cardio exercises include running, jogging, cycling at a fast pace, swimming laps, high-intensity interval training (HIIT), and aerobic dance classes. These activities significantly increase heart rate and breathing.'],
                ['q' => 'How can I prevent boredom during cardio workouts?', 'a' => 'To prevent boredom, vary your cardio routine by trying different activities, locations, or classes. You can also listen to music, podcasts, or audiobooks, exercise with a friend, or set challenges and goals to keep things interesting.'],
            ];
            foreach($faqs as $idx => $faq):
            ?>
            <div class="faq-item fade-in" style="border-bottom:1px solid var(--border);">
                <button class="faq-toggle" onclick="toggleFaq(this)" style="width:100%;text-align:left;padding:20px 0;display:flex;justify-content:space-between;align-items:center;cursor:pointer;background:none;border:none;color:var(--cream);font-family:var(--font-body);font-size:15px;font-weight:600;">
                    <span><?php echo $faq['q']; ?></span>
                    <span class="faq-icon" style="font-size:20px;color:var(--green);transition:transform .3s ease;flex-shrink:0;margin-left:16px;">+</span>
                </button>
                <div class="faq-content" style="display:none;padding:0 0 20px;">
                    <p style="font-size:14px;line-height:1.65;color:var(--cream-muted);"><?php echo $faq['a']; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- Other Services -->
<div style="background:var(--dark-2);border-top:1px solid var(--border);padding:clamp(60px,8vw,100px) clamp(20px,5vw,60px);">
    <div style="max-width:var(--max-width);margin:0 auto;">
        <div style="text-align:center;margin-bottom:50px;">
            <div style="font-size:11px;font-weight:600;text-transform:uppercase;letter-spacing:3px;color:var(--green);margin-bottom:12px;">CARDIO WORKOUT</div>
            <h2 class="section-title fade-in">OUR OTHER SERVICES</h2>
        </div>
        <div class="three-col">
            <?php
            $other_services = [
                ['link' => '/fitbliss/php-site/pages/yoga.php', 'img' => '2024/05/09copy.png', 'title' => 'Yoga', 'desc' => 'Find your inner zen and improve your flexibility, strength, and mindfulness with our yoga classes. Led by experienced instructors, our classes cater to all levels, from beginners to advanced practitioners.'],
                ['link' => '/fitbliss/php-site/pages/pilates.php', 'img' => '2024/05/02y.png', 'title' => 'Pilates By YKBI', 'desc' => 'Reformer Pilates led by YKBI certified instructors. Transform your posture, core strength and body alignment with our world-class Pilates program.'],
                ['link' => '/fitbliss/php-site/pages/gym.php', 'img' => '2024/05/gym-eumannts.svg', 'title' => 'GYM', 'desc' => 'Our premium gym floor features state-of-the-art equipment and certified coaches who guide you to your strongest self — every single session.'],
            ];
            foreach($other_services as $s):
            ?>
            <a href="<?php echo $s['link']; ?>" class="fade-in" style="background:var(--dark);border:1px solid var(--border);padding:clamp(24px,4vw,36px);display:flex;flex-direction:column;gap:16px;text-decoration:none;transition:border-color .3s ease;" onmouseover="this.style.borderColor='rgba(55,192,128,0.3)'" onmouseout="this.style.borderColor='rgba(255,255,255,0.1)'">
                <img src="<?php echo $uploads_base; ?>/<?php echo $s['img']; ?>" alt="<?php echo $s['title']; ?>" style="width:60px;height:60px;object-fit:contain;" loading="lazy">
                <h3 style="font-family:var(--font-display);font-size:24px;color:var(--cream);font-weight:400;text-transform:uppercase;"><?php echo $s['title']; ?></h3>
                <p style="font-size:14px;line-height:1.65;color:var(--cream-muted);"><?php echo $s['desc']; ?></p>
                <span style="font-size:11px;font-weight:600;text-transform:uppercase;letter-spacing:2px;color:var(--green);">Learn more →</span>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- CTA -->
<div style="background:var(--dark);border-top:1px solid var(--border);padding:clamp(60px,8vw,100px) clamp(20px,5vw,60px);text-align:center;">
    <p class="tag-label fade-in" style="text-align:center;margin-bottom:12px;">— Start today</p>
    <h2 class="section-title fade-in" style="text-align:center;margin-bottom:20px;">Your first session is free.</h2>
    <p class="section-subtitle fade-in" style="max-width:500px;margin:0 auto 36px;text-align:center;">Walk in, try a cardio class, meet a coach. No commitment required.</p>
    <a href="https://wa.me/917470787014" target="_blank" class="btn btn-primary fade-in">Book my free trial →</a>
</div>

<script>
function toggleFaq(btn) {
    var content = btn.nextElementSibling;
    var icon = btn.querySelector('.faq-icon');
    var isOpen = content.style.display !== 'none';
    content.style.display = isOpen ? 'none' : 'block';
    icon.textContent = isOpen ? '+' : '×';
    icon.style.transform = isOpen ? 'rotate(0deg)' : 'rotate(45deg)';
}
</script>

<?php include dirname(__DIR__) . '/includes/footer.php'; ?>

<!-- FITBLISS ACCORDION & FAQ ENGINE -->
<style id="fitbliss-faq-active-engine">
/* ==============================================================================
   FITBLISS LUXURY FAQ ACCORDION - CLEAN SEAMLESS DESIGN & NORMAL + / - ICONS
   ============================================================================== */
.elementor-widget-qi_addons_for_elementor_accordion,
.elementor-widget-accordion,
.elementor-widget-qi_addons_for_elementor_accordion .elementor-widget-container,
.elementor-widget-accordion .elementor-widget-container {
    background: transparent !important;
    border: none !important;
    box-shadow: none !important;
    padding: 0 !important;
    margin: 0 !important;
    overflow: visible !important;
}

.qodef-qi-accordion,
.elementor-accordion {
    visibility: visible !important;
    display: block !important;
    width: 100% !important;
    margin: 0 !important;
    padding: 0 !important;
    background: #091212 !important;
    border: 1px solid rgba(255, 255, 255, 0.09) !important;
    border-radius: 6px !important;
    overflow: hidden !important;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3) !important;
}

/* Individual Accordion Item Title */
.qodef-qi-accordion .qodef-e-title-holder {
    position: relative !important;
    display: flex !important;
    align-items: center !important;
    justify-content: space-between !important;
    padding: 22px 28px !important;
    margin: 0 !important;
    background: transparent !important;
    border: none !important;
    border-top: 1px solid rgba(255, 255, 255, 0.08) !important;
    border-radius: 0 !important;
    cursor: pointer !important;
    transition: background 0.25s ease !important;
    user-select: none !important;
    gap: 16px !important;
}

.qodef-qi-accordion .qodef-e-title-holder:first-child {
    border-top: none !important;
    margin-top: 0 !important;
}

.qodef-qi-accordion .qodef-e-title-holder:hover {
    background: rgba(62, 194, 139, 0.04) !important;
}

.qodef-qi-accordion .qodef-e-title-holder:hover .qodef-e-title {
    color: #3ec28b !important;
}

.qodef-qi-accordion .qodef-e-title-holder.qodef--active,
.qodef-qi-accordion .qodef-e-title-holder.ui-state-active {
    background: rgba(62, 194, 139, 0.06) !important;
    border-bottom: none !important;
}

/* Question Title Typography */
.qodef-qi-accordion .qodef-e-title {
    font-family: 'Barlow', Inter, sans-serif !important;
    font-size: 19px !important;
    font-weight: 600 !important;
    color: #f2ece0 !important;
    letter-spacing: 0.2px !important;
    margin: 0 !important;
    padding: 0 !important;
    line-height: 1.45 !important;
    transition: color 0.2s ease !important;
    flex: 1 !important;
}

.qodef-qi-accordion .qodef-e-title-holder.qodef--active .qodef-e-title,
.qodef-qi-accordion .qodef-e-title-holder.ui-state-active .qodef-e-title {
    color: #3ec28b !important;
}

/* Normal Clean + and - Symbols (No Circles / No Backgrounds) */
.qodef-qi-accordion .qodef-e-mark {
    display: inline-flex !important;
    align-items: center !important;
    justify-content: center !important;
    width: auto !important;
    height: auto !important;
    min-width: 20px !important;
    flex-shrink: 0 !important;
    color: #3ec28b !important;
    background: transparent !important;
    border: none !important;
    border-radius: 0 !important;
    padding: 0 !important;
    margin: 0 !important;
    transform: none !important;
    box-shadow: none !important;
}

.qodef-qi-accordion .qodef-e-title-holder:hover .qodef-e-mark,
.qodef-qi-accordion .qodef-e-title-holder.qodef--active .qodef-e-mark,
.qodef-qi-accordion .qodef-e-title-holder.ui-state-active .qodef-e-mark {
    background: transparent !important;
    border: none !important;
    color: #3ec28b !important;
    transform: none !important;
}

.qodef-qi-accordion .qodef-e-mark svg {
    width: 15px !important;
    height: 15px !important;
    fill: #3ec28b !important;
    color: #3ec28b !important;
    transition: transform 0.2s ease !important;
}

.qodef-qi-accordion .qodef-icon--minus {
    display: none !important;
}

.qodef-qi-accordion .qodef-icon--plus {
    display: inline-flex !important;
}

.qodef-qi-accordion .qodef-e-title-holder.qodef--active .qodef-icon--plus,
.qodef-qi-accordion .qodef-e-title-holder.ui-state-active .qodef-icon--plus {
    display: none !important;
}

.qodef-qi-accordion .qodef-e-title-holder.qodef--active .qodef-icon--minus,
.qodef-qi-accordion .qodef-e-title-holder.ui-state-active .qodef-icon--minus {
    display: inline-flex !important;
}

/* Accordion Answer Content */
.qodef-qi-accordion .qodef-e-content {
    display: none;
    background: rgba(62, 194, 139, 0.03) !important;
    border: none !important;
    padding: 0 28px 24px 28px !important;
    margin: 0 !important;
}

.qodef-qi-accordion .qodef-e-content.qodef--active {
    display: block !important;
}

.qodef-qi-accordion .qodef-e-content-inner {
    padding-top: 4px !important;
    border-top: 1px solid rgba(255, 255, 255, 0.05) !important;
}

.qodef-qi-accordion .qodef-e-content-inner p {
    font-family: 'Barlow', Inter, sans-serif !important;
    font-size: 16px !important;
    line-height: 1.7 !important;
    color: rgba(242, 236, 224, 0.85) !important;
    margin: 12px 0 0 !important;
}

@media (max-width: 767px) {
    .qodef-qi-accordion .qodef-e-title-holder {
        padding: 18px 20px !important;
    }
    .qodef-qi-accordion .qodef-e-title {
        font-size: 16.5px !important;
    }
    .qodef-qi-accordion .qodef-e-content {
        padding: 0 20px 20px 20px !important;
    }
    .qodef-qi-accordion .qodef-e-content-inner p {
        font-size: 15px !important;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    function initAccordions() {
        const accordions = document.querySelectorAll('.qodef-qi-accordion');
        accordions.forEach(function(acc) {
            acc.classList.add('qodef--init');
            const titles = acc.querySelectorAll('.qodef-e-title-holder');
            
            titles.forEach(function(title, idx) {
                const content = title.nextElementSibling;
                
                if (idx === 0 && !acc.querySelector('.qodef--active')) {
                    title.classList.add('qodef--active');
                    if (content) content.classList.add('qodef--active');
                }
                
                title.onclick = function(e) {
                    e.preventDefault();
                    const isOpen = title.classList.contains('qodef--active');
                    
                    titles.forEach(function(t) {
                        t.classList.remove('qodef--active');
                        t.classList.remove('ui-state-active');
                        const c = t.nextElementSibling;
                        if (c) c.classList.remove('qodef--active');
                    });
                    
                    if (!isOpen) {
                        title.classList.add('qodef--active');
                        title.classList.add('ui-state-active');
                        if (content) content.classList.add('qodef--active');
                    }
                };
            });
        });
    }

    initAccordions();
    setTimeout(initAccordions, 400);
});
</script>