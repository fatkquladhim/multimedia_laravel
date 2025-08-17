<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Anda bisa menambahkan logika pengambilan data di sini
        return view('admin.dashboard');
    }
}
