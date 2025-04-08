@extends('admindashboard')

@section('content')
<div class="p-10">
<article class="bg-white px-10 py-10 shadow-lg">
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-bold mb-4">Edit Product</h2>
    
    <form action="{{ route('manage.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="flex justify-center grow space-x-32">
        <div class="mb-4">
            <label class="block text-gray-700">Product Name:</label>
            <input type="text" name="name" value="{{ $product->name }}" class="w-96 p-2 border rounded">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Category:</label>
            <select name="category_id" class="w-96 p-2 border rounded">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>
        </div>

        <div class="flex justify-center grow space-x-32">
        <div class="mb-4">
            <label class="block text-gray-700">Price:</label>
            <input type="number" name="price" value="{{ $product->price }}" class="w-96 p-2 border rounded">
        </div>

        <div class="mb-4">
            <label for="srp" class="block text-gray-700 form-label">SRP:</label>
            <input type="number" name="srp" id="srp" step="0.01" value="{{ old('srp', $product->srp ?? '') }}" class="w-96 p-2 border rounded form-control">
        </div>
        </div>

        <div class="flex justify-center grow space-x-32">
        <div class="mb-4">
            <label class="block text-gray-700">Product Description:</label>
            <textarea name="description" class="w-96 p-2 border rounded">{{ $product->description }}</textarea>
        </div>
        
        <div class="mb-4">
            <label class="block text-gray-700">Counter:</label>
            <input type="number" name="counter" class="w-96 p-2 border rounded" value="{{ old('counter', $product->counter) }}">
        </div>
        </div>
        
        <div class="flex justify-center space-x-32">
        <div class="mb-4 -ml-40">
            <label class="block text-gray-700">Product Image:</label>
            <input type="file" name="photo" class="w-96 p-2 border rounded">
            
        </div>
        <div class="flex justify-center items-center gap-2">
        <img src="{{ asset('storage/'.$product->photo) }}" width="100" class="mt-2 p-1 border border-1 border-yellow-500 rounded-md" alt="Product Image"> Previous Image
        </div>
        </div>

        <button type="submit" class="bg-gray-500 text-white w-40 px-4 py-2 rounded hover:bg-gray-600 border border-1 border-yellow-500">Update Product</button>
        <a href="{{ route('manage.products') }}" class="bg-gray-500 w-20 text-white px-4 py-3 rounded hover:bg-gray-600 border-1 border-yellow-500">Cancel</a>
        
    </form>
</div>
</article>
</div>
@endsection