<?php 
	if (isset($_GET["p"]) && !empty($_GET["p"])) {
		switch ($_GET["p"]) {
			case 'thembaokhoahoc':
				include_once("control/c_them_bao_khoa_hoc.php");
				break;
			default:
				# code...
				break;
		}
	}
	else
		include_once("control/c_trang_chu.php");
 ?>