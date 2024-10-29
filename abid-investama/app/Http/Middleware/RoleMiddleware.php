<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        // Cek apakah pengguna sudah login
        if (!Auth::check()) {
            return redirect()->route('login'); // Arahkan ke halaman login jika belum login
        }

        // Ambil role pengguna yang sedang login
        $userRole = Auth::user()->role->name ?? null;

        // Cek apakah role pengguna ada dalam daftar yang diizinkan
        if (!in_array($userRole, $roles)) {
            return redirect('/'); // Arahkan ke halaman utama jika role tidak diizinkan
        }

        return $next($request); // Jika lolos, lanjutkan ke request berikutnya
    }
}
