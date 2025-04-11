<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RISOL ME!!</title>
    <link href="./output.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-amber-50 min-h-screen flex flex-col">
    <!-- Navigation Bar -->
    <nav class="bg-white py-4 px-6 flex justify-between items-center shadow-sm border-b border-gray-200">
        <div class="text-xl font-bold text-orange-500"><a href="landing.php">RISOL ME!!</a></div>
        <div class="flex items-center space-x-4">
            <a href="aboutus.php" class="text-gray-700 hover:text-orange-500">Tentang Kami</a>
            <?php if(isset($_SESSION['user'])){ ?>
                <div class="flex items-center space-x-4">
                    <a href="profile.php" class="text-gray-700 hover:text-orange-500">
                        <i class="fas fa-user-circle"></i> <?= htmlspecialchars($_SESSION['user']['name']) ?>
                    </a>
                    <a href="logout.php" class="bg-gray-800 text-white px-4 py-2 rounded cursor-pointer">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </div>
            <?php } else{ ?>
                <a href="login.php" class="bg-gray-800 text-white px-4 py-2 rounded cursor-pointer">LOGIN</a>
            <?php } ?>
            <button class="bg-orange-500 text-white px-4 py-2 rounded cursor-pointer" onclick="window.location.href='menu.php'">
                Pesan Sekarang!!
            </button>
        </div>
    </nav>
    <div class="flex-grow">