<?php
$html = file_get_contents('d:/xampp/htdocs/fitbliss/live_home.html');

// Let's find everything inside <body>...</body>
preg_match('/<body[^>]*>([\s\S]*?)<\/body>/i', $html, $body_match);
$body = $body_match[1];

echo "Body length: " . strlen($body) . " chars\n";

// Let's inspect CSS links in <head>
preg_match('/<head[^>]*>([\s\S]*?)<\/head>/i', $html, $head_match);
$head = $head_match[1];

preg_match_all('/<link[^>]+rel=[\'"]stylesheet[\'"][^>]*>/i', $head, $css_links);
echo "CSS Links:\n";
foreach ($css_links[0] as $link) {
    echo $link . "\n";
}
