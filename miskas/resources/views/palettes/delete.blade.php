@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Confirm delete</h5>
                    <p>Are you sure you want to delete this palette?</p>
                    <strong>Colors:</strong>
                    <div class="colors-list-delete">
                        @foreach($palette->colors as $color)
                        <div class="color-list-delete" style="background-color: {{$color}};">
                        </div>
                        @endforeach
                    </div>
                    <form method="post" action="{{route('palettes-destroy', $palette)}}">
                        <button type="submit" class="btn btn-danger">Delete</button>
                        <a href="{{route('palettes-index')}}" class="btn btn-secondary">Cancel</a>
                        @method('delete')
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection