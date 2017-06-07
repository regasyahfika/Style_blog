<?php  

require '../koneksi.php';

$id = $_GET['id'];

	$query = mysqli_query($koneksi, "DELETE FROM kategori WHERE id=$id");

	if ($query) {
		echo "<script>alert('Data Berhasil di hapus'); window.location = 'daftar_kategori.php'; </script>";
	} else {
		echo "<script>alert('Data tidak berhasil di hapus'); window.location = 'daftar_kategori.php'; </script>";
	}
