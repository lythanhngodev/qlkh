<?php
/**
 * Created by PhpStorm.
 * User: Ly Thanh Ngo
 * Date: 16/04/2018
 * Time: 7:32 AM
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
function xoadetai($iddt){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $iddt = intval($iddt);
    $q = "SELECT IDDT FROM detai WHERE IDDT = '$iddt' AND TRANGTHAI != 'Đã nghiệm thu'";
    $eq = mysqli_query($conn,$q);
    $rq = mysqli_num_rows($eq);
    if ($rq == 0) return false;
    $sql = "DELETE FROM `detai` WHERE `IDDT` = '$iddt';";
    $sql.= "DELETE FROM `loaihinhnghiencuu` WHERE `IDDT` = '$iddt';";
    $sql.= "DELETE FROM `linhvuckhoahoc` WHERE `IDDT` = '$iddt';";
    $sql.= "DELETE FROM `thanhviendetai` WHERE `IDDT` = '$iddt';";
    $sql.= "DELETE FROM `tochucthamgia` WHERE `IDDT` = '$iddt';";
    $sql.= "DELETE FROM `tiendodukien` WHERE `IDDT` = '$iddt';";
    $sql.= "DELETE FROM `kinhphi` WHERE `IDDT` = '$iddt';";
    $sql.="DELETE FROM dexuatdetai WHERE IDDT = '$iddt';";
    if(mysqli_multi_query($conn, $sql)===TRUE){
        mysqli_close($conn);
        return true;
    }
    else
        return false;
}
if (xoadetai($_POST['id'])) {
    $result['trangthai'] = 1;
    echo json_encode($result);
    exit();
}
else{
    exit();
}
?>




