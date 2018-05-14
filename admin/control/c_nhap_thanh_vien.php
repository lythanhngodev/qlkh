<?php 
	if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
	include_once "model/m_de_xuat_moi.php";
	$detai;
    switch ($loaitaikhoan) {
    	case 'admin':
    		include_once "view/v_nhap_thanh_vien.php";
    		break;
    	case 'khoahoc':
    		//include_once "view/v_nhap_thanh_vien.php";
            include_once "view/v_khong_bai_bao.php";
    		break;
    	default:
    		include_once "view/v_khong_bai_bao.php";
    		break;
    }
 ?>
