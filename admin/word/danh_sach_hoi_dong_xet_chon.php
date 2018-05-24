<?php include_once "../../config.php"; ?>
<?php include_once "../../config.php"; ?>
<?php 
	if (!isset($_POST['dachon']) || empty($_POST['dachon'])) {
		echo " Không có dữ liệu";
		exit();	
	}
	$ds = null;
	$_ds = explode(',', $_POST['dachon']);
	for ($i=0; $i < count($_ds); $i++) { 
		if (intval($_ds[$i])>0) {
			$ds[] = $_ds[$i];
		}
	}
	if (empty($ds) || count($ds)==0) {
		echo " Không có dữ liệu";
		exit();	
	}
	function lay_hoi_dong($iddt){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$query = "SELECT DISTINCT xd.IDND,CONCAT(nd.HO,' ',nd.TEN) as HOTEN,nd.NGAYSINH,xd.NHIEMVU, xd.GHICHU FROM xetduyetdetai xd, nguoidung nd WHERE xd.LOAIHD = '1' AND xd.IDND = nd.IDND AND xd.IDDT = '$iddt'";
		$result = mysqli_query($conn, $query);
		mysqli_close($conn);
		return $result;
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
	function don_vi_cong_tac($idnd){
	    $ketnoi = new clsKetnoi();
	    $conn = $ketnoi->ketnoi();
	    $query = "SELECT k.TENTAT FROM nguoidung_khoabomon nk, khoabomon k WHERE nk.IDKBM = k.IDKBM AND nk.IDND = '$idnd'";
	    $result = mysqli_query($conn, $query);
	    $r = mysqli_fetch_assoc($result);
	    $ten = $r['TENTAT'];
	    mysqli_close($conn);
	    return $ten;
	}
	
	function thong_tin_de_tai($iddt){
	    $ketnoi = new clsKetnoi();
	    $conn = $ketnoi->ketnoi();
	    $query = "SELECT dt.MADETAI, dt.TENDETAI, CONCAT(nd.HO, ' ', nd.TEN) as HOTEN FROM detai dt, thanhviendetai tv, nguoidung nd WHERE dt.iddt = '$iddt' AND dt.IDDT = tv.IDDT AND tv.TRACHNHIEM=N'Chủ nhiệm' AND tv.IDND = nd.IDND";
	    $result = mysqli_query($conn, $query);
	    $r = mysqli_fetch_assoc($result);
	    mysqli_close($conn);
	    return $r;
	}
	function thanh_vien_xet_duyet_da_chon($iddt){
	    $ketnoi = new clsKetnoi();
	    $conn = $ketnoi->ketnoi();
	    $query = "SELECT DISTINCT xd.IDND,CONCAT(nd.HO,' ',nd.TEN) as HOTEN,xd.NHIEMVU, xd.GHICHU FROM xetduyetdetai xd, nguoidung nd WHERE xd.LOAIHD = '0' AND xd.IDND = nd.IDND AND xd.IDDT = '$iddt';";
	    $result = mysqli_query($conn, $query);
	    $r = null;
	    while ($row = mysqli_fetch_assoc($result)) {
	    	$r[] = $row;
	    }
	    mysqli_close($conn);
	    return $r;
	}
	function thanh_vien_nghiem_thu_da_chon($iddt){
	    $ketnoi = new clsKetnoi();
	    $conn = $ketnoi->ketnoi();
	    $query = "SELECT nt.IDND,CONCAT(nd.HO,' ',nd.TEN) as HOTEN,nt.NHIEMVU, nt.GHICHU FROM xetduyetnghiemthu nt, nguoidung nd WHERE nt.IDND = nd.IDND AND nt.IDDT = '$iddt' GROUP BY nt.IDNT ORDER BY nt.IDNT ASC";
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
 header("content-disposition: attachment;filename=danh sach hoi dong xet chon.doc");
?>

<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <style>
    body{
    	font-size: 17px;
    }
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
			<table style="width: 190mm;">
				<tr>
					<td style="font-size: 16px;text-align: center;">BỘ LAO ĐỘNG - THƯƠNG BINH VÀ XÃ HỘI<br><b>TRƯỜNG ĐẠI HỌC SPKT VĨNH LONG</b><hr style="width: 40%"></td>
					<td style="width: 95mm;font-size: 16px;text-align: center;"><b>CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM<br>Độc lập - Tự do - Hạnh phúc</b><hr style="width: 40%"></td>
				</tr>
			</table>
			<table style="width: 190mm;text-align: center;">
				<tr>
					<th colspan="3">DANH SÁCH HỘI ĐỒNG XÉT CHỌN ĐỀ TÀI NCKH CẤP TRƯỜNG<br>Năm học 20... - 20...</th>
				</tr>
				<tr>
					<td style="width: 1.4cm;"></td>
					<td>(Kèm theo Quyết định số: /QĐ-SPKTVL-NCKH, ngày ...... tháng ..... năm ...... của Hiệu trưởng Trường Đại học SPKT Vĩnh Long)</td>
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
					<?php 
					$hoidongxetchon = lay_hoi_dong($ds[0]);$stt=1;
					while ($row = mysqli_fetch_assoc($hoidongxetchon)) { ?>
					<tr>
						<td style="text-align: center;"><?php echo $stt; ?></td>
						<td style="padding-left: 0.3cm"><?php echo $row['HOTEN'] ?></td>
						<td style="text-align: center;width: 4.3cm;"><?php echo don_vi_cong_tac($row['IDND']); ?></td>
						<td style="text-align: center;width: 3cm;"><?php echo $row['NHIEMVU'] ?></td>
						<td style="text-align: center;width: 3.8cm;"><?php echo $row['GHICHU'] ?></td>
					</tr>
					<?php $stt++; } ?>
				</table>
				<p><b>II. DANH SÁCH HỘI ĐỒNG: (theo đề lĩnh vực nghiên cứu)</b></p>
				<?php $stt = 1; 
				for ($i=0; $i < count($ds); $i++) { 
					$tt = thong_tin_de_tai($ds[$i]);
					?>
					<p><b>Đề tài 0<?php echo $stt; ?>:</b></p>
					<p>&ensp;&ensp;&ensp;-&ensp;Đề tài: <b><?php echo $tt['TENDETAI']; ?></b></p>
					<p>&ensp;&ensp;&ensp;-&ensp;Mã số: <b><?php echo $tt['MADETAI']; ?></b></p>
					<p>&ensp;&ensp;&ensp;-&ensp;Chủ nhiệm đề tài: <b><?php echo $tt['HOTEN']; ?></b></p>
					
					<?php if (!empty(thanh_vien_de_tai($ds[$i]))) {
						$tv = thanh_vien_de_tai($ds[$i]);
						switch (count($tv)) {
							case 0:
								echo "";
								break;
							case 1:
								echo "<p>&ensp;&ensp;&ensp;&ensp;Thành viên đề tài: <b>".$tv[0]['HOTEN']."</b></p>";
								break;
							default:
								$str = "";
								for ($ii=0; $ii < count($tv) - 1; $ii++) { 
									$str.=$tv[$ii]['HOTEN'].", ";
								}
								$str.=end($tv)['HOTEN'];
								echo "<p>&ensp;&ensp;&ensp;&ensp;Thành viên đề tài: <b>".$str."</b></p>";
								break;
						}
					} ?>
					<table border="1" style="width: 19cm;border-collapse: collapse;">
						<tr style="text-align: center;">
							<th>TT</th>
							<th>HỌ VÀ TÊN</th>
							<th>ĐƠN VỊ</th>
							<th>NHIỆM VỤ</th>
							<th>GHI CHÚ</th>
						</tr>
						<?php 
						$soo = 1;
						$nt = thanh_vien_xet_duyet_da_chon($ds[$i]);
						for($h=0; $h < count($nt); $h++) { ?> 
						<tr>
							<td style="text-align: center;"><?php echo $soo; ?></td>
							<td style="padding-left: 0.3cm"><?php echo $nt[$h]['HOTEN']; ?></td>
							<td style="text-align: center;width: 4.5cm;"><?php echo don_vi_cong_tac($nt[$h]['IDND']); ?></td>
							<td style="text-align: center;width: 3cm;"><?php echo $nt[$h]['NHIEMVU']; ?></td>
							<td style="text-align: center;width: 3cm;"><?php echo $nt[$h]['GHICHU']; ?></td>
						</tr>
						<?php $soo++; } ?>
					</table>
				<?php  $stt++; } ?>
					<br><br>
					<table style="width: 100%;">
						<tr>
							<td></td>
							<th style="width: 6cm;text-align: center;">BAN TỔ CHỨC</th>
						</tr>
					</table>
			</div>
		</div>
	</div>
</body>
</html>