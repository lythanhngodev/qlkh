<?php 
	if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
	include_once "model/m_bao_khoa_hoc.php";
	$bao=null;
	if ($loaitaikhoan=='admin') {
        $bao = lay_bao_khoa_hoc();
	}else{
        $bao = nv_lay_bao_khoa_hoc($idnd);
    }
	include_once "view/v_bao_khoa_hoc.php";
 ?>
