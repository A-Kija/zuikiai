<?php
    $colors = file_get_contents(__DIR__ . '/../colors.ser');
    $colors = $colors ? unserialize($colors) : [];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <script src="app.js"></script>
    <title>Home</title>
</head>
<body>
    <?php require __DIR__ . '/menu.php' ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-9">
                <div class="card m-5">
                    <div class="card-header">
                        <h2>Colors list</h2>
                    </div>
                    <ul class="list-group list-group-flush">
                    <?php foreach ($colors as $color) : ?>
                        <li class="list-group-item">
                            <div class="bin">
                                <div class="color-block" style="background:<?= $color['color'] ?>;"><?= $color['name'] ?></div>
                                <form action="./delete.php?id=<?= $color['id'] ?>" method="post">
                                    <button type="submit" class="delete"></button>
                                </form>
                                <a href="./edit.php?id=<?= $color['id'] ?>" class="edit"></a>
                            </div>
                        </li>
                    <?php endforeach ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>