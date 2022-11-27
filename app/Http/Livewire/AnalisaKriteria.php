<?php

namespace App\Http\Livewire;

use App\Models\AnalisaKriterias;
use App\Models\Kriteria;
use App\Models\NilaiMahasiswa;
use App\Models\SystemStatus;
use Livewire\Component;
use stdClass;

class AnalisaKriteria extends Component
{
    public $kriteria_kiri;
    public $kriteria_kanan;
    public $exclude = [];
    public $nilaiStorage = [];
    protected $listeners = ['nilaiUpdated' => 'render'];
    public $element;
    protected $rules = [
        'element.*.nilaiKiri' => 'required',
        'element.*.nilaiKanan' => 'required',
        'element.*.nilai' => 'required'
    ];
    public $totalAntarKriteria = [];
    public $bobotPerbandingan = [];

    public function mount()
    {
        $this->nilaiStorage = AnalisaKriterias::all()->toArray();
        $this->kriteria_kiri = Kriteria::select('id_kriteria')->pluck('id_kriteria');
        $this->kriteria_kanan = $this->kriteria_kiri;
        $exclude = [];

        if (is_null($this->nilaiStorage)) {
            foreach ($this->kriteria_kiri as $index => $kiri) {
                foreach ($this->kriteria_kanan as $kanan) {
                    $objectNilai = [];
                    $objectNilai['id'] = $kiri . "-" . $kanan;
                    $objectNilai['nilaiKiri'] = $kiri;
                    $objectNilai['nilaiKanan'] = $kanan;
                    if ($kiri == $kanan) {
                        $objectNilai['nilai'] = 1;
                    } else if (in_array($kanan, $exclude)) {
                        $nilaiKiri = NULL;
                        foreach ($this->nilaiStorage as $element) {
                            if ($kanan . "-" . $kiri == $element['id']) {
                                $nilaiKiri = $element['nilai'];
                            }
                        }
                        $objectNilai['nilai'] = 1 / $nilaiKiri;
                    } else {
                        $objectNilai['nilai'] = 2;
                    }
                    array_push($this->nilaiStorage, $objectNilai);
                }
                array_push($exclude, $kiri);
            }
        }
    }

    public function render()
    {
        return view('livewire.analisa-kriteria')->extends('layouts.master');
    }

    public function update()
    {
        foreach ($this->nilaiStorage as $item) {
            AnalisaKriterias::where('id', $item['id'])->update([
                'nilai' => $item['nilai'],
                'nilaiKiri' => $item['nilaiKiri'],
                'nilaiKanan' => $item['nilaiKanan']
            ]);
        }

        $this->saveBobot();

        session()->flash('success', 'Data berhasil ditambahkan');
    }

    public function nilaiChange($selectedId, $selectedValue)
    {
        $kriteria = explode("-", $selectedId);
        foreach ($this->nilaiStorage as &$nilai) {
            if ($nilai['id'] == $selectedId) {
                $nilai['nilai'] = (int)$selectedValue;
            }
            if ($nilai['nilaiKiri'] == $kriteria[1] && $nilai['nilaiKanan'] == $kriteria[0]) {
                $nilai['nilai'] = 1 / (int)$selectedValue;
            }
        }

        SystemStatus::where('id', 1)->update([
            'state' => false
        ]);

        $this->emit('nilaiUpdated');
    }

    public function saveBobot()
    {
        $totalAntarKriteria = [];
        $bobotPerbandingan = [];
        foreach ($this->kriteria_kanan as $kanan) {
            $total = 0;

            foreach ($this->kriteria_kiri as $kiri) {
                foreach ($this->nilaiStorage as $nilai) {
                    if ($kiri . "-" . $kanan == $nilai['id']) {
                        $total += $nilai['nilai'];
                    }
                }
            }
            array_push($totalAntarKriteria, $total);
        }

        foreach ($this->kriteria_kiri as $index => $kiri) {
            $totalHorizontal = 0;

            foreach ($this->kriteria_kanan as $index => $kanan) {
                foreach ($this->nilaiStorage as $nilai) {
                    if ($kiri . "-" . $kanan == $nilai['id']) {
                        $totalHorizontal += $nilai['nilai'] / $totalAntarKriteria[$index];
                    }
                }
            }

            $bobotObject = [];
            $bobotObject['id'] = $kiri;
            $bobotObject['bobot'] = $totalHorizontal / count($this->kriteria_kanan);
            array_push($bobotPerbandingan, $bobotObject);
        }

        foreach ($bobotPerbandingan as $index => $kriteria) {
            Kriteria::where('id_kriteria', $kriteria['id'])->update([
                'bobot' => $kriteria['bobot']
            ]);
        }

        SystemStatus::where('id', 1)->update([
            'state' => true
        ]);

        $this->emit('bobotUpdated');
        return redirect()->to(route('analisis.alternatif'));
    }
}
