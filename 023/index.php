<?php

require __DIR__ . '/Zveris.php';
require __DIR__ . '/Paukstis.php';



$bebras = new Zveris('Bebras', 5);

$briedis = new Zveris('Briedis', 12);

$genys = new Paukstis('Genys', 7);


$bebras->run();

$genys->fly();


echo '<pre>';
echo '<br>';
var_dump($bebras);
var_dump($briedis);
var_dump($genys);



