<?php


require __DIR__ . '/Stikline.php';

$stikline1 = new Stikline(200);
$stikline2 = new Stikline(150);
$stikline3 = new Stikline(100);



$stikline3->ipilti($stikline2->ipilti($stikline1->ipilti(500)->ispilti())->ispilti());

echo '<pre>';
var_dump($stikline1);
var_dump($stikline2);
var_dump($stikline3);


