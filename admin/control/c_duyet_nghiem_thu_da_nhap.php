<?php 
	if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
	include_once "model/m_duyet_nghiem_thu_da_nhap.php";
	$bao=null;
	if ($loaitaikhoan=='admin' || $loaitaikhoan=='khoahoc') {
        $detai = lay_nghiem_thu_da_nhap();
        include_once "view/v_duyet_nghiem_thu_da_nhap.php";
	}
	else
		include_once "view/v_khong_bai_bao.php";
 ?>