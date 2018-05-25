
<?php 
	include_once("../../config.php");
	session_start();
	$ketnoi = new clsKetnoi();
	if (isset($_SESSION['tdn']) && isset($_SESSION['pas'])) {
	    if (!($ketnoi->checklogin($_SESSION['tdn'],$_SESSION['pas']))) {
	        echo '<script type="text/javascript">location.href = "'.$qlkh['HOSTADMIN'].'"</script>';
	        exit();
	    }
	}
	if (!isset($_POST['alldtnt']) || !isset($_SESSION['token']) || (isset($_SESSION['token']) && $_SESSION['token'] != $_POST['alldtnt'] || !isset($_POST['bd']) || !isset($_POST['kt']))) {
	    echo '<script type="text/javascript">location.href = "'.$qlkh['HOSTADMIN'].'"</script>';
	}
	function thong_ke_de_tai_theo_bo($bd,$kt){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$query_cap = "SELECT DISTINCT dt.CAPDETAI FROM detai dt, nguoidung nd, thanhviendetai tv WHERE dt.TRANGTHAI=N'Đã nghiệm thu' AND dt.IDDT=tv.IDDT AND  (DATE_FORMAT(dt.THOIGIANNGHIEMTHU,'%Y-%m') BETWEEN (DATE_FORMAT(CONCAT('$bd','-01'),'%Y-%m')) AND (DATE_FORMAT(CONCAT('$kt','-01'),'%Y-%m')));;";
		$result_cap = mysqli_query($conn, $query_cap);

		mysqli_close($conn);
		return $result_cap;
	}
	function thong_ke_tat_ca_de_tai($capdetai,$bd,$kt){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$query = "SELECT DISTINCT dt.IDDT, dt.TENDETAI, dt.THOIGIANNGHIEMTHU, dt.DIEM FROM detai dt, nguoidung nd, thanhviendetai tv WHERE dt.TRANGTHAI=N'Đã nghiệm thu' AND CAPDETAI = N'$capdetai' AND dt.IDDT=tv.IDDT AND DUYET='1' AND  (DATE_FORMAT(dt.THOIGIANNGHIEMTHU,'%Y-%m') BETWEEN (DATE_FORMAT(CONCAT('$bd','-01'),'%Y-%m')) AND (DATE_FORMAT(CONCAT('$kt','-01'),'%Y-%m')))";
		$result = mysqli_query($conn, $query);
		mysqli_close($conn);
		return $result;
	}
	$ketnoi = new clsKetnoi();
	$conn = $ketnoi->ketnoi();
	$bd = $_POST['bd'];
	$kt = $_POST['kt'];
	$thangnambd = explode('-', $bd);
	$thangnamkt = explode('-', $kt);
	$bd = mysqli_real_escape_string($conn,$bd);
	$kt = mysqli_real_escape_string($conn,$kt);
	$sql_stqd = "SELECT * FROM sotietquidoi";
	$esql_stqd = mysqli_query($conn, $sql_stqd);
	$stqd=null;
	while ($row = mysqli_fetch_row($esql_stqd)) {
	    $stqd[]=$row;
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
            size: 29.7cm 21cm;
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
			<table style="width: 267mm;">
				<tr>
					<td style="font-size: 16px;text-align: center;">BỘ LAO ĐỘNG - THƯƠNG BINH VÀ XÃ HỘI<br><b>TRƯỜNG ĐẠI HỌC SPKT VĨNH LONG</b><hr style="width: 40%"></td>
					<td style="width: 50%;font-size: 16px;text-align: center;"><b>CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM<br>Độc lập - Tự do - Hạnh phúc</b><hr style="width: 40%"></td>
				</tr>
			</table>

			<table style="width: 267mm;text-align: center;">
				<tr>
					<th colspan="3">THỐNG KÊ KẾT QUẢ HOẠT ĐỘNG KHOA HỌC VÀ CÔNG NGHỆ NĂM 20... – 20...<br><i>(Từ tháng <?php echo $thangnambd[1]; ?> năm <?php echo $thangnambd[0]; ?> đến tháng <?php echo $thangnamkt[1]; ?> năm <?php echo $thangnamkt[0]; ?>)</i></th>
				</tr>
			</table>
			<div style="width: 267mm;">
				<p style="padding-left:1cm;">I. Đề tài Nghiên cứu khoa học cấp trường</p>
				<!-- NỘI DUNG ĐÁNH GIÁ -->
				<table border="1" style="border-collapse: collapse;width: 100%;font-size: 17px;">
					<tr style="text-align: center;">
						<th style="width: 1cm;">TT</th>
						<th>Tên đề tài</th>
						<th style="width: 3cm;">Thời gian nghiệm thu</th>
						<th style="width: 4cm;">Tên CBVC, Đơn vị</th>
						<th style="width: 2cm;">Số điểm</th>
						<th style="width: 3cm;">Số tiết qui đổi</th>
					</tr>
					<?php $detaitk = thong_ke_tat_ca_de_tai('Cấp trường',$bd,$kt); $sttct=1;
						while ($row = mysqli_fetch_assoc($detaitk)) { ?>
					<tr>
						<td style="text-align: center;"><?php echo $sttct; ?></td>
						<td style="padding-left: 0.3cm;"><?php echo $row['TENDETAI'] ?></td>
						<td style="text-align: center;"><?php echo date('m/Y',strtotime($row['THOIGIANNGHIEMTHU'])) ?></td>
						<td style="text-align: center;">
						<?php 
	$iddt = $row['IDDT'];
	$chuoi_cbvc="";
	$q_kbm = "SELECT DISTINCT k.TENTAT, k.IDKBM FROM thanhviendetai tv, khoabomon k, nguoidung nd, nguoidung_khoabomon nk WHERE tv.IDND = nd.IDND AND nd.IDND = nk.IDND AND  nk.IDKBM = k.IDKBM AND tv.IDDT = '$iddt';";
	$e_kbm = mysqli_query($conn, $q_kbm);
	while ($r_kbm = mysqli_fetch_assoc($e_kbm)) {
	    $q_cbvc = "SELECT DISTINCT CONCAT(nd.HO, ' ', nd.TEN) AS  HOTEN FROM thanhviendetai tv, khoabomon k, nguoidung nd, nguoidung_khoabomon nk WHERE tv.IDND = nd.IDND AND nd.IDND = nk.IDND AND  nk.IDKBM = k.IDKBM AND tv.IDDT = '$iddt' AND k.IDKBM = '".$r_kbm['IDKBM']."';";
	    $e_cbvc = mysqli_query($conn, $q_cbvc);
	    while ($r_cbvc = mysqli_fetch_assoc($e_cbvc)) {
	        $chuoi_cbvc.=$r_cbvc['HOTEN']."<br>";
	    }
	    $chuoi_cbvc.=$r_kbm['TENTAT'];
	}echo $chuoi_cbvc;
						 ?>
						</td>
						<td style="text-align: center;"><?php echo $row['DIEM'] ?></td>
						<td style="text-align: center;">
<?php 
						$sotiet=0;$diem=$row['DIEM'];
			            foreach ($stqd as $val){
			                if($val[1] <= $diem && $val[2] >= $diem){$sotiet = $val[3]*$val[4];break;}
			            }echo $sotiet;
 ?>
						</td>
					</tr>		
					<?php $sttct++; } ?>
				</table>
				<!-- NGÀY THÁNG VIẾT ĐỀ XUẤT -->
				<p style="text-align: right;margin-top: 4mm;padding-right: 1mm"><i>Vĩnh Long</i>, ngày ...... tháng ...... năm ......</p>
				<!-- KÝ TÊN XÁC NHẬN -->
				<table style="width: 267mm;">
					<tr style="text-align: center;">
						<th style="width: 33%;">Hiệu trưởng</th>
						<th style="width: 33%;">Phòng NCKH - HTQT</th>
						<th style="width: 33%;">Người lập</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</body>
</html>