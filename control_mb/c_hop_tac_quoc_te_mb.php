<?php
include_once 'model/m_hop_tac_quoc_te.php';
if (isset($_GET['id']) && !empty($_GET['id'])) {
	$id = intval($_GET['id']);
	$tin = lay_tin_them($id,0,8);
	include_once 'view_mb/v_hop_tac_quoc_te_mb.php';
}
else{
	trangchu();
}
?>