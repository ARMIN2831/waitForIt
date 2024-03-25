<?php

namespace App\Livewire;

use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Dashboard extends Component
{
    public $projects;
    public $section;
    public $p;

    public function optionsHandle($index, $value)
    {
        switch ($index) {
            case 'text':
                break;

            case 'description':
                break;

            case 'file':
                break;

            default:

        }


        $class = $index . '[' . $value . ']';
    }

    public function addProject($title)
    {
        $arr =
            [
                'general' => [
                    'banner' => '',
                    'logo' => '',
                    'bg-color' => 'rgb(212 219 227)',
                    'text' => 'the title of form',
                    'description' => 'the description of this form for testing waitForIt site',
                ],
                'input' => [
                    'bg-color' => 'rgb(249 250 251)',
                    'border-color' => 'rgb(203 213 225)',
                    'text-color' => 'rgb(100 116 139)',
                    'error-color' => 'rgb(153 27 27)',
                    'border-width' => '1',
                    'border-radius' => '8',
                    'new-input' => 'not',
                    'text' => '',
                ],
                'button' => [
                    'text-color' => 'rgb(255 255 255)',
                    'bg-color' => 'rgb(109 40 217)',
                    'border-color' => 'rgb(0 0 0)',
                    'border-width' => '0',
                    'border-radius' => '8',
                    'font-size' => '14',
                    'font-weight' => '400',
                    'text' => 'Join Waitlist',
                ],
            ];
        $this->projects->push(Project::create(['user_id'=>(auth()->user())->id,'title'=>$title,
            'general' => serialize($arr['general']),
            'input' => serialize($arr['input']),
            'button' => serialize($arr['button']),
            ]));
    }
    public function mount($id = 0)
    {
        $this->projects = Project::where('user_id',(auth()->user())->id)->get();
        if ($id != 0) $this->p = Project::find($id);
    }
    public function render()
    {
        return view('livewire.dashboard');
    }
}
