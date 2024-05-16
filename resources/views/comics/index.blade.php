@extends('layouts.app')

@section('content')
  @include('partials.jumbotron')

  <div class="container">

    <div class="d-flex justify-content-between align-items-center mb-3">
      <h2>Comics</h2>
      <a class="btn btn-primary" href="{{ route('comics.create') }}">
        Add
      </a>
    </div>

    <div class="table-responsive">
      <table class="table table-primary">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Image</th>
            <th scope="col">Series</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Sale date</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($comics as $comic)
            <tr class="">
              <td scope="row">{{ $comic->id }}</td>
              <td><img width="60" src="{{ $comic->thumb }}" alt=""></td>
              <td>{{ $comic->series }}</td>
              <td>{{ $comic->title }}</td>
              <td>{{ $comic->description }}</td>
              <td>{{ $comic->price }}</td>
              <td>{{ $comic->sale_date }}</td>
              <td>
                <div class="d-flex gap-2">
                  <a class="btn btn-dark btn-sm" href="{{ route('comics.show', $comic) }}">View</a>
                  <a class="btn btn-dark btn-sm" href="{{ route('comics.edit', $comic) }}">Edit</a>
                  <a class="btn btn-danger btn-sm" href="">Delete</a>
                </div>
              </td>
            @empty
            <tr class="">
              <td scope="row" colspan="7">Nothing to show</td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>

    {{ $comics->links('pagination::bootstrap-5') }}

  </div>
  </div>
@endsection
