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
                        <input name="photo" type="file" class="mt-2 ml cursor-pointer" required>
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
                    <p class="ml-1">SRP:</p>
                    <div class="textInputWrap">
                        <input name="srp" placeholder="Input SRP" type="number" step="0.01" value="{{ old('srp', $product->srp ?? '') }}" id="srp" class="textInputting form-control" required>
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
                    <th class="p2 border bg-yellow-500">ID</th>
                    <th class="p2 border bg-yellow-500">NAME AND IMAGE</th>
                    <th class="p2 border bg-yellow-500">CATEGORY AND QUANTITY</th>
                    <th class="p2 border bg-yellow-500">PRICE</th>
                    <th class="p2 border bg-yellow-500">SRP</th>
                    <th class="p2 border bg-yellow-500">ACTIONS</th>
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
                        <td class="p2 border text-center">₱{{ number_format($product->srp, 2) }}</td>
                        <td class="flex p2 space-x-6 border cursor-pointer justify-center">
                            <a href="{{ route('manage.products.edit', $product->id) }}" class="text-blue-500"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="blue" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
</svg></a>
                            <form action="{{ route('manage.products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="red" class="mt-1 bi bi-trash3" viewBox="0 0 16 16">
  <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
</svg></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </article>
</div>

@endsection
