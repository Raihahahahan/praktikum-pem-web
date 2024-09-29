<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $nama = isset($_POST['nama']) ? htmlspecialchars($_POST['nama']) : '';
    $password = isset($_POST['password']) ? htmlspecialchars($_POST['password']) : '';

}

?>







<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styles/form.css">
    </head>
    <body>
        <div class="box">
            <div class="circle">
                <svg xmlns="http://www.w3.org/2000/svg" width="300" height="300" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z"/>
                </svg>
            </div>
            <h1>Selamat Datang <?php  echo  $nama ; ?> </h1>
            <h3>Email Anda : <?php  echo $email ?></h3>
            <h3>Password Anda : <?php  echo $password ?></h3>
            <button class="button-ok">OK</button>
        </div>
    </body>
</html>