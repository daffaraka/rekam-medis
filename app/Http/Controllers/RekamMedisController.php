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

    public function create()
    {
        return view('rekam-medis.rekam-medis-create');
    }

    public function store(Request $request)
    {

        RekamMedis::create($request->all());


        return redirect()->route('rekam-medis.index');
    }

    public function edit($id)
    {
        $rekam = RekamMedis::find($id);

        return view('rekam-medis.rekam-medis-edit', compact('rekam'));
    }


    public function show($id)
    {
        $rekam = RekamMedis::find($id);

        return view('rekam-medis.rekam-medis-show', compact('rekam'));
    }



    public function update($id, Request $request)
    {
        $rekam = RekamMedis::find($id);

        $rekam->update($request->all());

        return redirect()->route('rekam-medis.index');
    }

    public function destroy($id)
    {
        $rekam = RekamMedis::find($id);
        $rekam->delete();

        return redirect()->route('rekam-medis.index');

    }
}
