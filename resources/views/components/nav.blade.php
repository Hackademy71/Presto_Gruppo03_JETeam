{{-- <x-navSearch/> --}}
  <nav class="navbar navbar-expand-md px-3 bgmy1 sticky-top">
      <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
              aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav container">

                <img class="navbar-brand d-none logoimg" id="imgNav2" src="./img/logo.png" width="50" alt="">

               <li class="align-self-center">
                      <a class="nav-link active f-p" aria-current="page" href="{{ route('welcome') }}">Home</a>
                </li>
                    <li class="nav-item dropdown align-self-center">
                      <a aria-expanded="false" class="nav-link dropdown-toggle f-p" role="button"
                          data-bs-toggle="dropdown">Annunci</a>
                      <ul class="dropdown-menu">
                          <li>
                              <a class="dropdown-link nav-link f-p" href="{{ route('indexAnnouncement') }}">Tutti gli
                                  annunci</a>
                          </li>
                          <li>
                              <a class="dropdown-link nav-link f-p" href="{{ route('articleNew') }}">Inserisci annuncio</a>
                          </li>
                      </ul>
                    </li>
                  <li class="nav-item dropdown align-self-center">
                      <a class="nav-link dropdown-toggle d-flex align-items-center f-p" href="#" role="button"
                          data-bs-toggle="dropdown" aria-expanded="false">
                          Categorie
                      </a>
                      <ul class="dropdown-menu">
                          @foreach ($categories as $category)
                              <li><a class="dropdown-item f-p"
                                      href="{{ route('categoryShow', compact('category')) }}">{{ $category->name }}</a>
                              </li>
                          @endforeach
                      </ul>
                  </li>
                  <li class="nav-item dropdown align-self-center">
                      @guest
                          <a class="nav-link dropdown-toggle d-flex align-items-center f-p"role="button"
                              data-bs-toggle="dropdown" aria-expanded="false">
                              Area Utenti
                          </a>
                          <ul class="dropdown-menu">
                              <li class="dropdown-item">
                                  <a class="nav-link f-p" href="{{ route('login') }}">Accedi</a>
                              </li>
                              <li class="dropdown-item">
                                  <a class="nav-link f-p" href="{{ route('register') }}">Registrati</a>
                              </li>
                          </ul>
                      @else
                          <a class="nav-link dropdown-toggle d-flex align-items-center f-p"role="button"
                              data-bs-toggle="dropdown" aria-expanded="false">
                              Ciao, {{ Auth::user()->name }}
                          </a>
                          <ul class="dropdown-menu">
                              <li><a class="nav-link dropdown-item f-p" href="">Dettagli profilo</a></li>
                              <li><a class="nav-link dropdown-item f-p" href="{{ route('logout') }}"
                                      onclick="event.preventDefault(); 
                                      document.getElementById('logout-form').submit();">Logout</a>
                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                      @csrf
                                  </form>
                              </li>
                          </ul>
                      </li>
                      @if (Auth::user()->is_revisor)
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle d-flex align-items-center f-p"role="button"
                          data-bs-toggle="dropdown" aria-expanded="false">
                          Area Revisore
                          <span> {{ App\Models\Announcement::toBeRevisionedCount() }}<span
                            class="visually-hidden f-p">Unreaded messages</span> </span>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="nav-link dropdown-item f-p" href="{{ route('indexRevisor') }}">Annunci da
                                  convalidare</a>
                          </li>
                          <li><a class="nav-link dropdown-item f-p" href="{{ route('recheck') }}"> Secondo check</a>
                          </li>
                        </ul>
                    </li>
                      @endif
                  @endguest

              </div>
          </div>
      </div>
  </nav>
