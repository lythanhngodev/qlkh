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
function chi_tiet_de_tai($iddt){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT dx.`IDDT`, MADETAI,DIEM,`TENDETAI`, `MUCTIEU`, `NOIDUNG`, `CAPDETAI`, `MOISANGTAO`, `THUOCCHUONGTRINH`, `SUCANTHIET`, `TINHHINHNGHIENCUU`, `NGHIENCUULIENQUAN`, `PHUONGPHAPKYTHUAT`, `KINHPHINGANSACH`, `KINHPHINGUONKHAC`, `THANGTHUCHIEN`, `THANGNAMBD`, `THANGNAMKT`, `KETQUA`, `FILE`, `NGAYTHEM`, `TRANGTHAI`, THOIGIANNGHIEMTHU FROM detai dt, dexuatdetai dx WHERE dt.IDDT = dx.IDDT AND dx.IDDT = '$iddt'";
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
    $query = "SELECT tv.IDTV, CONCAT(nd.HO, ' ', nd.TEN) AS HOTEN, nd.TRINHDOCHUYENMON, nd.DONVICONGTAC, nd.DIENTHOAIDD, tv.CONGVIEC FROM thanhviendetai tv, nguoidung nd WHERE tv.IDND = nd.IDND AND tv.IDDT = '$iddt' ORDER BY tv.IDTV ASC ;";
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
function chu_nhiem_de_tai($iddt){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT CONCAT(nd.HO,' ',nd.TEN) as HOTEN, nd.DIENTHOAIDD,nd.HOCVICAONHAT,nd.TRINHDOCHUYENMON, nd.CHUCDANHGIANGVIEN, nd.MAIL, nd.CHUCDANHKHOAHOC, dt.IDND FROM detai_nguoidung dt, nguoidung nd WHERE dt.IDND = nd.IDND AND dt.IDDT = '$iddt'";
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
function thanh_vien_xet_duyet($iddt){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT nd.IDND,CONCAT(nd.HO,' ',nd.TEN) as HOTEN, nd.NGAYSINH FROM nguoidung nd WHERE nd.IDND NOT IN (SELECT dn.IDND FROM detai_nguoidung dn WHERE dn.IDDT = '$iddt') AND nd.TRANGTHAI = 'binhthuong'";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}
function thanh_vien_xet_duyet_da_chon($iddt){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT DISTINCT xd.IDND,CONCAT(nd.HO,' ',nd.TEN) as HOTEN,nd.NGAYSINH,xd.VAITRO FROM xetduyetdetai xd, nguoidung nd WHERE xd.LOAIHD = '0' AND xd.IDND = nd.IDND AND xd.IDDT = '$iddt'";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}
function thanh_vien_ban_to_chuc_da_chon($iddt){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT DISTINCT xd.IDND,CONCAT(nd.HO,' ',nd.TEN) as HOTEN,nd.NGAYSINH, xd.VAITRO FROM xetduyetdetai xd, nguoidung nd WHERE xd.LOAIHD = '1' AND xd.IDND = nd.IDND AND xd.IDDT = '$iddt'";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}
function thanh_vien_nghiem_thu_da_chon($iddt){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT DISTINCT nt.IDND,CONCAT(nd.HO,' ',nd.TEN) as HOTEN,nd.NGAYSINH, nt.YKIEN FROM xetduyetnghiemthu nt, nguoidung nd WHERE nt.IDND = nd.IDND AND nt.IDDT = '$iddt'";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}
function ket_qua_xet_duyet($iddt){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT CONCAT(nd.HO,' ', nd.TEN) as HOTEN, `VAITRO`, `FILE` FROM xetduyetdetai xd, nguoidung nd WHERE xd.IDND = nd.IDND and xd.IDDT = '$iddt' AND xd.LOAIHD = '0'";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}
function ket_qua_nghiem_thu($iddt){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT CONCAT(nd.HO,' ', nd.TEN) as HOTEN, `FILE`, `YKIEN` FROM xetduyetnghiemthu nt, nguoidung nd WHERE nt.IDND = nd.IDND and nt.IDDT = '$iddt'";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}
function lay_bao_cao_tien_do($iddt){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT `CVDATH`, `CVCANTH`, `DENGHI`, `NGAYBC` FROM `baocaotiendo` WHERE `IDDT` = '$iddt' ORDER BY NGAYBC ASC";
    $result = mysqli_query($conn, $query);
    return $result;
}
?>