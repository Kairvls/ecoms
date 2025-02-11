@extends('admindashboard')

@section('content')
    
<div class="p-10">
        <article class="bg-white px-10 py-10 shadow-lg">
        <h1 class="flex justify-start text-2xl mb-10 items-center font-semibold head">Manage Products</h1>

        <h1 class="flex justify-start text-2xl mb-10 items-center font-semibold head">Add New Product:</h1>

        
      <div class="flex grow justify-center space-x-32">
        <div class="block">
        <p class="ml-1">Product Name:</p>
        <div class="textInputWrapper">
            <input placeholder="Type Here" type="text" class="textInput">
        </div>
        </div>

        <div class="block cursor-pointer">
        <p class="ml-1">Product Image:</p>
        <div class="textInputWrapper border shadow-lg cursor-pointer bg-[#f2f2f2]">
            <input placeholder="Type Here" type="file" class="mt-2 cursor-pointer">
        </div>
        </div>


      </div>

      <div class="flex grow justify-center mt-10 space-x-2">
        <div class="block">
        <p class="ml-1">Category:</p>
        <select class="textInputWrapper border p-[0.6rem] rounded-sm shadow-lg cursor-pointer mt-0.5 text-sm bg-[#f2f2f2]">
            <option class="textInput cursor-pointer" value="">Select Category</option>
            <option class="textInput cursor-pointer" value="">Nails</option>
            <option class="textInput cursor-pointer" value="">Plumbing</option>
            <option class="textInput cursor-pointer" value="">Building Materials</option>
            <option class="textInput cursor-pointer" value="">Handtools</option>
        </select>
        </div>

        <div class="block">
        <p class="ml-1">Price:</p>
        <div class="textInputWrap">
            <input placeholder="Input Price" type="number" class="textInputting">
        </div>
        </div>

        <div class="block">
        <p class="ml-1">Quantity:</p>
        <div class="textInputWrap">
            <input placeholder="Input Quantity" type="number" class="textInputting">
        </div>
        </div>
      </div>

      <div class="block ml-16 mt-10 w-full">
        <p class="">Description:</p>
        <div class="w-[58.8rem] border border-black mb-5 rounded-lg">
            <textarea type="text" placeholder="Type Here" name="description" id="description" class="w-full p-1"></textarea>
        </div>
        </div>

      <button class="button">
          <p class="text">Add Product</p>
        </button>


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
          <tr>
            <td class="p2 border justify-center flex">1</td>
            <td class="p2 border ">Nails</td>
            <td class="p2 border ">First Testing</td>
            <td class="p2 border ">09223232</td>
            <td class="flex p2 space-x-6 border cursor-pointer justify-center">Baicx</td>
          </tr>
          </tbody>

          <tbody>
            <tr>
              <td class="p2 border justify-center flex">2</td>
              <td class="p2 border ">Chinsaw</td>
              <td class="p2 border ">Second Testing</td>
              <td class="p2 border ">09100000</td>
              <td class="flex p2 border cursor-pointer justify-center">Baicx</td>
          </tr>
          </tbody>

          
        </table>
        </article>
    </div>
@endsection
