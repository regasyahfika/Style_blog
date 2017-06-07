<?php  
  
  include '../koneksi.php';

  if (isset($_POST['simpan'])) {
    $judul = mysqli_escape_string($koneksi, $_POST['judul']);
    $isi_berita = mysqli_escape_string($koneksi, $_POST['isi_berita']);
    $tgl = $_POST['tanggal'];
    $id_kategori = $_POST['kategori'];
    $lokasi_file = $_FILES['fupload']['tmp_name'];
    $nama_file   = $_FILES['fupload']['name'];

    move_uploaded_file($lokasi_file,"../asset/images/$nama_file");
    $query  = "UPDATE berita SET judul_berita= '$judul', id_kategori= '$id_kategori', isi_berita= '$isi_berita', tanggal= '$tgl', gambar= '$nama_file' WHERE id ='$_POST[id]' ";
    $simpan = mysqli_query($koneksi, $query);

    if ($simpan) {
      header("Location: daftar_berita.php?id=$id");
    } else {
      echo '<b>Query database gagal!</b><br>';
      echo mysqli_error($koneksi);
      exit;
    }
  }