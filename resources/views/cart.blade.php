@extends('userdash')

@section('content')
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>



@if($cartItems->count() > 0)
<div  class=" p-10 bg-opacity-50 bg-cover bg-center bg-no-repeat bg-fixed"  style="background-image: url('http://127.0.0.1:8000/images/hardwareequipment.jpg');">
    
    
<article class="px-10 py-10 shadow-xl h-full w-full rounded-lg bg-opacity-50 bg-white bg-cover bg-center bg-no-repeat bg-fixed" >
<a href="/userdashboard" class="flex justify-end"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="hover:bg-gray-300 hover:text-white cursor-pointer bi bi-x-square" viewBox="0 0 16 16">
      <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
      <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
    </svg></a>
    <h2 class="mb-4 text-[30px] font-semibold text-white flex justify-center items-center bg-yellow-500 rounded-md bg-opacity-80 mt-8"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" class="mr-2 bi bi-cart-check" viewBox="0 0 16 16">
  <path d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0z"/>
  <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
</svg> ᴍʏ ᴄᴀʀᴛ</h2>
<div class="flex flex-wrap cart-items -m-4 mt-10">
      
    @foreach($cartItems as $cartItem)
      <div class="xl:w-1/4 md:w-1/2 p-4">
      
        <div class="cart-item bg-white mb-4 shadow-xl grow rounded-lg">
          <div class="flex w-full md:gap-[16.5rem]">


          <label class="neon-checkbox">
  <input type="checkbox" class="select-product" value="{{ $cartItem->id }}" data-price="{{ $cartItem->product->price }}" data-id="{{ $cartItem->product->id }}"/>
  <div class="neon-checkbox__frame">
    <div class="neon-checkbox__box">
      <div class="neon-checkbox__check-container">
        <svg viewBox="0 0 24 24" class="neon-checkbox__check">
          <path d="M3,12.5l7,7L21,5"></path>
        </svg>
      </div>
      <div class="neon-checkbox__glow"></div>
      <div class="neon-checkbox__borders">
        <span></span><span></span><span></span><span></span>
      </div>
    </div>
    <div class="neon-checkbox__effects">
      <div class="neon-checkbox__particles">
        <span></span><span></span><span></span><span></span> <span></span
        ><span></span><span></span><span></span> <span></span><span></span
        ><span></span><span></span>
      </div>
      <div class="neon-checkbox__rings">
        <div class="ring"></div>
        <div class="ring"></div>
        <div class="ring"></div>
      </div>
      <div class="neon-checkbox__sparks">
        <span></span><span></span><span></span><span></span>
      </div>
    </div>
  </div>
