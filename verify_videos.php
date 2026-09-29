<?php
$html = file_get_contents('d:/xampp/htdocs/fitbliss/php-site/index.php');
preg_match_all('/<video[^>]*id=["\']([^"\']+)["\'][^>]*src=["\']([^"\']+)["\']/i', $html, $m);

echo "Found " . count($m[0]) . " testimonial videos in index.php:\n";
for ($i = 0; $i < count($m[0]); $i++) {
    $id = $m[1][$i];
    $src = $m[2][$i];
    echo "  $id: $src\n";
}

// Also check hero video iframe
preg_match('/<iframe[^>]*id=["\']ytHeroIframe["\'][^>]*src=["\']([^"\']+)["\']/i', $html, $hero_m);
if (!empty($hero_m[1])) {
    echo "\nHero YouTube iframe embed: " . $hero_m[1] . "\n";
}
