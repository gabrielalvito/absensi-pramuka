<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembina extends Model
{
    use HasFactory;

    protected $table = "users";

    protected $fillable = [
        'nta',
        'nama',
        'pembina',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'agama',
        'alamat',
        'no_tlp',
        'golongan',
        'jabatan',
    ];

    protected $hidden = [];
}
