<?php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class PreventMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        {
            // Cek apakah user adalah admin
            if (Auth::check() && Auth::user()->usertype == 'admin') {
                // Jika admin, redirect ke halaman dashboard admin atau tempat lain
                return redirect('/admin/dashboard')->with('error', 'Admin tidak bisa mengakses halaman ini.');
            }
    
            return $next($request); // Lanjutkan untuk non-admin atau guest
        }
    }
}
