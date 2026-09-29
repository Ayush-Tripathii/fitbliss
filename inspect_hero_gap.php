<?php
$html = file_get_contents('d:/xampp/htdocs/fitbliss/php-site/index.php');

$pos = strpos($html, '<header');
$pos_home = strpos($html, 'id="home"');

echo "=== HEADER TO HOME SNIPPET ===\n";
echo substr($html, $pos, $pos_home - $pos + 500);
