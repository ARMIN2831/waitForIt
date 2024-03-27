<div x-data="{ activeTab: 'general' }" class="py-4 px-3">
    <ul class="w-full bg-slate-300 p-2 flex flex-row justify-between">
        <li @click="activeTab = 'general'" :class="{ 'bg-slate-400': activeTab === 'general', 'hover:bg-gray-300': activeTab !== 'general' }" class="text-center font-semibold cursor-pointer px-1 py-0.5 w-[80px] border border-slate-400 rounded-sm shadow-lg">General</li>
        <li @click="activeTab = 'input'" :class="{ 'bg-slate-400': activeTab === 'input', 'hover:bg-gray-300': activeTab !== 'input' }" class="text-center font-semibold cursor-pointer px-1 py-0.5 w-[80px] border border-slate-400 rounded-sm shadow-lg">Input</li>
        <li @click="activeTab = 'button'" :class="{ 'bg-slate-400': activeTab === 'button', 'hover:bg-gray-300': activeTab !== 'button' }" class="text-center font-semibold cursor-pointer px-1 py-0.5 w-[80px] border border-slate-400 rounded-sm shadow-lg">Button</li>
    </ul>
    {{-- Options --}}
    <div x-show="activeTab === 'general'">
        <x-dashboard.upload section="general" index="banner">Banner</x-dashboard.upload>
        <x-dashboard.upload section="general" index="logo">Logo</x-dashboard.upload>
        <x-dashboard.text section="general" index="text" value="{{$general['text']}}">Title</x-dashboard.text>
        <x-dashboard.text section="general" index="description" value="{{$general['description']}}">Description</x-dashboard.text>
        <x-dashboard.color-picker section="general" index="bg-color" value="{{$general['bg-color']}}">Background Color</x-dashboard.color-picker>
    </div>

    <div x-show="activeTab === 'input'">
        <x-dashboard.color-picker section="input" index="bg-color" value="{{ $input['bg-color'] }}">Background Color</x-dashboard.color-picker>
        <x-dashboard.color-picker section="input" index="border-color" value="{{ $input['border-color'] }}">Border Color</x-dashboard.color-picker>
        <x-dashboard.color-picker section="input" index="text-color" value="{{ $input['text-color'] }}">Text Color</x-dashboard.color-picker>
        <x-dashboard.color-picker section="input" index="error-color" value="{{ $input['error-color'] }}">Error Color</x-dashboard.color-picker>
        <x-dashboard.range section="input" index="border-width" min="0" max="8" value="{{ $input['border-width'] }}" key="px">Border Width</x-dashboard.range>
        <x-dashboard.range section="input" index="border-radius" min="0" max="25" value="{{ $input['border-radius'] }}" key="px">Border Radius</x-dashboard.range>
        <x-dashboard.new-input section="input" index="new-input" value="{{ $input['new-input'] }}" text="{{ $input['text'] }}" placeholder="{{ $input['placeholder'] }}" required="{{ $input['required'] }}"></x-dashboard.new-input>
    </div>

    <div x-show="activeTab === 'button'">
        <x-dashboard.color-picker section="button" index="text-color" value="{{ $button['text-color'] }}">Text Color</x-dashboard.color-picker>
        <x-dashboard.color-picker section="button" index="bg-color" value="{{ $button['bg-color'] }}">Background Color</x-dashboard.color-picker>
        <x-dashboard.color-picker section="button" index="border-color" value="{{ $button['border-color'] }}">border Color</x-dashboard.color-picker>
        <x-dashboard.range section="button" index="border-width" min="0" max="8" value="{{ $button['border-width'] }}" key="px">Border Width</x-dashboard.range>
        <x-dashboard.range section="button" index="border-radius" min="0" max="25" value="{{ $button['border-radius'] }}" key="px">Border Radius</x-dashboard.range>
        <x-dashboard.range section="button" index="font-size" min="10" max="20" value="{{ $button['font-size'] }}" key="px">Font Size</x-dashboard.range>
        <x-dashboard.select section="button" index="font-weight" value="{{ $button['font-weight'] }}">Font Weight</x-dashboard.select>
        <x-dashboard.text section="button" index="text" value="{{ $button['text'] }}">Text</x-dashboard.text>
    </div>
    {{-- End options --}}
    <script>
        function colorPicker(input) {
            const colorPreview = input.parentElement.querySelector('#color-preview');
            colorPreview.style.backgroundColor = input.value;
        }
        function changeRange(input, key) {
            const rangeValue = input.parentElement.querySelector('#rangeValue');
            input.addEventListener('input', function() {
                rangeValue.textContent = input.value+key;
            });
        }
    </script>
</div>
