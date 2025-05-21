<nav class="navbar navbar-expand-lg bg-body-tertiary shadow">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('home')}}">HorizonMedia</a><i class="fa-solid fa-newspaper"></i>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        

        @guest
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Benvenuto
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('register') }}">Registrati</a></li>
            <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
      @endguest
      @auth
      <li class="dropdown-menù">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               Ciao {{Auth::user()->name}}
          </a>
        <ul>
            <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();" >Logout</a>
            </li>
          <form action="{{ route('logout') }}" method='POST' id='form-logout' class='d-none'>
            @csrf
          </form>
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('article.create')}}">Crea articolo</a>
        </li>

        </ul>
      </li>
      @endauth
      
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>