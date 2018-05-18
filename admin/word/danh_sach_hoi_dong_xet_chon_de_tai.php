<?php include_once "../../config.php"; ?>
<?php 
	/*
	$iddt = 0;
	if (isset($_GET['id'])) {
		$iddt = intval($_GET['id']);
	}
	if ($iddt == 0) {
		header("Location: ".$qlkh['HOSTADMIN']."login.php");
	}
	$ketnoi = new clsKetnoi();
	$conn = $ketnoi->ketnoi();
	$hoi = "SELECT dt.MADETAI, dt.TENDETAI, CONCAT(nd.HO, ' ', nd.TEN) as HOTEN FROM detai dt, thanhviendetai tv, nguoidung nd WHERE dt.iddt = '$iddt' AND dt.IDDT = tv.IDDT AND tv.TRACHNHIEM=N'Chủ nhiệm' AND tv.IDND = nd.IDND";
	$q_hoi = mysqli_query($conn, $hoi);
	$detai = mysqli_fetch_assoc($q_hoi);*/
 ?>
<?php /*
 header("Content-Type: application/vnd.ms-word");
 header("Expires: 0");
 header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
 header("content-disposition: attachment;filename=TranDucIT.doc");*/
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<div style="margin: 0;box-shadow: 0;font-size: 17px;">
		<table style="width: 190mm;">
			<tr>
				<td style="font-size: 16px;text-align: center;">BỘ LAO ĐỘNG - THƯƠNG BINH VÀ XÃ HỘI<br><b>TRƯỜNG ĐẠI HỌC SPKT VĨNH LONG</b><hr style="width: 40%"></td>
				<td style="width: 95mm;font-size: 16px;text-align: center;"><b>CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM<br>Độc lập - Tự do - Hạnh phúc</b><hr style="width: 40%"></td>
			</tr>
		</table>
		<table style="width: 190mm;text-align: center;">
			<tr>
				<th colspan="3">DANH SÁCH HỘI ĐỒNG XÉT CHỌN ĐỀ TÀI NCKH CẤP TRƯỜNG<br>Năm học 2017 - 2018</th>
			</tr>
			<tr>
				<td style="width: 1.4cm;"></td>
				<td>(Kèm theo Quyết định số: /QĐ-SPKTVL-NCKH, ngày 09 tháng 01 năm 2018 của Hiệu trưởng Trường Đại học SPKT Vĩnh Long)</td>
				<td style="width: 1.4cm;"></td>
			</tr>
		</table>
		<div style="width: 190mm">
			<p><b>I. DANH SÁCH HỘI ĐỒNG: (Cố định)</b></p>
			<table border="1" style="width: 100%;border-collapse: collapse;">
				<tr style="text-align: center;">
					<th>TT</th>
					<th>HỌ VÀ TÊN</th>
					<th>ĐƠN VỊ</th>
					<th>NHIỆM VỤ</th>
					<th>GHI CHÚ</th>
				</tr>
			</table>
		</div>
	</div>
</body>
</html>