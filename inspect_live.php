<?php
$html = file_get_contents('d:/xampp/htdocs/fitbliss/live_home.html');

echo "=== VIDEO TAGS ===\n";
if (preg_match_all('/<video[^>]*>[\s\S]*?<\/video>/i', $html, $matches)) {
    foreach ($matches[0] as $v) {
        echo substr($v, 0, 500) . "\n---\n";
    }
} else {
    echo "No <video> tags found.\n";
}

echo "\n=== IFRAMES ===\n";
if (preg_match_all('/<iframe[^>]*>[\s\S]*?<\/iframe>/i', $html, $matches)) {
    foreach ($matches[0] as $f) {
        echo substr($f, 0, 500) . "\n---\n";
    }
} else {
    echo "No <iframe> tags found.\n";
}

echo "\n=== YOUTUBE / VIDEO URLS ===\n";
if (preg_match_all('/(https?:\/\/[^\s"\'<>]*(?:youtube|youtu\.be|vimeo|\.mp4|\.mov|\.webm)[^\s"\'<>]*)/i', $html, $matches)) {
    print_r(array_values(array_unique($matches[0])));
}

echo "\n=== ELEMENTOR CSS / STYLES ===\n";
if (preg_match_all('/<link[^>]+stylesheet[^>]+href=[\'"]([^\'"]+)[\'"]/i', $html, $matches)) {
    foreach ($matches[1] as $css) {
        echo $css . "\n";
    }
}
