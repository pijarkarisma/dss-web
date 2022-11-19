<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Route;
use Livewire\Component;

class SidebarMenu extends Component
{
    public $currentActivePage;

    public function mount()
    {
        $this->currentActivePage = Route::currentRouteName();
    }

    public function render()
    {
        return view('livewire.sidebar-menu');
    }
}
