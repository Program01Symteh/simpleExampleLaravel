<x-form-section submit="saveArticle">
    <x-slot name="title">
        Создать статью
    </x-slot>

    <x-slot name="description">
        :)
        @if ($image)
            Photo Preview:
            <img src="{{ $image->temporaryUrl() }}">
        @endif
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-label for="title" value="Заголовок" />
            <x-input id="title" name="title" type="text" wire:model="title" class="mt-1 block w-full" autocomplete="title" />
            <x-input-error for="title" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="content" value="Контент" />
            <x-input id="content" type="text" wire:model="content" class="mt-1 block w-full" autocomplete="content" />
            <x-input-error for="content" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="image" value="Фотография" />
            <x-input id="image" type="file" wire:model="image" class="mt-1 block w-full" autocomplete="image" />
            <x-input-error for="image" class="mt-2" />
        </div>

    </x-slot>

    <x-slot name="actions">
        <x-button>
            Сохранить
        </x-button>
    </x-slot>
</x-form-section>