@extends('admindashboard')

@section('content')
    
<div class="p-10">
        <article class="bg-white px-10 py-10 shadow-lg">
        <h1 class="flex justify-start text-2xl mb-10 items-center font-semibold head">Manage Accounts</h1>

        
      <div class="flex grow justify-center space-x-32">
        <div class="block">
        <p class="ml-1">Fullname:</p>
        <div class="textInputWrapper">
            <input placeholder="Type Here" type="text" class="textInput">
        </div>
        </div>

        <div class="block">
        <p class="ml-1">Username:</p>
        <div class="textInputWrapper">
            <input placeholder="Type Here" type="text" class="textInput">
        </div>
        </div>


      </div>

      <div class="flex grow justify-center mt-10 space-x-32">
        <div class="block">
        <p class="ml-1">Contact Number:</p>
        <div class="textInputWrapper">
            <input placeholder="Type Here" type="text" class="textInput">
        </div>
        </div>

        <div class="block">
        <p class="ml-1">Address:</p>
        <div class="textInputWrapper">
            <input placeholder="Type Here" type="text" class="textInput">
        </div>
        </div>


      </div>
      <button class="button">
          
          <p class="text">Save</p>
        </button>


        <h2 class="flex justify-start text-2xl py-2 mt-16 mb-6 items-center font-semibold head">Existing Accounts</h2>
        <table class="w-full mt-4 border justify-center py-10 text-md">
          <thead>
          <tr>
            <th class="p2 border">ID</th>
            <th class="p2 border">FULLNAME</th>
            <th class="p2 border">USERNAME</th>
            <th class="p2 border">CONTACT NUMBER</th>
            <th class="p2 border">ADDRESS</th>
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
