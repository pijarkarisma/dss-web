<?php

namespace App\Http\Livewire;

use App\Models\Kriteria;
use Livewire\Component;

class TableKriteriaPenilaian extends Component
{
    protected $listeners = ['kriteriaStore' => 'render', 'kriteriaDelete' => 'render'];

    public function render()
    {
        return view('livewire.components.table-kriteria-penilaian', [
            'kriterias' => Kriteria::orderBy('created_at', 'asc')->get()
        ]);
    }

    public function delete($id)
    {
        $kriteria = Kriteria::find($id);
        $kriteria->delete();

        session()->flash('success', 'Kriteria berhasil dihapus');

        $this->emit('kriteriaDelete');
    }
}
