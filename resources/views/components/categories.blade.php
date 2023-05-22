<div class="container-fluid alert alert-warning" role="alert">
    <div class="row">"
        <div class="col-sm-12 text-center">
            <div>
                <h1 class="f-p">Non sono presenti annunci in questa categoria</h1>
                <h2 class="f-p">Sii il primo</h2>
                <a class="btn bgmy4 f-p" href="{{ route('articleNew') }}">Inserisci articolo</a>
                <h3 class="f-p">Altre categorie</h3>
            </div>
        </div>
        <div class="row">
            <ul class="list-group list-group-horizontal-sm justify-content-center" style="list-group">
                @foreach ($categories as $category)
                <nav class="nav">
                    <a class="nav-link tx-color" href="{{ route('categoryShow', compact('category')) }}">{{ $category->name }}</a>                    
                </nav>               
                    @endforeach
                </ul>
        </div>

    </div>
</div>
