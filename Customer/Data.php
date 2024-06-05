<?php
include '../connect.php';

$query = "SELECT * FROM tb_Pelanggan";
$result = mysqli_query($connect, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Data</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }

        .header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .sidebar {
            width: 200px;
            background-color: #37953a;
            color: #fff;
            padding: 20px;
            border-radius: 5px;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar li {
            margin-bottom: 10px;
        }

        .sidebar li a {
            display: block;
            padding: 12px;
            color: #fff;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .sidebar li a:hover {
            background-color: #3ad018;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin: 20px auto;
            border: 1px solid #ddd;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .add-button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .add-button:hover {
            background-color: #45a049;
        }

        /* Media queries untuk responsif */
        @media only screen and (max-width: 768px) {
            .container {
                padding: 0 10px;
            }

            .sidebar {
                width: 100%;
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="container">
            <h1>Customer Data</h1>
        </div>
    </div>
    <div class="container">
        <div class="sidebar">
            <ul>
                <li><a href="../admin.php">Dashboard</a></li>
            </ul>
        </div>
        <table>
            <thead>
                <tr>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Umur</th>
                    <th scope="col">Harga Paket</th>
                    <th scope="col">Tanggal</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row['namaLengkap']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['jenisKelamin']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['umur']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['hargaPaket']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['tanggal']) . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>No data found</td></tr>";
                }
                ?>
            </tbody>
        </table>
        <button class="add-button" onclick="window.location.href='Customer.php'">Tambah Data Customer</button>
    </div>
</body>
</html>
