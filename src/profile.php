<?php
require_once 'header.php';
require_once '../config.php';

if(!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

$profile_success = $password_success = '';
$error = '';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Update profil
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    
    $stmt = $conn->prepare("UPDATE users SET name=?, email=?, phone_number=? WHERE user_id=?");
    $stmt->bind_param("sssi", $name, $email, $phone, $_SESSION['user']['user_id']);
    
    if($stmt->execute()) {
        $_SESSION['user']['name'] = $name;
        $_SESSION['user']['email'] = $email;
        $_SESSION['user']['phone_number'] = $phone;
        $profile_success = "Profil berhasil diperbarui!";
    }
    $stmt->close();

    // Update password
    if(!empty($_POST['current_password']) || !empty($_POST['new_password']) || !empty($_POST['confirm_password'])) {
        $current_password = $_POST['current_password'];
        $new_password = $_POST['new_password'];
        $confirm_password = $_POST['confirm_password'];
        
        if(empty($current_password) || empty($new_password) || empty($confirm_password)) {
            $error = "Semua field password harus diisi!";
        } elseif($new_password !== $confirm_password) {
            $error = "Password baru dan konfirmasi password tidak cocok!";
        } else {
            // Verifikasi password lama
            $stmt = $conn->prepare("SELECT password FROM users WHERE user_id = ?");
            $stmt->bind_param("i", $_SESSION['user']['user_id']);
            $stmt->execute();
            $result = $stmt->get_result();
            $user = $result->fetch_assoc();
            
            if(password_verify($current_password, $user['password'])) {
                $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
                $stmt = $conn->prepare("UPDATE users SET password = ? WHERE user_id = ?");
                $stmt->bind_param("si", $hashed_password, $_SESSION['user']['user_id']);
                
                if($stmt->execute()) {
                    $password_success = "Password berhasil diubah!";
                } else {
                    $error = "Gagal mengubah password. Silakan coba lagi.";
                }
            } else {
                $error = "Password saat ini salah!";
            }
            $stmt->close();
        }
    }
}
?>

<div class="container mx-auto px-4 py-8">
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6">Edit Profil</h2>
        
        <?php if($profile_success){ ?>
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                <?= $profile_success ?>
            </div>
        <?php } ?>
        
        <?php if($password_success){ ?>
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                <?= $password_success ?>
            </div>
        <?php } ?>
        
        <?php if($error){ ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <?= $error ?>
            </div>
        <?php } ?>

        <form method="POST">
            <!-- Bagian Profil -->
            <div class="mb-6 border-b border-gray-200 pb-6">
                <h3 class="text-lg font-semibold mb-4">Informasi Profil</h3>
                
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Nama Lengkap</label>
                    <input type="text" name="name" 
                           value="<?= htmlspecialchars($_SESSION['user']['name']) ?>" 
                           class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-orange-500" required>
                </div>
                
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Email</label>
                    <input type="email" name="email" 
                           value="<?= htmlspecialchars($_SESSION['user']['email']) ?>" 
                           class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-orange-500" required>
                </div>
                
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Nomor HP</label>
                    <input type="tel" name="phone" 
                           value="<?= htmlspecialchars($_SESSION['user']['phone_number'] ?? '') ?>" 
                           class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-orange-500" required>
                </div>
            </div>

            <!-- Bagian Ganti Password -->
            <div class="mb-6">
                <h3 class="text-lg font-semibold mb-4">Ganti Password</h3>
                
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Password Saat Ini</label>
                    <input type="password" name="current_password" 
                           class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-orange-500">
                </div>
                
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Password Baru</label>
                    <input type="password" name="new_password" 
                           class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-orange-500">
                </div>
                
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Konfirmasi Password Baru</label>
                    <input type="password" name="confirm_password" 
                           class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-orange-500">
                </div>
            </div>

            <button type="submit" 
                    class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-600 transition-colors w-full">
                Simpan Perubahan
            </button>
        </form>
    </div>
</div>

<?php require_once 'footer.php'; ?>