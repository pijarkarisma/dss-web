<?php

namespace App\Http\Livewire;

use App\Models\Mahasiswa;
use Livewire\Component;

class Table extends Component
{
    // public $mahasiswas;
    protected $listeners = ['mahasiswaStore' => 'render', 'mahasiswaUpdate' => 'render', 'mahasiswaDelete' => 'render'];

    public function render()
    {
        // $this->mahasiswas = Mahasiswa::orderBy('created_at', 'desc')->get();
        return view('livewire.components.table', [
            'mahasiswas' => Mahasiswa::orderBy('created_at', 'desc')->get()
        ]);
    }

    public function delete($nim)
    {
        $mahasiswa = Mahasiswa::find($nim);
        $mahasiswa->delete();

        session()->flash('success', 'Mahasiswa berhasil dihapus');

        $this->emit('mahasiswaDelete');
    }
}