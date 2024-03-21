<header class="fixed bg-white w-full top-0 z-50 shadow-md">
    <nav class="flex justify-between mx-auto max-w-[1200px] relative w-full z-10 items-center flex-wrap gap-4 h-16 px-6 pt-4 pb-2">
        {{--left--}}
        <div class="flex gap-2 items-start">
            <div class="h-8 flex items-center">
                <img width="40" height="40" src="{{asset('storage/photos/waitforitlogo.webp')}}">
                <p class="font-bold text-2xl ml-1.5 mb-0.5">waitForIt</p>
            </div>
            <a class="tracking-widest inline-flex items-center px-3 py-2 bg-purple-100 rounded-lg font-bold text-xs font-bold text-purple-600 uppercase hover:bg-purple-200 transition duration-300 ease-in-out transform">Blog</a>
        </div>
        {{--end left--}}

        {{--right--}}
        <div class="flex gap-6">
            <div class="px-1 py-2.5 text-sm text-slate-500 cursor-pointer font-medium hover:text-violet-700 flex group">Features
                <div class="w-4 h-4 mt-[3px] ml-1">
                    <svg width="100%" height="100%" viewBox="0 0 24 24" fill="inherit" xmlns="http://www.w3.org/2000/svg" class="fill-current"> <path d="M15.88 10.29L12 14.17L8.11998 10.29C7.72998 9.9 7.09998 9.9 6.70998 10.29C6.31998 10.68 6.31998 11.31 6.70998 11.7L11.3 16.29C11.69 16.68 12.32 16.68 12.71 16.29L17.3 11.7C17.69 11.31 17.69 10.68 17.3 10.29C16.91 9.91 16.27 9.9 15.88 10.29V10.29Z"></path> </svg>
                </div>
                <div class="absolute hidden pt-11 group-hover:block -translate-x-1/3">
                    <div class="w-[550px] p-3 flex flex-row gap-3 border border-black-200 bg-white-900 shadow-xl rounded-2xl">
                        <div class="w-2/5 px-4 flex flex-col gap-1 justify-end rounded-xl" style="background-image: radial-gradient(circle farthest-corner at 125% 100%, #fff 19%, hsla(0, 0%, 100%, 0) 41%), linear-gradient(38deg, hsla(0, 0%, 100%, 0) 78%, hsla(0, 0%, 100%, .69)), linear-gradient(45deg, #fff 10%, hsla(0, 0%, 100%, 0) 22%), linear-gradient(0deg, #fff, hsla(0, 0%, 100%, 0) 91%), radial-gradient(circle farthest-corner at 0 -50%, hsla(0, 0%, 100%, 0) 15%, rgba(67, 254, 254, .4) 38%, hsla(0, 0%, 100%, 0) 65%), repeating-linear-gradient(214deg, hsla(0, 0%, 100%, 0), rgba(210, 255, 247, .3) 25%, hsla(0, 0%, 100%, 0) 71%), repeating-linear-gradient(212deg, hsla(0, 0%, 100%, 0) 51%, rgba(17, 75, 233, .3) 64%, hsla(0, 0%, 100%, 0) 80%);}">
                            <span class="text-black-900 font-semibold text-lg">All Features</span>
                            <p class="mb-12">
                                Feedback is how we grow, thrive, and learn.
                            </p>
                        </div>
                        <div class="flex flex-col gap-1 w-3/5">
                            <div class="flex flex-row gap-4 text-medium px-4 py-3 rounded-xl hover:bg-gray-200">
                                <div><img width="56" height="56" src="{{asset('storage/photos/feedback.png')}}"></div>

                                <div class="text-lg text-black-950">
                                    Feedback Boards
                                    <p class="text-sm text-black-700">Collect & manage customer feedback in an organized manner. </p>
                                </div>
                            </div>

                            <div class="flex flex-row gap-4 text-medium px-4 py-3 rounded-xl hover:bg-gray-200">
                                <div><img width="56" height="56" src="{{asset('storage/photos/productChangelog.png')}}"></div>

                                <div class="text-lg text-black-950">
                                    Product Roadmap
                                    <p class="text-sm text-black-700"> Enables product teams to create & visualize product plans. </p>
                                </div>
                            </div>

                            <div class="flex flex-row gap-4 text-medium px-4 py-3 rounded-xl hover:bg-gray-200">
                                <div><img width="56" height="56" src="{{asset('storage/photos/productRoadmap.png')}}"></div>

                                <div class="text-lg text-black-950">
                                    Product Changelog
                                    <p class="text-sm text-black-700"> Create & publish changelogs to communicate product releases. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="px-1 py-2.5 text-sm text-slate-500 cursor-pointer font-medium hover:text-violet-700">Pricing</div>
            <div class="px-1 py-2.5 text-sm text-slate-500 cursor-pointer font-medium hover:text-violet-700">Blog</div>
            <div class="py-2.5 text-sm text-slate-500 cursor-pointer font-medium hover:text-violet-700">
                <div itemprop="name" class="w-5 h-5 scale-90 rotate-0 hover:scale-110 hover:rotate-90 duration-500 fill-black-400 hover:fill-primary-500"> <div class="icon-5"> <svg width="100%" height="100%" viewBox="0 0 24 24" fill="inherit" xmlns="http://www.w3.org/2000/svg" class="fill-current"> <path fill-rule="evenodd" clip-rule="evenodd" d="M11.8673 4H12.1327C12.8071 8.02 15.98 11.1928 20 11.8673V12.1327C15.98 12.8072 12.8071 15.98 12.1327 20H11.8673C11.1929 15.98 8.02001 12.8072 4 12.1327V11.8673C8.02001 11.1928 11.1929 8.02 11.8673 4Z"></path> </svg> <span class="sr-only">Little Star</span> </div> </div>
            </div>
            <div class="px-1 py-2.5 text-sm text-slate-500 cursor-pointer font-medium hover:text-violet-700">Login</div>
            <div class="px-4 py-2.5 text-sm leading-[unset] text-white cursor-pointer font-medium bg-violet-700 rounded-lg transition duration-200 ease-in-out hover:shadow-[0_0_1px_3px_rgba(223,199,249,1)]">Sign up for free</div>
        </div>
        {{--end right--}}
    </nav>
</header>
