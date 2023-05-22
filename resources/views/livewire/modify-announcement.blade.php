<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="f-p text-center mt-4">Crea il tuo annuncio!</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-4">

                <form wire:submit.prevent="store">
                    <div class="mb-3">
                        <label class="form-label my-3 f-p">Titolo Annuncio</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                            wire:model.lazy="name" >
                        @error('name')
                            <span class="f-s error text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <label class="form-label my-3 f-p" for="descriptInsArea">Descrivi il prodotto</label>
                    <div class="form-floating mb-3">
                        <textarea wire:model.lazy="description" class="form-control f-p @error('description') is-invalid @enderror"
                             id="descriptInsArea" style="height: 100px"></textarea>
                        @error('description')
                            <span class="f-s error text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label class="form-label f-p my-3">Prezzo</label>
                        <input type="number" class="form-control f-p @error('price') is-invalid @enderror"
                            wire:model.lazy="price">
                        @error('price')
                            <span class="f-s error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12">
                        <label class="f-p form-label my-3" for="category">Categoria</label>
                        <select wire:model.defer="catAnnouncement" id="category" class="form-control color-category">

                            <option class="f-s color-category my-3">Scegli la categoria</option>
                            @foreach ($categories as $category)
                            <option class="f-p" value="{{ $category->id }}">{{ $category->name }}
                                
                                </option>
                            @endforeach
                        </select>
                        @error('category')
                            <span class=" text-danger f-s error">{{ $message }}</span>
                        @enderror
                    </div>
                    
                </form>
                <div class="col-sm-12 d-flex justify-content-center my-5">
                    <button type="button" wire:click="store" class=" f-p btn bgmy4">Modifica articolo</button>
                </div>
            </div>
        </div>
    </div>
</div>