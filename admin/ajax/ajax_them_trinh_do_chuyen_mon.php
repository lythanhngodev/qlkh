<?php
include_once("../../config.php");
session_start();
if (isset($_SESSION['tdn']) && isset($_SESSION['pas'])) {
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
    $ten = $_POST['ten'];
    $sql = "INSERT INTO `trinhdochuyenmon`(`TENTRINHDO`) SELECT * FROM (SELECT '$ten') AS tam WHERE NOT EXISTS (SELECT * FROM trinhdochuyenmon WHERE `TENTRINHDO` = N'$ten')";
    if(mysqli_query($conn, $sql)===TRUE){
        $ma = mysqli_insert_id($conn);
        $result['ma'] = $ma;
        $result['trangthai'] = 1;
    }
    mysqli_close($conn);
    echo json_encode($result);
    exit();
?>