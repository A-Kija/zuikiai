<div>
    <a href="<?= URL ?>">Home</a>

    <a href="<?= URL . 'racoon' ?>">Racoons</a>
    <a href="<?= URL . 'racoon/create' ?>">Add More Racoons</a>

    <?php if (isset($_SESSION['email'])) : ?>
        <form action="<?= URL . 'logout' ?>" method="post" style="display: inline;">
            <button type="submit" style="background: transparent; border: none; cursor: pointer;">Logout, <?= $_SESSION['name'] ?></button>
        </form>
    <?php else: ?>
        <a href="<?= URL . 'login' ?>">Login</a>
    <?php endif ?>
</div>