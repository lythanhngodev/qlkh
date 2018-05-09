<?php
/**
 * Created by PhpStorm.
 * User: Ly Thanh Ngo
 * Date: 12/04/2018
 * Time: 1:49 PM
 */
?>
<?php
if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
include_once("../config.php");
function chi_tiet_de_tai($iddt,$idnd){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT DISTINCT dt.`IDDT`, `TENDETAI`, `MUCTIEU`, `NOIDUNG`, `CAPDETAI`, `MOISANGTAO`, `THUOCCHUONGTRINH`, `SUCANTHIET`, `TINHHINHNGHIENCUU`, `NGHIENCUULIENQUAN`, `PHUONGPHAPKYTHUAT`, `KINHPHINGANSACH`, `KINHPHINGUONKHAC`, `THANGTHUCHIEN`, `THANGNAMBD`, `THANGNAMKT`, `KETQUA`, `FILE`, `NGAYTHEM`, `TRANGTHAI` FROM detai dt, detai_nguoidung dn WHERE dn.IDDT = dt.IDDT AND dn.IDND = '$idnd' AND dn.IDDT = '$iddt'";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}
function loai_hinh_nghien_cuu($iddt){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT DISTINCT TENLH FROM `loaihinhnghiencuu` WHERE IDDT = '$iddt'";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}
function linh_vuc_khoa_hoc($iddt){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT DISTINCT `TENLV` FROM `linhvuckhoahoc` WHERE IDDT = '$iddt'";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}
function thanh_vien_de_tai($iddt){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT tv.IDTV, CONCAT(nd.HO, ' ', nd.TEN) AS HOTEN, tv.CONGVIEC,tv.IDND FROM thanhviendetai tv, nguoidung nd WHERE tv.IDND = nd.IDND AND tv.TRACHNHIEM = N'Thành viên' AND tv.IDDT = '$iddt' ORDER BY tv.IDTV ASC ;";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}
function nguoi_dung(){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT `IDND`, CONCAT(`HO`,' ',`TEN`) as HOTEN, `NGAYSINH`,`DIENTHOAIDD`, `MAIL` FROM `nguoidung` WHERE `TRANGTHAI` = N'binhthuong'";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}
function to_chuc_tham_gia($iddt){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT * FROM `tochucthamgia` WHERE IDDT = '$iddt' ORDER BY IDTC";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}
function du_kien_tien_do($iddt){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT * FROM `tiendodukien` WHERE IDDT = '$iddt' ORDER BY IDDKTD";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}
function kinh_phi($iddt){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT * FROM `kinhphi` WHERE IDDT = '$iddt' ORDER BY IDKP";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}
function lay_ten_chu_nhiem_de_tai($iddt){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT CONCAT(nd.HO,' ',nd.TEN) as HOTEN FROM detai_nguoidung dt, nguoidung nd WHERE dt.IDND = nd.IDND AND dt.IDDT = '$iddt'";
    $result = mysqli_query($conn, $query);
    $fetch = mysqli_fetch_assoc($result);
    $hotenchunhiem = $fetch['HOTEN'];
    mysqli_close($conn);
    return $hotenchunhiem;
}
function lay_bao_cao_tien_do($iddt){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT `CVDATH`, `CVCANTH`, `DENGHI`, `NGAYBC` FROM `baocaotiendo` WHERE `IDDT` = '$iddt' ORDER BY NGAYBC ASC";
    $result = mysqli_query($conn, $query);
    return $result;
}
function chu_nhiem_de_tai($iddt){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT tv.IDTV, CONCAT(nd.HO, ' ', nd.TEN) AS HOTEN, nd.DIENTHOAIDD, tv.CONGVIEC,tv.IDND FROM thanhviendetai tv, nguoidung nd WHERE tv.IDND = nd.IDND AND tv.IDDT = '$iddt' ORDER BY tv.IDTV ASC LIMIT 0,1;";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}
function don_vi_cong_tac($idnd){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT k.TENKBM FROM nguoidung_khoabomon a, nguoidung nd, khoabomon k WHERE a.IDND = nd.IDND AND a.IDKBM = k.IDKBM AND a.IDND = '$idnd'";
    $result = mysqli_query($conn, $query);
    $fetch = mysqli_fetch_assoc($result);
    $dvct = $fetch['TENKBM'];
    mysqli_close($conn);
    return $dvct;
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
