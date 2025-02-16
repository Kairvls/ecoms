<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Orders</title>
    @vite('resources/css/app.css')
</head>
<body>

<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
        <h1 class="text-2xl font-bold mb-6">📦 My Orders</h1>

        <div class="bg-white p-6 rounded-lg shadow-md">
            @if($orders->isEmpty())
                <p class="text-gray-500">You haven't placed any orders yet.</p>
            @else
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="border-b">
                            <th class="py-2 text-left">Order #</th>
                            <th class="py-2 text-left">Date</th>
                            <th class="py-2 text-left">Total</th>
                            <th class="py-2 text-left">Status</th>
                            <th class="py-2 text-left">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                            <tr class="border-b">
                                <td class="py-2">#{{ $order->id }}</td>
                                <td class="py-2">{{ $order->created_at->format('M d, Y') }}</td>
                                <td class="py-2">₱{{ number_format($order->total, 2) }}</td>
                                <td class="py-2">
                                    <span class="px-2 py-1 rounded 
                                        {{ $order->status == 'Pending' ? 'bg-yellow-200' : 'bg-green-200' }}">
                                        {{ $order->status }}
                                    </span>
                                </td>
                                <td class="py-2">
                                    <a href="{{ route('orders.show', $order->id) }}" 
                                       class="text-blue-500 hover:underline">
                                        View Details
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</section>

</body>
</html>
