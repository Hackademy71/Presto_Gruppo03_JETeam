<x-layout>
    <div class="container-fluid ">
        {{-- Area dettagli Utente --}}
        <div class="row justify-content-center">
            <div class="col-12 col-md-3 bgmy1 align-items-center rounded-end">
                <h1 class="f-p text-center fw-bold my-4">Il tuo profilo</h1>
                <div class="container-fluid">
                    <div class="row-fluid align-items-center">
                        <div class="col-sm-12 justify-content-center">

                            <div class="bg-white card-border rounded justify-content-center" >

                                <h5 class="card-title text-center f-p">Nome {{ Auth::user()->name }}</h5>
                                <p class="card-text text-center mt-2 f-s">Email: {{ Auth::user()->email }}</p>

                                @if (Auth::user()->profile)
                                    <p class="card-title text-center fw-5 f-p">Nickname:
                                        {{ Auth::user()->profile->nickname }}</p>
                                    <p class="card-text text-center f-s mt-2">Cognome: {{ Auth::user()->profile->surname }}
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
                                <a href="{{ route('userProfileModule') }}" class="btn bgmy4 f-p m-3">Modifica dati</a>
                            </div>
                            @else
                                <a href="{{ route('userProfileModule') }}" class="btn bgmy4 f-p m-3">Completa il tuo Profilo</a>
                            </div>
                            @endif

                            @if (Auth::user()->is_revisor)
                                <a class="btn f-p bgmy3 mt-4" href="{{ route('recheck') }}">Annunci revisionati</a>
                            @endif
                        </div>
                    </div>

                </div>
            </div>

        {{-- Fine Area Dettagli Utente --}}


        {{-- Sezione annunci --}}
        <div class="col-12 col-lg-9">
            {{-- Intitolazione --}}
            <div class="container-fluid">
                <div class="row justify-content-center my-4">
                    <div class="col-9 justify-content-center d-flex align-items-center">
                        <h1 class="fw-bold f-p ">Ciao {{ Auth::user()->name }}</h1>
                    </div>
                </div>
            </div>

            {{-- Card generica --}}
            @if (Auth::user()->is_revisor)
            <h2> Annunci da revisionare 
            <span class="btn rounded-5 fw-bold bgmy3"> {{ App\Models\Announcement::toBeRevisionedCount() }}<span
                    class="visually-hidden f-p">Messaggi non letti</span> </span></h2>

            
            <x-announcements-revisor :announcement="$announcement"/>
            @endif


            {{-- Fine Area Revisore --}}
            {{-- Inizio area annunci caricati dall'User --}}
            <h2 class="text-center mt-3">I tuoi annunci </h2>
            <x-announcements-user1/>
        </div>

    </div>
</div>

</x-layout>
