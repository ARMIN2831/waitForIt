<div class="form-general w-screen h-screen border border-slate-400 shadow-[0_0_20px_5px_#ccc] flex justify-center items-center">
    @if(isset($p))
        @php
            $general = unserialize($p->general);
            $input = unserialize($p->input);
            $button = unserialize($p->button);
        @endphp
        <x-dashboard.user-form :sign="1" :general="$general" :input="$input" :button="$button"></x-dashboard.user-form>
    @endif
</div>
