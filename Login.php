<?php
session_start();
include 'connect.php'; // Pastikan file ini berisi koneksi ke database

// Fungsi untuk memeriksa apakah pengguna sudah login
function isUserLoggedIn() {
    return isset($_SESSION['username']);
}

// Jika pengguna telah mengirimkan formulir login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil username dan password dari input formulir
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk memeriksa username dan password di database
    $sql = "SELECT * FROM tb_admin WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($connect, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Jika username dan password cocok, set session
        $_SESSION['username'] = $username;

        // Set session untuk pesan selamat datang
        $_SESSION['welcome_message'] = "Selamat Datang $username";

        // Atur cookie 
        setcookie("username", $username, time() + (86400 * 30), "/"); // Cookie berlaku selama 30 hari

        // Redirect ke halaman dashboard
        header("Location: admin.php");
        exit;
    } else {
        // Jika username atau password tidak sesuai, beri pesan kesalahan
        echo "
        <script>
        alert('Username atau Password tidak sesuai');
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css\style.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <img src="Images\LOMBOK TRAVEL.png" alt="Logo" width="150px" />
            </div>
            <a href="index.php">Home</a>
            <a href="Register.php">Sign Up</a>
            <a href="login.php">Login</a>
        </nav>
    </header>
    <main>
        <div class="form-login">
            <center>
                <h3>Login</h3>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <table>
                        <tr>
                            <td><input type="text" id="username" name="username" placeholder="Username" required /></td>
                        </tr>
                        <tr>
                            <td><input type="password" id="password" name="password" placeholder="Password" required /></td>
                        </tr>
                    </table>
                    <button type="submit">Login</button>
                </form>
                <?php
                // Tampilkan pesan kesalahan jika ada
                if (isset($errorMessage)) {
                    echo '<div class="error-message">' . $errorMessage . '</div>';
                }
                ?>
            </center>
        </div>
    </main>
    <footer>
        <h4>&copy; Lombok TravelGo 2024</h4>
    </footer>
</body>
</html>