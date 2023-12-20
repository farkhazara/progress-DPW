<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    // Menampilkan halaman login
    public function index()
    {
        return view('auth.login');
    }

    // Menyimpan data login
    public function store(Request $request)
    {
        // Validasi input email dan password
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Mengecek apakah user aktif
        $isActive = User::where('email', $request->email)->first();
        // Melakukan proses login
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            // Redirect ke halaman admin jika role_id = 1
            if (Auth::user()->role_id == '1') {
                return redirect('/admin');
            }
            // Redirect ke halaman user jika role_id = 2
            if (Auth::user()->role_id == '2') {
                return redirect('/user');
            }
        }

        // Redirect kembali ke halaman login jika login gagal
        return redirect()->route('login')->with('login', 'Email atau password salah.');
    }

    // Proses logout
    public function logout()
    {
        // Menghapus semua session
        Session::flush();
        
        // Melakukan proses logout
        Auth::logout();

        // Redirect ke halaman login
        return redirect('login');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
