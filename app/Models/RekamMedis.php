<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RekamMedis extends Model
{

    protected $fillable = [
        'keluhan',
        'diagnosis',
        'tanggal_tindakan',
        'status',
        'penghuni_id',
    ];


    public function penghuni()
    {
        return $this->belongsTo(Penghuni::class);
    }
}
