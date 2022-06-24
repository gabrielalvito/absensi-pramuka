<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Golongan extends Model
{
    use HasFactory;
    
    protected $table = "golongan";

    protected $fillable = [
        'golongan',
        'no_kapling',
        'nama_regu', 
    ];
}
