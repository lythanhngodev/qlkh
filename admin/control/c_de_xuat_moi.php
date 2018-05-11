<?php 
	if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
	include_once "model/m_de_xuat_moi.php";
	$detai;
    switch ($loaitaikhoan) {
    	case 'admin':
    		$detai = lay_de_xuat();
    		include_once "view/v_de_xuat_moi_admin.php";
    		break;
    	case 'khoahoc':
    		$detai = lay_de_xuat();
    		include_once "view/v_de_xuat_moi_khoahoc.php";
    		break;
    	case 'truongkhoaphong':
    		$detai = lay_de_xuat_truongkhoaphong($idnd);
    		include_once "view/v_de_xuat_moi_truongkhoaphong.php";
    		break;
    	default:
    		include_once "view/v_khong_bai_bao.php";
    		break;
    }
 ?>
