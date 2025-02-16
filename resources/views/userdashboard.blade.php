<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind in Laravel</title>
    
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>
<body>
<div class="overflow-y-scroll bg-white h-screen">
    <header class="text-gray-600 body-font bg-yellow-500 ">
  <div class="container mx-auto flex flex-wrap p-2 flex-col md:flex-row items-center">
    <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
      <img src="/images/mainlogo.jpg" class="ml-2 rounded-full w-14 h-14 object-cover "/>
      
    </a>
    <nav class="md:mr-auto md:ml-4 md:py-5  md:pl-4 md:border-l md:border-black	flex flex-wrap items-center text-base justify-center">
    
    </nav>
    @if(session()->has('username'))
    <p class="text-md text-black font-sans">Welcome, {{ session('username') }}!</p>
    @endif
    <div class="space-x-5 px-4 flex grow">
    <div class="flex justify-end grow space-x-10 px-4">

    <div className="animate-blinks relative group hover:text-white">
            <a href="{{ route('update.profile') }}" ><span class="flex text-lg font-sans text-black"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="mr-1 bi bi-person" viewBox="0 0 16 16">
            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
            </svg><p class="hover:text-gray-600">ᴍʏ ᴘʀᴏꜰɪʟᴇ</p></span>
            <span className="absolute left-0 bottom-0 w-0 h-[2px] bg-white transition-all group-hover:w-full"></span>
            </a>
        </div>


        <div className="animate-blinksssss relative group hover:text-white">
        <a href="/userdashboard" ><span class="flex text-lg font-sans text-black"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="mr-2 mt-[3px] bi bi-shop" viewBox="0 0 16 16">
        <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.37 2.37 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0M1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5M4 15h3v-5H4zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1zm3 0h-2v3h2z"/>
        </svg><p class="hover:text-gray-600">ᴠɪᴇᴡ ᴘʀᴏᴅᴜᴄᴛꜱ</p></span>
            <span className="absolute left-0 bottom-0 w-0 h-[2px] bg-gray-400 transition-all group-hover:w-full"></span>
            </a>
        </div>
        
        <div className="animate-blinkssssss relative group hover:text-white">
        <a href="{{ route('cart.index') }}" ><span class="flex text-lg font-sans text-black"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="mr-2 bi bi-cart-check" viewBox="0 0 16 16">
        <path d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0z"/>
        <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
        </svg><p class="hover:text-gray-600">ᴍʏ ᴄᴀʀᴛ</p></span>
            <span className="absolute left-0 bottom-0 w-0 h-[2px] bg-gray-400 transition-all group-hover:w-full"></span>
            </a>
        </div>

        <div className="animate-blinksssssss relative group hover:text-white">
        <a href="/sub_pages/services" ><span class="flex text-lg font-sans text-black"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="mr-2 bi bi-basket" viewBox="0 0 16 16">
        <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9zM1 7v1h14V7zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5"/>
        </svg><p class="hover:text-gray-600">ᴍʏ ᴏʀᴅᴇʀꜱ</p></span>
            <span className="absolute left-0 bottom-0 w-0 h-[2px] bg-gray-400 transition-all group-hover:w-full"></span>
            </a>
        </div>
    </div>
    </div>
    <form action="{{ route('welcome') }}" method="POST">
    @csrf
        <button type="submit" class="inline-flex items-center bg-transparent border border-black mr-4 shadow-xl py-1 px-3 focus:outline-none hover:bg-gray-800 hover:text-white rounded text-red-700 font-semibold -mt-4 md:mt-0">Logout
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-right ml-2" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8m-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5"/>
        </svg>
        </button> 
        </form>
  </div>
</header>

<section class="snap-start">
            <main style="background-image: url('http://127.0.0.1:8000/images/hardwareequipment.jpg');"
            class="sm:block sm:justify-center bg-eeec bg-cover bg-center sm:items-center">
           
          <div class="md:text-center bg-black bg-opacity-80 p-5">
            
            <h1 class="animate-blinks duration-700 text-[40px] ml-[5.3rem] text-left font-bold text-white">ꜱʜᴏᴘ ɴᴏᴡ</h1>
              <h2 class="text-lg animate-blinksssss font-medium  text-left ml-[5rem] px-2 rounded-md opacity-80 text-gray-400">
              Empowering Your Projects with Top-Quality Hardware, <br/>Reliable Service, and Innovative Solutions to Build, <br/>Repair, and Create with Confidence.</h2>
            
            
          </div>
          
          
            
            
              
            
            
          
          </main>
            </section>

