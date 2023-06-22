<h1>Racoons list</h1>
<?php if (empty($racoons)) : ?>
    <p>No racoons found.</p>
<?php else: ?>
<?php foreach ($racoons as $racoon) : ?>
    <h2><?= $racoon['name'] ?></h2>
    <p><?= $racoon['description'] ?></p>
    <a href="/racoon/edit/<?= $racoon['id'] ?>">Edit</a>
<?php endforeach ?>
<?php endif ?>