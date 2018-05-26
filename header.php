	<?php 
	if (isset($_GET["p"]) && !empty($_GET["p"])) {
		switch ($_GET["p"]) {
			case 'xemtin':
				include_once("header/h_xem_tin.php");
				break;
			case 'xemdetai':
				include_once("header/h_xem_de_tai.php");
				break;
			case 'xembaibao':
				include_once("header/h_xem_bai_bao.php");
				break;
			case 'bieumau':
				include_once("header/h_bieu_mau.php");
				break;
			case 'nckhdacongbo':
				include_once("header/h_nckh_da_cong_bo.php");
				break;
			case 'nckhdexuatmoi':
				include_once("header/h_nckh_de_xuat_moi.php");
				break;
			case 'baokhoahoc':
				include_once("header/h_bao_khoa_hoc.php");
				break;
			case 'tintuc':
				include_once("header/h_tin_tuc.php");
				break;
			case 'hoptacquocte':
				include_once("header/h_hop_tac_quoc_te.php");
				break;
			case 'timkiem':
				include_once("header/h_tim_kiem.php");
				break;
		}
	}
	else
		include_once("header/h_trang_chu.php");
 ?>