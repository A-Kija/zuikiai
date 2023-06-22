<h1>Create Racoon</h1>
<form action="/racoon/store" method="post">
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>
    </div>
    <div>
        <label for="description">Description</label>
        <textarea name="description" id="description" cols="30" rows="10" required></textarea>
    </div>
    <div>
        <button type="submit">Create</button>
    </div>
</form>
