<?php 
if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
	include_once "model/m_quan_ly_de_tai.php";
	$detai = lay_de_tai($idnd);
	//$ketnoi->chuoingaunhien(789);
	include_once "view/v_quan_ly_de_tai.php";
 ?>