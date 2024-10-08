<?php
session_start();

// Check if the user is logged in as admin
if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit;
}

include 'koneksi.php'; // Ensure this file exists and can connect to the database

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id_pengguna = $_POST['id'];

    // Validate the user ID
    if (is_numeric($id_pengguna)) {
        $sql = "DELETE FROM pengguna WHERE id_pengguna = ?";
        $stmt = $conn->prepare($sql);

        // Check if prepared statement was successful
        if ($stmt) {
            $stmt->bind_param("i", $id_pengguna);

            // Execute statement and check result
            if ($stmt->execute()) {
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
        echo "ID pengguna tidak valid.";
    }
} else {
    echo "ID pengguna tidak ditemukan.";
}

$conn->close();
?>
