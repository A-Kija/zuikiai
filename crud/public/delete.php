<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $colors = file_get_contents(__DIR__ . '/../colors.ser');
    $colors = $colors ? unserialize($colors) : [];
    $id = (int) $_GET['id'];

    $colors = array_filter($colors, fn($c) => $id != $c['id']);

    $colors = serialize($colors);
    file_put_contents(__DIR__ . '/../colors.ser', $colors);
    header('Location: ./');
    die;

}