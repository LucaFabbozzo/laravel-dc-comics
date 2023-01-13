@extends('layouts.main')


@section('content')
    <div class="container py-4">
        <h1 class="text-uppercase fs-4 pb-4">Insert new comic</h1>
    <form action="{{route('comics.update', $comic)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title *</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="insert title" value="{{$comic->title}}">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image *</label>
            <input type="text" class="form-control" name="image" id="image" placeholder="insert the url of the image" value="{{$comic->image}}">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type *</label>
            <input type="text" class="form-control" name="type" id="type" placeholder="insert the type of the comic" value="{{$comic->type}}">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series *</label>
            <input type="text" class="form-control" name="series" id="series" placeholder="insert the series" value="{{$comic->series}}">
        </div>
        <div class="mb-3">
            <label for="prize" class="form-label">Prize *</label>
            <input type="text" class="form-control" name="price" id="prize" placeholder="insert the price" value="{{$comic->price}}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Send</button>
    </form>
    </div>

@endsection
