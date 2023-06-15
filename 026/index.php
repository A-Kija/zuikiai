<?php

require __DIR__ . '/H1.php';
require __DIR__ . '/Color.php';
require __DIR__ . '/AddH1.php';
require __DIR__ . '/H1WithRandomColor.php';



$randomColor = new H1WithRandomColor('Random color');
$randomColor->print();

$blogasBebras = new H1WithRandomColor('Blogas bebras');
$blogasBebras->print();

$piktaVovere = new H1WithRandomColor('Pikta vovere');
$piktaVovere->print();



echo AddH1::COLOR;
echo AddH1::COLOR1;


