<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 ps-0">
                <div id="imgHead">
                    <img class="vw-100" src="./img/online.png" alt="img-header">
                </div>
                <div id="headTitle">
<<<<<<< HEAD
                    <h1 class="f-p fw-bold fs-1 justify-content-end text-gradient-50">  Benvenuti in Presto.it</h1>
                    <p class="f-p fs-2 justify-content-center text-gradient-50">Il tuo marketplace preferito!</p>
=======
                    <h1 class="f-p fw-bold fs-1 justify-content-end">  Benvenuti in Presto.it </h1>
                    <p class="f-p fs-2 justify-content-center">Il tuo marketplace preferito!</p>
>>>>>>> d3b130c82e9e72e979a757b6f065da3ac3ef52cd
                </div>
            </div>
            @foreach ($announcements as $announcement)
                <div class="col-3 mt-3 mb-3  ">
                    <div class="card mb-3 bordo" style="width: 18rem;">
                        <img src="https://picsum.photos/200" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title f-p">{{ $announcement->name }}</h5>
                            <p class="card-text f-s">{{ $announcement->description }}</p>
                            <p class="card-text f-s">{{ $announcement->price }} €</p>
                            <p class="card-text f-s">Aggiunto il {{ $announcement->created_at->format('d/m/Y') }}</p>
                            <a href="{{ route('detArticle', compact('announcement')) }}"
                                class="btn bgmy4 f-p m-3">Visualizza dettaglio</a>
                            <a href="{{ route('categoryShow', ['category' => $announcement->category]) }}"
                                class="btn bgmy4 f-s m-3">Categoria: {{ $announcement->category->name }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</x-layout>
