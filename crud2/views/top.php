<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= URL ?>/app.css">
    <script src="<?= URL ?>/app.js" defer></script>


    <title><?= $pageTitle ?? 'Untitled' ?></title>
</head>
<body>

<?php if(!isset($inLogin)): ?>
<?php require __DIR__ . '/nav.php' ?>
<?php endif ?>
<?php require_once 'Messages.php' ?>

