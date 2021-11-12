@extends('layout.base')


@section('content')

<div class="container d-flex my-5">
    <img src="{{$comic['thumb']}}" alt="">
    <div class="px-5">
        <h1>{{$comic['title']}}</h1>
        <h5>Series: {{$comic['series']}}</h5>
        <p>{{$comic['description']}}</p>
        <h5>Price: {{$comic['price']}} $</h5>
    </div>
</div>

@endsection