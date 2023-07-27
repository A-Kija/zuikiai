@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Edit palette</h5>
                    <form method="post" action="{{route('palettes-update', $palette)}}" id="palette--create--form">
                        @foreach($palette->colors as $color)
                        <div class="mb-3 palette-color-input">
                            <label class="form-label">Select color</label>
                            <input type="color" name="colors[]" class="form-control form-control-color" value="{{$color}}" title="Choose your color">
                            <button type="button" class="btn btn-danger color--button--remove">-</button>
                        </div>
                        @endforeach
                        <button type="button" class="btn btn-success" id="add--color--button">+</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                        @csrf
                        @method('put')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<section id="color--input" style="display: none;">
    <div class="mb-3 palette-color-input">
        <label class="form-label">Select color</label>
        <input type="color" name="colors[]" class="form-control form-control-color" value="#ffffff" title="Choose your color">
        <button type="button" class="btn btn-danger">-</button>
    </div>
</section>
@endsection