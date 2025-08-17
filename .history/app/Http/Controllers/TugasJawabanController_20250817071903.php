<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TugasJawaban;

class TugasJawabanController extends Controller
{
    public function index()
    {
        $jawaban = TugasJawaban::all();
        return view('tugas_jawaban.index', compact('jawaban'));
    }

    public function create()
    {
        return view('tugas_jawaban.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_tugas' => 'required',
            'id_anggota' => 'required',
            'jawaban' => 'required',
        ]);
        TugasJawaban::create($request->all());
        return redirect()->route('tugas_jawaban.index')->with('success', 'Jawaban tugas berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $jawaban = TugasJawaban::findOrFail($id);
        return view('tugas_jawaban.edit', compact('jawaban'));
    }

    public function update(Request $request, $id)
    {
        $jawaban = TugasJawaban::findOrFail($id);
        $jawaban->update($request->all());
        return redirect()->route('tugas_jawaban.index')->with('success', 'Jawaban tugas berhasil diupdate.');
    }

    public function destroy($id)
    {
        $jawaban = TugasJawaban::findOrFail($id);
        $jawaban->delete();
        return redirect()->route('tugas_jawaban.index')->with('success', 'Jawaban tugas berhasil dihapus.');
    }
}
