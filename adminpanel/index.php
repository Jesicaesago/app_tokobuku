<?php
require "session.php";
require "../koneksi.php";

$queryBuku = mysqli_query($con, "SELECT * FROM buku");
$jumlahBuku = mysqli_num_rows($queryBuku);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css/font-awesome.min.css">
</head>

<style>
    .summary-kategori {
        background-color: #baa1e9;
        border-radius: 13px;
    }

    .summary-produk {
        background-color: #baa1e9;
        border-radius: 13px;
    }

    .no-decoration {
        text-decoration: none;
    }
</style>

<body>
    <?php require "navbar.php"; ?>
    <div class="container mt-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <i class="fa-solid fa-house" style="color: #000000;"></i> Home
                </li>
            </ol>
        </nav>
        <h2>Halo admin</h2>

        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="summary-kategori p-4">
                        <div class="row">
                            <div class="col-5">
                                <i class="fa-solid fa-list fa-7x" style="color: #ffffff;"></i>
                            </div>
                            <div class="col-6 text-white">
                                <h3 class="fs-3">Kategori</h3>
                                <p class="fs-5"><?php echo $jumlahBuku; ?> Kategori</p>
                                <p><a href="tambah.php" class="text-white no-decoration">Lihat Detail</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="summary-produk p-4">
                        <div class="row">
                            <div class="col-5 ">
                            <i class="fa-solid fa-book fa-8x" style="color: #ffffff;"></i>
                            </div>
                            <div class="col-6 text-white">
                                <h3 class="fs-3">Buku</h3>
                                <p class="fs-5"><?php echo $jumlahBuku; ?> Buku</p>
                                <p><a href="tambah.php" class="text-white no-decoration">Lihat Detail</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../fontawesome/js/all.min.js"></script>
</body>

</html>