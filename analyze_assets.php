<?php
// Script to analyze live_home.html and prepare pixel-perfect PHP site

$html = file_get_contents('d:/xampp/htdocs/fitbliss/live_home.html');

// 1. Get all stylesheets linked
preg_match_all('/<link[^>]+rel=[\'"]stylesheet[\'"][^>]+href=[\'"]([^\'"]+)[\'"][^>]*>/i', $html, $css_matches);

echo "Found " . count($css_matches[1]) . " stylesheets:\n";
foreach ($css_matches[1] as $url) {
    // Check if local file exists
    $local_path = parse_url($url, PHP_URL_PATH);
    $full_local = 'd:/xampp/htdocs' . $local_path;
    $exists = file_exists($full_local) ? "EXISTS LOCALLY" : "REMOTE ONLY";
    echo "  $url => $exists ($full_local)\n";
}

// 2. Get all inline styles
preg_match_all('/<style[^>]*>([\s\S]*?)<\/style>/i', $html, $style_matches);
echo "\nFound " . count($style_matches[1]) . " inline <style> blocks.\n";

// 3. Get all scripts
preg_match_all('/<script[^>]*src=[\'"]([^\'"]+)[\'"][^>]*>/i', $html, $script_matches);
echo "\nFound " . count($script_matches[1]) . " external scripts:\n";
foreach ($script_matches[1] as $url) {
    echo "  $url\n";
}

preg_match_all('/<script(?![^>]*src)[^>]*>([\s\S]*?)<\/script>/i', $html, $inline_scripts);
echo "\nFound " . count($inline_scripts[1]) . " inline <script> blocks.\n";
