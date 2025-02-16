<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ChangeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('manage-products', compact('categories'));
    }

}
