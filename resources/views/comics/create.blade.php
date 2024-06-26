@extends('layouts.app')

@section('content')
  <section class="add_new bg-light position-relative z-3">
    <div class="container py-4">

      <h1>Add a new comic</h1>

      @include('partials.validation-errors')

      <form action="{{ route('comics.store') }}" method="post">
        @csrf

        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
            aria-describedby="titleHelper" placeholder="Batman #100" value="{{ old('title') }}" />
          <small id="titleHelper" class="form-text text-muted">Type a title for the current comic</small>

          @error('title')
            <div class="text-danger">{{ $message }}</div>
          @enderror

        </div>

        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
            rows="6">{{ old('description') }}</textarea>

          @error('description')
            <div class="text-danger">{{ $message }}</div>
          @enderror

        </div>

        <div class="mb-3 w-100">
          <label for="thumb" class="form-label">Image</label>
          <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb" id="thumb"
            aria-describedby="thumbHelper" placeholder="https://" value="{{ old('thumb') }}" />
          <small id="thumbHelper" class="form-text text-muted">Add a link for the thumb of the current comic</small>

          @error('thumb')
            <div class="text-danger">{{ $message }}</div>
          @enderror

        </div>

        <div class="mb-3">
          <label for="price" class="form-label">Price</label>
          <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" id="price"
            aria-describedby="priceHelper" placeholder="$3.99" value="{{ old('price') }}" />
          <small id="priceHelper" class="form-text text-muted">Type a price for the current comic</small>

          @error('price')
            <div class="text-danger">{{ $message }}</div>
          @enderror

        </div>


        <div class="mb-3">
          <label for="series" class="form-label">Series</label>
          <input type="text" class="form-control @error('series') is-invalid @enderror" name="series" id="series"
            aria-describedby="seriesHelper" placeholder="Batman" value="{{ old('series') }}" />
          <small id="seriesHelper" class="form-text text-muted">Type a series for the current comic</small>

          @error('series')
            <div class="text-danger">{{ $message }}</div>
          @enderror

        </div>

        <div class="mb-3">
          <label for="type" class="form-label">Type</label>
          <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" id="type"
            aria-describedby="typeHelper" placeholder="comic book" value="{{ old('type') }}" />
          <small id="typeHelper" class="form-text text-muted">Type a type for the current comic</small>

          @error('type')
            <div class="text-danger">{{ $message }}</div>
          @enderror

        </div>

        <div class="mb-3">
          <label for="sale_date" class="form-label">Sale date</label>
          <input type="text" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date"
            id="sale_date" aria-describedby="sale_dateHelper" placeholder="YYYY-MM-DD" value="{{ old('sale_date') }}" />
          <small id="sale_dateHelper" class="form-text text-muted">Type a sale date for the current comic</small>

          @error('sale_date')
            <div class="text-danger">{{ $message }}</div>
          @enderror

        </div>


        <div class="buttons_container">

          <button type="submit" class="btn custom_btn_bg me-2">
            Create new comic
          </button>

          <a class="btn custom_btn_bg" href="{{ route('comics.index') }}" title="Back">
            <i class="fa-solid fa-angle-left fa-sm"></i>
            Back to comics
          </a>

        </div>


      </form>

    </div>
  </section>
@endsection
