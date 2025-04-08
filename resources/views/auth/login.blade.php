<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    @vite('resources/css/login.css')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body>
@if (session('success'))
    <script>
        alert("{{ session('success') }}");
    </script>
@endif

<div style="background-image: url('http://127.0.0.1:8000/images/hardwareequipment.jpg');" class="flex justify-center items-center bg-cover bg-center w-full bg-no-repeat bg-fixed h-screen">
<form id="loginForm" action="{{ route('login') }}" method="POST" class="form">
    @csrf
    <a href="/" class="flex justify-end"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="hover:bg-gray-600 text-black hover:text-white cursor-pointer bi bi-x-square" viewBox="0 0 16 16">
    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
    </svg></a>

    <h1 class="flex justify-center font-semibold text-black -mt-4 mb-4 text-3xl">ʟᴏɢɪɴ</h1>
    
    <div class="flex-column">
      <label>Username </label></div>
      <div class="inputForm">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 32 32" height="20"><g data-name="Layer 3" id="Layer_3"><path d="m30.853 13.87a15 15 0 0 0 -29.729 4.082 15.1 15.1 0 0 0 12.876 12.918 15.6 15.6 0 0 0 2.016.13 14.85 14.85 0 0 0 7.715-2.145 1 1 0 1 0 -1.031-1.711 13.007 13.007 0 1 1 5.458-6.529 2.149 2.149 0 0 1 -4.158-.759v-10.856a1 1 0 0 0 -2 0v1.726a8 8 0 1 0 .2 10.325 4.135 4.135 0 0 0 7.83.274 15.2 15.2 0 0 0 .823-7.455zm-14.853 8.13a6 6 0 1 1 6-6 6.006 6.006 0 0 1 -6 6z"></path></g></svg>
        <input placeholder="Enter your Username" class="text-black input" name="username" type="text">
      </div>
      
    
    <div class="flex-column">
      <label>Password </label></div>
      <div class="inputForm relative">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="-64 0 512 512" height="20"><path d="m336 512h-288c-26.453125 0-48-21.523438-48-48v-224c0-26.476562 21.546875-48 48-48h288c26.453125 0 48 21.523438 48 48v224c0 26.476562-21.546875 48-48 48zm-288-288c-8.8125 0-16 7.167969-16 16v224c0 8.832031 7.1875 16 16 16h288c8.8125 0 16-7.167969 16-16v-224c0-8.832031-7.1875-16-16-16zm0 0"></path><path d="m304 224c-8.832031 0-16-7.167969-16-16v-80c0-52.929688-43.070312-96-96-96s-96 43.070312-96 96v80c0 8.832031-7.167969 16-16 16s-16-7.167969-16-16v-80c0-70.59375 57.40625-128 128-128s128 57.40625 128 128v80c0 8.832031-7.167969 16-16 16zm0 0"></path></svg>        
        <input placeholder="Enter your Password" class="text-black input" id="password" name="password" type="password">
        <button type="button" onclick="togglePassword()" class="absolute text-black inset-y-0 right-2 mb-3 flex items-center">
        <svg id="eyeOpen" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.543 7-1.275 4.057-5.065 7-9.543 7-4.477 0-8.268-2.943-9.543-7z"/>
        </svg>

        <svg id="eyeClosed" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A9.956 9.956 0 0112 19c-4.477 0-8.268-2.943-9.543-7 1.275-4.057 5.065-7 9.543-7a9.956 9.956 0 011.875.175M3 3l18 18"/>
        </svg>
    </button>
      </div>
      @error('login')
        <div class="text-red-500">{{ $message }}</div>
    @enderror
    
    <div class="flex-row">
      <div>
      <input type="radio" name="remember" class="cursor-pointer">
      <label>Remember me </label>
      </div>
      <span class="span"><a href="{{ route('password.request') }}">Forgot password?</a></span>
      
    </div>
    <button type="submit" onclick="showAlert()" class="flex justify-center items-center border border-black w-full py-2 rounded-md shadow-lg text-black bg-yellow-500">ʟᴏɢɪɴ</button>
    <p class="p">Don't have an account? <a href="{{ route('register') }}"><span class="span">Register</span></a>

    
</form>
</div>


<script>
  function showAlert() {
    if('success') {
      alert('Redirecting to dashbaord...');
    }
    else {
      return null;
    }
  }
</script>

<script>
    window.onload = function() {
        if (session('success')){
            alert("{{ session('success') }}");
        }
        

        else if ($errors=>has('login')){
            alert("{{ $errors->first('login') }}");
        }
        
    }
</script>


<script>
function togglePassword() {
    let passwordInput = document.getElementById("password");
    let eyeOpen = document.getElementById("eyeOpen");
    let eyeClosed = document.getElementById("eyeClosed");

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        eyeOpen.classList.add("hidden");
        eyeClosed.classList.remove("hidden");
    } else {
        passwordInput.type = "password";
        eyeOpen.classList.remove("hidden");
        eyeClosed.classList.add("hidden");
    }
}
</script>

<script>
$(document).ready(function() {
    $("#loginForm").submit(function(event) {
        event.preventDefault(); // Prevent page reload

        $.ajax({
            url: "{{ route('login') }}", // Laravel login route
            method: "POST",
            data: $(this).serialize(),
            success: function(response) {
                Swal.fire({
                    icon: "success",
                    title: "Login Successful",
                    text: "Redirecting to dashboard...",
                    showConfirmButton: false,
                    timer: 1500 // 1.5 seconds before redirect
                }).then(() => {
                    window.location.href = "{{ route('userdashboard') }}"; // Redirect after alert
                });
            },
            error: function(response) {
                Swal.fire({
                    icon: "error",
                    title: "Login Failed",
                    text: "Invalid credentials, please try again.",
                    confirmButtonColor: "#d33",
                    confirmButtonText: "Try Again"
                });
            }
        });
    });
});
</script>
</body>
</html>