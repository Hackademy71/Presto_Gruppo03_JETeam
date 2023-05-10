<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>
                    Benvenuti in Presto.it
                </h1>

            </div>
        </div>
    </div>
    @foreach ($announcements as $announcement)
    <div class="col-6 mt-3 mb-3">
            <div class="card" style="width: 18rem;">
            <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">{{$announcement->name}}</h5>
                <p class="card-text">{{$announcement->description}}</p>
                <p class="card-text">{{$announcement->price}} €</p>
                <p class="card-text">Aggiunto il {{$announcement->created_at->format('d/m/Y')}}</p>
                <p class="card-text">Categoria {{$announcement->category->name}}</p>
                <a href="#" class="btn btn-primary">Visualizza dettaglio</a>
                </div>
            </div>
    </div>
    @endforeach
</x-layout>