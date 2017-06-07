<?php
  require '../koneksi.php';

// ambil ID yang mau diedit
  $id = $_GET['id'];

  if (isset($_POST['simpan'])) {
    $judul = mysqli_escape_string($koneksi, $_POST['judul']);
    $isi_berita = mysqli_escape_string($koneksi, $_POST['isi_berita']);
    $tgl = $_POST['tanggal'];
    $id_kategori = $_POST['kategori'];
    $lokasi_file = $_FILES['fupload']['tmp_name'];
    $nama_file   = $_FILES['fupload']['name'];

    move_uploaded_file($lokasi_file,"../asset/images/$nama_file");
    $query  = "UPDATE berita SET judul_berita= '$judul', id_kategori= '$id_kategori', isi_berita= '$isi_berita', tanggal= '$tgl', gambar= '$nama_file' WHERE id ='$id' ";
    $simpan = mysqli_query($koneksi, $query);

    if ($simpan) {
      header("Location: daftar_berita.php?id=$id");
    } else {
      echo '<b>Query database gagal!</b><br>';
      echo mysqli_error($koneksi);
      exit;
    }
  }


  // ambil data berdasarkan ID
  $data = mysqli_query($koneksi, "SELECT * FROM berita WHERE id=$id LIMIT 0,1");

  if ($data) {
    $data = mysqli_fetch_assoc($data);
  } else {
    exit('Posting tidak ditemukan.');
  }

  $kategori = mysqli_query($koneksi, "SELECT * FROM kategori");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Administrator</title>
    <link href="../asset/css/style.css" rel="stylesheet" type="text/css">

    <style type="text/css">
		label.error { float: none; color: red; padding-left: .5em; vertical-align: top; }
		.labelfrm {
			display:block;
			font-size:small;
			margin-top:5px;
		}
	</style>
	<script type="text/javascript" src="../asset/js/jquery.min.js"></script>
	<script type="text/javascript" src="../asset/js/jquery.validate.min.js"></script>
</head>
<body>
<div id="satu">
    <div id="satu_con">
        <div id="satu_a">
            <span class="satu_aa">Halaman Administrator</span>
            <span class="satu_ab">Website Ku</span>
        </div>
        <div id="satu_b">
            <ul>
                <li><a href="../home/index.php" class="pilih">Home</a></li>
                <li>
                    <a href="../berita/daftar_berita.php">Berita</a>
                    <a href="../kategori/daftar_kategori.php">Kategori</a>
                    <a href="../komentar/daftar_komentar.php">Komentar</a>
                    <a href="../logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="dua">
    <div id="dua_con">
        <div id="dua_a">
            <div id="dua_aa">
                <span id="dua_aab">Tambah Data Pelayanan</span>
                <span id="dua_aaa">
                	<input type="button" value="Kembali" onclick="self.history.back()" class="tambah">
                </span>
            </div>
            <div id="dua_ab">
      			<form id="form_tambah" method="post" enctype="multipart/form-data">
                 <ul>
                    <li>
                        <label>Judul</label>
                        <input type="text" name="judul" id="name" value="<?php echo $data['judul_berita']; ?>" maxlength="40" required>
                    </li>
                    <li>
                        <label>Kategori</label>
                        <select name="kategori" id="kategori">
                            <?php 
                            while ($kat = mysqli_fetch_assoc($kategori)):
                              echo '<option value="'.$kat['id'].'">'.$kat['nama'].'</option>';
                            endwhile ?>
                        </select>
                    </li>
                    <li>
                        <label>Isi</label>
                        <textarea name="isi_berita" id="isi" cols="50" rows="10" required><?php echo $data['isi_berita']; ?></textarea>
                    </li>
                    <li>
                        <label>Tanggal</label>
                        <input type="date" id="tanggal" name="tanggal" value="<?php echo $data['tanggal']; ?>">
                    </li>
                    <li>
                        <label>Gambar</label>
                        <img src="../asset/images/<?php echo $data['gambar']; ?>" width="100px" height="70px" alt="">
                    </li>
                    <li>
                        <label>Gambar Baru</label>
                        <input type="file" name="fupload">
                    </li>
                
                    <li>
                        <label>&nbsp;</label>
                        <input type="submit" name="simpan" value="Submit" class="submit">
                    </li>
                </ul> 
              </form> 
            </div>
        </div>
    </div>
</div>
</body>
</html>