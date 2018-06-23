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
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $linkcm = $ketnoi->to_slug($_POST['ten']).'-cm';
    $sql = "UPDATE `chuyenmuc` SET `TENCM`='".$_POST['ten']."',`MOTACM`='".$_POST['mota']."',`LINKCM`='$linkcm', `LOAICHUYENMUC` = '".$_POST['loai']."' WHERE `IDCM` = '".$_POST['ma']."'";
    if(mysqli_query($conn, $sql)===TRUE){
        $result['trangthai'] = 1;
    }
    mysqli_close($conn);
    echo json_encode($result);
    exit();
?>
