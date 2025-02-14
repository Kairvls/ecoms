<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();
        return view('management-category', compact('categories'));
    }

    public function store(Request $request) {
        $request->validate(['name' => 'required']);
        Category::create($request->only(['name', 'description']));
        return redirect()->back()->with('success', 'Category added!');
    }

    public function update(Request $request, Category $category) {
        $request->validate(['name' => 'required']);
        $category->update($request->only(['name', 'description']));
        return redirect()->back()->with('success', 'Category updated!');
    }

    public function destroy(Category $category) {
        $category->delete();
        return redirect()->back()->with('success', 'Category deleted!');
    }
}
