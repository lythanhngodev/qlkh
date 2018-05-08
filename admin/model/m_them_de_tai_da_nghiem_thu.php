<?php
if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
include_once('../config.php');
function nguoi_dung(){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $hoi = "SELECT `IDND`, CONCAT(`HO`,' ',`TEN`) as HOTEN, `NGAYSINH`, `DONVICONGTAC`,`DIENTHOAIDD`, `MAIL`,`TRINHDOCHUYENMON` FROM `nguoidung` WHERE `TRANGTHAI` = N'binhthuong'";
    $dulieu = mysqli_query($conn, $hoi);
    mysqli_close($conn);
    return $dulieu;
}
?>