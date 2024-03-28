<div>
    @include('templates.'. $template .'.landing.header')

    <div class="flex flex-row w-full h-screen pt-16">
        {{--project list--}}
        <div class="bg-gray-200 w-1/5 h-full z-10">
            @include('templates.'. $template .'.dashboard.project-list', ['projects' => $projects])
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
                    @include('templates.'. $template .'.dashboard.user-form', ['general' => $general,'input' => $input,'button' => $button,'sign' => 0])
                @endif
            </div>
            {{--end user form--}}

        </div>
        {{--end edit project--}}

        {{--toolbar--}}
        <div class="bg-gray-200 w-1/5 h-full z-10">

            @if(isset($p))
                @include('templates.'. $template .'.dashboard.tool-bar', ['general' => $general,'input' => $input,'button' => $button])
            @endif
        </div>
        {{--end toolbar--}}
    </div>
</div>
