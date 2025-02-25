<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Products</title>
    
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
</head>
<body>
    <div class="flex flex-col ">
        
        <!-- Header with Sidebar as Navbar -->
       
            
             
                
                <!-- Sidebar becomes a horizontal menu -->
                <nav class="flex  w-full text-white">
                    @include('header') {{-- Sidebar now part of the header --}}
                </nav>
            
        

        

        <div class="content ">
            @yield('content') {{-- Load the selected page content --}}
        </div>

    </div>
</body>
</html>
