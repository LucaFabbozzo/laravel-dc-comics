@extends('layouts.main')


@section('content')
    <div class="container">
        <h1>Comics</h1>
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($comics as $comic)
    <tr>
      <td>{{$comic->id}}</td>
      <td>{{$comic->title}}</td>
    </tr>
    @empty
        <h1>Products not available</h1>
    @endforelse

  </tbody>
</table>
    </div>
@endsection


@section('title')
    index
@endsection
