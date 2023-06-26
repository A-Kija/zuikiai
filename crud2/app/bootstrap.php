<?php
use Colors\App;
session_start();
define('URL', 'http://colors.test/');
require __DIR__ . '/../vendor/autoload.php';

echo App::start();
