<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RekamMedis extends Model
{

    protected $fillable = [
        'nama',
        'keluhan',
        'diagnosis',
        'tanggal_tindakan',
        'status',
    ];
}