<section class="snap-start h-full">
    <main>

    


    <section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto flex flex-col">
    <div class="lg:w-4/6 mx-auto">
      <div class="rounded-lg h-64 overflow-hidden">
        <img alt="content" class="object-cover object-center h-full w-full" src="/images/hardwareequipment.jpg">
      </div>
      <div class="flex flex-col sm:flex-row mt-10">
        <div class="sm:w-1/3 text-center sm:pr-8 sm:py-8">
          <div class="w-20 h-20 rounded-full inline-flex items-center justify-center bg-gray-200 text-gray-400">
            <img src="/images/mainlogo.jpg" class="rounded-full"/>
          </div>
          <div class="flex flex-col items-center text-center justify-center">
            <h2 class="font-medium title-font mt-4 text-gray-900 text-lg">EEEC HARDWARE</h2>
            <div class="w-12 h-1 bg-indigo-500 rounded mt-2 mb-4"></div>
            <p class="text-base">The streamlines inventory, sales, and customer management for efficient operations.</p>
          </div>
        </div>
        <div class="sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l border-gray-200 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center sm:text-left">
          <p class="leading-relaxed text-lg mb-4">EEECHardware is your trusted partner for high-quality tools, building materials, and hardware essentials at competitive prices. We are committed to providing reliable products, exclusive deals, and exceptional customer service to ensure a seamless shopping experience. Whether you're a contractor, DIY enthusiast, or business owner, we have everything you need to complete your projects with confidence and efficiency. Shop with us today and experience the best in hardware solutions!</p>
          <a class="text-indigo-500 inline-flex items-center">Learn More
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>


   
    <h1 class="flex justify-center text-4xl mb-12 -mt-10 items-center drop-shadow-xl text-black font-semibold heads">ʟᴀᴛᴇꜱᴛ ᴘʀᴏᴅᴜᴄᴛꜱ</h1>
    
    <div class="px-20 -mt-10 py-4 mx-auto">
    
    <div class="flex flex-wrap -m-4">
    @foreach($categories as $category)
    @foreach ($products->where('category_id', $category->id) as $product)
    <div class="p-4 md:w-1/4">
        <div class="h-full border-2 shadow-xl border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
          <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="{{ asset('storage/' . $product->photo) }}" alt="{{ $product->name }}">
          <div class="p-6">
            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY</h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">{{ $product->name }}</h1>
            <p class="leading-relaxed mb-3">{{ $product->description }}</p>
            <div class="flex items-center flex-wrap ">
            <div x-data="{ open: false }">
              <button @click="open = true" class="text-indigo-500 border border-yellow-500 shadow-lg py-1 px-4 rounded-sm bg-transparent inline-flex items-center md:mb-2 lg:mb-0">Buy
                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M5 12h14"></path>
                  <path d="M12 5l7 7-7 7"></path>
                </svg>
              </button>


              <section x-show="open" class="text-gray-600 px-[20rem] hv-[10rem] justify-center flex items-center fixed inset-0 z-10 body-font overflow-hidden">
                      <div class="container bg-white border border-gray-500 rounded-md shadow-lg px-5 py-4 mx-auto">
                      
                      
                        <div class="mx-auto flex flex-wrap">
                          <img alt="ecommerce" class="lg:w-1/2 w-full border-x-2 border-solid border-black lg:h-[19rem] object-cover object-center rounded" src="{{ asset('storage/' . $product->photo) }}" alt="{{ $product->name }}">
                          <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                            <button @click="open = false" class="absolute justify-end items-center -mt-8 ml-[23.5rem] flex "><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="hover:bg-gray-600 hover:text-white cursor-pointer bi bi-x-square" viewBox="0 0 16 16">
                              <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                              <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                              </svg></button>
                            <h2 class="text-sm title-font text-gray-500 tracking-widest">BRAND NAME</h2>
                            <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{ $product->name }}</h1>
                            
                            <p class="leading-relaxed">{{ $product->description }}</p>
                            <p class="leading-relaxed">Stock: {{ $product->counter }}</p>
                            <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-100 mb-5">
                              
                            <div x-data="{ quantity: 1, price: {{ $product->price }} }" class="flex flex-col space-y-2">
                              <div class="flex items-center space-x-2">
                                  <!-- Decrease Button -->
                                  <button 
                                      @click="if (quantity > 1) quantity--" 
                                      class="bg-gray-300 text-gray-700 px-3 py-1 rounded">
                                      -
                                  </button>

                                  <!-- Quantity Input (Hidden for Form Submission) -->
                                  <input type="hidden" name="quantity" x-model="quantity">

                                  <!-- Quantity Input -->
                                  <input 
                                      type="number" 
                                      x-model="quantity" 
                                      min="1" max="50"
                                      class="w-12 text-center border border-gray-300 rounded"
                                      readonly
                                  >

                                  <!-- Increase Button -->
                                  <button 
                                      @click="if (quantity < 50) quantity++" 
                                      class="bg-gray-300 text-gray-700 px-3 py-1 rounded">
                                      +
                                  </button>
                              </div>

                              <!-- Total Price Display -->
                              <span class="text-lg font-bold">Total: ₱<span x-text="(quantity * price).toFixed(2)"></span></span>
                              
                              </div>
                          


                            </div>
                            <div class="flex items-center">
                            <span class="title-font font-medium text-xl text-gray-900 mr-8">₱{{ number_format($product->price, 2) }}</span>
                            <div class="space-x-2 flex">
                            <form action="{{ route('cart.add', $product->id) }}" method="POST">
                              @csrf
                              <input type="number" name="quantity" value="1" min="1" max="{{ $product->stock }}" class="form-control">
                            <button type="submit" class="btn btn-primary flex text-black font-semibold shadow-lg bg-gray-200 hover:bg-gray-300 py-2 px-4"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="mr-1 bi bi-cart-check" viewBox="0 0 16 16">
                              <path d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0z"/>
                              <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                            </svg> Add to cart</button>
                            </form>
                            <a href="{{ route('checkout.index') }}" class="flex text-white shadow-lg font-semibold bg-red-500 hover:bg-red-600 py-2 px-4"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="mr-1 bi bi-bag-check" viewBox="0 0 16 16">
                              <path fill-rule="evenodd" d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0"/>
                              <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"/>
                            </svg> Checkout</a>
                            </div>
                              
                            </div>
                            
                          </div>
                        </div>
                      </div>
