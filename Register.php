<?php

include 'connect.php';
// Jika pengguna telah mengirimkan formulir pendaftaran
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari input
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validasi input
    if (empty($fullName) || empty($email) || empty($phoneNumber) || empty($username) || empty($password)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'Register.php';
            </script>
        ";
    } else {
        // Menyimpan data pengguna ke dalam database
        $sql = "INSERT INTO tb_admin (fullName, email, phoneNumber, username, password) VALUES ('$fullName', '$email', '$phoneNumber', '$username', '$password')";
        
        if (mysqli_query($connect, $sql)) {
            echo "  
                <script>
                    alert('Registrasi Berhasil !!');
                    window.location = 'Login.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Terjadi Kesalahan');
                    window.location = 'Register.php';
                </script>
            ";
        }

        // Simpan informasi pengguna ke dalam session jika diperlukan
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;

        // atur cookie dengan nama 'username' dan nilai username pengguna
        setcookie("username", $username, time() + (86400 * 30), "/"); // Cookie berlaku selama 30 hari
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css\style.css">
</head>
<body>
<header>
    <nav>
        <div class="logo">
            <img src="Images\LOMBOK TRAVEL.png" alt="Logo" width="150px"/>
        </div>
        <div class="nav-links">
            <a href="index.php">Home</a>
            <a href="Register.php">Sign Up</a>
            <a href="login.php">Login</a>
        </div>
    </nav>
</header>
<main>
    <div class="form-container">
        <h3>Sign Up</h3>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <table>
                <tr>
                    <td><input type="text" id="fullName" name="fullName" placeholder="Full Name" required></td>
                </tr>
                <tr>
                    <td><input type="email" id="email" name="email" placeholder="Email" required></td>
                </tr>
                <tr>
                    <td><input type="tel" id="phoneNumber" name="phoneNumber" placeholder="Phone Number" required></td>
                </tr>
                <tr>
                    <td><input type="text" id="username" name="username" placeholder="Username" required></td>
                </tr>
                <tr>
                    <td><input type="password" id="password" name="password" placeholder="Password" required></td>
                </tr>
            </table>
            <button type="submit">Register</button>
        </form>
    </div>
</main>
<footer>
    <h4>&copy; Lombok TravelGo 2024</h4>
</footer>
</body>
</html>