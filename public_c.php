<?php 
	if (isset($_GET["p"]) && !empty($_GET["p"])) {
		switch ($_GET["p"]) {
			case 'xemtin':
				include_once("control/c_xem_tin.php");
				break;
			case 'bieumau':
				include_once("control/c_bieu_mau.php");
				break;
			case 'detainghiemthu':
				include_once("control/c_de_tai_nghiem_thu.php");
				break;
			case 'baokhoahoc':
				include_once("control/c_bao_khoa_hoc.php");
				break;
			case 'tintuc':
				include_once("control/c_tin_tuc.php");
				break;
			case 'hoptacquocte':
				include_once("control/c_hop_tac_quoc_te.php");
				break;
		}
	}
	else
		include_once("control/c_trang_chu.php");
 ?>