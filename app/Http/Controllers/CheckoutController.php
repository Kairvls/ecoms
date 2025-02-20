<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Sales;
use App\Models\Details;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{

    public function index()
    {
        $cartItems = Cart::with('product')->get();
        return view('checkout', compact('cartItems'));
    }
    public function checkout()
    {
        // Get cart items for the current user
        $cartItems = Cart::where('user_id', auth()->id())->get();
    
        if ($cartItems->isEmpty()) {
            return redirect()->back()->with('error', 'Your cart is empty!');
        }
    
        // Calculate total price
        $totalPrice = $cartItems->sum(function($item) {
            return $item->product->price * $item->quantity;
        });
    
        // Pass cart items and total price to the view
        return view('checkout', compact('cartItems', 'totalPrice'));
    }

    public function showCheckout(Request $request)
{
    // Get selected item IDs from the request
    $selectedItemIds = explode(',', $request->selected_items);

    // Filter only the selected items
    $cartItems = Cart::where('user_id', auth()->id())
                     ->whereIn('id', $selectedItemIds)
                     ->get();

    // Calculate the total
    $total = $cartItems->sum(fn($cartItem) => $cartItem->product->price * $cartItem->quantity);

    return view('checkout', compact('cartItems', 'total'));
}


    public function processCheckout(Request $request)
{
    DB::beginTransaction();
    try {
        // Get the user's cart items
        $cartItems = Cart::where('user_id', auth()->id())->get();

        if ($cartItems->isEmpty()) {
            return redirect()->back()->with('error', 'Your cart is empty!');
        }

        // Calculate the total price
        $total = $cartItems->sum(function($cartItem) {
            return $cartItem->product->price * $cartItem->quantity;
        });

        // Create a sales record (order details)
        $sale = Sales::create([
            'user_id' => auth()->id(),
            'pay_id' => Str::random(10),
            'sales_date' => now(),
            'status' => 'pending', // Set the default status
        ]);

        // Process each cart item and create details
        foreach ($cartItems as $cartItem) {
            Details::create([
                'sales_id' => $sale->id,
                'product_id' => $cartItem->product_id,
                'quantity' => $cartItem->quantity,
            ]);
        }

        // Decrement product stock (counter) ensuring it doesn't go below 0
        foreach ($cartItems as $cartItem) {
            $cartItem->product->decrement('counter', min($cartItem->quantity, $cartItem->product->counter));
        }

        // Clear the user's cart
        Cart::where('user_id', auth()->id())->delete();

        DB::commit();

        // Redirect to success page with the total amount
        return redirect('/checkout')->with('success', 'Checkout successful! Total: ₱' . number_format($total, 2));
    } catch (\Exception $e) {
        DB::rollBack();
        return redirect()->back()->with('error', 'An error occurred during checkout. Please try again.');
    }

}



}
