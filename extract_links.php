<?php
$html = file_get_contents('d:/xampp/htdocs/fitbliss/live_home.html');
preg_match_all('/<a[^>]+href=[\'"]([^\'"]+)[\'"][^>]*>(.*?)<\/a>/is', $html, $matches);

$links = [];
for ($i = 0; $i < count($matches[0]); $i++) {
    $url = $matches[1][$i];
    $text = trim(strip_tags($matches[2][$i]));
    $links[] = "$text => $url";
}

echo "Total links found: " . count($links) . "\n";
print_r(array_values(array_unique($links)));
