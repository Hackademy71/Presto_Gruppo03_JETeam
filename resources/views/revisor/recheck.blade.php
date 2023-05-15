<x-layout>
    <h1> Revisiona annunci rifiutati in prima istanza </h1>
   
     @foreach ($announcements as $announcement)
    <div class="col-6 mt-3 mb-3">
            <div class="card" style="width: 18rem;">
            <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">{{$announcement->name}}</h5>
                <p class="card-text">{{$announcement->description}}</p>
                <p class="card-text">{{$announcement->price}} €</p>
                <p class="card-text">Aggiunto il {{$announcement->created_at->format('d/m/Y')}}</p>
                <p class="card-text">Aggiunto da {{$announcement->user->name}}</p>
                <a  onclick="event.preventDefault(); 
                document.getElementById('accept-form').submit();" class="btn btn-success">Approva</a>
                    <form id="accept-form" action="{{ route('acceptAnnouncement', compact('announcement'))}}" method="POST" class="d-none">
                    @csrf
                    @method('PATCH')
                    </form>
                <a  onclick="event.preventDefault(); 
                document.getElementById('defDelete').submit();" class="btn btn-danger">Elimina</a>
                    <form id="defDelete" action="{{ route('defDelete', compact('announcement'))}}" method="POST" class="d-none">
                    @csrf
                   
                    </form>
                
                </div>
            </div>
    </div>
    @endforeach 
</x-layout>