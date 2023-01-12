@extends('layouts.main')


@section('content')
    <div class="container">
        <h1>Insert new comic</h1>
    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="insert title">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="text" class="form-control" name="image" id="image" placeholder="insert the url of the image">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" name="type" id="type" placeholder="insert the type of the comic">
        </div>
        <div class="mb-3">
            <label for="prize" class="form-label">Prize</label>
            <input type="text" class="form-control" name="prize" id="prize" placeholder="insert the prize">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Send</button>
    </form>
    </div>

@endsection
