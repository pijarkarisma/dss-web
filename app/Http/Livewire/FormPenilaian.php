<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FormPenilaian extends Component
{
    public function render()
    {
        return view('livewire.form-penilaian')->extends('layouts.master');
    }
}
