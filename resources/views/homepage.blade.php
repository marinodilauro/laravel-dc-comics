@extends('layouts.app')

@section('content')
  <div id="jumbotron" class="position-relative z-3">
    <div class="container-fluid bg-dark bg-opacity-50 border-0 h-100 p-5">

      <h1 class="display-5 fw-bold text-white">DC Comics CMS</h1>

      <p class="col-md-8 fs-4 text-white">
        Using a series of utilities, you can create this jumbotron, just
        like the one in previous versions of Bootstrap. Check out the
        examples below for how you can remix and restyle it to your liking.
      </p>

      <a class="btn btn-primary btn-lg" href="{{ route('comics.index') }}">
        Manage Comics
      </a>

    </div>
  </div>
@endsection
