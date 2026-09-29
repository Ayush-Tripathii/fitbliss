<?php
// Download required wp-includes assets to make jQuery and interactions 100% functional locally

$files = [
    'wp-includes/js/jquery/jquery.min.js' => 'https://fitblissbysk.com/wp-includes/js/jquery/jquery.min.js',
    'wp-includes/js/jquery/jquery-migrate.min.js' => 'https://fitblissbysk.com/wp-includes/js/jquery/jquery-migrate.min.js',
    'wp-includes/js/jquery/ui/core.min.js' => 'https://fitblissbysk.com/wp-includes/js/jquery/ui/core.min.js',
    'wp-includes/js/dist/hooks.min.js' => 'https://fitblissbysk.com/wp-includes/js/dist/hooks.min.js',
    'wp-includes/js/dist/i18n.min.js' => 'https://fitblissbysk.com/wp-includes/js/dist/i18n.min.js',
];

$opts = [
    'http' => [
        'method' => 'GET',
        'header' => "User-Agent: Mozilla/5.0\r\n",
        'timeout' => 15
    ]
];
$ctx = stream_context_create($opts);

foreach ($files as $rel_path => $url) {
    $target_file = 'd:/xampp/htdocs/fitbliss/' . $rel_path;
    $dir = dirname($target_file);
    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }
    
    echo "Downloading $url -> $target_file ... ";
    $data = @file_get_contents($url, false, $ctx);
    if ($data) {
        file_put_contents($target_file, $data);
        echo "OK (" . strlen($data) . " bytes)\n";
    } else {
        echo "FAILED\n";
    }
}
