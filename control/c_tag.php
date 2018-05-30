<?php
include_once 'model/m_tag.php';
if (isset($_GET['tag']) && !empty($_GET['tag'])) {
	$tu = $_GET['tag'];
	$ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $tu = mysqli_real_escape_string($conn,$tu);
    mysqli_close($conn);
	$tag = tim_tag($tu);
	include_once 'view/v_tag.php';
}
else{
	trangchu($qlkh['HOSTGOC']);
}
?>