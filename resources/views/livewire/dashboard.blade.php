<div>
    <x-landing.header/>

    <div class="flex flex-row w-full h-screen pt-16">
        {{--project list--}}
        <div class="bg-gray-200 w-1/5 h-full z-10">
            <div class="py-4 px-3">

                <button class="w-full mb-1.5 mt-5 mx-auto flex flex-row items-center  py-1 px-3 text-lg h-12 leading-[unset] text-white cursor-pointer font-medium bg-slate-950 rounded-lg transition duration-200 ease-in-out hover:shadow-[0_0_1px_3px_rgba(11,61,121,.16)]">
                    <div class=" inline-block w-6 h-6 right-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus-circle "><circle cx="12" cy="12" r="10"></circle><path d="M8 12h8"></path><path d="M12 8v8"></path></svg>
                        <span class="sr-only">Sparkle</span></div>
                    <p class="px-1">add project</p>
                </button>

                <div class="w-full h-12 bg-gray-300 cursor-pointer border border-gray-400 my-2 transition duration-300 ease-in-out transform hover:scale-95 hover:shadow flex flex-row justify-between items-center px-4 group">
                    <p>project 1</p>
                    <div class="hidden group-hover:block transition duration-300 ease-in-out">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="20px" height="20px">    <path d="M47.16,21.221l-5.91-0.966c-0.346-1.186-0.819-2.326-1.411-3.405l3.45-4.917c0.279-0.397,0.231-0.938-0.112-1.282 l-3.889-3.887c-0.347-0.346-0.893-0.391-1.291-0.104l-4.843,3.481c-1.089-0.602-2.239-1.08-3.432-1.427l-1.031-5.886 C28.607,2.35,28.192,2,27.706,2h-5.5c-0.49,0-0.908,0.355-0.987,0.839l-0.956,5.854c-1.2,0.345-2.352,0.818-3.437,1.412l-4.83-3.45 c-0.399-0.285-0.942-0.239-1.289,0.106L6.82,10.648c-0.343,0.343-0.391,0.883-0.112,1.28l3.399,4.863 c-0.605,1.095-1.087,2.254-1.438,3.46l-5.831,0.971c-0.482,0.08-0.836,0.498-0.836,0.986v5.5c0,0.485,0.348,0.9,0.825,0.985 l5.831,1.034c0.349,1.203,0.831,2.362,1.438,3.46l-3.441,4.813c-0.284,0.397-0.239,0.942,0.106,1.289l3.888,3.891 c0.343,0.343,0.884,0.391,1.281,0.112l4.87-3.411c1.093,0.601,2.248,1.078,3.445,1.424l0.976,5.861C21.3,47.647,21.717,48,22.206,48 h5.5c0.485,0,0.9-0.348,0.984-0.825l1.045-5.89c1.199-0.353,2.348-0.833,3.43-1.435l4.905,3.441 c0.398,0.281,0.938,0.232,1.282-0.111l3.888-3.891c0.346-0.347,0.391-0.894,0.104-1.292l-3.498-4.857 c0.593-1.08,1.064-2.222,1.407-3.408l5.918-1.039c0.479-0.084,0.827-0.5,0.827-0.985v-5.5C47.999,21.718,47.644,21.3,47.16,21.221z M25,32c-3.866,0-7-3.134-7-7c0-3.866,3.134-7,7-7s7,3.134,7,7C32,28.866,28.866,32,25,32z"/></svg>
                    </div>
                </div>

                <div class="w-full h-12 bg-gray-300 cursor-pointer border border-gray-400 my-2 transition duration-300 ease-in-out transform hover:scale-95 hover:shadow flex flex-row justify-between items-center px-4 group">
                    <p>project 2</p>
                    <div class="hidden group-hover:block transition duration-300 ease-in-out">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="20px" height="20px">    <path d="M47.16,21.221l-5.91-0.966c-0.346-1.186-0.819-2.326-1.411-3.405l3.45-4.917c0.279-0.397,0.231-0.938-0.112-1.282 l-3.889-3.887c-0.347-0.346-0.893-0.391-1.291-0.104l-4.843,3.481c-1.089-0.602-2.239-1.08-3.432-1.427l-1.031-5.886 C28.607,2.35,28.192,2,27.706,2h-5.5c-0.49,0-0.908,0.355-0.987,0.839l-0.956,5.854c-1.2,0.345-2.352,0.818-3.437,1.412l-4.83-3.45 c-0.399-0.285-0.942-0.239-1.289,0.106L6.82,10.648c-0.343,0.343-0.391,0.883-0.112,1.28l3.399,4.863 c-0.605,1.095-1.087,2.254-1.438,3.46l-5.831,0.971c-0.482,0.08-0.836,0.498-0.836,0.986v5.5c0,0.485,0.348,0.9,0.825,0.985 l5.831,1.034c0.349,1.203,0.831,2.362,1.438,3.46l-3.441,4.813c-0.284,0.397-0.239,0.942,0.106,1.289l3.888,3.891 c0.343,0.343,0.884,0.391,1.281,0.112l4.87-3.411c1.093,0.601,2.248,1.078,3.445,1.424l0.976,5.861C21.3,47.647,21.717,48,22.206,48 h5.5c0.485,0,0.9-0.348,0.984-0.825l1.045-5.89c1.199-0.353,2.348-0.833,3.43-1.435l4.905,3.441 c0.398,0.281,0.938,0.232,1.282-0.111l3.888-3.891c0.346-0.347,0.391-0.894,0.104-1.292l-3.498-4.857 c0.593-1.08,1.064-2.222,1.407-3.408l5.918-1.039c0.479-0.084,0.827-0.5,0.827-0.985v-5.5C47.999,21.718,47.644,21.3,47.16,21.221z M25,32c-3.866,0-7-3.134-7-7c0-3.866,3.134-7,7-7s7,3.134,7,7C32,28.866,28.866,32,25,32z"/></svg>
                    </div>
                </div>
            </div>
        </div>
        {{--end project list--}}

        {{--edit project--}}
        <div class="bg-slate-200 w-3/5 h-full flex justify-center items-center z-20">

            {{--user form--}}
            <div class="w-[98%] h-[98%] border border-slate-400 shadow-[0_0_20px_5px_#ccc] flex justify-center items-center">
                <div class="w-[350px]  border border-slate-300 rounded-xl overflow-hidden relative z-30 bg-gray-50">
                    <div class="border border-slate-300 w-16 h-16 absolute z-40 left-[142px] top-[95px] rounded-md overflow-hidden">
                        <img src="">
                    </div>

                    <div class="w-full h-32 border border-b-slate-300">
                        <img src="">
                    </div>

                    <div class="font-md w-4/5 mx-auto flex justify-center mt-12 font-semibold">
                        the title of form
                    </div>

                    <div class="font-md w-4/5 mx-auto flex justify-center mt-4 text-sm text-center">
                        the description of this form for testing waitForIt site
                    </div>

                    <div class="relative w-full flex flex-col justify-center items-center">
                        <p class="w-full pl-8 text-md font-semibold text-slate-400">Full Name:</p>
                        <input class="mb-5 w-10/12 bg-gray-50 text-slate-500 border border-slate-300 rounded-lg py-1 px-4 focus:outline-none focus:bg-white focus:border-slate-400" type="text" name="name" placeholder="Full Name">
                        <small class="text-red-800 absolute text-[0.65rem] bottom-0.5">email field is required</small>
                    </div>

                    <div class="relative w-full flex flex-col justify-center items-center">
                        <p class="w-full pl-8 text-md font-semibold text-slate-400">Email:</p>
                        <input class="mb-5 w-10/12 bg-gray-50 text-slate-500 border border-slate-300 rounded-lg py-1 px-4 focus:outline-none focus:bg-white focus:border-slate-400" type="text" name="email" placeholder="Email">
                        <small class="text-red-800 absolute text-[0.65rem] bottom-0.5">email field is required</small>
                    </div>

                    <div class="relative w-full flex flex-col justify-center items-center">
                        <button class="px-16 py-2 my-4 text-sm leading-[unset] text-white cursor-pointer font-medium bg-violet-700 rounded-lg transition duration-200 ease-in-out hover:shadow-[0_0_1px_3px_rgba(223,199,249,1)]">Join WaitList</button>
                    </div>


                </div>
            </div>
            {{--end user form--}}

        </div>
        {{--end edit project--}}

        {{--toolbar--}}
        <div class="bg-gray-200 w-1/5 h-full z-10">
            <div x-data="{ activeTab: 'general' }" class="py-4 px-3">
                <ul class="w-full bg-slate-300 p-2 flex flex-row justify-between">
                    <li @click="activeTab = 'general'" :class="{ 'bg-slate-400': activeTab === 'general', 'hover:bg-gray-300': activeTab !== 'general' }" class="text-center font-semibold cursor-pointer px-1 py-0.5 w-[80px] border border-slate-400 rounded-sm shadow-lg">General</li>
                    <li @click="activeTab = 'input'" :class="{ 'bg-slate-400': activeTab === 'input', 'hover:bg-gray-300': activeTab !== 'input' }" class="text-center font-semibold cursor-pointer px-1 py-0.5 w-[80px] border border-slate-400 rounded-sm shadow-lg">Input</li>
                    <li @click="activeTab = 'button'" :class="{ 'bg-slate-400': activeTab === 'button', 'hover:bg-gray-300': activeTab !== 'button' }" class="text-center font-semibold cursor-pointer px-1 py-0.5 w-[80px] border border-slate-400 rounded-sm shadow-lg">Button</li>
                </ul>
                {{-- Options --}}
                <div x-show="activeTab === 'general'">
                    <x-dashboard.upload>Banner</x-dashboard.upload>
                    <x-dashboard.upload>Logo</x-dashboard.upload>
                    <x-dashboard.text>Title</x-dashboard.text>
                    <x-dashboard.text>Description</x-dashboard.text>
                    <x-dashboard.color-picker>Background Color</x-dashboard.color-picker>
                </div>

                <div x-show="activeTab === 'input'">
                    <x-dashboard.color-picker>Background Color</x-dashboard.color-picker>
                    <x-dashboard.color-picker>Border Color</x-dashboard.color-picker>
                    <x-dashboard.color-picker>Error Color</x-dashboard.color-picker>
                    <x-dashboard.range min="0" max="8" value="1" key="px">Border Width</x-dashboard.range>
                    <x-dashboard.range min="0" max="25" value="5" key="px">Border Radius</x-dashboard.range>
                    <x-dashboard.new-input></x-dashboard.new-input>
                </div>

                <div x-show="activeTab === 'button'">
                    <x-dashboard.color-picker>Text Color</x-dashboard.color-picker>
                    <x-dashboard.color-picker>Background Color</x-dashboard.color-picker>
                    <x-dashboard.color-picker>border Color</x-dashboard.color-picker>
                    <x-dashboard.range min="0" max="8" value="1" key="px">Border Width</x-dashboard.range>
                    <x-dashboard.range min="0" max="25" value="5" key="px">Border Radius</x-dashboard.range>
                    <x-dashboard.range min="10" max="20" value="15" key="px">Font Size</x-dashboard.range>
                    <x-dashboard.select>Font Weight</x-dashboard.select>
                    <x-dashboard.text>Text</x-dashboard.text>
                </div>
                {{-- End options --}}
            </div>
        </div>
        {{--end toolbar--}}
    </div>


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
