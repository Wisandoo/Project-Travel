<?php
session_start();

// Hapus semua variabel sesi
$_SESSION = array();

// Jika Anda ingin menghancurkan sesi juga, hapus cookie sesi
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Hancurkan sesi
session_destroy();

// Hapus cookie 'username'
setcookie("username", "", time() - 3600, "/");

// Redirect ke halaman login dengan pesan logout berhasil
echo "
    <script>
        alert('Berhasil Logout');
        window.location = 'Login.php';
    </script>
";
exit;
?>