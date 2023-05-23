<div class="container-fluid">
        <div class="row">
            @forelse (Auth::user()->announcements as $announcement)
                <div class="col-sm-4 d-flex justify-content-center mt-4 align-items-center">
                    <div class="card card-border" style="width: 18rem;">
                        <img src="{{ !$announcement->images()->get()->isEmpty()? $announcement->images()->first()->getUrl(400, 300): 'https://picsum.photos/200' }}"
                            class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title f-p">{{ $announcement->name }}</h5>
                            <p class="card-text f-s">{{ $announcement->description }}</p>
                            <p class="card-text f-s">{{ $announcement->price }} €</p>
                            @if(!$announcement->is_accepted)
                            <p class="card-text lead text-danger f-s">Articolo in attesa di un revisore</p>
                            @else
                            <p class="card-text lead text-success f-s">Articolo approvato</p>
                            @endif
                            <p class="card-text f-s">Aggiunto il
                                {{ $announcement->created_at->format('d/m/Y') }}</p>
                            {{-- <a href="{{ route('categoryShow', ['category' => $announcement->category]) }}"
                                class="btn bgmy4 f-p">Categoria:
                                {{ $announcement->category->name }}</a> --}}
                               
                             <div class="container-fluid">
                                <div class="row d-flex justify-content-between">
                                    <div class="d-grid gap-2 d-md-block">
                                        <a class="btn bgmy4 mt-1" href="{{ route('detArticle', compact('announcement')) }}">Dettaglio</a>
                                        <a class="btn bgmy4 mt-1" href="{{ route('modifyAnnouncement', compact('announcement')) }}" >Modifica</a>
                                        <form action="{{ route('defDelete', compact('announcement'))}}" method="POST">
                                            @csrf
                                        <button class="btn bgmy3 mt-1" >Elimina</button>
                                        </form>
                                      </div>  
                               </div>
                            </div>

                        </div>
                    </div>
                </div>
            @empty
            <div class="col-sm-12 d-flex justify-content-center mt-4 align-items-center">
                <p class="f-s ">Non hai ancora aggiunto annunci, cosa aspetti?</p>
                <a class="btn bgmy4 f-p" href="{{ route('articleNew') }}">Inserisci articolo</a>
            </div>

            @endforelse
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-sm-12 d-flex justify-content-center">
                    <div class="fw-bold mt-4">
                        
                    </div>
                </div>
                
            </div>
        </div>