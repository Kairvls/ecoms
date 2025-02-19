<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    @vite('resources/css/app.css')
</head>
<body >

<section style="background-image: url('http://127.0.0.1:8000/images/hardwareequipment.jpg');" class="h-screen flex justify-center text-gray-600 body-font bg-cover items-center bg-center w-full bg-no-repeat bg-fixed">
    
    <div class="container px-52 py-2 mx-auto -mt-10">
    <h1 class="text-2xl text-white font-bold mb-6 -mt-22 flex"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="yellow" class="mr-2 bi bi-cart-check" viewBox="0 0 16 16">
  <path d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0z"/>
  <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
</svg> Checkout</h1>

        <!-- Display Success or Error Messages -->
         <div class="bg-white py-10 rounded-md">
        <p class="justify-center flex items-center text-4xl text-black">Cannot proceed to Checkout</p>
        <p class="justify-center flex items-center text-blue-500">Please add an item first before checking out.</p>
        </div>
<div class="justify-center flex items-center mt-32 space-x-2">
    
    <a href="/userdashboard" class="flex justify-start text-sm bg-white text-black px-5 py-2 shadow-lg rounded-md hover:bg-gray-300 hover:text-black"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="red" class="hover:bg-gray-600 hover:text-white cursor-pointer bi bi-x-square" viewBox="0 0 16 16">
      <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
      <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
    </svg> <p class="ml-2 px-2">Go back to dashboard</p></a>
    </div>
    </div>
</section>







</body>
</html>


