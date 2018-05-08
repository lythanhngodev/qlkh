<?php
if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
include_once("../config.php");
function lay_khoa_bo_mon(){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT DISTINCT * FROM khoabomon";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}
function lay_trinh_do_chuyen_mon(){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT DISTINCT * FROM trinhdochuyenmon";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}
function lay_chuc_danh_giang_vien(){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT DISTINCT * FROM chucdanhgiangvien";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}
function lay_hoc_vi(){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT DISTINCT * FROM hocvi";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}
function lay_chuc_danh_khoa_hoc(){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT DISTINCT * FROM chucdanhkhoahoc";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}
function lay_chuc_vu(){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT DISTINCT * FROM chucvu";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}
function lay_cap_bai_bao(){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT DISTINCT * FROM capbaibao";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}
function lay_cap_de_tai(){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT DISTINCT * FROM capdetai";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}
function lay_loai_hinh(){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT DISTINCT * FROM loaihinh";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}
function lay_linh_vuc(){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT DISTINCT * FROM linhvuc";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}
function lay_so_tiet_qui_doi(){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT DISTINCT * FROM sotietquidoi";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}
function lay_khoa_phong(){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT * FROM khoabomon";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}
function lay_mail(){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT mail FROM caidat";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}
?>