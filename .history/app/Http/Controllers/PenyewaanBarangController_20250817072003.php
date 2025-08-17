<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PenyewaanBarang;

class PenyewaanBarangController extends Controller
{
    public function index()
    {
        $penyewaan = PenyewaanBarang::all();
        return view('penyewaan_barang.index', compact('penyewaan'));
    }

    public function create()
    {
        return view('penyewaan_barang.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_anggota' => 'required',
            'id_alat' => 'required',
            'tanggal_sewa' => 'required|date',
        ]);
        PenyewaanBarang::create($request->all());
        return redirect()->route('penyewaan_barang.index')->with('success', 'Data penyewaan barang berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $penyewaan = PenyewaanBarang::findOrFail($id);
        return view('penyewaan_barang.edit', compact('penyewaan'));
    }

    public function update(Request $request, $id)
    {
        $penyewaan = PenyewaanBarang::findOrFail($id);
        $penyewaan->update($request->all());
        return redirect()->route('penyewaan_barang.index')->with('success', 'Data penyewaan barang berhasil diupdate.');
    }

    public function destroy($id)
    {
        $penyewaan = PenyewaanBarang::findOrFail($id);
        $penyewaan->delete();
        return redirect()->route('penyewaan_barang.index')->with('success', 'Data penyewaan barang berhasil dihapus.');
    }
}
