@extends('forest.layout')

@section('content')

<h1>
    Welcome to the jungle, where you can find all the animals!
</h1>
@if($yes)
<h2>
    {{$who}}
</h2>
@else
<h2>
    {{$what}}
</h2>
@endif

@endsection

@section('title', 'BIG DARK Forest')