<?php
//Ona

echo '<pre>';

require __DIR__ . '/Ufo.php';

$ufo1 = new Ufo('Jupiter', 1, 2, 3);
$ufo2 = new Ufo('Alfa Centauri', 5547815645646);



// unset($ufo2);


// $ufo1->speed = 17;


// echo $ufo1->speed;

// echo '<br>';
// echo $ufo1->turbo();
// echo '<br>';
// echo $ufo2->turbo();

echo '<br>';
// echo  $ufo2->whatTimeBig();

// $ufo1->destination = 'Mercury';



echo $ufo1->destination;

// echo $ufo2->bebras;


echo '<br>';
var_dump($ufo1);
var_dump($ufo2);