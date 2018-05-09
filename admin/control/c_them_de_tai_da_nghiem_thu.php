<?php
if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
include_once "model/m_them_de_tai_da_nghiem_thu.php";
$nd = nguoi_dung();
$rnd = null;
while($row = mysqli_fetch_row($nd)) {
    $rnd[] = $row;
}
$cdt = cap_de_tai();
$_cdt = cap_de_tai();
$rcdt = null;
while($row = mysqli_fetch_row($_cdt)) {
    $rcdt[] = $row;
}
$lv = linh_vuc_khoa_học();
$_lv = linh_vuc_khoa_học();
$rlv = null;
while($row = mysqli_fetch_row($_lv)) {
    $rlv[] = $row;
}
$lh = loai_hinh();
$_lh = loai_hinh();
$rlh = null;
while($row = mysqli_fetch_row($_lh)) {
    $rlh[] = $row;
}
include_once "view/v_them_de_tai_da_nghiem_thu.php";
?>