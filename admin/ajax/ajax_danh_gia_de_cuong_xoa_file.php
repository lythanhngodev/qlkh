<?php
/**
 * Created by PhpStorm.
 * User: Ly Thanh Ngo
 * Date: 12/04/2018
 * Time: 9:42 AM
 */
?>
<?php
include_once("../../config.php");
session_start();
if (isset($_SESSION['tdn']) && isset($_SESSION['pas']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
    $ketnoi = new clsKetnoi();
    if (!($ketnoi->checklogin($_SESSION['tdn'],$_SESSION['pas']))) {
        trangchu($qlkh['HOSTADMIN']);
        exit();
    }
}
else{
    trangchu($qlkh['HOSTADMIN']);
}
$ketnoi = new clsKetnoi();
$conn = $ketnoi->ketnoi();
$hoi = "UPDATE `xetduyetdetai` SET `FILE`='' WHERE `IDXD` = '".$_POST['dt']."'";
mysqli_query($conn,$hoi);
$file = $_POST['file'];
if(file_exists('../../files/'.$file))
    unlink( '../../files/'.$file );
echo "Đã xóa file vừa tải lên";
exit();
?>