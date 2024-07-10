@extends('layouts.app')

@section('content')
  <div id="jumbotron" class="position-relative z-3">
    <div class="container-fluid bg-dark bg-opacity-50 border-0 h-100 p-5">

      <h1 class="display-5 fw-bold text-white">DC Comics CMS</h1>

      <p class="col-md-8 fs-4 text-white mt-4 mb-5">
        With DC Comics CMs you can manage your database of comics.
        <br>
        You can add a new comic book, edit or delete older ones.
      </p>

      <a class="btn btn-lg custom_btn_bg" href="{{ route('comics.index') }}">
        Manage Comics
      </a>

    </div>
  </div>
@endsection
