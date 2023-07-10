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
                                id="exampleColorInput" value="#563d7c" title="Choose your color">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Author</label>
                            <input name="color_author" type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Rate</label>
                            <input name="color_rate" type="number" class="form-control">
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