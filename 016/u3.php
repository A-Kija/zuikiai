<?php
    $out = md5(time());
    $out = preg_replace_callback('/(\d)(\d+)/', function($m) {
        return '<h1><span>'.$m[1].'</span>'.$m[2].'</h1>';
    }, $out);


    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bam U3</title>
    <style>
        h1 {
            display: inline;
        }
        h1 span {
            color:crimson;
        }
    </style>
</head>
<body>
   <?= $out ?>
</body>
</html>