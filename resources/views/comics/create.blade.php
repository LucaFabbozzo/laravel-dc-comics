@extends('layouts.main')


@section('content')
    <div class="container py-1">
        <h1 class="text-uppercase fs-5 fw-bold pb-4">Insert new comic</h1>
        @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title *</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" placeholder="insert title" value="{{old('title')}}">
            @error('title')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image *</label>
            <input type="text" class="form-control @error('image') is-invalid @enderror" name="image" id="image" placeholder="insert the url of the image" value="{{old('image')}}">
            @error('image')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type *</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" id="type" placeholder="insert the type of the comic" value="{{old('type')}}">
            @error('type')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series *</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" name="series" id="series" placeholder="insert the series" value="{{old('series')}}">
            @error('series')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="prize" class="form-label">Price *</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" id="price" placeholder="insert the prize" value="{{old('price')}}">
            @error('price')
                <div class="invalid-feedback">
                     {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Send</button>
    </form>
    </div>

@endsection
