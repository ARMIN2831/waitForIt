<div class="w-full p-2 flex flex-col items-start gap-2">
    <p class="font-semibold text-sm">
        {{$slot}}
    </p>
    @if( $attributes['type'] and $attributes['type'] == 'checkbox')
        <input wire:change="optionsHandle('{{ $attributes['section'] }}' ,'{{ $attributes['index'] }}',$event.target.checked)" class="w-full h-8 bg-gray-300 border border-gray-400 p-2 rounded-sm" type="checkbox" {{ $attributes['value'] == true ? 'checked="checked"' : '' }}>
    @else
        <input wire:change="optionsHandle('{{ $attributes['section'] }}' ,'{{ $attributes['index'] }}',$event.target.value)" class="w-full h-8 bg-gray-300 border border-gray-400 p-2 rounded-sm" type="text" value="{{ $attributes['value'] }}">
    @endif
</div>
