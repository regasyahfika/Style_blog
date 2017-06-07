<?php
  require '../koneksi.php';

 
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
                <span id="dua_aab">Tambah Data</span>
                <span id="dua_aaa">
                	<input type="button" value="Kembali" onclick="self.history.back()" class="tambah">
                </span>
            </div>
            <div id="dua_ab">
			<form method="POST" action="action_tambah.php" enctype="multipart/form-data">
                 <ul>
                    <li>
                        <label>Judul</label>
                        <input type="text" name="judul" maxlength="40" required>
                    </li>
                    <li>
                        <label>Kategori</label>
                        <select name="kategori">
                            <?php
                            $kategori = mysqli_query($koneksi, 'SELECT * FROM kategori'); 
                            while ($kat = mysqli_fetch_array($kategori)) {
                              echo '<option value="'.$kat['id'].'">'.$kat['nama'].'</option>';
                            } ?>
                        </select>
                    </li>
                    <li>
                        <label>Isi</label>
                        <textarea name="isi_berita" cols="50" rows="10" required></textarea>
                    </li>
                    <li>
                        <label>Tanggal</label>
                        <input type="date" name="tanggal" value="<?php echo date('Y-m-d') ?>">
                    </li>
                
                    <li>
                        <label>Gambar</label>
                        <input type="file" name="fupload">
                    </li>
                    <li>
                        <label>&nbsp;</label>
                        <input type="submit" value="Submit" class="submit">
                    </li>
                </ul>	
				</form>	
            </div>
        </div>
    </div>
</div>
</body>
</html>
