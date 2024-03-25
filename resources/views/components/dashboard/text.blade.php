<div class="w-full p-2 flex flex-col items-start gap-2">
    <p class="font-semibold text-sm">
        {{$slot}}
    </p>
    <input class="w-full h-8 bg-gray-300 border border-gray-400 p-2 rounded-sm" type="text" value="{{ $attributes['value'] }}">
</div>
