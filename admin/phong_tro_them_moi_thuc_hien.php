<?php 
	include("../config/db_config.php");
	$ketnoi = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
	mysqli_set_charset($ketnoi, 'UTF8');

	$ten_phong_tro = $_POST['txtTenPT'];
	$gia_thue = $_POST['txtGiaThue'];
	$mo_ta = $_POST['txtMoTa'];
	$ghi_chu= $_POST['txtGhiChu'];

	$sql = "INSERT INTO `tbl_phong_tro`(`ten_phong_tro`, `gia_thue`, `mo_ta`, `ghi_chu`) VALUES ('$ten_phong_tro','$gia_thue','$mo_ta','$ghi_chu')";

	$noidungphongtro = mysqli_query($ketnoi, $sql);

	header("location:quantriphongtro.php");
 ?>