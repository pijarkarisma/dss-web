<?php

namespace App\Http\Livewire;

use App\Models\Kriteria;
use Livewire\Component;

class ModalTambahKriteria extends Component
{
    public $nama_kriteria;
    public $bobot;

    public function render()
    {
        return view('livewire.components.modal-tambah-kriteria');
    }

    public function store()
    {
        $this->validate([
            'nama_kriteria' => 'required|unique:kriterias,nama_kriteria',
            'bobot' => 'required'
        ]);

        Kriteria::create([
            'nama_kriteria' => $this->nama_kriteria,
            'bobot' => $this->bobot
        ]);

        $this->nama_kriteria = NULL;
        $this->bobot = NULL;

        session()->flash('success', 'Data berhasil ditambahkan');

        $this->emit('kriteriaStore');
    }
}
