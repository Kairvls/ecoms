<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sales;

class ChartController extends Controller
{
    public function getSalesOverview()
    {
        // Get order count grouped by status
        $salesData = Sales::selectRaw('status, COUNT(*) as count')
            ->groupBy('status')
            ->pluck('count', 'status');

        return response()->json([
            'labels' => $salesData->keys(),
            'data' => $salesData->values(),
        ]);
    }

    public function showChart()
    {
        return view('sales-overview'); // Ensure you have this view file
    }
}