</section>


              </div>




              <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>₱{{ number_format($product->price, 2) }}
              </span>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      @endforeach
      </div>
      
      </div>
      
      







      <h1 class="flex justify-center text-4xl mb-10 mt-28 items-center drop-shadow-xl text-black font-semibold heads">ᴘʀᴏᴅᴜᴄᴛꜱ ʙʏ ᴄᴀᴛᴇɢᴏʀɪᴇꜱ</h1>
      @foreach($categories as $category)
      <h1 class="flex justify-start ml-20 text-2xl mb-10 mt-10 items-center drop-shadow-xl text-gray-400 font-semibold head">{{ $category->name }}</h1>
      
      <div class="container px-20 -mt-10 mx-auto">
    <div class="flex flex-wrap -m-4">
    
    @foreach ($products->where('category_id', $category->id) as $product)
<div class="p-4 md:w-1/4">
    <div class="h-full border-2 shadow-xl border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
      <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="{{ asset('storage/' . $product->photo) }}" alt="{{ $product->name }}">
      <div class="p-6">
        <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY</h2>
        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">{{ $product->name }}</h1>
        <p class="leading-relaxed mb-3">{{ $product->description }}</p>
        <div class="flex items-center flex-wrap ">
        <div x-data="{ open: false }">
          <button @click="open = true" class="text-indigo-500 border border-yellow-500 shadow-lg py-1 px-4 rounded-sm bg-transparent inline-flex items-center md:mb-2 lg:mb-0">Buy
            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"></path>
              <path d="M12 5l7 7-7 7"></path>
            </svg>
          </button>

          <section x-show="open" class="text-gray-600 px-[20rem] hv-[10rem] justify-center flex items-center fixed inset-0 z-10 body-font overflow-hidden">
                      <div class="container bg-white border border-gray-500 rounded-md shadow-lg px-5 py-4 mx-auto">
                      
                      
                        <div class="mx-auto flex flex-wrap">
                          <img alt="ecommerce" class="lg:w-1/2 w-full border-x-2 border-solid border-black lg:h-[19rem] object-cover object-center rounded" src="{{ asset('storage/' . $product->photo) }}" alt="{{ $product->name }}">
                          <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                            <button @click="open = false" class="absolute justify-end items-center -mt-8 ml-[23.5rem] flex "><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="hover:bg-gray-600 hover:text-white cursor-pointer bi bi-x-square" viewBox="0 0 16 16">
                              <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                              <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                              </svg></button>
                            <h2 class="text-sm title-font text-gray-500 tracking-widest">BRAND NAME</h2>
                            <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{ $product->name }}</h1>
                            
                            <p class="leading-relaxed">{{ $product->description }}</p>
                            <p class="leading-relaxed">Stock: {{ $product->counter }}</p>
                            <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-100 mb-5">
                              
                            <div x-data="{ quantity: 1, price: {{ $product->price }} }" class="flex flex-col space-y-2">
                              <div class="flex items-center space-x-2">
                                  <!-- Decrease Button -->
                                  <button 
                                      @click="if (quantity > 1) quantity--" 
                                      class="bg-gray-300 text-gray-700 px-3 py-1 rounded">
                                      -
                                  </button>

                                  <!-- Quantity Input -->
                                  <input 
                                      type="number" 
                                      x-model="quantity" 
                                      min="1" max="50"
                                      class="w-12 text-center border border-gray-300 rounded"
                                      readonly
                                  >

                                  <!-- Increase Button -->
                                  <button 
                                      @click="if (quantity < 50) quantity++" 
                                      class="bg-gray-300 text-gray-700 px-3 py-1 rounded">
                                      +
                                  </button>
                              </div>

                              <!-- Total Price Display -->
                              <span class="text-lg font-bold">Total: ₱<span x-text="(quantity * price).toFixed(2)"></span></span>
                              
                              </div>
                          


                            </div>
                            <div class="flex items-center">
                            <span class="title-font font-medium text-xl text-gray-900 mr-8">₱{{ number_format($product->price, 2) }}</span>
                            <div class="space-x-2 flex">
                            <button class="flex text-black font-semibold shadow-lg bg-gray-200 hover:bg-gray-300 py-2 px-4"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="mr-1 bi bi-cart-check" viewBox="0 0 16 16">
                              <path d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0z"/>
                              <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                            </svg> Add to cart</button>
                            <button class="flex text-white shadow-lg font-semibold bg-red-500 hover:bg-red-600 py-2 px-4"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="mr-1 bi bi-bag-check" viewBox="0 0 16 16">
                              <path fill-rule="evenodd" d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0"/>
                              <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"/>
                            </svg> Checkout</button>
                            </div>
                              
                            </div>
                            
                          </div>
                        </div>
                      </div>
