<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Phòng trọ</title>
	<link rel="stylesheet" type="text/css" href="./css/phongcach.css">
</head>
<body>
	<h1>Phòng trọ</h1>
	
	<hr>
		<h4><a href="trang_chu.php">Trang chủ</a> | <a href="gioi_thieu.php">Giới thiệu</a> | <a href="tin_tuc.php">Tin tức</a> | <a href="phong_tro.php">Phòng trọ</a> | <a href="lien_he.php">Liên hệ</a></h4>
	<hr>

	<h3 style="color: red; text-align: center; text-transform: uppercase;">DANH SÁCH Phòng trọ</h3>

	<div>
		<?php 
			include("./config/db_config.php");
			$ketnoi = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
			mysqli_set_charset($ketnoi, 'UTF8');

			$sql = "SELECT * FROM tbl_phong_tro";
			$noidungphongtro = mysqli_query($ketnoi, $sql);

			while ($row = mysqli_fetch_array($noidungphongtro)) {
		 ?>	
		<div style="float: left; width: 210px; height: 310px;">
			<a href="phong_tro_chi_tiet.php"><img src="./img/xsmax.jpg" width="200px" height="auto"></a>
		</div style="float: left; width: 740px;">
			<h3><a href="phong_tro_chi_tiet.php"><?php echo $row['ten_phong_tro'] ?></a></h3>
			<p><?php echo $row['gia_thue'] ?></p>
			<p><?php echo $row['mo_ta'] ?></p>
			<p><?php echo $row['ghi_chu'] ?></p>
		<div>

		</div>
		<?php } ?>
	</div>
</body>
</html>