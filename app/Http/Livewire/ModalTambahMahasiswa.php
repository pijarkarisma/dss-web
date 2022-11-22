<?php

namespace App\Http\Livewire;

use App\Models\Mahasiswa;
use Livewire\Component;

class ModalTambahMahasiswa extends Component
{
    public $nim;
    public $nama_mhs;
    public $tgl_lahir;
    public $alamat;
    public $telepon;
    public $semester;

    public function render()
    {
        return view('livewire.components.modal-tambah-mahasiswa');
    }

    public function store()
    {
        $this->validate([
            'nim' => 'required|unique:mahasiswas,nim',
            'nama_mhs' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'semester' => 'required'
        ]);

        Mahasiswa::create([
            'nim' => $this->nim,
            'nama_mhs' => $this->nama_mhs,
            'tgl_lahir' => $this->tgl_lahir,
            'alamat' => $this->alamat,
            'telepon' => $this->telepon,
            'semester' => $this->semester
        ]);

        $this->nim = NULL;
        $this->nama_mhs = NULL;
        $this->tgl_lahir = NULL;
        $this->alamat = NULL;
        $this->telepon = NULL;
        $this->semester = NULL;

        session()->flash('success', 'Data berhasil ditambahkan');

        $this->emit('mahasiswaStore');
    }
}
