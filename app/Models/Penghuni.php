<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penghuni extends Model
{
    protected $fillable = [
        'nama',
        'foto',
        'umur',
        'tanggal_lahir',
        'jenis_kelamin',
        'status',
    ];
}