</label>





        
        <form action="{{ route('cart.remove', $cartItem->id) }}" method="POST">
            @csrf
            @method('POST')
            <button type="submit" class="mt-1 border rounded-md shadow-xl hover:text-white"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="hover:bg-gray-200 hover:text-white cursor-pointer bi bi-x-square" viewBox="0 0 16 16">
      <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
      <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
    </svg></button>
            
        </form>
        </div>
          <img class="h-40 rounded w-full object-cover object-center mb-6 md:max-w-[10rem] rigth-0 md:max-h-[12rem] md:min-w-[2rem] md:min-h-[2rem]" src="{{ asset('storage/' . $cartItem->product->photo) }}" alt="Product Image">
          <h3 class="tracking-widest text-indigo-500 text-xs px-4 font-medium title-font">BRAND NAME</h3>
          <h2 class="text-lg text-gray-900 font-medium px-4 title-font mb-4">{{ $cartItem->product->name }}</h2>
          <p class="leading-relaxed px-4 text-base">Price: ₱{{ $cartItem->product->price }}</p>
          <p class="leading-relaxed px-4 text-base">Stock: {{ $cartItem->product->counter }}</p>
          <form class="px-4" action="{{ route('cart.update', $cartItem->id) }}" method="POST">
            @csrf
            
            <label class="text-black">Quantity: </label>
            <input type="hidden" name="_method" value="PATCH">
            <input type="number" class="quantity border border-black px-1" name="quantity" min="1" max="{{ $cartItem->product->counter }}" value="{{ $cartItem->quantity }}">
            <button type="submit" class="py-[1.6px] px-2 bg-yellow-400 rounded-md hover:bg-yellow-500 text-white">ᴜᴘᴅᴀᴛᴇ</button>
        </form>
        <div x-data="{ quantity: {{ $cartItem->quantity }}, price: {{ $cartItem->product->price }} }" >
                              

                              <!-- Total Price Display -->
                              <span class="text-md px-4 mt-2 item-total">Total: ₱<span x-text="(quantity * price).toFixed(2)"></span></span>
        </div>
                              <div class="flex space-x-4 px-4 py-4">
        
        
        </div>
        
        </div>
        
        
      </div>
      @endforeach
      
      
      </div>
      <div class="block">
      <h3 class="text-lg font-semibold py-2 text-white">Total Price: ₱<span id="total-price">0.00</span></h3>
      
      <form id="checkout-form" action="{{ route('checkout.show') }}" method="POST">
    @csrf
    <input type="hidden" name="selected_items" id="selected-items" value="">
    <button type="submit" id="checkout" class="btn btn-success bg-white border py-2 px-6 hover:bg-green-400 text-black rounded-md shadow-lg hover:text-white opacity-50 pointer-events-none" disabled>
        ✅ Checkout
    </button>
</form>
      
      <p class="text-white py-2 text-sm">Please select order first to checkout.</p>
      </div>
      </article>
      </div>
    
@else

<div class="container p-10 bg-opacity-50 h-screen bg-cover bg-center bg-no-repeat bg-fixed"  style="background-image: url('http://127.0.0.1:8000/images/hardwareequipment.jpg');">

<article class="px-10 py-10 shadow-xl h-full w-full rounded-lg bg-opacity-50 bg-white bg-cover bg-center bg-no-repeat bg-fixed" >
<a href="/userdashboard" class="flex justify-end"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="hover:bg-gray-300 hover:text-white cursor-pointer bi bi-x-square" viewBox="0 0 16 16">
      <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
      <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
    </svg></a>
    <h2 class="mb-4 text-[30px] font-semibold text-white flex justify-center items-center bg-yellow-500 rounded-md bg-opacity-80 mt-8"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" class="mr-2 bi bi-cart-check" viewBox="0 0 16 16">
  <path d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0z"/>
  <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
</svg> ᴍʏ ᴄᴀʀᴛ</h2>
<div class="flex flex-wrap cart-items -m-4 mt-10">
<p class="justify-start flex items-center -mt-4 ml-4">Your cart is empty.</p>
    @foreach($cartItems as $cartItem)
      <div class="xl:w-1/4 md:w-1/2 p-4">
      
        <div class="cart-item bg-white mb-4 shadow-xl grow rounded-lg">
          <div class="flex w-full md:gap-[16.5rem]">


          <label class="neon-checkbox">
  <input type="checkbox" class="select-product" value="{{ $cartItem->id }}" data-price="{{ $cartItem->product->price }}" data-id="{{ $cartItem->product->id }}"/>
  <div class="neon-checkbox__frame">
    <div class="neon-checkbox__box">
      <div class="neon-checkbox__check-container">
        <svg viewBox="0 0 24 24" class="neon-checkbox__check">
          <path d="M3,12.5l7,7L21,5"></path>
        </svg>
      </div>
      <div class="neon-checkbox__glow"></div>
      <div class="neon-checkbox__borders">
        <span></span><span></span><span></span><span></span>
      </div>
    </div>
    <div class="neon-checkbox__effects">
      <div class="neon-checkbox__particles">
        <span></span><span></span><span></span><span></span> <span></span
        ><span></span><span></span><span></span> <span></span><span></span
        ><span></span><span></span>
      </div>
      <div class="neon-checkbox__rings">
        <div class="ring"></div>
        <div class="ring"></div>
        <div class="ring"></div>
      </div>
      <div class="neon-checkbox__sparks">
        <span></span><span></span><span></span><span></span>
      </div>
    </div>
  </div>
