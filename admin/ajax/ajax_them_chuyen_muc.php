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
    'trangthai' => 0,
    'ma' => 0
);
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $linkcm = $ketnoi->to_slug($_POST['ten']).'-cm';
    $loai = $_POST['loai'];
    $sql = "INSERT INTO `chuyenmuc`(`TENCM`,`MOTACM`,`LINKCM`, `LOAICHUYENMUC`) SELECT * FROM (SELECT '".$_POST['ten']."','".$_POST['mota']."','$linkcm', '$loai') AS tam WHERE NOT EXISTS (SELECT * FROM chuyenmuc WHERE TENCM = N'".$_POST['ten']."')";
    if(mysqli_query($conn, $sql)===TRUE){
        $ma = mysqli_insert_id($conn);
        $result['ma'] = $ma;
        $result['trangthai'] = 1;
    }
    mysqli_close($conn);
    echo json_encode($result);
    exit();
?>
