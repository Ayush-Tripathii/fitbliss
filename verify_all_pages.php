<?php
$pages = [
    'index.php',
    'cardio.php',
    'gym.php',
    'pilates.php',
    'yoga.php',
    'crossfit.php',
    'cryotherapy.php',
    'stepper.php',
    'health-cafe.php',
    'dermatology.php',
    'free-weight.php',
    'trainers.php',
    'blog.php',
    'founder.php',
    'privacy-policy.php',
    'terms-conditions.php',
    'terms-of-use.php',
];

$all_ok = true;
foreach ($pages as $p) {
    $url = 'http://localhost/fitbliss/php-site/' . $p;
    $headers = @get_headers($url);
    if ($headers && strpos($headers[0], '200') !== false) {
        $len = strlen(@file_get_contents($url));
        echo "[OK 200] $p - $len bytes\n";
    } else {
        echo "[ERROR] $p - Header: " . ($headers ? $headers[0] : 'Failed') . "\n";
        $all_ok = false;
    }
}

if ($all_ok) {
    echo "\n=== ALL 17 PAGES RETURN HTTP 200 OK ===\n";
}
