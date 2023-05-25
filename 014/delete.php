<?php
define('GO', true);
require __DIR__ . '/bankRead.php';

$data = array_filter($dataFromJson, fn($line) => $line['name'] != $name);

require __DIR__ . '/bankWrite.php';

echo "\n $name gone \n";