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
        $anggota = \App\Models\Anggota::all();
        return view('legalisasi_laptop.create', compact('anggota'));
    }

    public function store(Request $request)
    {
        $anggota = \App\Models\Anggota::all();
        $request->validate([
            'id_anggota' => 'required',
            'merk' => 'required',
            'tipe' => 'required',
            'serial_number' => 'required',
            'status' => 'required',
            'bukti' => 'nullable|file|mimes:jpg,jpeg,png,pdf',
        ]);
        $data = $request->all();
        if ($request->hasFile('bukti')) {
            $data['file_bukti'] = $request->file('bukti')->store('bukti_legalisasi', 'public');
        }
        LegalisasiLaptop::create($data);
    return redirect()->route('legalisasi-laptop.index')->with('success', 'Data legalisasi laptop berhasil ditambahkan.');
    }
    public function show($id)
    {
        $legalisasi = LegalisasiLaptop::findOrFail($id);
        return view('legalisasi_laptop.tampil', compact('legalisasi'));
    }

    public function edit($id)
    {
        $legalisasi = LegalisasiLaptop::findOrFail($id);
        $anggota = \App\Models\Anggota::all();
        return view('legalisasi_laptop.edit', compact('legalisasi', 'anggota'));
    }

    public function update(Request $request, $id)
    {
        $anggota = \App\Models\Anggota::all();
        $legalisasi = LegalisasiLaptop::findOrFail($id);
        $request->validate([
            'id_anggota' => 'required',
            'merk' => 'required',
            'tipe' => 'required',
            'serial_number' => 'required',
            'status' => 'required',
            'bukti' => 'nullable|file|mimes:jpg,jpeg,png,pdf',
        ]);
        $data = $request->all();
        if ($request->hasFile('bukti')) {
            $data['file_bukti'] = $request->file('bukti')->store('bukti_legalisasi', 'public');
        } else {
            // Jika tidak upload file baru, gunakan file_bukti lama
            $data['file_bukti'] = $legalisasi->file_bukti;
        }
        $legalisasi->update($data);
        return redirect()->route('legalisasi-laptop.index')->with('success', 'Data legalisasi laptop berhasil diupdate.');
    }

    public function destroy($id)
    {
        $legalisasi = LegalisasiLaptop::findOrFail($id);
        $legalisasi->delete();
    return redirect()->route('legalisasi-laptop.index')->with('success', 'Data legalisasi laptop berhasil dihapus.');
    }
}
