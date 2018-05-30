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
$result = Array(
    'trangthai' => 0
);
function themthanhviendanggia($btc){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $sql = "DELETE FROM hoidongxetchon WHERE 1;";
    for($i=0;$i<count($btc);$i++){
        $sql.= "INSERT INTO hoidongxetchon (IDND,NHIEMVU, GHICHU) VALUES ('".mysqli_real_escape_string($conn,$btc[$i][1])."', '".mysqli_real_escape_string($conn,$btc[$i][2])."','".mysqli_real_escape_string($conn,$btc[$i][3])."');";
    }
    if(mysqli_multi_query($conn,$sql)){
        mysqli_close($conn);
        return true;
    }
    return false;
}

if (themthanhviendanggia($_POST['btc'])) {
    $result['trangthai'] = 1;
    echo json_encode($result);
    exit();
}
else
    echo json_encode($result);
?>