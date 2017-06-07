<?php 
	require '../koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Administrator</title>
    <link href="../asset/css/style.css" rel="stylesheet" type="text/css">
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
        <div id="dua_ab">
			<h2>Daftar Biodata</h2>
		    <p>[ <a href="tambah_kategori.php">Tambah Data</a> ] </p>
			<table width="650px" border="1">
		        <tr style="background:#ccc">
		            <th width="10%">ID</th>
		            <th width="40%">Nama</th>
		            <th width="20%">Aksi</th>
		        </tr>
		        <?php
		        $no = 1; 
		        $query = mysqli_query($koneksi, "SELECT * FROM Kategori");
		        while ($data = mysqli_fetch_array($query)):    
				?>
				<tr>
					<td align="center"><?php echo $no ?></td>
					<td><?php echo $data['nama']; ?></td>
					<td>
						<a href="edit_kategori.php?id=<?php echo $data['id']; ?>">
						Ubah
						</a>
						<a href="hapus_kategori.php?id=<?php echo $data['id']; ?>">
						Hapus
						</a>
					</td>
				</tr>
				<?php 
				$no++;
				endwhile;
				?>
			</table>
		</div>
	</div>
</div>
</body>
</html>