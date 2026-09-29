<?php
// Precision Builder for FitBliss PHP Site Homepage

$html = file_get_contents('d:/xampp/htdocs/fitbliss/live_home.html');

// 1. Clean email obfuscation
$html = preg_replace('/<a class="__cf_email__"[^>]*>\[email&#160;protected\]<\/a>/i', 'info@fitblissbysk.com', $html);
$html = str_replace('/cdn-cgi/l/email-protection#8ae3e4ece5caece3fee8e6e3f9f9e8f3f9e1a4e9e5e7', 'mailto:info@fitblissbysk.com', $html);

// 2. Remove spam injection
$html = preg_replace('/<a[^>]+href=[\'"][^\'"]*(?:portbet|denemebonusu)[^\'"]*[\'"][^>]*>.*?<\/a>/is', '', $html);

// 3. Map Subpage URLs precisely
$page_map = [
    'https://fitblissbysk.com/?page_id=34' => 'index.php',
    'https://fitblissbysk.com/cardio/' => 'cardio.php',
    'https://fitblissbysk.com/gym/' => 'gym.php',
    'https://fitblissbysk.com/pilates-by-ykbi/' => 'pilates.php',
    'https://fitblissbysk.com/yoga/' => 'yoga.php',
    'https://fitblissbysk.com/crossfit/' => 'crossfit.php',
    'https://fitblissbysk.com/cryotherapy-steam-sauna-and-jacuzzi/' => 'cryotherapy.php',
    'https://fitblissbysk.com/stepper-session/' => 'stepper.php',
    'https://fitblissbysk.com/health-cafe/' => 'health-cafe.php',
    'https://fitblissbysk.com/elixir-wellness-at-fit-bliss/' => 'dermatology.php',
    'https://fitblissbysk.com/free-weight/' => 'free-weight.php',
    'https://fitblissbysk.com/our-trainer/' => 'trainers.php',
    'https://fitblissbysk.com/blog/' => 'blog.php',
    'https://fitblissbysk.com/founder/' => 'founder.php',
    'href="/fitbliss/founder/"' => 'href="founder.php"',
    'href="/fitbliss/about/"' => 'href="founder.php"',
    'href="/fitbliss/membership/"' => 'href="index.php#membership"',
    'href="/fitbliss/membership/"' => 'href="index.php#membership"',
    'href="/fitbliss/equipment/"' => 'href="index.php#trainers"',
    'href="/fitbliss/trainers/"' => 'href="trainers.php"',
    'https://fitblissbysk.com/privacy-policy/' => 'privacy-policy.php',
    'https://fitblissbysk.com/terms-conditions/' => 'terms-conditions.php',
    'https://fitblissbysk.com/terms-of-use/' => 'terms-of-use.php',
];

foreach ($page_map as $from => $to) {
    $html = str_replace($from, $to, $html);
}

// 4. Update asset paths (keep video uploads intact)
$html = preg_replace('/https:\/\/fitblissbysk\.com\/(wp-content\/(?:plugins|themes|uploads\/fonts|uploads\/elementor)[^\s"\'<>]+)/i', '/fitbliss/$1', $html);
$html = preg_replace('/https:\/\/fitblissbysk\.com\/(wp-includes\/[^\s"\'<>]+)/i', '/fitbliss/$1', $html);

// 5. Replace video sources with verified clean direct URLs
$video_clean_sources = [
    'fbv0' => 'https://fitblissbysk.com/wp-content/uploads/2026/07/Journey-from-120-kgs-to-70-kgs-I-m-still-working-in-my-roar-because-my-best-version-is-yet-to.mp4',
    'fbv1' => 'https://fitblissbysk.com/wp-content/uploads/2026/07/1-Nothing-makes-us-happier-than-seeing-our-clients-transform-and-share-their-journey-with-us.mp4',
    'fbv2' => 'https://fitblissbysk.com/wp-content/uploads/2026/07/Real-stories.-Real-results.-%F0%9F%92%A5Hear-it-straight-from-Samved-%E2%80%94-how-Fitbliss-helped-him-push-limits-1.mp4',
    'fbv3' => 'https://fitblissbysk.com/wp-content/uploads/2026/07/Nothing-makes-us-happier-than-seeing-our-clients-transform-and-share-their-journey-with-us.mp4',
    'fbv4' => 'https://fitblissbysk.com/wp-content/uploads/2026/07/At-Fitbliss-its-never-just-about-workouts-or-machines-%E2%80%94-its-about-people.-%F0%9F%92%ABEvery-transformat.mp4',
    'fbv5' => 'https://fitblissbysk.com/wp-content/uploads/2026/07/Harleens-journey-with-FITBLISS-by-Shruti-Kapoor-is-all-about-finding-joy-in-the-process-%E2%9C%A8She-sh.mp4',
    'fbv6' => 'https://fitblissbysk.com/wp-content/uploads/2026/07/Kartikey-Singh-Chouhan-shares-his-journey-with-the-Fitbliss-by-Shruti-Kapoor%E2%9C%A8%E2%80%94-from-structured-w.mp4',
    'fbv7' => 'https://fitblissbysk.com/wp-content/uploads/2026/07/Real-people.-Real-struggles.-Real-transformation.Proud-to-be-part-of-your-journey.-%F0%9F%92%AB%E2%80%93-FitBliss.mp4',
    'fbv8' => 'https://fitblissbysk.com/wp-content/uploads/2026/07/Real-stories.-Real-results.-%F0%9F%92%AAHeres-what-our-Fitbliss-client-had-to-say-about-their-journey-%F0%9F%8C%9F.mp4',
    'fbv9' => 'https://fitblissbysk.com/wp-content/uploads/2026/07/Results-dont-come-from-shortcuts.They-come-from-consistency-care-and-the-right-guidance.Arti_.mp4',
    'fbv10' => 'https://fitblissbysk.com/wp-content/uploads/2026/07/Amanat-Singh-Chouhan-shares-her-experience-with-Fitbliss-by-Shruti-Kapoor-%E2%80%94-a-journey-guided-by.mp4',
    'fbv11' => 'https://fitblissbysk.com/wp-content/uploads/2026/07/1-Nothing-makes-us-happier-than-seeing-our-clients-transform-and-share-their-journey-with-us.mp4'
];

foreach ($video_clean_sources as $id => $src) {
    $html = preg_replace('/<video[^>]*id=["\']' . $id . '["\'][^>]*src=["\'][^"\']+["\']/i', '<video id="' . $id . '" src="' . $src . '"', $html);
}

// 6. Final link cleanup to root
$html = str_replace('href="https://fitblissbysk.com/"', 'href="index.php"', $html);
$html = str_replace('href="https://fitblissbysk.com"', 'href="index.php"', $html);

file_put_contents('d:/xampp/htdocs/fitbliss/php-site/index.php', $html);
echo "Successfully generated pixel-perfect index.php (" . strlen($html) . " bytes)\n";
