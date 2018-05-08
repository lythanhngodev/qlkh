<?php
/**
 * Created by PhpStorm.
 * User: Ly Thanh Ngo
 * Date: 26/04/2018
 * Time: 9:52 AM
 */
?>
<?php
if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
include_once("../config.php");
function lay_thong_tin_nguoi_dung($idnd){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT * FROM nguoidung WHERE IDND = '$idnd'";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}
function lay_dai_hoc($idnd){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT * FROM `daihoc` WHERE IDND = '$idnd'";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}
function lay_cong_tac_chuyen_mon($idnd){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT * FROM `congtacchuyenmon` WHERE IDND = '$idnd'";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}
function lay_chuc_danh_giang_vien(){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT DISTINCT * FROM `chucdanhgiangvien`";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}
function lay_trinh_do_chuyen_mon(){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT DISTINCT * FROM `trinhdochuyenmon`";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}
function lay_hoc_vi(){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT DISTINCT * FROM `hocvi`";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}
function lay_chuc_danh_khoa_hoc(){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT DISTINCT * FROM `chucdanhkhoahoc`";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}
function lay_chuc_vu(){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT DISTINCT * FROM `chucvu`";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}
function lay_de_tai_nghien_cuu_khoa_hoc($idnd){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT DISTINCT dt.TENDETAI, dt.THANGNAMBD, dt.THANGNAMKT, dt.CAPDETAI, tv.TRACHNHIEM FROM detai dt, detai_nguoidung dn, thanhviendetai tv WHERE dt.IDDT=dn.IDDT AND dn.IDND = tv.IDND AND dn.IDND = '$idnd' AND dt.TRANGTHAI=N'Đã nghiệm thu'";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}
function lay_cong_trinh_nghien_cuu_khoa_hoc($idnd){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT b.TENBAO, b.NAMXUATBAN, b.TAPCHI FROM baokhoahoc b, nguoidung_baibao nb WHERE b.IDBAO = nb.IDBAO AND nb.IDND = '$idnd' ORDER BY b.NAMXUATBAN DESC";
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
?>