</section>


          </div>



          <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>₱{{ number_format($product->price, 2) }}
              </span>
        </div>
      </div>
    </div>
  </div>
  @endforeach
  
  </div>
  </div>
  @endforeach
  

  <footer class="text-gray-600 bg-black mt-12 opacity-90 body-font">
  <div class="container px-5 py-20 -mb-6 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
    <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
      <a class="flex title-font font-medium ml-8 items-center md:justify-start justify-center text-gray-900">
      <img src="/images/eeeclogo.png" class="ml-2 rounded-full w-10 h-10 object-cover "/>
        <span class="ml-3 text-xl font-mono text-white">EEECHARDWARE</span>
      </a>
      <p class="mt-2 text-sm ml-10 text-gray-500">for efficient sales and inventory management.</p>
    </div>
    <div class="flex-grow flex flex-wrap md:pl-20 -mb-20 -mt-10 md:text-left text-center">
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <h2 class="title-font font-medium text-white tracking-widest text-sm mb-3">ABOUT US</h2>
        <nav class="list-none mb-10">
          <li>
            <a class="text-gray-400 cursor-pointer hover:text-gray-800">EEECHARDWARE offers a smart Hardware Business System to simplify inventory, sales, and transactions—boosting efficiency and growth.</a>
          </li>
          
        </nav>
      </div>
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <h2 class="title-font font-medium flex text-white tracking-widest text-sm mb-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mr-2 bi bi-geo-alt-fill" viewBox="0 0 16 16">
  <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
</svg> OUR LOCATION</h2>
        <nav class="list-none mb-10">
          <li>
            <a class="text-gray-400 cursor-pointer hover:text-gray-800"> 1209 Kamyas Street Sitio Gitna, Caybiga Caloocan City.</a>
          </li>
          
        </nav>
      </div>
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <h2 class="title-font font-medium flex text-white tracking-widest text-sm mb-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mr-2 bi bi-telephone-forward-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877zm10.761.135a.5.5 0 0 1 .708 0l2.5 2.5a.5.5 0 0 1 0 .708l-2.5 2.5a.5.5 0 0 1-.708-.708L14.293 4H9.5a.5.5 0 0 1 0-1h4.793l-1.647-1.646a.5.5 0 0 1 0-.708"/>
</svg> CONTACT NUMBER</h2>
        <nav class="list-none mb-10">
          <li>
            <a class="text-gray-400 cursor-pointer hover:text-gray-800"> 09104713535</a>
          </li>
          
        </nav>
      </div>
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <h2 class="title-font font-medium flex text-white tracking-widest text-sm mb-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mr-2 bi bi-telephone-forward-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877zm10.761.135a.5.5 0 0 1 .708 0l2.5 2.5a.5.5 0 0 1 0 .708l-2.5 2.5a.5.5 0 0 1-.708-.708L14.293 4H9.5a.5.5 0 0 1 0-1h4.793l-1.647-1.646a.5.5 0 0 1 0-.708"/>
</svg> YOUR ACCOUNT & MORE</h2>
        <nav class="list-none mb-10">
          <li>
            <a class="text-gray-400 cursor-pointer flex hover:text-gray-800"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="mr-2 bi bi-person-plus-fill" viewBox="0 0 16 16">
  <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
  <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5"/>
