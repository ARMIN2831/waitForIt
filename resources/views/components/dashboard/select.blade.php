<div class="w-full p-2 flex flex-row justify-between items-center">
    <p class="font-semibold text-sm">
        {{$slot}}
    </p>
    <select wire:change="optionsHandle('{{ $attributes['section'] }}' ,'{{ $attributes['index'] }}',$event.target.value)" class="w-1/2 h-8 bg-gray-300 border border-gray-400 rounded-sm">
        <option value="200" {{ $attributes['value'] == 200 ? 'selected="selected"' : ''  }}>Thin</option>
        <option value="400" {{ $attributes['value'] == 400 ? 'selected="selected"' : ''  }}>Normal</option>
        <option value="700" {{ $attributes['value'] == 700 ? 'selected="selected"' : ''  }}>Bold</option>
    </select>
</div>
