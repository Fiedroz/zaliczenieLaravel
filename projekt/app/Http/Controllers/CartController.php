<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addToCart(Product $product)
    {
        $user = Auth::user();
        $cart = json_decode($user->cart) ?? [];

        // Sprawdź, czy produkt już istnieje w koszyku
        if (!in_array($product->id, $cart)) {
            // Jeśli nie istnieje, dodaj produkt do koszyka
            $cart[] = $product->id;

            // Aktualizuj pole cart w tabeli użytkowników
            $user->update(['cart' => json_encode($cart)]);

            return redirect()->route('welcome')->with('success', 'Product added to cart.');
        }

        return redirect()->route('welcome')->with('error', 'Product already exists in the cart.');
    }
    public function viewCart()
    {
        $user = Auth::user();
        $cart = json_decode($user->cart) ?? [];
        $cartProducts = Product::whereIn('id', $cart)->get();

        return view('cart.index', compact('cartProducts'));
    }

}
