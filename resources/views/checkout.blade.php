<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    @vite('resources/css/app.css')
</head>
<body >

<div class="overflow-y-scroll h-screen">

<section style="background-image: url('http://127.0.0.1:8000/images/hardwareequipment.jpg');" class="snap-start min-h-screen flex justify-center text-gray-600 body-font items-center bg-cover bg-center w-full bg-no-repeat bg-fixed">
    
    <div class="container px-52 py-28 mx-auto">
        <h1 class="text-2xl text-white font-bold mb-6 flex"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="yellow" class="mr-2 bi bi-cart-check" viewBox="0 0 16 16">
  <path d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0z"/>
  <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
</svg> Checkout</h1>
        <!-- Display Success or Error Messages -->
    @if(session('success'))
            <div class="bg-green-500 text-white p-3 mb-4 rounded">
                {{ session('success') }}
            </div>
    @elseif(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @if ($cartItems->isEmpty())
        <div class="alert alert-warning md:flex gap-[11rem]  items-center bg-white py-5 px-10 shadow-lg rounded-md">
            Your order has been placed successfully! We will notify you when it ships and is on its way.
            <a href="/userdashboard" class="flex justify-start text-sm bg-green-500 text-white px-5 py-2 shadow-lg rounded-md items-center hover:bg-green-600 hover:text-white"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag-check" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0"/>
  <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"/>
</svg> <p class="ml-2 px-2">Continue Shopping</p></a>
        </div>
    @else

        <div class="bg-white p-6 rounded-lg shadow-md">
        <a href="/cart" class="flex justify-end"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="hover:bg-gray-300 hover:text-white cursor-pointer bi bi-x-square" viewBox="0 0 16 16">
      <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
      <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
    </svg></a>
    
            <h2 class="text-lg font-bold mb-4">Order Summary</h2>
            <form action="{{ route('checkout.process') }}" method="POST">
            @csrf
            <table class="w-full mb-4">
                <thead>
                    <tr class="text-left border-b">
                    <th>Select</th>
                        <th>Product Image</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach($cartItems as $cartItem)
                    
                        <tr class="border-b">
                            <td class="py-2 shadow-lg">
                                <input id="selectItem" class="ml-10 selectItem cursor-pointer" type="checkbox" name="selected_items[]" value="{{ $cartItem->id }}">
                            </td>
                            <td class="py-2 shadow-lg">
                                <img src="{{ asset('storage/' . $cartItem->product->photo) }}" alt="Product Image" style="width: 50px;">
                            </td>
                            <td class="py-2 shadow-lg">{{ $cartItem->product->name }}</td>
                            <td class="py-2 shadow-lg">₱{{ number_format($cartItem->product->price, 2) }}</td>
                            <td class="py-2 shadow-lg">{{ $cartItem->quantity }}</td>
                            <td class="py-2 shadow-lg">₱{{ number_format($cartItem->product->price * $cartItem->quantity, 2) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-between">
                <h4 class="font-semibold">Total: ₱{{ number_format($total, 2) }}</h4>
            </div>

            <h4 class="font-semibold">Billing & Shipping Information</h4>
            
            <div class="flex mt-2 justify-start">
                <div class="block">
            

            <div class="block">
            <label for="name" class="ml-1">Fullname:</label>
            <div class="textInputWrapper">
                <input type="text" placeholder="Type Here" name="name" id="name" value="{{ Auth::user()->fullname }}" class="textInput"></input>
            </div>
            </div>

            

            <div class="block">
            <label for="address" class="ml-1">Shipping Address:</label>
            <div class="textInputWrapper">
                <input type="text" placeholder="Type Here" name="address" value="{{ Auth::user()->address }}" id="address" class="textInput"></input>
            </div>
            </div>

            </div>

            

            <div class="block">

            <div class="block">
            <label for="phone" class="ml-1">Phone Number:</label>
            <div class="textInputWrapper">
                <input type="text" placeholder="Type Here" name="phone" id="phone" value="{{ Auth::user()->contact_number}}" class="textInput"></input>
            </div>
            </div>


            <div class="block">
            <label for="payment_method" class="ml-1">Payment Method:</label>
            <div class="textInputWrapper">
            <select name="payment_method" id="payment_method" class="form-control border-black w-full p-2 border rounded" required>
                        <option value="gcash">GCash</option>
                        <option value="paymaya">PayMaya</option>
                        <option value="bdo">BDO</option>
                        <option value="bpi">BPI</option>
                        <option value="go_tyme">GoTyme</option>
                        <option value="cash_on_delivery">Cash on Delivery</option>
                    </select>
            </div>
        </div>
        

            

            
            </div>
            </div>
                

                <div class="d-flex justify-content-between mt-3">
                <a href="{{ route('cart') }}" class="btn btn-secondary bg-gray-500 text-white px-6 py-3 rounded hover:bg-gray-600 transition">🛒 Back to Cart</a>
                <button type="submit" id="placeOrderBtn" onclick="showCheckout()" class="btn btn-success bg-green-500 text-white px-6 py-2 rounded hover:bg-green-600 transition">✅ Place Order</button>
            </div>
        </form>
            
        </div>
        @endif
    </div>
</section>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const checkbox = document.getElementById("selectItem");
    const placeOrderBtn = document.getElementById("placeOrderBtn");

    // Function to toggle button state
    function toggleButtonState() {
        if (checkbox.checked) {
            placeOrderBtn.disabled = false;
            placeOrderBtn.classList.remove("opacity-50");
        } else {
            placeOrderBtn.disabled = true;
            placeOrderBtn.classList.add("opacity-50");
        }
    }

    // Initialize button state
    toggleButtonState();

    // Listen for checkbox change
    checkbox.addEventListener("change", toggleButtonState);
});
</script>


<script>
    function showCheckout() {
        alert('Please confirm to place order.');
    }
</script>


</body>
</html>


