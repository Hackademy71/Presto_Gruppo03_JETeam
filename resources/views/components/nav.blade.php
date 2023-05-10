  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <img src="img/logo.png" width="50" alt="" href="#">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">Home</a>
          <a class="nav-link active" aria-current="page" href="{{route('indexAnnouncement')}}">Annunci</a>
          @guest          
            <a class="nav-link" href="{{route('login')}}">Accedi</a>
            <a class="nav-link" href="{{route('register')}}">Registrati</a> 
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Categorie
              </a>
              <ul class="dropdown-menu">
                @foreach ($categories as $category)
                <li><a class="dropdown-item" href="{{route('categoryShow',compact('category'))}}">{{$category->name}}</a></li>
                @endforeach
              </ul>
            </li>
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