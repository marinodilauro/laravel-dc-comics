<header id="header">

  <div id="header_top">
    <div class="container py-2">

      <!-- Header top -->
      <ul class="d-flex justify-content-end list-unstyled p-0 m-0 gap-3">

        <li><a class="me-1" href="">DC POWER&#8480; VISA</a><i class="fa-regular fa-registered"></i></li>

        <li>
          <a href="">ADDITIONAL DC SITES</a>
          <i class="fa-solid fa-caret-down"></i>
        </li>

      </ul>

    </div>
  </div>

  <!-- Header Navbar -->
  <div id="navbar" class="container d-flex align-items-center justify-content-start py-4">

    <div class="logo">
      <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
    </div>

    <nav class="nav justify-content-center bg-transparent">

      <a class="nav-link {{ Route::currentRouteName() === 'homepage' ? 'active' : '' }}"
        href="{{ route('homepage') }}">HOME
      </a>

      <a class="nav-link {{ Route::currentRouteName() === 'comics.index' || Route::currentRouteName() === 'comics.show' ? 'active' : '' }} "
        href="{{ route('comics.index') }} ">MANAGE COMICS
      </a>

    </nav>
  </div>

</header>
