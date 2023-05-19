<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="div col-3 bgmy1">
                <h1 class="">Il tuo profilo</h1>
                <h5 class="card-title f-p">Nome {{ Auth::user()->name }}</h5>
                <p class="card-text f-s">Email: {{ Auth::user()->email }}</p>

                @if (Auth::user()->profile)
                    <h5 class="card-title f-p">{{ Auth::user()->profile->nickname }}</h5>
                    <p class="card-text f-s">Città: {{ Auth::user()->profile->city }}</p>
                    <p class="card-text f-s">CAP: {{ Auth::user()->profile->CAP }}</p>
                    <a href="{{ route('userProfile') }}" class="btn bgmy4 f-p m-3">Modifica i tuoi dati</a>
                @else
                    <a href="{{ route('userProfile') }}">Aggiungi più dati al tuo Profilo</a>
                @endif
            </div>



            <div class="col-9">
                <h1>Benvenut* {{ Auth::user()->name }},</h1>
                <h2> hai caricato "Numero annunci" </h2>
            </div>
            <div class="row ms-3 justify-content-start">
                <div class="col-3 bg-gray400">
                    Area dettagli profilo
                </div>
                <span class="vh-100"></span>
                <div class="col-9">

                    @foreach ($announcements as $announcement)
                        <div class="col-sm-3 d-flex justify-content-center mt-4 align-items-center">
                            <div class="card card-border" style="width: 18rem;">
                                <img src="{{ !$announcement->images()->get()->isEmpty()? $announcement->images()->first()->getUrl(400, 300): 'https://picsum.photos/200' }}"
                                    class="card-img-top" alt="">
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
                                    <a href="" class="btn bgmy4 f-p m-3">Modifica l'annuncio</a>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
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
