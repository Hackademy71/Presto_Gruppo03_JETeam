<x-layout>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <h1>Benvenut* {{Auth::user()->name}},</h1>
            <h2> hai caricato "Numero annunci" </h2>
        </div>
        @foreach ($announcements as $announcement)
        <div class="col-sm-3 d-flex justify-content-center mt-4 align-items-center">
            <div class="card card-border" style="width: 18rem;">
                <img src="{{!$announcement->images()->get()->isEmpty() ? $announcement->images()->first()->getUrl(400,300) : 'https://picsum.photos/200' }}" class="card-img-top" alt="">
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
                    <a href=""
                        class="btn bgmy4 f-p m-3">Modifica l'annuncio</a>
                        
                </div>
            </div>
        </div>
        
        @endforeach
    </div>
</div>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-sm-12 d-flex justify-content-center">
            <div class="fw-bold mt-4">
                {{ $announcements->links() }}

            </div>
        </div>

    </div>
</div>

</x-layout>