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

    $title = $_POST['title'] ?? '';
    $height = $_POST['height'] ?? 0;
    $type = $_POST['type'] ?? 0;

// INSERT INTO table_name (column1, column2, column3, ...)
// VALUES (value1, value2, value3, ...);


    $sql = 
        "
        INSERT INTO trees 
        (title, height, type)
        VALUES ('$title', $height, $type)
        ";
       
    $pdo->query($sql); // DB steitmentas

    header('Location: http://localhost/zuikiai/034/');
    die;

}

?>

<form action="" method="post">
    <input type="text" name="title" placeholder="Pavadinimas">
    <input type="text" name="height" placeholder="Aukstis">
    <select name="type">
        <option value="1">Lapuotis</option>
        <option value="2">Spygliuotis</option>
        <option value="3">Palmė</option>
    </select>
    <button type="submit">Prideti</button>  
</form>