<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_kriteria';
    public $incrementing = false;

    protected $fillable = [
        'id_kriteria',
        'nama_kriteria',
        'bobot'
    ];
}
