<x-layout>


    <div class="container">
        <div class="row">
            <div class="col-sm-12 mx-auto">
                <div class="card-login d-flex justify-content-center align-items-center">
                    <div class="card-content">
                        {{-- <h3 class="f-s text-center">
                      Registrati
                  </h3> --}}
                  <h2>Qui puoi modificare i tuoi dati {{Auth::user()->name}}</h2>
                        <form class="mt-2"method="POST" action="{{ route('storeProfile') }}">
                            @csrf
                            @method('patch')
                            <div class="mb-3 text-center">
                                <label class="form-label f-p">Nickname</label>
                                <input type="text" class="form-control" name="nickname">
                            </div>
                            <div class="mb-3 text-center">
                                <label class="form-label f-p">Cognome</label>
                                <input type="text" class="form-control"
                                    name="surname">
                            </div>
                            <div class="mb-3 text-center">
                                <label class="form-label f-p">Città di Residenza</label>
                                <input type="text" class="form-control" name="city">
                              
                            </div>
                            <div class="mb-3 text-center">
                                <label class="form-label f-p">Stato</label>
                                <input type="text" class="form-control" name="state">
                            </div>
                            <div class="mb-3 text-center">
                                <label class="form-label f-p">CAP</label>
                                <input type="number" class="form-control"
                                    name="cap">
                            </div>
                            <div class="mb-3 text-center">
                                <label class="form-label f-p">Indirizzo</label>
                                <input type="text" class="form-control"
                                    name="address">
                            </div>
                            <div class="mb-3 text-center">
                                <label class="form-label f-p">Genere</label>
                                <input type="text" class="form-control"
                                    name="gender">
                            </div>
                            <div class="mb-3 text-center">
                                <label class="form-label f-p">Numero di telefono</label>
                                <input type="number" class="form-control"
                                    name="tel_number">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn bgmy3 f-p text fw-bold"></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>