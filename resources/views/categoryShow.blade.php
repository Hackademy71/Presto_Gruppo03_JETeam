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
                <div class="col-sm-3 d-flex justify-content-center mt-4 align-items-center mb-3">
                    <div class="card card-border" style="width: 18rem;">
                        <img src="{{ !$announcement->images()->get()->isEmpty()? $announcement->images()->first()->getUrl(400, 300): 'https://picsum.photos/200' }}"
                            class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title f-p m-2">{{ $announcement->name }}</h5>
                            <p class="card-text f-s m-2">{{ $announcement->description }}</p>
                            <p class="card-text f-s m-2">{{ $announcement->price }} €</p>
                            <p class="card-text f-s m-2">Categoria: {{ $announcement->category->name }}</p>
                            <p class="card-text f-s m-2">Aggiunto il
                                {{ $announcement->created_at->format('d/m/Y') }}
                            </p>
                            <a href="{{ route('detArticle', compact('announcement')) }}"
                                class="btn bgmy4 f-p m-3">Visualizza dettaglio</a>
                            @auth
                                {{-- @if (Auth::user()->is_revisor && $announcement->revisor_id === Auth::user()->id)
                                        <a href="{{ route('refuseAnnouncement', compact(['announcement' => $announcements_to_check])) }}"
                                            class="btn btn-danger f-p m-3">Rimanda in revisione</a>
                                    @endif --}}
                            @endauth
                        </div>
                    </div>
                </div>
                @empty
        </div>

        <x-categories />
    </div>
    
    @endforelse
    
</x-layout>
