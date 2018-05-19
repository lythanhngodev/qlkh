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
            margin: 1.5cm 1.5cm 1.5cm 2.5cm;
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
			<table id="bangheader" border="1" style="border-collapse: collapse;width: 170mm;">
				<tr>
					<td style="text-align: center;width: 20mm"><img src="<?php echo $qlkh['HOSTADMIN'] ?>word/vlute-logo.png" width="70" height="70"></td>
					<th style="font-size: 18.5px;text-align: center;">PHIẾU XÁC NHẬN TRIỂN KHAI ỨNG DỤNG<br>ĐỀ TÀI NCKH CẤP TRƯỜNG<br>NĂM HỌC  20 ... – 20 ...<br>(Đối với đề tài ... ... ...)</th>
					<td style="padding-left: 5mm;width: 45mm;">Mã số: BM-NC-12-00<br>Ngày BH: 04/9/2015</td>
				</tr>
			</table>
			<br>
			<div style="width: 170mm;">
				<p>- Họ tên người giao:&ensp;<?php echo $detai['HOTEN']; ?></p>
				<p>- Đơn vị:&ensp;<?php echo don_vi_cong_tac($detai['IDND']); ?></p>
				<p>- Mã đề tài:&ensp;<?php echo $detai['MADETAI']; ?></p>
				<p>- Tên đề tài:&ensp;<?php echo $detai['TENDETAI']; ?></p>
				<p>Đề tài này đã được triển khai ứng dụng thực hiện tại đơn vị: Bộ môn Giáo dục thể chất bắt đầu từ tháng 02 năm 2018</p>
				<p>Nội dung ứng dụng: Tài liệu phục vụ công tác giảng dạy và nghiên cứu</p>
				<p>Tài liệu bàn giao: Quyển đề tài (01 quyển)</p>
				<p>Tình trạng tài liệu: Đầy đủ, đúng yêu cầu</p>

				<!-- NGÀY THÁNG VIẾT ĐỀ XUẤT -->
				<p style="text-align: right;margin-top: 4mm;padding-right: 1mm"><i>Vĩnh Long</i>, ngày ...... tháng ...... năm ......</p>
				<!-- KÝ TÊN XÁC NHẬN -->
				<table style="width: 170mm;">
					<tr style="text-align: center;">
						<th style="width: 7cm;">PHÒNG NCKH – HTQT</th>
						<td></td>
						<th style="width: 7cm;">XÁC NHẬN ĐƠN VỊ</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</body>
</html>