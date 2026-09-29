<?php
$html = file_get_contents('d:/xampp/htdocs/fitbliss/live_home.html');

// Let's find all elementor sections/containers
$dom = new DOMDocument();
libxml_use_internal_errors(true);
$dom->loadHTML($html);
libxml_clear_errors();

$xpath = new DOMXPath($dom);

// Find main body content elements
$containers = $xpath->query('//div[contains(@class, "elementor-element") and (contains(@class, "e-con-boxed") or contains(@class, "e-con-full"))]');

echo "Found " . $containers->length . " top-level elementor containers.\n";

// Let's check the classes and text of the top-level containers
foreach ($containers as $i => $c) {
    $class = $c->getAttribute('class');
    $id = $c->getAttribute('id');
    $data_id = $c->getAttribute('data-id');
    // only direct child of elementor or main entry
    echo "--- Container $i (data-id: $data_id, id: $id) ---\n";
    $text = substr(trim(preg_replace('/\s+/', ' ', $c->textContent)), 0, 150);
    echo "Preview: $text\n\n";
}
