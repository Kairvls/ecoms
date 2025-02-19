@extends('admindashboard')

@section('content')

<div class="p-10">
    <article class="bg-white px-10 py-10 shadow-lg rounded-lg">
        
        <h1 class="text-2xl mb-6 font-semibold text-gray-800">Order Management</h1>

        @if (session('success'))
            <div class="bg-green-500 text-white p-3 mb-4 rounded">
                {{ session('success') }}
            </div>
        @endif

        
        <table class="table w-full">
        <thead>
            <tr>
                <th class="p2 border border-black bg-yellow-500 text-black bg-opacity-80 text-sm py-2">Fullname</th>
                <th class="p2 border border-black bg-yellow-500 text-black  bg-opacity-80 text-sm py-2">Transaction ID</th>
                <th class="p2 border border-black bg-yellow-500 text-black  bg-opacity-80 text-sm py-2">Address</th>
                <th class="p2 border border-black bg-yellow-500 text-black  bg-opacity-80 text-sm py-2">Contact Number</th>
                <th class="p2 border border-black bg-yellow-500 text-black  bg-opacity-80 text-sm py-2">Price</th>
                <th class="p2 border border-black bg-yellow-500 text-black  bg-opacity-80 text-sm py-2" >Quantity</th>
                <th class="p2 border border-black bg-yellow-500 text-black  bg-opacity-80 text-sm py-2">Payment Method</th>
                <th class="p2 border border-black bg-black text-white bg-opacity-80 text-sm py-2">Status</th>
                <th class="p2 border border-black bg-black text-white bg-opacity-80 text-sm py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                @foreach ($order->details as $detail)
                    <tr>
                        <td class="p2 border text-sm border-black justify-center flex items-center py-1">{{ $order->user->fullname ?? 'N/A' }}</td>
                        <td class="p2 border text-sm border-black py-1">{{ $order->pay_id }}</td>
                        <td class="p2 border text-sm border-black py-1">{{ $order->user->address ?? 'N/A' }}</td>
                        <td class="p2 border text-sm border-black py-1">{{ $order->user->contact_number ?? 'N/A' }}</td>
                        <td class="p2 border text-sm border-black py-1">{{ number_format($detail->product->price * $detail->quantity, 2) }}</td>
                        <td class="p2 border text-sm border-black py-1">{{ $detail->quantity }}</td>
                        <td class="p2 border text-sm border-black py-1">COD</td>
                        <td class="p2 border text-sm border-black py-1">{{ ucfirst($order->status) }}</td>
                        <td class="p2 border text-sm border-black justify-center flex items-center py-1">
                            @if ($order->status == 'pending')
                                <form action="{{ route('orders.update', $order->id) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="status" value="confirmed">
                                    <button type="submit" class="btn btn-success bg-green-500 px-3 hover:bg-green-600 rounded-md">Confirm</button>
                                </form>
                                <form action="{{ route('orders.update', $order->id) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="status" value="canceled">
                                    <button type="submit" class="btn btn-danger bg-red-500 px-3 hover:bg-red-600 rounded-md">Reject</button>
                                </form>
                            @elseif ($order->status == 'confirmed')
                                <form action="{{ route('orders.update', $order->id) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="status" value="to_ship">
                                    <button type="submit" class="btn btn-primary bg-orange-500 px-3 hover:bg-orange-600 rounded-md text-white">Ship</button>
                                </form>
                            @elseif ($order->status == 'to_ship')
                                <form action="{{ route('orders.update', $order->id) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="status" value="delivered">
                                    <button type="submit" class="btn btn-info bg-blue-500 px-3 hover:bg-blue-600 rounded-md">Deliver</button>
                                </form>
                            @elseif ($order->status == 'delivered')
                                <span class="badge bg-success">Completed</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
            @endforeach
        </tbody>
    </table>
    

    </article>
</div>

@endsection
