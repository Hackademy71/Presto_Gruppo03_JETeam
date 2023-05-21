<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 mb-3">
                <h3 class="f-s fw-bold text-center mt-4">Completa il profilo</h3>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-sm-5 mx-0">
                    <div class="card-login d-flex justify-content-center align-items-center">
                        <div class="card-content">
                            <form action="{{ Auth::user()->profile ? route('profileUpdate') : route('postProfile') }}"
                                method="POST">
                                @csrf
                                @if (Auth::user()->profile)
                                    @method('PUT')
                                @endif
                                <div class="mb-3">
                                    <label class="form-label">Nickname</label>
                                    <input type="text" class="form-control" name="nickname"
                                        @if (Auth::user()->profile) value="{{ Auth::user()->profile->nickname }}" @endif>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Cognome</label>
                                    <input type="text" class="form-control" name="surname"
                                        @if (Auth::user()->profile) value="{{ Auth::user()->profile->surname }}" @endif>
                                </div>
                                <div class="mb-3">
                                    <label class="f-p form-label my-3" for="gender">Sesso:</label>
                                    <select name="gender" id="gender" class="form-control color-gender">

                                        {{-- @if (Auth::user()->profile) @selected({{Auth::user()->profile->gender}}) @endif --}}

                                        <option class="f-s color-gender my-3" value="Preferisco non specificarlo">
                                            Preferisco non
                                            specificarlo</option>
                                        <option class="f-p"value="M">Maschile</option>
                                        <option class="f-p"value="F">Femminile</option>
                                        <option class="f-p"value="NB">Non Binario</option>
                                    </select>
                                </div>
                                {{-- <div class="mb-3">
                                    <label class="form-label">Sesso</label>
                                    <input type="text" class="form-control" name="gender">
                                </div> --}}
                                <div class="mb-3">
                                    <label class="form-label">Stato (Es. US->UnitedStates, IT->Italia) </label>
                                    <input type="text" class="form-control" name="state"
                                        @if (Auth::user()->profile) value="{{ Auth::user()->profile->state }}" @endif>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Città </label>
                                    <input type="text" class="form-control" name="city"
                                        @if (Auth::user()->profile) value="{{ Auth::user()->profile->city }}" @endif>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Indirizzo</label>
                                    <input type="text" class="form-control" name="address"
                                        @if (Auth::user()->profile) value="{{ Auth::user()->profile->address }}" @endif>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">CAP</label>
                                    <input type="number" class="form-control" name="CAP"
                                        @if (Auth::user()->profile) value="{{ Auth::user()->profile->CAP }}" @endif>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">N. telefono</label>
                                    <input type="number" class="form-control" name="tel_number"
                                        @if (Auth::user()->profile) value="{{ Auth::user()->profile->tel_number }}" @endif>
                                </div>
                                <div class="mb-3 form-check">
                                    <div class="col-12">
                                        <input type="checkbox" class="form-check-input justify-content-end"
                                            id="contactMethod" name="contactMethod">
                                        {{-- @if (Auth::user()->profile) @selected({{Auth::user()->profile->contactMetod}}) @endif> --}}
                                        <label for="contactMethod" class="form-check-label f-s justify-content-start">
                                            Voglio
                                            condividere il mio numero con gli utenti interessati ai miei annunci</label>
                                    </div>
                                </div>
                                {{-- Da inserire select per metodo di contatto --}}
                                @if (Auth::user()->profile)
                                    <button type="submit" class="btn bgmy4 ">Modifica i tuoi dati profilo</button>
                                @else
                                    <button type="submit" class="btn bgmy4">Completa profilo</button>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-layout>
