<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    @vite('resources/css/app.css')
    
</head>
<body>
    
    

      
    

<header class="text-gray-600 body-font w-full bg-yellow-500 ">
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
        <a href="{{ route('cart') }}" ><span class="flex text-lg font-sans text-black"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="mr-2 bi bi-cart-check" viewBox="0 0 16 16">
        <path d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0z"/>
        <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
        </svg><p class="hover:text-gray-600">ᴍʏ ᴄᴀʀᴛ</p></span>
            <span className="absolute left-0 bottom-0 w-0 h-[2px] bg-gray-400 transition-all group-hover:w-full"></span>
            </a>
        </div>

        <div className="animate-blinksssssss relative group hover:text-white">
        <a href="{{ route('my.orders') }}" ><span class="flex text-lg font-sans text-black"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="mr-2 bi bi-basket" viewBox="0 0 16 16">
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



    
    <script>
      
    </script>
    

</body>
</html>