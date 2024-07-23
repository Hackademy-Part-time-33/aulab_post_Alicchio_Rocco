<nav class="navbar navbar-expand-lg  custom-navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('logoImmagine.jpg') }}" alt="Logo" style="height: 68px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('article.index') }}">Tutti gli articoli</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('careers') }}">Lavora con noi</a>
                </li>
                
                <form action="{{ route('article.search') }}" method="GET" class="d-flex" role="search">
                    <input class="form-control me-2" type="search" name="query" placeholder="Cerca tra gli articoli..." aria-label="Search">
                    <button class="btn btn-outline-secondary" type="submit"> Cerca </button>
                </form>
                
                @auth
                    @if (Auth::user()->is_writer || Auth::user()->is_admin)
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('article.create') }}">Inserisci un articolo</a>
                        </li>
                    @endif
                  
                    
                    @if (Auth::user()->is_revisor || Auth::user()->is_admin)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('revisor.dashboard') }}">Dashboard Revisor</a>
                        </li>
                    @endif
                    
                    @if (Auth::user()->is_admin)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard Admin</a>
                        </li>
                    @endif

                    @if (Auth::user()->is_writer)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('writer.dashboard') }}">Dashboard Writer</a>
                    </li>
                    @endif

                @endauth
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Ciao {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
                            </li>
                            <form action="{{ route('logout') }}" method="POST" id="form-logout" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </li>
                @endauth
  
                @guest
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Benvenuto,
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('register') }}"><i class="fas fa-user-plus me-3"></i> Registrati</a></li>
                            <li><a class="dropdown-item" href="{{ route('login') }}"><i class="fas fa-sign-in-alt me-3"></i> Accedi</a></li>
                        </ul>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
  </nav>
  