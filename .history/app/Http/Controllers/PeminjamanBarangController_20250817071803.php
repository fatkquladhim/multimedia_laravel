<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PeminjamanBarang;

class PeminjamanBarangController extends Controller
{
    public function index()
    {
        $peminjaman = PeminjamanBarang::all();
        return view('peminjaman_barang.index', compact('peminjaman'));
    }

    public function create()
    {
        return view('peminjaman_barang.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_anggota' => 'required',
            'id_alat' => 'required',
            'tanggal_pinjam' => 'required|date',
        ]);
        PeminjamanBarang::create($request->all());
        return redirect()->route('peminjaman_barang.index')->with('success', 'Data peminjaman barang berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $peminjaman = PeminjamanBarang::findOrFail($id);
        return view('peminjaman_barang.edit', compact('peminjaman'));
    }

    public function update(Request $request, $id)
    {
        $peminjaman = PeminjamanBarang::findOrFail($id);
        $peminjaman->update($request->all());
        return redirect()->route('peminjaman_barang.index')->with('success', 'Data peminjaman barang berhasil diupdate.');
    }

    public function destroy($id)
    {
        $peminjaman = PeminjamanBarang::findOrFail($id);
        $peminjaman->delete();
        return redirect()->route('peminjaman_barang.index')->with('success', 'Data peminjaman barang berhasil dihapus.');
    }
}
