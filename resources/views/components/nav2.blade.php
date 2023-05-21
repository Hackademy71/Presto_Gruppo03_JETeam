
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
                         @guest
                         <a class="nav-link tx-color" href="{{ route('login') }}">Accedi</a>
                         {{-- <li><a class="dropdown-item tx-color" href="{{ route('register') }}">Registrati</a></li> --}}
                         @else
                         <div class="dropdown px-2">
                             <a class="text-decoration-none tx-color dropdown-toggle" href="#" role="button"
                                 data-bs-toggle="dropdown" aria-expanded="false">
                                 Area Utente
                             </a>
                                 <ul class="dropdown-menu tx-color">
                                     <li><a class="dropdown-item tx-color" href="{{route('userProfile')}}">Profilo Utente</a></li>
                                     <li>
                                         <form class="m-0"action="{{ route('logout') }}" method="POST">
                                             @csrf
                                             <button class="btn tx-color" type="submit">Logout</button>
                                         </form>
                                     </li>

                                 </ul>                                
                                 
    
                             </div>

                             {{-- DropDown Eliminato di Area Revisore --}}
                             {{-- <div class="dropdown px-2">
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
                                </div> --}}
                             @endguest
                             <div class="dropdown px-2">
                                <a class="text-decoration-none dropdown-toggle tx-color" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Lingue
                            </a>
                                <ul class="dropdown-menu tx-color">
                                    <li>
                                        <x-_locale lang="it" />
                                        It
                                    </li>
                                    <li>
                                        <x-_locale lang="en" />
                                        En
                                    </li>
                                    <li>
                                        <x-_locale lang="es" />
                                        Es
                                    </li>

                                </ul>
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
                                 <li><a class="dropdown-item tx-color" href="{{ route('indexAnnouncement') }}">Tutti gli
                                         annunci</a></li>
                                 <li><a class="dropdown-item tx-color" href="{{ route('articleNew') }}">Inserisci annuncio</a>
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
                                     <li><a class="dropdown-item tx-color"
                                             href="{{ route('categoryShow', compact('category')) }}">{{ $category->name }}</a>
                                     </li>
                                 @endforeach
                             </ul>
                            </div>
                            
                     </nav>
                 </div>
             </div>
         </div>
         {{-- searchbar --}}
         <div class="col-12 col-lg-3 bgmy1 d-flex align-items-center justify-content-center">
             <form class="d-flex m-2" role="search" action="{{ route('searchAnn') }}" method="GET">
                 @csrf
                 <input class="form-control rounded" type="search" placeholder="Search" aria-label="Search"
                     name="searched">
                 <button class="btn btn-outline bgoutline3" type="submit"><i class="bi bi-search"></i></button>
             </form>
         </div>
     </div>
 </div>
