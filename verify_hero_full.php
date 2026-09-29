<?php
$c = file_get_contents('http://localhost/fitbliss/php-site/index.php');
if (strpos($c, 'FULL SCREEN HERO VIDEO SECTION') !== false) {
    echo "HERO FULL SCREEN CSS IS ACTIVE (HTTP 200)\n";
} else {
    echo "NOT FOUND\n";
}
