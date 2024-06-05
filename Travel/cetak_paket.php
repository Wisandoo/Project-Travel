<?php
session_start();
include '../connect.php';

require_once("../dompdf/autoload.inc.php");

use Dompdf\Dompdf;
use Dompdf\Options;

// Cek apakah user sudah login
if (!isset($_SESSION['username'])) {
    header("Location: ../login.php");
    exit;
}

// Ambil data dari database
$query = "SELECT * FROM travel_packs";
$result = mysqli_query($connect, $query);

$html = '<h1>Data Paket Travel</h1>';
$html .= '<table border="1" width="100%">
            <tr>
                <th>ID Tiket</th>
                <th>Nama Tiket</th>
                <th>Destinasi</th>
                <th>Harga</th>
                <th>Villa</th>
            </tr>';

while ($row = mysqli_fetch_assoc($result)) {
    $html .= '<tr>
                <td>'.$row['id_tiket'].'</td>
                <td>'.$row['nama_tiket'].'</td>
                <td>'.$row['destinasi'].'</td>
                <td>'.$row['harga'].'</td>
                <td>'.$row['villa'].'</td>
              </tr>';
}

$html .= '</table>';

// Inisialisasi Dompdf
$options = new Options();
$options->set('isHtml5ParserEnabled', true);
$options->set('isRemoteEnabled', true);

$dompdf = new Dompdf($options);
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf->stream("Paket_Travel.pdf");
?>
