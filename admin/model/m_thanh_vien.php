<?php
if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
include_once("../config.php");
function lay_thanh_vien(){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT DISTINCT nd.IDND, CONCAT(nd.HO, ' ', nd.TEN) as HOTEN, l.TENLTK, l.IDLTK
        FROM nguoidung nd, loaitaikhoan_nguoidung ln, loaitaikhoan l,nguoidung_khoabomon nk
        WHERE nd.IDND = ln.IDND AND l.IDLTK = ln.IDLTK; ";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}
function lay_loai_tai_khoan(){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT * FROM loaitaikhoan";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}
function lay_khoa_phong($idnd){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT DISTINCT k.TENKBM FROM nguoidung nd, nguoidung_khoabomon nk, khoabomon k WHERE nd.IDND = nk.IDND AND  k.IDKBM = nk.IDKBM AND nd.IDND = '$idnd';";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}
?>
