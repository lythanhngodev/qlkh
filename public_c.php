<?php 
	if (isset($_GET["p"]) && !empty($_GET["p"])) {
		switch ($_GET["p"]) {
			case 'xemtin':
				include_once("control/c_xem_tin.php");
				break;
			case 'bieumau':
				include_once("control/c_bieu_mau.php");
				break;
		}
	}
	else
		include_once("control/c_trang_chu.php");
 ?>