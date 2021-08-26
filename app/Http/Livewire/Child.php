<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Child extends Component
{
    public $text;

    public function mount($text = '') {
        $this->text = $text;
    }

    public function render()
    {
        return view('livewire.child');
    }

    public function goToHomePage()
    {
        session()->flash('message', 'Redirected Successfuly');
        return redirect()->to('livewire');
    }
}
