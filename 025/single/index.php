<?php



require __DIR__ . '/Krepselis.php';



$k1 = Krepselis::get();
$k2 = clone($k1);

echo '<pre>';

var_dump($k1, $k2);