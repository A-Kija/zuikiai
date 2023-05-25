<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

echo '<h1>MAIN START</h1>';

require_once __DIR__ . '/file1.php';

require_once __DIR__ . '/file2.php';

require_once __DIR__ . '/file1.php';

require_once __DIR__ . '/file2.php';

echo '<h1>MAIN END</h1>';