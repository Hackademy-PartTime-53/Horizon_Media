<nav class="navbar navbar-expand-lg bg-body-tertiary shadow">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('home')}}">HorizonMedia</a><i class="fa-solid fa-newspaper"></i>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Menu centrato -->
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{route('article.index')}}">Tutti i nostri articoli</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
            Le nostre categorie
          </a>
          <ul class="dropdown-menu">
            @foreach(\App\Models\Category::all() as $category)
              <li>
                <a class="dropdown-item" href="{{ route('article.byCategory', $category->id) }}">
                  {{ $category->name }}
                </a>
              </li>
            @endforeach
          </ul>
        </li>

        @guest
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
            Benvenuto!
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('register') }}">Registrati</a></li>
            <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        @endguest

        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
            Ciao {{ Auth::user()->name }}
          </a>
          <ul class="dropdown-menu">
            <li class="dropdown-item">
              <a class="logout" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
            </li>
            <form action="{{ route('logout') }}" method='POST' id='form-logout' class='d-none'>
              @csrf
            </form>
            <li class="dropdown-item">
              <a class="nav-link active" href="{{ route('article.create') }}">Crea articolo</a>
            </li>
          </ul>
        </li>
        @endauth
      </ul>

      <!-- Qui gli elementi allineati a destra -->
      <div class="d-flex align-items-center ms-auto">
        <a href="{{route('careers')}}" class="nav-link active me-3">Lavora con noi</a>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>

    </div>
  </div>
</nav>