</svg> Create an account</a>
          </li>
          <li>
            <a class="text-gray-400 cursor-pointer flex hover:text-gray-800"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="-ml-1 mr-3 bi bi-box-arrow-in-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z"/>
  <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
</svg> Login to your account</a>
          </li>
          
        </nav>
      </div>
    </div>
  </div>
  <div class="bg-gray-100">
    <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
      <p class="text-gray-500 text-sm text-center ml-1 sm:text-left">© 2025 EEECHARDWARE —
        <a href="https://twitter.com/knyttneve" rel="noopener noreferrer" class="text-gray-600 ml-1" target="_blank">@eeechardware</a>
      </p>
      <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
        <!-- From Uiverse.io by david-mohseni --> 
<ul class="wrapper">
  <li class="icon facebook">
    <span class="tooltip">Facebook</span>
    <svg
      viewBox="0 0 320 512"
      height="1.2em"
      fill="currentColor"
      xmlns="http://www.w3.org/2000/svg"
    >
      <path
        d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"
      ></path>
    </svg>
  </li>
  <li class="icon twitter">
    <span class="tooltip">Twitter</span>
    <svg
      height="1.8em"
      fill="currentColor"
      viewBox="0 0 48 48"
      xmlns="http://www.w3.org/2000/svg"
      class="twitter"
    >
      <path
        d="M42,12.429c-1.323,0.586-2.746,0.977-4.247,1.162c1.526-0.906,2.7-2.351,3.251-4.058c-1.428,0.837-3.01,1.452-4.693,1.776C34.967,9.884,33.05,9,30.926,9c-4.08,0-7.387,3.278-7.387,7.32c0,0.572,0.067,1.129,0.193,1.67c-6.138-0.308-11.582-3.226-15.224-7.654c-0.64,1.082-1,2.349-1,3.686c0,2.541,1.301,4.778,3.285,6.096c-1.211-0.037-2.351-0.374-3.349-0.914c0,0.022,0,0.055,0,0.086c0,3.551,2.547,6.508,5.923,7.181c-0.617,0.169-1.269,0.263-1.941,0.263c-0.477,0-0.942-0.054-1.392-0.135c0.94,2.902,3.667,5.023,6.898,5.086c-2.528,1.96-5.712,3.134-9.174,3.134c-0.598,0-1.183-0.034-1.761-0.104C9.268,36.786,13.152,38,17.321,38c13.585,0,21.017-11.156,21.017-20.834c0-0.317-0.01-0.633-0.025-0.945C39.763,15.197,41.013,13.905,42,12.429"
      ></path>
    </svg>
  </li>
  <li class="icon instagram">
    <span class="tooltip">Instagram</span>
    <svg
      xmlns="http://www.w3.org/2000/svg"
      height="1.2em"
      fill="currentColor"
      class="bi bi-instagram"
      viewBox="0 0 16 16"
    >
      <path
        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"
      ></path>
    </svg>
  </li>
</ul>
      </span>
    </div>
  </div>
</footer>
      
    </main>
    </section>

   
    </div>


    <script>
    document.addEventListener("DOMContentLoaded", function () {
        // Get elements
        const quantityInput = document.getElementById("quantityInput");
        const increaseBtn = document.getElementById("increaseBtn");
        const decreaseBtn = document.getElementById("decreaseBtn");

        // Increment quantity (max 50)
        increaseBtn.addEventListener("click", () => {
            let quantity = parseInt(quantityInput.value);
            if (quantity < 50) {
                quantityInput.value = quantity + 1;
            }
        });

        // Decrement quantity (min 1)
        decreaseBtn.addEventListener("click", () => {
            let quantity = parseInt(quantityInput.value);
            if (quantity > 1) {
                quantityInput.value = quantity - 1;
            }
        });
    });
</script>

</body>
</html>
