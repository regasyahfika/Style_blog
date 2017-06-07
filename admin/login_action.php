<?php

session_start();

include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username' AND password='$password'");

$data = mysqli_fetch_array($query);

if ($data) {
    $_SESSION['username'] = $data['username'];
    header('Location: home/index.php');
}else {
    header('Location: index.php');
}
