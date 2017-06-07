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
                    <a href="../komentar/daftar_komentar.php">Komentar</a>
                    <a href="../logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="dua">
    <div id="dua_con">
        <div id="dua_ab">
			<h2>Daftar Komentar</h2>
			<table width="650px" border="1">
		        <tr style="background:#ccc">
		            <th width="10%">ID</th>
		            <th width="40%">Nama</th>
		            <th width="20%">Email</th>
		            <th width="20%">No Hp</th>
		            <th width="20%">Komentar</th>
		            <th width="20%">Aksi</th>
		        </tr>
		        <?php
		        $no = 1; 
		        $query = mysqli_query($koneksi, "SELECT * FROM komentar");
		        while ($data = mysqli_fetch_array($query)):    
				?>
				<tr>
					<td align="center"><?php echo $no ?></td>
					<td><?php echo $data['nama']; ?></td>
					<td><?php echo $data['email']; ?></td>
					<td><?php echo $data['telp']; ?></td>
					<td><?php echo $data['komen']; ?></td>
					<td>
						<a href="hapus_komentar.php?id=<?php echo $data['id']; ?>">
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