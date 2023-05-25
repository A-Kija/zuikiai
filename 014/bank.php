<?php
echo '<pre>';
error_reporting(E_ALL);
ini_set('display_errors', '1');

// $data = [
//     ['name' => 'bebras', 'amount' => 20],
//     ['name' => 'briedis', 'amount' => 120],
//     ['name' => 'antis', 'amount' => 0]
// ];

// $dataJson = json_encode($data);
// $dataSer = serialize($data);

// file_put_contents(__DIR__ . '/data.json', $dataJson);
// file_put_contents(__DIR__ . '/data.ser', $dataSer);


$jsonFile = file_get_contents(__DIR__ . '/data.json');
$serFile = file_get_contents(__DIR__ . '/data.ser');

$dataFromJson = json_decode($jsonFile, 1);
$dataFromSer = unserialize($serFile);

print_r($dataFromJson);
print_r($dataFromSer);