<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index');
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        // Logika zapisywania nowego produktu
    }

    public function edit($id)
    {
        // Logika edycji produktu
    }

    public function update(Request $request, $id)
    {
        // Logika aktualizacji produktu
    }

    public function destroy($id)
    {
        // Logika usuwania produktu
    }
}