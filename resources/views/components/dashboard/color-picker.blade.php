<div class="w-full p-2 flex flex-row justify-between items-center">
    <p class="font-semibold text-sm">
        {{$slot}}
    </p>
    <div class="relative">
        <div id="color-preview" class="w-8 h-8 cursor-pointer absolute top-0 left-0 border border-slate-300 rounded-md"></div>
        <input onchange="colorPicker(this)" type="color" class="w-8 h-8 cursor-pointer border-none opacity-0">
    </div>
</div>
