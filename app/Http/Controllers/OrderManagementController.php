<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sales;
use App\Models\Details;
use App\Models\Product;


class OrderManagementController extends Controller
{
    // Display orders and filtering options
    public function index()
    {
        $orders = Sales::with(['details.product'])->get();

        return view('orders', compact('orders'));
    }

    public function updateStatus(Request $request, $id)
    {
        $order = Sales::findOrFail($id);
        $order->status = $request->status;
        $order->save();

        return redirect()->back()->with('success', 'Order status updated successfully');
    }
    
    public function showOrderDetails($pay_id)
{
    $order = Sales::with(['details.product'])->where('pay_id', $pay_id)->first(); // Fetch order with related details

    if (!$order) {
        return redirect('/orders')->with('error', 'Order not found!');
    }

    return view('ordersid', compact('order'));
}
}
