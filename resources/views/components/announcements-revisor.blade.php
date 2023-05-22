
    <!-- You must be the change you wish to see in the world. - Mahatma Gandhi -->
    {{-- Card generica --}}
    <div class="card-login">
        {{-- @dd($announcement) --}}

        @if (Auth::user()->is_revisor)
            <div class="container-fluid">
                @if ($announcement==null)
                    <div class="row justify-content-center">
                        <div class="col-12 d-flex bg-success border justify-content-center  align-items-center">
                            {{-- <p class="text-white">{{ $message }}</p> --}}
                            <p class="text-white">Non ci sono annunci da revisionare!</p>
                        </div>
                        <div class="col-12 d-flex justify-content-center">
                            <a class="tx-color nav-link" href="{{ route('recheck') }}">Vai agli annunci
                                che
                                hai revisionato</a>
                        </div>
                    </div>
                @else
                    <div class="row">
                        <div class="col-sm-6">
                            <div id="announcement-{{ $announcement->id }}" class="carousel slide"
                                data-bs-ride="true">
                                {{-- <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#announcement-{{$announcement->id}}" data-bs-slide-to="0"
                                        class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#announcement-{{$announcement->id}}" data-bs-slide-to="1"
                                        aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#announcement-{{$announcement->id}}" data-bs-slide-to="2"
                                        aria-label="Slide 3"></button>
                                </div> --}}
                                @if ($announcement->images()->get()->isNotEmpty())
                                    <div class="carousel-inner">
                                        @foreach ($announcement->images as $image)
                                            <div
                                                class="carousel-item @if ($loop->first) active @endif">
                                                <img src="{{ $announcement->images()->first()->getUrl(400, 300) }}"
                                                    class="img-fluid p-3 rounded" alt="...">
                                            </div>
                                        @endforeach
                                    </div>
                                @else
                                    <div class="carousel-inner">
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
                                @endif
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#announcement-{{ $announcement->id }}"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon text-dark"
                                        aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#announcement-{{ $announcement->id }}"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon text-dark"
                                        aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-sm-6 ">
                        <div class="row">

                            <h5 class="mt-2 tc-accent">Tags</h5>
                            <div class="col-md-3 border-end">
                                <h5 class="mt-2 tc-accent">Tags</h5>
                                <div class="p-2">
                                    @if($image->labels)
                                    @foreach($image->labels as $label)
                                    <p class="d-inline">{{$label}},</p>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card-body">
                                    <h5 class="tc-accent">Revisione Immagini</h5>
                                    <p>Adulti: <span class="{{$image->adult}}"></span></p>
                                    <p>Satira: <span class="{{$image->spoof}}"></span></p>
                                    <p>Medicina: <span class="{{$image->medical}}"></span></p>
                                    <p>Violenza: <span class="{{$image->violence}}"></span></p>
                                    <p>Contenuto Ammiccante: <span class="{{$image->racy}}"></span></p>
                                </div>
                            </div>
                        </div>
                            
                        </div>    
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="f-s text-center fw-bold mt-5">
                                {{ $announcement->name }}
                            </h2>
                            <p class="fs-3 text-center mt-4">
                                €{{ $announcement->price }}
                            </p>
                            <h5 class="f-s text-center mt-4">
                                {{ $announcement->description }}
                            </h5>
                            <p class="fs-3 text-center mt-4">
                               
                            </p>
                            <p class="fs-3 text-center mt-4">
                                Aggiunto il:
                                {{ $announcement->created_at->format('d/m/Y') }}
                            </p>

                            <div class="d-grid gap-2 d-md-block">
                                <a class="btn bgmy4 mt-2" href="{{ route('refuseAnnouncement', compact('announcement')) }}" >Rifiuta</a>
                                <a class="btn bgmy4 mt-2" href="{{ route('acceptAnnouncement', compact('announcement')) }}" >Approva</a>                                        
                              </div>
                        </div>
                    </div>


                @endif
            </div>
</div>
@endif
