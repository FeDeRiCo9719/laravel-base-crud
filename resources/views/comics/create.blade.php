@extends('layout.base')

@section('title', 'Add new Comic')

@section('content')
<h1>Add new Comic</h1>
<form action="{{route('comics.store')}}" method="post">
    @csrf

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="add title..." aria-describedby="emailHelp">
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea type="text" class="form-control" id="description" cols="5" rows="5" name="description" placeholder="add description..." aria-describedby="emailHelp"></textarea>
    </div>

    <div class="form-group">
        <label for="thumb">Thumb</label>
        <input type="text" class="form-control" id="thumb" name="thumb" placeholder="add thumb..." aria-describedby="emailHelp">
    </div>

    <div class="form-group">
        <label for="price">Price</label>
        <input type="number" class="form-control" id="price" name="price" placeholder="add price..." aria-describedby="emailHelp">
    </div>

    <div class="form-group">
        <label for="series">Series</label>
        <input type="text" class="form-control" id="series" name="series" placeholder="add series..." aria-describedby="emailHelp">
    </div>

    <div class="form-group">
        <label for="sale_date">Date</label>
        <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder="add sale_date..." aria-describedby="emailHelp">
    </div>

    <div class="form-group">
        <label for="type">Type</label>
        <input type="text" class="form-control" id="type" name="type" placeholder="add type..." aria-describedby="emailHelp">
    </div>

    <div class="d-flex justify-content-between">
        <button type="submit" class="btn btn-dark">Create</button>

        <a href="{{route('comics.index')}}">
            <button type="button" class="btn btn-primary">Back to Comics</button>
        </a>
    </div>
</form>
@endsection
