<div class="container-fluid alert alert-warning" role="alert">
    <div class="row">
        <div class="col-sm-12 text-center">
            <div>
                <h1 class="f-p">Non sono presenti annunci in questa categoria</h1>
                <h2 class="f-p">Sii il primo</h2>
                <a class="btn bgmy4 f-p" href="{{ route('articleNew') }}">Inserisci articolo</a>
                <h3 class="f-p">Altre categorie</h3>
            </div>
        </div>
        <div class="row">
            <ul class="list-group" style="flex-direction: row">
                @foreach ($categories as $category)
                <div class="col-12 col-lg-6 text-center">
                        <li class="list-group-item">
                            <a class="tx-color nav-link"
                                href="{{ route('categoryShow', compact('category')) }}">{{ $category->name }}</a>
                        </li>
                    </div>
                    @endforeach
                </ul>
        </div>

    </div>
</div>
