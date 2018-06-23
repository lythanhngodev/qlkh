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
    'trangthai' => 0,
    'ma' => 0
);
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $tu = $_POST['tu'];
    $den = $_POST['den'];
    $he = $_POST['he'];
    $tu = mysqli_real_escape_string($conn,$tu);
    $den = mysqli_real_escape_string($conn,$den);
    $he = mysqli_real_escape_string($conn,$he);
    $sql = "INSERT INTO `sotietquidoi`(`BATDAU`, `KETTHUC`, `HESO`) VALUES ('$tu','$den','$he')";
    if(mysqli_query($conn, $sql)===TRUE){
        $ma = mysqli_insert_id($conn);
        $result['ma'] = $ma;
        $result['trangthai'] = 1;
    }
    mysqli_close($conn);
    echo json_encode($result);
    exit();
?>