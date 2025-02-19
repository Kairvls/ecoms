<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Sales;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $orders = Sales::with('details.product')->get();
        return view('manage-categories', compact('categories', 'orders'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories,name|max:255',
            'description' => 'nullable|string',
        ]);

        $category = Category::create($request->all());
        return redirect()->back()->with(['message' => 'Category added successfully', 'category' => $category]);
    }

    public function show($id)
    {
        return response()->json(Category::findOrFail($id));
    }

    public function edit(Category $category)
    {
        return response()->json($category);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|unique:categories,name,'.$id.'|max:255',
            'description' => 'nullable|string',
        ]);

        $category = Category::findOrFail($id);
        $category->update([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return redirect()->back()->with(['message' => 'Category updated successfully', 'category' => $category]);
    }

    public function destroy($id)
    {
        Category::destroy($id);
        return redirect()->back()->with(['message' => 'Category deleted successfully']);
    }
}
