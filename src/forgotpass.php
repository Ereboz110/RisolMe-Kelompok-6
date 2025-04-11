<?php
session_start();
ob_start();
require_once '../config.php';

$error = '';
$success = '';
$admin_wa = "6285805945279"; // Nomor admin dengan kode negara 62

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    
    if (empty($email)) {
        $error = "Email harus diisi!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Format email tidak valid!";
    } else {
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows === 0) {
            $error = "Email tidak terdaftar!";
        } else {
            // Encode pesan untuk URL WhatsApp
            $message = urlencode("Permisi, Admin. Saya ingin reset password untuk email: $email. Terima kasih");
            $whatsapp_url = "https://wa.me/{$admin_wa}?text={$message}";
            
            $success = true;
            $_SESSION['whatsapp_url'] = $whatsapp_url;
        }
        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RISOL ME!! - Forgot Password</title>
    <link href="./output.css" rel="stylesheet">
    <!-- Tambahkan ikon WhatsApp -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gradient-to-b from-gray-400 to-stone-800 min-h-screen flex items-center justify-center p-4">
    <div class="container mx-auto max-w-5xl">
        <div class="flex flex-col lg:flex-row bg-white rounded-lg shadow-lg overflow-hidden">
            <!-- Left Side - Food Image -->
            <div class="lg:w-1/2 p-6">
                <h1 class="text-3xl font-bold text-orange-500 mb-8"><a href="landing.php">RISOL ME!!</a></h1>
                <div class="flex justify-center">
                    <img src="../image/image 4.png" alt="Risol snacks" class="rounded-lg w-full max-w-md shadow-md" />
                </div>
            </div>
            
            <!-- Right Side - Forgot Password Form -->
            <div class="lg:w-1/2 bg-white p-8 flex items-center justify-center">
                <div class="w-full max-w-md">
                    <h2 class="text-3xl font-bold text-center mb-8">FORGOT PASSWORD?</h2>
                    
                    <?php if ($error != '') { ?>
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                            <?= htmlspecialchars($error) ?>
                        </div>
                    <?php } ?>
                    
                    <?php if ($success) { ?>
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                            <p class="font-bold">Instruksi Reset Password:</p>
                            <ol class="list-decimal list-inside mt-2">
                                <li>Klik tombol WhatsApp di bawah ini</li>
                                <li>Pesan sudah disiapkan - tinggal klik kirim</li>
                                <li>Admin akan membantu Anda reset password</li>
                            </ol>
                            <a href="<?= $_SESSION['whatsapp_url'] ?>" 
                            class="inline-block mt-4 bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600"
                            target="_blank">
                                <i class="fab fa-whatsapp"></i> Chat Admin via WhatsApp
                            </a>
                        </div>
                    <?php } else { ?>
                        <form method="POST">
                            <div class="mb-6">
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Terdaftar</label>
                                <input type="email" id="email" name="email" 
                                       class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-400" 
                                       placeholder="Email"
                                       value="<?= htmlspecialchars($email ?? '') ?>"
                                       required>
                            </div>
                            
                            <div class="flex space-x-4">
                                <a href="landing.php" class="w-1/2 bg-white border border-gray-300 text-gray-700 py-2 px-4 rounded-md hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-300 text-center">Cancel</a>
                                <button type="submit" class="w-1/2 bg-gray-800 text-white py-2 px-4 rounded-md hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500">
                                    Verifikasi Email
                                </button>
                            </div>
                        </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>