@extends('admindashboard')

@section('content')

<div class="p-10">
    <article class="bg-white px-10 py-10 shadow-lg rounded-lg">
        <div class="md:flex items-center xl:gap-[59.5rem] justify-center">
        <h1 class="text-2xl mb-6 font-semibold text-gray-800">Order ID</h1>
        <a href="{{ url('/orders') }}" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="-mt-4 hover:bg-gray-600 hover:text-white cursor-pointer bi bi-x-square" viewBox="0 0 16 16">
      <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
      <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
    </svg></a>
</div>
        @if (session('success'))
            <div class="bg-green-500 text-white p-3 mb-4 rounded">
                {{ session('success') }}
            </div>
        @endif

        @if ($order->count() > 0)
        <table class="table w-full">
        <thead>
        
            <tr>
                <th class="p2 border border-black bg-yellow-500 text-black bg-opacity-80 text-sm py-2">Fullname</th>
                <th class="p2 border border-black bg-yellow-500 text-black  bg-opacity-80 text-sm py-2">Transaction ID</th>
                <th class="p2 border border-black bg-yellow-500 text-black  bg-opacity-80 text-sm py-2">Product Name</th>
                <th class="p2 border border-black bg-yellow-500 text-black  bg-opacity-80 text-sm py-2">Address</th>
                <th class="p2 border border-black bg-yellow-500 text-black  bg-opacity-80 text-sm py-2">Contact Number</th>
                <th class="p2 border border-black bg-yellow-500 text-black  bg-opacity-80 text-sm py-2">Price</th>
                <th class="p2 border border-black bg-yellow-500 text-black  bg-opacity-80 text-sm py-2" >Quantity</th>
                <th class="p2 border border-black bg-yellow-500 text-black  bg-opacity-80 text-sm py-2">Payment Method</th>
                <th class="p2 border border-black bg-black text-white bg-opacity-80 text-sm py-2">Status</th>
                
            </tr>
        </thead>
        <tbody>
        @foreach ($order->details as $detail)
                    <tr>
                        <td class="p2 border text-sm border-black justify-center flex items-center py-1">{{ $order->user->fullname }}</td>
                        <td class="p2 border text-sm border-black py-1">{{ $order->pay_id }}</a></td>
                        <td class="p2 border text-sm border-black py-1">{{ $detail->product->name }}</td>
                        <td class="p2 border text-sm border-black py-1">{{ $order->user->address }}</td>
                        <td class="p2 border text-sm border-black py-1">{{ $order->user->contact_number }}</td>
                        <td class="p2 border text-sm border-black py-1">₱{{ number_format($detail->product->price * $detail->quantity, 2) }}</td>
                        <td class="p2 border text-sm border-black py-1">{{ $detail->quantity }}</td>
                        <td class="p2 border text-sm border-black py-1">COD</td>
                        <td class="p2 border text-sm border-black py-1">{{ $order->status }}</td>
                        
                    </tr>
                    @endforeach
        </tbody>
    </table>
    
    @else
    <p class="justify-start flex items-center -mt-4 ml-6">No order(s) found.</p>
    @endif
    </article>
</div>

@endsection
