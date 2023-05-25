<?php
define('GO', true);
require __DIR__ . '/bankRead.php';


$data[] = ['name' => $name, 'amount' => 0];


require __DIR__ . '/bankWrite.php';

echo "\n $name added \n";