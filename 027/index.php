<?php

// require __DIR__ . '/Kleopatra.php';
// require __DIR__ . '/Ieva.php';
// require __DIR__ . '/Tevas.php';
// require __DIR__ . '/Vaikas.php';


spl_autoload_register(function ($class) {

    echo $class . ' 1<br>';

});

spl_autoload_register(function ($class) {

    echo $class . ' 2<br>';

});

spl_autoload_register(function ($class) {

    echo $class . ' 3<br>';

    require __DIR__ . '/' . $class . '.php';

});


$vaikas = new Vaikas;



$vaikas->fun();
