<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Udana autentykacja
            return redirect()->intended('/');
        }

        // Nieudana autentykacja
        return back()->withErrors(['login' => 'Nieprawidłowe dane logowania.'])->withInput();
    }
}
