<?php
if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
include_once("../config.php");
function lay_tin_tuc(){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $query = "SELECT IDBV, TENBV, MOTA, NGAYDANG, HIENTHI FROM baiviet Order by IDBV desc";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}
?>