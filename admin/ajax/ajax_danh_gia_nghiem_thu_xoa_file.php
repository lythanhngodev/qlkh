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
if (isset($_SESSION['tdn']) && isset($_SESSION['pas'])) {
    $ketnoi = new clsKetnoi();
    if (!($ketnoi->checklogin($_SESSION['tdn'],$_SESSION['pas']))) {
        echo '<script type="text/javascript">location.href = "'.$qlkh['HOSTADMIN'].'"</script>';
        exit();
    }
}
else{
    echo '<script type="text/javascript">location.href = "'.$qlkh['HOSTADMIN'].'"</script>';
}
$ketnoi = new clsKetnoi();
$conn = $ketnoi->ketnoi();
$hoi = "UPDATE `xetduyetnghiemthu` SET `FILE`='' WHERE `IDNT` = '".$_POST['dt']."'";
mysqli_query($conn,$hoi);
$file = $_POST['file'];
if(file_exists('../../files/'.$file))
    unlink( '../../files/'.$file );
echo "Đã xóa file vừa tải lên";
exit();
?>