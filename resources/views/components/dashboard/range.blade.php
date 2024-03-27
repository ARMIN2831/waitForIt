<div class="w-full p-2 flex flex-row justify-between items-center">
    <p class="font-semibold text-sm">
        {{$slot}}
    </p>
    <span id="rangeValue" class="text-sm">{{ $attributes['value'] }}{{ $attributes['key'] }}</span>
    <input wire:change="optionsHandle('{{ $attributes['section'] }}' ,'{{ $attributes['index'] }}',$event.target.value)" class="cursor-pointer" onchange="changeRange(this,'{{ $attributes['key'] }}')" type="range" min="{{ $attributes['min'] }}" max="{{ $attributes['max'] }}" value="{{ $attributes['value'] }}">
</div>

