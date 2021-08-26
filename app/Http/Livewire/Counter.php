<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $counter = 0;
    protected $listeners = [
//        using the same name as event
//        'searchBtnWasClicked',

//        renaming the listener
        'searchBtnWasClicked' => 'searchButtonListener'
    ];
    
    public function render()
    {
        return view('livewire.counter');
    }

//    public function searchBtnWasClicked()
//    {
//        $this->counter++;
//    }

//    public function searchButtonListener()
    public function searchButtonListener($increment)
    {
//        $this->counter++;
        $this->counter += $increment;
    }
}
