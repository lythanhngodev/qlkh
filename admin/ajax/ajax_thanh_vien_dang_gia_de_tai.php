<?php
include_once("../../config.php");
session_start();
if (isset($_SESSION['tdn']) && isset($_SESSION['pas']) && isset($_SESSION['_loaitaikhoan']) && ($_SESSION['_loaitaikhoan']=='admin' || $_SESSION['_loaitaikhoan']=='khoahoc') && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
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
function themthanhviendanggia($btc, $tvdg,$dt){
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $sql = "DELETE FROM xetduyetdetai WHERE IDDT = '$dt';";
    for($i=0;$i<count($btc);$i++)
        $sql.= "INSERT INTO xetduyetdetai (IDDT,IDND,NHIEMVU, GHICHU,LOAIHD) VALUES ('$dt', '".$btc[$i][1]."', '".$btc[$i][2]."','".$btc[$i][3]."', '1');";
    for($i=0;$i<count($tvdg);$i++)
        $sql.= "INSERT INTO xetduyetdetai (IDDT,IDND,NHIEMVU, GHICHU,LOAIHD) VALUES ('$dt', '".$tvdg[$i][1]."', '".$tvdg[$i][2]."','".$tvdg[$i][3]."', '0');";
    if(mysqli_multi_query($conn,$sql)){
        mysqli_close($conn);
        return true;
    }
    return false;
}

if (themthanhviendanggia($_POST['btc'],$_POST['tvdg'], $_POST['dt'])) {
    $result['trangthai'] = 1;
    echo json_encode($result);
    exit();
}
else
    echo json_encode($result);
?>