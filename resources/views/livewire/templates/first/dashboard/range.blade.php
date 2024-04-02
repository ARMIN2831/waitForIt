<div class="w-full p-2 flex flex-row justify-between items-center">
    <p class="font-semibold text-sm">
        {{$slot}}
    </p>
    <span id="rangeValue" class="text-sm">{{ $value }}{{ $key }}</span>
    <input wire:change="optionsHandle('{{ $section }}' ,'{{ $index }}',$event.target.value)" class="cursor-pointer" onchange="changeRange(this,'{{ $key }}')" type="range" min="{{ $min }}" max="{{ $max }}" value="{{ $value }}">
</div>

