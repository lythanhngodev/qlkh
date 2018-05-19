<?php 
	if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
	include_once "model/m_hoi_dong_xet_chon.php";
	$bao=null;
	if ($loaitaikhoan=='admin' || $loaitaikhoan=='khoahoc') {
        $hoidong = lay_hoi_dong();
        include_once "view/v_hoi_dong_xet_chon.php";
	}
	else
		include_once "view/v_khong_bai_bao.php";
 ?>