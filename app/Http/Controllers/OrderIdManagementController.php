<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sales;
use App\Models\Details;
use App\Models\Product;


class OrderIdManagementController extends Controller
{
    // Display orders and filtering options
    public function showOrderDetails($pay_id)
    {
        $order = Sales::where('pay_id', $pay_id)->first();

        if (!$order) {
            return redirect('/orders')->with('error', 'Order not found!');
        }

        return view('ordersid', compact('order'));
    }

    public function updateStatus(Request $request, $id)
    {
        $order = Sales::findOrFail($id);
        $order->status = $request->status;
        $order->save();

        return redirect()->back()->with('success', 'Order status updated successfully');
    }
    
}
