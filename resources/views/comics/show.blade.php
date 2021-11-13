@extends('layout.base')

@section('title', 'Comic')

@section('content')

<div class="container d-flex my-5">
    <img src="{{$comic['thumb']}}" alt="">
    <div class="px-5">
        <h1>{{$comic['title']}}</h1>
        <h4>Series: {{$comic['series']}}</h4>
        <p>{{$comic['description']}}</p>

        <div class="d-flex">
            <a href="{{route('comics.index')}}">
                <button type="button" class="btn btn-primary">Back to Comics</button>
            </a>
            
            <a href="{{route('comics.edit',$comic['id'])}}" class="ml-2">
                <button type="button" class="btn btn-secondary">Modify</button>
            </a>

            <form action="{{route('comics.destroy', $comic['id']) }}" method="post" class="ml-2">
                @csrf
                @method("DELETE")

                <button type="submit" class="btn btn-danger">Delete</button>           
            </form>
        </div>
        
    </div>
</div>

@endsection