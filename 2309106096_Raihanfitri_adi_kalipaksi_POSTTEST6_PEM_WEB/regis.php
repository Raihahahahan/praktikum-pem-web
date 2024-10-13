<?php
require 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];


$tmp_name = $_FILES['foto']['tmp_name'];
$file_name = $_FILES['foto']['name'];

$validExtension = ['jpg', 'jpeg', 'png'];
$fileExtension = explode('.', $file_name);
$fileExtension = strtolower(end($fileExtension));

if(!in_array($fileExtension, $validExtension)) {
    echo "
          <script>
              alert('File yang Harus Jpg, Jpeg, Png!');
              document.location.href = 'registrasi.php';
          </script>";
          exit;
}else{
    $newFileName = date('Y-m-d H.i.s') . '.' . $fileExtension;
    if(move_uploaded_file($tmp_name,'picture/' .$newFileName)) {
        $sql = "INSERT INTO pengguna (username, password, email, foto_profile) VALUES ('$username', '$password', '$email','$newFileName')";
        $result = mysqli_query($conn, $sql);

        if($result) {
            echo "
            <script>
                alert('Berhasil membuat account!');
                document.location.href = 'login.php';
            </script>" ;
        }else {
            echo "
            <script>
                alert('Gagal membuat account!');
                document.location.href = 'registrasi.php';
            </script>";
        
        }
    }
}