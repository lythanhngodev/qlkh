<?php 
	if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
	include_once "model/m_den_han_bao_cao.php";
	$detai = lay_den_han_bao_cao();
	include_once "view/v_den_han_bao_cao.php";
 ?>