@extends('admindashboard')

@section('content')

<div id="app" class="p-10">

    <article class="bg-white px-10 py-10 shadow-lg rounded-lg">
    <div v-if="loading" class="text-center my-4">
        <p class="text-white text-lg ">Loading orders...</p>
    </div>
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
                        <td class="p2 border text-sm border-black py-1 cursor-pointer underline text-blue-600"><a href="{{ route('orders.details', ['pay_id' => $order->pay_id]) }}">
        {{ $order->pay_id }}
    </a></td>
                        <td class="p2 border text-sm border-black py-1">{{ $order->user->address ?? 'N/A' }}</td>
                        <td class="p2 border text-sm border-black py-1">{{ $order->user->contact_number ?? 'N/A' }}</td>
                        <td class="p2 border text-sm border-black py-1">₱{{ number_format($detail->product->price * $detail->quantity, 2) }}</td>
                        <td class="p2 border text-sm border-black py-1">{{ $detail->quantity }}</td>
                        <td class="p2 border text-sm border-black py-1">
                            @if($order->payment_method == 'gcash') GCash
                            @elseif($order->payment_method == 'paymaya') PayMaya
                            @elseif($order->payment_method == 'bdo') BDO
                            @elseif($order->payment_method == 'bpi') BPI
                            @elseif($order->payment_method == 'go_tyme') GoTyme
                            @elseif($order->payment_method == 'cash_on_delivery') Cash on Delivery
                            @endif
                        </td>
                        <td class="p2 border text-sm border-black py-1">{{ ucfirst($order->status) }}</td>
                        <td class="p2 border text-sm border-black justify-center flex items-center py-1">
                            @if ($order->status == 'pending')
                                <form action="{{ route('orders.update', $order->id) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="status" value="confirmed">
                                    <button type="submit" class="btn btn-success text-white bg-green-600 px-3 mr-1 hover:bg-green-700 rounded-md">Confirm</button>
                                </form>
                                <form action="{{ route('orders.update', $order->id) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="status" value="canceled">
                                    <button type="submit" class="btn btn-danger text-white bg-red-600 px-3 ml-1 hover:bg-red-700 rounded-md">Reject</button>
                                </form>
                            @elseif ($order->status == 'confirmed')
                                <form action="{{ route('orders.update', $order->id) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="status" value="ship">
                                    <button type="submit" class="btn btn-primary bg-orange-500 px-3 hover:bg-orange-600 rounded-md text-white">Ship</button>
                                </form>
                            @elseif ($order->status == 'ship')
                                <form action="{{ route('orders.update', $order->id) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="status" value="delivered">
                                    <button type="submit" class="btn btn-info bg-blue-500 px-3 hover:bg-blue-600 rounded-md">Deliver</button>
                                </form>
                            @elseif ($order->status == 'delivered')
                                <span class="badge bg-success bg-gray-500 text-white px-3 rounded-md">Completed</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
            @endforeach
        </tbody>
    </table>
    

    </article>
</div>

<script>
    new Vue({
        el: '#app',
        data: {
            loading: false,
        },
        mounted() {
            this.loading = true;
            setTimeout(() => {
                this.loading = false;
            }, 1500); // simulate loading time
        }
    });
</script>

@endsection
