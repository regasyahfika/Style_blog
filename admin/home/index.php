<?php 
    session_start();
    require '../ceksession.php';
    require '../koneksi.php';

    $username = $_SESSION['username'];
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
                <li><a href="index.php" class="pilih">Home</a></li>
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
        <?php 
        $query = mysqli_query($koneksi, "SELECT nama_lengkap FROM admin WHERE id=1");
        while ($data = mysqli_fetch_array($query)):    
            ?>
            <span id="welcome_a">SELAMAT DATANG <?php echo $data['nama_lengkap']; ?></span>
            <?php 
            endwhile;
             ?>
            <span id="welcome_b">
                <!-- <div id="eror">Eror Pesan</div> -->
                <div id="succes">Silahkan dipilih Menu yang tersedia</div>
            </span>
        </div>
    </div>
</div>
</body>
</html>