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
    'trangthai' => '0',
    'thongbao' => ''
);
    $tdn = $_POST['tdn'];
    $idnd = $_POST['idnd'];
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $tdn = mysqli_real_escape_string($conn,$tdn);
    $idnd = mysqli_real_escape_string($conn,$idnd);
    $idnd = intval($idnd);
    $hoi = "
        UPDATE `nguoidung` 
        SET 
            `TENDANGNHAP`='$tdn'
        WHERE 
            `IDND` = '$idnd';
    ";
    if(mysqli_query($conn, $hoi)===TRUE){
        $d = mysqli_affected_rows($conn);
        if ($d>0){
            $result['trangthai'] = '1';
        }
        mysqli_close($conn);
    }else{
        $result['thongbao'] = 'Xảy ra lỗi! Vui lòng thử lại sau';
    }
echo json_encode($result);
exit();
?>