<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="div col-3 bgmy1">
                <h1 class="">Il tuo profilo</h1>
                <h5 class="card-title f-p">Nome {{ Auth::user()->name }}</h5>
                <p class="card-text f-s">Email: {{ Auth::user()->email }}</p>

                @if (Auth::user()->profile)
                    <h5 class="card-title f-p">{{ Auth::user()->profile->nickname }}</h5>
                    <p class="card-text f-s">Città: {{ Auth::user()->profile->city }}</p>
                    <p class="card-text f-s">CAP: {{ Auth::user()->profile->CAP }}</p>
                    <a href="{{ route('userProfile') }}" class="btn bgmy4 f-p m-3">Modifica i tuoi dati</a>
                @else
                    <a href="{{ route('userProfile') }}">Aggiungi più dati al tuo Profilo</a>
                @endif

                @if (Auth::user()->is_revisor)
                    <a class="tx-color" href="{{ route('recheck') }}">Annunci revisionati</a>
                @endif
            </div>



            <div class="col-9">
                <h1>Benvenut* {{ Auth::user()->name }},</h1>
                <h2> hai caricato
                    {{-- {{$announcements['user'].lenght()}}   --}}
                    </h2> 
            </div>
            {{-- <div class="row ms-3 justify-content-start">
                <div class="col-3 bg-gray400">
                    Area dettagli profilo
                </div>
                <span class="vh-100"></span> --}}
                <div class="col-9">

                    @if (Auth::user()->is_revisor)
                        <div class="container-fluid">
                            @if ($announcements['to_check']=='is_empty')
                                <div class="row justify-content-center">
                                    {{$message}}
                                    <a class="dropdown-item tx-color" href="{{ route('recheck') }}">Vai agli annunci che
                                        hai revisionato</a>
                                </div>
                            @else
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div id="announcement-{{ $announcements['to_check'][0]->id }}"
                                            class="carousel slide" data-bs-ride="true">
                                            {{-- <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#announcement-{{$announcement->id}}" data-bs-slide-to="0"
                                                class="active" aria-current="true" aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#announcement-{{$announcement->id}}" data-bs-slide-to="1"
                                                aria-label="Slide 2"></button>
                                            <button type="button" data-bs-target="#announcement-{{$announcement->id}}" data-bs-slide-to="2"
                                                aria-label="Slide 3"></button>
                                        </div> --}}
                                            @if ($announcements['to_check'][0]->images()->get()->isNotEmpty())
                                                <div class="carousel-inner">
                                                    @foreach ($announcements['to_check'][0]->images as $image)
                                                        <div
                                                            class="carousel-item @if ($loop->first) active @endif">
                                                            <img src="{{ $announcements['to_check'][0]->images()->first()->getUrl(400, 300) }}"
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
                                                data-bs-target="#announcement-{{ $announcements['to_check'][0]->id }}"
                                                data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon text-dark"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button"
                                                data-bs-target="#announcement-{{ $announcements['to_check'][0]->id }}"
                                                data-bs-slide="next">
                                                <span class="carousel-control-next-icon text-dark"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <h2 class="f-s text-center fw-bold mt-5">
                                            {{ $announcements['to_check'][0]->name }}
                                        </h2>
                                        <p class="fs-3 text-center mt-4">
                                            €{{ $announcements['to_check'][0]->price }}
                                        </p>
                                        <h5 class="f-s text-center mt-4">
                                            {{ $announcements['to_check'][0]->description }}
                                        </h5>
                                        <p class="fs-3 text-center mt-4">
                                            Venditore: {{ $announcements['to_check'][0]->user->name }}
                                        </p>
                                        <p class="fs-3 text-center mt-4">
                                            Aggiunto il:
                                            {{ $announcements['to_check'][0]->created_at->format('d/m/Y') }}
                                        </p>
                                        <a href="{{ route('acceptAnnouncement', ['announcement' => $announcement]) }}"
                                            class="btn bgmy4 f-p">Approva</a>
                                        <a href="{{ route('refuseAnnouncement', ['announcement' => $announcement]) }}"
                                            class="btn bgmy4 f-p">Rifiuta</a>
                                    </div>
                                </div>


                            @endif
                        </div>
                        {{-- A seguire commentata card da RevisorArea precedente --}}

                        {{-- <div class="d-flex justify-content-center align-items-center mt-4 mb-3">
                        <div class="card card-border" style="width: 18rem;">
                            <div class="container card-img-top">
                                <div id="announcement-{{$announcements['to_check'][0]->id}}" class="carousel slide" data-bs-ride="true">
                                    
                                    @if ($announcements['to_check'][0]->images()->get()->isNotEmpty())
                                        <div class="carousel-inner">
                                            @foreach ($announcements['to_check'][0]->images as $image)
                                                <div class="carousel-item @if ($loop->first) active @endif">
                                                    <img src="{{ $image->getUrl(400, 300) }}" class=" d-block w-100"
                                                        alt="...">
                                                </div>
                                                <div class="col-md-3 border-end">
                                                    <h5 class="mt-2 tc-accent">Tags</h5>
                                                    <div class="p-2">
                                                        @if ($image->labels)
                                                        @foreach ($image->labels as $label)
                                                        <p class="d-inline">{{$label}},</p>
                                                        @endforeach
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="card-body">
                                                        <h5 class="tc-accent">Revisione Immagini</h5>
                                                        <p>Adulti: <span class="{{$image->adult}}"></span></p>
                                                        <p>Satira: <span class="{{$image->spoof}}"></span></p>
                                                        <p>Medicina: <span class="{{$image->medical}}"></span></p>
                                                        <p>Violenza: <span class="{{$image->violence}}"></span></p>
                                                        <p>Contenuto Ammiccante: <span class="{{$image->racy}}"></span></p>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    @else
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="https://picsum.photos/200" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="https://picsum.photos/200" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="https://picsum.photos/200" class="d-block w-100" alt="...">
                                            </div>
                                        </div>
                                    @endif
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#announcement-{{$announcements['to_check'][0]->id}}" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#announcement-{{$announcements['to_check'][0]->id}}" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title f-p">{{ $announcements['to_check'][0]->name }}</h5>
                                    <p class="card-text f-s">{{ $announcements['to_check'][0]->description }}</p>
                                    <p class="card-text f-s">{{ $announcements['to_check'][0]->price }} €</p>
                                    <p class="card-text f-s">{{ $announcements['to_check'][0]->category->name }}</p>
                                    <p class="card-text f-s">Aggiunto il
                                        {{ $announcements['to_check'][0]->created_at->format('d/m/Y') }}
                                    </p>
                                    <a href="{{ route('acceptAnnouncement', ['announcement' => $announcement]) }}"
                                        class="btn bgmy4 f-p">Approva</a>
                                    <a href="{{ route('refuseAnnouncement', ['announcement' => $announcement]) }}"
                                        class="btn bgmy4 f-p">Rifiuta</a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                        {{-- Fine Area Revisore --}}
                        {{-- Inizio area annunci caricati dall'User --}}
                    @endif
                    @foreach ($announcements['user'] as $announcement)
                        <div class="col-sm-3 d-flex justify-content-center mt-4 align-items-center">
                            <div class="card card-border" style="width: 18rem;">
                                <img src="{{ !$announcement->images()->get()->isEmpty()? $announcement->images()->first()->getUrl(400, 300): 'https://picsum.photos/200' }}"
                                    class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title f-p">{{ $announcement->name }}</h5>
                                    <p class="card-text f-s">{{ $announcement->description }}</p>
                                    <p class="card-text f-s">{{ $announcement->price }} €</p>
                                    <p class="card-text f-s">Aggiunto il
                                        {{ $announcement->created_at->format('d/m/Y') }}</p>
                                    <a href="{{ route('categoryShow', ['category' => $announcement->category]) }}"
                                        class="btn bgmy4 f-p m-3">Categoria:
                                        {{ $announcement->category->name }}</a>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-4">
                                                <a href="{{ route('detArticle', compact('announcement')) }}"
                                                    class="btn bgmy4 f-p m-3">Visualizza dettaglio</a>
                                            </div>
                                            <div class="col-4">
                                                <a href="{{ route('modifyAnnouncement', compact('announcement')) }}"
                                                    class="btn bgmy4 f-p m-3">Modifica l'annuncio</a>
                                            </div>
                                            <div class="col-4">
                                                <form
                                                    class="m-0"action="{{ route('defDelete', ['announcement' => $announcement]) }}"
                                                    method="POST">
                                                    @csrf
                                                    <button class="btn bgmy4 mt-1 f-p" type="submit">Elimina</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-sm-12 d-flex justify-content-center">
                                <div class="fw-bold mt-4">
                                    {{ $announcements['user']->links() }}
                
                                </div>
                            </div>
                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>
