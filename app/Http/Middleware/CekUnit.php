<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CekUnit
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, ...$status)
    {
        if(in_array($request->user()->status,$status)){
            return $next($request);
        }
        return redirect('/login')->with('status', 'Akun anda belum dikonfirmasi');
    }
}
