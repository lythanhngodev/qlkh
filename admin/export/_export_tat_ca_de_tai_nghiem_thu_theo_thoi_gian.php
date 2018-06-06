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
	$bd = mysqli_real_escape_string($conn,$bd);
	$kt = mysqli_real_escape_string($conn,$kt);
	$sql_stqd = "SELECT * FROM sotietquidoi";
	$esql_stqd = mysqli_query($conn, $sql_stqd);
	$stqd=null;
	while ($row = mysqli_fetch_row($esql_stqd)) {
	    $stqd[]=$row;
	}
	include_once("../excel/PHPExcel.php");
	$objPHPExcel = new PHPExcel();
	$objPHPExcel->setActiveSheetIndex(0);
	// tiêu đề
	$sheet = $objPHPExcel->getActiveSheet()->setTitle("TK NCKH"); // tiêu đề
	$sheet->getColumnDimension('A')->setAutoSize(true); // kích thước cột tự canh đều
	// GỌP CỘT
	$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A1:F3');
	$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A4:A5');
	$objPHPExcel->setActiveSheetIndex(0)->mergeCells('B4:B5');
	$objPHPExcel->setActiveSheetIndex(0)->mergeCells('C4:C5');
	$objPHPExcel->setActiveSheetIndex(0)->mergeCells('D4:D5');
	$objPHPExcel->setActiveSheetIndex(0)->mergeCells('E4:E5');
	$objPHPExcel->setActiveSheetIndex(0)->mergeCells('F4:F5');
	// Tieu đề A1
	$ten = "TK ĐỀ TÀI NCKH ĐÃ NGHIỆM THU $bd - $kt";
	$sheet->setCellValue('A1',"THỐNG KÊ ĐỀ TÀI NGHIÊN CỨU ĐÃ NGHIỆM THU\nTỪ ".date("m-Y", strtotime($bd))." ĐẾN ".date("m-Y", strtotime($kt)));
	$objPHPExcel->getActiveSheet()->getStyle('A1')->getAlignment()->setWrapText(true); // xuống nhiều dòng
	// Canh giữa A1:F4
	$sheet->getStyle('A1:F4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
	$sheet->getStyle('A1:F4')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
	// Cỡ chữ A1
	$objPHPExcel->getActiveSheet()->getStyle("A1")->getFont()->setSize(16);
	// In đậm tiêu đề
	$objPHPExcel->getActiveSheet()->getStyle("A1:F4")->getFont()->setBold(true);
	$rowCount=4;
	$sheet->setCellValue('A'.$rowCount,'TT');
	$sheet->setCellValue('B'.$rowCount,'Tên đề tài');
	$sheet->setCellValue('C'.$rowCount,'Thời gian nghiệm thu');
	$sheet->setCellValue('D'.$rowCount,'Tên CBVC, Đơn vị');
	$sheet->setCellValue('E'.$rowCount,'Số điểm');
	$sheet->setCellValue('F'.$rowCount,'Số tiết quy đổi');
	$rowCount++;
  	// lệnh sql
  	$sttcap=1;
	$rul_cap=thong_ke_de_tai_theo_bo($bd,$kt);
	while ($row=mysqli_fetch_assoc($rul_cap)) {
		$rowCount++;
		$rowBD=$rowCount;$rowBD++; // dòng bắt đầu chi tiết các đề tài đã nghiệm thu
		$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A'.$rowCount.':F'.$rowCount.'');
		$objPHPExcel->getActiveSheet()->getStyle('A'.$rowCount.':F'.$rowCount.'')->getFont()->setBold(true);
		$capdetai = $row['CAPDETAI'];
		$sheet->setCellValue('A'.$rowCount.'',$ketnoi->ConverToRoman($sttcap).". ".$capdetai);
		$sttcap++;$stt=1;
		$rul_nt = thong_ke_tat_ca_de_tai($capdetai,$bd,$kt);
		while ($nt=mysqli_fetch_assoc($rul_nt)) {
			$rowCount++; // tăng dòng
			$sheet->setCellValue('A'.$rowCount,$stt);
			$sheet->setCellValue('B'.$rowCount,$nt['TENDETAI']);
			$sheet->setCellValue('C'.$rowCount,$nt['THOIGIANNGHIEMTHU']);
            $iddt = $nt['IDDT'];
            $chuoi_cbvc="";
            $q_kbm = "SELECT DISTINCT k.TENKBM, k.IDKBM FROM thanhviendetai tv, khoabomon k, nguoidung nd, nguoidung_khoabomon nk WHERE tv.IDND = nd.IDND AND nd.IDND = nk.IDND AND  nk.IDKBM = k.IDKBM AND tv.IDDT = '$iddt';";
            $e_kbm = mysqli_query($conn, $q_kbm);
            while ($r_kbm = mysqli_fetch_assoc($e_kbm)) {
                $q_cbvc = "SELECT DISTINCT CONCAT(nd.HO, ' ', nd.TEN) AS  HOTEN FROM thanhviendetai tv, khoabomon k, nguoidung nd, nguoidung_khoabomon nk WHERE tv.IDND = nd.IDND AND nd.IDND = nk.IDND AND  nk.IDKBM = k.IDKBM AND tv.IDDT = '$iddt' AND k.IDKBM = '".$r_kbm['IDKBM']."';";
                $e_cbvc = mysqli_query($conn, $q_cbvc);
                while ($r_cbvc = mysqli_fetch_assoc($e_cbvc)) {
                    $chuoi_cbvc.=$r_cbvc['HOTEN']."\n";
                }
                $chuoi_cbvc.=$r_kbm['TENKBM'];
            }
			$sheet->setCellValue('D'.$rowCount,$chuoi_cbvc);

			$diem = 0;
			$diem = $nt['DIEM'];
			$sheet->setCellValue('E'.$rowCount,$diem);
			$sotiet=0;
            foreach ($stqd as $val){
                if($val[1] <= $diem && $val[2] >= $diem){$sotiet = $val[3]*$val[4];break;}
            }
			$sheet->setCellValue('F'.$rowCount,$sotiet);
			$stt++; // đếm số thứ tự
			$sheet->getStyle("A$rowCount:F$rowCount")->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
		}
		$objPHPExcel->getActiveSheet()->getStyle('D'.$rowCount)->getAlignment()->setWrapText(true); // xuống nhiều dòng
		$sheet->getStyle('A'.$rowBD.':A'.$rowCount)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$sheet->getStyle('C'.$rowBD.':F'.$rowCount)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		// Canh kích thước các cột
		$sheet->getColumnDimension('A')->setAutoSize(true);
		$sheet->getColumnDimension('B')->setAutoSize(true);
		$sheet->getColumnDimension('C')->setAutoSize(true);
		$sheet->getColumnDimension('D')->setAutoSize(true);
		$sheet->getColumnDimension('E')->setAutoSize(true);
		$sheet->getColumnDimension('F')->setAutoSize(true);
	}
	// Đường viền
	$sheet->getStyle('A4:' . 'F'.$rowCount)
		            ->applyFromArray(array(
		                'borders' => array(
		                    'allborders' => array(
		                        'style' => PHPExcel_Style_Border::BORDER_THIN
		                    )
		                )
					));

	mysqli_close($conn);
    // Iterating through all the columns
    // The after Z column problem is solved by using numeric columns; thanks to the columnIndexFromString method
  // Canh giữa số thứ tự
  /*$sheet->getStyle('A5:A'.$rowCount)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
  // Canh lề ngày nhập

  $sheet->getStyle('B6:B'.$rowCount)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
  $sheet->getStyle('G6:G'.$rowCount)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
  $sheet->getStyle('H6:H'.$rowCount)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);*/
  // Canh lề tên đăng nhập, họ tên
  //$sheet->getStyle('B6:C'.$rowCount)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
	$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
	header('Content-Type: application/vnd.openxmlformatsofficedocument.spreadsheetml.sheet');
	$filename = "$ten.xlsx";
	header('Content-Disposition: attachment; filename="' . $filename . '"');
	header('Cache-Control: max-age=0');
	$objWriter->save("php://output");
 ?>