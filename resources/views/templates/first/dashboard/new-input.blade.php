<div x-data="{ select: '{{ $value }}' }">
    <div class="w-full p-2 flex flex-row justify-between items-center gap-2">
        <p class="font-semibold text-sm">
            Your input
        </p>
        <select wire:change="optionsHandle('{{ $section }}' ,'{{ $index }}',$event.target.value)" x-model="select" class="w-1/2 h-8 bg-gray-300 border border-gray-400 rounded-sm cursor-pointer">
            <option value="not">Not Selected</option>
            <option value="text">Text</option>
            <option value="checkbox">CheckBox</option>
            <option value="textarea">Textarea</option>
        </select>
    </div>
    <div x-show="select === 'text'">
        @include('templates.'. $template .'.dashboard.text', ['section' => 'input' , 'index' => 'text' , 'value' => $text , 'slot' => 'Text Input'])
        @include('templates.'. $template .'.dashboard.text', ['section' => 'input' , 'index' => 'placeholder' , 'value' => $placeholder , 'slot' => 'Placeholder'])
        @include('templates.'. $template .'.dashboard.text', ['section' => 'input' , 'index' => 'required' , 'value' => $required , 'slot' => 'Required' , 'type' => 'checkbox'])
    </div>
    <div x-show="select === 'checkbox'">
        @include('templates.'. $template .'.dashboard.text', ['section' => 'input' , 'index' => 'text' , 'value' => $text , 'slot' => 'CheckBox Input'])
        @include('templates.'. $template .'.dashboard.text', ['section' => 'input' , 'index' => 'required' , 'value' => $required , 'slot' => 'Required' , 'type' => 'checkbox'])
    </div>
    <div x-show="select === 'textarea'">
        @include('templates.'. $template .'.dashboard.textarea', ['section' => 'input' , 'index' => 'bg-color' , 'value' => $text , 'slot' => 'Textarea'])
        @include('templates.'. $template .'.dashboard.text', ['section' => 'input' , 'index' => 'required' , 'value' => $required , 'slot' => 'Required' , 'type' => 'checkbox'])
    </div>
</div>
