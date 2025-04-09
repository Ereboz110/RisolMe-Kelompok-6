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
    <title>RISOL ME!!</title>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
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
            
            <!-- Right Side - Login Form -->
            <div class="lg:w-1/2 bg-white p-8 flex items-center justify-center">
                <div class="w-full max-w-md">
                    <h2 class="text-3xl font-bold text-center mb-8">WELCOME!!</h2>
                    
                    <form>
                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                            <input type="email" id="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-400" placeholder="Email">
                        </div>
                        
                        <div class="mb-6">
                            <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                            <input type="password" id="password" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-400" placeholder="Password">
                        </div>
                        
                        <a href="#"><button type="submit" class="w-full bg-gray-800 text-white py-2 px-4 rounded-md hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 mb-4">
                            Sign Up
                        </button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>