<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FirstComponent extends Component
{
    public $buttonText;
    public $display = '';
    protected $listeners = [
        'hideButton',
    ];
    
    public function render()
    {
        $this->buttonText = 'Apply';
        return view('livewire.first-component');
    }
    
    public function hideButton()
    {
        $this->display ='hidden';
    }
}
