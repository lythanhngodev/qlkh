<?php 
	if (isset($_GET["p"]) && !empty($_GET["p"])) {
		switch ($_GET["p"]) {
			case 'xemtin':
				include_once("control/c_xem_tin.php");
				break;
			case 'xemdetai':
				include_once("control/c_xem_de_tai.php");
				break;
			case 'xembaibao':
				// Chưa .htaccess
				include_once("control/c_xem_bai_bao.php");
				break;
			case 'bieumau':
				include_once("control/c_bieu_mau.php");
				break;
			case 'nckhdacongbo':
				include_once("control/c_nckh_da_cong_bo.php");
				break;
			case 'nckhdexuatmoi':
				include_once("control/c_nckh_de_xuat_moi.php");
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
			case 'timkiem':
				include_once("control/c_tim_kiem.php");
				break;
			case 'tag':
				include_once("control/c_tag.php");
				break;
			case 'timkiemgg':
				include_once("control/c_tim_kiem_gg.php");
				break;
		}
	}
	else
		include_once("control/c_trang_chu.php");
 ?>