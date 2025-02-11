@extends('admindashboard')

@section('content')
    
<div class="p-10">
        <article class="bg-white px-10 py-10 shadow-lg">
        <h1 class="flex justify-start text-2xl mb-10 items-center font-semibold head">Order Management</h1>

        
        <table class="w-full mt-4 border justify-center py-10 text-md">
          <thead>
          <tr>
            <th class="p2 border">ID</th>
            <th class="p2 border">FULLNAME</th>
            <th class="p2 border">TRANSACTION ID</th>
            <th class="p2 border">ADDRESS</th>
            <th class="p2 border">CONTACT NUMBER</th>
            <th class="p2 border">PRICE</th>
            <th class="p2 border">QUANTITY</th>
            <th class="p2 border">PAYMENT METHOD</th>
            <th class="p2 border">STATUS</th>
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
