<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Images\Vintage and Retro Holiday Travel Agent Logo.png" />
    <link rel="stylesheet" href="css\index.css">
    <title>Lombok TravelGo</title>
    <link rel="stylesheet" href="css\carousel.css">
</head>
<body>
    <table width="20%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td width="5%" valign="top">
                <img src="Images\LOMBOK TRAVEL.png" alt="" width="150px" />
            </td>
            <td width="80%" valign="top">
                <h1 id="title">Lombok TravelGo</h1>
                <nav>
                    <a href="#" id="homeLink">Home</a>
                    <a href="#" id="registerLink">Sign Up</a>
                    <a href="#" id="loginLink">Login</a>
                </nav>
            </td>
        </tr>
    </table>
    <main>
        <section id="top-attractions">
            <center>
                <h2>Discover Top Attractions in Lombok</h2>
            </center>
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <img src="Images\RinS.jpg" style="width:100%">
                    <div class="text">Mount Rinjani</div>
                </div>
                
                <div class="mySlides fade">
                  <img src="Images\PinkO.jpg" style="width:100%">
                  <div class="text">Pink Beach</div>
                </div>
                
                <div class="mySlides fade">
                  <img src="Images\GilZ.png" style="width:100%">
                  <div class="text">The Gilis</div>
                </div>
                
                </div>
                <br>
                
                <div style="text-align:center">
                  <span class="dot"></span> 
                  <span class="dot"></span> 
                  <span class="dot"></span> 
                </div>
            <ul id="attractionList">
                <li>
                    <h3>Mount Rinjani</h3>
                    <img src="Images\RinS.jpg" width="150px">
                    <p>Mount Rinjani is an active volcano and the second highest in Indonesia. The mountain is a popular destination for hiking and trekking.</p>
                </li>
                <li>
                    <h3>Gili Islands</h3>
                    <img src="Images\GilZ.png" alt="Gili Islands" width="150px">
                    <p>Gili Islands is a collection of three small islands (Gili Trawangan, Gili Meno, and Gili Air) known for their white sand beaches and clear waters. It's a perfect destination for snorkeling and diving.</p>
                </li>
                <li>
                    <h3>Pink Beach (Tangsi Beach)</h3>
                    <img src="Images\PinkO.jpg" alt="Pink Beach" width="150px">
                    <p>A unique beach located in the NTB province of Lombok with pink-colored sand resulting from the mixture of white sand and red coral fragments. It's a great place for swimming and sunbathing.</p>
                </li>
            </ul>
        </section>
    </main>
    <footer>
        <span id="copyright">Copyright &copy; 2024 Lombok TravelGo</span>
    </footer>

    <script src="Javascript\carousel.js"></script>
    <script>
        // 1. Memperbarui judul halaman berdasarkan konten yang ditampilkan
        document.title = document.getElementById("title").innerText;

        // 2. Menambahkan event listener untuk tautan
        document.getElementById("homeLink").addEventListener("click", function() {
            // Mengarahkan pengguna ke halaman Home
            window.location.href = "index.php";
        });

        document.getElementById("registerLink").addEventListener("click", function() {
            // Mengarahkan pengguna ke halaman Sign Up
            window.location.href = "Register.php";
        });

        document.getElementById("loginLink").addEventListener("click", function() {
            // Mengarahkan pengguna ke halaman Login
            window.location.href = "login.php";
        });

        // 3. Menambahkan fitur untuk memperbarui tahun pada footer secara otomatis
        var currentYear = new Date().getFullYear();
        document.getElementById("copyright").innerText += " " + currentYear;
    </script>
</body>
</php>
