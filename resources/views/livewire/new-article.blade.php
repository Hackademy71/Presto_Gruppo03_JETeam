<div>
    <form wire:submit.prevent="store">
        @csrf
        @if (session()->has('message'))
        <div>
            {{session('message')}}
        </div>
        @endif
        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" class="form-control" wire:model.lazy="name">
            @error('name') <span class="error">{{ $message }}</span> @enderror
        </div>
        
        <div class="form-floating mb-3">
            <textarea wire:model.lazy="description" class="form-control" placeholder="scrivi la descrizione" id="floatingTextarea2" 
            style="height: 100px"></textarea>
            <label for="floatingTextarea2">Descrivi il prodotto</label>
            @error('description') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="form-label">Prezzo</label>
            <input type="number" class="form-control" wire:model.lazy="price">
            @error('price') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <label for="category">Categoria</label>
                        <select wire:model.defer="category" id="category" class="form-control">
                            <option value="">Scegli la categoria</option>
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}} </option>              
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary" >Inserisci articolo</button>
    </form>
</div>
