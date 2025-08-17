<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LegalisasiLaptop;

class LegalisasiLaptopController extends Controller
{
    public function index()
    {
        $legalisasi = LegalisasiLaptop::all();
        return view('legalisasi_laptop.index', compact('legalisasi'));
    }

    public function create()
    {
        return view('legalisasi_laptop.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_anggota' => 'required',
            'merk' => 'required',
            'serial_number' => 'required',
        ]);
        LegalisasiLaptop::create($request->all());
        return redirect()->route('legalisasi_laptop.index')->with('success', 'Data legalisasi laptop berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $legalisasi = LegalisasiLaptop::findOrFail($id);
        return view('legalisasi_laptop.edit', compact('legalisasi'));
    }

    public function update(Request $request, $id)
    {
        $legalisasi = LegalisasiLaptop::findOrFail($id);
        $legalisasi->update($request->all());
        return redirect()->route('legalisasi_laptop.index')->with('success', 'Data legalisasi laptop berhasil diupdate.');
    }

    public function destroy($id)
    {
        $legalisasi = LegalisasiLaptop::findOrFail($id);
        $legalisasi->delete();
        return redirect()->route('legalisasi_laptop.index')->with('success', 'Data legalisasi laptop berhasil dihapus.');
    }
}
