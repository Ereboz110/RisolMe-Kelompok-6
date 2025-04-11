<?php
session_start();
ob_start();
require_once '../config.php';

$error = false;
$success = false;
$name = $email = $phone = '';

if (isset($_POST['register'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['pass']);
    $phone = trim($_POST['phone']);

    // Validasi input
    if (empty($name) || empty($email) || empty($password) || empty($phone)) {
        $error = "Semua field harus diisi!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Format email tidak valid!";
    } elseif (!preg_match('/^08[0-9]{9,}$/', $phone)) {
        $error = "Nomor HP harus dimulai dengan 08 dan minimal 11 digit!";
    } else {
        // Cek apakah email sudah terdaftar
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            $error = "Email sudah terdaftar!";
        } else {
            // Hash password
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            
            // Insert user baru
            $stmt = $conn->prepare("INSERT INTO users (name, email, password, phone_number) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $name, $email, $hashed_password, $phone);
            
            if ($stmt->execute()) {
                $success = "Pendaftaran berhasil! Silakan login.";
                // Redirect setelah 2 detik
                header("Refresh: 2; URL=login.php");
            } else {
                $error = "Terjadi kesalahan saat mendaftar: " . $conn->error;
            }
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
    <title>RISOL ME!!</title>
    <link href="./output.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-b from-gray-400 to-stone-800 min-h-screen flex items-center justify-center p-4">
    <div class="container mx-auto max-w-5xl">
        <!-- Main Content -->
        <div class="flex flex-col lg:flex-row bg-white rounded-lg shadow-lg overflow-hidden">
            <!-- Left Side - Food Image -->
            <div class="lg:w-1/2  p-6">
                <a href="landing.php"><h1 class="text-3xl font-bold text-orange-500 mb-8">RISOL ME!!</h1></a>
                <div class="flex justify-center">
                    <img src="../image/image 4.png" alt="Risol snacks" class="rounded-lg w-full max-w-md shadow-md" />
                </div>
            </div>
            
            <!-- Right Side - Register Form -->
            <div class="lg:w-1/2 bg-white p-8 flex items-center justify-center">
                <div class="w-full max-w-md">
                    <h2 class="text-3xl font-bold text-center mb-8">REGISTER</h2>
                    
                    <?php if($error){ ?>
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                        <?= $error ?>
                    </div>
                    <?php } ?>
                    
                    <?php if($success){ ?>
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                        <?= $success ?>
                    </div>
                    <?php } ?>

                    <form method="POST">
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                            <input type="text" name="name" id="name" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-400" 
                                   placeholder="Nama Lengkap" value="<?= htmlspecialchars($name) ?>">
                        </div>

                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                            <input type="email" name="email" id="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-400" 
                                   placeholder="Email" value="<?= htmlspecialchars($email) ?>">
                        </div>
                        
                        <div class="mb-4">
                            <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                            <input type="password" name="pass" id="password" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-400" 
                                   placeholder="Password">
                        </div>

                        <div class="mb-6">
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Nomor HP</label>
                            <input type="tel" name="phone" id="phone" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-400" 
                                   placeholder="08123456789" value="<?= htmlspecialchars($phone) ?>">
                        </div>

                        <button type="submit" name="register" class="w-full bg-gray-800 text-white py-2 px-4 rounded-md hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 mb-4">
                            Daftar Sekarang
                        </button>

                        <p class="text-center text-sm text-gray-600">
                            Sudah punya akun? 
                            <a href="login.php" class="text-orange-500 hover:underline">Login disini</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>