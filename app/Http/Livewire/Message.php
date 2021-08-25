<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Message extends Component
{
    public $messages = ['First Message', 'Second Message', 'Third Message'];
    public $activeMessage;
    public $count = 0;

    public function render()
    {
        $c = $this->count % 3;
        $this->activeMessage = $this->messages[$c];

        return view('livewire.message');
    }

    public function getNewMessage()
    {
        $this->count++;
    }
}
