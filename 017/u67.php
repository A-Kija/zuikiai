<?php

$size = rand(10, 30);
$all = 0;
for ($i = 0; $i < $size; $i++) {
    $howBig = rand(10, 20);
    $small = [];
    for ($k = 0; $k < $howBig - 1; $k++) {
        $small[] = rand(0, 10);
    }
    $small[] = $all;
    $all = $small;
}

echo '<pre>';

print_r($all);