<?php 
if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
    if ($loaitaikhoan=='admin' || $loaitaikhoan=='khoahoc'){
		include_once "model/m_quan_ly_ho_so.php";
		//$detai = lay_de_xuat_du_an();
		include_once "view/v_quan_ly_ho_so.php";
    }
    else{
        include_once "view/v_khong_bai_bao.php";
        exit();
    }
 ?>