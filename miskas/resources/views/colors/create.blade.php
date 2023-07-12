@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Add new color</h5>
                    <form method="post" action="{{route('colors-store')}}">
                        <div class="mb-3">
                            <label for="exampleColorInput" class="form-label">Select color</label>
                            <input type="color" name="color" class="form-control form-control-color"
                                id="exampleColorInput" value="{{old('color', '#4fa0d1')}}" title="Choose your color">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Author</label>
                            <select name="author_id" class="form-select">
                                <option>Open this select menu</option>
                                @foreach ($authors as $author)
                                <option value="{{$author->id}}" @if($author->id == old('author_id')) selected @endif>{{$author->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Rate</label>
                            <input name="color_rate" type="number" class="form-control" value="{{old('color_rate')}}">
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