<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class ManageProductsController extends Controller
{
    public function index() {
        $products = Product::with('category')->get(); // Fetch all products with their category
        $categories = Category::all(); // Fetch all categories
    
        return view('manage-products', compact('products', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|integer',
            'name' => 'required|string',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'srp' => 'nullable|numeric',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif',
            'counter' => 'required|integer',
        ]);

        $imagePath = $request->file('photo')->store('products', 'public');
        

        Product::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'photo' => $imagePath,
            'date_view' => now(),
            'counter' => $request->counter,
        ]);

        return redirect()->route('manage.products')->with('success', 'Product added successfully!');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('manage-products-edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'srp' => 'required|numeric',
            'description' => 'nullable|string',
            'counter' => 'nullable|integer',
            'photo' => 'nullable|image|max:2048' // Ensure it's an image
        ]);

        // Handle Image Upload
        if ($request->hasFile('photo')) {
            $imagePath = $request->file('photo')->store('products', 'public'); // Store in 'storage/app/public/products'
            $validatedData['photo'] = $imagePath;
        }

        $product->update($validatedData);

        

        return redirect()->route('manage.products')->with('success', 'Product updated successfully!');
    }
    

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        Storage::delete('public/'.$product->photo);
        $product->delete();

        return redirect()->route('manage.products')->with('success', 'Product deleted successfully!');
    }
}
