<?php
include_once("../../config.php");
include_once ("../mail/guimail.php");
if($_SERVER['HTTP_X_REQUESTED_WITH'] != 'XMLHttpRequest'){
    trangchu($qlkh['HOSTADMIN']);
}
$mang = array(
    'trangthai' => 0,
    'thongbao' => ''
);
function _guiamil($tieude,$noidung,$mail){
    if(empty($mail)) return false;
    $ketnoi = new clsKetnoi();
    $conn = $ketnoi->ketnoi();
    $tieude = mysqli_real_escape_string($conn,$tieude);
    $noidung = mysqli_real_escape_string($conn,$noidung);
    $mail = mysqli_real_escape_string($conn,$mail);
    $qmail = "SELECT mail,passmail,portmail FROM caidat";
    $email = mysqli_query($conn,$qmail);
    $rmail = mysqli_fetch_row($email);
    mysqli_close($conn);
    $body=$noidung;
    if(guimail($tieude, $body, $mail,$rmail[0],$rmail[1],$rmail[2])) return true;
    return false;
}
if (_guiamil($_POST['tieude'],$_POST['noidung'],$_POST['mail'])) {
    $mang['trangthai'] = 1;
    $mang['thongbao'] = 'Gửi mail thành công';
}
else{
    $mang['thongbao'] = "Xảy ra lỗi, vui lòng thử lại";
}
echo json_encode($mang);
exit();
?>