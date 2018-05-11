<?php
if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
    if ($loaitaikhoan=='admin' || $loaitaikhoan=='khoahoc'){
		include_once "model/m_them_tin_tuc.php";
		$cm = lay_chuyen_muc();
		include_once "view/v_them_tin_tuc.php";
    }else{
	    include_once "view/v_khong_bai_bao.php";
	    exit();
    }
 ?>