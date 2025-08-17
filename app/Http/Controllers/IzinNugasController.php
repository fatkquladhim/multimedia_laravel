<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IzinNugas;

class IzinNugasController extends Controller
{
    public function index()
    {
        $izin_nugas = IzinNugas::all();
        return view('izin_nugas.index', compact('izin_nugas'));
    }

    public function create()
    {
        return view('izin_nugas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_anggota' => 'required',
            'tanggal' => 'required|date',
        ]);
        IzinNugas::create($request->all());
        return redirect()->route('izin_nugas.index')->with('success', 'Data izin nugas berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $izin_nugas = IzinNugas::findOrFail($id);
        return view('izin_nugas.edit', compact('izin_nugas'));
    }

    public function update(Request $request, $id)
    {
        $izin_nugas = IzinNugas::findOrFail($id);
        $izin_nugas->update($request->all());
        return redirect()->route('izin_nugas.index')->with('success', 'Data izin nugas berhasil diupdate.');
    }

    public function destroy($id)
    {
        $izin_nugas = IzinNugas::findOrFail($id);
        $izin_nugas->delete();
        return redirect()->route('izin_nugas.index')->with('success', 'Data izin nugas berhasil dihapus.');
    }
}
