<?php

if (!empty($_POST)) {

    $host = 'localhost';
    $db   = 'zuikis';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    $pdo = new PDO($dsn, $user, $pass, $options);

    $id = $_POST['id'] ?? 0;
    $title = $_POST['title'] ?? '';
    $height = $_POST['height'] ?? 0;
    $type = $_POST['type'] ?? 0;

    // UPDATE table_name
    // SET column1 = value1, column2 = value2, ...
    // WHERE condition;


    $sql = 
        "
        UPDATE trees
        SET title = ?, height = ?, type = ?
        WHERE id = ?
        ";
       
    // $pdo->query($sql); // DB steitmentas

    $stmt = $pdo->prepare($sql);
    $stmt->execute([$title, $height, $type, $id]);



    header('Location: http://localhost/zuikiai/034/');
    die;

}

?>

<form action="" method="post">
    <input type="text" name="id" placeholder="ID">
    <input type="text" name="title" placeholder="Pavadinimas">
    <input type="text" name="height" placeholder="Aukstis">
    <select name="type">
        <option value="1">Lapuotis</option>
        <option value="2">Spygliuotis</option>
        <option value="3">Palmė</option>
    </select>
    <button type="submit">Redaguoti</button>  
</form>