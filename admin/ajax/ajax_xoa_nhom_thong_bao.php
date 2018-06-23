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
if(!isset($_POST['nhom']) || empty($_POST['nhom'])){
    trangchu($qlkh['HOSTADMIN']);
}
$idnhom = $_POST['nhom'];
$idnhom = intval($idnhom);
$ketnoi = new clsKetnoi();
$conn = $ketnoi->ketnoi();
$sql = "DELETE FROM `nhomthongbao` WHERE `IDNTB` = '$idnhom'";
$test = mysqli_query($conn,$sql);
$demdong = mysqli_affected_rows($conn);
if ($demdong==0) {
    echo json_encode($result);
    exit();
}
$sql = "DELETE FROM `nhomthongbao_nguoidung` WHERE `IDNTB` = '$idnhom'";
if(mysqli_query($conn, $sql)){
    $result['trangthai'] = 1;
    mysqli_close($conn);
    echo json_encode($result);
    exit();
}
else{
    mysqli_close($conn);
    echo json_encode($result);
    exit();
}
?>