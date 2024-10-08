<?php
session_start();
require 'koneksi.php';

$emaill = $_POST['email'];
$passwordd = $_POST['password'];

$sql = "SELECT * FROM pengguna WHERE email = '$emaill' AND password = '$passwordd'";
$result = mysqli_query($conn, $sql);

if ($emaill == 'admin@gmail.com' && $passwordd == 'admin123') {
    $_SESSION['admin'] = 'admin'; // Set session 'admin'
    header('Location: data_admin.php');
    exit();
}


if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $row['username']; 
    header("Location: index.php"); 
    exit();
} else {
    echo "<script>
        alert('Login Gagal: Email atau password salah.');
        window.location.href = 'login.php';
    </script>";
}
?>
