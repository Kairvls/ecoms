<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    public function index()
    {
        $cartItems = Cart::where('user_id', Auth::id())
            ->join('products', 'cart.product_id', '=', 'products.id')
            ->select('cart.id', 'cart.quantity', 'products.name', 'products.price', 'products.photo', 'products.counter')
            ->get();
        return view('checkout.index', compact('cartItems')); // Make sure you have checkout.blade.php
    }

    public function process()
    {
        $userId = Auth::id();
        $cartItems = Cart::where('user_id', $userId)->with('product')->get();

        if ($cartItems->isEmpty()) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty.');
        }

        DB::transaction(function () use ($userId, $cartItems) {
            foreach ($cartItems as $item) {
                Order::create([
                    'user_id' => $userId,
                    'product_id' => $item->product_id,
                    'quantity' => $item->quantity,
                    'total_price' => $item->product->price * $item->quantity,
                ]);
            }

            // Clear cart after successful order placement
            Cart::where('user_id', $userId)->delete();
        });

        return redirect()->route('cart.index')->with('success', 'Order placed successfully.');
    }




    public function checkout()
{
    $userId = Auth::id();
    $cartItems = Cart::where('user_id', $userId)->with('product')->get();

    if ($cartItems->isEmpty()) {
        return redirect()->route('cart.index')->with('error', 'Your cart is empty.');
    }

    DB::transaction(function () use ($userId, $cartItems) {
        $totalAmount = $cartItems->sum(fn($item) => $item->product->price * $item->quantity);

        // Create an order
        $order = Order::create([
            'user_id' => $userId,
            'status' => 'pending',
            'total_amount' => $totalAmount,
        ]);

        foreach ($cartItems as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item->product_id,
                'quantity' => $item->quantity,
                'subtotal' => $item->product->price * $item->quantity,
            ]);
        }

        // Clear the cart after checkout
        Cart::where('user_id', $userId)->delete();
    });

    return redirect()->route('orders.index')->with('success', 'Order placed successfully.');
}
}
