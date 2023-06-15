<?php

echo '<h1>9 uzdavinys</h1>'.'<br>';
echo '<pre>';

require __DIR__ . '/MarsoPalydovas.php';

$palydovas1 = MarsoPalydovas::getMarsoPalydovas();
$palydovas2 = MarsoPalydovas::getMarsoPalydovas();
$palydovas3 = MarsoPalydovas::getMarsoPalydovas();
// $palydovas4 = clone $palydovas1;
// $palydovas5 = unserialize(serialize($palydovas1));
$palydovas6 = MarsoPalydovas::getMarsoPalydovas();
$palydovas7 = MarsoPalydovas::getMarsoPalydovas();

var_dump($palydovas1);
var_dump($palydovas2);
var_dump($palydovas3);
// var_dump($palydovas4);
// var_dump($palydovas5);
var_dump($palydovas6);
var_dump($palydovas7);


