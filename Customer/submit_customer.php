<?php
include '../connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $namaLengkap = mysqli_real_escape_string($connect, $_POST['namaLengkap']);
    $jenisKelamin = mysqli_real_escape_string($connect, $_POST['jenisKelamin']);
    $umur = mysqli_real_escape_string($connect, $_POST['umur']);
    $hargaPaket = mysqli_real_escape_string($connect, $_POST['hargaPaket']);
    $tanggal = mysqli_real_escape_string($connect, $_POST['tanggal']);

    $query = "INSERT INTO tb_Pelanggan (namaLengkap, jenisKelamin, umur, hargaPaket, tanggal) VALUES ('$namaLengkap', '$jenisKelamin', '$umur', '$hargaPaket', '$tanggal')";
    if (mysqli_query($connect, $query)) {
        echo "
            <script>
                alert('Data berhasil ditambahkan');
                window.location = 'Customer.php';
            </script>
        ";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($connect);
    }
}
?>
