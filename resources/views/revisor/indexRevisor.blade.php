<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-4">
                <h1 class="f-p">Ciao {{ Auth::user()->name }}, benvenuto nell'area revisori</h1>
            </div>
        </div>
        
        <div class="container">
            <div class="row">

                @foreach ($announcement_to_check as $announcement)
                    <div class="col-6 mt-3 mb-3">
                        <div class="card" style="width: 18rem;">
                            <div class="container card-img-top">
                                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carouselExampleIndicators"
                                            data-bs-slide-to="0" class="active" aria-current="true"
                                            aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators"
                                            data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators"
                                            data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    </div>
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
                                    <p class="card-text f-s">{{ $announcement->description }}</p>
                                    <p class="card-text f-s">{{ $announcement->price }} €</p>
                                    <p class="card-text f-s">{{ $announcement->category->name }}</p>
                                    <p class="card-text f-s">Aggiunto il
                                        {{ $announcement->created_at->format('d/m/Y') }}
                                    </p>

                                    <a onclick="event.preventDefault(); 
                                    document.getElementById('accept-form').submit();"
                                        class="btn btn-success f-p">Approva</a>
                                    <form id="accept-form"
                                        action="{{ route('acceptAnnouncement', compact('announcement')) }}"
                                        method="POST" class="d-none">
                                        @csrf
                                        @method('PATCH')
                                    </form>
                                    <a onclick="event.preventDefault(); 
                                    document.getElementById('refuse-form').submit();"
                                        class="btn btn-danger f-p">Rifiuta</a>
                                    <form id="refuse-form"
                                        action="{{ route('refuseAnnouncement', compact('announcement')) }}"
                                        method="POST" class="d-none">
                                        @csrf
                                        @method('PATCH')
                                    </form>


                                </div>
                            </div>
                        </div>
                @endforeach
            </div>
        </div>
</x-layout>
