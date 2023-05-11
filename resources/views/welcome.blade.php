<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 ps-0">
                <div id="imgHead">
                    <img class="vw-100" src="https://www.tuttobarche.it/magazine/wp-content/uploads/sites/2/2020/05/contratto-compravendita-di-una-barca.jpg" alt="img-header">
                </div>
                <div id="headTitle" class=" align-items-center">
                    <h1 class="f-p fw-bold fs-1">  Benvenuti in Presto.it</h1>
                </div>
            </div>
            @foreach ($announcements as $announcement)
                <div class="col-6 mt-3 mb-3 bgmy3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://picsum.photos/200" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">{{ $announcement->name }}</h5>
                            <p class="card-text">{{ $announcement->description }}</p>
                            <p class="card-text">{{ $announcement->price }} €</p>
                            <p class="card-text">Aggiunto il {{ $announcement->created_at->format('d/m/Y') }}</p>
                            <a href="{{ route('detArticle', compact('announcement')) }}"
                                class="btn btn-primary">Visualizza dettaglio</a>
                            <a href="{{ route('categoryShow', ['category' => $announcement->category]) }}"
                                class="btn btn-primary">Categoria: {{ $announcement->category->name }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</x-layout>
