<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekap extends Model
{
    use HasFactory;

    protected $table = "presensi";

    protected $fillable = [
        'id_siswa',
        'id_pembina',
        'tanggal_absen',
        'j_masuk',
        'st_masuk',
        'foto',
        'ket',
        'hadir',
        'sakit',
        'ijin',
        'alpha',
    ];

    protected $hidden = [];
}
