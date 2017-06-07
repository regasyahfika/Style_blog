<?php
  include '../koneksi.php';

  $lokasi_file = $_FILES['fupload']['tmp_name'];
  $nama_file   = $_FILES['fupload']['name'];

  if (!empty($lokasi_file)){  
   move_uploaded_file($lokasi_file,"../asset/images/$nama_file");
   $masuk = mysqli_query($koneksi, "INSERT INTO berita(judul_berita, id_kategori, isi_berita, tanggal, gambar) VALUES('$_POST[judul]','$_POST[kategori]','$_POST[isi_berita]','$_POST[tanggal]','$nama_file')");
  }
  // Apabila tidak ada gambar yang di upload
  else{
  $masuk = mysqli_query($koneksi, "INSERT INTO berita(judul_berita,id_kategori,isi_berita, tanggal) VALUES('$_POST[judul]','$_POST[kategori]','$_POST[isi_berita]','$_POST[tanggal]')");
  }

if($masuk){   
  header('location: daftar_berita.php');
}
else{
  header('location: tambah_berita.php');
} 

?>