<?php
/**
 * Created by PhpStorm.
 * User: Ly Thanh Ngo
 * Date: 19/04/2018
 * Time: 5:03 PM
 */
?>
<?php
if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
include_once("../config.php");
function lay_chuyen_muc(){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT DISTINCT * FROM chuyenmuc ORDER BY IDCM DESC";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}
function linh_vuc_de_tai($iddt){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT TENLV FROM `linhvuckhoahoc` WHERE IDDT = '$iddt' ORDER BY IDLV ASC";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}
?>
