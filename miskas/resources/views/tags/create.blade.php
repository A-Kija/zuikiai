<div class="card" id="create-form">
    <div class="card-body">
        <h5 class="card-title">Add new tag</h5>
        <div class="mb-3">
            <label class="form-label">Tag</label>
            <input name="name" type="text" class="form-control">
        </div>
        <button class="btn btn-primary"
            data-tag-action 
            data-tag-action-type="store"
            data-url="{{route('tags-store')}}"
            data-tag-target="#create-form"
        >Add</button>
    </div>
</div>