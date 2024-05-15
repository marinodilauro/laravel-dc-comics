@extends('layouts.app')

@section('content')
  <!-- Comics List -->
  <div id="comics_list">
    <section class="py-4">

      <h2 id="page_title">CURRENT SERIES</h2>

      <div class="container">

        <a class="btn rounded-0 load_more_btn py-2 mb-3" href="{{ route('comics.create') }}">
          Add comic
        </a>

        <div class="row row-cols-1 row-cols-md-4 row-cols-lg-6">

          @forelse ($comics as $comic)
            <div class="col mt-3">

              <a href="{{ route('comics.show', $comic) }}">
                <img class="img-fluid" src="{{ $comic->thumb }}" alt="Cover image of {{ $comic->title }}">

                <div class="comic_serie mt-3 mb-4">
                  {{ strtoupper($comic->title) }}
                </div>
              </a>

            </div>

          @empty

            <div class="col-12">
              <h1>Nothing to show sorry</h1>
            </div>
          @endforelse

        </div>
      </div>

      <div class="d-flex justify-content-center align-items-center mt-5">
        <button type="button" class="btn rounded-0 load_more_btn py-2">LOAD MORE</button>
      </div>

    </section>
  </div>

  <!-- CTAs Banner -->
  <div id="cta_banner">
    <div class="container d-flex align-items-center px-3 py-5">
      <ul class="flex-fill list-unstyled d-flex justify-content-between align-items-center m-0">

        <li>
          <a class="digital_comics d-flex align-items-center gap-3" href="">

            <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">

            <span>DIGITAL COMICS</span>

          </a>
        </li>

        <li>
          <a class="dc_merch d-flex align-items-center gap-3" href="">

            <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">

            <span>DC MERCHANDISE</span>

          </a>
        </li>

        <li>
          <a class="subscriptions d-flex align-items-center gap-3" href="">

            <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">

            <span>SUBSCRIPTION</span>

          </a>
        </li>

        <li>
          <a class="shop_locator d-flex align-items-center gap-3" href="">

            <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">

            <span>COMIC SHOP LOCATION</span>

          </a>
        </li>

        <li class="w-25">
          <a class="dc_power_visa d-flex align-items-center gap-3" href="">

            <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">

            <span>DC POWER VISA</span>

          </a>
        </li>

      </ul>
    </div>
  </div>
@endsection
