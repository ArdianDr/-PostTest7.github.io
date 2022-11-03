<?php
session_start();
require 'koneksi.php';

if (!isset($_SESSION['login'])) {
    header('index2.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Posttest 5 Pemprograman Web</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
</head>
<body>
    <!-- navbar -->
    <nav class="navbar">
        <div class="logo" id="dom1"><img src="img/logo.png" alt="" width="150px"> </div>
        <ul class="nav-links">
            <label for="checkbox_toggle" class="menuu">&#9776;</label>
            <div class="menu">
                <li><a href="#makanan">MENU</a></li>
                <li><a href="#">HOME</a></li>
                <li><a href="aboutme.html">ABOUT</a></li>
                <li><a href="role.html">SIGN IN</a></li>
                <li><a href="index.php">
                    <form action="logout.php" method="post"><button type="submit" name="logout"
                        class="lgt">logout</button>
                    </form>
                    </a></li>
                <li><i class="bi-brightness-high-fill" id="toggleDark"></i></li>
                    
            </div>
          </ul>
    </nav>

    <!-- iklan -->
    <div class="row">
        <div class="col-2">
          <img id="makanan" src="img/iklann.png" alt="pict1" height="300vh" />
        </div>
    </div>
    <!-- produk -->
    <h1 class="pheading">Makanan Terlaris</h1>

    <section class="sec" >
        <div class="products">
            <!-- str card -->
            <div class="card" id="dom1">
                <div class="img"><img src="img/sate.jfif" alt=""></div>
                <div class="desc">Jawa Barat</div>
                <div class="title">SATE MADURA</div>
                <div class="box">
                    <div class="price">Rp25.000</div>
                    <button class="btn"><a href="phpcrud/tambah.php">Beli</a></button>
                </div>
            </div>
            <!-- end -->

            <!-- str card -->
            <div class="card" id="dom2">
                <div class="img"><img src="img/rendang.jfif" alt=""></div>
                <div class="desc" id="huruf">Sumatera Barat</div>
                <div class="title" id="huruf1">RENDANG</div>
                <div class="box">
                    <div class="price">Rp35.000</div>
                    <button class="btn"><a href="phpcrud/tambah.php">Beli</a></button>
                </div>
            </div>
            <!-- end -->

            <!-- str card -->
            <div class="card" >
                <div class="img"><img src="img/coto.jfif" alt=""></div>
                <div class="desc">Sulawesi Selatan</div>
                <div class="title">COTO MAKASSAR</div>
                <div class="box">
                    <div class="price">Rp20.000</div>
                    <button class="btn"><a href="phpcrud/tambah.php">Beli</a></button>
                </div>
            </div>
            <!-- end -->

            <!-- str card -->
            <!-- <div class="card">
                <div class="img"><img src="img/sambal gami.jpg" alt=""></div>
                <div class="desc">Kalimantan Timur</div>
                <div class="title">Sambal Gami Ayam</div>
                <div class="box">
                    <div class="price">Rp25.000</div>
                    <button class="btn">Beli</button>
                </div>
            </div> -->
            <!-- end -->
        </div>
    </section>
    
    <footer>
        <div class="bottom">
          <p>Copyright ©2022 by Muhammad Ardiansyah Darmawan </p>
        </div>
    </footer>

    <script src="test.js"></script>
</body>
</html>