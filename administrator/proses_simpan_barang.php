<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$nama_produk = $_POST['nama_produk'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

// update data ke database
mysqli_query($koneksi,"insert into produk values('','$nama_produk','$harga','$stok')");

// mengalihkn halaman kembali ke data_barang.php
header("location:data_barang.php?pesan=simpan");
?>