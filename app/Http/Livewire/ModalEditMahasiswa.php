<?php

namespace App\Http\Livewire;

use App\Models\Mahasiswa;
use Livewire\Component;

class ModalEditMahasiswa extends Component
{
    public $nim;
    public $nama_mhs;
    public $tgl_lahir;
    public $alamat;
    public $telepon;
    public $semester;

    public function mount($nim)
    {
        $mahasiswa = Mahasiswa::find($nim);
        $this->nim = $mahasiswa->nim;
        $this->nama_mhs = $mahasiswa->nama_mhs;
        $this->tgl_lahir = $mahasiswa->tgl_lahir;
        $this->alamat = $mahasiswa->alamat;
        $this->telepon = $mahasiswa->telepon;
        $this->semester = $mahasiswa->semester;
    }

    public function render()
    {
        return view('livewire.components.modal-edit-mahasiswa');
    }

    public function update()
    {
        $this->validate([
            // 'nim' => 'required|unique:mahasiswas,nim,' . $this->nim . ',nim',
            'nama_mhs' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'semester' => 'required'
        ]);

        Mahasiswa::where('nim', $this->nim)->update([
            // 'nim' => $this->nim,
            'nama_mhs' => $this->nama_mhs,
            'tgl_lahir' => $this->tgl_lahir,
            'alamat' => $this->alamat,
            'telepon' => $this->telepon,
            'semester' => $this->semester
        ]);

        // $this->nim = NULL;
        // $this->nama_mhs = NULL;
        // $this->tgl_lahir = NULL;
        // $this->alamat = NULL;
        // $this->telepon = NULL;
        // $this->semester = NULL;

        $this->emit('mahasiswaStore');
    }
}
