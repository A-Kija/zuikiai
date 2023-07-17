@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
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
                                    <a class="btn btn-success" href="{{route('tags-edit', $tag)}}" >
                                        Edit
                                    </a>
                                    <a class="btn btn-danger" href="{{route('tags-delete', $tag)}}" >
                                        Delete    
                                    </a>
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
        </div>
    </div>
</div>
@endsection