<?php
if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
	include_once("model/m_slider.php");
    if ($loaitaikhoan=='admin' || $loaitaikhoan=='khoahoc'){
		$slider = vlu_all_slider();
		include_once("view/v_slider.php");
    }
    else{
        include_once "view/v_khong_bai_bao.php";
        exit();
    }
?>