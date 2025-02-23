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
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{

    public function index()
    {
        $cartItems = Cart::with('product')->where('user_id', Auth::id())->get();
        return view('checkout', compact('cartItems'));
    }
    public function checkout(Request $request)
{
    $selectedItemIds = $request->input('selected_items', []); // Get selected items
    $cartItems = Cart::whereIn('id', $selectedItemIds)->get(); // Fetch only selected items
    $total = $cartItems->sum(fn($item) => $item->product->price * $item->quantity);
    
    return view('checkout', compact('cartItems', 'total'));
}



    






    public function checkoutProcess(Request $request)
{
    DB::beginTransaction();
    try {
        $user_id = Auth::id();
        $selectedItems = $request->input('selected_items', []); // Get selected items from request

        if (empty($selectedItems)) {
            return redirect()->back()->with('error', 'No items selected for checkout!');
        }

        // Get only the selected cart items
        $cartItems = Cart::where('user_id', $user_id)
                        ->whereIn('id', $selectedItems) // Filter only selected items
                        ->get();

        if ($cartItems->isEmpty()) {
            return redirect()->back()->with('error', 'Selected items are no longer in your cart.');
        }

        // Calculate total price of selected items
        $total = $cartItems->sum(function ($cartItem) {
            return $cartItem->product->price * $cartItem->quantity;
        });

        // Validate input
        $request->validate([
            'payment_method' => 'required|in:gcash,paymaya,bdo,bpi,go_tyme,cash_on_delivery',
        ]);

        // Create a sales record (order details)
        $sale = Sales::create([
            'user_id' => $user_id,
            'payment_method' => $request->payment_method,
            'pay_id' => Str::random(10),
            'sales_date' => now(),
            'status' => 'pending', // Default status
        ]);

        // Process each selected cart item and create order details
        foreach ($cartItems as $cartItem) {
            Details::create([
                'sales_id' => $sale->id,
                'product_id' => $cartItem->product_id,
                'quantity' => $cartItem->quantity,
            ]);

            // Decrement product stock ensuring it doesn't go below 0
            $cartItem->product->decrement('counter', min($cartItem->quantity, $cartItem->product->counter));

            // Remove the purchased item from the cart
            $cartItem->delete();
        }

        DB::commit();

        return redirect('checkout')->with('success', 'Order placed successfully! Total: ₱' . number_format($total, 2));
    } catch (\Exception $e) {
        DB::rollBack();
        return redirect()->back()->with('error', 'An error occurred during checkout. Please try again.');
    }
}


}
