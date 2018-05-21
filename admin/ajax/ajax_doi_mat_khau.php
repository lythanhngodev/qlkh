<?php
/**
 * Created by PhpStorm.
 * User: Ly Thanh Ngo
 * Date: 27/04/2018
 * Time: 10:04 AM
 */
?>
<?php
include_once("../../config.php");
session_start();
if (isset($_SESSION['tdn']) && isset($_SESSION['pas'])) {
    $ketnoi = new clsKetnoi();
    if (!($ketnoi->checklogin($_SESSION['tdn'],$_SESSION['pas']))) {
        echo '<script type="text/javascript">location.href = "'.$qlkh['HOSTADMIN'].'"</script>';
        exit();
    }
}else{
    echo '<script type="text/javascript">location.href = "'.$qlkh['HOSTADMIN'].'"</script>';
}
$result = Array(
    'trangthai' => '0',
    'thongbao' => ''
);
    $mk = $_POST['mk'];
    $idnd = $_POST['idnd'];
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $mk = mysqli_real_escape_string($conn,$mk);
    $idnd = mysqli_real_escape_string($conn,$idnd);
    $hoi = "
        UPDATE `nguoidung` 
        SET 
            `MATKHAU`='".md5($mk)."'
        WHERE 
            `IDND` = '$idnd'
    ";
    if(mysqli_query($conn, $hoi)===TRUE){
        $d = mysqli_affected_rows($conn);
        if ($d>0){
            $result['trangthai'] = '1';
            $_SESSION['pas'] = $mk;
        }
        mysqli_close($conn);
    }else{
        $result['thongbao'] = 'Xảy ra lỗi! Vui lòng thử lại sau';
    }
echo json_encode($result);
exit();
?>
