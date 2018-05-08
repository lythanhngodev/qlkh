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
    $query = "SELECT * FROM detai WHERE TRANGTHAI=N'Đang thực hiện'";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}
?>