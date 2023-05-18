<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mt-4">

                <h1 class="f-p text-center">Categoria {{ $category->name }}</h1>

            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            @forelse ($announcements as $announcement)
                @if ($announcement->is_accepted)
                    <div class="col-sm-3 d-flex justify-content-center mt-4 align-items-center">
                        <div class="card card-border" style="width: 18rem;">
                            <img src="{{ !$announcement->images()->get()->isEmpty()? $announcement->images()->first()->getUrl(400, 300): 'https://picsum.photos/200' }}"
                                class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title f-p m-2">{{ $announcement->name }}</h5>
                                <p class="card-text f-s m-2">{{ $announcement->description }}</p>
                                <p class="card-text f-s m-2">{{ $announcement->price }} €</p>
                                <p class="card-text f-s m-2">Categoria: {{ $announcement->category->name }}</p>
                                <p class="card-text f-s m-2">Aggiunto il {{ $announcement->created_at->format('d/m/Y') }}
                                </p>
                                <a href="{{ route('detArticle', compact('announcement')) }}"
                                    class="btn bgmy4 f-p m-3">Visualizza dettaglio</a>
                                @auth
                                    @if (Auth::user()->is_revisor && $announcement->revisor_id === Auth::user()->id)
                                        <a href="{{ route('refuseAnnouncement', ['announcement' => $announcement]) }}"
                                            class="btn btn-danger f-p m-3">Rimanda in revisione</a>
                                    @endif
                                @endauth
                            </div>
                        </div>
                    </div>
                @endif
            @empty
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <div class="alert alert-warning" role="alert">
                                <h1 class="f-p">Non sono presenti annunci in questa categoria</h1>
                                <h2 class="f-p">Sii il primo</h2>
                                <a class="btn bgmy4 f-p" href="{{ route('articleNew') }}">Inserisci articolo</a>
                                <h3 class="f-p">Altre categorie</h3>
                            </div>
                        </div>
            @endforelse
        </div>
    </div>

</x-layout>
