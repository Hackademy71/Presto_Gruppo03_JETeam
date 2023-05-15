<x-layout>
    <form method="POST" action="{{route('register')}}">
        
        @csrf
        <div class="mb-3">
          <label class="form-label f-p">Nome e Cognome</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">          
          @error('name') <span class="f-s error text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label f-p">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">          
            @error('email') <span class="f-s error text-danger">{{ $message }}</span> @enderror
          </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label f-p">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="password">
          @error('password') <span class="f-s error text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label f-p">Conferma Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password_confirmation">
          @error('password_confirmation') <span class="f-s error text-danger">{{ $message }}</span> @enderror
          </div>        
        <button type="submit" class="btn bgmy3 f-p">Registrati</button>
      </form>
</x-layout>