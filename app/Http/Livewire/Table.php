<?php

namespace App\Http\Livewire;

use App\Models\Mahasiswa;
use App\Models\NilaiMahasiswa;
use App\Models\SystemStatus;
use Livewire\Component;

class Table extends Component
{
    protected $listeners = ['mahasiswaStore' => 'render', 'mahasiswaUpdate' => 'render', 'mahasiswaDelete' => 'render'];

    public function render()
    {
        return view('livewire.components.table', [
            'mahasiswas' => Mahasiswa::orderBy('created_at', 'desc')->get()
        ]);
    }

    public function delete($nim)
    {
        $mahasiswa = Mahasiswa::find($nim);
        $mahasiswa->delete();

        $nilaiMahasiswa = NilaiMahasiswa::where('mahasiswa', $nim)->first();
        if (!is_null($nilaiMahasiswa)) {
            $nilaiMahasiswa->delete();

            SystemStatus::where('id', 2)->update([
                'state' => false
            ]);
        }

        session()->flash('success', 'Mahasiswa berhasil dihapus');

        $this->emit('mahasiswaDelete');
    }
}
