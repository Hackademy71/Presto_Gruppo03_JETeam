<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 mb-3">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 mt-4 mb-3">
                            <h3 class="f-s fw-bold text-center">Se ancora non hai un profilo,</h3>
                            <h3 class="f-s fw-bold text-center">compila il form per registrarti!</h3>
                        </div>
                    </div>
                </div>
                <div class="card-login d-flex justify-content-center align-items-center">
                    <div class="card-content">
                        
                        <form class="mt-2"method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="mb-3 text-center">
                                <label class="form-label f-p">Nome Profilo</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="name1">
                                @error('name1')
                                    <span class="f-s error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 text-center">
                                <label for="exampleInputEmail1" class="form-label f-p">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="email1">
                                @error('email1')
                                    <span class="f-s error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 text-center">
                                <label for="exampleInputPassword1" class="form-label f-p">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="password1">
                                @error('password1')
                                    <span class="f-s error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 text-center">
                                <label for="exampleInputPassword1" class="form-label f-p">Conferma Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1"
                                    name="password_confirmation1">
                                @error('password_confirmation1')
                                    <span class="f-s error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn bgmy3 f-s text fw-bold">Registrati</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- INIZIO FORM DI ACCESSO a DX --}}
            <div class="col-sm-6 mx-auto justify-content-center">
                <div class="container-fluid mt-4 mb-2">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1 class="f-s text-center mt-4 mb-3">Accedi</h1>
                        </div>
                    </div>
                </div>

                <div class="card-login d-flex justify-content-center align-items-center">
                    <div class="card-content">
                        {{-- <h3 class="f-s text-center">
                            Accedi
                        </h3> --}}
                        <form class="mt-2" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group mb-3 text-center">
                                <label for="InputEmail1" class="form-label">
                                    <p class="f-p ">Email</p>
                                </label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="email">
                                @error('email')
                                    <span class="f-s error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-3 text-center">
                                <label for="InputPassword1" class="form-label f-p">
                                    <p>Password</p>
                                </label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                                @error('password')
                                    <span class="f-s error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            {{-- <div class="row d-flex">
                                Tasto "ricordati di me" da avvicinare botton a scritta
                                <div class="mb-3 form-check">
                                    <div class="col-12">
                                        <input type="checkbox" class="form-check-input justify-content-end" id="RememberMe" name="remember">
                                        <label for="RememberMe" class="form-check-label f-s justify-content-start"> Ricordati di me</label>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="text-center">
                                <button type="submit" class="btn bgmy3 f-s text fw-bold">Login</button>

                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>

    </div>

</x-layout>
