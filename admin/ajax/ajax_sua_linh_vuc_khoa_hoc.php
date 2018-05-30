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
    $ten = $_POST['ten'];
    $ma = $_POST['ma'];
    $ten = mysqli_real_escape_string($conn,$ten);
    $ma = mysqli_real_escape_string($conn,$ma);
    $sql = "
        UPDATE linhvuc 
        SET 
            TENLINHVUC = '$ten' 
        WHERE 
            IDLV = '$ma' AND 
            (NOT EXISTS (SELECT * FROM (SELECT * FROM linhvuc) AS t WHERE t.TENLINHVUC = N'$ten'))
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