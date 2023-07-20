@inject('role', 'App\Services\RolesService')
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Authors List</h5>
                    <ul class="list-group list-group-flush">
                        @forelse($authors as $author)
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <div class="d-flex">
                                        <div class="ms-2">
                                            <div><b>{{$author->name}}</b> colors:
                                                <span>[{{$author->colors()->count()}}]</span></div>

                                            <div class="tags-forest">
                                                @foreach($author->tags as $tag)
                                                <form action="{{route('authors-remove-tag', [$author, $tag])}}"
                                                    method="post">
                                                    <span class="badge bg-primary">{{$tag->name}}</span>
                                                    @if($role->auth(['A', 'M']))
                                                    <button type="submit" class="btn btn-danger btn-sm">X</button>
                                                    @endif
                                                    @csrf
                                                    @method('delete')
                                                </form>
                                                @endforeach
                                            </div>
                                            @if($role->auth(['A', 'M']))
                                            <div class="tag-create mt-1">
                                                <form action="{{route('authors-create-tag', $author)}}" method="post">
                                                    <input type="text" name="tag_name" placeholder="Tag name">
                                                    <button type="submit" class="btn btn-primary btn-sm">Add
                                                        tag</button>
                                                    @csrf
                                                </form>
                                            </div>
                                            @endif
                                            {{-- <div>
                                                @foreach($author->authorTags as $authorTag)
                                                <span class="badge bg-primary">{{$authorTag->tag->name}}</span>
                                                @endforeach
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                                @if($role->auth(['A', 'M']))
                                <div class="index-buttons">
                                    <form action={{route('authors-add-tag', $author)}} method="post">
                                        <select name="tag_id">
                                            @foreach($tags as $tag)
                                            <option value="{{$tag->id}}">{{$tag->name}}</option>
                                            @endforeach
                                        </select>
                                        <button type="submit" class="btn btn-primary">Add tag</button>
                                        @csrf
                                    </form>
                                    @endif
                                    @if($role->auth(['A']))
                                    <a class="btn btn-success" href="{{route('authors-edit', $author)}}">
                                        Edit
                                    </a>
                                    <a class="btn btn-danger" href="{{route('authors-delete', $author)}}">
                                        Delete
                                    </a>
                                </div>
                                @endif
                            </div>
                        </li>
                        @empty
                        <li class="list-group-item">
                            <p class="text-center">No authors</p>
                        </li>
                        @endforelse
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection