<div class="w-full p-2 flex flex-row justify-between items-center relative">
    <label for="fileInput" class="font-semibold text-sm cursor-pointer bg-gray-200 hover:bg-gray-300 py-2 px-4 rounded-lg shadow-md transition-colors duration-300 ease-in-out">
        {{$slot}}
    </label>
    <input wire:change.debounce.1000ms="optionsHandle('{{ $section }}' ,'{{ $index }}',$event.target.files[0])" wire:model="photo" type="file" class="opacity-0 absolute left-0" />
</div>
