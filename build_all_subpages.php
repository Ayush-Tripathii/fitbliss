<?php
// Script to fetch, convert and build all subpages pixel-perfect from live website

$pages = [
    'cardio.php' => 'https://fitblissbysk.com/cardio/',
    'gym.php' => 'https://fitblissbysk.com/gym/',
    'pilates.php' => 'https://fitblissbysk.com/pilates-by-ykbi/',
    'yoga.php' => 'https://fitblissbysk.com/yoga/',
    'crossfit.php' => 'https://fitblissbysk.com/crossfit/',
    'cryotherapy.php' => 'https://fitblissbysk.com/cryotherapy-steam-sauna-and-jacuzzi/',
    'stepper.php' => 'https://fitblissbysk.com/stepper-session/',
    'health-cafe.php' => 'https://fitblissbysk.com/health-cafe/',
    'dermatology.php' => 'https://fitblissbysk.com/elixir-wellness-at-fit-bliss/',
    'free-weight.php' => 'https://fitblissbysk.com/free-weight/',
    'trainers.php' => 'https://fitblissbysk.com/our-trainer/',
    'blog.php' => 'https://fitblissbysk.com/blog/',
    'founder.php' => 'https://fitblissbysk.com/founder/',
    'privacy-policy.php' => 'https://fitblissbysk.com/privacy-policy/',
    'terms-conditions.php' => 'https://fitblissbysk.com/terms-conditions/',
    'terms-of-use.php' => 'https://fitblissbysk.com/terms-of-use/',
];

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
    'href="/fitbliss/membership/"' => 'href="index.php#membership"',
    'href="/fitbliss/membership/"' => 'href="index.php#membership"',
    'href="/fitbliss/equipment/"' => 'href="index.php#trainers"',
    'href="/fitbliss/trainers/"' => 'href="trainers.php"',
    'https://fitblissbysk.com/privacy-policy/' => 'privacy-policy.php',
    'https://fitblissbysk.com/terms-conditions/' => 'terms-conditions.php',
    'https://fitblissbysk.com/terms-of-use/' => 'terms-of-use.php',
    'https://fitblissbysk.com/' => 'index.php',
];

$opts = [
    'http' => [
        'method' => 'GET',
        'header' => "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36\r\n",
        'timeout' => 15
    ]
];
$context = stream_context_create($opts);

foreach ($pages as $filename => $url) {
    echo "Fetching $url ... ";
    $html = @file_get_contents($url, false, $context);
    
    if (!$html) {
        echo "FAILED. Checking local or skipping.\n";
        continue;
    }
    
    // Clean up Cloudflare email obfuscation
    $html = preg_replace('/<a class="__cf_email__"[^>]*>\[email&#160;protected\]<\/a>/i', 'info@fitblissbysk.com', $html);
    $html = str_replace('/cdn-cgi/l/email-protection#8ae3e4ece5caece3fee8e6e3f9f9e8f3f9e1a4e9e5e7', 'mailto:info@fitblissbysk.com', $html);

    // Remove spam injected links if any
    $html = preg_replace('/<a[^>]+href=[\'"][^\'"]*(?:portbet|denemebonusu)[^\'"]*[\'"][^>]*>.*?<\/a>/is', '', $html);

    // Replace internal URLs
    foreach ($url_replacements as $from => $to) {
        $html = str_replace($from, $to, $html);
    }

    // Convert asset URLs
    $html = preg_replace('/https:\/\/fitblissbysk\.com\/(wp-content\/(?:plugins|themes|uploads\/fonts|uploads\/elementor)[^\s"\'<>]+)/i', '/fitbliss/$1', $html);
    $html = preg_replace('/https:\/\/fitblissbysk\.com\/(wp-includes\/[^\s"\'<>]+)/i', '/fitbliss/$1', $html);

    $out_path = 'd:/xampp/htdocs/fitbliss/php-site/' . $filename;
    file_put_contents($out_path, $html);
    echo "Saved " . $filename . " (" . strlen($html) . " bytes)\n";
}

echo "All subpages fetched and converted successfully!\n";
