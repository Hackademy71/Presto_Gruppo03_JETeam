<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 mt-4 mb-3">
                <h1 class="f-s text-center">Accedi</h1>
            </div>
        </div>
    </div>   

    <div class="container">
        <div class="row">
            <div class="col-sm-12 mx-auto">
                <div class="card-login d-flex justify-content-center align-items-center">
                    <div class="card-content">
                        <h3 class="f-s text-center">
                            Accedi
                        </h3>
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
                            <div class="mb-3 form-check">
                                <label for="exampleCheck1" class="form-check-label f-s"> Ricordati di me</label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember">
                            </div>
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
