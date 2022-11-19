<?php

namespace App\Http\Livewire;

use Livewire\Component;

class KriteriaPenilaian extends Component
{
    public function render()
    {
        return view('livewire.kriteria-penilaian')->extends('layouts.master');
    }
}
