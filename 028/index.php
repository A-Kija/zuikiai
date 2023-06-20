<?php
use Miskas\Didelis\PilkasMiskas;  // <--- namespace
use Miskas\Didelis\Pelkes\Pelke;  // <--- namespace
use Miskas\Didelis\Grybu\Laukas\Grybai;  // <--- namespace
use Sodas\Darzas\Uogos\Agrastai;  // <--- namespace

require __DIR__ . '/vendor/autoload.php';  // <--- autoloader'is


$miskas = new PilkasMiskas;  // <--- klases vardas be namespace
$pelke = new Pelke;  // <--- klases vardas be namespace
$grybai = new Grybai;  // <--- klases vardas be namespace
$uogos = new Agrastai('A');  // <--- klases vardas su namespace
