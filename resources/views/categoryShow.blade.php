<x-layout>
    <h1>Categoria {{$category->name}}</h1>
    <div class="container">
        <div class="row">
        @forelse ($category->announcements as $announcement)

    <div class="col-6 mt-3 mb-3">
            <div class="card" style="width: 18rem;">
            <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">{{$announcement->name}}</h5>
                <p class="card-text">{{$announcement->description}}</p>
                <p class="card-text">{{$announcement->price}} €</p>
                <p class="card-text">Aggiunto il {{$announcement->created_at->format('d/m/Y')}}</p>
                <p class="card-text">Aggiunto da {{$announcement->user->name}}</p>
                <a href="{{route('detArticle', compact ('announcement'))}}" class="btn btn-primary">Visualizza dettaglio</a>
                </div>
            </div>
    </div>
    @empty
        <div> 
            <p> Non sono presenti annunci in questa categoria </p>
            <p> Sii il primo </p>
            <a class="btn btn-primary" href="{{route('articleNew')}}">Inserisci articolo</a>
        </div>
    @endforelse

</x-layout>