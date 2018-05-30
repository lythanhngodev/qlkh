<?php
include_once("../../config.php");
include_once ("../mail/guimail.php");
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
    'trangthai' => 0,
    'thongbao' => ''
);
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $xn = $_POST['xn'];
    $sql = "";
    for ($i=0; $i < count($xn) ; $i++) {
        $sql.="DELETE FROM nguoidung WHERE IDND=".$xn[$i][4].";";
        $sql.="DELETE FROM loaitaikhoan_nguoidung WHERE IDND=".$xn[$i][4].";";
    }
    if(mysqli_multi_query($conn, $sql)===TRUE){
        $row = mysqli_affected_rows($conn);
        if($row==0){$result['trangthai'] = 0;}
        else{
            $result['trangthai'] = 1;
        }
    }
    mysqli_close($conn);
    echo json_encode($result);
    exit();
?>