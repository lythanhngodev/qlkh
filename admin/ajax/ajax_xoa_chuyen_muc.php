<?php
/**
 * Created by PhpStorm.
 * User: Ly Thanh Ngo
 * Date: 20/04/2018
 * Time: 12:59 PM
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
}else{
    echo '<script type="text/javascript">location.href = "'.$qlkh['HOSTADMIN'].'"</script>';
}

$result = Array(
    'trangthai' => 0
);
$ketnoi = new clsKetnoi();
$conn = $ketnoi->ketnoi();
$sql = "DELETE FROM `chuyenmuc` WHERE `IDCM` = '".$_POST['ma']."'";
if(mysqli_query($conn, $sql)===TRUE){
    $result['trangthai'] = 1;
}
mysqli_close($conn);
echo json_encode($result);
exit();
?>