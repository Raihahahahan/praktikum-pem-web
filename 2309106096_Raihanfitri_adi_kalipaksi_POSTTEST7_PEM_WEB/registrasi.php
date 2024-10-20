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
        <form action="regis.php" class="form-login"  method="POST"  enctype="multipart/form-data">
            <h1>Daftar</h1>
            <input type="text" name="username" id="name" placeholder="Nama Anda" class="formulir">
            <input type="email" name="email" id="email" placeholder="Masukkan Email Anda" class="formulir">
            <input type="password" name="password" id="password" placeholder="Buat Password Anda" class="formulir">
            <input type="password" name="passwords" id="password" placeholder="Konfirmasi Password Anda" class="formulir">

            <div class="upload-file">

                <input type="file" name="foto" class="formulir" >
                <h5>Upload Foto Profile Anda</h5>
            </div>
            <button type="submit" class="login-button">Daftar</button>

        </form>
        
    </section>.

    <script src="scripts/app.js"></script>
    
</body>
</html>