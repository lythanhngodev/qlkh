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
	function thong_ke_de_tai_theo_bo(){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$query_cap = "SELECT DISTINCT CAPBAIBAO FROM baokhoahoc";
		$result_cap = mysqli_query($conn, $query_cap);
		mysqli_close($conn);
		return $result_cap;
	}
	function thong_ke_bai_bao_theo_thoi_gian($capbaibao,$bd,$kt){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$query = "SELECT DISTINCT b.IDBAO,b.TENBAO, b.NAMXUATBAN, b.TAPCHI, b.CAPBAIBAO, b.DIEM, b.SOTIET FROM baokhoahoc b, nguoidung_baibao nb WHERE b.ANHIEN=b'1' AND b.CAPBAIBAO = N'$capbaibao' AND (DATE_FORMAT(CONCAT(b.NAMXUATBAN,'-01'),'%Y-%m') BETWEEN (DATE_FORMAT(CONCAT('$bd','-01'),'%Y-%m')) AND (DATE_FORMAT(CONCAT('$kt','-01'),'%Y-%m')))";
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
	include_once("../excel/PHPExcel.php");
	$objPHPExcel = new PHPExcel();
	$objPHPExcel->setActiveSheetIndex(0);
	// tiêu đề
	$sheet = $objPHPExcel->getActiveSheet()->setTitle("TK BKH"); // tiêu đề
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
	$ten = "TK BÀI BÁO KHOA HỌC $bd - $kt";
	$sheet->setCellValue('A1',"THỐNG KÊ BÀI BÁO KHOA HỌC\nTỪ ".date("m-Y", strtotime($bd))." ĐẾN ".date("m-Y", strtotime($kt)));
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
	$sheet->setCellValue('B'.$rowCount,'Tên bài báo');
	$sheet->setCellValue('C'.$rowCount,'Tác giả');
	$sheet->setCellValue('D'.$rowCount,'Đơn vị');
	$sheet->setCellValue('E'.$rowCount,'Ghi chú');
	$sheet->setCellValue('F'.$rowCount,'Số tiết quy đổi');
	$rowCount++;
  	// lệnh sql
  	$sttcap=1;
	$rul_cap=thong_ke_de_tai_theo_bo();
	while ($row=mysqli_fetch_assoc($rul_cap)) {
		$rowCount++;
		$rowBD=$rowCount;$rowBD++; // dòng bắt đầu chi tiết các đề tài đã nghiệm thu
		$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A'.$rowCount.':F'.$rowCount.'');
		$objPHPExcel->getActiveSheet()->getStyle('A'.$rowCount.':F'.$rowCount.'')->getFont()->setBold(true);
		$capdetai = $row['CAPBAIBAO'];
		$sheet->setCellValue('A'.$rowCount.'',$ketnoi->ConverToRoman($sttcap).". ".$capdetai);
		$sttcap++;$stt=1;
		$rul_nt = thong_ke_bai_bao_theo_thoi_gian($capdetai,$bd,$kt);
		while ($nt=mysqli_fetch_assoc($rul_nt)) {
			$rowCount++; // tăng dòng
			$sheet->setCellValue('A'.$rowCount,$stt);
			$sheet->setCellValue('B'.$rowCount,$nt['TENBAO']);
			$objPHPExcel->getActiveSheet()->getStyle('B'.$rowCount)->getAlignment()->setWrapText(true); // xuống nhiều dòng
			$tacgia = "";
            $r_tg = lay_tac_gia_bai_bao($nt['IDBAO']);
                $tg = null;
                while ($_tg = mysqli_fetch_assoc($r_tg)){
                    $tg[] = $_tg['HOTEN'];
                }
            switch (count($tg)) {
                case 0:
                    $tacgia.="";
                    break;
                case 1:
                    $tacgia.=$tg[0];
                    break;
                default:
                    for ($i=0; $i < count($tg)-1; $i++) { 
                        $tacgia.=$tg[$i]."\n";
                    }
                    $tacgia.=end($tg);
                    break;
            }
			$sheet->setCellValue('C'.$rowCount,$tacgia);
			$objPHPExcel->getActiveSheet()->getStyle('C'.$rowCount)->getAlignment()->setWrapText(true); // xuống nhiều dòng
			$donvi="";
            $dv = lay_don_vi($nt['IDBAO']);
            switch (count($dv)) {
                case 0:
                    $donvi.="";
                    break;
                case 1:
                    $donvi.=$dv[0];
                    break;
                default:
                    for ($i=0; $i < count($dv)-1; $i++) { 
                        $donvi.=$dv[$i]."\n";
                    }
                    $donvi.=end($dv);
                    break;
            }
			$sheet->setCellValue('D'.$rowCount,$donvi);
			$objPHPExcel->getActiveSheet()->getStyle('D'.$rowCount)->getAlignment()->setWrapText(true); // xuống nhiều dòng
			$sotiet = $nt['SOTIET'];
			$sheet->setCellValue('F'.$rowCount,$sotiet);
			$stt++; // đếm số thứ tự
			$sheet->getStyle("A$rowCount:F$rowCount")->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
		}
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
	$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
	$filename = "$ten.xlsx";
	$objWriter->save($filename);
	header('Content-Disposition: attachment; filename="' . $filename . '"');
	header('Content-Type: application/vnd.openxmlformatsofficedocument.spreadsheetml.sheet');
	header('Content-Length: ' . filesize($filename));
	header('Content-Transfer-Encoding: binary');
	header('Cache-Control: must-revalidate');
	header('Pragma: no-cache');
	readfile($filename);
	return;
 ?>