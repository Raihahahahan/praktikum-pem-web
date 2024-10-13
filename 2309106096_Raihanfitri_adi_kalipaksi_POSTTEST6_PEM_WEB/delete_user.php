<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit;
}

include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id_pengguna = $_POST['id'];

    // Validate the user ID
    if (is_numeric($id_pengguna)) {
        // Fetch the profile picture from the database
        $sql = "SELECT foto_profile FROM pengguna WHERE id_pengguna = ?";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("i", $id_pengguna);
            $stmt->execute();
            $stmt->bind_result($foto_profile);
            $stmt->fetch();
            $stmt->close();

            // Delete the user record
            $sql = "DELETE FROM pengguna WHERE id_pengguna = ?";
            $stmt = $conn->prepare($sql);

            if ($stmt) {
            $stmt->bind_param("i", $id_pengguna);

            if ($stmt->execute()) {
                if ($foto_profile) {
                    $file_path = 'picture/' . $foto_profile;
                    if (file_exists($file_path)) {
                        unlink($file_path);
                    } else {
                        echo "File tidak ditemukan: " . htmlspecialchars($file_path);
                    }
                }
                header('Location: data_admin.php?message=' . urlencode('Pengguna berhasil dihapus.'));
                exit;
            } else {
                echo "Terjadi kesalahan saat menghapus pengguna: " . htmlspecialchars($stmt->error);
            }

            $stmt->close();
            } else {
            echo "Terjadi kesalahan saat menyiapkan statement: " . htmlspecialchars($conn->error);
            }
        } else {
            echo "Terjadi kesalahan saat menyiapkan statement: " . htmlspecialchars($conn->error);
        }
        } else {
        echo "ID pengguna tidak valid.";
        }
    } else {
        echo "ID pengguna tidak ditemukan.";
    }
