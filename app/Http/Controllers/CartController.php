<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    // Display cart items
    public function index()
    {
        $cartItems = Cart::where('user_id', Auth::id())
            ->join('products', 'cart.product_id', '=', 'products.id')
            ->select('cart.id', 'cart.quantity', 'products.name', 'products.price', 'products.photo', 'products.counter')
            ->get();

        return view('cart.index', compact('cartItems'));
    }

    // Add item to cart
    public function addToCart(Request $request, $id)
    {
        $product = Product::findOrFail($id);
    
        // Ensure stock is available
        if ($request->quantity > $product->stock) {
            return back()->with('error', 'Not enough stock available');
        }
    
        $cart = Cart::where('user_id', Auth::id())->where('product_id', $id)->first();
    
        if ($cart) {
            if (($cart->quantity + $request->quantity) > $product->stock) {
                return back()->with('error', 'Not enough stock available');
            }
            $cart->quantity += $request->quantity;
            $cart->price = $cart->quantity * $product->price;
            $cart->save();
        } else {
            Cart::create([
                'user_id' => Auth::id(),
                'product_id' => $id,
                'quantity' => $request->quantity,
                'price' => $product->price * $request->quantity
            ]);
        }
    
        // 🔹 Decrement both stock and counter in product table
        $product->decrement('stock', $request->quantity);
        $product->decrement('counter', $request->quantity);
    
        return back()->with('success', 'Product added to cart');
    }


public function showCart()
{
    $cartItems = Cart::where('user_id', Auth::id())->with('product')->get();
    return view('cart.index', compact('cartItems'));
}


    // Remove an item from cart and restore stock
    public function removeFromCart($id)
{
    $cart = Cart::where('id', $id)->where('user_id', Auth::id())->first();
    
    if ($cart) {
        // 🔹 Restore stock and counter to product table
        Product::where('id', $cart->product_id)->increment('stock', $cart->quantity);
        Product::where('id', $cart->product_id)->increment('counter', $cart->quantity);

        // Remove from cart
        $cart->delete();
    }

    return back()->with('success', 'Item removed from cart');
}



}
