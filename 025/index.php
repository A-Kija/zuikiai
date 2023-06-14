<?php

require __DIR__ . '/TV.php';


echo '<pre>';

echo TV::$price;

echo '<br>';


$tv1 = new TV;
$tv2 = new TV;

$tv1->changePrice();

TV::discount();


$tv1->whatPrice();
$tv2->whatPrice();

var_dump($tv1);
var_dump($tv2);