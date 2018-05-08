<?php
if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
    if ($loaitaikhoan!='admin'){
        include_once "view/v_khong_bai_bao.php";
        exit();
    }
	include_once "model/m_them_tin_tuc.php";
	include_once "view/v_them_tin_tuc.php";
 ?>