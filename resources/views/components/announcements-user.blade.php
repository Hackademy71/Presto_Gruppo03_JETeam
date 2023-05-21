<div>
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
    <div class="container-fluid">
        <div class="row">
            @foreach ($announcements as $announcement)
                <div class="col-sm-4 d-flex justify-content-center mt-4 align-items-center">
                    <div class="card card-border" style="width: 18rem;">
                        <img src="{{ !$announcement->images()->get()->isEmpty()? $announcement->images()->first()->getUrl(400, 300): 'https://picsum.photos/200' }}"
                            class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title f-p">{{ $announcement->name }}</h5>
                            <p class="card-text f-s">{{ $announcement->description }}</p>
                            <p class="card-text f-s">{{ $announcement->price }} €</p>
                            <p class="card-text f-s">Aggiunto il
                                {{ $announcement->created_at->format('d/m/Y') }}</p>
                            {{-- <a href="{{ route('categoryShow', ['category' => $announcement->category]) }}"
                                class="btn bgmy4 f-p">Categoria:
                                {{ $announcement->category->name }}</a> --}}
                               
                             <div class="container-fluid">
                                <div class="row d-flex justify-content-between">
                                    <div class="d-grid gap-2 d-md-block">
                                        <button class="btn bgmy4 mt-1" href="{{ route('detArticle', compact('announcement')) }} type="button">Dettaglio</button>
                                        <button class="btn bgmy4 mt-1" href="{{ route('modifyAnnouncement', compact('announcement')) }}" type="button">Modifica</button>
                                        <form action="{{ route('defDelete', compact('announcement'))}}" method="POST">
                                            @csrf
                                        <button class="btn bgmy3 mt-1" type="button">Elimina</button>
                                        </form>
                                      </div>  
                               </div>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
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
</div>