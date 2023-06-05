<?php

define('URL', 'http://localhost/zuikiai/019/');

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    header('Location: https://vz.lt');
    die;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rose</title>
</head>
<body style="background:#F33A6A;">
<form action="<?= URL ?>pink.php" method="post">
        <button type="submit">Go to Pink</button>
</form>
</body>
</html>