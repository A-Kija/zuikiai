<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');
echo '<pre>';

$m1 = array(); // nerasyti

$m1 = ['' => 'bebras', 77 => 'briedis', '---' => 'smauglys'];

$m1[5] = 'zuikis';

array_push($m1, 'vilkas'); // nenaudotinas

$m1[0] = 'barsukas';


// print_r($m1);

// array_unshift($m1, 'krokodilas');

// print_r($m1);

// print_r(array_values($m1));


$colors = ['red', 'green', 'blue', 'yellow'];

// foreach ($colors as $key => $value) {
//     $colors[$key] = 'black';
//  }

// foreach ($colors as &$color) {
//     $color = 'black';
// }

// print_r($colors);

// foreach ($colors as &$value) {}

// unset($value);

// foreach ($colors as $value) {}

// print_r($colors);


// $k1 = 5;

// $k2 = &$k1;

// $k1++;
// $k2++;

// echo "\n\n";

// echo $k1, $k2;

// for ($x = 1; $x <= 5; $x++) {
//     echo 'Numeris: '.$x.' <br>';
// }

// echo "\n\n";

// foreach (range(1, 5) as $x) {
//     echo 'Numeris: '.$x.' <br>';
// }

$m2 = [
    [4, 'C', 11, 8],
    7,
    [55, 'A', 2],
    [77, 9, 7, 7, 7],
    20
];

// print_r($m2);

$sum = 0;


foreach ($m2 as $value) {

    if (is_array($value)) {
        foreach ($value as $digit) {
            if (is_integer($digit)) {
                $sum += $digit;
            }
        }
    }
    else {
        if (is_integer($value)) {
            $sum += $value;
        }
    }

}

// echo "\n\n";

// print_r($sum);

// $m3 = [];

// foreach (range(1, 5) as $_) {

//     $line = [];
//     foreach (range(1, rand(2, 5)) as $_) {
//         $line[] = rand(0, 9);
//     }
//     $m3[] = $line;

// }

echo "\n\n";

// print_r($m3);

define('BRIEDIS', 'Briedis jau miega');

var_dump(defined(BRIEDIS));




file_put_contents('miskas.txt', BRIEDIS . "\n", FILE_APPEND);
 



