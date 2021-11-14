@extends('layout.base')

@section('title', 'Add new Comic')

@section('content')
<h1>Modify Comic: {{$comic['title']}}</h1>

<form action="{{route('comics.update', $comic['id']) }}" method="post">
    @csrf
    @method("put")

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="add title..." value="{{ old('title') ?  old('title'): $comic['title']}}" aria-describedby="emailHelp">
    </div>
    @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
        <label for="description">Description</label>
        <textarea type="text" class="form-control" id="description" cols="5" rows="5" name="description" placeholder="add description..." aria-describedby="emailHelp">{{ old('description') ?  old('description'): $comic['description']}}</textarea>
    </div>
    @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
        <label for="thumb">Thumb</label>
        <input type="text" class="form-control" id="thumb" name="thumb" placeholder="add thumb..." value="{{ old('thumb') ?  old('thumb'): $comic['thumb']}}" aria-describedby="emailHelp">
    </div>
    @error('thumb')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
        <label for="price">Price</label>
        <input type="number" step="any" class="form-control" id="price" name="price" placeholder="add price..." value="{{ old('price') ?  old('price'): $comic['price']}}" aria-describedby="emailHelp">
    </div>
    @error('price')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
        <label for="series">Series</label>
        <input type="text" class="form-control" id="series" name="series" placeholder="add series..." value="{{ old('series') ?  old('series'): $comic['series']}}" aria-describedby="emailHelp">
    </div>
    @error('series')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
        <label for="sale_date">Date</label>
        <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder="add sale_date..." value="{{ old('sale_date') ?  old('sale_date'): $comic['sale_date']}}" aria-describedby="emailHelp">
    </div>
    @error('sale_date')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
        <label for="type">Type</label>
        <input type="text" class="form-control" id="type" name="type" placeholder="add type..." value="{{ old('type') ?  old('type'): $comic['type']}}" aria-describedby="emailHelp">
    </div>
    @error('type')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="d-flex justify-content-between">
        <button type="submit" class="btn btn-secondary">Modify</button>

        <a href="{{route('comics.show', $comic['id'])}}">
            <button type="button" class="btn btn-primary">Back</button>
        </a>
    </div>
</form>
@endsection
