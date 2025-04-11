<?php
    require_once 'header.php';
    require_once '../config.php';
?>

    <!-- Header -->
    <header class="bg-gray-600 text-white py-4 px-6">
        <h1 class="text-center font-montserrat text-2xl font-semibold">Tentang Kami - Risol Lezat Setiap Gigitan</h1>
    </header>

    <!-- Main Content -->
    <div class="container mx-auto px-20 py-20 max-w-full">
        <!-- Description Section -->
        <div class="flex flex-col md:flex-row gap-6 mb-10">
            <div class="w-full md:w-1/3">
                <img src="../image/risol bihun.jpg" alt="Risol dengan saus" class="w-full rounded-lg shadow-md">
            </div>
            <div class="w-full md:w-2/3">
                <h2 class="text-2xl font-bold mb-2">Deskripsi:</h2>
                <p class="text-gray-700 mb-4">
                    Kami adalah RISOL ME!!, rumah bagi risol lezat Bali. Setiap gigitan dibuat dengan penuh cinta dan dedikasi untuk memberikan pengalaman kuliner terbaik untuk menghidupkan camilan khas Indonesia yang menggiurkan dengan sentuhan modern.
                </p>
                <p class="text-gray-700">
                    Setiap risol kami dibuat dari bahan-bahan berkualitas terbaik, kulit yang renyah, dan diisi kematang. Mulai dari Risol Mayo yang creamy hingga Risol Ayam yang gurih - tersedia berbagai varian untuk setiap lidah.
                </p>
            </div>
        </div>

        <!-- Why Choose Us Section -->
        <div class="flex flex-col md:flex-row gap-6 mb-10">
            <div class="w-full md:w-1/2 flex flex-col">
                <h2 class="text-4xl font-bold mb-4 text-center">Kenapa Pilih<br>RISOL ME!!?</h2>
                <ul class="space-y-2 text-left mx-auto w-fit">
                    <li class="flex items-center">
                        <span class="text-green-500 mr-2"><i class="fas fa-check-square"></i></span>
                        <span>Bahan Berkualitas</span>
                    </li>
                    <li class="flex items-center"></li>
                        <span class="text-green-500 mr-2"><i class="fas fa-check-square"></i></span>
                        <span>Tanpa Pengawet</span>
                    </li>
                    <li class="flex items-center"></li>
                        <span class="text-green-500 mr-2"><i class="fas fa-check-square"></i></span>
                        <span>Dijamin Higienis</span>
                    </li>
                </ul>
            </div>
            <div class="w-full md:w-1/2">
                <img src="../image/image 7.png" alt="Risol dalam display" class="w-full rounded-lg shadow-md">
            </div>
        </div>

        <!-- Vision & Mission Section -->
        <div class="mb-10">
            <h2 class="text-4xl font-bold mb-4 text-center">VISI & MISI</h2>
            
            <div class="mb-4">
                <h3 class="text-gray-600 font-medium mb-1 text-xl">Visi:</h3>
                <p class="text-gray-700">Menjadi brand camilan lokal yang dikenal luas di Indonesia dengan rasa autentik dan kualitas premium.</p>
            </div>
            
            <div>
                <h3 class="text-gray-600 font-medium mb-1 text-xl">Misi:</h3>
                <ul class="space-y-2">
                    <li class="flex items-center">
                        <span class="text-green-500 mr-2"><i class="fas fa-check-square"></i></span>
                        <span>Menggunakan bahan-bahan berkualitas tanpa pengawet.</span>
                    </li>
                    <li class="flex items-center">
                        <span class="text-green-500 mr-2"><i class="fas fa-check-square"></i></span>
                        <span>Menciptakan inovasi rasa baru yang relevan dengan selera masyarakat.</span>
                    </li>
                    <li class="flex items-center">
                        <span class="text-green-500 mr-2"><i class="fas fa-check-square"></i></span>
                        <span>Mempertahankan kebersihan dan standar produksi tinggi.</span>
                    </li>
                    <li class="flex items-center">
                        <span class="text-green-500 mr-2"><i class="fas fa-check-square"></i></span>
                        <span>Memberikan layanan pelanggan yang ramah dan responsif.</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Our Values Section -->
        <div class="flex flex-col md:flex-row gap-6">
            <div class="w-full md:w-1/2">
                <img src="../image/image 8.png" alt="Bahan-bahan risol" class="w-full rounded-lg shadow-md">
            </div>
            <div class="w-full md:w-1/2">
                <h2 class="text-2xl font-bold mb-4">Nilai-Nilai Kami</h2>
                <ul class="space-y-2">
                    <li class="flex items-center">
                        <span class="text-yellow-500 mr-2"><i class="fas fa-star"></i></span>
                        <span><strong>Kualitas</strong> - Setiap risol dibuat segar setiap hari dari bahan pilihan.</span>
                    </li>
                    <li class="flex items-center">
                        <span class="text-yellow-500 mr-2"><i class="fas fa-star"></i></span>
                        <span><strong>Kreativitas Tanpa Batas</strong> - Kami terus berinovasi menghadirkan rasa baru.</span>
                    </li>
                    <li class="flex items-center">
                        <span class="text-yellow-500 mr-2"><i class="fas fa-star"></i></span>
                        <span><strong>Kebersihan dan Kesehatan</strong> - Proses produksi kami mengutamakan higienitas dan kesehatan.</span>
                    </li>
                    <li class="flex items-center">
                        <span class="text-yellow-500 mr-2"><i class="fas fa-star"></i></span>
                        <span><strong>Kebanggaan Pelanggan</strong> - Bagi kami, Anda adalah cara kami berbagi cinta melalui makanan.</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
<?php
require_once 'footer.php';
?>