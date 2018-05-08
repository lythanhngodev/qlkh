<?php
	if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
    include_once "model/m_danh_gia_nghiem_thu.php";
    $detai = lay_de_xuat_du_an($idnd);
    include_once "view/v_danh_gia_nghiem_thu.php";
?>