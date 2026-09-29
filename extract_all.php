<?php
$html = file_get_contents('d:/xampp/htdocs/fitbliss/live_home.html');

// Let's list all custom styles in live_home.html
preg_match_all('/<style[^>]*>([\s\S]*?)<\/style>/i', $html, $styles);
file_put_contents('d:/xampp/htdocs/fitbliss/all_inline_styles.css', implode("\n/* ==================== */\n", $styles[1]));
echo "Saved all_inline_styles.css (" . strlen(implode("\n", $styles[1])) . " bytes)\n";

// Let's inspect the sections in the live site
// What are the top containers?
$dom = new DOMDocument();
@$dom->loadHTML($html);
$xpath = new DOMXPath($dom);

$sections = $xpath->query('//div[contains(@class, "elementor")]/div[contains(@class, "e-con")]');
echo "Found " . $sections->length . " elementor containers\n";

// Let's look for header, footer, hero, and main sections
preg_match_all('/<header[^>]*>([\s\S]*?)<\/header>/i', $html, $hdr);
if (!empty($hdr[0])) {
    file_put_contents('d:/xampp/htdocs/fitbliss/live_header.html', $hdr[0][0]);
    echo "Saved live_header.html (" . strlen($hdr[0][0]) . " bytes)\n";
}

preg_match_all('/<footer[^>]*>([\s\S]*?)<\/footer>/i', $html, $ftr);
if (!empty($ftr[0])) {
    file_put_contents('d:/xampp/htdocs/fitbliss/live_footer.html', $ftr[0][0]);
    echo "Saved live_footer.html (" . strlen($ftr[0][0]) . " bytes)\n";
}
