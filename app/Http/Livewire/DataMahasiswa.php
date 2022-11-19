<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DataMahasiswa extends Component
{
    public function render()
    {
        return view('livewire.data-mahasiswa')->extends('layouts.master');
    }
}
