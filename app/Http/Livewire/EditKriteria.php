<?php

namespace App\Http\Livewire;

use App\Models\Kriteria;
use Livewire\Component;

class EditKriteria extends Component
{
    public $id_kriteria;
    public $nama_kriteria;

    public function mount($id)
    {
        $currentKriteria = Kriteria::find($id);
        $this->id_kriteria = $id;
        $this->nama_kriteria = $currentKriteria->nama_kriteria;
    }

    public function render()
    {
        return view('livewire.edit-kriteria')->extends('layouts.master');
    }

    public function update()
    {
        $this->validate([
            'nama_kriteria' => 'required|unique:kriterias,nama_kriteria,' . $this->id_kriteria . ',id_kriteria',
        ]);

        Kriteria::where('id_kriteria', $this->id_kriteria)->update([
            'nama_kriteria' => $this->nama_kriteria
        ]);

        $this->emit('kriteriaUpdate');
        return redirect()->route('data.penilaian');
    }
}
