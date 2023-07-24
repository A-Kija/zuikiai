<div class="card">
    <div class="card-body">
        <h5 class="card-title">Tags List</h5>
        <ul class="list-group list-group-flush">
            @forelse($tags as $tag)
            <li class="list-group-item">
                <div class="d-flex justify-content-between">
                    <div>
                        <div class="d-flex">
                            <div class="ms-2">
                                <div>{{$tag->name}}</div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button type="button" class="btn btn-success"
                        data-tag-action 
                        data-tag-action-type="load"
                        data-url="{{route('tags-edit', $tag)}}"
                        data-tag-target="#edit-modal"
                        >
                           Edit    
                       </button>
                        <button type="button" class="btn btn-danger"
                         data-tag-action 
                         data-tag-action-type="load"
                         data-url="{{route('tags-delete', $tag)}}"
                         data-tag-target="#delete-modal"
                         >
                            Delete    
                        </button>
                    </div>
                </div>
            </li>
            @empty
            <li class="list-group-item">
                <p class="text-center">No tags</p>
            </li>
            @endforelse
        </ul>

    </div>
</div>