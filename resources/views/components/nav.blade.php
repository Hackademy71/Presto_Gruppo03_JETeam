  <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
          <img src="img/logo.png" width="50" alt="" href="{{ route('welcome') }}">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
              aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                  <a class="nav-link active" aria-current="page" href="{{ route('welcome') }}">Home</a>
                  <li class="nav-item dropdown">
                      <a aria-expanded="false" class="nav-link dropdown-toggle" role="button"
                          data-bs-toggle="dropdown">Annunci</a>
                      <ul class="dropdown-menu">
                          <li>
                              <a class="dropdown-link nav-link" href="{{ route('indexAnnouncement') }}">Tutti gli
                                  annunci</a>
                          </li>
                          <li>
                              <a class="dropdown-link nav-link" href="{{ route('articleNew') }}">Inserisci annuncio</a>
                          </li>
                      </ul>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button"
                          data-bs-toggle="dropdown" aria-expanded="false">
                          Categorie
                      </a>
                      <ul class="dropdown-menu">
                          @foreach ($categories as $category)
                              <li><a class="dropdown-item"
                                      href="{{ route('categoryShow', compact('category')) }}">{{ $category->name }}</a>
                              </li>
                          @endforeach
                      </ul>
                  </li>
                  <li class="nav-item dropdown">
                      @guest
                          <a class="nav-link dropdown-toggle d-flex align-items-center"role="button"
                              data-bs-toggle="dropdown" aria-expanded="false">
                              <h5>Area Utenti</h5>
                          </a>
                          <ul class="dropdown-menu">
                              <li class="dropdown-item">
                                  <a class="nav-link" href="{{ route('login') }}">Accedi</a>
                              </li>
                              <li class="dropdown-item">
                                  <a class="nav-link" href="{{ route('register') }}">Registrati</a>
                              </li>
                          </ul>
                      @else
                          <a class="nav-link dropdown-toggle d-flex align-items-center"role="button"
                              data-bs-toggle="dropdown" aria-expanded="false">
                              <h5>Ciao, {{ Auth::user()->name }}</h5>
                          </a>
                          <ul class="dropdown-menu">
                              <li><a class="nav-link dropdown-item" href="">Dettagli profilo</a></li>
                              <li><a class="nav-link dropdown-item" href="{{ route('logout') }}"
                                      onclick="event.preventDefault(); 
                  document.getElementById('logout-form').submit();">Logout</a>
                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                      @csrf
                                  </form>
                              </li>
                          </ul>
                      </li>
                      @if (Auth::user()->is_revisor)
                          <a class="nav-link dropdown-toggle d-flex align-items-center"role="button"
                              data-bs-toggle="dropdown" aria-expanded="false">
                              <h5>Area Revisore</h5>
                              <span> {{App\Models\Announcement::toBeRevisionedCount()}}<span class="visually-hidden">Unreaded messages</span> </span> 
                              </a>
                          <ul class="dropdown-menu">
                              <li class="dropdown-item">
                                  <a class="nav-link" href="{{ route('indexRevisor') }}">Annunci da convalidare</a>
                              </li>
                          </ul>
                      @endif
                  @endguest
              </div>
          </div>
      </div>
  </nav>
