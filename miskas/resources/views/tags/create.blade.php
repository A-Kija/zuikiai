@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Add new tag</h5>
                    <form method="post" action="{{route('tags-store')}}">
                        <div class="mb-3">
                            <label class="form-label">Tag</label>
                            <input name="name" type="text" class="form-control" value="{{old('name')}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Add</button>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection