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
?>
