<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = Profile::all();
        return view('profile.index', compact('profiles'));
    }

    public function create()
    {
        return view('profile.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'email' => 'required|email',
            'kelas' => 'required',
            'kamar' => 'required',
        ]);
        $data = $request->only(['nama_lengkap', 'email', 'kelas', 'kamar', 'foto']);
        $data['id_user'] = auth()->id();
        Profile::create($data);
        return redirect()->route('profile.index')->with('success', 'Data profile berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $profile = Profile::findOrFail($id);
        return view('profile.edit', compact('profile'));
    }

    public function update(Request $request, $id)
    {
        $profile = Profile::findOrFail($id);
        $profile->update($request->all());
        return redirect()->route('profile.index')->with('success', 'Data profile berhasil diupdate.');
    }

    public function destroy($id)
    {
        $profile = Profile::findOrFail($id);
        $profile->delete();
        return redirect()->route('profile.index')->with('success', 'Data profile berhasil dihapus.');
    }
}
