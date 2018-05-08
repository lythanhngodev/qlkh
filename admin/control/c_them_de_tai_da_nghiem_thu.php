<?php
if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
include_once "model/m_them_de_tai_da_nghiem_thu.php";
$nd = nguoi_dung();
$rnd = null;
while($row = mysqli_fetch_row($nd)) {
    $rnd[] = $row;
}
include_once "view/v_them_de_tai_da_nghiem_thu.php";
?>