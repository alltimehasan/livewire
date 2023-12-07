<?php

namespace App\Livewire;

use Livewire\Component;

class Example extends Component
{
    public $counter = 0;

    public function increment()
    {
        return $this->counter++;    
    }

    public function render()
    {
        return view('livewire.example');
    }
}
