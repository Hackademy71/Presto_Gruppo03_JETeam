<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
    <form method="POST" action="{{route('login')}}">
        @csrf
        <div class="mb-3">
          <label for="InputEmail1" class="form-label f-p">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        @error('email') <span class="f-s error text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
          <label for="InputPassword1" class="form-label f-p">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        @error('password') <span class="f-s error  text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3 form-check">
          <label for="exampleCheck1" class="form-check-label f-s"> Ricordati di me</label>
          <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember">
        </div>        
        <button type="submit" class="btn bgmy3 f-p">Login</button>
      </form>
    </div>
    </div>
</div>

</x-layout>