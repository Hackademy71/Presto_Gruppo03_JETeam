<x-layout>
    <h1>I nostri prodotti</h1>
    <div class="container">
        <div class="row">
            @foreach ($announcements as $announcement)
            <div class="col-6 mt-3 mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://picsum.photos/200" class="card-img-top" alt="">
                        <div class="card-body">
                        <h5 class="card-title">{{$announcement->name}}</h5>
                        <p class="card-text">{{$announcement->description}}</p>
                        <p class="card-text">{{$announcement->price}} €</p>
                        <p class="card-text">Aggiunto il {{$announcement->created_at->format('d/m/Y')}}</p>                
                        <a href="{{route('detArticle', compact ('announcement'))}}" class="btn btn-primary">Visualizza dettaglio</a>
                        <a href="{{route('categoryShow', ['category'=>$announcement->category])}}" class="btn btn-primary">Categoria: {{$announcement->category->name}}</a>
                        </div>

            </div>
             </div>
            @endforeach
            {{$announcements->links()}}
        </div>
    </div>
   
</x-layout>