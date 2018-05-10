<?php 
if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
	include_once "model/m_tre_tien_do.php";
	$detai;
	switch ($loaitaikhoan) {
		case 'admin':
			$detai = lay_tre_tien_do_admin();
			include_once "view/v_tre_tien_do_admin.php";
			exit();
			break;
		case 'binhthuong':
			$detai = lay_tre_tien_do_binhthuong($idnd);
			include_once "view/v_tre_tien_do_binhthuong.php";
			exit();
			break;
		case 'truongkhoaphong':
			$detai = lay_tre_tien_do_truongkhoaphong($idnd);
			include_once "view/v_tre_tien_do_truongkhoaphong.php";
			exit();
			break;
		default:
			include_once 'view/v_khong_bai_bao.php';
			exit();
			break;
	}
 ?>