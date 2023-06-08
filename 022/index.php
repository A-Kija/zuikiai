<?php
//Ona

echo '<pre>';

require __DIR__ . '/Ufo.php';

$ufo1 = new Ufo;
$ufo2 = new Ufo;






$ufo1->speed = 17;


// echo $ufo1->speed;

// echo '<br>';
// echo $ufo1->turbo();
// echo '<br>';
// echo $ufo2->turbo();

echo '<br>';
echo  $ufo2->whatTimeBig();


echo '<br>';
var_dump($ufo1);
var_dump($ufo2);

