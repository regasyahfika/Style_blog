<?php
  require '../koneksi.php';

// ambil ID yang mau diedit
  $id = $_GET['id'];

  // Akan dijalankan jika tombol simpan diklik
  if (isset($_POST['simpan'])) {
    $nama = mysqli_escape_string($koneksi, $_POST['nama']);

    $query  = "UPDATE kategori SET nama = '$nama' WHERE id = $id";
    $simpan = mysqli_query($koneksi, $query);

    if ($simpan) {
      header("Location: daftar_kategori.php?id=$id");
    } else {
      echo '<b>Query database gagal!</b><br>';
      echo mysqli_error($koneksi);
      exit;
    }
  }


  // ambil data berdasarkan ID
  $data = mysqli_query($koneksi, "SELECT * FROM kategori WHERE id=$id LIMIT 0,1");

  if ($data) {
    $data = mysqli_fetch_assoc($data);
  } else {
    exit('Posting tidak ditemukan.');
  }

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
			<form id="form_tambah" method="post">
                 <ul>
                    <li>
                        <label>Name</label>
                        <input type="text" name="nama" id="name" value="<?php echo $data['nama']; ?>" maxlength="40" required>
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

