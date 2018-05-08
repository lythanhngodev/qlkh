<?php 
if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
	include_once "model/m_them_bao_khoa_hoc.php";
	$quocgia=lay_ten_quoc_gia();
	$tacgia=lay_ten_tac_gia();
	$cbb = lay_cap_bai_bao();
	include_once "view/v_them_bao_khoa_hoc.php";
 ?>