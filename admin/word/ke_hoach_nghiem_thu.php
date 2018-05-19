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
	function thong_tin_de_tai($iddt){
	    $ketnoi = new clsKetnoi();
	    $conn = $ketnoi->ketnoi();
	    $query = "SELECT dt.MADETAI, dt.TENDETAI, CONCAT(nd.HO, ' ', nd.TEN) as HOTEN FROM detai dt, thanhviendetai tv, nguoidung nd WHERE dt.iddt = '$iddt' AND dt.IDDT = tv.IDDT AND tv.TRACHNHIEM=N'Chủ nhiệm' AND tv.IDND = nd.IDND";
	    $result = mysqli_query($conn, $query);
	    mysqli_close($conn);
	    return $result;
	}
	
 ?>
<?php 
 header("Content-Type: application/vnd.ms-word");
 header("Expires: 0");
 header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
 header("content-disposition: attachment;filename=ke hoach nghiem thu.doc");
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
					<th colspan="3">KẾ HOẠCH NGHIỆM THU ĐỀ TÀI NCKH CẤP TRƯỜNG<br>Năm học 2017 - 2018</th>
				</tr>
				<tr>
					<td style="width: 1.4cm;"></td>
					<td>(Kèm theo Quyết định số: /QĐ-SPKTVL-NCKH, ngày ...... tháng ..... năm ...... của Hiệu trưởng Trường Đại học SPKT Vĩnh Long)</td>
					<td style="width: 1.4cm;"></td>
				</tr>
			</table>
			<div style="width: 190mm">
				<p><b>Thời gian nghiệm thu: </b></p>
				<p><b>Địa điểm: </b></p>
				<p><b>Chủ tịch hội đồng: </b></p>
				<p>1 - Công bố Quyết định thành lập Ban tổ chức và các Hội đồng đánh giá nghiệm thu đề tài;</p>
				<p>2 - Điều khiển các báo cáo nghiệm thu đề tài;</p>
				<p>3 - Chủ nhiệm đề tài báo cáo kết quả thực hiện đề tài:</p>

				<table border="1" style="width: 100%;border-collapse: collapse;">
					<tr style="text-align: center;">
						<th>TT</th>
						<th>Tên đề tài</th>
						<th>Chủ nhiệm đề tài</th>
						<th>Thời gian</th>
					</tr>
					<?php 
					$stt=1;
					for ($i=0; $i < count($ds); $i++) {
					$tt = thong_tin_de_tai($ds[$i]);
					while ($row = mysqli_fetch_assoc($tt)) { ?>
					<tr>
						<td style="text-align: center;width: 1cm;"><?php echo $stt; ?></td>
						<td style="padding-left: 0.3cm"><i><?php echo $row['TENDETAI'] ?></i></td>
						<td style="text-align: center;width: 4cm;"><?php echo $row['HOTEN']; ?></td>
						<td style="text-align: center;width: 4cm;"></td>
					</tr>
					<?php }
						$stt++; 
					} ?>
				</table>
				<p> 4- Nhận xét và câu hỏi của các phản biện cho đề tài;</p>
				<p> 5- Ý kiến của các thành viên Hội đồng;</p>
				<p> 6- Chủ nhiệm đề tài tiếp thu và giải trình các ý kiến chất vấn, phản biện;</p>
				<p> 7- Hoàn thành các phiếu chấm, đánh giá nghiệm thu, tổng hợp kết quả;</p>
				<p> 8- Công bố kết quả đánh giá nghiệm thu, bế mạc.</p>

				<!-- KÝ TÊN XÁC NHẬN -->
				<br>
				<table style="width: 190mm;">
					<tr>
						<td></td>
						<td style="text-align: center;width: 80mm;"><i>Vĩnh Long, ngày ..... tháng  .....  năm ......</i><br><br><b>BAN TỔ CHỨC</b></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</body>
</html>