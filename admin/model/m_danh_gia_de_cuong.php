<?php
if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
include_once("../config.php");
function lay_de_xuat_du_an($idnd){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT DISTINCT xd.IDDT, dt.TENDETAI, dx.NGAYDEXUAT, dt.TRANGTHAI FROM xetduyetdetai xd, detai dt, dexuatdetai dx WHERE dt.TRANGTHAI=N'Đang xét duyệt' AND xd.IDDT = dt.IDDT AND xd.IDND = '$idnd' AND dx.IDDT = xd.IDDT";
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
?>