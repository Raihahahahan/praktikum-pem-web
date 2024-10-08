<?php
require 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$sql = "INSERT INTO pengguna (username, password, email) VALUES ('$username', '$password', '$email')";


if(mysqli_query($conn, $sql)){
   header("location:login.php");
} else{
    echo "Pendaftaran Gagal :". mysqli_error($conn);
}