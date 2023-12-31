<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// tambahan
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //membuat fungsi login
    public function login(){
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        // User Login
        $credentials = $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        };

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
