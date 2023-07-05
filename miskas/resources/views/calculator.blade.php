@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Calculator</div>

                <div class="card-body">
                    <form method="POST" action="{{route('do-calculator')}}">
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <input type="text" class="form-control" name="x" value="{{old('x')}}">
                            </div>
                            <div class="col-md-1">
                                <h2>+</h2>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" name="y" value="{{old('y')}}">
                            </div>
                            <div class="col-md-1">
                                <h2>=</h2>
                            </div>
                            <div class="col-md-3">
                                <h3>{{$result !== null ? $result : ''}}</h3>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">
                                    Calculate
                                </button>
                                <a href="{{route('calculator')}}" class="btn btn-secondary">Reset</a>
                            </div>
                        </div>
                        @csrf
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection