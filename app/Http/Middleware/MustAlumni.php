<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class MustAlumni
{
    /**
     * Handle an incoming request.
     * @param \Illuminate\http\Request $request
     * @return \Illuminate\http\Response/\Illuminate\http\RedirectResponse
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
         //bisa melewati middleware jika role = admin
        if (Auth::user()->role_id !='admin' && Auth::user()->role_id !='alumni'){
            abort(404);
        }
         
        return $next($request);
    }
}
