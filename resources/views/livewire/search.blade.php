<div>
    <h2 class="text-xl text-gray-500">Search Form</h2>

    {{-- <input wire:model="searchText" type="text" class="shadow appearance-none border rounded py-2 px-3 text-gray-700 lead mb-5"> --}}

    {{-- delay ajax request by 500ms --}}
    {{-- <input wire:model.debounce.500ms="searchText" type="text" class="shadow appearance-none border rounded py-2 px-3 text-gray-700 lead mb-5"> --}}

    {{-- execute ajax request when input looses focus  --}}
    {{-- <input wire:model.lazy="searchText" type="text" class="shadow appearance-none border rounded py-2 px-3 text-gray-700 lead mb-5"> --}}

    {{-- execute ajax request when a function is called  --}}
    <input wire:model.defer="searchText" type="text" class="shadow appearance-none border rounded py-2 px-3 text-gray-700 lead mb-5">
    <br>

    <button wire:click="searchBtn" class="bg-gray-500 rounded text-white px-3 py-2">Search</button>
    <br>

    {{ $searchText }}

</div>
