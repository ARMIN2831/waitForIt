<?php

namespace App\Livewire;

use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class Dashboard extends Component
{
    use WithFileUploads;
    public $projects;
    public $p;
    public $photo;
    public $template = 'first';

    public function optionsHandle($section ,$index, $value)
    {
        $arr = unserialize($this->p->$section);
        if ($index == 'logo' || $index == 'banner'){
            $value = 'storage/photos/'.explode('/',$this->photo->store('public/photos'))[2];
        }
        $arr[$index] = $value;
        $arr = serialize($arr);
        $this->p->$section = $arr;
        Project::whereId($this->p->id)->update([$section=>$arr]);
    }

    public function addProject($title)
    {
        $this->projects->push(Project::create(['user_id'=>(auth()->user())->id,'title'=>$title]));
    }
    public function deleteProject($id)
    {
        Project::whereId($id)->delete();
        return redirect()->route('dashboard');
    }
    public function mount($id = 0)
    {
        $this->projects = Project::select('id','title')->where('user_id',(auth()->user())->id)->get();
        if ($id != 0) $this->p = Project::find($id);
        $user = auth()->user();
        if ($user and $user->template) $this->template = ($user->template()->get())[0]->title;
    }
    public function render()
    {
        return view('livewire.templates.'.$this->template.'.livewire.dashboard');
    }
}
