@extends('forest.layout')
@section('title', 'Animals in the forest')
@section('content')
<h1>Animals in the forest</h1>
<ul>
    @foreach($animals as $animal)
    <li>{{$animal}}</li>
    @endforeach
</ul>
@endsection