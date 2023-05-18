 <!-- <div role="navigation">
    <div class="">
        <div class="brand-logo">
            <a href=""><img class="logoimg" id="imgNav2" src="./img/logo.png" width="50" /></a>
        </div>
        <div class="brand-phone">
            <form class="d-flex" role="search" action="{{ route('searchAnn') }}" method="GET">
                @csrf
                <input class="f-s form-control m-2 shwi rounded" type="search" placeholder="Search" aria-label="Search"
                    name="searched">
                <button class="btn btn-outline bgoutline3" type="submit"><i class="bi bi-search"></i></button>
            </form>
        </div>
        <div class="text-center">
            <nav class="top-bar-wrap">
                <ul class="top-bar">

                    @guest
                                                                        <li class="nav-item dropdown align-self-center">
                                                                            <a class="nav-link dropdown-toggle f-p"role="button" data-bs-toggle="dropdown"
                                                                                aria-expanded="false">
                                                                                <span class="inner-link">Area Utenti</span>
                                                                            </a>
                                                                            <ul class="dropdown-menu">
                                                                                <li>
                                                                                    <a class="nav-link dropdown-item f-p" href="{{ route('login') }}">Accedi</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a class="nav-link dropdown-item f-p" href="{{ route('register') }}">Registrati</a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
@else
    <li>
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
                                                                                <a class="nav-link dropdown-toggle f-p"role="button" data-bs-toggle="dropdown"
                                                                                    aria-expanded="false">
                                                                                    Area Revisore
                                                                                    <span> {{ App\Models\Announcement::toBeRevisionedCount() }}<span
                                                                                            class="visually-hidden f-p">Unreaded messages</span> </span>
                                                                                </a>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="nav-link dropdown-item f-p" href="{{ route('indexRevisor') }}">Annunci da
                                                                                            convalidare</a>
                                                                                    </li>
                                                                                    <li><a class="nav-link dropdown-item f-p" href="{{ route('recheck') }}"> Secondo
                                                                                            check</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
    @endif
                    @endguest
            </nav>
            <nav class="main-nav-wrap">
                <ul class="main-nav">
                    <li class="nav-item">
                        <a href="{{ route('welcome') }}" class="nav-link"><span class="inner-link">Home</span></a>
                    </li>
                    <li class="nav-item dropdown align-self-center">
                        <a class="nav-link dropdown-toggle f-p" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false"><span class="inner-link">Annunci</span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item f-p" href="{{ route('indexAnnouncement') }}">Tutti gli
                                    annunci</a>
                            </li>
                            <li>
                                <a class="dropdown-item f-p" href="{{ route('articleNew') }}">Inserisci annuncio</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown align-self-center">
                        <a class="nav-link dropdown-toggle d-flex align-items-center f-p" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="inner-link">Categorie</span></a>
                        <ul class="dropdown-menu">
                            @foreach ($categories as $category)
<li>
                                    <a class="dropdown-item f-p"
                                        href="{{ route('categoryShow', compact('category')) }}">{{ $category->name }}</a>
                                </li>
@endforeach
                        </ul>
                    </li>
                </ul>
            </nav>
            <nav>
                <nav class="navbar navbar-expand-lg bg-light">
                    <div class="container-fluid">

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Annunci
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{ route('indexAnnouncement') }}">Tutti gli
                                                annunci</a></li>
                                        <li><a class="dropdown-item" href="{{ route('articleNew') }}">Inserisci
                                                annuncio</a></li>

                                    </ul>
                                </li>

                            </ul>

                        </div>
                    </div>
                </nav>
            </nav>
        </div>
    </div>
