<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind in Laravel</title>
    
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js" defer></script>

</head>
<body>
<div class="overflow-y-scroll bg-white h-screen">
    <header class="text-gray-600 body-font bg-yellow-500 ">
  <div class="container mx-auto flex flex-wrap p-2 flex-col md:flex-row items-center">
    <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
      <img src="/images/mainlogo.jpg" class="ml-2 rounded-full w-14 h-14 object-cover "/>
      <span class="ml-3 text-2xl font-semibold">ᴇᴇᴇᴄ ʜᴀʀᴅᴡᴀʀᴇ</span>
    </a>
    <nav class="md:mr-auto md:ml-4 md:py-5  md:pl-4 md:border-l md:border-black	flex flex-wrap items-center text-base justify-center">
    
    </nav>
    <div class="space-x-5 px-4 flex">

    <div>
    <a href="{{ route('login') }}" class="inline-flex items-center bg-transparent border border-black shadow-xl py-1 px-3 focus:outline-none hover:bg-gray-800 hover:text-white rounded text-base font-semibold -mt-4 md:mt-0">Login
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-right ml-2" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8m-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5"/>
</svg>
</a>
</div>

<div>
    <a href="{{ route('register') }}" class="inline-flex items-center bg-transparent border border-black shadow-xl py-1 px-3 space-x-10 focus:outline-none hover:bg-gray-800 hover:text-white rounded text-base font-semibold mt-4 md:mt-0">Register
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-in-right ml-2" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z"/>
  <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
