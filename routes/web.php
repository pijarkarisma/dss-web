<?php

use App\Http\Livewire\AnalisaKriteria;
use App\Http\Livewire\AnalisisAlternatif;
use App\Http\Livewire\DataMahasiswa;
use App\Http\Livewire\DataPenilaian;
use App\Http\Livewire\EditDataMahasiswa;
use App\Http\Livewire\EditFormPenilaian;
use App\Http\Livewire\EditKriteria;
use App\Http\Livewire\FormPenilaian;
use App\Http\Livewire\HasilSeleksi;
use App\Http\Livewire\Home;
use App\Http\Livewire\ModalEditMahasiswa;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', Home::class)->middleware(['auth'])->name('dashboard');

Route::get('/data-mahasiswa', DataMahasiswa::class)->name('data.mahasiswa');

Route::get('/data-penilaian', DataPenilaian::class)->name('data.penilaian');

Route::get('/form-penilaian', FormPenilaian::class)->name('form.penilaian');

Route::get('/hasil-seleksi', HasilSeleksi::class)->name('hasil.seleksi');

//Edit page
Route::get('/data-mahasiswa/{nim}/edit', EditDataMahasiswa::class)->name('data.mahasiswa.edit');

Route::get('/data-penilaian/{id}/edit', EditKriteria::class)->name('data.penilaian.edit');

Route::get('/form-penilaian/{id}/edit', EditFormPenilaian::class)->name('form.penilaian.edit');

//Calculation page
Route::get('/analisa-kriteria', AnalisaKriteria::class)->name('analisa.kriteria');

Route::get('/analisis-alternatif', AnalisisAlternatif::class)->name('analisis.alternatif');

require __DIR__ . '/auth.php';
