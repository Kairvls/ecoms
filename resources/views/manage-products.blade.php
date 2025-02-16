@extends('admindashboard')

@section('content')

<div class="p-10">
    <article class="bg-white px-10 py-10 shadow-lg">
        <h1 class="flex justify-start text-2xl mb-10 items-center font-semibold head">Manage Products</h1>

        <h1 class="flex justify-start text-2xl mb-10 items-center font-semibold head">Add New Product:</h1>

        <!-- Product Form -->
        <form action="{{ route('manage.products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="flex grow justify-center space-x-32">
                <div class="block">
                    <p class="ml-1">Product Name:</p>
                    <div class="textInputWrapper">
                        <input name="name" placeholder="Type Here" type="text" class="textInput" required>
                    </div>
                </div>

                <div class="block cursor-pointer">
                    <p class="ml-1">Product Image:</p>
                    <div class="textInputWrapper border shadow-lg cursor-pointer bg-[#f2f2f2]">
                        <input name="photo" type="file" class="mt-2 cursor-pointer" required>
                    </div>
                </div>
            </div>

            <div class="flex grow justify-center mt-10 space-x-2">
                <div class="block">
                    <p class="ml-1">Category:</p>
                    <select name="category_id" class="textInputWrapper border p-[0.6rem] rounded-sm shadow-lg cursor-pointer mt-0.5 text-sm bg-[#f2f2f2]" required>
                        <option value="">Select Category</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="block">
                    <p class="ml-1">Price:</p>
                    <div class="textInputWrap">
                        <input name="price" placeholder="Input Price" type="number" step="0.01" class="textInputting" required>
                    </div>
                </div>

                <div class="block">
                    <p class="ml-1">Quantity:</p>
                    <div class="textInputWrap">
                        <input name="counter" placeholder="Input Quantity" type="number" class="textInputting" required>
                    </div>
                </div>
            </div>

            <div class="block ml-16 mt-10 w-full">
                <p>Description:</p>
                <div class="w-[58.8rem] border border-black mb-5 rounded-lg">
                    <textarea name="description" placeholder="Type Here" class="w-full p-1" required></textarea>
                </div>
            </div>

            <button type="submit" class="button">
                <p class="text">Add Product</p>
            </button>
        </form>

        <h2 class="flex justify-start text-2xl py-2 mt-16 mb-6 items-center font-semibold head">Existing Products</h2>
        <table class="w-full mt-4 border justify-center py-10 text-md">
            <thead>
                <tr>
                    <th class="p2 border">ID</th>
                    <th class="p2 border">NAME AND IMAGE</th>
                    <th class="p2 border">CATEGORY AND QUANTITY</th>
                    <th class="p2 border">PRICE</th>
                    <th class="p2 border">ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td class="p2 border text-center">{{ $product->id }}</td>
                        <td class="p2 border flex items-center space-x-2">
                            <img src="{{ asset('storage/'.$product->photo) }}" width="50" alt="Product Image">
                            <span>{{ $product->name }}</span>
                        </td>
                        <td class="p2 border text-center">{{ $product->category->name }}<br/>Quantity:{{ $product->counter }}pc(s)</td>
                        <td class="p2 border text-center">₱{{ number_format($product->price, 2) }}</td>
                        <td class="flex p2 space-x-6 border cursor-pointer justify-center">
                            <a href="{{ route('manage.products.edit', $product->id) }}" class="text-blue-500">Edit</a>
                            <form action="{{ route('manage.products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </article>
</div>

@endsection
