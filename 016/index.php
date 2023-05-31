<?php

$file = file_get_contents(__DIR__. '/wallpaper--009.jpg');

header('Content-Type: image/jpeg');

http_response_code(400);

echo $file;