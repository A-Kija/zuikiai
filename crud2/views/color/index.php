<div class="container">
        <div class="row justify-content-center">
        <div class="col-4">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2>New color</h2>
                    </div>
                    <div class="card-body">

                        <label class="form-label">Color picker</label>
                        <input type="color" class="create--color form-control form-control-color" title="Choose your color">
                        <button 
                            type="button" 
                            class="create--button btn btn-outline-warning mt-4"
                            data-url="<?= URL ?>colors/store"
                            >Save</button>

                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2>Colors list</h2>
                    </div>
                    <ul 
                    class="colors--list list-group list-group-flush"
                    data-url="<?= URL ?>colors/list"
                    >
                        <li class="list-group-item">
                            <h3>Loading...</h3>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>