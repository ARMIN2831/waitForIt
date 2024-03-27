<div>
    <x-landing.header/>

    <div class="flex flex-row w-full h-screen pt-16">
        {{--project list--}}
        <div class="bg-gray-200 w-1/5 h-full z-10">
            <x-dashboard.project-list :projects="$projects"></x-dashboard.project-list>
        </div>
        {{--end project list--}}

        {{--edit project--}}
        <div class="bg-slate-200 w-3/5 h-full flex justify-center items-center z-20">

            {{--user form--}}
            <div class="form-general w-[98%] h-[98%] border border-slate-400 shadow-[0_0_20px_5px_#ccc] flex justify-center items-center">
                @if(isset($p))
                    @php
                        $general = unserialize($p->general);
                        $input = unserialize($p->input);
                        $button = unserialize($p->button);
                    @endphp
                    <x-dashboard.user-form :sign="0" :general="$general" :input="$input" :button="$button"></x-dashboard.user-form>
                @endif
            </div>
            {{--end user form--}}

        </div>
        {{--end edit project--}}

        {{--toolbar--}}
        <div class="bg-gray-200 w-1/5 h-full z-10">

            @if(isset($p))
                <x-dashboard.tool-bar :general="$general" :input="$input" :button="$button"></x-dashboard.tool-bar>
            @endif
        </div>
        {{--end toolbar--}}
    </div>
</div>
