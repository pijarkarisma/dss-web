<?php

namespace App\Http\Livewire;

use App\Models\Mahasiswa;
use App\Models\NilaiMahasiswa;
use App\Models\SystemStatus;
use Livewire\Component;

class ModalTambahFormPenilaian extends Component
{
    public $id_form;
    public $mahasiswas;
    public $mahasiswa;
    public $ipk;
    public $penghasilan_ortu;
    public $prestasi_akademik;
    public $keaktifan_organisasi;
    public $nilai_wawancara;
    public $kondisi_tinggal;
    public $motivation_letter;

    public function mount()
    {
        $this->mahasiswas = Mahasiswa::select('nim', 'nama_mhs')->get()->toArray();
        $this->mahasiswa = $this->mahasiswas[0]['nim'];
    }

    public function render()
    {
        return view('livewire.components.modal-tambah-form-penilaian');
    }

    public function store()
    {
        $this->validate([
            'mahasiswa' => 'required|unique:nilai_mahasiswas,mahasiswa',
            'ipk' => 'required',
            'penghasilan_ortu' => 'required',
            'prestasi_akademik' => 'required',
            'keaktifan_organisasi' => 'required',
            'nilai_wawancara' => 'required',
            'kondisi_tinggal' => 'required',
            'motivation_letter' => 'required'
        ]);

        NilaiMahasiswa::create([
            'mahasiswa' => $this->mahasiswa,
            'ipk' => $this->ipk,
            'penghasilan_ortu' => $this->penghasilan_ortu,
            'prestasi_akademik' => $this->prestasi_akademik,
            'keaktifan_organisasi' => $this->keaktifan_organisasi,
            'nilai_wawancara' => $this->nilai_wawancara,
            'kondisi_tinggal' => $this->kondisi_tinggal,
            'motivation_letter' => $this->motivation_letter
        ]);

        $this->mahasiswa = $this->mahasiswas[0]['nim'];
        $this->ipk = NULL;
        $this->penghasilan_ortu = NULL;
        $this->prestasi_akademik = NULL;
        $this->keaktifan_organisasi = NULL;
        $this->nilai_wawancara = NULL;
        $this->kondisi_tinggal = NULL;
        $this->motivation_letter = NULL;

        SystemStatus::where('id', 2)->update([
            'state' => false
        ]);

        session()->flash('success', 'Data berhasil ditambahkan');

        $this->emit('nilaiMahasiswaStore');
    }
}
