<?php
if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
include_once("../config.php");
function lay_de_xuat_du_an($idnd){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT DISTINCT nt.IDDT, dt.TENDETAI, dt.TRANGTHAI FROM xetduyetnghiemthu nt, detai dt WHERE dt.TRANGTHAI=N'Đang thực hiện' AND nt.IDDT = dt.IDDT AND nt.IDND = '$idnd'";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}
function lay_ten_chu_nhiem_de_tai($iddt){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT CONCAT(nd.HO,' ',nd.TEN) as HOTEN FROM thanhviendetai tv, nguoidung nd WHERE tv.IDND = nd.IDND AND tv.IDDT = '$iddt' AND tv.TRACHNHIEM=N'Chủ nhiệm'";
    $result = mysqli_query($conn, $query);
    $fetch = mysqli_fetch_assoc($result);
    $hotenchunhiem = $fetch['HOTEN'];
    mysqli_close($conn);
    return $hotenchunhiem;
}
?>