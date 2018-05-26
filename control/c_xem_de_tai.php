<?php
include_once 'model/m_xem_de_tai.php';
if (isset($_GET['id']) && !empty($_GET['id'])) {
	$iddt = intval($_GET['id']);
	$detai = chi_tiet_de_tai($iddt);
	$dt = mysqli_fetch_assoc($detai);
	include_once 'view/v_xem_de_tai.php';
}
else{
	trangchu();
}
?>