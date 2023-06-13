<?php

// if (file_exists(__DIR__ . '/buhalteris.php')) {
//     require __DIR__ . '/buhalteris.php';
// } else {
//     echo 'Buhalyeri, kur failas, vel nesukelei?';
// }




require __DIR__ . '/Kibiras1.php';


$petro = new Kibiras1;

$ievos = new Kibiras1;


$petro->prideti1Akmeni();
$petro->prideti1Akmeni();
$petro->prideti1Akmeni();

$petro->pridetiDaugAkmenu(7);
$ievos->pridetiDaugAkmenu(7);
$petro->prideti1Akmeni();

$petro->prideti1Akmeni();
$ievos->prideti1Akmeni();
$petro->prideti1Akmeni();

$ievos->kiekPririnktaAkmenu();
$petro->kiekPririnktaAkmenu();