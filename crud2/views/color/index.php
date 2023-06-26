<div class="container">
        <div class="row justify-content-center">
        <div class="col-4">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2>New color</h2>
                    </div>
                    <div class="card-body">
                        <form action="./add.php" method="post">
                        <label class="form-label">Color picker</label>
                        <input type="color" class="form-control form-control-color" name="color" title="Choose your color">
                        <button type="submit" class="btn btn-outline-warning mt-4">Save</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2>Colors list</h2>
                    </div>
                    <ul id="colors--list" class="list-group list-group-flush">
                        <li class="list-group-item">
                            <h3>Loading...</h3>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>