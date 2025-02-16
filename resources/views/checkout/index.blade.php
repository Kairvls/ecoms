<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    @vite('resources/css/app.css')
</head>
<body>

<section style="background-image: url('http://127.0.0.1:8000/images/hardwareequipment.jpg');" class="flex justify-center text-gray-600 body-font items-center bg-cover bg-center w-full bg-no-repeat bg-fixed h-screen">
    <div class="container px-52 py-24 mx-auto">
        <h1 class="text-2xl text-white font-bold mb-6">🛒 Checkout</h1>

        <div class="bg-white p-6 rounded-lg shadow-md">
        <a href="/userdashboard" class="flex justify-end"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="hover:bg-gray-600 hover:text-white cursor-pointer bi bi-x-square" viewBox="0 0 16 16">
      <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
      <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
    </svg></a>
            <h2 class="text-lg font-bold mb-4">Order Summary</h2>
            <table class="w-full mb-4">
                <thead>
                    <tr class="text-left border-b">
                        <th class="py-2">Product</th>
                        <th class="py-2">Quantity</th>
                        <th class="py-2">Price</th>
                        <th class="py-2">Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    @php $total = 0; @endphp
                    @foreach($cartItems as $item)
                        @php 
                            $subtotal = $item->price * $item->quantity; 
                            $total += $subtotal; 
                        @endphp
                        <tr class="border-b">
                            <td class="py-2 shadow-lg">{{ $item->name }}</td>
                            <td class="py-2 shadow-lg">{{ $item->quantity }}</td>
                            <td class="py-2 shadow-lg">₱{{ number_format($item->price, 2) }}</td>
                            <td class="py-2 shadow-lg">₱{{ number_format($subtotal, 2) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <h3 class="text-xl font-bold">Total: ₱{{ number_format($total, 2) }}</h3>

            <form action="{{ route('orders.store') }}" method="POST" class="mt-6">
                @csrf
                <div class="mb-4">
                    <label for="address" class="block text-sm font-medium">Shipping Address</label>
                    <input type="text" name="address" id="address" required class="w-full border rounded px-3 py-2">
                </div>

                <div class="mb-4">
                    <label for="payment_method" class="block text-sm font-medium">Payment Method</label>
                    <select name="payment_method" id="payment_method" required class="w-full border rounded px-3 py-2">
                        <option value="cash_on_delivery">Cash on Delivery</option>
                        <option value="credit_card">Credit Card</option>
                    </select>
                </div>

                <button type="submit" class="bg-green-500 text-white px-6 py-2 rounded hover:bg-green-600 transition">
                    ✅ Place Order
                </button>
            </form>
        </div>
    </div>
</section>

</body>
</html>
