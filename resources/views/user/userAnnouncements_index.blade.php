<x-layout>
    <div class="container-fluid ">
        {{-- Area dettagli Utente --}}
        <div class="row justify-content-center">
            <div class="col-12 col-lg-3 bgmy1 align-items-center rounded-end">
                <h1 class="f-p text-center fw-bold my-4">Il tuo profilo</h1>
                <div class="container-fluid">
                    <div class="row-fluid align-items-center">
                        <div class="col-sm-12 justify-content-center bg-danger">

                            <div class="bg-white card-border rounded justify-content-center" style="width: 18rem;">

                                <h5 class="card-title text-center f-p">Nome {{ Auth::user()->name }}</h5>
                                <p class="card-text text-center f-s">Email: {{ Auth::user()->email }}</p>

                                @if (Auth::user()->profile)
                                    <p class="card-title text-center fw-5 f-p">Nickname:
                                        {{ Auth::user()->profile->nickname }}</p>
                                    <p class="card-text text-center f-s">Cognome: {{ Auth::user()->profile->surname }}
                                    </p>
                                    <p class="card-text text-center f-s">Sesso: {{ Auth::user()->profile->gender }}</p>
                                    <p class="card-text text-center f-s">Nazionalità: {{ Auth::user()->profile->state }}
                                    </p>
                                    <p class="card-text text-center f-s">Città: {{ Auth::user()->profile->city }}</p>
                                    <p class="card-text text-center f-s">Indirizzo: {{ Auth::user()->profile->address }}
                                    </p>
                                    <p class="card-text text-center f-s">CAP: {{ Auth::user()->profile->CAP }}</p>
                                    <p class="card-text text-center f-s">Numero di telefono:
                                        {{ Auth::user()->profile->tel_number }}
                                    </p>
                                    <p class="card-text f-s">Preferenza di contatto: @if (Auth::user()->profile->contactMethod)
                                            Email e numero di telefono
                                        @else
                                            Solo Email
                                        @endif
                                    </p>


                            </div>
                            <div class="col-12 d-grid gap-2 col-lg-6 mx-auto">
                                <a href="{{ route('userProfileModule') }}" class="btn bgmy4 f-p m-3">Modifica i tuoi
                                    dati</a>
                            @else
                                <a href="{{ route('userProfileModule') }}" class="btn bgmy4 f-p m-3">Aggiungi più dati
                                    al
                                    tuo Profilo</a>
                            </div>
                            @endif

                            @if (Auth::user()->is_revisor)
                                <a class="btn f-p bgmy3" href="{{ route('recheck') }}">Annunci revisionati</a>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>
        {{-- Fine Area Dettagli Utente --}}


        {{-- Sezione annunci --}}
        <div class="col-md-9">
            {{-- Intitolazione --}}
            <div class="container-fluid">
                <div class="row justify-content-center my-4">
                    <div class="col-12 justify-content-center d-flex align-items-center">
                        <h1 class="fw-bold f-p ">Benvenut* {{ Auth::user()->name }},</h1>
                        <h1 class="fw-bold f-p"> hai caricato
                            {{-- {{$announcements['user'].lenght()}}   --}}
                        </h1>
                    </div>
                </div>
            </div>

            {{-- Card generica --}}
            <a href="{{route('indexRevisor')}}"> Vai a revisionare gli annunci </a>

            {{-- Fine Area Revisore --}}
            {{-- Inizio area annunci caricati dall'User --}}
            @endif
        </div>

    </div>
    

</x-layout>
