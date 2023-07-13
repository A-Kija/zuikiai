@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Sorts and Filters</h4>
                    <form action="{{route('colors-index')}}" method="get">
                        <fieldset>
                            <legend>Sorts</legend>
                            <div class="row">
                                <div class="col-4">
                                    <select class="form-select" name="sort_by" aria-label="Default select example">
                                        <option value="rate" @if('rate' == $sortBy) selected @endif>Rate</option>
                                        <option value="color" @if('name' == $sortBy) selected @endif>Name</option>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <select class="form-select" name="order_by" aria-label="Default select example">
                                        <option value="asc" @if('asc' == $orderBy) selected @endif>ASC</option>
                                        <option value="desc" @if('desc' == $orderBy) selected @endif>DESC</option>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <button type="submit" class="btn btn-primary">Sort</button>
                                    <a class="btn btn-secondary" href="{{route('colors-index')}}">Clear</a>
                                </div>
                            </div>
                        </fieldset>
                </div>
            </div>
        </div>


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
                                            <div>{{$color->author->name}}</div>
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