<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Search extends Component
{
    public $searchText;
    
    public function render()
    {
        return view('livewire.search');
    }
    
    public function searchBtn()
    {
//        emitting can also be done in the view file
//        $this->emit('searchBtnWasClicked');
    }
}
