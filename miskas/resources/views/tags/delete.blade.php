<div class="modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirm delete</h5>
                <button type="button" class="btn-close"
                data-tag-action 
                data-tag-action-type="remove"
                data-tag-target="#delete-modal" 
                ></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <p>Are you sure you want to delete this tag?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                data-tag-action 
                data-tag-action-type="remove"
                data-tag-target="#delete-modal"
                >Close</button>
                <button type="button" class="btn btn-danger"
                data-tag-action 
                data-tag-action-type="destroy"
                data-url="{{route('tags-destroy', $tag)}}"
                data-tag-target="#delete-modal"
                >Delete</button>
            </div>
        </div>
    </div>
</div>
