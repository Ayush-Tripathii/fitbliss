<?php
$html = file_get_contents('d:/xampp/htdocs/fitbliss/php-site/index.php');

$pos = strpos($html, 'fbtTrack');
if ($pos !== false) {
    $script_pos = strpos($html, '<script', $pos);
    $script_end = strpos($html, '</script>', $script_pos);
    echo substr($html, $script_pos, $script_end - $script_pos + 9);
}
