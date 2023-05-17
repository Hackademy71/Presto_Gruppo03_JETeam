<x-layout>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-sm-12 ps-0 hero-image">

              

                <div class="hero-text text-end h-100">
                    <h1 class="f-p fw-bold fs-1 justify-content-end text-gradient-50"> {{ __('ui.welcome') }}</h1>
                    <p class="f-p fs-2 justify-content-center text-gradient-50">
                        {{ __('ui.slogan') }}
                    </p>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row justify-content-center">
                    @foreach ($announcements as $announcement)
                        <div class="col-sm-3 d-flex justify-content-center mt-4 align-items-center">
                            <div class="card card-border" style="width: 18rem;">
                                <img src="https://picsum.photos/200" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title f-p">{{ $announcement->name }}</h5>
                                    <p class="card-text f-s">{{ $announcement->description }}</p>
                                    <p class="card-text f-s">{{ $announcement->price }} €</p>
                                    <p class="card-text f-s">Aggiunto il
                                        {{ $announcement->created_at->format('d/m/Y') }}</p>
                                    <a href="{{ route('detArticle', compact('announcement')) }}"
                                        class="btn bgmy4 f-p m-3">Visualizza dettaglio</a>
                                    <a href="{{ route('categoryShow', ['category' => $announcement->category]) }}"
                                        class="btn bgmy4 f-p m-3">Categoria: {{ $announcement->category->name }}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</x-layout>
