<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DataPenilaian extends Component
{
    public function render()
    {
        return view('livewire.data-penilaian')->extends('layouts.master');
    }
}
