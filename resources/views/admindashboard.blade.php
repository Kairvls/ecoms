<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Laravel App</title>
    
    @vite('resources/css/app.css')
</head>
<body>
    <div class="dashboard flex overflow-y-scroll">
        <div class="sidebar">
    @include('sidebar') {{-- Include the sidebar --}}
    </div>
    
    <div class="w-full block main-content">
    <header style="background-image: url('http://127.0.0.1:8000/images/hardwareequipment.jpg');" class="text-gray-600 body-font bg-cover bg-center bg-no-repeat bg-fixed">
  <div class="container mx-auto flex flex-wrap p-3 flex-col md:flex-row items-center bg-black bg-opacity-80">
      <span class="text-lg text-white heading">EEEC Hardware Management System</span>
  </div>
</header>
    <p class="ml-10 mt-4 absolute">Manage by Admin...</p>
    <div class="content ">
        @yield('content') {{-- This will load the selected page content --}}
    </div>

    </div>
    </div>
</body>
</html>
