@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Add new palette</h5>
                    <form method="post" action="{{route('palettes-update', $palette)}}">
                        <div class="mb-3">
                            <label for="examplePaletteInput" class="form-label">Select palette</label>
                            <input type="palette" name="palette" class="form-control form-control-palette"
                                id="examplePaletteInput" title="Choose your palette" value="{{old('palette', $palette->palette)}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Author</label>
                            <select name="author_id" class="form-select">
                                @foreach ($authors as $author)
                                <option value="{{$author->id}}" @if($author->id == old('author_id', $palette->author_id)) selected @endif>{{$author->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Rate</label>
                            <input name="palette_rate" type="number" class="form-control" value={{old('palette_rate', $palette->rate)}}>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="{{route('palettes-index')}}" class="btn btn-secondary">Cancel</a>
                        @method('put')
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection