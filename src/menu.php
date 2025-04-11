<?php
    require_once 'header.php';
    require_once '../config.php';
?>

    <!-- Menu Header -->
    <div class="py-4 text-center text-white font-semibold text-xl bg-green-500">
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
            <a href="cart.php"><button class="bg-green-500 text-white px-8 py-3 rounded hover:bg-green-600 transition-colors">
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
<?php
require_once 'footer.php';
?>