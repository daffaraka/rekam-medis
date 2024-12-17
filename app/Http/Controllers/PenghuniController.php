<?php

namespace App\Http\Controllers;

use App\Models\Penghuni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rules\Exists;

class PenghuniController extends Controller
{
    public function index()
    {
        $data = Penghuni::all();

        return view('penghuni.penghuni-index', compact('data'));
    }

    public function create()
    {
        return view('penghuni.penghuni-create');
    }

    public function store(Request $request)
    {
        $file = $request->file('foto');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $path = $file->move('foto/penghuni', $filename);
        $request->merge(['foto' => $filename]);

        Penghuni::create([
            'nama' => $request->nama,
            'foto' => $path,
            'umur' => $request->umur,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'status' => $request->status,
        ]);


        return redirect()->route('penghuni.index');
    }

    public function edit($id)
    {
        $penghuni = Penghuni::find($id);

        return view('penghuni.penghuni-edit', compact('penghuni'));
    }

    public function show($id)
    {
        $penghuni = Penghuni::find($id);

        return view('penghuni.penghuni-show', compact('penghuni'));
    }



    public function update($id, Request $request)
    {
        $penghuni = Penghuni::find($id);


        if ($request->hasFile('foto')) {
            if(File::exists($penghuni->foto)) {
                File::delete($penghuni->foto);
                $file = $request->file('foto');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $path = $file->move('foto/penghuni', $filename);
            } else {
                $file = $request->file('foto');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $path = $file->move('foto/penghuni', $filename);
            }


        } else {

            $path = $penghuni->foto;

        }

        $penghuni->update([
            'nama' => $request->nama,
            'foto' => $path,
            'umur' => $request->umur,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'status' => $request->status,
        ]);

        return redirect()->route('penghuni.index');
    }

    public function destroy($id)
    {
        $penghuni = Penghuni::find($id);
        $penghuni->delete();

        return redirect()->route('penghuni.index');
    }
}
