<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;

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
        try {
            $request->validate([
                'nama_lengkap' => 'required',
                'email' => 'required|email',
                'kelas' => 'required',
                'kamar' => 'required',
                'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $data = $request->only(['nama_lengkap', 'email', 'kelas', 'kamar']);
            $data['id_user'] = Auth::id();
            if ($request->hasFile('foto')) {
                $file = $request->file('foto');
                $filename = time().'_'.$file->getClientOriginalName();
                $file->move(public_path('uploads/profiles'), $filename);
                $data['foto'] = $filename;
            }
            Profile::create($data);
            return redirect()->route('profile.index')->with('success', 'Data profile berhasil ditambahkan.');
        } catch (\Exception $e) {
            return redirect()->back()->with('danger', 'Gagal menambahkan data profile: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        $profile = Profile::findOrFail($id);
        return view('profile.edit', compact('profile'));
    }

    public function update(Request $request, $id)
    {
        $profile = Profile::findOrFail($id);
        $data = $request->only(['nama_lengkap', 'email', 'kelas', 'kamar']);
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads/profiles'), $filename);
            $data['foto'] = $filename;
        }
        $profile->update($data);
        return redirect()->route('profile.index')->with('success', 'Data profile berhasil diupdate.');
    }

    public function destroy($id)
    {
        $profile = Profile::findOrFail($id);
        $profile->delete();
        return redirect()->route('profile.index')->with('success', 'Data profile berhasil dihapus.');
    }
}
