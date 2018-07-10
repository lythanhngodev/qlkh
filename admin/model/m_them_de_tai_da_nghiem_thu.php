<?php
if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
include_once('../config.php');
function nguoi_dung(){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $hoi = "SELECT DISTINCT nd.`IDND`, CONCAT(`HO`,' ',`TEN`) as HOTEN, `NGAYSINH`, `DIENTHOAIDD`, `MAIL`, kbm.TENTAT 
            FROM `nguoidung` nd 
                    LEFT JOIN nguoidung_khoabomon k ON nd.IDND=k.IDND 
                    LEFT JOIN khoabomon kbm ON k.IDKBM=kbm.IDKBM 
            WHERE `TRANGTHAI` = N'binhthuong' AND nd.XACNHAN=b'1'
    ";
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
function nguoi_dung_don_vi_cong_tac(){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $hoi = "SELECT DISTINCT nk.IDND,k.TENKBM FROM khoabomon k, nguoidung_khoabomon nk WHERE k.IDKBM = nk.IDKBM;";
    $dulieu = mysqli_query($conn, $hoi);
    mysqli_close($conn);
    return $dulieu;
}
function nguoi_dung_trinh_do_chuyen_mon(){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $hoi = "SELECT DISTINCT nt.IDND, td.TENTRINHDO FROM trinhdochuyenmon td, nguoidung_trinhdochuyenmon nt WHERE td.IDTD = nt.IDTD;";
    $dulieu = mysqli_query($conn, $hoi);
    mysqli_close($conn);
    return $dulieu;
}
?>