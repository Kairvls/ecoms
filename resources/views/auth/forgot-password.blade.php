<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    @vite('resources/css/login.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>
<body>


    

<div style="background-image: url('http://127.0.0.1:8000/images/hardwareequipment.jpg');" class="flex justify-center items-center bg-cover bg-center w-full bg-no-repeat bg-fixed h-screen">
<form action="{{ route('password.email') }}" method="POST" class="form">
    @csrf
    <a href="/login" class="flex justify-end"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="hover:bg-gray-600 hover:text-white cursor-pointer bi bi-x-square" viewBox="0 0 16 16">
    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
    </svg></a>

    <h1 class="flex justify-center mb-4 text-sm">Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</h1>
    
    <div class="flex-column">
      <label for="email">Email </label></div>
      <div class="inputForm">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 32 32" height="20"><g data-name="Layer 3" id="Layer_3"><path d="m30.853 13.87a15 15 0 0 0 -29.729 4.082 15.1 15.1 0 0 0 12.876 12.918 15.6 15.6 0 0 0 2.016.13 14.85 14.85 0 0 0 7.715-2.145 1 1 0 1 0 -1.031-1.711 13.007 13.007 0 1 1 5.458-6.529 2.149 2.149 0 0 1 -4.158-.759v-10.856a1 1 0 0 0 -2 0v1.726a8 8 0 1 0 .2 10.325 4.135 4.135 0 0 0 7.83.274 15.2 15.2 0 0 0 .823-7.455zm-14.853 8.13a6 6 0 1 1 6-6 6.006 6.006 0 0 1 -6 6z"></path></g></svg>
        <input placeholder="Enter your Email" class="input" name="email" type="email" required>
      </div>
      @if (session('status'))
    <p class="text-green-500">{{ session('status') }}</p>
@endif
      @if (session('success'))
        <p class="text-green-500">{{ session('success') }}</p>
    @endif
      @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p style="color: red;">{{ $error }}</p>
        @endforeach
    @endif
    
    
    
    
    <button type="submit" class="flex justify-center items-center border border-black w-full py-2 rounded-md shadow-lg text-black bg-yellow-500">ᴇᴍᴀɪʟ ᴘᴀꜱꜱᴡᴏʀᴅ ꜱᴇɴᴅ ʀᴇꜱᴇᴛ ʟɪɴᴋ</button>
    

    
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

</body>
</html>