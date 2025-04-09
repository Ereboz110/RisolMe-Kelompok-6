<?php
    session_start();
    ob_start();
    require_once '../config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RISOL ME!! - Shopping Cart</title>
    <link href="./output.css" rel="stylesheet">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background: linear-gradient(180deg, #FFF 0%, #FEFCF7 100%);
            min-height: 100vh;
        }
    </style>
</head>
<body class="min-h-screen">
    <!-- Header -->
    <header class="border-b border-gray-200">
        <div class="container mx-auto px-4 py-4">
            <a href="landing.php"><h1 class="text-xl font-bold text-orange-500">RISOL ME!!</h1></a>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8 max-w-4xl">
        <!-- Cart Header -->
        <div class="text-center mb-1">
            <h2 class="text-2xl font-semibold">Your Shopping Cart</h2>
            <p class="text-sm text-gray-500">Review and manage your order items</p>
        </div>

        <!-- Product List Section -->
        <div class="mt-10 grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
                <h3 class="text-lg font-semibold mb-6">Product List</h3>
                <!-- Product items would go here -->
            </div>
            
            <div class="bg-gray-50 rounded-lg p-4">
                <div class="mb-4">
                    <img src="../image/risol ayam.jpg" alt="Risol" class="w-full rounded-lg">
                </div>
                <div class="mb-2">
                    <h4 class="text-gray-500 text-sm">Risoles</h4>
                    <p class="font-medium">Price: 10000</p>
                </div>
            </div>
        </div>

        <!-- Shipping Information -->
        <div class="mt-10 grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
                <h3 class="text-lg font-semibold">Shipping Information</h3>
            </div>
            
            <div class="bg-gray-50 rounded-lg p-4">
                <div class="flex items-start mb-2">
                    <span class="mt-1 mr-2 text-gray-500">
                        <i class="fas fa-map-marker-alt"></i>
                    </span>
                    <input type="text" placeholder="Enter your shipping address" class="w-full p-2 border border-gray-300 rounded">
                </div>
            </div>
        </div>

        <!-- Subtotal Section -->
        <div class="mt-10 grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
                <h3 class="text-lg font-semibold">Subtotal</h3>
            </div>
            
            <div>
                <div class="flex justify-between items-center mb-2">
                    <div class="flex items-center">
                        <span class="text-gray-500 mr-2">
                            <i class="fas fa-coins"></i>
                        </span>
                        <span>Subtotal</span>
                    </div>
                    <span class="font-medium">10.000</span>
                </div>
                
                <div class="flex justify-between items-center">
                    <div class="flex items-center">
                        <span class="text-gray-500 mr-2">
                            <i class="fas fa-truck"></i>
                        </span>
                        <span>Shipping</span>
                    </div>
                    <span class="text-sm text-gray-500">Calculated at checkout</span>
                </div>
            </div>
        </div>

        <!-- Summary Section -->
        <div class="mt-10 grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
                <h3 class="text-lg font-semibold">Summary</h3>
            </div>
            
            <div>
                <div class="flex justify-between items-center pb-4 border-b border-gray-200">
                    <div class="flex items-center">
                        <span class="text-gray-500 mr-2">
                            <i class="fas fa-receipt"></i>
                        </span>
                        <span>Total Price</span>
                    </div>
                    <span class="font-medium">10.000</span>
                </div>
            </div>
        </div>

        <!-- Promotional Code -->
        <div class="mt-10 grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
                <h3 class="text-lg font-semibold">Promotional Code</h3>
            </div>
            
            <div>
                <div class="flex space-x-2">
                    <input type="text" placeholder="Enter code" class="flex-1 p-2 border border-gray-300 rounded">
                    <button class="bg-black text-white px-4 py-2 rounded">Apply Code</button>
                </div>
            </div>
        </div>

        <!-- Actions -->
        <div class="mt-10 grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
                <h3 class="text-lg font-semibold">Actions</h3>
            </div>
            
            <div class="space-y-3">
                <button class="w-full bg-white border border-gray-300 text-blue-500 flex items-center justify-center px-4 py-2 rounded">
                    <span class="mr-2">
                        <i class="fas fa-shopping-cart"></i>
                    </span>
                    Continue Shopping
                </button>
                
                <button class="w-full bg-white border border-gray-300 text-gray-700 flex items-center justify-center px-4 py-2 rounded">
                    <span class="mr-2">
                        <i class="fas fa-credit-card"></i>
                    </span>
                    Proceed to Checkout
                </button>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="mt-16 border-t border-gray-200 py-6">
        <div class="container mx-auto px-4">
            <div class="text-center text-orange-500 font-bold mb-4">
                RISOL ME!!
            </div>
            <div class="flex justify-center space-x-4">
                <a href="#" class="text-gray-400 hover:text-gray-600">
                    <i class="fab fa-facebook"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-600">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-600">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-600">
                    <i class="fab fa-linkedin"></i>
                </a>
            </div>
        </div>
    </footer>
</body>
</html>