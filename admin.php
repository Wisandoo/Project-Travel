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
                <li><a href="Customer/index.php" onclick="return confirm('Apakah Anda yakin ingin meninggalkan halaman ini?')">Home</a></li>
                <li><a href="Customer/Data.php" onclick="return confirm('Apakah Anda yakin ingin meninggalkan halaman ini?')">Traveler Table</a></li>
                <li><a href="Customer/Customer.php" onclick="return confirm('Apakah Anda yakin ingin meninggalkan halaman ini?')">Traveler Data</a></li>
            </ul>
            <div class="logout-btn">
                <button onclick="logout()">Logout</button>
            </div>
        </div>
        <div class="content col">
            <div class="container">
                <div class="main-content">
                    <h2>WELCOME ADMIN</h2>
                    <div class="welcome-image">
                        <img src="Images/LOMBOK TRAVEL.png" alt="Lombok Travel">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function logout() {
            // Keluar dari Halaman Admin
            window.location.href = "Login.php";
        }
    </script>
</body>
</html>
