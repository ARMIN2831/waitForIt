<?php

namespace App\Livewire;

use App\Models\Detail;
use App\Models\Project;
use Carbon\Carbon;
use Livewire\Component;

class Signup extends Component
{
    public $p;
    public $email;
    public $name;
    public $new = '';
    public $template = 'first';

    public function signup()
    {
        $arr = unserialize($this->p->input)['required'];
        $this->validate([
            'email' => 'required | email | unique:details,email',
            'name' => 'required',
            'new' => $arr ? 'required' : 'nullable',
        ]);
        Detail::create([
            'project_id' => $this->p->id,
            'email' => $this->email,
            'name' => $this->name,
            'new' => $this->new,
        ]);
    }
    public function mount($id = 0)
    {
        $this->p = Project::find($id);
        $today = Carbon::today();
        $view = $this->p->today;

        $anotherDate = Carbon::parse($this->p->date)->toDateString();
        if ($today->equalTo($anotherDate) and $this->p->date != null) {
            Project::whereId($id)->update(['today' => $view+1]);
        }else{
            Project::whereId($id)->update([
                'today' => 1,
                'views' => $view+$this->p->views,
                'date' => $today,
            ]);
        }
        $user = auth()->user();
        if ($user) $this->template = ($user->template()->get())[0]->title;

    }
    public function render()
    {
        return view('templates.'.$this->template.'.livewire.signup');
    }
}
