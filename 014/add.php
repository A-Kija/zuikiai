<?php
define('GO', true);

require __DIR__ . '/bankRead.php';

$data = array_map(function($line) use ($name, $amount) {
    if ($line['name'] == $name) {
        $line['amount'] += $amount;
    } 
    return $line;
}, $dataFromJson);

require __DIR__ . '/bankWrite.php';

echo "\n $name plus $amount\n";