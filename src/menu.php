<?php
    session_start();
    ob_start();
    require_once '../config.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RISOL ME!!</title>
    <link href="./output.css" rel="stylesheet">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-amber-50">
    <!-- Navigation Bar -->
    <nav class="bg-white py-4 px-6 flex justify-between items-center shadow-sm border-b border-gray-200">
        <a href="landing.php"><div class="text-xl font-bold text-orange-500">RISOL ME!!</div></a>
        <div class="flex items-center space-x-4">
            <a href="aboutus.php" class="text-gray-700 hover:text-orange-500">Tentang Kami</a>
            <a href="login.php"><button class="bg-gray-800 text-white px-4 py-2 rounded">LOGIN</button></a>
            <a href="cart.php"><button class="text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
            </button></a>
        </div>
    </nav>

    <!-- Menu Header -->
    <div class="bg-menu-green py-4 text-center text-white font-semibold text-xl">
        OUR MENU
    </div>

    <!-- Menu Items Grid -->
    <div class="container mx-auto py-8 px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Risol Sayur -->
            <div class="border border-gray-300 rounded-lg p-4 bg-card-bg">
                <div class="flex justify-center mb-4">
                    <img src="../image/risol sayur.jpg" alt="Risol Sayur" class="w-24 h-24 rounded-full object-cover">
                </div>
                <h3 class="font-bold text-center">Risol Sayur</h3>
                <p class="text-gray-600 text-center text-sm mb-2">Lorem ipsum</p>
                <p class="text-price-red text-center font-semibold mb-4">Rp 5.000</p>
                <div class="flex justify-center items-center">
                    <button class="px-2 py-1 bg-white rounded-l border border-gray-300" onclick="decreaseCount(this)">-</button>
                    <span class="px-4 py-1 bg-white border-t border-b border-gray-300">0</span>
                    <button class="px-2 py-1 bg-white rounded-r border border-gray-300" onclick="increaseCount(this)">+</button>
                </div>
            </div>

            <!-- Risol Ayam -->
            <div class="border border-gray-300 rounded-lg p-4 bg-card-bg">
                <div class="flex justify-center mb-4">
                    <img src="../image/risol ayam.jpg" alt="Risol Sayur" class="w-24 h-24 rounded-full object-cover">
                </div>
                <h3 class="font-bold text-center">Risol Ayam</h3>
                <p class="text-gray-600 text-center text-sm mb-2">Lorem ipsum</p>
                <p class="text-price-red text-center font-semibold mb-4">Rp 5.000</p>
                <div class="flex justify-center items-center">
                    <button class="px-2 py-1 bg-white rounded-l border border-gray-300" onclick="decreaseCount(this)">-</button>
                    <span class="px-4 py-1 bg-white border-t border-b border-gray-300">0</span>
                    <button class="px-2 py-1 bg-white rounded-r border border-gray-300" onclick="increaseCount(this)">+</button>
                </div>
            </div>

            <!-- Risol Mayo -->
            <div class="border border-gray-300 rounded-lg p-4 bg-card-bg">
                <div class="flex justify-center mb-4">
                    <img src="../image/risol mayo.jpg" alt="Risol Sayur" class="w-24 h-24 rounded-full object-cover">
                </div>
                <h3 class="font-bold text-center">Risol Mayo</h3>
                <p class="text-gray-600 text-center text-sm mb-2">Lorem ipsum</p>
                <p class="text-price-red text-center font-semibold mb-4">Rp 5.000</p>
                <div class="flex justify-center items-center">
                    <button class="px-2 py-1 bg-white rounded-l border border-gray-300" onclick="decreaseCount(this)">-</button>
                    <span class="px-4 py-1 bg-white border-t border-b border-gray-300">0</span>
                    <button class="px-2 py-1 bg-white rounded-r border border-gray-300" onclick="increaseCount(this)">+</button>
                </div>
            </div>

            <!-- Risol Cokelat -->
            <div class="border border-gray-300 rounded-lg p-4 bg-card-bg">
                <div class="flex justify-center mb-4">
                    <img src="../image/risol coklat.jpg" alt="Risol Sayur" class="w-24 h-24 rounded-full object-cover">
                </div>
                <h3 class="font-bold text-center">Risol Cokelat</h3>
                <p class="text-gray-600 text-center text-sm mb-2">Lorem ipsum</p>
                <p class="text-price-red text-center font-semibold mb-4">Rp 5.000</p>
                <div class="flex justify-center items-center">
                    <button class="px-2 py-1 bg-white rounded-l border border-gray-300" onclick="decreaseCount(this)">-</button>
                    <span class="px-4 py-1 bg-white border-t border-b border-gray-300">0</span>
                    <button class="px-2 py-1 bg-white rounded-r border border-gray-300" onclick="increaseCount(this)">+</button>
                </div>
            </div>

            <!-- Risol Pizza -->
            <div class="border border-gray-300 rounded-lg p-4 bg-card-bg">
                <div class="flex justify-center mb-4">
                    <img src="../image/image 7.png" alt="Risol Sayur" class="w-24 h-24 rounded-full object-cover">
                </div>
                <h3 class="font-bold text-center">Risol Pizza</h3>
                <p class="text-gray-600 text-center text-sm mb-2">Lorem ipsum</p>
                <p class="text-price-red text-center font-semibold mb-4">Rp 5.000</p>
                <div class="flex justify-center items-center">
                    <button class="px-2 py-1 bg-white rounded-l border border-gray-300" onclick="decreaseCount(this)">-</button>
                    <span class="px-4 py-1 bg-white border-t border-b border-gray-300">0</span>
                    <button class="px-2 py-1 bg-white rounded-r border border-gray-300" onclick="increaseCount(this)">+</button>
                </div>
            </div>

            <!-- Risol Bihun -->
            <div class="border border-gray-300 rounded-lg p-4 bg-card-bg">
                <div class="flex justify-center mb-4">
                    <img src="../image/risol bihun.jpg" alt="Risol Sayur" class="w-24 h-24 rounded-full object-cover">
                </div>
                <h3 class="font-bold text-center">Risol Bihun</h3>
                <p class="text-gray-600 text-center text-sm mb-2">Lorem ipsum</p>
                <p class="text-price-red text-center font-semibold mb-4">Rp 5.000</p>
                <div class="flex justify-center items-center">
                    <button class="px-2 py-1 bg-white rounded-l border border-gray-300" onclick="decreaseCount(this)">-</button>
                    <span class="px-4 py-1 bg-white border-t border-b border-gray-300">0</span>
                    <button class="px-2 py-1 bg-white rounded-r border border-gray-300" onclick="increaseCount(this)">+</button>
                </div>
            </div>
        </div>

        <!-- Go To Cart Button -->
        <div class="flex justify-center mt-8">
            <a href="cart.php"><button class="bg-menu-green text-white px-8 py-3 rounded hover:bg-green-600 transition-colors">
                GO To Cart
            </button></a>
        </div>
    </div>
</body>
<script>
    function increaseCount(button) {
        const countSpan = button.previousElementSibling;
        let count = parseInt(countSpan.textContent);
        countSpan.textContent = count + 1;
    }

    function decreaseCount(button) {
        const countSpan = button.nextElementSibling;
        let count = parseInt(countSpan.textContent);
        if (count > 0) {
            countSpan.textContent = count - 1;
        }
    }
</script>
<!-- Footer -->
<footer class="bg-white py-8 px-6 border-t border-blue-300">
    <div class="container mx-auto flex flex-col md:flex-row justify-between items-center">
        <div class="text-xl font-bold text-orange-500 mb-4 md:mb-0">
            RISOL ME!!
        </div>
        <div class="flex space-x-4">
            <a href="#" class="text-gray-500 hover:text-blue-500" aria-label="Facebook">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="text-gray-500 hover:text-blue-500" aria-label="LinkedIn">
                <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="#" class="text-gray-500 hover:text-blue-500" aria-label="YouTube">
                <i class="fab fa-youtube"></i>
            </a>
            <a href="#" class="text-gray-500 hover:text-blue-500" aria-label="Instagram">
                <i class="fab fa-instagram"></i>
            </a>
        </div>
    </div>
</footer>
</html>