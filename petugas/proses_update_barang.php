<?php
include '../koneksi.php';

// menangkap data yang di kirim dari form
$id_produk = $_POST['id_produk'];
$nama_produk = $_POST['nama_produk'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];


// update data ke database
mysqli_query($koneksi,"UPDATE produk SET nama_produk='$nama_produk', harga='$harga', stok='$stok' WHERE id_produk='$id_produk'");

// mengalihkn halaman kembali ke data_barang.php
header("location:data_barang.php?pesan=update");
?>