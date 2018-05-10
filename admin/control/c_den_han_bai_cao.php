<?php 
	if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}

	include_once "model/m_den_han_bao_cao.php";
	$detai;
	switch ($loaitaikhoan) {
		case 'admin':
			$detai = lay_den_han_bao_cao_admin();
			include_once "view/v_den_han_bao_cao_admin.php";
			exit();
			break;
		case 'binhthuong':
			$detai = lay_den_han_bao_cao_binhthuong($idnd);
			include_once "view/v_den_han_bao_cao_binhthuong.php";
			exit();
			break;
		case 'truongkhoaphong':
			$detai = lay_den_han_bao_cao_truongkhoaphong($idnd);
			include_once "view/v_den_han_bao_cao_truongkhoaphong.php";
			exit();
			break;
		default:
			include_once 'view/v_khong_bai_bao.php';
			exit();
			break;
	}
 ?>