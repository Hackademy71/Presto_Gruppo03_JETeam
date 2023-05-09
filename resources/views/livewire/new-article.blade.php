<div>
    <form wire:submit.prevent="createArticle">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" class="form-control" wire:model.lazy="name">
            @error('name') <span class="error">{{ $message }}</span> @enderror
        </div>
        
        <div class="form-floating mb-3">
            @error('description') <span class="error">{{ $message }}</span> @enderror
            <textarea wire:model.lazy="description" class="form-control" placeholder="scrivi la descrizione" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Descrivi il prodotto</label>
        </div>

        <div>
            @error('price') <span class="error">{{ $message }}</span> @enderror
            <label class="form-label">Prezzo</label>
            <input type="number" class="form-control" wire:model.lazy="price">
        </div>
        <button type="submit" class="btn btn-primary">Inserisci articolo</button>
    </form>
</div>
