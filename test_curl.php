<?php
$content = file_get_contents('http://localhost/fitbliss/php-site/index.php');
echo "HTTP response length: " . strlen($content) . " bytes\n";
echo "First 200 chars:\n" . substr($content, 0, 200) . "\n";
