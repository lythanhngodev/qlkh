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
	    $query = "SELECT k.TENKBM FROM nguoidung_khoabomon nk, khoabomon k WHERE nk.IDKBM = k.IDKBM AND nk.IDND = '$idnd'";
	    $result = mysqli_query($conn, $query);
	    $r = mysqli_fetch_assoc($result);
	    $ten = $r['TENKBM'];
	    mysqli_close($conn);
	    return $ten;
	}
 ?>
<?php 
 header("Content-Type: application/vnd.ms-word");
 header("Expires: 0");
 header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
 header("content-disposition: attachment;filename=tong hop danh gia nghiem thu.doc");
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
					<th style="font-size: 18.5px;text-align: center;">BIÊN BẢN HỌP HỘI ĐỒNG ĐÁNH GIÁ<br>NGHIỆM THU ĐỀ TÀI NCKH CẤP TRƯỜNG<br>NĂM HỌC 20... - 20...</th>
					<td style="padding-left: 5mm;width: 45mm;">Mã số: BM-NC-09-00<br>Ngày BH: 18/4/2018</td>
				</tr>
			</table>
			<div style="width: 180mm;">
				<p>1 - Mã số đề tài:&ensp;<b><?php echo $detai['MADETAI'] ?></b></p>
				<p>2 - Tên đề tài:&ensp;<b><?php echo $detai['TENDETAI'] ?></b></p>
				<p>3 - Nhóm nghiên cứu và báo cáo:</p>
				<p>- Chủ nhiệm đề tài:&ensp;<b><?php echo $detai['HOTEN'] ?></b></p>
				<?php $str="";
					$tv = thanh_vien_de_tai($detai['IDDT']);
					switch (count($tv)) {
						case 0:
							$str = "Không";
							break;
						case 1:
							$str = "<b>".$tv[0]['HOTEN']."</b>";
							break;
						default:
							for ($ii=0; $ii < count($tv) - 1; $ii++) { 
								$str.="<b>".$tv[$ii]['HOTEN']."</b>, ";
							}
							$str.="<b>".end($tv)['HOTEN']."</b>";
							break;
					}
				 ?>
				<p>- Thành viên tham gia: <?php echo $str; ?></p>
				<p>- Đơn vị công tác: <?php echo don_vi_cong_tac($detai['IDND']); ?></p>
				<p>4 - Cơ quan chủ trì đề tài: <b>Trường Đại học Sư phạm Kỹ thuật Vĩnh Long</b></p>
				<p>5 - Thời gian họp đánh giá: ... giờ ... phút</p>
				<p>6- Thành viên hội đồng đánh giá:</p>
				<p>- Tổng số: ................&ensp;&ensp;&ensp;- Có mặt: ................&ensp;&ensp;&ensp;- Vắng: ................</p>
				<p>7 - Kết quả kiểm phiếu đánh giá:</p>
				<p>- Tổng hợp điểm đánh giá của các uỷ viên theo danh sách hội đồng:</p>

				<!-- NỘI DUNG ĐÁNH GIÁ -->
				<table border="1" style="border-collapse: collapse;width: 100%;font-size: 17px;">
					<tr style="text-align: center;">
						<th rowspan="2" style="width: 1cm;">TT</th>
						<th rowspan="2">Tiêu chí đánh giá nghiệm thu</th>
						<th colspan="5" style="width:8cm;">Điểm đánh giá các ủy viên</th>
					</tr>
					<tr style="text-align: center;">
						<td><i>1</i></td>
						<td><i>2</i></td>
						<td><i>3</i></td>
						<td><i>4</i></td>
						<td><i>5</i></td>
					</tr>
					<tr>
						<td style="text-align: center;">1</td>
						<td style="padding-left: 0.3cm">Mức độ đáp ứng mục tiêu, nội dung, sản phẩm và thời gian thực hiện đề tài đã đăng ký</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td style="text-align: center;">2</td>
						<td style="padding-left: 0.3cm">Tính sáng tạo, ý nghĩa khoa học của đề tài (giải pháp hữu ích, sáng chế …)</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td style="text-align: center;">3</td>
						<td style="padding-left: 0.3cm">Khả năng ứng dụng, phát triển sau khi kết thúc</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td style="text-align: center;">4</td>
						<td style="padding-left: 0.3cm">Mức độ thực hiện các quy định về quản lý tài chính</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td style="text-align: center;">5</td>
						<td style="padding-left: 0.3cm">Chất lượng bản báo cáo kết quả nghiên cứu đề tài (Cấu trúc, cách trình bày, hình thức…)</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				</table>
				<p>- Điểm trung bình cộng: .....................................................</p>
				<p><strong>8 - Kết luận hội đồng</strong>:</p>
				<table border="0" style="width: 100%;">
					<tr style="text-align: center;">
						<td><img src="<?php echo $qlkh['HOSTADMIN'] ?>word/hinhvuong.png" width="25" height="25">&ensp;Nghiệm thu</td>
						<td><img src="<?php echo $qlkh['HOSTADMIN'] ?>word/hinhvuong.png" width="25" height="25">&ensp;Không nghiệm thu</td>
					</tr>
				</table>
				<!-- NGÀY THÁNG VIẾT ĐỀ XUẤT -->

				<p style="text-align: right;margin-top: 4mm;padding-right: 1mm"><i>Vĩnh Long</i>, ngày ...... tháng ...... năm ......</p>
				<!-- KÝ TÊN XÁC NHẬN -->
				<table style="width: 170mm;">
					<tr style="text-align: center;">
						<td><b>Chủ tịch hội đồng</b><br><i>Ký, Đóng dấu</i></td>
						<td style="width: 5cm;"></td>
						<td><b>Thư ký hội đồng</b><br><i>(Ký, Họ & tên)</i></td>
					</tr>
				</table>
				<br><br><br><br><br>
				<p style="text-align: center;color: #949494;font-size: 12px;">(Ghi chú: Đề tài được kết luận nghiệm thu khi có tổng số phiếu đánh giá đạt trên 50%)</p>
			</div>
		</div>
	</div>
</body>
</html>