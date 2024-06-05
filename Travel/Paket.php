<?php
session_start();
include '../connect.php';

// Pastikan user sudah login
if (!isset($_SESSION['username'])) {
    header("Location: ../login.php");
    exit;
}

// Ambil data dari database
$query = "SELECT * FROM travel_packs";
$result = mysqli_query($connect, $query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paket Travel</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="header">
        <div class="container">
            <h1>Paket Travel</h1>
        </div>
    </div>
    <div class="row">
        <div class="sidebar col">
            <ul>
                <li><a href="../admin.php" onclick="return confirm('Apakah Anda yakin ingin meninggalkan halaman ini?')">Home</a></li>
                <li><a href="../Customer/Data.php" onclick="return confirm('Apakah Anda yakin ingin meninggalkan halaman ini?')">Traveler Table</a></li>
                <li><a href="../Customer/Customer.php" onclick="return confirm('Apakah Anda yakin ingin meninggalkan halaman ini?')">Traveler Data</a></li>
                <li><a href="Paket.php" onclick="return confirm('Apakah Anda yakin ingin meninggalkan halaman ini?')">Paket Travel</a></li>
            </ul>
            <div class="logout-btn">
                <a href="../logout.php"><button>Logout</button></a>
            </div>
        </div>
        <div class="content col">
            <div class="container">
                <h2>Daftar Paket Travel</h2>
                <a href="TambahPaket.php" class="btn btn-primary mb-3">Tambah Data</a>
                <a href="cetak_paket.php" class="btn btn-primary mb-3">Cetak PDF</a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID Pelanggan</th>
                            <th>Nama Tiket</th>
                            <th>Destinasi</th>
                            <th>Harga</th>
                            <th>Villa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <td><?php echo $row['id_tiket']; ?></td>
                            <td><?php echo $row['nama_tiket']; ?></td>
                            <td><?php echo $row['destinasi']; ?></td>
                            <td><?php echo $row['harga']; ?></td>
                            <td><?php echo $row['villa']; ?></td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
