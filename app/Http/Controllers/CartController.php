<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Sales;
use App\Models\Details;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = Cart::with('product')->where('user_id', Auth::id())->get();
        return view('cart', compact('cartItems'));
    }

    // Add to Cart
    

    public function add(Request $request) {
        $product = Product::find($request->product_id);
        $user_id = Auth::id();
    
        if ($product && $product->counter >= $request->quantity) {
            // Subtract the quantity from stock
            $product->counter -= $request->quantity;
            $product->save();
    
            // Add to cart (session or database)
            Cart::create([
                'user_id' => $user_id,
                'product_id' => $product->id,
                'quantity' => $request->quantity
            ]);
    
            return redirect()->route('cart')->with(['success' => 'Product added to cart!', 'new_stock' => $product->counter]);
        } else {
            return back()->withErrors(['userdashboard' => 'Enough stock available']);
        }
    }
    

    // Update Cart
    public function update(Request $request, $id)
    {
        $cartItem = Cart::findOrFail($id);
        $product = $cartItem->product;
        $newQuantity = $request->quantity;
        $difference = $newQuantity - $cartItem->quantity;

        if ($difference > 0 && $product->counter >= $difference) {
            // If increasing quantity, check stock
            $product->counter -= $difference;
        } elseif ($difference < 0) {
            // If decreasing quantity, return stock
            $product->counter += abs($difference);
        } else {
            return redirect()->back()->with('error', 'Not enough stock available.');
        }

        $cartItem->quantity = $newQuantity;
        $cartItem->save();
        $product->save();

        return redirect()->route('cart')->with('success', 'Cart updated successfully');
    }

    // Checkout & Reduce Stock
    

public function checkout(Request $request) {
    $selectedItems = $request->input('selected_items', []);

    if (empty($selectedItems)) {
        return redirect()->back()->with('error', 'No items selected for checkout.');
    }

    // Fetch the selected products from the database
    $cartItems = Cart::whereIn('id', $selectedItems)->get();

    session(['checkout_items' => $cartItems]);

    return redirect()->route('checkout');
}







    // Remove from Cart
    public function remove($id)
    {
        $cartItem = Cart::findOrFail($id);
        $product = $cartItem->product;

        // Restore product stock
        $product->increment('counter', $cartItem->quantity);

        // Delete cart item
        $cartItem->delete();

        return redirect()->route('cart');
    }


    
}

