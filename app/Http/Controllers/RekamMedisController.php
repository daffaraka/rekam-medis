<?php

namespace App\Http\Controllers;

use App\Models\RekamMedis;
use Illuminate\Http\Request;

class RekamMedisController extends Controller {

    public function index()
    {
        $data = RekamMedis::all();

        return view('rekam-medis.rekam-medis-index', compact('data'));
    }
}
