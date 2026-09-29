<?php
$files = glob('d:/xampp/htdocs/fitbliss/wp-content/uploads/*/*/*.mp4');
foreach ($files as $f) {
    echo $f . " (" . round(filesize($f)/1024/1024, 2) . " MB)\n";
}
