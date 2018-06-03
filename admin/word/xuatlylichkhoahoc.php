
<?php session_start();include_once "../../config.php"; ?>
<?php 
	if (!isset($_SESSION['_idnd']) || empty($_SESSION['_idnd'])) {
		echo " Không có dữ liệu";
		exit();	
	}
	$idnd = $_SESSION['_idnd'];
function lay_thong_tin_nguoi_dung($idnd){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT * FROM nguoidung WHERE IDND = '$idnd'";
    $result = mysqli_query($conn, $query);
    $r = mysqli_fetch_assoc($result);
    mysqli_close($conn);
    return $r;
}
function lay_dai_hoc($idnd){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT * FROM `daihoc` WHERE IDND = '$idnd'";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}
function lay_cong_tac_chuyen_mon($idnd){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT * FROM `congtacchuyenmon` WHERE IDND = '$idnd'";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}
function lay_de_tai_nghien_cuu_khoa_hoc($idnd){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT dt.TENDETAI, dt.THANGNAMBD, dt.THANGNAMKT, dt.CAPDETAI, tv.TRACHNHIEM FROM detai dt, thanhviendetai tv WHERE dt.IDDT = tv.IDDT AND tv.IDND = '$idnd' AND (dt.TRANGTHAI=N'Đã nghiệm thu' OR dt.TRANGTHAI=N'Đang thực hiện') ";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}
function lay_cong_trinh_nghien_cuu_khoa_hoc($idnd){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT b.TENBAO, b.NAMXUATBAN, b.TAPCHI FROM baokhoahoc b, nguoidung_baibao nb WHERE b.IDBAO = nb.IDBAO AND nb.IDND = '$idnd' ORDER BY b.NAMXUATBAN DESC";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}
function lay_nguoi_dung_chuc_danh_giang_vien($idnd){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT IDCD FROM nguoidung_chucdanhgiangvien WHERE IDND = '$idnd';";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}
function lay_nguoi_dung_trinh_do_chuyen_mon($idnd){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT IDTD FROM nguoidung_trinhdochuyenmon WHERE IDND = '$idnd';";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}
function lay_nguoi_dung_hoc_vi($idnd){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT TENHOCVI FROM nguoidung_hocvi nh, hocvi hv WHERE nh.IDHV=hv.IDHV AND nh.IDND = '$idnd';";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_row($result);
    mysqli_close($conn);
    return $row[0];
}
function lay_nguoi_dung_chuc_danh_khoa_hoc($idnd){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT TENCHUCDANH FROM nguoidung_chucdanhkhoahoc nc, chucdanhkhoahoc ck WHERE nc.IDCD=ck.IDCD AND nc.IDND = '$idnd';";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_row($result);
    mysqli_close($conn);
    return $row[0];
}
function lay_nguoi_dung_chuc_vu($idnd){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT TENCHUCVU FROM nguoidung_chucvu nc, chucvu cv WHERE nc.IDCV=cv.IDCV AND nc.IDND = '$idnd';";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_row($result);
    mysqli_close($conn);
    return $row[0];
}
function lay_nguoi_dung_don_vi_cong_tac($idnd){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT kbm.TENKBM FROM nguoidung_khoabomon nk, khoabomon kbm WHERE nk.IDKBM=kbm.IDKBM AND nk.IDND = '$idnd';";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_row($result);
    mysqli_close($conn);
    return $row[0];
}
 ?>
  <?php 
 header("Content-Type: application/vnd.ms-word");
 header("Expires: 0");
 header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
 header("content-disposition: attachment;filename=Ly lich khoa hoc.doc");
?>
 <html>
<head>
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
        margin: 2cm 2cm 2cm 2cm;
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
			<table style="width: 170mm;">
				<tr>
					<th style="font-size: 16px;text-align: center;">CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM<br>Độc lập – Tự do – Hạnh phúc<hr style="width: 40%"></th>
				</tr>
			</table>
			<br>
			<p style="font-size: 20px;text-align: center;width: 17cm;"><b>LÝ LỊCH KHOA HỌC</b></p>
			<br>
			<?php $tt = lay_thong_tin_nguoi_dung($idnd); ?>
			<table style="width: 170mm;">
				<tr>
					<th colspan="2" style="text-align: left;">I. LÝ LỊCH SƠ LƯỢC</th>
				</tr>
				<tr>
					<td>Họ và tên: <?php echo $tt['HO']." ".$tt['TEN'] ?></td>
					<td>Giới tính: <?php echo $tt['GIOITINH'] ?></td>
				</tr>
				<tr>
					<td>Ngày, tháng, năm sinh: <?php if($tt['NGAYSINH']=='null' || empty($tt['NGAYSINH'])) echo ""; else echo date('d/m/Y',strtotime($tt['NGAYSINH'])); ?></td>
					<td>Nơi sinh: <?php echo $tt['NOISINH'] ?></td>
				</tr>
				<tr>
					<td>Quê quán: <?php echo $tt['QUEQUAN'] ?></td>
					<td>Dân tộc: <?php echo $tt['DANTOC'] ?></td>
				</tr>
				<tr>
					<td>Học vị cao nhất: <?php echo lay_nguoi_dung_hoc_vi($idnd); ?></td>
					<td>Năm, nước nhận học vị: <?php echo $tt['NAMNUOCHOCVI'] ?></td>
				</tr>
				<tr>
					<td>Chức danh khoa học cao nhất: <?php echo lay_nguoi_dung_chuc_danh_khoa_hoc($idnd) ?></td>
					<td>Năm bổ nhiệm: <?php echo $tt['NAMBONHIEM'] ?></td>
				</tr>
				<tr>
					<td colspan="2">Chức vụ (hiện tại hoặc trước khi nghỉ hưu): <?php echo lay_nguoi_dung_chuc_vu($idnd) ?></td>
				</tr>
				<tr>
					<td colspan="2">Đơn vị công tác (hiện tại hoặc trước khi nghỉ hưu): <?php echo lay_nguoi_dung_don_vi_cong_tac($idnd) ?></td>
				</tr>
				<tr>
					<td colspan="2">Chỗ ở riêng hoặc địa chỉ liên lạc: <?php echo $tt['CHOORIENG'] ?></td>
				</tr>
				<tr>
					<td colspan="2">CQ:&ensp;<?php echo $tt['DIENTHOAICQ'] ?>&ensp;&ensp;NR:&ensp;<?php echo $tt['DIENTHOAINR'] ?>&ensp;&ensp;DĐ:&ensp;<?php echo $tt['DIENTHOAIDD'] ?></td>
				</tr>
				<tr>
					<td>Fax: <?php echo $tt['FAX'] ?></td>
					<td>Email: <?php echo $tt['MAIL'] ?></td>
				</tr>
				<tr>
					<th colspan="2" style="text-align: left;">II. QUÁ TRÌNH ĐÀO TẠO</th>
				</tr>
				<tr>
					<th colspan="2" style="text-align: left;">1. Đại học:</th>
				</tr>
				<?php $daihoc = lay_dai_hoc($idnd);$demdh=1;
				while ($row = mysqli_fetch_assoc($daihoc)) { ?>
				<tr>
					<td colspan="2">Hệ đào tạo: <?php echo $row['HEDAOTAO'] ?></td>
				</tr>
				<tr>
					<td colspan="2">Nơi đào tạo: <?php echo $row['NOIDAOTAO'] ?></td>
				</tr>
				<tr>
					<td colspan="2">Ngành học: <?php echo $row['NGANHHOC'] ?></td>
				</tr>
				<tr>
					<td colspan="2">Nước đào tạo: <?php echo $row['NUOCDAOTAO'] ?></td>
				</tr>
				<tr>
					<td colspan="2">Năm tốt nghiệp: <?php echo $row['NAMTOTNGHIEP'] ?></td>
				</tr>
				<?php $demdh++;}
				if($demdh==1) { ?>
				<tr>
					<td colspan="2">Hệ đào tạo:</td>
				</tr>
				<tr>
					<td colspan="2">Nơi đào tạo:</td>
				</tr>
				<tr>
					<td colspan="2">Ngành học:</td>
				</tr>
				<tr>
					<td colspan="2">Nước đào tạo:</td>
				</tr>
				<tr>
					<td colspan="2">Năm tốt nghiệp:</td>
				</tr>
				<?php }
				 ?>
				<tr>
					<th colspan="2" style="text-align: left;">2. Sau đại học:</th>
				</tr>
				<tr>
					<td>- Thạc sĩ chuyên ngành: <?php echo $tt['THACSICHUYENNGANH'] ?></td>
					<td>Năm cấp bằng: <?php echo $tt['NAMCAPBANGTSCN'] ?></td>
				</tr>
				<tr>
					<td colspan="2">Nơi đào tạo: <?php echo $tt['NOIDAOTAOTSCN'] ?></td>
				</tr>
				<tr>
					<td>- Tiến sĩ chuyên ngành: <?php echo $tt['TIENSICHUYENNGANH'] ?></td>
					<td>Năm cấp bằng: <?php echo $tt['NAMCAPBANGTSCN2'] ?></td>
				</tr>
				<tr>
					<td colspan="2">Nơi đào tạo: <?php echo $tt['NOIDAOTAOTSCN2'] ?></td>
				</tr>
				<tr>
					<td colspan="2">- Tên luận án: <?php echo $tt['TENLUANAN'] ?></td>
				</tr>
				<tr>
					<th colspan="2" style="text-align: left;">3. Ngoại ngữ:</th>
				</tr>
				<tr>
					<td>1.</td>
					<td>Mức độ sử dụng:</td>
				</tr>
				<tr>
					<td>2.</td>
					<td>Mức độ sử dụng:</td>
				</tr>
			</table>
			<p><b>III. QUÁ TRÌNH CÔNG TÁC CHUYÊN MÔN</b></p>
			<table style="width: 17cm;border-collapse: collapse;" border="1">
				<tr>
					<th>Thời gian</th>
					<th>Nơi công tác</th>
					<th>Công việc đảm nhiệm</th>
				</tr>
				<?php $congtac = lay_cong_tac_chuyen_mon($idnd);$demct=1;
				while ($row = mysqli_fetch_assoc($congtac)) { ?>
				<tr>
					<td style="text-align: center;"><?php if($row['THOIGIAN']=='null' || empty($row['THOIGIAN'])) echo ""; else echo date('d/m/Y',strtotime($row['THOIGIAN'])); ?></td>
					<td style="padding-left: 0.3cm;"><?php echo $row['NOICONGTAC'] ?></td>
					<td style="padding-left: 0.3cm;"><?php echo $row['CONGVIEC'] ?></td>
				</tr>
				<?php $demct++;}
				if($demct==1){ ?>
				<tr>
					<td style="text-align: center;"></td>
					<td style="padding-left: 0.3cm;"></td>
					<td style="padding-left: 0.3cm;"></td>
				</tr>
				<?php } ?>
			</table>
			<p><b>IV. QUÁ TRÌNH NGHIÊN CỨU KHOA HỌC</b></p>
			<p>1. Các đề tài nghiên cứu khoa học đã và đang tham gia:</p>
			<table style="width: 17cm;border-collapse: collapse;" border="1">
				<tr>
					<th>TT</th>
					<th>Tên đề tài nghiên cứu </th>
					<th>Năm bắt đầu/Năm hoàn thành</th>
					<th>Đề tài cấp (NN, Bộ, ngành, trường)</th>
					<th>Trách nhiệm tham gia trong đề tài</th>
				</tr>
				<?php $detai = lay_de_tai_nghien_cuu_khoa_hoc($idnd);$demdt=1;
				while ($row = mysqli_fetch_assoc($detai)) { ?>
				<tr>
					<td style="text-align: center;"><?php echo $demdt ?></td>
					<td style="padding-left: 0.3cm;"><?php echo $row['TENDETAI'] ?></td>
					<td style="text-align: center;"><?php echo $row['THANGNAMBD']. " đến ".$row['THANGNAMKT']; ?></td>
					<td style="text-align: center;"><?php echo $row['CAPDETAI']; ?></td>
					<td style="text-align: center;"><?php echo $row['TRACHNGHIEM'] ?></td>
				</tr>
				<?php $demdt++;}
				if($demdt==1){ ?>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				 <?php } ?>
			</table>
			<p>2. Các công trình khoa học đã công bố:</p>
			<table style="width: 17cm;border-collapse: collapse;" border="1">
				<tr>
					<th>TT</th>
					<th>Tên công trình</th>
					<th>Năm công bố</th>
					<th>Tên tạp chí</th>
				</tr>
				<?php $baibao = lay_cong_trinh_nghien_cuu_khoa_hoc($idnd);$dembb=1;
				while ($row = mysqli_fetch_assoc($baibao)) { ?>
				<tr>
					<td style="text-align: center;"><?php echo $dembb ?></td>
					<td style="padding-left: 0.3cm;"><?php echo $row['TENBAO'] ?></td>
					<td style="text-align: center;"><?php echo $row['NAMXUATBAN'] ?></td>
					<td style="padding-left: 0.3cm;"><?php echo $row['TAPCHI'] ?></td>
				</tr>
				<?php $dembb++;}
				if($dembb==1){ ?>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				 <?php } ?>
			</table>
			<p style="width: 17cm;text-align: right;"><i>............., ngày .... tháng ..... năm ....</i></p>
			<table style="text-align: center;width: 17cm;">
				<tr>
					<th style="text-align: left;padding-left: 1.5cm;">Xác nhận cơ quan</th>
					<th style="width: 6cm;">Người khai ký tên</th>
				</tr>
				<tr>
					<td></td>
					<td><i>(Ghi rõ chức danh, học vị)</i></td>
				</tr>
			</table>
		</div>
	</div>
</body>
</html>