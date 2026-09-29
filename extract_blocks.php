<?php
$html = file_get_contents('d:/xampp/htdocs/fitbliss/live_home.html');

// Let's find all custom <div class="elementor-widget-container"> with custom HTML widgets
preg_match_all('/<div class="elementor-widget-container">([\s\S]*?)<\/div>\s*<\/div>/i', $html, $matches);

echo "Total widgets: " . count($matches[0]) . "\n";

// Let's dump the entire fbtTrack HTML block
$pos1 = strpos($html, '<style>' . "\n    /* ─── Track ─── */");
if ($pos1 === false) {
    $pos1 = strpos($html, '/* ─── Track ─── */');
}
if ($pos1 !== false) {
    // find ending script or section
    $pos2 = strpos($html, '</script>', $pos1);
    if ($pos2 !== false) {
        $fbt_block = substr($html, $pos1, $pos2 - $pos1 + 9);
        file_put_contents('d:/xampp/htdocs/fitbliss/fbt_block.html', $fbt_block);
        echo "Saved fbt_block.html (" . strlen($fbt_block) . " bytes)\n";
    }
}

// Let's also check hero HTML block
$pos_hero = strpos($html, 'hero-container');
if ($pos_hero !== false) {
    $hero_sub = substr($html, $pos_hero - 300, 4000);
    file_put_contents('d:/xampp/htdocs/fitbliss/hero_block.html', $hero_sub);
    echo "Saved hero_block.html\n";
}
