<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;
use Illuminate\Support\Facades\Hash;

class DosenController extends Controller
{
    public function create()
    {
        return view('dosens.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kd_dosen' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
        ]);

        Dosen::create([
            'kd_dosen' => $request->kd_dosen,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('dosens.create')->with('success', 'Dosen created successfully.');
    }

    public function edit($id)
    {
        $dosen = Dosen::findOrFail($id);
        return view('dosens.edit', compact('dosen'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kd_dosen' => 'required|unique:dosens,kd_dosen,'.$id,
            'nama' => 'required',
            'alamat' => 'required',
        ]);

        $dosen = Dosen::findOrFail($id);
        $dosen->kd_dosen = $request->kd_dosen;
        $dosen->nama = $request->nama;
        $dosen->alamat = $request->alamat;


        $dosen->save();

        return redirect()->route('dosens.edit', $id)->with('success', 'Dosen updated successfully.');
    }

    public function destroy($id)
    {
        $dosen = Dosen::findOrFail($id);
        $dosen->delete();

        return redirect()->route('dosens.index')->with('success', 'Dosen deleted successfully.');
    }

    public function index()
    {
        $dosens = Dosen::all();
        return view('dosens.index', compact('dosens'));
    }
}
