<?php
$color = $_GET['color'] ?? '000000';



if (preg_match('/^[0-9a-f]{6}$/', $color)) {
    $color = '#' . $color;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>U3</title>
    <style>
        body {
            background: <?= $color ?>;
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }
        a {
            color: skyblue;
            font-size: 3em;
            padding: 40px;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 20px;
            align-items: center;
        }
    </style>
</head>
<body>
        <form action="http://localhost/zuikiai/018/u3.php" method="get">

            <input type="color" name="color">

            <button type="submit">Rodyk spalvą</button>

        </form>
</body>
</html>



