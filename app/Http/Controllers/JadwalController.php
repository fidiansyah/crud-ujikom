<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Jadwal;
use App\Models\Matkul;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function create()
    {
        $dosens = Dosen::all();
        $matkuls = Matkul::all();

        return view('jadwals.create', compact('dosens', 'matkuls'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'kd_matkul' => 'required',
            'kd_dosen' => 'required',
            'ruang' => 'required',
            'waktu' => 'required',
        ]);

        Jadwal::create([
            'kd_dosen' => $request->kd_dosen,
            'kd_matkul' => $request->kd_matkul,
            'ruang' => $request->ruang,
            'waktu' => $request->waktu,
        ]);

        return redirect()->route('jadwals.create')->with('success', 'Jadwal created successfully.');
    }

    public function edit($id)
    {
        $jadwal = Jadwal::findOrFail($id);

        $kd_dosens = $jadwal->pluck('kd_dosen');
        $kd_matkuls = $jadwal->pluck('kd_matkul');

        $dosens = Dosen::all();

        $matkuls = Matkul::all();

        return view('jadwals.edit', compact('jadwal','dosens','matkuls'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kd_dosen' => 'required',
            'kd_matkul' => 'required',
            'ruang' => 'required',
            'waktu' => 'required',
        ]);

        $jadwal = Jadwal::findOrFail($id);
        $jadwal->kd_dosen = $request->kd_dosen;
        $jadwal->kd_matkul = $request->kd_matkul;
        $jadwal->ruang = $request->ruang;
        $jadwal->waktu = $request->waktu;


        $jadwal->save();

        return redirect()->route('jadwals.edit', $id)->with('success', 'Jadwal updated successfully.');
    }

    public function destroy($id)
    {
        $jadwal = jadwal::findOrFail($id);
        $jadwal->delete();

        return redirect()->route('jadwals.index')->with('success', 'Jadwal deleted successfully.');
    }

    public function index()
    {
        $jadwals = Jadwal::all();

        $kd_dosens = $jadwals->pluck('kd_dosen');
        $kd_matkuls = $jadwals->pluck('kd_matkul');

        $dosens = Dosen::whereIn('kd_dosen', $kd_dosens)->first();

        $matkuls = Matkul::whereIn('kd_matkul', $kd_matkuls)->first();

        return view('jadwals.index', compact('jadwals', 'dosens','matkuls'));
    }
}
