<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sales;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Cart;
use App\Models\Details;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $status = $request->query('status', 'pending'); // Default to pending
        $orders = Sales::where('user_id', Auth::id())
            ->where('status', $status)
            ->with('details.product') // Load product details
            ->get();

        return view('my-orders', compact('orders', 'status'));
    }

    public function filterOrders(Request $request)
{
    $query = Sales::with('details.product');

    if ($request->has('start_date') && $request->has('end_date')) {
        $query->whereBetween('created_at', [$request->start_date, $request->end_date]);
    }

    if ($request->has('sort_price')) {
        $query->orderBy('details.price', $request->sort_price);
    }

    $orders = $query->get();

    return view('my-orders', compact('orders'));
}

public function remove($id)
    {
        $detail = Details::findOrFail($id);
        $product = $detail->product;

        // Restore product stock
        $product->counter += $detail->quantity;
        $product->save();

        // Delete cart item
        $detail->delete();

        return redirect()->route('my-orders');
    }

    
}
