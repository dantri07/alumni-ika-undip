<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{
    public function login()
    {
       return view('login');
    }
    public function authenticating(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        dd(Auth::attempt($credentials));
 
        if (Auth()->attempt($credentials)) {
            $request->session()->regenerate();
            if (Auth()->user()->role_id === "admin") {
                // jika user superadmin
                return redirect()->intended('/home');
            } else {
                // jika user pegawai
                return redirect()->intended('/');
            }
        }
 
        Session::flash('status', 'failed');
        Session::flash('message', 'password salah');

        return redirect('/login');
    }

    public function logout(request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
