<?php
include_once 'model/m_xem_bai_bao.php';
if (isset($_GET['id']) && !empty($_GET['id'])) {
	$idbb = intval($_GET['id']);
	$baibao = chi_tiet_bai_bao($idbb);
	$bb = mysqli_fetch_assoc($baibao);
	include_once 'view/v_xem_bai_bao.php';
}
else{
	trangchu($qlkh['HOSTGOC']);
}
?>