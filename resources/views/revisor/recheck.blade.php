<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-4">
                <h1 class="f-p text-center">Ricontrolla gli annunci</h1>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            @foreach ($announcements as $announcement)
                <div class="col-6 mt-3 mb-3">
                    <div class="card" style="width: 18rem;">
                        <div class="container card-img-top">
                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                        class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                        aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                        aria-label="Slide 3"></button>
                                </div>
                                @if ($announcement->images()->get()->isNotEmpty())
                                    <div class="carousel-inner">

                                        @foreach ($announcement->images as $image)
                                            <div class="carousel-item @if ($loop->first) active @endif">
                                                <img src="{{ $image->getUrl(400, 300) }}" class=" d-block w-100"
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
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>

                            <div class="card-body">

                                <h5 class="card-title f-p">{{ $announcement->name }}</h5>
                                @if ($announcement->is_accepted)
                                    <p class="card-text lead f-s text-success"> Articolo già accettato</p>
                                @endif
                                <p class="card-text f-s">{{ $announcement->description }}</p>
                                <p class="card-text f-s">{{ $announcement->price }} €</p>
                                <p class="card-text f-s">{{ $announcement->category->name }}</p>
                                <p class="card-text f-s">Aggiunto il
                                    {{ $announcement->created_at->format('d/m/Y') }}
                                </p>

                                <a href="{{ route('acceptAnnouncement', ['announcement' => $announcement]) }}"
                                    class="btn btn-success f-p">Approva</a>
                                @if ($announcement->is_accepted)
                                    <a href="{{ route('refuseAnnouncement', ['announcement' => $announcement]) }}"
                                        class="btn btn-danger f-p">Rifiuta</a>
                                @endif
                                <a href="{{ route('defDelete', ['announcement' => $announcement]) }}"
                                    class="btn btn-danger f-p">Elimina</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


</x-layout>
