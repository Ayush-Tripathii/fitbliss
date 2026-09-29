<?php
$html = file_get_contents('d:/xampp/htdocs/fitbliss/php-site/index.php');

$pos = strpos($html, 'id="home"');
if ($pos === false) {
    $pos = strpos($html, 'ytHeroIframe');
}

echo "=== HERO SECTION SNIPPET ===\n";
echo substr($html, $pos - 300, 3500);
