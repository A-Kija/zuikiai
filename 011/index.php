<?php

$a = rand(0, 2);
$b = rand(0, 2);
$c = rand(0, 2);
$d = rand(0, 2);

echo "<h1>$a $b $c $d</h1>";

$_0 = 0;
$_1 = 0;
$_2 = 0;

if ($a == 2) {
    $_2++;
}
if ($b == 2) {
    $_2++;
}
if ($c == 2) {
    $_2++;
}
if ($d == 2) {
    $_2++;
}

$suma = $a + $b + $c + $d;

$_1 = $suma - 2 * $_2;
$_0 = 4 - $_1 - $_2;

echo "<h1>0:$_0,  1:$_1, 2:$_2</h1>";



$what = 5 > 2 ? 'nice' : (5 > 11 ? 'cool' : 'super');

// $digit = 5;

// $what = 5 > 2 ? ++$digit : --$digit;

$pirmas = 'Labas';


$hello = $pirmas ?? 'hello';


echo "<h1>$hello</h1>";

echo '<pre>';
var_dump($hello);


$letter = 'A';


$animal = match($letter) {
    'W' => 'Wolf',
    'F' => 'Fox',
    'A', 'R' => 'Raccon',
    default => 'Rabbit'
};

switch ($letter) {
    case 'W':
        $animal2 = 'Wolf';
        break;
    case 'F':
        $animal2 = 'Fox';
        break;
    case 'A':
    case 'R':
        $animal2 = 'Raccon';
        break;  
    default: 
        $animal2 = 'Rabbit' ;
};

echo "<h1>$animal $animal2</h1>";


$p = 'XL';


switch ($p) {
    case 'S': echo '<h1>Small</h1>';
    case 'M': echo '<h1>Medium</h1>';
    case 'L': echo '<h1>Large</h1>';
    default: echo '<h1>X Large</h1>';
}