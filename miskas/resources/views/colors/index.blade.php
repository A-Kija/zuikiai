@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Colors List</h5>
                    <ul class="list-group list-group-flush">
                        @forelse($colors as $color)
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <div class="d-flex">
                                        <div style="background-color: {{$color->color}}; width: 30px; height: 30px; border-radius: 50%;"></div>
                                        <div class="ms-2">
                                            <div>{{$color->color}}</div>
                                            <div>{{$color->author}}</div>
                                            <div>Rate: {{$color->rate}}</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <a class="btn btn-success" href="{{route('colors-edit', $color)}}" >
                                        Edit
                                    </a>
                                    <a class="btn btn-danger" href="{{route('colors-delete', $color)}}" >
                                        Delete    
                                    </a>
                                </div>
                            </div>
                        </li>
                        @empty
                        <li class="list-group-item">
                            <p class="text-center">No colors</p>
                        </li>
                        @endforelse
                    </ul>
  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection