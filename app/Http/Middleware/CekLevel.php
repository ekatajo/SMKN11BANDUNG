<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CekLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $role)
    {
        $roles = array_slice(func_get_args(), 2);

        foreach ($roles as $role) {
            if (Auth::check() && Auth::user()->level == $role) {
                return $next($request);
            };
        }

        return response()->json(["Anda Tidak Memiliki Izin!"]);
    }
}
