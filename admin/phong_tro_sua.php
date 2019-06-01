<html>
<head>
	<meta charset="utf-8">
	<title>Phòng trọ thêm mới</title>
	<link rel="stylesheet" type="text/css" href="./css/phongcach.css">
</head>

<body>
	<h1>CẬP NHẬT PHÒNG TRỌ</h1>
	
	<hr>
		<h4><a href="trang_chu.php">Trang chủ</a> | <a href="gioi_thieu.php">Giới thiệu</a> | <a href="tin_tuc.php">Tin tức</a> | <a href="phong_tro.php">Phòng trọ</a> | <a href="lien_he.php">Liên hệ</a></h4>
	<hr>
	<?php 
		$phong_tro_id = $_GET['phong_tro_id'];

		include("../config/db_config.php");
			$ketnoi = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
		mysqli_set_charset($ketnoi, 'UTF8');

		$sql = "SELECT * FROM tbl_phong_tro WHERE phong_tro_id = $phong_tro_id";
		$noidungphongtro = mysqli_query($ketnoi, $sql);

		$row = mysqli_fetch_array($noidungphongtro);
	?>
	<form name="frmPhongtro" action="phong_tro_cap_nhat_thuc_hien.php" method="post">
	<table>
		
		<tr>
			<td style="width: 150px">Tên phòng trọ</td>
			<td>
				<input type="text" name="txtTenPT" style="width: 450px" value="<?php  echo $row['ten_phong_tro'] ?>">
			</td>
		</tr>
		<tr>
			<td style="width: 150px">Giá thuê</td>
			<td>
				<input type="text" name="txtGiaThue" style="width: 450px" value="<?php  echo $row['gia_thue'] ?>">
			</td>
		</tr>
		<tr>
			<td style="width: 150px">Mô tả</td>
			<td>
				<textarea name="txtMoTa" style="width: 450px; height: 140px;"><?php  echo $row['mo_ta'] ?></textarea>
			</td>
		</tr>
		<tr>
			<td style="width: 150px">Ghi chú</td>
			<td>
				<textarea name="txtGhiChu" style="width: 450px; height: 140px;"><?php  echo $row['ghi_chu'] ?></textarea>
			</td>
		</tr>
		<tr>
			<td  colspan="2" style="text-align: center;">
				<input type="hidden" value="<?php  echo $phong_tro_id ?>" name="phong_tro_id">
				<input type="submit" name="btnSubmit" value="Cập nhật">
			</td>
		</tr>
	</table>
	</form>


</body>
</html>