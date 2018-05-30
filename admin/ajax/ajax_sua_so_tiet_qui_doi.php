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
    'trangthai' => 0
);
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $tu = $_POST['tu'];
    $den = $_POST['den'];
    $he = $_POST['he'];
    $ma = $_POST['ma'];
    $tu = mysqli_real_escape_string($conn,$tu);
    $den = mysqli_real_escape_string($conn,$den);
    $he = mysqli_real_escape_string($conn,$he);
    $ma = mysqli_real_escape_string($conn,$ma);
    $sql = "
        UPDATE `sotietquidoi` 
        SET 
            `BATDAU`='$tu',
            `KETTHUC`='$den',
            `HESO`='$he'
        WHERE `IDS` = '$ma';
    ";
    if(mysqli_query($conn, $sql)===TRUE){
        $row = mysqli_affected_rows($conn);
        if($row==0) $result['trangthai'] = 0;
        else
            $result['trangthai'] = 1;
    }
    mysqli_close($conn);
    echo json_encode($result);
    exit();
?>