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
	function lay_cap_bai_bao(){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$query_cap = "SELECT DISTINCT * FROM capbaibao;";
		$result_cap = mysqli_query($conn, $query_cap);

		mysqli_close($conn);
		return $result_cap;
	}
	function thong_ke_bai_bao_theo_thoi_gian($capbaibao,$bd,$kt){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$query = "SELECT DISTINCT b.IDBAO,b.TENBAO, b.NAMXUATBAN, b.TAPCHI, b.CAPBAIBAO, b.DIEM,b.SOTIET FROM baokhoahoc b, nguoidung_baibao nb WHERE b.ANHIEN=b'1' AND b.CAPBAIBAO = N'$capbaibao' AND (DATE_FORMAT(CONCAT(b.NAMXUATBAN,'-01'),'%Y-%m') BETWEEN (DATE_FORMAT(CONCAT('$bd','-01'),'%Y-%m')) AND (DATE_FORMAT(CONCAT('$kt','-01'),'%Y-%m')))";
		$result = mysqli_query($conn, $query);
		mysqli_close($conn);
		return $result;
	}
	function lay_tac_gia_bai_bao($idb){
	    $ketnoi = new clsKetnoi();
	    $conn = $ketnoi->ketnoi();
	    $q_ten = "SELECT CONCAT(nd.HO,' ',nd.TEN) AS  HOTEN FROM baokhoahoc b, nguoidung_baibao nb, nguoidung nd WHERE nb.IDBAO = b.IDBAO AND nb.IDND=nd.IDND AND b.IDBAO='$idb';";
	    $e_ten = mysqli_query($conn,$q_ten);
	    return $e_ten;
	}
	function lay_don_vi($idb){
	    $ketnoi = new clsKetnoi();
	    $conn = $ketnoi->ketnoi();
	    $q_dv = "SELECT DISTINCT k.TENTAT FROM nguoidung_baibao nb, nguoidung_khoabomon nk, khoabomon k
	WHERE nb.IDBAO = '$idb' AND nb.IDND = nk.IDND AND nk.IDKBM = k.IDKBM;";
	    $e_dv = mysqli_query($conn,$q_dv);
	    $r_dv=null;
	    while ($row=mysqli_fetch_assoc($e_dv)) {
	        $r_dv[] = $row['TENTAT'];
	    }
	    return $r_dv;
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
	$tenfile = "TK bai bao khoa hoc ".$bd." - ".$kt;
 ?>
 <?php 
 header("Content-Type: application/vnd.ms-word");
 header("Expires: 0");
 header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
 header("content-disposition: attachment;filename=$tenfile.doc");
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
				<?php 
				$capbaibao = lay_cap_bai_bao(); $rstt=1;
				while ($rcbb=mysqli_fetch_assoc($capbaibao)) { ?>
				<p style="padding-left:1cm;"><?php echo $ketnoi->ConverToRoman($rstt); ?>. <?php echo $rcbb['TENCAP']; ?></p>
				<!-- NỘI DUNG ĐÁNH GIÁ -->
				<table border="1" style="border-collapse: collapse;width: 100%;font-size: 17px;">
					<tr style="text-align: center;">
						<th style="width: 1cm;">TT</th>
						<th>Tên bài báo</th>
						<th style="width: 3cm;">Tác giả</th>
						<th style="width: 4cm;">Đơn vị</th>
						<th style="width: 2cm;">Ghi chú</th>
						<th style="width: 3cm;">Số tiết qui đổi</th>
					</tr>
					<?php $baibaotk = thong_ke_bai_bao_theo_thoi_gian($rcbb['TENCAP'],$bd,$kt); $sttct=1;
						while ($row = mysqli_fetch_assoc($baibaotk)) { ?>
					<tr>
						<td style="text-align: center;"><?php echo $sttct; ?></td>
						<td style="padding-left: 0.3cm;"><?php echo $row['TENBAO'] ?></td>
						<td style="text-align: center;">
	                    <?php $r_tg = lay_tac_gia_bai_bao($row['IDBAO']);
	                        $tg = null;
	                        while ($_tg = mysqli_fetch_assoc($r_tg)){
	                            $tg[] = $_tg['HOTEN'];
	                        }
	                    switch (count($tg)) {
	                        case 0:
	                            echo "";
	                            break;
	                        case 1:
	                            echo $tg[0];
	                            break;
	                        default:
	                            for ($i=0; $i < count($tg)-1; $i++) { 
	                                echo $tg[$i]."<hr>";
	                            }
	                            echo end($tg);
	                            break;
	                    }
	                     ?>
						</td>
						<td style="text-align: center;">
	                    <?php 
	                    $dv = lay_don_vi($row['IDBAO']);
	                    switch (count($dv)) {
	                        case 0:
	                            echo "";
	                            break;
	                        case 1:
	                            echo $dv[0];
	                            break;
	                        default:
	                            for ($i=0; $i < count($dv)-1; $i++) { 
	                                echo $dv[$i]."<hr>";
	                            }
	                            echo end($dv);
	                            break;
	                    }
	                     ?>
						</td>
						<td style="text-align: center;">
							Tác giả
						</td>
						<td style="text-align: center;">
                        <?php echo $row['SOTIET']; ?>
						</td>
					</tr>		
					<?php $sttct++; } ?>
				</table>
				<?php 
				 $rstt++;}
				 ?>

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