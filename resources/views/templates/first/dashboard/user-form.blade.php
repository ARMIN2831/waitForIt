<div class="w-[350px]  border border-slate-300 rounded-xl overflow-hidden relative z-30 bg-gray-50">
    @props(['general'])
    @props(['input'])
    @props(['button'])
    @props(['sign'])
    <style>
        .form-general{
            background-color: {{$general['bg-color']}};
        }
        .form-p{
            color:  {{$input['text-color']}};
        }
        .form-input{
            background-color: {{$input['bg-color']}};
            border: {{$input['border-width']}}px solid {{$input['border-color']}};
            border-radius: {{$input['border-radius']}}px;
        }
        .form-button{
            background-color: {{$button['bg-color']}};
            color: {{$button['text-color']}};
            border: {{$button['border-width']}}px solid {{$button['border-color']}};
            border-radius: {{$button['border-radius']}}px;
            font-size: {{$button['font-size']}}px;
            font-weight: {{$button['font-weight']}};
        }
        .form-error{
            color: {{$input['error-color']}};
        }
    </style>

    <div class="w-16 h-16 absolute z-40 left-[142px] top-[95px] rounded-md overflow-hidden">
        <img width="64px" height="64px" src="{{asset($general['logo'])}}" alt="">
    </div>
    <div class="w-full h-32 border border-b-slate-300">
        <img class="w-full h-full" src="{{asset($general['banner'])}}" alt="">
    </div>
    <div class="font-md w-4/5 mx-auto flex justify-center mt-12 font-semibold">
        {{$general['text']}}
    </div>
    <div class="font-md w-4/5 mx-auto flex justify-center mt-4 text-sm text-center">
        {{$general['description']}}
    </div>
    <div class="relative w-full flex flex-col justify-center items-center">
        <p class="form-p w-full pl-8 text-md font-semibold">Full Name:</p>
        <input wire:model="{{ $sign == 1 ? 'name' : '' }}" class="form-input mb-5 w-10/12 text-slate-500 py-1 px-4 focus:outline-none focus:bg-white focus:border-slate-400" type="text" name="name" placeholder="Full Name">
        @error('name')<small class="form-error absolute text-[0.65rem] bottom-0.5">{{$message}}</small>@enderror
        @if($sign == 0)<small class="form-error absolute text-[0.65rem] bottom-0.5">name field is required</small>@endif
    </div>
    <div class="relative w-full flex flex-col justify-center items-center">
        <p class="form-p w-full pl-8 text-md font-semibold">Email:</p>
        <input wire:model="{{ $sign == 1 ? 'email' : '' }}" class="form-input mb-5 w-10/12 text-slate-500 py-1 px-4 focus:outline-none focus:bg-white focus:border-slate-400" type="text" name="email" placeholder="Email">
        @error('email')<small class="form-error absolute text-[0.65rem] bottom-0.5">{{$message}}</small>@enderror
        @if($sign == 0)<small class="form-error absolute text-[0.65rem] bottom-0.5">email field is required</small>@endif
    </div>
    @if($input['new-input'] != 'not')
        <div class="relative w-full flex flex-col justify-center items-center">
            <p class="form-p w-full pl-8 text-md font-semibold">{{ $input['text'] }}:</p>
            @if($input['new-input'] == 'textarea')
                <textarea wire:model="{{ $sign == 1 ? 'new' : '' }}" class="form-input mb-5 w-10/12 text-slate-500 py-1 px-4 focus:outline-none focus:bg-white focus:border-slate-400" type="{{ $input['new-input'] }}"></textarea>
            @else
                <input wire:model="{{ $sign == 1 ? 'new' : '' }}" class="form-input mb-5 w-10/12 text-slate-500 py-1 px-4 focus:outline-none focus:bg-white focus:border-slate-400" type="{{ $input['new-input'] }}" name="email" placeholder="{{ $input['placeholder'] }}">
            @endif
            @if($input['required'] == true)
                @error('new')<small class="form-error absolute text-[0.65rem] bottom-0.5">{{ $input['placeholder'] }} field is required</small>@enderror
                @if($sign == 0)<small class="form-error absolute text-[0.65rem] bottom-0.5">{{ $input['placeholder'] }} field is required</small>@endif
            @endif
        </div>
    @endif
    <div class="relative w-full flex flex-col justify-center items-center">
        <button wire:click="{{ $sign == 1 ? 'signup' : '' }}" class="form-button px-16 py-2 my-4 leading-[unset] cursor-pointer transition duration-200 ease-in-out hover:shadow-[0_0_1px_3px_rgba(223,199,249,1)]">{{$button['text']}}</button>
    </div>
</div>
