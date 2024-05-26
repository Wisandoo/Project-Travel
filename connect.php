<?php 

$servername = 'localhost';
$username = 'root';
$password = ''; //jika tidak ada password di kosongkan saja
$database = 'db_lomboktravelgo';

// membuat koneksi
$connect = mysqli_connect($servername, $username, $password, $database);

// mengecek koneksi
if(!$connect) {
    die('Connection Failed:' . mysqli_connect_error());
}
 ?>