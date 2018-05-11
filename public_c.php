<?php 
	if (isset($_GET["p"]) && !empty($_GET["p"])) {
		switch ($_GET["p"]) {
			case 'xemtin':
				include_once("control/c_xem_tin.php");
				break;
			default:
				# code...
				break;
		}
	}
	else
		include_once("control/c_trang_chu.php");
 ?>