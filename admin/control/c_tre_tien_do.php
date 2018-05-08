<?php 
if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
	include_once "model/m_tre_tien_do.php";
	$detai = lay_tre_tien_do();
	include_once "view/v_tre_tien_do.php";
 ?>