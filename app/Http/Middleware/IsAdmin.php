<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Cek apakah pengguna yang login adalah admin
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request); // Lanjutkan request jika admin
        }

        // Redirect ke halaman utama atau error jika bukan admin
        return redirect()->route('posts.index')->with('error', 'Anda tidak memiliki akses untuk mengelola post.');
    }
}
