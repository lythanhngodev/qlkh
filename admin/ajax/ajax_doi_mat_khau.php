<?php
include_once("../../config.php");
session_start();
if (isset($_SESSION['tdn']) && isset($_SESSION['pas']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
    $ketnoi = new clsKetnoi();
    if (!($ketnoi->checklogin($_SESSION['tdn'],$_SESSION['pas']))) {
        trangchu($qlkh['HOSTADMIN']);
        exit();
    }
}else{
    trangchu($qlkh['HOSTADMIN']);
}
$result = Array(
    'trangthai' => '0',
    'thongbao' => ''
);
    $mk = $_POST['mk'];
    $idnd = $_POST['idnd'];
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $mk = mysqli_real_escape_string($conn,$mk);
    $idnd = mysqli_real_escape_string($conn,$idnd);
    $hoi = "
        UPDATE `nguoidung` 
        SET 
            `MATKHAU`='".md5($mk)."'
        WHERE 
            `IDND` = '$idnd'
    ";
    if(mysqli_query($conn, $hoi)===TRUE){
        $d = mysqli_affected_rows($conn);
        if ($d>0){
            $result['trangthai'] = '1';
            $_SESSION['pas'] = $mk;
        }
        mysqli_close($conn);
    }else{
        $result['thongbao'] = 'Xảy ra lỗi! Vui lòng thử lại sau';
    }
echo json_encode($result);
exit();
?>
