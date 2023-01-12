@extends('layouts.main')


@section('content')
  <div class="container">
        <h1 class="text-uppercase fs-4 pb-4">Comics</h1>
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Series</th>
      <th scope="col">Type</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($comics as $comic)
    <tr>
      <td>{{$comic->id}}</td>
      <td>{{$comic->title}}</td>
      <td>{{$comic->series}}</td>
      <td>{{$comic->type}}</td>
      <td><a class="btn btn-primary" href="{{route('comics.show', $comic)}}"><i class="fa-solid fa-eye"></i></a></td>
       <td><a class="btn btn-warning" href="#"><i class="fa-regular fa-pen-to-square"></i></a></td>

    </tr>
    @empty
        <h1>Products not available</h1>
    @endforelse

  </tbody>
</table>

 {{$comics->links()}}

    </div>
@endsection


@section('title')
    index
@endsection
