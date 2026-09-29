<?php
$html = file_get_contents('d:/xampp/htdocs/fitbliss/live_home.html');

// Let's find the inline styles or embedded styles
preg_match_all('/<style[^>]*>([\s\S]*?)<\/style>/i', $html, $styles);
echo "Found " . count($styles[0]) . " <style> tags.\n";
foreach ($styles[1] as $idx => $s) {
    if (strpos($s, 'fbt') !== false || strpos($s, 'hero') !== false || strpos($s, 'video') !== false || strpos($s, 'bebas') !== false || strpos($s, 'marquee') !== false) {
        echo "=== STYLE MATCH $idx ===\n" . substr($s, 0, 1500) . "\n...\n";
    }
}

// Let's look for #fbtTrack in the HTML
$pos = strpos($html, 'fbtTrack');
if ($pos !== false) {
    echo "\n=== fbtTrack snippet ===\n";
    echo substr($html, $pos - 200, 3000);
}
