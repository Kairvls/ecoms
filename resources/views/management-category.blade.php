@extends('admindashboard')

@section('content')
    
<div class="p-10">
        <article class="bg-white px-10 py-10 shadow-lg">
        <h1 class="flex justify-start text-2xl mb-10 items-center font-semibold head">Category Management</h1>

        <form method="POST" action="{{ route('categories.store') }}">
        @csrf
      <div class="flex grow justify-center space-x-32">
        <div class="block">
        <p class="ml-1">Category Name:</p>
        <div class="textInputWrapper">
            <input placeholder="Type Here" type="text" name="name" class="textInput">
        </div>
        </div>

        <div class="block">
        <p class="ml-1">Description:</p>
        <div class="textInputWrapper">
            
            <textarea type="text" placeholder="Type Here" name="description" id="description" class="textInput"></textarea>
        </div>
        </div>


      </div>
      <button type="submit" class="button">
          
          <p class="text">Add Category</p>
        </button>
        </form>


        <h2 class="flex justify-start text-2xl py-2 mt-16 mb-6 items-center font-semibold head">Existing Categories</h2>
        <table class="w-full mt-4 border justify-center py-10 text-md">
          <thead>
          <tr>
            <th class="p2 border">ID</th>
            <th class="p2 border">NAME</th>
            <th class="p2 border">DESCRIPTION</th>
            <th class="p2 border">ACTIONS</th>
          </tr>
          </thead>
          
          <tbody>
          @if(isset($categories))
          @foreach ($categories as $category)
          <tr>
            <td class="p2 border justify-center flex">{{ $category->id }}</td>
            <td class="p2 border ">{{ $category->name }}</td>
            <td class="p2 border ">{{ $category->description }}</td>
            <td class="flex p2 space-x-6 border cursor-pointer justify-center">
              <form method="POST" action="{{ route('categories.destroy', $category->id) }}">
                    @csrf @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
              </td>
          </tr>
          @endforeach
          @endif
          </tbody>
          

          
        </table>
        </article>
    </div>
@endsection
