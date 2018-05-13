<?php
if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
    if ($loaitaikhoan!='admin' && $loaitaikhoan!='khoahoc'){
        include_once "view/v_khong_bai_bao.php";
        exit();
    }
	include_once "model/m_thong_ke.php";
	include_once "view/v_thong_ke.php";
 ?>