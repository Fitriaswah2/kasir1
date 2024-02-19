<?php
include "header.php";
include "navbar.php";
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <div class="card mt-2">
    <div class="card-body">
      <div class="row">
        <div class="col-sm-4">
          <div class="card">
            <div class="card-body">
              Data Barang
              <?php
              include '../koneksi.php';
              $data_produk = mysqli_query($koneksi, "SELECT * FROM produk");
              $jumlah = mysqli_num_rows($data_produk);
              ?>
              <h3><?php echo $jumlah; ?></h3>
              <a href="data_barang.php" class="btn btn-outline-primary btn-sm">Detail</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <div class="card-body">
              Data Pembelian
              <?php
              include '../koneksi.php';
              $data_penjualan = mysqli_query($koneksi, "SELECT * FROM penjualan");
              $jumlah_penjualan = mysqli_num_rows($data_penjualan);
              ?>
              <h3><?php echo $jumlah_penjualan; ?></h3>
              <a href="pembelian.php" class="btn btn-outline-primary btn-sm">Detail</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <div class="card-body">
              Data Pengguna
              <?php
              include '../koneksi.php';
              $data_petugas = mysqli_query($koneksi, "SELECT * FROM petugas");
              $jumlah_petugas = mysqli_num_rows($data_petugas);
              ?>
              <h3><?php echo $jumlah_petugas; ?></h3>
              <a href="data_pengguna.php" class="btn btn-outline-primary btn-sm">Detail</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="card mt-2">
    <div class="card-body">
      <p>Selamat datang dihalaman petugas, silahkan anda bisa mengakses beberapa fitur</p>
    </div>
  </div>
  <?php
  include "footer.php";
  ?>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>