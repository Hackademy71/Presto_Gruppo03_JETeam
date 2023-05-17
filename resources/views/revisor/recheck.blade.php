<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-4">
                <h1 class="f-p text-center">Ricontrolla gli annunci</h1>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row justify-content-center">
                @foreach ($announcements as $announcement)
                    <div class="col-sm-4 d-flex justify-content-center mt-4 align-items-center">
                        <div class="card card-border" style="width: 18rem;">
                            <img src="https://picsum.photos/200" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title f-p">{{ $announcement->name }}</h5>
                                <p class="card-text f-s">{{ $announcement->description }}</p>
                                <p class="card-text f-s">{{ $announcement->price }} €</p>
                                <p class="card-text f-s">Aggiunto il {{ $announcement->created_at->format('d/m/Y') }}
                                </p>
                                <a onclick="event.preventDefault(); 
                                document.getElementById('accept-form').submit();"
                                    class="btn btn-success">Approva</a>
                                <form id="accept-form"
                                    action="{{ route('acceptAnnouncement', compact('announcement')) }}" method="POST"
                                    class="d-none">
                                    @csrf
                                    @method('PATCH')
                                </form>
                                <a onclick="event.preventDefault(); 
                                document.getElementById('defDelete').submit();"
                                    class="btn btn-danger">Elimina</a>
                                <form id="defDelete" action="{{ route('defDelete', compact('announcement')) }}"
                                    method="POST" class="d-none">
                                </form>
                                @csrf
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- @foreach ($announcements as $announcement)
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
    @endforeach  --}}
</x-layout>
