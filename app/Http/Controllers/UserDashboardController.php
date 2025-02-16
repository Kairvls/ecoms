<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;

class UserDashboardController extends Controller
{
    public function index()
    {
        $categories = Category::all(); // Fetch all categories
        $products = Product::all(); // Fetch all products
        return view('userdashboard', compact('products', 'categories'));
    }

}

