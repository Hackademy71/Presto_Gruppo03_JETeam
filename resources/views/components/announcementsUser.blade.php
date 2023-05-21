

@foreach ($announcements['user'] as $announcement)
                        <div class="col-sm-4 d-flex justify-content-center mt-4 align-items-center">
                            <div class="card card-border" style="width: 18rem;">
                                <img src="{{ !$announcement->images()->get()->isEmpty()? $announcement->images()->first()->getUrl(400, 300): 'https://picsum.photos/200' }}"
                                    class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title f-p">{{ $announcement->name }}</h5>
                                    <p class="card-text f-s">{{ $announcement->description }}</p>
                                    <p class="card-text f-s">{{ $announcement->price }} €</p>
                                    <p class="card-text f-s">Aggiunto il
                                        {{ $announcement->created_at->format('d/m/Y') }}</p>
                                    {{-- <a href="{{ route('categoryShow', ['category' => $announcement->category]) }}"
                                        class="btn bgmy4 f-p">Categoria:
                                        {{ $announcement->category->name }}</a> --}}
                                    <div class="container-fluid">
                                        <div class="row d-flex justify-content-between">
                                            <div class="col-sm-3">
                                                <a href="{{ route('detArticle', compact('announcement')) }}"
                                                    class="btn bgmy4 f-p">Dettaglio</a>
                                            </div>
                                            <div class="col-sm-3">
                                                <a href="{{ route('modifyAnnouncement', compact('announcement')) }}"
                                                    class="btn bgmy4 f-p">Modifica</a>
                                            </div>
                                            <div class="col-sm-3">
                                                <form class="" action="{{ route('defDelete', compact('announcement')) }}"                                              method="POST">
                                                    @csrf
                                                    <button class="btn bgmy4 f-p" type="submit">Elimina</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-sm-12 d-flex justify-content-center">
                            <div class="fw-bold mt-4">
                                {{ $announcements['user']->links() }}
                                
                            </div>
                        </div>
                        
                    </div>
                </div>