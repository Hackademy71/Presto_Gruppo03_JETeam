<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 mt-5 mb-5">
                <h1 class="f-s text-center">
                    Dettaglio Prodotto
                </h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row card-login">
            <div class="col-sm-6">
                <div id="announcement-{{$announcement->id}}" class="carousel slide carousel-dark " data-bs-ride="true">
                    @if ($announcement->images()->get()->isNotEmpty())
                        <div class="carousel-inner">
                            @foreach ($announcement->images as $image)                          
                                <div class="carousel-item @if ($loop->first) active @endif">
                                    <img src="{{$image->getUrl(400, 300)}}" class="img-fluid p-3 rounded d-block w-100"
                                        alt="...">
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
                    <button class="carousel-control-prev" type="button" data-bs-target="#announcement-{{$announcement->id}}"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon text-dark" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#announcement-{{$announcement->id}}"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon text-dark" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-sm-6 mx-auto">
                <h2 class="f-s text-center fw-bold mt-5">
                    {{ $announcement->name }}
                </h2>
                <p class="fs-3 text-center mt-4">
                    €{{ $announcement->price }}
                </p>
                <h5 class="f-s text-center mt-4">
                    {{ $announcement->description }}
                </h5>
                <p class="fs-3 text-center mt-4">
                    Venditore: {{ $announcement->user->name }}
                </p>
                <p class="fs-3 text-center mt-4">
                    Aggiunto il: {{ $announcement->created_at->format('d/m/Y') }}
                </p>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <a href="{{route('onBuild')}}" class="btn bgmy4 f-p">Contatta venditore</button>                    
                    <a href="{{route('reportAnnouncement', compact('announcement'))}}" class="f-s text-center tx-link">Segnala annuncio</a>
                  </div>
            </div>
            
        </div>
    </div>
    {{-- <h1>Dettaglio</h1>
    <div class="card text-center">
        <div class="card-header">
            {{ $announcement->name }}
        </div>
        <div class="card-body">
            <h5 class="card-title f-p">Descrizione</h5>
            <p class="card-text f-s">{{ $announcement->description }}</p>
            <p class="card-text f-s">Prezzo: {{ $announcement->price }}</p>
            <p class="card-text f-s">Caricato da: {{ $announcement->user->name }}</p>
            <a href="#" class="btn bgmy4 f-p justify-align-center">Contatta venditore</a>
        </div>
        <div class="card-footer text-muted f-s">
            Aggiunto il {{ $announcement->created_at }}
        </div>
    </div>
    </div> --}}

</x-layout>
