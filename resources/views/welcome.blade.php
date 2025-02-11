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
      <img src="/images/mainlogo.jpg" class="ml-2 rounded-full w-16 h-16 object-cover "/>
      <span class="ml-3 text-xl">EEEC HARDWARE</span>
    </a>
    <nav class="md:mr-auto md:ml-4 md:py-1  md:pl-4 md:border-l md:border-black	flex flex-wrap items-center text-base justify-center">
    <a class="mr-5 hover:text-gray-900">First Link</a>
      <a class="mr-5 hover:text-gray-900">Second Link</a>
      <a class="mr-5 hover:text-gray-900">Third Link</a>
      <a class="mr-5 hover:text-gray-900">Fourth Link</a>
    </nav>
    <div class="space-x-5 px-4 flex">
    <div x-data="{ open: false }">
    <button @click="open = true" class="inline-flex items-center bg-transparent border border-black shadow-xl py-1 px-3 focus:outline-none hover:bg-gray-800 hover:text-white rounded text-base -mt-4 md:mt-0">Login
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-right ml-2" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8m-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5"/>
</svg>
    </button>


    <div x-show="open" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96 relative">
            <h2 class="text-lg font-bold mb-4">Login</h2>

            <!-- Close Button -->
            <button @click="open = false" class="absolute top-2 right-2 text-gray-600 hover:text-gray-900">&times;</button>

            <!-- Login Form -->
            <form action="/welcome" method="POST">

                @csrf
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Username</label>
                    <input type="text" name="username" class="w-full p-2 border rounded">
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password" class="w-full p-2 border rounded">
                </div>
                <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded">Login</button>
            </form>
        </div>
    </div>
</div>

<div x-data="{ open: false }">
    <button @click="open = true" class="inline-flex items-center bg-transparent border border-black shadow-xl py-1 px-3 space-x-10 focus:outline-none hover:bg-gray-800 hover:text-white rounded text-base mt-4 md:mt-0">Register
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-in-right ml-2" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z"/>
  <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
</svg>
    </button>


    <div x-show="open" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96 relative">
            <h2 class="text-lg font-bold mb-4">Login</h2>

            <!-- Close Button -->
            <button @click="open = false" class="absolute top-2 right-2 text-gray-600 hover:text-gray-900">&times;</button>

            <!-- Login Form -->
            <form action="/welcome" method="POST">

                @csrf
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Username</label>
                    <input type="text" name="username" class="w-full p-2 border rounded">
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password" class="w-full p-2 border rounded">
                </div>
                <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded">Login</button>
            </form>
        </div>
    </div>
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

<section class="snap-start h-[480vh] p-10">
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


      
    <h1 class="flex justify-center text-4xl mb-10 -mt-10 items-center drop-shadow-xl text-gray-400 font-medium heads">Latest Products</h1>

    <div class="container px-20 -mt-10 py-4 mx-auto">
    <div class="flex flex-wrap -m-4">
    <div class="p-4 md:w-1/4">
        <div class="h-full border-2 shadow-xl border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
          <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="/images/hardwarebg.jpg" alt="blog">
          <div class="p-6">
            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY</h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The Catalyzer</h1>
            <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
            <div class="flex items-center flex-wrap ">
              <button class="text-indigo-500 border border-yellow-500 shadow-lg py-1 px-4 rounded-sm bg-transparent inline-flex items-center md:mb-2 lg:mb-0">Buy
                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M5 12h14"></path>
                  <path d="M12 5l7 7-7 7"></path>
                </svg>
              </button>
              <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>P400.00
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="p-4 md:w-1/4">
        <div class="h-full border-2 shadow-xl border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
          <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="/images/hardwarebg.jpg" alt="blog">
          <div class="p-6">
            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY</h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The Catalyzer</h1>
            <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
            <div class="flex items-center flex-wrap ">
              <button class="text-indigo-500 border border-yellow-500 shadow-lg py-1 px-4 rounded-sm bg-transparent inline-flex items-center md:mb-2 lg:mb-0">Buy
                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M5 12h14"></path>
                  <path d="M12 5l7 7-7 7"></path>
                </svg>
              </button>
              <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>P400.00
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="p-4 md:w-1/4">
        <div class="h-full border-2 shadow-xl border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
          <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="/images/hardwarebg.jpg" alt="blog">
          <div class="p-6">
            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY</h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The Catalyzer</h1>
            <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
            <div class="flex items-center flex-wrap ">
              <button class="text-indigo-500 border border-yellow-500 shadow-lg py-1 px-4 rounded-sm bg-transparent inline-flex items-center md:mb-2 lg:mb-0">Buy
                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M5 12h14"></path>
                  <path d="M12 5l7 7-7 7"></path>
                </svg>
              </button>
              <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>P400.00
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="p-4 md:w-1/4">
        <div class="h-full border-2 shadow-xl border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
          <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="/images/hardwarebg.jpg" alt="blog">
          <div class="p-6">
            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY</h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The Catalyzer</h1>
            <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
            <div class="flex items-center flex-wrap ">
              <button class="text-indigo-500 border border-yellow-500 shadow-lg py-1 px-4 rounded-sm bg-transparent inline-flex items-center md:mb-2 lg:mb-0">Buy
                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M5 12h14"></path>
                  <path d="M12 5l7 7-7 7"></path>
                </svg>
              </button>
              <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>P400.00
              </span>
            </div>
          </div>
        </div>
      </div>
      </div>
      </div>







      <h1 class="flex justify-center text-4xl mb-10 mt-28 items-center drop-shadow-xl text-gray-400 font-medium heads">Products by Categories</h1>

      <h1 class="flex justify-start ml-20 text-2xl mb-10 mt-10 items-center drop-shadow-xl text-gray-400 font-medium head">Nails</h1>

      <div class="container px-20 -mt-10 mx-auto">
    <div class="flex flex-wrap -m-4">
