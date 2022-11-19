<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HasilSeleksi extends Component
{
    public function render()
    {
        return view('livewire.hasil-seleksi')->extends('layouts.master');
    }
}
