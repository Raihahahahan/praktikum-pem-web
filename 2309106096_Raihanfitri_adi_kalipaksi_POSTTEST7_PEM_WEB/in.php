<?php
session_start();
require 'koneksi.php';

$emaill = $_POST['email'];
$passwordd = $_POST['password'];

$sql = "SELECT * FROM pengguna WHERE email = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, 's', $emaill);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if ($emaill == 'admin@gmail.com' && $passwordd == 'admin123') {
    $_SESSION['admin'] = 'admin'; // Set session 'admin'
    header('Location: data_admin.php');
    exit();
}

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    if (password_verify($passwordd, $row['password'])) {
        $_SESSION['username'] = $row['username']; 
        header("Location: index.php"); 
        exit();
    } else {
        echo "<script>
            alert('Login Gagal: Email atau password salah.');
            window.location.href = 'login.php';
        </script>";
    }
} else {
    echo "<script>
        alert('Login Gagal: Email atau password salah.');
        window.location.href = 'login.php';
    </script>";
}
?>
