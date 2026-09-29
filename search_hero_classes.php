<?php
$files = glob('d:/xampp/htdocs/fitbliss/wp-content/uploads/elementor/css/*.css');
$search = ['1c8e0f27', '337ffeb8', '7cde72fa', 'elementor-location-header', 'elementor-27'];

foreach ($files as $f) {
    $content = file_get_contents($f);
    foreach ($search as $s) {
        if (strpos($content, $s) !== false) {
            echo "Match '$s' in " . basename($f) . ":\n";
            preg_match_all('/([^{}]*' . preg_quote($s, '/') . '[^{}]*\{[^}]+\})/i', $content, $matches);
            foreach ($matches[0] as $m) {
                echo "  " . trim(preg_replace('/\s+/', ' ', $m)) . "\n";
            }
        }
    }
}
