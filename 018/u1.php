<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>U1</title>
    <style>
        body {
            background: <?= isset($_GET['color']) && $_GET['color'] == 1 ? 'crimson' : 'black' ?>;
        }
        a {
            color: skyblue;
            font-size: 3em;
            padding: 40px;
        }
    </style>
</head>
<body>
    <a href="http://localhost/zuikiai/018/u1.php">Linkas Vienas</a>
    <a href="http://localhost/zuikiai/018/u1.php?color=1">Linkas Du</a>
</body>
</html>



