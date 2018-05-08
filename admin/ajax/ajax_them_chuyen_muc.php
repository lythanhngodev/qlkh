<?php
/**
 * Created by PhpStorm.
 * User: Ly Thanh Ngo
 * Date: 20/04/2018
 * Time: 9:43 AM
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
$result = Array(
    'trangthai' => 0,
    'ma' => 0
);
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $linkcm = $ketnoi->to_slug($_POST['ten']).'-cm';
    $sql = "INSERT INTO `chuyenmuc`(`TENCM`,`MOTACM`,`LINKCM`) SELECT * FROM (SELECT '".$_POST['ten']."','".$_POST['mota']."','$linkcm') AS tam WHERE NOT EXISTS (SELECT * FROM chuyenmuc WHERE TENCM = N'".$_POST['ten']."')";
    if(mysqli_query($conn, $sql)===TRUE){
        $ma = mysqli_insert_id($conn);
        $result['ma'] = $ma;
        $result['trangthai'] = 1;
    }
    mysqli_close($conn);
    echo json_encode($result);
    exit();
?>
