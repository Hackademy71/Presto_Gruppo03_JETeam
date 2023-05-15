<div>
    <h1 class="f-p">Crea il tuo annuncio!</h1>
    
    <form wire:submit.prevent="store">
        <div class="mb-3">
            <label class="form-label f-p">Titolo Annuncio</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" wire:model.lazy="name">
            @error('name') <span class="f-s error text-danger">{{ $message }}</span> @enderror
        </div>
        
        <div class="form-floating mb-3">
            <textarea wire:model.lazy="description" class="form-control f-p @error('description') is-invalid @enderror" placeholder="scrivi la descrizione" id="floatingTextarea2" 
            style="height: 100px"></textarea>
            <label for="floatingTextarea2">Descrivi il prodotto</label>
            @error('description') <span class="f-s error text-danger">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="form-label">Prezzo</label>
            <input type="number" class="form-control f-p @error('price') is-invalid @enderror" wire:model.lazy="price">
            @error('price') <span class="f-s error text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <label class="f-p"for="category">Categoria</label>
                        <select wire:model.defer="category" id="category" class="form-control">
                            
                            <option class="f-s"value="">Scegli la categoria</option>
                            @foreach ($categories as $category)
                            <option class="f-p"value="{{$category->id}}">{{$category->name}}</option>              
                            @endforeach
                        </select>
                        @error('category') <span class=" text-danger f-s error">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>
        </div>
        <button type="button" wire:click="store" class=" f-p btn btn-primary" >Inserisci articolo</button>
    </form>
</div>
