<?php

session_start();
$isLoggedIn = isset($_SESSION['username']);
if (!$isLoggedIn){
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuperMall | Login Page</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/login-design.css">
</head>
<body>
    <?php include "nav.php"; ?>
    <div class="kontenhum">
        <a href="index.php">Beranda</a>
        <a href="index.php#about">About</a>
        <div class="button-login-regis">
            <a href="login.php">Login</a>
            <a href="registrasi.php">regis</a>
        </div>
    </div>

    <section class="container-login">
        <div class="login-image">
            <img src="assets/logo.png" alt="">
            <h1>SuperMall Aplikasi E-Commerce No 1 Di Indonesia</h1>
        </div>
        <form action="change_password.php" class="form-login" method="POST">
            <h1>Ganti Password</h1>
            <input type="text" name="username" id="name" placeholder="Nama Anda" class="formulir" required>
            <input type="email" name="email" id="email" placeholder="Masukkan Email Anda" class="formulir" required>
            <input type="password" name="old_password" id="password" placeholder="Masukkan Password Lama" class="formulir" required>
            <input type="password" name="new_password" id="new_password" placeholder="Buat Password Baru" class="formulir" required>
            <button type="submit" class="login-button">Ganti Password</button>
        </form>
    </section>

    <script src="scripts/app.js"></script>
</body>
</html>