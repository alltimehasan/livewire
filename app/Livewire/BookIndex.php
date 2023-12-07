<?php

namespace App\Livewire;

use Livewire\Component;

class BookIndex extends Component
{
    public string $title = '';

    public function createBook()
    {
        dd($this->title);
    }

    public function render()
    {
        return view('livewire.book-index', [
            'books' => auth()->user()->books()->latest()->get(),
        ]);
    }
}
