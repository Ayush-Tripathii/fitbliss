<?php
$post20307 = file_get_contents('d:/xampp/htdocs/fitbliss/wp-content/uploads/elementor/css/post-20307.css');
preg_match_all('/([^{}]*1c8e0f27[^{}]*\{[^}]+\})/i', $post20307, $m1);
preg_match_all('/([^{}]*337ffeb8[^{}]*\{[^}]+\})/i', $post20307, $m2);
preg_match_all('/([^{}]*13edff63[^{}]*\{[^}]+\})/i', $post20307, $m3);

echo "1c8e0f27:\n";
print_r($m1[0]);
echo "337ffeb8:\n";
print_r($m2[0]);
echo "13edff63:\n";
print_r($m3[0]);
