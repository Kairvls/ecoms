@extends('admindashboard')

@section('content')
    
<div class="p-10">
        <article class="bg-white px-10 py-10 shadow-lg">
        <h1 class="flex justify-start text-2xl mb-10 items-center font-semibold head">Manage Accounts</h1>

        <form action="{{ route('store') }}" method="POST" >
        @csrf
      <div class="flex grow justify-center space-x-32">
        <div class="block">
        <p class="ml-1">Fullname:</p>
        <div class="textInputWrapper">
            <input placeholder="Type Here" type="text" name="fullname" class="textInput">
        </div>
        </div>

        <div class="block">
        <p class="ml-1">Username:</p>
        <div class="textInputWrapper">
            <input placeholder="Type Here" type="text" name="username" class="textInput">
        </div>
        </div>


      </div>

      <div class="flex grow justify-center mt-10 space-x-32">
        <div class="block">
        <p class="ml-1">Contact Number:</p>
        <div class="textInputWrapper">
            <input placeholder="Type Here" type="text" name="contact_number" class="textInput">
        </div>
        </div>

        <div class="block">
        <p class="ml-1">Address:</p>
        <div class="textInputWrapper">
            <input placeholder="Type Here" type="text" name="address" class="textInput">
        </div>
        </div>


      </div>
      <button type="submit" class="button">
          
          <p class="text">Save</p>
        </button>
        </form>

        <h2 class="flex justify-start text-2xl py-2 mt-16 mb-6 items-center font-semibold head">Existing Accounts</h2>
        <table class="w-full mt-4 border justify-center py-10 text-md">
          <thead>
          <tr>
            <th class="p2 border bg-yellow-500">ID</th>
            <th class="p2 border bg-yellow-500">FULLNAME</th>
            <th class="p2 border bg-yellow-500">USERNAME</th>
            <th class="p2 border bg-yellow-500">CONTACT NUMBER</th>
            <th class="p2 border bg-yellow-500">ADDRESS</th>
          </tr>
          </thead>
          <tbody>
            @foreach($users as $user)
            <tr>
              <td class="p2 border justify-center flex">{{ $user->id }}</td>
              <td class="p2 border ">{{ $user->fullname }}</td>
              <td class="p2 border ">{{ $user->username }}</td>
              <td class="p2 border ">{{ $user->contact_number }}</td>
              <td class="flex p2 space-x-6 border cursor-pointer justify-center">{{ $user->address }}</td>
            </tr>
            @endforeach
          </tbody>

          

          
        </table>
        </article>
    </div>
@endsection
