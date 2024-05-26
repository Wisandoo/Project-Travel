<?php
session_start();
include '../connect.php';

// Pastikan user sudah login
if (!isset($_SESSION['username'])) {
    header("Location: ../login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_tiket = mysqli_real_escape_string($connect, $_POST['id_tiket']);
    $nama_tiket = mysqli_real_escape_string($connect, $_POST['nama_tiket']);
    $destinasi = mysqli_real_escape_string($connect, $_POST['destinasi']);
    $harga = mysqli_real_escape_string($connect, $_POST['harga']);
    $villa = mysqli_real_escape_string($connect, $_POST['villa']);

    $query = "INSERT INTO travel_packs (id_tiket, nama_tiket, destinasi, harga, villa) VALUES ('$id_tiket','$nama_tiket', '$destinasi', '$harga', '$villa')";
    if (mysqli_query($connect, $query)) {
        echo "
            <script>
                alert('Data berhasil ditambahkan');
                window.location = 'Paket.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Gagal menambahkan data');
            </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Paket Travel</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="header">
        <div class="container">
            <h1>Tambah Paket Travel</h1>
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
                <h2>Tambah Data Paket Travel</h2>
                <form method="post" action="">
                    <div class="form-group">
                        <label for="id_tiket">ID Tiket</label>
                        <input type="text" class="form-control" id="id_tiket" name="id_tiket" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_tiket">Nama Tiket</label>
                        <input type="text" class="form-control" id="nama_tiket" name="nama_tiket" required>
                    </div>
                    <div class="form-group">
                        <label for="destinasi">Destinasi</label>
                        <input type="text" class="form-control" id="destinasi" name="destinasi" required>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" class="form-control" id="harga" name="harga" required>
                    </div>
                    <div class="form-group">
                        <label for="villa">Villa</label>
                        <input type="text" class="form-control" id="villa" name="villa" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
