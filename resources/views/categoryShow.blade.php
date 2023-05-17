<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-4">
                <h1 class="f-p text-center">Categoria {{$announcements->category()->get()->name}}</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            @forelse ($announcements as $announcement)
                <div class="col-sm-4 d-flex justify-content-center mt-4 align-items-center">
                    <div class="card card-border" style="width: 18rem;">
                        <img src="https://picsum.photos/200" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title f-p">{{ $announcement->name }}</h5>
                            <p class="card-text f-s">{{ $announcement->description }}</p>
                            <p class="card-text f-s">{{ $announcement->price }} €</p>
                            <p class="card-text f-s">Aggiunto il {{ $announcement->created_at->format('d/m/Y') }}</p>
                            <a href="{{ route('detArticle', compact('announcement')) }}"
                                class="btn bgmy4 f-p m-3">Visualizza dettaglio</a>
                            <a href="{{ route('categoryShow', ['category' => $announcement->category]) }}"
                                class="btn bgmy4 f-p m-3">Categoria: {{ $announcement->category->name }}</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <div class="alert alert-warning" role="alert">
                                <h1 class="f-p">Non sono presenti annunci in questa categoria</h1>
                                <h2 class="f-p">Sii il primo</h2>
                                <a class="btn bgmy4 f-p" href="{{ route('articleNew') }}">Inserisci articolo</a>
                            </div>
                        </div>
            @endforelse
        </div>
    </div>

</x-layout>
