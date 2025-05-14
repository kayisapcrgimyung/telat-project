<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class loginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Format email tidak valid',
            'password.required' => 'Password tidak boleh kosong'
        ]);

        // Cek kredensial
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Jika login berhasil
            $user = Auth::user();
            if ($user->role === 'guru') {
                return redirect()->route('gurumenu.index')->with('success', 'Berhasil login sebagai guru');
            } elseif ($user->role === 'murid') {
                return redirect()->route('telat.index')->with('success', 'Berhasil login sebagai murid');
            } else {
                // Jika role tidak dikenali
                Auth::logout();
                return redirect()->route('login')->with('error', 'Role tidak valid');
            }
        } else {
            // Jika login gagal
            return redirect()->route('login')->with('error', 'Email atau Password salah');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'Berhasil logout');
    }
}
