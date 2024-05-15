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
  <div id="navbar" class="container d-flex align-items-center justify-content-between py-4">

    <div class="logo">
      <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
    </div>

    <nav class="nav justify-content-center">
      <a class="nav-link {{-- {{ Route::currentRouteName() === 'charact ers' ? 'active' : '' }} --}}" href="{{-- {{ route('characters') }} --}}">CHARACTERS</a>
      <a class="nav-link {{-- {{ Route::currentRouteName() === 'comics' || Route::currentRouteName() === 'comic' ? 'active' : '' }} --}}" href="{{-- {{ route('comics') }} --}}">COMICS</a>
      <a class="nav-link {{-- {{ Route::currentRouteName() === 'movies'  ? 'active' : '' }} --}}" href="{{-- {{ route('movies') }} --}}">MOVIES</a>
      <a class="nav-link {{-- {{ Route::currentRouteName() === 'tv' ? ' active' : '' }} --}}" href="{{-- {{ route('tv') }} --}}">TV</a>
      <a class="nav-link {{-- {{ Route::currentRouteName() === 'games'  ? 'active' : '' }} --}}" href="{{-- {{ route('games') }} --}}">GAMES</a>
      <a class="nav-link {{-- {{ Route::currentRouteName() === 'collectibles' ? 'active' : '' }} --}}" href="{{-- {{ route('collectibles') }} --}}">COLLECTIBLES</a>
      <a class="nav-link {{-- {{ Route::currentRouteName() === 'videos'  ? 'active' : '' }} --}}" href="{{-- {{ route('videos') }} --}}">VIDEOS</a>
      <a class="nav-link {{-- {{ Route::currentRouteName() === 'fans' ?  'active' : '' }} --}}" href="{{-- {{ route('fans') }} --}}">FANS</a>
      <a class="nav-link {{-- {{ Route::currentRouteName() === 'news' ?  'active' : '' }} --}}" href="{{-- {{ route('news') }} --}}">NEWS</a>
      <a class="nav-link {{-- {{ Route::currentRouteName() === 'shop' ?  'active' : '' }} --}}" href="{{-- {{ route('shop') }} --}}">SHOP
        <i class="fa-solid fa-caret-down fa-xs"></i> </a>
      </ul>

      <div class="search d-flex align-items-center px-4">
        <div class="search_bar d-flex justify-content-end align-items-center">
          <input type="search" placeholder="Search">
          <i class="fa-solid fa-magnifying-glass p-0"></i>
        </div>
      </div>
    </nav>
  </div>

</header>
