@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Confirm delete</h5>
                    <form method="post" action="{{route('colors-destroy', $color)}}">
                        <button type="submit" class="btn btn-danger">Delete</button>
                        <a href="{{route('colors-index')}}" class="btn btn-secondary">Cancel</a>
                        @method('delete')
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection