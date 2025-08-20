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

    public function show($id)
    {
        $izin_nugas = \App\Models\IzinNugas::findOrFail($id);
        return view('izin_nugas.tampil', compact('izin_nugas'));
    }

    public function create()
    {
        $anggota = \App\Models\Anggota::all();
        return view('izin_nugas.create', compact('anggota'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_anggota' => 'required',
            'tanggal' => 'required|date',
        ]);
        IzinNugas::create($request->all());
    return redirect()->route('izin-nugas.index')->with('success', 'Data izin nugas berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $izin_nugas = IzinNugas::findOrFail($id);
        $anggota = \App\Models\Anggota::all();
        return view('izin_nugas.edit', compact('izin_nugas', 'anggota'));
    }

    public function update(Request $request, $id)
    {
        $izin_nugas = IzinNugas::findOrFail($id);
        $izin_nugas->update($request->all());
    return redirect()->route('izin-nugas.index')->with('success', 'Data izin nugas berhasil diupdate.');
    }
    public function destroy($id)
    {
        $izin_nugas = IzinNugas::findOrFail($id);
        $izin_nugas->delete();
    return redirect()->route('izin-nugas.index')->with('success', 'Data izin nugas berhasil dihapus.');
    }
}
