<?php

namespace App\Http\Livewire;

use App\Models\NilaiMahasiswa;
use App\Models\SystemStatus;
use Livewire\Component;

class TableFormPenilaian extends Component
{
    protected $listeners = ['nilaiMahasiswaDeleted' => 'render', 'nilaiMahasiswaStore' => 'render'];

    public function render()
    {
        return view('livewire.components.table-form-penilaian', [
            'nilai_mahasiswa' => NilaiMahasiswa::orderBy('created_at', 'asc')->get()
        ]);
    }

    public function delete($id)
    {
        $nilai_mahasiswa = NilaiMahasiswa::find($id);
        $nilai_mahasiswa->delete();

        session()->flash('success', 'Kriteria berhasil dihapus');

        SystemStatus::where('id', 2)->update([
            'state' => false
        ]);

        $this->emit('nilaiMahasiswaDeleted');
    }
}
