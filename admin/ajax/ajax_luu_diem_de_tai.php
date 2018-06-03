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
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $idnd = $_SESSION['_idnd'];
    $idnd=intval($idnd);
    $ktnd = "SELECT l.TENLTK FROM loaitaikhoan_nguoidung n, loaitaikhoan l WHERE n.IDND = $idnd AND n.IDLTK = l.IDLTK LIMIT 0,1;";
    $kqktnd = mysqli_query($conn,$ktnd);
    $rktnd = mysqli_fetch_array($kqktnd);
    $ltk = $rktnd[0];
    if ($ltk!='admin' && $ltk!='khoahoc') {
        mysqli_close($conn);
        echo json_encode($result);
        exit();
    }
    $dt = $_POST['dt'];
    $diem = $_POST['diem'];
    $diem = mysqli_real_escape_string($conn,$diem);
    $dt = mysqli_real_escape_string($conn,$dt);
    $diem = floatval($diem);
    $dt = intval($dt);
    $sql = "
        UPDATE detai
        SET
          DIEM = '$diem'
        WHERE
          IDDT = '$dt' AND (TRANGTHAI = N'Đang thực hiện' OR TRANGTHAI = N'Đã nghiệm thu')
    ";
    if(mysqli_query($conn, $sql)===TRUE){
        $result['trangthai'] = 1;
    }
    mysqli_close($conn);
    echo json_encode($result);
    exit();
?>