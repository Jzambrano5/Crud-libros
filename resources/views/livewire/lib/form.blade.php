<div class="space-y-6">
    
    <div>
        <x-input-label for="titulo" :value="__('Titulo')"/>
        <x-text-input wire:model="form.titulo" id="titulo" name="titulo" type="text" class="mt-1 block w-full" autocomplete="titulo" placeholder="Titulo"/>
        @error('form.titulo')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="genero" :value="__('Genero')"/>
        <x-text-input wire:model="form.genero" id="genero" name="genero" type="text" class="mt-1 block w-full" autocomplete="genero" placeholder="Genero"/>
        @error('form.genero')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="year_publicacion" :value="__('Year Publicacion')"/>
        <x-text-input wire:model="form.year_publicacion" id="year_publicacion" name="year_publicacion" type="text" class="mt-1 block w-full" autocomplete="year_publicacion" placeholder="Year Publicacion"/>
        @error('form.year_publicacion')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="id_autor" :value="__('Id Autor')"/>
        <x-text-input wire:model="form.id_autor" id="id_autor" name="id_autor" type="text" class="mt-1 block w-full" autocomplete="id_autor" placeholder="Id Autor"/>
        @error('form.id_autor')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>