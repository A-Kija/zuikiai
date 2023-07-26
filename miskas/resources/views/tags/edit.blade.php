<div class="modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit tag</h5>
                <button type="button" class="btn-close" data-tag-action data-tag-action-type="remove"
                    data-tag-target="#edit-modal"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <input name="name" type="text" class="form-control" value="{{$tag->name}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-tag-action data-tag-action-type="remove"
                    data-tag-target="#edit-modal">Close</button>
                <button class="btn btn-success" type="button" data-tag-action data-tag-action-type="update"
                    data-url="{{route('tags-update', $tag)}}" data-tag-target="#edit-modal">
                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    <span class="do-action">Save</span>
                    <span class="do-loading">Loading...</span>
                </button>
            </div>
        </div>
    </div>
</div>