@extends('layouts.app')

@section('content')
  <section class="add_new">
    <div class="container py-4">

      <h1>Edit comic</h1>

      <form action="{{ route('comics.update', $comic) }}" method="post">
        @csrf
        @method('PUT')

        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelper"
            placeholder="Batman #100" value="{{ $comic->title }}" />
          <small id="titleHelper" class="form-text text-muted">Type a title for the current comic</small>
        </div>

        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <textarea class="form-control" name="description" id="description" rows="6">{{ $comic->description }}</textarea>
        </div>

        <div class="d-flex gap-2">
          <img width="100" src="{{ $comic->thumb }}" alt="">
          <div class="mb-3 w-100">
            <label for="thumb" class="form-label">Image</label>
            <input type="text" class="form-control" name="thumb" id="thumb" aria-describedby="thumbHelper"
              placeholder="https://" value="{{ $comic->thumb }}" />
            <small id="thumbHelper" class="form-text text-muted">Add a link for the thumb of the current comic</small>
          </div>
        </div>

        <div class="mb-3">
          <label for="price" class="form-label">Price</label>
          <input type="text" class="form-control" name="price" id="price" aria-describedby="priceHelper"
            placeholder="$3.99" value="{{ $comic->price }}" />
          <small id="priceHelper" class="form-text text-muted">Type a price for the current comic</small>
        </div>


        <div class="mb-3">
          <label for="series" class="form-label">Series</label>
          <input type="text" class="form-control" name="series" id="series" aria-describedby="seriesHelper"
            placeholder="Batman" value="{{ $comic->series }}" />
          <small id="seriesHelper" class="form-text text-muted">Type a series for the current comic</small>
        </div>

        <div class="mb-3">
          <label for="sale_date" class="form-label">Sale date</label>
          <input type="text" class="form-control" name="sale_date" id="sale_date" aria-describedby="sale_dateHelper"
            placeholder="YYYY-MM-DD" value="{{ $comic->sale_date }}" />
          <small id="sale_dateHelper" class="form-text text-muted">Type a sale date for the current comic</small>
        </div>

        <button type="submit" class="btn btn-primary">
          Save
        </button>

      </form>

    </div>
  </section>
@endsection
