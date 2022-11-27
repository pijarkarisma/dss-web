<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mahasiswa;

class NilaiMahasiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'mahasiswa',
        'ipk',
        'penghasilan_ortu',
        'prestasi_akademik',
        'keaktifan_organisasi',
        'nilai_wawancara',
        'kondisi_tinggal',
        'motivation_letter'
    ];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }
}
