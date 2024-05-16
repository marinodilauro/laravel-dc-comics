@extends('layouts.app')

@section('content')
  @include('partials.jumbotron')

  <!-- Comic -->
  <div id="divider">
    <div class="cover_container">
      <img class="img-fluid" src="{{ $comic->thumb }}" alt="Cover image of {{ $comic->title }}">
    </div>
  </div>


  <div class="comic_wrapper">
    <div class="row gx-5">

      <div class="col-8">

        <h2 class="comic_title mb-3">{{ strtoupper($comic->title) }}</h2>

        <div class="description_wrapper">

          <div class="price_availability d-flex mb-3">

            <div class="price flex-fill d-flex justify-content-between align-items-center">
              <div><span>U.S. Price: </span>{{ $comic->price }}</div>
              <div><span>AVAILABLE</span></div>
            </div>

            <div class="availability">
              Check Availability <i class="fa-solid fa-caret-down fa-xs"></i>
            </div>

          </div>

          <div class="comic_description">
            <p>{{ $comic->description }}</p>
          </div>

        </div>

      </div>

      <div class="col-4 text-end">
        <h5 class="adv_title">ADVERTISEMENT</h5>

        <div class="adv_image">
          <img class="img-fluid" src="{{ Vite::asset('resources/img/adv.jpg') }}">
        </div>

      </div>

    </div>

  </div>

  <div class="container-fluid">
    <div class="comic_specs_wrapper">
      <div class="row">

        <!-- Talent -->
        <div class="col-6">

          <h5>Talent</h5>

          <div class="py-3">
            <div class="art d-flex py-2">

              <div class="col-4">
                Art by:
              </div>

              <div class="col-8 lh-sm">
                <a href="">Jose Luis Garcia-Lopez</a>,
                <a href="">Clay Mann</a>,
                <a href="">Rafael Albuquerque</a>,
                <a href="">Patrick Gleason</a>,
                <a href="">Dan Jurgens</a>,
                <a href="">Joe Shuster</a>,
                <a href="">Neal Adams</a>,
                <a href="">Curt Swan</a>,
                <a href="">John Cassaday</a>,
                <a href="">Olivier Coipel</a>,
              </div>

            </div>

            <div class="write d-flex  py-2">

              <div class="col-4">
                Written by:
              </div>

              <div class="col-8 lh-sm">
                <a href="">Brad Meltzer</a>,
                <a href="">Tom King</a>,
                <a href="">Scott Snyder</a>,
                <a href="">Geoff Johns</a>,
                <a href="">Brian Michael Bendis</a>,
                <a href="">Paul Dini</a>,
                <a href="">Louise Simonson</a>,
                <a href="">Richard Donner</a>,
                <a href="">Marv Wolfman</a>,
                <a href="">Peter J. Tomasi</a>,
                <a href="">Dan Jurgens</a>
                <a href="">Jerry Siegel</a>
                <a href="">Paul Levitz</a>
              </div>

            </div>

          </div>

        </div>

        <!-- Specs -->
        <div class="col-6">

          <h5>Specs</h5>

          <div class="py-3">
            <div class="series d-flex py-2">

              <div class="col-4">
                Series:
              </div>

              <div class="col-8 lh-sm">
                <a href="">{{ strtoupper($comic->series) }}</a>
              </div>

            </div>

            <div class="price d-flex  py-2">

              <div class="col-4">
                U.S. Price:
              </div>

              <div class="col-8 lh-sm">
                {{ $comic->price }}
              </div>

            </div>

            <div class="sale_date d-flex  py-2">

              <div class="col-4">
                On Sale Date:
              </div>

              <div class="col-8 lh-sm">
                {{ date_create($comic->sale_date)->format('M d Y') }}
              </div>

            </div>

          </div>

        </div>

      </div>
    </div>
  </div>

  <!-- CTAs -->
  <div class="container-fluid">
    <div class="cta_wrapper">
      <div class="row">

        <div class="col p-0">
          <div class="digital_comics d-flex p-3">

            <div class="flex-fill">
              DIGITAL COMICS
            </div>

            <div class="digital_comics_icon">

            </div>

          </div>
        </div>

        <div class="col p-0">
          <div class="shop_dc d-flex p-3">

            <div class="flex-fill">
              SHOP DC
            </div>

            <div class="shop_dc_icon">

            </div>

          </div>
        </div>

        <div class="col p-0">
          <div class="shop_locator d-flex p-3">

            <div class="flex-fill">
              COMIC SHOP LOCATOR
            </div>

            <div class="shop_locator_icon">

            </div>

          </div>
        </div>

        <div class="col p-0">
          <div class="subscriptions d-flex p-3">

            <div class="flex-fill">
              SUBSCRIPTIONS
            </div>

            <div class="subscriptions_icon">

            </div>

          </div>
        </div>

      </div>
    </div>
  </div>
@endsection
