<?php
include_once 'model/m_xem_tin.php';
if (isset($_GET['id']) && !empty($_GET['id'])) {
	$id = intval($_GET['id']);
	cong_luot_xem($id);
	$baiviet = lay_chi_tiet_tin($id);
	$bv = mysqli_fetch_assoc($baiviet);
	include_once 'view/v_xem_tin.php';
}
else{
	trangchu($qlkh['HOSTGOC']);
}
?>