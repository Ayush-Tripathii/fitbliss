<?php
$html = file_get_contents('d:/xampp/htdocs/fitbliss/live_home.html');
$pos = strpos($html, 'FM1i27z3sZ8');
if ($pos !== false) {
    echo "=== LIVE SITE HERO VIDEO SNIPPET ===\n";
    echo substr($html, $pos - 500, 2000);
}
