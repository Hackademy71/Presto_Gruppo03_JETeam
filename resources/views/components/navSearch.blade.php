<nav class="navbar bgmy1">
    <div class="container-fluid">
      {{-- <a class="navbar-brand">Navbar</a> --}}
        <img class="navbar-brand logoimg" src="./img/logo.png" width="50" alt="">
          
      <form class="d-flex" role="search" action="{{ route('searchAnn') }}" method="GET">
        @csrf
          <input class="f-s form-control m-2 shwi rounded" type="search" placeholder="Search" aria-label="Search" name="searched">
          <button class="btn btn-outline bgoutline3 m-2 h-75" type="submit"><i class="bi bi-search"></i></button>
      </form>
    </div>
  </nav>