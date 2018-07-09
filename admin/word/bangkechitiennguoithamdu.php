<?php include_once "../../config.php"; ?>
<?php 
	$chude="";
	$noidung="";
	$diadiem="";
	$thoigian="";
	if (isset($_POST['chude'])&&!empty($_POST['chude'])) {
		$chude=$_POST['chude'];
	}
	if (isset($_POST['noidung'])&&!empty($_POST['noidung'])) {
		$noidung=$_POST['noidung'];
	}if (isset($_POST['diadiem'])&&!empty($_POST['diadiem'])) {
		$diadiem=$_POST['diadiem'];
	}
	if (isset($_POST['thoigian'])&&!empty($_POST['thoigian'])) {
		$thoigian=$_POST['thoigian'];
	}
	$mangthoigian = explode("-",$thoigian);
	$nam=$mangthoigian[0];
	$thang=$mangthoigian[1];
	$loai=1;
	$tenfile = "Bảng kê chi tiền cho người tham dự hội nghị NCKH $thang - $nam (Nghiệm thu)";
	if (isset($_POST['xetduyet'])) {
		$loai=0; // loại xét duyệt = 0
		$tenfile = "Bảng kê chi tiền cho người tham dự hội nghị NCKH $thang - $nam (Xét duyệt)";
	}
	//die();
	session_start();
	$ketnoi = new clsKetnoi();
	$conn = $ketnoi->ketnoi();
	$hoi = "SELECT DISTINCT nd.IDND,CONCAT(nd.HO,' ',nd.TEN) AS HOTEN, xd.NHIEMVU FROM nguoidung nd, kehoachxetchonnghiemthu kh, xetduyetdetai xd WHERE kh.IDDT=xd.IDDT AND xd.IDND = nd.IDND AND kh.THANG = $thang AND kh.NAM = $nam AND kh.LOAI = b'$loai' GROUP BY nd.IDND,nd.HO,nd.TEN";
	$danhsach = mysqli_query($conn,$hoi);
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
            size: 21cm 29.7cm;
            margin: 1.5cm 1.5cm 1.5cm 1.5cm;
        }
        div.Section1 { page:Section1;}
        p{
        	margin: 0.3cm 0cm 0.3cm 0cm;
        }
        #bangchitiet th,#bangchitiet td{
        	border:1px dotted;
        }
        .giua{
        	text-align: center;
        }
        *,body{
        	font-family: "Times New Roman" !important;
        	font-size: 17px;
        }
    </style>
</head>
<body>
	<div class="Section1">
		<div style="margin: 0;box-shadow: 0;font-size: 17px;">
			<table id="bangheader" border="1" style="border-collapse: collapse;width: 180mm;">
				<tr>
					<td style="text-align: center;width: 20mm"><img src="<?php echo $qlkh['HOSTADMIN'] ?>word/vlute-logo.png" width="70" height="70"></td>
					<th style="font-size: 18.5px;text-align: center;">
						BẢNG KÊ CHI TIỀN CHO NGƯỜI THAM DỰ<br>HỘI NGHỊ KH&CN, NĂM HỌC 20.... - 20....
					</th>
					<td style="padding-left: 5mm;width: 45mm;">Mã số: BM-NC-10-00<br>Ngày BH: 18/4/2018</td>
				</tr>
			</table>
			<br>
			<div style="width: 190mm;">
				<p style="padding-left: 1.5cm;">- Chủ đề hội nghị:&ensp;<?php echo $chude; ?></p>
				<p style="padding-left: 1.5cm;">- Nội dung tham dự:&ensp;<?php echo $noidung; ?></p>
				<p style="padding-left: 1.5cm;">- Địa điểm:&ensp;<?php echo $diadiem; ?></p>
				<p style="padding-left: 1.5cm;">- Thời gian:&ensp;.... giờ .... phút, ngày .... tháng <?php echo $thang ?> năm <?php echo $nam; ?></p>
				<p style="padding-right: 0.2cm;text-align: right;"><i>Đơn vị tính: đồng</i></p>
				<!-- NỘI DUNG ĐÁNH GIÁ -->
				<table id="bangchitiet" style="border-collapse: collapse;width: 100%;font-size: 17px !important;">
					<tr style="text-align: center;height: 30px;">
						<th style="width: 0.8cm;">TT</th>
						<th style="width: 6cm;">Họ và tên</th>
						<th style="width: 2.5cm;">Chức vụ</th>
						<th style="width: 3.5cm;">Đơn vị</th>
						<th style="width: 2cm;">Số tiền</th>
						<th style="width: 2cm;">Ký nhận</th>
						<th style="width: 2cm;">Ghi chú</th>
					</tr>
					<tr style="text-align: center;">
						<td><i>A</i></td>
						<td><i>B</i></td>
						<td><i>C</i></td>
						<td><i>D</i></td>
						<td><i>1</i></td>
						<td><i>E</i></td>
						<td></td>
					</tr>
					<?php $stt=1; while ($row = mysqli_fetch_assoc($danhsach)) { ?>
					<tr style="height: 40px;">
						<td class="giua"><?php echo $stt ?></td>
						<td>&ensp;<?php echo $row['HOTEN'] ?></td>
						<td class="giua"><?php echo $row['NHIEMVU'] ?></td>
						<td class="giua" style="padding-left: 4mm"><?php echo don_vi_cong_tac($row['IDND']); ?></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<?php $stt++; } ?>
					<tr style="height: 25px;">
						<th colspan="4"><i>Tổng cộng</i></th>
						<th></th>
						<td></td>
						<td></td>
					</tr>
				</table>
				<!-- NGÀY THÁNG VIẾT ĐỀ XUẤT -->
				<p style="padding-left: 1.5cm;">- Tổng số:&ensp;<?php echo $stt-1; ?> người</p>
				<p style="padding-left: 1.5cm;">- Tổng số tiền (Viết bằng chữ):&ensp;.... ....</p>
				<p style="text-align: right;margin-top: 4mm;padding-right: 1mm"><i>Vĩnh Long</i>, ngày ...... tháng <?php echo $thang ?> năm <?php echo $nam ?></p>
				<!-- KÝ TÊN XÁC NHẬN -->
				<table style="width: 180mm;">
					<tr style="text-align: center;">
						<th style="width: 25%;">Hiệu trưởng</th>
						<th style="width: 25%;">Phòng KTTV</th>
						<th style="width: 25%;">Phòng NCKH - HTQT</th>
						<th style="width: 25%;">Người lập bảng</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</body>
</html>
