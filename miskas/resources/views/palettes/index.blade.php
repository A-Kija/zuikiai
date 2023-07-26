@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Palettes List</h5>
                    <ul class="list-group list-group-flush">
                        @forelse($palettes as $palette)
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <div class="d-flex">
                                        @foreach($palette->colors as $color)
                                        <div class="colors-list" style="background-color: {{$color}};">
                                            {{$color}}
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div>
                                    <a class="btn btn-success" href="{{route('palettes-edit', $palette)}}">
                                        Edit
                                    </a>
                                    <a class="btn btn-danger" href="{{route('palettes-delete', $palette)}}">
                                        Delete
                                    </a>
                                </div>
                            </div>
                        </li>
                        @empty
                        <li class="list-group-item">
                            <p class="text-center">No palettes</p>
                        </li>
                        @endforelse
                    </ul>

                </div>
            </div>
        </div>
        <div class="col-md-12 mt-4">
            {{$palettes->links()}}
        </div>
    </div>
</div>
@endsection