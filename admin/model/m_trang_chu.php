<?php
if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
include_once("../config.php");
function dang_ky_nguoi_dung(){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT HO FROM nguoidung WHERE XACNHAN = b'0'";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}
function xet_duyet_de_tai(){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT * FROM detai WHERE TRANGTHAI=N'Đang xét duyệt'";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}
function nghiem_thu_de_tai(){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT dt.IDDT AS SODETAI FROM dexuatdetai dx, detai dt, thanhviendetai tv WHERE dx.IDDT = dt.IDDT AND tv.IDDT = dx.IDDT AND tv.TRACHNHIEM = N'Chủ nhiệm' AND dt.TRANGTHAI=N'Đang thực hiện' AND DATE_FORMAT(CONCAT(dt.THANGNAMKT,'-01'),'%Y-%m') = DATE_FORMAT(CURRENT_DATE(),'%Y-%m') ORDER BY dx.IDDX DESC";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}
?>