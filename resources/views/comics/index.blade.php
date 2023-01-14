@extends('layouts.main')


@section('content')
  <div class="container container-lf py-5">
        <h1 class="text-uppercase fs-5 fw-bold pb-4">Comics List</h1>
  @if (session('deleted'))
  {{-- mostro tutto questo solo se è presente la variabile di sessione 'deleted' --}}
  <div>
    <div class="alert alert-success" role="alert">
        {{session('deleted')}}
    </div>
  </div>
  @endif
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Image</th>
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
      <td><a class="btn btn-outline-primary" href="{{route('comics.show', $comic)}}"><i class="fa-solid fa-eye"></i></a></td>
      <td><a class="btn btn-outline-success" href="{{route('comics.edit', $comic)}}"><i class="fa-regular fa-pen-to-square"></i></a></td>
      <td>
        @include('partials.form-delete', ['title'=>$comic->title, 'id'=>$comic->id])
      </td>

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
