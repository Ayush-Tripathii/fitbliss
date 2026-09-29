<?php
$html = file_get_contents('https://staging.fitblissbysk.com/');

$pos = strpos($html, 'id="fbtTrack"');
$end = strpos($html, 'class="fbt-footer"', $pos);
$fbt_html = substr($html, $pos, $end - $pos);

file_put_contents('d:/xampp/htdocs/fitbliss/staging_fbt_all.html', $fbt_html);
echo "Extracted all fbtTrack from staging: " . strlen($fbt_html) . " bytes\n";
