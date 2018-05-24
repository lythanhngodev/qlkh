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
	session_start();
	$ketnoi = new clsKetnoi();
	$conn = $ketnoi->ketnoi();
	$hoi = "SELECT dt.MADETAI, dt.TENDETAI, CONCAT(nd.HO, ' ', nd.TEN) as HOTEN, nd.IDND, dt.IDDT FROM detai dt, thanhviendetai tv, nguoidung nd WHERE dt.iddt = '$iddt' AND dt.IDDT = tv.IDDT AND tv.TRACHNHIEM=N'Chủ nhiệm' AND tv.IDND = nd.IDND";
	$q_hoi = mysqli_query($conn, $hoi);
	$detai = mysqli_fetch_assoc($q_hoi);
	function don_vi_cong_tac($idnd){
	    $ketnoi = new clsKetnoi();
	    $conn = $ketnoi->ketnoi();
	    $query = "SELECT k.TENKBM FROM nguoidung_khoabomon nk, khoabomon k WHERE nk.IDKBM = k.IDKBM AND nk.IDND = '$idnd'";
	    $result = mysqli_query($conn, $query);
	    $r = mysqli_fetch_assoc($result);
	    $ten = $r['TENKBM'];
	    mysqli_close($conn);
	    return $ten;
	}
	function lay_ho_ten($idnd){
	    $ketnoi = new clsKetnoi();
	    $conn = $ketnoi->ketnoi();
	    $query = "SELECT CONCAT(nd.HO, ' ', nd.TEN) as HOTEN FROM nguoidung nd WHERE nd.IDND = '$idnd'";
	    $result = mysqli_query($conn, $query);
	    $r = mysqli_fetch_assoc($result);
	    $ten = $r['HOTEN'];
	    mysqli_close($conn);
	    return $ten;
	}
	function thanh_vien_de_tai($iddt){
	    $ketnoi = new clsKetnoi();
	    $conn = $ketnoi->ketnoi();
	    $query = "SELECT tv.IDTV, CONCAT(nd.HO, ' ', nd.TEN) AS HOTEN FROM thanhviendetai tv, nguoidung nd WHERE tv.IDND = nd.IDND AND tv.IDDT = '$iddt' AND tv.TRACHNHIEM!=N'Chủ nhiệm' ORDER BY tv.IDTV ASC ;";
	    $result = mysqli_query($conn, $query);
	    $r = null;
	    while ($row = mysqli_fetch_assoc($result)) {
	    	$r[] = $row;
	    }
	    mysqli_close($conn);
	    return $r;
	}
 ?>
 <?php 
 header("Content-Type: application/vnd.ms-word");
 header("Expires: 0");
 header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
 header("content-disposition: attachment;filename=Phieu giao nhan san pham (thiet bi).doc");
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
            mso-footer:f1;
            mso-footer-margin:0.5in;
            size: 21cm 29.7cm;
            margin: 1.5cm 1.5cm 1.5cm 1.5cm;
            mso-paper-source:0;
        }
        div.Section1 { page:Section1;}
        p{
        	margin: 0.3cm 0cm 0.3cm 0cm;
        	padding-left: 0.5cm;
        }
    </style>
