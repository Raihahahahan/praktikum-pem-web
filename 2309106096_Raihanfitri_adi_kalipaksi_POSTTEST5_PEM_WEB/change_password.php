<?php
session_start();
include 'koneksi.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];
    $query = "SELECT * FROM pengguna WHERE username = '$username' AND email = '$email'";
    $result = $conn->query($query);
    
    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        
        if ($old_password == $user['password']) {
            $update_query = "UPDATE pengguna SET password = '$new_password' WHERE username = '$username' AND email = '$email'";
            
            if ($conn->query($update_query) === TRUE) {
                echo "<script>
                        alert('Password Berhasil Di Ganti.');
                        window.location.href = 'index.php';
                    </script>";
            } else {
                echo "<script>
                        alert('Terjadi kesalahan saat mengganti password.');
                        window.location.href = 'change_password.php';
                    </script>";
            }
        } else {
            echo "<script>
                    alert('Password lama salah.');
                    window.location.href = 'change_password.php';
                </script>";
        }
    } else {
        echo "<script>
            alert('Pengguna tidak ditemukan.');
            window.location.href = 'change_password.php';
              </script>";
    }
    
    $conn->close();
}
?>