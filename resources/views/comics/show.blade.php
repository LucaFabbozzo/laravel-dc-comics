@extends('layouts.main')


@section('content')
    <div class="container container-lf">
        <div class="card m-auto p-4 mb-5" style="width: 100%;">
         <img style="width: 30%" src="{{$comic->image}}" class="card-img-top" alt="{{$comic->title}}">
            <div class="card-body">
                <h4 class="card-title fs-2">{{$comic->title}}</h4>
                <p class="card-title fs-3">{{$comic->type}}</p>
                <p class="card-title fs-4">{{$comic->series}}</p>
                <p class="card-title fs-5">&euro; {{$comic->price}}</p>
                <p class="card-text fs-6">{{$comic->description}}</p>
                <a href="{{route('comics.index')}}" class="btn btn-outline-secondary text-uppercase">Back</a>
            </div>
        </div>
    </div>
@endsection


@section('title')
    Show
@endsection
