
<?php
    require_once 'header.php';
    require_once '../config.php';
?>

    <!--Hero-->
    <section class="bg-yellow-400 py-16 text-center">
        <div class="relative mx-auto max-w-md">
            <img src="../image/real logo fakultas.png" alt="" class="mx-auto opacity-20">
            <div class="absolute inset-0 flex flex-col items-center justify-center">
                <h1 class="text-3xl font-bold mb-2">Nikmati Risol Terlezat Di Udayana!!</h1>
                <p class="mb-6">Antar Langsung Ke Tempat Anda!</p>
            </div>
        </div>
        <div>
            <button class="bg-orange-500 text-white px-6 py-2 rounded-full shadow-md hover:bg-orange-600 transition" onclick="window.location.href='menu.php'">Pesan Sekarang</button>
        </div>
    </section>

    <!-- Keunggulan Section -->
    <section class="py-16 px-6">
        <h2 class="text-2xl font-bold text-center mb-12">Keunggulan kami</h2>
        <div class="flex flex-wrap justify-center gap-8">
            <div class="flex flex-col items-center max-w-xs text-center">
                <div class="bg-green-500 w-24 h-24 rounded-full mb-4"></div>
                <h3 class="font-semibold mb-2">Banyak Pilihan</h3>
                <p class="text-gray-600 text-sm">Tersedia berbagai pilihan menu risol untuk anda</p>
            </div>
            <div class="flex flex-col items-center max-w-xs text-center">
                <div class="bg-orange-500 w-24 h-24 rounded-full mb-4"></div>
                <h3 class="font-semibold mb-2">Bahan Berkualitas</h3>
                <p class="text-gray-600 text-sm">Menggunakan bahan pilihan berkualitas tinggi</p>
            </div>
            <div class="flex flex-col items-center max-w-xs text-center">
                <div class="bg-yellow-400 w-24 h-24 rounded-full mb-4"></div>
                <h3 class="font-semibold mb-2">Rasa Autentik</h3>
                <p class="text-gray-600 text-sm">Rasa yang khas dan terkenal di kalangan mahasiswa</p>
            </div>
        </div>
    </section>

        <!-- Favorite Menu Section -->
        <section class="py-8 px-6">
            <h2 class="text-2xl font-bold text-center mb-8">Favorite Menu</h2>
            <div class="flex flex-wrap justify-center gap-6">
                <div class="bg-white p-4 rounded-lg shadow-md max-w-xs">
                    <a href="menu.php">
                    <img src="../image/risol sayur.jpg" alt="Risol Sayur" class="w-full h-48 object-cover rounded-md mb-4">
                    <h3 class="font-semibold">Risol Sayur</h3>
                    <p class="text-gray-500">Rp.5000</p>
                    </a>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-md max-w-xs">
                    <a href="menu.php">
                    <img src="../image/risol ayam.jpg" alt="Risol Ayam" class="w-full h-48 object-cover rounded-md mb-4">
                    <h3 class="font-semibold">Risol Ayam</h3>
                    <p class="text-gray-500">Rp.5000</p>
                    </a>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-md max-w-xs">
                    <a href="menu.php">
                    <img src="../image/risol mayo.jpg" alt="Risol Mayo" class="w-full h-48 object-cover rounded-md mb-4">
                    <h3 class="font-semibold">Risol Mayo</h3>
                    <p class="text-gray-500">Rp.5000</p>
                    </a>
                </div>
            </div>
        </section>

    <!-- Risol Bihun Section -->
    <section class="py-8 px-6">
        <div class="flex flex-wrap items-center">
            <div class="w-full md:w-1/2 pr-0 md:pr-8 mb-6 md:mb-0">
                <h2 class="text-2xl font-bold mb-4">Risol Bihun</h2>
                
                <div class="mb-4">
                    <h3 class="font-semibold mb-1">Nikmat</h3>
                    <p class="text-gray-600 text-sm">Risol bihun menawarkan cita rasa yang nikmat dengan kulit renyah dan isian bihun yang lembut, dipadukan dengan bumbu rempah yang menggugah selera. Setiap gigitan memberikan sensasi gurih yang membuat Anda ketagihan.</p>
                </div>
                
                <div class="mb-4">
                    <h3 class="font-semibold mb-1">Sehat</h3>
                    <p class="text-gray-600 text-sm">Sebagai camilan yang sehat, risol bihun terbuat dari bahan-bahan segar seperti sayuran dan protein, memberikan asupan nutrisi yang baik. Proses penggorengan yang tepat menjaga kerenyahan tanpa mengorbankan kesehatan.</p>
                </div>
                
                <div class="mb-4">
                    <h3 class="font-semibold mb-1">Bergizi</h3>
                    <p class="text-gray-600 text-sm">Dari segi gizi, risol bihun kaya akan karbohidrat dari bihun dan serat, vitamin, serta mineral dari sayuran. Dengan kombinasi ini, risol bihun mendukung pola makan yang seimbang dan bergizi.</p>
                </div>
                
                <button class="bg-black text-white px-4 py-2 rounded hover:bg-gray-800 transition mt-2" onclick="window.location.href='menu.php'">Pesan Sekarang</button>
            </div>
            <div class="w-full md:w-1/2">
                <img src="../image/risol bihun.jpg" alt="Risol Bihun" class="w-full rounded-lg shadow-md">
            </div>
        </div>
    </section>

    <!-- Menu Lainnya Section -->
    <section class="py-8 px-6 bg-yellow-50">
        <h2 class="text-2xl font-bold mb-8">Menu Lainnya</h2>
        <div class="flex flex-wrap gap-6">
            <div class="w-full md:w-5/12 bg-white p-4 rounded-lg shadow-md">
                <a href="menu.php">
                <img src="../image/risol coklat.jpg" alt="Risol Coklat" class="w-full h-48 object-cover rounded-md mb-4">
                <h3 class="font-semibold">Risol Coklat</h3>
                <p class="text-gray-600 text-sm">Risol coklat adalah camilan lezat yang terbuat dari kulit risol yang diisi dengan coklat leleh, memberikan kombinasi rasa manis dan gurih yang menggoda.</p>
                </a>
            </div>
            <div class="w-full md:w-5/12 bg-white p-4 rounded-lg shadow-md">
                <a href="menu.php">
                <img src="../image/risol mayo.jpg" alt="Risol Mayo" class="w-full h-48 object-cover rounded-md mb-4">
                <h3 class="font-semibold">Risol Mayo</h3>
                <p class="text-gray-600 text-sm">Risol mayo adalah camilan yang menggugah selera, terbuat dari kulit risol yang diisi dengan campuran mayones, telur, dan bahan lainnya seperti sosis.</p>
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="py-12 px-6 bg-yellow-50">
        <h2 class="text-2xl font-bold mb-8">Testimonial</h2>
        <div class="flex flex-wrap justify-center gap-6">
            <div class="bg-white p-6 rounded-lg shadow-md text-center max-w-xs">
                <div class="text-4xl mb-2">😊</div>
                <h3 class="font-semibold">Satisfied Customer 1</h3>
                <p class="text-gray-600 text-sm mb-2">Fast delivery and delicious food!</p>
                <div class="font-bold">5 stars</div>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md text-center max-w-xs">
                <div class="text-4xl mb-2">😍</div>
                <h3 class="font-semibold">Happy Customer 2</h3>
                <p class="text-gray-600 text-sm mb-2">Amazing flavor combinations</p>
                <div class="font-bold">Highly recommended</div>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md text-center max-w-xs">
                <div class="text-4xl mb-2">👍</div>
                <h3 class="font-semibold">Delighted Customer 3</h3>
                <p class="text-gray-600 text-sm mb-2">Great price and great delivery</p>
                <div class="font-bold">Will order again</div>
            </div>
        </div>
    </section>

<?php
require_once 'footer.php';
?>