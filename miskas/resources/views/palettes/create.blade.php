@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Add new palette</h5>
                    <form method="post" action="{{route('palettes-store')}}">
                        <div class="mb-3">
                            <label class="form-label">Select color</label>
                            <input type="color" name="palette" class="form-control form-control-color" value="{{old('palette', '#ffffff')}}" title="Choose your color">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Select color</label>
                            <input type="color" name="palette" class="form-control form-control-color" value="{{old('palette', '#ffffff')}}" title="Choose your color">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Select color</label>
                            <input type="color" name="palette" class="form-control form-control-color" value="{{old('palette', '#ffffff')}}" title="Choose your color">
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