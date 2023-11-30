<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('user')->get();
        return view('orders.index', compact('orders'));
    }
    

    public function createOrder(Request $request)
    {
        // Logika tworzenia zamówienia
        $cart = $request->session()->get('cart', []);

        // Przykładowa logika: Utwórz zamówienie w bazie danych na podstawie produktów w koszyku
        $order = new Order();
        $order->user_id = auth()->user()->id; // Ustawienie ID użytkownika zalogowanego
        $order->total_price = 0;

        foreach ($cart as $productId => $productData) {
            $product = Product::findOrFail($productId);
            $order->total_price += $product->price * $productData['quantity'];

            // Możesz dodać logikę zapisywania produktów zamówienia, na przykład jako relacje
            // $order->products()->attach($productId, ['quantity' => $productData['quantity']]);
        }

        $order->save();

        // Oczyść koszyk po złożeniu zamówienia
        $request->session()->forget('cart');

        return redirect()->route('orders.index')->with('success', 'Zamówienie złożone pomyślnie.');
    }
    
    public function checkout()
    {
        $user = Auth::user();
        $cart = $user->cart ?? [];

        // Stwórz nowe zamówienie
        $order = Order::create([
            'user_id' => $user->id,
            'product_ids' => $cart,
        ]);

        // Wyczyść koszyk
        $user->update(['cart' => []]);

        return redirect()->route('cart.view')->with('success', 'Order placed successfully.');
    }
}