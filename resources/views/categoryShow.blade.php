<x-layout>
    <h1 class=" f-p">Categoria {{$announcements->category()->name}}</h1>
    <div class="container">
        <div class="row">
        @forelse ($announcements as $announcement)

    <div class="col-6 mt-3 mb-3">
            <div class="card" style="width: 18rem;">
            <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title f-p">{{$announcement->name}}</h5>
                <p class="card-text f-s">{{$announcement->description}}</p>
                <p class="card-text f-s">{{$announcement->price}} €</p>
                <p class="card-text f-s">Aggiunto il {{$announcement->created_at->format('d/m/Y')}}</p>
                <p class="card-text f-s">Aggiunto da {{$announcement->user->name}}</p>
                <a href="{{route('detArticle', compact ('announcement'))}}" class="btn btn-primary f-p m-3">Visualizza dettaglio</a>
                
            </div>

            </div>
    </div>
    @empty
        <div> 
            <p class="f-s"> Non sono presenti annunci in questa categoria </p>
            <p class="f-s"> Sii il primo </p>
            <a class="btn bgmy4 f-p" href="{{route('articleNew')}}">Inserisci articolo</a>
        </div>
    @endforelse

</x-layout>