<?php

if (empty($_SESSION['username']) AND empty($_SESSION['password'])){
  exit("<script>window.alert('Silakan Login Terlebih Dahulu');
	 window.location='../index.php';</script>");
}