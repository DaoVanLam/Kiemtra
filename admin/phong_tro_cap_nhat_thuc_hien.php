<?php 
	include("../config/db_config.php");
	$ketnoi = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
	mysqli_set_charset($ketnoi, 'UTF8');

	$phong_tro_id = $_POST['phong_tro_id'];
	$ten_phong_tro = $_POST['txtTenPT'];
	$gia_thue = $_POST['txtGiaThue'];
	$mo_ta = $_POST['txtMoTa'];
	$ghi_chu = $_POST['txtGhiChu'];

	$sql = "UPDATE `tbl_phong_tro` SET `ten_phong_tro` = '$ten_phong_tro', `gia_thue` = '$gia_thue', `mo_ta` = '$mo_ta', `ghi_chu` = '$ghi_chu' WHERE phong_tro_id = $phong_tro_id";
	$noidungphongtro = mysqli_query($ketnoi, $sql);

	header("location:quantriphongtro.php");
 ?>