</div> -->

 <div class="container-fluid">
     <div class="row">
         {{-- logo --}}
         <div class="col-2 col-lg-1 bgmy2">
             <img class="img-fluid" width="100" src="/img/logo.png" alt="">
         </div>
         {{-- navbars --}}
         <div class="col-10 col-lg-8">
             <div class="row h-100">
                 {{-- upper-nav --}}
                 <div class="col-12 upper-nav bgmy1">
                     <nav class="nav justify-content-center align-items-center h-100">
                         <div class="dropdown px-2">
                             <a class="text-decoration-none tx-color dropdown-toggle" href="#" role="button"
                                 data-bs-toggle="dropdown" aria-expanded="false">
                                 Area Utente
                             </a>
                             @guest
                                 <ul class="dropdown-menu">
                                     <li><a class="dropdown-item tx-color" href="{{ route('login') }}">Login</a></li>
                                     <li><a class="dropdown-item tx-color" href="{{ route('register') }}">Registrati</a></li>
                                 </ul>
                             @else
                                 <ul class="dropdown-menu">
                                     <li><a class="dropdown-item tx-color" href="#">Profilo Utente</a></li>
                                     <li>
                                         <form class="m-0"action="{{ route('logout') }}" method="POST">
                                             @csrf
                                             <button class="btn tx-color" type="submit">Logout</button>
                                         </form>
                                     </li>

                                 </ul>
                             </div>
                             <div class="dropdown px-2">
                                 @if (Auth::user()->is_revisor)
                                     <a class="text-decoration-none dropdown-toggle tx-color" href="#"
                                         role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                         Area Revisore
                                         <span> {{ App\Models\Announcement::toBeRevisionedCount() }}<span
                                                 class="visually-hidden f-p">Unreaded messages</span> </span>
                                     </a>
                                     <ul class="dropdown-menu">
                                         <li><a class="dropdown-item tx-color" href="{{ route('indexRevisor') }}">Annunci da
                                                 revisionare</a></li>
                                         <li><a class="dropdown-item tx-color" href="{{ route('recheck') }}">Recheck</a></li>
                                     </ul>
                                 @endif
                             @endguest
                         </div>
                     </nav>
                 </div>
                 {{-- botton-nav --}}
                 <div class="col-12 botton-nav bgmy2">
                     <nav class="nav justify-content-center align-items-center h-100">
                         <a class="nav-link active text-white" aria-current="page"
                             href="{{ route('welcome') }}">Home</a>
                         <div class="dropdown px-2">
                             <a class="text-decoration-none text-white dropdown-toggle" href="#" role="button"
                                 data-bs-toggle="dropdown" aria-expanded="false">
                                 Annunci
                             </a>
                             <ul class="dropdown-menu">
                                 <li><a class="dropdown-item" href="{{ route('indexAnnouncement') }}">Tutti gli
                                         annunci</a></li>
                                 <li><a class="dropdown-item" href="{{ route('articleNew') }}">Inserisci annuncio</a>
                                 </li>
                             </ul>
                         </div>
                         <div class="dropdown px-2">
                             <a class="text-decoration-none text-white dropdown-toggle" href="#" role="button"
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
                            </div>
                            <div class="dropdown px-2">
                                <a class="text-decoration-none text-white dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Lingue
                            </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <x-_locale lang="it" />
                                        Italiano
                                    </li>
                                    <li>
                                        <x-_locale lang="en" />
                                        English
                                    </li>
                                    <li>
                                        <x-_locale lang="es" />
                                        Español
                                    </li>

                                </ul>
                            </div>

                     </nav>
                 </div>
             </div>
         </div>
         {{-- searchbar --}}
         <div class="col-12 col-lg-3 bgmy1 d-flex align-items-center justify-content-center">
             <form class="d-flex m-0" role="search" action="{{ route('searchAnn') }}" method="GET">
                 @csrf
                 <input class="form-control m-2 rounded" type="search" placeholder="Search" aria-label="Search"
                     name="searched">
                 <button class="btn btn-outline bgoutline3" type="submit"><i class="bi bi-search"></i></button>
             </form>
         </div>
     </div>
 </div>
