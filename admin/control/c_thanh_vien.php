<?php
if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
if ($loaitaikhoan!='admin'){
    include_once "view/v_khong_bai_bao.php";
    exit();
}
include_once "model/m_thanh_vien.php";
$tv = lay_thanh_vien($idnd);
$_ltk = lay_loai_tai_khoan();
$ltk = null;
while ($row = mysqli_fetch_assoc($_ltk)) {
	$ltk[] = $row;
}
include_once "view/v_thanh_vien.php";
?>