<div class="p-4 md:w-1/4">
    <div class="h-full border-2 shadow-xl border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
      <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="/images/hardwarebg.jpg" alt="blog">
      <div class="p-6">
        <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY</h2>
        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The Catalyzer</h1>
        <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
        <div class="flex items-center flex-wrap ">
          <button class="text-indigo-500 border border-yellow-500 shadow-lg py-1 px-4 rounded-sm bg-transparent inline-flex items-center md:mb-2 lg:mb-0">Buy
            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"></path>
              <path d="M12 5l7 7-7 7"></path>
            </svg>
          </button>
          <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>P400.00
              </span>
        </div>
      </div>
    </div>
  </div>
  <div class="p-4 md:w-1/4">
    <div class="h-full border-2 shadow-xl border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
      <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="/images/hardwarebg.jpg" alt="blog">
      <div class="p-6">
        <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY</h2>
        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The Catalyzer</h1>
        <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
        <div class="flex items-center flex-wrap ">
          <button class="text-indigo-500 border border-yellow-500 py-1 px-4 rounded-sm bg-transparent inline-flex items-center md:mb-2 lg:mb-0">Buy
            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"></path>
              <path d="M12 5l7 7-7 7"></path>
            </svg>
          </button>
          <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>P400.00
              </span>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>



  <h1 class="flex justify-start ml-20 text-2xl mb-10 mt-20 items-center drop-shadow-xl text-gray-400 font-medium head">Plumbing</h1>

      <div class="container px-20 -mt-10 mx-auto">
    <div class="flex flex-wrap -m-4">
<div class="p-4 md:w-1/4">
    <div class="h-full border-2 shadow-xl border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
      <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="/images/hardwarebg.jpg" alt="blog">
      <div class="p-6">
        <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY</h2>
        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The Catalyzer</h1>
        <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
        <div class="flex items-center flex-wrap ">
          <button class="text-indigo-500 border border-yellow-500 shadow-lg py-1 px-4 rounded-sm bg-transparent inline-flex items-center md:mb-2 lg:mb-0">Buy
            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"></path>
              <path d="M12 5l7 7-7 7"></path>
            </svg>
          </button>
          <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>P400.00
              </span>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>





  <h1 class="flex justify-start ml-20 text-2xl mb-10 mt-20 items-center drop-shadow-xl text-gray-400 font-medium head">Building Materials</h1>

      <div class="container px-20 -mt-10 mx-auto">
    <div class="flex flex-wrap -m-4">
<div class="p-4 md:w-1/4">
    <div class="h-full border-2 shadow-xl border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
      <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="/images/hardwarebg.jpg" alt="blog">
      <div class="p-6">
        <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY</h2>
        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The Catalyzer</h1>
        <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
        <div class="flex items-center flex-wrap ">
          <button class="text-indigo-500 border border-yellow-500 shadow-lg py-1 px-4 rounded-sm bg-transparent inline-flex items-center md:mb-2 lg:mb-0">Buy
            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"></path>
              <path d="M12 5l7 7-7 7"></path>
            </svg>
          </button>
          <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>P400.00
              </span>
        </div>
      </div>
    </div>
  </div>
  <div class="p-4 md:w-1/4">
    <div class="h-full border-2 shadow-xl border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
      <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="/images/hardwarebg.jpg" alt="blog">
      <div class="p-6">
        <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY</h2>
        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The Catalyzer</h1>
        <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
        <div class="flex items-center flex-wrap ">
          <button class="text-indigo-500 border border-yellow-500 py-1 px-4 rounded-sm bg-transparent inline-flex items-center md:mb-2 lg:mb-0">Buy
            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"></path>
              <path d="M12 5l7 7-7 7"></path>
            </svg>
          </button>
          <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>P400.00
              </span>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>




  <h1 class="flex justify-start ml-20 text-2xl mb-10 mt-20 items-center drop-shadow-xl text-gray-400 font-medium head">Hand Tools</h1>

      <div class="container px-20 -mt-10 mx-auto">
    <div class="flex flex-wrap -m-4">
<div class="p-4 md:w-1/4">
    <div class="h-full border-2 shadow-xl border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
      <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="/images/hardwarebg.jpg" alt="blog">
      <div class="p-6">
        <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY</h2>
        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The Catalyzer</h1>
        <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
        <div class="flex items-center flex-wrap ">
          <button class="text-indigo-500 border border-yellow-500 shadow-lg py-1 px-4 rounded-sm bg-transparent inline-flex items-center md:mb-2 lg:mb-0">Buy
            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"></path>
              <path d="M12 5l7 7-7 7"></path>
            </svg>
          </button>
          <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>P400.00
              </span>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>


      
    </main>
    </section>

    <footer class="text-gray-600 bg-black opacity-90 body-font">
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
      <p class="text-gray-500 text-sm text-center sm:text-left">© 2025 EEECHARDWARE —
        <a href="https://twitter.com/knyttneve" rel="noopener noreferrer" class="text-gray-600 ml-1" target="_blank">@eeechardware</a>
      </p>
      <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
        <a class="text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
            <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
            <circle cx="4" cy="4" r="2" stroke="none"></circle>
          </svg>
        </a>
      </span>
    </div>
  </div>
</footer>
    </div>

</body>
</html>
