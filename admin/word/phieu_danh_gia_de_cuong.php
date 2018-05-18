<?php include_once "../../config.php"; ?>
<?php 
	$iddt = 0;
	if (isset($_GET['id'])) {
		$iddt = intval($_GET['id']);
	}
	if ($iddt == 0) {
		echo "Không có dữ liệu";
		exit();
	}
	$ketnoi = new clsKetnoi();
	$conn = $ketnoi->ketnoi();
	$hoi = "SELECT dt.MADETAI, dt.TENDETAI, CONCAT(nd.HO, ' ', nd.TEN) as HOTEN FROM detai dt, thanhviendetai tv, nguoidung nd WHERE dt.iddt = '$iddt' AND dt.IDDT = tv.IDDT AND tv.TRACHNHIEM=N'Chủ nhiệm' AND tv.IDND = nd.IDND";
	$q_hoi = mysqli_query($conn, $hoi);
	$detai = mysqli_fetch_assoc($q_hoi);
 ?>
 <?php 
 header("Content-Type: application/vnd.ms-word");
 header("Expires: 0");
 header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
 header("content-disposition: attachment;filename=Phieu danh gia de cuong - ".$detai['TENDETAI'].".doc");
?>
<html>
<head>
    <style>
        p.MsoFooter, li.MsoFooter, div.MsoFooter{
            margin: 0cm;
            margin-bottom: 0001pt;
            mso-pagination:widow-orphan;
            font-size: 12.0 pt;
            text-align: right;
        }


        @page Section1{
            size: 21cm 29.7cm;
            margin: 1cm 1cm 1cm 1cm;
        }
        div.Section1 { page:Section1;}
        p{
        	margin: 0.3cm 0cm 0.3cm 0cm;
        }
    </style>
</head>
<body>
	<div class="Section1">
		<div style="margin: 0;box-shadow: 0;font-size: 17px;">
			<table id="bangheader" border="1" style="border-collapse: collapse;width: 190mm;">
				<tr>
					<td style="text-align: center;width: 20mm"><img src="<?php echo $qlkh['HOSTADMIN'] ?>word/vlute-logo.png" width="70" height="70"></td>
					<th style="font-size: 18.5px;text-align: center;">PHIẾU ĐÁNH GIÁ ĐỀ CƯƠNG<br>ĐỀ TÀI NCKH CẤP TRƯỜNG</th>
					<td style="padding-left: 5mm;width: 45mm;">Mã số: BM-NC-03-00<br>Ngày BH:4/9/2015</td>
				</tr>
			</table>
			<br>
			<div style="width: 170mm;">
				<p><strong><i>1. Mã đề tài:</i></strong>&ensp;<?php echo $detai['MADETAI'] ?></p>
				<p><strong><i>2. Tên đề tài:</i>&ensp;<?php echo $detai['TENDETAI'] ?></strong></p>
				<p><strong><i>3. Chủ nhiệm đề tài:</i></strong>&ensp;<?php echo $detai['HOTEN'] ?></p>
				<p><strong><i>4. Họ tên người đánh giá:</i></strong> </p>
				<p>&emsp;&emsp;&emsp;Học vị, chức danh khoa học: .........................................................................................................</p>
				<p>&emsp;&emsp;&emsp;Chức danh trong hội đồng: ............................................................................................................</p>
				<p><strong><i>5. Họ tên người đánh giá:</i></strong> </p>
				<!-- NỘI DUNG ĐÁNH GIÁ -->
				<table border="1" style="border-collapse: collapse;width: 100%;font-size: 17px;">
					<tr style="text-align: center;">
						<th rowspan="2" style="width: 1cm;">TT</th>
						<th rowspan="2">Tiêu chí đánh giá</th>
						<th colspan="2">Đánh giá</th>
					</tr>
					<tr style="text-align: center;">
						<th style="width: 3cm;">Đạt</th>
						<th style="width: 3cm;">Không đạt</th>
					</tr>
					<tr>
						<td style="text-align: center;">1</td>
						<td style="padding-left: 0.3cm">Mục tiêu đề tài</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td style="text-align: center;">2</td>
						<td style="padding-left: 0.3cm">Tính mới, sáng tạo của đề tài</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td style="text-align: center;">3</td>
						<td style="padding-left: 0.3cm">Phương pháp nghiên cứu</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td style="text-align: center;">4</td>
						<td style="padding-left: 0.3cm">Nội dung nghiên cứu</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td style="text-align: center;">5</td>
						<td style="padding-left: 0.3cm">Tiến độ và sản phẩm dự kiến</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td style="text-align: center;">6</td>
						<td style="padding-left: 0.3cm">Khả năng ứng dụng vảo thực tế</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td style="text-align: center;">7</td>
						<td style="padding-left: 0.3cm">Năng lực, điều kiện của chủ nhiệm và các thành viên</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td style="text-align: center;">8</td>
						<td style="padding-left: 0.3cm">Giải trình về dự kiến kinh phí thực hiện</td>
						<td></td>
						<td></td>
					</tr>
				</table>
				<p><strong><i>6. Khuyến nghị của thành viên Hội đồng:</i></strong>&ensp;về những điểm cần bổ sung, sửa đổi trong Đề cương đề tài cả về nội dung và kinh phí (nếu có):</p>
				<p>..............................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................</p>
				<p><strong>7. Kết luận chung</strong>&ensp;(đạt / không đạt): ...................................................................</p>

				<!-- NGÀY THÁNG VIẾT ĐỀ XUẤT -->

				<p style="text-align: right;margin-top: 4mm;padding-right: 1mm"><i>Vĩnh Long</i>, ngày ...... tháng ...... năm ......</p>
				<!-- KÝ TÊN XÁC NHẬN -->
				<table style="width: 190mm;">
					<tr>
						<td></td>
						<td style="text-align: center;width: 70mm;"><b>Người đánh giá</b><br><i>(Ký, Ghi rõ họ & tên)</i></td>
					</tr>
				</table>

			</div>
		</div>
	</div>
</body>
</html>