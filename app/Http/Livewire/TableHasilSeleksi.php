<?php

namespace App\Http\Livewire;

use App\Models\Mahasiswa;
use App\Models\NilaiMahasiswa;
use Livewire\Component;

class TableHasilSeleksi extends Component
{
    public $nilaiMahasiswas;
    public $mahasiswas;

    public function mount()
    {
        $this->nilaiMahasiswas = NilaiMahasiswa::orderBy('hasil_akhir', 'desc')->get()->toArray();
        $this->mahasiswas = Mahasiswa::with('mahasiswa')->whereIn('nim', array_column($this->nilaiMahasiswas, 'mahasiswa'))->get()->toArray();
    }

    public function render()
    {
        return view('livewire.components.table-hasil-seleksi');
    }
}
