<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    @vite('resources/css/app.css')
</head>
<body>
    
    

      
    

<aside>
    
<div  class="w-72 h-screen bg-white p-5 shadow-xl shadow-black-200/50 rounded-br-xl">
  <h1 class="flex items-center gap-2 text-[18px] font-semibold mb-10 -mt-2 justify-center text-gray-600"><img src="/images/mainlogo.jpg" class="h-16 w-24 rounded-full"></img></h1>
  <ul class="w-full flex flex-col gap-8">

  
  <li
      class="flex-center cursor-pointer bg-yellow-500 shadow-lg rounded-2xl p-16-semibold w-full whitespace-nowrap"
    >
    
      <a
        href="{{ route('categories.index') }}" class="p-16-semibold flex size-full gap-4 p-4 group font-semibold rounded-full bg-cover hover:bg-white hover:shadow-inner focus:bg-gradient-to-r from-yellow-400 to-yellow-500 focus:text-white text-gray-900 transition-all ease-linear"
      >
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="mt-0.3 bi bi-list-task" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5zM3 3H2v1h1z"/>
  <path d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1z"/>
  <path fill-rule="evenodd" d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5zM2 7h1v1H2zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm1 .5H2v1h1z"/>
</svg>
        Manage Categories
</a>
    </li>



    <li
      class="flex-center cursor-pointer bg-yellow-500 shadow-lg rounded-xl p-16-semibold w-full whitespace-nowrap"
    >
      <a
      href="{{ route('manage.accounts') }}" class="p-16-semibold flex size-full gap-4 p-4 group font-semibold rounded-full bg-cover hover:bg-white hover:shadow-inner focus:bg-gradient-to-r from-yellow-400 to-yellow-500 focus:text-white text-gray-900 transition-all ease-linear"
      >
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
</svg>
        Manage Accounts
</a>
    </li>
    <li
      class="flex-center cursor-pointer bg-yellow-500 shadow-lg rounded-2xl p-16-semibold w-full whitespace-nowrap"
    >
      <a
      href="{{ route('manage.products') }}" class="p-16-semibold flex size-full gap-4 p-4 group font-semibold rounded-full bg-cover hover:bg-white hover:shadow-inner focus:bg-gradient-to-r from-yellow-400 to-yellow-500 focus:text-white text-gray-900 transition-all ease-linear"
      >
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-box2" viewBox="0 0 16 16">
  <path d="M2.95.4a1 1 0 0 1 .8-.4h8.5a1 1 0 0 1 .8.4l2.85 3.8a.5.5 0 0 1 .1.3V15a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4.5a.5.5 0 0 1 .1-.3zM7.5 1H3.75L1.5 4h6zm1 0v3h6l-2.25-3zM15 5H1v10h14z"/>
</svg>
        Manage Products
      </a>
    </li>
    <li
      class="flex-center cursor-pointer bg-yellow-500 shadow-lg rounded-2xl p-16-semibold w-full whitespace-nowrap"
    >
      <a
      href="{{ route('order.management') }}" class="p-16-semibold flex size-full gap-4 p-4 group font-semibold rounded-full bg-cover hover:bg-white hover:shadow-inner focus:bg-gradient-to-r from-yellow-400 to-yellow-500 focus:text-white text-gray-900 transition-all ease-linear"
      >
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-cart-check-fill" viewBox="0 0 16 16">
  <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708"/>
</svg>
        Order Management
</a>
    </li>
    <li
      class="flex-center cursor-pointer bg-white shadow-lg rounded-2xl p-16-semibold w-full whitespace-nowrap"
    >
      <a
      href="/adminlogin" class="p-16-semibold flex size-full gap-4 p-4 group font-semibold rounded-full bg-cover hover:bg-red-500 hover:shadow-inner focus:bg-gradient-to-r from-red-400 to-red-500 focus:text-white text-gray-900 transition-all ease-linear"
      >
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-bar-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8m-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5"/>
</svg>
        Logout
</a>
    </li>
  </ul>
</div>

    </aside>


    
    <script>
      
    </script>
    

</body>
</html>