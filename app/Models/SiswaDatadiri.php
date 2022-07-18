<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;

class SiswaDatadiri extends Model
{
    use HasFactory;

    protected $table = 'users';

    protected $fillable = [
        'nama',
        'username',
        'email',
        'password',
        'kelas',
        'nta',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'agama',
        'alamat',
        'no_tlp',
        'roles',    
        'id_regu',
        'id_golongan',
        'jabatan',
        'foto'
    ];

    protected $hidden = [];

    public function users()
    {
        return $this->belongsToMany(SiswaDatadiri::class);
    }

    public function golongan(){
        return $this -> belongsTo('App\Models\Golongan', 'id_golongan');
    }
}
