<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>
<body>
<div x-data="{ open: false }" class="flex items-center justify-center min-h-screen bg-gray-100">
    <!-- Button to Open Modal -->
    <button @click="open = true" class="px-4 py-2 bg-blue-500 text-white rounded">Login</button>

    <!-- Modal -->
    <div x-show="open" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96 relative">
            <h2 class="text-lg font-bold mb-4">Login</h2>

            <!-- Close Button -->
            <button @click="open = false" class="absolute top-2 right-2 text-gray-600 hover:text-gray-900">&times;</button>

            <!-- Login Form -->
            <form action="/login" method="POST">

                @csrf
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" class="w-full p-2 border rounded">
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

</body>
</html>