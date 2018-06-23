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
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $btv = $_POST['btv'];
    $sql="";
    for($i=0;$i<count($btv);$i++){
        $idnd = mysqli_real_escape_string($conn,$btv[$i][0]);
        $idnd = intval($idnd);
        $idltk = mysqli_real_escape_string($conn,$btv[$i][1]);
        $idltk = intval($idltk);
        $sql.= "
        UPDATE loaitaikhoan_nguoidung 
        SET 
            IDLTK = '$idltk' 
        WHERE 
            IDND = '$idnd';
    ";
    }
    if(mysqli_multi_query($conn, $sql)===TRUE){
        $result['trangthai'] = 1;
    }
    mysqli_close($conn);
    echo json_encode($result);
    exit();
?>