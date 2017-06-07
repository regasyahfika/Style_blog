<?php
// Konfigurasi koneksi database
$db_user = 'root';
$db_pass = 'root'; //jika tidak ada password kosongkan
$db_name = 'dbberita'; 

// Membuat koneksi ke database
$koneksi = mysqli_connect('localhost', $db_user, $db_pass, $db_name);

// Menangani error jika koneksi gagal
if (!$koneksi) {
	echo '<b>Koneksi database gagal!</b><br>';
	echo mysqli_connect_error();
	exit;
}