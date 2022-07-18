<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regu extends Model
{
    use HasFactory;
    
    protected $table = "regu";

    protected $fillable = [
        'nama_regu'
    ];

    public function data_golongans(){
        return $this -> hasMany('App\Models\User', 'id_regu');
    }
}
