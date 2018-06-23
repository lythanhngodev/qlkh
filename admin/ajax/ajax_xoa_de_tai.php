<?php
include_once("../../config.php");
session_start();
if (isset($_SESSION['tdn']) && isset($_SESSION['pas']) && isset($_SESSION['_loaitaikhoan']) && ($_SESSION['_loaitaikhoan']=='admin' || $_SESSION['_loaitaikhoan']=='khoahoc') && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
    $ketnoi = new clsKetnoi();
    if (!($ketnoi->checklogin($_SESSION['tdn'],$_SESSION['pas']))) {
        trangchu($qlkh['HOSTADMIN']);
        exit();
    }
}else{
    trangchu($qlkh['HOSTADMIN']);
}
$result = Array(
    'trangthai' => 0
);
function xoadetai($iddt,$idnd){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $iddt = intval($iddt);
    $idnd = intval($idnd);
    $q = "SELECT IDDT FROM detai WHERE IDDT = '$iddt' AND TRANGTHAI != 'Đã nghiệm thu'";
    $eq = mysqli_query($conn,$q);
    $rq = mysqli_num_rows($eq);
    if ($rq == 0) return false;
    $sql = "DELETE FROM `detai` WHERE `IDDT` = '$iddt' AND EXISTS (SELECT IDND FROM thanhviendetai WHERE IDND = $idnd AND IDDT = $iddt AND TRACHNHIEM=N'Chủ nhiệm');";
    $test = mysqli_query($conn,$sql);
    $demdong = mysqli_affected_rows($conn);
    if ($demdong==0) return false;
    $sql= "DELETE FROM `loaihinhnghiencuu` WHERE `IDDT` = '$iddt';";
    $sql.= "DELETE FROM `linhvuckhoahoc` WHERE `IDDT` = '$iddt';";
    $sql.= "DELETE FROM `thanhviendetai` WHERE `IDDT` = '$iddt';";
    $sql.= "DELETE FROM `tochucthamgia` WHERE `IDDT` = '$iddt';";
    $sql.= "DELETE FROM `tiendodukien` WHERE `IDDT` = '$iddt';";
    $sql.= "DELETE FROM `kinhphi` WHERE `IDDT` = '$iddt';";
    $sql.="DELETE FROM dexuatdetai WHERE IDDT = '$iddt';";
    if(mysqli_multi_query($conn, $sql)===TRUE){
        mysqli_close($conn);
        return true;
    }
    else
        return false;
}
if (xoadetai($_POST['id'],$_SESSION['_idnd'])) {
    $result['trangthai'] = 1;
    echo json_encode($result);
    exit();
}
else{
    exit();
}
?>




