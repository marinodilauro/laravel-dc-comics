@extends('layouts.app')

@section('content')
  <section class="add_new">
    <div class="container py-4">

      <h1>Add a new comic</h1>

      <form action="{{ route('comics.store') }}" method="post">
        @csrf

        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelper"
            placeholder="Batman #100" />
          <small id="titleHelper" class="form-text text-muted">Type a title for the current comic</small>
        </div>

        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <textarea class="form-control" name="description" id="description" rows="6"></textarea>
        </div>

        <div class="mb-3">
          <label for="thumb" class="form-label">Image</label>
          <input type="text" class="form-control" name="thumb" id="thumb" aria-describedby="thumbHelper"
            placeholder="https://" />
          <small id="thumbHelper" class="form-text text-muted">Add a link for the thumb of the current comic</small>
        </div>

        <div class="mb-3">
          <label for="price" class="form-label">Price</label>
          <input type="text" class="form-control" name="price" id="price" aria-describedby="priceHelper"
            placeholder="$3.99" />
          <small id="priceHelper" class="form-text text-muted">Type a price for the current comic</small>
        </div>


        <div class="mb-3">
          <label for="series" class="form-label">Series</label>
          <input type="text" class="form-control" name="series" id="series" aria-describedby="seriesHelper"
            placeholder="Batman" />
          <small id="seriesHelper" class="form-text text-muted">Type a series for the current comic</small>
        </div>

        <div class="mb-3">
          <label for="sale_date" class="form-label">Sale date</label>
          <input type="text" class="form-control" name="sale_date" id="sale_date" aria-describedby="sale_dateHelper"
            placeholder="YYYY-MM-DD" />
          <small id="sale_dateHelper" class="form-text text-muted">Type a sale date for the current comic</small>
        </div>



        <button type="submit" class="btn btn-primary">
          Create new comic
        </button>


      </form>

    </div>
  </section>
@endsection
