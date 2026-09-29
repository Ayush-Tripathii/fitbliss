<?php
// Check responsive styling and media queries in index.php
$html = file_get_contents('d:/xampp/htdocs/fitbliss/php-site/index.php');

preg_match_all('/@media[^{]+\{([\s\S]*?\})\s*\}/i', $html, $media_queries);
echo "Found " . count($media_queries[0]) . " @media query blocks in index.php.\n";

// Let's check viewport meta tag
if (strpos($html, 'name="viewport"') !== false) {
    echo "Viewport meta tag: PRESENT\n";
} else {
    echo "Viewport meta tag: MISSING\n";
}

// Check mobile menu trigger in header
if (strpos($html, 'elementor-menu-toggle') !== false || strpos($html, 'e-nav-menu') !== false) {
    echo "Mobile navigation toggle: PRESENT\n";
}
