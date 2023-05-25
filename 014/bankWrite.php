<?php
defined('GO') || die('no entry');


$dataJson = json_encode($data);
file_put_contents(__DIR__ . '/data.json', $dataJson);