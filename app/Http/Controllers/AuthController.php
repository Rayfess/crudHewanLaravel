<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    // Menampilkan form registrasi
    public function showRegis()
    {
        return view('auth.register');
    }

    public function showLogin()
    {
        return view('auth.login');
    }


    public function register(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|in:user,admin', // role hanya bisa user atau admin
        ]);

        // Menyimpan pengguna baru
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            "email_verified_at" => now(),
            "remember_token" => Str::random(10),
            'password' => Hash::make($validated['password']),
            'role' => $validated['role'],
        ]);

        return redirect()->route('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        // Cari user berdasarkan email yang dimasukkan
        $user = User::where('email', $request->email)->first();

        // Cek apakah user ditemukan dan password yang dimasukkan cocok
        if ($user && Hash::check($request->password, $user->password)) {
            // Jika cocok, simpan data user ke session
            Auth::login($user);

            // Arahkan pengguna ke halaman utama setelah login
            return redirect()->route('hewan.index');
        } else {
            // Jika email atau password salah, kembalikan ke form login dengan error
            return redirect()->route('login')->withErrors('Email atau password salah');
        }
    }

    public function logout()
    {
        // Menghapus data user yang ada di session
        Auth::logout();

        // Mengarahkan pengguna kembali ke halaman login setelah logout
        return redirect('login');
    }
}
