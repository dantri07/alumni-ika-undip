<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class MustAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\http\Request $request
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @return \Illuminate\http\Response/\Illuminate\http\RedirectResponse
     */
    public function handle(Request $request, Closure $next): Response
    {
         //bisa melewati middleware jika role = admin
         
         if (Auth::user()->role_id != 1){
            abort(404);
         }

        return $next($request);

    }
}

