<?php
$html = file_get_contents('d:/xampp/htdocs/fitbliss/php-site/index.php');

$pos = strpos($html, '<header');
$pos_end = strpos($html, '</header>');
$header_html = substr($html, $pos, $pos_end - $pos + 9);

echo "Header classes and styles:\n";
preg_match_all('/class=[\'"]([^\'"]+)[\'"]/i', $header_html, $classes);
print_r(array_unique($classes[1]));
