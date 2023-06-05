<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        header('Location: http://localhost/zuikiai/019/u7.php');
        die;
    }

    $color = $_SERVER['REQUEST_METHOD'] == 'POST' ? 'yellow' : 'green';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>U 6</title>
</head>
<body style="background:<?= $color ?>;">
    <form>
        <button type="submit">GET</button>
    </form>
    <form method="post">
        <button type="submit">POST</button>
    </form>
</body>
</html>