<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Navbar extends Component
{
    public $currentUser;

    public function mount()
    {
        $this->currentUser = auth()->user()->name;
    }

    public function render()
    {
        return view('livewire.navbar');
    }
}