</head>
<body>
	<div class="Section1">
		<div style="margin: 0;box-shadow: 0;font-size: 17px;">
			<table id="bangheader" border="1" style="border-collapse: collapse;width: 180mm;">
				<tr>
					<td style="text-align: center;width: 20mm"><img src="<?php echo $qlkh['HOSTADMIN'] ?>word/vlute-logo.png" width="70" height="70"></td>
					<th style="font-size: 18.5px;text-align: center;">PHIẾU ĐÁNH GIÁ NGHIỆM THU ĐỀ TÀI<br>ĐỀ TÀI NCKH CẤP TRƯỜNG<br>NĂM HỌC  20 ... – 20 ...</th>
					<td style="padding-left: 5mm;width: 45mm;">Mã số: BM-NC-08-00<br>Ngày BH: 18/4/2018</td>
				</tr>
			</table>
			<br>
			<div style="width: 180mm;">
				<p>1 - Mã đề tài:&ensp;<b><?php echo $detai['MADETAI']; ?></b></p>
				<p>2 - Tên đề tài:&ensp;<b><?php echo $detai['TENDETAI']; ?></b></p>
				<p>3 - Họ và tên chủ nhiệm đề tài:&ensp;<b><?php echo $detai['HOTEN']; ?></b></p>
				<?php if (!empty(thanh_vien_de_tai($detai['IDDT']))) {
					$tv = thanh_vien_de_tai($detai['IDDT']);
					switch (count($tv)) {
						case 0:
							echo "";
							break;
						case 1:
							echo "<p>&ensp;&ensp;&ensp;Thành viên đề tài: <b>".$tv[0]['HOTEN']."</b></p>";
							break;
						default:
							$str = "";
							for ($ii=0; $ii < count($tv) - 1; $ii++) { 
								$str.=$tv[$ii]['HOTEN'].", ";
							}
							$str.=end($tv)['HOTEN'];
							echo "<p>&ensp;&ensp;&ensp;Thành viên đề tài: <b>".$str."</b></p>";
							break;
					}
				} ?>
				<p>4 - Cơ quan chủ trì: <b>Trường Đại học Sư phạm Kỹ thuật Vĩnh Long</b></p>
				<p>5 - Họ và tên uỷ viên đánh giá: ....................................................................................................</p>
				<p>6 - Chấm đánh giá nghiệm thu đề tài theo các tiêu chí:</p>

				<!-- NỘI DUNG ĐÁNH GIÁ -->
				<table border="1" style="border-collapse: collapse;width: 100%;font-size: 17px;">
					<tr style="text-align: center;">
						<th style="width: 1cm;">TT</th>
						<th>Các tiêu chí đánh giá nghiệm thu</th>
						<th style="width: 3cm;">Điểm tối đa</th>
						<th style="width: 3cm;">Điểm đánh giá</th>
					</tr>
					<tr>
						<td style="text-align: center;">1</td>
						<td style="padding-left: 0.3cm;">Mức độ đáp ứng mục tiêu, nội dung, sản phẩm và thời gian thực hiện đề tài đã đăng ký</td>
						<td style="text-align: center;">35</td>
						<td></td>
					</tr>
					<tr>
						<td style="text-align: center;">2</td>
						<td style="padding-left: 0.3cm;">Tính sáng tạo, ý nghĩa khoa học của đề tài (giải pháp hữu ích, sáng chế …)</td>
						<td style="text-align: center;">25</td>
						<td></td>
					</tr>
					<tr>
						<td style="text-align: center;">3</td>
						<td style="padding-left: 0.3cm;">Khả năng ứng dụng, phát triển sau khi kết thúc</td>
						<td style="text-align: center;">20</td>
						<td></td>
					</tr>
					<tr>
						<td style="text-align: center;">4</td>
						<td style="padding-left: 0.3cm;">Mức độ thực hiện các quy định về quản lý tài chính</td>
						<td style="text-align: center;">10</td>
						<td></td>
					</tr>
					<tr>
						<td style="text-align: center;">5</td>
						<td style="padding-left: 0.3cm;">Chất lượng bản báo cáo kết quả nghiên cứu đề tài (Cấu trúc, cách trình bày, hình thức…)</td>
						<td style="text-align: center;">10</td>
						<td></td>
					</tr>
					<tr>
						<td colspan="2" style="text-align: center;"><b><i>Cộng</i></b></td>
						<td style="text-align: center;"><b><i>100</i></b></td>
						<td></td>
					</tr>
				</table>
				<p>7 - Ý kiến khác (nếu có): .......................................................................................................................................................................................................................................................................................................................................................................................................................................................................................</p>				<!-- NGÀY THÁNG VIẾT ĐỀ XUẤT -->
				<p style="text-align: right;margin-top: 4mm;padding-right: 1mm"><i>Vĩnh Long</i>, ngày ...... tháng ...... năm ......</p>
				<!-- KÝ TÊN XÁC NHẬN -->
				<table style="width: 180mm;">
					<tr style="text-align: center;">
						<th style="width: 6cm;"></th>
						<th style="width: 6cm;"></th>
						<td style="width: 6cm;"><b>Uỷ viên đánh giá</b><br><i>(Ký tên)</i></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	<div style='mso-element:footer' id="f1">
    	<p class="MsoFooter">LLLLLLLLLLLLLLLL</p>
</div>
</body>
</html>
