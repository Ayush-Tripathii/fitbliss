<?php
$html = file_get_contents('d:/xampp/htdocs/fitbliss/php-site/index.php');

$header_pos = strpos($html, '<header');
$header_end = strpos($html, '</header>');
$header = substr($html, $header_pos, $header_end - $header_pos + 9);

echo "Header markup:\n" . substr($header, 0, 2000) . "\n...\n";

preg_match_all('/<nav[^>]*>([\s\S]*?)<\/nav>/i', $header, $navs);
echo "Found " . count($navs[0]) . " <nav> elements in header.\n";
foreach ($navs[0] as $n) {
    echo substr($n, 0, 500) . "\n---\n";
}
