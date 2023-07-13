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
                            <div class="row">
                                <div class="col-4">
                                    <select class="form-select" name="sort_by">
                                        <option value="" @if(''==$sortBy) selected @endif>No sort</option>
                                        <option value="rate" @if('rate'==$sortBy) selected @endif>Rate</option>
                                        <option value="color" @if('color'==$sortBy) selected @endif>Color</option>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <select class="form-select" name="order_by">
                                        <option value="asc" @if('asc'==$orderBy) selected @endif>ASC</option>
                                        <option value="desc" @if('desc'==$orderBy) selected @endif>DESC</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-4">
                                    <select class="form-select" name="filter_by">
                                        <option value="" @if(''==$filterBy) selected @endif>No filter</option>
                                        <option value="rate" @if('rate'==$filterBy) selected @endif>Rate</option>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <select class="form-select" name="filter_value">
                                        @foreach(range(1, 10) as $number)
                                        <option value="{{$number}}" @if($number==$filterValue) selected @endif>
                                            {{$number}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4 mt-4">
                                    <select class="form-select" name="per_page">
                                        @foreach([20, 10, 5] as $number)
                                        <option value="{{$number}}" @if($number==$perPage) selected @endif>
                                            {{$number}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-4 mt-4">
                                    <button type="submit" class="btn btn-primary">Go</button>
                                    <a class="btn btn-secondary" href="{{route('colors-index')}}">Clear</a>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Find</h4>
                    <form action="{{route('colors-index')}}" method="get">
                        <fieldset>
                            <div class="row">
                                <div class="col-4">
                                    <input type="text" class="form-control" name="s"
                                        value="{{$s ?? ''}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4 mt-4">
                                    <button type="submit" class="btn btn-primary">Find</button>
                                    <a class="btn btn-secondary" href="{{route('colors-index')}}">Clear</a>
                                </div>
                            </div>
                        </fieldset>
                    </form>
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
                                        <div
                                            style="background-color: {{$color->color}}; width: 30px; height: 30px; border-radius: 50%;">
                                        </div>
                                        <div class="ms-2">
                                            <div>{{$color->color}}</div>
                                            <div>{{$color->author->name}}</div>
                                            <div>Rate: {{$color->rate}}</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <a class="btn btn-success" href="{{route('colors-edit', $color)}}">
                                        Edit
                                    </a>
                                    <a class="btn btn-danger" href="{{route('colors-delete', $color)}}">
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
        <div class="col-md-12 mt-4">
            {{$colors->links()}}
        </div>
    </div>
</div>
@endsection