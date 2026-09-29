<?php
// Comprehensive QA Inspector for FitBliss PHP site

$html = file_get_contents('d:/xampp/htdocs/fitbliss/php-site/index.php');

echo "=== 1. CHECKING CSS FILES ===\n";
preg_match_all('/<link[^>]+href=[\'"]([^\'"]+)[\'"][^>]*>/i', $html, $links);
foreach ($links[1] as $href) {
    if (strpos($href, 'stylesheet') !== false || strpos($href, '.css') !== false) {
        check_url($href);
    }
}

echo "\n=== 2. CHECKING JAVASCRIPT FILES ===\n";
preg_match_all('/<script[^>]+src=[\'"]([^\'"]+)[\'"][^>]*>/i', $html, $scripts);
foreach ($scripts[1] as $src) {
    check_url($src);
}

echo "\n=== 3. CHECKING IMAGES ===\n";
preg_match_all('/<img[^>]+src=[\'"]([^\'"]+)[\'"][^>]*>/i', $html, $imgs);
$unique_imgs = array_unique($imgs[1]);
foreach ($unique_imgs as $src) {
    check_url($src);
}

echo "\n=== 4. CHECKING FONT FILES IN CSS ===\n";
preg_match_all('/@font-face\s*\{([^}]+)\}/is', $html, $font_faces);
echo "Found " . count($font_faces[0]) . " @font-face rules in inline styles.\n";

function check_url($url) {
    if (strpos($url, '//') === 0) {
        $url = 'https:' . $url;
    }
    if (strpos($url, 'http://') === 0 || strpos($url, 'https://') === 0) {
        $headers = @get_headers($url);
        $code = $headers ? substr($headers[0], 9, 3) : 'ERR';
        if ($code == '200' || $code == '301' || $code == '302') {
            echo "[REMOTE $code] $url\n";
        } else {
            echo "[REMOTE FAIL $code] $url\n";
        }
    } else {
        // Local relative or root path
        $clean_path = parse_url($url, PHP_URL_PATH);
        if (strpos($clean_path, '/fitbliss/') === 0) {
            $local_file = 'd:/xampp/htdocs' . $clean_path;
        } else {
            $local_file = 'd:/xampp/htdocs/fitbliss/php-site/' . ltrim($clean_path, '/');
        }
        if (file_exists($local_file)) {
            echo "[LOCAL OK] $url (" . filesize($local_file) . " bytes)\n";
        } else {
            echo "[LOCAL 404 NOT FOUND] $url -> checked: $local_file\n";
        }
    }
}
