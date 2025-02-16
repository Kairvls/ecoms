<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>
<div style="background-image: url('http://127.0.0.1:8000/images/hardwareequipment.jpg');" class="bg-cover bg-center w-full bg-no-repeat bg-fixed h-screen overflow-y-scroll">
<header class="text-gray-600 bg-gray-500 bg-opacity-80 shadow-lg body-font">
  <div class="container mx-auto flex flex-wrap py-2 px-5 flex-col md:flex-row items-center">
    <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
    <img src="/images/mainlogo.jpg" class="ml-2 rounded-full w-10 h-10 object-cover "/>
      <span class="ml-3 text-white text-xl">ᴇᴇᴇᴄʜᴀʀᴅᴡᴀʀᴇ ᴄᴀʀᴛ</span>
    </a>
    <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
      
    </nav>
    <a href="/userdashboard"  class="inline-flex items-center bg-red-500 mr-4 shadow-xl py-1 px-3 focus:outline-none hover:bg-gray-800 hover:text-white rounded text-white font-semibold -mt-4 md:mt-0">Back
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-right ml-2" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8m-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5"/>
        </svg>
</a> 
  </div>
</header>
<section class="snap-start h-full text-gray-600 body-font">
  <div class="container px-20 py-24 mx-auto">
    <h1 class="text-2xl font-bold text-white -mt-10 mb-6">🛒 Your Shopping Cart</h1>

    <div class="flex flex-wrap -m-4">
      @php $total = 0; @endphp
      @foreach($cartItems as $item)
        @php 
          $subtotal = $item->price * $item->quantity;
          $total += $subtotal;
        @endphp

        <div class="xl:w-[22rem] md:w-1/2 p-4">
          <div class="bg-gray-100 rounded-lg shadow-md">
            <img class="h-40 rounded w-full object-cover object-center mb-6" 
                 src="{{ asset('storage/' . $item->photo) }}" 
                 alt="{{ $item->name }}">
            
            <h3 class="tracking-widest text-indigo-500 px-4 text-xs font-medium title-font">BRAND NAME</h3>
            <h2 class="text-lg text-gray-900 font-medium px-4 title-font mb-2">{{ $item->name }}</h2>
            
            <p class="text-gray-700 px-4 font-semibold">₱{{ number_format($item->price, 2) }} x {{ $item->quantity }}</p>
            <p class="text-gray-900 px-4 font-bold">Total: ₱{{ number_format($subtotal, 2) }}</p>

            <form action="{{ route('cart.remove', $item->id) }}" method="POST" class="px-4 py-4">
                @csrf
                @method('DELETE')
                <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition">
                    🗑 Remove
                </button>
            </form>
          </div>
        </div>
      @endforeach
    </div>

    <div class="mt-6">
      <h2 class="text-lg bg-black py-1 w-[14rem] justify-center flex bg-opacity-80 items-center rounded-md shadow-lg text-white font-semibold">Grand Total: ₱{{ number_format($total, 2) }}</h2>
      <a href="{{ route('checkout.index') }}" class="bg-green-500 text-white px-6 py-2 rounded mt-4 inline-block hover:bg-green-600 transition">
        ✅ Proceed to Checkout
      </a>
    </div>
  </div>
</section>
</div>
</body>
</html>
