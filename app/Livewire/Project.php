<?php

namespace App\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class Project extends Component
{
    public $projects;
    public $p;
    public $count = 0;
    public function mount($id)
    {
        $this->projects = \App\Models\Project::select('id','title')->where('user_id',(auth()->user())->id)->get();
        $this->p = \App\Models\Project::with('detail')->find($id);
        $today = Carbon::today();
        foreach ($this->p->detail as $detail) {
            $anotherDate = Carbon::parse($detail->created_at)->toDateString();
            if ($today->equalTo($anotherDate)) $this->count++;
        }
    }
    public function render()
    {
        return view('livewire.project');
    }
}
