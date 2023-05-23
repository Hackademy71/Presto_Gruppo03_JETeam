{{-- Card generica --}}

<div class="card-login">

        <div class="container-fluid">
            
            @if ($announcement == 'is_empty')
                <div class="row justify-content-center">
                    <div class="col-12 bgmy4 border justify-content-center align-items-center rounded ">
                        {{-- <p class="text-white">{{ $message }}</p> --}}
                        <p class="text-center mt-3">Non ci sono annunci da revisionare!</p>
                    </div>
                    <div class="col-12 d-flex justify-content-center mt-2">
                        <a class="tx-color nav-link" href="{{ route('recheck') }}">Vai agli annunci che hai revisionato</a>
                    </div>
                </div>
            @else
            @if ($announcement->user_id!==Auth::user()->id)
                <div class="row">
                    <div class="col-sm-12">


                        @if ($announcement->images()->get()->isNotEmpty())
                            <div class="row d-flex">
                                <div id="announcement-{{ $announcement->id }}" class="carousel carousel-dark slide"
                                    data-bs-ride="true">
                                    <div class="carousel-inner">
                                        <div class="row d-flex">
                                        <div class="col-md-12">
                        <h2 class="f-s text-center fw-bold mt-1">
                            {{ $announcement->name }}
                        </h2>
                        <p class="fs-3 text-center mt-1">
                            €{{ $announcement->price }}
                        </p>
                        <h5 class="f-s text-center mt-1">
                            {{ $announcement->description }}
                        </h5>
                        <p class="fs-3 text-center mt-1">

                        </p>
                        <p class="fs-3 text-center mt-1">
                            Aggiunto il:
                            {{ $announcement->created_at->format('d/m/Y') }}
                        </p>                                           

                                            @foreach ($announcement->images as $image)
                                            <div
                                            class="carousel-item col-lg-6 @if ($loop->first) active @endif">
                                            <img src="{{ $image->getUrl(400, 300) }}" class="d-block w-100"
                                            alt="...">
                                            <div class="col-md-12">
                                                <h5 class="mt-2 f-s fw-bold">Tags</h5>
                                                <div class="p-2">
                                                    @if ($image->labels)
                                                    @foreach ($image->labels as $label)
                                                    <p class="d-inline f-s">{{ $label }},</p>
                                                    @endforeach
                                                    @endif
                                                </div>
                                                <h5 class="f-s fw-bold">Revisione Immagini</h5>
                                                <div class="card-body d-inline d-flex justify-content-between">
                                                    
                                                    <p class="f-s">Adulti: <span class="{{ $image->adult }}"></span></p>
                                                    <p class="f-s">Satira: <span class="{{ $image->spoof }}"></span></p>
                                                    <p class="f-s">Medicina: <span class="{{ $image->medical }}"></span></p>
                                                    <p class="f-s">Violenza: <span class="{{ $image->violence }}"></span></p>
                                                    <p class="f-s">Contenuto Ammiccante: <span
                                                        class="{{ $image->racy }}"></span></p>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            
                                        </div>
                                        </div>
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#announcement-{{ $announcement->id }}" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#announcement-{{ $announcement->id }}" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>

                                </div>
                                
                    </div>
                            </div>
                        @else
                        
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="announcement-{{ $announcement->id }}" class="carousel slide col-md-6"
                                        data-bs-ride="true">


                                        <div class="carousel-inner ">
                                            <div class="carousel-item active">
                                                <img src="https://picsum.photos/200" class="d-block w-100"
                                                    alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="https://picsum.photos/200" class="d-block w-100"
                                                    alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="https://picsum.photos/200" class="d-block w-100"
                                                    alt="...">
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button"
                                            data-bs-target="#announcement-{{ $announcement->id }}"
                                            data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button"
                                            data-bs-target="#announcement-{{ $announcement->id }}"
                                            data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="container-fluid">
                            <div class="row d-flex">
                             <div class="col-12 ">
                             <div class="text-center justify-content-center gap-2 d-md-block ">
                               
                                <a class="btn bgmy4 mt-2"
                                href="{{ route('acceptAnnouncement', compact('announcement')) }}">Approva</a>
                                 <a class="btn bgmy4 mt-2"
                                href="{{ route('refuseAnnouncement', compact('announcement')) }}">Rifiuta</a>
                            </div>   
                            </div>
                        </div>
                        </div>
                        

                    </div>


                </div>
                
                    
                
                @else
                <div class="row justify-content-center">
                    <div class="col-12 bgmy4 border justify-content-center align-items-center rounded ">
                        {{-- <p class="text-white">{{ $message }}</p> --}}
                        <p class="text-center mt-3">Non ci sono annunci da revisionare!</p>
                    </div>
                    <div class="col-12 d-flex justify-content-center mt-2">
                        <a class="tx-color nav-link" href="{{ route('recheck') }}">Vai agli annunci che hai revisionato</a>
                    </div>
                </div>
            @endif
            @endif
        </div>       
</div>