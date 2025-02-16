<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Modal with Tailwind</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">

    <!-- Order Button -->
    <button id="openModalBtn" class="px-6 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700">
        Order Now
    </button>

    <!-- Order Modal -->
    <div id="orderModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96 text-center">
            <h3 class="text-xl font-bold">Expanded Nails</h3>
            <p class="text-gray-600">Price: <strong>₱144.00</strong></p>

            <!-- Quantity Selector -->
            <div class="flex items-center justify-center mt-4">
                <button id="decreaseBtn" class="px-3 py-1 bg-gray-300 text-gray-800 rounded-l-lg hover:bg-gray-400">
                    -
                </button>
                <input type="number" id="quantityInput" value="1" min="1" max="50" readonly 
                       class="w-12 text-center border border-gray-300 py-1">
                <button id="increaseBtn" class="px-3 py-1 bg-gray-300 text-gray-800 rounded-r-lg hover:bg-gray-400">
                    +
                </button>
            </div>

            <!-- Login Alert -->
            <p class="text-red-600 font-semibold mt-3">You need to login first to make an order</p>

            <!-- Buttons -->
            <div class="mt-4 flex justify-center gap-3">
                <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">Login</button>
                <button id="closeModalBtn" class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700">
                    Close
                </button>
            </div>
        </div>
    </div>

    <script>
        // Get elements
        const modal = document.getElementById("orderModal");
        const openModalBtn = document.getElementById("openModalBtn");
        const closeModalBtn = document.getElementById("closeModalBtn");
        const quantityInput = document.getElementById("quantityInput");
        const increaseBtn = document.getElementById("increaseBtn");
        const decreaseBtn = document.getElementById("decreaseBtn");

        // Open modal
        openModalBtn.addEventListener("click", () => {
            modal.classList.remove("hidden");
        });

        // Close modal
        closeModalBtn.addEventListener("click", () => {
            modal.classList.add("hidden");
        });

        // Increment quantity (max 50)
        increaseBtn.addEventListener("click", () => {
            let quantity = parseInt(quantityInput.value);
            if (quantity < 50) {
                quantityInput.value = quantity + 1;
            }
        });

        // Decrement quantity (min 1)
        decreaseBtn.addEventListener("click", () => {
            let quantity = parseInt(quantityInput.value);
            if (quantity > 1) {
                quantityInput.value = quantity - 1;
            }
        });

        // Close modal when clicking outside of it
        window.addEventListener("click", (event) => {
            if (event.target === modal) {
                modal.classList.add("hidden");
            }
        });
    </script>

</body>
</html>

