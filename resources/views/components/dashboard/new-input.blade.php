<div x-data="{ select: '{{ $attributes['value'] }}' }">
    <div class="w-full p-2 flex flex-row justify-between items-center gap-2">
        <p class="font-semibold text-sm">
            Your input
        </p>
        <select wire:change="optionsHandle('{{ $attributes['section'] }}' ,'{{ $attributes['index'] }}',$event.target.value)" x-model="select" class="w-1/2 h-8 bg-gray-300 border border-gray-400 rounded-sm cursor-pointer">
            <option value="not">Not Selected</option>
            <option value="text">Text</option>
            <option value="checkbox">CheckBox</option>
            <option value="textarea">Textarea</option>
        </select>
    </div>
    <div x-show="select === 'text'">
        <x-dashboard.text  section="input" index="text" value="{{ $attributes['text'] }}" >Text Input</x-dashboard.text>
        <x-dashboard.text  section="input" index="placeholder" value="{{ $attributes['placeholder'] }}" >Placeholder</x-dashboard.text>
        <x-dashboard.text  section="input" index="required" value="{{ $attributes['required'] }}"  type="checkbox">Required</x-dashboard.text>
    </div>
    <div x-show="select === 'checkbox'">
        <x-dashboard.text  section="input" index="text" value="{{ $attributes['text'] }}" required="{{ $attributes['required'] }}">CheckBox Input</x-dashboard.text>
        <x-dashboard.text  section="input" index="required" value="{{ $attributes['required'] }}" type="checkbox">Required</x-dashboard.text>
    </div>
    <div x-show="select === 'textarea'">
        <x-dashboard.textarea  section="input" index="bg-color" value="{{ $attributes['text'] }}">Textarea</x-dashboard.textarea>
        <x-dashboard.text  section="input" index="required" value="{{ $attributes['required'] }}" type="checkbox">Required</x-dashboard.text>
    </div>
</div>
