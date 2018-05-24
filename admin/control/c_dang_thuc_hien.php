<?php 
	if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
	include_once "model/m_dang_thuc_hien.php";
	$detai;
    switch ($loaitaikhoan) {
    	case 'admin':
    		$detai = lay_dang_thuc_hien();
    		include_once "view/v_dang_thuc_hien_admin.php";
    		break;
    	case 'khoahoc':
    		$detai = lay_dang_thuc_hien();
    		include_once "view/v_dang_thuc_hien_khoahoc.php";
    		break;
    	case 'truongkhoaphong':
    		$detai = lay_dang_thuc_hien_truongkhoaphong($idnd);
    		include_once "view/v_dang_thuc_hien_truongkhoaphong.php";
    		break;
    	default:
    		include_once "view/v_khong_bai_bao.php";
    		break;
    }
 ?>
