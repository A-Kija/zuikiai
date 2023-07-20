@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            @include('tags.create')
        </div>
        <div class="col-md-8" data-tag-load data-url={{route('tags-list')}}>
            
        </div>
    </div>
</div>
<div class="modal" id="delete-modal"></div>

@endsection