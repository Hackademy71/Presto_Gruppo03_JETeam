<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 mt-4 mb-3">
                <h1 class="f-s text-center">Registrati</h1>
                <h3 class="f-s text-center">Entra anche tu nel mondo di presto.it</h3>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 mx-auto">
                <div class="card-login d-flex justify-content-center align-items-center">
                    <div class="card-content">
                        {{-- <h3 class="f-s text-center">
                      Registrati
                  </h3> --}}
                        <form class="mt-2"method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="mb-3 text-center">
                                <label class="form-label f-p">Nome</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="name">
                                @error('name')
                                    <span class="f-s error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 text-center">
                                <label for="exampleInputEmail1" class="form-label f-p">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="email">
                                @error('email')
                                    <span class="f-s error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 text-center">
                                <label for="exampleInputPassword1" class="form-label f-p">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                                @error('password')
                                    <span class="f-s error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 text-center">
                                <label for="exampleInputPassword1" class="form-label f-p">Conferma Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1"
                                    name="password_confirmation">
                                @error('password_confirmation')
                                    <span class="f-s error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn bgmy3 f-p text fw-bold">Registrati</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
