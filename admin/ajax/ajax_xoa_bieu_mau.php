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
$ma = $_POST['ma'];
$ten = $_POST['file'];
$result = Array(
    'trangthai' => '1',
    'thongbao' => ''
);
        $ketnoi = new clsKetnoi();
        $conn = $ketnoi->ketnoi();
        // không có lỗi
        $result['tenfile']=$ten;
        $hoi = "DELETE FROM `bieumau` WHERE IDBM = '$ma'";
        if(mysqli_query($conn, $hoi)===TRUE){
            unlink("../../files/".$ten);
            mysqli_close($conn);
        }else{
            $result['trangthai'] = '0';
        }
    echo json_encode($result);
    exit();
?>

