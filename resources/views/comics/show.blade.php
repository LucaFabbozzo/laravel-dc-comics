@extends('layouts.main')


@section('content')
    <div class="container">
        <div class="card m-auto" style="width: 30%;">
         <img src="{{$comic->image}}" class="card-img-top" alt="{{$comic->title}}">
        <div class="card-body">
        <h5 class="card-title">{{$comic->title}}</h5>
        <p class="card-text">{{$comic->description}}</p>
        <a href="{{route('comics.index')}}" class="btn btn-secondary">Back</a>
  </div>
</div>
    </div>
@endsection


@section('title')
    Show
@endsection
