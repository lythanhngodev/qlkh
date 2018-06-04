<?php
include_once 'model/m_tin_tuc.php';
if (isset($_GET['id']) && !empty($_GET['id'])) {
	$id = intval($_GET['id']);
	$tin = lay_tin_them($id,0,6);
	include_once "view_mb/v_tin_tuc_mb.php";
}
else{
	trangchu();
}
?>