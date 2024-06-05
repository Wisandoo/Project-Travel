<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../css/cst.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="header">
        <div class="container">
            <h1>Customer</h1>
        </div>
    </div>
    <div class="row">
        <div class="sidebar">
            <ul>
                <li><a href="../admin.php">Dashboard</a></li>
                <li><a href="Data.php">Traveler Table</a></li>
            </ul>
        </div>
        <div class="content">
            <div class="container">
                <h1>Customer Data</h1>
                <form id="customerForm">
                    <div class="form-group">
                        <label for="namaLengkap">Nama Lengkap</label>
                        <input type="text" class="form-control" id="namaLengkap" name="namaLengkap" placeholder="Masukkan Nama Lengkap">
                    </div>
                    <div class="form-group">
                        <label for="jenisKelamin">Jenis Kelamin</label>
                        <select class="form-control" id="jenisKelamin" name="jenisKelamin">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="umur">Umur</label>
                        <input type="number" class="form-control" id="umur" name="umur" placeholder="Masukkan Umur">
                    </div>
                    <div class="form-group">
                        <label for="hargaPaket">Harga Paket</label>
                        <input type="number" class="form-control" id="hargaPaket" name="hargaPaket" placeholder="Masukkan Harga Paket">
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Masukkan Tanggal">
                    </div>
                    <button type="submit">Submit</button>
                </form>
                <div id="response"></div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#customerForm').on('submit', function(e) {
                e.preventDefault();

                $.ajax({
                    type: 'POST',
                    url: 'submit_customer.php',
                    data: $(this).serialize(),
                    success: function(response) {
                        $('#response').html(response);
                        $('#customerForm')[0].reset();
                    },
                    error: function() {
                        $('#response').html('Error in form submission.');
                    }
                });
            });
        });
    </script>
</body>
</html>
