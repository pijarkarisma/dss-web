<?php

namespace App\Http\Livewire;

use App\Models\Kriteria;
use Livewire\Component;

class ModalTambahKriteria extends Component
{
    public $id_kriteria;
    public $nama_kriteria;
    public $bobot;
    // public $penghasilan_ortu;
    // public $prestasi_akademik;
    // public $keaktifan_organisasi;
    // public $nilai_wawancara;
    // public $kondisi_tinggal;
    // public $motivation_letter;
    public $list_kriteria = ['ipk', 'penghasilan_ortu', 'prestasi_akademik', 'keaktifan_organisasi', 'nilai_wawancara', 'kondisi_tinggal', 'motivation_letter'];
    public $list_nama_kriteria = ['IPK', 'Penghasilan orang tua', 'Prestasi akademik', 'Keaktifan organisasi', 'Nilai wawancara', 'Kondisi tempat tinggal', 'Motivation letter'];

    public function mount()
    {
        $this->id_kriteria = $this->list_kriteria[0];;
        $this->nama_kriteria = $this->list_nama_kriteria[0];
        $this->bobot = 0;
    }

    public function render()
    {
        return view('livewire.components.modal-tambah-kriteria');
    }

    public function onChangeOption($selectedIndex)
    {
        $list_nama_kriteria = $this->list_nama_kriteria;
        // $currentSelected = Kriteria::find($this->list_kriteria[$selectedIndex]);
        $this->nama_kriteria = $list_nama_kriteria[$selectedIndex];
    }

    public function store()
    {
        $this->validate([
            'id_kriteria' => 'required|unique:kriterias,id_kriteria',
            'nama_kriteria' => 'required|unique:kriterias,nama_kriteria',
            'bobot' => 'required'
        ]);

        Kriteria::create([
            'id_kriteria' => $this->id_kriteria,
            'nama_kriteria' => $this->nama_kriteria,
            'bobot' => $this->bobot
        ]);

        // $this->id_kriteria = NULL;
        // $this->nama_kriteria = NULL;

        session()->flash('success', 'Data berhasil ditambahkan');

        $this->emit('kriteriaStore');
    }
}
