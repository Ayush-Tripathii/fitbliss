<?php
$c = file_get_contents('http://localhost/fitbliss/php-site/index.php');
if (strpos($c, 'hero-top-mask') !== false) {
    echo "HERO TOP BLUR SHADOW MASK IS ACTIVE (HTTP 200)\n";
} else {
    echo "NOT FOUND\n";
}
