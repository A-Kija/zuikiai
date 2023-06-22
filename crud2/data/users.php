<?php


$users = [
    ['name' => 'Bebras', 'email' => 'bebras@gmail.com', 'password' => md5('123')],
    ['name' => 'Briedis', 'email' => 'briedis@gmail.com', 'password' => md5('123')],
    ['name' => 'Lape', 'email' => 'lape@gmail.com', 'password' => md5('123')],
    ['name' => 'Barsukas', 'email' => 'barsukas@gmail.com', 'password' => md5('123')]
];

file_put_contents(__DIR__ . '/users.json', json_encode($users));

echo "\n users.json created \n";