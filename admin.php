<?php
session_start();
include 'connect.php';
// Pastikan user sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
$username = $_SESSION['username'];

$query_count = "SELECT COUNT(*) AS total FROM travel_packs";
$result_count = mysqli_query($connect, $query_count);
$row_count = mysqli_fetch_assoc($result_count);
$total_packs = $row_count['total'];
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Dashboard</title>
  
  <link rel="stylesheet" href="css/admin.css">
</head>
<body>
    <div class="header">
        <div class="container">
            <h1>Dashboard</h1>
        </div>
    </div>
    <div class="row">
        <div class="sidebar col">
            <ul>
                <li><a href="admin.php" >Home</a></li>
                <li><a href="Customer/Data.php" onclick="return confirm('Apakah Anda yakin ingin meninggalkan halaman ini?')">Traveler Table</a></li>
                <li><a href="Customer/Customer.php" onclick="return confirm('Apakah Anda yakin ingin meninggalkan halaman ini?')">Traveler Data</a></li>
                <li><a href="Travel/Paket.php" onclick="return confirm('Apakah Anda yakin ingin meninggalkan halaman ini?')">Paket Travel</a></li>
            </ul>
            <div class="logout-btn">
                <a href="logout.php"><button>Logout</button></a>
            </div>
        </div>
        <div class="content col">
            <div class="container">
                <div class="main-content">
                    <h2>WELCOME ADMIN <?php echo htmlspecialchars($username); ?></h2>
                    <div class="welcome-image">
                        <img src="Images/LOMBOK TRAVEL.png" alt="Lombok Travel">
                    </div>
                </div>
                <div class="main-content" style="background : #82e0ff">
                    <h3>Total Paket Travel</h3>
                    <p><?php echo $total_packs; ?></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
