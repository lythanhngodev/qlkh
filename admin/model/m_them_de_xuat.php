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
function cap_de_tai(){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $hoi = "SELECT * FROM `capdetai`";
    $dulieu = mysqli_query($conn, $hoi);
    mysqli_close($conn);
    return $dulieu;
}
function loai_hinh(){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $hoi = "SELECT * FROM `loaihinh`";
    $dulieu = mysqli_query($conn, $hoi);
    mysqli_close($conn);
    return $dulieu;
}
function linh_vuc_khoa_học(){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $hoi = "SELECT * FROM `linhvuc`";
    $dulieu = mysqli_query($conn, $hoi);
    mysqli_close($conn);
    return $dulieu;
}
?>