<h1>Confirm racoon delete</h1>
<form action="/racoon/destroy/<?= $racoon['id'] ?>" method="post">
    <div>
        <p>Are you sure you want to delete this racoon?</p>
        <h2><?= $racoon['name'] ?></h2>
    </div>
    <div>
        <button type="submit">Delete</button>
    </div>
    <div>
        <a href="/racoon">Cancel</a>
    </div>
</form>