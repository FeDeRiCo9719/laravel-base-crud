@extends('layout.base')

@section('title', 'Comic')

@section('content')

<div class="container d-flex my-5">
    <img src="{{$comic['thumb']}}" alt="">
    <div class="px-5">
        <h1>{{$comic['title']}}</h1>
        <h4>Series: {{$comic['series']}}</h4>
        <p>{{$comic['description']}}</p>
        <a href="{{route('comics.index')}}">
            <button type="button" class="btn btn-primary">Back to Comics</button>
        </a>
    </div>
</div>

@endsection