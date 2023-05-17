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
        <div class="row">
            <div class="col-sm-6">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    @if ($announcement->images)
                        <div class="carousel-inner">
                            @foreach ($announcement->images as $image)
                                <div class="carousel-item @if ($loop->first) activate @endif">
                                    <img src="{{ Storage::url($image->path) }}" class="img-fluid p-3 rounded"
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
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden"><-</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">-></span>
                    </button>
                </div>
            </div>
            <div class="col-sm-6">
                <h2 class="f-s text-center fw-bold mt-5">
                    {{ $announcement->name }}
                </h2>
                <p class="fs-3 text-center mt-4">
                    €{{ $announcement->price }}
                </p>
                <h3 class="f-s text-center mt-4">
                    {{ $announcement->description }}
                </h3>
                <p class="fs-3 text-center mt-4">
                    Venditore: {{ $announcement->user->name }}
                </p>
                <p class="fs-3 text-center mt-4">
                    Aggiunto il: {{ $announcement->created_at->format('d/m/Y') }}
                </p>
                <a href="#" class="btn bgmy4 f-p text-center">Contatta venditore</a>
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
