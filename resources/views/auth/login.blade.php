<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
    <form method="POST" action="{{route('login')}}">
        @csrf
        <div class="mb-3">
          <label for="InputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
         
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>
        
        <button type="submit" class="btn btn-primary">Login</button>
      </form>
    </div>
    </div>
</div>

</x-layout>