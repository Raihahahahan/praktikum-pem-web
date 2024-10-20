<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Admin</title>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .navbar {
            background-color: #343a40;
            padding: 10px;
            color: white;
            margin-bottom: 20px;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            margin-right: 20px;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #dee2e6;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #e9ecef;
        }
        .btn-danger {
            background-color: #dc3545;
            color: white;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 4px;
        }
        .btn-danger:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="index.php">Home</a>
        <span>Welcome To Admin Menu</span>
    </div>
    <div class="container">
        <form method="get" action="data_admin.php" style="margin-bottom: 20px; display: flex; justify-content: center; align-items: center;">
            <input type="text" name="search" placeholder="Search by name or email" value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>" style="padding: 10px; border: 1px solid #dee2e6; border-radius: 4px; width: 300px; margin-right: 10px;">
            <button type="submit" style="padding: 10px 20px; background-color: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer;">Search</button>
        </form>
        <h2>Data Admin</h2>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Foto Profile</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "koneksi.php";
                $search = isset($_GET['search']) ? mysqli_real_escape_string($conn, $_GET['search']) : '';
                $sql = "SELECT * FROM pengguna WHERE username LIKE '%$search%' OR email LIKE '%$search%' ORDER BY id_pengguna ASC";
                $hasil = mysqli_query($conn, $sql);
                $no = 0;
                while ($data = mysqli_fetch_array($hasil)) {
                    $no++;
                ?>
                    <tr>
                        <td><?php echo htmlspecialchars($no); ?></td>
                        <td><?php echo htmlspecialchars($data["username"]); ?></td>
                        <td><?php echo htmlspecialchars($data["email"]); ?></td>
                        <td>
                            <img alt="Profile picture placeholder" height="100" width="100" src="<?php echo !empty($data['foto_profile']) ? 'picture/' . htmlspecialchars($data['foto_profile']) : 'default-placeholder.jpg'; ?>" />
                        </td>
                        <td>
                            <form action="delete_user.php" method="post" style="display:inline;">
                                <input type="hidden" name="id" value="<?php echo htmlspecialchars($data['id_pengguna']); ?>">
                                <button type="submit" class="btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
