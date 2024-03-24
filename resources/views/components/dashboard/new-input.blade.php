<div x-data="{ select: 'not' }">
    <div class="w-full p-2 flex flex-row justify-between items-center gap-2">
        <p class="font-semibold text-sm">
            Your input
        </p>
        <select x-model="select" class="w-1/2 h-8 bg-gray-300 border border-gray-400 rounded-sm cursor-pointer">
            <option value="not">Not Selected</option>
            <option value="text">Text</option>
            <option value="radio">Radio</option>
            <option value="textarea">Textarea</option>
        </select>
    </div>
    <div x-show="select === 'text'"><x-dashboard.text>Text Input</x-dashboard.text></div>
    <div x-show="select === 'radio'"><x-dashboard.text>Radio Input</x-dashboard.text></div>
    <div x-show="select === 'textarea'"><x-dashboard.textarea>Textarea</x-dashboard.textarea></div>
</div>
