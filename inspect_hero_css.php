<?php
$html = file_get_contents('d:/xampp/htdocs/fitbliss/php-site/index.php');

$pos = strpos($html, '#ytHeroIframe');
if ($pos !== false) {
    echo substr($html, $pos - 400, 1500);
}
