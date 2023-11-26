<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index');
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        // Logika zapisywania nowego użytkownika
    }

    public function edit($id)
    {
        // Logika edycji użytkownika
    }

    public function update(Request $request, $id)
    {
        // Logika aktualizacji użytkownika
    }

    public function destroy($id)
    {
        // Logika usuwania użytkownika
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}