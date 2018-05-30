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
$file = $_POST['file'];
if(file_exists('../../files/'.$file))
    unlink( '../../files/'.$file );
echo "Đã xóa file vừa tải lên";
exit();
?>