</label>





        
        <form action="{{ route('cart.remove', $cartItem->id) }}" method="POST">
            @csrf
            @method('POST')
            <button type="submit" class="mt-1 border rounded-md shadow-xl hover:text-white"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="hover:bg-gray-200 hover:text-white cursor-pointer bi bi-x-square" viewBox="0 0 16 16">
      <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
      <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
    </svg></button>
            
        </form>
        </div>
          <img class="h-40 rounded w-full object-cover object-center mb-6" src="{{ asset('storage/' . $cartItem->product->photo) }}" alt="Product Image">
          <h3 class="tracking-widest text-indigo-500 text-xs px-4 font-medium title-font">BRAND NAME</h3>
          <h2 class="text-lg text-gray-900 font-medium px-4 title-font mb-4">{{ $cartItem->product->name }}</h2>
          <p class="leading-relaxed px-4 text-base">Price: ₱{{ $cartItem->product->price }}</p>
          <p class="leading-relaxed px-4 text-base">Stock: {{ $cartItem->product->counter }}</p>
          <form class="px-4" action="{{ route('cart.update', $cartItem->id) }}" method="POST">
            @csrf
            
            <label class="text-black">Quantity: </label>
            <input type="hidden" name="_method" value="PATCH">
            <input type="number" class="quantity border border-black px-1" name="quantity" min="1" max="{{ $cartItem->product->counter }}" value="{{ $cartItem->quantity }}">
            <button type="submit" class="py-[1.6px] px-2 bg-yellow-400 rounded-md hover:bg-yellow-500 text-white">ᴜᴘᴅᴀᴛᴇ</button>
        </form>
        <div x-data="{ quantity: {{ $cartItem->quantity }}, price: {{ $cartItem->product->price }} }" >
                              

                              <!-- Total Price Display -->
                              <span class="text-md px-4 mt-2 item-total">Total: ₱<span x-text="(quantity * price).toFixed(2)"></span></span>
        </div>
                              <div class="flex space-x-4 px-4 py-4">
        
        
        </div>
        
        </div>
        
        
      </div>
      @endforeach
      
      
      </div>
      <div class="block">
      
      </div>
      </article>
    </div>
@endif
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const checkboxes = document.querySelectorAll(".select-product");
    const totalPriceElement = document.getElementById("total-price");
    const checkoutBtn = document.getElementById("checkout");
    const checkoutForm = document.getElementById("checkout-form");
    const selectedItemsInput = document.getElementById("selected-items");

    function updateTotalPrice() {
        let total = 0;
        let hasSelection = false;
        let selectedItems = [];

        checkboxes.forEach((checkbox) => {
            if (checkbox.checked) {
                let quantity = parseInt(checkbox.closest(".cart-item").querySelector(".quantity").value);
                let price = parseFloat(checkbox.dataset.price);
                total += price * quantity;
                selectedItems.push(checkbox.value); // Store selected item IDs
                hasSelection = true;
            }
        });

        totalPriceElement.textContent = total.toFixed(2);
        checkoutBtn.classList.toggle("opacity-50", !hasSelection);
        checkoutBtn.classList.toggle("pointer-events-none", !hasSelection);
        checkoutBtn.disabled = !hasSelection;

        // Store selected items in hidden input
        selectedItemsInput.value = selectedItems.join(",");
    }

    checkboxes.forEach((checkbox) => {
        checkbox.addEventListener("change", updateTotalPrice);
    });

    document.querySelectorAll(".quantity").forEach((input) => {
        input.addEventListener("input", updateTotalPrice);
    });

    updateTotalPrice();
});

</script>


<script>
  function showCheckout() {
    alert('Please confirm to checkout.');
  }
</script>

@endsection
