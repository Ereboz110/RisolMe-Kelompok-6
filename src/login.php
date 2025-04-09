<?php
    session_start();
    ob_start();
    require_once '../config.php';
    if (isset($_POST['login'])) {
        $email = htmlspecialchars(filter_input(INPUT_POST, 'email', FILTER_DEFAULT));
        $pass = htmlspecialchars(filter_input(INPUT_POST, 'pass', FILTER_DEFAULT));
        $sql = "SELECT users.* FROM users WHERE users.email = ? AND users.password = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $email, $pass);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $_SESSION['user'] = $row;
            header("Location: landing.php");
            exit();
        } else {
            echo "<script>alert('Invalid email or password');</script>";
        }
        $stmt->close();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RISOL ME!! - Login</title>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link href="./output.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-b from-gray-400 to-stone-800 min-h-screen flex items-center justify-center p-4">
    <div class="container mx-auto max-w-5xl">
        <!-- Main Content -->
        <div class="flex flex-col lg:flex-row bg-white rounded-lg shadow-lg overflow-hidden">
            <!-- Left Side - Food Image -->
            <div class="lg:w-1/2 p-6">
                <a href="landing.php"><h1 class="text-3xl font-bold text-orange-500 mb-8">RISOL ME!!</h1></a>
                
                <div class="flex justify-center">
                    <img src="../image/image 4.png" alt="Risol snacks" class="rounded-lg w-full max-w-md shadow-md" />
                </div>
            </div>
            
            <!-- Right Side - Login Form -->
            <div class="lg:w-1/2 bg-white p-8 flex items-center justify-center">
                <div class="w-full max-w-md">
                    <h2 class="text-3xl font-bold text-center mb-8">WELCOME BACK!!</h2>
                    
                    <form action="login.php" method="POST">
                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                            <input name="email" type="email" id="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-400" placeholder="Email" required>
                        </div>
                        
                        <div class="mb-6">
                            <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                            <input name="pass" type="password" id="password" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-400" placeholder="Password" required>
                        </div>
                        
                        <button type="submit" name="login" class="w-full bg-gray-800 text-white py-2 px-4 rounded-md hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 mb-4">
                            Sign In
                        </button>
                        
                        <div class="flex justify-between text-sm text-gray-600">
                            <a href="register.php" class="hover:underline">Don't have an account?</a>
                            <a href="forgotpass.php" class="hover:underline">Forgot password?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>