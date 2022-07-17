<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{
    use HasFactory;

    protected $table = "presensi";

    protected $fillable = [
        'id_user',
        'tanggal_absen',
        'j_masuk',
        'foto',
        'ket',
    ];

    protected $hidden = [];

    public function presensis()
    {
        return $this->belongsToMany(Presensi::class);
    }
}
