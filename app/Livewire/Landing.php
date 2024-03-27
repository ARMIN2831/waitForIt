<?php

namespace App\Livewire;

use Livewire\Component;

class Landing extends Component
{
    /*
     $arr =
            [
                'general' => [
                    'banner' => '',
                    'logo' => '',
                    'bg-color' => 'rgb(148 163 184)',
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
                    'text' => 'new input',
                    'placeholder' => 'new input',
                    'required' => '0',
                ],
                'button' => [
                    'text-color' => 'rgb(255 255 255)',
                    'bg-color' => 'rgb(109 40 217)',
                    'border-color' => 'rgb(0 0 0)',
                    'border-width' => '0',
                    'border-radius' => '8',
                    'font-size' => '14',
                    'font-weight' => '500',
                    'text' => 'Join Waitlist',
                ],
            ];
     */
    public function render()
    {
        return view('livewire.landing');
    }
}
