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
                        <label class="form-label f-p">Titolo Annuncio</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                            wire:model.lazy="name">
                        @error('name')
                            <span class="f-s error text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-floating mb-3">
                        <textarea wire:model.lazy="description" class="form-control f-p @error('description') is-invalid @enderror"
                            placeholder="scrivi la descrizione" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Descrivi il prodotto</label>
                        @error('description')
                            <span class="f-s error text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label class="form-label mb-3">Prezzo</label>
                        <input type="number" class="form-control f-p @error('price') is-invalid @enderror"
                            wire:model.lazy="price">
                        @error('price')
                            <span class="f-s error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <label class="f-p" for="category">Categoria</label>
                                    <select wire:model.defer="category" id="category"
                                        class="form-control color-category">

                                        <option class="f-s color-category"value="">Scegli la categoria</option>
                                        @foreach ($categories as $category)
                                            <option class="f-p"value="{{ $category->id }}">{{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('category')
                                        <span class=" text-danger f-s error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <input wire:model="temporary_images" type="file" name="images" multiple
                                        class="form-control shadow @error('temporary_images.*') is-invalid @enderror"
                                        placeholder="Img" />
                                    @error('temporary_images.*')
                                        <p class="text-danger mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                @if (!empty($images))
                                    <div class="row">
                                        <div class="col-12">
                                            <p>Photo Preview</p>
                                            <div class="row border border-4 border-info rounded shadow py-4">
                                                @foreach ($images as $key => $image)
                                                    <div class="col my-3">
                                                        <div class="img-fluid mx-auto shadow rounded"
                                                            style="background-image:url({{ $image->temporaryUrl() }});">
                                                        </div>
                                                        <button type="button"
                                                            class="btn btn-danger shadow d-block text-center mt-2 mx-auto"
                                                            wire:click="removeImage({{ $key }})">Cancella</button>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <button type="button" wire:click="store" class=" f-p btn bgmy4">Inserisci articolo</button>
                </form>
            </div>
        </div>
    </div>
</div>
