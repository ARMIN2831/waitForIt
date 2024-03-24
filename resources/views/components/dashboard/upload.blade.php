<div class="w-full p-2 flex flex-row justify-between items-center">
    <label for="fileInput" class="font-semibold text-sm cursor-pointer bg-gray-200 hover:bg-gray-300 py-2 px-4 rounded-lg shadow-md transition-colors duration-300 ease-in-out">
        {{$slot}}
    </label>
    <input id="fileInput" type="file" class="hidden" />
</div>
