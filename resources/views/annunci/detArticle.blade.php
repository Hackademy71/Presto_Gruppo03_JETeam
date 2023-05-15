<x-layout>
    <h1>Dettaglio</h1>
    <div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://picsum.photos/200" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://picsum.photos/200" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://picsum.photos/200" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <div class="card text-center">
        <div class="card-header">
          {{$announcement->name}}
        </div>
        <div class="card-body">
          <h5 class="card-title f-p">Descrizione</h5>
          <p class="card-text f-s">{{$announcement->description}}</p>
          <p class="card-text f-s">Prezzo: {{$announcement->price}}</p>
          <p class="card-text f-s">Caricato da: {{$announcement->user->name}}</p>
          <a href="#" class="btn bgmy4 f-p">Contatta venditore</a>
        </div>
        <div class="card-footer text-muted f-s">
          Aggiunto il {{$announcement->created_at}}
        </div>
      </div>
     </div>
    
</x-layout>