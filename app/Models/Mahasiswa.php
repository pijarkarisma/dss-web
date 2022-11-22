<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $primaryKey = 'nim';

    protected $fillable = [
        'nim',
        'nama_mhs',
        'tgl_lahir',
        'alamat',
        'telepon',
        'semester'
    ];
}
