<x-layout>
    <div class="container-fluid ">
        {{-- Area dettagli Utente --}}
        <div class="row justify-content-center">
            <div class="col-12 col-lg-3 bgmy1 justify-content-center">
                <h1 class="f-p text-center fw-bold my-4">Il tuo profilo</h1>
                <div class="container-fluid">
                    <div class="row-fluid align-items-center">
                        <div class="col-sm-12 justify-content-center">

                            <div class="bg-white card-border rounded justify-content-center" style="width: 18rem;">

                                <h5 class="card-title text-center f-p">Nome {{ Auth::user()->name }}</h5>
                                <p class="card-text text-center f-s">Email: {{ Auth::user()->email }}</p>

                                @if (Auth::user()->profile)
                                    <h5 class="card-title text-center f-p">Nickname: {{ Auth::user()->profile->nickname }}</h5>
                                    <p class="card-text text-center f-s">Cognome: {{ Auth::user()->profile->surname }}</p>
                                    <p class="card-text text-center f-s">Sesso: {{ Auth::user()->profile->gender }}</p>
                                    <p class="card-text text-center f-s">Nazionalità: {{ Auth::user()->profile->state }}</p>
                                    <p class="card-text text-center f-s">Città: {{ Auth::user()->profile->city }}</p>
                                    <p class="card-text text-center f-s">Indirizzo: {{ Auth::user()->profile->address }}</p>
                                    <p class="card-text text-center f-s">CAP: {{ Auth::user()->profile->CAP }}</p>
                                    <p class="card-text text-center f-s">Numero di telefono: {{ Auth::user()->profile->tel_number }}
                                    </p>
                                    <p class="card-text f-s">Preferenza di contatto: @if (Auth::user()->profile->contactMethod)
                                            Email e numero di telefono
                                        @else
                                            Solo Email
                                        @endif
                                    </p>


                            </div>
                            <a href="{{ route('userProfileModule') }}" class="btn bgmy4 f-p m-3">Modifica i tuoi
                                dati</a>
                        @else
                            <a href="{{ route('userProfileModule') }}" class="btn bgmy4 f-p m-3">Aggiungi più dati al
                                tuo Profilo</a>
                        </div>
                        @endif

                        @if (Auth::user()->is_revisor)
                            <a class="tx-color nav-link" href="{{ route('recheck') }}">Annunci revisionati</a>
                        @endif
                    </div>

                </div>
            </div>
        </div>
        {{-- Fine Area Dettagli Utente --}}


        {{-- Sezione annunci --}}
        <div class="col-md-9">
            {{-- Intitolazione --}}
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 justify-content-center d-flex align-items-center">
                        <h1 class="bold">Benvenut* {{ Auth::user()->name }},</h1>
                        <h2> hai caricato
                            {{-- {{$announcements['user'].lenght()}}   --}}
                        </h2>
                    </div>
                </div>
            </div>

            {{-- Card generica --}}
            <div class="card-login">

                @if (Auth::user()->is_revisor)
                    <div class="container-fluid">
                        @if ($announcements_to_check == 'is_empty')
                            <div class="row justify-content-center">
                                <div class="col-12 d-flex bg-success border justify-content-center  align-items-center">
                                    <p class="text-white">{{ $message }}</p>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <a class="tx-color nav-link" href="{{ route('recheck') }}">Vai agli annunci
                                        che
                                        hai revisionato</a>
                                </div>
                            </div>
                        @else
                            <div class="row">
                                <div class="col-sm-6">
                                    <div id="announcement-{{ $announcements_to_check->id }}" class="carousel slide"
                                        data-bs-ride="true">
                                        {{-- <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#announcement-{{$announcement->id}}" data-bs-slide-to="0"
                                                class="active" aria-current="true" aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#announcement-{{$announcement->id}}" data-bs-slide-to="1"
                                                aria-label="Slide 2"></button>
                                            <button type="button" data-bs-target="#announcement-{{$announcement->id}}" data-bs-slide-to="2"
                                                aria-label="Slide 3"></button>
                                        </div> --}}
                                        @if ($announcements_to_check->images()->get()->isNotEmpty())
                                            <div class="carousel-inner">
                                                @foreach ($announcements_to_check->images as $image)
                                                    <div
                                                        class="carousel-item @if ($loop->first) active @endif">
                                                        <img src="{{ $announcements_to_check->images()->first()->getUrl(400, 300) }}"
                                                            class="img-fluid p-3 rounded" alt="...">
                                                    </div>
                                                @endforeach
                                            </div>
                                        @else
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="https://picsum.photos/200" class="d-block w-100"
                                                        alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="https://picsum.photos/200" class="d-block w-100"
                                                        alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="https://picsum.photos/200" class="d-block w-100"
                                                        alt="...">
                                                </div>
                                            </div>
                                        @endif
                                        <button class="carousel-control-prev" type="button"
                                            data-bs-target="#announcement-{{ $announcements_to_check->id }}"
                                            data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon text-dark"
                                                aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button"
                                            data-bs-target="#announcement-{{ $announcements_to_check->id }}"
                                            data-bs-slide="next">
                                            <span class="carousel-control-next-icon text-dark"
                                                aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 ">
                                    <h2 class="f-s text-center fw-bold mt-5">
                                        {{ $announcements_to_check->name }}
                                    </h2>
                                    <p class="fs-3 text-center mt-4">
                                        €{{ $announcements_to_check->price }}
                                    </p>
                                    <h5 class="f-s text-center mt-4">
                                        {{ $announcements_to_check->description }}
                                    </h5>
                                    <p class="fs-3 text-center mt-4">
                                        Venditore: {{ $announcements_to_check->user->name }}
                                    </p>
                                    <p class="fs-3 text-center mt-4">
                                        Aggiunto il:
                                        {{ $announcements_to_check->created_at->format('d/m/Y') }}
                                    </p>
                                   
                                    <a href="{{ route('refuseAnnouncement', compact('announcements_to_check')) }}"
                                        class="btn bgmy4 f-p">Rifiuta</a>
                                    <a href="{{ route('acceptAnnouncement', compact('announcements_to_check')) }}"
                                        class="btn bgmy4 f-p">Approva</a>

                                </div>
                            </div>


                        @endif
                    </div>

                    {{-- Fine Area Revisore --}}
                    {{-- Inizio area annunci caricati dall'User --}}
                @endif
            </div>
            <div class="container-fluid">
                <div class="row">
                    @foreach ($announcements_user as $announcement)
                        <div class="col-sm-4 d-flex justify-content-center mt-4 align-items-center">
                            <div class="card card-border" style="width: 18rem;">
                                <img src="{{ !$announcement->images()->get()->isEmpty()? $announcement->images()->first()->getUrl(400, 300): 'https://picsum.photos/200' }}"
                                    class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title f-p">{{ $announcement->name }}</h5>
                                    <p class="card-text f-s">{{ $announcement->description }}</p>
                                    <p class="card-text f-s">{{ $announcement->price }} €</p>
                                    <p class="card-text f-s">Aggiunto il
                                        {{ $announcement->created_at->format('d/m/Y') }}</p>
                                    {{-- <a href="{{ route('categoryShow', ['category' => $announcement->category]) }}"
                                        class="btn bgmy4 f-p">Categoria:
                                        {{ $announcement->category->name }}</a> --}}
                                    <div class="container-fluid">
                                        <div class="row d-flex justify-content-between">
                                            <div class="col-sm-3">
                                                <a href="{{ route('detArticle', compact('announcement')) }}"
                                                    class="btn bgmy4 f-p">Dettaglio</a>
                                            </div>
                                            <div class="col-sm-3">
                                                <a href="{{ route('modifyAnnouncement', compact('announcement')) }}"
                                                    class="btn bgmy4 f-p">Modifica</a>
                                            </div>
                                            <div class="col-sm-3">
                                                <form class="" action="{{ route('defDelete', compact('announcement')) }}"                                              method="POST">
                                                    @csrf
                                                    <button class="btn bgmy4 f-p" type="submit">Elimina</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-sm-12 d-flex justify-content-center">
                            <div class="fw-bold mt-4">
                                {{ $announcements_user->links() }}
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

    </div>

    </div>
    </div>

</x-layout>
