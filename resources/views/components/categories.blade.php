<div class="containeralert alert-warning" role="alert">
    <div class="row">
        <div class="col-sm-12 text-center">
            <div>
                <h1 class="f-p">Non sono presenti annunci in questa categoria</h1>
                <h2 class="f-p">Sii il primo</h2>
                <a class="btn bgmy4 f-p" href="{{ route('articleNew') }}">Inserisci articolo</a>
                <h3 class="f-p">Altre categorie</h3>
            </div>
        </div>
        <div class="col-sm-12 text-center">
            <ul class="list-group" style="flex-direction: row;">
                @foreach ($categories as $category)
                    <li><a class="list-group-item tx-color"
                            href="{{ route('categoryShow', compact('category')) }}">{{ $category->name }}</a>
                    </li>
                @endforeach
            </ul>

        </div>
    </div>
</div>
