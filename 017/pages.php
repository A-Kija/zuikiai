<?php

$page = (int) ($_GET['p'] ?? 1);

if (!in_array($page, [1, 2, 3])) {
    header('Location: http://localhost/zuikiai/017/pages.php');
    die();
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIST</title>
</head>
<body>
        <nav>
            <a href="http://localhost/zuikiai/017/pages.php?p=1">Page 1</a>
            <a href="http://localhost/zuikiai/017/pages.php?p=2">Page 2</a>
            <a href="http://localhost/zuikiai/017/pages.php?p=3">Page 3</a>

        </nav>

        <?php if($page == 1) : ?>

        <h1>Page 1</h1>

        <?php elseif($page == 2) : ?>

        <h1>Page 2</h1>

        <?php else : ?>

        <h1>Page 3</h1>

        <?php endif ?>
    
</body>
</html>