<x-layout>


    <div class="container">
        <div class="row">
            <div class="col-sm-12 mx-auto">
                <div class="card-login d-flex justify-content-center align-items-center">
                    <div class="card-content">
                            <div class="my-5">
                                <h3>compila il form per completare il tuo profilo</h3>
                                {{-- form completamento profilo --}}
                                <form action="{{route('postProfile')}}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label">Cognome</label>
                                        <input type="text" class="form-control" name="surname">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Indirizzo</label>
                                        <input type="text" class="form-control" name="address">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Sesso</label>
                                        <input type="text" class="form-control" name="gender">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">CAP</label>
                                        <input type="number" class="form-control" name="CAP">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">N. telefono</label>
                                        <input type="number" class="form-control" name="tel_number">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">citta' </label>
                                        <input type="text" class="form-control" name="city">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Stato (Es. US->UnitedStates, IT->Italia) </label>
                                        <input type="text" class="form-control" name="state">
                                    </div>
                                    {{-- Da inserire select per metodo di contatto --}}
                                    <button type="submit" class="btn btn-primary">Completa profilo</button>
                                </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</x-layout>
