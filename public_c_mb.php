<?php 
	if (isset($_GET["p"]) && !empty($_GET["p"])) {
		switch ($_GET["p"]) {
			case 'xemtin':
				include_once("control_mb/c_xem_tin_mb.php");
				break;
			case 'xemdetai':
				include_once("control_mb/c_xem_de_tai_mb.php");
				break;
			case 'xembaibao':
				include_once("control_mb/c_xem_bai_bao_mb.php");
				break;
			case 'bieumau':
				include_once("control_mb/c_bieu_mau_mb.php");
				break;
			case 'nckhdacongbo':
				include_once("control_mb/c_nckh_da_cong_bo_mb.php");
				break;
			case 'nckhdexuatmoi':
				include_once("control_mb/c_nckh_de_xuat_moi_mb.php");
				break;
			case 'baokhoahoc':
				include_once("control_mb/c_bao_khoa_hoc_mb.php");
				break;
			case 'tintuc':
				include_once("control_mb/c_tin_tuc_mb.php");
				break;
			case 'hoptacquocte':
				include_once("control_mb/c_hop_tac_quoc_te_mb.php");
				break;
			case 'timkiem':
				include_once("control_mb/c_tim_kiem_mb.php");
				break;
		}
	}
	else
		include_once("control_mb/c_trang_chu_mb.php");
 ?>