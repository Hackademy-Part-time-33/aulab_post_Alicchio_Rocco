<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('article.create')}}"> Inserisci un articolo </a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('article.index')}}"> Tutti gli articoli </a>
          </li>
       

          @auth

         
            

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Ciao {{ Auth::user()->name}}
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item"  href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();"> Logout </a>
              </li>
              <form action="{{route('logout')}}" method="POST" id="form-logout" class="d-none">

                @csrf

              </form>
            </ul>
          </li>

          @endauth

         

        </ul>

        @guest
            

        <li class=" no-bullets nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">

            Benvenuto,

          </a>

          <ul class="dropdown-menu">
            <li>
              <a class="dropdown-item"  href="{{route('register')}}"> 

                Registrati 

              </a>
            </li>

            <li>
              <a class="dropdown-item"  href="{{route('login')}}"> 

                Accedi 

              </a>
            </li>

          </ul>
        </li>

        @endguest
       
      </div>
    </div>
  </nav>