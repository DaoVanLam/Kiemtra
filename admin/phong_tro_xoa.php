<?php 
	include("../config/db_config.php");
	$ketnoi = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
	mysqli_set_charset($ketnoi, 'UTF8');

	$phong_tro_id = $_GET['phong_tro_id'];

	$sql = "DELETE FROM `tbl_phong_tro` WHERE phong_tro_id = $phong_tro_id";

	$noidungphongtro = mysqli_query($ketnoi, $sql);

	header("location:quantriphongtro.php");
 ?>