<?php
$html = file_get_contents('d:/xampp/htdocs/fitbliss/php-site/index.php');

$pos_body = strpos($html, '<body');
$pos_home = strpos($html, 'id="home"');

echo substr($html, $pos_body, $pos_home - $pos_body + 100);
