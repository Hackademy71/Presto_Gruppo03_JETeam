  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <img src="img/logo.png" width="50" alt="" href="#">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          
          @guest
          <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">Home</a>
            <a class="nav-link" href="{{route('login')}}">Accedi</a>
            <a class="nav-link" href="{{route('register')}}">Registrati</a> 
          @else
            <a class="nav-link" href="{{route('articleNew')}}">Inserisci il tuo prodotto</a>
            <h3>Ciao, {{Auth::user()->name}}</h3>
            <a class="nav-link" href="{{ route('logout') }}" 
          onclick="event.preventDefault(); 
              document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{route('logout')}}" method="POST" class="d-none">
              @csrf
            </form>
   
          @endguest
        </div>
      </div>
    </div>
  </nav>