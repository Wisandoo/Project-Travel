<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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

        .row {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
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
        
        .content {
            flex-grow: 1;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .main-content {
            margin-top: 40px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 2px;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
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

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
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
            <h1>Dashboard</h1>
        </div>
    </div>
    <div class="row">
        <div class="sidebar">
            <ul>
                <li><a href="admin.php">Dashboard</a></li>
                <li><a href="Customer\Data.php">Traveler Table</a></li>
            </ul>
        </div>
        <div class="content">
            <div class="container">
                <h1>Customer Data</h1>
                <form id="customerForm">
                    <div class="form-group">
                        <label for="namaLengkap">Nama Lengkap</label>
                        <input type="text" class="form-control" id="namaLengkap" placeholder="Masukkan Nama Lengkap">
                    </div>
                    <div class="form-group">
                        <label for="jenisKelamin">Jenis Kelamin</label>
                        <select class="form-control" id="jenisKelamin">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="umur">Umur</label>
                        <input type="number" class="form-control" id="umur" placeholder="Masukkan Umur">
                    </div>
                    <div class="form-group">
                        <label for="hargaPaket">Harga Paket</label>
                        <input type="number" class="form-control" id="hargaPaket" placeholder="Masukkan Harga Paket">
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" placeholder="Masukkan Tanggal">
                    </div>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
