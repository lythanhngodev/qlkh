<?php
include_once 'model/m_hop_tac_quoc_te.php';
if (isset($_GET['id']) && !empty($_GET['id'])) {
	$id = intval($_GET['id']);
	$tin = lay_tin($id);
	include_once 'view/v_hop_tac_quoc_te.php';
}
else{
	header("Location: ".$qlkh['HOSTGOC']);
}
?>