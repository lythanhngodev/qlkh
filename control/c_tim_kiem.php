<?php
include_once 'model/m_tim_kiem.php';
if (isset($_POST['tu']) && !empty($_POST['tu']) || isset($_POST['loai']) && !empty($_POST['loai'])) {
	$loai = $_POST['loai'];
	$loai = intval($loai);
	$tu = $_POST['tu'];
	$ketnoi = new clsKetnoi();
	$connn = $ketnoi->ketnoi();
	$tu = mysqli_real_escape_string($connn,$tu);
	switch ($loai) {
		case 1:
			// tìm đã nghiệm thu
			$detai = tim_de_tai_da_cong_bo($tu);
			include_once 'view/v_tim_kiem_da_nghiem_thu.php';
			break;
		case 2:
			// tìm đã nghiệm thu
			$detai = tim_de_tai_de_xuat($tu);
			include_once 'view/v_tim_kiem_de_tai_de_xuat.php';
			break;
		default:
			// tim de xuat moi
			break;
	}
}
else{
	trangchu();
}
?>