<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;    
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\IsAdmin;



class AuthController extends Controller
{
    public function showregister()
    {
        return view('auth.register');
    }

    public function registeruser(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|min:5',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        $userCount = User::count();

        // Buat user baru
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $userCount === 0 ? 'admin' : 'user'; // Set role to admin if this is the first user
        $user->save();

        return redirect('/')->with('success', 'Registration successful!');
    }

    public function showlogin()
    {
        // Ambil semua username dari tabel users
        $usernames = \App\Models\User::pluck('username');
        // Ambil versi dari file jika ada
        $version = '2.0.0';
        $versionFile = base_path('multimedia/VERSION');
        if (file_exists($versionFile)) {
            $version = trim(file_get_contents($versionFile));
        }
        return view('auth.login', compact('usernames', 'version'));
    }

    public function login(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        // Cek kredensial username
        if (Auth::attempt(['username' => $credentials['username'], 'password' => $credentials['password']])) {
            $request->session()->regenerate();
            $user = Auth::user();
            if ($user->role === 'admin') {
                return redirect('/admin/dashboard');
            } else {
                return redirect('/user/dashboard');
            }
        }
        return back()->with('error', 'Username atau password salah!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Logout successful!');
    }
}
