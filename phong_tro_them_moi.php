<html>
<head>
	<meta charset="utf-8">
	<title>Phòng trọ thêm mới</title>
	<link rel="stylesheet" type="text/css" href="./css/phongcach.css">
</head>

<body>
	<h1>Thêm mới phòng trọ</h1>
	
	<hr>
		<h4><a href="trang_chu.php">Trang chủ</a> | <a href="gioi_thieu.php">Giới thiệu</a> | <a href="tin_tuc.php">Tin tức</a> | <a href="phong_tro.php">Phòng trọ</a> | <a href="lien_he.php">Liên hệ</a></h4>
	<hr>

	<form name="frmPhongtro" action="admin/phong_tro_them_moi_thuc_hien.php" method="post">
	<table>
		<tr>
			<td style="width: 150px">Tên phòng trọ</td>
			<td>
				<input type="text" name="txtTenPT" style="width: 450px">
			</td>
		</tr>
		<tr>
			<td style="width: 150px">Giá thuê</td>
			<td>
				<input type="text" name="txtGiaThue" style="width: 450px">
			</td>
		</tr>
		<tr>
			<td style="width: 150px">Mô tả</td>
			<td>
				<textarea name="txtMoTa" style="width: 450px; height: 140px;"></textarea>
			</td>
		</tr>
		<tr>
			<td style="width: 150px">Ghi chú</td>
			<td>
				<input type="text" name="txtGhiChu" style="width: 450px">
			</td>
		</tr>
		<tr>
			<td  colspan="2" style="text-align: center;">
				<input type="submit" name="btnSubmit" value="Thêm mới">
			</td>
		</tr>
	</table>
	</form>


</body>
</html>