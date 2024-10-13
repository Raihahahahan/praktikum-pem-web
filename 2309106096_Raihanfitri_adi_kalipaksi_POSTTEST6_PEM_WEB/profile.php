<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

require 'koneksi.php';
$user = $_SESSION['username'];
$sql = "SELECT username, email, foto_profile FROM pengguna WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $user);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "No user found";
    exit;
}

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <link rel="stylesheet" href="styles/profile.css">
</head>
<body>
    <div class="container">
        <div class="form-section">
            <h1>Profil Saya</h1>
            <p>Kelola informasi profil Anda untuk mengontrol, melindungi dan mengamankan akun</p>
            <div class="form-group">
                <label for="username">Username</label>
                <input disabled id="username" type="text" value="<?php echo htmlspecialchars($row['username']); ?>"/>
                <div class="info">Username hanya dapat diubah satu (1) kali.</div>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input disabled id="email" type="text" value="<?php echo htmlspecialchars($row['email']); ?>"/>
                <span class="change-link"><a href="gantipass.php"></a></span>
            </div>
        </div>
        <div class="profile-pic-section">
        <img alt="Profile picture placeholder" height="100" width="100" src="<?php echo !empty($row['foto_profile']) ? 'picture/' . htmlspecialchars($row['foto_profile']) : 'default-placeholder.jpg'; ?>" />

            
        </div>
    </div>
</body>
</html>