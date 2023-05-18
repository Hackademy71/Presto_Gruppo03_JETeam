<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="f-p text-center mt-4">Crea il tuo annuncio!</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-4">

                <form wire:submit.prevent="update">
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
                        <select wire:model.defer="category" id="category" class="form-control color-category">

                            <option class="f-s color-category my-3" value="">Scegli la categoria</option>
                            @foreach ($categories as $category)
                                <option class="f-p"value="{{ $category->id }}">{{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('category')
                            <span class=" text-danger f-s error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="my-3">
                        <p class="f-p my-3">Aggiungi delle foto al tuo annuncio</p>
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
                                <p>Anteprima Foto</p>
                                <div class="row border border-4 border-info rounded shadow py-4">
                                    @foreach ($images as $key => $image)
                                        <div class="col my-3">
                                            <div class="img-preview mx-auto shadow rounded">
                                                {{-- style="background-image:url({{ $image->temporaryUrl() }}) cover;"> --}}
                                                <img class="img-fluid" src="{{$image->temporaryUrl()}}" alt="">
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
                </form>
                <div class="col-sm-12 d-flex justify-content-center my-5">
                    <button type="button" wire:click="update" class=" f-p btn bgmy4">Modifica articolo</button>
                </div>
            </div>
        </div>
    </div>
</div>