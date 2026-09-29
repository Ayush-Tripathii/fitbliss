<?php
$html = file_get_contents('d:/xampp/htdocs/fitbliss/live_home.html');

// Let's see all section / container titles, headings, and classes
echo "=== HEADINGS (H1, H2, H3, H4) ===\n";
preg_match_all('/<(h[1-4])[^>]*>(.*?)<\/\1>/is', $html, $headings);
for ($i = 0; $i < count($headings[0]); $i++) {
    $tag = $headings[1][$i];
    $text = trim(strip_tags($headings[2][$i]));
    if (!empty($text)) {
        echo "[$tag] $text\n";
    }
}

echo "\n=== ALL IMAGES ===\n";
preg_match_all('/<img[^>]+src=[\'"]([^\'"]+)[\'"][^>]*>/i', $html, $imgs);
$unique_imgs = array_unique($imgs[1]);
foreach ($unique_imgs as $img) {
    echo $img . "\n";
}
