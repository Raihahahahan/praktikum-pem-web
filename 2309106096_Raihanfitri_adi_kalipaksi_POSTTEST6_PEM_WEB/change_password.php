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

    $tmp_name = $_FILES['foto']['tmp_name'];
    $file_name = $_FILES['foto']['name'];

    $validExtension = ['jpg', 'jpeg', 'png'];
    $fileExtension = explode('.', $file_name);
    $fileExtension = strtolower(end($fileExtension));

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        
        if ($old_password == $user['password']) {
            $conn->begin_transaction();
            try {
                if (isset($_FILES['foto']) && in_array($fileExtension, $validExtension)) {
                    $old_foto_query = "SELECT foto_profile FROM pengguna WHERE username = '$username' AND email = '$email'";
                    $old_foto_result = $conn->query($old_foto_query);
                    
                    if ($old_foto_result->num_rows == 1) {
                        $old_foto = $old_foto_result->fetch_assoc()['foto_profile'];
                        if (file_exists("picture/" . $old_foto)) {
                            if (!unlink("picture/" . $old_foto)) {
                                throw new Exception("Failed to delete old picture.");
                            }
                        } else {
                            throw new Exception("Old picture does not exist.");
                        }
                    }
                    
                    $new_foto_name = date('Y-m-d H.i.s') . '.' . $fileExtension;
                    if (!move_uploaded_file($tmp_name, "picture/" . $new_foto_name)) {
                        throw new Exception("Failed to upload new picture.");
                    }
                    
                    $update_foto_query = "UPDATE pengguna SET foto_profile = '$new_foto_name' WHERE username = '$username' AND email = '$email'";
                    $conn->query($update_foto_query);
                }
                
                $update_query = "UPDATE pengguna SET password = '$new_password' WHERE username = '$username' AND email = '$email'";
                if ($conn->query($update_query) === TRUE) {
                    $conn->commit();
                    echo "<script>alert('Password and profile picture updated successfully.'); window.location.href='index.php';</script>";
                } else {
                    throw new Exception("Error updating record: " . $conn->error);
                }
            } catch (Exception $e) {
                $conn->rollback();
                echo $e->getMessage();
            }
        } else {
            echo "<script>alert('Old password is incorrect.'); window.location.href='gantipass.php';</script>";
        }
    } else {
        echo "<script>alert('User not found.'); window.location.href='gantipass.php';</script>";
    }
}
?>
