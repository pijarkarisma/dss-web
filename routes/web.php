<?php

use App\Http\Livewire\DataMahasiswa;
use App\Http\Livewire\Home;
use App\Http\Livewire\KriteriaPenilaian;
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

Route::get('/kriteria-penilaian', KriteriaPenilaian::class)->name('kriteria.penilaian');

Route::get('/data-mahasiswa', DataMahasiswa::class)->name('data.mahasiswa');

Route::get('/data-penilaian', DataMahasiswa::class)->name('data.penilaian');

Route::get('/hasil-seleksi', DataMahasiswa::class)->name('hasil.seleksi');

Route::get('/data-mahasiswa/{nim}/edit', ModalEditMahasiswa::class)->name('data.mahasiswa.edit');

require __DIR__ . '/auth.php';
