<h1>Login</h1>
<form action="<?= '/login' ?>" method="post">
    <input type="email" name="email" placeholder="Username" value="<?= $old['email'] ?? '' ?>">
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Login</button>
</form>