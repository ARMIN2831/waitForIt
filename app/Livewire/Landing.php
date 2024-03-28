<?php

namespace App\Livewire;

use Livewire\Component;

class Landing extends Component
{
    public $template = 'first';
    public function mount()
    {
        $user = auth()->user();
        if ($user) $this->template = ($user->template()->get())[0]->title;
    }
    public function render()
    {
        return view('templates.'.$this->template.'.livewire.landing');
    }
}
