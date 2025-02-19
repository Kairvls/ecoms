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
         <div class="bg-black py-10 shadow-lg bg-opacity-50 rounded-md">
        <p class="justify-center flex items-center text-4xl text-white font-semibold">Cannot proceed to checkout</p>
        <p class="justify-center flex items-center text-blue-500">Please add an item first before checking out.</p>

        <div class="justify-center flex items-center mt-10 space-x-2">
    <a href="/userdashboard" class="flex justify-start text-sm bg-red-500 text-white px-5 py-2 shadow-lg rounded-md items-center hover:bg-red-600 hover:text-white"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-backspace-fill" viewBox="0 0 16 16">
  <path d="M15.683 3a2 2 0 0 0-2-2h-7.08a2 2 0 0 0-1.519.698L.241 7.35a1 1 0 0 0 0 1.302l4.843 5.65A2 2 0 0 0 6.603 15h7.08a2 2 0 0 0 2-2zM5.829 5.854a.5.5 0 1 1 .707-.708l2.147 2.147 2.146-2.147a.5.5 0 1 1 .707.708L9.39 8l2.146 2.146a.5.5 0 0 1-.707.708L8.683 8.707l-2.147 2.147a.5.5 0 0 1-.707-.708L7.976 8z"/>
</svg> <p class="ml-2 px-2">Please go back to dashboard</p></a>
    </div>
        </div>

    </div>
</section>







</body>
</html>


