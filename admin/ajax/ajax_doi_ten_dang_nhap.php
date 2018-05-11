<?php
include_once("../../config.php");
session_start();
if (isset($_SESSION['tdn']) && isset($_SESSION['pas'])) {
    $ketnoi = new clsKetnoi();
    if (!($ketnoi->checklogin($_SESSION['tdn'],$_SESSION['pas']))) {
        echo '<script type="text/javascript">location.href = "'.$qlkh['HOSTADMIN'].'"</script>';
        exit();
    }
}

$result = Array(
    'trangthai' => '0',
    'thongbao' => ''
);
    $tdn = $_POST['tdn'];
    $idnd = $_POST['idnd'];
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $tdn = mysqli_real_escape_string($conn,$tdn);
    $idnd = mysqli_real_escape_string($conn,$idnd);
    $idnd = intval($idnd);
    $hoi = "
        UPDATE `nguoidung` 
        SET 
            `TENDANGNHAP`='$tdn'
        WHERE 
            `IDND` = '$idnd';
    ";
    if(mysqli_query($conn, $hoi)===TRUE){
        $d = mysqli_affected_rows($conn);
        if ($d>0){
            $result['trangthai'] = '1';
            $_SESSION['tdn'] = $tdn;
        }
        mysqli_close($conn);
    }else{
        $result['thongbao'] = 'Xảy ra lỗi! Vui lòng thử lại sau';
    }
echo json_encode($result);
exit();
?>