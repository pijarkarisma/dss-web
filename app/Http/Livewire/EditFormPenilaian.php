<?php

namespace App\Http\Livewire;

use App\Models\Mahasiswa;
use App\Models\NilaiMahasiswa;
use App\Models\SystemStatus;
use Livewire\Component;

class EditFormPenilaian extends Component
{
    public $idNilaiMhs;
    public $ipk;
    public $mahasiswa;
    public $penghasilan_ortu;
    public $prestasi_akademik;
    public $keaktifan_organisasi;
    public $nilai_wawancara;
    public $kondisi_tinggal;
    public $motivation_letter;

    public function mount($id)
    {
        $currentNilaiMahasiswa = NilaiMahasiswa::find($id);
        $this->ipk = number_format((float)$currentNilaiMahasiswa->ipk, 2);
        $this->mahasiswa = Mahasiswa::with('mahasiswa')->where('nim', $currentNilaiMahasiswa->mahasiswa)->get()->first();
        $this->penghasilan_ortu = $currentNilaiMahasiswa->penghasilan_ortu;
        $this->prestasi_akademik = $currentNilaiMahasiswa->prestasi_akademik;
        $this->keaktifan_organisasi = $currentNilaiMahasiswa->keaktifan_organisasi;
        $this->nilai_wawancara = $currentNilaiMahasiswa->nilai_wawancara;
        $this->kondisi_tinggal = $currentNilaiMahasiswa->kondisi_tinggal;
        $this->motivation_letter = $currentNilaiMahasiswa->motivation_letter;
        $this->idNilaiMhs = $id;
    }

    public function render()
    {
        return view('livewire.edit-form-penilaian')->extends('layouts.master');
    }

    public function update()
    {
        $this->validate([
            'ipk' => 'required',
            'penghasilan_ortu' => 'required',
            'prestasi_akademik' => 'required',
            'keaktifan_organisasi' => 'required',
            'nilai_wawancara' => 'required',
            'kondisi_tinggal' => 'required',
            'motivation_letter' => 'required'
        ]);

        NilaiMahasiswa::where('id', $this->idNilaiMhs)->update([
            'ipk' => $this->ipk,
            'penghasilan_ortu' => $this->penghasilan_ortu,
            'prestasi_akademik' => $this->prestasi_akademik,
            'keaktifan_organisasi' => $this->keaktifan_organisasi,
            'nilai_wawancara' => $this->nilai_wawancara,
            'kondisi_tinggal' => $this->kondisi_tinggal,
            'motivation_letter' => $this->motivation_letter,
        ]);

        SystemStatus::where('id', 2)->update([
            'state' => false
        ]);

        $this->emit('dataPenilaianUpdated');
        return redirect()->route('form.penilaian');
    }
}
