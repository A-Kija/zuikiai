<?php

require __DIR__ . '/Grybas.php';
require __DIR__ . '/Krepsys.php';

$krepsys = new Krepsys;

do{}
while ($krepsys->deti(new Grybas));

echo '<pre>';

var_dump($krepsys);