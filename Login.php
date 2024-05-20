<?php
session_start();

// Fungsi untuk memeriksa apakah pengguna sudah login
function isUserLoggedIn() {
    return isset($_SESSION['username']);
}

// Jika pengguna telah mengirimkan formulir login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Username dan password yang diterima dari formulir
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Simulasikan pengecekan dengan database atau data pengguna yang disimpan di tempat lain
    // Di sini, kami akan menggunakan data statis untuk simulasi
    $storedUsername = "admin"; // Ganti dengan username yang sebenarnya
    $storedPassword = "password123"; // Ganti dengan password yang sebenarnya

    // Jika username dan password sesuai
    if ($username === $storedUsername && $password === $storedPassword) {
        // Atur session
        $_SESSION['username'] = $username;

        // Atur cookie jika diperlukan
        // Contoh: atur cookie dengan nama 'username' dan nilai username pengguna
        setcookie("username", $username, time() + (86400 * 30), "/"); // Cookie berlaku selama 30 hari

        // Redirect ke halaman dashboard
        header("Location: admin.php");
        exit;
    } else {
        // Jika username atau password tidak sesuai, beri pesan kesalahan
        $errorMessage = "Username atau password salah. Silakan coba lagi.";
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