</svg>
</a>
</div>
    </div>
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

    <div class="px-20 -mt-10 py-4 mx-auto cursor-pointer">
    <div class="flex flex-wrap -m-4">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                @foreach($categories as $category)
                    @foreach ($products->where('category_id', $category->id) as $product)
                        <div class="swiper-slide p-4 md:w-1/4">
                            <div class="h-full border-2 shadow-xl border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                                <img class="lg:h-48 md:h-36 w-full object-cover object-center"
                                     src="{{ asset('storage/' . $product->photo) }}"
                                     alt="{{ $product->name }}">
                                <div class="p-6">
                                    <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">
                                        BRAND NAME
                                    </h2>
                                    <h1 class="title-font text-lg font-medium text-gray-900 mb-3">
                                        {{ $product->name }}
                                    </h1>
                                    <p class="leading-relaxed mb-3">{{ $product->description }}</p>
                                    <div class="flex items-center flex-wrap">
                                        <div x-data="{ open: false }">
                                            <button @click="open = true"
                                                    class="text-indigo-500 border border-yellow-500 shadow-xl py-1 px-4 rounded-sm hover:bg-gray-100 bg-transparent inline-flex items-center md:mb-2 lg:mb-0">
                                                View
                                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor"
                                                     stroke-width="2" fill="none" stroke-linecap="round"
                                                     stroke-linejoin="round">
                                                    <path d="M5 12h14"></path>
                                                    <path d="M12 5l7 7-7 7"></path>
                                                </svg>
                                            </button>
                                            <!-- Modal -->
                                            <div x-show="open" class="fixed inset-0 flex justify-center items-center z-50 bg-black bg-opacity-50">
                                                <div class="bg-white p-6 rounded-lg shadow-lg w-96">
                                                    <button @click="open = false"
                                                            class="absolute top-2 right-2 text-gray-200 hover:text-black">
                                                        ✖
                                                    </button>
                                                    <img class="w-full h-48 object-cover rounded-md"
                                                         src="{{ asset('storage/' . $product->photo) }}"
                                                         alt="{{ $product->name }}">
                                                    <h2 class="text-lg font-bold text-gray-900">{{ $product->name }}</h2>
                                                    <p class="text-gray-500">{{ $product->description }}</p>
                                                    <span class="text-lg font-bold text-red-500">₱{{ number_format($product->price, 2) }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-md pr-3 py-1 border-r-2 border-gray-200">
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
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>




      <h1 class="flex justify-center text-4xl mb-10 mt-28 items-center drop-shadow-xl text-black font-semibold heads z-0">ᴘʀᴏᴅᴜᴄᴛꜱ ʙʏ ᴄᴀᴛᴇɢᴏʀɪᴇꜱ</h1>
      @foreach($categories as $category)
      <h1 class="flex justify-start ml-20 text-2xl mb-10 mt-10 items-center drop-shadow-xl text-gray-400 font-semibold head">{{ $category->name }}</h1>
      
      
      <div class="container px-20 -mt-10 mx-auto">
    <div class="flex flex-wrap -m-4">
    @foreach ($products->where('category_id', $category->id) as $product)
<div class="p-4 md:w-1/4">
    <div class="h-full border-2 shadow-xl border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
      <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="{{ asset('storage/' . $product->photo) }}" alt="{{ $product->name }}">
      <div class="p-6">
        <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">BRAND NAME</h2>
        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">{{ $product->name }}</h1>
        <p class="leading-relaxed mb-3">{{ $product->description }}</p>
        <div class="flex items-center flex-wrap ">
        <div x-data="{ open: false }">
          <button @click="open = true" class="text-indigo-500 border border-yellow-500 shadow-lg hover:bg-gray-100 py-1 px-4 rounded-sm bg-transparent inline-flex items-center md:mb-2 lg:mb-0">Buy
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="ml-2 bi bi-bag-check" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0"/>
  <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"/>
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
                            <div class="flex mb-4">
                              
                              <span class="flex pl-3 py-2 border-l-2 border-gray-200 space-x-2s">
                                <a class="text-gray-500">
                                  <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                  </svg>
                                </a>
                                <a class="text-gray-500">
                                  <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                    <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                                  </svg>
                                </a>
                                <a class="text-gray-500">
                                  <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                    <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                                  </svg>
                                </a>
                              </span>
                            </div>
                            <p class="leading-relaxed">{{ $product->description }}</p>
                            <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-100 mb-5">
                              
                              <div class="flex items-center">
                                <span class="mr-3 text-red-500">You need to login first to make an order</span>
                                <div class="relative">
                                  
                                  
                                  </span>
                                </div>
                              </div>
                            </div>
                            <div class="flex">
                              <span class="title-font font-medium text-2xl text-gray-900">₱{{ number_format($product->price, 2) }}</span>
                              
                              
                            </div>
                          </div>
                        </div>
                      </div>
</section>
                    
                    
                    
                
            
        </div>



          <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                ₱{{ number_format($product->price, 2) }}
              </span>
        </div>
      </div>
    </div>
  </div>
  @endforeach
  </div>
  </div>
  
  @endforeach


  

  <footer class="text-gray-600 mt-12 bg-black opacity-90 body-font">
  <div class="container px-5 py-20 -mb-6 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
    <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
      <a class="flex title-font font-medium ml-8 items-center md:justify-start justify-center text-gray-900">
      <img src="/images/mainlogo.jpg" class="ml-2 rounded-full w-10 h-10 object-cover "/>
        <span class="ml-3 text-xl font-mono text-white">EEECHARDWARE</span>
      </a>
      <p class="mt-2 text-sm ml-10 text-gray-500">for efficient sales and inventory management.</p>
    </div>
    <div class="flex-grow flex flex-wrap md:pl-20 -mb-20 -mt-10 md:text-left text-center">
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <h2 class="title-font font-medium text-white tracking-widest text-sm mb-3">ABOUT US</h2>
        <nav class="list-none mb-10">
          <li>
            <a class="text-gray-400  hover:text-gray-800">EEECHARDWARE offers a smart Hardware Business System to simplify inventory, sales, and transactions—boosting efficiency and growth.</a>
          </li>
          
        </nav>
      </div>
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <h2 class="title-font font-medium flex text-white tracking-widest text-sm mb-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mr-2 bi bi-geo-alt-fill" viewBox="0 0 16 16">
  <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
</svg> OUR LOCATION</h2>
        <nav class="list-none mb-10">
          <li>
            <a class="text-gray-400  hover:text-gray-800"> 1209 Kamyas Street Sitio Gitna, Caybiga Caloocan City.</a>
          </li>
          
        </nav>
      </div>
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <h2 class="title-font font-medium flex text-white tracking-widest text-sm mb-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mr-2 bi bi-telephone-forward-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877zm10.761.135a.5.5 0 0 1 .708 0l2.5 2.5a.5.5 0 0 1 0 .708l-2.5 2.5a.5.5 0 0 1-.708-.708L14.293 4H9.5a.5.5 0 0 1 0-1h4.793l-1.647-1.646a.5.5 0 0 1 0-.708"/>
</svg> CONTACT NUMBER</h2>
        <nav class="list-none mb-10">
          <li>
            <a class="text-gray-400  hover:text-gray-800"> +63 603 698 569</a>
          </li>
          
        </nav>
      </div>
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <h2 class="title-font font-medium flex text-white tracking-widest text-sm mb-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mr-2 bi bi-telephone-forward-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877zm10.761.135a.5.5 0 0 1 .708 0l2.5 2.5a.5.5 0 0 1 0 .708l-2.5 2.5a.5.5 0 0 1-.708-.708L14.293 4H9.5a.5.5 0 0 1 0-1h4.793l-1.647-1.646a.5.5 0 0 1 0-.708"/>
</svg> YOUR ACCOUNT & MORE</h2>
        <nav class="list-none mb-10">
          <li>
            <a href="/register" class="text-gray-400 cursor-pointer flex hover:text-gray-800"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="mr-2 bi bi-person-plus-fill" viewBox="0 0 16 16">
  <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
  <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5"/>
</svg> Create an account</a>
          </li>
          <li>
            <a href="/login" class="text-gray-400 cursor-pointer flex hover:text-gray-800"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="-ml-1 mr-3 bi bi-box-arrow-in-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z"/>
  <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
</svg> Login to your account</a>
          </li>
          
        </nav>
      </div>
    </div>
  </div>
  <div class="bg-gray-100">
    <div class="container mx-auto py-4 px-5 flex items-center flex-wrap flex-col sm:flex-row">
      <p class="text-gray-500 text-sm text-center ml-1 sm:text-left">© 2025 EEECHARDWARE —
        <a href="https://twitter.com/knyttneve" rel="noopener noreferrer" class="text-gray-600 ml-1" target="_blank">@eeechardware</a>
      </p>
      <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 py-1 justify-center sm:justify-start">
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
    $(document).ready(function () {
        // Registration Form Submission
        $('#registerForm').submit(function (e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: "{{ route('register') }}",
                data: $(this).serialize(),
                success: function (response) {
                    $('#registerMessage').text(response.success).css("color", "green");
                    $('#registerForm')[0].reset();
                },
                error: function (xhr) {
                    $('#registerMessage').text(xhr.responseJSON.error).css("color", "red");
                }
            });
        });

        // Login Form Submission
        $('#loginForm').submit(function (e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: "{{ route('login') }}",
                data: $(this).serialize(),
                success: function (response) {
                    $('#loginMessage').text(response.success).css("color", "green");
                    window.location.href = response.redirect;
                },
                error: function (xhr) {
                    $('#loginMessage').text(xhr.responseJSON.error).css("color", "red");
                }
            });
        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        new Swiper(".mySwiper", {
            slidesPerView: 3,   // Adjust how many products are visible
            spaceBetween: 20,   // Spacing between slides
            loop: true,         // Infinite loop scrolling
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                640: { slidesPerView: 2 },
                1024: { slidesPerView: 3 },
            },
        });
    });
</script>



</body>
</html>
