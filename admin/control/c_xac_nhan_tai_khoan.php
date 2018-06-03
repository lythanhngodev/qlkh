<?php 
if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
	include_once "model/m_xac_nhan_tai_khoan.php";
	if ($loaitaikhoan!='admin'){
		include_once "view/v_khong_bai_bao.php";
        exit();
	}
	$xn = tai_khoan_xac_nhan();
	include_once "view/v_xac_nhan_tai_khoan.php";
 ?>