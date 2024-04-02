<div x-data="{ activeTab: 'general' }" class="py-4 px-3">
    <ul class="w-full bg-slate-300 p-2 flex flex-row justify-between">
        <li @click="activeTab = 'general'"
            :class="{ 'bg-slate-400': activeTab === 'general', 'hover:bg-gray-300': activeTab !== 'general' }"
            class="text-center font-semibold cursor-pointer px-1 py-0.5 w-[80px] border border-slate-400 rounded-sm shadow-lg">
            General
        </li>
        <li @click="activeTab = 'input'"
            :class="{ 'bg-slate-400': activeTab === 'input', 'hover:bg-gray-300': activeTab !== 'input' }"
            class="text-center font-semibold cursor-pointer px-1 py-0.5 w-[80px] border border-slate-400 rounded-sm shadow-lg">
            Input
        </li>
        <li @click="activeTab = 'button'"
            :class="{ 'bg-slate-400': activeTab === 'button', 'hover:bg-gray-300': activeTab !== 'button' }"
            class="text-center font-semibold cursor-pointer px-1 py-0.5 w-[80px] border border-slate-400 rounded-sm shadow-lg">
            Button
        </li>
    </ul>
    {{-- Options --}}
    <div x-show="activeTab === 'general'">
        @include('livewire.templates.'. $template .'.dashboard.upload', ['section' => 'general' , 'index' => 'banner' , 'slot' => 'Banner'])
        @include('livewire.templates.'. $template .'.dashboard.upload', ['section' => 'general' , 'index' => 'logo' , 'slot' => 'Logo'])
        @include('livewire.templates.'. $template .'.dashboard.text', ['section' => 'general' , 'index' => 'text' , 'value' => $general['text'] , 'slot' => 'Title'])
        @include('livewire.templates.'. $template .'.dashboard.text', ['section' => 'general' , 'index' => 'description' , 'value' => $general['description'] , 'slot' => 'Description'])
        @include('livewire.templates.'. $template .'.dashboard.color-picker', ['section' => 'general' , 'index' => 'bg-color' , 'value' => $general['bg-color'] , 'slot' => 'Background Color'])
    </div>

    <div x-show="activeTab === 'input'">
        @include('livewire.templates.'. $template .'.dashboard.color-picker', ['section' => 'input' , 'index' => 'bg-color' , 'value' => $input['bg-color'] , 'slot' => 'Background Color'])
        @include('livewire.templates.'. $template .'.dashboard.color-picker', ['section' => 'input' , 'index' => 'border-color' , 'value' => $input['border-color'] , 'slot' => 'Border Color'])
        @include('livewire.templates.'. $template .'.dashboard.color-picker', ['section' => 'input' , 'index' => 'text-color' , 'value' => $input['text-color'] , 'slot' => 'Text Color'])
        @include('livewire.templates.'. $template .'.dashboard.color-picker', ['section' => 'input' , 'index' => 'error-color' , 'value' => $input['error-color'] , 'slot' => 'Error Color'])
        @include('livewire.templates.'. $template .'.dashboard.range', ['section' => 'input' , 'index' => 'border-width' , 'min' => 0 , 'max' => 8 , 'key' => 'px' , 'value' => $input['border-width'] , 'slot' => 'Border Width'])
        @include('livewire.templates.'. $template .'.dashboard.range', ['section' => 'input' , 'index' => 'border-radius' , 'min' => 0 , 'max' => 25 , 'key' =>'px' , 'value' => $input['border-radius'] , 'slot' => 'Border Radius'])
        @include('livewire.templates.'. $template .'.dashboard.new-input', ['section' => 'input' , 'index' => 'new-input' , 'value' => $input['new-input'] , 'text' => $input['text'] , 'placeholder' => $input['placeholder'] , 'required' => $input['required']])
    </div>

    <div x-show="activeTab === 'button'">
        @include('livewire.templates.'. $template .'.dashboard.color-picker', ['section' => 'button' , 'index' => 'text-color' , 'value' => $button['text-color'] , 'slot' => 'Text Color'])
        @include('livewire.templates.'. $template .'.dashboard.color-picker', ['section' => 'button' , 'index' => 'bg-color' , 'value' => $button['bg-color'] , 'slot' => 'Background Color'])
        @include('livewire.templates.'. $template .'.dashboard.color-picker', ['section' => 'button' , 'index' => 'border-color' , 'value' => $button['border-color'] , 'slot' => 'Border Color'])
        @include('livewire.templates.'. $template .'.dashboard.range', ['section' => 'button' , 'index' => 'border-width' , 'min' => 0 , 'max' => 8 , 'key' => 'px' , 'value' => $button['border-width'] , 'slot' => 'Border Width'])
        @include('livewire.templates.'. $template .'.dashboard.range', ['section' => 'button' , 'index' => 'border-radius' , 'min' => 0 , 'max' => 25 , 'key' =>'px' , 'value' => $button['border-radius'] , 'slot' => 'Border Radius'])
        @include('livewire.templates.'. $template .'.dashboard.range', ['section' => 'button' , 'index' => 'font-size' , 'min' => 10 , 'max' => 20 , 'key' =>'px' , 'value' => $button['font-size'] , 'slot' => 'Font Size'])
        @include('livewire.templates.'. $template .'.dashboard.select', ['section' => 'button' , 'index' => 'font-weight' , 'value' => $button['font-weight'] , 'slot' => 'Font Weight'])
        @include('livewire.templates.'. $template .'.dashboard.text', ['section' => 'button' , 'index' => 'text' , 'value' => $button['text'] , 'slot' => 'Text'])
    </div>
    {{-- End options --}}
    <script>
        function colorPicker(input) {
            const colorPreview = input.parentElement.querySelector('#color-preview');
            colorPreview.style.backgroundColor = input.value;
        }

        function changeRange(input, key) {
            const rangeValue = input.parentElement.querySelector('#rangeValue');
            input.addEventListener('input', function () {
                rangeValue.textContent = input.value + key;
            });
        }
    </script>
</div>
