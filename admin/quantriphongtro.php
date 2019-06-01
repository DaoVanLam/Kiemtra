<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Quản trị phòng trọ</title>
	<link rel="stylesheet" type="text/css" href="./css/phongcach.css">

</head>
<body>
	<h1>QUẢN TRỊ PHÒNG TRỌ</h1>
	
	<p><a href="../phong_tro_them_moi.php"><img src="images/add.png" style="width: 24px;" alt=""></a></p>
	<table>
		<tr>
			<td>Tên phòng trọ</td>
			<td>Sửa</td>
			<td>Xóa</td>
		</tr>
	<hr>
		<?php 
			include("../config/db_config.php");
			$ketnoi = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
			mysqli_set_charset($ketnoi, 'UTF8');

			$sql = "SELECT * FROM tbl_phong_tro";
			$noidungphongtro = mysqli_query($ketnoi, $sql);

			while ($row = mysqli_fetch_array($noidungphongtro)) {
		 ?>		

		<tr>
			<td><h3><a href="phong_tro_chi_tiet.php"><?php echo $row['ten_phong_tro'] ?></a></h3></td>
			<td><a href="phong_tro_sua.php?phong_tro_id=<?php echo $row['phong_tro_id'] ?>"><img src="images/edit.png" style="width: 24px;" alt=""></a></td>
			<td><a href="phong_tro_xoa.php?phong_tro_id=<?php echo $row['phong_tro_id'] ?>"><img src="images/delete.jpg" style="width: 24px;" alt=""></a></td>
		</tr>
		
	
	<?php } ?>

	</table>
</body>
</html>