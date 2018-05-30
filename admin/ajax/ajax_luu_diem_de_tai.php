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
        $row = mysqli_affected_rows($conn);
        if($row==0) $result['trangthai'] = 0;
        else
            $result['trangthai'] = 1;
    }
    mysqli_close($conn);
    echo json_encode($result);
    exit();
?>