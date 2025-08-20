<?php
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\IzinMalam;

class IzinMalamController extends Controller
{
    public function index()
    {
        $izin_malam = IzinMalam::all();
        return view('izin_malam.index', compact('izin_malam'));
    }

    public function show($id)
    {
        $izin_malam = \App\Models\IzinMalam::findOrFail($id);
        return view('izin_malam.tampil', compact('izin_malam'));
    }

    public function create()
    {
        $anggota = \App\Models\Anggota::all();
        return view('izin_malam.create', compact('anggota'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_anggota' => 'required',
            'tanggal' => 'required|date',
        ]);
        IzinMalam::create($request->all());
    return redirect()->route('izin-malam.index')->with('success', 'Data izin malam berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $izin_malam = IzinMalam::findOrFail($id);
        $anggota = \App\Models\Anggota::all();
        return view('izin_malam.edit', compact('izin_malam', 'anggota'));
    }

    public function update(Request $request, $id)
    {
        $izin_malam = IzinMalam::findOrFail($id);
        $izin_malam->update($request->all());
    return redirect()->route('izin-malam.index')->with('success', 'Data izin malam berhasil diupdate.');
    }
    public function destroy($id)
    {
        $izin_malam = IzinMalam::findOrFail($id);
        $izin_malam->delete();
    return redirect()->route('izin-malam.index')->with('success', 'Data izin malam berhasil dihapus.');
    }
}
