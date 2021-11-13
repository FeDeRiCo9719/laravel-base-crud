@extends('layout.base')

@section('title', 'Comics')

@section('content')
<h1>Comics Series</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Series</th>
            <th scope="col">Type</th>
            <th scope="col">Price</th>
            <th scope="col">View</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($comics as $comic)
        <tr>
            <th scope="row">{{$comic['id']}}</th>
            <td>{{$comic['title']}}</td>        
            <td>{{$comic['series']}}</td>
            <td>{{$comic['type']}}</td>
            <td>{{$comic['price']}} $</td>
            <td>
                <a href="{{route('comics.show',$comic['id'])}}">
                    <button type="button" class="btn btn-primary">View</button>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection