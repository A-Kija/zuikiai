<?php
session_start();


if (isset($_SESSION['name']) && !isset($_GET['logout'])) {
    header('Location: http://localhost/zuikiai/019/login/');
    die;
}



if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_GET['logout'])) {
        unset($_SESSION['name']);
        $_SESSION['error'] = 'Logged out';
        header('Location: http://localhost/zuikiai/019/login/login.php');
        die;
    }


    $users = file_get_contents(__DIR__ . '/users.json');
    $users = json_decode($users, 1);
    foreach($users as $user) {
        if ($user['name'] == $_POST['name'] && $user['psw'] == md5($_POST['psw'])) {
            $_SESSION['name'] = $user['name'];
            header('Location: http://localhost/zuikiai/019/login/member.php');
            die;
        }
    }
    $_SESSION['error'] = 'Invalid password or user name';
    header('Location: http://localhost/zuikiai/019/login/login.php');
    die;
}


if (isset($_SESSION['error'])) {
    $error = $_SESSION['error'];
    unset($_SESSION['error']);
}
else {
    $error = '';
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login Page</h1>

    <?php if ($error) : ?>
        <h3 style="color:crimson;"><?= $error ?></h3>
    <?php endif ?>

    <form method="post">
        <div>
            Name <input type="text" name="name">
        </div>
        <div>
            Password <input type="password" name="psw">
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
    </form>
</body>
</html>