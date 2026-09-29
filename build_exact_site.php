<?php
// Build exact PHP site from live site components

$html = file_get_contents('d:/xampp/htdocs/fitbliss/live_home.html');

// Clean up Cloudflare email obfuscation
$html = preg_replace('/<a class="__cf_email__"[^>]*>\[email&#160;protected\]<\/a>/i', 'info@fitblissbysk.com', $html);
$html = str_replace('/cdn-cgi/l/email-protection#8ae3e4ece5caece3fee8e6e3f9f9e8f3f9e1a4e9e5e7', 'mailto:info@fitblissbysk.com', $html);

// Remove unwanted spam injected links if any
$html = preg_replace('/<a[^>]+href=[\'"][^\'"]*(?:portbet|denemebonusu)[^\'"]*[\'"][^>]*>.*?<\/a>/is', '', $html);

// Fix internal URLs
$url_replacements = [
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
    'href="/fitbliss/membership/"' => 'href="#membership"',
    'href="/fitbliss/membership/"' => 'href="#membership"',
    'href="/fitbliss/equipment/"' => 'href="#trainers"',
    'href="/fitbliss/trainers/"' => 'href="trainers.php"',
    'https://fitblissbysk.com/privacy-policy/' => 'privacy-policy.php',
    'https://fitblissbysk.com/terms-conditions/' => 'terms-conditions.php',
    'https://fitblissbysk.com/terms-of-use/' => 'terms-of-use.php',
    'https://fitblissbysk.com/' => 'index.php',
];

foreach ($url_replacements as $from => $to) {
    $html = str_replace($from, $to, $html);
}

// Convert asset URLs from https://fitblissbysk.com/wp-content/ to /fitbliss/wp-content/ where applicable
// Keep video URLs working reliably
$html = preg_replace('/https:\/\/fitblissbysk\.com\/(wp-content\/(?:plugins|themes|uploads\/fonts|uploads\/elementor)[^\s"\'<>]+)/i', '/fitbliss/$1', $html);
$html = preg_replace('/https:\/\/fitblissbysk\.com\/(wp-includes\/[^\s"\'<>]+)/i', '/fitbliss/$1', $html);

// Ensure proper URL encoding for videos in fbtTrack
$video_map = [
    'Journey-from-120-kgs-to-70-kgs-I-m-still-working-in-my-roar-because-my-best-version-is-yet-to.mp4' => 'https://fitblissbysk.com/wp-content/uploads/2026/07/Journey-from-120-kgs-to-70-kgs-I-m-still-working-in-my-roar-because-my-best-version-is-yet-to.mp4',
    '1-Nothing-makes-us-happier-than-seeing-our-clients-transform-and-share-their-journey-with-us.mp4' => 'https://fitblissbysk.com/wp-content/uploads/2026/07/1-Nothing-makes-us-happier-than-seeing-our-clients-transform-and-share-their-journey-with-us.mp4',
    'Real-stories.-Real-results.-💥Hear-it-straight-from-Samved-—-how-Fitbliss-helped-him-push-limits-1.mp4' => 'https://fitblissbysk.com/wp-content/uploads/2026/07/Real-stories.-Real-results.-%F0%9F%92%A5Hear-it-straight-from-Samved-%E2%80%94-how-Fitbliss-helped-him-push-limits-1.mp4',
    'Nothing-makes-us-happier-than-seeing-our-clients-transform-and-share-their-journey-with-us.mp4' => 'https://fitblissbysk.com/wp-content/uploads/2026/07/Nothing-makes-us-happier-than-seeing-our-clients-transform-and-share-their-journey-with-us.mp4',
    'At-Fitbliss-its-never-just-about-workouts-or-machines-—-its-about-people.-💫Every-transformat.mp4' => 'https://fitblissbysk.com/wp-content/uploads/2026/07/At-Fitbliss-its-never-just-about-workouts-or-machines-%E2%80%94-its-about-people.-%F0%9F%92%ABEvery-transformat.mp4',
    'Harleens-journey-with-FITBLISS-by-Shruti-Kapoor-is-all-about-finding-joy-in-the-process-✨She-sh.mp4' => 'https://fitblissbysk.com/wp-content/uploads/2026/07/Harleens-journey-with-FITBLISS-by-Shruti-Kapoor-is-all-about-finding-joy-in-the-process-%E2%9C%A8She-sh.mp4',
    'Kartikey-Singh-Chouhan-shares-his-journey-with-the-Fitbliss-by-Shruti-Kapoor✨—-from-structured-w.mp4' => 'https://fitblissbysk.com/wp-content/uploads/2026/07/Kartikey-Singh-Chouhan-shares-his-journey-with-the-Fitbliss-by-Shruti-Kapoor%E2%9C%A8%E2%80%94-from-structured-w.mp4',
    'Real-people.-Real-struggles.-Real-transformation.Proud-to-be-part-of-your-journey.-💫–-FitBliss.mp4' => 'https://fitblissbysk.com/wp-content/uploads/2026/07/Real-people.-Real-struggles.-Real-transformation.Proud-to-be-part-of-your-journey.-%F0%9F%92%AB%E2%80%93-FitBliss.mp4',
    'Real-stories.-Real-results.-💪Heres-what-our-Fitbliss-client-had-to-say-about-their-journey-🌟.mp4' => 'https://fitblissbysk.com/wp-content/uploads/2026/07/Real-stories.-Real-results.-%F0%9F%92%AAHeres-what-our-Fitbliss-client-had-to-say-about-their-journey-%F0%9F%8C%9F.mp4',
    'Results-dont-come-from-shortcuts.They-come-from-consistency-care-and-the-right-guidance.Arti_.mp4' => 'https://fitblissbysk.com/wp-content/uploads/2026/07/Results-dont-come-from-shortcuts.They-come-from-consistency-care-and-the-right-guidance.Arti_.mp4',
    'Amanat-Singh-Chouhan-shares-her-experience-with-Fitbliss-by-Shruti-Kapoor-—-a-journey-guided-by.mp4' => 'https://fitblissbysk.com/wp-content/uploads/2026/07/Amanat-Singh-Chouhan-shares-her-experience-with-Fitbliss-by-Shruti-Kapoor-%E2%80%94-a-journey-guided-by.mp4',
];

foreach ($video_map as $raw => $encoded) {
    $html = str_replace($raw, $encoded, $html);
    $html = str_replace(htmlspecialchars($raw), $encoded, $html);
}

// Split into Header, Body, and Footer
// Extract header part: up to end of <header ... </header>
$header_pos_end = strpos($html, '</header>');
if ($header_pos_end !== false) {
    $header_pos_end += 9;
}

// Extract footer part: from <footer to end
$footer_pos_start = strpos($html, '<footer');

// Let's create modular PHP files
file_put_contents('d:/xampp/htdocs/fitbliss/php-site/index.php', $html);
echo "Written index.php (" . strlen($html) . " bytes)\n";
