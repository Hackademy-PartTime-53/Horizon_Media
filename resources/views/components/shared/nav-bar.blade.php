<nav class="navbar navbar-expand-lg bg-body-tertiary shadow">
  <style>
    .navbar-nav.mx-auto .nav-link {
      position: relative;
      padding: 0.5rem 0.75rem;
      border-radius: 12px;
      transition: color 0.4s ease;
      color: inherit;
      border: 2px solid transparent;
    }

    .navbar-nav.mx-auto .nav-link:hover,
    .navbar-nav.mx-auto .nav-link:focus {
      color: inherit;
      box-shadow: inset 0 0 0 2px;
      border-radius: 12px;
    }

    .navbar-nav.mx-auto .nav-link:hover::before,
    .navbar-nav.mx-auto .nav-link:focus::before {
      content: "";
      position: absolute;
      top: -2px;
      left: -2px;
      right: -2px;
      bottom: -2px;
      border-radius: 14px;
      background: linear-gradient(45deg, #4a90e2, #50e3c2);
      z-index: -1;
    }

    .navbar-nav.mx-auto .nav-link:hover,
    .navbar-nav.mx-auto .nav-link:focus {
      background-color: white;
      position: relative;
      z-index: 1;
    }

    /* Bottone Cerca con lo stesso stile */
    .btn-gradient {
      position: relative;
      color: #000;
      background-color: white;
      border: 2px solid transparent;
      border-radius: 12px;
      padding: 0.375rem 0.75rem;
      transition: all 0.4s ease;
      z-index: 1;
    }

    .btn-gradient:hover::before {
      content: "";
      position: absolute;
      top: -2px;
      left: -2px;
      right: -2px;
      bottom: -2px;
      background: linear-gradient(45deg, #4a90e2, #50e3c2);
      border-radius: 14px;
      z-index: -1;
    }

    .btn-gradient:hover {
      background-color: white;
    }
  </style>

  <div class="container-fluid">
    <a class="navbar-brand d-flex align-items-center" href="{{route('home')}}">
      HorizonMedia <i class="fa-solid fa-newspaper ms-2"></i>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Menu principale centrato -->
      <ul class="navbar-nav mx-auto me-5 mb-1 mb-lg-0" style="height:50px">
        <li class="nav-item">
          <a class="nav-link active d-flex align-items-center" href="{{route('home')}}" style="padding-top: 0.7rem;">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active d-flex align-items-center" href="{{route('article.index')}}" style="padding-top: 0.7rem;">Tutti i nostri articoli</a>
        </li>

        @guest
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" style="padding-top: 0.7rem;">
            Benvenuto!
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('register') }}">Registrati</a></li>
            <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
          </ul>
        </li>
        @endguest

        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" style="padding-top: 0.7rem;">
            Ciao {{ Auth::user()->name }}
          </a>
          <ul class="dropdown-menu">
            @if (Auth::user()->is_admin)
            <li><a class="dropdown-item" href="{{ route('admin.dashboard') }}"> Dashboard Admin </a></li>
            @endif

            @if (Auth::user()->is_revisor)
            <li><a class="dropdown-item" href="{{ route('revisor.dashboard') }}"> dashboard Revisor </a></li>
            @endif

            <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a></li>
            <form action="{{ route('logout') }}" method="POST" id="form-logout" class="d-none">@csrf</form>
            <li><a class="dropdown-item" href="{{ route('article.create') }}">Crea articolo</a></li>
          </ul>
        </li>
        @endauth
      </ul>

      <!-- Icona filtro senza freccia -->
      <ul class="navbar-nav ms-auto me-3">
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-filter"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            @foreach(\App\Models\Category::all() as $category)
            <li>
              <a class="dropdown-item" href="{{ route('article.byCategory', $category->id) }}">
                {{ $category->name }}
              </a>
            </li>
            @endforeach
          </ul>
        </li>
      </ul>

      <!-- Elementi a destra -->
      <div class="d-flex align-items-center">
        <a href="{{route('careers')}}" class="nav-link active me-3">Lavora con noi</a>
        <form class="d-flex" role="search" method="GET" action="{{route('article.search')}}">
          <input class="form-control me-2" type="search" name="query" placeholder="Search" aria-label="Search" />
          <button class="btn btn-gradient" type="submit">Cerca</button>
        </form>
      </div>
    </div>
  </div>
</nav>
