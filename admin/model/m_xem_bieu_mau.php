<?php
/**
 * Created by PhpStorm.
 * User: Ly Thanh Ngo
 * Date: 16/04/2018
 * Time: 11:22 PM
 */
?>
<?php
if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
include_once('../config.php');
function bieu_mau(){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $hoi = "SELECT `IDBM`, `MABM`, `TENBM`, `FILE` FROM `bieumau` ORDER BY MABM ASC";
    $dulieu = mysqli_query($conn, $hoi);
    mysqli_close($conn);
    return $dulieu;
}
?>
