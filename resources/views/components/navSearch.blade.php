<nav class="navbar bg-light">
    <div class="container-fluid">
      {{-- <a class="navbar-brand">Navbar</a> --}}
      <img class="navbar-brand" src="./img/logo.png" width="50" alt="">
          
      <form class="d-flex" role="search" action="{{ route('searchAnn') }}" method="GET">
        @csrf
          <input class="form-control m-2 shwi" type="search" placeholder="Search" aria-label="Search" name="searched">
          <button class="btn btn-outline bgoutline m-2 h-75" type="submit"><i class="bi bi-search"></i></button>
      </form>
    </div>
  </nav>