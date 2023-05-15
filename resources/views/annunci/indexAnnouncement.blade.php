<x-layout>
    <h1 class="f-p">I nostri prodotti</h1>
    <div class="container">
        <div class="row">
            @forelse ($announcements as $announcement)
                <div class="col-6 mt-3 mb-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://picsum.photos/200" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title f-p">{{ $announcement->name }}</h5>
                            <p class="card-text f-s">{{ $announcement->description }}</p>
                            <p class="card-text f-s">{{ $announcement->price }} €</p>
                            <p class="card-text f-s">Aggiunto il {{ $announcement->created_at->format('d/m/Y') }}</p>
                            <a href="{{ route('detArticle', compact('announcement')) }}"
                                class="btn btn-primary f-p m-3">Visualizza dettaglio</a>
                            <a href="{{ route('categoryShow', ['category' => $announcement->category]) }}"
                                class="btn btn-primary f-p m-3">Categoria: {{ $announcement->category->name }}</a>
                        </div>
                    </div>
                </div>
                @empty                   
               
                <div class="col-12">
                    <div class="alert alert-warning f-s" role="alert"> Non ci sono annunci
                    </div>
                </div>
               
                @endforelse                
                {{ $announcements->links() }}
        </div>
    </div>

</x-layout>
