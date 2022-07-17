<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User01 extends Model
{
    use HasFactory;

    protected $table = "users";

    protected $fillable = [
        'name',
        'email',
        'password',
        'roles',
        'username',
    ];

    protected $hidden = [];
}
