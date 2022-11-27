<?php

namespace App\Http\Livewire;

use App\Models\Kriteria;
use App\Models\NilaiMahasiswa;
use App\Models\SystemStatus;
use Livewire\Component;

class AnalisisAlternatif extends Component
{
    public $list_kriteria;
    public $infoCopy;
    public $bobotAlternatif = [];
    public $pilihanBobots = [];
    public $nilaiMahasiswa = [];
    public $rankings = [];
    public $rankingBobot = [];
    protected $listeners = ['optionBobotUpdated' => '$refresh'];

    public function mount()
    {
        $kriterias = Kriteria::all()->toArray();
        $this->list_kriteria = $kriterias;
        $this->infoCopy = ["Yang nilainya tertinggi", "Yang nilainya terendah"];
        $this->nilaiMahasiswa = NilaiMahasiswa::all()->toArray();
        if (count($this->nilaiMahasiswa) > 0) {
            $this->fillPilihanBobot();
            $this->kalkulasiBobot();
        }
    }

    public function render()
    {
        return view('livewire.analisis-alternatif')->extends('layouts.master');
    }

    public function optionChange($selectedId, $selectedValue)
    {
        foreach ($this->pilihanBobots as &$pilihanBobot) {
            if ($selectedId == $pilihanBobot['id_kriteria']) {
                $pilihanBobot['pilihan_bobot'] = (int)$selectedValue;
            }
        }

        $this->kalkulasiBobot();
        $this->emit('optionBobotUpdated');
    }

    public function fillPilihanBobot()
    {
        foreach ($this->list_kriteria as $kriteria) {
            $idKriteria = $kriteria['id_kriteria'];
            $pilihanBobot = 1;
            array_push($this->pilihanBobots, ['id_kriteria' => $idKriteria, 'pilihan_bobot' => $pilihanBobot]);
        }
    }

    public function kalkulasiBobot()
    {
        $pilihanBobots = $this->pilihanBobots;
        $nilaiMahasiswas = NilaiMahasiswa::all()->toArray();
        $bobotTertinggis = [];
        $nilaiTerhadapBobots = [];
        $totalNilaiTerhadapBobots = [];
        $bobotAlternatifs = [];

        // Cari nilai tertinggi
        foreach ($this->list_kriteria as $kriteria) {
            $tertinggi = 0;
            $column = array_column($nilaiMahasiswas, $kriteria['id_kriteria']);

            foreach ($pilihanBobots as $pilihanBobot) {
                if ($kriteria['id_kriteria'] == $pilihanBobot['id_kriteria']) {
                    if ($pilihanBobot['pilihan_bobot'] == 0) {
                        $tertinggi = max($column);
                    } else {
                        $tertinggi = min($column);
                    }
                }
            }

            array_push($bobotTertinggis, ['id_kriteria' => $kriteria['id_kriteria'], 'tertinggi' => $tertinggi]);
        }

        // Kalkulasi bobot masing-masing alternatif
        foreach ($nilaiMahasiswas as $key => $nilai) {
            $idAlternatif = $nilai['mahasiswa'];
            foreach ($bobotTertinggis as $key => $bobot) {
                $hasilPerbandingan = $nilai[$bobot['id_kriteria']] / $bobot['tertinggi'];
                $idKriteria = $bobot['id_kriteria'];
                array_push($nilaiTerhadapBobots, ['id_alternatif' => $idAlternatif, 'id_kriteria' => $idKriteria, 'hasil_perbandingan' => $hasilPerbandingan]);
            }
        }

        // Kalkulasi total perbandingan nilai terhadap bobot
        foreach ($this->list_kriteria as $key => $kriteria) {
            $idKriteria = $kriteria['id_kriteria'];
            $sumNilaiTerhadapBobot = 0;

            foreach ($nilaiTerhadapBobots as $key => $item) {
                if ($item['id_kriteria'] == $idKriteria) {
                    $sumNilaiTerhadapBobot += $item['hasil_perbandingan'];
                }
            }
            array_push($totalNilaiTerhadapBobots, ['id_kriteria' => $idKriteria, 'total' => $sumNilaiTerhadapBobot]);
        }

        // Kalkulasi hasil bobot alternatif
        foreach ($nilaiTerhadapBobots as $key => $nilaiTerhadapBobot) {
            $idAlternatif = $nilaiTerhadapBobot['id_alternatif'];
            $idKriteria = $nilaiTerhadapBobot['id_kriteria'];
            $bobotAlternatif = 0;

            foreach ($totalNilaiTerhadapBobots as $key => $totalNilaiBobot) {
                if ($idKriteria == $totalNilaiBobot['id_kriteria']) {
                    $bobotAlternatif = $nilaiTerhadapBobot['hasil_perbandingan'] / $totalNilaiBobot['total'];
                }
            }
            array_push($bobotAlternatifs, ['id_alternatif' => $idAlternatif, 'id_kriteria' => $idKriteria, 'bobot' => $bobotAlternatif]);
        }

        $this->bobotAlternatif = $bobotAlternatifs;
        $this->kalkulasiRanking();
    }

    public function kalkulasiRanking()
    {
        $kriterias = Kriteria::all()->toArray();
        $bobotAkhir = [];
        $rankingBobot = [];

        // Kalkulasi bobot akhir masing-masing alternatif terhadap kriteria
        foreach ($kriterias as $kriteria) {
            $idKriteria = $kriteria['id_kriteria'];
            $bobotKriteria = $kriteria['bobot'];
            $idAlternatif = '';
            $newBobot = [];

            foreach ($this->nilaiMahasiswa as $index => $alternatif) {
                foreach ($this->bobotAlternatif as $bobotAlternatif) {
                    if ($idKriteria == $bobotAlternatif['id_kriteria']) {
                        $calculate = $bobotKriteria * $bobotAlternatif['bobot'];
                        $idAlternatif = $alternatif['mahasiswa'];
                        array_push($newBobot, $calculate);
                    }
                }
                array_push($bobotAkhir, ['id_alternatif' => $idAlternatif, 'id_kriteria' => $idKriteria, 'bobot' => $newBobot[$index]]);
            }
        }

        foreach ($this->nilaiMahasiswa as $alternatif) {
            $idAlternatif = $alternatif['mahasiswa'];
            $sumRankingBobot = 0;

            foreach ($bobotAkhir as $item) {
                if ($alternatif['mahasiswa'] == $item['id_alternatif']) {
                    $sumRankingBobot += $item['bobot'];
                }
            }
            array_push($rankingBobot, ['id_alternatif' => $idAlternatif, 'bobot' => $sumRankingBobot]);
        }

        $this->rankings = $bobotAkhir;
        $this->rankingBobot = $rankingBobot;
    }

    public function updateHasilSeleksi()
    {
        foreach ($this->rankingBobot as $rb) {
            NilaiMahasiswa::where('mahasiswa', $rb['id_alternatif'])->update([
                'hasil_akhir' => $rb['bobot']
            ]);
        }

        SystemStatus::where('id', 2)->update([
            'state' => true
        ]);

        $this->emit('hasilSeleksiUpdated');
        return redirect(route('hasil.seleksi'));
    }
}
