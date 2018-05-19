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
	$hoi = "SELECT dt.MADETAI, dt.TENDETAI, CONCAT(nd.HO, ' ', nd.TEN) as HOTEN, nd.IDND FROM detai dt, thanhviendetai tv, nguoidung nd WHERE dt.iddt = '$iddt' AND dt.IDDT = tv.IDDT AND tv.TRACHNHIEM=N'Chủ nhiệm' AND tv.IDND = nd.IDND";
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
            size: 21cm 29.7cm;
            margin: 1.5cm 1.5cm 1.5cm 1.5cm;
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
			<table id="bangheader" border="1" style="border-collapse: collapse;width: 180mm;">
				<tr>
					<td style="text-align: center;width: 20mm"><img src="<?php echo $qlkh['HOSTADMIN'] ?>word/vlute-logo.png" width="70" height="70"></td>
					<th style="font-size: 18.5px;text-align: center;">PHIẾU GIAO NHẬN SẢN PHẨM KH & CN<br>ĐỀ TÀI NCKH CẤP TRƯỜNG<br>NĂM HỌC  20 ... – 20 ...</th>
					<td style="padding-left: 5mm;width: 45mm;">Mã số: BM-NC-11-00<br>Ngày BH: 04/9/2015</td>
				</tr>
			</table>
			<br>
			<div style="width: 170mm;">
				<p>- Họ tên người giao:&ensp;<?php echo $detai['HOTEN']; ?></p>
				<p>- Đơn vị:&ensp;<?php echo don_vi_cong_tac($detai['IDND']); ?></p>
				<p>- Mã đề tài:&ensp;<?php echo $detai['MADETAI']; ?></p>
				<p>- Tên đề tài:&ensp;<?php echo $detai['TENDETAI']; ?></p>
				<p>- Họ tên người nhận: <?php echo lay_ho_ten($_SESSION['_idnd']); ?></p>
				<p>- Đơn vị: Phòng NCKH – HTQT</p>
				<p>- Địa điểm giao nhận: ...............................................................</p>
				<p>- Theo hợp đồng số: .................................................................</p>
				<p>Tiến hành giao các sản phẩm KH & CN như sau:</p>
				<!-- NỘI DUNG ĐÁNH GIÁ -->
				<table border="1" style="border-collapse: collapse;width: 100%;font-size: 17px;">
					<tr style="text-align: center;">
						<th style="width: 1cm;">TT</th>
						<th>TÊN THIẾT BỊ GIAO NHẬN</th>
						<th style="width: 4cm;">SỐ LƯỢNG</th>
						<th style="width: 4cm;">TÌNH TRẠNG</th>
					</tr>
					<tr>
						<td style="text-align: center;">1</td>
						<td></td>
						<td style="text-align: center;"></td>
						<td></td>
					</tr>
				</table>
				<!-- NGÀY THÁNG VIẾT ĐỀ XUẤT -->
				<p style="text-align: right;margin-top: 4mm;padding-right: 1mm"><i>Vĩnh Long</i>, ngày ...... tháng ...... năm ......</p>
				<!-- KÝ TÊN XÁC NHẬN -->
				<table style="width: 180mm;">
					<tr style="text-align: center;">
						<th style="width: 6cm;">NGƯỜI GIAO</th>
						<th style="width: 6cm;">THỦ KHO</th>
						<th style="width: 6cm;">NGƯỜI NHẬN</th>
					</tr>
				</table>
				<br><br><br>
				<table style="width: 180mm;">
					<tr style="text-align: center;">
						<th style="width: 6cm;"><i><?php echo $detai['HOTEN']; ?></i></th>
						<th style="width: 6cm;"></th>
						<th style="width: 6cm;"><i><?php echo lay_ho_ten($_SESSION['_idnd']); ?></i></th>
					</tr>
				</table>
				<table style="width: 180mm;">
					<tr style="text-align: center;">
						<th style="width: 6cm;">PHÒNG NCKH - HTQT</th>
						<th style="width: 6cm;"></th>
						<th style="width: 6cm;">PHÒNG QT - TB</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</body>
</html>