<h1>Edit Racoon</h1>
<form action="/racoon/update/<?= $racoon['id'] ?>" method="post">
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="<?= $racoon['name'] ?>" required>
    </div>
    <div>
        <label for="description">Description</label>
        <textarea name="description" id="description" cols="30" rows="10" required><?= $racoon['description'] ?></textarea>
    </div>
    <div>
        <button type="submit">Update</button>
    </div>
</form>
