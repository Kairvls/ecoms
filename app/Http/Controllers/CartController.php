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
    public function add(Request $request)
    {
        $product = Product::findOrFail($request->product_id);
        $quantity = $request->quantity;
        $user_id = Auth::id();

        $cartItem = Cart::where('user_id', $user_id)->where('product_id', $product->id)->first();

        if ($cartItem) {
            $cartItem->quantity += $quantity;
            $cartItem->save();
        } else {
            Cart::create([
                'user_id' => $user_id,
                'product_id' => $product->id,
                'quantity' => $quantity,
            ]);
        }

        return redirect()->route('cart');
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
    public function checkout(Request $request)
    {
        $user_id = Auth::id();
        $selectedItems = $request->input('selected_items', []);

        if (empty($selectedItems)) {
            return response()->json(['message' => 'No items selected for checkout'], 400);
        }

        $cartItems = Cart::where('user_id', $user_id)->whereIn('id', $selectedItems)->get();

        if ($cartItems->isEmpty()) {
            return response()->json(['message' => 'Cart is empty'], 400);
        }

        // Validate stock before proceeding
        foreach ($cartItems as $item) {
            if ($item->product->counter < $item->quantity) {
                return response()->json(['message' => 'Not enough stock for ' . $item->product->name], 400);
            }
        }

        // Create Sales record
        $sale = Sales::create([
            'user_id' => $user_id,
            'pay_id' => uniqid(),
            'sales_date' => now(),
        ]);

        // Process cart items
        foreach ($cartItems as $item) {
            $product = $item->product;
            $product->decrement('counter', $item->quantity);

            Details::create([
                'sales_id' => $sale->id,
                'product_id' => $item->product_id,
                'quantity' => $item->quantity,
            ]);
        }

        // Remove checked-out items from cart
        Cart::where('user_id', $user_id)->whereIn('id', $selectedItems)->delete();

        return response()->json(['message' => 'Checkout successful', 'sales' => $sale]);
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
