<?php



if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $nama = isset($_POST['nama']) ? htmlspecialchars($_POST['nama']) : '';
    $password = isset($_POST['password']) ? htmlspecialchars($_POST['password']) : '';

    echo "Email : $email <br>";
    echo "Nama : $nama <br>";
    echo "Password : $password <br>";

}

?>