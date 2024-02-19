<?php
// koneksi database
include '../koneksi.php';

// menangkap data id yang di kirim dari form
$id_produk = $_POST['id_produk'];

// menginput data ke database
mysqli_query($koneksi, "DELETE FROM produk WHERE id_produk='$id_produk'");

// mengalihkn halaman kembali ke pembelian.php
header("location:data_barang.php?pesan=hapus");
?>