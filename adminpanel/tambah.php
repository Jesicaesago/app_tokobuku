<?php
require "session.php"; // Sesuaikan dengan kebutuhan otentikasi
require "../koneksi.php";

// Jika formulir disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kode_buku = $_POST["kode_buku"];
    $nama_buku = $_POST["nama_buku"];
    $harga_buku = $_POST["harga_buku"];

    // Lakukan validasi input jika diperlukan

    // Simpan data ke database
    $queryTambahBuku = mysqli_query($con, "INSERT INTO buku (kode_buku, nama_buku, harga_buku) VALUES ('$kode_buku', '$nama_buku', '$harga_buku')");

    if ($queryTambahBuku) {
        // Redirect ke halaman sukses atau halaman lain yang sesuai
        header("Location: tambah_buku_sukses.php");
        exit();
    } else {
        // Tampilkan pesan error jika ada masalah saat menyimpan ke database
        $error_message = "Gagal menambahkan buku. Silakan coba lagi.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css/font-awesome.min.css">
</head>

<body>
    <?php require "navbar.php"; ?>
    <div class="container mt-5">
        <h2>Tambah Buku</h2>
        <?php
        // Tampilkan pesan error jika ada
        if (isset($error_message)) {
            echo '<div class="alert alert-danger" role="alert">' . $error_message . '</div>';
        }
        ?>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
            <div class="mb-3">
                <label for="kode_buku" class="form-label">Kode Buku:</label>
                <input type="text" class="form-control" id="kode_buku" name="kode_buku" required>
            </div>
            <div class="mb-3">
                <label for="nama_buku" class="form-label">Nama Buku:</label>
                <input type="text" class="form-control" id="nama_buku" name="nama_buku" required>
            </div>
            <div class="mb-3">
                <label for="harga_buku" class="form-label">Harga Buku:</label>
                <input type="text" class="form-control" id="harga_buku" name="harga_buku" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../fontawesome/js/all.min.js"></script>
</body>

</html>
