<header class="fixed bg-gray-700 w-full top-0 z-50 shadow-md">
    <nav class="flex flex-row justify-between mx-auto max-w-[1200px] relative w-full z-10 items-center gap-4 h-16 px-6 pt-4 pb-2">
        {{--left--}}
        <div class="flex gap-2 items-start">
            <div class="h-8 flex items-center">
                <img width="40" height="40" src="{{asset('storage/photos/waitforitlogo.webp')}}">
                <p class="font-bold text-2xl ml-1.5 mb-0.5">waitForIt</p>
            </div>
            {{--<a class="tracking-widest inline-flex items-center px-3 py-2 bg-purple-100 rounded-lg font-bold text-xs font-bold text-purple-600 uppercase hover:bg-purple-200 transition duration-300 ease-in-out transform">Blog</a>--}}
        </div>
        {{--end left--}}

        {{--right--}}
        <div class="flex gap-6 max-md:hidden">
            <div class="px-1 py-2.5 text-sm text-slate-500 cursor-pointer font-medium hover:text-violet-700 flex group text-white">Features
                <div class="w-4 h-4 mt-[3px] ml-1">
                    <svg width="100%" height="100%" viewBox="0 0 24 24" fill="inherit" xmlns="http://www.w3.org/2000/svg" class="fill-current"> <path d="M15.88 10.29L12 14.17L8.11998 10.29C7.72998 9.9 7.09998 9.9 6.70998 10.29C6.31998 10.68 6.31998 11.31 6.70998 11.7L11.3 16.29C11.69 16.68 12.32 16.68 12.71 16.29L17.3 11.7C17.69 11.31 17.69 10.68 17.3 10.29C16.91 9.91 16.27 9.9 15.88 10.29V10.29Z"></path> </svg>
                </div>
                <div class="absolute hidden pt-11 group-hover:block -translate-x-1/3">
                    <div class="w-[550px] p-3 flex flex-row gap-3 border border-slate-200 bg-white-900 shadow-xl rounded-2xl bg-white">
                        <div class="w-2/5 px-4 flex flex-col gap-1 justify-end rounded-xl" style="background-image: radial-gradient(circle farthest-corner at 125% 100%, #fff 19%, hsla(0, 0%, 100%, 0) 41%), linear-gradient(38deg, hsla(0, 0%, 100%, 0) 78%, hsla(0, 0%, 100%, .69)), linear-gradient(45deg, #fff 10%, hsla(0, 0%, 100%, 0) 22%), linear-gradient(0deg, #fff, hsla(0, 0%, 100%, 0) 91%), radial-gradient(circle farthest-corner at 0 -50%, hsla(0, 0%, 100%, 0) 15%, rgba(67, 254, 254, .4) 38%, hsla(0, 0%, 100%, 0) 65%), repeating-linear-gradient(214deg, hsla(0, 0%, 100%, 0), rgba(210, 255, 247, .3) 25%, hsla(0, 0%, 100%, 0) 71%), repeating-linear-gradient(212deg, hsla(0, 0%, 100%, 0) 51%, rgba(17, 75, 233, .3) 64%, hsla(0, 0%, 100%, 0) 80%);}">
                            <span class="text-slate-900 font-semibold text-lg">All Features</span>
                            <p class="mb-12 text-slate-700">
                                Feedback is how we grow, thrive, and learn.
                            </p>
                        </div>
                        <div class="flex flex-col gap-1 w-3/5">
                            <div class="flex flex-row gap-4 text-medium px-4 py-3 rounded-xl hover:bg-gray-200">
                                <div><img width="56" height="56" src="{{asset('storage/photos/feedback.png')}}"></div>

                                <div class="text-lg text-slate-950">
                                    Feedback Boards
                                    <p class="text-sm text-slate-700">Collect & manage customer feedback in an organized manner. </p>
                                </div>
                            </div>

                            <div class="flex flex-row gap-4 text-medium px-4 py-3 rounded-xl hover:bg-gray-200">
                                <div><img width="56" height="56" src="{{asset('storage/photos/productChangelog.png')}}"></div>

                                <div class="text-lg text-slate-950">
                                    Product Roadmap
                                    <p class="text-sm text-slate-700"> Enables product teams to create & visualize product plans. </p>
                                </div>
                            </div>

                            <div class="flex flex-row gap-4 text-medium px-4 py-3 rounded-xl hover:bg-gray-200">
                                <div><img width="56" height="56" src="{{asset('storage/photos/productRoadmap.png')}}"></div>

                                <div class="text-lg text-slate-950">
                                    Product Changelog
                                    <p class="text-sm text-slate-700"> Create & publish changelogs to communicate product releases. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="px-1 py-2.5 text-sm text-slate-500 cursor-pointer font-medium hover:text-violet-700 text-white">Pricing</div>
            <div class="px-1 py-2.5 text-sm text-slate-500 cursor-pointer font-medium hover:text-violet-700 text-white">Blog</div>
            <div class="py-2.5 text-sm text-slate-500 cursor-pointer font-medium hover:text-violet-700">
                <div itemprop="name" class="w-5 h-5 scale-90 rotate-0 hover:scale-110 hover:rotate-90 duration-500 fill-slate-400 hover:fill-primary-500"> <div class="icon-5"> <svg width="100%" height="100%" viewBox="0 0 24 24" fill="inherit" xmlns="http://www.w3.org/2000/svg" class="fill-current"> <path fill-rule="evenodd" clip-rule="evenodd" d="M11.8673 4H12.1327C12.8071 8.02 15.98 11.1928 20 11.8673V12.1327C15.98 12.8072 12.8071 15.98 12.1327 20H11.8673C11.1929 15.98 8.02001 12.8072 4 12.1327V11.8673C8.02001 11.1928 11.1929 8.02 11.8673 4Z"></path> </svg> <span class="sr-only">Little Star</span> </div> </div>
            </div>
            <a href="{{ route('login') }}" class="px-1 py-2.5 text-sm text-slate-500 cursor-pointer font-medium hover:text-violet-700 text-white">Login</a>
            <div class="px-4 py-2.5 text-sm leading-[unset] text-white cursor-pointer font-medium bg-violet-700 rounded-lg transition duration-200 ease-in-out hover:shadow-[0_0_1px_3px_rgba(223,199,249,1)]">Sign up for free</div>
        </div>
        <div x-data="{ menu : false }" class="md:hidden">
            <div @click="menu = !menu" class="w-4 h-4">
                <svg width="100%" height="100%" viewBox="0 0 24 24" fill="inherit" xmlns="http://www.w3.org/2000/svg" class="fill-current"> <path fill-rule="evenodd" clip-rule="evenodd" d="M3 6C3 5.58579 3.33579 5.25 3.75 5.25H20.25C20.6642 5.25 21 5.58579 21 6C21 6.41421 20.6642 6.75 20.25 6.75H3.75C3.33579 6.75 3 6.41421 3 6ZM3 12C3 11.5858 3.33579 11.25 3.75 11.25H20.25C20.6642 11.25 21 11.5858 21 12C21 12.4142 20.6642 12.75 20.25 12.75H3.75C3.33579 12.75 3 12.4142 3 12ZM3.75 17.25C3.33579 17.25 3 17.5858 3 18C3 18.4142 3.33579 18.75 3.75 18.75H20.25C20.6642 18.75 21 18.4142 21 18C21 17.5858 20.6642 17.25 20.25 17.25H3.75Z"></path> </svg>
            </div>
            <div x-show="menu" class="flex flex-col justify-center absolute w-full top-[63px] left-0 text-center bg-white gap-1">
                <div class="px-1 py-2.5 text-sm text-slate-500 cursor-pointer font-medium hover:text-violet-700">Features</div>
                <div class="px-1 py-2.5 text-sm text-slate-500 cursor-pointer font-medium hover:text-violet-700">Pricing</div>
                <div class="px-1 py-2.5 text-sm text-slate-500 cursor-pointer font-medium hover:text-violet-700">Blog</div>
                <div class="py-2.5 text-sm text-slate-500 cursor-pointer font-medium hover:text-violet-700 flex justify-center">
                    <div itemprop="name" class="w-5 h-5 scale-90 rotate-0 hover:scale-110 hover:rotate-90 duration-500 fill-slate-400 hover:fill-primary-500"> <div class="icon-5"> <svg width="100%" height="100%" viewBox="0 0 24 24" fill="inherit" xmlns="http://www.w3.org/2000/svg" class="fill-current"> <path fill-rule="evenodd" clip-rule="evenodd" d="M11.8673 4H12.1327C12.8071 8.02 15.98 11.1928 20 11.8673V12.1327C15.98 12.8072 12.8071 15.98 12.1327 20H11.8673C11.1929 15.98 8.02001 12.8072 4 12.1327V11.8673C8.02001 11.1928 11.1929 8.02 11.8673 4Z"></path> </svg> <span class="sr-only">Little Star</span> </div> </div>
                </div>
                <a href="{{ route('login') }}" class="px-1 py-2.5 text-sm text-slate-500 cursor-pointer font-medium hover:text-violet-700">Login</a>
                <div class="w-40 mx-auto px-4 py-2.5 text-sm leading-[unset] text-white cursor-pointer font-medium bg-violet-700 rounded-lg transition duration-200 ease-in-out hover:shadow-[0_0_1px_3px_rgba(223,199,249,1)]">Sign up for free</div>
            </div>
        </div>
        {{--end right--}}
    </nav>
</header>
