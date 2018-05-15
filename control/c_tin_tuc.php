<?php
include_once 'model/m_tin_tuc.php';
if (isset($_GET['id']) && !empty($_GET['id'])) {
	$id = intval($_GET['id']);
	$tin = lay_tin($id);
	include_once 'view/v_tin_tuc.php';
}
else{
	header("Location: ".$qlkh['HOSTGOC']);
}
?>