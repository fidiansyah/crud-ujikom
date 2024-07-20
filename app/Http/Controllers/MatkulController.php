<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matkul;

class MatkulController extends Controller
{
    public function create()
    {
        return view('matkuls.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kd_matkul' => 'required',
            'nama' => 'required',
            'sks' => 'required',
        ]);

        Matkul::create([
            'kd_matkul' => $request->kd_matkul,
            'nama' => $request->nama,
            'sks' => $request->sks,
        ]);

        return redirect()->route('matkuls.create')->with('success', 'Matkul created successfully.');
    }

    public function edit($id)
    {
        $matkul = Matkul::findOrFail($id);
        return view('matkuls.edit', compact('matkul'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kd_matkul' => 'required|unique:matkuls,kd_matkul,'.$id,
            'nama' => 'required',
            'sks' => 'required',
        ]);

        $matkul = Matkul::findOrFail($id);
        $matkul->kd_matkul = $request->kd_matkul;
        $matkul->nama = $request->nama;
        $matkul->sks = $request->sks;


        $matkul->save();

        return redirect()->route('matkuls.edit', $id)->with('success', 'matkuls updated successfully.');
    }

    public function destroy($id)
    {
        $matkul = Matkul::findOrFail($id);
        $matkul->delete();

        return redirect()->route('matkuls.index')->with('success', 'Matkul deleted successfully.');
    }

    public function index()
    {
        $matkuls = Matkul::all();
        return view('matkuls.index', compact('matkuls'));
    }
}
